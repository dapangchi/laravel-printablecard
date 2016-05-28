@extends('frontend.layouts.default')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 section-title">
            <h1>Congratulation!</h1>
            <h4>Your account has been created sucessfully, you are now login as <span class="logged-as">{{ $email }}</span></h4>
        </div>
    </div>
    <div class="row chekout-but-row">
        <div class="col-md-12">
            <div class="button-wrap">
                <?php
                $url =  url('/');
                if($auth->getCheckoutFlag()) $url = route('cart.checkout');
                ?>
            
                <a href="{{ $url }}"><div class="chekout-but lg-but">CONTINUE CHECKOUT</div></a>
            </div>
        </div>
    </div>
</div>

@stop

@section('scripts')
@stop