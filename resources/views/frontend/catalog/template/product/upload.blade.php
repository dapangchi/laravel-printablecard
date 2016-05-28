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
            
            <!--Start Option Box-->
            <div class="det-ord-bl">
                <div class="det-ord-titl">
                    <h3>{{ $product->card->name }}</h3>
                    <div class="card-numb">Upload your files and information, click here for video tutorial on how to upload</div>
                </div>
                <div class="template-upload-bl-content">
                    {!! Form::open(array('url' => URL::route('cart.item.add.template'), 'id' => 'product-form', 'method' => 'post', 'files' => true)) !!}
                        <div class="templ-upload-row">
                            <div class="left-column">
                                Upload Print File
                                <div class="upload-hint">
                                    <p>Vector files for logos and icons, such as: ai, eps, pdf, svg 
                                    Image file for photos, such as jpg, psd
                                    Spread sheet file for names,  such as csv, xlt </p>
                                </div>
                            </div>
                            <div class="rigth-column">
                                <div id="uploadTriger" class="uploadimg-triger-wrap border-upload-blue col-upload-blue">
                                    <img src="{{ asset('frontend/img/upload-img.svg') }}" alt="img-icon">UPLOAD PRINT FILE
                                </div>
                            </div>
                        </div>
                        <div class="templ-upload-row">
                            <div class="left-column">2. Front Side Content</div>
                            <div class="rigth-column">
                                <textarea name="frontside-content" placeholder="Such as company name, slogan, website" required></textarea>
                                <div class="upload-hint">
                                    Please enter all the information you want to appear on the front side of the card.
                                </div>
                            </div>
                        </div>
                        <div class="templ-upload-row">
                            <div class="left-column">3. Back Side Content</div>
                            <div class="rigth-column">
                                <textarea name="backside-content" placeholder="Such as contact information, name, title, address" required></textarea>
                                <div class="upload-hint">
                                    Please enter all the information you want to appear on the back side of the card.
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
                <h4>How to prepare your file and upload</h4>
                <div>
                    <p>Please upload your files according to our print format. For logo, we require vector graphics such as ai, eps, pdf, svg. For photo, we will require high resolution images (300 dpi) jpg file. For names and information for multiple sets, you can upload a spreadsheet file. For more information, please wash the <a href="#">video tutorial here</a></p>
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