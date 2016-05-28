<div class="ms-fullscreen-template" id="slider1-wrapper">
    <!-- masterslider -->
    <div class="master-slider ms-skin-default has-thumbnails" id="masterslider">
        @foreach($homesliders as $r)
        <div class="ms-slide" data-delay="4">
            <img src="{{ asset('frontend/img/blank.gif') }}" height="1300" width="2560" data-src='{{ resize_image($r->image) }}' title="{{ $r->text }}" alt="{{ $r->text }}">
            <div class="slider-bottom ms-layer" data-effect="skewright(20|30,200|400)" data-duration="600" data-delay="0" data-ease="easeOutQuint" data-hide-effect="skewleft(20|30,200|400)" data-hide-duration="600" data-hide-ease="easeInQuart">
                <a href="{{ $r->url }}" target="_blank"><h2>{{ $r->text }}</h2></a>
            </div>
        </div>
        <!-- .ms-slide -->
        @endforeach
    </div>
    <!-- end of masterslider -->
</div>