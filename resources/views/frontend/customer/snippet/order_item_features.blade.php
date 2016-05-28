
@if($item->product_type != PRODUCT_DESIGN) 
    @foreach($item->features() as $ft)
    <div>
        {{ $ft->feature_name }}: 
        
        <?php $options = $item->featureOptions($ft->feature_id); ?>
        @foreach($options as $opt)
            {{ $opt->option_name }}
            <?php 
            if($opt->side_type == FRONTSIDE) echo "(Front)"; 
            else if($opt->side_type == BACKSIDE) echo "(Back)";
            ?>
        @endforeach
    </div>
    @endforeach
@else
    <div>{{ $item->description }}</div>
@endif