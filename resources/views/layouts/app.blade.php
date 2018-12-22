<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        @if(isset($page_title))
            <title>{{ $page_title }} - {{ env('APP_NAME') }}</title>
        @else
            <title>{{ env('APP_NAME') }}</title>
        @endif

        <meta name="keywords" content="" />
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

        <!-- Vendor Styles -->
        <link href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('vendor/themify/themify.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('vendor/scrollbar/scrollbar.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('vendor/swiper/swiper.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('vendor/cubeportfolio/css/cubeportfolio.min.css') }}" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ URL::asset('css/global/global.css') }}" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('img/favicon.ico') }}" type="image/x-icon">
        <link rel="apple-touch-icon" href="{{ URL::asset('img/apple-touch-icon.png') }}">
    </head>
    <!-- End Head -->

    <body>
        @include('layouts.navbar')
        @yield('content')
        @include('layouts.footer')

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

        @include('layouts.js')
    </body>
</html>