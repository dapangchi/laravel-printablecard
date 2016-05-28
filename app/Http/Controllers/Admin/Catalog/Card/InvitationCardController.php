<?php

namespace App\Http\Controllers\Admin\Catalog\Card;

use App\Http\Controllers\Admin\Catalog\Base\AbstractCardController;

class InvitationCardController extends AbstractCardController {
    protected $menu = 'invitation_card';
    protected $page = 'ic_product';
    protected $svc_type = SVC_INVITATION_CARD;
    protected $page_title = 'Invitation Card'; 
    
    protected $list_route = 'admin.card.invitation.product.list';
    protected $base_route = 'admin.card.invitation.product';
    
    ////////////////////////////////////////////////////////////////
    //Action Methods
    ////////////////////////////////////////////////////////////////
}