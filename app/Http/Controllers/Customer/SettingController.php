<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Core\FrontController;
use App\Libraries\Template;
use App\Models\Customer;
use App\Models\Country;
use App\Models\Region;
use App\Models\CustomerShippingAddress;
use App\Models\CustomerBillingAddress;

use Input, Validator, Redirect;

class SettingController extends FrontController {
    protected $page_title = '';
    protected $page_menu = 'setting';
    public function __construct()
    {
        parent::__construct();
        
        // Check customer is logged in
        $this->auth->restrict();
    }

    ////////////////////////////////////////////////////////////////
    //Action Methods
    ////////////////////////////////////////////////////////////////
    public function index()
    {
        $page = 'account';
        $this->page_title = 'Account Information';
        return $this->view('customer.setting.account', compact('page'));
    }
    
    public function account()
    {
        $page = 'account';
        $this->page_title = 'Account Information';
        return $this->view('customer.setting.account', compact('page'));   
    }
    
    public function password()
    {
        $page = 'password';
        $this->page_title = 'Change Password';
        return $this->view('customer.setting.password', compact('page'));   
    }
    
    public function shipping()
    {
        $this->_getInformation();
        
        $page = 'shipping';
        $this->page_title = 'Shipping Addresses';
        return $this->view('customer.setting.shipping', compact('page')); 
    }
    
    public function billing()
    {
        $this->_getInformation();
        
        $page = 'billing';
        $this->page_title = 'Billing Addresses';
        return $this->view('customer.setting.billing', compact('page'));    
    }
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////   
    public function postAccount()
    {
        $userId = $this->current_customer->id;
        
        //validate posts
        $rules = [
            'first-name' => 'required', 
            'last-name'  => 'required', 
            'email'      => "required|email|unique:customers,email,$userId,id", 
            //'phone'      => 'required', 
        ];
        
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $imageName = $this->_uploadImage();
        
        $this->current_customer->first_name = Input::get('first-name');
        $this->current_customer->last_name  = Input::get('last-name');
        $this->current_customer->email      = Input::get('email');
        $this->current_customer->phone      = Input::get('phone');
        $this->current_customer->is_subscribed = Input::get('newsletter') ? 1 : 0;
        if($imageName != '')
        {
            $this->current_customer->picture = $imageName;
        }
        
        $this->current_customer->save();
                                     
        Template::set_message('Your account information is updated.', 'success');
        
        return redirect(route('customer.setting.account'));
    }
    
    public function postPassword() 
    {
        //validate posts
        $userId = $this->current_customer->id;
        $rules = [
            'current_password'  => "required|check_current_password:customers,id,$userId", 
            'password'          => 'required|min:4', 
            'password_confirm'  => 'required|same:password', 
        ];
        
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $salt = str_random(8);
        $this->current_customer->passsalt = $salt;
        $this->current_customer->password = md5($salt . Input::get('password'));
        $this->current_customer->save();
        
        Template::set_message('Your password is updated.', 'success');
        
        return redirect(route('customer.setting.password'));    
    }
    
    public function postShipping()
    {
        //validate posts
        $rules = [
            'first-name' => 'required', 
            'last-name'  => 'required', 
            //'phone'      => 'required', 
            'country'    => 'required', 
            //'state'      => 'required', 
            'address'    => 'required', 
            'city'       => 'required', 
            'zipcode'    => 'required', 
            //'company'    => 'required', 
        ];
        
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $row = new CustomerShippingAddress;
        $row->customer_id = $this->current_customer->id;
        $row->first_name= Input::get('first-name');
        $row->last_name = Input::get('last-name');
        $row->phone     = Input::get('phone');
        $row->address   = Input::get('address');
        $row->city      = Input::get('city');
        $row->zipcode   = Input::get('zipcode');
        $row->company   = Input::get('company');
        $row->country_id= Input::get('country');
        $row->state_id  = Input::get('state');
        if($this->current_customer->shippingAddresses->isEmpty())
        {
            $row->default = YES;            
        }
        $row->save();
        
        Template::set_message('New shipping address is added.', 'success');
        
        return redirect(route('customer.setting.shipping'));    
    }
    
    public function postBilling()
    {
        //validate posts
        $rules = [
            'first-name' => 'required', 
            'last-name'  => 'required', 
            //'phone'      => 'required', 
            'country'    => 'required', 
            //'state'      => 'required', 
            'address'    => 'required', 
            'city'       => 'required', 
            'zipcode'    => 'required', 
            //'company'    => 'required', 
        ];
        
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $row = new CustomerBillingAddress;
        $row->customer_id = $this->current_customer->id;
        $row->first_name= Input::get('first-name');
        $row->last_name = Input::get('last-name');
        $row->phone     = Input::get('phone');
        $row->address   = Input::get('address');
        $row->city      = Input::get('city');
        $row->zipcode   = Input::get('zipcode');
        $row->company   = Input::get('company');
        $row->country_id= Input::get('country');
        $row->state_id  = Input::get('state');
        if($this->current_customer->billingAddresses->isEmpty())
        {
            $row->default = YES;            
        }
        $row->save();
        
        Template::set_message('New billing address is added.', 'success');
        
        return redirect(route('customer.setting.billing')); 
    }
    ////////////////////////////////////////////////////////////////
    // Private Functions
    ////////////////////////////////////////////////////////////////
    private function _getInformation()
    {
        //get countries && regions
        $countries = Country::where('active', STATUS_ACTIVE)
            ->orderBy('sort', 'asc')
            ->orderBy('name', 'asc')
            ->lists('name', 'id')
            ->toArray();
        list($firstKey) = array_keys($countries);
        
        $sates = array();
        if(Input::has('country'))
            $regions = Region::where('country_id', Input::has('country'))->lists('name', 'id');
        else
            $regions = Region::where('country_id', $firstKey)->lists('name', 'id');
        
        $this->data['countries'] = $countries;    
        $this->data['states'] = $regions;    
    }    
    
    protected function _uploadImage() {
        if(Input::hasFile('avatar-file'))
        {
            $file = Input::file('avatar-file'); 
            $fileName = strtolower($file->getClientOriginalName());
            $targetUri = strtolower(UPLOADS_BASE . '/avatar/' . str_random(1) . '/' . str_random(1));
            $targetPath = public_path($targetUri);
            
            if(!mkpath($targetPath))
            {
                return redirect()
                    ->back()
                    ->withInput();    
            }
            $file->move($targetPath, $fileName);
            
            return $targetUri . '/' . $fileName;  
        }          
        
        return '';
    } 
    
    ////////////////////////////////////////////////////////////////
    // Ajax Functions
    ////////////////////////////////////////////////////////////////
    public function updateDefaultShipping()
    {
        $addressId = Input::get('address-id');   
        
        $result = $this->current_customer->updateDefaultShippingAddress($addressId);
        if($result)
        {
            $params = array(
                'addresses' => $this->current_customer->shippingAddresses,
                'default'   => $this->current_customer->defaultShippingAddress()
            );
            return $this->view('customer.setting._address', $params);        
        }
        
        exit; 
    }
    
    public function updateDefaultBilling()
    {
        $addressId = Input::get('address-id');   
        
        $result = $this->current_customer->updateDefaultBillingAddress($addressId);
        if($result)
        {
            $params = array(
                'addresses' => $this->current_customer->shippingAddresses,
                'default'   => $this->current_customer->defaultBillingAddress()
            );
            return $this->view('customer.setting._address', $params);        
        }
        
        exit;
    }
    
    public function deleteShipping()
    {
        $addressId = Input::get('address-id');
        
        $result = $this->current_customer->deleteShippingAddress($addressId);
        if($result)
        {
            $params = array(
                'addresses' => $this->current_customer->shippingAddresses,
                'default'   => $this->current_customer->defaultShippingAddress()
            );
            return $this->view('customer.setting._address', $params);        
        }
        
        exit;
    }
    
    public function deleteBilling()
    {
        $addressId = Input::get('address-id');
        
        $result = $this->current_customer->deleteBillingAddress($addressId);
        if($result)
        {
            $params = array(
                'addresses' => $this->current_customer->shippingAddresses,
                'default'   => $this->current_customer->defaultBillingAddress()
            );
            return $this->view('customer.setting._address', $params);        
        }
        
        exit;
    }
}