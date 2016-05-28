<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Service extends Model implements SluggableInterface
{
    use SluggableTrait;
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'services';
    
    protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'slug',
    ];
    
    protected $fillable = array('id', 'name', 'title', 'meta_tag', 'meta_description', 'slide_id');
    
    public function slide()
    {
        return $this->belongsTo('App\Models\Slide', 'slide_id');
    }
    
    public function categories()
    {
        return $this->hasMany('App\Models\Category', 'service_id');
    }
    
    public function products()
    {
        return $this->hasMany('App\Models\Product', 'product_id');
    }
}
