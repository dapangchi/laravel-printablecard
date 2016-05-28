<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItemOption extends Model
{
    protected $table = 'cart_item_options';
    
    public $timestamps  = false;
    
    public function cart()
    {
        return $this->belongsTo('App\Models\Cart', 'card_id');
    }
}
