<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $apps->site_title }}</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public') }}/assets/css/bootstrap.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public') }}/assets/fonts/line-icons.css">
    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset('public') }}/assets/css/morris.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public') }}/assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public') }}/assets/css/responsive.css">
</head>

<body>
    <div class="app header-default side-nav-dark">
        <div class="layout">
            <!-- Header START -->
            @include('Admin.layoutApp.header')
            <!-- Header END -->
            <!-- Side Nav START -->
            @include('Admin.layoutApp.sidebar')
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content">
                    @yield('content')
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                @include('Admin.layoutApp.footer')

                <!-- Footer END -->

            </div>
            <!-- Page Container END -->
        </div>
    </div>

    <!-- Preloader -->
    {{-- <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div> --}}
    <!-- End Preloader -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('public') }}/assets/js/jquery-min.js"></script>
    <script src="{{ asset('public') }}/assets/js/popper.min.js"></script>
    <script src="{{ asset('public') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('public') }}/assets/js/jquery.app.js"></script>
    <script src="{{ asset('public') }}/assets/js/main-admin.js"></script>

    <!--Morris Chart-->
    <script src="{{ asset('public') }}/assets/js/morris.min.js"></script>
    <script src="{{ asset('public') }}/assets/js/raphael-min.js"></script>
    <script src="{{ asset('public') }}/assets/js/dashborad1.js"></script>

</body>

</html>
