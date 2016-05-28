<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;

/**
 * manage orders
 *
 * Class Order
 * @package App\Models
 */
class Order extends Model
{
    protected $table = 'orders';  
    
    protected static function boot() {
        parent::boot();

        static::deleting(function($order) { // before delete() method call this
             $order->items()->delete();
        });
    }

    /**
     * get order items
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */    
    public function items()
    {
        return $this->hasMany('App\Models\OrderItem', 'order_id');
    }

    /**
     * get order number by string
     *
     * @return string
     */
    public function number()
    {
        return 'OD' . $this->number;
    }

    /**
     * generate new order number
     *
     * @return int
     */
    public static function newNumber()
    {
        $result = self::max('number');
        
        if($result == 0) $result = 10000;
        
        $result++;
        return $result;  
    }
    
    public function statusLang()
    {
        $order_status_list = order_status_list();
        return $order_status_list[$this->status];
    }
    
    public function shippingMethodName()
    {
        return trans('shipping.fedex.' . $this->shipping_method);
    }
    
    public function paymentMethodName()
    {
        if($this->payment_method == PAYMENT_PAYPAL) return 'Paypal';
        else return 'CreditCard';
    }

    /**
     * check if order can be moved to completed status
     *
     * @return bool
     */
    public function canComplete()
    {
        foreach($this->items as $item)
        {
            if($item->job_status != JOB_COMPLETED && $item->job_status != JOB_REFUNDED) return false;
        }
        
        return true;    
    }
    
    public function canTurnAsRefunded()
    {
        foreach($this->items as $item)
        {
            if($item->job_status != JOB_REFUNDED) return false;
        }
        
        return true;    
    }

    /**
     * check if order can be moved to processing status
     *
     * @return bool
     */
    /*public function canProcessing()
    {
        foreach($this->items as $item)
        {
            if($item->job_status != JOB_WORKING) return false;
        }
        
        return true;    
    }*/

    /**
     * update order status to completed
     *
     * @return bool
     */
    public function saveAsCompleted()
    {
        $this->status = ORDER_COMPLETED;
        return $this->save();
    }
    
    public function saveAsRefunded()
    {
        $this->status = ORDER_REFUNDED;
        return $this->save();
    }
    
    public function saveAsProgressing()
    {
        $this->status = ORDER_PROCESSING;
        return $this->save();
    }

    /**
     * check if order is required shipping
     *
     * @return bool
     */
    public function isShippingRequired()
    {
        foreach($this->items as $item)
        {
            if($item->product_type != PRODUCT_DESIGN) return true;
        }    
        
        return false;
    }
}
