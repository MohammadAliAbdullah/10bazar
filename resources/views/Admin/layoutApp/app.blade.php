<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $apps->site_title }}</title>
    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{ isset($apps->favicon) ? asset($apps->favicon) : '' }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}">

    <!-- Fonts and Icons -->
    <link rel="stylesheet" href="{{ asset('public/assets/fonts/line-icons.css') }}">

    <!-- Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/morris.css') }}">

    <!-- Main Styles -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/responsive.css') }}">

    <!-- DataTables CSS -->
    <link rel="stylesheet"
        href="{{ asset('public/assets/datatables/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('public/assets/datatables/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('public/assets/datatables/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('public/assets/summernote/summernote-bs4.min.css') }}">
    <!-- colorpicker -->
    <link rel="stylesheet" href="{{ asset('public/assets/colorpicker/css/bootstrap-colorpicker.min.css') }}" />
    <style>
        #dataTable_wrapper .dt-buttons .btn,
        #dataTable_wrapper .dt-buttons button,
        #productDataTable_wrapper .dt-buttons .btn,
        #productDataTable_wrapper .dt-buttons button {
            background-color: #e22a6f !important;
            color: white !important;
            border: none !important;
            margin-right: 5px;
        }

        #dataTable_wrapper .dt-buttons .btn:hover,
        #dataTable_wrapper .dt-buttons button:hover,
        #productDataTable_wrapper .dt-buttons .btn:hover,
        #productDataTable_wrapper .dt-buttons button:hover {
            background-color: #c91f5d !important;
        }

        .custom-thead {
            background-color: #e22a6f;
        }

        .custom-thead th {
            color: white !important;
        }

        .dt-buttons {
            background-color: #e22a6f;
        }
    </style>
</head>

<body>
    <div id="app-body"
        class="app header-default side-nav-dark {{ session('sidebar_folded') ? 'side-nav-folded' : '' }}">
        <div class="layout">
            <!-- Header -->
            @include('Admin.layoutApp.header')
            <!-- Sidebar -->
            @include('Admin.layoutApp.sidebar')
            <!-- Page Container -->
            <div class="page-container">
                <!-- Main Content -->
                <div class="main-content">
                    @yield('content')
                </div>
                <!-- Footer -->
                @include('Admin.layoutApp.footer')
            </div>
        </div>
    </div>
    <!-- Preloader -->
    {{-- <div id="preloader">
        <div class="loader" id="loader-1"></div>
    </div> --}}
    <!-- End Preloader -->

    <!-- Core JS -->
    <script src="{{ asset('public/assets/js/jquery-min.js') }}"></script>
    <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/jquery.app.js') }}"></script>

    <!-- Morris Chart -->
    <script src="{{ asset('public/assets/js/raphael-min.js') }}"></script>
    <script src="{{ asset('public/assets/js/morris.min.js') }}"></script>

    <!-- DataTables JS -->
    <script src="{{ asset('public/assets/datatables/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/assets/datatables/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('public/assets/datatables/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('public/assets/datatables/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('public/assets/datatables/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('public/assets/datatables/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('public/assets/datatables/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('public/assets/datatables/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('public/assets/datatables/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('public') }}/assets/js/customJs/commonDatatable.js?v={{ time() }}"></script>
    <!-- summernote -->
    <script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/summernote/summernote-bs4.min.js') }}"></script>
    <!-- color picker -->
    <script src="{{ asset('public/assets/colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <!-- Routes for JS -->
    <script>
        window.routes = {
            productList  : "{{ route('madmin.products.index') }}",
            sidebarToggle: "{{ route('toggle.sidebar') }}",
        };
    </script>
    @yield('script')
    <script>
        $(document).ready(function() {
            // Sidebar fold toggle and save state
            $('#sidenav-toggler').on('click', function(e) {
                e.preventDefault();
                let isFolded = $('#app-body').hasClass('side-nav-folded');
                $.post(window.routes.sidebarToggle, {
                    folded: isFolded,
                    _token: "{{ csrf_token() }}"
                }, function(response) {
                    console.log('Sidebar state saved:', response.status);
                });
            });
        });
    </script>
</body>

</html>
