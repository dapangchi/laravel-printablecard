<?php

namespace App\Http\Controllers\Admin\Catalog\Showcase;

use App\Http\Controllers\Admin\Catalog\Base\AbstractShowcaseController;

class InvitationShowcaseController extends AbstractShowcaseController {

    protected $page = 'invitation_showcase';
    protected $svc_type = DESIGN_SHOWCASE_INVITATION;
    protected $card_type= SVC_INVITATION_CARD;
    protected $page_title = 'Invitation Design Showcases'; 
    
    protected $list_route = 'admin.showcase.invitation.list';
    protected $base_route = 'admin.showcase.invitation';
}