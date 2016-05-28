<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderHistory extends Model
{
    protected $table = 'order_histories';
    public $timestamps = false;
    
    public function order()
    {
        return $this->belongsTo('App\Models\Order', 'order_id');
    }    
}
