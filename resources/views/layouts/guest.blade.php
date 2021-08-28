<!doctype html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="{{ str_replace('_', '-', app()->getLocale()) }}"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}"><!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('vendors/kards/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/kards/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/kards/css/vendor.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @yield('css')

    <script src="{{ asset('vendors/kards/js/modernizr.js') }}"></script>
    <script src="{{ asset('vendors/kards/js/pace.min.js') }}"></script>
</head>
<body id="top">
    @includeIf('partials.nav')

    @yield('content')

    @includeIf('partials.footer')

    <div id="preloader">
        <div id="loader"></div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('vendors/kards/js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('vendors/kards/js/plugins.js') }}"></script>
    <script src="{{ asset('vendors/kards/js/main.js') }}"></script>

    @yield('script')
</body>
</html>
