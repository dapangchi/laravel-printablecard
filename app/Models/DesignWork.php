<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DesignWork extends Model
{
    protected $table = 'design_works';
    
    public $timestamps  = false;
    
    public function design()
    {
        return $this->belongsTo('App\Models\Design', 'design_id');
    }
}
