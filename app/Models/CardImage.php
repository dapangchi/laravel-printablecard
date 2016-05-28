<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardImage extends Model
{
    protected $table = 'card_images';
    
    public $timestamps  = false;
    
    public function card()
    {
        return $this->belongsTo('App\Models\Card', 'card_id');
    }
    
    public function bubbles()
    {
        return $this->hasMany('App\Models\CardImageBubble', 'image_id');
    }
    
    public function url() 
    {
        return route('card.image', $this->id);
    }
}
