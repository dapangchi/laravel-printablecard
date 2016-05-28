<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'settings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'module', 'value'];
    
    public $timestamps  = false;
    
    static function getCurrencyRate()
    {
        $row = Setting::where('name', 'sales.currency_rate')->first();
        
        return isset($row->value) ? $row->value : 1;
    }
    
    /**
    * return result by index array
    * 
    * @param mixed $field
    * @param mixed $value
    * @param mixed $type
    * @return []
    */
    static function allBy($field=null, $value=null, $type='and')
    {
        // Setup the field/value check.
        $results = null;       
        if ($field != null && !is_array($field)) 
        {
            $field = array($field => $value);
            
            if ($type == 'or') 
            {
                $results = Setting::orWhere($field)->get();
            } 
            else 
            {
                $results = Setting::where($field)->get();
            }
        }
        else
        {
            $results = Setting::all();
        }
        
        $resultArray = array();
        foreach ($results as $record) 
        {
            $resultArray[$record->name] = $record->value;
        }

        return $resultArray;
    }
    
    /**
    * update batch rows
    *  
    * @param mixed $data
    */
    static function updateBatch($data)
    {
        if(!is_array($data) && empty($data)) return false;
        
        foreach($data as $key => $value)
        {
            $affectedRows = Setting::where('name', $key)->update(['value' => $value]);
            
            if($affectedRows === null) return false;
        }
        
        return true;
    }
}
