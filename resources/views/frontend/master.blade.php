<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link rel="icon" type="image/png" href="/fontend/images/icons/favicon.png">

    <script>
      WebFontConfig = {
        google: { families: [ 'Poppins:400,500,600,700' ] }
      };
      ( function ( d ) {
        var wf = d.createElement( 'script' ), s = d.scripts[ 0 ];
        wf.src = 'js/webfont.js';
        wf.async = true;
        s.parentNode.insertBefore( wf, s );
      } )( document );
    </script>


    <link rel="stylesheet" type="text/css" href="/frontend/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="/frontend/vendor/animate/animate.min.css">

    <!-- Plugins CSS File -->
    <link rel="stylesheet" type="text/css" href="/frontend/vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="/frontend/vendor/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="/frontend/vendor/photoswipe/photoswipe.min.css">
    <link rel="stylesheet" type="text/css" href="/frontend/vendor/photoswipe/default-skin/default-skin.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="/frontend/css/demo3.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" type="text/css" href="/frontend/css/style.min.css">
<body>
    <div id="app">
        <app-frontend></app-frontend>
    </div>
    <script src="/frontend/vendor/jquery/jquery.min.js"></script>
	<script src="/frontend/vendor/sticky/sticky.min.js"></script>
	<script src="/frontend/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
	<script src="/frontend/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="/frontend/vendor/owl-carousel/owl.carousel.min.js"></script>
	<script src="/frontend/vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
	<script src="/frontend/vendor/photoswipe/photoswipe.min.js"></script>
	<script src="/frontend/vendor/photoswipe/photoswipe-ui-default.min.js"></script>
	<!-- Main JS File -->
	<script src="/frontend/js/main.min.js"></script>
    <script src="{{ asset("js/app.js") }}" defer></script>
</body>
</html>
