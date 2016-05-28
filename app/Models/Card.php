<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\CardPrice;

class Card extends Model implements SluggableInterface
{
    use SluggableTrait;
    //use SoftDeletes;
    
    protected $table = 'cards';  
    //protected $dates = ['deleted_at']; 
    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
        'on_update'  => true,
    ]; 
    
    protected static function boot() {
        parent::boot();

        static::deleting(function($card) { // before delete() method call this
             $card->images()->delete();
             $card->discounts()->delete();
             $card->features()->delete();
             $card->options()->delete();
             $card->quantities()->delete();
             $card->prices()->delete();
             $card->templates()->delete();
        });
    }
    
    public function image()
    {
        $row = CardImage::where('card_id', $this->id)->where('main', 1)->first();
        if(!isset($row->image)) return '';
        
        return $row->image;
    }
    
    public function images()
    {
        return $this->hasMany('App\Models\CardImage', 'card_id')->orderBy('sort');
    }
    
    public function discounts()
    {
        return $this->hasMany('App\Models\CardDiscount', 'card_id');
    }
    
    public function features()
    {
        return $this->hasMany('App\Models\CardFeature', 'card_id');
    }
    
    public function featuresSorted()
    {
        return CardFeature::where('card_id', $this->id)
            ->orderBy('is_print')
            ->orderBy('sort')
            ->get();
    }
    
    public function featuresNonePrint()
    {
        return CardFeature::where('card_id', $this->id)
            ->where('is_print', 0)
            ->orderBy('sort')
            ->get();
    }
    
    public function featuresPrint()
    {
        return CardFeature::where('card_id', $this->id)
            ->where('is_print', 1)
            ->orderBy('sort')
            ->get();
    }
    
    public function options()
    {
        return $this->hasMany('App\Models\CardOption', 'card_id');
    }
    
    public function quantities()
    {
        return $this->hasMany('App\Models\CardQuantity', 'card_id');
    }
    
    public function prices()
    {
        return $this->hasMany('App\Models\CardPrice', 'card_id');
    }
    
    public function templates()
    {
        return $this->hasMany('App\Models\CardTemplate', 'card_id');
    }
    
    public function service()
    {
        return $this->belongsTo('App\Models\Service', 'service_id');
    }
    
    public function category()
    {
        return $this->belongsTo('App\Models\CardCategory', 'category_id');
    }
    
    public function getOptionPrice($quantity_id, $feature_id, $option_id, $default = 0)
    {
        $row = CardPrice::where('card_id', $this->id)
            ->where('quantity_id', $quantity_id)
            ->where('feature_id', $feature_id)
            ->where('option_id', $option_id)
            ->first();
        
        if(isset($row->price)) return $row->price;
        
        return $default;
    }
    
    //routing
    public function getUri()
    {
        return $this->category->slug . '/' . $this->slug;
    }
    
    public function getUploadUri()
    {
        return $this->getUri() . '/file';
    }

    
    public function getUrl()
    {
        return url($this->getUri());
    }
    
    public function getUploadUrl()
    {
        return url($this->getUploadUri());
    }

    public function getPromotionDiscount()
    {
        $currentDate = date('Y-m-d');

        if($this->promotion_start_date >= $currentDate && $this->promotion_end_date >= $currentDate)
        {
            return min($this->promotion_percent, 100);
        }

        return 0;
    }
    
    public static function available($id)
    {
        $row = self::find($id);
        if(!isset($row->id)) return false;
        
        return true;
    }
}
