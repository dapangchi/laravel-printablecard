<?php
    $return_url = urlencode(current_url());
?>

@extends('admin.layouts.default')

@section('content')

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">Slideshows</h1>
        </div>
        
        <div class="col-sm-5 text-right">
            <a class="btn btn-primary" href='{{ URL::route("admin.cms.slide.create") }}'>Add</a>    
        </div>
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
                    <col width=""/>
                    <col width="200"/>
                    <col width="100"/>
                </colgroup>
                <thead>
                    <tr>
                        <th class="text-right">No</th>
                        {!! sort_th_with_route($list_route, 'Title', 'title', 'left') !!}  
                        {!! sort_th_with_route($list_route, 'Created', 'created_at', 'center') !!}                          
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $base_index = ($rows->currentPage() - 1) * $rows->count();
                    $i = 0;
                    ?>
                    <?php foreach($rows as $r) { $i++; ?>
                    <tr>
                        <td class="text-right">{{ $base_index + $i }}</td>
                        <td>{{ $r->title }}</td>
                        <td class="text-center">{{ date('Y-m-d H:i', strtotime($r->created_at)) }}</td>
                        <td class="text-center">
                            <div class="">
                                <a class="btn btn-sm  btn-default btn_edit" href='{{ URL::route("admin.cms.slide.edit", $r->id) }}'><i class="fa fa-pencil"></i></a>
                                <button class="btn btn-sm btn-warning btn-delete" type="button" data-href='{{ URL::route("admin.cms.slide.delete", $r->id) }}'><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                    
                    @if($rows->isEmpty())
                    <tr>
                        <td colspan="20">There is no slideshow.</td>
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