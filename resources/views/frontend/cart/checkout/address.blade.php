{!! Form::open(array('id' => 'shipping-form', 'method' => 'post')) !!}
    {!! Form::hidden('shipping[same_as_billing]', 1) !!}
    
    <div class="col-md-7">
        <h3>Enter your billing address</h3>
        <div class="shipping-hint">Our designer will contact you via email you have entered below</div>
        
        <div class="address-block-row">
            <div class="left-bl">First Name</div>
            <div class="right-bl">{!! Form::text('shipping[first_name]', $customer->first_name, array('id' => 'shipping_first_name')) !!}</div>
        </div>
        <div class="address-block-row">
            <div class="left-bl">Last Name</div>
            <div class="right-bl">{!! Form::text('shipping[last_name]', $customer->last_name, array('id' => 'shipping_last_name')) !!}</div>
        </div>
        <div class="address-block-row">
            <div class="left-bl">Email</div>
            <div class="right-bl">{!! Form::email('shipping[email]', $customer->email, array('id' => 'shipping_email')) !!}</div>
        </div>
        
        <div class="address-block-row">
            <div class="left-bl">Country</div>
            <div class="right-bl">{!! Form::select('shipping[country]', $countries, $customer->country, array('id' => 'shipping_country', 'class' => 'country require-region', 'data-target' => '#shipping_state')) !!}</div>
        </div>
        <div class="address-block-row">
            <div class="left-bl">Address</div>
            <div class="right-bl">{!! Form::text('shipping[address]', $customer->address, array('id' => 'shipping_address')) !!}</div>
        </div>
        <div class="address-block-row">
            <div class="left-bl">City</div>
            <div class="right-bl">{!! Form::text('shipping[city]', $customer->city, array('id' => 'shipping_city')) !!}</div>
        </div>
        <div class="address-block-row">
            <div class="left-bl">State / Province</div>
            <div class="right-bl">{!! Form::select('shipping[state]', $regions, $customer->state_id, array('id' => 'shipping_state')) !!}</div>
        </div>
        <div class="address-block-row">
            <div class="left-bl">Postal / Zip Code</div>
            <div class="right-bl">{!! Form::text('shipping[zipcode]', $customer->zipcode, array('id' => 'shipping_zipcode')) !!}</div>
        </div>
        <div class="address-block-row">
            <div class="left-bl">Phone Number</div>
            <div class="right-bl">{!! Form::text('shipping[phone]', $customer->phone, array('id' => 'shipping_phone')) !!}</div>
        </div>
        <div class="address-block-row">
            <div class="left-bl">Note</div>
            <div class="right-bl">{!! Form::textarea('shipping[note]', null, array('id' => 'shipping_note')) !!}</div>
        </div>
        <div class="address-block-row">
            <div class="right-bl check-bl">
                <button type="submit" class="chekout-but lg-but">CONTINUE</button>
            </div>
        </div>
    </div>
{!! Form::close() !!}