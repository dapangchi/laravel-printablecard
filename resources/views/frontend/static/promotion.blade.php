@extends('frontend.layouts.default')

@section('content')

<div class="top-img-wrap" style="background: url({{ asset('frontend/img/promotion/promotion-main.jpg') }});">
    <div class="container section promo-titl-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="promo-titl">PROMO</div>
                <div class="promo-subtitl">FREE Custom LASER ENGRAVED BUSINESS CARD CASE</div>
                <div class="promo-duration">March 1st - April 8th</div>
            </div>
        </div>
    </div>
</div>
<div class="promo-divider-block">Free Laser Engraved Logo Business Card Case</div>
<div class="promo-images-line">
    <img class="promo-image" src="{{ asset('frontend/img/promotion/promotion-page-img1.jpg') }}" alt="img">
    <img class="promo-image" src="{{ asset('frontend/img/promotion/promotion-page-img2.jpg') }}" alt="img">
    <img class="promo-image promo-image-d-n" src="{{ asset('frontend/img/promotion/promotion-page-img3.jpg') }}" alt="img">
    <img class="promo-image promo-image-d-n" src="{{ asset('frontend/img/promotion/promotion-page-img4.jpg') }}" alt="img">
    <img class="promo-image promo-image-d-n" src="{{ asset('frontend/img/promotion/promotion-page-img5.jpg') }}" alt="img">
</div>
<div class="container section promotion-block">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <h4>GET YOUR FREE LASER ENGRAVED BUSINESS CARD CASE</h4>
            <p>March is here and with it comes this month's spotlight sale! For the first time ever from now until March 31 receive a free 3.5"x 2" metal card case engraved with your company's logo when you purchase over $500 of print products. Email this month’s code <span class="code-numb">#F3bCase</span> into <a href="mailto:sales@rockdesign.com" target="_blanck">sales@rockdesign.com</a> to obtain this limited time offer.*</p>
            <p>These luxurious metal cases are the perfect way to add a pristine and personalized final touch to your business interactions. These cases will not only look stylish but will protect your beautiful high-end business cards.</p>
            <h4>HOW DOES IT WORK</h4>
            <table class="promo-table">
                <tr>
                    <td><img class="icon-img" src="{{ asset('frontend/img/promotion/promo-icon-img1.png') }}" alt="icon"></td>
                    <td>1. Purchase any print product for over $500 on our website</td>
                </tr>
                <tr>
                    <td><img class="icon-img" src="{{ asset('frontend/img/promotion/promo-icon-img2.png') }}" alt="icon"></td>
                    <td>2. Email this month’s code <span class="code-numb">#F3bCase</span> into <a href="mailto:sales@rockdesign.com" target="_blanck">sales@rockdesign.com</a> to obtain this limited time offer.*</td>
                </tr>
            </table>

        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <img class="right-img" src="{{ asset('frontend/img/promotion/promotion-page-img6.jpg') }}" alt="img">
        </div>
    </div>
</div>
<div class="instructions-sect-wrap">
    <div class="container section instructions-sect">
        <div class="row">
            <div class="col-md-12">
                <h4>Please Read</h4>
                <div class="instructions-info">
                    <h5>Design Process</h5>
                    <ul>
                        <li>1. Once we have processed your payment, one of our designers will contact you via email with four hours during business time (Monday - Friday 9:00 am to 5:00 pm Pacific Standard Time)</li>
                        <li>2. Our designers will gather all of the necessary information, including your budget, ideas and style before beginning your design based on the provided information.</li>
                        <li>3. In order to keep the number of revisions within project scope, please be as detailed as possible in regards to style. The most effective way to do this is to provide the designer with examples of the styles you like, whenever possible.</li>
                        <li>4. Once we have processed your payment, one of our designers will contact you via email with four hours during business time (Monday - Friday 9:00 am to 5:00 pm Pacific Standard Time)</li>
                    </ul>
                    <h5>Please Note</h5>
                    <ul>
                        <li>1. Please provide us with your logo in an editable vector format (ai ir eps format).</li>
                        <li>2. Make sure to correctly select all of the features you want on the card as prices will very depending on different features.</li>
                        <li>3. The turnaround time for design services in 1-3 business days.</li>
                        <li>4. The $25 deposit towards the card template is not refundable in the event that you do not order our business cards.</li>
                        <li>5. If you do not have the logo in vector format, there will be an extra charge for the logo trace.</li>
                        <li>6. Design fees are not refundable any means</li>
                        <li>7. Please provide us with clear guidance on how you would like the card to look. Any examples of the style of card you want are welcome, as an example would provide our designer with a basic understanding of what you are hoping to receive.</li>
                    </ul>
                </div>
                <div class="instructions-footer">
                    If you are interested in our multiple design services combination, please contact <a href="mailto:design@rockdesign.com">design@rockdesign.com</a> for further information
                </div>
            </div>
        </div>
    </div>
</div>

<!--Start Sample Pack-->
@include('frontend.home.sample_pack')
<!--End Sample Pack-->

<!--Start Subscribe-->
@include('frontend.home.subscribe')
<!--End Subscribe-->
    
@stop

@section('styles')
@stop

@section('scripts')
<script>
topImgWrap();

$(document).ready(function() {
    $('.promo-titl-wrap').viewportChecker({
        classToAdd: 'promo-titl-wrap-visible',
        offset: ($(window).height() * .2),
    });
});

$(window).resize(function() {
    topImgWrap();
});
</script>
@stop