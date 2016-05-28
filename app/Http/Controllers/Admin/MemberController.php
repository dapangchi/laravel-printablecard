<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Core\AdminController;
use App\Libraries\Template;
use App\Models\Admin;
use App\Models\AdminPermission;
use App\Models\Permission;
use Input, Validator, Request, URL, Redirect;

class MemberController extends AdminController {

    protected $page = 'member';
    protected $page_title = 'Members';
    
    protected $list_route = 'admin.member.list';
     
    public function __construct()
    {
        parent::__construct();
        
        $this->restrict('conf.member.manage');
    }
    
    ////////////////////////////////////////////////////////////////
    //Action Methods
    ////////////////////////////////////////////////////////////////
    public function index()
    {
        //get orders
        $this->saveSorting();
        
        $order = Request::input('order');
        $orderby = Request::input('orderby') == 'asc'? 'asc': 'desc';
        switch($order)
        {
            case 'name':
                $order = 'first_name';
                break;
            case 'email':
            case 'created_at':
                break;
            case 'status':
                $order = 'is_active';
                break;
            
            default:
                $order = 'created_at';
                $orderby = 'desc';
                break;
        }
        
        $rows = Admin::where('id', '!=', $this->current_user->id)
            ->orderBy($order, $orderby)
            ->paginate($this->list_limit);
        
        return $this->view('member.index', compact('rows'));   
    }
    
    public function create()
    {
        return $this->view('member.create');
    }
    
    public function edit($id)
    {
        $row = Admin::find($id);
        
        return $this->view('member.edit', compact('row'));
    }
    
    public function delete($id)
    {
        $row = Admin::find($id);
        
        Template::set_message("Member[ " . $row->full_name() . " ] has been removed.", 'warning');
        
        Admin::destroy($id);
        
        return redirect($this->listUrl());
    }
    
    public function permissions()
    {
        $stuffs = Admin::SelectStuffs()
            ->orderBy('first_name', 'asc')
            ->orderBy('last_name', 'asc')
            ->get();
        $permissions = Permission::orderBy('name')->get();
        
        return $this->view('member.permissions', compact('stuffs', 'permissions'));    
    }
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////
    public function store()
    {   
        //validate posts
        $rules = [];
        
        if(!Input::has('user_id'))
        {
            $rules = [
                'email'     => 'required|email|unique:admins', 
                'password'  => 'required|min:4',
                'first_name' => 'required|max:32',
                'last_name'  => 'required|max:32',
            ];
        }
        else
        {
            $user_id = Input::get('user_id');
            
            $rules = [
                'email'     => "required|email|unique:admins,email,$user_id,id",
                'first_name' => 'required|max:32',
                'last_name'  => 'required|max:32',
            ];    
        }
        
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        if(!Input::has('user_id'))
        {            
            // Insert New User to Table
            $salt = str_random(8);

            $user = new Admin;
            $user->first_name   = Input::get('first_name');
            $user->last_name    = Input::get('last_name');
            $user->email        = Input::get('email');
            $user->passsalt     = $salt;
            $user->password     = md5($salt . Input::get('password'));
            $user->user_type    = Input::get('user_type') == YES ? YES : NO;
            $user->is_active    = Input::get('is_active') == YES ? YES : NO;
            $status = $user->save();
            
            // if creating is failed
            if(!$status)
            {
                Template::set_message(trans('msg.has_error'), 'danger');
                
                return redirect()
                    ->back()
                    ->withInput();
            }
            
            $newName = $user->full_name();
            Template::set_message("New member[$newName] is created.", 'success');
        }
        else
        {
            // Update row
            $user = Admin::find(Input::get('user_id'));
            $user->first_name   = Input::get('first_name');
            $user->last_name    = Input::get('last_name');
            $user->email        = Input::get('email');
            $user->user_type    = Input::get('user_type') == YES ? YES : NO;
            $user->is_active    = Input::get('is_active') == YES ? YES : NO;
            if(Input::has('password'))
            {
                $salt = str_random(8);
                $user->passsalt     = $salt;
                $user->password     = md5($salt . Input::get('password'));
            }
            $status = $user->save();
            
            // Set update message
            if($status)
            {
                Template::set_message("$user->first_name $user->last_name's information is updated.", 'success');
            }
            else
            {
                Template::set_message(trans('msg.has_error'), 'danger');
                
                return redirect()
                    ->back()
                    ->withInput();
            }
            
        }
        
        //return redirect($this->listUrl());
        return Redirect::route('admin.member.list');
    }  
    
    ////////////////////////////////////////////////////////////////
    //Ajax Methods
    ////////////////////////////////////////////////////////////////
    public function ajaxCheckEmail()
    {
        $email = Input::get('email');
        $user_id = Input::get('user_id');
        
        $user = Admin::where('email', $email)->first();
        if($user == null) return 'true';
        if($user->id == $user_id) return 'true';
        
        return 'false';        
    }
    
    public function ajaxUpdatePermission()
    {
        $stuffId = Input::get('stuff-id');   
        $permissionId = Input::get('permission-id');
        $assignValue = Input::get('assign-value');
        $msg = '';
        
        $stuff = Admin::find($stuffId);
        $permission = Permission::find($permissionId);
        if(!isset($stuff->id) || !isset($permission->id)) exit;
        
        if($assignValue == 'true')
        {
            $checkRow = AdminPermission::where('user_id', $stuffId)
                ->where('permission_id', $permissionId)
                ->first();        
            if(!isset($checkRow->id))
            {
                AdminPermission::create(['user_id' => $stuffId, 'permission_id' => $permissionId]);    
                
                $msg = sprintf('Assign permission[%2$s] to %1$s.', $stuff->full_name(), $permission->name);
            }
        }
        else
        {
            AdminPermission::where('user_id', $stuffId)
                ->where('permission_id', $permissionId)
                ->delete();
                
            $msg = sprintf('Remove permission[%2$s] from %1$s.', $stuff->full_name(), $permission->name);
        }
        
        echo $msg;
        exit;
    }
}