<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardQuantity extends Model
{
    protected $table = 'card_quantities';
    
    public $timestamps  = false;
    
    protected static function boot() {
        parent::boot();

        static::deleting(function($card) { // before delete() method call this
             $card->prices()->delete();
        });
    }
    
    public function prices()
    {
        return $this->hasMany('App\Models\CardPrice', 'quantity_id');
    }
    
    public function card()
    {
        return $this->belongsTo('App\Models\Card', 'card_id');
    }
}
