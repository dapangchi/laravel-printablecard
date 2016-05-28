<?php
    $addresses = $current_customer->billingAddresses;
    $default = $current_customer->defaultBillingAddress();
?>

{!! Form::open(array('id' => 'billing-form', 'method' => 'post')) !!}
    <div class="col-md-7">
        <h3>Enter your billing address</h3>
        <div class="shipping-hint">If your order need to ship to multiple address, please make a note below</div>
        
        @if(!$addresses->isEmpty())   
            <div class="address-block-row">
                <div class="left-bl">Saved Address</div>
                <div class="right-bl">
                    <select name="billing[saved_address]" id="billing-saved-address">
                        @foreach($addresses as $r)
                        <option value="{{ $r->id }}">
                            {{ $r->full_name() }}, {{ $r->phone }}, {{ $r->address }}, {{ $r->city }}, 
                            @if(isset($r->state->id)) {{ $r->state->name }}, @endif
                            @if(isset($r->country()->id)) {{ $r->country->name }}, @endif
                            {{ $r->zipcode }}
                        </option>
                        @endforeach
                        
                        @if(isset($address['same_as_billing']))
                        <option value="-1" selected="selected">New Address</option>
                        @else
                        <option value="-1">New Address</option>
                        @endif
                    </select>
                </div>
            </div>
            
            <div id="billing-address-fields">
                @include('frontend.cart.checkout._billing_form')
            </div>
        @else   
            @include('frontend.cart.checkout._billing_form')
        @endif
        
        <div class="address-block-row">
            <div class="left-bl bold">&nbsp;</div>
            <div class="right-bl check-bl">
                <div class="checkbox check-success">
                    {!! Form::checkbox('billing[save_address]', 1, true, array('id' => 'save_billing_address', 'readonly')) !!}
                    <label for="shipping_same_as_billing">Save this address</label>
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