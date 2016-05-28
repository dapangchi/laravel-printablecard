@extends('frontend.layouts.default')

@section('content')

<div class="container section checkout-section">
    
    <!--start header-->
    <div class="row">
        <div class="col-md-12 top-block-wrap">
            <div class="top-block">
                <h1>CHECKOUT</h1>
                <ul id="checkout-steps">
                    <li id="ck-step-shipping" class="active shipping-nav" data-target="shipping-block">Address</li>
                    <li id="ck-step-payment" class="payment-nav" data-target="payment-block">Payment</li>
                    <li id="ck-step-confirm" class="confirm-nav" data-target="confirm-block">Confirm</li>
                </ul>
            </div>
        </div>
    </div>
    <!--end header-->
    
    <div id="checkout-steps-box">
        <!--start shipping-address-block-->
        <div id="shipping-block" class="row address-block block" style="display: block;">
            @include('frontend.cart.checkout.address')
        </div>
        <!--end address-block-->
        
        <!--start payment-block-->
        <div id="payment-block" class="row payment-block block" style="display: none;">
        @include('frontend.cart.checkout.payment')
        </div>
        <!--end payment-block-->
        
        <!--start confirm-block-->
        <div id="confirm-block" class="row confirm-block block" style="display: none;">
        @include('frontend.cart.checkout.confirm_noshipping')
        </div>
        <!--end confirm-block-->
    </div>  
</div>

@stop

@section('styles')
@stop

@section('scripts')
<script src="{{ asset('vendor/animsition/jquery.animsition.js') }}"></script>
<script src="{{ asset('vendor/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.payment.js') }}"></script>

<script>
ajaxSetShippingURL  = '{{ URL::route("cart.set.shipping") }}';
ajaxGetBillingURL   = '{{ URL::route("cart.get.billing") }}';
ajaxSetBillingURL   = '{{ URL::route("cart.set.billing") }}';
ajaxGetShipmentURL  = '{{ URL::route("cart.get.shipment") }}';
ajaxSetShipmentURL  = '{{ URL::route("cart.set.shipment") }}';
ajaxGetPaymentURL   = '{{ URL::route("cart.get.payment") }}';
ajaxSetPaymentURL   = '{{ URL::route("cart.set.payment") }}';
ajaxGetConfirmURL   = '{{ URL::route("cart.get.confirm") }}';
</script>
<script src="{{ asset('frontend/js/pages/checkout_common.js') }}"></script>
<script src="{{ asset('frontend/js/pages/checkout_noshipping.js') }}"></script>
@stop