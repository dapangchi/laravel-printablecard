<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}" id="csrf-token"/>

<title>@yield('title')</title>

<link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/media.css') }}" rel="stylesheet">

<link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/error.css') }}" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" href="{{ asset('frontend/img/favicon.ico') }} "/>
</head>

<body class="body">
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                @yield('content')
                
                <div class="error-actions">
                    <a href="{{ url('/') }}" class="btn btn-primary btn-lg">
                        <span class="glyphicon glyphicon-home"></span>Take Me Home 
                    </a>
                    <a href="{{ url('contact') }}" class="btn btn-default btn-lg">
                        <span class="glyphicon glyphicon-envelope"></span> Contact Support 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>