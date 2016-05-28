@extends('admin.layouts.login')
@section('title') Reset your password @stop
@section('content')

<!-- Reset Block -->
<div class="block block-themed animated fadeIn">
    <div class="block-header bg-primary">
        <ul class="block-options">
            <li>
                <a href="{{ URL::route('admin.login') }}" data-toggle="tooltip" data-placement="left" title="Log In"><i class="si si-login"></i></a>
            </li>
        </ul>
        <h3 class="block-title">Reset Password</h3>
    </div>

    <div class="block-content block-content-full block-content-narrow">
        <!-- Reminder Title -->
        <h1 class="h2 font-w600 push-30-t push-5">{{ $settings['site.name'] }}</h1>
        <p>Please input your email and new password.</p>
        <!-- END Reminder Title -->

        <!-- Reminder Form -->
        <!-- jQuery Validation (.js-validation-reminder class is initialized in js/pages/base_pages_reminder.js) -->
        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
        {!! Form::open(array('url' => URL::route('admin.reset.post'), 'method' => 'post', 'autocomplete' => 'off', 
            'id' => 'js-validation-reset', 'class' => 'form-horizontal push-30-t push-50')) !!}
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <div class="col-xs-12">
                    <div class="form-material form-material-primary floating">
                        {!! Form::email('email', null, array('class' => 'form-control', 'id' => 'email', 'placeholder' => '', 'required', 'autofocus')) !!}
                        {!! Form::label('email') !!}
                    </div>
                    
                    @if($errors->has('email'))
                    <div id="email-error" class="help-block text-right animated fadeInDown">{{ $errors->first('email', ':message') }}</div>
                    @endif
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                <div class="col-xs-12">
                    <div class="form-material form-material-primary floating">
                        {!! Form::password('password', array('class' => 'form-control', 'id' => 'password', 'placeholder' => '', 'required')) !!}
                        {!! Form::label('password') !!}
                    </div>
                    
                    @if($errors->has('password'))
                    <div id="password-error" class="help-block text-right animated fadeInDown">{{ $errors->first('password', ':message') }}</div>
                    @endif
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('password_confirm') ? 'has-error' : '' }}">
                <div class="col-xs-12">
                    <div class="form-material form-material-primary floating ">
                        {!! Form::password('password_confirm', array('class' => 'form-control', 'id' => 'password_confirm', 'placeholder' => '', 'required')) !!}
                        {!! Form::label('password_confirm') !!}
                    </div>
                    
                    @if($errors->has('password'))
                    <div id="password_confirm-error" class="help-block text-right animated fadeInDown">{{ $errors->first('password_confirm', ':message') }}</div>
                    @endif
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-xs-12 col-sm-6 col-md-5">
                    <button class="btn btn-block btn-primary" type="submit"> Reset</button>
                </div>
            </div>

        {!! Form::close() !!}
    </div>
</div>
<!-- END Reset Block -->

@stop

@section('scripts')
<script src="{{ asset('vendor/jquery-validation/jquery.validate.min.js') }}"></script>

<script>
jQuery('#js-validation-reset').validate({
    errorClass: 'help-block text-right animated fadeInDown',
    errorElement: 'div',
    errorPlacement: function(error, e) {
        jQuery(e).parents('.form-group > div').append(error);
    },
    highlight: function(e) {
        jQuery(e).closest('.form-group').removeClass('has-error').addClass('has-error');
        jQuery(e).closest('.help-block').remove();
    },
    success: function(e) {
        jQuery(e).closest('.form-group').removeClass('has-error');
        jQuery(e).closest('.help-block').remove();
    },
    rules: {
        'email': {
            required: true,
            email: true,
        },
        'password': {
            required: true,
            minlength: 4,
        },
        'password_confirm': {
            required: true,
            equalTo: '#password',
        }
    },
});
</script>

@stop