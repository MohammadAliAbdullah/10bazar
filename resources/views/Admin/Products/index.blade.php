@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Products'),
        'parent' => __('Home'),
        'child' => __('Products'),
        'button' => __('Add Product'),
        'button_icon' => 'lni lni-cart-full',
        'route' => route('madmin.products.create'),
    ])
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
                                    <thead class="custom-thead">
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
    <script src="{{ asset('public') }}/assets/js/customJs/productDatatable.js?v={{ time() }}"></script>
@endsection
