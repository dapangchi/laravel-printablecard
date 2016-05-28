<!DOCTYPE html>
<html lang="en">
<head>

@include('frontend.layouts.partials.head')

</head>

<body class="body">

@include('frontend.layouts.partials.patience')

<header>
    @include('frontend.layouts.partials.header')
</header>
<div class="menu-overlay"></div>

<div class="page {{ $page_class }}"> 
    @yield('content')    
</div>

<footer>
    @include('frontend.layouts.partials.footer')
</footer>

<div>
    @include('frontend.layouts.partials.additional')
    @yield('additional')
</div>

<!--If customer is not logged in, add login modal-->
@if(!isset($current_customer->id))
@include('frontend.layouts.partials.loginModal')
@endif
<!--login modal-->


@include('frontend.layouts.partials.foot')

@include('admin.layouts.partials.notifications')
                    
@if(!isset($current_customer->id))
<script>
ajaxLoginUrl = "{{ URL::route('customer.ajax.login') }}";
</script>
<script src="{{ asset('frontend/js/pages/login_modal.js') }}"></script>
@endif

@include('frontend.layouts.partials.analytics')

</body>
</html>