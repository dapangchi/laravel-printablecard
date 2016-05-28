<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardImageBubble extends Model
{
    protected $table = 'card_image_bubbles';
    
    public $timestamps  = false;
    
    public function card()
    {
        return $this->belongsTo('App\Models\Card', 'card_id');
    }
    
    public function image()
    {
        return $this->belongsTo('App\Models\CardImage', 'image_id');
    }
}
