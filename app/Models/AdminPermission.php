<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminPermission extends Model
{
    protected $table    = 'admin_permissions';
    public $timestamps  = false;
    
    protected $fillable = ['user_id', 'permission_id'];
    
    public function permission() 
    {
        return $this->belongsTo('App\Models\Permission', 'permission_id');
    }
}
