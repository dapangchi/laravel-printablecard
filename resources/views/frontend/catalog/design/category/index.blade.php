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
<div class="design-service-wrap">
    <div class="container section">
        <div class="row">
            <div class="col-md-12 section-title">
                <h1>{{ $page_title }}</h1>
                <h4>LET OUR CREATIVE DESIGNERS BUILD YOUR BRAND</h4>
            </div>
            
            <!--start list-->
            <div class="col-md-12 design-service-list">
                @foreach($rows as $r)
                <!--start item-->
                <div class="design-item-section">
                    <div class="design-item-head">
                        <div class="dh-left-block">
                            <h2>{{ $r->name }}</h2>
                        </div>
                        <div class="dh-right-block">
                            <div class="button-wrap">
                                <a href="{{ URL::route('design.category.show', $r->slug) }}">
                                    <div class="lg-but view-puck-but">ORDER DESIGN SERVICES</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="design-item-cont">
                        <a href="{{ URL::route('design.category.show', $r->slug) }}">
                            <img src="{{ asset($r->image) }}" alt="design-service-img">
                            <div class="design-img-overflow">
                                <span>{{ $r->text }}</span>
                            </div>
                        </a>
                    </div>
                </div>
                <!--end item-->
                @endforeach
                
                <div class="design-service-foot">If you interested in our multiple design services combination, please contact <a href="mailto:design@rockdesign.com">design@rockdesign.com</a> for future information</div>
            </div>
            <!--end list-->
        </div>
    </div>
</div>

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
