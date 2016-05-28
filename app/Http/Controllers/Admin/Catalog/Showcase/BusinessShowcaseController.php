<?php

namespace App\Http\Controllers\Admin\Catalog\Showcase;

use App\Http\Controllers\Admin\Catalog\Base\AbstractShowcaseController;

class BusinessShowcaseController extends AbstractShowcaseController {

    protected $page = 'business_showcase';
    protected $svc_type = DESIGN_SHOWCASE_BUSINESS;
    protected $card_type= SVC_BUSINESS_CARD;
    protected $page_title = 'Business Design Showcases'; 
    
    protected $list_route = 'admin.showcase.business.list';
    protected $base_route = 'admin.showcase.business';
}