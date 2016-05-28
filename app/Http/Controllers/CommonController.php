<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Region;
use App\Models\Tag;
use App\Libraries\MyCart;
use Input, Response, Session;

class CommonController extends Controller 
{
    public function getRegions()
    {
        $cid = Input::get('country_id');
        
        $result = '';
        $regions = Region::where('country_id', $cid)->get();
        if($regions !== null) 
        {
            foreach($regions as $r)
            {
                $result .= "<option value='$r->id'>$r->name</option>";
            }  
        }
         
        echo $result;       
        exit;    
    }
    
    public function getTags()
    {
        $result = Tag::orderBy('name')->lists('name');
        
        return Response::json($result);
        exit;
    }  
    
    public function changeCurrency()
    {
        $currency = Input::get('currency');
        MyCart::setCurrency($currency, true);   
        
        echo MyCart::getCurrency();
        exit;    
    }
}