<?php

namespace App\Http\Controllers\Admin\Catalog\Card;

use App\Http\Controllers\Admin\Catalog\Base\AbstractCardController;

class BusinessCardController extends AbstractCardController {
    protected $menu = 'business_card';
    protected $page = 'bc_product';
    protected $svc_type = SVC_BUSINESS_CARD;
    protected $page_title = 'Business Card'; 
    
    protected $list_route = 'admin.card.business.product.list';
    protected $base_route = 'admin.card.business.product';
    
    ////////////////////////////////////////////////////////////////
    //Action Methods
    ////////////////////////////////////////////////////////////////
}