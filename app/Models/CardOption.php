<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardOption extends Model
{
    protected $table = 'card_options';
    
    public $timestamps  = false;
    
    protected static function boot() {
        parent::boot();

        static::deleting(function($card) { // before delete() method call this
             $card->prices()->delete();
        });
    }
    
    public function card()
    {
        return $this->belongsTo('App\Models\Card', 'card_id');
    }
    
    public function feature()
    {
        return $this->belongsTo('App\Models\CardFeature', 'feature_id');
    }
    
    public function prices()
    {
        return $this->hasMany('App\Models\CardPrice', 'option_id');
    }
}
