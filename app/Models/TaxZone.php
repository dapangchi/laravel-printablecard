<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaxZone extends Model
{
    protected $table = 'tax_zones';
    
    public $timestamps  = false;
    
    public function country()
    {
        return $this->belongsTo('App\Models\Country', 'country_id');
    }
    
    public function region()
    {
        return $this->belongsTo('App\Models\Region', 'region_id');
    }
    
    public static function getTaxRate($country, $state)
    {
        $row = self::where('country_id', $country)
            ->where('region_id', $state)
            ->first();
        
        if(isset($row->id)) return $row->tax;
        return 0;
    }
}
