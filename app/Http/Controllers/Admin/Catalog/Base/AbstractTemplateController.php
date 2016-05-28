<?php

namespace App\Http\Controllers\Admin\Catalog\Base;

use App\Http\Controllers\Core\AdminController;
use App\Libraries\Template;
use App\Models\Card;
use App\Models\CardTemplate;
use App\Models\CardTemplateImage;
use App\Models\CardTemplateOption;
use App\Models\CardTemplateTag;
use App\Models\CardTemplateImageBubble;
use App\Models\Tag;

use Input, Validator, Request, Redirect;

class AbstractTemplateController extends AdminController {

    protected $menu = '';
    protected $page = '';
    protected $svc_type = 0;
    protected $card_type= 0;
    protected $page_title = ''; 
    
    protected $list_route = '';
    protected $base_route = '';
    public function __construct()
    {
        parent::__construct();
        
        $this->data['base_route'] = $this->base_route;
        
        $this->restrict('product.template.view');
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
                break;
            case 'card':
                $order = 'cards.name'; 
                break;
            
            default:
                $order = 'created_at';
                $orderby = 'desc';
                break;
        }
        
        $rows = CardTemplate::select('templates.*')
            ->join('cards', 'cards.id', '=', 'templates.card_id')
            ->where('templates.service_id', $this->svc_type)
            //->where('templates.status', STATUS_ACTIVE)
            ->orderBy($order, $orderby)
            ->paginate($this->list_limit);
        
        return $this->view('catalog.template.product.index', compact('rows')); 
    }
    
    public function create()
    {      
        //get all cards
        $cards = Card::where('service_id', $this->card_type)
            ->orderBy('name', 'asc')
            ->get();
        
        return $this->view('catalog.template.product.create', compact('cards'));
    }
    
    public function edit($id)
    {
        //get all cards
        $cards = Card::where('service_id', $this->card_type)
            ->orderBy('name', 'asc')
            ->get();
        
        //get current row
        $row = CardTemplate::find($id);
        
        return $this->view('catalog.template.product.edit', compact('row', 'cards'));
    }
    
    public function delete($id)
    {
        $this->restrict('product.template.manage');
        
        $row = CardTemplate::destroy($id);
        
        Template::set_message('Card Template has been removed.', 'warning');
        
        return redirect($this->listUrl());
    }
    
    public function image($id)
    {
        $image = CardTemplateImage::find($id);  
        $product = $image->template;  
         
        $this->page_title = $image->template->name;
        return $this->view('catalog.card.product.image', compact('image', 'product'));
    }
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////    
    public function store($id = 0)
    {       
        $this->restrict('product.template.manage');
        
        //validate posts
        $rules = [
            'card_id'           => 'required',
            'template_name'     => 'required', 
            'feature'           => 'required', 
            'promotion_percent' => 'numeric',
        ];
        
        $messages = [
            'card_id.required' => 'Please select one of card.',
        ];
        
        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        if($id == 0)
        {
            $template = new CardTemplate;
        }
        else
        {
            $template = CardTemplate::find($id);
        }
         
        // Update row
        $template->service_id           = $this->svc_type;
        $template->name                 = Input::get('template_name');
        $template->description          = Input::get('template_description');
        $template->turnaround_time      = Input::get('turnaround_time');
        $template->meta_tag             = Input::get('meta_tag');
        $template->meta_description     = Input::get('meta_description');
        $template->promotion_start_date = Input::get('promotion_start_date') ? Input::get('promotion_start_date') : NULL;
        $template->promotion_end_date   = Input::get('promotion_end_date') ? Input::get('promotion_end_date') : NULL;
        $template->promotion_percent    = Input::get('promotion_percent') ? Input::get('promotion_percent') : NULL;
        $template->card_id              = Input::get('card_id');
        
        //if option changed
        if(Input::get('is_product_changed'))
        {
            $template->template_uid     = $this->_get_template_id($template->card->name, $id);
        }
        
        //$template->status               = STATUS_ACTIVE;
        $status = $template->save();
        
        // Move upload images files
        $this->_process_images($template->id);
        
        //
        $this->_process_tags($template->id);
        
        //if product is changed
        if(Input::get('is_option_changed'))
        {
            // Process options
            $this->_process_options($template->id);
        }
        
        // Set update message
        if(!$status)
        {
            Template::set_message(trans('msg.has_error'), 'danger');
        }
        
        if($id == 0)
        {
            Template::set_message('New Template is created.', 'success');
        }
        else
        {
            Template::set_message('Template is updated.', 'success');
        }
        
        //return redirect($this->listUrl());
        return Redirect::route("$this->base_route.edit", $template->id);
    }
    
    public function storeBubbles()
    {
        $result = array('status' => false, 'index' => 0, 'action' => 'create', 'link' => '');
        
        $row = null;
        if(!Input::get('bubble-id')) 
        {
            $row = new CardTemplateImageBubble;
            
            $row->template_id = Input::get('product_id');        
            $row->image_id= Input::get('image_id');        
            $row->posx  = Input::get('bubble-posx');
            $row->posy  = Input::get('bubble-posy');
        }
        else 
        {
            $row = CardTemplateImageBubble::find(Input::get('bubble-id'));
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
        
        CardTemplateImageBubble::destroy($bubbleId);
        
        echo 'true';
        exit;    
    }
    
    public function repositionBubble()
    {
        $bubbleId = Input::get('bubble-id');
        
        $row = CardTemplateImageBubble::find($bubbleId);
        $row->posx = Input::get('bubble-posx');
        $row->posy = Input::get('bubble-posy');
        $row->save();
    }
    ////////////////////////////////////////////////////////////////
    //Ajax Methods
    ////////////////////////////////////////////////////////////////
    public function ajaxChangeProduct()
    {
        $template_id = Input::get('template_id');
        $card_id = Input::get('card_id');
        
        $card = Card::find($card_id);
        
        return $this->view('catalog.template.product.options', compact('template_id', 'card'));
        
        exit;
    }
    
    ////////////////////////////////////////////////////////////////
    // Private Methods
    ////////////////////////////////////////////////////////////////
    private function _process_images($template_id)
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
                
                $image = new CardTemplateImage;
                $image->template_id = $template_id;
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
                    CardTemplateImage::destroy($d->id); 
                }
                else
                {
                    $image = CardTemplateImage::find($d->id);
                    $image->label = $d->label;
                    $image->sort = $d->sort;
                    $image->main = $d->main;
                    $image->save();
                }
            }
        }  
    }
    
    private function _process_options($template_id)
    {
        //delete old options
        CardTemplateOption::where('template_id', $template_id)->delete();
        
        //add new options
        $features = Input::get('feature');
        foreach($features as $feature_id => $options)
        {
            //dropdown
            if(!is_array($options))
            {   
                $option = new CardTemplateOption;
                $option->template_id    = $template_id;
                $option->card_feature_id= $feature_id;
                $option->card_option_id = $options;
                $option->side_type      = 0;
                $option->save();
            }
            else
            {       
                foreach($options as $side_type => $side)
                {     
                    foreach($side as $opt)
                    {    
                        $option = new CardTemplateOption;
                        $option->template_id    = $template_id;
                        $option->card_feature_id= $feature_id;
                        $option->card_option_id = $opt;
                        $option->side_type      = $side_type;
                        $option->save(); 
                    }   
                }
            }
        }
    }
    
    private function _process_tags($template_id)
    {
        //remove previous tags
        CardTemplateTag::where('template_id', $template_id)->delete();
            
        $tags = explode(',', Input::get('hidden-template_tag'));
        foreach($tags as $tag)
        {
            if(trim($tag) == '') continue;
            
            $tagRow = Tag::where('name', $tag)->first();
            if(!isset($tagRow->id)) 
            {
                $tagRow = new Tag;
                $tagRow->name = $tag;
                $tagRow->type = 1;
                $tagRow->save();
            }
            
            //add again
            $row = new CardTemplateTag;
            $row->template_id = $template_id;
            $row->tag_id = $tagRow->id;
            $row->save();
        }   
    }
    
    private function _get_template_id($str, $id=0)
    {
        $str = strtolower($str);
        $str = str_replace(' ', '-', $str);
        $str = str_replace('"', '', $str);
        $str = str_replace("'", '', $str);
         
        $res = '';
        if(strpos($str, 'business'))
        {
            $res = str_replace('business', '', $str);
        }
        else if(strpos($str, 'card'))
        {
            $res = str_replace('card', '', $str);
        }
        else if(strpos($str, 'cards'))
        {
            $res = str_replace('cards', '', $str);
        }
                                          
        if($res == '') $res = $str;
        
        $res = str_replace("--", '-', $res);
        $res = str_replace("--", '-', $res);
        $res = str_replace("--", '-', $res);
                        
        $last_template_id_num = CardTemplate::getLastTemplateID($res, $id);
        
        return sprintf("%s-%04d", $res, $last_template_id_num+1);
    }   
}