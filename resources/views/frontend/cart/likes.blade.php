@if(isset($likeItems) && !$likeItems->isEmpty())
<!--start you-many-also-like-->
<div class="row relative-products-wrap">
    <div class="col-md-12">
        <h1>You may also like</h1>
    </div> 
    
    @foreach($likeItems as $item)    
    <div class="col-md-4 col-sm-4">
        <a href="{{ $item->slug }}">
            <img src="{{ resize_image( $item->image(), 400, 265, 'crop' ) }}" alt="{{ $item->name }}">
        </a>
        <h3 class="relative-product-descr"><a href="{{ $item->getUrl() }}">{{ $item->name }}</a></h3>
    </div>
    @endforeach
</div>
<!--end you-many-also-like-->
@endif