@extends('Frontend.Layout.master')

@section('content')
    @include('Frontend.components.breadcrumb', ['page' => 'Home', 'subPage' => 'Today Offer'])


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="block">
                    <div class="products-view">
                        <div class="products-view__options">
                            <div class="view-options">
                                <div class="view-options__layout">
                                    <div class="layout-switcher">
                                        <div class="layout-switcher__list"><button data-layout="grid-5-full"
                                                data-with-features="false" title="Grid" type="button"
                                                class="layout-switcher__button layout-switcher__button--active"><svg
                                                    width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#layout-grid-16x16"></use>
                                                </svg></button> <button data-layout="grid-5-full" data-with-features="true"
                                                title="Grid With Features" type="button"
                                                class="layout-switcher__button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#layout-grid-with-details-16x16">
                                                    </use>
                                                </svg></button> <button data-layout="list" data-with-features="false"
                                                title="List" type="button" class="layout-switcher__button"><svg
                                                    width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#layout-list-16x16"></use>
                                                </svg></button></div>
                                    </div>
                                </div>
                                <div class="view-options__legend">Showing 6 of 98 products</div>
                                <div class="view-options__divider"></div>
                                <div class="view-options__control"><label for="">Sort By</label>
                                    <div><select class="form-control form-control-sm" name="" id="">
                                            <option value="">Default</option>
                                            <option value="">Name (A-Z)</option>
                                        </select></div>
                                </div>
                                <div class="view-options__control"><label for="">Show</label>
                                    <div><select class="form-control form-control-sm" name="" id="">
                                            <option value="">12</option>
                                            <option value="">24</option>
                                        </select></div>
                                </div>
                            </div>
                        </div>
                        <div class="products-view__list products-list" data-layout="grid-5-full" data-with-features="false">
                            <div class="products-list__body">

                                @foreach ($products as $product)
                                    <div class="products-list__item">
                                        <div class="product-card">
                                            <button class="product-card__quickview" type="button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#quickview-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon"></span>
                                            </button>
                                            @include('Frontend.components.productDiscount', [
                                                'product' => $product,
                                            ])
                                            <div class="product-card__image">
                                                <a href="{{ route('product_details', ['id' => $product->slug]) }}">
                                                    <img src="{{ asset('public/coot_assets/images/products/' . $product->thumb) }}"
                                                        alt="{{ $product->img_alt ?? 'Product Image' }}">
                                                </a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__name">
                                                    <a href="{{ route('product_details', ['id' => $product->slug]) }}">
                                                        {{ $product->title }}
                                                    </a>
                                                </div>
                                                <ul class="product-card__features-list">
                                                    <li>Speed: 750 RPM</li>
                                                    <li>Power Source: Cordless-Electric</li>
                                                    <li>Battery Cell Type: Lithium</li>
                                                    <li>Voltage: 20 Volts</li>
                                                    <li>Battery Capacity: 2 Ah</li>
                                                </ul>
                                            </div>
                                            <div class="product-card__actions">
                                                <div class="product-card__availability">
                                                    Availability:
                                                    <span class="text-success">In Stock</span>
                                                </div>
                                                @include('Frontend.components.productPrice', [
                                                    'product' => $product,
                                                ])
                                                @include('Frontend.components.addToCart', [
                                                    'product' => $product,
                                                ])
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="products-view__pagination">
                            {{-- @if ($products->hasPages())
                                <ul class="pagination justify-content-center">
                                    {!! $products->links() !!}
                                </ul>
                            @endif --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
