@extends('Admin.layouts.master')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Products'),
        'parent' => __('Home'),
        'child' => __('Products'),
        'route' => route('madmin.products.create'),
    ])
    {{-- <div class="content-header">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Products</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('madmin.products.create') }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-plus"></i> Product
                    </a>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        @include('Admin.include.message')
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="productDataTable" class="table table-bordered table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>SI</th>
                                            <th>Title</th>
                                            <th>Slug</th>
                                            <th>Thumb</th>
                                            <th>Category</th>
                                            <th>Brand</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script src="{{ asset('public') }}/assets/js/customJs/productDataTable.js?v={{ time() }}"></script>
@endsection
