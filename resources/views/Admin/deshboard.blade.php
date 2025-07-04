@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Dashboard'),
        'parent' => __('Home'),
        'child' => __('Dashboard'),
        'route' => '',
    ])

    <!-- Main content -->
    <div class="card-group">
        {{-- Total Categories --}}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <div class="icon"><i class="lni-layers"></i></div>
                                <p class="text-muted">Total Category</p>
                            </div>
                            <div class="ml-auto">
                                <h2 class="counter text-primary">{{ $category }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%; height: 6px;"></div>
                        </div>
                    </div>
                    <div class="col-12 text-right pt-2">
                        <a href="{{ route('madmin.categories.index') }}" class="text-primary">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Total Products --}}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <div class="icon"><i class="lni-package"></i></div>
                                <p class="text-muted">Total Product</p>
                            </div>
                            <div class="ml-auto">
                                <h2 class="counter text-success">{{ $product }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%; height: 6px;"></div>
                        </div>
                    </div>
                    <div class="col-12 text-right pt-2">
                        <a href="{{ route('madmin.products.index') }}" class="text-success">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Total Customers --}}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <div class="icon"><i class="lni-users"></i></div>
                                <p class="text-muted">Total Customer</p>
                            </div>
                            <div class="ml-auto">
                                <h2 class="counter text-warning">{{ $customer }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 85%; height: 6px;"></div>
                        </div>
                    </div>
                    <div class="col-12 text-right pt-2">
                        <a href="{{ route('madmin.customeradmin.index') }}" class="text-warning">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Total Orders --}}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex no-block align-items-center">
                            <div>
                                <div class="icon"><i class="lni-cart"></i></div>
                                <p class="text-muted">Total Order</p>
                            </div>
                            <div class="ml-auto">
                                <h2 class="counter text-danger">{{ $order }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 85%; height: 6px;"></div>
                        </div>
                    </div>
                    <div class="col-12 text-right pt-2">
                        <a href="#" class="text-danger">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Visitor Statistics</h5>
                </div>
                <div class="card-body">
                    <div id="onlineVisitor" style="height: 372px;"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="sales-info">
                                <h3>14,0000</h3>
                                <span>Overall Performance</span>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="35"
                                    style="width: 75%"></div>
                            </div>
                            <p>42% higher than last month</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="sales-info">
                                <h3>34,000</h3>
                                <span>Active Installations</span>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="35"
                                    style="width: 55%"></div>
                            </div>
                            <p>19% less than last month</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="sales-info">
                                <h3>11,279</h3>
                                <span>Total downloads</span>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="35"
                                    style="width: 35%"></div>
                            </div>
                            <p>73% higher than last month</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Recent Orders</h4>
                    <div class="selected float-right">
                        <select class="custom-select">
                            <option selected="selected" value="0">Monthly</option>
                            <option value="1">Daily</option>
                            <option value="2">Weekly</option>
                            <option value="3">Yearly</option>
                        </select>
                    </div>
                </div>
                <div class="table-overflow">
                    <table class="table table-lg">
                        <thead>
                            <tr>
                                <td class="text-dark text-semibold">Customer Name</td>
                                <td class="text-dark text-semibold">Invoice</td>
                                <td class="text-dark text-semibold">Source</td>
                                <td class="text-dark text-semibold">Billed</td>
                                <td class="text-dark text-semibold">Status</td>
                                <td class="text-dark text-semibold">Paid</td>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($orders as $order)
                                @php
                                    $customer = optional($order->customer);
                                    $name = $customer->name ?? '';
                                    $initials = collect(explode(' ', $name))
                                        ->map(fn($word) => strtoupper(substr($word, 0, 1)))
                                        ->implode('');
                                @endphp
                                <tr>
                                    <td>
                                        <div class="list-media">
                                            <div class="list-item">
                                                <div class="media-img">
                                                    <a
                                                        class="btn btn-circle btn-info text-white">{{ $initials ?: 'NA' }}</a>
                                                </div>
                                                <div class="info">
                                                    <span class="title text-semibold">
                                                        {{ $customer->name ?? 'N/A' }} {{ $customer->phone ?? 'N/A' }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $order->invoice_no }}</td>
                                    <td>Onsite</td>
                                    <td>{{ $order->total }}</td>
                                    <td>
                                        @if ($order->status === 'Pending')
                                            <span class="badge bg-danger">{{ $order->status }}</span>
                                        @else
                                            <span class="badge bg-info">{{ $order->status }}</span>
                                        @endif
                                    </td>

                                    <td>
                                        @if ($order->paid)
                                            <span class="badge bg-success">Paid</span>
                                        @else
                                            <span class="badge bg-warning">Unpaid</span>
                                        @endif
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No recent orders found.</td>
                                </tr>
                            @endforelse



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-xs-12">
            <div class="card">
                <div class="card-body text-center">
                    <h4 class="header-title">Earning Sources</h4>
                    <ul class="list-inline widget-chart m-t-20 text-center">
                        <li>
                            <h4 class=""><b>3654</b></h4>
                            <p class="text-muted m-b-0">Marketplace</p>
                        </li>
                        <li>
                            <h4 class=""><b>954</b></h4>
                            <p class="text-muted m-b-0">On Site</p>
                        </li>
                        <li>
                            <h4 class=""><b>262</b></h4>
                            <p class="text-muted m-b-0">Others</p>
                        </li>
                    </ul>
                    <div id="morris-donut-example" style="height: 240px"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="follow">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">New Product</h4>
                        <div class="card-toolbar">
                            <ul>
                                <li>
                                    <a class="text-gray" href="#">
                                        <i class="lni-more-alt"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="list-media">
                        @forelse ($products as $prod)
                            <li class="list-item">
                                <div class="client-item">
                                    <div class="media-img">
                                        <img src="{{ asset($prod->thumb) }}" alt="{{ $prod->title }}"
                                            class="img-fluid">
                                    </div>
                                    <div class="info">
                                        <span class="title text-semibold">{{ $prod->title }}</span>
                                        <div class="float-item">
                                            <button
                                                class="btn btn-common btn-rounded">{{ optional($prod->category)->title ?? 'N/A' }}</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <li class="list-item">
                                <ol class="list-media">No products found.</ol>
                            </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="follow">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">New Clients</h4>
                        <div class="card-toolbar">
                            <ul>
                                <li>
                                    <a class="text-gray" href="#">
                                        <i class="lni-more-alt"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <ul class="list-media">
                        @forelse ($customers as $customer)
                            <li class="list-item">
                                <div class="client-item">
                                    <div class="media-img">
                                        <i class="lni-user"></i>
                                        {{-- <img src="assets/img/avatar/user1.png" alt=""> --}}
                                    </div>
                                    <div class="info">
                                        <span class="title text-semibold">{{ $customer->name }}</span>
                                        <div class="float-item">
                                            <button class="btn btn-common btn-rounded">{{ $customer->phone }}</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <li class="list-item">
                                <ol class="list-media">No clients found.</ol>
                            </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">To Do Task List</h4>
                    <div class="card-toolbar">
                        <ul>
                            <li>
                                <a class="text-gray" href="#">
                                    <i class="lni-more-alt"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="list-task list-group">
                    <li class="list-group-item border-0" data-role="task">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <div class="custom-control custom-checkbox material-checkbox">
                                <input type="checkbox" class="custom-control-input" id="followUp" checked="">
                                <label class="custom-control-label" for="followUp">Follow up clients</label>
                            </div><span class="badge badge-danger">Missed</span>
                        </div>
                    </li>
                    <li class="list-group-item border-0" data-role="task">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <div class="custom-control custom-checkbox material-checkbox">
                                <input type="checkbox" class="custom-control-input" id="JoinMeeting" checked="">
                                <label class="custom-control-label" for="JoinMeeting">Join business meeting</label>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0" data-role="task">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <div class="custom-control custom-checkbox material-checkbox">
                                <input type="checkbox" class="custom-control-input" id="brainstorm" checked="">
                                <label class="custom-control-label" for="brainstorm">Discuss about new project</label>
                            </div>
                            <span class="badge badge-warning">Today</span>
                        </div>
                    </li>
                    <li class="list-group-item border-0" data-role="task">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <div class="custom-control custom-checkbox material-checkbox">
                                <input type="checkbox" class="custom-control-input" id="newFunnel">
                                <label class="custom-control-label" for="newFunnel">Design a new funnel</label>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0" data-role="task">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <div class="custom-control custom-checkbox material-checkbox">
                                <input type="checkbox" class="custom-control-input" id="makeAnewOrder">
                                <label class="custom-control-label" for="makeAnewOrder">Make a new app</label>
                            </div>
                            <span class="badge badge-success">3 weeks</span>
                        </div>
                    </li>
                    <li class="list-group-item border-0" data-role="task">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <div class="custom-control custom-checkbox material-checkbox">
                                <input type="checkbox" class="custom-control-input" id="generalThings">
                                <label class="custom-control-label" for="generalThings">Send materials</label>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>


















    {{-- main content --}}

@endsection
@section('script')
    <script>
        $(function() {
            new Morris.Bar({
                element: 'onlineVisitor',
                data: {!! json_encode($morrisChartData) !!},
                xkey: 'y',
                ykeys: ['visitors'],
                labels: ['Visitors'],
                barColors: ['#e22a6f'],
                gridLineColor: '#007bff',
                barSizeRatio: 0.5,
                hideHover: 'auto',
                resize: true
            });
        });

        // Initialize the Morris Donut chart
        new Morris.Donut({
            element: 'morris-donut-example',
            data: [
                { label: "Marketplace", value: 3654 },
                { label: "On Site", value: 954 },
                { label: "Others", value: 262 }
            ],
            colors: ['#007bff', '#e22a6f', '#6f42c1'],
            resize: true
        }); 

        // Initialize the Chart.js bar chart
    </script>
@endsection
