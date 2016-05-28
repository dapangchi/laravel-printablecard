@extends('frontend.layouts.default')

@section('content')

<div class="top-img-wrap" style="background: url({{ upload_url('samplepack/sample-pack-top.jpg') }});"></div>
<div class="design-service-wrap">
    <div class="container section">
        <div class="row">
            <div class="col-md-12 section-title">
                <h1>Premium Sample Pack</h1>
                <h4>Check out our luxury quality and unique printing features</h4>
            </div>
            <div class="col-md-12 design-service-list">
                <div class="design-item-section">
                    <div class="design-item-head">
                        <div class="dh-left-block">
                            <h2>Premium sample pack</h2>
                        </div>
                        <div class="dh-right-block">
                            <div class="button-wrap">
                                <a href="{{ route('page.premium.pack.html') }}">
                                    <div class="lg-but view-puck-but">GET SAMPLE PACK</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="design-item-cont">
                        <a href="{{ route('page.premium.pack.html') }}">
                            <img src="{{ upload_url('samplepack/sample-pack-1.jpg') }}" alt="Rockdesign premium sample image">
                        
                            <div class="design-img-overflow">
                                <span>Premium Samples, Not including metal cards</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="design-item-section">
                    <div class="design-item-head">
                        <div class="dh-left-block">
                            <h2>Premium sample pack + metal cards</h2>
                        </div>
                        <div class="dh-right-block">
                            <div class="button-wrap">
                                <a href="{{ route('page.metal.pack.html') }}">
                                    <div class="lg-but view-puck-but">GET SAMPLE PACK</div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="design-item-cont">
                        <a href="{{ route('page.metal.pack.html') }}">
                            <img src="{{ upload_url('samplepack/sample-pack-2.jpg') }}" alt="Rockdesign premium sample image">
                            <div class="design-img-overflow">
                                <span>Premium Samples, including metal cards</span>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="design-service-foot">Our premium sample pack including most of our business card types. <br/>If you need metal business cards, please purchase premium sample pack that including metal cards. <br/>Our samples changes from time to time, and it may not have the exact sample you see on website. If you want to see a specific sample, please purchase customized sample pack and our sales team will help you on that.</div>
            </div>
        </div>
    </div>
</div>

<!--Start Subscribe-->
@include('frontend.home.subscribe')
<!--End Subscribe-->
    
@stop

@section('styles')
@stop

@section('scripts')
<script>
topImgWrap();

$(window).resize(function() {
    topImgWrap();
});
</script>
@stop