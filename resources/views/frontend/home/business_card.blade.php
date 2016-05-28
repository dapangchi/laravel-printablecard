<div class="container section sect1">
    <div class="row">
        <div class="col-md-12 section-title">
            <h1>HIGH END BUSINESS CARDs</h1>
            <h4>IMPRESS YOUR CUSTOMERS WITH STUNING CARDS</h4>
        </div>
        
        @foreach($business_card_categories as $r)
        <div class="col-md-4 col-sm-6 col-xs-12">  
            <a href='{{ $r->getUrl() }}'>
                <img src="{{ resize_image( $r->image, 600, 400, 'crop' ) }}" alt="{{ $r->name }}" title="{{ $r->name }}">
            </a>
            <h3><a href="#">{{ strtoupper($r->name) }}</a></h3>
        </div>
        @endforeach
        
        <div class="col-md-12 col-sm-12 col-xs-12 with-pad section-foot">
            <div class="button-wrap">
                <a href="{{ route('page.corporate.orders') }}">
                    <span class="lg-but more-set-but">NEED 10+ MORE SETS ? GET A QUOTE</span>
                </a>
            </div>
            <h2>FREE BUSINESS CARD TEMPLATES</h2>
            <div class="button-wrap">
                <a href="{{ URL::route('template.product.business') }}">
                    <span class="lg-but view-cart-but">VIEW BUSINESS CARD TEMPLATES</span>
                </a>
            </div>
            <h4>FREE FOR ROCKDESIGN PRINT CUSTOMERS</h4>
        </div>
    </div>
</div>