@extends('admin.layouts.default')

@section('content')

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">Permission - Create</h1>
        </div>
    </div>  
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <!-- My Block -->
    <div class="block">
        <div class="block-content">
            {!! Form::open(array('url' => URL::route('admin.permission.store', array('id' => $row->id)), 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'aform', 'autocomplete' => 'off')) !!}

                <div class="form-group {{ $errors->has('permission-code') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="permission-code">Code<span class="red">*</span></label>
                    <div class="col-sm-7">
                        {!! Form::text('permission-code', $row->code, array('class' => 'form-control', 
                            'id' => 'permission-code', 'placeholder' => '', 'required', 'readonly')) !!}
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('permission-name') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="permission-name">Name<span class="red">*</span></label>
                    <div class="col-sm-7">
                        {!! Form::text('permission-name', $row->name, array('class' => 'form-control', 
                            'id' => 'permission-name', 'placeholder' => '', 'required')) !!}
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('permission-description') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="permission-name">Description</label>
                    <div class="col-sm-7">
                        {!! Form::textarea('permission-description', $row->description, array('class' => 'form-control', 
                            'id' => 'permission-description', 'placeholder' => '')) !!}
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

@section('styles')
@stop

@section('scripts')
@stop