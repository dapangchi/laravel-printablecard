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
            
            <div class="det-ord-bl">
                <div class="det-ord-titl">
                    <div class="select-titl" style="color:#6d6d6d; font-size:14px;">Category:</div>
                    <h3>{{ $product->category->name }}</h3>
                    <div class="card-numb">Please customize your quantity and features below.</div>
                </div>
                <div class="det-ord-cont">
                    {!! Form::open(array('url' => $product->getUploadUrl(), 'id' => 'product-form', 'method' => 'post')) !!}
                        {!! Form::hidden('product_id', $product->id, array('id' => 'product_id')) !!}
                        {!! Form::hidden('custom_set', 0, array('id' => 'custom_set')) !!}
                        {!! Form::hidden('reference_order_id', $orderItem->order->id) !!}
                        
                        @foreach($orderItem->options as $row)
                            @if($row->feature_type == DROPDOWN)
                                <input type="hidden" name="product_options[{{$row->feature_id}}]" value="{{ $row->option_id }}"/>
                            @else
                                <input type="hidden" name="product_options[{{$row->feature_id}}][{{ $row->side_type }}][{{ $row->option_id }}]" value="{{ $row->option_id }}"/>
                            @endif
                        @endforeach
                        
                        <ul class="card-options-menu">
                            <!--Start Qty-->
                            <li>
                                <span id="quantity-tab" class="active-menu">Quantity</span>                                                                      
                                <div class="card-options-sub-menu" style="display:block">
                                    <div class="quantity-options-wrap">
                                        @if($product->discounts->count() > 0)
                                        <div class="select-titl">Number of Sets / Names</div>                                        
                                        <select name="discount" id="set-numb">
                                            @foreach($product->discounts as $i => $r)
                                            <option value="{{ $r->id }}" @if($i==0) selected="selected" @endif data-discount-rate="{{ $r->percent }}" data-discount-set="{{ $r->sets }}">{{ $r->sets }} Set</option>
                                            @endforeach
                                        </select>
                                        @endif
                                        
                                        <?php $quantityId = 0; ?>
                                        <div class="select-titl">Number of Cards per set</div>
                                        <select name="quantity" id="set-quant">
                                            @if($product->quantities->count() > 0)
                                                @foreach($product->quantities as $i => $r)
                                                <?php if($i == 0) { $quantityId = $r->id; } ?> 
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
                                                    @if($product->quantities->count() > 0)
                                                        @foreach($product->quantities as $i => $r)
                                                        <?php if($i == 0) { $quantityId = $r->id; } ?> 
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
                        
                        <div id="price-html" class="price-html">@include('frontend.catalog.card.product.price', array('price' => 0, 'discountPercent' => 0, 'cards' => 0))</div>
                        <div class="select-warning" id="buying-warning"></div>
                        <button type="submit" id="btn-buy-now">REORDER</button>
                        
                    {!! Form::close() !!}
                    
                    <p>Ordering for 10+ Names ?</p>
                    <p>Please <a href="{{ route('page.corporate.orders') }}">Contact us</a> for Free Quotation</p>
                    <div class="ord-share-icon">
                        <div class="addthis_sharing_toolbox"></div>
                    </div>
                    
                    <div class="ord-sect-bl">
                        <h4>Ordering Process</h4>
                        <ul class="order-proc">
                            <li>1. Select the card quantity and print features. In order to get correct pricing, please make sure you have selected all the features you wish to apply on the card.</li>
                            <li>2. If you are unsure about the features, please click on the "?" icon and it will bring you to the information page for that feature.</li>
                            <li>3. Make sure you read the card stock information and turnaround time.</li>
                            <li>4. You will be asked to upload your print file. Make sure you have setup the file in vector format according to our example.</li>
                            <li>5. Once the payment has completed, our designer will prepare a finalized print proof and send you a copy by email.</li>
                            <li>6. After you have approved the proof, we will start the production and will then provide you with a tracking number when it&rsquo;s ready for shipping.</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            <!--End Option Box-->
            
            <div class="product-info">
                @include('frontend.catalog.card.product.info')
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
        @if($product->quantities->count() > 0)
            @foreach($product->quantities as $i => $r)
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
<link href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet" />
@stop

@section('scripts')
<script src="{{ asset('vendor/photoswipe/photoswipe.min.js') }}"></script>
<script src="{{ asset('vendor/photoswipe/photoswipe-ui-default.min.js') }}"></script>
<script src="{{ asset('vendor/masterslider/jquery.easing.min.js') }}"></script>
<script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

<script>hasCardTemplate = false;</script>
@if(!$business_card_templates->isEmpty())
<script>hasCardTemplate = true;</script>
@endif

<script>ajaxUpdatePriceURL = "{{ URL::route('card.product.update.price') }}";</script>
<script src="{{ asset('frontend/js/pages/card.js') }}"></script>
<script src="{{ asset('frontend/js/pages/product_common.js') }}"></script>
<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-56662d8a2ed90913"></script>-->
@stop