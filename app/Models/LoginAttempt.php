<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Request;
class LoginAttempt extends Model
{
    protected $table    = 'login_attempts';
    public $timestamps  = false;
    
    public static function increase($type = 'customer')
    {
        $clientIP = Request::ip();
        
        $row = new LoginAttempt();
        $row->ip_address = $clientIP;
        $row->login = $type;
        $row->time = time();
        $row->save();
    }
    
    public static function clear($type = 'customer')
    {
        $clientIP = Request::ip();
        
        return LoginAttempt::where('ip_address', $clientIP)
            ->where('login', $type)
            ->delete();    
    }
    
    public static function isBlocked($type = 'customer', &$time = 0)
    {
        $clientIP = Request::ip();
        $limitAttempt = 5; //limit_attepmt
        $cycleTime = 60 * 10; //10 mins
        
        $rows = LoginAttempt::where('ip_address', $clientIP)
            ->where('login', $type) 
            ->orderBy('time', 'desc')
            ->get();
        
        $curTime = time();
        if($rows->count() >= $limitAttempt) 
        {
            if($rows[0]->time + $cycleTime > $curTime)
            {
                $time = ceil(($rows[0]->time + $cycleTime - $curTime) / 60); 
                return true;
            }
            else
            {
                //clear before 10mins
                LoginAttempt::where('ip_address', $clientIP)
                    ->where('login', $type)
                    ->where('time', '<=', $curTime - $cycleTime)
                    ->delete(); 
            }
        }
        
        return false;
    }
}
