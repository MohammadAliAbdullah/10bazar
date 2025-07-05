@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Stock Report'),
        'parent' => __('Home'),
        'child' => __('Inventory'),
        'route' => '#',
    ])

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Dashboard Summary Boxes -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-warning pl-2">
                                <div class="inner">
                                    <h3>{{ $product }}</h3>
                                    <p>Total Product</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-dollar-sign"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-danger pl-2">
                                <div class="inner">
                                    <h3>{{ $qty }}</h3>
                                    <p>Stock Qty</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-info pl-2">
                                <div class="inner">
                                    <h3>{{ $category }}</h3>
                                    <p>Total Category</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-dollar-sign"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">
                            <div class="small-box bg-success pl-2">
                                <div class="inner">
                                    <h3>{{ $brand }}</h3>
                                    <p>Total Brand</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-dollar-sign"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    @include('Admin.include.message')

                    <!-- Stock Table -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-bordered">
                            <thead class="custom-thead">
                                <tr>
                                    <th>SI</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Brand</th>
                                    <th>QTY</th>
                                    <th>Regular Price</th>
                                    <th>Sales Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stocks as $value)
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->product->title ?? 'N/A' }}</td>
                                        <td>
                                            <img src="{{ asset('public/assets/images/products/' . ($value->product->thumb ?? 'default.jpg')) }}"
                                                width="60" height="40">
                                        </td>
                                        <td>{{ $value->product->category->title ?? 'N/A' }}</td>
                                        <td>{{ $value->product->brand->title ?? 'N/A' }}</td>
                                        <td>{{ $value->stock_qty ?? 0 }}</td>
                                        <td>{{ $value->ragular_price ?? 0 }} Tk</td>
                                        <td>{{ $value->sales_price ?? 0 }} Tk</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="card-footer clearfix">
                            <div class="float-right">
                                {{ $stocks->links() }}
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->

                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection
