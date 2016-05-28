<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Core\FrontController;
use App\Libraries\Template;
use App\Libraries\MyCart;
use App\Models\Card;
use App\Models\CardDiscount;
use App\Models\CardQuantity;
use App\Models\CardOption;
use App\Models\CardPrice;
use Input, Redirect, Request;

class CardController extends FrontController {

    ////////////////////////////////////////////////////////////////
    //Action Methods
    ////////////////////////////////////////////////////////////////
    public function show()
    {
        $slug = Request::segment(2);
        $product = Card::where('slug', $slug)->first();
        
        $this->page_title = $product->name;
        return $this->view('catalog.card.product.show', compact('product'));
    }
    
    public function upload()
    {
        if(!Input::has('product_id'))
        {
            if(($saved = MyCart::hasSavedCard()) === false)
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
        $product = Card::find($productId);
        if(!isset($product->id))
        {
            Template::set_message('Selected proudct is not exist.', 'danger');
            return redirect('/');
        }
        
        //normal quantity                   
        if(Input::get('custom_set') != '1') 
        {
            if(!Input::has('quantity') || !Input::has('product_options'))
            {
                Template::set_message('Please select quantity and features.', 'danger');
                return Redirect::route($product->getUrl());
            }
            
            //check options if they are valid
            $discountId = Input::has('discount') ? Input::get('discount') : 0;
            $quantityId = Input::get('quantity');
            $options    = Input::get('product_options');
            if(!$this->_checkIfValidCard($productId, $discountId, $quantityId, $options))
            {
                Template::set_message(trans('msg.has_error'), 'danger');
                return Redirect::route($product->getUrl());
            }
            
            //save posted options to session
            $data = [
                'product_id'=> $productId,
                'discount'  => $discountId,
                'quantity'  => $quantityId, 
                'product_options' => $options,
                'reference_order_id' => Input::get('reference_order_id'),
            ];
            MyCart::saveCard($data);
        }
        else
        {
            $quantities = Input::get('custom-quantity');
            $names      = Input::get('custom-name');
            $options    = Input::get('product_options');
            
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
                
                if(!$this->_checkIfValidCard($productId, 0, $quantityId, $options))
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
                'product_options' => $options,
                'reference_order_id' => Input::get('reference_order_id'),
            ];
            MyCart::saveCard($data);  
        }
        
        $this->page_title = 'Product File Upload';
        return $this->view('catalog.card.product.upload', compact('product'));        
    }
    
    ////////////////////////////////////////////////////////////////
    // Ajax Methods
    ////////////////////////////////////////////////////////////////
    public function ajaxUpdatePrice()
    {
        $productId  = Input::get('product_id');
        $options    = Input::get('product_options');
        $product    = Card::find($productId);
        
        $discountPercent = 0;
        $price = 0;
        $cards = 0;
         
        if(Input::get('custom_set') != '1') 
        {
            //normal quantity
            $discountId = Input::get('discount');
            $quantityId = Input::get('quantity');
            
            $discount = CardDiscount::find($discountId);    
            $quantity = CardQuantity::find($quantityId);
            
            $price  = 0;
            $sets   = 1;
            
            if(isset($product->id) && isset($quantity->id) && ($quantity->card_id == $productId))
            {
                //if sets is selected
                if(isset($discount->id))
                {
                    $sets = $discount->sets;
                    $discountPercent = min($discount->percent, 100);
                } 
                
                //calculate option prices
                $price = $this->_priceWithOptions($productId, $quantityId, $options);
                $price = $sets * $price;
                $cards = $sets * $quantity->number;
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
                    $quantity = CardQuantity::find($quantityId);
                    if(!isset($quantity->id)) continue;
                    
                    //calculate option prices
                    $price += $this->_priceWithOptions($productId, $quantityId, $options);   
                    $cards += $quantity->number;
                }  
                
                $discountPercent = CardDiscount::getSetDiscount($productId, count($quantities));
            }                
        }
        
        //get max discountPercent between discountSet and promotion discount
        $discountPercent = max($discountPercent, $product->getPromotionDiscount());
        $price = $price * (100 - $discountPercent) / 100;
        
        return $this->view('catalog.card.product.price', compact('price', 'discountPercent', 'cards'));        
        exit;
    }
    
    ////////////////////////////////////////////////////////////////
    // Private Methods
    ////////////////////////////////////////////////////////////////
    private function _checkIfValidCard($productId, $discountId, $quantityId, $options)
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
        
        if(!is_array($options))
        {
            return false;
        }

        foreach($options as $optId)
        {
            if(!is_array($optId))
            {
                $optionRow = CardOption::find($optId);
                if(!isset($optionRow->id) || $optionRow->card_id != $productId)
                {
                    return false;
                }
            }
            else
            {
                $lists = array();
                if(isset($optId['front'])) $lists = $optId['front'];
                else if(isset($optId['back'])) $lists = $optId['back'];
                
                foreach($lists as $li)
                {
                    $optionRow = CardOption::find($li);
                    if(!isset($optionRow->id) || $optionRow->card_id != $productId)
                    {
                        return false;
                    }    
                }
            }
        }
        return true;
    }
    
    private function _priceWithOptions($productId, $quantityId, $options)
    {
        $price = 0;
        $percent = 0;
        if(is_array($options))
        {
            foreach($options as $ftId => $optId)
            {        
                if(!is_array($optId))
                {
                    $optionRow = CardOption::find($optId);
                    if(!isset($optionRow->id) || $optionRow->card_id != $productId) continue;
                    
                    if($optionRow->price_type == PRICE_FIXED)                    
                        $price += CardPrice::price($productId, $quantityId, $ftId, $optId);
                    else
                        $percent += CardPrice::price($productId, $quantityId, $ftId, $optId);
                }
                else
                {
                    foreach($optId as $side => $lists)
                    {
                        if(($side != FRONTSIDE && $side != BACKSIDE && $side != BOTHSIDE) || !is_array($lists)) continue;
                        
                        foreach($lists as $li)
                        {
                            $optionRow = CardOption::find($li);
                            if(!isset($optionRow->id) || $optionRow->card_id != $productId) continue;

                            if($optionRow->price_type == PRICE_FIXED)                    
                                $price += CardPrice::price($productId, $quantityId, $ftId, $li);
                            else
                                $percent += CardPrice::price($productId, $quantityId, $ftId, $li);
                        }
                    }
                }
            }
        }   
        
        if($percent > 0)
        {
            $price += $price * $percent / 100;
        }
        
        return $price;    
    }
}