<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItemFile extends Model
{
    protected $table = 'cart_item_files';
    
    public function cart()
    {
        return $this->belongsTo('App\Models\Cart', 'card_id');
    }
}
