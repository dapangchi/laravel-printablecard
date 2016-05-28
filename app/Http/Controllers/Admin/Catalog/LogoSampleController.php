<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Http\Controllers\Core\AdminController;
use App\Libraries\Template;
use App\Models\LogoSample;

use Input, Validator, Request, Redirect;

class LogoSampleController extends AdminController {
    
    protected $page = 'logosample';
    protected $page_title = 'Logo Samples';
    
    protected $list_route = 'admin.logosample.list';
    
    public function __construct()
    {
        parent::__construct();
        
        $this->restrict('product.logosample.view');
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
            case 'created_at':
                break;
            
            default:
                $order = 'created_at';
                $orderby = 'desc';
                break;
        }
        
        $rows = LogoSample::orderBy($order, $orderby)
            ->paginate($this->list_limit);
        
        return $this->view('catalog.logosample.index', compact('rows'));   
    }
    
    public function create()
    {
        return $this->view('catalog.logosample.create');
    }
    
    public function edit($id)
    {
        $row = LogoSample::find($id);
        
        return $this->view('catalog.logosample.edit', compact('row'));
    }
    
    public function delete($id)
    {
        $this->restrict('product.logosample.manage');
        
        $row = LogoSample::destroy($id);
        
        Template::set_message('Logo has been removed.', 'warning');
        
        return redirect($this->listUrl());
    }
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////
    public function store($id = 0)
    {                 
        $this->restrict('product.logosample.manage');
                           
        //validate posts
        $extra = '';
        if($id == 0) 
        {
            $extra = 'required|';
        }
        
        $rules = [
            'logo_name'  => 'required', 
            'logo_image' => $extra . 'image|mimes:jpg,jpeg,png,gif,bmp|max:10000'
        ];
        
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        // Move upload file
        $imageName = $this->_upload_image();
        
        if($id == 0)
        {
            $row = new LogoSample;
            $row->name = Input::get('logo_name');
            $row->image= $imageName;
            $status = $row->save(); 
            
            // if creating is failed
            if(!$status)
            {
                Template::set_message(trans('msg.has_error'), 'danger');
                
                return redirect()
                    ->back()
                    ->withInput();
            }
            
            Template::set_message('New logo is created.', 'success');
        }
        else
        {
            // Update row
            $row = LogoSample::find($id);
            $row->name = Input::get('logo_name');
            if($imageName != '')
            {
                $row->image = $imageName;
            }
            $status = $row->save();
            
            // Set update message
            if($status)
            {
                Template::set_message('Logo is updated.', 'success');
            }
            else
            {
                Template::set_message(trans('msg.has_error'), 'danger');
            }
            
        }
        
        return Redirect::route("admin.logosample.edit", $row->id);
    }  
    
    protected function _upload_image() {
        if(Input::hasFile('logo_image'))
        {
            $file = Input::file('logo_image'); 
            
            $fileName = strtolower($file->getClientOriginalName());
            $targetUri = strtolower(UPLOADS_BASE . '/logosample/' . str_random(1) . '/' . str_random(1));
            $targetPath = public_path($targetUri);
            
            if(!mkpath($targetPath))
            {
                return redirect()
                    ->back()
                    ->withInput();    
            }
            $file->move($targetPath, $fileName);
            
            return $targetUri . '/' . $fileName;  
        }          
        
        return '';
    } 
    ////////////////////////////////////////////////////////////////
    //Ajax Methods
    ////////////////////////////////////////////////////////////////
}