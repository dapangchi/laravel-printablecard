<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItemDesignInfo extends Model
{
    protected $table = 'order_item_design_info';
    public $timestamps = false;
    
    public function order()
    {
        return $this->belongsTo('App\Models\Order', 'order_id');
    }
    
    public function item()
    {
        return $this->belongsTo('App\Models\OrderItem', 'order_id');
    }       
}
