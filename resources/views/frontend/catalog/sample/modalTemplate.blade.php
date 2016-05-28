<?php
    extract($opt);
?>
<div class="get-now-form-wrap get-now-form-wrap1" id="{{ strtolower($country) }}-modal">
    <div class="overlay-bg"></div>
    <div class="delivery-option-overlay">
        <div class="delivery-option-overlay-bl">
            <div class="delivery-option-bl-destin">TO {{ strtoupper($country) }}</div>
            <div class="delivery-option-bl-cont">
                <div class="delivery-option-bl-titl">{{ $packName }}</div>
                <div class="delivery-cost">
                    <span class="currency-icon">$</span>
                    <span class="currency-value">{{ $basePrice }}</span>
                    <span class="currency-badge">{{ $currency }}</span>
                </div>                              
                <ul class="delivery-benef-wrap">
                    @if($code === 'worldwide')                    
                    <li class="fedex-charge">+ FedEx Shipping Charge</li>
                    @endif
                    
                    <li>15-20 premium samples</li>
                    
                    @if($code != 'worldwide')                    
                    <li>Free Shipping With Postal Services</li>
                    @endif
                    
                    <li>$10 Coupon included</li>
                    
                    @if($pack === 'premium')                    
                    <li>Metal Cards are not included</li>
                    @else
                    <li>Metal Cards are included</li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="delivery-option-form-wrap">
            <div class="delivery-option-form-titl">Your Shipping Information <i class="get-now-form-close fa fa-times"></i></div>
            {!! Form::open(array('url' => route('page.sample.pack.post'), 'class' => 'delivery-option-form')) !!}
                {!! Form::hidden('code', $code) !!}
                {!! Form::hidden('pack', $pack) !!}
                
                @if($code === 'worldwide')                    
                {!! Form::hidden('shipping-type', key($deliveryMethods)) !!}
                @else
                <label>DELIVERY METHOD</label>
                <select name="shipping-type" class="shipping-type" required>        
                    @foreach($deliveryMethods as $i => $sh)
                    <option value="{{ $i }}" data-price="{{ $sh['price'] }}">{{ $sh['name'] }}</option>
                    @endforeach
                </select>
                @endif
                
                <div class="delivery-option-form-sect">
                    <!--<div class="delivery-option-form-lb">
                        <label>NAME</label>
                        {!! Form::text('customer-name', null, array('required')) !!}
                    </div>-->
                    <div class="delivery-option-form-lb">
                        <label>Phone</label>
                        {!! Form::text('customer-phone', null, array('required')) !!}
                    </div>
                    <div class="delivery-option-form-rb">
                        <label>EMAIL</label>
                        {!! Form::email('customer-email', null, array('required')) !!}
                    </div>
                </div>
                
                @if($code === 'worldwide')                    
                    <div class="delivery-option-form-sect">
                        <div class="delivery-option-form-lb">                             
                            <label>DELIVERY ADDRESS</label>
                            {!! Form::text('customer-address', null, array('required')) !!}
                        </div>
                        
                        <div class="delivery-option-form-rb">
                            <label>COUNTRY</label>
                            @if(count($validCountries) == 1)
                                {!! Form::hidden('customer-country', $validCountries[0], array()) !!}
                                {!! Form::text('delivery-destination', $validCountries[0], array('disabled')) !!}
                            @else
                                <select name="customer-country" required>
                                    @foreach($validCountries as $ct)
                                    <option value="{{ $ct }}">{{ $ct }}</option>
                                    @endforeach
                                </select>
                            @endif
                        </div>
                    </div>
                        
                    <div class="delivery-option-form-sect">
                        <div class="delivery-option-form-lb">
                            <label>PROVICE / STATE</label>
                            {!! Form::text('customer-state', null, array('required')) !!}
                        </div>
                        <div class="delivery-option-form-rb">
                            <label>ZIP / POSTAL CODE</label>
                            {!! Form::text('customer-zipcode', null, array('required')) !!}
                        </div>
                    </div>
                    
                    <div class="option-form-but-wrap">
                        <button type="submit">SEND INQUIRY</button>
                    </div>
                @else
                    <div class="option-form-but-wrap">
                        <button type="submit">BUY NOW</button>
                    </div>
                @endif
                
            {!! Form::close() !!}
            <div class="delivery-option-form-hint">
                <div>Sample pack priced in USD  Free Shipping: 7-14 Business Days (no tracking)</div>
                <div>FedEx Ground 3-5 Business Days | FedEx Overnight 1 Business Day</div>
                <div>* Rural area requires longer transit time</div>
            </div>
        </div>
    </div>
</div>