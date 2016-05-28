<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItemFile extends Model
{
    protected $table = 'order_item_files';
    public $timestamps = false;
    
    public function order()
    {
        return $this->belongsTo('App\Models\Order', 'order_id');
    }
    
    public function item()
    {
        return $this->belongsTo('App\Models\OrderItem', 'item_id');
    }
}
