<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class CardCategory extends Model implements SluggableInterface
{
    use SluggableTrait;
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'card_categories';
    
    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
        'on_update'  => true,
    ];
    
    protected static function boot() {
        parent::boot();

        static::deleting(function($card) { // before delete() method call this
             $card->cards()->delete();
        });
    }
    
    public function cards()
    {
        return $this->hasMany('App\Models\Card', 'category_id');
    }
    
    public function getUri()
    {
        return $this->slug;
    }
    
    public function getUrl()
    {
        return url($this->getUri());
    }
}
