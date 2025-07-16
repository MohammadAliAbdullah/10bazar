@extends('Admin.layoutApp.app')

@section('content')
    {{-- Breadcrumb --}}
    @include('Admin.include.breadcrumb', [
        'page' => __('Complete Orders'),
        'parent' => __('Home'),
        'child' => __('Sale'),
        'button' => __('All Orders'),
        'button_icon' => 'lni lni-cart',
        'route' => '#',
        'multipleBtn' => [
            [
                'name' => 'Pending Order',
                'class' => 'btn-info',
                'icon' => 'lni-text-align-justify',
                'route' => route('madmin.orders.pending'),
            ],
            [
                'name' => 'Complete Order',
                'class' => 'btn-dark',
                'icon' => 'lni-text-align-justify',
                'route' => route('madmin.orders.complete'),
            ],
            [
                'name' => 'All Orders',
                'class' => 'btn-success',
                'icon' => 'lni-text-align-justify',
                'route' => route('madmin.orderadmin.index'),
            ],
            [
                'name' => 'Complete Sale',
                'class' => 'btn-secondary',
                'icon' => 'lni-text-align-justify',
                'route' => route('madmin.orders.complete'),
            ],
        ],
    ])

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @include('Admin.include.message')

                <div class="card">
                    {{-- <div class="card-header">
                        <h5 class="mb-0">Completed Sales List</h5>
                    </div> --}}
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead class="custom-thead">
                                    <tr>
                                        <th>SI</th>
                                        <th>Invoice</th>
                                        <th width="20%">Customer Info</th>
                                        <th width="25%">Products</th>
                                        <th>Order Details</th>
                                        <th>Date</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $page = request()->get('page') ?? 1;
                                    @endphp
                                    @forelse ($orders as $key => $value)
                                        <tr>
                                            <td>{{ $page ? ($page - 1) * 10 + $key + 1 : $key + 1 }}</td>
                                            <td>{{ $value->invoice_no }}</td>
                                            <td>
                                                <strong>Name:</strong> {{ $value->customer->name ?? 'N/A' }}<br>
                                                <strong>Phone:</strong> {{ $value->customer->phone ?? 'N/A' }}<br>
                                                <strong>Email:</strong> {{ $value->customer->email ?? 'N/A' }}<br>
                                                <strong>Address:</strong> {{ $value->customer->address ?? 'N/A' }}
                                            </td>
                                            <td>
                                                @foreach (\App\Models\OrderDetails::where('order_id', $value->id)->get() as $product)
                                                    {{ $product->name }}
                                                    <hr class="my-1">
                                                @endforeach
                                            </td>
                                            <td>
                                                <strong>Sub Total:</strong> {{ $value->subtotal }}<br>
                                                @if ($value->discount > 0)
                                                    <strong>Discount:</strong> {{ $value->discount }}<br>
                                                @endif
                                                @if ($value->cupon_amount > 0)
                                                    <strong>Coup. Discount:</strong> {{ $value->cupon_amount }}<br>
                                                @endif
                                                @if ($value->delivary_charge > 0)
                                                    <strong>Delivery:</strong> {{ $value->delivary_charge }}<br>
                                                @endif
                                                <strong>Total:</strong> {{ $value->total }}
                                            </td>
                                            <td>
                                                {{ $value->created_at->diffForHumans() }}<br>
                                                @php
                                                    $badgeClass = match ($value->status) {
                                                        'Pending' => 'danger',
                                                        'Processing' => 'warning',
                                                        'Shipped' => 'info',
                                                        default => 'success',
                                                    };
                                                @endphp
                                                <span
                                                    class="badge bg-{{ $badgeClass }} mt-1">{{ $value->status }}</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="d-flex justify-content-center flex-wrap">
                                                    <a href="{{ route('madmin.orderadmin.show', $value->id) }}"
                                                        class="btn btn-sm btn-info m-1">
                                                        <i class="lni lni-eye"></i>
                                                    </a>
                                                    {!! Form::open(['method' => 'DELETE', 'route' => ['madmin.local-sale.destroy', $value->id]]) !!}
                                                    <button type="submit" class="btn btn-sm btn-danger m-1"
                                                        onclick="return confirm('Do you want to delete this sale?')">
                                                        <i class="lni lni-trash"></i>
                                                    </button>
                                                    {!! Form::close() !!}
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center text-muted">No complete sales found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    @if ($orders->hasPages())
                        <div class="card-footer">
                            <div class="d-flex justify-content-end">
                                {{ $orders->links() }}
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
