@extends('frontend.layouts.customer')

@section('content')

@include('frontend.customer.setting.header')

<div class="container bg-white md-p-tb-30 sm-p-tb-15 m-b-50 sm-m-b-30">
    <div class="row row-pad">
        <div class="col-md-12">
            @include('frontend.customer.setting.tabs')
           
            <div class="fw-medium m-b-25">EDIT PASSWORD</div> 
            <div class="settings-table">
            {!! Form::open(array('url' => URL::route('customer.setting.password.post'), 'id' => 'password-form', 'method' => 'post', 'autocomplete' => 'on')) !!}
                <div class="settings-table-row {{ $errors->has('current_password') ? 'has-error' : '' }}">
                    <div class="left-column cell-title">CURRENT PASSWORD</div>
                    <div class="right-column">
                        {!! Form::password('current_password', null, array()) !!}
                        <span class="help-block">{{ $errors->first('current_password', ':message') }}</span>
                    </div>
                </div>
                <div class="settings-table-row {{ $errors->has('password') ? 'has-error' : '' }}">
                    <div class="left-column cell-title">NEW PASSWORD</div>
                    <div class="right-column">
                        {!! Form::password('password', null, array()) !!}
                        <span class="help-block">{{ $errors->first('password', ':message') }}</span>
                    </div>
                </div>
                <div class="settings-table-row {{ $errors->has('password_confirm') ? 'has-error' : '' }}">
                    <div class="left-column cell-title">CONFIRM NEW PASSWORD</div>
                    <div class="right-column">
                        {!! Form::password('password_confirm', null, array()) !!}
                        <span class="help-block">{{ $errors->first('password_confirm', ':message') }}</span>
                    </div>
                </div>
                <div class="settings-table-row">
                    <div class="left-column"></div>
                    <div class="right-column text-right"><button type="submit" class="save-changes-but">SAVE CHANGE</button></div>
                </div>   
            {!! Form::close() !!}
            </div>
            
        </div>
    </div>
</div>

@stop

@section('styles')
@stop

@section('scripts')
@stop