<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShowcaseImage extends Model
{
    protected $table = 'showcase_images';
    
    public $timestamps  = false;
    
    public function template()
    {
        return $this->belongsTo('App\Models\Showcase', 'showcase_id');
    }
}
