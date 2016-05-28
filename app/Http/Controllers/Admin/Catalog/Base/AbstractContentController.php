<?php

namespace App\Http\Controllers\Admin\Catalog\Base;

use App\Http\Controllers\Core\AdminController;
use App\Libraries\Template;
use App\Models\Service;
use App\Models\Slide;
use Input, Validator, Redirect;

class AbstractContentController extends AdminController {

    protected $menu = '';
    protected $page = '';
    protected $svc_type = 0;
    protected $page_title = '';
    
    protected $base_route = '';
    
    public function __construct()
    {
        parent::__construct();
        
        $this->data['base_route'] = $this->base_route;
    }
    
    ////////////////////////////////////////////////////////////////
    //Action Methods
    ////////////////////////////////////////////////////////////////
    public function index()
    {
        $slides = Slide::orderBy('title')->lists('title', 'id'); 
        
        $row = Service::firstOrCreate(['id' => $this->svc_type]);
        
        return $this->view('catalog.base.content.index', compact('slides', 'row'));
    }
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////    
    public function store()
    {                                    
        //validate posts
        $rules = [
            'title' => 'required',
        ];
        
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        // Update row
        $service = Service::find($this->svc_type);
        $service->title             = Input::get('title');
        $service->meta_tag          = Input::get('meta_tag');
        $service->meta_description  = Input::get('meta_description');
        $service->slide_id          = Input::get('slide');
        $status = $service->save();
        
        // Set update message
        if($status)
        {
            Template::set_message('Content is updated.', 'success');
        }
        else
        {
            Template::set_message(trans('msg.has_error'), 'danger');
        }
        
        return Redirect::route($this->base_route);
    }
}