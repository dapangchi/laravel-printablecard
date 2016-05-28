@extends('frontend.layouts.default')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 section-title">
            <h1>Congratulation!</h1>
            <h4>You have now sucessfully subscribed to RockDesign's awesome newsletter. It comes with monthly free templates updates, latest promotions and latest design tutorials. </h4>
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