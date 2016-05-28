@extends('frontend.layouts.customer')

@section('content')

<div class="container">
    <div class="row row-pad">
        <div class="col-md-12">
            <div class="page-title">
                <h1>{{ strtoupper($current_customer->full_name()) }}, WELCOME</h1>
                
                @include('frontend.customer.snippet.help')
            </div>
        </div>
    </div>
</div>

<div class="container bg-white md-p-tb-30 sm-p-tb-15">
    @include('frontend.customer.home.advert')
    
    <div class="row row-pad">
        @include('frontend.customer.home.tracking')
    </div>
</div>

@stop

@section('styles')
@stop

@section('scripts')
<script>
var mySwipeAdminCarousel = new Swiper('.admin-panel-carousel', {
    direction: 'horizontal',
    loop: true,
    autoplay: 3000
});
</script>
@stop