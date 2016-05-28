<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Design extends Model implements SluggableInterface
{
    use SluggableTrait;
    
    protected $table = 'designs';
    
    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
        'on_update'  => true,
    ]; 
    
    protected static function boot() {
        parent::boot();

        static::deleting(function($design) { // before delete() method call this
             $design->packages()->delete();
             $design->phases()->delete();
             $design->works()->delete();
        });
    }
    
    public function slide()
    {
        return $this->belongsTo('App\Models\Slide', 'slide_id');
    }
    
    public function packages()
    {
        return $this->hasMany('App\Models\DesignPackage', 'design_id');
    }
    
    public function phases()
    {
        return $this->hasMany('App\Models\DesignPhase', 'design_id');
    }
    
    public function works()
    {
        return $this->hasMany('App\Models\DesignWork', 'design_id');
    }
}