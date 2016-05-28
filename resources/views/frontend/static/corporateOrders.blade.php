@extends('frontend.layouts.default')

@section('content')

<div class="container section">
    <div class="row">
        <div class="col-md-12">
            <h1>Corporate Orders</h1>
        </div>
        <div class="col-md-12">
            <div class="corporate-orders-inner">
                <div class="corp-block-left">
                    <div class="corporate-orders-hint">
                        For corporate enterprise for custom quotation, please use fillout the following form or email us to <a href="mailto:sales@rockdesign.com">sales@rockdesign.com</a> and our sales representative will help you within 1 business day.
                    </div>
                    
                    {!! Form::open(array('url' => route('page.corporate.orders.post'), 'id' => 'corporate-orders-form', 'method' => 'post')) !!}
                        <label for="corporate-orders-name">Your Full Name*</label>
                        {!! Form::text('corporate-orders-name', null, array('id' => 'corporate-orders-name', 'required', 'aria-required' => 'true', 'aria-invalid' => 'true')) !!}
                                                                                                                                                                                  
                        <label for="corporate-orders-email">Your Email*</label>
                        {!! Form::email('corporate-orders-email', null, array('id' => 'corporate-orders-email', 'required', 'aria-required' => 'true', 'aria-invalid' => 'true')) !!}
                        
                        <label for="corporate-orders-phone-number">Your Phone Number*</label>
                        {!! Form::text('corporate-orders-phone-number', null, array('id' => 'corporate-orders-phone-number', 'required', 'aria-required' => 'true', 'aria-invalid' => 'true')) !!}
                        
                        <label for="corporate-orders-company-name">Company Name</label>
                        {!! Form::text('corporate-orders-company-name', null, array('id' => 'corporate-orders-company-name', 'required', 'aria-required' => 'true', 'aria-invalid' => 'true')) !!}
                        
                        <label for="corporate-orders-sets-numb">Number of sets/employees*</label>
                        {!! Form::text('corporate-orders-sets-numb', null, array('id' => 'corporate-orders-sets-numb', 'required', 'aria-required' => 'true', 'aria-invalid' => 'true')) !!}
                        
                        <label for="corporate-orders-cards-sets">How many cards per set*</label>
                        {!! Form::text('corporate-orders-cards-sets', null, array('id' => 'corporate-orders-cards-sets', 'required', 'aria-required' => 'true', 'aria-invalid' => 'true')) !!}
                        
                        <label for="corporate-orders-product-interest">Product/Features are interested in*</label>
                        {!! Form::textarea('corporate-orders-product-interest', null, array('id' => 'corporate-orders-product-interest', 'required', 'aria-required' => 'true', 'aria-invalid' => 'true')) !!}
                        
                        <div class="error-bottom-message">Please input the missing field</div>
                        <div class="success-bottom-message">Thank you for message!</div>
                        <button type="submit" class="get-quatotion-but">GET FREE QUOTATION</button>
                    {!! Form::close() !!}
                    
                </div>
                <div class="corp-block-right">
                    <img src="{{ asset('frontend/img/product-detail5.jpg') }}" alt="img">
                </div>
            </div>
        </div>
    </div>
</div>
    
@stop

@section('styles')
@stop

@section('scripts')
<script src="{{ asset('vendor/jquery-validation/jquery.validate.min.js') }}"></script>
<script>
$(document).ready(function() {
    $("#corporate-orders-form").validate({
        errorPlacement: function() {},
        errorClass: "error-field",
        highlight: function(element, errorClass, validClass) {
            $(element.form).find("label[for=" + element.id + "]").addClass("error-label");
            $(element).addClass(errorClass).removeClass(validClass);
            $('#corporate-orders-form .error-bottom-message').css('display', 'block');
            $('#corporate-orders-form .success-bottom-message').css('display', 'none');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element.form).find("label[for=" + element.id + "]").removeClass("error-label");
            $(element).removeClass(errorClass);
            $('#corporate-orders-form .error-bottom-message').css('display', 'none');
        },
    });
});
</script>
@stop