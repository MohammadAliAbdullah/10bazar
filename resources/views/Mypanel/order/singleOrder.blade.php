<style>
    .status-circle {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: white;
    }

    .status-line {
        height: 2px;
        background-color: #dee2e6;
        flex: 1;
    }

    .status-step {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }
</style>

<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Order Id: {{ $order->invoice_no }}</h5>
            <a href="{{ route('mypanel.minvoice.index', $order->invoice_no) }}" class="btn btn-sm btn-outline-success">
                <i class="fas fa-file-pdf"></i> PDF
            </a>
        </div>
        <div class="card-body">
            <div class="d-flex justify-content-between status-step">
                <div class="text-center">
                    <div class="status-circle {{ $order->status == 'Pending' ? 'bg-success' : 'bg-secondary' }} mb-2">1
                    </div>
                    <div>Order placed</div>
                </div>
                <div class="status-line"></div>
                <div class="text-center">
                    <div
                        class="status-circle {{ in_array($order->status, ['Processing', 'Shipped', 'Complete']) ? 'bg-success' : 'bg-secondary' }} mb-2">
                        2</div>
                    <div>Confirmed</div>
                </div>
                <div class="status-line"></div>
                <div class="text-center">
                    <div
                        class="status-circle {{ in_array($order->status, ['Shipped', 'Complete']) ? 'bg-success' : 'bg-secondary' }} mb-2">
                        3</div>
                    <div>Shipped</div>
                </div>
                <div class="status-line"></div>
                <div class="text-center">
                    <div class="status-circle {{ $order->status == 'Complete' ? 'bg-success' : 'bg-secondary' }} mb-2">4
                    </div>
                    <div>Delivered</div>
                </div>
            </div>

            <div class="table-responsive mb-4">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th colspan="2" class="bg-light">Order Summary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Order Code:</strong></td>
                            <td>{{ $order->invoice_no }}</td>
                        </tr>
                        <tr>
                            <td><strong>Order date:</strong></td>
                            <td>{{ date('d/m/Y', strtotime($order->created_at)) }}</td>
                        </tr>
                        <tr>
                            <td><strong>Customer:</strong></td>
                            <td>{{ $order->customer->name }}</td>
                        </tr>
                        <tr>
                            <td><strong>Order status:</strong></td>
                            <td>
                                @if ($order->status == 'Pending')
                                    <span class="badge badge-danger">Pending</span>
                                @elseif($order->status == 'Processing')
                                    <span class="badge badge-warning">Processing</span>
                                @elseif($order->status == 'Shipped')
                                    <span class="badge badge-info">Shipped</span>
                                @elseif($order->status == 'Complete')
                                    <span class="badge badge-success">Complete</span>
                                @else
                                    <span class="badge badge-secondary">{{ $order->status }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Phone:</strong></td>
                            <td>{{ $order->customer->phone }}</td>
                        </tr>
                        <tr>
                            <td><strong>Total order amount:</strong></td>
                            <td>{{ number_format($order->total, 2) }} Tk</td>
                        </tr>
                        <tr>
                            <td><strong>Shipping Details:</strong></td>
                            <td>
                                @php
                                    $shipping = json_decode($order->shipping_address ?? '{}');
                                @endphp
                                {{ $shipping->name ?? 'N/A' }}<br>
                                {{ $shipping->phone ?? 'N/A' }}<br>
                                {{ $shipping->address ?? 'N/A' }}<br>
                                {{ $shipping->city_name ?? 'N/A' }},
                                {{ $shipping->state_name ?? 'N/A' }}
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Payment method:</strong></td>
                            <td>{{ $order->payment_status }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>Product</th>
                                    <th>QTY</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $sl = 1; @endphp
                                @foreach ($orders as $value)
                                    <tr>
                                        <td>{{ $sl }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->qty }}</td>
                                        <td>{{ $value->price }}</td>
                                        <td>{{ $value->total }}</td>
                                    </tr>
                                    @php $sl++; @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th colspan="2">Order Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Subtotal</strong></td>
                                    <td>{{ $order->subtotal }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Delivery Charge</strong></td>
                                    <td>{{ $order->delivary_charge }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Total</strong></td>
                                    <td>{{ $order->total }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
