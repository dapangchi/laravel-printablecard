@extends('frontend.layouts.default')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 section-title">
            <h1>Congratulation!</h1>
            <h4>
                Your order has been placed successfully.<br/><br/> 
                Our sales team will review your order and notify you via email if there is any if there is any issue with the ordering. 
                Should you have any question about your order, please email to <span class="logged-as">supports@rockdesign.com</span>
            </h4>
        </div>
    </div>
    <div class="row chekout-but-row">
        <div class="col-md-12">
            <div class="button-wrap">
                <a href="{{ url('/') }}"><div class="chekout-but lg-but">BACK TO HOMEPAGE</div></a>
            </div>
        </div>
    </div>
</div>

@stop

@section('styles')
@stop

@section('scripts')
@stop