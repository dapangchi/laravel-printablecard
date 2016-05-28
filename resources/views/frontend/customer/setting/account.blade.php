@extends('frontend.layouts.customer')

@section('content')

@include('frontend.customer.setting.header')

<div class="container bg-white md-p-tb-30 sm-p-tb-15 m-b-50 sm-m-b-30">
    <div class="row row-pad">
        <div class="col-md-12">
            @include('frontend.customer.setting.tabs')
            
            <div class="settings-table">
            {!! Form::open(array('url' => URL::route('customer.setting.account.post'), 'id' => 'account-form', 'method' => 'post', 'autocomplete' => 'on', 'files' => true)) !!}
                <div class="settings-table-row">
                    <div class="left-column cell-title">PROFILE AVATAR</div>
                    <div class="right-column profile-column">
                        {!! Form::file('avatar-file', array('id' => 'avatar-file', 'style' => 'display:none;')) !!}
                        
                        <img id="avatar-img" src="{{ resize_image($current_customer->picture, 90, 90, 'crop') }}" alt="avatar">
                        <div class="update-profile-but-wrap">                               
                            <a class="update-profile-but cursor-pointer" id="update-profile-but">UPDATE PROFILE AVATAR</a>
                        </div>
                    </div>
                </div>
                <div class="settings-table-row {{ $errors->has('first-name') ? 'has-error' : '' }}">
                    <div class="left-column cell-title">FIRST NAME</div>
                    <div class="right-column">
                        {!! Form::text('first-name', $current_customer->first_name, array('required')) !!}
                        <span class="help-block">{{ $errors->first('first-name', ':message') }}</span>
                    </div>
                </div>
                <div class="settings-table-row {{ $errors->has('last-name') ? 'has-error' : '' }}">
                    <div class="left-column cell-title">LAST NAME</div>
                    <div class="right-column">
                        {!! Form::text('last-name', $current_customer->last_name, array('required')) !!}
                        <span class="help-block">{{ $errors->first('last-name', ':message') }}</span>
                    </div>
                </div>
                <div class="settings-table-row {{ $errors->has('email') ? 'has-error' : '' }}">
                    <div class="left-column cell-title">EMAIL</div>
                    <div class="right-column">
                        {!! Form::email('email', $current_customer->email, array('required')) !!}
                        <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                    </div>
                </div>
                <!--<div class="settings-table-row {{ $errors->has('company') ? 'has-error' : '' }}">
                    <div class="left-column cell-title">COMPANY NAME</div>
                    <div class="right-column">
                        {!! Form::text('company', $current_customer->company, array()) !!}
                        <span class="help-block">{{ $errors->first('company', ':message') }}</span>
                    </div>
                </div>-->
                <div class="settings-table-row {{ $errors->has('phone') ? 'has-error' : '' }}">
                    <div class="left-column cell-title">PHONE NUMBER</div>
                    <div class="right-column">
                        {!! Form::text('phone', $current_customer->phone, array()) !!}
                        <span class="help-block">{{ $errors->first('phone', ':message') }}</span>
                    </div>
                </div>
                <div class="settings-table-row settings-newsletter-row">
                    <div class="left-column cell-title">NEWSLETTER</div>
                    <div class="right-column">
                        <?php $checked = $current_customer->is_subscribed == YES ? true : false; ?>
                        {!! Form::checkbox('newsletter', 1, $checked, array('class' => 'switchery js-check-change')) !!}
                        <span class="js-check-change-field">SUBSCRIBED</span>
                    </div>
                </div>
                <div class="settings-table-row">
                    <div class="left-column"></div>
                    <div class="right-column text-right">
                        <button type="submit" class="save-changes-but">SAVE CHANGE</button>
                    </div>
                </div>
            {!! Form::close() !!}
            </div>
            
        </div>
    </div>
</div>

@stop

@section('styles')
<link href="{{ asset('vendor/switchery/css/switchery.min.css') }}" rel="stylesheet" />
@stop

@section('scripts')
<script src="{{ asset('vendor/switchery/js/switchery.min.js') }}"></script>
<script src="{{ asset('vendor/resample.js') }}"></script>
<script src="{{ asset('frontend/js/pages/customer_account.js') }}"></script>
@stop