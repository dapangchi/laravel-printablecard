<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Core\AdminController;
use App\Libraries\Template;
use App\Models\Admin;
use Input, Validator;

class AccountController extends AdminController {
    protected $page_title = 'My Account';
    
    public function __construct()
    {
        parent::__construct();
        
        //$this->data['menu'] = 'setting';
        $this->data['page'] = '';
    }
    
    ////////////////////////////////////////////////////////////////
    //Action Methods
    ////////////////////////////////////////////////////////////////
    public function index()
    {
        return $this->view('account.index');   
    }
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////
    public function postIndex()
    {                                   
        $user = $this->current_user;
                                    
        //validate posts
        $rules = [
            'email'     => "required|email|unique:admins,email,$user->id,id", 
            'first_name' => 'required|max:32',
            'last_name'  => 'required|max:32',
            'current_password'  => "required|check_current_password:admins,id,$user->id",
            'password'          => 'min:4',
            'password_confirm'  => 'same:password'
        ];     
        
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        // Save new account information        
        $salt = str_random(8);
        $this->current_user->first_name = Input::get('first_name');
        $this->current_user->last_name = Input::get('last_name');
        $this->current_user->email = Input::get('email');
        if(Input::get('password') != '')
        {
            $this->current_user->passsalt = $salt;
            $this->current_user->password = md5($salt . Input::get('password'));
        }
        $this->current_user->save();
             
        // Set update message
        Template::set_message(trans('auth.account_update_success'), 'success');
        
        // If password is changed, user have to relogin
        if(Input::get('password') != '')
        {
            $this->auth->logout();
            
            return redirect('admin/login');
        }
        
        return redirect('admin/account');
    }        
}