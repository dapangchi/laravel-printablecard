<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Core\AdminController;
use App\Libraries\Template;
use App\Models\Setting;
use Input, Validator, Redirect;

class WebsiteController extends AdminController {

    protected $menu = 'setting';
    protected $page = 'website';
    protected $page_title = 'Website Setting';
    
    public function __construct()
    {
        parent::__construct();
        
        $this->restrict('conf.setting.manage');
    }
    
    ////////////////////////////////////////////////////////////////
    //Action Methods
    ////////////////////////////////////////////////////////////////
    public function index()
    {          
        return $this->view('setting.website.index');   
    }
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////
    public function postIndex()
    {           
        //validate posts
        $rules = [
            'title'    => "required", 
            'name'     => "required", 
            'description' => "required", 
            'keywords' => "required", 
            'author'   => "required", 
        ];     
                   
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        // Update settings
        $settings = [
            'site.title' => Input::get('title'),
            'site.name'  => Input::get('name'),
            'site.description' => Input::get('description'),
            'site.keywords' => Input::get('keywords'),
            'site.author'   => Input::get('author'),
            'site.email'    => Input::get('owner_email'),
            'site.owner'    => Input::get('owner_name'),
        ];
        $status = Setting::updateBatch($settings);
        
        // Set update message
        if($status)
        {
            Template::set_message(trans('msg.setting_update_success'), 'success');
        }
        else
        {
            Template::set_message(trans('msg.setting_update_fail'), 'danger');
        }
        
        return Redirect::route('admin.setting.website');
    }        
}