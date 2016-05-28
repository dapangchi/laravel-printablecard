<?php

namespace App\Http\Controllers\Admin\Catalog\DesignService;

use App\Http\Controllers\Core\AdminController;
use App\Libraries\Template;
use App\Models\Design;
use App\Models\DesignPackage;
use App\Models\DesignWork;
use App\Models\DesignPhase;
use Input, Validator, Request, Redirect;

class ProductController extends AdminController {

    protected $menu = 'design_service';
    protected $page = 'ds_product';
    protected $svc_type = SVC_DESIGN_SERVICE;
    protected $page_title = 'Design Service'; 
    
    protected $list_route = 'admin.design.product.list';
    
    public function __construct()
    {
        parent::__construct();
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
            case 'slug':
            case 'created_at':
                break;
            case 'category':
                $order = 'designs.name';  
                break;
            
            default:
                $order = 'created_at';
                $orderby = 'desc';
                break;
        }
        
        $rows = DesignPackage::select('design_packages.*')
            ->join('designs', 'designs.id', '=', 'design_packages.design_id')        
            ->orderBy($order, $orderby)
            ->paginate($this->list_limit);
        
        return $this->view('catalog.design_service.product.index', compact('rows'));   
    }
    
    public function create()
    {
        $categories = Design::orderBy('name')->lists('name', 'id');
                                 
        return $this->view('catalog.design_service.product.create', compact('categories'));
    }
    
    public function edit($id)
    {
        $categories = Design::orderBy('name')->lists('name', 'id');
            
        $row = DesignPackage::find($id);
        
        return $this->view('catalog.design_service.product.edit', compact('row', 'categories'));
    }
    
    public function delete($id)
    {
        $row = DesignPackage::destroy($id);
        
        Template::set_message('Design package has been removed.', 'warning');
        
        return redirect($this->listUrl());
    }
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////
    public function store($id = 0)
    {                                    
        //validate posts
        $rules = [
            'package-name'      => 'required', 
            'package-category'  => 'required',
            'package-price'     => 'required|numeric',
            'thumbnail'         => 'image|mimes:jpg,jpeg,png,gif,bmp|max:10000'
        ];
        
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $package = null;        
        if($id == 0)
        {
            $package = new DesignPackage;
        }
        else
        {
            $package = DesignPackage::find($id);
        }
        
        // Move upload file
        $imageName = $this->uploadImage('thumbnail', 'design/category');
        
        $package->design_id = Input::get('package-category');
        $package->name      = Input::get('package-name');
        $package->price     = Input::get('package-price');
        $package->description = Input::get('package-description');

        if($imageName != '')
        {
            $package->image = $imageName;
        }
        
        $status = $package->save();
        
        // if creating is failed
        if(!$status)
        {
            Template::set_message(trans('msg.has_error'), 'danger');
            
            return redirect()
                ->back()
                ->withInput();
        }
        
        if($id == 0)
        {
            Template::set_message('New package is created.', 'success');
        }
        else
        {
            Template::set_message('Package is updated.', 'success');     
        }
        
        //return redirect($this->controller_uri);
        return Redirect::route("admin.design.product.edit", $package->id);
    }  
}