<?php

namespace App\Http\Controllers\Admin\Catalog\Card;

use App\Http\Controllers\Admin\Catalog\Base\AbstractCategoryController;

class InvitationCategoryController extends AbstractCategoryController {
    
    protected $menu = 'invitation_card';
    protected $page = 'ic_category';
    protected $svc_type = SVC_INVITATION_CARD;
    protected $page_title = 'Invitation Card';
    
    protected $base_route = 'admin.card.invitation.category';
    protected $list_route = 'admin.card.invitation.category.list';
    
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