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
        <div class="block-content block-content-narrow">
            {!! Form::open(array('url' => URL::route("admin.setting.website.store"), 'method' => 'post', 'class' => 'form-horizontal')) !!}
                <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="site_title">Site Title</label>
                    <div class="col-sm-9">
                        {!! Form::text('title', $settings['site.title'], array('class' => 'form-control', 
                            'id' => 'site_title', 'placeholder' => '', 'required')) !!}
                        <div class="help-block">{{ $errors->first('title', ':message') }}</div>
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="site_name">Site Name</label>
                    <div class="col-sm-9">
                        {!! Form::text('title', $settings['site.name'], array('class' => 'form-control', 
                            'id' => 'site_name', 'placeholder' => '', 'required')) !!}
                        <div class="help-block">{{ $errors->first('name', ':message') }}</div>
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="site_title">Site Description</label>
                    <div class="col-sm-9">
                        {!! Form::textarea('description', $settings['site.description'], array('class' => 'form-control', 
                            'id' => 'site_description', 'placeholder' => '', 'required', 'rows' => 5)) !!}
                        <div class="help-block">{{ $errors->first('description', ':message') }}</div>
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('keywords') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="site_title">Site Keywords</label>
                    <div class="col-sm-9">
                        {!! Form::textarea('keywords', $settings['site.keywords'], array('class' => 'form-control', 
                            'id' => 'site_keywords', 'placeholder' => '', 'required', 'rows' => 5)) !!}
                        <div class="help-block">{{ $errors->first('keywords', ':message') }}</div>
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('author') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="site_author">Site Author</label>
                    <div class="col-sm-9">
                        {!! Form::text('author', $settings['site.author'], array('class' => 'form-control', 
                            'id' => 'site_author', 'placeholder' => '', 'required')) !!}
                        <div class="help-block">{{ $errors->first('author', ':message') }}</div>
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