<div class="card border-0">
    <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center">
        <h3 class="mb-0 text-primary">
            <i class="fas fa-shopping-basket"></i> Order #{{ $order->invoice_no }}
        </h3>
        <a href="{{ route('mypanel.minvoice.index', $order->invoice_no) }}" class="btn btn-outline-primary"
            target="_blank">
            <i class="fas fa-file-pdf"></i>
        </a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <div
                    class="card text-center h-60 mb-3 {{ $order->status == 'Pending' ? 'bg-light' : 'bg-success text-white' }}">
                    <div class="card-body p-2">
                        <div class="fas fa-file-alt fa-lg"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div
                    class="card text-center h-60 mb-3 {{ in_array($order->status, ['Processing', 'Shipped', 'Complete']) ? 'bg-success text-white' : 'bg-light' }}">
                    <div class="card-body p-2">
                        <div class="fas fa-check-circle fa-lg"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div
                    class="card text-center h-60 mb-3 {{ in_array($order->status, ['Shipped', 'Complete']) ? 'bg-success text-white' : 'bg-light' }}">
                    <div class="card-body p-2">
                        <div class="fas fa-truck fa-lg"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div
                    class="card text-center h-60 mb-3 {{ $order->status == 'Complete' ? 'bg-success text-white' : 'bg-light' }}">
                    <div class="card-body p-2">
                        <div class="fas fa-box-open fa-lg"></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="bg-white p-2 rounded shadow-sm mb-2">
            <h4 class="mb-4 text-secondary"><i class="fas fa-info-circle"></i> Order Summary</h4>
            <div class="table-responsive">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <th scope="row" class="border-0">Order Code:</th>
                            <td class="border-0">83733</td>
                            <th scope="row" class="border-0">Order Date:</th>
                            <td class="border-0">{{ date('d/m/Y', strtotime($order->created_at)) }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Customer:</th>
                            <td>{{ $order->customer->name }}</td>
                            <th scope="row">Order Status:</th>
                            <td>
                                @if ($order->status == 'Pending')
                                    <span class="badge badge-pill badge-danger">{{ $order->status }}</span>
                                @elseif($order->status == 'Processing')
                                    <span class="badge badge-pill badge-warning">{{ $order->status }}</span>
                                @elseif($order->status == 'Shipped')
                                    <span class="badge badge-pill badge-info">{{ $order->status }}</span>
                                @elseif($order->status == 'Complete')
                                    <span class="badge badge-pill badge-success">{{ $order->status }}</span>
                                @else
                                    <span class="badge badge-pill badge-secondary">{{ $order->status }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Phone:</th>
                            <td>{{ $order->customer->phone }}</td>
                            <th scope="row">Total Amount:</th>
                            <td>{{ number_format($order->total, 2) }} Tk</td>
                        </tr>
                        <tr>
                            <th scope="row">Shipping Details:</th>
                            <td>
                                @php
                                    $ship = json_decode($order->shipping_address, true);
                                @endphp
                                {{ $ship['name'] }}<br>
                                {{ $ship['phone'] }}<br>
                                {{ $ship['address'] }}, {{ $ship['area'] }}, {{ $ship['city'] }}
                            </td>
                            <th scope="row">Payment Method:</th>
                            <td>{{ $order->payment_status }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 mb-4">
                <div class="bg-white p-4 rounded shadow-sm">
                    <h4 class="mb-4 text-secondary"><i class="fas fa-list"></i> Order Details</h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">QTY</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $sl = 1; @endphp
                                @foreach ($orders as $value)
                                    <tr>
                                        <th scope="row">{{ $sl }}</th>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->qty }}</td>
                                        <td>{{ $value->price }} Tk</td>
                                        <td>{{ $value->total }} Tk</td>
                                    </tr>
                                    @php $sl++; @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="bg-white p-4 rounded shadow-sm">
                    <h4 class="mb-4 text-secondary"><i class="fas fa-money-bill-wave"></i> Order Amount</h4>
                    <div class="table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th scope="row">Subtotal:</th>
                                    <td>{{ $order->subtotal }} Tk</td>
                                </tr>
                                <tr>
                                    <th scope="row">Total:</th>
                                    <td class="font-weight-bold">{{ $order->total }} Tk</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
