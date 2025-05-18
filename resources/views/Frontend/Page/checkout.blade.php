@extends('Frontend.Layout.master')

@section('content')
    @include('Frontend.components.breadcrumb', ['page' => 'Checkout', 'subPage' => 'Checkout'])

    <div class="checkout block">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="alert alert-lg alert-primary">Returning customer? <a href="#">Click here to
                            login</a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="card mb-lg-0">
                        <div class="card-body">
                            <h3 class="card-title">Billing details</h3>
                            <div class="form-row">
                                <div class="form-group col-md-6"><label for="checkout-first-name">First
                                        Name</label> <input type="text" class="form-control" id="checkout-first-name"
                                        placeholder="First Name"></div>
                                <div class="form-group col-md-6"><label for="checkout-last-name">Last
                                        Name</label> <input type="text" class="form-control" id="checkout-last-name"
                                        placeholder="Last Name"></div>
                            </div>
                            <div class="form-group"><label for="checkout-company-name">Company Name <span
                                        class="text-muted">(Optional)</span></label> <input type="text"
                                    class="form-control" id="checkout-company-name" placeholder="Company Name">
                            </div>
                            <div class="form-group"><label for="checkout-country">Country</label> <select
                                    id="checkout-country" class="form-control">
                                    <option>Select a country...</option>
                                    <option>United States</option>
                                    <option>Russia</option>
                                    <option>Italy</option>
                                    <option>France</option>
                                    <option>Ukraine</option>
                                    <option>Germany</option>
                                    <option>Australia</option>
                                </select></div>
                            <div class="form-group"><label for="checkout-street-address">Street Address</label>
                                <input type="text" class="form-control" id="checkout-street-address"
                                    placeholder="Street Address">
                            </div>
                            <div class="form-group"><label for="checkout-address">Apartment, suite, unit etc.
                                    <span class="text-muted">(Optional)</span></label> <input type="text"
                                    class="form-control" id="checkout-address"></div>
                            <div class="form-group"><label for="checkout-city">Town / City</label> <input type="text"
                                    class="form-control" id="checkout-city"></div>
                            <div class="form-group"><label for="checkout-state">State / County</label> <input type="text"
                                    class="form-control" id="checkout-state"></div>
                            <div class="form-group"><label for="checkout-postcode">Postcode / ZIP</label> <input
                                    type="text" class="form-control" id="checkout-postcode"></div>
                            <div class="form-row">
                                <div class="form-group col-md-6"><label for="checkout-email">Email
                                        address</label> <input type="email" class="form-control" id="checkout-email"
                                        placeholder="Email address"></div>
                                <div class="form-group col-md-6"><label for="checkout-phone">Phone</label>
                                    <input type="text" class="form-control" id="checkout-phone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check"><span class="form-check-input input-check"><span
                                            class="input-check__body"><input class="input-check__input" type="checkbox"
                                                id="checkout-create-account"> <span class="input-check__box"></span> <svg
                                                class="input-check__icon" width="9px" height="7px">
                                                <use xlink:href="images/sprite.svg#check-9x7"></use>
                                            </svg> </span></span><label class="form-check-label"
                                        for="checkout-create-account">Create an account?</label></div>
                            </div>
                        </div>
                        <div class="card-divider"></div>
                        <div class="card-body">
                            <h3 class="card-title">Shipping Details</h3>
                            <div class="form-group">
                                <div class="form-check"><span class="form-check-input input-check"><span
                                            class="input-check__body"><input class="input-check__input" type="checkbox"
                                                id="checkout-different-address"> <span class="input-check__box"></span> <svg
                                                class="input-check__icon" width="9px" height="7px">
                                                <use xlink:href="images/sprite.svg#check-9x7"></use>
                                            </svg> </span></span><label class="form-check-label"
                                        for="checkout-different-address">Ship to a different address?</label>
                                </div>
                            </div>
                            <div class="form-group"><label for="checkout-comment">Order notes <span
                                        class="text-muted">(Optional)</span></label>
                                <textarea id="checkout-comment" class="form-control" rows="4"></textarea>
                            </div>
                        </div>
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
                                    <tr>
                                        <td>Electric Planer Brandix KL370090G 300 Watts × 2</td>
                                        <td>$1,398.00</td>
                                    </tr>
                                    <tr>
                                        <td>Undefined Tool IRadix DPS3000SY 2700 watts × 1</td>
                                        <td>$849.00</td>
                                    </tr>
                                    <tr>
                                        <td>Brandix Router Power Tool 2017ERXPK × 3</td>
                                        <td>$3,630.00</td>
                                    </tr>
                                </tbody>
                                <tbody class="checkout__totals-subtotals">
                                    <tr>
                                        <th>Subtotal</th>
                                        <td>$5,877.00</td>
                                    </tr>
                                    <tr>
                                        <th>Store Credit</th>
                                        <td>$-20.00</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td>$25.00</td>
                                    </tr>
                                </tbody>
                                <tfoot class="checkout__totals-footer">
                                    <tr>
                                        <th>Total</th>
                                        <td>$5,882.00</td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="payment-methods">
                                <ul class="payment-methods__list">
                                    <li class="payment-methods__item payment-methods__item--active"><label
                                            class="payment-methods__item-header"><span
                                                class="payment-methods__item-radio input-radio"><span
                                                    class="input-radio__body"><input class="input-radio__input"
                                                        name="checkout_payment_method" type="radio" checked="checked">
                                                    <span class="input-radio__circle"></span> </span></span><span
                                                class="payment-methods__item-title">Direct bank
                                                transfer</span></label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">Make your
                                                payment directly into our bank account. Please use your Order ID
                                                as the payment reference. Your order will not be shipped until
                                                the funds have cleared in our account.</div>
                                        </div>
                                    </li>
                                    <li class="payment-methods__item"><label class="payment-methods__item-header"><span
                                                class="payment-methods__item-radio input-radio"><span
                                                    class="input-radio__body"><input class="input-radio__input"
                                                        name="checkout_payment_method" type="radio"> <span
                                                        class="input-radio__circle"></span> </span></span><span
                                                class="payment-methods__item-title">Check
                                                payments</span></label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">Please
                                                send a check to Store Name, Store Street, Store Town, Store
                                                State / County, Store Postcode.</div>
                                        </div>
                                    </li>
                                    <li class="payment-methods__item"><label class="payment-methods__item-header"><span
                                                class="payment-methods__item-radio input-radio"><span
                                                    class="input-radio__body"><input class="input-radio__input"
                                                        name="checkout_payment_method" type="radio"> <span
                                                        class="input-radio__circle"></span> </span></span><span
                                                class="payment-methods__item-title">Cash on
                                                delivery</span></label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">Pay with
                                                cash upon delivery.</div>
                                        </div>
                                    </li>
                                    <li class="payment-methods__item"><label class="payment-methods__item-header"><span
                                                class="payment-methods__item-radio input-radio"><span
                                                    class="input-radio__body"><input class="input-radio__input"
                                                        name="checkout_payment_method" type="radio"> <span
                                                        class="input-radio__circle"></span> </span></span><span
                                                class="payment-methods__item-title">PayPal</span></label>
                                        <div class="payment-methods__item-container">
                                            <div class="payment-methods__item-description text-muted">Pay via
                                                PayPal; you can pay with your credit card if you don’t have a
                                                PayPal account.</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="checkout__agree form-group">
                                <div class="form-check"><span class="form-check-input input-check"><span
                                            class="input-check__body"><input class="input-check__input" type="checkbox"
                                                id="checkout-terms"> <span class="input-check__box"></span> <svg
                                                class="input-check__icon" width="9px" height="7px">
                                                <use xlink:href="images/sprite.svg#check-9x7"></use>
                                            </svg> </span></span><label class="form-check-label" for="checkout-terms">I
                                        have read and agree to the website <a target="_blank"
                                            href="terms-and-conditions.html">terms and
                                            conditions</a>*</label></div>
                            </div><button type="submit" class="btn btn-primary btn-xl btn-block">Place
                                Order</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <section class="main-section-area">
        <div class="container-fluid">
            @include('include.message')
            {!! Form::open(['method' => 'POST', 'url' => '/pay', 'class' => 'form-horizontal']) !!}
            <div class="row">
                <div class="col-md-5 col-sm-12 col-12 ">
                    <div class="product-area">
                        <h3>Shipping Address</h3>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                {!! Form::label('name', 'Name', ['class' => 'col-form-label']) !!}
                                {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                            <div class="col-sm-6">
                                {!! Form::label('name', 'Phone', ['class' => 'col-form-label']) !!}
                                {!! Form::number('phone', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                {!! Form::label('name', 'District', ['class' => 'col-form-label']) !!}
                                {!! Form::select('city', ['0' => 'Select District'] + $districts, null, [
                                    'class' => 'form-control',
                                    'id' => 'district',
                                    'required',
                                ]) !!}
                            </div>
                            <div class="col-sm-6">
                                {!! Form::label('name', 'Area', ['class' => 'col-form-label']) !!}
                                <select name="area" id="sub_cat" class="form-control input-sm">
                                    <option value="0"></option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                {!! Form::label('name', 'Address', ['class' => 'col-form-label']) !!}
                                {!! Form::textarea('address', null, ['class' => 'form-control', 'id' => 'receiver', 'rows' => 3]) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <img src="{{ asset('public/images/') }}/cod.jpg" class="img-fluid" width="60">
                                <label>
                                    <input id='watch-me' name='payment_method' value="cash_on_delivery" type='radio'
                                        checked />Check On Delivary
                                </label><br>
                                {{--													{!! Form::radio('payment_method', 'cash_on_delivery', true); !!} Check On Delivary <br> --}}
                                <img src="{{ asset('public/images/') }}/sslcommerz.jpg" class="img-fluid" width="60">
                                <label>{!! Form::radio('payment_method', 'ssl') !!} Online Payment</label><br>
                                {{--													{!! Form::radio('payment_method', 'wallet', true); !!} My Wallet<br> --}}
                                {{--													{!! Form::radio('payment_method', 'wallet',['id' => 'see-me']); !!} My Wallet<br> --}}
                                {{--													{!! Form::radio('payment_method', 'wallet',['id' => 'look-me']); !!} My Wallet<br> --}}
                                {{--													@foreach ($payments as $payment) --}}
                                {{--														<img src="https://topstories247.com/wp-content/uploads/2020/06/bKash-Logo.jpg" class="img-fluid" width="60"> --}}
                                {{--														<input id='see-me' name='payment_method' value="Bkash"  type='radio' /> Bkash<br> --}}
                                {{--													@endforeach --}}
                                <img src="{{ asset('public/images/') }}/bkash.jpg" class="img-fluid" width="60">
                                <label>
                                    <input id='see-me' name='payment_method' value="Bkash" type='radio' /> Bkash
                                </label><br>
                                <img src="{{ asset('public/images/') }}/rocket.png" class="img-fluid" width="60">
                                <label>
                                    <input id='look-me' name='payment_method' value="Rocket" type='radio' /> Rocket
                                </label><br>
                                <div id="show-me-two" style="display: none;">
                                    <div class="text-center mb-6">
                                        <img src="{{ asset('public/images/payment_qr_code.jpg') }}" alt="Bkash QR Code"
                                            class="img-fluid" style="max-width: 250px;">
                                    </div>
                                    <p class="text-center font-weight text-danger">
                                        দয়া করে আমাদের এই <strong>01976223330</strong> বিকাশ মার্চেন্ট নম্বরে
                                        <strong>{{ Cart::getSubTotal() }} টাকা</strong> পেমেন্ট করুন।
                                    </p>

                                    <div class="row justify-content-center">
                                        <div class="col-md-6 mb-3">
                                            {!! Form::number('bkashnumber', null, ['class' => 'form-control', 'placeholder' => 'আপনার বিকাশ নম্বর']) !!}
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            {!! Form::number('transaction', null, [
                                                'class' => 'form-control',
                                                'placeholder' => 'লেনদেন নম্বর (Transaction ID)',
                                            ]) !!}
                                        </div>
                                    </div>
                                </div>
                                <div id='show-me-three' style="display: none">
                                    দয়া করে আমাদের এই 017262233308 রকেট মার্চেন্ট নম্বর এ {{ Cart::getSubTotal() }} টাকা
                                    পেমেন্ট করুন।
                                    <div class="row">
                                        <div class="col-md-6">
                                            {!! Form::number('rocket_number', null, ['class' => 'form-control', 'placeholder' => 'Your Rocket Number']) !!}
                                        </div>
                                        <div class="col-md-6">
                                            {!! Form::number('rocket_transaction', null, ['class' => 'form-control', 'placeholder' => 'Transaction No']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--											<div class="form-group row"> --}}
                        {{--												<div class="col-sm-12"> --}}
                        {{--													{!! Form::radio('payment_method', 'cash_on_delivery', true); !!} Check On Delivary --}}
                        {{--													{!! Form::radio('payment_method', 'ssl', true); !!} SSLCommerz --}}
                        {{--													{!! Form::radio('payment_method', 'wallet', true); !!} My Wallet --}}
                        {{--												</div> --}}
                        {{--											</div> --}}
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-info text-right">Confirm Order</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-12 col-12 ">
                    <div class="product-area">
                        <table class="table table-striped table-hover table-bordered shop_table">
                            <thead>
                                <tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-name">QTY</th>
                                    <th class="product-name">Price</th>
                                    <th class="product-total">Total</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($cartCollection as $item)
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            {{ $item->name }}
                                        </td>
                                        <td>
                                            {{ $item->quantity }}
                                        </td>
                                        <td>
                                            {{ $item->price }}
                                        </td>

                                        <td class="product-total">
                                            <span
                                                class="woocommerce-Price-amount amount">TK.{{ $item->getPriceSum() }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                            <tfoot>
                                <tr class="cart-subtotal">
                                    <td></td>
                                    <th colspan="2">Subtotal</th>

                                    <td>
                                        TK.{{ Cart::getSubTotal() }}
                                    </td>
                                </tr>

                                {{--												<tr class="cart-subtotal"> --}}
                                {{--													<td></td> --}}
                                {{--													<th colspan="2">Shipping charge</th> --}}

                                {{--													<td> --}}
                                {{--														<?php $condition = Cart::getCondition('transaction_fee'); ?> --}}
                                {{--														@if ($condition) --}}
                                {{--															TK. {{ $condition->getValue() }} --}}
                                {{--														@else --}}
                                {{--															TK. 0.00 --}}
                                {{--														@endif --}}
                                {{--													</td> --}}
                                {{--												</tr> --}}

                                <tr class="order-total">
                                    <td></td>
                                    <th colspan="2">Total</th>

                                    <td>
                                        <strong>
                                            TK.{{ Cart::getTotal() }}
                                        </strong>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
