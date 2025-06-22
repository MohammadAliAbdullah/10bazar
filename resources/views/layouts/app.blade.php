<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('public/asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/asset/css/responsive.css') }}">
</head>
<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    <!-- Meta Pixel Code -->
    @include('include.facebook_pixel')
    <!-- End Meta Pixel Code -->
    <!-- Scripts -->
    <script src="{{ asset('public/asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/asset/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('public/asset/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('public/asset/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('public/asset/js/main.js') }}"></script>
    <script>
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    </script>

</body>
</html>
