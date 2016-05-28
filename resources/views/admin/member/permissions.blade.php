@extends('admin.layouts.default')

@section('content')

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">Member Permissions</h1>
        </div>
    </div>  
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- My Block -->
    <div class="block">
        <div class="block-content">
            
             @if($permissions->count() > 0 && $stuffs->count() > 0)
                <table class="table table-bordered table-striped table-hover dataTable" id="data-table">
                    <thead>
                        <tr> 
                            <th>Name</th>    
                            
                            @foreach($permissions as $p)
                            <th>{{ $p->name }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stuffs as $s)
                        <tr>
                            <td>{{ $s->full_name() }}</td>
                            
                            @foreach($permissions as $p)
                            <td class="text-center" data-content='{{ $p->description }}' data-placement='top' data-toggle='popover'>
                                <label class="css-input css-checkbox css-checkbox-success">
                                    {!! Form::checkbox('permission[]', $p->id, $s->has_permission($p->code), 
                                        array('class' => 'permission-checkbox', 'data-stuff' => $s->id)) !!}
                                    <span></span>
                                </label>
                            </td>
                            @endforeach
                        </tr>
                        @endforeach 
                    </tbody>
                </table>
             @endif
             
             @if($permissions->count() == 0)
             <p>There is no permission.</p>
             @endif
             
             @if($stuffs->count() == 0)
             <p>There is no stuff.</p>
             @endif
        </div>
    </div>
    <!-- END My Block -->
</div>

@stop

@section('additional')
@stop

@section('styles')
<link href="{{ asset('vendor/datatables/jquery.dataTables.min.css') }}" rel="stylesheet">
<style>
.DTFC_RightBodyLiner {display:none;}
</style>
@stop

@section('scripts')

@if($permissions->count() > 0 && $stuffs->count() > 0)
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.fixedColumns.min.js') }}"></script>
    <script>  
    $('#data-table [data-toggle="popover"]').popover({
        container: 'body',
        animation: true,
        trigger: 'hover'
    });

    var table = $('#data-table').DataTable( {
        scrollY:        "500px",
        scrollX:        true,
        scrollCollapse: true,
        paging:         false,
        info:           false,
        ordering:       false,
        filter:         false,
        autoWidth:      false,
        fixedColumns:   {
            leftColumns: 1
        }
    } );

    $('#data-table .permission-checkbox').change(function() {
        stuffId = $(this).data('stuff');
        permissionId = $(this).val(); 
        assignValue = $(this).is(':checked');
        
        ajaxRequest(
            '{{ route("admin.member.permission.update") }}',
            {'stuff-id':stuffId, 'permission-id':permissionId, 'assign-value':assignValue},
            function(res) {
                if(res) alertify.success(res);
            }
        );    
    });
    </script>
@endif
    
@stop