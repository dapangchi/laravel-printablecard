@extends('admin.layouts.default')

@section('content')

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">{{ $page_title }}</h1>
        </div>
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
        
        <div class="block-content block-content-narrow">
            {!! Form::open(array('url' => URL::route("admin.setting.email.store"), 'method' => 'post', 'class' => 'form-horizontal')) !!}
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="email">From Email</label>
                    <div class="col-sm-9">
                        {!! Form::email('email', $settings['email.sender_email'], array('class' => 'form-control', 
                            'id' => 'email', 'placeholder' => '', 'required')) !!}
                        <div class="help-block">{{ $errors->first('email', ':message') }}</div>
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="name">From Name</label>
                    <div class="col-sm-9">
                        {!! Form::text('name', $settings['email.sender_name'], array('class' => 'form-control', 
                            'id' => 'name', 'placeholder' => '', 'required')) !!}
                        <div class="help-block">{{ $errors->first('name', ':message') }}</div>
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('host') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="host">Host</label>
                    <div class="col-sm-9">
                        {!! Form::text('host', $settings['email.host'], array('class' => 'form-control', 
                            'id' => 'host', 'placeholder' => '', 'required')) !!}
                        <div class="help-block">{{ $errors->first('host', ':message') }}</div>
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="username">Username</label>
                    <div class="col-sm-9">
                        {!! Form::text('username', $settings['email.username'], array('class' => 'form-control', 
                            'id' => 'username', 'placeholder' => '', 'required')) !!}
                        <div class="help-block">{{ $errors->first('username', ':message') }}</div>
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="password">Password</label>
                    <div class="col-sm-9">
                        {!! Form::text('password', $settings['email.password'], array('class' => 'form-control', 
                            'id' => 'password', 'placeholder' => '', 'required')) !!}
                        <div class="help-block">{{ $errors->first('password', ':message') }}</div>
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('port') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="port">Port</label>
                    <div class="col-sm-3">
                        {!! Form::number('port', $settings['email.port'], array('class' => 'form-control', 
                            'id' => 'port', 'placeholder' => '', 'required')) !!}
                        <div class="help-block">{{ $errors->first('port', ':message') }}</div>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-xs-9 col-xs-offset-3">
                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
    <!-- END My Block -->
</div>

@stop
