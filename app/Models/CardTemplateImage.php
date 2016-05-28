<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardTemplateImage extends Model
{
    protected $table = 'template_images';
    
    public $timestamps  = false;
    
    protected $fillable = array('template_id', 'image', 'label', 'sort', 'main');
    
    public function template()
    {
        return $this->belongsTo('App\Models\CardTemplate', 'template_id');
    }
    
    public function bubbles()
    {
        return $this->hasMany('App\Models\CardTemplateImageBubble', 'image_id');
    }
    
    public function url() 
    {
        return route('card.template', $this->id);
    }
}
