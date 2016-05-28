<!DOCTYPE html>
<!--[if IE 9]><html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
<head>
    @include('admin.layouts.partials.head')
    
    @yield('styles')
</head>
<body>

<div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
    <!-- Side Overlay-->
    
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    @include('admin.layouts.partials.leftbar')
    <!-- END Sidebar -->

    <!-- Header -->
    @include('admin.layouts.partials.nav')
    <!-- END Header -->

    <!-- Main Container --> 
    <div id="main-container">
        @yield('content')
    </div>
    <!-- END Main Container -->
    
    <!-- Footer -->
    @include('admin.layouts.partials.footer')
    <!-- END Footer -->
</div>

@yield('additional')

@include('admin.layouts.partials.foot')

@include('admin.layouts.partials.notifications')

<!-- Page JS Plugins + Page JS Code -->
@yield('scripts')

</body>
</html>