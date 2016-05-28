<!DOCTYPE html>
<!--[if IE 9]><html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
<head>

@include('admin.layouts.partials.head')
    
@yield('styles')

</head>
<body>

<div class="content overflow-hidden">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
            @yield('content')
        </div>
    </div>
</div>
    
<!-- Footer -->
<div class="push-10-t text-center animated fadeInUp">
    <small class="text-muted font-w600"><span class="js-year-copy"></span> &copy; {{ $settings['site.name'] }}</small>
</div>
<!-- END Footer -->

@include('admin.layouts.partials.foot')

@include('admin.layouts.partials.notifications')
<!-- Page JS Plugins + Page JS Code -->
@yield('scripts')

</body>
</html>
