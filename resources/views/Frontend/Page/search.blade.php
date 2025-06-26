@extends('Frontend.Layout.master')

@section('content')
    @include('Frontend.components.breadcrumb', ['page' => __('Shop'), 'subPage' => __('Filter')])

    <div class="container">
        <div class="shop-layout shop-layout--sidebar--start">

            {{-- Sidebar Filter --}}
            @include('Frontend.Page.components.shopFilter')

            {{-- Main Content --}}
            <div class="shop-layout__content">
                <div class="block">
                    <div class="products-view">

                        {{-- View Options --}}
                        <div class="products-view__options">
                            <div class="view-options">

                                {{-- Layout Switcher --}}
                                <div class="view-options__layout">
                                    <div class="layout-switcher">
                                        <div class="layout-switcher__list">
                                            <button data-layout="grid-3-sidebar" data-with-features="false" title="{{ __('Grid') }}"
                                                type="button"
                                                class="layout-switcher__button layout-switcher__button--active">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#layout-grid-16x16"></use>
                                                </svg>
                                            </button>
                                            <button data-layout="grid-3-sidebar" data-with-features="true"
                                                title="{{ __('Grid With Features') }}" type="button" class="layout-switcher__button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#layout-grid-with-details-16x16">
                                                    </use>
                                                </svg>
                                            </button>
                                            <button data-layout="list" data-with-features="false" title="{{ __('List') }}"
                                                type="button" class="layout-switcher__button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#layout-list-16x16"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                {{-- Legend --}}
                                <div class="view-options__legend">
                                    {{ __('Showing :count of :total products', ['count' => count($cat_products), 'total' => $cat_products->total()]) }}
                                </div>

                                <div class="view-options__divider"></div>

                                {{-- Sort By --}}
                                <div class="view-options__control">
                                    <label for="sortSelect">{{ __('Sort By') }}</label>
                                    <select class="form-control form-control-sm" id="sortSelect">
                                        <option value="">{{ __('Default') }}</option>
                                        <option value="name_asc">{{ __('Name (A-Z)') }}</option>
                                        <option value="name_desc">{{ __('Name (Z-A)') }}</option>
                                        <option value="price_low">{{ __('Price (Low to High)') }}</option>
                                        <option value="price_high">{{ __('Price (High to Low)') }}</option>
                                    </select>
                                </div>

                                {{-- Show Count --}}
                                <div class="view-options__control">
                                    <label for="showCount">{{ __('Show') }}</label>
                                    <select class="form-control form-control-sm" id="showCount">
                                        <option value="12">12</option>
                                        <option value="24">24</option>
                                        <option value="48">48</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        {{-- Product List --}}
                        <div class="productList">
                            <div class="products-view__list products-list" data-layout="grid-3-sidebar" data-with-features="false">
                                <div class="products-list__body">

                                    @if ($cat_products->isEmpty())
                                        <div class="products-list__empty text-center py-5">
                                            <img src="{{ asset('public/coot_assets/no_product_found.png') }}" alt=""
                                                class="img-fluid">
                                            <p class="mt-3">{{ __('No products found.') }}</p>
                                        </div>
                                    @else
                                        <section id="product1" class="section-p1">
                                            <div class="row">
                                                @foreach ($cat_products as $product)
                                                    @include('Frontend.components.productCard', ['product' => $product])
                                                @endforeach
                                            </div>
                                        </section>
                                    @endif

                                </div>
                            </div>

                            {{-- Pagination --}}
                            <div class="products-view__pagination">
                                @if ($cat_products->hasPages())
                                    <ul class="pagination justify-content-center">
                                        {!! $cat_products->links() !!}
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
