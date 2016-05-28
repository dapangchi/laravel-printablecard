<?php

namespace App\Http\Controllers\Admin\Catalog\Card;

use App\Http\Controllers\Admin\Catalog\Base\AbstractContentController;

class InvitationContentController extends AbstractContentController {

    protected $menu = 'invitation_card';
    protected $page = 'ic_content';
    protected $svc_type = SVC_INVITATION_CARD;
    protected $page_title = 'Invitation Card';
    
    protected $base_route = 'admin.card.invitation.content';
    
    public function __construct()
    {
        parent::__construct();
        
        $this->restrict('product.card.view');
    }
    
    ////////////////////////////////////////////////////////////////
    //Action Methods
    ////////////////////////////////////////////////////////////////
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////    
    public function store()
    {
        $this->restrict('product.card.manage');
        
        parent::store();
    }
}