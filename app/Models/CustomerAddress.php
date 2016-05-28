<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
      
class CustomerAddress extends Model
{
    protected $table = '';
    
    public function full_name()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
    
    public function country()
    {
        return $this->belongsTo('App\Models\Country', 'country_id');
    }
    
    public function state()
    {
        return $this->belongsTo('App\Models\Region', 'state_id');
    }
}