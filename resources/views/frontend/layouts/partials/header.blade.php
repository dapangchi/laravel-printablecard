<div class="top_menu">
    <div class="top_menu-wrap">
        <a id="touch-menu" class="mobile-menu" href="#"><span></span></a>
        <div class="logo-wrap">
            <a href="{{ URL::to('/') }}"><img src="{{ asset('frontend/img/Logo2.svg') }}" alt="logo"></a>
        </div>

        <nav>
            <ul class="menu">
                <li class="menu-parent-item prod_bl">
                    <a>Products</a>
                    <div class="sub-menu sub-menu-prod">
                        <div class="sub-menu-col-wrap">
                            <ul class="sub-menu-col">
                                <li class="sub-menu-title">BUSINESS CARDS</li>
                                @foreach($business_card_categories as $r)
                                <li><a href="{{ $r->getUrl() }}">{{ $r->name }}</a></li>
                                @endforeach
                                <li><a href="{{ URL::route('card.category.business') }}">View All Business Cards</a></li>
                                <li><a href="{{ URL::route('page.promotion.html') }}">Current Promotion</a></li>
                            </ul>
                            <ul class="sub-menu-col">
                                <li class="sub-menu-title">INVITATION</li>
                                @foreach($invitation_card_categories as $r)
                                <li><a href="{{ $r->getUrl() }}">{{ $r->name }}</a></li>
                                @endforeach
                                <li><a href="{{ URL::route('card.category.invitation') }}">View All Invitation Cards</a></li>
                            </ul>
                            <!--<ul class="sub-menu-col">
                                <li class="sub-menu-title">Accessories</li>
                                <li><a href="#">Business Card Case</a></li>
                                <li><a href="#">Envelops</a></li>
                            </ul> -->
                            <ul class="sub-menu-col last">
                                <li class="sub-menu-title">DESIGN SHOWCASE</li>
                                <li><a href="{{ route('showcase.business.list') }}">Business Card Design Showcase</a></li>
                                <li><a href="{{ route('showcase.invitation.list') }}">Invitation Design Showcase</a></li>
                            </ul>
                            <img alt="nav-prod-img" src="{{ asset('frontend/img/nav-product-img.jpg') }}">
                        </div>
                        <div class="sub-menu-bot">
                            <div class="sub-menu-bot-wrap">
                                <span>Need help for corporate + custom ordering ?</span>
                                <span><a href="{{ route('page.corporate.orders') }}">Get a Free Quotation Here</a></span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu-parent-item">
                    <a>Templates</a>
                    <div class="sub-menu sub-menu-templ">
                        <ul class="sub-menu-col">
                            <li class="sub-menu-title">ORDER FROM TEMPLATEs</li>
                            <li><a href="{{ URL::route('template.product.business') }}">Business Card Templates</a></li>
                            <li><a href="{{ URL::route('template.product.invitation') }}">Invitation Templates</a></li>
                        </ul>
                        <ul class="sub-menu-col last">
                            <li class="sub-menu-title">DOWNLOAD BLANK TEMPLATES</li>
                            <li><a href="#">Download Blank Business Card Templates</a></li>
                            <li><a href="#">Download Blank Invitation Templates</a></li>
                        </ul>
                        <img alt="nav-template-img" src="{{ asset('frontend/img/nav-template-img.jpg') }}">
                        <div class="sub-menu-bot">
                            <div class="sub-menu-bot-wrap">
                                <span>Need help for corporate + custom ordering ?</span>
                                <span><a href="{{ route('page.corporate.orders') }}">Get a Free Quotation Here</a></span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu-parent-item">
                    <a>Designs</a>
                    <div class="sub-menu sub-menu-design">
                        <ul class="sub-menu-col last">
                            <li class="sub-menu-title">PROFESSIONAL DESIGN SERVICES</li>
                            @foreach($design_services as $r)
                            <li><a href="{{ URL::route('design.category.show', $r->slug) }}">{{ $r->name }}</a></li>
                            @endforeach
                            <li><a href="{{ URL::route('design.category.all') }}">Total Design Services</a></li>
                        </ul>
                        <img alt="nav-design-img" src="{{ asset('frontend/img/nav-quote-img.jpg') }}">
                        <div class="sub-menu-bot">
                            <div class="sub-menu-bot-wrap">
                                <span>Need help for corporate + custom ordering ?</span>
                                <span><a href="{{ route('page.corporate.orders') }}">Get a Free Quotation Here</a></span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu-parent-item">
                    <a>Quote</a>
                    <div class="sub-menu sub-menu-quot">
                        <ul class="sub-menu-col last">
                            <li class="sub-menu-title">GET FREE QUOTATION</li>
                            <li><a href="{{ route('page.corporate.orders') }}">10+ Names Corporate Ordering</a></li>
                            <li><a href="{{ route('page.corporate.orders') }}">Custom Printing Quotation</a></li>
                        </ul>
                        <img alt="nav-quote-img" src="{{ asset('frontend/img/nav-quote-img.jpg') }}">
                        <div class="sub-menu-bot">
                            <div class="sub-menu-bot-wrap">
                                <span>Need help for corporate + custom ordering ?</span>
                                <span><a href="{{ route('page.corporate.orders') }}">Get a Free Quotation Here</a></span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="menu-parent-item last-child">
                    <a>Supports</a>
                    <div class="sub-menu sub-menu-support">
                        <ul class="sub-menu-col last">
                            <li class="sub-menu-title">SUPPORTS</li>
                            <li><a href="{{ upload_url('static/print_file_setup_instruction.zip') }}">Download File Setup Instruction</a></li>
                            <li><a href="{{ route('page.sample.pack.html') }}">Premium Sample Pack</a></li>
                            <li><a href="{{ upload_url('static/rockdesign-print-features.pdf') }}">Print Features</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="{{ route('page.corporate.orders') }}">Contact Us</a></li>
                            <li><a href="{{ route('page.about.html') }}">About RockDesign</a></li>
                        </ul>
                        <img alt="nav-support-img" src="{{ asset('frontend/img/nav-support-img.jpg') }}">
                        <div class="sub-menu-bot">
                            <div class="sub-menu-bot-wrap">
                                <span>Need help for corporate + custom ordering ?</span>
                                <span><a href="{{ route('page.corporate.orders') }}">Get a Free Quotation Here</a></span>
                            </div>
                        </div>
                    </div>
                </li>
                
                @if(!isset($current_customer->id))
                <li class="mobile-menu-item">
                    <a href="{{ route('customer.login') }}">Login</a>
                </li> 
                @else
                <li class="mobile-menu-item">
                    <a href="{{ route('customer.login') }}">Logout</a>
                </li> 
                @endif
            </ul>
        </nav>

        <div class="log-block">
            <!--<span class="searchTriger"><img class="search" src="{{ asset('frontend/img/serch-icon.svg') }}" alt="serch-icon"></span>-->
            <div class="basket-wrap">
                <img src="{{ asset('frontend/img/basket-icon.svg') }}" alt="basket-icon">
                <div class="basket-menu">
                    @if($cart->items->isEmpty())
                        <p style="margin-top:0;">{{ trans('msg.cart_empty') }}</p>
                    @else
                        @foreach($cart->items as $item)
                        <div class="basket-menu-item">
                            <img src="{{ resize_image( $item->product_image, 100, 65, 'crop' ) }}" alt="{{ $item->product_name }}"/>
                            
                            <div class="basket-link"><a href="#">{{ $item->product_name }}</a></div>
                        </div>
                        @endforeach                    
                        <div class="button-wrap">
                            <a href="{{ URL::route('cart.item.list') }}">
                                <div class="medium-but checkout-but">Checkout</div>
                            </a>
                        </div>
                    @endif    
                </div>
            </div>
            
            @if(!isset($current_customer->id))
            <span class="loginTriger" title="Login"><img class="login" src="{{ asset('frontend/img/login-icon.svg') }}" alt="login-icon"></span>
            @else 
            <span class="loginTriger" title="My Account">
                <img class="login" src="{{ asset('frontend/img/login-icon.svg') }}" alt="login-icon">
                <div class="login-menu">
                    <div class="login-menu-item">
                        <div class="login-link"><a href="{{ URL::route('customer.main') }}" title="My Account">My Account</a></div>
                    </div>
                    <div class="login-menu-item login-menu-item-last">
                        <div class="login-link"><a href="{{ URL::route('customer.logout') }}" title="Log Out">Log Out</a></div>
                    </div>
                </div>
            </span>
            <!--<a class="loginTriger" href="{{ URL::route('customer.logout') }}" title="Logout"><img class="login" src="{{ asset('frontend/img/logout-icon.png') }}"></a>-->
            @endif
        </div>

    </div>
</div>