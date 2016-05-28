<?php $ynDropdown = array('1' => 'Yes', '0' => 'No'); ?>

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

    <!--start general-->
    <div class="block">
        <div class="block-content">    
            <h3 class="font-w300 push">General</h3>
            <div class="form-group {{ $errors->has('card_name') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="card_name">Name<span class="red">*</span></label>
                <div class="col-sm-9">
                    {!! Form::text('card_name', null, array('class' => 'form-control', 
                        'id' => 'card_name', 'placeholder' => '')) !!}
                    <div class="help-block">{{ $errors->first('card_name', ':message') }}</div>
                </div>
            </div>   
            
            <div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="category">Category<span class="red">*</span></label>
                <div class="col-sm-9">
                    {!! Form::select('category', $categories, null, array('class' => 'form-control', 
                        'id' => 'category', 'style' => 'width:auto;')) !!}
                    <div class="help-block">{{ $errors->first('category', ':message') }}</div>
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('card_description') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="card_description">Description</label>
                <div class="col-sm-9">
                    {!! Form::textarea('card_description', null, array('class' => 'form-control', 
                        'id' => 'card_description', 'placeholder' => '', 'rows' => 5)) !!}
                    <div class="help-block">{{ $errors->first('card_description', ':message') }}</div>
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('weight') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="weight">Weight</label>
                <div class="col-sm-9">
                    {!! Form::text('weight', null, array('class' => 'form-control', 
                        'id' => 'weight', 'placeholder' => '', 'style' => 'width:100px;')) !!}
                    <small>Per Cards(Pounds)</small>
                    <div class="help-block">{{ $errors->first('weight', ':message') }}</div>
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
            
            <div class="form-group {{ $errors->has('guide_link') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="guide_link">Guide Link</label>
                <div class="col-sm-9">
                    {!! Form::textarea('guide_link', null, array('class' => 'form-control', 
                        'id' => 'guide_link', 'placeholder' => '', 'rows' => 3)) !!}
                    <div class="help-block">{{ $errors->first('guide_link', ':message') }}</div>
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('atleast_one') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="atleast_one">Require at least one print feature</label>
                <div class="col-sm-9">
                    {!! Form::select('atleast_one', $ynDropdown, null, array('class' => 'form-control', 'style' => 'width:auto;')) !!}
                    <div class="help-block">{{ $errors->first('atleast_one', ':message') }}</div>
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
                
    <!--start discount-->
    <div class="block">
        <div class="block-content">
            <h3 class="font-w300 push">Set Discount</h3>
            
            <div class="form-group has-error">
                <span class="help-block" id="discount-message-box"></span>
            </div>
            
            {!! Form::hidden('discount_data', '', array('id' => 'discount_data')) !!}
            <table id="discount-table" class="table table-border">
            <colgroup>
                <col width="100"/>
                <col width="100"/>
                <col width="100"/>
                <col width=""/>
            </colgroup>
            <thead>
                <tr>
                    <td class="text-center">Set</td>
                    <td class="text-center">Percent</td>
                    <td class="text-center"><input type="button" class="btn btn-default" value="Add Discount" id="btn-add-discount"/></td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
            </tbody>    
            </table>    
        </div>
    </div>
    <!--end discount-->

    <!--start pricing-->    
    <div class="block">
        <div class="block-content">           
            <h3 class="font-w300 push">Pricing</h3>
            
            <div class="form-group has-error">
                <span class="help-block" id="feature-message-box"></span>
            </div>
            
            {!! Form::hidden('feature_data', '', array('id' => 'feature_data')) !!}
            <table id="discount-table" class="table table-border">
            <colgroup>
                <col width="250"/>
                <col width="150"/>
                <col width="150"/>
                <col width=""/>
            </colgroup>           
            <thead>
                <tr>
                    <th class="text-center">Feature Name</th>
                    <th class="text-center">Type</th>
                    <th class="text-center"></th>
                    <th class="text-center"></th>
                </tr>
                <tr>
                    <td class="text-center"><input type="text" class="form-control" id="feature-name" value=""/></td>
                    <td class="text-center">
                        <select id="feature-type" class="form-control">
                            <option value="{{ DROPDOWN }}">Dropdown</option>
                            <option value="{{ CHECKBOX }}">Checkbox</option>
                        </select>
                    </td>
                    <td class="text-center"><input type="button" class="btn btn-default" id="btn-add-feature" value="Add Feature"/></td>
                    <td></td>
                </tr>
            </thead>
            </table>
            
            <div id="feature-tables">
            </div>
        </div>
    </div>  
    <!--end pricing-->

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
@include('admin.catalog.card.product.additional')
@stop


@section('styles')
<link rel="stylesheet" href="{{ asset('vendor/uploadify/uploadify.css') }}">
@stop

@section('scripts')
<script src="{{ asset('vendor/uploadify/jquery.uploadify.min.js') }}"></script>
<script src="{{ asset('admins/js/pages/catalog_card.js') }}"></script>
@stop