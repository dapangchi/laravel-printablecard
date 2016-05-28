<?php

namespace App\Http\Controllers\Admin\Catalog\Base;

use App\Http\Controllers\Core\AdminController;
use App\Libraries\Template;
use App\Models\CardCategory;

use Input, Validator, Request, URL, Redirect;

class AbstractCategoryController extends AdminController {
    
    protected $menu = '';
    protected $page = '';
    protected $svc_type = 0;
    protected $page_title = '';
    
    protected $route = '';
    protected $list_route = '';
    
    public function __construct()
    {
        parent::__construct();
        
        $this->data['base_route'] = $this->base_route;
        
        $this->restrict('product.card.view');
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
            
            default:
                $order = 'created_at';
                $orderby = 'desc';
                break;
        }
        
        $rows = CardCategory::where('service_id', $this->svc_type)
            ->orderBy($order, $orderby)
            ->paginate($this->list_limit);
        
        return $this->view('catalog.card.category.index', compact('rows'));   
    }
    
    public function create()
    {
        return $this->view('catalog.card.category.create');
    }
    
    public function edit($id)
    {
        $row = CardCategory::find($id);
        
        return $this->view('catalog.card.category.edit', compact('row'));
    }
    
    public function delete($id)
    {
        $this->restrict('product.card.manage');
        
        $row = CardCategory::destroy($id);
        
        Template::set_message('CardCategory has been removed.', 'warning');
        
        return redirect($this->listUrl());
    }
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////
    public function store($id = 0)
    {           
        $this->restrict('product.card.manage');
                                 
        //validate posts
        $rules = [
            'category_name'  => 'required', 
            'thumbnail' => 'image|mimes:jpg,jpeg,png,gif,bmp|max:10000'
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
            $category = new CardCategory;
            $category->service_id = $this->svc_type;
            $category->name = Input::get('category_name');
            $category->text = Input::get('category_text');
            $category->image= $imageName;
            $category->meta_tag         = Input::get('meta_tag');
            $category->meta_description = Input::get('meta_description');
            $status = $category->save(); 
            
            // if creating is failed
            if(!$status)
            {
                Template::set_message(trans('msg.has_error'), 'danger');
                
                return redirect()
                    ->back()
                    ->withInput();
            }
            
            Template::set_message('New category is created.', 'success');
        }
        else
        {
            // Update row
            $category = CardCategory::find($id);
            $category->name = Input::get('category_name');
            $category->text = Input::get('category_text');
            $category->meta_tag         = Input::get('meta_tag');
            $category->meta_description = Input::get('meta_description');
            if($imageName != '')
            {
                $category->image = $imageName;
            }
            $status = $category->save();
            
            // Set update message
            if($status)
            {
                Template::set_message('Category is updated.', 'success');
            }
            else
            {
                Template::set_message(trans('msg.has_error'), 'danger');
            }
            
        }
        
        return Redirect::route("$this->base_route.edit", $category->id);
    }  
    
    protected function _upload_image() {
        if(Input::hasFile('thumbnail'))
        {
            $file = Input::file('thumbnail'); 
            
            $fileName = strtolower($file->getClientOriginalName());
            $targetUri = strtolower(UPLOADS_BASE . '/category/' . str_random(1) . '/' . str_random(1));
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