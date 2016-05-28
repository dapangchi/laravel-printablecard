<?php
$pinUrl = 'http://www.pinterest.com/pin/create/button/?url=%s#&gid=1&pid=%s&media=%s&description=%s';
$fbUrl = 'https://www.facebook.com/sharer/sharer.php?u=%s#&gid=1&pid=%s';
?>

<div class="design-det-gallery" itemscope itemtype="http://schema.org/ImageGallery">
    @foreach($product->images as $i => $img)
    <figure itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
        <a href="{{ asset($img->image) }}" itemprop="contentUrl" data-size="2500x1666">
          <img src="{{ asset($img->image) }}" itemprop="thumbnail" alt="Image description" />
        </a>
        <figcaption itemprop="caption description">
            <div class="share-icons-wrap">
                <a href="javascript:;" onclick="window.open('{{ sprintf($pinUrl, $product->getUrl(), $i, asset($img->image), $product->name) }}', '', 'width=400,height=200');"><img alt="share-icon" src="{{ asset('frontend/img/soc-pin-icon(grey).svg') }}"></a>
                <a href="javascript:;" onclick="window.open('{{ sprintf($fbUrl, $product->getUrl(), $i) }}', '', 'width=400,height=200');"><img alt="share-icon" src="{{ asset('frontend/img/soc-fac-icon(grey).svg') }}"></a>
                {{--<a class="pswp__button pswp__button--show btn-show-bubbles" title="Show / Hide Bubbles" style="color:white; background:none;">View Feature Info</a>--}}
            </div>
            <div class="mod-gall-info">
                <span>Image + Design copyrighted by RockDesign.com</span>
                <span>Free to share on social networks or blogs with link to Rockdesign.com</span>
            </div>
        </figcaption>
    </figure>
    @endforeach
</div>

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <!-- Background of PhotoSwipe. 
    It's a separate element, as animating opacity is faster than rgba(). -->
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
            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
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
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption"><div class="pswp__caption__center"></div></div>
        </div>
    </div>
</div>