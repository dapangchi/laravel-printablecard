<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Core\FrontController;
use App\Libraries\Template;
use App\Models\Customer;
use App\Models\CustomerPasswordReset;
use App\Models\SocialProfile;
use App\Models\LoginAttempt;
use Input, Validator, Redirect, URL, Mail, DB, Session, Socialize;

class AuthController extends FrontController {
    protected $page_class = 'sign-up-page';
    
    ////////////////////////////////////////////////////////////////
    //Action Methods
    ////////////////////////////////////////////////////////////////
    public function login()
    {
        if($this->auth->isLoggedIn())
        {
            return redirect('/');
        }
        
        $this->page_title = 'Login';
        return $this->view('auth.login');
    }
    
    public function register()
    {
        if($this->auth->isLoggedIn())
        {
            return redirect('/');
        }
        
        $this->page_title = 'Register';
        return $this->view('auth.register');
    }
    
    public function registerSuccess()
    {
        if($this->auth->isLoggedIn())
        {
            return redirect('/');
        }
        
        if(!Session::has('registered_email'))
        {
            return Redirect::route('customer.register');
        } 
        
        //get email from session and forget
        $email = Session::get('registered_email'); 
        
        //login customer forcely
        $this->auth->loginForce($email);
        $auth = $this->auth;
        $this->data['current_customer'] = $this->auth->customer();
        
        $this->page_title = 'Register';
        return $this->view('auth.registerSuccess', compact('email', 'auth'));
    }
    
    public function registerComplete()
    {
        if($this->auth->isLoggedIn())
        {
            return redirect('/');
        }
        
        if(!Session::has('profile_id'))
        {
            return URL::route('customer.register');
        }
        
        $profile_id = Session::get('profile_id');
        $profile = SocialProfile::find($profile_id);
        
        $this->page_title = 'Register';
        return $this->view('auth.registerComplete', compact('profile'));
    }
    
    public function logout()
    {
        $this->auth->logout();
        
        return redirect('/');;
    }
    
    public function forgotPassword()
    {
        if($this->auth->isLoggedIn())
        {
            return redirect('/');;
        }
        
        $this->page_title = 'Forgot password';     
        return $this->view('auth.forgotPassword');
    }
    
    public function resetPassword($token = null)
    {
        if($this->auth->isLoggedIn())
        {
            return redirect('/');
        }
        
        $this->page_title = 'Reset Password';
        return $this->view('auth.resetPassword')->with('token', $token);
    }
    
    //facebook signup
    public function registerWithFacebook()
    {
        if($this->auth->isLoggedIn())
        {
            return redirect('/');
        }
        
        return Socialize::with('facebook')->redirect();
    }
    
    public function registerCallbackFacebook()
    {
        if($this->auth->isLoggedIn())
        {
            return redirect('/');
        }
        
        try {
            if($user = Socialize::with('facebook')->user())
            {
                $customer = Customer::where('email', $user->email)->first();
                        
                //if email is already registered, 
                //then redirect to register page
                if(isset($customer->id))
                {
                    Template::set_message('Your email is already registered in our system.', 'danger');
                    return Redirect::route('customer.register');
                }
                
                //insert social_profiles
                //we collected customer's social profile information for future
                $profile = SocialProfile::firstOrCreate(['social_name' => 'facebook', 'social_id' => $user->id]);
                $profile->email     = $user->email;
                $profile->first_name= $user->user['first_name'];
                $profile->last_name = $user->user['last_name'];
                $profile->avatar    = $user->avatar_original;
                $profile->save();
                
                Session::set('profile_id', $profile->id);
                Session::save();
                
                return Redirect::route('customer.register.complete');
            }
            else
            {
                //can't get facebook user
                Template::set_message('Something went wrong. Try again.', 'danger');
                return Redirect::route('customer.register');
            }   
        } catch(\Exception $e) {
            Template::set_message('Facebook reject or cancel your request', 'danger');
            return Redirect::route('customer.register');
        }
    }
    //end facebook signup
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////
    public function postLogin()
    {
        if($this->auth->isLoggedIn())
        {
            return redirect('/');
        }
        
        $waitTime = 0;
        $loginType = 'customer';
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
                return Redirect::route('customer.login');
            }
            else
            {
                //remove attempt history
                LoginAttempt::clear($loginType);
            }
        }
        
        if($this->auth->getCheckoutFlag()) {
            $this->auth->removeCheckoutFlag();
            
            return redirect(route('cart.checkout'));
        }
        
        return redirect('/');
    }   
    
    public function postRegister()
    {
        if($this->auth->isLoggedIn())
        {
            return redirect('/');
        }
        
        //validate posts
        $rules = [
            'email'     => 'required|email|unique:customers', 
            'password'  => 'required|min:4',
            'password_confirm' => 'required|same:password',
            'first_name' => 'required|max:32',
            'last_name'  => 'required|max:32',
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
        if(!$this->_registerCustomer())
        {
            //Template::set_message(trans('auth.registeration_fail'), 'danger');
            return Redirect::route('customer.register');
        }
        
        //Template::set_message(trans('auth.registeration_success'), 'success');
        //return Redirect::route('customer.login');       
        
        //save registered email to session
        Session::set('registered_email', Input::get('email'));
        Session::save();
         
        return Redirect::route('customer.register.success');        
    } 
    
    public function postForgotPassword()
    {
        if($this->auth->isLoggedIn())
        {
            return redirect('/');
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
        
        // Get Customer Row by email
        $email = Input::get('email');
        $customer = Customer::where('email', $email)->first();
        
        // If we can't find
        if($customer === null)
        {
            Template::set_message(trans('auth.email_not_found'), 'danger');
            
            return redirect()->back()->withInput();
        }
        
        // Save the reset_code to the db for later retrieval
        $token = sha1(str_random(40) . $email);
        $expire = strtotime('+1 hours');
        CustomerPasswordReset::insert([
            'email' => $email,
            'token' => $token,
            'expire'=> $expire
        ]);
        
        // Send email to customer
        $this->sendMail('emails.forgotPassword', $email, $customer->full_name(), array('token' => $token), 'Reset your password');
        
        // Set message
        Template::set_message(trans('auth.reset_pass_message'), 'success');
        
        return Redirect::route('customer.forgot');
    } 
    
    public function postResetPassword()
    {
        if($this->auth->isLoggedIn())
        {
            return redirect('/');
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
        
        // Remove expired reset password request in customer_password_resets
        CustomerPasswordReset::where('expire', '<', time())->delete();
        
        // Check if there is token row in customer_password_resets
        $token = Input::get('token');
        $email = Input::get('email');
        $password = Input::get('password');
        $token_row = CustomerPasswordReset::where('email', $email)
            //->where('token', $token)
            ->first();
         
        if($token_row === null)
        {
            Template::set_message(trans('auth.invalid_expired_link'), 'danger');
            
            return Redirect::route('customer.forgot');
        }
        
        // Get customer row
        $customer = Customer::where('email', $email)->first();
        if($customer === null)
        {
            Template::set_message(trans('auth.email_not_found'), 'danger');
            
            return Redirect::route('customer.forgot');
        }
        
        $salt = str_random(8);
        $customer->passsalt = $salt;
        $customer->password = md5($salt . $password);
        $customer->save();
        
        // Remove reset request 
        CustomerPasswordReset::where('email', $email)
            ->where('token', $token)
            ->delete();
         
        Template::set_message(trans('auth.reset_password_success'), 'success');
        return Redirect::route('customer.login');
    } 
    
    public function postRegisterComplete()
    {
        if($this->auth->isLoggedIn())
        {
            return redirect('/');
        }
        
        //validate posts
        $rules = [
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
        
        //check user row by email
        if(!($customer = $this->_registerCustomerFromSocial()))
        {
            //Template::set_message(trans('auth.registeration_fail'), 'danger');
            return Redirect::route('customer.register');
        }
        
        //Template::set_message(trans('auth.registeration_success'), 'success');
        //return Redirect::route('customer.login');       
        
        //save registered email to session
        Session::forget('profile_id');
        Session::set('registered_email', $customer->email);
        Session::save();
         
        return Redirect::route('customer.register.success');        
    } 
    ////////////////////////////////////////////////////////////////
    // Private Functions
    ////////////////////////////////////////////////////////////////
    private function _registerCustomer()
    {
        $email = Input::get('email');
        $pass  = Input::get('password'); 
        $first_name = Input::get('first_name');
        $last_name = Input::get('last_name');
        $remember = Input::get('remember') ? true : false;
        
        $salt = str_random(8);
		$customer = new Customer;
        $customer->email = $email;
        $customer->passsalt = $salt;
        $customer->password = md5($salt . $pass);
        $customer->first_name = $first_name;
		$customer->last_name = $last_name;
        $customer->is_active = 1;
        $customer->save();

        // Send register email to customer
        $this->sendMail('emails.register', $email, $customer->full_name(), array('customer' => $customer), 'Thanks for your registering!');
        
        return isset($customer->id) ? true : false;
    }
    
    private function _registerCustomerFromSocial()
    {
        $profile_id = Session::get('profile_id');
        $profile = SocialProfile::find($profile_id);
         
        if(!isset($profile->id)) 
        {
            return Redirect::route('customer.register');
        }
        
        $pass = Input::get('password'); 
        $salt = str_random(8);

		$customer = new Customer;
        $customer->email    = $profile->email;
        $customer->passsalt = $salt;
        $customer->password = md5($salt . $pass);
        $customer->first_name= $profile->first_name;
		$customer->last_name = $profile->last_name;
        $customer->is_active = 1;
        $customer->save();
        
        // Send register email to customer
        $this->sendMail('emails.register', $profile->email, "$profile->first_name $profile->last_name", array('customer' => $customer), 'Thanks for your registering!');
        
        return isset($customer->id) ? $customer : false;
    }
    
    ////////////////////////////////////////////////////////////////
    // Ajax Functions
    ////////////////////////////////////////////////////////////////
    public function ajaxLogin()
    {
        $result = array('status' => false, 'msg' => '', 'blocked' => false);
        
        if($this->auth->isLoggedIn())
        {
            $result['status'] = true;
        }
        else
        {            
            $waitTime = 0;
            $loginType = 'customer';
            //check ip is blocked
            if(LoginAttempt::isBlocked($loginType, $waitTime))
            {
                $result['blocked'] = true;
                $result['msg'] = "Too many requests. Please try again after $waitTime mins.";
            }
            else
            {
                //increase login attempt
                LoginAttempt::increase($loginType);
            
                //check user row by email
                $email = Input::get('email');
                $pass  = Input::get('password'); 
                $remember = Input::get('remember') ? true : false;
                if($this->auth->login($email, $pass, $remember))
                {
                    //remove attempt history
                    LoginAttempt::clear($loginType);
                
                    $result['status'] = true;
                }
                else
                {
                    $messages = Template::get_messages();
                    $result['msg'] = $messages[0]['message'];
                }       
            }     
        }
        
        echo json_encode($result);
        exit;
    } 
    
    public function ajaxCheckEmail()
    {
        $email = Input::get('email');
        
        $user = Customer::where('email', $email)->first();
        if($user == null) return 'true';
        
        return 'false';        
    }   
}