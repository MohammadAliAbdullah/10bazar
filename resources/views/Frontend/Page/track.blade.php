@extends('Frontend.Layout.master')

@section('content')
    @include('Frontend.components.breadcrumb', ['page' => __('shop'), 'subPage' => __('order_track')])

    <div class="block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="card flex-grow-1 mb-0 mt-5">
                        <div class="card-body">
                            <div class="card-title text-center">
                                <h1>{{ __('track_order') }}</h1>
                            </div>
                            <p class="mb-4 pt-2">{{ __('enter_order_id_to_track') }}</p>

                            {!! Form::open(['method' => 'GET', 'route' => 'track']) !!}
                                <div class="form-group">
                                    <label for="track-order-id">{{ __('order_id') }}</label>
                                    <input id="track-order-id" name="search" type="text" class="form-control" placeholder="{{ __('order_id') }}">
                                </div>
                                <div class="pt-3">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('track') }}</button>
                                </div>
                            {!! Form::close() !!}

                            @if (isset($order))
                                <div class="row mt-4">
                                    <div class="col-md-12">
                                        <div class="order-detailsbox">
                                            <div class="ordertopinfo d-flex justify-content-between align-items-center">
                                                <h3>{{ __('order_id') }}: {{ $order->invoice_no }}</h3>
                                                <a target="_blank" href="{{ route('mypanel.minvoice.index', $order->invoice_no) }}" class="btn btn-success btn-sm">
                                                    <i class="fa fa-print"></i> {{ __('pdf') }}
                                                </a>
                                            </div>

                                            <div class="statusbox my-3">
                                                <div class="row text-center">
                                                    @php
                                                        $statuses = [
                                                            'placed' => 'Order placed',
                                                            'confirmed' => 'Confirmed',
                                                            'shipped' => 'Shipped',
                                                            'delivered' => 'Delivered',
                                                        ];
                                                        $status = strtolower($order->status);
                                                    @endphp

                                                    <div class="col-md-3">
                                                        <div class="singlestatus active">
                                                            <div class="icon"><i class="fa fa-file-text"></i></div>
                                                            <h3>{{ __('order_placed') }}</h3>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="singlestatus {{ in_array($status, ['processing', 'shipped', 'complete']) ? 'active' : '' }}">
                                                            <div class="icon"><i class="fa fa-calculator"></i></div>
                                                            <h3>{{ __('confirmed') }}</h3>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="singlestatus {{ in_array($status, ['shipped', 'complete']) ? 'active' : '' }}">
                                                            <div class="icon"><i class="fa fa-truck"></i></div>
                                                            <h3>{{ __('shipped') }}</h3>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="singlestatus {{ $status == 'complete' ? 'active' : '' }}">
                                                            <div class="icon"><i class="fa fa-calendar-check-o"></i></div>
                                                            <h3>{{ __('delivered') }}</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="paddingbox">
                                                <div class="ctsummery mb-4">
                                                    <h4>{{ __('order_summary') }}</h4>
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <tbody>
                                                                <tr>
                                                                    <td width="15%"><b>{{ __('order_code') }}:</b></td>
                                                                    <td width="50%">{{ $order->invoice_no }}</td>
                                                                    <td><b>{{ __('order_date') }}:</b></td>
                                                                    <td>{{ $order->created_at->format('d/m/Y') }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>{{ __('customer') }}:</b></td>
                                                                    <td>{{ $order->customer->name }}</td>
                                                                    <td><b>{{ __('order_status') }}:</b></td>
                                                                    <td>
                                                                        <span class="badge
                                                                            {{
                                                                                $order->status == 'Pending' ? 'badge-danger' :
                                                                                ($order->status == 'Processing' ? 'badge-warning' :
                                                                                ($order->status == 'Shipped' ? 'badge-info' :
                                                                                ($order->status == 'Complete' ? 'badge-success' : 'badge-dark')))
                                                                            }}">
                                                                            {{ __($order->status) }}
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>{{ __('phone') }}:</b></td>
                                                                    <td>{{ $order->customer->phone }}</td>
                                                                    <td><b>{{ __('total_order_amount') }}:</b></td>
                                                                    <td>{{ number_format($order->total, 2) }} Tk</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><b>{{ __('shipping_details') }}:</b></td>
                                                                    <td>
                                                                        @php $ship = json_decode($order->shipping_address, true); @endphp
                                                                        {{ $ship['name'] ?? '' }}<br>
                                                                        {{ $ship['phone'] ?? '' }}<br>
                                                                        {{ $ship['address'] ?? '' }}, {{ $ship['area'] ?? '' }}, {{ $ship['city'] ?? '' }}
                                                                    </td>
                                                                    <td><b>{{ __('payment_method') }}:</b></td>
                                                                    <td>{{ $order->payment_status }}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="ctsummery">
                                                            <h4>{{ __('order_details') }}</h4>
                                                            <div class="table-responsive">
                                                                <table class="table table-active">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th width="50%">{{ __('product') }}</th>
                                                                            <th>{{ __('qty') }}</th>
                                                                            <th>{{ __('price') }}</th>
                                                                            <th>{{ __('total') }}</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($orders as $index => $value)
                                                                            <tr>
                                                                                <td>{{ $index + 1 }}</td>
                                                                                <td>{{ $value->name }}</td>
                                                                                <td>{{ $value->qty }}</td>
                                                                                <td>{{ $value->price }} Tk</td>
                                                                                <td>{{ $value->total }} Tk</td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="ctsummery">
                                                            <h4>{{ __('order_amount') }}</h4>
                                                            <div class="table-responsive">
                                                                <table class="table">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><b>{{ __('subtotal') }}</b></td>
                                                                            <td>{{ $order->subtotal }} Tk</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td><b>{{ __('total') }}</b></td>
                                                                            <td>{{ $order->total }} Tk</td>
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
