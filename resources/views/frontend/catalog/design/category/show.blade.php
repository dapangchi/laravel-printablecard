@extends('frontend.layouts.default')

@if($row->meta_description != '')
@section('meta_description')
<meta name="description" content="{!! $row->meta_description !!}"/>
@stop
@endif

@if($row->meta_tag != '')
@section('meta_keywords')
<meta name="keywords" content="{!! $row->meta_tag !!}"/>
@stop
@endif

@section('content')

<?php
    $image = $row->image ? $row->image : 'frontend/img/category/all-business-card.jpg';
?>
<div class="top-img-wrap" style="background: url({{ asset($image) }})"></div>
<div class="container section logo-design-sect">
    <div class="row">
        
        <div class="col-md-12 col-sm-12 col-xs-12 section-title">
            <h1>{{ $page_title }}</h1>
            <h4>{{ $row->text }}</h4>
        </div>
                                  
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="ld-sect-border">
                <div class="ld-sect-wrap">
                      
                    <!--start slideshow-->
                    <div class="ld-slider-wrap">
                        <div class="swiper-container logo-design-slider">
                            <div class="swiper-wrapper">
                                @foreach($row->slide->images as $img)
                                <div class="swiper-slide"><a class="cursor-pointer"><img src="{{ resize_image($img->image) }}" alt="{{ $img->label }}"></a></div>
                                @endforeach
                            </div>
                            <div class="swiper-pagination"></div> 
                        </div>
                    </div>
                    <!--end slideshow-->
                    
                    <!--start packages-->
                    <div class="ld-design-package-wrap">
                        <h4>Please Select A Design Package</h4>
                        @if($row->packages->isEmpty())
                        <p style="padding-left:5px;">There is no packages.</p>
                        @endif
                        
                        @if($errors->has('design-package'))
                        <div class="select-warning">{{ $errors->first('design-package', ':message') }}</div>
                        @endif
                        
                        @if(!$row->packages->isEmpty())
                        <?php $price = 0; ?>
                        {!! Form::open(array('url' => URL::route('design.category.upload'), 'id' => 'product-form', 'method' => 'post')) !!}
                            @foreach($row->packages as $i => $r) 
                            
                                <?php $checked = false; ?>
                                @if($i == 0)
                                <?php $price = $r->price; ?>
                                @endif
                                  
                                <label class="ld-item-wrap">    
                                    <div class="radio radio-success">                                                                                                                                 
                                        <?php if($i==0) $checked = true; ?>
                                        {!! Form::radio('design-package', $r->id, $checked, array('class' => 'design-package', 'data-price' => format_currency($r->price), 'id' => 'design-package'.$r->id)) !!}
                                        <label for="{{ 'design-package'.$r->id }}"><span>{{ $r->name }} {{ format_currency($r->price) }}</span></label>
                                    </div>
                                    <div class="ld-item-info-wrap">
                                        <img src="{{ asset($r->image) }}" alt="{{ $r->name }}">
                                        <div>{!! the_content($r->description) !!}</div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="clear"></div>
                                </label>
                            @endforeach
                            
                            <div class="ld-form-fotter">
                                <div class="ld-total-price">
                                    <span>Price</span>
                                    <span class="ld-price-amount" id="total-price">{{ format_currency($price) }}</span>
                                </div>
                                <div class="ld-rules-agree">
                                    <div class="checkbox check-success">
                                        {!! Form::checkbox('agree', 1, false, array('id' => 'agree', 'required')) !!}
                                        <label for="agree">I have read and fully understand the <a href="{{ route('page.terms.html') }}" target="_blank">terms</a> of the design service.</label>
                                    </div>
                                </div>
                                 
                                @if($errors->has('agree'))
                                <div class="select-warning" id="buying-warning">{{ $errors->first('agree', ':message') }}</div>
                                @endif
                                
                                <button>Buy Now</button>
                            </div>
                        {!! Form::close() !!}
                        @endif
                    </div>
                    <!--end packages-->
                    
                    <!--start info-->
                    <div class="ld-info">
                        <h4>{{ $row->name }}</h4>
                        <div>{!! the_content($row->description) !!}</div>
                        
                        <!--start phases-->
                        <h4>Our Design Phases</h4>
                        <div class="ld-benefit-wrap">
                            @foreach($row->phases as $r)
                            <div class="ld-benefit-item">
                                <table>
                                    <tr>
                                        <td>
                                            @if($r->icon_type < 6)
                                            <img src='{{ asset("frontend/img/design-icons/$r->icon_type.jpg") }}' width="61"/>
                                            @else
                                            <img src='{{ resize_image( $r->icon_path, 61, 61, "fit-x" ) }}' width="61"/>
                                            @endif
                                        </td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td><span class="benef-cell-title">{{ $r->title }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td><p>{{ $r->text}} </p></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            @endforeach
                        </div>
                        <!--end phases-->
                    </div>
                    <!--end info-->
                    
                </div>
            </div>
        </div>
        
        <!--start feature works-->
        <div class="feature-works">
            <div class="col-md-12 col-sm-12 col-xs-12 ld-feature-work">
                <h4>Feature Works</h4>
            </div> 
            
            @foreach($row->works as $r)
            <!--start item-->
            <div class="col-md-3 col-sm-6 col-xs-12 ld-feature-work-item">
                <a class="cursor-pointer" href="{{ $r->link?$r->link:'#' }}" target="_blank"><img src="{{ asset($r->image) }}" alt="{{ $r->label }}"></a>
            </div>  
            <!--end item-->
            @endforeach
        </div>
        <!--end feature works-->
        
    </div>
</div>

@include('frontend.catalog.design.category.process')

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

//$('.ld-item-wrap').removeClass('ld-item-wrap-active');
$('input.design-package:checked')
    .parents('.ld-item-wrap')
    .addClass('ld-item-wrap-active');
</script>
<script src="{{ asset('frontend/js/pages/design.js') }}"></script>
@stop