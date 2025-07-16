@extends('Admin.layoutApp.app')

@section('content')
    @include('Admin.include.breadcrumb', [
        'page' => __('Invoice'),
        'parent' => __('Home'),
        'child' => __('Invoice'),
        'route' => '#',
    ])

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="row">
                    {{-- Order Status Update --}}
                    <div class="col-lg-6 col-md-6 mb-3">
                        <div class="callout callout-info p-3">
                            {!! Form::open(['method' => 'POST', 'route' => 'madmin.orderadmin.store']) !!}
                            <div class="d-flex align-items-center w-100" style="gap: 10px;">
                                <select class="form-control" name="status" required style="max-width: 200px;">
                                    <option value="" disabled selected>Select Status</option>
                                    <option value="Pending" {{ $order->status == 'Pending' ? 'selected' : '' }}>Pending
                                    </option>
                                    <option value="Processing" {{ $order->status == 'Processing' ? 'selected' : '' }}>
                                        Processing
                                    </option>
                                    <option value="Shipped" {{ $order->status == 'Shipped' ? 'selected' : '' }}>Shipped
                                    </option>
                                    <option value="Completed" {{ $order->status == 'Completed' ? 'selected' : '' }}>
                                        Completed
                                    </option>
                                </select>
                                <input type="hidden" name="id" value="{{ $order->id }}">
                                <button type="submit" class="btn btn-info">
                                    <i class="lni-add-files"></i>
                                    <span class="d-none d-md-inline-block">Update</span>
                                </button>
                                <a href="{{ route('madmin.invoicea4.index', $order->invoice_no) }}" target="_blank"
                                    title="Print Invoice" class="btn btn-success text-white mr-2">
                                    <i class="lni-printer"></i>
                                    <span class="d-none d-md-inline-block">Invoice</span>
                                </a>
                                <a href="{{ route('madmin.chalan.index', $order->invoice_no) }}"
                                    class="btn btn-danger text-white" title="Print Challan">
                                    <i class="lni-printer"></i>
                                    <span class="d-none d-md-inline-block">Challan</span>
                                </a>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>

                    {{-- Invoice Content --}}
                    <div class="col-12">
                        <div class="invoice p-3 mb-3 border rounded">
                            <div class="row mb-3">
                                <div class="col-12">
                                    <h4>
                                        <i class="fas fa-globe"></i> Invoice #{{ $order->invoice_no }}
                                        <small class="float-right">Date:
                                            {{ date('d-m-Y', strtotime($order->created_at)) }}</small>
                                    </h4>
                                </div>
                            </div>

                            {{-- Invoice Info --}}
                            <div class="row invoice-info mb-4">
                                <div class="col-sm-4 invoice-col">
                                    <strong>Billing Details</strong>
                                    <address>
                                        <strong>{{ $order->customer->name }}</strong><br>
                                        <b>Phone:</b> {{ $order->customer->phone }}<br>
                                        <b>Email:</b> {{ $order->customer->email }}
                                    </address>
                                </div>

                                <div class="col-sm-4 invoice-col">
                                    <strong>Shipping Details</strong>
                                    @php
                                        $ship = json_decode($order->shipping_address, true);
                                    @endphp
                                    <address>
                                        <strong>{{ $ship['name'] ?? 'N/A' }}</strong><br>
                                        <b>Address:</b> {{ $ship['address'] ?? 'N/A' }}, {{ $ship['area'] ?? '' }},
                                        {{ $ship['city'] ?? '' }}<br>
                                        <b>Phone:</b> {{ $ship['phone'] ?? 'N/A' }}
                                    </address>
                                </div>

                                <div class="col-sm-4 invoice-col">
                                    <b>Invoice #{{ $order->invoice_no }}</b><br>
                                    <b>Payment Method:</b>
                                    {{ isset($order->payment_type) ? $order->paymentType->title : $order->payment_type }}<br>
                                    <b>Payment Status:</b> {{ $order->payment_status }}<br>
                                    <b>Status:</b>
                                    @php
                                        $statusClasses = [
                                            'Pending' => 'bg-danger',
                                            'Processing' => 'bg-warning',
                                            'Shipped' => 'bg-info',
                                            'Completed' => 'bg-success',
                                        ];
                                        $statusClass = $statusClasses[$order->status] ?? 'bg-secondary';
                                    @endphp
                                    <span class="badge {{ $statusClass }} text-white p-1 rounded"
                                        style="min-width: 100px;">
                                        {{ $order->status }}
                                    </span>
                                </div>
                            </div>

                            {{-- Order Details Table --}}
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Photo</th>
                                                <th>Product</th>
                                                <th>Qty</th>
                                                <th>Price</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $orderdts = \App\Models\OrderDetails::where(
                                                    'order_id',
                                                    $order->id,
                                                )->get();
                                            @endphp
                                            @foreach ($orderdts as $index => $value)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>
                                                        <img src="{{ asset($value->product->thumb) }}" alt="Product Image"
                                                            width="40" height="40" class="img-thumbnail">
                                                    </td>
                                                    <td>{{ $value->name }}</td>
                                                    <td>{{ $value->qty }}</td>
                                                    <td>{{ number_format($value->price, 2) }}</td>
                                                    <td>{{ number_format($value->total, 2) }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="5" class="text-right">Subtotal:</th>
                                                <th>{{ number_format($order->subtotal, 2) }}</th>
                                            </tr>
                                            @if ($order->discount)
                                                <tr>
                                                    <th colspan="5" class="text-right">Discount:</th>
                                                    <th>{{ number_format($order->discount, 2) }}</th>
                                                </tr>
                                            @endif
                                            @if ($order->cupon_amount)
                                                <tr>
                                                    <th colspan="5" class="text-right">Coup. Discount:</th>
                                                    <th>{{ number_format($order->cupon_amount, 2) }}</th>
                                                </tr>
                                            @endif
                                            @if ($order->delivary_charge)
                                                <tr>
                                                    <th colspan="5" class="text-right">Delivery Charge:</th>
                                                    <th>{{ number_format($order->delivary_charge, 2) }}</th>
                                                </tr>
                                            @endif
                                            <tr>
                                                <th colspan="5" class="text-right">Total:</th>
                                                <th>{{ number_format($order->total, 2) }}</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                            {{-- Summary --}}
                            <div class="row">
                                <div class="col-md-8">
                                    {{-- Optional payment method images or notes could go here --}}
                                </div>
                                <div class="col-md-4">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">

                                        </table>
                                    </div>
                                </div>
                            </div>

                            {{-- No-print buttons or footer can be added here if needed --}}
                        </div> {{-- /.invoice --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
