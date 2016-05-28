<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $table = 'cart_items';
    
    public $timestamps  = false;
    
    protected static function boot() {
        parent::boot();

        static::deleting(function($item) { // before delete() method call this
             $item->options()->delete();
             $item->files()->delete();
             
             CartItemDesignInfo::where('item_id', $item->id)->delete();
        });
    }
    
    public function files()
    {
        return $this->hasMany('App\Models\CartItemFile', 'item_id');
    }
    
    public function options()
    {
        return $this->hasMany('App\Models\CartItemOption', 'item_id');
    }
    
    public function cart()
    {
        return $this->belongsTo('App\Models\Cart', 'card_id');
    }
    
    public function designInfo()
    {
        return CartItemDesignInfo::where('item_id', $this->id)->first();
    }
    
    public function features()
    {
        return CartItemOption::where('item_id', $this->id)
            ->groupBy('feature_id')
            ->orderBy('feature_sort')
            ->get();
    }
    
    public function featureOptions($featureId)
    {
        return CartItemOption::where('item_id', $this->id)
            ->where('feature_id', $featureId)
            ->orderBy('side_type')
            ->orderBy('option_sort')
            ->get();   
    }
    
    public function cardTemplate()
    {
        $row = CardTemplate::find($this->product_id);
        if(isset($row->id)) return $row;
        
        return false;
    }
    
    public function hasCustomSets()
    {
        $result = unserialize($this->custom_sets);
        if(count($result) > 0) return true;
        
        return false;
    }
    
    public function customSets()
    {
        return unserialize($this->custom_sets);
    }
}
