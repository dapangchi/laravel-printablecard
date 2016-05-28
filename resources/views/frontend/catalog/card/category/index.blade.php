@extends('frontend.layouts.default')

@if($service->meta_description != '')
@section('meta_description')
<meta name="description" content="{!! $service->meta_description !!}"/>
@stop
@endif

@if($service->meta_tag != '')
@section('meta_keywords')
<meta name="keywords" content="{!! $service->meta_tag !!}"/>
@stop
@endif

@section('content')

<?php
    $image = 'frontend/img/category/all-business-card.jpg';
    if(isset($service->slide->id) && $service->slide->mainImage() != '') $image = $service->slide->mainImage(); 
?>
<div class="top-img-wrap" style="background: url({{ resize_image($image) }})"></div>
<div class="container section all-buss-page">
    <div class="row">
        
        <div class="col-md-12 section-title">
            <h1>{{ $page_title }}</h1>
            <h4>{{ $sub_title }}</h4>
        </div>
        
        <div class="col-md-12 all-card-wrap">
            @foreach($categories as $c)    
                @if(!$c->cards->isEmpty())
                <div class="card-item-section">
                    <h2>{{ strtoupper($c->name) }}</h2>
                    
                    @foreach($c->cards as $p)    
                    <div class="card-item-wrap">
                        <a href="{{ $p->getUrl() }}" class="pull-left">
                            <img src="{{ resize_image( $p->image(), 600, 400, 'crop' ) }}" alt="{{ $p->name }}">
                        </a>
                        <div class="card-item-info-wrap">
                            <h3><a href="{{ $p->getUrl() }}">{{ $p->name }}</a></h3>
                            <div class="card-info">
                                <p>{{ $p->description }}</p>
                            </div>
                            <div class="card-options">
                                <!--<div>
                                    <span>Thickness</span>
                                    <a href="#">30pt</a>
                                    <a href="#">45pt</a>
                                    <a href="#">60pt</a>
                                </div>-->
                                <div>
                                    <span>FEATURES</span>
                                    @foreach($p->features as $ft)
                                    <a>{{ $ft->name }}</a>
                                    @endforeach
                                </div>
                            </div> 
                            <div class="clear"></div>   
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            @endforeach
        </div>
        
        <div class="col-md-12 with-pad section-foot">
            <div class="button-wrap">
                <a href="#">
                    <span class="lg-but more-set-but">NEED 10+ MORE SETS ? GET A QUOTE</span>
                </a>
            </div>
            <h2>FREE BUSINESS CARD TEMPLATES</h2>
            <div class="button-wrap">
                <a href="{{ URL::route('template.product.business') }}">
                    <span class="lg-but view-cart-but">VIEW BUSINESS CARD TEMPLATES</span>
                </a>
            </div>
            <h4>FREE FOR ROCKDESIGN PRINT CUSTOMERS</h4>
        </div>
         
    </div>
</div>

<!--Start Business Card Template-->
@if(!$business_card_templates->isEmpty())
@include('frontend.home.business_card_template')
@endif
<!--End Business Card Template-->

<!--Start Invitation Card-->
<!--@if(!$invitation_card_categories->isEmpty())
@include('frontend.home.invitation_card')
@endif-->
<!--End Invitation Card-->

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

@section('styles')
@stop

@section('scripts')
<script>
topImgWrap();

$(window).resize(function() {
    topImgWrap();
});
</script>

<script src="{{ asset('vendor/masterslider/jquery.easing.min.js') }}"></script>

@if(!$business_card_templates->isEmpty())
<script>
$(document).ready(function(e) {
    var w = $(window).width();
    if (w > 2000) {
        var mySwiper = new Swiper('.carousel-container', {
            direction: 'horizontal',
            loop: true,
            slidesPerView: 5,
            autoplay: 3000,
        });
    } else if (w > 1200) {
        var mySwiper = new Swiper('.carousel-container', {
            direction: 'horizontal',
            loop: true,
            slidesPerView: 4,
            autoplay: 3000,
        });
    } else if (w > 480) {
        var mySwiper = new Swiper('.carousel-container', {
            direction: 'horizontal',
            loop: true,
            slidesPerView: 3,
            autoplay: 3000,
        });
    } else {
        var mySwiper = new Swiper('.carousel-container', {
            direction: 'horizontal',
            loop: true,
            slidesPerView: 2,
            autoplay: 3000,
        });
    }
});   
</script>
@endif

@stop