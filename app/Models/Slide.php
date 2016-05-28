<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'slides';
    
    protected static function boot() {
        parent::boot();

        static::deleting(function($slide) { // before delete() method call this
             $slide->images()->delete();
        });
    }
    
    public function images()
    {
        return $this->hasMany('App\Models\SlideImage', 'slide_id')->orderBy('sort');
    }
    
    public function mainImage()
    {
        $row = SlideImage::where('slide_id', $this->id)
            ->where('main', 1)
            ->first();
        
        if(isset($row->id)) return $row->image;
        
        return '';
    }
}
