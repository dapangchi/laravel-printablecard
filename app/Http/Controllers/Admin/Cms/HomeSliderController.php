<?php

namespace App\Http\Controllers\Admin\Cms;

use App\Http\Controllers\Core\AdminController;
use App\Libraries\Template;
use App\Models\HomeSlider;
use Input, Redirect;

class HomeSliderController extends AdminController 
{
    protected $page = 'homeslider';
    protected $page_title = 'HomeSlider';
    
    public function __construct()
    {
        parent::__construct();   
        
        $this->restrict('conf.content.manage');
    }
    
    ////////////////////////////////////////////////////////////////
    // Action Methods
    ////////////////////////////////////////////////////////////////
    public function index()
    {
        $rows = HomeSlider::orderBy('sort', 'asc')->get();
        
        return $this->view('cms.homeslider.index', compact('rows'));
    }
    
    ////////////////////////////////////////////////////////////////
    // Post Methods
    ////////////////////////////////////////////////////////////////
    public function store()
    {                                    
        // Insert Images
        $this->_process_images();    
        
        Template::set_message('Homepage slider is updated.', 'success');
        return Redirect::route('admin.cms.homdeslider.compose');
    } 
    
    ////////////////////////////////////////////////////////////////
    // Private Methods
    ////////////////////////////////////////////////////////////////
    public function _process_images()
    {
        $jdata = json_decode(Input::get('image_data'));
        foreach($jdata as $d)
        {
            if($d->type == 'new')
            {
                // Move images to right place
                if(!file_exists(public_path($d->src))) continue;
                if($d->remove == '1') continue;
                
                $imagePath = str_replace('tmp/', '', $d->src);
                $targetPath = public_path(dirname($imagePath));
                if(!mkpath($targetPath)) continue;
                @rename(public_path($d->src), public_path($imagePath));
                
                $image = HomeSlider::create([
                    'image'     => $imagePath,
                    'text'      => $d->text,
                    'url'       => prep_url($d->url),
                    'sort'      => $d->sort,
                ]);         
            }
            else
            {
                if($d->remove == '1') 
                {
                    HomeSlider::destroy($d->id); 
                }
                else
                {    
                    $image = HomeSlider::where('id', $d->id)
                        ->update([
                            'text'  => $d->text, 
                            'url'   => prep_url($d->url), 
                            'sort'  => $d->sort
                        ]);             
                }
            }
        }  
    }
}