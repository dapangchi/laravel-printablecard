<div id="appMenu" class="sidebar-overlay-slide from-top"></div>
<div class="sidebar-header"></div>
<div class="sidebar-menu">
    <div class="profile-wrap">
        <span class="profile-thumb"><img src="{{ resize_image($current_customer->picture, 48, 48, 'crop') }}" alt="profile-thumb"></span>
        <span class="profile-name">{{ strtoupper($current_customer->full_name()) }}</span>
    </div>
    <div class="scroll-wrapper">
        <ul class="menu-items scroll-content scroll-scrolly_visible">
            <li class="@if($page_menu=='home') active @endif">
                <a href="{{ route('customer.home') }}"><span class="title">My Account</span></a>
                <span class="icon-thumbnail"><i class="fa fa-home"></i></span>
            </li>
            <li class="@if($page_menu=='tracking') active @endif">
                <a href="{{ route('customer.tracking') }}"><span class="title">Track My Orders</span></a>
                <span class="icon-thumbnail"><i class="fa fa-paste"></i></span>
            </li>
            <li class="@if($page_menu=='orders') active @endif">
                <a href="{{ route('customer.orders') }}"><span class="title">Order History</span></a>
                <span class="icon-thumbnail"><i class="fa fa-list"></i></span>
            </li>
            <!--<li class="@if($page_menu=='messages') active @endif">
                <a href="{{ route('customer.messages') }}"><span class="title">Messages</span></a>
                <span class="icon-thumbnail"><i class="fa fa-comments-o"></i></span>
            </li>-->
            <li class="@if($page_menu=='setting') active @endif">
                <a href="{{ route('customer.setting') }}"><span class="title">Setting</span></a>
                <span class="icon-thumbnail"><i class="fa fa-gears"></i></span>
            </li>
            <li class="@if($page_menu=='help') active @endif">
                <a href="{{ route('customer.home') }}"><span class="title">Help</span></a>
                <span class="icon-thumbnail"><i class="fa fa-info"></i></span>
            </li>s
        </ul>
    </div>
    <div class="clearfix"></div>
</div>
<!-- END SIDEBAR MENU -->