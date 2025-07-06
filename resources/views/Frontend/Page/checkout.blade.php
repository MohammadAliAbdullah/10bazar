@extends('Frontend.Layout.master')

@section('content')
    @include('Frontend.components.breadcrumb', ['page' => __('Checkout'), 'subPage' => __('Checkout')])

    <div class="checkout block">
        <div class="container">
            {!! Form::open(['method' => 'POST', 'url' => '/pay', 'class' => 'form-horizontal']) !!}
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="alert alert-lg alert-primary">
                        {{ __('Returning customer?') }}
                        <a href="#">{{ __('Click here to login') }}</a>
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="card mb-lg-0">
                        <div class="card-body">
                            <h3 class="card-title">{{ __('Delivery Details') }}</h3>
                            @include('include.message')
                            <div id="deliveryAddress" style="display: none;">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="zone_id">{{ __('Zone') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        {!! Form::select('zone_id', [] + $zones, null, [
                                            'class' => 'form-control',
                                            'id' => 'zone_id',
                                        ]) !!}
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="state_id">{{ __('District') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        {!! Form::select('state_id', [] + $states, null, [
                                            'class' => 'form-control',
                                            'id' => 'state_id',
                                        ]) !!}
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="city_id">{{ __('Area') }}
                                            <span class="text-danger">*</span>
                                        </label>
                                        {!! Form::select('city_id', [] + $cities, null, [
                                            'class' => 'form-control',
                                            'id' => 'city_id',
                                        ]) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group border border-primary p-3">
                                <span id="zoneName">{{ $zone->name }}</span> => <span
                                    id="stateName">{{ $state->name }}</span> => <span
                                    id="cityName">{{ $city->name }}</span>
                                <button type="button" class="btn btn-primary btn-xs float-right" id="editDeliveryAddress">
                                    <i class="fa fa-edit"></i>
                                </button>
                            </div>
                            <div class="form-group border border-primary pl-2" id="shippingMethod">
                                @php
                                    $firstMethod = $shippingMethods->first();
                                @endphp
                                @foreach ($shippingMethods as $method)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input deliveryFee" type="radio" name="delivery_fee"
                                            id="shipping_method{{ $method->id }}" value="{{ $method->base_fee }}"
                                            {{ $method->id == $firstMethod->id ? 'checked' : '' }}>
                                        <label class="form-check-label" for="shipping_method{{ $method->id }}">
                                            {{ $method->name }} {{ $method->estimated_days }} {{ $method->base_fee }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            <h3 class="card-title">{{ __('Shipping Details') }}</h3>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="checkout-first-name">{{ __('Name') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'id' => 'checkout-first-name']) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="checkout-last-name">{{ __('Phone') }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    {!! Form::number('phone', null, ['class' => 'form-control', 'required', 'id' => 'checkout-last-name']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="checkout-street-address">{{ __('Address') }}
                                    <span class="text-danger">*</span>
                                </label>
                                {!! Form::textarea('address', null, [
                                    'class' => 'form-control',
                                    'id' => 'checkout-street-address',
                                    'rows' => 3,
                                    'required',
                                ]) !!}
                            </div>
                        </div>
                        <div class="card-divider"></div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-xl-5 mt-4 mt-lg-0">
                    <div class="card mb-0">
                        <div class="card-body">
                            <h3 class="card-title">{{ __('Your Order') }}</h3>
                            <table class="checkout__totals">
                                <thead class="checkout__totals-header">
                                    <tr>
                                        <th>{{ __('Product') }}</th>
                                        <th>{{ __('Total') }}</th>
                                    </tr>
                                </thead>
                                <tbody class="checkout__totals-products">
                                    @forelse ($cartCollection as $item)
                                        <tr>
                                            <td>{{ $item->name ?? __('N/A') }}</td>
                                            <td>{{ formatPrice($item->getPriceSum() ?? 0, true, true) }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="2">{{ __('No items in cart.') }}</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                                <tbody class="checkout__totals-subtotals">
                                    <tr>
                                        <th>{{ __('Subtotal') }}</th>
                                        <td><span id="cartSubTotal">{{ Cart::getSubTotal() ?? 0 }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>{{ __('Shipping Fee') }}</th>
                                        <td><span
                                                id="shippingFee">{{ formatPrice($firstMethod->base_fee ?? 0, false, true) }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>{{ __('Total') }}</th>
                                        <td><span
                                                id="grandTotal">{{ number_format(Cart::getTotal() + $firstMethod->base_fee ?? '0', 2) }}</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="payment-methods">
                                <ul class="payment-methods__list">
                                    @foreach ($paymentMethods as $method)
                                        <li class="payment-methods__item">
                                            <label class="payment-methods__item-header">
                                                <span class="payment-methods__item-radio input-radio">
                                                    <span class="input-radio__body">
                                                        <input class="input-radio__input" name="payment_method"
                                                            type="radio" value="{{ $method->code . '@' . $method->id }}">
                                                        <span class="input-radio__circle"></span>
                                                    </span>
                                                </span>
                                                <span class="payment-methods__item-title">{{ $method->title }}</span>
                                            </label>
                                            <div class="payment-methods__item-container">
                                                <div class="payment-methods__item-description text-muted">
                                                    {{ __('Pay with :method', ['method' => $method->title]) }}
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <div class="checkout__agree form-group">
                                <div class="form-check">
                                    <span class="form-check-input input-check">
                                        <span class="input-check__body">
                                            <input class="input-check__input" type="checkbox" id="checkout-terms">
                                            <span class="input-check__box"></span>
                                            <svg class="input-check__icon" width="9px" height="7px">
                                                <use xlink:href="images/sprite.svg#check-9x7"></use>
                                            </svg>
                                        </span>
                                    </span>
                                    <label class="form-check-label" for="checkout-terms">
                                        {{ __('I have read and agree to the website') }}
                                        <a target="_blank"
                                            href="terms-and-conditions.html">{{ __('terms and conditions') }}</a>*
                                    </label>
                                </div>
                            </div>

                            <button type="submit"
                                class="btn btn-primary btn-xl btn-block">{{ __('Place Order') }}</button>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
