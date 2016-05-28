<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AdminPermission;

class Admin extends Model
{
    protected $table = 'admins';
    protected $permissions = null;
    
    public static function SelectAdmins()
    {
        return self::where('user_type', USER_ADMIN);
    }
    
    public static function SelectStuffs()
    {
        return self::where('user_type', USER_STUFF);
    }

    public function full_name()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
    
    public function status_lang($label=false)
    {
        $lang = '';
        $class = '';
        if($this->is_active == STATUS_ACTIVE)
        {
            $lang = 'Active';
            $class = 'success';
        }
        else if($this->job_status == STATUS_INACTIVE)
        {
            $lang = 'InActive';
            $class = 'warning';
        }
        
        if($label == false) return $lang;
        
        return "<label class='text-$class'>$lang</label>";
    }

    /**
     * check if user has permission
     *
     * @param $permission
     * @param bool|false $force
     * @return bool
     */
    public function has_permission($permission, $force=false)
    {
        //if user is admin, always return true
        if($this->user_type == USER_ADMIN && $force == false) return true;
        
        //load permissions
        $this->load_permissions();
        
        if(isset($this->permissions[$permission])) return true;
        
        return false;
    }  

    /**
     * check if user has any permission in listed array
     *
     * @param array $permissions
     * @return bool
     */
    public function has_any_permission($permissions=array())
    {
        if(!is_array($permissions)) return false;
        
        $this->load_permissions();
        
        foreach($permissions as $p)
        {
            if($this->has_permission($p)) return true;
        }
        
        return false;
    }
    
    /**
     * check if user have all permissions in listed in array
     *
     * @param array $permissions
     * @return bool
     */
    public function has_all_permissions($permissions=array())
    {
        if(!is_array($permissions) && empty($permissions)) return false;
        
        $this->load_permissions();
        
        foreach($permissions as $p)
        {
            if(!$this->has_permission($p)) return false;
        }
        
        return true;
    }
    
    private function load_permissions()
    {
        if($this->permissions != null) return;
        
        $rows = AdminPermission::where('user_id', $this->id)->get();   
        foreach($rows as $row)
        {     
            $this->permissions[$row->permission->code] = $row->permission->id;
        }  
        
        return;
    }
}
