<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>@yield('title')</title>
    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('frontend/images/ico/apple-icon-60.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('frontend/images/ico/apple-icon-76.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('frontend/images/ico/apple-icon-120.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('frontend/images/ico/apple-icon-152.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/ico/favicon.ico') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend/images/ico/favicon-32.png') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.css') }}">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/icomoon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/fonts/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/vendors/css/extensions/pace.css') }}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/colors.css') }}">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/core/menu/menu-types/vertical-overlay-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>

    
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css') }}"></head>
    @stack('css')
<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">
    <div id="app">

    @if(Request::is('admin*'))
            @include('layouts.partial.topbar')
        @endif



        @if(Request::is('admin*'))
            @include('layouts.partial.sidebar')
        @endif

            @yield('content')
        @if(Request::is('admin*'))
            @include('layouts.partial.footer')
        @endif

    </div>

    <script src="{{ asset('frontend/js/core/libraries/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/vendors/js/ui/tether.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/core/libraries/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/vendors/js/ui/perfect-scrollbar.jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/vendors/js/ui/unison.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/vendors/js/ui/blockUI.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/vendors/js/ui/jquery.matchHeight-min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/vendors/js/ui/screenfull.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/vendors/js/extensions/pace.min.js') }}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('frontend/vendors/js/charts/chart.min.js') }}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="{{ asset('frontend/js/core/app-menu.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/js/core/app.js') }}" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('frontend/js/scripts/pages/dashboard-lite.js') }}" type="text/javascript"></script>

    @stack('scripts')
</body>
</html>
