<?php
    $currencies = array('USD' => 'English: USD', 'CAD' => 'English: CAD');  
?>
  
<div class="footer-cont-wrap">
    <div class="footer-menu-wrap">
        <div class="menu-column foot-logo">
            <img src="{{ asset('frontend/img/fotter-logo.svg') }}" alt="logo">
            <dl id="currency-selector" class="dropdown">
                @if($currency == 'CAD') 
                <dt><span><img class="flag" src="{{ asset('frontend/img/flags/ca.png') }}" alt="CAD" />English: $CAD</span></dt>
                <dd>
                    <ul>
                        <li class="display-none" data-currency='CAD'><span><img class="flag" src="{{ asset('frontend/img/flags/ca.png') }}" alt="CAD" />English: $CAD</span></li>
                        <li data-currency='USD'><span><img class="flag" src="{{ asset('frontend/img/flags/us.png') }}" alt="USD" />English: $USD</span></li>
                    </ul>
                </dd>
                @else
                <dt><span><img class="flag" src="{{ asset('frontend/img/flags/us.png') }}" alt="USD" />English: $USD</span></dt>
                <dd>
                    <ul>
                        <li class="display-none" data-currency='USD'><span><img class="flag" src="{{ asset('frontend/img/flags/us.png') }}" alt="USD" />English: $USD</span></li>
                        <li data-currency='CAD'><span><img class="flag" src="{{ asset('frontend/img/flags/ca.png') }}" alt="CAD" />English: $CAD</span></li>
                    </ul>
                </dd>
                @endif
            </dl>
        </div>
        
        <div class="menu-column">
            <h3>BUSINESS CARDS</h3>
            <ul class="foot-sub-menu">
                @foreach($business_card_categories as $r)
                <li><a href="{{ $r->getUrl() }}">{{ $r->name }}</a></li>
                @endforeach
                <li><a href="{{ URL::route('card.category.business') }}">View All Business Cards</a></li>
                <li><a href="{{ URL::route('page.promotion.html') }}">Current Promotion</a></li>
            </ul>
        </div>
        <div class="menu-column">
            <h3>INVITATION</h3>
            <ul class="foot-sub-menu">
                @foreach($invitation_card_categories as $r)
                <li><a href="{{ $r->getUrl() }}">{{ $r->name }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="menu-column">
            <h3>TEMPLATEs</h3>
            <ul class="foot-sub-menu">
                <li><a href="{{ URL::route('template.product.business') }}">Business Card Templates</a></li>
                <li><a href="{{ URL::route('template.product.invitation') }}">Invitation Templates</a></li>
            </ul>
        </div>
        <div class="menu-column">
            <h3>DESIGN SERVICES</h3>
            <ul class="foot-sub-menu">
                @foreach($design_services as $r)
                <li><a href="{{ URL::route('design.category.show', $r->slug) }}">{{ $r->name }}</a></li>
                @endforeach
                <li><a href="{{ URL::route('design.category.all') }}">Total Design Services</a></li>
            </ul>
        </div>
        <div class="menu-column">
            <h3>SUPPORTS</h3>
            <ul class="foot-sub-menu">
                <li><a href="#">Design Showcase</a></li>
                <li><a href="{{ route('page.sample.pack.html') }}">Premium Sample Pack</a></li>
                <li><a href="{{ upload_url('static/print_file_setup_instruction.zip') }}">Download File Setup Instruction</a></li>
                <li><a href="{{ route('page.corporate.orders') }}">Custom Quotation</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="{{ route('page.corporate.orders') }}">Contact Us</a></li>
                <li><a href="{{ route('page.about.html') }}">About RockDesign</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-terms-wrap">
        <div class="left-bl">
            <span class="copy-wr">&copy; {{ date('Y') }}&nbsp;&nbsp;<a href="{{ url() }}" target="blank">ROCKDESIGN.COM</a></span>
            <span><a href="{{ route('page.privacy.html') }}">Privacy Policy</a></span>
            <span><a href="{{ route('page.terms.html') }}">Terms and Conditions</a></span>
            <span class="sitemap"><a href="{{ route('page.sitemap') }}">Sitemap</a></span>
        </div>
        <div class="rig-bl">
            <span class="paym-met">SECURE PAYMENTS</span>
            <img src="{{ asset('frontend/img/paypal-icon.svg') }}" alt="paypal">
            <img src="{{ asset('frontend/img/visa-icon.svg') }}" alt="visa">
            <img src="{{ asset('frontend/img/mastercard-icon.svg') }}" alt="mastercard">
        </div>
    </div>
</div>