@extends('frontend.layouts.default')

@section('content')

<div class="full-width-wrap">
    <div class="container section brrowing-sect card-des-brrowing-sect">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 section-title">
                <h1>{{ $sub_title }}</h1>
                <h4>SHOWCASE PROFESSIONAL PRINTING AT ROCKDESIGN</h4>
            </div>
            
            <div class="col-md-12 col-sm-12 col-xs-12 search-menu-wrap">
                @include('frontend.catalog.showcase.total_nav')
            </div>
            
            <div>
                @foreach($showcases as $r)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="img-wrap">
                        <a href="{{ $r->getUrl() }}">
                            <img src="{{ resize_image( $r->image(), 600, 400, 'crop' ) }}" title="{{ $r->name }}">
                            
                            <div class="teml-numb-wrap">
                                <span>{{ $r->name }}</span>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
                <div class="clear"></div>
            </div>
            
            <!--start template pagination-->
            <div class="col-md-12 pagination">
                {!! paginate_links_with_params($showcases) !!}
            </div>
            <!--end template pagination-->
            
        </div>
    </div>
</div>

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
<script src="{{ asset('frontend/js/pages/template_total.js') }}"></script>
@stop