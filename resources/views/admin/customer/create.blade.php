@extends('admin.layouts.default')

@section('content')

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">Customers - Create</h1>
        </div>
    </div>  
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- My Block -->
    <div class="block">
        <div class="block-content">
            {!! Form::open(array('url' => URL::route('admin.customer.store'), 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'aform', 'autocomplete' => 'off')) !!}
                {!! Form::hidden('customer_id', '', array('id' => 'user_id')) !!} 
                
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="first_name">First Name<span class="red">*</span></label>
                    <div class="col-sm-7">
                        {!! Form::text('first_name', null, array('class' => 'form-control', 
                            'id' => 'first_name', 'placeholder' => '', 'required')) !!}
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="last_name">Last Name<span class="red">*</span></label>
                    <div class="col-sm-7">
                        {!! Form::text('last_name', null, array('class' => 'form-control', 
                            'id' => 'last_name', 'placeholder' => '', 'required')) !!}
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="email">Email<span class="red">*</span></label>
                    <div class="col-sm-7">
                        {!! Form::email('email', '', array('class' => 'form-control', 
                            'id' => 'email', 'placeholder' => '', 'required')) !!}
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="password">Password<span class="red">*</span></label>
                    <div class="col-sm-7">
                        {!! Form::password('password', array('class' => 'form-control', 
                            'id' => 'password', 'placeholder' => '', 'required')) !!}
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="is_active">Active?</label>
                    <div class="col-sm-7">
                        {!! Form::select('is_active', ['1' => 'Active', '0' => 'InActive'], null, array('class' => 'form-control', 
                            'required', 'id' => 'is_active')) !!}
                    </div>
                </div>
                 
                <div class="form-group">
                    <div class="col-sm-7 col-xs-offset-3">
                        <a href="{{ my_route($list_route) }}" class="btn btn-default">Back</a>
                        <button id="btn-save" type="submit" class="btn btn-primary" name="btn-save">Save</button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@stop

@section('styles')
@stop

@section('scripts')
<script>
$('#aform').validate({
    errorClass: 'help-block text-left animated fadeInDown',
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
        'first_name': {
            required: {
                depends:function(){
                    $(this).val($.trim($(this).val()));
                    return true;
                }
            }
        },
        'last_name': {
            required: {
                depends:function(){
                    $(this).val($.trim($(this).val()));
                    return true;
                }
            }
        },
        'email': {
            required: true,
            email: true,
            remote: {
                url: '{{ URL::route("admin.customer.ajax.check.email") }}',
                type: 'post',
                data: {
                    _token: $('#csrf-token').attr('content'),
                    user_id: function() {
                        return $( "#user_id" ).val();
                    }
                }
            }
        },
        'password': {
            required: true,
            minlength: 4
        }
    },
    messages: {
        email: {
            remote: "Email already in use!"
        }
    }
});
</script>
@stop