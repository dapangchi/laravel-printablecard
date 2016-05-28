<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'regions';
    
    public function country()
    {
        return $this->belongsTo('App\Models\Country', 'country_id');
    }
}
