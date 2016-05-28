@extends('admin.layouts.default')

@section('content')

{!! Form::open(array('url' => URL::route("admin.cms.homdeslider.store"), 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'aform', 'autocomplete' => 'off')) !!}
<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">{{ $page_title }}</h1>
        </div>
        
        <div class="col-sm-5 text-right">
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
                    <div class="col-sm-12">
                        <div class="table-responsive">
                            <table id="image-table" class="table table-border">
                            <colgroup>
                                <col width="100"/>
                                <col width=""/>
                                <col width=""/>
                                <col width="80"/>
                                <col width="80"/>
                            </colgroup>
                            <thead>
                                <tr>
                                    <th class="text-center">Thumbnail</th>
                                    <th>Text</th>
                                    <th>Url</th>
                                    <th class="text-center">Sort</th>
                                    <th class="text-center">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rows as $img)
                                <tr class="old" data-index="{{ $img->id }}">
                                    <td>
                                        <img src="{{ asset(ImageManager::getImagePath( $img->image, 100, 100, 'fit-x' )) }}" class="thumbnail" alt="">
                                    </td>
                                    <td><input type="text" class="img-text form-control" value="{{ $img->text }}"/></td>
                                    <td><input type="text" class="img-url form-control" value="{{ $img->url }}"/></td>
                                    <td><input type="text" class="img-sort form-control" value="{{ $img->sort }}"/></td>
                                    <td>
                                        <input type="checkbox" class="img-remove form-control" value="1" style="display:none;"/>
                                        <input type="button" class="btn btn-danger btn-remove" value="Remove"/>
                                    </td>    
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="10">
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
<table style="display:none;">
<tr id="row-template" class="new">
    <td>
        <div class="place-holder" data-src=""><span>Roll Over for preview</span></div>
        <img src="{{ asset('admins/img/spacer.gif') }}" class="thumbnail" width="100" style="display:none;"/>
    </td>
    <td><input type="text" class="img-text form-control"/></td>
    <td><input type="text" class="img-url form-control"/></td>
    <td><input type="text" class="img-sort form-control"/></td>
    <td>
        <input type="checkbox" class="img-remove form-control" style="display:none;"/>
        <input type="button" class="btn btn-danger btn-remove" value="Remove"/>
    </td>
</tr>
</table>
@stop

@section('styles')
<link rel="stylesheet" href="{{ asset('vendor/uploadify/uploadify.css') }}">
@stop

@section('scripts')
<script src="{{ asset('vendor/uploadify/jquery.uploadify.js') }}"></script>
<script src="{{ asset('admins/js/pages/cms_home_slider.js') }}"></script>
@stop