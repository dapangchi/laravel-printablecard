@extends('admin.layouts.login')
@section('title') Forgot your password @stop
@section('content')

<!-- Forgot Block -->
<div class="block block-themed animated fadeIn">
    <div class="block-header bg-primary">
        <ul class="block-options">
            <li>
                <a href="{{ URL::route('admin.login') }}" data-toggle="tooltip" data-placement="left" title="Log In"><i class="si si-login"></i></a>
            </li>
        </ul>
        <h3 class="block-title">Forgot Password</h3>
    </div>

    <div class="block-content block-content-full block-content-narrow">
        <!-- Reminder Title -->
        <h1 class="h2 font-w600 push-30-t push-5">{{ $settings['site.name'] }}</h1>
        <p>Please provide your account's email and we will send you your password.</p>
        <!-- END Reminder Title -->

        <!-- Reminder Form -->
        <!-- jQuery Validation (.js-validation-reminder class is initialized in js/pages/base_pages_reminder.js) -->
        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
        {!! Form::open(array('url' => URL::route('admin.forgot.post'), 'method' => 'post', 'autocomplete' => 'off', 
            'id' => 'js-validation-forgot', 'class' => 'form-horizontal push-30-t push-50')) !!}
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
            
            <div class="form-group">
                <div class="col-xs-12 col-sm-6 col-md-5">
                    <button class="btn btn-block btn-primary" type="submit"><i class="si si-envelope-open pull-right"></i> Send Mail</button>
                </div>
            </div>

        {!! Form::close() !!}
    </div>
</div>
<!-- END Forgot Block -->

@stop

@section('scripts')
<script src="{{ asset('vendor/jquery-validation/jquery.validate.min.js') }}"></script>

<script>
jQuery('#js-validation-forgot').validate({
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
            email: true
        }
    },
});
</script>

@stop