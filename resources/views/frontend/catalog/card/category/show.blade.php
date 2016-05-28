@extends('frontend.layouts.default')

@if($category->meta_description != '')
@section('meta_description')
<meta name="description" content="{!! $category->meta_description !!}"/>
@stop
@endif

@if($category->meta_tag != '')
@section('meta_keywords')
<meta name="keywords" content="{!! $category->meta_tag !!}"/>
@stop
@endif

@section('content')

<div class="top-img-wrap" style="background: url({{ resize_image($category->image) }})"></div>
<div class="container section sect1">
    <div class="row">
        
        <div class="col-md-12 section-title">
            <h1>{{ $page_title }}</h1>
            <h4>{{ $category->text }}</h4>
        </div>
        
        @foreach($category->cards as $p) 
        <div class="col-md-4 col-sm-6 col-xs-12">
            <a href="{{ $p->getUrl() }}">
                <img src="{{ resize_image( $p->image(), 600, 400, 'crop' ) }}" alt="{{ $p->name }}">
            </a>
            
            <h3 class="card-name"><a href="{{ $p->getUrl() }}">{{ $p->name }}</a></h3>
        </div>
        @endforeach
        
        <div class="col-md-12 col-sm-12 col-xs-12    with-pad section-foot">
            <div class="button-wrap">
                <a href="#">
                    <span class="lg-but more-set-but">NEED 10+ MORE SETS ? GET A QUOTE</span>
                </a>
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
var w = $(window).width();
if (w > 660) {
    var mySwiper2 = new Swiper('.card-tepl-slider', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 3,
        paginationClickable: true,
        slidesPerGroup: 3,
        autoplay: 3000,
        spaceBetween: 20,
        pagination: '.swiper-pagination',
    });
} else {
    var mySwiper2 = new Swiper('.card-tepl-slider', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 1,
        paginationClickable: true,
        slidesPerGroup: 1,
        autoplay: 3000,
        spaceBetween: 20,
        pagination: '.swiper-pagination',
    });
}
</script>
@endif

@stop
