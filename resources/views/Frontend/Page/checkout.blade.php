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
                            <h3 class="card-title">{{ __('Shipping Details') }}</h3>
                            @include('include.message')

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="checkout-first-name">{{ __('Name') }} <span class="text-danger">*</span></label>
                                    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'id' => 'checkout-first-name']) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="checkout-last-name">{{ __('Phone') }} <span class="text-danger">*</span></label>
                                    {!! Form::number('phone', null, ['class' => 'form-control', 'required', 'id' => 'checkout-last-name']) !!}
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="checkout-country">{{ __('District') }} <span class="text-danger">*</span></label>
                                {!! Form::select('city', ['' => __('Select District')] + $districts, null, [
                                    'class' => 'form-control',
                                    'id' => 'district',
                                    'required',
                                ]) !!}
                            </div>

                            <div class="form-group border p-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="location" id="inDhaka" value="inDhaka" required>
                                    <label class="form-check-label" for="inDhaka">{{ __('In Dhaka') }}</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="location" id="outDhaka" value="outDhaka">
                                    <label class="form-check-label" for="outDhaka">{{ __('Out of Dhaka') }}</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="checkout-company-name">{{ __('Area') }} <span class="text-danger">*</span></label>
                                <select name="area" id="sub_cat" class="form-control input-sm" required>
                                    <option value="">{{ __('Select Area') }}</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="checkout-street-address">{{ __('Address') }} <span class="text-danger">*</span></label>
                                {!! Form::textarea('address', null, ['class' => 'form-control', 'id' => 'checkout-street-address', 'rows' => 3, 'required']) !!}
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
                                            <td>{{ $item->getPriceSum() ?? '0' }}</td>
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
                                        <td><span id="subTotal">{{ Cart::getSubTotal() ?? '0' }}</span></td>
                                    </tr>
                                    <tr>
                                        <th>{{ __('Shipping Fee') }}</th>
                                        <td><span id="shippingFee">0</span></td>
                                    </tr>
                                    <tr>
                                        <th>{{ __('Total') }}</th>
                                        <td><span id="grandTotal">{{ Cart::getTotal() ?? '0' }}</span></td>
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
                                                        <input class="input-radio__input" name="payment_method" type="radio" value="{{ $method->code . '@' . $method->id }}">
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
                                        <a target="_blank" href="terms-and-conditions.html">{{ __('terms and conditions') }}</a>*
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-xl btn-block">{{ __('Place Order') }}</button>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
