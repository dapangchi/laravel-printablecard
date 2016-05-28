<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Core\AdminController;
use App\Libraries\Template;
use App\Models\Setting;
use Input, Validator, Redirect;

class SalesController extends AdminController {
    
    protected $menu = 'setting';
    protected $page = 'sales';
    protected $page_title = 'Sales Setting';
    
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
        return $this->view('setting.sales.index');   
    }
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////
    public function postIndex()
    {                                   
        //validate posts
        $rules = [
            'paypal_email'  => "required|email", 
            'fedex_account' => "required", 
            //'fedex_rate'    => "required|numeric|min:0",
            'currency_rate'    => "required|numeric|min:0.01",
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
            'sales.paypal_email'    => Input::get('paypal_email'),
            'sales.fedex_account'   => Input::get('fedex_account'),
            'sales.fedex_rate'      => Input::get('fedex_rate'),
            'sales.currency_rate'   => Input::get('currency_rate'),
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
        
        return Redirect::route('admin.setting.sales');
    }        
}