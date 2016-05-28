<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>@if(isset($page_title) && $page_title != '') {{ $page_title }} | @endif {{ $settings['site.title'] }} </title>
                                                                                                                                   
<meta name="robots" content="noindex, nofollow">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}" id="csrf-token"/>

<!-- Icons -->
<!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
<link rel="shortcut icon" href="{{ asset('admins/img/favicons/favicon.png') }} "/>

<link rel="icon" type="image/png" href="{{ asset('admins/img/favicons/favicon-16x16.png') }}" sizes="16x16">
<link rel="icon" type="image/png" href="{{ asset('admins/img/favicons/favicon-32x32.png') }}" sizes="32x32">
<link rel="icon" type="image/png" href="{{ asset('admins/img/favicons/favicon-96x96.png') }}" sizes="96x96">
<link rel="icon" type="image/png" href="{{ asset('admins/img/favicons/favicon-160x160.png') }}" sizes="160x160">
<link rel="icon" type="image/png" href="{{ asset('admins/img/favicons/favicon-192x192.png') }}" sizes="192x192">

<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('admins/img/favicons/apple-touch-icon-57x57.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('admins/img/favicons/apple-touch-icon-60x60.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('admins/img/favicons/apple-touch-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admins/img/favicons/apple-touch-icon-76x76.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('admins/img/favicons/apple-touch-icon-114x114.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('admins/img/favicons/apple-touch-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('admins/img/favicons/apple-touch-icon-144x144.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('admins/img/favicons/apple-touch-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admins/img/favicons/apple-touch-icon-180x180.png') }}">
<!-- END Icons -->

<!-- Stylesheets -->
<!-- Web fonts -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

<!-- Bootstrap and OneUI CSS framework -->
<link rel="stylesheet" href="{{ asset('admins/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('admins/css/oneui.min.css') }}" id="css-main">

<link rel="stylesheet" href="{{ asset('vendor/animsition/animsition.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/alertify-js/alertify.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/bootstrap-sweetalert/sweet-alert.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/bootstrap-datepicker/bootstrap-datepicker3.min.css') }}">

<link rel="stylesheet" href="{{ asset('admins/css/custom.css') }}">