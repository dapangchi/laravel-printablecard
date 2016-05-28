<?php
    $order_status_list = order_status_list();
?>

@extends('admin.layouts.default')

@section('content')

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">Orders</h1>
        </div>
        
        <!--<div class="col-sm-5 text-right">
            <a class="btn btn-primary" href='{{ URL::route("admin.sales.order.create") }}'>Create Order</a>    
        </div>-->
    </div>  
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <?php 
    $base_index = ($orders->currentPage() - 1) * $orders->count();
    $i = 0;
    ?>
    <?php foreach($orders as $order) { $i++; ?>       
    <div class="block">   
        <div class="order-item block-content">
        
            <table class="table table-borderless table-order">
            <colgroup>
                <col width="60"/>
                <col width="120"/>
                <col width=""/>
                <col width=""/>
                <col width=""/>
                <col width=""/>
                <col width=""/>
                <col width="105"/>
            </colgroup>
            <tbody>
                <tr>
                    <td colspan="2"><h2>{{ $order->number() }}</h2></td>
                    <td class="text-bottom">Order Date: <?php echo date('Y-m-d', strtotime($order->created_at)); ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="text-right">
                        <a class="btn btn-info" href='{{ route("admin.sales.order.invoice", $order->id) }}' target="_blank" title="Invoice"><i class="fa fa-edit"></i></a>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="text-middle">
                        {{ $order->customer_name }}<br/>
                        <!--{{ $order->customer_phone }}<br/>-->
                        <a href="mailto:{{ $order->billing_email }}">{{ $order->billing_email }}</a>
                    </td>
                    <td class="text-middle">
                        <b>Ship To:</b><br/>
                        {{ $order->shipping_name }}<br/>
                        {{ $order->shipping_address }}<br/>
                        {{ $order->shipping_city }}, {{ $order->shipping_state }}, {{ $order->shipping_country }}, {{ $order->shipping_zipcode }}</br>
                        @if($order->shipping_phone != '')
                        {{ $order->shipping_phone }}<br/>
                        @endif
                        
                        @if($order->shipping_price > 0)
                        DELIVERY - {{ trans("shipping.fedex.$order->shipping_method") }}
                        @endif
                    </td>
                    <td></td>
                    <td colspan="2" class="text-bottom text-right">
                        <small class="text-top" style="font-size:15px; line-height:30px;">$</small>
                        <span class="text-top" style="font-size:25px;">{{ $order->total_price }}</span>
                        <label class="text-success text-bottom">{{ $order->currency }}</label>
                        <br/>

                        <small>Including shipping + Tax if is applicable</small>
                    </td>
                    <td></td>
                </tr>
                
                @foreach($order->items as $orderItem)
                    <tr class="order-item-row">
                        <td class="text-middle"><img src="{{ asset(ImageManager::getImagePath( $orderItem->image, 50, 50, 'fit-x' )) }}" alt=""></td>
                        <td class="text-middle"><a href='{{ URL::route("admin.sales.order.item", $orderItem->id) }}'>{{ $orderItem->jobNumber() }}</a></td>
                        <td class="text-middle">{{ $orderItem->name }}</td>
                        <td class="text-middle text-center td-job-status">{!! $orderItem->status_lang(true) !!}</td>
                        <td class="text-middle">
                            @if($orderItem->product_type != PRODUCT_DESIGN)
                            {{ $orderItem->qty }} cards
                            @endif
                        </td>
                        <td class="text-middle text-right">{{ format_currency($orderItem->price, $order->currency, false) }}</td>
                        <td class="text-middle td-job-manager">
                            @if(isset($orderItem->stuff->id))
                                {{ $orderItem->stuff->full_name() }}    
                            @else
                                {!! Form::select("job_manager", $stuffs, $orderItem->job_stuff_id, array('class' => 'form-control job-manager')) !!}
                            @endif
                        </td>
                        <td class="text-middle td-job-btn">
                            @if($current_user->has_permission('sales.order.manage') && !isset($orderItem->stuff->id))
                            <button type="submit" class="btn btn-info btn-assign-job" name="btn-assign-job" value="{{ $orderItem->id }}">Submit</button>
                            @endif
                        </td>
                    </tr>
                @endforeach
                
                <tr>
                    <td colspan="5"></td>
                    <td class="text-middle text-right">Order Status</td>
                    <td class="text-middle td-order-status">
                        <!--{!! Form::select('order_status', $order_status_list, $order->status, array('class' => 'form-control')) !!}-->
                        <b>{{ $order->statusLang() }}</b>
                    </td>
                    <td class="text-middle">
                        @if($current_user->has_permission('sales.order.manage'))
                        <!--<button type="submit" class="btn btn-info btn-change-order-status" name="btn-change-order-status" value="{{ $order->id }}">Submit</button>-->
                        @endif
                    </td>
                </tr>
            </tbody>
            </table>
            
        </div>
    </div>
    <?php } ?>

    @if($orders->isEmpty())
    <div class="block">   
        <div class="block-content">
            <p>There is no order.</p>
        </div>
    </div>
    @endif
    <!-- END My Block -->
    
    <div class="block"><div class="block-content"><div class="row" style="padding-bottom:15px;">
        <div class="col-sm-6">
            @if($orders->total() > 0) 
            <div class="dataTables_info" id="data-table_info" role="status" aria-live="polite">
                Showing <b>{{ $base_index + 1 }} to {{ $orders->currentPage() * $orders->count() }}</b> of <b>{{ $orders->total() }}</b> entries    
            </div>
            @endif
        </div>
        <div class="col-sm-6">
            <div class="dataTables_paginate paging_simple_numbers">
                {!! paginate_links($orders); !!}
            </div>    
        </div>
    </div></div></div>
</div>

@stop

@section('additional')
@stop

@section('styles')
<link href="{{ asset('vendor/datatables/jquery.dataTables.min.css') }}" rel="stylesheet">
@stop

@section('scripts')
<script>ajaxUpdateItemUrl = '{{ route("admin.sales.order.assign.stuff") }}';</script>
<script src="{{ asset('admins/js/pages/sales_order.js') }}"></script>
@stop