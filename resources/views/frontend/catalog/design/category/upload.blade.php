@extends('frontend.layouts.default')

@section('content')

<?php //print_r($errors->all()); ?>
<div class="page logo-card-pages">
    {!! Form::open(array('url' => URL::route('cart.item.add.design'), 'id' => 'order-design-form', 'method' => 'post')) !!}
        <div id="choose-logo-section" class="container section choose-logo-section">
            <div class="row">
                <div class="col-md-12 section-title">
                    <h1>PICK YOUR LOGO STYLE</h1>
                    <h4>Please choose 3 logo styles you like</h4>
                </div>
                
                <div class="logo-samples-wrap">
                @foreach($logos as $row)
                    <div class="logo-sample-item">
                        {!! Form::checkbox('logosamples[]', $row->id, false, array('id' => 'logo-sample'.$row->id, 'class' => 'logosample-checkbox')) !!}
                        <label for="logo-sample{{ $row->id }}">
                            <img src="{{ resize_image( $row->image, 510, 510, 'crop' ) }}" alt="{{ $row->name }}">
                        </label>
                    </div>
                @endforeach
                </div>
                
                <div class="form-footer-section">
                    <div class="skip-link-block">Please choose 3 logo styles you like or <span class="skip-link">Skip this step</span></div>
                    <div class="next-step-but lg-but">NEXT STEP</div>
                </div>
            </div>
        </div>
        
        <div id="logo-brief-section" class="container section logo-brief-section">
            <div class="row">
                <div class="col-md-12 section-title">
                    <h1>LOGO DESIGN BRIEF</h1>
                    <h4>Tell us about your project detail</h4>
                </div>
            </div>
            <div class="row">
                <div class="items-brief-wrap">
                    <div class="items-brief-row">
                        <div class="left-column"><label for="logo-brief-email">Your primary contact email</label></div>
                        <div class="right-column">{!! Form::email('logo-brief-email', null, array('id' => 'logo-brief-email', 'required')) !!}</div>
                    </div>
                    <div class="items-brief-row">
                        <div class="left-column"><label for="logo-brief-business-name">Name of your business</label></div>
                        <div class="right-column">{!! Form::text('logo-brief-business-name', null, array('id' => 'logo-brief-business-name', 'required')) !!}</div>
                    </div>
                    <div class="items-brief-row">
                        <div class="left-column"><label for="logo-brief-business-industry">The industry of your business</label></div>
                        <div class="right-column">
                            {!! Form::text('logo-brief-business-industry', null, array('id' => 'logo-brief-business-industry', 'required')) !!}
                            <div class="input-hint">Example: Accounting, Realtor etc</div>
                        </div>
                    </div>
                    <div class="items-brief-row">
                        <div class="left-column"><label for="business-describe-area">Describe your business and your target audience</label></div>
                        <div class="right-column">
                            {!! Form::textarea('logo-brief-business-audience', null, array('id' => 'logo-brief-business-audience', 'required')) !!}
                            <div class="input-hint">This can be your primary business, who are your target audiences, or example of similar business</div>
                        </div>
                    </div>
                    <div class="items-brief-row">
                        <div class="left-column">
                            <label for="logo-brief-upload-example">Any example of logo design that you like, sketch or your current logo.</label>
                        </div>
                        <div class="right-column">
                            <div id="uploadTriger" class="uploadimg-triger-wrap border-upload-blue col-upload-blue"><img src="{{ asset('frontend/img/upload-img.svg') }}" alt="img-icon">UPLOAD FILES</div>
                        </div>
                    </div>
                    <div class="items-brief-row">
                        <div class="left-column"><label for="terms-agree-checkbox">Terms and Condition</label></div>
                        <div class="right-column">
                            <div class="checkbox check-success">
                                {!! Form::checkbox('terms-agree-checkbox', null, false, array('id' => 'terms-agree-checkbox', 'required')) !!}
                                <label for="terms-agree-checkbox" class="fz-13">I agree with Rockdesign&rsquo;s</label><span class="fz-13"> <a href="{{ route('page.terms.html') }}" target="_blank">terms and condition</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="items-brief-row">
                        <div class="right-column">
                            <div class="error-bottom-message">Please input the missing field</div>
                            <div id="check-logo-brief-section" class="next-step-but lg-but">NEXT STEP</div>
                            <span class="back-link" style="color:#0089bc; cursor:pointer; line-height:65px; margin-left:17px;">Back</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="card-brief-section" class="container section card-brief-section">
            <div class="row">
                <div class="col-md-12 section-title">
                    <h1>BUSINESS CARD DESIGN BRIEFF</h1>
                    <h4>Tell us about your project detail</h4>
                </div>
            </div>
            <div class="row">
                <div class="items-brief-wrap">
                    <div class="items-brief-row">
                        <div class="left-column"><label for="card-brief-email">Your primary contact email</label></div>
                        <div class="right-column">{!! Form::email('card-brief-email', null, array('id' => 'card-brief-email', 'required')) !!}</div>
                    </div>
                    <div class="items-brief-row">
                        <div class="left-column"><label for="photo-card-upload-example">
                            If you have a company logo, please upload your logo in vector format.
                            For photos, please upload high resolution images
                        </label></div>
                        <div class="right-column">
                            <div id="uploadTriger2" class="uploadimg-triger-wrap border-upload-blue col-upload-blue" data-target="1"><img src="{{ asset('frontend/img/upload-img.svg') }}" alt="img-icon">UPLOAD FILES</div>
                        </div>
                    </div>
                    <div class="items-brief-row">
                        <div class="left-column"><label for="card-brief-business-name">Name of your business</label></div>
                        <div class="right-column">{!! Form::text('card-brief-business-name', null, array('id' => 'card-brief-business-name', 'required')) !!}</div>
                    </div>
                    <div class="items-brief-row">
                        <div class="left-column"><label for="card-brief-info-area">Information on the card</label></div>
                        <div class="right-column">
                            {!! Form::textarea('card-brief-info-area', null, array('id' => 'card-brief-info-area', 'required')) !!}
                            <div class="input-hint">Name, title, contact information, address, website etc you want to have on the card.</div>
                        </div>
                    </div>
                    <div class="items-brief-row">
                        <div class="left-column"><label for="card-brief-card-type">Business card type</label></div>
                        <div class="right-column">{!! Form::select('card-brief-card-type', $cards, null, array('required')) !!}</div>
                    </div>
                    <div class="items-brief-row">
                        <div class="left-column"><label for="card-brief-upload-example">Business card examples you like</label></div>
                        <div class="right-column">
                            <div id="uploadTriger3" class="uploadimg-triger-wrap border-upload-blue col-upload-blue" data-target="2"><img src="{{ asset('frontend/img/upload-img.svg') }}" alt="img-icon">UPLOAD FILES</div>
                        </div>
                    </div>
                    <div class="items-brief-row">
                        <div class="left-column"><label for="terms-agree-checkbox2">Terms and Condition</label></div>
                        <div class="right-column">
                            <div class="checkbox check-success">
                                {!! Form::checkbox('terms-agree-checkbox2', null, false, array('id' => 'terms-agree-checkbox2', 'required')) !!}
                                <label for="terms-agree-checkbox2" class="fz-13">I agree with Rockdesign&rsquo;s</label><span class="fz-13"><a href="{{ route('page.terms.html') }}" target="_blank"> terms and condition</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="items-brief-row">
                        <div class="right-column">
                            <div class="error-bottom-message">Please input the missing field</div>
                            <div id="check-card-brief-section" class="next-step-but lg-but">NEXT STEP</div>
                            <span class="back-link" style="color:#0089bc; cursor:pointer; line-height:65px; margin-left:17px;">Back</span>
                            <button type="submit" id="btn-submit-form" style="display:none;">submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
</div>
@stop

@section('additional')
@include('frontend.catalog.uploadModal')
@stop

@section('styles')
<link href="{{ asset('vendor/dropzone/dropzone.min.css') }}" rel="stylesheet" />
@stop

@section('scripts')
<script src="{{ asset('vendor/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('vendor/dropzone/dropzone.min.js') }}"></script>

<script src="{{ asset('frontend/js/upload_modal.js') }}"></script>
<script src="{{ asset('frontend/js/pages/design_upload.js') }}"></script>
@stop