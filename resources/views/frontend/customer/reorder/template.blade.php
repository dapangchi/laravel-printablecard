<?php
use App\Models\CardTemplate;
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
            <!--Start Templ Gallery-->
            <div class="templ-det-gallery-wrap">
                <h1>{{ strtoupper($product->name) }}</h1>
                
                <div class="product-media-box">
                    @include('frontend.catalog.card.product.media', array('images' => $product->images))   
                </div>
            </div>
            <!--End Templ Gallery-->
            
            <!--Start Option Box-->
            <div class="det-ord-bl">
                <div class="det-ord-titl">
                    <h3>{{ $product->card->name }}</h3>
                    <div class="card-numb">Template ID: {{ $product->template_uid }}</div>
                </div>
                <div class="det-ord-cont">
                    {!! Form::open(array('url' => $product->getUploadUrl(), 'id' => 'product-form', 'method' => 'post')) !!}
                        {!! Form::hidden('product_id', $product->id, array('id' => 'product_id')) !!}
                        {!! Form::hidden('custom_set', 0, array('id' => 'custom_set')) !!}
                        {!! Form::hidden('reference_order_id', $orderItem->order->id) !!}
                        
                        <ul class="card-options-menu">
                            <!--Start Qty-->
                            <li>
                                <span class="active-menu">Quantity</span>                                                                      
                                <div class="card-options-sub-menu" style="display:block">
                                    <div class="quantity-options-wrap">
                                        @if($product->card->discounts->count() > 0)
                                        <div class="select-titl">Number of Sets / Names</div>                                        
                                        <select name="discount" id="set-numb">
                                            @foreach($product->card->discounts as $i => $r)
                                            <option value="{{ $r->id }}" @if($i==0) selected="selected" @endif data-discount-rate="{{ $r->percent }}" data-discount-set="{{ $r->sets }}">{{ $r->sets }} Set</option>
                                            @endforeach
                                        </select>
                                        @endif
                                        
                                        <?php $quantityId = 0; ?>
                                        <div class="select-titl">Number of Cards per set</div>
                                        <select name="quantity" id="set-quant">
                                            @if($product->card->quantities->count() > 0)
                                                @foreach($product->card->quantities as $i => $r)
                                                <?php if($i==0) { $quantityId = $r->id; } ?> 
                                                <option value="{{ $r->id }}" @if($i==0) selected="selected" @endif data-qty="{{ $r->number }}">{{ $r->number }} Cards</option>
                                                @endforeach
                                            @endif  
                                        </select>    
                                        
                                        <div class="multiple-sets-triger">Click here to customize card quantity per individual set</div>
                                    </div> 
                                    
                                    <div class="multiple-sets-wrap">
                                        <div class="multiple-sets-titl">
                                            <h4>Multiple Sets</h4>
                                            <div class="quantity-options-triger">Cancel</div>
                                        </div>
                                        <div id="multiple-set-row-wrap">
                                            <div class="multiple-set-row add">
                                                <input type="text" placeholder="Name" class="set-name" name="custom-name[]">
                                                <select class="set-quant" name="custom-quantity[]">
                                                    @if($product->card->quantities->count() > 0)
                                                        @foreach($product->card->quantities as $i => $r)
                                                        <?php if($i==0) { $quantityId = $r->id; } ?> 
                                                        <option value="{{ $r->id }}" @if($i==0) selected="selected" @endif data-qty="{{ $r->number }}">{{ $r->number }} Cards</option>
                                                        @endforeach
                                                    @endif  
                                                </select>
                                            </div>
                                        </div>
                                        <div class="add-set-triger">Add New Set</div>
                                    </div>
                                                                       
                                </div>
                            </li>
                            <!--End Qty-->
                        </ul>
                        
                        <div id="price-box">
                            <div class="total-price">Total <span id="total-price">{{ format_currency(0) }}</span></div>
                            <div class="select-warning" id="buying-warning"></div>
                            <button id="btn-buy-now">REORDER</button>
                        </div>
                        
                    {!! Form::close() !!}
                    
                    <p>Ordering for 10+ Names ?</p>
                    <p>Please <a href="{{ route('page.corporate.orders') }}">Contact us</a> for Free Quotation</p>
                    <div class="ord-share-icon">
                        <div class="addthis_sharing_toolbox"></div>
                    </div>
                    <div class="ord-sect-bl">
                        <h4>Template ordering process</h4>
                        <ul class="order-proc">
                            <li>1. Select your order quantity</li>
                            <li>2. Upload your logo in editable vector format and write out what text you would like us to include on the card. Please note that changes such as font and text placement cannot be made to our templates. If you would like design customization, please order our simple design services.</li>
                            <li>3. Pay for your order at the checkout</li>
                            <li>4. Our designer will contact you with a proof for your approval within 1-2 business days.</li>
                            <li>5. Sign and approve your proof.</li>
                            <li>6. Production starts and you can relax knowing that your printing is in the hands of our trained professionals here at RockDesign!</li>
                        </ul>
                    </div>
                    <div class="ord-sect-bl">
                        <h4>Template Tags</h4>
                        <ul class="templ-tags">
                            @foreach($product->tags() as $tag)
                                @if($tag != '')
                                <li><a href="{{ CardTemplate::getSearchUrl($product->service_id, ['tag' => $tag]) }}">{{ $tag }}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Option Box-->
            
            <div class="product-info">
                @include('frontend.catalog.template.product.info')    
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

@section('additional')

<div class="multiple-set-row add" id="multiple-set-row-template" style="display:none;">
    <input type="text" placeholder="Name" class="set-name" name="custom-name[]">
    <select class="set-quant" name="custom-quantity[]">
        @if($product->card->quantities->count() > 0)
            @foreach($product->card->quantities as $i => $r)
            <?php if($i == 0) { $quantityId = $r->id; } ?> 
            <option value="{{ $r->id }}" @if($i==0) selected="selected" @endif data-qty="{{ $r->number }}">{{ $r->number }} Cards</option>
            @endforeach
        @endif
    </select>
    <div class="remove-set-row">X</div>
</div>

@stop  

@section('styles')
<link href="{{ asset('vendor/photoswipe/photoswipe.css') }}" rel="stylesheet" />
<link href="{{ asset('vendor/photoswipe/default-skin/default-skin.css') }}" rel="stylesheet" />
@stop

@section('scripts')
<script src="{{ asset('vendor/photoswipe/photoswipe.min.js') }}"></script>
<script src="{{ asset('vendor/photoswipe/photoswipe-ui-default.min.js') }}"></script>
<script src="{{ asset('vendor/masterslider/jquery.easing.min.js') }}"></script>

<script>hasCardTemplate = false;</script>
@if(!$business_card_templates->isEmpty())
<script>hasCardTemplate = true;</script>
@endif

<script>
ajaxUpdatePriceURL = "{{ $product->getUpdatePriceUrl() }}";
</script>
<script src="{{ asset('frontend/js/pages/template.js') }}"></script>
<script src="{{ asset('frontend/js/pages/product_common.js') }}"></script>
<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-56662d8a2ed90913"></script>-->
@stop