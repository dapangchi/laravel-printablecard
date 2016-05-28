<?php

namespace App\Http\Controllers\Admin\Sales;

use App\Http\Controllers\Core\AdminController;
use App\Libraries\Template;
use App\Models\Coupon;
use Input, Validator, Request;

class CouponController extends AdminController {

    protected $page = 'coupon';
    protected $page_title = 'Coupons';
    
    protected $list_route = 'admin.sales.coupon.list';
     
    public function __construct()
    {
        parent::__construct();
        
        $this->restrict('sales.setting.view');
    }
    
    ////////////////////////////////////////////////////////////////
    //Action Methods
    ////////////////////////////////////////////////////////////////
    public function index()
    {
        //get orders
        $this->saveSorting();
        
        $order = Request::input('order');
        $orderby = Request::input('orderby') == 'asc'? 'asc': 'desc';
        switch($order)
        {
            case 'code':
                $order = 'code';
                break;
            case 'start':
                $order = 'start_date';
                break;
            case 'end':
                $order = 'end_date';
                break;
            case 'limit':
                $order = 'limit_time';
                break;
            case 'used':
                $order = 'used_time';
                break;
            case 'discount':
                $order = 'discount_percent';
                break;
            case 'created_at':
                break;
            default:
                $order = 'created_at';
                $orderby = 'desc';
                break;
        }
        
        $rows = Coupon::orderBy($order, $orderby)
            ->paginate($this->list_limit);
        
        return $this->view('sales.coupon.index', compact('rows'));
    }
    
    public function create()
    {
        return $this->view('sales.coupon.create');
    }
    
    public function edit($id)
    {
        $row = Coupon::find($id);
        
        return $this->view('sales.coupon.edit', compact('row'));
    }
    
    public function delete($id)
    {
        $this->restrict('sales.setting.manage');
        
        $row = Coupon::find($id);
        
        Template::set_message("Coupon[ " . $row->name . " ] has been removed.", 'warning');

        Coupon::destroy($id);
        
        return redirect($this->listUrl());
    }
    
    ////////////////////////////////////////////////////////////////
    //Post Methods
    ////////////////////////////////////////////////////////////////
    public function store()
    {
        $this->restrict('sales.setting.manage');
        
        $id = Input::get('coupon-id');

        //validate posts
        $rules = [
            'coupon-name'   => 'required',
            'coupon-code'   => "required|min:4|unique:coupons,code,$id,id",
            //'start-date'  => 'required',
            //'end-date'    => 'required',
            'limit-time'    => 'required|integer',
            'discount-percent' => 'required|numeric'
        ];
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) 
        {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $coupon = null;
        if($id > 0) {
            $coupon = Coupon::find($id);
        } else {
            $coupon = new Coupon;
        }
        
        $coupon->name = Input::get('coupon-name');
        $coupon->code = Input::get('coupon-code');
        $coupon->start_date = strtotime(Input::get('start-date'));
        $coupon->end_date   = strtotime(Input::get('end-date'));
        $coupon->limit_time = Input::get('limit-time');
        $coupon->discount_percent = Input::get('discount-percent');
        $coupon->save();
        
        return redirect($this->listUrl());
    }  
     
    ////////////////////////////////////////////////////////////////
    //Ajax Methods
    ////////////////////////////////////////////////////////////////
}