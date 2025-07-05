@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('All Sale'),
        'parent' => __('Home'),
        'child' => __('Sale'),
        'button' => null, // No add button here, but you can add if needed
        'route' => '#',
    ])

    <section class="content">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            {!! Form::open(['method' => 'GET', 'route' => 'madmin.sales.reports', 'class' => 'row g-2 align-items-center']) !!}
                            <div class="col-md-4">
                                {!! Form::date('start', request('start'), ['class' => 'form-control', 'required']) !!}
                            </div>
                            <div class="col-md-4">
                                {!! Form::date('end', request('end'), ['class' => 'form-control', 'required']) !!}
                            </div>
                            <div class="col-md-4 d-flex gap-2">
                                <button type="submit" class="btn btn-info">Search</button>
                                <a href="{{ route('madmin.sales.reports') }}" class="btn btn-danger">Reset</a>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>

            {{-- Summary --}}
            <div class="row mb-3">
                <div class="col-lg-3 col-6">
                    <h5>Total Amount: <strong>{{ number_format($amount, 2) }} Tk</strong></h5>
                </div>
                <div class="col-lg-3 col-6">
                    <h5>Total Orders: <strong>{{ $qty }}</strong></h5>
                </div>
            </div>

            @include('Admin.include.message')

            <div class="card">
                <div class="card-body p-0 table-responsive">
                    <table class="table table-bordered table-hover mb-0">
                        <thead class="custom-thead">
                            <tr>
                                <th>SI</th>
                                <th>Invoice</th>
                                <th class="d-none d-md-table-cell" width="20%">Customer Information</th>
                                <th class="d-none d-md-table-cell" width="30%">Product</th>
                                <th>Order Details</th>
                                <th>Date</th>
                                <th class="text-nowrap" width="10%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $order->invoice_no }}</td>
                                    <td class="d-none d-md-table-cell" class="text-break">
                                        <b>Name:</b> {{ $order->customer->name }}<br>
                                        <b>Phone:</b> {{ $order->customer->phone }}<br>
                                        <b>Email:</b> {{ $order->customer->email }}<br>
                                        <b>Address:</b> {{ $order->customer->address }}
                                    </td>
                                    <td class="d-none d-md-table-cell">
                                        @php
                                            $products = \App\Models\OrderDetails::where('order_id', $order->id)->pluck('name');
                                        @endphp
                                        <ul class="mb-0 pl-3" style="list-style-type: disc;">
                                            @foreach($products as $productName)
                                                <li style="font-size: 0.9rem;">{{ $productName }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td class="text-break">
                                        <b>Sub Total:</b> {{ number_format($order->subtotal, 2) }} Tk<br>
                                        <b>Discount:</b> {{ number_format($order->discount, 2) }} Tk<br>
                                        <b>Total:</b> {{ number_format($order->total, 2) }} Tk
                                    </td>
                                    <td>
                                        {{ $order->created_at->diffForHumans() }}
                                        @php
                                            $statusClass = match ($order->status) {
                                                'Pending' => 'bg-danger',
                                                'Processing' => 'bg-warning',
                                                'Shipped' => 'bg-info',
                                                default => 'bg-success',
                                            };
                                        @endphp
                                        <div class="{{ $statusClass }} text-white p-1 rounded mt-1 text-center">
                                            {{ $order->status }}
                                        </div>
                                    </td>
                                    <td class="text-nowrap">
                                        <a href="{{ route('madmin.orderadmin.show', $order->id) }}" class="btn btn-info btn-sm m-1" title="View Details">
                                            <i class="lni-eye"></i>
                                        </a>
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['madmin.local-sale.destroy', $order->id], 'style' => 'display:inline-block']) !!}
                                            <button type="submit" class="btn btn-danger btn-sm m-1" onclick="return confirm('Do you want to Delete?')" title="Delete">
                                                <i class="lni-trash"></i>
                                            </button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    <div class="float-right">
                        {{ $orders->links() }}
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
