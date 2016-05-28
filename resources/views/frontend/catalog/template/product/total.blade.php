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

<div class="full-width-wrap">
    <div class="container section brrowing-sect">
        <div class="row">
            <div class="col-md-12 section-title">
                <h1>{{ $totalCount }} <span>FREE</span> {{ $page_title }}</h1>
                <h4>FREE PROFESSIONAL {{ $page_title }}</h4>
            </div>

            <!--start template nav-->
            <div class="col-md-12 search-menu-wrap">
                @include('frontend.catalog.template.product.total_nav')
            </div>
            <!--end template nav-->
            
            <!--start template list-->
            <div class="col-md-12 templ-list-wrap">
                <div class="text-right">
                    Sort By:
                    {!! Form::select('sorting', get_sorting_options(), $sorting, array('id' => 'sorting')) !!}
                </div>
                <div class="clear"></div>
                <br/>
                
                
                @foreach($templates as $r)
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="img-wrap">
                        <a href="{{ $r->getUrl() }}">
                            <img src="{{ resize_image( $r->image(), 600, 400, 'crop' ) }}" title="{{ $r->name }}">
                            
                            <div class="teml-numb-wrap">
                                <span>{{ $r->template_uid }}</span>
                            </div>
                        </a>
                    </div>
                    <div class="temp-info-wrap">
                        <div class="temp-list-item-title" title="{{ $r->name }}">{{ $r->name }}</div>
                    </div>
                </div>
                @endforeach
                
                @if($templates->count() == 0)
                <!--There is no result.-->
                @endif
                
            </div>
            <!--end template list-->
            
            <!--start template pagination-->
            <div class="col-md-12 pagination">
                {!! paginate_links_with_params($templates) !!}
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
<script>
ajaxUpdateSortingUrl = '{{ route("template.product.update.sorting") }}';
redirectUrl = '{{ current_url_for_template() }}';
</script>
<script src="{{ asset('frontend/js/pages/template_total.js') }}"></script>
@stop