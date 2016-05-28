<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Core\FrontController;
use App\Libraries\Template;
use App\Libraries\MyCart;
use App\Models\CardTemplate;
use App\Models\CardTemplateTag;
use App\Models\Card;
use App\Models\CardDiscount;
use App\Models\CardQuantity;
use App\Models\Tag;
use App\Models\Service;

use Input, Request, Redirect, Session;
use DB;

class TemplateController extends FrontController {

    private $_pageLimit = 9;
    
    ////////////////////////////////////////////////////////////////
    // Action Methods
    ////////////////////////////////////////////////////////////////
    public function invitation()
    {
        //get all cards
        $cards = Card::orderBy('name')->get();
        
        //get all tags
        $tags = Tag::where('type', 1)
            ->orderBy('name')
            ->get(); 
        
        $service = Service::find(SVC_INVITATION_TEMPLATE);
        $serviceType = SVC_INVITATION_TEMPLATE;
        
        $instance = $this->_getInstance($serviceType);
        $templates = $instance->paginate($this->_pageLimit);
        $totalCount = $instance->get()->count();
                
        $this->page_title = 'INVITATION CARD TEMPLATES';
        return $this->view('catalog.template.product.total', compact('templates', 'cards', 'tags', 'service', 'serviceType', 'totalCount'));
    } 
    
    public function business()
    {
        //get all cards
        $cards = Card::orderBy('name')->get();
        
        //get all tags
        $tags = Tag::where('type', 1)
            ->orderBy('name')
            ->get(); 
        
        $service = Service::find(SVC_BUSINESS_TEMPLATE);
        $serviceType = SVC_BUSINESS_TEMPLATE;
        
        $instance = $this->_getInstance($serviceType);
        $templates = $instance->paginate($this->_pageLimit);
        $totalCount = $instance->get()->count();
                       
        $this->page_title = 'BUSINESS CARD TEMPLATES';
        return $this->view('catalog.template.product.total', compact('templates', 'cards', 'tags', 'service', 'serviceType', 'totalCount'));
    } 
    
    public function show()
    {
        $slug = Request::segment(2);
        $product = CardTemplate::where('slug', $slug)->first();
        
        $this->page_title = $product->name;
        return $this->view('catalog.template.product.show', compact('product'));
    }
    
    public function upload()
    {
        if(!Input::has('product_id'))
        {
            if(($saved = MyCart::hasSavedTemplate()) === flase)
            {
                return redirect('/');     
            }
            else
            {
                //set post values from session
                if(is_array($saved) && isset($saved['product_id']))
                {
                    Input::replace($saved);
                }                
            }
        }   
        
        $productId = Input::get('product_id');
        $product = CardTemplate::find($productId);
        if(!isset($product->id))
        {
            Template::set_message(trans('msg.has_error'), 'danger');
            return redirect('/');
        }
        
        //normal quantity                   
        if(Input::get('custom_set') != '1') 
        {
            if(!Input::has('quantity'))
            {
                Template::set_message('Please select quantity.', 'danger');
                return Redirect::route('template.product.show', $product->slug);
            }            
            
            //check options if they are valid
            $discountId = Input::has('discount') ? Input::get('discount') : 0;
            $quantityId = Input::get('quantity');
            if(!$this->_checkIfValidTemplate($product->card->id, $discountId, $quantityId))
            {
                Template::set_message(trans('msg.has_error'), 'danger');
                return Redirect::route('template.product.show', $product->slug);
            }
            
            //save posted options to session
            $data = [
                'product_id'=> $productId,
                'discount'  => $discountId,
                'quantity'  => $quantityId,
                'reference_order_id' => Input::get('reference_order_id'),
            ];
            MyCart::saveTemplate($data);
        }
        else
        {
            $quantities = Input::get('custom-quantity');
            $names      = Input::get('custom-name');
            
            if(count($quantities) != count($names))
            {
                Template::set_message(trans('msg.has_error'), 'danger');
                return Redirect::route($product->getUrl());   
            }
                 
            //make array with name and quantity
            //and save it
            $qtyDate = array();
            foreach($quantities as $i => $quantityId)
            {
                $setName = $names[$i];
                if(trim($setName) == '') 
                {
                    Template::set_message('Custom set name is empty.', 'danger');
                    return Redirect::route($product->getUrl());
                }
                
                if(!$this->_checkIfValidTemplate($product->card->id, 0, $quantityId))
                {
                    Template::set_message(trans('msg.has_error'), 'danger');
                    return Redirect::route($product->getUrl());
                }
                
                $qtyDate[] = array('name' => $setName, 'quantity' => $quantityId);
            } 
            
            //save posted options to session
            $data = [
                'product_id'=> $productId,
                'discount'  => 0,
                'quantity'  => $qtyDate,
                'reference_order_id' => Input::get('reference_order_id'),
            ];
            MyCart::saveTemplate($data);  
        }
        
        $this->page_title = 'Template File Upload';
        return $this->view('catalog.template.product.upload', compact('product'));        
    }
    
    ////////////////////////////////////////////////////////////////
    // Ajax Methods
    ////////////////////////////////////////////////////////////////
    public function ajaxUpdatePrice()
    {
        $templateId = Input::get('product_id');   
        $template = CardTemplate::find($templateId);
        
        $price = 0;
        $sets = 1;
        $discountPercent = 0;
        
        if(Input::get('custom_set') != '1') 
        {
            //normal quantity
            
            $discountId = Input::get('discount');   
            $quantityId = Input::get('quantity');       
            
            $discount = CardDiscount::find($discountId);
            $quantity = CardQuantity::find($quantityId);
            if(isset($template->id) && isset($quantity->id))
            {
                $sets = 1;
                $basePrice = $template->basePrice($quantityId);
                
                if(isset($discount->id))
                {
                    $discountPercent = min($discount->percent, 100);
                    $sets = $discount->sets;
                }

                $price = $basePrice * $sets;     
            }
        }
        else
        {
            //get custom set's quantities
            $quantities = Input::get('custom-quantity');
            if(is_array($quantities))
            {
                foreach($quantities as $quantityId)
                {
                    //calculate option prices
                    $price += $template->basePrice($quantityId);    
                }  
                
                $discountPercent = CardDiscount::getSetDiscount($template->card_id, count($quantities));           
            }           
        }
        
        $discountPercent = max($discountPercent, $template->getPromotionDiscount());
        $price = $price * (100 - $discountPercent) / 100;     
        
        echo format_currency($price);
    }
    
    public function ajaxUpdateSorting()
    {
        $sorting = Input::get('sorting');
        
        Session::set('template_sorting', $sorting);
        Session::save();
    }
    
    ////////////////////////////////////////////////////////////////
    // Private Methods
    ////////////////////////////////////////////////////////////////
    private function _checkIfValidTemplate($productId, $discountId, $quantityId)
    {         
        if($discountId != 0)
        {
            $discountRow = CardDiscount::find($discountId);
            if(!isset($discountRow->id) || $discountRow->card_id != $productId)
            {
                return false;
            }    
        }
        
        $quantityRow = CardQuantity::find($quantityId);
        if(!isset($quantityRow->id) || $quantityRow->card_id != $productId)
        {
            return false;                              
        } 
         
        return true;
    }
    
    private function _getInstance($serviceType)
    {     
        //get where conditions
        $instance = null;
        if(Request::has('card'))
        {
            //get card by slug at first
            $card = Card::findBySlug(Request::get('card'));
            $cardId = isset($card->id) ? $card->id : 0;

            //get templates by card type
            $instance = CardTemplate::where('card_id', $cardId)
                ->where('service_id', $serviceType);
                
        }
        else if(Request::has('tag'))
        {
            //get templates by tag
            $cardIds = array();
            $tag = Request::get('tag');
            $tagRow = Tag::where('name', $tag)->first();
            if(isset($tagRow->id))
            {
                $cardIds = CardTemplateTag::where('tag_id', $tagRow->id)
                    ->groupBy('template_id')
                    ->lists('template_id');
            }
            
            $instance = CardTemplate::whereIn('id', $cardIds)
                ->where('service_id', $serviceType);
        }
        else
        {
            //without condition
            $instance = CardTemplate::where('service_id', $serviceType);
        }      
        
        //ger order
        $order = 'name';
        $orderBy = 'asc';
        $orderKey = Session::get('template_sorting');
        switch($orderKey)
        {     
            case SORTBY_NAME_ZA:
                $order = 'name';
                $orderBy = 'desc';
                break;                  
            case SORTBY_NEWEST:
                $order = 'created_at';
                $orderBy = 'asc';
                break;                  
            case SORTBY_OLDEST:
                $order = 'created_at';
                $orderBy = 'desc';
                break; 
            case SORTBY_POPULARITY:
                $order = 'purchased';
                $orderBy = 'desc';
                break;                  
            case SORTBY_NAME_AZ:
            default:
                $order = 'name';
                $orderBy = 'asc';
                break;
        } 
        $instance->orderBy($order, $orderBy);
        
        $this->data['sorting'] = $orderKey;
        
        return $instance; 
    }
}