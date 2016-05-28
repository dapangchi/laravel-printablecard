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

    {!! Form::open(array('url' => URL::route("$base_route.store", $row->id), 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'aform', 'autocomplete' => 'off', 'files' => true)) !!}
    {!! Form::hidden("showcase_id", $row->id, array('id' => 'showcase_id')) !!}
    
    <div class="block">
        <div class="block-content">            
            <div class="form-buttons" style="padding-bottom: 20px;">
                <div class="text-right col-xs-offset-2">
                    <a class="btn btn-default" href='{{ my_route("$base_route.list") }}'>Back</a>
                    
                    @if($current_user->has_permission('product.showcase.manage'))
                    <button class="btn btn-primary btn-save" type="submit">Save</button>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!--start options-->
    <div class="block">
        <div class="block-content">                 
            <h3 class="font-w300 push">
                Product & Options 
                
                @if($current_user->has_permission('product.showcase.manage'))
                <input type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#product-list-form" value="Change"/>
                @endif
            </h3>
            
            <div id="card-option-box">
                @include('admin.catalog.showcase.options', array('showcase_id' => $row->id, 'card' => $row->card))
            </div>
            
        </div>
    </div>
    <!--end options-->
    
    <!--start general-->
    <div class="block">
        <div class="block-content">    
            <h3 class="font-w300 push">General</h3>
            <div class="form-group {{ $errors->has('showcase_name') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="showcase_name">Name<span class="red">*</span></label>
                <div class="col-sm-9">
                    {!! Form::text('showcase_name', $row->name, array('class' => 'form-control', 
                        'id' => 'showcase_name', 'placeholder' => '')) !!}
                    <div class="help-block">{{ $errors->first('showcase_name', ':message') }}</div>
                </div>
            </div>   
            
            <div class="form-group {{ $errors->has('showcase_description') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="showcase_description">Description</label>
                <div class="col-sm-9">
                    {!! Form::textarea('showcase_description', $row->description, array('class' => 'form-control', 
                        'id' => 'showcase_description', 'placeholder' => '', 'rows' => 5)) !!}
                    <div class="help-block">{{ $errors->first('showcase_description', ':message') }}</div>
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('showcase_tag') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="showcase_tag">Tags</label>
                <div class="col-sm-9">
                    {!! Form::text('showcase_tag', null, array('class' => 'form-control', 
                        'id' => 'showcase_tag', 'placeholder' => '', 'style' => 'width:150px;')) !!}
                    <div class="help-block">{{ $errors->first('showcase_tag', ':message') }}</div>
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('meta_tag') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="meta_tag">Meta Tag</label>
                <div class="col-sm-9">
                    {!! Form::text('meta_tag', $row->meta_tag, array('class' => 'form-control', 
                        'id' => 'meta_tag', 'placeholder' => '')) !!}
                    <div class="help-block">{{ $errors->first('meta_tag', ':message') }}</div>
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('meta_description') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="meta_description">Meta Description</label>
                <div class="col-sm-9">
                    {!! Form::textarea('meta_description', $row->meta_description, array('class' => 'form-control', 
                        'id' => 'meta_description', 'placeholder' => '', 'rows' => 3)) !!}
                    <div class="help-block">{{ $errors->first('meta_description', ':message') }}</div>
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
                    @foreach($row->images as $img)
                    <tr class="old" data-index="{{ $img->id }}">
                        <td class="text-center">
                            <img src="{{ asset(ImageManager::getImagePath( $img->image, 150, 150, 'fit-x' )) }}" class="thumbnail" width="100"/>
                        </td>
                        <td><input type="text" class="img-label form-control" value="{{ $img->label }}"/></td>
                        <td class="text-center"><input type="text" class="img-sort form-control" value="{{ $img->sort }}"/></td>
                        <td class="text-center"><input type="radio" class="img-main form-control" name="main" @if($img->main == '1') checked="checked" @endif /></td>
                        <td class="text-center">
                            <input type="checkbox" class="img-remove form-control" value="1" style="display:none;"/>
                            
                            @if($current_user->has_permission('product.showcase.manage'))
                            <input type="button" class="btn btn-danger btn-remove" value="Remove"/>
                            @endif
                        </td>    
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5">
                            @if($current_user->has_permission('product.showcase.manage'))
                            <input type="file" name="file_upload" id="file_upload" />
                            @endif
                        </td>
                    </tr>
                </tfoot>    
                </table>
            </div>
        </div>
    </div>
    <!--end images-->
    
    <div class="block">
        <div class="block-content">            
            <div class="form-buttons" style="padding-bottom: 20px;">
                <div class="text-right col-xs-offset-2">
                    <a class="btn btn-default" href='{{ my_route("$base_route.list") }}'>Back</a>
                    
                    @if($current_user->has_permission('product.showcase.manage'))
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
@include('admin.catalog.showcase.additional')
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
rowTags = {!! json_encode($row->tags()) !!}
</script>
<script src="{{ asset('admins/js/pages/catalog_showcase.js') }}"></script>
@stop