<!DOCTYPE html>
<html lang="en">
<head>

@include('frontend.layouts.partials.head')

</head>

<body class="body">

@include('frontend.layouts.partials.patience')

<div class="page {{ $page_class }}"> 
    @yield('content')    
</div>

</body>
</html>