<?php
    $ynDropdown = array('1' => 'Yes', '0' => 'No');
?>

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
{!! Form::open(array('url' => URL::route("admin.design.category.store"), 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'aform', 'autocomplete' => 'off', 'files' => true)) !!}
    
    <div class="block">
        <div class="block-content">            
            <div class="form-buttons" style="padding-bottom: 20px;">
                <div class="text-right col-xs-offset-2">
                    <a class="btn btn-default" href='{{ my_route("admin.design.category.list") }}'>Back</a>
                    <button class="btn btn-primary btn-save" type="submit">Save</button>
                </div>
            </div>
        </div>
    </div>
    
    <!--start general-->        
    <div class="block">
        <div class="block-content">
            <h3 class="font-w300 push">General</h3>
            
            <div class="form-group {{ $errors->has('design-slide') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="slide">Slide<span class="red">*</span></label>
                <div class="col-sm-9">
                    {!! Form::select('design-slide', $slides, null, array('class' => 'form-control autowidth', 'id' => 'design-slide')) !!}
                    <div class="help-block">{{ $errors->first('design-slide', ':message') }}</div>
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('design-name') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="design-name">Name<span class="red">*</span></label>
                <div class="col-sm-9">
                    {!! Form::text('design-name', null, array('class' => 'form-control', 
                        'id' => 'design-name', 'placeholder' => '', 'required')) !!}
                    <div class="help-block">{{ $errors->first('design-name', ':message') }}</div>
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('design-require-logo') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="slide">Require Logo Design<span class="red">*</span></label>
                <div class="col-sm-9">
                    {!! Form::select('design-require-logo', $ynDropdown, null, array('class' => 'form-control autowidth', 'id' => 'design-require-logo')) !!}
                    <div class="help-block">{{ $errors->first('design-require-logo', ':message') }}</div>
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('thumbnail') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="thumbnail">Image</label>
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
            
            <div class="form-group {{ $errors->has('design-text') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="design-text">Text</label>
                <div class="col-sm-9">
                    {!! Form::text('design-text', null, array('class' => 'form-control', 
                        'id' => 'design-text', 'placeholder' => '')) !!}
                    <div class="help-block">{{ $errors->first('design-text', ':message') }}</div>
                </div>
            </div>   
            
            <div class="form-group {{ $errors->has('design-description') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="design-description">Description</label>
                <div class="col-sm-9">
                    {!! Form::textarea('design-description', null, array('class' => 'form-control', 
                        'id' => 'design-description', 'placeholder' => '', 'rows' => 5)) !!}
                    <div class="help-block">{{ $errors->first('design-description', ':message') }}</div>
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('meta-tag') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="meta-tag">Meta Tag</label>
                <div class="col-sm-9">
                    {!! Form::text('meta-tag', null, array('class' => 'form-control', 
                        'id' => 'meta-tag', 'placeholder' => '')) !!}
                    <div class="help-block">{{ $errors->first('meta-tag', ':message') }}</div>
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('meta-description') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="meta-description">Meta Description</label>
                <div class="col-sm-9">
                    {!! Form::textarea('meta-description', null, array('class' => 'form-control', 
                        'id' => 'meta-description', 'placeholder' => '', 'rows' => 3)) !!}
                    <div class="help-block">{{ $errors->first('meta-description', ':message') }}</div>
                </div>
            </div>
                
        </div>
    </div>
    <!--end general-->
    
    <!--start phase-->
    <div class="block">
        <div class="block-content">                 
            <h3 class="font-w300 push">
                Service Phases
                <input type="button" value="Add Phase" id="btn-add-phase" class="btn btn-primary">
            </h3>
            
            {!! Form::hidden('phase_data', '', array('id' => 'phase_data')) !!}
            @include('admin.catalog.design_service.category.phase')
        </div>
    </div>
    <!--end phase-->
    
    <!--start feature works-->
    <div class="block">
        <div class="block-content">                 
            <h3 class="font-w300 push">Feature Works</h3>
            
            {!! Form::hidden('image_data', '', array('id' => 'image_data')) !!}
            <div class="table-responsive">
                <table id="image-table" class="table table-border">
                <colgroup>
                    <col width="100"/>
                    <col width=""/>
                    <col width=""/>
                    <col width="100"/>
                    <col width="100"/>
                </colgroup>
                <thead>
                    <tr>
                        <th class="text-center">Thumbnail</th>
                        <th>Label</th>
                        <th class="text-center">Link</th>
                        <th class="text-center">Sort</th>
                        <th class="text-center">Remove</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>    
                    </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5">
                            <input type="file" name="file_upload" id="file_upload" />
                        </td>
                    </tr>
                </tfoot>    
                </table>
            </div>
        </div>
    </div>
    <!--end feature works-->
    
    <div class="block">
        <div class="block-content">            
            <div class="form-buttons" style="padding-bottom: 20px;">
                <div class="text-right col-xs-offset-2">
                    <a class="btn btn-default" href='{{ my_route("admin.design.category.list") }}'>Back</a>
                    <button class="btn btn-primary btn-save" type="submit">Save</button>
                </div>
            </div>
        </div>
    </div>
    
{!! Form::close() !!}
</div>

@stop

@section('additional')
@include('admin.catalog.design_service.category.additional')
@stop

@section('styles')
<link rel="stylesheet" href="{{ asset('vendor/uploadify/uploadify.css') }}">
@stop

@section('scripts')
<script src="{{ asset('vendor/uploadify/jquery.uploadify.min.js') }}"></script>
<script src="{{ asset('vendor/resample.js') }}"></script>
<script src="{{ asset('admins/js/pages/catalog_category_image.js') }}"></script>
<script src="{{ asset('admins/js/pages/catalog_design.js') }}"></script>
@stop