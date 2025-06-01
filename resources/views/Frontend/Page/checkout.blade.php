@extends('Frontend.Layout.master')

@section('content')
    @include('Frontend.components.breadcrumb', ['page' => 'Checkout', 'subPage' => 'Checkout'])

    <div class="checkout block">
        <div class="container">
            {!! Form::open(['method' => 'POST', 'url' => '/pay', 'class' => 'form-horizontal']) !!}
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="alert alert-lg alert-primary">Returning customer? <a href="#">Click here to login</a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="card mb-lg-0">
                        <div class="card-body">
                            <h3 class="card-title">Shipping Details</h3>
                            @include('include.message')
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="checkout-first-name">Name <span class="text-danger">*</span></label>
                                    {!! Form::text('name', null, ['class' => 'form-control', 'required', 'id' => 'checkout-first-name']) !!}
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="checkout-last-name">Phone <span class="text-danger">*</span></label>
                                    {!! Form::number('phone', null, ['class' => 'form-control', 'required', 'id' => 'checkout-last-name']) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="checkout-country">District <span class="text-danger">*</span> </label>
                                {!! Form::select('city', ['0' => 'Select District'] + $districts, null, [
                                    'class' => 'form-control',
                                    'id' => 'district',
                                    'required',
                                ]) !!}
                            </div>
                            <div class="form-group">
                                <label for="checkout-company-name">Area <span class="text-danger">*</span></label>
                                <select name="area" id="sub_cat" class="form-control input-sm" required>
                                    <option value="0"></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="checkout-street-address">Address <span class="text-danger">*</span></label>
                                {!! Form::textarea('address', null, ['class' => 'form-control', 'id' => 'checkout-street-address', 'rows' => 3, 'required']) !!}
                            </div>
                        </div>
                        <div class="card-divider"></div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-5 mt-4 mt-lg-0">
                    <div class="card mb-0">
                        <div class="card-body">
                            <h3 class="card-title">Your Order</h3>
                            <table class="checkout__totals">
                                <thead class="checkout__totals-header">
                                    <tr>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody class="checkout__totals-products">
                                    @if ($cartCollection && count($cartCollection) > 0)
                                        @foreach ($cartCollection as $item)
                                            @if ($item)
                                                <tr>
                                                    <td>{{ $item->name ?? 'N/A' }}</td>
                                                    <td>TK.{{ $item->getPriceSum() ?? '0' }}</td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="2">No items in cart.</td>
                                        </tr>
                                    @endif
                                </tbody>
                                <tbody class="checkout__totals-subtotals">
                                    <tr>
                                        <th>Subtotal</th>
                                        <td>TK.{{ Cart::getSubTotal() ?? '0' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Total</th>
                                        <td>TK.{{ Cart::getTotal() ?? '0' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="payment-methods">
                                <ul class="payment-methods__list">
                                    <li class="payment-methods__item payment-methods__item--active">
                                        <label class="payment-methods__item-header">
                                            <span class="payment-methods__item-radio input-radio">
                                                <span class="input-radio__body">
                                                    <input class="input-radio__input" name="payment_method" type="radio"
                                                        value="cash_on_delivery" checked>
                                                    <span class="input-radio__circle"></span>
                                                </span>
                                            </span>
                                            <span class="payment-methods__item-title">Cash on delivery</span>
                                        </label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">Pay with cash upon
                                                delivery.</div>
                                        </div>
                                    </li>
                                    {{-- <li class="payment-methods__item">
                                        <label class="payment-methods__item-header">
                                            <span class="payment-methods__item-radio input-radio">
                                                <span class="input-radio__body">
                                                    <input class="input-radio__input" name="payment_method" type="radio"
                                                        value="ssl">
                                                    <span class="input-radio__circle"></span>
                                                </span>
                                            </span>
                                            <span class="payment-methods__item-title">Online Payment</span>
                                        </label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">Pay via SSLCommerz.
                                            </div>
                                        </div>
                                    </li> --}}
                                    <li class="payment-methods__item">
                                        <label class="payment-methods__item-header">
                                            <span class="payment-methods__item-radio input-radio">
                                                <span class="input-radio__body">
                                                    <input class="input-radio__input" name="payment_method" type="radio"
                                                        value="Bkash">
                                                    <span class="input-radio__circle"></span>
                                                </span>
                                            </span>
                                            <span class="payment-methods__item-title">Bkash</span>
                                        </label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">Pay via Bkash.</div>
                                        </div>
                                    </li>
                                    {{-- <li class="payment-methods__item">
                                        <label class="payment-methods__item-header">
                                            <span class="payment-methods__item-radio input-radio">
                                                <span class="input-radio__body">
                                                    <input class="input-radio__input" name="payment_method" type="radio"
                                                        value="Rocket">
                                                    <span class="input-radio__circle"></span>
                                                </span>
                                            </span>
                                            <span class="payment-methods__item-title">Rocket</span>
                                        </label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">Pay via Rocket.</div>
                                        </div>
                                    </li> --}}
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
                                    <label class="form-check-label" for="checkout-terms">I have read and agree to the
                                        website <a target="_blank" href="terms-and-conditions.html">terms and
                                            conditions</a>*</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-xl btn-block">Place Order</button>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection