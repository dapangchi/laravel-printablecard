@extends('admin.layouts.default')

@section('content')

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">Coupons - Edit</h1>
        </div>
    </div>  
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- My Block -->
    <div class="block">
        <div class="block-content">
            {!! Form::open(array('url' => URL::route('admin.sales.coupon.store'), 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'aform', 'autocomplete' => 'off')) !!}
                {!! Form::hidden('coupon-id', $row->id, array('id' => 'coupon-id')) !!} 
                
                <div class="form-group {{ $errors->has('coupon-name') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="coupon-name">Name<span class="red">*</span></label>
                    <div class="col-sm-7">
                        {!! Form::text('coupon-name', $row->name, array('class' => 'form-control', 'id' => 'coupon-name', 'required')) !!}
                        <span class="help-block">{{ $errors->first('coupon-name', ':message') }}</span>
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('coupon-code') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="coupon-code">Code<span class="red">*</span></label>
                    <div class="col-sm-7">
                        {!! Form::text('coupon-code', $row->code, array('class' => 'form-control', 'id' => 'coupon-code', 'required')) !!}
                        <span class="help-block">{{ $errors->first('coupon-code', ':message') }}</span>
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('discount-percent') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="end-date">Discount Percent<span class="red">*</span></label>
                    <div class="col-sm-7">
                        {!! Form::text('discount-percent', $row->discount_percent, array('class' => 'form-control', 'id' => 'discount-percent')) !!}
                        <span class="help-block">{{ $errors->first('discount-percent', ':message') }}</span>
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('start-date') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="start-date">Start Date</label>
                    <div class="col-sm-7">
                        {!! Form::text('start-date', $row->start_date ? date('Y-m-d', $row->start_date) : '', array('class' => 'form-control datepicker', 'id' => 'start-date')) !!}
                        <span class="help-block">{{ $errors->first('start-date', ':message') }}</span>
                    </div>
                </div> 
                
                <div class="form-group {{ $errors->has('end-date') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="end-date">End Date</label>
                    <div class="col-sm-7">
                        {!! Form::text('end-date', $row->end_date ? date('Y-m-d', $row->end_date) : '', array('class' => 'form-control datepicker', 'id' => 'end-date')) !!}
                        <span class="help-block">{{ $errors->first('end-date', ':message') }}</span>
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('limit-time') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="end-date">Times of Use</label>
                    <div class="col-sm-7">
                        {!! Form::text('limit-time', $row->limit_time, array('class' => 'form-control', 'id' => 'limit-time')) !!}
                        <span>0: Unlimit</span>
                        <span class="help-block">{{ $errors->first('limit-time', ':message') }}</span>
                    </div>
                </div>
                 
                <div class="form-group">
                    <div class="col-sm-7 col-xs-offset-3">
                        <a href="{{ my_route($list_route) }}" class="btn btn-default">Back</a>
                        
                        @if($current_user->has_permission('sales.setting.manage'))
                        <button id="btn-save" type="submit" class="btn btn-primary" name="btn-save">Save</button>
                        @endif
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@stop

@section('styles')
@stop

@section('scripts')
@stop