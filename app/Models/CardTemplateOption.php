<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardTemplateOption extends Model
{
    protected $table = 'template_options';
    
    public $timestamps  = false;
    
    public function template()
    {
        return $this->belongsTo('App\Models\CardTemplate', 'template_id');
    }
    
    public function option()
    {
        return $this->belongsTo('App\Models\CardOption', 'card_option_id');
    }
    
    public function feature()
    {
        return $this->belongsTo('App\Models\CardFeature', 'card_feature_id');
    }
    
    static public function dropboxValue($template_id, $feature_id)
    {
        $result = self::where('template_id', $template_id)
            ->where('card_feature_id', $feature_id)
            ->first();
        
        return isset($result->card_option_id) ? $result->card_option_id : null;
    }
    
    static public function hasOption($template_id, $feature_id, $option_id, $side_type=0)
    {
        $result = self::where('template_id', $template_id)
            ->where('card_feature_id', $feature_id)
            ->where('card_option_id', $option_id)
            ->where('side_type', $side_type)
            ->count();
        
        return $result > 0 ? true : false;
    }
}
