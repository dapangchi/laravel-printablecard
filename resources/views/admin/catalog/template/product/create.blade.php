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

    {!! Form::open(array('url' => URL::route("$base_route.store"), 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'aform', 'autocomplete' => 'off', 'files' => true)) !!}
    {!! Form::hidden("template_id", null, array('id' => 'template_id')) !!}
    
    <div class="block">
        <div class="block-content">            
            <div class="form-buttons" style="padding-bottom: 20px;">
                <div class="text-right col-xs-offset-2">
                    <a class="btn btn-default" href='{{ my_route("$base_route.list") }}'>Back</a>
                    <button class="btn btn-primary btn-save" type="submit">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!--start options-->
    <div class="block">
        <div class="block-content">                 
            <h3 class="font-w300 push">Product & Options <input type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#product-list-form" value="Change"/></h3>
            <div class="help-block">Select card and options here;</div>
            
            <div id="card-option-box">
                @include('admin.catalog.template.product.options')
            </div>
            
        </div>
    </div>
    <!--end options-->
    
    <!--start general-->
    <div class="block">
        <div class="block-content">    
            <h3 class="font-w300 push">General</h3>
            <div class="form-group {{ $errors->has('template_name') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="template_name">Name<span class="red">*</span></label>
                <div class="col-sm-9">
                    {!! Form::text('template_name', null, array('class' => 'form-control', 
                        'id' => 'template_name', 'placeholder' => '')) !!}
                    <div class="help-block">{{ $errors->first('template_name', ':message') }}</div>
                </div>
            </div>   
            
            <div class="form-group {{ $errors->has('template_description') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="template_description">Description</label>
                <div class="col-sm-9">
                    {!! Form::textarea('template_description', null, array('class' => 'form-control', 
                        'id' => 'template_description', 'placeholder' => '', 'rows' => 5)) !!}
                    <div class="help-block">{{ $errors->first('template_description', ':message') }}</div>
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('template_tag') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="template_tag">Tags</label>
                <div class="col-sm-9">
                    {!! Form::text('template_tag', null, array('class' => 'form-control', 
                        'id' => 'template_tag', 'placeholder' => '', 'style' => 'width:150px;')) !!}
                    <div class="help-block">{{ $errors->first('template_tag', ':message') }}</div>
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
            
            <div class="form-group {{ $errors->has('turnaround_time') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="turnaround_time">Turnaround Time</label>
                <div class="col-sm-9">
                    {!! Form::textarea('turnaround_time', null, array('class' => 'form-control', 
                        'id' => 'turnaround_time', 'placeholder' => '', 'rows' => 3)) !!}
                    <div class="help-block">{{ $errors->first('turnaround_time', ':message') }}</div>
                </div>
            </div>
            
        </div>
    </div>
    <!--end general-->

    <!--start iamges-->
    <div class="block">
        <div class="block-content">                 
            <h3 class="font-w300 push">Images</h3>
            
            {!! Form::hidden('image_data', '', array('id' => 'image_data')) !!}
            <div class="table-responsive">
                <table id="image-table" class="table table-border">
                <colgroup>
                    <col width="100"/>
                    <col width=""/>
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
    <!--end images-->

    <!--start promotion-->
    <div class="block">
        <div class="block-content">                                 
            <h3 class="font-w300 push">Sales Promotion</h3>
            
            <div class="form-group {{ $errors->has('promotion_start_date') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="promotion_start_date">Start Date</label>
                <div class="col-sm-5">
                    {!! Form::text('promotion_start_date', null, array('class' => 'form-control datepicker', 
                        'id' => 'promotion_start_date', 'placeholder' => '')) !!}
                    <div class="help-block">{{ $errors->first('promotion_start_date', ':message') }}</div>
                </div>
            </div>  
            
            <div class="form-group {{ $errors->has('promotion_end_date') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="promotion_end_date">End Date</label>
                <div class="col-sm-5">
                    {!! Form::text('promotion_end_date', null, array('class' => 'form-control datepicker', 
                        'id' => 'promotion_end_date', 'placeholder' => '')) !!}
                    <div class="help-block">{{ $errors->first('promotion_end_date', ':message') }}</div>
                </div>
            </div>  
            
            <div class="form-group {{ $errors->has('promotion_percent') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="promotion_percent">Discount(%)</label>
                <div class="col-sm-5">
                    {!! Form::text('promotion_percent', null, array('class' => 'form-control', 
                        'id' => 'promotion_percent', 'placeholder' => '')) !!}
                    <div class="help-block">{{ $errors->first('promotion_percent', ':message') }}</div>
                </div>
            </div>  
        </div>
    </div>    
    <!--end promotion-->
    
    <div class="block">
        <div class="block-content">            
            <div class="form-buttons" style="padding-bottom: 20px;">
                <div class="text-right col-xs-offset-2">
                    <a class="btn btn-default" href='{{ my_route("$base_route.list") }}'>Back</a>
                    <button class="btn btn-primary btn-save" type="submit">Save</button>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>

@stop

@section('additional')
@include('admin.catalog.template.product.additional')
@stop

@section('styles')
<link rel="stylesheet" href="{{ asset('vendor/uploadify/uploadify.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/tagmanager/tagmanager.css') }}">
@stop

@section('scripts')
@include('admin.layouts.plugins.full_datatable', ['table_id' => '#card-table', 'orderfalse_columns' => array(3), 'default_order_column' => '1', 'default_order_by' => 'asc'])

<script src="{{ asset('vendor/typeahead.js') }}"></script>
<script src="{{ asset('vendor/tagmanager/tagmanager.js') }}"></script>
<script src="{{ asset('vendor/uploadify/jquery.uploadify.min.js') }}"></script>
<script>
ajaxChangeProductURL = '{{ URL::route("$base_route.change.product") }}';
rowTags = [];
</script>
<script src="{{ asset('admins/js/pages/catalog_template.js') }}"></script>
@stop