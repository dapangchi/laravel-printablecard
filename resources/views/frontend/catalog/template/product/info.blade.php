<div class="det-info-wrap">
    <h4>About this business card template</h4>
    <div>
        {!! the_content($product->description) !!}  
    </div>
    
    <div>
        <span class="det-titl">Card Type</span>
        <a href="{{ $product->card->getUrl() }}">{{ $product->card->name }}</a>
    </div>
    
    <div>
        {!! the_content($product->card->description) !!}  
    </div>  
    
    <?php $card = $product->card; ?>
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
<div class="det-info-wrap">
    <h4>Turnaround time</h4>
    <div>
        {!! the_content($product->turnaround_time) !!}
    </div>
</div>