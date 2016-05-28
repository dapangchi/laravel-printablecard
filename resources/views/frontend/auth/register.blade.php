@extends('frontend.layouts.default')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 section-title">
            <h1>NEW TO {{ $settings['site.name'] }}</h1>
            <h4>We just need some information to create your account. If you are already a member, please <a href="{{ URL::route('customer.login') }}">sign in</a></h4>
        </div>
    </div>
    <!--<div class="row">
        <div class="col-md-6 col-sm-6 facebook-titl">
            Sign up with facebook
        </div>
        <div class="col-md-6 col-sm-6">
            <a class="facebook-but lg-but" href="{{ URL::route('customer.facebook.register') }}" style="display:block;">Sign Up With <img src="{{ asset('frontend/img/fac-icon-white.svg') }}" alt="FaceBook"></a>
        </div>
    </div>-->
    <div class="row">
        <!--<div class="col-md-12 col-sm-12 or-bl-wrap">
            <hr>
            <div class="or-bl">Or</div>
        </div>-->
        <div class="col-md-12">
            <div class="form-titl">Sign up below</div>
        </div>
    </div>
    
    {!! Form::open(array('url' => URL::route('customer.register.post'), 'id' => 'aform', 'method' => 'post', 'autocomplete' => 'off')) !!}
        <div class="row {{ $errors->has('email') ? 'has-error' : '' }}">
            <div class="col-md-6 col-sm-6 left-block">
                Your primary contact email
                <div>This will be your username for sign in</div>
            </div>
            <div class="col-md-6 col-sm-6 right-block">
                {!! Form::email('email', null, array('id' => 'email', 'class' => 'form-control', 'required')) !!}
                <div class="help-block">{{ $errors->first('email', ':message') }}</div>
            </div>
        </div>
        <div class="row {{ $errors->has('email_confirm') ? 'has-error' : '' }}">
            <div class="col-md-6 col-sm-6 left-block">Verify email</div>
            <div class="col-md-6 col-sm-6 right-block">
                {!! Form::email('email_confirm', null, array('id' => 'email_confirm', 'class' => 'form-control', 'required')) !!}
                <div class="help-block">{{ $errors->first('email_confirm', ':message') }}</div>
            </div>
        </div>
        
        <div class="row {{ $errors->has('password') ? 'has-error' : '' }}">
            <div class="col-md-6 col-sm-6 left-block">Your unique password</div>
            <div class="col-md-6 col-sm-6 right-block">
                {!! Form::password('password', array('id' => 'password', 'class' => 'form-control', 'required')) !!}
                <div class="help-block">{{ $errors->first('password', ':message') }}</div>
            </div>
        </div>
        <div class="row {{ $errors->has('password_confirm') ? 'has-error' : '' }}">
            <div class="col-md-6 col-sm-6 left-block">Verify password</div>
            <div class="col-md-6 col-sm-6 right-block">
                {!! Form::password('password_confirm', array('id' => 'password_confirm', 'class' => 'form-control', 'required')) !!}
                <div class="help-block">{{ $errors->first('password_confirm', ':message') }}</div>                   
            </div>
        </div>
        
        <div class="row {{ $errors->has('first_name') ? 'has-error' : '' }}">
            <div class="col-md-6 col-sm-6 left-block">First Name</div>
            <div class="col-md-6 col-sm-6 right-block">
                {!! Form::text('first_name', null, array('id' => 'first_name', 'class' => 'form-control', 'required')) !!}
                <div class="help-inline">{{ $errors->first('first_name', ':message') }}</div>
            </div>
        </div>
        <div class="row {{ $errors->has('last_name') ? 'has-error' : '' }}">
            <div class="col-md-6 col-sm-6 left-block">Last Name</div>
            <div class="col-md-6 col-sm-6 right-block">
                {!! Form::text('last_name', null, array('id' => 'last_name', 'class' => 'form-control', 'required')) !!}
                <div class="help-inline">{{ $errors->first('last_name', ':message') }}</div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12 col-sm-12 submit-bl">
                <button class="lg-but create-account-but" type="submit">CREATE ACCOUNT</button>
                <div>By signing in you agree to our <a href="{{ route('page.terms.html') }}">Terms</a> and <a href="{{ route('page.privacy.html') }}">Privacy Policy</a></div>
            </div>
        </div>
    {!! Form::close() !!}
</div>

@stop

@section('scripts')
<script src="{{ asset('vendor/jquery-validation/jquery.validate.min.js') }}"></script>
<script>
authRegisterPostUrl = '{{ URL::route("customer.ajax.check.email") }}';
</script>
<script src="{{ asset('frontend/js/pages/auth_register.js') }}"></script>
@stop