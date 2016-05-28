<?php

namespace App\Http\Controllers\Admin\Cms;

use App\Http\Controllers\Core\AdminController;
use App\Libraries\Template;
use App\Models\Slide;
use App\Models\SlideImage;
use Input, Validator, Request, Redirect, URL;

class SlideController extends AdminController {

    protected $page = 'slide';
    protected $page_title = 'Slideshows';
    
    protected $list_route = 'admin.cms.slide.list';
    
    public function __construct()
    {
        parent::__construct();
        
        $this->restrict('conf.content.manage');
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
            case 'title':
            case 'created_at':
                break;
            
            default:
                $order = 'created_at';
                $orderby = 'desc';
                break;
        }
        
        $rows = Slide::orderBy($order, $orderby)
            ->paginate($this->list_limit);
        
        return $this->view('cms.slide.index', compact('rows'));   
    }
    
    public function create()
    {
        return $this->view('cms.slide.create');
    }
    
    public function edit($id)
    {
        $row = Slide::find($id);
        
        return $this->view('cms.slide.edit', compact('row'));
    }
    
    public function delete($id)
    {
        $row = Slide::destroy($id);
        
        Template::set_message('Slide has been removed.', 'warning');
        
        return redirect($this->listUrl());
    }
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////
    public function store($id = 0)
    {                                    
        //validate posts
        $rules = [
            'title'     => 'required', 
        ];
        
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        if($id == 0)
        { 
            $slide = new Slide();
        }
        else
        {
            $slide = Slide::find($id);
        }
        
        $slide->title = Input::get('title');
        $status = $slide->save(); 
        
        if(!$status)
        {
            Template::set_message(trans('msg.has_error'), 'danger');
            
            return redirect()
                ->back()
                ->withInput();
        }
            
        // Insert Images
        $this->_process_images($slide->id);    
        
        if($id == 0)
        {    
            Template::set_message('New slide is created.', 'success');
        }
        else
        {
            Template::set_message('Slide is updated.', 'success');
        }
        
        return Redirect::route('admin.cms.slide.edit', $slide->id);
    }  
    
    ////////////////////////////////////////////////////////////////
    // Private Methods
    ////////////////////////////////////////////////////////////////
    public function _process_images($slide_id)
    {
        $jdata = json_decode(Input::get('image_data'));
        foreach($jdata as $d)
        {
            if($d->type == 'new')
            {
                // Move images to right place
                if(!file_exists(public_path($d->src))) continue;
                if($d->remove == '1') continue;
                
                $imagePath = str_replace('tmp/', '', $d->src);
                $targetPath = public_path(dirname($imagePath));
                if(!mkpath($targetPath)) continue;
                @rename(public_path($d->src), public_path($imagePath));
                
                $image = new SlideImage;
                $image->slide_id= $slide_id;
                $image->image   = $imagePath;
                $image->label   = $d->label;
                $image->sort    = $d->sort;
                $image->main    = $d->main;
                $image->save();
            }
            else
            {
                if($d->remove == '1') 
                {
                    SlideImage::destroy($d->id); 
                }
                else
                {              
                    $image = SlideImage::find($d->id);
                    $image->label   = $d->label;
                    $image->sort    = $d->sort;
                    $image->main    = $d->main;
                    $image->save();
                }
            }
        }  
    }
     
    ////////////////////////////////////////////////////////////////
    // Ajax Methods
    ////////////////////////////////////////////////////////////////
}