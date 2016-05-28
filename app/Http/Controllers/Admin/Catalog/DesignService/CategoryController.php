<?php

namespace App\Http\Controllers\Admin\Catalog\DesignService;

use App\Http\Controllers\Core\AdminController;
use App\Libraries\Template;
use App\Models\Slide;
use App\Models\Design;
use App\Models\DesignWork;
use App\Models\DesignPhase;
use Input, Validator, Request, Redirect;

class CategoryController extends AdminController {
    
    protected $menu = 'design_service';
    protected $page = 'ds_category';
    protected $svc_type = SVC_DESIGN_SERVICE;
    protected $page_title = 'Design Service';
    
    protected $list_route = 'admin.design.category.list';
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
        
        $order      = Request::input('order');
        $orderby    = Request::input('orderby') == 'asc'? 'asc': 'desc';
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
        
        $rows = Design::orderBy($order, $orderby)
            ->paginate($this->list_limit);
        
        return $this->view('catalog.design_service.category.index', compact('rows'));   
    }
    
    public function create()
    {
        //get slides
        $slides = Slide::orderBy('title')->lists('title', 'id'); 
        
        return $this->view('catalog.design_service.category.create', compact('slides'));
    }
    
    public function edit($id)
    {
        //get slides
        $slides = Slide::orderBy('title')->lists('title', 'id'); 
        
        $row = Design::find($id);
        
        return $this->view('catalog.design_service.category.edit', compact('slides', 'row'));
    }
    
    public function delete($id)
    {
        $row = Design::destroy($id);
        
        Template::set_message('Design service has been removed.', 'warning');
        
        return redirect($this->listUrl());
    }
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////
    public function store($id = 0)
    {                                    
        //validate posts
        $rules = [
            'design-name'   => 'required', 
            'design-slide'  => 'required', 
            'thumbnail'     => 'image|mimes:jpg,jpeg,png,gif,bmp|max:10000'
        ];
        
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
            $row = new Design;
        }
        else
        {
            $row = Design::find($id);
        }
        
        // Move upload file
        $imageName = $this->_upload_image();
        
        $row->slide_id      = Input::get('design-slide');
        $row->name          = Input::get('design-name');
        $row->text          = Input::get('design-text');
        $row->description   = Input::get('design-description');
        $row->meta_tag      = Input::get('meta-tag');
        $row->require_logo_design = Input::get('design-require-logo');
        $row->meta_description    = Input::get('meta-description');
        
        if($imageName != '')
        {
            $row->image = $imageName;
        }
        
        $status = $row->save();
        
        // if creating is failed
        if(!$status)
        {
            Template::set_message(trans('msg.has_error'), 'danger');
            
            return redirect()
                ->back()
                ->withInput();
        }
        
        // Move upload images files
        $this->_process_images($row->id);
        
        // insert/update phase
        $this->_process_phases($row->id, $id);
        
        //return list page
        return Redirect::route('admin.design.category.edit', $row->id);
    } 
    
    ////////////////////////////////////////////////////////////////
    // Private Methods
    ////////////////////////////////////////////////////////////////
    private function _process_images($design_id)
    {
        $jdata = json_decode(Input::get('image_data'));
        foreach($jdata as $d)
        {
            // if image is new, then insert it to table
            if($d->type == 'new')
            {
                // Move images to right place
                if(!file_exists(public_path($d->src))) continue;
                if($d->remove == '1') continue;
                
                $imagePath = str_replace('tmp/', '', $d->src);
                $targetPath = public_path(dirname($imagePath));
                
                if(!mkpath($targetPath)) continue;
                @rename(public_path($d->src), public_path($imagePath));

                $image = new DesignWork;
                $image->design_id = $design_id; 
                $image->image = $imagePath;
                $image->label= $d->label;
                $image->link = prep_url($d->link);
                $image->sort = $d->sort;
                $image->save();
            }
            // else if image is exist in table, then update it
            else
            {
                if($d->remove == '1') 
                {
                    DesignWork::destroy($d->id); 
                }
                else
                {
                    $image = DesignWork::where('id', $d->id)
                        ->update([
                            'label' => $d->label, 
                            'sort'  => $d->sort,
                            'link'  => prep_url($d->link)
                        ]);             
                }
            }
        }  
    } 
    
    private function _process_phases($design_id, $isNew)   
    {
        $jdata = json_decode(Input::get('phase_data'));
        foreach($jdata as $d)
        {
            // if image is new, then insert it to table
            if($d->type == 'new')
            {
                // Move images to right place
                if($d->remove == '1') continue;
                
                $phase = new DesignPhase;
                $phase->design_id   = $design_id; 
                $phase->title       = $d->title; 
                $phase->text        = $d->text; 
                $phase->icon_type   = $d->icon; 
                $phase->icon_path   = $d->path; 
                $phase->save();
            }
            // else if image is exist in table, then update it
            else
            {
                if($d->remove == '1') 
                {
                    DesignPhase::destroy($d->id); 
                }
                else                                        
                {
                    $phase = DesignPhase::find($d->id);
                    $phase->title = $d->title;
                    $phase->text = $d->text;
                    if($d->type == 'updated')
                    {
                        $phase->icon_type = $d->icon;
                        $phase->icon_path = $d->path;
                    }
                    $phase->save();     
                }
            }
        } 
    }
    
    private function _upload_image() {
        if(Input::hasFile('thumbnail'))
        {
            $file = Input::file('thumbnail'); 
            
            $fileName = strtolower($file->getClientOriginalName());
            $targetUri = UPLOADS_BASE . '/design/' . substr($fileName, 0, 1) . '/' . substr($fileName, 1, 1);
            $targetPath = public_path($targetUri);
            
            if(!mkpath($targetPath))
            {
                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();    
            }
            $file->move($targetPath, $fileName);
            
            return $targetUri . '/' . $fileName;  
        }          
        
        return '';
    } 
}