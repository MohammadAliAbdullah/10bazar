@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Low Stock'),
        'parent' => __('Home'),
        'child' => __('Stock'),
        'button' => __('Stock List'),
        'button_icon' => 'lni-text-align-justify',
        'route' => '#', // update when needed
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
                                    <th>Product</th>
                                    <th>SKU</th>
                                    <th>Stock</th>
                                    <th>Regular Price</th>
                                    <th>Sales Price</th>
                                    <th style="width: 100px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($stock_low as $value)
                                    <tr>
                                        <td>{{ $value->title ?? 'N/A' }}</td>
                                        <td>{{ $value->sku ?? 'N/A' }}</td>
                                        <td>{{ $value->stock_qty ?? 0 }}</td>
                                        <td>{{ $value->ragular_price ?? 0 }} Tk</td>
                                        <td>{{ $value->sales_price ?? 0 }} Tk</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-success" title="Edit">
                                                <i class="lni-pencil-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted py-3">No low stock items found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            {{ $stock_low->links() }}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
