<nav id="sidebar">
    <!-- Sidebar Scroll Container -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="side-header side-content bg-white-op">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                    <i class="fa fa-times"></i>
                </button>
                <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                <!--<div class="btn-group pull-right">
                    <button class="btn btn-link text-gray dropdown-toggle" data-toggle="dropdown" type="button">
                        <i class="si si-drop"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right font-s13 sidebar-mini-hide">
                        <li>
                            <a data-toggle="theme" data-theme="default" tabindex="-1" href="javascript:void(0)">
                                <i class="fa fa-circle text-default pull-right"></i> <span class="font-w600">Default</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="theme" data-theme="{{ url('admins/css/themes/amethyst.min.css') }}" tabindex="-1" href="javascript:void(0)">
                                <i class="fa fa-circle text-amethyst pull-right"></i> <span class="font-w600">Amethyst</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="theme" data-theme="{{ url('admins/css/themes/city.min.css') }}" tabindex="-1" href="javascript:void(0)">
                                <i class="fa fa-circle text-city pull-right"></i> <span class="font-w600">City</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="theme" data-theme="{{ url('admins/css/themes/flat.min.css') }}" tabindex="-1" href="javascript:void(0)">
                                <i class="fa fa-circle text-flat pull-right"></i> <span class="font-w600">Flat</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="theme" data-theme="{{ url('admins/css/themes/modern.min.css') }}" tabindex="-1" href="javascript:void(0)">
                                <i class="fa fa-circle text-modern pull-right"></i> <span class="font-w600">Modern</span>
                            </a>
                        </li>
                        <li>
                            <a data-toggle="theme" data-theme="{{ url('admins/css/themes/smooth.min.css') }}" tabindex="-1" href="javascript:void(0)">
                                <i class="fa fa-circle text-smooth pull-right"></i> <span class="font-w600">Smooth</span>
                            </a>
                        </li>
                    </ul>
                </div>-->
                <a class="h5 text-white" href="{{ URL::to('admin') }}">
                    <i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 sidebar-mini-hide">Rockdesign</span>
                </a>
            </div>
            <!-- END Side Header -->
                     
            <!-- Side Content -->
            <div class="side-content">
                <ul class="nav-main">
                    <li>
                        <a @if($page == 'dashboard')class="active"@endif href="{{ URL::to('admin') }}"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                    </li>
                    
                    @if($current_user->has_any_permission(array('sales.order.view', 'sales.setting.view', 'sales.customer.view')))
                        <li class="nav-main-heading"><span class="sidebar-mini-hide">Sales</span></li>
                        <li @if($menu == 'sales')class="open"@endif>
                            @if($current_user->has_permission('sales.order.view'))
                            <a @if($page == 'order')class="active"@endif href="{{ my_route('admin.sales.order.list') }}"><i class="fa fa-cart-plus"></i><span class="sidebar-mini-hide">Orders</span></a>
                            @endif
                            
                            @if($current_user->has_permission('sales.setting.view'))
                            <a @if($page == 'taxzone')class="active"@endif href="{{ my_route('admin.sales.taxzone.list') }}"><i class="glyphicon glyphicon-map-marker"></i><span class="sidebar-mini-hide">TaxZone</span></a>
                            <a @if($page == 'coupon')class="active"@endif href="{{ my_route('admin.sales.coupon.list') }}"><i class="glyphicon glyphicon-euro"></i><span class="sidebar-mini-hide">Coupons</span></a>
                            @endif
                            
                            @if($current_user->has_permission('sales.customer.view'))
                            <a @if($page == 'customer')class="active"@endif href="{{ my_route('admin.customer.list') }}"><i class="si si-users"></i><span class="sidebar-mini-hide">Customers</span></a>
                            @endif
                        </li>
                    @endif
                    
                    @if($current_user->has_any_permission(array('product.card.view', 'product.template.view', 'product.design.view', 'product.showcase.view', 'product.logosample.view')))
                        <li class="nav-main-heading"><span class="sidebar-mini-hide">Catalog</span></li>
                        
                        @if($current_user->has_permission('product.card.view'))
                        <li @if($menu == 'business_card')class="open"@endif>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-credit-card"></i><span class="sidebar-mini-hide">Business Card</span></a>
                            <ul>
                                <li><a @if($page == 'bc_content')class="active"@endif href="{{ route('admin.card.business.content') }}">Content</a></li>
                                <li><a @if($page == 'bc_category')class="active"@endif href="{{ my_route('admin.card.business.category.list') }}">Categories</a></li>
                                <li><a @if($page == 'bc_product')class="active"@endif href="{{ my_route('admin.card.business.product.list') }}">Products</a></li>
                            </ul>
                        </li>
                        <li @if($menu == 'invitation_card')class="open"@endif>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-credit-card"></i><span class="sidebar-mini-hide">Invitation Cards</span></a>
                            <ul>
                                <li><a @if($page == 'ic_content')class="active"@endif href="{{ route('admin.card.invitation.content') }}">Content</a></li>
                                <li><a @if($page == 'ic_category')class="active"@endif href="{{ my_route('admin.card.invitation.category.list') }}">Categories</a></li>
                                <li><a @if($page == 'ic_product')class="active"@endif href="{{ my_route('admin.card.invitation.product.list') }}">Products</a></li>
                            </ul>
                        </li>
                        @endif
                        
                        @if($current_user->has_permission('product.template.view'))
                        <li @if($menu == 'business_card_template')class="open"@endif>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-credit-card"></i><span class="sidebar-mini-hide">Business Template</span></a>
                            <ul>
                                <li><a @if($page == 'bct_content')class="active"@endif href="{{ route('admin.template.business.content') }}">Content</a></li>
                                <li><a @if($page == 'bct_product')class="active"@endif href="{{ my_route('admin.template.business.product.list') }}">Products</a></li>
                            </ul>
                        </li>
                        <li @if($menu == 'invitation_card_template')class="open"@endif>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-credit-card"></i><span class="sidebar-mini-hide">Invitation Template</span></a>
                            <ul>
                                <li><a @if($page == 'ict_content')class="active"@endif href="{{ route('admin.template.invitation.content') }}">Content</a></li>
                                <li><a @if($page == 'ict_product')class="active"@endif href="{{ my_route('admin.template.invitation.product.list') }}">Products</a></li>
                            </ul>
                        </li>
                        @endif
                        
                        @if($current_user->has_permission('product.design.view'))
                        <li @if($menu == 'design_service')class="open"@endif>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-credit-card"></i><span class="sidebar-mini-hide">Design Services</span></a>
                            <ul>
                                <li><a @if($page == 'ds_content')class="active"@endif href="{{ route('admin.design.content') }}">Content</a></li>
                                <li><a @if($page == 'ds_category')class="active"@endif href="{{ my_route('admin.design.category.list') }}">Categories</a></li>
                                <li><a @if($page == 'ds_product')class="active"@endif href="{{ my_route('admin.design.product.list') }}">Products</a></li>
                            </ul>
                        </li>
                        @endif
                        
                        @if($current_user->has_permission('product.showcase.view'))
                        <li @if($menu == 'showcase')class="open"@endif>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="fa fa-credit-card"></i><span class="sidebar-mini-hide">Design Showcases</span></a>
                            <ul>
                                <li><a @if($page == 'business_showcase')class="active"@endif href="{{ my_route('admin.showcase.business.list') }}">Business</a></li>
                                <li><a @if($page == 'invitation_showcase')class="active"@endif href="{{ my_route('admin.showcase.invitation.list') }}">Invitation</a></li>
                            </ul>
                        </li> 
                        @endif
                        
                        @if($current_user->has_permission('product.logosample.view'))
                        <li><a @if($page == 'logosample')class="active"@endif href="{{ my_route('admin.logosample.list') }}"><i class="fa fa-photo"></i><span class="sidebar-mini-hide">Logo Samples</span></a></li>
                        @endif
                    @endif
                    
                    @if($current_user->has_any_permission(array('conf.content.manage')))
                    <li class="nav-main-heading"><span class="sidebar-mini-hide">Content Management</span></li>
                    <li @if($menu == 'cms')class="open"@endif>
                        <a @if($page == 'slide')class="active"@endif href="{{ my_route('admin.cms.slide.list') }}"><i class="fa fa-photo"></i><span class="sidebar-mini-hide">Slideshows</span></a>
                        <a @if($page == 'homeslider')class="active"@endif href="{{ route('admin.cms.homdeslider.compose') }}"><i class="fa fa-photo"></i><span class="sidebar-mini-hide">Homepage Sliders</span></a>
                        <a @if($page == 'page')class="active"@endif href="{{ my_route('admin.cms.page.list') }}"><i class="glyphicon glyphicon-file"></i><span class="sidebar-mini-hide">Pages</span></a>
                    </li>
                    @endif
                    
                    @if($current_user->has_any_permission(array('conf.setting.manage', 'conf.member.manage')))
                    <li class="nav-main-heading"><span class="sidebar-mini-hide">Configuration</span></li>                    
                    
                        @if($current_user->has_permission('conf.setting.manage'))
                        <li @if($menu == 'setting')class="open"@endif>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-wrench"></i><span class="sidebar-mini-hide">Settings</span></a>
                            <ul>
                                <li><a @if($page == 'website')class="active"@endif href="{{ route('admin.setting.website') }}">Website</a></li>
                                <li><a @if($page == 'email')class="active"@endif href="{{ route('admin.setting.email') }}">Email</a></li>
                                <li><a @if($page == 'sales')class="active"@endif href="{{ route('admin.setting.sales') }}">Sales</a></li>
                                <!--<li><a @if($page == 'social')class="active"@endif href="{{ URL::to('admin/setting/social') }}">Social</a></li>-->
                            </ul>
                        </li>
                        <li>
                            <a @if($page == 'permission')class="active"@endif href="{{ my_route('admin.permission.list') }}"><i class="si si-grid"></i><span class="sidebar-mini-hide">Permissions</span></a>
                        </li>
                        @endif
                        
                        @if($current_user->has_permission('conf.member.manage'))
                        <li>
                            <a @if($page == 'member')class="active"@endif href="{{ my_route('admin.member.list') }}"><i class="si si-users"></i><span class="sidebar-mini-hide">Members</span></a>
                        </li>
                        <li>
                            <a @if($page == 'member_permission')class="active"@endif href="{{ my_route('admin.member.permission') }}"><i class="si si-equalizer"></i><span class="sidebar-mini-hide">Member Permissions</span></a>
                        </li>
                        @endif
                    @endif
                    
                </ul>
            </div>
            <!-- END Side Content -->
        </div>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>