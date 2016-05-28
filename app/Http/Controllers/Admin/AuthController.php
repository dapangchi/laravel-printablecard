<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Core\BasicController;
use App\Libraries\Template;
use App\Models\Admin;
use App\Models\AdminPasswordReset;
use App\Models\LoginAttempt;
use Input, Validator, Redirect , URL, Mail, DB, AdminAuth;

class AuthController extends BasicController {

    protected $current_user = null; 
    
    public function __construct()
    {
        parent::__construct();    
        
        $this->auth = new AdminAuth();
        if($this->auth->isLoggedIn())
        {
            $this->current_user = $this->auth->user();
            
            $this->data['current_user'] = $this->current_user;
        }
    }
    
    protected function view($view, $data = array())
    {
        return parent::view("admin.{$view}", $data);
    } 
    
    ////////////////////////////////////////////////////////////////
    //Action Methods
    ////////////////////////////////////////////////////////////////
    public function index()
    {
        if($this->auth->isLoggedIn())
        {
            return Redirect::route('admin.dashboard');
        }
        
        return Redirect::route('admin.login');
    }
    
    public function login()
    {
        if($this->auth->isLoggedIn())
        {
            return redirect(URL::previous());
        }
        
        return $this->view('auth.login');
    }
    
    public function logout()
    {
        $this->auth->logout();
        
        return redirect('admin');
    }
    
    public function forgotPassword()
    {
        if($this->auth->isLoggedIn())
        {
            return redirect(URL::previous());
        }
        
        return $this->view('auth.forgotPassword');    
    }
    
    public function resetPassword($token = null)
    {
        if($this->auth->isLoggedIn())
        {
            return redirect(URL::previous());
        }
        
        return $this->view('auth.resetPassword')->with('token', $token);    
    }
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////
    public function postLogin()
    {
        if($this->auth->isLoggedIn())
        {
            return redirect(URL::previous());
        }
        
        $waitTime = 0;
        $loginType = 'admin';
        //check ip is blocked
        if(LoginAttempt::isBlocked($loginType, $waitTime))
        {
            Template::set_message("Too many requests. Please try again after $waitTime mins.", 'danger');
            
            return Redirect::route('customer.login');
        }
        else      
        {
            //increase login attempt
            LoginAttempt::increase($loginType);
            
            //validate posts
            $rules = [
                'email' => 'required|email', 
                'password'   => 'required',
            ];
            
            $validator = Validator::make(Input::all(), $rules);
            if ($validator->fails()) 
            {
                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
            }
            
            //check user row by email
            $email = Input::get('email');
            $pass  = Input::get('password'); 
            $remember = Input::get('remember') ? true : false;
            if(!$this->auth->login($email, $pass, $remember))
            {
                return Redirect::route('admin.login');
            }
            else
            {
                //remove attempt history
                LoginAttempt::clear($loginType);
            }
        }
        
        return Redirect::route('admin.dashboard');
    }   
    
    public function postForgotPassword()
    {
        if($this->auth->isLoggedIn())
        {
            return redirect(URL::previous());
        }
        
        //validate posts
        $rules = ['email' => 'required|email'];
        
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        // Get user Row by email
        $email = Input::get('email');
        $user = Admin::where('email', $email)->first();
        
        // If we can't find
        if($user === null)
        {
            Template::set_message(trans('auth.email_not_found'), 'danger');
            
            return redirect()->back()->withInput();
        }
        
        // Save the reset_code to the db for later retrieval
        $token = sha1(str_random(40) . $email);
        $expire = strtotime('+1 hours');
        AdminPasswordReset::insert([
            'email' => $email,
            'token' => $token,
            'expire'=> $expire
        ]);
        
        // Send email to user
        $this->to_email = $email;
        $this->to_name = "$user->first_name $user->last_name";
        Mail::send('emails.forgotPassword', array('token' => $token), function($message) 
        {
            $message->from($this->settings['email.sender_email'], $this->settings['email.sender_name'])
                ->to($this->to_email, $this->to_name)
                ->subject('Reset your password');
        });
        
        // Set message
        Template::set_message(trans('auth.reset_pass_message'), 'success');
        
        return Redirect::route('admin.forgot');
    } 
    
    public function postResetpassword()
    {
        if($this->auth->isLoggedIn())
        {
            return redirect(URL::previous());
        }
        
        //validate posts
        $rules = [
            'email' => 'required|email',
            'password'  => 'required|min:4',
            'password_confirm' => 'required|same:password',
        ];
        
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        // Remove expired reset password request in user_password_resets
        AdminPasswordReset::where('expire', '<', time())->delete();
        
        // Check if there is token row in user_password_resets
        $token = Input::get('token');
        $email = Input::get('email');
        $password = Input::get('password');
        $token_row = AdminPasswordReset::where('email', $email)
            //->where('token', $token)
            ->first();
        
        if($token_row === null)
        {
            Template::set_message(trans('auth.invalid_expired_link'), 'danger');
            
            return Redirect::route('admin.forgot');
        }
        
        // Get user row
        $user = Admin::where('email', $email)->first();
        if($user === null)
        {
            Template::set_message(trans('auth.email_not_found'), 'danger');
            
            return Redirect::route('admin.forgot');
        }
        
        $salt = str_random(8);
        $user->passsalt = $salt;
        $user->password = md5($salt . $password);
        $user->save();
        
        // Remove reset request 
        AdminPasswordReset::where('email', $email)
            ->where('token', $token)
            ->delete();
         
        Template::set_message(trans('auth.reset_password_success'), 'success');
        return Redirect::route('admin.login');
    } 
    
    ////////////////////////////////////////////////////////////////
    // Private Functions
    ////////////////////////////////////////////////////////////////
    private function _registerUser()
    {
        $email = Input::get('email');
        $pass  = Input::get('password'); 
        $firstName = Input::get('first_name'); 
        $lastName = Input::get('last_name'); 
        $remember = Input::get('remember') ? true : false;
        
        $salt = str_random(8);
        $user = User::create([
            'email'     => $email,
            'passsalt'  => $salt,
            'password'  => md5($salt . $pass),
            'first_name' => $firstName,
            'last_name'  => $lastName,
            'is_active' => '1',
            'active_code' => null,
        ]); 
        
        // Send register email to user
        $this->to_email = $email;
        $this->to_name = "$firstName $lastName";
        Mail::send('emails.register', array('user' => $user), function($message) 
        {
            $message->from($this->settings['email.sender_email'], $this->settings['email.sender_name'])
                ->to($this->to_email, $this->to_name)
                ->subject('Thanks for your registering!');
        });
        
        return empty($user) ? false : true;
    }       
}