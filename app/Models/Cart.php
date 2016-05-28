<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CartItem;

class Cart extends Model
{
    protected $table = 'carts';  
    
    public $taxPrice = 0;
    public $shippingPrice = 0;
    public $hasCoupon = false;
    public $couponDiscountPercent = 0;
    
    protected static function boot() {
        parent::boot();

        static::deleting(function($order) { // before delete() method call this
             $order->items()->delete();
             $order->options()->delete();
             $order->files()->delete();
        });
    }
    
    public function items()
    {
        return $this->hasMany('App\Models\CartItem', 'cart_id');
    }
    
    public function files()
    {
        return $this->hasMany('App\Models\CartItemFile', 'cart_id');
    }
    
    public function options()
    {
        return $this->hasMany('App\Models\CartItemOption', 'cart_id');
    }
    
    public function subTotalPrice()
    {
        $result = 0;
        
        foreach($this->items as $item)
        {
            $result += $item->item_price;
        }
        
        return $result;
    }
    
    public function discountPrice() 
    {
        return $this->subTotalPrice() * $this->couponDiscountPercent / 100;        
    }
    
    public function totalPrice()
    {
        return $this->subTotalPrice() + $this->taxPrice + $this->shippingPrice - $this->discountPrice();        
    }

    public function totalWeight()
    {
        $result = 0;
        
        foreach($this->items as $item)
        {
            $result += $item->weight;
        }
        
        return $result;    
    }
    
    public function isShippingRequired()
    {
        foreach($this->items as $item)
        {
            if($item->product_type != PRODUCT_DESIGN) return true;
        }    
        
        return false;
    }
}
