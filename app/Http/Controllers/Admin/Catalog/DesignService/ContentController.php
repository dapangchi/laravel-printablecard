<?php

namespace App\Http\Controllers\Admin\Catalog\DesignService;

use App\Http\Controllers\Admin\Catalog\Base\AbstractContentController;
use App\Libraries\Template;
use App\Models\Service;
use App\Models\Slide;
use Input, Validator;

class ContentController extends AbstractContentController {

    protected $menu = 'design_service';
    protected $page = 'ds_content';
    protected $svc_type = SVC_DESIGN_SERVICE;  
    protected $page_title = 'Design Service';
    
    protected $base_route = 'admin.design.content';
     
    public function __construct()
    {
        parent::__construct();
        
        $this->restrict('product.design.view');
    }
    
    ////////////////////////////////////////////////////////////////
    //Action Methods
    ////////////////////////////////////////////////////////////////
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////    
    public function store()
    {
        $this->restrict('product.design.manage');
        
        parent::store();
    }
}