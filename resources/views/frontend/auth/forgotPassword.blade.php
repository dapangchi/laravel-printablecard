@extends('frontend.layouts.default')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 section-title">
            <h1>Forgot your password?</h1>
        </div>
    </div>
    
    {!! Form::open(array('url' => URL::route('customer.forgot.post'), 'id' => 'aform', 'method' => 'post', 'autocomplete' => 'off')) !!}
        <div class="row {{ $errors->has('email') ? 'has-error' : '' }}">
            <div class="col-md-6 col-sm-6 left-block">Your Email</div>
            <div class="col-md-6 col-sm-6 right-block">
                {!! Form::email('email', null, array('id' => 'email', 'class' => 'form-control', 'required')) !!}
                <div class="help-block">{{ $errors->first('email', ':message') }}</div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12 col-sm-12 submit-bl">
                <button class="lg-but create-account-but" type="submit">Send</button>
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
    },
});
</script>
@stop