<?php 
    $order = $item->order; 
?>

@extends('admin.layouts.default')

@section('content')

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">Job Detail</h1>
        </div>
        
        <div class="col-sm-5 text-right">
            <a href="{{ my_route($list_route) }}" class="btn btn-default">Back</a>
        </div>
    </div>  
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">

    <!-- My Block -->
    <div class="block">
        <div class="block-content">

            {!! Form::open(array('url' => URL::route('admin.sales.order.item.post'), 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'aform')) !!}
                {!! Form::hidden('item_id', $item->id, array('id' => 'item_id')) !!}
                
                <div class="table-responsive">
                    @if($item->product_type == PRODUCT_DESIGN)
                        @include('admin.sales.order.item.design')
                    @else
                        @include('admin.sales.order.item.default')    
                    @endif
                </div>
            {!! Form::close() !!}
            
        </div>
    </div>
    <!-- END My Block -->
    
</div>

@stop

@section('additional')

@if($item->product_type != PRODUCT_DESIGN)
<div>
    <div class="modal fade" id="tracking-form" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                {!! Form::open(array('url' => URL::route("admin.sales.order.add.tracking.post"), 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'aform', 'autocomplete' => 'off', 'files' => true)) !!}
                    {!! Form::hidden('item_id', $item->id) !!}
                    
                    <div class="block block-themed block-transparent remove-margin-b">
                        <div class="block-header bg-primary-dark">
                            <ul class="block-options">
                                <li><button data-dismiss="modal" type="button"><i class="si si-close"></i></button></li>
                            </ul>
                            <h3 class="block-title">Tracking Information</h3>
                        </div>
                        <div id="tracking-form-content" class="block-content">
                        </div>
                        
                        <div class="modal-footer">
                            <button class="btn btn-sm btn-primary" type="submit">Save</button>
                            <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endif

@stop

@section('scripts')
<script>
ajaxGetTrackingFormUrl = '{{ route("admin.sales.order.item.tracking.form") }}';
</script>
<script src="{{ asset('admins/js/pages/sales_order_item.js') }}"></script>
@stop