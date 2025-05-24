<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>10 Bazar</title>
    <link rel="icon" type="image/png" href="{{ asset('public') }}/coot_assets/images/favicon.png"><!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i"><!-- css -->
    <link rel="stylesheet" href="{{ asset('public') }}/coot_assets/vendor/bootstrap-4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="{{ asset('public') }}/coot_assets/vendor/owl-carousel-2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('public') }}/coot_assets/css/style.css"><!-- js -->
    <script src="{{ asset('public') }}/coot_assets/vendor/jquery-3.3.1/jquery.min.js"></script>
    <script src="{{ asset('public') }}/coot_assets/vendor/bootstrap-4.2.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('public') }}/coot_assets/vendor/owl-carousel-2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('public') }}/coot_assets/vendor/nouislider-12.1.0/nouislider.min.js"></script>
    <script src="{{ asset('public') }}/coot_assets/js/number.js"></script>
    <script src="{{ asset('public') }}/coot_assets/js/main.js"></script>
    <script src="{{ asset('public') }}/coot_assets/vendor/svg4everybody-2.1.9/svg4everybody.min.js"></script>
    <script>
        svg4everybody();
    </script>
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="{{ asset('public') }}/coot_assets/vendor/fontawesome-5.6.1/css/all.min.css">
    <!-- font - coot_assets -->
    <link rel="stylesheet" href="{{ asset('public') }}/coot_assets/fonts/coot_assets/coot_assets.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-6"></script>
    {{-- sweetalert.js --}}
    <script src="{{ asset('public') }}/coot_assets/vendor/sweetalert/sweetalert.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-97489509-6');
    </script>
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
            cartAdd       : "{{ route('cart.add') }}",
            cartUpdate    : "{{ route('cart.update') }}",
            cartRemove    : "{{ route('cart.remove') }}",
            headerCartList: "{{ route('headerCart.list') }}",
            loader        : "{{ asset('public/coot_assets/loader.gif') }}"
        };
    </script>
    <script src="{{ asset('public') }}/coot_assets/js/cart.js"></script>
    <script src="{{ asset('public') }}/coot_assets/js/search.js"></script>
    <!-- custom js - end -->
</body>

</html>