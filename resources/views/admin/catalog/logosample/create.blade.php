@extends('admin.layouts.default')

@section('content')

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">{{ $page_title }} - Create</h1>
        </div>
    </div>  
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <div class="block">
        <div class="block-content">
            {!! Form::open(array('url' => URL::route("admin.logosample.store"), 'method' => 'post', 'class' => 'form-horizontal', 
                'id' => 'aform', 'autocomplete' => 'off', 'files' => true)) !!}
                
                <div class="form-group {{ $errors->has('logo_name') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="logo_name">Name<span class="red">*</span></label>
                    <div class="col-sm-9">
                        {!! Form::text('logo_name', null, array('class' => 'form-control', 
                            'id' => 'logo_name', 'placeholder' => '', 'required')) !!}
                        <div class="help-block">{{ $errors->first('logo_name', ':message') }}</div>
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('logo_image') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="thumbnail">Logo</label>
                    <div class="col-sm-9">
                        <div class="thumbnail-img-box" style="margin-bottom:5px;">
                            <img src="{{ asset('admins/img/placeholder.png') }}" id="logo_image-img" style="width:150px; height:150px;"/>
                        </div>
                        
                        <span class="btn btn-default btn-file">
                            Browse {!! Form::file('logo_image', array('class' => '', 'id' => 'logo_image')) !!}
                        </span>
                        <div class="help-block">{{ $errors->first('logo_image', ':message') }}</div>
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
<script src="{{ asset('vendor/resample.js') }}"></script>
<script src="{{ asset('admins/js/pages/logo_image.js') }}"></script>
@stop