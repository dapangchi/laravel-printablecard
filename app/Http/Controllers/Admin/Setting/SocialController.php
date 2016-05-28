<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Core\AdminController;
use App\Libraries\Template;
use App\Models\Setting;
use Input, Validator, Redirect;

class SocialController extends AdminController {

    protected $menu = 'setting';
    protected $page = 'social';
    protected $page_title = 'Social Settings';
     
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
        return $this->view('setting.social.index');   
    }
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////
    public function postFacebook()
    {                                   
        //validate posts
        $rules = [
            'app_id' => "required", 
            'app_key'=> "required", 
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
            'social.fb_app_id'  => Input::get('app_id'),
            'social.fb_app_key' => Input::get('app_key'),
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
        
        return Redirect::route('admin.setting.social');
    }        
}