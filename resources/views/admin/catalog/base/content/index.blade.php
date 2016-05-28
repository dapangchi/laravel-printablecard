@extends('admin.layouts.default')

@section('content')

<!-- Page Header -->
<div class="content bg-gray-lighter">
    <div class="row items-push">
        <div class="col-sm-7">
            <h1 class="page-heading">{{ $page_title }} - Content</h1>
        </div>
    </div>  
</div>
<!-- END Page Header -->

<!-- Page Content -->
<div class="content">
    <div class="block">
        <div class="block-content">
            {!! Form::open(array('url' => URL::route("$base_route.store"), 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'aform', 'autocomplete' => 'off')) !!}
                <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="title">Title<span class="red">*</span></label>
                    <div class="col-sm-9">
                        {!! Form::text('title', $row->title, array('class' => 'form-control', 
                            'id' => 'title', 'placeholder' => '', 'required')) !!}
                        <div class="help-block">{{ $errors->first('title', ':message') }}</div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="slide">Slide</label>
                    <div class="col-sm-9">
                        {!! Form::select('slide', $slides, $row->slide_id, array('class' => 'form-control', 
                            'slide', 'id' => 'slide', 'style' => 'width:auto;')) !!}
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('meta_tag') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="meta_tag">Meta Tag</label>
                    <div class="col-sm-9">
                        {!! Form::text('meta_tag', $row->meta_tag, array('class' => 'form-control', 
                            'id' => 'meta_tag', 'placeholder' => '')) !!}
                        <div class="help-block">{{ $errors->first('meta_tag', ':message') }}</div>
                    </div>
                </div>
                
                <div class="form-group {{ $errors->has('meta_description') ? 'has-error' : '' }}">
                    <label class="col-sm-2 control-label" for="meta_description">Meta Description</label>
                    <div class="col-sm-9">
                        {!! Form::textarea('meta_description', $row->meta_description, array('class' => 'form-control', 
                            'id' => 'meta_description', 'placeholder' => '')) !!}
                        <div class="help-block">{{ $errors->first('meta_description', ':message') }}</div>
                    </div>
                </div>
                
                @if($current_user->has_any_permission(array('product.card.manage', 'product.template.manage', 'product.design.manage')))
                <div class="form-group">
                    <div class="col-xs-9 col-xs-offset-2">
                        <button class="btn btn-primary" type="submit" id="btn-save">Save</button>
                    </div>
                </div>
                @endif
                
            {!! Form::close() !!}
        </div>
    </div>
</div>

@stop

@section('additional')
@stop

@section('styles')
@stop

@section('scripts')
@stop