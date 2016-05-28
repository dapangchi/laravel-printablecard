<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShowcaseOption extends Model
{
    protected $table = 'showcase_options';
    
    public $timestamps  = false;
    
    public function showcase()
    {
        return $this->belongsTo('App\Models\Showcase', 'showcase_id');
    }
    
    public function option()
    {
        return $this->belongsTo('App\Models\CardOption', 'card_option_id');
    }
    
    public function feature()
    {
        return $this->belongsTo('App\Models\CardFeature', 'card_feature_id');
    }
    
    static public function dropboxValue($showcase_id, $feature_id)
    {
        $result = self::where('showcase_id', $showcase_id)
            ->where('card_feature_id', $feature_id)
            ->first();
        
        return isset($result->card_option_id) ? $result->card_option_id : null;
    }
    
    static public function hasOption($showcase_id, $feature_id, $option_id, $side_type=0)
    {
        $result = self::where('showcase_id', $showcase_id)
            ->where('card_feature_id', $feature_id)
            ->where('card_option_id', $option_id)
            ->where('side_type', $side_type)
            ->count();
        
        return $result > 0 ? true : false;
    }
}
