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
    <link rel="stylesheet" href="{{ asset('public') }}/assets/vendor/owl-carousel-2.3.4/assets/owl.carousel.min.css">
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
    <!-- font - assets -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-6"></script>
    {{-- sweetalert.js --}}
    <script src="{{ asset('public') }}/assets/vendor/sweetalert/sweetalert.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-97489509-6');
    </script>
    <style>
        .topbar {
            background-color: {{ $theme->topbar_bg }};
            color: {{ $theme->topbar_text }};
        }

        .nav-panel,
        .mobile-header__panel {
            background-color: {{ $theme->navbar_bg }};
            color: {{ $theme->navbar_text }};
        }

        .btn-primary {
            background-color: {{ $theme->button_bg }};
            border-color: {{ $theme->button_border }};
            color: {{ $theme->button_text }};
        }

        .page-item.active .page-link {
            background-color: {{ $theme->pagination_bg }};
            color: {{ $theme->pagination_text }};
            border-color: {{ $theme->pagination_bg }};
        }

        .action-buttons .cart,
        .action-buttons .eye {
            border: 1px solid {{ $theme->cart_border }};
            background-color: {{ $theme->cart_bg }};
            color: {{ $theme->cart_text }};
        }
    </style>
    {{-- <style>
        .topbar{
            background-color: #f7f7f7;
            color: black;
        }
        .nav-panel{
            background-color: #ffd333;
            color: black;
        }
        .mobile-header__panel{
            background-color: #ffd333;
            color: black;
        }
        #productGirdView .action-buttons .cart,
        #productGirdView .action-buttons .eye {
            border: #088178 1px solid;
            background-color: #088178;
            color: white;
        }

        #productListView .action-buttons .cart:hover,
        #productListView .action-buttons .eye:hover {
            border: #088178 1px solid;
            background-color: #088178;
            color: #fff;
        }

        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #088178;
            border-color: #088178;
        }
        .btn-primary, .btn-primary.disabled, .btn-primary:disabled {
            color: #fff;
            background-color: #ffd333;
            border-color: #ffd333;
        }
    </style> --}}
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
            baseUrl: "{{ url('/') }}",
            layout: "{{ request()->get('style', 'grid') }}",
            order: "{{ request()->get('order', 'default') }}",
            limit: "{{ request()->get('limit', 20) }}",
            cartAdd: "{{ route('cart.add') }}",
            cartUpdate: "{{ route('cart.update') }}",
            cartRemove: "{{ route('cart.remove') }}",
            headerCartList: "{{ route('headerCart.list') }}",
            loader: "{{ asset('public/assets/loader.gif') }}",
            shopFilter: "{{ route('filter.products') }}", // search
            states: "{{ route('states') }}",
            cities: "{{ route('cities') }}",
        };
    </script>
    <script src="{{ asset('public') }}/assets/js/customJs/cart.js?v={{ time() }}"></script>
    <script src="{{ asset('public') }}/assets/js/customJs/search.js?v={{ time() }}"></script>
    <script src="{{ asset('public') }}/assets/js/customJs/main.js?v={{ time() }}"></script>
    <!-- custom js - end -->
</body>

</html>
