<?php

namespace App\Http\Controllers\Admin\Catalog\Base;

use App\Http\Controllers\Core\AdminController;
use App\Libraries\Template;
use App\Models\Card;
use App\Models\CardImage;
use App\Models\CardDiscount;
use App\Models\CardFeature;
use App\Models\CardOption;
use App\Models\CardQuantity;
use App\Models\CardPrice;
use App\Models\CardImageBubble;
use App\Models\Service;
use App\Models\CardCategory;
use Input, Validator, Request, Redirect;

class AbstractCardController extends AdminController {
    protected $menu = '';
    protected $page = '';
    protected $svc_type = 0;
    protected $page_title = ''; 
    
    protected $list_route = '';
    protected $base_route = '';
    public function __construct()
    {
        parent::__construct();
        
        $this->data['base_route'] = $this->base_route;        
        
        $this->restrict('product.card.view');
    }
    
    ////////////////////////////////////////////////////////////////
    //Action Methods
    ////////////////////////////////////////////////////////////////
    public function index()
    {
        //get orders
        $this->saveSorting();
        
        $order = Request::input('order');
        $orderby = Request::input('orderby') == 'asc'? 'asc': 'desc';
        switch($order)
        {
            case 'name':
            case 'slug':
            case 'created_at':
            case 'pricing':
                break;
            case 'category':
                $order = 'card_categories.name';
                break;
            
            default:
                $order = 'created_at';
                $orderby = 'desc';
                break;
        }
        
        $rows = Card::select('cards.*')
            ->join('card_categories', 'card_categories.id', '=', 'cards.category_id')
            ->where('cards.service_id', $this->svc_type)
            ->orderBy($order, $orderby)  
            ->paginate($this->list_limit);
        
        return $this->view('catalog.card.product.index', compact('rows'));   
    }
    
    public function create()
    {
        $categories = CardCategory::where('service_id', $this->svc_type)
            ->orderBy('name')
            ->lists('name', 'id');
            
        return $this->view('catalog.card.product.create', compact('categories'));
    }
    
    public function edit($id)
    {
        $categories = CardCategory::where('service_id', $this->svc_type)
            ->orderBy('name')
            ->lists('name', 'id');
            
        $row = Card::find($id);
        
        return $this->view('catalog.card.product.edit', compact('row', 'categories'));
    }
    
    public function delete($id)
    {
        $this->restrict('product.card.manage');
        
        $row = Card::destroy($id);
        
        Template::set_message('Card has been removed.', 'warning');
        
        return redirect($this->listUrl());
    }
    
    public function price($id)
    {
        $row = Card::find($id);    
         
        return $this->view('catalog.card.product.prices', compact('row'));
    } 
    
    public function image($id)
    {
        $image = CardImage::find($id);    
        $product = $image->card;
         
        $this->page_title = $image->card->name;
        return $this->view('catalog.card.product.image', compact('image', 'product'));
    }
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////
    public function store($id = 0)
    {            
        $this->restrict('product.card.manage');
                                
        //validate posts
        $rules = [
            'card_name'     => 'required', 
            'category'      => 'required',
            'weight'        => 'numeric',
            'promotion_percent' => 'numeric',
        ];
        
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $card = null;
        
        if($id == 0)
        {
            $card = new Card;
        }
        else
        {
            $card = Card::find($id);
        }
        
        $card->service_id           = $this->svc_type;
        $card->category_id          = Input::get('category');
        $card->name                 = Input::get('card_name');
        $card->description          = Input::get('card_description');
        $card->turnaround_time      = Input::get('turnaround_time');
        $card->guide_link           = prep_url(Input::get('guide_link'));
        $card->atleast_one          = Input::get('atleast_one');
        $card->meta_tag             = Input::get('meta_tag');
        $card->meta_description     = Input::get('meta_description');
        $card->weight               = Input::get('weight');
        $card->promotion_start_date = Input::get('promotion_start_date') ? Input::get('promotion_start_date') : NULL;
        $card->promotion_end_date   = Input::get('promotion_end_date') ? Input::get('promotion_end_date') : NULL;
        $card->promotion_percent    = Input::get('promotion_percent') ? Input::get('promotion_percent') : NULL;
        $status = $card->save();
        
        // if creating is failed
        if(!$status)
        {
            Template::set_message(trans('msg.has_error'), 'danger');
            
            return redirect()
                ->back()
                ->withInput();
        }
        
        // Move upload images files
        $this->_process_images($card->id);
        
        // insert and update discount data
        $this->_process_discount($card->id);
        
        // insert/update features
        $this->_process_feature($card->id);
        
        //check if require updating of pricing table
        if($card->quantities->isEmpty() || $card->prices->isEmpty())
        {
            $card->pricing = STATUS_INACTIVE;
            $card->save();
        }
        
        if($id == 0)
        {
            Template::set_message('New product is created.', 'success');
        }
        else
        {
            Template::set_message('Card is updated.', 'success');     
        }
        
        //return redirect($this->controller_uri);
        return Redirect::route("$this->base_route.edit", $card->id);
    }  
    
    public function postEditPriceTable($id)
    {
        $quantity = Input::get('quantity');
        
        if(Input::has('quantity_id'))
        {
            $quantity_id = Input::get('quantity_id');
            if(isset($_POST['btn-remove-quantity']))
            {
                CardQuantity::destroy($quantity_id);
            }
            else
            {
                $row = CardQuantity::find($quantity_id);
                $row->number = Input::get('quantity');
                $row->save();
                
                $this->_save_price_table($id, $quantity_id, 'update');
            }
        }
        else
        {
            $qty_row = new CardQuantity;
            $qty_row->card_id = $id;
            $qty_row->number = $quantity;
            $qty_row->save();
            
            $quantity_id = $qty_row->id;
            
            $this->_save_price_table($id, $quantity_id, 'insert');
        }
        
        $card = Card::find($id);
        $card->pricing = STATUS_ACTIVE;
        $card->save();
        
        Template::set_message('Pricing table is updated', 'success');
        
        return Redirect::route("$this->base_route.price", $id);
    }
    
    public function storeBubbles()
    {
        $result = array('status' => false, 'index' => 0, 'action' => 'create', 'link' => '');
        
        $row = null;
        if(!Input::get('bubble-id')) 
        {
            $row = new CardImageBubble;
            
            $row->card_id = Input::get('product_id');        
            $row->image_id= Input::get('image_id');        
            $row->posx  = Input::get('bubble-posx');
            $row->posy  = Input::get('bubble-posy');
        }
        else 
        {
            $row = CardImageBubble::find(Input::get('bubble-id'));
            if(!isset($row->id)) {
                echo json_encode($result);
                exit;
            }
            
            $result['action'] = 'update';
        }
        
        $row->label = Input::get('bubble-label');        
        $row->link  = prep_url(Input::get('bubble-link'));
        $row->save();
        
        $result['status'] = true;
        $result['index'] = $row->id;
        $result['link'] = $row->link;
        
        return json_encode($result);
    }
    
    public function removeBubble() 
    {
        $bubbleId = Input::get('bubble-id');
        
        CardImageBubble::destroy($bubbleId);
        
        echo 'true';
        exit;    
    }
    
    public function repositionBubble()
    {
        $bubbleId = Input::get('bubble-id');
        
        $row = CardImageBubble::find($bubbleId);
        $row->posx = Input::get('bubble-posx');
        $row->posy = Input::get('bubble-posy');
        $row->save();
    }
    ////////////////////////////////////////////////////////////////
    // Private Methods
    ////////////////////////////////////////////////////////////////
    private function _process_images($card_id)
    {
        $jdata = json_decode(Input::get('image_data'));
        foreach($jdata as $d)
        {
            // if image is new, then insert it to table
            if($d->type == 'new')
            {
                // Move images to right place
                if(!file_exists(public_path($d->src))) continue;
                if($d->remove == '1') continue;
                
                $imagePath = str_replace('tmp/', '', $d->src);
                $targetPath = public_path(dirname($imagePath));
                
                if(!mkpath($targetPath)) continue;
                @rename(public_path($d->src), public_path($imagePath));

                $image = new CardImage;
                $image->card_id = $card_id;
                $image->image = $imagePath;
                $image->label = $d->label;
                $image->sort = $d->sort;
                $image->main = $d->main;
                $image->save();
            }
            // else if image is exist in table, then update it
            else
            {
                if($d->remove == '1') 
                {
                    CardImage::destroy($d->id); 
                }
                else
                {   
                    $image = CardImage::find($d->id);
                    $image->label = $d->label;
                    $image->sort = $d->sort;
                    $image->main = $d->main;
                    $image->save();
                }
            }
        }  
    } 
    
    private function _process_discount($card_id)   
    {
        $jdata = json_decode(Input::get('discount_data'));
        foreach($jdata as $d)
        {
            if($d->type == 'new')
            {
                if($d->remove == '1') continue;
                
                $discount = new CardDiscount;
                $discount->card_id = $card_id;
                $discount->sets = $d->set;
                $discount->percent = $d->percent;
                $discount->save();
            }
            else
            {
                if($d->remove == '1') 
                {
                    CardDiscount::destroy($d->id); 
                }
                else
                {
                    $discount = CardDiscount::find($d->id);
                    $discount->sets = $d->set;
                    $discount->percent = $d->percent;
                    $discount->save();  
                }    
            }
        }    
    }
    
    private function _process_feature($card_id)   
    {
        $jdata = json_decode(Input::get('feature_data'));
        foreach($jdata as $d)
        {      
            if($d->type == 'new')
            {
                if($d->remove == '1') continue;
                
                //add feature
                $feature = new CardFeature;
                $feature->card_id = $card_id;
                $feature->name = $d->name;
                $feature->link = prep_url($d->link);
                $feature->type = $d->mode == DROPDOWN ? DROPDOWN : CHECKBOX;
                $feature->sort = $d->sort == '' ? 0 : $d->sort;
                $feature->is_print  = $d->print;
                $feature->both_side = $d->side;
                $feature->is_required = $d->required;
                $feature->save();
                
                //add options
                $this->_process_option($d->options, $card_id, $feature->id); 
            }
            else
            {
                if($d->remove == '1') 
                {
                    CardFeature::destroy($d->id); 
                }
                else
                {
                    //update feature name
                    $feature = CardFeature::find($d->id);
                    $feature->name = $d->name;
                    $feature->link = prep_url($d->link);
                    $feature->sort = $d->sort;
                    $feature->is_print      = $d->print;
                    $feature->both_side     = $d->side;
                    $feature->is_required   = $d->required;
                    $feature->save();
                    
                    //add/update options
                    $this->_process_option($d->options, $card_id, $d->id);
                }    
            }
        }    
    }
    
    private function _process_option($option_data, $card_id, $feature_id)
    {
        //add options
        foreach($option_data as $op)
        {
            if($op->type == 'new')
            {
                if($op->remove == '1') continue;
                
                $option = new CardOption;
                $option->card_id = $card_id;
                $option->feature_id = $feature_id;
                $option->name = $op->name;
                $option->sort = $op->sort == '' ? 0 : $op->sort;
                $option->price = $op->price;
                $option->price_type = $op->priceType;
                $option->save();
            }
            else
            {
                if($op->remove == '1') 
                {
                    CardOption::destroy($op->id); 
                }
                else
                {
                    $option = CardOption::find($op->id);
                    $option->name = $op->name;
                    $option->sort = $op->sort == '' ? 0 : $op->sort;
                    $option->price = $op->price;
                    $option->price_type = $op->priceType;
                    $option->save();
                }
            }   
        }       
    }
    
    private function _save_price_table($card_id, $quantity_id, $type)
    {
        $prices = Input::get('option-price');
        
        foreach($prices as $feature_id => $opt)
        {
            foreach($opt as $opt_id => $opt_price)
            {
                if($type == 'insert')
                {
                    $price = new CardPrice;
                    $price->card_id = $card_id;
                    $price->quantity_id = $quantity_id;
                    $price->feature_id = $feature_id;
                    $price->option_id = $opt_id;
                    $price->price = $opt_price;
                    $price->save();
                }
                else
                {
                    $row = CardPrice::where('card_id', $card_id)
                        ->where('quantity_id', $quantity_id)
                        ->where('option_id', $opt_id)
                        ->first();
                    
                    if(count($row) > 0)
                    {
                        $row->price = $opt_price;
                        $row->save();
                    }
                    else
                    {
                        $price = new CardPrice;
                        $price->card_id = $card_id;
                        $price->quantity_id = $quantity_id;
                        $price->feature_id = $feature_id;
                        $price->option_id = $opt_id;
                        $price->price = $opt_price;
                        $price->save();
                    }
                }
            }   
        }
    }
}