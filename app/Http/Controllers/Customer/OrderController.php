<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Core\FrontController;
use App\Libraries\Template;
use App\Models\Customer;
use App\Models\Order;

use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Input, Validator, Redirect;

class OrderController extends FrontController {
    protected $page_title = 'Order History';
    protected $page_menu = 'orders';
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
        // ->whereRaw('((status = ' . ORDER_COMPLETED .') OR (status = ' . ORDER_REFUNDED . '))')
        // ->where('updated_at', '<=', $time)
        
        //$time = date('Y-m-d, H:i:s', strtotime('-3 days'));
        $time = date('Y-m-d, H:i:s', strtotime('-3 minutes'));
        $orders = Order::where('customer_id', $this->current_customer->id)
            ->whereRaw('((status = ' . ORDER_COMPLETED .') OR (status = ' . ORDER_REFUNDED . '))')
            ->where('updated_at', '<=', $time)
            ->orderBy('created_at', 'desc')
            ->paginate(5);
        
        return $this->view('customer.orderList', compact('orders'));   
    }
    
    public function detail($orderId)
    {
        $order = Order::find($orderId);
        if(!isset($order->id)) 
        {
            throw new MethodNotAllowedHttpException(array());
        }
        
        $this->page_title = 'Order Detail';
        return $this->view('customer.orderDetail', compact('order'));   
    }
    
    public function invoice($orderId)
    {
        $order = Order::find($orderId);
        if(!isset($order->id) || $order->customer_id != $this->current_customer->id) 
        {
            throw new MethodNotAllowedHttpException(array());
        }    
        
        $this->page_title = 'Invoice ' . $order->number();
        return $this->view('customer.orderInvoice', compact('order'));   
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