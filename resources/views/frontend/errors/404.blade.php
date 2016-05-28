@extends('frontend.layouts.default')

@section('content')

<div class="ms-fullscreen-template" id="slider1-wrapper">
    <!-- masterslider -->
    <div class="master-slider ms-skin-default has-thumbnails" id="masterslider">
        <div class="ms-slide" data-delay="4">
            <img src="{{ asset('frontend/img/blank.gif') }}" height="1300" width="2560" data-src='{{ resize_image("frontend/img/404.jpg") }}'>
            <div class="slider-bottom ms-layer" data-effect="skewright(20|30,200|400)" data-duration="600" data-delay="0" data-ease="easeOutQuint" data-hide-effect="skewleft(20|30,200|400)" data-hide-duration="600" data-hide-ease="easeInQuart">
                <h2>LOOKING FOR AWESOME BUSINESS CARDS? CHECK OUT BELOW</h2>
            </div>
        </div>
        <!-- .ms-slide -->
    </div>
    <!-- end of masterslider -->
</div>

<!--Start Business Card-->
@if(!$business_card_categories->isEmpty())
@include('frontend.home.business_card')
@endif
<!--End Business Card-->

<!--Start Business Card Template-->
@if(!$business_card_templates->isEmpty())
@include('frontend.home.business_card_template')
@endif
<!--End Business Card Template-->

<!--Start Invitation Card-->
@if(!$invitation_card_categories->isEmpty())
@include('frontend.home.invitation_card')
@endif
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
<link href="{{ asset('vendor/masterslider/style/masterslider.css') }}" rel="stylesheet" />
@stop

@section('scripts')
<script src="{{ asset('vendor/masterslider/jquery.easing.min.js') }}"></script>
<script src="{{ asset('vendor/masterslider/masterslider.min.js') }}"></script>        

<script>
$(document).ready(function(e) {
    var front_slider = new MasterSlider();
    front_slider.control('bullets', {
        dir: 'h',
        autohide: false
    });
    front_slider.setup('masterslider', {
        width: 1400,
        height: 800,
        space: 0,
        view: 'basic',
        layout: 'fullscreen',
        fullscreenMargin: 200,
        speed: 30,
        autoplay: true,
        overPause: false,
        space: 1,
        loop: true,
    });
});
</script>

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
