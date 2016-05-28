<?php

use App\Models\Admin;
use App\Models\AdminCookie;
use App\Libraries\Template;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;

class AdminAuth
{
    /** @var boolean Allow use of the "Remember Me" checkbox/cookie. */
    private $_allowRemember = true;

    /** @var object The logged-in user. */
    private $_user;
    
    public function __construct()
    {
        // Try to log the user in from session/cookie data
        $this->_autoLogin();
    }
    
    /**
    * Check the sesssion for the required infor, then verify it against the database
    * 
    */
    public function isLoggedIn()
    {
        return $this->user() === null ? false : true;
    }

    /**
     * Attempt to log the user in
     *
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
        
        // Get user row from db
        $user = Admin::where('email', $email)->first();
        
        // Check user row is exist
        if(empty($user))
        {
            Template::set_message(trans('auth.bad_email_pass'), 'danger');
            return false;
        }
        
        // Check whether the account has been activated
        if($user->is_active == STATUS_INACTIVE)
        {
            Template::set_message(trans('auth.account_not_active'), 'danger');
            return false;
        }
        
        // Check whether the account has been soft deleted --ToDo
        
        // Try password                
        if($user->password != md5($user->passsalt . $password))
        {  
            // Bad password
            Template::set_message(trans('auth.bad_email_pass'), 'danger');
            return false;
        }
        
        // The login was successfully validated, so setup the session
        $this->_setupSession($user->id, $email, $user->password, $remember);
        
        // Save the login info
        $user->logdate = date('Y-m-d H:i:s');
        $user->lognum += 1;
        $user->save();
        
        return true;
    }
    
    /**
    * Ddestroy the autologin information and the current session
    * 
    */
    public function logout()
    {
        // Destroy the autologin information
        $this->_deleteAutoLogin();
        
        // Destroy the session
        Session::forget('user_id');
        Session::forget('user_email');
        Session::forget('user_logged_in');
        
        //return force_redirect('admin/login');
    }
    
    /**
    * Check the session for the required info, then verify it against the database
    * 
    */
    public function user()
    {
        // If the user has already been cached, return it.
        if(isset($this->_user))
        {
            return $this->_user;
        }
        
        $this->_user = null;
        
        // Is the required session data available
        if(Session::get('user_id') == null
            || Session::get('user_email') == null)
        {
            return null;
        }
        
        // Grab the user account
        $user_id = Session::get('user_id');
        //$user_email = Session::get('user_email');
        $user_token = Session::get('user_token');
        $user = Admin::find($user_id);
        if(empty($user))
        {
            return null;
        }
        
        // Ensure user_token is still equivalent to md5 of the user_id and password
        if(sha1($user_id . $user->password) !== $user_token)
        {
            return null;
        }
        
        $this->_user = $user;
        
        return $this->_user;
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
        // If user isn't logged in, redirect to the login page
        if($this->isLoggedIn() === false)
        {
            Template::set_message(trans('auth.must_login'), 'danger');
            
            if($uri === null)
            {
                force_redirect(route('admin.login'));
            }
            else
            {
                force_redirect($uri);
            }
        }
        
        // Check whether the user has the proper permissions --Todo
        
        return true;
    }
    
    /**
    * Retrieve the user_id from the current session
    * 
    */
    public function userId()
    {
        if(!$this->isLoggedIn())
        {
            return false;
        }
        
        return $this->user()->id;
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
     * Create the session information for the current user and create an
     * auto login cookie if required
     *
     * @param $user_id
     * @param $email
     * @param $password
     * @param bool|false $remember
     * @param null $old_token
     * @return bool
     */
    private function _setupSession($user_id, $email, $password, $remember = false, $old_token = null)
    {
        // Save the user's session info
        $data = [
            'user_id'       => $user_id,
            'user_email'    => $email,
            'user_token'    => sha1($user_id . $password),
            'user_logged_in'=> true,
        ];
        session($data);
        Session::save();
        
        // Should we remember the user?
        if($remember === true)
        {
            return $this->_createAutoLogin($user_id, $old_token);
        }
        
        return true;
    }
    
    private function _autoLogin()
    {
        if(!$this->_allowRemember()) 
        {
            return;
        }
        
        $cookie = Cookie::get('user_autologin');
        if($cookie == null)
        {
            return;
        }
        
        // A cookie was retrieved, so split it into user_id and token
        list($user_id, $test_token) = explode('~', $cookie);
        
        // Try to pull a match from the database
        $count = AdminCookie::where('user_id', $user_id)
            ->where('token', $test_token)
            ->count();
        if ($count != 1) 
        {
            return;
        }
        
        // Save logged in status to reduce db access.
        $this->logged_in = true;

        if(Session::get('user_id')) 
        {
            return;
        }

        // If a session doesn't exist, refresh the autologin token and start the
        // session.

        // Grab the current $user info for the session.
        $user = Admin::find($user_id);
        if ($user === null) 
        {
            return;
        }

        $this->_setupSession(
            $user->id,
            $user->email,
            $user->password,
            true,
            $test_token
        );
    }

    /**
     * Create the auto-login entry in the database.
     *
     * @param $user_id
     * @param null $old_token
     * @return bool
     */
    private function _createAutoLogin($user_id, $old_token = null)
    {
        if (! $this->_allowRemember()) 
        {
            return false;
        }

        // Generate a random string for the token.
        $token = str_random(128);

        // If an old token was not provided, create a new one.
        $dbStatus = false;
        if (empty($old_token)) 
        {
            // Create a new token
            $dbStatus = AdminCookie::insert([
                'user_id'       => $user_id,
                'token'         => $token,
                'created_on'    => $this->getLoginTimestamp()
            ]);
        } 
        else 
        {
            // Refresh the token.
            $dbStatus = AdminCookie::where('user_id', $user_id)
                ->where('token', $token)
                ->update([
                    'token'     => $old_token,
                    'created_on'=> $this->getLoginTimestamp()
                ]);
        }

        if ($dbStatus) {
            // Create the autologin cookie
            Cookie::make(
                'user_autologin',
                $user_id . '~' . $token,
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
        $cookie = Cookie::get('user_autologin');
        if ($cookie !== null) {
            list($user_id, $token) = explode('~', $cookie);

            // Now delete the cookie.
            Cookie::forget('user_autologin');

            // Clean up the database
            AdminCookie::where('user_id', $user_id)
                ->where('token', $token)
                ->delete();
        }

        // Perform a clean up of any autologins older than 2 months.
        AdminCookie::where('created_on', '<', $this->getLoginTimestamp())->delete();
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