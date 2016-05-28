@extends('frontend.layouts.wrapper')

@section('content')

<div class="container">
    <div class="confirm-block block" style="display:block; padding:20px 0;">
        
        <div class="row text-center">
            <h1>Invoice # {{ $order->number }}</h1>
        </div>
        
        <div class="row">
            @include('frontend.customer.snippet.invoice_address')
                
            <div class="col-md-6 col-sm-4 shipping-method-wrap">
                @if($order->shipping_price > 0)
                <div class="shipping-titl">Shipping Method</div>
                <div class="shipping-details">
                    {{ $order->shippingMethodName() }}
                </div>
                @endif
                
                <div class="shipping-titl">Payment method</div>
                <div class="shipping-details">
                    {{ $order->paymentMethodName() }}
                </div>
            </div>
        </div>
        <br/>
        
        @if($order->shipping_note != '')
        <div class="row">
            <div class="col-md-12">
                <div class="shipping-titl">Note:</div>
                {!! the_content($order->shipping_note) !!}
            </div>
        </div>
        @endif        
        
        <div class="row">
            <div class="col-md-12 col-sm-12 tables-wrap">
                <table class="order-information">
                    <tr class="order-information-titl">
                        <td class="item-column">Item</td>
                        <td class="descript-column">Description</td>
                        <td class="qty-column">Quantity</td>
                        <td class="rate-column">Rate</td>
                        <td class="total-column">Total ({{ $order->currency }})</td>
                    </tr>
                    
                    @foreach($order->items as $item)
                    <tr>
                        <td class="item-column">
                            <img src="{{ resize_image( $item->image, 100, 65, 'crop' ) }}" alt="{{ $item->name }}"/>
                            <span>{{ $item->name }}</span>
                        </td>
                        <td class="descript-column">
                            <ul>
                                @if($item->template_uid)
                                <li>Template ID: {{ $item->template_uid }}</li>
                                @endif
                                
                                @if($item->product_type != PRODUCT_DESIGN)
                                <li>Quantity: 
                                    @if($item->hasCustomSets())
                                        {{ $item->qty }} cards total for various names<br/>
                                        
                                        @foreach($item->customSets() as $r)
                                        &nbsp;&nbsp;{{ $r['name'] }} : {{ $r['quantity'] }}<br/>
                                        @endforeach
                                    @else
                                        {{ $item->qty }} cards
                                    @endif
                                </li>
                                <li>Set: {{ $item->sets }}</li>
                                @endif
                                
                                @foreach($item->features() as $ft)
                                <li>
                                    {{ $ft->feature_name }}: 
                                    
                                    <?php $options = $item->featureOptions($ft->feature_id); ?>
                                    @foreach($options as $opt)
                                        {{ $opt->option_name }}
                                        <?php 
                                        if($opt->side_type == FRONTSIDE) echo "(Front)"; 
                                        else if($opt->side_type == BACKSIDE) echo "(Back)";
                                        ?>
                                    @endforeach
                                </li>
                                @endforeach
                                
                                @if($item->product_type == PRODUCT_TEMPLATE)
                                <!--<li>
                                    Front Side Content: {{ $item->template_front }}
                                </li>
                                <li>
                                    Back Side Content: {{ $item->template_back }}
                                </li>-->
                                @elseif($item->product_type == PRODUCT_DESIGN)
                                <li>
                                    {!! the_content($item->description) !!}
                                </li>
                                @endif
                            </ul>
                        </td>
                        <!--<td class="qty-column">{{ $item->product_quantity * $item->sets  }}</td>-->
                        <td class="qty-column">{{ $item->qty }}</td>
                        <td class="rate-column">{{ format_currency($item->unit_price, $order->currency, false) }}</td>
                        <td class="total-column">{{ format_currency($item->price, $order->currency, false) }}</td>
                    </tr>
                    @endforeach
                </table>  
                
                <table class="order-information-total">
                    <tr class="sub-total-row">
                        <td class="order-information-titl">Sub Total</td>
                        <td>{{ format_currency($order->sub_total_price, $order->currency, false) }}</td>
                    </tr>

                    @if($order->shipping_price > 0)
                    <tr class="sub-total-row">
                        <td class="order-information-titl">SHIPPING</td>
                        <td>{{ format_currency($order->shipping_price, $order->currency, false) }}</td>
                    </tr>
                    @endif
                    
                    @if($order->tax_price > 0)
                    <tr class="sub-total-row">
                        <td class="order-information-titl">TAX</td>
                        <td>{{ format_currency($order->tax_price, $order->currency, false) }}</td>
                    </tr>
                    @endif
                    
                    @if($order->discount_price > 0)
                    <tr class="sub-total-row">
                        <td class="order-information-titl">Discount:</td>
                        <td> -{{ format_currency($order->discount_price, $order->currency, false) }}</td>
                    </tr>
                    @endif
                    
                    <tr class="total-row">
                        <td class="order-information-titl">TOTAL</td>
                        <td>{{ format_currency($order->total_price, $order->currency, false) }}</td>
                    </tr>
                </table>     
            </div>
        </div>
    </div>
</div>

@stop

@section('styles')
@stop

@section('scripts')
@stop