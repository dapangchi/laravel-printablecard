<?php
use App\Models\Showcase;
?>

@extends('frontend.layouts.default')

@if($product->meta_description != '')
@section('meta_description')
<meta name="description" content="{!! $product->meta_description !!}"/>
@stop
@endif

@if($product->meta_tag != '')
@section('meta_keywords')
<meta name="keywords" content="{!! $product->meta_tag !!}"/>
@stop
@endif

@section('content')

<div class="container section templ-detail-wrap">
    <div class="row">
        <div class="templ-detail">
            <div class="templ-det-gallery-wrap">
                <h1>{{ $product->name }}</h1>
                
                <div class="templ-media-box">
                    @include('frontend.catalog.showcase.media')   
                </div>
            </div>
            
            <div class="design-det-bl">
                <div class="design-det-cont-top">
                    <div>
                        <span class="det-titl">Card Type</span>
                        <a href="{{ $product->card->getUrl() }}">{{ $product->card->name }}</a>
                    </div>
                    <div class="det-desc">
                        {!! the_content($product->description) !!}
                    </div>
                                  
                    <?php $card = $product->card; ?>
                    <div class="det-opt">
                        @foreach($card->featuresSorted() as $ft)
                        <div>
                            <span class="det-titl">{{ $ft->name }}</span>
                            
                            <?php $options = $product->featureOptions($ft->id); ?>
                            @if(!$options->isEmpty())
                                @foreach($options as $opt)
                                <a class="cursor-pointer" href="{{ $ft->link ? $ft->link : '#' }}">
                                    {{ $opt->name }}
                                    <?php 
                                    if($opt->side_type == FRONTSIDE) echo "(Front)"; 
                                    else if($opt->side_type == BACKSIDE) echo "(Back)";
                                    ?>
                                </a>
                                @endforeach
                            @else
                                No Need
                            @endif
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="design-det-cont-bot">
                    <div class="button-wrap">
                        <a href="{{ $product->card->getUrl() }}">
                            <div class="lg-but get-cart-but">Get Yours Card Here</div>
                        </a>
                    </div>
                    <p>Ordering for 10+ Names ?</p>
                    <p>Please <a href="#">Contact us</a> for Free Quotation</p>
                    <div class="ord-share-icon">
                        <div class="addthis_sharing_toolbox"></div>
                    </div>
                    <div class="ord-sect-bl">
                        <h4>Ordering process</h4>
                        <ul class="order-proc">
                            <li>1. Select the quantity of business card you want to order</li>
                            <li>2. Make sure you understand the card type</li>
                            <li>3. You will be asked to enter the card information or uploadart work</li>
                            <li>4. Our designer will put your information and logo and the template and provide you a free proof</li>
                            <li>5. Once you have approved, we will send to print.</li>
                        </ul>
                    </div>
                    <div class="ord-sect-bl">
                        <h4>Tags</h4>
                        <ul class="templ-tags">
                            @foreach($product->tags() as $tag)
                                @if($tag != '')
                                <li><a href="{{ Showcase::getSearchUrl($product->showcase_type, ['tag' => $tag]) }}">{{ $tag }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    
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

@section('styles')
<link href="{{ asset('vendor/photoswipe/photoswipe.css') }}" rel="stylesheet" />
<link href="{{ asset('vendor/photoswipe/default-skin/default-skin.css') }}" rel="stylesheet" />
@stop

@section('scripts')
<script src="{{ asset('vendor/photoswipe/photoswipe.min.js') }}"></script>
<script src="{{ asset('vendor/photoswipe/photoswipe-ui-default.js') }}"></script>
<script src="{{ asset('vendor/masterslider/jquery.easing.min.js') }}"></script>

<script>hasCardTemplate = false;</script>
@if(!$business_card_templates->isEmpty())
<script>hasCardTemplate = true;</script>
@endif

<script src="{{ asset('frontend/js/pages/product_common2.js') }}"></script>
<script>initPhotoSwipeFromDOM('.design-det-gallery');</script>
<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-56662d8a2ed90913"></script>-->
@stop