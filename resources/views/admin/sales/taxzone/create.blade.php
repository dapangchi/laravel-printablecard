@extends('admin.layouts.default')

@section('content')

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">Taxzone - Create</h1>
        </div>
    </div>  
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- My Block -->
    <div class="block">
        <div class="block-content">
        
            {!! Form::open(array('url' => URL::route("admin.sales.taxzone.store"), 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'aform')) !!}
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="country">Country</label>
                    <div class="col-sm-9">
                        {!! Form::select('country', $countries, null, array('class' => 'form-control autowidth', 'id' => 'country', 'required')) !!}
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="region">Region</label>
                    <div class="col-sm-9">
                        {!! Form::select('region', array(), null, array('class' => 'form-control autowidth', 'id' => 'region', 'required')) !!}
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="tax">Tax Rate<span class="red">*</span></label>
                    <div class="col-sm-8">
                        {!! Form::text('tax', 1, array('class' => 'form-control', 'id' => 'tax', 'placeholder' => '', 'required')) !!}
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-7 col-xs-offset-3">
                        <a href="{{ my_route($list_route) }}" class="btn btn-default">Back</a>
                        <button id="btn-save" type="submit" class="btn btn-primary" name="btn-save">Save</button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop

@section('scripts')
<script>
$('#country').trigger('change');
</script>
<script src="{{ asset('admins/js/pages/sales_taxzone.js') }}"></script>
@stop