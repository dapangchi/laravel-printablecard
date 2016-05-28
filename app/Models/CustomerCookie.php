<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerCookie extends Model
{
    protected $table    = 'customer_cookies';
    public $timestamps  = false;
    
    protected $fillable = ['customer_id', 'token', 'created_on'];
}