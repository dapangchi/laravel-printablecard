{!! Form::open(array('url' => URL::route('cart.checkout.purchase'), 'id' => 'conform-form', 'method' => 'post', 'autocomplete' => 'off')) !!}    
    <div class="col-md-12">
        <h3>Please confirm the order summery</h3>
    </div>
    <div class="col-md-3 col-sm-4">
        <div class="shipping-titl">Bill to</div>
        
        @if(isset($billingAddress))
        <div class="shipping-details">{{ $billingAddress['first_name'] }} {{ $billingAddress['last_name'] }}</div>
        <ul>
            @if(isset($billingAddress))
            <li>{{ $billingAddress['address'] }}</li>
            <li>{{ $billingAddress['city'] }}, {{ $billingAddress['state_name'] }} {{ $billingAddress['zipcode'] }}</li>
            <li>{{ $billingAddress['country_name'] }}</li>
            <li>{{ $billingAddress['phone'] }}</li>
            @endif
        </ul>
        @endif
    </div>
    <div class="col-md-3 col-sm-4">
        <div>Ship to</div>
        
        @if(isset($shippingAddress))
        <div class="shipping-details">{{ $shippingAddress['first_name'] }} {{ $shippingAddress['last_name'] }}</div>
        <ul>
            <li>{{ $shippingAddress['address'] }}</li>
            <li>{{ $shippingAddress['city'] }}, {{ $shippingAddress['state_name'] }} {{ $shippingAddress['zipcode'] }}</li>
            <li>{{ $shippingAddress['country_name'] }}</li>
            <li>{{ $shippingAddress['phone'] }}</li>
        </ul>
        @endif
    </div>
    <div class="col-md-6 col-sm-4 shipping-method-wrap">
        @if($cart->shippingPrice > 0)
        <div class="shipping-titl">Shipping Method</div>
        <div class="shipping-details">
            @if(isset($shippingMethod))
            {{ $shippingMethod->serviceName }}
            @endif
        </div>
        @endif
        
        <div class="shipping-titl">Payment method</div>
        <div class="shipping-details">
            @if(isset($paymentMethod))
            {{ $paymentMethod->name }}
            @endif
        </div>
    </div>
    <div class="col-md-12 col-sm-12 tables-wrap">
        <table class="order-information">
            <tr class="order-information-titl">
                <td class="item-column">Item</td>
                <td class="descript-column">Description</td>
                <td class="qty-column">Quantity</td>
                <td class="rate-column">Rate</td>
                <td class="total-column">Total ({{ $currency }})</td>
            </tr>
            
            @foreach($cart->items as $item)
            <tr>
                <td class="item-column">
                    <img src="{{ resize_image( $item->product_image, 100, 65, 'crop' ) }}" alt="{{ $item->product_name }}"/>
                    <span>{{ $item->product_name }}</span>
                </td>
                <td class="descript-column">
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
                    </ul>
                </td>
                <!--<td class="qty-column">{{ $item->product_quantity * $item->sets  }}</td>-->
                <td class="qty-column">{{ $item->product_quantity }}</td>
                <td class="rate-column">{{ format_currency($item->unit_price, $currency) }}</td>
                <td class="total-column">{{ format_currency($item->item_price, $currency) }}</td>
            </tr>
            @endforeach
        </table>
        
        @include('frontend.cart.checkout._order_confirm_summary')
    </div>
    <div class="col-md-12 col-sm-12 confrim-but">
        <button type="submit" class="chekout-but">COMPLETE</button>
    </div>
{!! Form::close() !!}