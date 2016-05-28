<ul class="card-options-menu {{ $product->atleast_one == YES ? 'require-one-print-feature' : '' }}">
    
    @foreach($product->featuresNonePrint() as $ft)
        @include('frontend.catalog.card.product.optionsBlock', compact('ft'))
    @endforeach
    
    <span class="print-featur-titl">Print Features</span>
    @foreach($product->featuresPrint() as $ft)
        @include('frontend.catalog.card.product.optionsBlock', compact('ft'))
    @endforeach
    
</ul>