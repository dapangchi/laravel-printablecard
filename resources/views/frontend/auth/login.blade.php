@extends('frontend.layouts.default')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 section-title">
            <h1>LOGIN TO {{ $settings['site.name'] }}</h1>
        </div>
    </div>
    
    {!! Form::open(array('url' => URL::route('customer.login.post'), 'id' => 'aform', 'method' => 'post', 'autocomplete' => 'off')) !!}
        <div class="row">
            <div class="col-md-6 col-sm-6 left-block">Your Email</div>
            <div class="col-md-6 col-sm-6 right-block">
                {!! Form::email('email', null, array('id' => 'email', 'class' => 'form-control', 'required')) !!}
                <label class="error">{{ $errors->first('email', ':message') }}</label>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6 col-sm-6 left-block">Your password</div>
            <div class="col-md-6 col-sm-6 right-block">
                {!! Form::password('password', array('id' => 'password', 'class' => 'form-control', 'required')) !!}
                <label class="error">{{ $errors->first('password', ':message') }}</label>
            </div>
        </div>
        
        <div class="row"> 
            <div class="col-md-12 col-sm-12 submit-bl">
                <button class="lg-but create-account-but">LOGIN</button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-6 left-block">&nbsp;</div>
            <div class="col-md-6 col-sm-6 text-center">
                <br/>
                <a href="{{ route('customer.forgot') }}">Forgor your password?</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-6">&nbsp;</div>
            <div class="col-md-6 col-sm-6 text-center">
                <a href="{{ route('customer.register') }}">New Customer - please sign up here</a>
            </div>
        </div>
    {!! Form::close() !!}
</div>

@stop

@section('scripts')
<script src="{{ asset('vendor/jquery-validation/jquery.validate.min.js') }}"></script>
<script>
$( "#aform" ).validate({
    rules: {
        email: {
            email: true,
        },
        password: {
            minlength: 4,
        },
    },
});
</script>
@stop