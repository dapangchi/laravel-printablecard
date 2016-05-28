{!! Form::open(array('id' => 'shipment-form', 'method' => 'post')) !!}
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <ul>
                    <li class="sub-titl">Ship to:</li>
                    @if(isset($shippingAddress))
                    <li class="bold" style="font-size:20px">{{ $shippingAddress['first_name'] }} {{ $shippingAddress['last_name'] }}</li>
                    <li>{{ $shippingAddress['address'] }}</li>
                    <li>{{ $shippingAddress['city'] }}, {{ $shippingAddress['state_name'] }} {{ $shippingAddress['zipcode'] }}</li>
                    <li>{{ $shippingAddress['country_name'] }}</li>
                    @endif
                </ul>
                
                <div>
                    <h3>Please select your shipping option</h3>
                    @foreach($shippingMethods as $i => $m)
                    <div class="ship-option-row">
                        <div class="radio radio-success">
                            @if($i == 0)
                                {!! Form::radio('shipping-option', $m->serviceType, true, array('id' => 'shipping-option_'.$m->serviceType)) !!}
                            @else
                                {!! Form::radio('shipping-option', $m->serviceType, false, array('id' => 'shipping-option_'.$m->serviceType)) !!}
                            @endif
                            
                            <label class="shipping-option-label" for="shipping-option_{{ $m->serviceType }}">
                                <span class="shipping-option-name">{{ $m->serviceName }}</span>
                                <span class="shipping-option-price">{{ format_currency($m->amount, $currency) }}</span><br>
                                
                                @if($m->delivery != '')
                                <span class="shipping-option-hint">Estimated Delivery Time : {{ $m->delivery }}</span>
                                @endif
                            </label>
                        </div>
                    </div>
                    @endforeach
                    
                    <div class="warning-message">Please note, some rural area may take slightly longer for the shipmment.</div>
                    
                    @if(!empty($shippingMethods))
                    <div class="warning-message" id="shipping-error" style="display: none;"></div>
                    @else
                    <div class="warning-message" id="shipping-error">There is no available methods.</div>
                    @endif
                    <button type="submit" class="chekout-but lg-but">CONTINUE</button>    
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="sub-titl-wrap">
                    <span class="sub-titl">{{ $cart->items->count() }} Items:</span>
                    <span class="buss-day-hint">(please note that business day does not include weekend or holiday)</span>
                </div>
                <table class="ordered-table">
                    @foreach($cart->items as $item)
                    <tr>
                        <td class="left-bl"><img src="{{ resize_image( $item->product_image, 100, 65, 'crop' ) }}" alt="{{ $item->product_name }}"/></td>
                        <td class="right-bl">
                            <div class="item-name">{{ $item->product_name }}</div>
                            @if($item->product_turnaround_time != '')
                            <div class="turnaround-hint">Production Turnaround Time: {{ $item->product_turnaround_time }}</div>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
{!! Form::close() !!}