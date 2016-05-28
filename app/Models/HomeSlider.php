<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeSlider extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'home_sliders';
    public $timestamps  = false;
    
    protected $fillable = array('image', 'url', 'text', 'sort', 'exclude');    
}
