@extends('admin.layouts.default')

@section('content')

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">{{ $page_title }} Category - Create</h1>
        </div>
    </div>  
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <div class="block">
        <div class="block-content">
            {!! Form::open(array('url' => URL::route("$base_route.store"), 'method' => 'post', 'class' => 'form-horizontal', 
                'id' => 'aform', 'autocomplete' => 'off', 'files' => true)) !!}
                
                <div class="form-group {{ $errors->has('category_name') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="category_name">Name<span class="red">*</span></label>
                    <div class="col-sm-9">
                        {!! Form::text('category_name', null, array('class' => 'form-control', 
                            'id' => 'category_name', 'placeholder' => '', 'required')) !!}
                        <div class="help-block">{{ $errors->first('category_name', ':message') }}</div>
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('category_text') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="category_text">Text<span class="red">*</span></label>
                    <div class="col-sm-9">
                        {!! Form::text('category_text', null, array('class' => 'form-control', 
                            'id' => 'category_text', 'placeholder' => '', 'required')) !!}
                        <div class="help-block">{{ $errors->first('category_text', ':message') }}</div>
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('thumbnail') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="thumbnail">Thumbnail</label>
                    <div class="col-sm-9">
                        <div class="thumbnail-img-box" style="margin-bottom:5px;">
                            <img src="{{ asset('admins/img/placeholder.png') }}" id="thumbnail-img" style="width:150px; height:100px;"/>
                        </div>
                        
                        <span class="btn btn-default btn-file">
                            Browse {!! Form::file('thumbnail', array('class' => '', 'id' => 'thumbnail')) !!}
                        </span>
                        <div class="help-block">{{ $errors->first('thumbnail', ':message') }}</div>
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('meta_tag') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="meta_tag">Meta Tag</label>
                    <div class="col-sm-9">
                        {!! Form::text('meta_tag', null, array('class' => 'form-control', 
                            'id' => 'meta_tag', 'placeholder' => '')) !!}
                        <div class="help-block">{{ $errors->first('meta_tag', ':message') }}</div>
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('meta_description') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="meta_description">Meta Description</label>
                    <div class="col-sm-9">
                        {!! Form::textarea('meta_description', null, array('class' => 'form-control', 
                            'id' => 'meta_description', 'placeholder' => '', 'rows' => 3)) !!}
                        <div class="help-block">{{ $errors->first('meta_description', ':message') }}</div>
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
<script src="{{ asset('admins/js/pages/catalog_category_image.js') }}"></script>
@stop