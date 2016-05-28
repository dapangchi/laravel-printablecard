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
            {!! Form::open(array('url' => URL::route("admin.setting.sales.store"), 'method' => 'post', 'class' => 'form-horizontal')) !!}
                <div class="form-group {{ $errors->has('paypal_email') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="paypal_email">Paypal Email</label>
                    <div class="col-sm-9">
                        {!! Form::email('paypal_email', $settings['sales.paypal_email'], array('class' => 'form-control', 
                            'id' => 'paypal_email', 'placeholder' => '', 'required')) !!}
                        <div class="help-block">{{ $errors->first('paypal_email', ':message') }}</div>
                    </div>
                </div>
                <hr/>
                
                <div class="form-group {{ $errors->has('fedex_account') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="fedex_account">Fedex Account</label>
                    <div class="col-sm-9">
                        {!! Form::text('fedex_account', $settings['sales.fedex_account'], array('class' => 'form-control', 
                            'id' => 'fedex_account', 'placeholder' => '', 'required')) !!}
                        <div class="help-block">{{ $errors->first('fedex_account', ':message') }}</div>
                    </div>
                </div>                
               
                <hr/>
                
                <div class="form-group {{ $errors->has('currency_rate') ? 'has-error' : '' }}">
                    <label class="col-sm-3 control-label" for="currency_rate">1 USD = CAD</label>
                    <div class="col-sm-3">
                        {!! Form::text('currency_rate', $settings['sales.currency_rate'], array('class' => 'form-control', 
                            'id' => 'currency_rate', 'placeholder' => '', 'required')) !!}
                        <div class="help-block">{{ $errors->first('currency_rate', ':message') }}</div>
                        <small>Price will automatically rounded off</small>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
    <!-- END My Block -->
</div>

@stop
