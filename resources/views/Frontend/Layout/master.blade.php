<!DOCTYPE html>
@php
    $rtlLocales = ['ar', 'ur'];
    $isRtl = in_array(app()->getLocale(), $rtlLocales);
@endphp
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ $isRtl ? 'rtl' : 'ltr' }}"> --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ $isRtl ? 'ltr' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $apps->site_title ?? '' }}</title>
    <link rel="icon" type="image/png" href="{{ isset($apps->favicon) ? asset($apps->favicon) : '' }}"><!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i"><!-- css -->
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/bootstrap-4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="{{ asset('public') }}/assets/vendor/owl-carousel-2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('public') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('public') }}/assets/css/custom_style.css">
    <!-- js -->
    <script src="{{ asset('public') }}/assets/vendor/jquery-3.3.1/jquery.min.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/bootstrap-4.2.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/owl-carousel-2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('public') }}/assets/vendor/nouislider-12.1.0/nouislider.min.js"></script>
    <script src="{{ asset('public') }}/assets/js/number.js"></script>
    <script src="{{ asset('public') }}/assets/js/main.js"></script>
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/fontawesome-5.6.1/css/all.min.css">
    <!-- font - coot_assets -->
    <link rel="stylesheet" href="{{ asset('public') }}/coot_assets/fonts/coot_assets/coot_assets.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-6"></script>
    {{-- sweetalert.js --}}
    <script src="{{ asset('public') }}/assets/vendor/sweetalert/sweetalert.js"></script>
    {{-- @if ($isRtl)
        <style>
            body {
                direction: rtl;
                text-align: right;
            }

            .text-left {
                text-align: right !important;
            }

            .text-right {
                text-align: left !important;
            }
        </style>
    @endif --}}
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-97489509-6');
    </script>
    @include('include.facebook_pixel')
</head>

<body>
    <!-- quickview-modal -->
    <div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content"></div>
        </div>
    </div>
    <!-- quickview-modal / end -->
    <!-- mobilemenu -->
    @include('Frontend.Layout.partials.mobileMenu')
    <!-- mobilemenu / end -->
    <!-- site -->
    <div class="site">
        <!-- mobile site__header -->
        @include('Frontend.Layout.partials.mobileHeader')
        <!-- mobile site__header / end -->
        <!-- desktop site__header -->
        @include('Frontend.Layout.partials.header')
        <!-- desktop site__header / end -->
        <!-- site__body -->
        <div class="site__body">
            @yield('content')
        </div>
        <!-- site__body / end -->
        <!-- site__footer -->
        @include('Frontend.Layout.partials.footer')
        <!-- site__footer / end -->
    </div>
    <!-- site / end -->
    {{-- custom js - --}}
    <script>
        window.routes = {
            cartAdd: "{{ route('cart.add') }}",
            cartUpdate: "{{ route('cart.update') }}",
            cartRemove: "{{ route('cart.remove') }}",
            headerCartList: "{{ route('headerCart.list') }}",
            loader: "{{ asset('public/assets/loader.gif') }}",
            shopFilter: "{{ route('filter.products') }}", // search
            areas: "{{ route('areas') }}",
        };
    </script>
    <script src="{{ asset('public') }}/assets/js/customJs/cart.js?v={{ time() }}"></script>
    <script src="{{ asset('public') }}/assets/js/customJs/search.js?v={{ time() }}"></script>
    <script src="{{ asset('public') }}/assets/js/customJs/main.js?v={{ time() }}"></script>
    <!-- custom js - end -->
</body>

</html>
