<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardDiscount extends Model
{
    protected $table = 'card_discounts';
    
    public $timestamps  = false;
    
    public function product()
    {
        return $this->belongsTo('App\Models\Card', 'card_id');
    }
    
    public static function getSetDiscount($cardId, $sets)
    {
        $row = self::where('card_id', $cardId)
            ->where('sets', '<=', $sets)
            ->orderBy('sets', 'desc')
            ->first();
        
        if(isset($row->id)) return $row->percent;
        
        return 0;
    }
}
