<?php

namespace App\Http\Controllers\Admin\Catalog\Template;

use App\Http\Controllers\Admin\Catalog\Base\AbstractTemplateController;

class BusinessTemplateController extends AbstractTemplateController {

    protected $menu = 'business_card_template';
    protected $page = 'bct_product';
    protected $svc_type = SVC_BUSINESS_TEMPLATE;
    protected $card_type= SVC_BUSINESS_CARD;
    protected $page_title = 'Business Card Template'; 
    
    protected $list_route = 'admin.template.business.product.list';
    protected $base_route = 'admin.template.business.product';
}