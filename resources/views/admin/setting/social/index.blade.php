@extends('admin.layouts.default')

@section('content')

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">{{ $page_title }}</h1>
        </div>
    </div>  
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- My Block -->
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Facebook Setting</h3>
        </div>
        
        <div class="block-content block-content-narrow">
            {!! Form::open(array('url' => URL::route("admin.setting.social.store"), 'method' => 'post', 'class' => 'form-horizontal')) !!}
                <div class="form-group {{ $errors->has('app_id') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="app_id">APP ID</label>
                    <div class="col-sm-9">
                        {!! Form::text('app_id', $settings['social.fb_app_id'], array('class' => 'form-control', 'id' => 'app_id', 'required')) !!}
                        <div class="help-block">{{ $errors->first('app_id', ':message') }}</div>
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('app_key') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="app_key">APP KEY</label>
                    <div class="col-sm-9">
                        {!! Form::text('app_key', $settings['social.fb_app_key'], array('class' => 'form-control', 'id' => 'app_key', 'required')) !!}
                        <div class="help-block">{{ $errors->first('app_key', ':message') }}</div>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-xs-9 col-xs-offset-3">
                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
    <!-- END My Block -->
</div>

@stop