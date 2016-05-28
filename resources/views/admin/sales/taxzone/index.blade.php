@extends('admin.layouts.default')

@section('content')

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">Tax Zones</h1>
        </div>
        
        @if($current_user->has_permission('sales.setting.manage'))
        <div class="col-sm-5 text-right">
            <a class="btn btn-primary" href='{{ URL::route("admin.sales.taxzone.create") }}'>Add</a>
        </div>
        @endif
    </div>  
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">

    <!-- My Block -->
    <div class="block">
        <!--<div class="block-header">
            <h3 class="block-title">Website Setting</h3>
            
            <ul class="block-options">
                <li>
                    <button type="button"><i class="si si-settings"></i></button>
                </li>
            </ul>
        </div>-->
        <div class="block-content">        
            <table class="table table-hover table-bordered dataTable">
            <colgroup>
                <col width=""/>
                <col width="250"/>
                <col width="150"/>
                <col width="100"/>
            </colgroup>
            <thead>
                <tr>
                    {!! sort_th_with_route($list_route, 'Country', 'country') !!}
                    {!! sort_th_with_route($list_route, 'Region', 'region') !!}
                    {!! sort_th_with_route($list_route, 'Tax', 'tax') !!}
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($rows as $r)
                <tr>
                    <td>{{ $r->country->name }}</td>
                    <td>{{ $r->region->name }}</td>
                    <td class="text-right">{{ $r->tax }}</td>
                    <td class="text-center">
                        <div class="">
                            <a class="btn btn-sm btn-default" href='{{ URL::route("admin.sales.taxzone.edit", $r->id) }}'><i class="fa fa-pencil"></i></a>
                            
                            @if($current_user->has_permission('sales.setting.manage'))
                            <button data-original-title="Remove" class="btn btn-sm btn-warning btn-delete" type="button" data-href='{{ URL::route("admin.sales.taxzone.delete", $r->id) }}'><i class="fa fa-times"></i></button>
                            @endif
                        </div>
                    </td>
                </tr>
                @endforeach
                
                @if($rows->isEmpty())
                <tr>
                    <td colspan="20">There is result.</td>
                </tr>
                @endif
            </tbody>
            </table>
        </div>
    </div>
    <!-- END My Block -->
    
</div>

@stop

@section('additional')
@stop

@section('styles')
<link href="{{ asset('vendor/datatables/jquery.dataTables.min.css') }}" rel="stylesheet">
@stop

@section('scripts')
@stop