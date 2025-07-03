@extends('Admin.layouts.master')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Visitor'),
        'parent' => __('Home'),
        'child' => __('Visitor'),
        'route' => '',
    ])
    <!-- Content Header (Page header) -->
    {{-- <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Visitor</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Visitor</a></li>
                        <li class="breadcrumb-item active">Site visitor</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div> --}}
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3></h3>
                                    <p>Total Product</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-dollar-sign"></i>
                                </div>

                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3></h3>

                                    <p>Stock Qty</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3> </h3>
                                    <p>Total Category</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-dollar-sign"></i>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3></h3>
                                    <p>Total Brand</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-dollar-sign"></i>
                                </div>

                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <div class="card-body p-0">
                        <table class="table mt-4">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>IP Address</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Browser</th>
                                    <th>Platform</th>
                                    <th>Device</th>
                                    <th>Referer</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($visitors as $key => $visitor)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $visitor->ip }}</td>
                                        <td>{{ $visitor->country }}</td>
                                        <td>{{ $visitor->city }}</td>
                                        <td>{{ $visitor->browser }}</td>
                                        <td>{{ $visitor->platform }}</td>
                                        <td>{{ $visitor->device }}</td>
                                        <td>{{ $visitor->referer }}</td>
                                        <td>{{ $visitor->created_at->format('Y-m-d') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="row">
                    <div class="col-md-6 offset-md-2 m-0 float-right">
                        {{ $visitors->render() }}
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
