<!DOCTYPE html>
<html lang="en">
<head>

@include('frontend.layouts.partials.head')

</head>

<body class="body admin-panel">

@include('frontend.layouts.partials.patience')

<header>
    @include('frontend.layouts.partials.header')
</header>

<div class="sidebar-mobile-mnu">
    <a id="sidebar-menu-toggle" class="mobile-menu" href="#"><span></span></a>
    <div class="sidebar-mobile-titl fw-medium">CONTROL PANEL NAVIGATION</div>
</div>
<div class="menu-overlay"></div>

<div class="page-sidebar" data-pages="sidebar">
    @include('frontend.layouts.partials.customer.sidebar')
</div>

<div class="page {{ $page_class }}"> 
    @yield('content')    
</div>

<footer>
    @include('frontend.layouts.partials.customer.footer')
</footer>

<div>
    @include('frontend.layouts.partials.additional')
    @yield('additional')
</div>

@include('frontend.layouts.partials.foot')

@include('admin.layouts.partials.notifications')
@include('frontend.layouts.partials.analytics')                    
</body>
</html>