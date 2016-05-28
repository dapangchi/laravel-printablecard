<?php

use App\Events\CustomerLoggedIn;
use App\Events\CustomerLoggedOut;

use App\Models\Customer;
use App\Models\CustomerCookie;
use App\Models\LoginAttempt;
use App\Libraries\Template;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;

class CustomerAuth
{
    /** @var boolean Allow use of the "Remember Me" checkbox/cookie. */
    private $_allowRemember = true;

    /** @var object The logged-in user. */
    private $_customer;
    
    public function __construct()
    {    
        // Try to log the customer in from session/cookie data
        $this->_autoLogin();
    }
    
    public static function instance()
    {
        return new CustomerAuth();
    }

    /**
     * Check the sesssion for the required infor, then verify it against the database
     * @return bool
     */
    public function isLoggedIn()
    {
        return $this->customer() === null ? false : true;
    }

    /**
     * Attempt to log the customer in
     * @param $email
     * @param $password
     * @param bool|false $remember
     * @return bool
     */
    public function login($email, $password, $remember = false)
    {
        if(empty($email) || empty($password))
        {
            Template::set_message(trans('auth.fields_required'), 'danger');
            return false;
        }        
        
        // Get customer row from db
        $customer = Customer::where('email', $email)->first();
        
        // Check customer row is exist
        if(empty($customer))
        {
            Template::set_message(trans('auth.bad_email_pass'), 'danger');
            return false;
        }
        
        // Check whether the account has been activated
        if($customer->is_active == STATUS_INACTIVE)
        {
            Template::set_message(trans('auth.account_not_active'), 'danger');
            return false;
        }
        
        // Check whether the account has been soft deleted --ToDo
        
        // Try password
        if($customer->password != md5($customer->passsalt . $password))
        {  
            // Bad password
            Template::set_message(trans('auth.bad_email_pass'), 'danger');
            return false;
        }
        
        // The login was successfully validated, so setup the session
        $this->_setupSession($customer->id, $email, $customer->password, $remember);
        
        // Save the login info
        $customer->logdate = date('Y-m-d H:i:s');
        $customer->lognum += 1;
        $customer->save();
        
        Event::fire(new CustomerLoggedIn($customer->id));
        
        return true;
    }
    
    /**
    * Destroy the auto login information and the current session
    * 
    */
    public function logout()
    {
        // Destroy the auto login information
        $this->_deleteAutoLogin();
        
        // Destroy the session
        Session::forget('customer_id');
        Session::forget('customer_email');
        Session::forget('customer_logged_in');
        
        Event::fire(new CustomerLoggedOut());
        //return force_redirect('account/login');
    }

    /**
     * Check the session for the required info, then verify it against the database
     * @return null|object
     */
    public function customer()
    {
        // If the user has already been cached, return it.
        if(isset($this->_customer))
        {
            return $this->_customer;
        }
        
        $this->_customer = null;
        
        // Is the required session data available
        if(Session::get('customer_id') == null
            || Session::get('customer_email') == null)
        {
            return null;
        }
        
        // Grab the customer account
        $customer_id = Session::get('customer_id');
        //$customer_email = Session::get('customer_email');
        $customer_token = Session::get('customer_token');
        $customer = Customer::find($customer_id);          
        if(empty($customer))
        {
            return null;
        }
           
        // Ensure customer_token is still equivalent to md5 of the customer_id and password
        if(sha1($customer_id . $customer->password) !== $customer_token)
        {
            return null;
        }
          
        $this->_customer = $customer;
        
        return $this->_customer;
    }

    /**
     * Check whether a user is logged in (and optionally of the correct role) and
     * if not, send them to the login screen
     *
     * @param null $uri
     * @return bool
     */
    public function restrict($uri = null)
    {
        // If customer isn't loggged in, redirect to the login page
        if($this->isLoggedIn() === false)
        {
            Template::set_message(trans('auth.must_login'), 'danger');
            
            if($uri == null)
            {
                force_redirect('auth/login');
            }
            else
            {
                force_redirect($uri);
            }
        }
        
        // Check whether the customer has the proper permissions --Todo
        
        return true;
    }
    
    /**
    * Retrieve the customer_id from the current session
    * 
    */
    public function customerId()
    {
        if(!$this->isLoggedIn())
        {
            return false;
        }
        
        return $this->customer()->id;
    }
    
    public function setCheckoutFlag()
    {
        Session::set('goto_checkout', true);
        Session::save();
    }
    
    public function getCheckoutFlag()
    {
        return Session::get('goto_checkout');
    }
    
    public function removeCheckoutFlag()
    {
        Session::forget('goto_checkout');
        Session::save();    
    }
    
    public function loginForce($email)
    {
        $customer = Customer::where('email', $email)->first();
        if(!isset($customer->id)) return false;

        // Save the customer's session info
        $data = [
            'customer_id'       => $customer->id,
            'customer_email'    => $email,
            'customer_token'    => sha1($customer->id . $customer->password),
            'customer_logged_in'=> true,
        ];
        session($data);
        Session::forget('registered_email');        
        Session::save();
        
        return true;        
    }

    /**
     * Gets a timestamp using $this->loginDateFormat and the systems co
     *
     * @param null $time
     * @return bool|string
     */
    protected function getLoginTimestamp($time = null)
    {
        if (empty($time)) 
        {
            $time = time();
        }
        
        return date('Y-m-d H:i:s', $time);    
    }

    /**
     * Create the session information for the current customer and create an
     * auto login cookie if required
     *
     * @param $customer_id
     * @param $email
     * @param $password
     * @param bool|false $remember
     * @param null $old_token
     * @return bool
     */
    private function _setupSession($customer_id, $email, $password, $remember = false, $old_token = null)
    {
        // Save the customer's session info
        $data = [
            'customer_id'       => $customer_id,
            'customer_email'    => $email,
            'customer_token'    => sha1($customer_id . $password),
            'customer_logged_in'=> true,
        ];
        session($data);
        Session::save();
        
        // Should we remember the user?
        if($remember == true)
        {
            return $this->_createAutoLogin($customer_id, $old_token);
        }
        
        return true;
    }
    
    private function _autoLogin()
    {
        if(!$this->_allowRemember()) 
        {
            return;
        }
        
        $cookie = Cookie::get('customer_autologin');
        if($cookie == null)
        {
            return;
        }
        
        // A cookie was retrieved, so split it into customer_id and token
        list($customer_id, $test_token) = explode('~', $cookie);
        
        // Try to pull a match from the database
        $count = CustomerCookie::where('customer_id', $customer_id)
            ->where('token', $test_token)
            ->count();
        if ($count != 1) 
        {
            return;
        }
        
        // Save logged in status to reduce db access.
        $this->logged_in = true;

        if(Session::get('customer_id')) 
        {
            return;
        }

        // If a session doesn't exist, refresh the autologin token and start the
        // session.

        // Grab the current $customer info for the session.
        $customer = Customer::find($customer_id);
        if ($customer === null) 
        {
            return;
        }

        $this->_setupSession(
            $customer->id,
            $customer->email,
            $customer->password,
            true,
            $test_token
        );
    }

    /**
     * Create the auto-login entry in the database.
     *
     * @param $customer_id
     * @param null $old_token
     * @return bool
     */
    private function _createAutoLogin($customer_id, $old_token = null)
    {
        if (! $this->_allowRemember()) 
        {
            return false;
        }

        // Generate a random string for the token.
        $token = str_random(128);
                                                                  
        // If an old token was not provided, create a new one.
        $dbStatus = false;

        if(empty($old_token)) 
        {
            // Create a new token
            $dbStatus = CustomerCookie::insert([
                'customer_id'   => $customer_id,
                'token'         => $token,
                'created_on'    => $this->getLoginTimestamp()
            ]);
        } 
        else 
        {
            // Refresh the token.
            $dbStatus = CustomerCookie::where('customer_id', $customer_id)
                ->where('token', $token)
                ->update([
                    'token'     => $old_token,
                    'created_on'=> $this->getLoginTimestamp()]);
        }

        if ($dbStatus) {
            // Create the autologin cookie
            Cookie::make(
                'customer_autologin',
                $customer_id . '~' . $token,
                60 * 24
            );

            return true;
        }

        return false;
    }

    /**
     * Delete the autologin cookie for the current user.
     *
     * @return void
     */
    private function _deleteAutoLogin()
    {
        if (! $this->_allowRemember()) 
        {
            return;
        }

        // Grab the cookie to determine which row in the table to delete.
        $cookie = Cookie::get('customer_autologin');
        if ($cookie !== null) {
            list($customer_id, $token) = explode('~', $cookie);

            // Now delete the cookie.
            Cookie::forget('customer_autologin');

            // Clean up the database
            CustomerCookie::where('customer_id', $customer_id)
                ->where('token', $token)
                ->delete();
        }

        // Perform a clean up of any autologins older than 2 months.
        CustomerCookie::where('created_on', '<', $this->getLoginTimestamp())->delete();
    }
    
    //--------------------------------------------------------------------------
    // Utility Methods
    //--------------------------------------------------------------------------

    /**
     * Retrieve the 'auth.allow_remember' setting from the settings library and
     * store it for the library's internal use.
     *
     * @return boolean True if the "Remember Me" checkbox is permitted by the site's
     * settings to be displayed on the login form, else false.
     */
    private function _allowRemember()
    {
        if (isset($this->_allowRemember)) 
        {
            return $this->_allowRemember;
        }

        //$this->_allowRemember = (bool) $this->ci->settings_lib->item('auth.allow_remember');
        return $this->_allowRemember;
    }
}