<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardFeature extends Model
{
    protected $table = 'card_features';
    
    public $timestamps  = false;
    
    protected static function boot() {
        parent::boot();

        static::deleting(function($card) { // before delete() method call this
             $card->options()->delete();
             $card->prices()->delete();
        });
    }
    
    public function card()
    {
        return $this->belongsTo('App\Models\Card', 'card_id');
    }
    
    public function options()
    {
        return $this->hasMany('App\Models\CardOption', 'feature_id');
    }
    
    public function optionsSorted()
    {
        return CardOption::where('feature_id', $this->id)
            ->orderBy('sort')
            ->get();
    }
    
    public function optionList()
    {
        return CardOption::where('feature_id', $this->id)
            ->orderBy('sort')
            ->lists('name', 'id');
    }
    
    public function prices()
    {
        return $this->hasMany('App\Models\CardPrice', 'feature_id');
    }
}
