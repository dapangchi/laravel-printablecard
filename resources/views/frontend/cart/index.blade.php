@extends('frontend.layouts.default')

@section('content')

<div class="container section table-wrap">
    <div class="row">
        <div class="col-md-12">
            <h1>MY SHOPPING CART</h1>
        </div>
        
        <?php $total_price = 0; ?>
        <!--start items-->
        <div class="col-md-12">
            <table class="cart-table">
            <colgroup>
                <col width="340"/>
                <col width=""/>
                <col width="160"/>
                <col width="250"/>
            </colgroup>
            <tbody>
                <tr>
                    <td class="thumb-img-titl">Item</td>
                    <td class="item-decription-titl"></td>
                    <td class="price-column-titl">Price</td>
                    <td class="price-column-titl">Total</td>
                </tr>
                
                @foreach($cart->items as $item)
                <?php $total_price += $item->item_price; ?>
                <tr>
                    <td class="thumb-img">       
                        <img src="{{ resize_image( $item->product_image, 600, 400, 'crop' ) }}" alt="{{ $item->product_name }}"/>
                    </td>
                    <td class="item-decription">
                        <h3>{{ $item->product_name }}</h3>
                        <ul>
                            @if($item->template_uid)
                            <li>Template ID: {{ $item->template_uid }}</li>
                            @endif
                            
                            @if($item->product_type != PRODUCT_DESIGN)
                            <li>Quantity: 
                                @if($item->hasCustomSets())
                                    {{ $item->product_quantity }} cards total for various names<br/>
                                    
                                    @foreach($item->customSets() as $r)
                                    &nbsp;&nbsp;{{ $r['name'] }} : {{ $r['quantity'] }}<br/>
                                    @endforeach
                                @else
                                    {{ $item->product_quantity }} cards
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
                                {!! the_content($item->product_description) !!}
                            </li>
                            @endif
                            
                            <li class="edit-description"><a href="{{ URL::route('cart.item.remove', $item->id) }}">Remove This Order</a></li>
                        </ul>
                    </td>
                    <td class="price-column">
                        <div>
                            @if($item->product_type != PRODUCT_DESIGN)
                            {{ format_currency($item->unit_price) }} per card
                            @endif
                        </div>
                        
                        @if($item->discount_percent > 0)
                        <div class="price-column-hint">You Saved {{ format_perent($item->discount_percent) }}</div>
                        @endif
                    </td>
                    <td class="price-column">
                        <div>{{ format_currency($item->item_price) }}</div>
                        
                        @if($item->discount_percent > 0)
                        <div class="price-column-hint">You save {{ format_currency($item->item_price * 100 / (100 - $item->discount_percent) - $item->item_price) }} from regular price!</div>
                        @endif
                    </td>
                </tr>
                @endforeach
                
                @if($cart->items->isEmpty())
                <tr><td colspan="10" style="padding-bottom:0"><p>{{ trans('msg.cart_empty') }}</p></td></tr>
                @endif
            </tbody>
            </table>
        </div>
        <!--end items-->
        
        <!--start total-->
        <div class="col-md-12">
            <div class="total-wrap">
                @if(!$cart->items->isEmpty())
                <div class="total-row sub-total">
                    <div class="left-col">Subtotal:</div>
                    <div class="right-col">
                        {{ format_currency($total_price) }}
                        <div class="currency-wrap">Currency: {{ $currency }}</div>
                    </div>
                </div>
                @endif
                
                <div class="total-row">
                    <div class="left-col">
                        <div class="keep-shoppin">
                            <a href="{{ url('/') }}">Keep Shopping</a>
                        </div>
                    </div>
                    
                    @if(!$cart->items->isEmpty())
                    <div class="right-col">                            
                        <div class="button-wrap">
                            <a href="{{ URL::route('cart.checkout') }}"><div class="chekout-but lg-but">CHECKOUT</div></a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <!--end total-->
        <div class="clear"></div>
    </div>
    
    <!--start also like-->
</div>

@stop

@section('styles')
@stop

@section('scripts')

@stop
