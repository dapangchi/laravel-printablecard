@extends('admin.layouts.login')
@section('title') Admin Login @stop
@section('content')

<!-- Login Block -->
<div class="block block-themed animated fadeIn">
    <div class="block-header bg-primary">
        <ul class="block-options">
            <li>
                <a href="{{ URL::route('admin.forgot') }}">Forgot Password?</a>
            </li>
            <!--<li>
                <a href="{{ URL::to('admin/register') }}" data-toggle="tooltip" data-placement="left" title="New Account"><i class="si si-plus"></i></a>
            </li>-->
        </ul>
        <h3 class="block-title">Login</h3>
    </div>
    <div class="block-content block-content-full block-content-narrow">
        <!-- Login Title -->
        <h1 class="h2 font-w600 push-30-t push-5">{{ $settings['site.name'] }}</h1>
        <p>Welcome, please login.</p>
        <!-- END Login Title -->

        <!-- Login Form -->
        <!-- jQuery Validation (.js-validation-login class is initialized in js/pages/base_pages_login.js) -->
        <!-- For more examples you can check out https://github.com/jzaefferer/jquery-validation -->
        {!! Form::open(array('url' => URL::route('admin.login.post'), 'method' => 'post', 'autocomplete' => 'off', 
            'id' => 'js-validation-login', 'class' => 'form-horizontal push-30-t push-50')) !!}
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

            <div class="form-group">
                <div class="col-xs-12">                                                                                                                
                    <label class="css-input switch switch-sm switch-primary">
                        <input type="checkbox" id="remember" name="remember"><span></span> Remember Me?
                    </label>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <button class="btn btn-block btn-primary" type="submit"><i class="si si-login pull-right"></i> Log in</button>
                </div>
            </div>
        {!! Form::close() !!}
        <!-- END Login Form -->
    </div>
</div>
<!-- END Login Block -->

@stop

@section('scripts')
<script src="{{ asset('vendor/jquery-validation/jquery.validate.min.js') }}"></script>

<script>
jQuery('#js-validation-login').validate({
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
        }
    },
});
</script>
@stop