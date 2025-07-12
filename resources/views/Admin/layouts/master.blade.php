<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} | Dashboard</title>

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="icon" type="image/png" href="{{ isset($apps->favicon) ? asset($apps->favicon) : '' }}">
    <!-- Stylesheets -->
    {{-- <link rel="stylesheet" href="{{ asset('public/admin/plugins/fontawesome-free/css/all.min.css') }}"> --}}
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet"
        href="{{ asset('public/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/plugins/jqvmap/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet"
        href="{{ asset('public/admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/plugins/summernote/summernote-bs4.min.css') }}">
    {{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> --}}
    <link rel="stylesheet" href="{{ asset('public/assets/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/dist/css/adminlte.min.css') }}">
    {{-- datatable css --}}
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('public') }}/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ asset('public') }}/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ asset('public') }}/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <style>
        li.current-menu-main>a,
        li.current-menu-main>ul>li.nav-item a {
            color: #fff !important;
        }

        li.current-menu-main>ul {
            display: block !important;
        }
    </style>
    @yield('style')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('Admin.layouts.header')
        @include('Admin.layouts.sidebar')

        <div class="content-wrapper">
            @yield('content')
        </div>

        @include('Admin.layouts.footer')

        <aside class="control-sidebar control-sidebar-dark"></aside>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('public/admin/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>

    <script src="{{ asset('public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/sparklines/sparkline.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">
    </script>
    <script src="{{ asset('public/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('public/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('public/admin/dist/js/adminlte.js') }}"></script>

    {{-- datatable js --}}
    <script src="{{ asset('public') }}/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('public') }}/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('public') }}/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('public') }}/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('public') }}/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('public') }}/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('public') }}/admin/plugins/jszip/jszip.min.js"></script>
    <script src="{{ asset('public') }}/admin/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('public') }}/admin/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('public') }}/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('public') }}/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('public') }}/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        window.routes = {
            productList: "{{ route('madmin.products.index') }}",
        };
    </script>
    @yield('script')

    <script>
        // Highlight current menu
        $(function() {
            const url = window.location.href;
            $(".nav-sidebar a").each(function() {
                if (url === this.href) {
                    $(this).closest("ul").closest("li").addClass("current-menu-main");
                    $(this).closest("li").addClass("current-menu");
                }
            });
        });

        // Auto-close alerts & preloader
        $(document).ready(function() {
            setTimeout(() => $(".alert").alert('close'), 4000);
            setTimeout(() => $(".page-preloader").hide(), 1000);
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#dataTable").DataTable({
                responsive: true,
                lengthChange: true,
                autoWidth: false,
                pageLength: 10,
                ordering: true,
                buttons: [{
                        extend: 'copy',
                        text: '<i class="fas fa-copy"></i>',
                        titleAttr: 'Copy'
                    },
                    {
                        extend: 'csv',
                        text: '<i class="fas fa-file-csv"></i>',
                        titleAttr: 'Export CSV'
                    },
                    {
                        extend: 'excel',
                        text: '<i class="fas fa-file-excel"></i>',
                        titleAttr: 'Export Excel'
                    },
                    {
                        extend: 'pdf',
                        text: '<i class="fas fa-file-pdf"></i>',
                        titleAttr: 'Export PDF'
                    },
                    {
                        extend: 'print',
                        text: '<i class="fas fa-print"></i>',
                        titleAttr: 'Print'
                    },
                    {
                        extend: 'colvis',
                        text: '<i class="fas fa-columns"></i>',
                        titleAttr: 'Column Visibility'
                    }
                ],
                dom: '<"row mb-3"<"col-md-3"l><"col-md-6 text-center"B><"col-md-3"f>>' +

                    '<"row"<"col-sm-12"tr>>' +
                    '<"row mt-3"<"col-md-5"i><"col-md-7"p>>',
            }).buttons().container().appendTo('#dataTable_wrapper .col-md-6');
        });

        // chart
    </script>
    

</body>

</html>
