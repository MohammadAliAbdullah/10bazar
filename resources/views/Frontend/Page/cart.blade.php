@extends('Frontend.Layout.master')

@section('content')
    <!-- Breadcrumb Start -->
    @include('Frontend.components.breadcrumb', [
        'page' => __('Shop'),
        'subPage' => __('Cart'),
    ])

    <div class="container">
        <table class="cart__table cart-table">
            <thead class="cart-table__head">
                <tr class="cart-table__row">
                    <th class="cart-table__column cart-table__column--image">{{ __('Image') }}</th>
                    <th class="cart-table__column cart-table__column--product">{{ __('Product') }}</th>
                    <th class="cart-table__column cart-table__column--price">{{ __('Price') }}</th>
                    <th class="cart-table__column cart-table__column--quantity">{{ __('Quantity') }}</th>
                    <th class="cart-table__column cart-table__column--total">{{ __('Total') }}</th>
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
                            <a href="#" class="cart-table__product-name">{{ $item->name }}</a>
                        </td>
                        <td class="cart-table__column cart-table__column--price" data-title="{{ __('Price') }}">
                            {{ $item->price ?? 0 }}
                        </td>
                        <td class="cart-table__column cart-table__column--quantity" data-title="{{ __('Quantity') }}">
                            <div class="input-number">
                                <input class="form-control input-number__input quantity" type="number" min="1"
                                       value="{{ $item->quantity }}">
                                <div class="input-number__add increment"></div>
                                <div class="input-number__sub decrement"></div>
                            </div>
                        </td>
                        <td class="cart-table__column cart-table__column--total itemTotalPrice" data-title="{{ __('Total') }}">
                            {{ number_format($item->getPriceSum(), 2) }}
                        </td>
                        <td class="cart-table__column cart-table__column--remove">
                            <a href="#" class="btn btn-sm btn-danger itemRemove" title="{{ __('Remove') }}">
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="cart__actions">
            <div class="cart__buttons">
                <a href="{{ url('/') }}" class="btn btn-light">
                    {{ __('Continue Shopping') }}
                </a>
            </div>
        </div>

        <div class="row justify-content-end pt-5">
            <div class="col-12 col-md-7 col-lg-6 col-xl-5">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ __('Cart Totals') }}</h3>
                        <table class="cart__totals">
                            <thead class="cart__totals-header">
                                <tr>
                                    <th>{{ __('Subtotal') }}</th>
                                    <td class="itemSubTotal">{{ Cart::getSubTotal() }}</td>
                                </tr>
                            </thead>
                            <tbody class="cart__totals-body">
                                <tr>
                                    <th>{{ __('Shipping') }}</th>
                                    <td>0.00<div class="cart__calc-shipping"></div></td>
                                </tr>
                                <tr>
                                    <th>{{ __('Discount') }}</th>
                                    <td>0.00</td>
                                </tr>
                                <tr>
                                    <th>{{ __('Tax') }}</th>
                                    <td>0.00</td>
                                </tr>
                            </tbody>
                            <tfoot class="cart__totals-footer">
                                <tr>
                                    <th>{{ __('Total') }}</th>
                                    <td class="itemTotal">{{ Cart::getTotal() }}</td>
                                </tr>
                            </tfoot>
                        </table>

                        <a class="btn btn-primary btn-xl btn-block cart__checkout-button"
                           href="{{ route('checkout') }}">
                            {{ __('Proceed to checkout') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
