@extends('frontend.layouts.customer')

@section('content')

@include('frontend.customer.setting.header')

<div class="container bg-white md-p-tb-30 sm-p-tb-15 m-b-50 sm-m-b-30">
    <div class="row row-pad">
        <div class="col-md-12">
            @include('frontend.customer.setting.tabs')
           
            <div class="fw-medium m-b-25">ADD NEW BILLING ADDRESS</div>
            <div class="settings-table">
            {!! Form::open(array('url' => URL::route('customer.setting.billing.post'), 'id' => 'password-form', 'method' => 'post', 'autocomplete' => 'on')) !!}
                
                @include('frontend.customer.setting._address_form')
                
                <div class="settings-table-row">
                    <div class="left-column"></div>
                    <div class="right-column text-right">
                        <button type="submit" class="save-changes-but">ADD NEW BILLING</button>
                    </div>
                </div>
                
            {!! Form::close() !!}
            </div>
           
            @if(!$current_customer->billingAddresses->isEmpty())
                <div class="fw-medium m-b-15">SAVED BILLING ADDRESS</div>
                <div id="address-list-table">
                @include('frontend.customer.setting._address', array('addresses' => $current_customer->billingAddresses, 'default' => $current_customer->defaultBillingAddress()))
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
ajaxDeleteUrl = '{{ route("customer.setting.delete.billing") }}';
ajaxUpdateUrl = '{{ route("customer.setting.update.default.billing") }}';
</script>
<script src="{{ asset('frontend/js/pages/customer_address.js') }}"></script>
@stop