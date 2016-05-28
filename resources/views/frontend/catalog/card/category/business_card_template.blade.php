<div class="card-tepl-slide-wrap">
    <div class="container section">
        <div class="row">
            <div class="col-md-12">
                <h2>FREE BUSINESS CARD TEMPLATES</h2>
                <div id="card-tepl-slide">
                    <div class="swiper-container card-tepl-slider">
                        <div class="swiper-wrapper">
                            @foreach($business_card_templates as $r)
                            <div class="swiper-slide">
                                <a href="{{ $r->getUrl() }}">
                                    <img src="{{ resize_image( $r->image(), 600, 400, 'crop' ) }}" alt="{{ $r->name }}">
                                </a>
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div> 
                    </div>
                </div>
                <div class="button-wrap">
                <a href="{{ URL::route('template.product.business') }}">
                    <span class="lg-but view-cart-but">VIEW BUSINESS CARD TEMPLATES</span>
                </a>
            </div>
            <h4>FREE FOR ROCKDESIGN PRINT CUSTOMERS</h4>
            </div>
        </div>
    </div>
</div>