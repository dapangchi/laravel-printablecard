@extends('frontend.layouts.default')

@section('content')

<div class="container section table-wrap">
    <div class="row">
        <div class="col-md-12">
            <table class="cart-table">
            <!--<colgroup>
                <col width="340"/>
                <col width=""/>
                <col width="515"/>
            </colgroup>-->
            <tbody>
                <tr>
                    <td class="thumb-img">
                        <img src="{{ resize_image( $item->product_image, 510, 340, 'crop' ) }}" alt="{{ $item->product_name }}"/>
                    </td>
                    <td class="item-decription">
                        <h3>{{ $item->product_name }}</h3>
                        <ul>
                            @if($item->template_uid)
                            <li>Template ID: {{ $item->template_uid }}</li>
                            @endif
                            
                            @if($item->product_type != PRODUCT_DESIGN)
                            <li>Quantity: 
                                @if($item->hasCustomSets())
                                    {{ $item->product_quantity }} cards total for various names<br/>
                                    
                                    @foreach($item->customSets() as $r)
                                    &nbsp;&nbsp;{{ $r['name'] }} : {{ $r['quantity'] }}<br/>
                                    @endforeach
                                @else
                                    {{ $item->product_quantity }} cards
                                @endif
                            </li>
                            <li>Set: {{ $item->sets }}</li>
                            @endif
                            
                            @foreach($item->features() as $ft)
                            <li>
                                {{ $ft->feature_name }}: 
                                
                                <?php $options = $item->featureOptions($ft->feature_id); ?>
                                @foreach($options as $opt)
                                    {{ $opt->option_name }}
                                    <?php 
                                    if($opt->side_type == FRONTSIDE) echo "(Front)"; 
                                    else if($opt->side_type == BACKSIDE) echo "(Back)";
                                    ?>
                                @endforeach
                            </li>
                            @endforeach
                            
                            @if($item->product_type == PRODUCT_TEMPLATE)
                            <!--<li>
                                Front Side Content: {{ $item->template_front }}
                            </li>
                            <li>
                                Back Side Content: {{ $item->template_back }}
                            </li>-->
                            @elseif($item->product_type == PRODUCT_DESIGN)
                            <li>
                                {!! the_content($item->product_description) !!}
                            </li>
                            @endif
                        </ul>
                    </td>
                    <td class="added-item-block">
                        <h1>ITEM ADDED TO YOUR CART!</h1>
                        <div class="keep-shoppin"><a href="{{ url('/') }}">Keep Shopping</a></div>
                        <div class="button-wrap">
                            <a href="{{ URL::route('cart.item.list') }}"><div class="chekout-but lg-but">CHECKOUT</div></a>
                        </div>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
    
    <!--start also like-->
    
        
</div>

@stop

@section('styles')
@stop

@section('scripts')

@stop
