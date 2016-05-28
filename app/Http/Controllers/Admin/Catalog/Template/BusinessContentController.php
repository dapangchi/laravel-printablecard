<?php

namespace App\Http\Controllers\Admin\Catalog\Template;

use App\Http\Controllers\Admin\Catalog\Base\AbstractContentController;

class BusinessContentController extends AbstractContentController {

    protected $menu = 'business_card_template';
    protected $page = 'bct_content';
    protected $svc_type = SVC_BUSINESS_TEMPLATE;
    protected $page_title = 'Business Card Template';
    
    protected $base_route = 'admin.template.business.content';
    public function __construct()
    {
        parent::__construct();
        
        $this->restrict('product.template.view');
    }
    
    ////////////////////////////////////////////////////////////////
    //Action Methods
    ////////////////////////////////////////////////////////////////
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////    
    public function store()
    {
        $this->restrict('product.template.manage');
        
        parent::store();
    }
}