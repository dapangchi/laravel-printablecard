<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Core\FrontController;
use App\Libraries\Template;
use App\Models\Customer;
use App\Models\OrderItem;
use Input, Validator, Redirect;

class HomeController extends FrontController {
    protected $page_title = 'My Account';
    protected $page_menu = 'home';
    public function __construct()
    {
        parent::__construct();
        
        // Check customer is logged in
        $this->auth->restrict();
    }

    ////////////////////////////////////////////////////////////////
    //Action Methods
    ////////////////////////////////////////////////////////////////
    public function index()
    {
        $instance = OrderItem::join('orders', 'orders.id', '=', 'order_items.order_id')
            ->where('customer_id', $this->current_customer->id)
            ->whereRaw('(status != ' . ORDER_COMPLETED .') AND (status != ' . ORDER_REFUNDED . ')')
            ->orderBy('job_updated', 'desc');
        if(Input::has('job-number')) $instance->where('job_number', 'like', Input::get('job-number').'%');
        
        $jobs = $instance->limit(5)->get();
        
        return $this->view('customer.home', compact('jobs'));   
    }
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////   
    
    ////////////////////////////////////////////////////////////////
    // Private Functions
    ////////////////////////////////////////////////////////////////
    
    ////////////////////////////////////////////////////////////////
    // Ajax Functions
    ////////////////////////////////////////////////////////////////

}