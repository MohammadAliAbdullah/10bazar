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
    {{-- datatable css --}}
    <link rel="stylesheet" href="{{ asset('public') }}/datatables/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('public') }}/datatables/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('public') }}/datatables/datatables-buttons/css/buttons.bootstrap4.min.css">
    <style>
        /* Target DataTables buttons */
        #dataTable_wrapper .dt-buttons .btn,
        #dataTable_wrapper .dt-buttons button {
            background-color: #e22a6f !important;
            color: white !important;
            border: none !important;
            margin-right: 5px;
        }

        #dataTable_wrapper .dt-buttons .btn:hover,
        #dataTable_wrapper .dt-buttons button:hover {
            background-color: #c91f5d !important;
            color: #fff !important;
        }

        .custom-thead {
            background-color: #e22a6f;
        }

        .dt-buttons {
            background-color: #e22a6f;
        }

        .custom-thead th {
            color: white !important;
        }
    </style>
</head>

<body>
    {{-- <div class="app header-default side-nav-dark"> --}}
    <div id="app-body"
        class="app header-default side-nav-dark {{ session('sidebar_folded') ? 'side-nav-folded' : '' }}">
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
    {{-- <script src="{{ asset('public') }}/assets/js/popper.min.js"></script> --}}
    <script src="{{ asset('public') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('public') }}/assets/js/jquery.app.js"></script>


    <!--Morris Chart-->
    <script src="{{ asset('public') }}/assets/js/morris.min.js"></script>
    <script src="{{ asset('public') }}/assets/js/raphael-min.js"></script>
    {{-- <script src="{{ asset('public') }}/assets/js/dashborad1.js"></script> --}}
    {{-- datatable js --}}
    <script src="{{ asset('public') }}/datatables/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('public') }}/datatables/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('public') }}/datatables/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('public') }}/datatables/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('public') }}/datatables/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('public') }}/datatables/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('public') }}/datatables/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('public') }}/datatables/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('public') }}/datatables/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        window.routes = {
            productList: "{{ route('madmin.products.index') }}",
        };
    </script>
    @yield('script')
    <script>
        $(document).ready(function() {
            $('#sidenav-toggler').on('click', function(e) {
                e.preventDefault();

                let isFolded = $('#app-body').hasClass('side-nav-folded');

                $.ajax({
                    url: "{{ route('toggle.sidebar') }}",
                    method: "POST",
                    data: {
                        folded: isFolded,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        console.log('Sidebar state saved:', response.status);
                    }
                });
            });
        });
    </script>
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
                        text: '<i class="lni-clipboard"></i>',
                        titleAttr: 'Copy'
                    },
                    {
                        extend: 'csv',
                        text: '<i class="lni-files"></i>',
                        titleAttr: 'Export CSV'
                    },
                    // {
                    //     extend: 'excel',
                    //     text: '<i class="lni lni-file"></i> Excel',
                    //     titleAttr: 'Export Excel'
                    // },
                    // {
                    //     extend: 'pdf',
                    //     text: '<i class="lni lni-pdf"></i> PDF',
                    //     titleAttr: 'Export PDF'
                    // },
                    {
                        extend: 'print',
                        text: '<i class="lni lni-printer"></i>',
                        titleAttr: 'Print'
                    },
                    {
                        extend: 'colvis',
                        text: ' <i class="lni lni-cog"></i>',
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
