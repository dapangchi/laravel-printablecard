<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardTemplateImageBubble extends Model
{
    protected $table = 'template_image_bubbles';
    
    public $timestamps  = false;
    
    public function template()
    {
        return $this->belongsTo('App\Models\CardTemplate', 'template_id');
    }
    
    public function image()
    {
        return $this->belongsTo('App\Models\CardTemplateImage', 'image_id');
    }
}
