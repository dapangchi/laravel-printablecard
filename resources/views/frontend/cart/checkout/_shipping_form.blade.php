@if(isset($address->id))
    {!! Form::hidden('shipping[first_name]', $address->first_name) !!}    
    {!! Form::hidden('shipping[last_name]', $address->last_name) !!}    
    {!! Form::hidden('shipping[country]', $address->country_id) !!}    
    {!! Form::hidden('shipping[address]', $address->address) !!}    
    {!! Form::hidden('shipping[city]', $address->city) !!}    
    {!! Form::hidden('shipping[state]', $address->state_id) !!}    
    {!! Form::hidden('shipping[zipcode]', $address->zipcode) !!}    
    {!! Form::hidden('shipping[phone]', $address->phone) !!}    
@else
    <div class="address-block-row">
        <div class="left-bl">First Name</div>
        <div class="right-bl">{!! Form::text('shipping[first_name]', null, array('id' => 'shipping_first_name')) !!}</div>
    </div>
    <div class="address-block-row">
        <div class="left-bl">Last Name</div>
        <div class="right-bl">{!! Form::text('shipping[last_name]', null, array('id' => 'shipping_last_name')) !!}</div>
    </div>
    <div class="address-block-row">
        <div class="left-bl">Country</div>
        <div class="right-bl">{!! Form::select('shipping[country]', $countries, null, array('id' => 'shipping_country', 'class' => 'country require-region', 'data-target' => '#shipping_state')) !!}</div>
    </div>
    <div class="address-block-row">
        <div class="left-bl">Address</div>
        <div class="right-bl">{!! Form::text('shipping[address]', null, array('id' => 'shipping_address')) !!}</div>
    </div>
    <div class="address-block-row">
        <div class="left-bl">City</div>
        <div class="right-bl">{!! Form::text('shipping[city]', null, array('id' => 'shipping_city')) !!}</div>
    </div>
    <div class="address-block-row">
        <div class="left-bl">State / Province</div>
        <div class="right-bl">{!! Form::select('shipping[state]', $regions, null, array('id' => 'shipping_state')) !!}</div>
    </div>
    <div class="address-block-row">
        <div class="left-bl">Postal / Zip Code</div>
        <div class="right-bl">{!! Form::text('shipping[zipcode]', null, array('id' => 'shipping_zipcode')) !!}</div>
    </div>
    <div class="address-block-row">
        <div class="left-bl">Phone Number</div>
        <div class="right-bl">{!! Form::text('shipping[phone]', null, array('id' => 'shipping_phone')) !!}</div>
    </div>
@endif
