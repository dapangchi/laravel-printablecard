<?php
    $nyDropdown = array('0' => 'No', '1' => 'Yes');
    $ynDropdown = array('1' => 'Yes', '0' => 'No');
    $priceTypes = array('0' => 'Fixed', '1' => 'Percent');
?>

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
    <div class="block">
        <div class="block-content">            
            <div class="form-buttons" style="padding-bottom: 20px;">
                <div class="text-right col-xs-offset-2">
                    <a class="btn btn-default" href='{{ my_route("$base_route.list") }}'>Back</a>
                    
                    @if($current_user->has_permission('product.card.manage'))
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
            <div class="form-group {{ $errors->has('card_name') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="card_name">Name<span class="red">*</span></label>
                <div class="col-sm-9">
                    {!! Form::text('card_name', $row->name, array('class' => 'form-control', 
                        'id' => 'card_name', 'placeholder' => '')) !!}
                    <div class="help-block">{{ $errors->first('card_name', ':message') }}</div>
                </div>
            </div>   
            
            <div class="form-group {{ $errors->has('category') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="category">Category<span class="red">*</span></label>
                <div class="col-sm-9">
                    {!! Form::select('category', $categories, $row->category_id, array('class' => 'form-control', 
                        'id' => 'category', 'style' => 'width:auto;')) !!}
                    <div class="help-block">{{ $errors->first('category', ':message') }}</div>
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('card_description') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="card_description">Description</label>
                <div class="col-sm-9">
                    {!! Form::textarea('card_description', $row->description, array('class' => 'form-control', 
                        'id' => 'card_description', 'placeholder' => '', 'rows' => 5)) !!}
                    <div class="help-block">{{ $errors->first('card_description', ':message') }}</div>
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('weight') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="weight">Weight</label>
                <div class="col-sm-9">
                    {!! Form::text('weight', $row->weight, array('class' => 'form-control', 
                        'id' => 'weight', 'placeholder' => '', 'style' => 'width:100px;')) !!}
                    <small>Per Cards(Pounds)</small>
                    <div class="help-block">{{ $errors->first('weight', ':message') }}</div>
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
            
            <div class="form-group {{ $errors->has('turnaround_time') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="turnaround_time">Turnaround Time</label>
                <div class="col-sm-9">
                    {!! Form::textarea('turnaround_time', $row->turnaround_time, array('class' => 'form-control', 
                        'id' => 'turnaround_time', 'placeholder' => '', 'rows' => 3)) !!}
                    <div class="help-block">{{ $errors->first('turnaround_time', ':message') }}</div>
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('guide_link') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="guide_link">Guide Link</label>
                <div class="col-sm-9">
                    {!! Form::textarea('guide_link', $row->guide_link, array('class' => 'form-control', 
                        'id' => 'guide_link', 'placeholder' => '', 'rows' => 3)) !!}
                    <div class="help-block">{{ $errors->first('guide_link', ':message') }}</div>
                </div>
            </div>
            
            <div class="form-group {{ $errors->has('atleast_one') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="atleast_one">Require at least one print feature</label>
                <div class="col-sm-9">
                    {!! Form::select('atleast_one', $ynDropdown, $row->atleast_one, array('class' => 'form-control', 'style' => 'width:auto;')) !!}
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
                    <col width="150"/>
                    <col width=""/>
                    <col width="100"/>
                    <col width="100"/>
                </colgroup>
                <thead>
                    <tr>
                        <th class="text-center">Thumbnail</th>
                        <th></th>
                        <th>Label</th>
                        <th class="text-center">Sort</th>
                        <th class="text-center">Main</th>
                        <th class="text-center">Remove</th>
                    </tr>
                    <tr>
                        <td></td>
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
                            <a href='{{ route("$base_route.image", $img->id) }}' title="Add Bubble Info"><img src="{{ asset(ImageManager::getImagePath( $img->image, 150, 150, 'fit-x' )) }}" class="thumbnail" width="100"/></a>
                        </td>
                        <td>
                            @foreach($img->bubbles as $bubble)
                                {{ $bubble->label }}, 
                            @endforeach
                        </td>
                        <td><input type="text" class="img-label form-control" value="{{ $img->label }}"/></td>
                        <td class="text-center"><input type="text" class="img-sort form-control" value="{{ $img->sort }}"/></td>
                        <td class="text-center"><input type="radio" class="img-main form-control" name="main" @if($img->main == '1') checked="checked" @endif /></td>
                        <td class="text-center">
                            <input type="checkbox" class="img-remove form-control" value="1" style="display:none;"/>
                            
                            @if($current_user->has_permission('product.card.manage'))
                            <input type="button" class="btn btn-danger btn-remove" value="Remove"/>
                            @endif
                        </td>    
                    </tr>
                    @endforeach
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
                    {!! Form::text('promotion_start_date', $row->promotion_start_date?$row->promotion_start_date:'', array('class' => 'form-control datepicker', 
                        'id' => 'promotion_start_date', 'placeholder' => '')) !!}
                    <div class="help-block">{{ $errors->first('promotion_start_date', ':message') }}</div>
                </div>
            </div>  
            
            <div class="form-group {{ $errors->has('promotion_end_date') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="promotion_end_date">End Date</label>
                <div class="col-sm-5">
                    {!! Form::text('promotion_end_date', $row->promotion_end_date?$row->promotion_end_date:'', array('class' => 'form-control datepicker', 
                        'id' => 'promotion_end_date', 'placeholder' => '')) !!}
                    <div class="help-block">{{ $errors->first('promotion_end_date', ':message') }}</div>
                </div>
            </div>  
            
            <div class="form-group {{ $errors->has('promotion_percent') ? 'has-error' : '' }}">
                <label class="col-sm-2 control-label" for="promotion_percent">Discount(%)</label>
                <div class="col-sm-5">
                    {!! Form::text('promotion_percent', $row->promotion_percent, array('class' => 'form-control', 
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
            
            <div class="had-error">
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
                    <td class="text-center">
                        @if($current_user->has_permission('product.card.manage'))
                        <input type="button" class="btn btn-default" value="Add Discount" id="btn-add-discount"/>
                        @endif
                    </td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                @foreach($row->discounts as $dis)
                    <tr class="old" data-index="{{ $dis->id }}">
                        <td class="text-center"><input type="text" class="discount-set form-control" name="discount-set[]" value="{{ $dis->sets }}"/></td>
                        <td class="text-center"><input type="text" class="discount-percent form-control" name="discount-percent[]" value="{{ $dis->percent }}"/></td>
                        <td class="text-center">
                            <input type="checkbox" class="discount-remove form-control" style="display:none;"/>
                            
                            @if($current_user->has_permission('product.card.manage'))
                            <input type="button" class="btn btn-danger btn-discount-remove" value="Remove"/>
                            @endif
                        </td>
                    </tr>
                    @endforeach
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
            
            @if(count($row->features) > 0 && count($row->options) > 0)
            <div class="pull-right col-xs-offset-2">
                <a class="btn btn-primary" href='{{ URL::route("$base_route.price", $row->id) }}'>Edit Full Price Table</a>
            </div>
            <div class="clearfix"></div>
            @endif
            
            {!! Form::hidden('feature_data', '', array('id' => 'feature_data')) !!}
            
            @if($current_user->has_permission('product.card.manage'))
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
                    <td class="text-center">
                        <input type="button" class="btn btn-default" id="btn-add-feature" value="Add Feature"/>
                    </td>
                    <td></td>
                </tr>
            </thead>
            </table>
            @else
            <br/>
            @endif
            
            <div id="feature-tables">
                @foreach($row->featuresSorted() as $ft)
                    <div class="feature-template-box old" data-index="{{ $ft->id }}" style="background:#efefef;">
                        <table class="table table-border">
                        <colgroup>
                            <col width="250"/>
                            <col width="115"/>
                            <col width="200"/>
                            <col width="110"/>
                            <col width="125"/>
                            <col width="100"/>
                            <col width="100"/>
                            <col width=""/>
                        </colgroup>  
                        <thead>
                            <tr>
                                <th>Feature Name</th>
                                <th>Feature Type</th>
                                <th>Feature Link</th>
                                <th>Sort Order</th>
                                <th>Print Feature</th>
                                <th>Both Side</th>
                                <th>Required</th>
                                <th class="text-right">
                                    @if($current_user->has_permission('product.card.manage'))
                                    <button type="button" class="btn btn-danger btn-remove-feature" title="Remove Feature"><i class="fa fa-times"></i></button>
                                    @endif
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="text" class="form-control feature-name" value="{{ $ft->name }}"/></td>
                                <td class="text-middle feature-type-text">
                                    @if($ft->type == DROPDOWN) Dropdown
                                    @else Checkbox
                                    @endif
                                </td>
                                <td><input type="text" class="form-control feature-link" value="{{ $ft->link }}"/></td>
                                <td><input type="text" class="form-control feature-sort" value="{{ $ft->sort }}"/></td>
                                <td>{!! Form::select('feature-print', $nyDropdown, $ft->is_print, array('class' => 'form-control feature-print')) !!}</td>
                                <td>
                                    @if($ft->type == DROPDOWN)
                                        {!! Form::hidden('feature-print', 0, array('class' => 'form-control feature-side')) !!}
                                    @else
                                        {!! Form::select('feature-print', $ynDropdown, $ft->both_side, array('class' => 'form-control feature-side')) !!}
                                    @endif
                                </td>
                                <td>
                                    {!! Form::select('feature-required', $ynDropdown, $ft->is_required, array('class' => 'form-control feature-required')) !!}
                                </td>
                                <td>
                                    <input type="checkbox" class="feature-remove form-control" style="display:none;"/> 
                                    <input type="hidden" class="feature-type form-control" style="display:none;"/> 
                                </td>
                            </tr>
                        </tbody>
                        </table>
                        
                        <table class="table table-border table-options">
                        <colgroup>
                            <col width="250"/>
                            <col width="200"/>
                            <col width="200"/>
                            <col width="120"/>
                            <col width=""/>
                        </colgroup>  
                        <thead>
                            <tr>
                                <th>Option Name</th>
                                <th>Option Price</th>
                                <th>Sort Order</th>
                                <th>Price Type</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ft->optionsSorted() as $op)   
                            <tr class="old" data-index="{{ $op->id }}">
                                <td class="text-center"><div class="form-group"><input type="text" class="option-name form-control" name="option-name[]" value="{{ $op->name }}"/></div></td>
                                <td class="text-center"><div class="form-group"><input type="text" class="option-price form-control" name="option-price[]" value="{{ $op->price }}"/></div></td>
                                <td class="text-center"><div class="form-group"><input type="text" class="option-sort form-control" name="option-sort[]" value="{{ $op->sort }}"/></div></td>
                                <td>
                                    <div class="form-group">
                                        {!! Form::select('option-price-type[]', $priceTypes, $op->price_type, array('class' => 'form-control option-price-type')) !!}
                                    </div>
                                </td>
                                <td>
                                    <input type="checkbox" class="option-remove form-control" style="display:none;"/>
                                    
                                    @if($current_user->has_permission('product.card.manage'))
                                        <button type="button" class="btn btn-danger btn-remove-option" title="Remove Option"><i class="fa fa-times"></i></button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    @if($current_user->has_permission('product.card.manage'))
                                    <button type="button" class="btn btn-default btn-add-option">Add Option</button>
                                    @endif
                                </td>
                                <td></td>
                            </tr>
                        </tfoot>
                        </table>
                    </div>
                @endforeach
            </div>
        </div>
    </div>  
    <!--end pricing-->

    <div class="block">
        <div class="block-content">            
            <div class="form-buttons" style="padding-bottom: 20px;">
                <div class="text-right col-xs-offset-2">
                    <a class="btn btn-default" href='{{ my_route("$base_route.list") }}'>Back</a>
                    
                    @if($current_user->has_permission('product.card.manage'))
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
@include('admin.catalog.card.product.additional')
@stop

@section('styles')
<link rel="stylesheet" href="{{ asset('vendor/uploadify/uploadify.css') }}">
@stop

@section('scripts')
<script src="{{ asset('vendor/uploadify/jquery.uploadify.min.js') }}"></script>
<script src="{{ asset('admins/js/pages/catalog_card.js') }}"></script>
@stop