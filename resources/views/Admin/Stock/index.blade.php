@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Inventory'),
        'parent' => __('Home'),
        'child' => __('Inventory'),
        'button' => __('Add Inventory'),
        'button_icon' => 'lni-plus',
        'route' => '#', // You can update this route when you implement inventory add
    ])

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('Admin.include.message')

                <div class="card">
                    <div class="card-body p-0">
                        <table class="table table-bordered mb-0">
                            <thead class="custom-thead">
                                <tr>
                                    <th style="width: 50px;">SI</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Brand</th>
                                    <th>QTY</th>
                                    <th>Regular Price</th>
                                    <th>Sales Price</th>
                                    <th style="width: 100px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($stocks as $value)
                                    <tr>
                                        <td>{{ $value->id }}</td>
                                        <td>{{ $value->title ?? 'N/A' }}</td>
                                        <td>{{ $value->category->title ?? 'N/A' }}</td>
                                        <td>{{ $value->brand->title ?? 'N/A' }}</td>
                                        <td>{{ $value->productstock->qty ?? 0 }}</td>
                                        <td>{{ $value->productstock->ragular_price ?? 0 }} Tk</td>
                                        <td>{{ $value->productstock->sales_price ?? 0 }} Tk</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-success" title="Edit">
                                                <i class="lni-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center text-muted py-3">No inventory data found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            {{ $stocks->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
