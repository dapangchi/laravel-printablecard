<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Core\AdminController;
use App\Libraries\Template;
use App\Models\Permission;
use Input, Validator, Request, URL, Redirect;

class PermissionController extends AdminController {

    protected $page = 'permission';
    protected $page_title = 'Permissions';
    
    protected $list_route = 'admin.permission.list';
     
    public function __construct()
    {
        parent::__construct();
        
        $this->restrict('conf.setting.manage');
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
            case 'code':
            case 'name':
            case 'description':
                break;
            case 'created':
                $order = 'created_at';
                break;
            default:
                $order = 'code';
                $orderby = 'asc';
                break;
        }
        
        $rows = Permission::orderBy($order, $orderby)
            ->paginate($this->list_limit);
        
        return $this->view('permission.index', compact('rows'));   
    }
    
    public function create()
    {
        return $this->view('permission.create');
    }
    
    public function edit($id)
    {
        $row = Permission::find($id);
        
        return $this->view('permission.edit', compact('row'));
    }
    
    public function delete($id)
    {
        $row = Permission::find($id);
        
        Template::set_message("Permission[ " . $row->name . " ] has been removed.", 'warning');
        
        Permission::destroy($id);
        
        return redirect($this->listUrl());
    }
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////
    public function store($id=0)
    {                                    
        //validate posts
        $msg = '';
        $rules = [
            'permission-code' => 'required',
            'permission-name' => 'required',
            //'permission-description' => 'required',
        ];
        
        if($id == 0)
        {
            $rules['permission-code'] = 'required|unique:permissions,code,$id,id';
        }
        
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $row = null;
        if($id == 0)
        {            
            $row = new Permission;
            $row->code = Input::get('permission-code');
            
            $msg = "New permission[%s] is created.";
        }
        else
        {
            $row = Permission::find($id);
            
            $msg = "Permission[%s] is updated.";
        }
        
        $row->name = Input::get('permission-name');
        $row->description = Input::get('permission-description');
        $row->save();
        
        Template::set_message(sprintf($msg, $row->name), 'success');
        
        //return redirect($this->listUrl());
        return redirect(route('admin.permission.list').'?order=created&orderby=desc');
    }
}