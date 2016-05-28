<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Core\FrontController;
use App\Libraries\Template;
use App\Models\Customer;
use App\Models\Order;

use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Input, Validator, Redirect;

class TrackingController extends FrontController {
    protected $page_title = 'Track My Order';
    protected $page_menu = 'tracking';
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
        //we keep completed and refunded orders for 3 days in tracking section
        //so added below conditions
        //$where = sprintf('(status != %s AND status != %s) OR ((status = %s OR status = %s) AND (updated_at >= "%s"))', ORDER_COMPLETED, ORDER_REFUNDED, ORDER_COMPLETED, ORDER_REFUNDED, $time);        
        //$time = date('Y-m-d, H:i:s', strtotime('-3 days'));
        $time = date('Y-m-d, H:i:s', strtotime('-3 minutes'));
        $where = sprintf('(status != %s AND status != %s) OR ((status = %s OR status = %s) AND (updated_at >= "%s"))', ORDER_COMPLETED, ORDER_REFUNDED, ORDER_COMPLETED, ORDER_REFUNDED, $time);
        $orders = Order::where('customer_id', $this->current_customer->id)
            ->whereRaw($where)
            ->orderBy('created_at', 'desc')
            ->paginate(5);
            
        return $this->view('customer.trackingList', compact('orders'));   
    }
    
    public function detail($orderId)
    {
        $order = Order::find($orderId);
        if(!isset($order->id)) 
        {
            throw new MethodNotAllowedHttpException(array());
        }
        
        $this->page_title = 'Order Detail';
        return $this->view('customer.trackingDetail', compact('order'));   
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