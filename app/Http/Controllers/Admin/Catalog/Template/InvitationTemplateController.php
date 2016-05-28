<?php

namespace App\Http\Controllers\Admin\Catalog\Template;

use App\Http\Controllers\Admin\Catalog\Base\AbstractTemplateController;

class InvitationTemplateController extends AbstractTemplateController {

    protected $menu = 'invitation_card_template';
    protected $page = 'ict_product';
    protected $svc_type = SVC_INVITATION_TEMPLATE;
    protected $card_type= SVC_INVITATION_CARD;
    protected $page_title = 'Invitation Card Template'; 
    
    protected $list_route = 'admin.template.invitation.product.list';
    protected $base_route = 'admin.template.invitation.product';
}