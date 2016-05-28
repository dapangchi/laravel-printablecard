<?php
    $addresses = $current_customer->shippingAddresses;
    $default = $current_customer->defaultShippingAddress();
?>

{!! Form::open(array('id' => 'shipping-form', 'method' => 'post')) !!}
    <div class="col-md-7">
        <h3>Enter your shipping address</h3>
        <div class="shipping-hint">If your order need to ship to multiple address, please make a note below</div>
        
        @if(!$addresses->isEmpty())   
            <div class="address-block-row">
                <div class="left-bl">Saved Address</div>
                <div class="right-bl">
                    <select name="shipping[saved_address]" id="shipping-saved-address">
                        @foreach($addresses as $r)
                        <option value="{{ $r->id }}">
                            {{ $r->full_name() }}, {{ $r->phone }}, {{ $r->address }}, {{ $r->city }}, 
                            @if(isset($r->state->id)) {{ $r->state->name }}, @endif
                            @if(isset($r->country()->id)) {{ $r->country->name }}, @endif
                            {{ $r->zipcode }}
                        </option>
                        @endforeach   
                        <option value="-1">New Address</option>
                    </select>
                </div>
            </div>
            
            <div id="shipping-address-fields">   
            </div>
        @else   
            @include('frontend.cart.checkout._shipping_form')
        @endif
        
        <div class="address-block-row">
            <div class="left-bl">Note</div>
            <div class="right-bl">{!! Form::textarea('shipping[note]', null, array('id' => 'shipping_note')) !!}</div>
        </div>
        <div class="address-block-row">
            <div class="left-bl bold">&nbsp;</div>
            <div class="right-bl check-bl">
                <div class="checkbox check-success">
                    {!! Form::checkbox('shipping[save_address]', 1, true, array('id' => 'save_shipping_address', 'readonly')) !!}
                    <label for="shipping_same_as_billing">Save this address</label>
                </div>
            </div>
        </div>
        <div class="address-block-row">
            <div class="left-bl bold">Billing address</div>
            <div class="right-bl check-bl">
                <div class="checkbox check-success">
                    {!! Form::checkbox('shipping[same_as_billing]', 1, true, array('id' => 'shipping_same_as_billing', 'readonly')) !!}
                    <label for="shipping_same_as_billing">Same as shipping address</label>
                </div>
            </div>
        </div>
        <div class="address-block-row">
            <div class="right-bl check-bl">
                <button type="submit" class="chekout-but lg-but">CONTINUE</button>
            </div>
        </div>
    </div>
{!! Form::close() !!}