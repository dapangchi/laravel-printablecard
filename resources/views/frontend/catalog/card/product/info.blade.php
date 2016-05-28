<!--<div class="det-info-wrap">
    <h4>Soft suede card stock</h4>
    <div>
        <p>Information about this card stock here: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknow printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
</div>-->

<div class="det-info-wrap">
    <h4>Description</h4>
    <div>
        {!! the_content($product->description) !!}                    
    </div>
</div>

<div class="det-info-wrap">
    <h4>Turnaround time</h4>
    <div>
        {!! the_content($product->turnaround_time) !!}                    
    </div>
</div>

<div class="det-info-wrap">
    <h4>Product features and guideline</h4>
    <div>
        For detailed information on {{ $product->name }}, such as recommendations, design guidelines, download blank templates, please visit <a href="{{ $product->guide_link }}">{{ $product->name }} guideline.</a>
    </div>
</div>

<div class="det-info-wrap">
    <h4>corporate / special custom order</h4>
    <div>
        <p>If you need more than +10 sets of cards or need special custom printing, please visit <a href="{{ route('page.corporate.orders.html') }}" style="padding-right:0;">Custom Quotation</a> page and get a free quotation.</p>
    </div>
</div>