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

    {!! Form::open(array('url' => URL::route("admin.design.product.store"), 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'aform', 'autocomplete' => 'off', 'files' => true)) !!}
    
    <div class="block">
        <div class="block-content">            
            <div class="form-buttons" style="padding-bottom: 20px;">
                <div class="text-right col-xs-offset-2">
                    <a class="btn btn-default" href='{{ my_route($list_route) }}'>Back</a>
                    <button class="btn btn-primary btn-save" type="submit">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!--start general-->
    <div class="block">
        <div class="block-content">    
            <h3 class="font-w300 push">General</h3>
            
            <div class="form-group {{ $errors->has('package-category') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="package-category">Category<span class="red">*</span></label>
                <div class="col-sm-9">
                    {!! Form::select('package-category', $categories, null, array('class' => 'form-control', 
                        'id' => 'package-category', 'style' => 'width:auto;')) !!}
                    <div class="help-block">{{ $errors->first('package-category', ':message') }}</div>
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('package-name') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="package-name">Name<span class="red">*</span></label>
                <div class="col-sm-9">
                    {!! Form::text('package-name', null, array('class' => 'form-control', 
                        'id' => 'package-name', 'placeholder' => '', 'required')) !!}
                    <div class="help-block">{{ $errors->first('package-name', ':message') }}</div>
                </div>
            </div> 
            
            <div class="form-group {{ $errors->has('package-price') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="package-price">Price<span class="red">*</span></label>
                <div class="col-sm-9">
                    {!! Form::text('package-price', null, array('class' => 'form-control', 
                        'id' => 'package-price', 'placeholder' => '', 'required')) !!}
                    <div class="help-block">{{ $errors->first('package-price', ':message') }}</div>
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
            
            <div class="form-group {{ $errors->has('package-description') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="package-description">Description</label>
                <div class="col-sm-9">
                    {!! Form::textarea('package-description', null, array('class' => 'form-control', 
                        'id' => 'package-description', 'placeholder' => '', 'rows' => 5)) !!}
                    <div class="help-block">{{ $errors->first('package-description', ':message') }}</div>
                </div>
            </div>
            
        </div>
    </div>
    <!--end general-->
    
    <div class="block">
        <div class="block-content">            
            <div class="form-buttons" style="padding-bottom: 20px;">
                <div class="text-right col-xs-offset-2">
                    <a class="btn btn-default" href='{{ my_route($list_route) }}'>Back</a>
                    <button class="btn btn-primary btn-save" type="submit">Save</button>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
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