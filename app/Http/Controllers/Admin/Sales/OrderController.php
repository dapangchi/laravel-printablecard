<?php

namespace App\Http\Controllers\Admin\Sales;

use App\Http\Controllers\Core\AdminController;
use App\Libraries\Template;
use App\Models\Order;
use App\Models\OrderHistory;
use App\Models\OrderItem;
use App\Models\OrderItemHistory;
use App\Models\OrderItemPrice;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Customer;
use App\Models\Country;
use App\Models\Region;
use App\Models\Card;
use App\Models\CardPrice;
use App\Models\CardFeature;
use App\Models\CardOption;
use App\Models\CardQuantity;
use App\Models\Admin;
use Input, URL, Request, Validator, Session, DB;

class OrderController extends AdminController {

    protected $menu = 'sales';
    protected $page = 'order';
    protected $page_title = 'Orders';
    
    protected $list_route = 'admin.sales.order.list';    
    
    protected $list_limit = 10;
    public function __construct()
    {
        parent::__construct();
        
        $this->restrict_any(array('sales.order.view', 'sales.order.view.assigned'));
    }
    
    ////////////////////////////////////////////////////////////////
    //Action Methods
    ////////////////////////////////////////////////////////////////
    
    /**
    * list all orders
    * 
    */
    public function index()
    {              
        //get all stuff list
        $stuffs = Admin::SelectStuffs()
            ->Select('id', DB::raw('CONCAT(first_name, " ", last_name) AS name'))
            ->orderBy('first_name')
            ->orderBy('last_name')
            ->get()
            ->toArray();
        $stuffs = ['' => 'Select Staff'] + array_convert2to1($stuffs, 'id', 'name');
        
        //get orders
        $this->saveSorting();
        
        $order = Request::input('order');
        $orderby = Request::input('orderby') == 'asc'? 'asc': 'desc';
        switch($order)
        {
            case 'shipping_name':
            case 'shipping_email':
            case 'created_at':
            case 'total_price':
            case 'status':
                break;
            
            default:
                $order = 'created_at';
                $orderby = 'desc';
                break;
        }
        
        //where
        $orders = null;
        if($this->current_user->has_permission('sales.order.view.assigned', true))
        {
            $orders = Order::select('orders.*')
                ->join('order_items', 'orders.id', '=', 'order_items.order_id')
                ->where('order_items.job_stuff_id', $this->current_user->id)
                ->groupBy('order_id')
                ->orderBy('created_at', 'desc')
                ->paginate($this->list_limit);  
        }
        else
        {
            $orders = Order::orderBy('created_at', 'desc')
                ->paginate($this->list_limit);  
        }
        
        return $this->view('sales.order.index', compact('orders', 'stuffs'));         
    }
    
    public function create()
    {
        
    }
    
    public function invoice($id)
    {
        $order = Order::find($id);
        
        return $this->view('sales.order.invoice', compact('order'));         
    }
    
    /**
    * delete order 
    * 
    * @param mixed $id
    * @return \Illuminate\Routing\Redirector
    */
    public function delete($id)
    {
        Order::destroy($id);
        
        return redirect($this->listUrl());
    }
    
    /**
    * display order item info
    * 
    * @param mixed $item_id
    * @return \Illuminate\View\View
    */
    public function item($item_id)
    {
        //get all stuff list
        $stuffs = Admin::SelectStuffs()
            ->Select('id', DB::raw('CONCAT(first_name, " ", last_name) AS name'))
            ->orderBy('first_name')
            ->orderBy('last_name')
            ->get()
            ->toArray();
        $stuffs = ['' => 'Assign this job to...'] + array_convert2to1($stuffs, 'id', 'name');
        
        $item = OrderItem::find($item_id);
        
        return $this->view('sales.order.item', compact('item', 'stuffs'));   
    }
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////
    
    /**
    * update item status
    * 
    */
    public function postItem()
    {    
        $rules = [
            'item_id' => 'required', 
        ];
        
        if(Input::has('btn-assign-job'))
        {
            $rules['job_manager'] = 'required';
        }
        else
        {
            $rules['job_status'] = 'required';
        }
        
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $itemId = Input::get('item_id');
        
        if(Input::has('btn-assign-job'))
        {
            $stuffId = Input::get('job_manager');
            
            $orderItem = OrderItem::find($itemId);
            $status = $orderItem->saveAsWorking($stuffId, $this->current_user->id);
            
            if($status)
            {
                $stuff = Admin::find($stuffId);
                
                $params = [
                    'stuff' => $stuff,
                    'item' => $orderItem    
                ];
                $this->sendMail('emails.orders.assignJob', $stuff->email, $stuff->full_name(), $params, 'Rock Design Notification');
                
                Template::set_message(sprintf('The job is assigned to %s.', $stuff->full_name()), 'success');
            }
        }
        else //update status
        {
            $newStatus = Input::get('job_status');
            
            $orderItem = OrderItem::find($itemId);
            
            if($newStatus == JOB_COMPLETED)
            {
                $orderItem->saveAsCompleted();            
            }
            else if($newStatus == JOB_REFUNDED)
            {
                $orderItem->saveAsRefunded();            
            }
            else if($newStatus == JOB_DESIGN_PROOFING)
            {
                $orderItem->job_status = JOB_DESIGN_PROOFING;
                $orderItem->save();
            }
            else if($newStatus == JOB_WORKING)
            {
                $orderItem->job_status = JOB_WORKING;
                $orderItem->save();

                $orderItem->order->status = ORDER_PROCESSING;
                $orderItem->order->save();
            }
            else
            {
                $orderItem->job_status = $newStatus;
                $orderItem->save(); 
                
                //send email in these cases
                $mailTemplate = '';
                if($newStatus == JOB_FILE_ISSUE) $mailTemplate = 'emails.orders.orderFileIssue';
                else if($newStatus == JOB_WAITING_FILE) $mailTemplate = 'emails.orders.orderWaitingFile';
                else if($newStatus == JOB_IN_PRODUCTION) $mailTemplate = 'emails.orders.orderInProduction';
                
                if($mailTemplate != '')
                {
                    $params = [
                        'item' => $orderItem    
                    ];
                    $this->sendMail($mailTemplate, $orderItem->order->customer_email, $orderItem->order->customer_name, $params, 'Rock Design Notification');   
                }
            }
            
            Template::set_message(sprintf("Job status of '%s' is updated.", $orderItem->name), 'success');
        }
    
        
        return redirect(route('admin.sales.order.item', array('id' => $itemId)));
    } 
    
    /**
    * assign stuff to job
    * 
    */
    public function assignStuff()
    {
        $itemId = Input::get('item_id');
        $stuffId = Input::get('job_manager');
        
        $orderItem = OrderItem::find($itemId);
        $status = $orderItem->saveAsWorking($stuffId, $this->current_user->id);
        
        if($status)
        {
            $stuff = Admin::find($stuffId);
            
            $params = [
                'stuff' => $stuff,
                'item' => $orderItem    
            ];
            $this->sendMail('emails.orders.assignJob', $stuff->email, $stuff->full_name(), $params, 'Rock Design Notification');
            
            $result = array();
            $result['stuffName'] = $stuff->full_name();
            $result['msg'] = sprintf('The job is assigned to %s.', $stuff->full_name());
            $result['orderStatus'] = $orderItem->order->statusLang();
            
            echo json_encode($result);
            exit;            
        }
    }
    
    public function postAddTracking()
    {
        //validate posts
        $rules = [
            'item_id' => 'required',
            'tracking_method' => "required",
            //'tracking_number' => 'required'
        ];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }    
        
        $orderItem = OrderItem::find(Input::get('item_id'));
        $orderItem->job_tracking_method = Input::get('tracking_method');
        $orderItem->job_tracking_number = Input::get('tracking_number');
        $orderItem->job_tracking_date = Date('Y-m-d H:i:s');
        $orderItem->job_status = JOB_SHIPPED;
        if($orderItem->save())
        {
            Template::set_message('Tracking number is added.', 'success');
            
            //send email to customer
            $this->sendMail('emails.orders.orderItemShipped', $orderItem->order->customer_email, $orderItem->order->customer_name, compact('orderItem'));
        }        
        
        return redirect(route('admin.sales.order.item', array('id' => Input::get('item_id'))));
    }
    ////////////////////////////////////////////////////////////////
    //Ajax Actions
    ////////////////////////////////////////////////////////////////
    public function ajaxTrackingForm()
    {
        $itemId = Input::get('item_id');
        $item = OrderItem::find($itemId);
        
        return $this->view('sales.order.snippet.trackingForm', compact('item'));        
    }
    
    ////////////////////////////////////////////////////////////////
    //Private Methods
    ////////////////////////////////////////////////////////////////      
}