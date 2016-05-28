<?php

namespace App\Http\Controllers\Admin\Catalog\Card;

use App\Http\Controllers\Admin\Catalog\Base\AbstractCategoryController;

class BusinessCategoryController extends AbstractCategoryController {
    
    protected $menu = 'business_card';
    protected $page = 'bc_category';
    protected $svc_type = SVC_BUSINESS_CARD;
    protected $page_title = 'Business Card';
    
    protected $base_route = 'admin.card.business.category';
    protected $list_route = 'admin.card.business.category.list';
    
    public function __construct()
    {
        parent::__construct();
    }
    
    ////////////////////////////////////////////////////////////////
    //Action Methods
    ////////////////////////////////////////////////////////////////
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////
}