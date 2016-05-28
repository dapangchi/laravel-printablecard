<?php

namespace App\Http\Controllers\Admin\Catalog\Base;

use App\Http\Controllers\Core\AdminController;
use App\Libraries\Template;
use App\Models\Card;
use App\Models\Showcase;
use App\Models\ShowcaseImage;
use App\Models\ShowcaseOption;
use App\Models\ShowcaseTag;
use App\Models\Tag;

use Input, Validator, Request, Redirect;

class AbstractShowcaseController extends AdminController {

    protected $menu = 'showcase';
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
        
        $this->restrict('product.showcase.view');
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
        
        $rows = Showcase::select('showcases.*')
            ->join('cards', 'cards.id', '=', 'showcases.card_id')
            ->where('showcase_type', $this->svc_type)
            //->where('showcases.status', STATUS_ACTIVE)
            ->orderBy($order, $orderby)
            ->paginate($this->list_limit);
        
        return $this->view('catalog.showcase.index', compact('rows')); 
    }
    
    public function create()
    {      
        //get all cards
        $cards = Card::where('service_id', $this->card_type)
            ->orderBy('name', 'asc')
            ->get();
        
        return $this->view('catalog.showcase.create', compact('cards'));
    }
    
    public function edit($id)
    {
        //get all cards
        $cards = Card::where('service_id', $this->card_type)
            ->orderBy('name', 'asc')
            ->get();
        
        //get current row
        $row = Showcase::find($id);
        
        return $this->view('catalog.showcase.edit', compact('row', 'cards'));
    }
    
    public function delete($id)
    {
        $this->restrict('product.showcase.manage');
        
        $row = Showcase::destroy($id);
        
        Template::set_message('Showcase has been removed.', 'warning');
        
        return redirect($this->listUrl());
    }
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////    
    public function store($id = 0)
    {       
        $this->restrict('product.showcase.manage');
        
        //validate posts
        $rules = [
            'card_id'           => 'required',
            'showcase_name'     => 'required', 
            'feature'           => 'required',
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
            $showcase = new Showcase;
        }
        else
        {
            $showcase = Showcase::find($id);
        }
         
        // Update row
        $showcase->showcase_type    = $this->svc_type;
        $showcase->name             = Input::get('showcase_name');
        $showcase->description      = Input::get('showcase_description');
        $showcase->meta_tag         = Input::get('meta_tag');
        $showcase->meta_description = Input::get('meta_description');
        $showcase->card_id          = Input::get('card_id');
        
        //$showcase->status         = STATUS_ACTIVE;
        $status = $showcase->save();
        
        // Move upload images files
        $this->_process_images($showcase->id);
        //
        $this->_process_tags($showcase->id);
        
        //if product is changed
        if(Input::get('is_option_changed'))
        {
            // Process options
            $this->_process_options($showcase->id);
        }
        
        // Set update message
        if(!$status)
        {
            Template::set_message(trans('msg.has_error'), 'danger');
        }
        
        if($id == 0)
        {
            Template::set_message('New showcase is created.', 'success');
        }
        else
        {
            Template::set_message('Showcase is updated.', 'success');
        }
        
        //return redirect($this->listUrl());
        return Redirect::route("$this->base_route.edit", $showcase->id);
    }
    
    ////////////////////////////////////////////////////////////////
    //Ajax Methods
    ////////////////////////////////////////////////////////////////
    public function ajaxChangeProduct()
    {
        $showcase_id = Input::get('showcase_id');
        $card_id = Input::get('card_id');
        
        $card = Card::find($card_id);
        
        return $this->view('catalog.showcase.options', compact('showcase_id', 'card'));
        
        exit;
    }
    
    ////////////////////////////////////////////////////////////////
    // Private Methods
    ////////////////////////////////////////////////////////////////
    private function _process_images($showcase_id)
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

                $image = new ShowcaseImage;
                $image->showcase_id = $showcase_id;
                $image->image = $imagePath;
                $image->label = $d->label;
                $image->sort  = $d->sort;
                $image->main  = $d->main;
                $image->save();
            }
            // else if image is exist in table, then update it
            else
            {
                if($d->remove == '1') 
                {
                    ShowcaseImage::destroy($d->id); 
                }
                else
                {
                    $image = ShowcaseImage::find($d->id);
                    $image->label = $d->label;
                    $image->sort = $d->sort;
                    $image->main = $d->main;
                    $image->save();     
                }
            }
        }  
    }
    
    private function _process_options($showcase_id)
    {
        //delete old options
        ShowcaseOption::where('showcase_id', $showcase_id)->delete();
        
        //add new options
        $features = Input::get('feature');
        foreach($features as $feature_id => $options)
        {
            //dropdown
            if(!is_array($options))
            {
                $row = new ShowcaseOption;
                $row->showcase_id       = $showcase_id;
                $row->card_feature_id   = $feature_id;
                $row->card_option_id    = $options;
                $row->side_type         = '';
                $row->save();
            }
            else
            {
                foreach($options as $side_type => $side)
                {
                    foreach($side as $opt)
                    {
                        $row = new ShowcaseOption;
                        $row->showcase_id       = $showcase_id;
                        $row->card_feature_id   = $feature_id;
                        $row->card_option_id    = $opt;
                        $row->side_type         = $side_type;
                        $row->save();
                    }   
                }
            }
        }
    }
    
    private function _process_tags($showcase_id)
    {
        //remove previous tags
        ShowcaseTag::where('showcase_id', $showcase_id)->delete();
            
        $tags = explode(',', Input::get('hidden-showcase_tag'));
        foreach($tags as $tag)
        {
            if(trim($tag) == '') continue;
            
            $tagRow = Tag::where('name', $tag)->first();
            if(!isset($tagRow->id)) 
            {
                $tagRow = new Tag;
                $tagRow->name = $tag;
                $tagRow->type = 2;
                $tagRow->save();
            }
            
            //add again
            $row = new ShowcaseTag;
            $row->showcase_id = $showcase_id;
            $row->tag_id = $tagRow->id;
            $row->save();
        }   
    }
}