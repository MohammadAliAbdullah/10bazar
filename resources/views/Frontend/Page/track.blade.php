@extends('Frontend.Layout.master')

@section('content')
    @include('Frontend.components.breadcrumb', ['page' => 'Shop', 'subPage' => 'Order Track'])
    <div class="block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="card flex-grow-1 mb-0 mt-5">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h1>Track Order</h1>
                            </div>
                            <p class="mb-4 pt-2">Please enter your Order ID to track your order</p>
                            {!! Form::open(['method' => 'GET', 'route' => 'track']) !!}
                            <div class="form-group"><label for="track-order-id">Order ID</label>
                                <input id="track-order-id" name="search" type="text" class="form-control"
                                    placeholder="Order ID">
                            </div>
                            <div class="pt-3">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Track</button>
                            </div>
                            {!! Form::close() !!}
                            @if (isset($order))
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="order-detailsbox">
                                            <div class="ordertopinfo">
                                                <h3>Order Id: {{ $order->invoice_no }}
                                                    <a target="_blank"
                                                        href="{{ route('mypanel.minvoice.index', $order->invoice_no) }}"
                                                        class="btn btn-success btn-sm">
                                                        <i class="fa fa-print"></i> PDF</a>
                                                </h3>
                                            </div>
                                            <div class="statusbox">
                                                <div class="row">
                                                    <div class="col-md-3 text-center">
                                                        <div class="singlestatus active">
                                                            <div class="icon">
                                                                <i class="fa fa-file-text"></i>
                                                            </div>
                                                            <h3>Order placed</h3>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 text-center">
                                                        @if ($order->status == 'Processing' or $order->status == 'Shipped' or $order->status == 'Complete')
                                                            <div class="singlestatus active">
                                                                <div class="icon">
                                                                    <i class="fa fa-calculator"></i>
                                                                </div>
                                                                <h3>Confirmed</h3>
                                                            </div>
                                                        @else
                                                            <div class="singlestatus">
                                                                <div class="icon">
                                                                    <i class="fa fa-calculator"></i>
                                                                </div>
                                                                <h3>Confirmed</h3>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-3 text-center">
                                                        @if ($order->status == 'Shipped' or $order->status == 'Complete')
                                                            <div class="singlestatus active">
                                                                <div class="icon">
                                                                    <i class="fa fa-truck"></i>
                                                                </div>
                                                                <h3>Shipped</h3>
                                                            </div>
                                                        @else
                                                            <div class="singlestatus">
                                                                <div class="icon">
                                                                    <i class="fa fa-truck"></i>
                                                                </div>
                                                                <h3>Shipped</h3>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-3 text-center">
                                                        @if ($order->status == 'Complete')
                                                            <div class="singlestatus active">
                                                                <div class="icon">
                                                                    <i class="fa fa-calendar-check-o"></i>
                                                                </div>
                                                                <h3>Delivered</h3>
                                                            </div>
                                                        @else
                                                            <div class="singlestatus">
                                                                <div class="icon">
                                                                    <i class="fa fa-calendar-check-o"></i>
                                                                </div>
                                                                <h3>Delivered</h3>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="paddingbox">
                                                <div class="ctsummery" style="margin-bottom: 30px;">
                                                    <h4>Order Summary</h4>
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="15%"><b>Order Code:</b></td>
                                                                    <td width="50%">83733</td>
                                                                    <td><b>Order date:</b></td>
                                                                    <td>
                                                                        {{ date('d/m/Y', strtotime($order->created_at)) }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Customer:</b></td>
                                                                    <td>
                                                                        {{ $order->customer->name }}
                                                                    </td>
                                                                    <td><b>Order status:</b></td>
                                                                    <td>
                                                                        @if ($order->status == 'Pending')
                                                                            <span class="bg bg-danger p-2 text-white">
                                                                                {{ $order->status }}
                                                                            </span>
                                                                        @elseif($order->status == 'Processing')
                                                                            <span class="bg bg-warning p-2 text-white">
                                                                                {{ $order->status }}
                                                                            </span>
                                                                        @elseif($order->status == 'Shipped')
                                                                            <span class="bg bg-info p-2 text-white">
                                                                                {{ $order->status }}
                                                                            </span>
                                                                        @elseif($order->status == 'Complete')
                                                                            <span class="bg bg-success p-2 text-white">
                                                                                {{ $order->status }}
                                                                            </span>
                                                                        @else
                                                                            <span class="bg bg-dark p-2 text-white">
                                                                                {{ $order->status }}
                                                                            </span>
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Phone:</b></td>
                                                                    <td>{{ $order->customer->phone }}</td>
                                                                    <td><b>Total order amount:</b></td>
                                                                    <td>
                                                                        {{ number_format($order->total, 2) }} Tk
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>Shipping Details:</b></td>
                                                                    <td>
                                                                        @php
                                                                            $ship = json_decode(
                                                                                $order->shipping_address,
                                                                                true,
                                                                            );
                                                                        @endphp
                                                                        {{ $ship['name'] }}<br>
                                                                        {{ $ship['phone'] }}<br>
                                                                        {{ $ship['address'] }},
                                                                        {{ $ship['area'] }},
                                                                        {{ $ship['city'] }}
                                                                    </td>
                                                                    <td><b>Payment metdod:</b></td>
                                                                    <td>
                                                                        {{ $order->payment_status }}
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="ctsummery">
                                                            <h4>Order Details</h4>
                                                            <div class="table-responsive">
                                                                <table class="table table-active">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th width="50%">Product</th>
                                                                            <th>QTY</th>
                                                                            <th>Price</th>
                                                                            <th>Total</th>
                                                                        </tr>
                                                                        @php
                                                                            $sl = 1;
                                                                        @endphp
                                                                        @foreach ($orders as $value)
                                                                            <tr>
                                                                                <td>
                                                                                    {{ $sl }}
                                                                                </td>
                                                                                <td>
                                                                                    {{ $value->name }}
                                                                                </td>
                                                                                <td>
                                                                                    {{ $value->qty }}
                                                                                </td>
                                                                                <td>
                                                                                    {{ $value->price }} Tk
                                                                                </td>
                                                                                <td>
                                                                                    {{ $value->total }} Tk
                                                                                </td>
                                                                            </tr>
                                                                            @php
                                                                                $sl++;
                                                                            @endphp
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="ctsummery">
                                                            <h4>Order Amount</h4>
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><b>Subtotal</b></td>
                                                                            <td>
                                                                                {{ $order->subtotal }} Tk
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><b>Total</b></td>
                                                                            <th>
                                                                                {{ $order->total }} Tk
                                                                            </th>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection