<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CountryIP extends Model
{
    protected $table = 'country_ips';
    
    public $timestamps  = false;
    
    public static function checkInCanada($ipAddress) 
    {
        $ipv6 = inet_aton($ipAddress);
        $rows = self::where('ip_from', '<=', $ipv6)
            ->where('ip_to', '>=', $ipv6)
            ->get();
            
        return !$rows->isEmpty();
    }
}
