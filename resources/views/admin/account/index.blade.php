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
    <div class="block col-sm-8 col-sm-offset-2">
        <!--<div class="block-header">
            <h3 class="block-title">Website Setting</h3>
            
            <ul class="block-options">
                <li>
                    <button type="button"><i class="si si-settings"></i></button>
                </li>
            </ul>
        </div>-->
        
        <div class="block-content block-content-narrow">
            {!! Form::open(array('url' => URL::to('admin/account/postIndex'), 'method' => 'post', 'class' => 'form-horizontal')) !!}            
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="email">Email</label>
                    <div class="col-sm-9">
                        {!! Form::email('email', $current_user->email, array('class' => 'form-control', 
                            'placeholder' => 'Email', 'required', 'autofocus')) !!}
                        <span class="help-block">{{ $errors->first('email', ':message') }}</span>
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="email">First Name</label>
                    <div class="col-sm-9">
                        {!! Form::text('first_name', $current_user->first_name, array('class' => 'form-control', 
                            'placeholder' => 'First Name', 'required')) !!}
                        <span class="help-block">{{ $errors->first('first_name', ':message') }}</span>
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="email">Last Name</label>
                    <div class="col-sm-9">
                        {!! Form::text('last_name', $current_user->last_name, array('class' => 'form-control', 
                            'placeholder' => 'Last Name', 'required')) !!}
                        <span class="help-block">{{ $errors->first('last_name', ':message') }}</span>
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('current_password') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="email">Current Password</label>
                        <div class="col-sm-9">
                        {!! Form::password('current_password', array('class' => 'form-control', 
                            'placeholder' => 'Current Password')) !!}
                        <span class="help-block">{{ $errors->first('current_password', ':message') }}</span>                            </div>
                </div>
                
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="email">New Password</label>
                    <div class="col-sm-9">
                        {!! Form::password('password', array('class' => 'form-control', 
                            'placeholder' => 'New Password')) !!}
                        <span class="help-block">{{ $errors->first('password', ':message') }}</span>                   
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('password_confirm') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="email">Password Confirm</label>
                    <div class="col-sm-9">
                        {!! Form::password('password_confirm', array('class' => 'form-control', 
                            'placeholder' => '')) !!}
                        <span class="help-block">{{ $errors->first('password_confirm', ':message') }}</span>                           </div>        
                </div>
                
                <div class="form-group">
                    <div class="col-xs-9 col-xs-offset-3">
                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@stop
