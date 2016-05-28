@extends('frontend.layouts.default')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 section-title">
            <h1>Reset password</h1>
        </div>
    </div>
    
    {!! Form::open(array('url' => URL::route('customer.reset.post'), 'id' => 'aform', 'method' => 'post', 'autocomplete' => 'off')) !!}
        {!! Form::hidden('token', $token) !!}
        
        <div class="row {{ $errors->has('email') ? 'has-error' : '' }}">
            <div class="col-md-6 col-sm-6 left-block">Your email</div>
            <div class="col-md-6 col-sm-6 right-block">
                {!! Form::email('email', null, array('id' => 'email', 'class' => 'form-control', 'required')) !!}
                <div class="help-block">{{ $errors->first('email', ':message') }}</div>
            </div>
        </div>
            
        <div class="row {{ $errors->has('password') ? 'has-error' : '' }}">
            <div class="col-md-6 col-sm-6 left-block">Your password</div>
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
        
        <div class="row">
            <div class="col-md-12 col-sm-12 submit-bl">
                <button class="lg-but create-account-but" type="submit">RESET</button>
            </div>
        </div>
        
    {!! Form::close() !!}
</div>

@stop
