<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItemDesignInfo extends Model
{
    protected $table = 'cart_item_design_info';
    public $timestamps = false;
    
    public function cart()
    {
        return $this->belongsTo('App\Models\Cart', 'card_id');
    }
    
    public function item()
    {
        return $this->belongsTo('App\Models\CartItem', 'item_id');
    }
}
