<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}" id="csrf-token"/>

<title>@if($page_title != ''){{ $page_title }} | @endif {{ $settings['site.title'] }}</title>

@section('meta_keywords')
<meta name="keywords" content="{!! $settings['site.keywords'] !!}"/>
@show

@section('meta_author')
<meta name="author" content="{{ $settings['site.author'] }}"/>
@show

@section('meta_description')
<meta name="description" content="{!! $settings['site.description'] !!}"/>
@show

<link href="https://cloud.typography.com/6639174/649008/css/fonts.css" rel="stylesheet"/>
<link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

<link href="{{ asset('vendor/swiper/swiper.min.css') }}" rel="stylesheet" />
<link href="{{ asset('vendor/animsition/animsition.css') }}" rel="stylesheet" >
<link href="{{ asset('vendor/alertify-js/alertify.css') }}" rel="stylesheet" >
<link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

<link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/media.css') }}" rel="stylesheet">

@yield('styles')

<link href="{{ asset('frontend/css/custom.css') }}" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" href="{{ asset('frontend/img/favicon.ico') }} "/>