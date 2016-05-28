<?php
    $ynDropdown = array('1' => 'Yes', '0' => 'No');
?>

@extends('admin.layouts.default')

@section('content')

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">{{ $page_title }} Category - Edit</h1>
        </div>
    </div>  
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
{!! Form::open(array('url' => URL::route("admin.design.category.store", $row->id), 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'aform', 'autocomplete' => 'off', 'files' => true)) !!}
    
    <div class="block">
        <div class="block-content">            
            <div class="form-buttons" style="padding-bottom: 20px;">
                <div class="text-right col-xs-offset-2">
                    <a class="btn btn-default" href='{{ my_route("admin.design.category.list") }}'>Back</a>
                    
                    @if($current_user->has_permission('product.design.manage'))
                    <button class="btn btn-primary btn-save" type="submit">Save</button>
                    @endif
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
                    {!! Form::select('design-slide', $slides, $row->slide_id, array('class' => 'form-control autowidth', 'id' => 'design-slide')) !!}
                    <div class="help-block">{{ $errors->first('design-slide', ':message') }}</div>
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('design-name') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="design-name">Name<span class="red">*</span></label>
                <div class="col-sm-9">
                    {!! Form::text('design-name', $row->name, array('class' => 'form-control', 
                        'id' => 'design-name', 'placeholder' => '', 'required')) !!}
                    <div class="help-block">{{ $errors->first('design-name', ':message') }}</div>
                </div>
            </div>  
            
            <div class="form-group {{ $errors->has('design-require-logo') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="slide">Require Logo Design<span class="red">*</span></label>
                <div class="col-sm-9">
                    {!! Form::select('design-require-logo', $ynDropdown, $row->require_logo_design, array('class' => 'form-control autowidth', 'id' => 'design-require-logo')) !!}
                    <div class="help-block">{{ $errors->first('design-require-logo', ':message') }}</div>
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('thumbnail') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="thumbnail">Thumbnail</label>
                <div class="col-sm-9">
                    @if($row->image == '')
                    <div class="thumbnail-img-box" style="margin-bottom:5px;">
                        <img src="{{ asset('admins/img/placeholder.png') }}" id="thumbnail-img" style="width:150px;"/>
                    </div>
                    @endif
                    
                    @if($row->image != '')
                    <div class="thumbnail-img-box">
                        <img src="{{ asset(ImageManager::getImagePath( $row->image, 150, 100, 'crop' )) }}" id="thumbnail-img" style="width:150px;">
                    </div>
                    @endif
                    
                    @if($current_user->has_permission('product.design.manage'))
                    <span class="btn btn-default btn-file">
                        Browse {!! Form::file('thumbnail', array('class' => '', 'id' => 'thumbnail')) !!}
                    </span>
                    @endif
                    
                    <div class="help-block">{{ $errors->first('thumbnail', ':message') }}</div>
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('design-text') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="design-text">Text</label>
                <div class="col-sm-9">
                    {!! Form::text('design-text', $row->text, array('class' => 'form-control', 
                        'id' => 'design-text', 'placeholder' => '')) !!}
                    <div class="help-block">{{ $errors->first('design-text', ':message') }}</div>
                </div>
            </div>   
            
            <div class="form-group {{ $errors->has('design-description') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="design-description">Description</label>
                <div class="col-sm-9">
                    {!! Form::textarea('design-description', $row->description, array('class' => 'form-control', 
                        'id' => 'design-description', 'placeholder' => '', 'rows' => 5)) !!}
                    <div class="help-block">{{ $errors->first('design-description', ':message') }}</div>
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('meta-tag') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="meta-tag">Meta Tag</label>
                <div class="col-sm-9">
                    {!! Form::text('meta-tag', $row->meta_tag, array('class' => 'form-control', 
                        'id' => 'meta-tag', 'placeholder' => '')) !!}
                    <div class="help-block">{{ $errors->first('meta-tag', ':message') }}</div>
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('meta-description') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="meta-description">Meta Description</label>
                <div class="col-sm-9">
                    {!! Form::textarea('meta-description', $row->meta_description, array('class' => 'form-control', 
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
                
                @if($current_user->has_permission('product.design.manage'))
                <input type="button" value="Add Phase" id="btn-add-phase" class="btn btn-primary">
                @endif
            </h3>
            
            {!! Form::hidden('phase_data', '', array('id' => 'phase_data')) !!}
            <div class="table-responsive">
                <table id="phase-table" class="table table-border">
                <colgroup>
                    <col width="80"/>
                    <col width="250"/>
                    <col width=""/>
                </colgroup>
                <thead>
                    <tr>
                        <th class="text-center"></th>
                        <th>Title</th>
                        <th class="text-center">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($row->phases as $p)
                    <tr class="old" data-index="{{ $p->id }}">
                        <td>
                            <input type="hidden" class="phase-icon-type formdata" name="phase[][icon-type]" value="{{ $p->icon_type }}"/>
                            <input type="hidden" class="phase-icon-path formdata" name="phase[][icon-path]" value="{{ $p->icon_path }}"/>
                            <input type="hidden" class="phase-remove formdata" name="phase[][remove]" value="0"/>
                            
                            @if($p->icon_type < 6)
                            <img class="phase-icon-image" src='{{ asset("frontend/img/design-icons/$p->icon_type.jpg") }}' width="61"/>
                            @else
                            <img class="phase-icon-image" src='{{ asset(ImageManager::getImagePath( $p->icon_path, 61, 61, "fit-x" )) }}' width="61"/>
                            @endif
                        </td>
                        <td><input type="text" class="form-control phase-title formdata" name="phase[][title]" value="{{ $p->title }}"/></td>
                        <td><textarea class="form-control phase-content formdata" name="phase[][content]">{{ $p->text }}</textarea></td>
                        <td>
                            @if($current_user->has_permission('product.design.manage'))
                            <button type="button" class="btn btn-sm btn-warning btn-phase-delete"><i class="fa fa-times"></i></button>
                            @endif
                        </td>                        
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
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
                </thead>
                <tbody>
                    @foreach($row->works as $img)
                    <tr class="old" data-index="{{ $img->id }}">
                        <td class="text-center">
                            <img src="{{ asset(ImageManager::getImagePath( $img->image, 150, 150, 'fit-x' )) }}" class="thumbnail" width="100"/>
                        </td>
                        <td><input type="text" class="img-label form-control" value="{{ $img->label }}"/></td>
                        <td class="text-center"><input type="text" class="img-link form-control" value="{{ $img->link }}"/></td>
                        <td class="text-center"><input type="text" class="img-sort form-control" value="{{ $img->sort }}"/></td>
                        <td class="text-center">
                            <input type="checkbox" class="img-remove form-control" value="1" style="display:none;"/>
                            
                            @if($current_user->has_permission('product.design.manage'))
                            <input type="button" class="btn btn-danger btn-img-remove" value="Remove"/>
                            @endif
                        </td>    
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5">
                            @if($current_user->has_permission('product.design.manage'))
                            <input type="file" name="file_upload" id="file_upload" />
                            @endif
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
                    
                    @if($current_user->has_permission('product.design.manage'))
                    <button class="btn btn-primary btn-save" type="submit">Save</button>
                    @endif
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