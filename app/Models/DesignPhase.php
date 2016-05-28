<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DesignPhase extends Model
{
    protected $table    = 'design_phases';
    public $timestamps  = false;
    
    protected $fillable = ['design_id', 'icon', 'title', 'text'];
    
    public function design()
    {
        return $this->belongsTo('App\Models\Design', 'design_id');
    }
}
