<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SlideImage extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'slide_images';
    
    public $timestamps  = false;
    
    public function slide()
    {
        return $this->belongsTo('App\Models\Slide', 'slide_id');
    }
}
