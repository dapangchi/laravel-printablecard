<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminCookie extends Model
{
    protected $table    = 'admin_cookies';
    public $timestamps  = false;
    
    protected $fillable = ['user_id', 'token', 'created_on'];
}
