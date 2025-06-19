@extends('Frontend.Layout.master')
@section('content')
    <!-- Breadcrumb Start -->
    @include('Frontend.components.breadcrumb', [
        'page' => 'Shop',
        'subPage' => 'Cart',
    ])
    {{-- <div class="cart block"> --}}
        <div class="container">
            <table class="cart__table cart-table">
                <thead class="cart-table__head">
                    <tr class="cart-table__row">
                        <th class="cart-table__column cart-table__column--image">Image</th>
                        <th class="cart-table__column cart-table__column--product">Product</th>
                        <th class="cart-table__column cart-table__column--price">Price</th>
                        <th class="cart-table__column cart-table__column--quantity">Quantity</th>
                        <th class="cart-table__column cart-table__column--total">Total</th>
                        <th class="cart-table__column cart-table__column--remove"></th>
                    </tr>
                </thead>
                <tbody class="cart-table__body">
                    @foreach ($cartCollection as $item)
                        <tr class="cart-table__row" data-id="{{ $item->id }}">
                            <td class="cart-table__column cart-table__column--image">
                                <a href="#">
                                    <img src="{{ asset('public/coot_assets/images/products/' . $item->attributes['image']) }}"
                                        alt="">
                                </a>
                            </td>
                            <td class="cart-table__column cart-table__column--product">
                                <a href="#" class="cart-table__product-name"> {{ $item->name }}</a>
                            </td>
                            <td class="cart-table__column cart-table__column--price" data-title="Price">
                                {{ $item->price ?? 0 }}
                            </td>
                            <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                                <div class="input-number">
                                    <input class="form-control input-number__input quantity" type="number" min="1"
                                        value="{{ $item->quantity }}">
                                    <div class="input-number__add increment"></div>
                                    <div class="input-number__sub decrement"></div>
                                </div>
                            </td>
                            <td class="cart-table__column cart-table__column--total itemTotalPrice" data-title="Total">
                                {{ number_format($item->getPriceSum(), 2) }}
                            </td>
                            <td class="cart-table__column cart-table__column--remove">
                                <a href="#" class="btn btn-sm btn-danger itemRemove">
                                    <i class="fa fa-times" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="cart__actions">
                {{-- <form class="cart__coupon-form"><label for="input-coupon-code" class="sr-only">Password</label>
                    <input type="text" class="form-control" id="input-coupon-code" placeholder="Coupon Code">
                    <button type="submit" class="btn btn-primary">Apply Coupon</button>
                </form> --}}
                <div class="cart__buttons">
                    <a href="{{ url('/') }}" class="btn btn-light">
                        Continue Shopping
                    </a>
                    {{-- <a href="#" class="btn btn-primary cart__update-button">Update Cart</a> --}}
                </div>
            </div>
            <div class="row justify-content-end pt-5">
                <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Cart Totals</h3>
                            <table class="cart__totals">
                                <thead class="cart__totals-header">
                                    <tr>
                                        <th>Subtotal</th>
                                        <td class="itemSubTotal">{{ Cart::getSubTotal() }}</td>
                                    </tr>
                                </thead>
                                <tbody class="cart__totals-body">
                                    <tr>
                                        <th>Shipping</th>
                                        <td>0.00<div class="cart__calc-shipping"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Discount</th>
                                        <td>0.00</td>
                                    </tr>
                                    <tr>
                                        <th>Tax</th>
                                        <td>0.00</td>
                                    </tr>
                                </tbody>
                                <tfoot class="cart__totals-footer">
                                    <tr>
                                        <th>Total</th>
                                        <td class="itemTotal">{{ Cart::getTotal() }}</td>
                                    </tr>
                                </tfoot>
                            </table>
                            <a class="btn btn-primary btn-xl btn-block cart__checkout-button"
                                href="{{ route('checkout') }}">
                                Proceed to checkout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}
@endsection
