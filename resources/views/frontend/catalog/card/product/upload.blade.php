@extends('frontend.layouts.default')

@section('content')

<div class="container section templ-detail-wrap">
    <div class="row">
        <div class="templ-detail">
            <!--Start Templ Gallery-->
            <div class="templ-det-gallery-wrap">
                <h1>Upload File / Information</h1>
                
                <div class="product-media-box">
                    @include('frontend.catalog.card.product.media', array('images' => $product->images))   
                </div>
            </div>
            <!--End Templ Gallery-->
            
            <div class="det-ord-bl">
                <div class="det-ord-titl">
                    <h3>Upload YOUR PRINT FILE</h3>
                    <div class="card-numb">Please upload your design file</div>
                </div>
                
                <div class="template-upload-bl-content">
                    {!! Form::open(array('url' => URL::route('cart.item.add.card'), 'id' => 'product-form', 'method' => 'post', 'files' => true)) !!}
                        <div class="templ-upload-row">
                            <div class="left-column">
                                Upload Print File
                                <div class="upload-hint">
                                    <p>Please prepare your print file according to our print format. We only accept ai or pdf file for printing. Click here to learn more about <a href="#">how to setup print file</a></p>
                                </div>
                            </div>
                            <div class="rigth-column">
                                <div id="uploadTriger" class="uploadimg-triger-wrap border-upload-blue col-upload-blue">
                                    <img src="{{ asset('frontend/img/upload-img.svg') }}" alt="img-icon">UPLOAD PRINT FILE
                                </div>        
                            </div>
                        </div>
                        <div class="templ-upload-row">
                            <div class="left-column">Get Design Services</div>
                            <div class="rigth-column">
                                <div class="upload-hint">
                                    Rockdesign also offer professional design services, if you like to have our designer design + prepare print file for you, please choose a design service in the following page after click on NEXT STEP below. You can learn more about our design services <a href="{{ URL::route('design.category.all') }}">HERE.</a>
                                </div>
                            </div>
                        </div>
                        <div class="templ-upload-row">
                            <div class="rigth-column">
                                <button type="submit" class="next-step-but lg-but">NEXT STEP</button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <!--End Option Box-->
            
            <div class="det-info-wrap">
                <h4>How to setup print file</h4>
                <div>
                    <p>We only accept print file in ai, eps, or pdf format. Make sure you outline all the texts since we may not have the necessary font for your design. If you use photo, please make sure it is embeded in the file. Lastly make sure the logo is in vector format. To learn more about how to setup your file for printing, please watch <a href="#">How to setup print file.</a></p>
                </div>
            </div>
            
        </div>
    </div>
</div>

<!--Start Business Card Template-->
@if(!$business_card_templates->isEmpty())
@include('frontend.catalog.card.category.business_card_template')
@endif
<!--End Business Card Template-->

<!--Start Design Service-->
@include('frontend.home.design_service')
<!--End Design Service-->

<!--Start Sample Pack-->
@include('frontend.home.sample_pack')
<!--End Sample Pack-->

<!--Start Subscribe-->
@include('frontend.home.subscribe')
<!--End Subscribe-->

@stop

@section('additional')
@include('frontend.catalog.uploadModal')
@stop

@section('styles')
<link href="{{ asset('vendor/photoswipe/photoswipe.css') }}" rel="stylesheet" />
<link href="{{ asset('vendor/photoswipe/default-skin/default-skin.css') }}" rel="stylesheet" />
<link href="{{ asset('vendor/dropzone/dropzone.min.css') }}" rel="stylesheet" />
@stop

@section('scripts')
<script src="{{ asset('vendor/photoswipe/photoswipe.min.js') }}"></script>
<script src="{{ asset('vendor/photoswipe/photoswipe-ui-default.min.js') }}"></script>
<script src="{{ asset('vendor/masterslider/jquery.easing.min.js') }}"></script>
<script src="{{ asset('vendor/dropzone/dropzone.min.js') }}"></script>

<script>hasCardTemplate = false;</script>
@if(!$business_card_templates->isEmpty())
<script>hasCardTemplate = true;</script>
@endif

<script src="{{ asset('frontend/js/upload_modal.js') }}"></script>
<script src="{{ asset('frontend/js/pages/product_common.js') }}"></script>
@stop