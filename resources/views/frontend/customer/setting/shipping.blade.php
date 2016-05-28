@extends('frontend.layouts.customer')

@section('content')

@include('frontend.customer.setting.header')

<div class="container bg-white md-p-tb-30 sm-p-tb-15 m-b-50 sm-m-b-30">
    <div class="row row-pad">
        <div class="col-md-12">
            @include('frontend.customer.setting.tabs')
           
            <div class="fw-medium m-b-25">ADD NEW SHIPPING ADDRESS</div>
            <div class="settings-table">
            {!! Form::open(array('url' => URL::route('customer.setting.shipping.post'), 'id' => 'password-form', 'method' => 'post', 'autocomplete' => 'on')) !!}
                
                @include('frontend.customer.setting._address_form')
                
                <div class="settings-table-row">
                    <div class="left-column"></div>
                    <div class="right-column text-right">
                        <button type="submit" class="save-changes-but">ADD NEW SHIPPING</button>
                    </div>
                </div>
                
            {!! Form::close() !!}
            </div>
           
            @if(!$current_customer->shippingAddresses->isEmpty())
                <div class="fw-medium m-b-15">SAVED SHIPPING ADDRESS</div>
                <div id="address-list-table">
                @include('frontend.customer.setting._address', array('addresses' => $current_customer->shippingAddresses, 'default' => $current_customer->defaultShippingAddress()))
                </div>
            @endif
        </div>
    </div>
</div>

@stop

@section('styles')
@stop

@section('scripts')
<script>
ajaxDeleteUrl = '{{ route("customer.setting.delete.shipping") }}';
ajaxUpdateUrl = '{{ route("customer.setting.update.default.shipping") }}';
</script>
<script src="{{ asset('frontend/js/pages/customer_address.js') }}"></script>
@stop