<?php
$pinUrl = 'http://www.pinterest.com/pin/create/button/?url=%s&media=%s&description=%s';
//$fbUrl = 'https://www.facebook.com/sharer/sharer.php?u=%s&t=%s';
$fbUrl = 'http://www.facebook.com/sharer.php?u=%s';
?>

<div class="templ-det-gallery" id="templ-det-gallery">
    @foreach($images as $i => $img)
    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject" data-title="{{ $product->name }}" data-image="{{ $img->url() }}">
        <a href="{{ resize_image( $img->image ) }}" itemprop="contentUrl" data-size="2500x1666" data-index="{{ $img->id }}">
            @if($i == 0)
            <img src="{{ resize_image( $img->image ) }}" alt="{{ $img->label }}" itemprop="thumbnail" data-index="{{ $img->id }}">
            @else
            <img src="{{ resize_image( $img->image, 510, 340, 'crop' ) }}" alt="{{ $img->label }}" itemprop="thumbnail" data-index="{{ $img->id }}">
            @endif
        </a>
        <figcaption itemprop="caption description">
            <div class="share-icons-wrap">
                <a href="<?php echo sprintf($pinUrl, urlencode($product->getUrl() . "#&gid=1&pid=".($i+1)), urlencode(asset($img->image)), urlencode($product->name)); ?>" class="share-btn"><img alt="share-icon" src="{{ asset('frontend/img/soc-pin-icon(grey).svg') }}"></a>
                <a href="<?php echo sprintf($fbUrl, urlencode($img->url())); ?>" class="share-btn"><img alt="share-icon" src="{{ asset('frontend/img/soc-fac-icon(grey).svg') }}"></a>
                <a class="pswp__button pswp__button--show btn-show-bubbles" title="Show / Hide Bubbles" style="color:white; background:none;">View Feature Info</a>
            </div>
            <div class="mod-gall-info">
                <span>Image + Design copyrighted by {{ $settings['site.name'] }}</span>
                <span>Free to share on social networks or blogs with link to {{ $settings['site.name'] }}</span>
            </div>
        </figcaption>
    </figure>
    @endforeach
</div>

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <!-- Background of PhotoSwipe. It's a separate element, as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>
    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">
        <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
        <!-- don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <!--  Controls are self-explanatory. Order can be changed. -->
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--show" title="Show / Hide Bubbles" style="color:white; background:none;">Info</button>
                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>