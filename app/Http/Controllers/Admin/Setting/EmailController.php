<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Core\AdminController;
use App\Libraries\Template;
use App\Models\Setting;
use Input, Validator, Redirect;

class EmailController extends AdminController {

    protected $menu = 'setting';
    protected $page = 'email';
    protected $page_title = 'Email Setting';
     
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
        return $this->view('setting.email.index');   
    }
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////
    public function postIndex()
    {                                   
        //validate posts
        $rules = [
            'email'  => "required|email", 
            'name'   => "required", 
            'host'   => "required", 
            'username' => "required", 
            'password' => "required", 
            'port'   => "required|integer|min:0", 
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
            'email.sender_email'=> Input::get('email'),
            'email.sender_name' => Input::get('name'),
            'email.host'        => Input::get('host'),
            'email.username'    => Input::get('username'),
            'email.password'    => Input::get('password'),
            'email.port'        => Input::get('port'),
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
        
        return Redirect::route('admin.setting.email');
    }        
}