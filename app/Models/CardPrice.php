<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CardOption;

class CardPrice extends Model
{
    protected $table = 'card_prices';
    
    public $timestamps  = false;
    
    public function card()
    {
        return $this->belongsTo('App\Models\Card', 'card_id');
    }
    
    public function quantity()
    {
        return $this->belongsTo('App\Models\CardQuantity', 'quantity_id');
    }
    
    public function feature()
    {
        return $this->belongsTo('App\Models\CardFeature', 'feature_id');
    }
    
    public function option()
    {
        return $this->belongsTo('App\Models\CardOption', 'option_id');
    }
    
    static public function price($cardId, $quantityId, $featureId, $optionId)
    {
        $row = CardPrice::where('card_id', $cardId)
            ->where('quantity_id', $quantityId)
            ->where('feature_id', $featureId)
            ->where('option_id', $optionId)
            ->first();
            
        if(isset($row->id)) return $row->price;
        else {
            $optionRow = CardOption::find($optionId);
            if(isset($optionRow->id)) return $optionRow->price;
        }
        
        return 0;
    }
}
