@extends('admin.layouts.default')

@section('content')

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">{{ $page_title }} - Edit</h1>
        </div>
    </div>  
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <div class="block">
        <div class="block-content">
            {!! Form::open(array('url' => URL::route("admin.logosample.store", $row->id), 'method' => 'post', 'class' => 'form-horizontal', 
                'id' => 'aform', 'autocomplete' => 'off', 'files' => true)) !!}
                
                <div class="form-group {{ $errors->has('logo_name') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="logo_name">Name<span class="red">*</span></label>
                    <div class="col-sm-9">
                        {!! Form::text('logo_name', $row->name, array('class' => 'form-control', 
                            'id' => 'logo_name', 'placeholder' => '', 'required')) !!}
                        <div class="help-block">{{ $errors->first('logo_name', ':message') }}</div>
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('logo_image') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="logo_image">Logo</label>
                    <div class="col-sm-9">
                        @if($row->image == '')
                        <div class="logo_image-img-box" style="margin-bottom:5px;">
                            <img src="{{ asset('admins/img/placeholder.png') }}" id="logo_image-img" style="width:150px;"/>
                        </div>
                        @endif
                        
                        @if($row->image != '')
                        <div class="logo_image-img-box">
                            <img src="{{ asset(ImageManager::getImagePath( $row->image, 150, 150, 'crop' )) }}" id="logo_image-img" style="width:150px;">
                        </div>
                        @endif
                        
                        @if($current_user->has_permission('product.logosample.manage'))
                        <span class="btn btn-default btn-file">
                            Browse {!! Form::file('logo_image', array('class' => '', 'id' => 'logo_image')) !!}
                        </span>
                        @endif
                        
                        <div class="help-block">{{ $errors->first('logo_image', ':message') }}</div>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-xs-9 col-xs-offset-2">
                        <a class="btn btn-default" href='{{ my_route($list_route) }}'>Back</a>
                        
                        @if($current_user->has_permission('product.logosample.manage'))
                        <button class="btn btn-primary" type="submit" id="btn-save">Save</button>
                        @endif
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