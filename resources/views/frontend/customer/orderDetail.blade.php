@extends('frontend.layouts.customer')

@section('content')

<div class="container">
    <div class="row row-pad">
        <div class="col-md-12">
            <div class="page-title">
                <h1>ORDER DETAIL</h1>
                
                @include('frontend.customer.snippet.help')
            </div>
        </div>
    </div>
</div>
          
<div class="container bg-white md-p-tb-30 sm-p-tb-15 m-b-50 sm-m-b-30">
    <div class="row row-pad">
        <div class="col-md-12">
            <div class="order-block">
                <div class="order-block-titl">
                    <h3>{{ $order->number() }}</h3>
                    <div class="date-wrap">{{ date('m / d / Y g:i A', strtotime($order->created_at)) }}</div>
                    <div class="invoice-wrap">
                        <span class="fw-medium">INVOICE</span>
                        <a href="{{ route('customer.order.invoice', $order->id) }}" target="_blank"><i class="fa fa-clipboard"></i></a>
                    </div>
                </div>
                <div class="order-block-table">
                    <div class="table-row table-titl-row">
                        <div class="table-column fw-medium">PRODUCT</div>
                        <div class="status-column fw-medium">STATUS</div>
                        <div class="reorder-column fw-medium">RE-ORDERING</div>
                    </div>
                    
                    @foreach($order->items as $item)
                    <div class="table-row">
                        <div class="table-column">
                            <div class="order-thumb">
                                <img src="{{ resize_image($item->image, 220, 150, 'crop') }}" alt="thumb">
                            </div>
                            <div class="order-content xs-m-b-15">
                                <div class="order-product-titl fw-medium">{{ $item->name }}</div>
                                <div>{{ $item->jobNumber() }}</div>        
                                <div>@include('frontend.customer.snippet.order_item_sets')</div>
                                <div>{{ format_currency($item->price, $order->currency, false) }}</div>
                                <div style="color:#65c1af;">@if($item->referenceOrder) Re-order: {{ $item->referenceOrder->number() }} @endif</div>
                                <br/>
                                <div>@include('frontend.customer.snippet.order_item_features')</div>
                            </div>
                        </div>
                        <div class="status-column xs-m-b-15">
                            @include('frontend.customer.snippet.order_item_status')
                        </div>
                        <div class="reorder-column">
                            @if($item->availableReorder())
                            <a href="{{ route('reorder.item', array('id' => $item->id)) }}" class="reorder-btn">RE-ORDER THIS JOB</a>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row row-pad">
        <div class="col-md-12">
            <div class="btn-wrap">
                <a class="btn-help transition fw-medium" href="{{ route('customer.orders') }}">BACK</a>
            </div>
            <div class="clear"></div>
            <br/>
        </div>
    </div>
</div>

@stop

@section('styles')
@stop

@section('scripts')
@stop