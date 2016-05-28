@extends('frontend.layouts.default')

@section('content')

<!--Start Slider-->
@if(!$homesliders->isEmpty())
@include('frontend.home.slider')
@endif
<!--End Slider-->

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

@if(!$homesliders->isEmpty())
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
@endif

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
