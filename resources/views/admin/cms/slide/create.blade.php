@extends('admin.layouts.default')

@section('content')

{!! Form::open(array('url' => URL::route("admin.cms.slide.store"), 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'aform', 'autocomplete' => 'off')) !!}
<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">Slideshow - Create</h1>
        </div>
        
        <div class="col-sm-5 text-right">
            <a class="btn btn-default" href='{{ my_route($list_route) }}'>Back</a>
            <button class="btn btn-primary" type="submit" id="btn-save">Save</button>
        </div>
    </div>  
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <div class="block">
        <div class="block-content">
                {!! Form::hidden('image_data', '', array('id' => 'image_data')) !!}
                    
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="title">Title<span class="red">*</span></label>
                    <div class="col-sm-9">
                        {!! Form::text('title', null, array('class' => 'form-control', 
                            'id' => 'title', 'placeholder' => '', 'required')) !!}
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="title">Images</label>
                    <div class="col-sm-9">
                        <div class="table-responsive">
                            <table id="image-table" class="table table-border">
                            <colgroup>
                                <col width="100"/>
                                <col width=""/>
                                <col width="100"/>
                                <col width="100"/>
                                <col width="100"/>
                            </colgroup>
                            <thead>
                                <tr>
                                    <th class="text-center">Thumbnail</th>
                                    <th>Label</th>
                                    <th class="text-center">Sort</th>
                                    <th class="text-center">Main</th>
                                    <th class="text-center">Remove</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><input type="radio" class="img-main form-control" name="main" checked="checked"/></td>
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
        </div>
    </div>
</div>
{!! Form::close() !!}

@stop

@section('additional')
@include('admin.cms.slide.additional')
@stop

@section('styles')
<link rel="stylesheet" href="{{ asset('vendor/uploadify/uploadify.css') }}">
@stop

@section('scripts')
<script src="{{ asset('vendor/uploadify/jquery.uploadify.js') }}"></script>
<script src="{{ asset('admins/js/pages/cms_slide.js') }}"></script>
@stop