@extends('admin.layouts.default')

@section('content')
<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">Price Table - {{ $row->name }}</h1>
        </div>
    </div>  
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <div class="block">
        <div class="block-content">
            <div class="form-buttons">
                <div class="">
                    <a class="btn btn-default" href='{{ URL::route("$base_route.edit", $row->id) }}'>Back</a>
                    
                    @if($current_user->has_permission('product.card.manage'))
                        @if(count($row->features) > 0 && count($row->options) > 0)
                        <button class="btn btn-primary" type="button" id="btn-add-quantity">Add New Quantity</button>
                        @endif
                    @endif
                </div>
                <div class="clearfix"></div>
            </div><br/>
            
            <div id="price-templates" class="row">
                @foreach($row->quantities as $q)
                <div class="old col-sm-4 price-template">       
                    {!! Form::open(array('url' => URL::route("$base_route.price.store", $row->id), 'method' => 'post', 'class' => 'form-horizontal', 'autocomplete' => 'off')) !!}
                        {!! Form::hidden('quantity_id', $q->id, array('id' => 'quantity_id')) !!}
                        
                        <div class="box-group">
                            <label class="control-label">Quantity</label><br/>
                            <input type="text" class="quantity form-control pull-left" name="quantity" value="{{ $q->number }}" style="width:150px;"/>
                            
                            @if($current_user->has_permission('product.card.manage'))
                            <input type="button" class="btn btn-danger pull-right btn-remove-quantity" name="btn-remove-quantity" value="Remove"/>
                            @endif
                        </div>
                        
                        @foreach($row->features as $ft) 
                        <table class="table table-border">
                        <colgroup>
                            <col width="250"/>
                            <col width="10"/>
                            <col width="100"/>
                        </colgroup>  
                        <thead>
                            <tr>
                                <th>{{ $ft->name }}</th>
                                <th></th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ft->options as $op)   
                            <tr>
                                <td class="text-left">{{ $op->name }}</td>
                                <td class="text-right text-middle">
                                    @if($op->price_type == PRICE_FIXED) $
                                    @else %
                                    @endif
                                </td>
                                <td class="text-center"><div class="box-group"><input type="text" class="option-price form-control" name="option-price[<?php echo $ft->id; ?>][<?php echo $op->id; ?>]" value="{{ $row->getOptionPrice($q->id, $ft->id, $op->id, $op->price) }}"/></div></td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                        @endforeach
                        <table class="table table-border">
                        <colgroup>
                            <col width="250"/>
                            <col width="100"/>
                        </colgroup>  
                        <tbody>
                            <tr>
                                <td colspan="2" class="text-right">
                                    @if($current_user->has_permission('product.card.manage'))
                                    <input type="button" class="btn btn-info btn-update-table" value="Update Table"/>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                        </table>
                    {!! Form::close() !!}
                </div>
                @endforeach
            </div>    
        </div>
    </div>
</div>

@stop

@section('additional')
<div style="display:none;">
    <div id="price-template" class="new col-sm-4 price-template">
        {!! Form::open(array('url' => URL::route("$base_route.price.store", $row->id), 'method' => 'post', 'class' => 'form-horizontal', 'autocomplete' => 'off')) !!}
            <!--{!! Form::hidden('quantity_id', '', array('id' => 'quantity_id')) !!}-->
            
            <div class="box-group">
                <label class="control-label">Quantity</label><br/>
                <input type="text" class="quantity form-control pull-left" name="quantity" value="" style="width:150px;"/>
                <input type="button" class="btn btn-danger btn-remove-quantity pull-right" value="Remove"/>
            </div>
            
            @foreach($row->features as $ft) 
            <table class="table table-border">
            <colgroup>
                <col width="250"/>
                <col width="10"/>
                <col width="100"/>
            </colgroup>  
            <thead>
                <tr>
                    <th>{{ $ft->name }}</th>
                    <th></th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ft->options as $op)   
                <tr>
                    <td class="text-left">{{ $op->name }}</td>
                    <td class="text-right text-middle">
                        @if($op->price_type == PRICE_FIXED) $
                        @else %
                        @endif
                    </td>
                    <td class="text-center"><div class="box-group"><input type="text" class="option-price form-control" name="option-price[<?php echo $ft->id; ?>][<?php echo $op->id; ?>]" value="{{ $op->price }}"/></div></td>
                </tr>
                @endforeach
            </tbody>
            </table>
            @endforeach
            
            <table class="table table-border">
                <colgroup>
                    <col width="250"/>
                    <col width="100"/>
                </colgroup>  
                <tbody>
                    <tr><td colspan="2" class="text-right"><input type="button" class="btn btn-info btn-update-table" value="Update Table"/></td></tr>
                </tbody>
            </table>
        {!! Form::close() !!}
    </div>
</div>
@stop

@section('styles')
@stop

@section('scripts')
<script src="{{ asset('admins/js/pages/catalog_card_price.js') }}"></script>
@stop