<?php

namespace App\Http\Controllers\Admin\Cms;

use App\Http\Controllers\Core\AdminController;
use App\Libraries\Template;
use App\Models\Page;
use Input, Validator, Request, Redirect, URL;

class PageController extends AdminController {

    protected $page = 'page';
    protected $page_title = 'Pages';
    protected $list_route = 'admin.cms.page.list';
    
    public function __construct()
    {
        parent::__construct();  
        
        $this->restrict('conf.content.manage');      
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
            case 'title':
            case 'slug':
            case 'created_at':
                break;
            
            default:
                $order = 'created_at';
                $orderby = 'desc';
                break;
        }
        
        $rows = Page::orderBy($order, $orderby)
            ->paginate($this->list_limit);
        
        return $this->view('cms.page.index', compact('rows'));   
    }
    
    public function create()
    {
        return $this->view('cms.page.create');
    }
    
    public function edit($id)
    {
        $row = Page::find($id);
        
        return $this->view('cms.page.edit', compact('row'));
    }
    
    public function delete($id)
    {
        $row = Page::destroy($id);
        
        Template::set_message('Page has been removed.', 'warning');
        
        return redirect($this->listUrl());
    }
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////
    public function store($id = 0)
    {                                    
        //validate posts
        $rules = [
            'title'     => 'required', 
        ];
        
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $page = null;
        if($id == 0)
        {
            $page = new Page;
            $page->created_by = $this->current_user->id;
        }
        else
        {
            $page = Page::find($id);
        }

        // Update row
        $page->title   = Input::get('title');
        $page->content = Input::get('content');
        $status = $page->save();
        
        // if failed
        if(!$status)
        {
            Template::set_message(trans('msg.has_error'), 'danger');
            return redirect()
                ->back()
                ->withInput();
        }
            
        if($id == 0)
        {
            Template::set_message('New page is created.', 'success');
        }
        else
        {
            Template::set_message('Page is updated.', 'success');
        }
        
        //return redirect($this->listUrl());
        return Redirect::route('admin.cms.page.edit', $page->id);
    }  
     
    ////////////////////////////////////////////////////////////////
    //Ajax Methods
    ////////////////////////////////////////////////////////////////
}