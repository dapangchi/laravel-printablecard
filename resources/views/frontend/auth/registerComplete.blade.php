@extends('frontend.layouts.default')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 section-title">
            <h1>COMPLETE YOUR PROFILE</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-titl">Sign up below</div>
        </div>
    </div>
    
    {!! Form::open(array('url' => URL::route('customer.register.complete.post'), 'id' => 'aform', 'method' => 'post', 'autocomplete' => 'off')) !!}
        <div class="row">
            <div class="col-md-6 col-sm-6 left-block">Your unique password</div>
            <div class="col-md-6 col-sm-6 right-block">
                {!! Form::password('password', array('id' => 'password', 'class' => 'form-control', 'required')) !!}
                <div class="help-inline">{{ $errors->first('password', ':message') }}</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 left-block">Verify password</div>
            <div class="col-md-6 col-sm-6 right-block">
                {!! Form::password('password_confirm', array('id' => 'password_confirm', 'class' => 'form-control', 'required')) !!}
                <div class="help-inline">{{ $errors->first('password_confirm', ':message') }}</div>                   
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12 col-sm-12 submit-bl">
                <button class="lg-but create-account-but" type="submit">COMPLETE</button>
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
        password: {
            minlength: 4,
        },
        password_confirm: {
            equalTo: "#password",
            required: true,
        },
    },
    messages: {
        password_confirm:{
            equalTo: "Please enter the same password again.",
        }
    }
});
</script>
@stop