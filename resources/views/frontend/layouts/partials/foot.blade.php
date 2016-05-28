<script>
base_url = '{{ url("/") }}/';
current_url = '{{ current_url() }}'; 
</script>                           

<script src="{{ asset('frontend/js/jquery-2.1.3.min.js') }}"></script>
<script src="{{ asset('vendor/swiper/swiper.min.js') }}"></script>
<script src="{{ asset('vendor/animsition/jquery.animsition.js') }}"></script>
<script src="{{ asset('vendor/alertify-js/alertify.js') }}"></script>
<script src="{{ asset('vendor/viewport-checker/jquery.viewportchecker.min.js') }}"></script>

<!--[if lt IE 9]>
<script src="{{ asset('vendor/html5shiv/es5-shim.min.js') }}"></script>
<script src="{{ asset('vendor/html5shiv/html5shiv.min.js') }}"></script>
<script src="{{ asset('vendor/html5shiv/html5shiv-printshiv.min.js') }}"></script>
<script src="{{ asset('vendor/respond/respond.min.js') }}"></script>
<![endif]-->

<script src="{{ asset('frontend/js/helpers.js') }}"></script>
<script src="{{ asset('frontend/js/common.js') }}"></script>
@yield('scripts')

<script src="{{ asset('frontend/js/custom.js') }}"></script>