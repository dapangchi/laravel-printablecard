<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerPasswordReset extends Model
{
    protected $table    = 'customer_password_resets';
    public $timestamps  = false;
    
    protected $fillable = ['email', 'token', 'expire'];
}