<div class="carousel-wrap">
    <div class="swiper-container carousel-container">
        <div class="swiper-wrapper">
            @foreach($business_card_templates as $r)
            <div class="swiper-slide">
                <a href='{{ $r->getUrl() }}'>    
                    <img src="{{ resize_image( $r->image(), 510, 340, 'crop' ) }}" title="{{ $r->name }}">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>