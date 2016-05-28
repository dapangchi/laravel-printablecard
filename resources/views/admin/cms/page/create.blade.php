@extends('admin.layouts.default')

@section('content')

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">Page - Create</h1>
        </div>
    </div>  
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <div class="block">
        <div class="block-content">
            {!! Form::open(array('url' => URL::route("admin.cms.page.store"), 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'aform', 'autocomplete' => 'off')) !!}
                
                <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="title">Title<span class="red">*</span></label>
                    <div class="col-sm-9">
                        {!! Form::text('title', null, array('class' => 'form-control', 
                            'id' => 'title', 'placeholder' => '', 'required')) !!}
                        <div class="help-block">{{ $errors->first('title', ':message') }}</div>
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="content">Content</label>
                    <div class="col-sm-9">
                        {!! Form::textarea('content', null, array('class' => 'form-control', 
                            'id' => 'content', 'placeholder' => '')) !!}
                        <div class="help-block">{{ $errors->first('content', ':message') }}</div>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-xs-9 col-xs-offset-2">
                        <a class="btn btn-default" href='{{ my_route($list_route) }}'>Back</a>
                        <button class="btn btn-primary" type="submit" id="btn-save">Save</button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@stop

@section('additional')
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
        'title': {
            required: {
                depends:function(){
                    $(this).val($.trim($(this).val()));
                    return true;
                }
            }
        },
    }
});
</script>
@stop