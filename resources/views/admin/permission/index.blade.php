@extends('admin.layouts.default')

@section('content')

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">Permissions</h1>
        </div>
        
        <!--<div class="col-sm-5 text-right">
            <a class="btn btn-primary" href='{{ URL::route("admin.permission.create") }}'>Add</a>    
        </div>-->
    </div>  
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- My Block -->
    <div class="block">
        <div class="block-content">
            <div class="">
                <table class="table table-bordered table-striped table-hover dataTable" id="data-table">
                <colgroup>
                    <col width="50"/>
                    <col width="150"/>
                    <col width="200"/>
                    <col width=""/>
                    <col width="100"/>
                </colgroup>
                <thead>
                    <tr> 
                        <th class="text-right">No</th>
                        {!! sort_th_with_route($list_route, 'Code', 'code', 'left') !!}  
                        {!! sort_th_with_route($list_route, 'Name', 'name', 'left') !!}  
                        {!! sort_th_with_route($list_route, 'Description', 'description') !!}
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $base_index = ($rows->currentPage() - 1) * $rows->count(); ?>
                    <?php foreach($rows as $i => $r) { ?>
                    <tr>
                        <td class="text-right">{{ $base_index + $i + 1 }}</td>
                        <td>{{ $r->code }}</td>
                        <td>{{ $r->name }}</td>
                        <td>{{ $r->description }}</td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-default" href='{{ URL::route("admin.permission.edit", $r->id) }}'><i class="fa fa-pencil"></i></a>
                            <button data-original-title="Remove" class="btn btn-sm btn-warning btn-delete hidden" type="button" data-href='{{ URL::route("admin.permission.delete", $r->id) }}'><i class="fa fa-times"></i></button>
                        </td>
                    </tr>
                    <?php } ?>
                    
                    @if($rows->isEmpty())
                    <tr>
                        <td colspan="20">There is no permissions.</td>
                    </tr>
                    @endif
                </tbody>
                </table>  
            </div>
            
            <div class="row">
                <div class="col-sm-6">
                    @if($rows->total() > 0) 
                    <div class="dataTables_info" id="data-table_info" role="status" aria-live="polite">
                        Showing <b>{{ $base_index + 1 }} to {{ $rows->currentPage() * $rows->count() }}</b> of <b>{{ $rows->total() }}</b> entries    
                    </div>
                    @endif
                </div>
                <div class="col-sm-6">
                    <div class="dataTables_paginate paging_simple_numbers">
                        {!! paginate_links($rows); !!}
                    </div>    
                </div>
            </div>
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