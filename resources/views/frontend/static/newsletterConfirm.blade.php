@extends('frontend.layouts.default')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 section-title">
            <h1>Request Sent!</h1>
            <h4>Please check your email for subscription confirmation.</h4>
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