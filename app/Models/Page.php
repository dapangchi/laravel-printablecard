<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Page extends Model implements SluggableInterface
{
    use SluggableTrait;
    
    protected $table = 'pages';
    
    protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'slug',
    ];
    
    public function creator()
    {
        return $this->belongsTo('App\Models\Admin', 'created_by');
    }
    
    public function content()
    {
        return nl2br($this->content);
    }
}
