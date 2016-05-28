<tr>
    <td><img src="{{ resize_image( $item->image, 51, 34, 'crop' ) }}"/></td>
    <td style="font-family:Verdana,Arial;font-weight:300;border-collapse:collapse;vertical-align:top;padding:10px 15px;margin:0;border-top:1px solid #fcfcfc;text-align:left">{{ $item->name }}</td>
    <!--<td style="font-family:Verdana,Arial;font-weight:300;border-collapse:collapse;vertical-align:top;padding:10px 15px;margin:0;border-top:1px solid #fcfcfc">
        @if($item->product_type != PRODUCT_DESIGN)
            @if($item->template_uid)
            <b>Template ID:</b> {{ $item->template_uid }}<br/>
            @endif
            
            @foreach($item->features() as $ft)
            <b>{{ $ft->feature_name }}:</b>
                
                <?php $options = $item->featureOptions($ft->feature_id); ?>
                @foreach($options as $opt)
                    {{ $opt->option_name }}
                    <?php 
                    if($opt->side_type == FRONTSIDE) echo "(Front)"; 
                    else if($opt->side_type == BACKSIDE) echo "(Back)";
                    ?>
                @endforeach
            <br/>
            @endforeach
        @else
            {!! the_content($item->description) !!}
        @endif
    </td>-->
    <td style="font-family:Verdana,Arial;font-weight:300;border-collapse:collapse;vertical-align:top;padding:10px 15px;margin:0;border-top:1px solid #fcfcfc">
        @if($item->product_type != PRODUCT_DESIGN)
            {{ $item->qty * $item->sets  }}
        @endif
    </td>
    <td style="font-family:Verdana,Arial;font-weight:300;border-collapse:collapse;vertical-align:top;padding:10px 15px;margin:0;border-top:1px solid #fcfcfc">
        {{ format_currency($item->unit_price, $order->currency, false) }}
    </td>
    <td style="font-family:Verdana,Arial;font-weight:300;border-collapse:collapse;vertical-align:top;padding:10px 15px;margin:0;border-top:1px solid #fcfcfc">
        {{ format_currency($item->price, $order->currency, false) }}
    </td>
</tr>