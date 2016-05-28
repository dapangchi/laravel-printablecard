<?php

namespace App\Http\Controllers\Admin\Catalog\Template;

use App\Http\Controllers\Admin\Catalog\Base\AbstractContentController;

class InvitationContentController extends AbstractContentController {

    protected $menu = 'invitation_card_template';
    protected $page = 'ict_content';
    protected $svc_type = SVC_INVITATION_TEMPLATE;
    protected $page_title = 'Invitation Card Template';
    
    protected $base_route = 'admin.template.invitation.content';
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