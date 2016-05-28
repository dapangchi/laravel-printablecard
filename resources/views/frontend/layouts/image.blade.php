<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
    <meta name="title" content="{{ $product_title }}" property="og:title"/>
    <meta name="description" content="{{ $product_description }}"/>
    <meta property="og:image" content="{{ asset($image_url) }}" property="og:image"/>
    <meta content="{{ $settings['social.fb_app_id'] }}" property="fb:app_id">
</head>

<body class="body">
    @yield('content')    
</body>
</html>