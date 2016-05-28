<?php

namespace App\Models;

use App\Models\CustomerShippingAddress;
use App\Models\CustomerBillingAddress;

use Illuminate\Database\Eloquent\Model;
use DB;
class Customer extends Model
{
    protected $table = 'customers';

    /**
     * get customer's full name
     *
     * @return string
     */
    public function full_name()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    /**
     * get all customer's orders
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function orders()
    {
        return $this->belongsTo('App\Models\Order', 'customer_id');
    }

    /**
     * get customer's status by string
     *
     * @param bool $label
     * @return string
     */
    public function status_lang($label=false)
    {
        $lang = '';
        $class = '';
        if($this->is_active == STATUS_ACTIVE)
        {
            $lang = 'Active';
            $class = 'success';
        }
        else if($this->job_status == STATUS_INACTIVE)
        {
            $lang = 'InActive';
            $class = 'warning';
        }
        
        if($label == false) return $lang;
        
        return "<label class='text-$class'>$lang</label>";
    }

    /**
     * get all customer's shipping addresses
     *
     * @return mixed
     */
    public function shippingAddresses()
    {
        return $this->hasMany('App\Models\CustomerShippingAddress', 'customer_id')
            ->orderBy('default', 'desc')
            ->orderBy('first_name')
            ->orderBy('last_name');
    }

    /**
     * get all customers billing addresses
     *
     * @return mixed
     */
    public function billingAddresses()
    {
        return $this->hasMany('App\Models\CustomerBillingAddress', 'customer_id')
            ->orderBy('default', 'desc')
            ->orderBy('first_name')
            ->orderBy('last_name');
    }

    /**
     * get customer's default shipping address
     *
     * @return \App\Models\CustomerShippingAddress
     */
    public function defaultShippingAddress()
    {
        $row = CustomerShippingAddress::where('customer_id', $this->id)
            ->where('default', YES)
            ->first();
        
        if(!isset($row->id)) 
        {
            $row = CustomerShippingAddress::where('customer_id', $this->id)
                ->first();
            
            if(!isset($row->id)) 
            {
                $row = new CustomerShippingAddress;
            }
        }
        
        return $row;
    }

    /**
     * get customer's default billing address
     *
     * @return \App\Models\CustomerBillingAddress
     */
    public function defaultBillingAddress()
    {
        $row = CustomerBillingAddress::where('customer_id', $this->id)
            ->where('default', YES)
            ->first();
        
        if(!isset($row->id)) 
        {
            $row = CustomerBillingAddress::where('customer_id', $this->id)
                ->first();
            
            if(!isset($row->id)) 
            {
                $row = new CustomerBillingAddress;
            }
        }
        
        return $row;
    }

    /**
     * delete shipping address
     *
     * @param $addressId
     * @return mixed
     */
    public function deleteShippingAddress($addressId)
    {
        return CustomerShippingAddress::where('customer_id', $this->id)
            ->where('id', $addressId)
            ->delete();
    }

    /**
     * delete billing address
     *
     * @param $addressId
     * @return mixed
     */
    public function deleteBillingAddress($addressId)
    {
        return CustomerBillingAddress::where('customer_id', $this->id)
            ->where('id', $addressId)
            ->delete();
    }

    /**
     * update default shipping address
     *
     * @param $addressId
     * @return bool
     */
    public function updateDefaultShippingAddress($addressId)
    {
        $row = CustomerShippingAddress::find($addressId);
        if(!isset($row->id)) return false;
        if($row->customer_id !== $this->id) return false;
        
        //remove old default address
        CustomerShippingAddress::where('customer_id', $this->id)
            ->update(['default' => NO]);
        
        $row->default = YES;
        return $row->update();        
    }

    /**
     * update default billing address
     *
     * @param $addressId
     * @return bool
     */
    public function updateDefaultBillingAddress($addressId)
    {
        $row = CustomerBillingAddress::find($addressId);
        if(!isset($row->id)) return false;
        if($row->customer_id !== $this->id) return false;
        
        //remove old default address
        CustomerBillingAddress::where('customer_id', $this->id)
            ->update(['default' => NO]);
            
        $row->default = YES;
        return $row->update();  
    }
}
