@extends('Frontend.Layout.master')

@section('content')
    @include('Frontend.components.breadcrumb', ['page' => 'Shop', 'subPage' => 'Filter'])

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
                                            <button data-layout="grid-3-sidebar" data-with-features="false" title="Grid"
                                                type="button"
                                                class="layout-switcher__button layout-switcher__button--active">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#layout-grid-16x16"></use>
                                                </svg>
                                            </button>
                                            <button data-layout="grid-3-sidebar" data-with-features="true"
                                                title="Grid With Features" type="button" class="layout-switcher__button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#layout-grid-with-details-16x16">
                                                    </use>
                                                </svg>
                                            </button>
                                            <button data-layout="list" data-with-features="false" title="List"
                                                type="button" class="layout-switcher__button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#layout-list-16x16"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                {{-- Legend --}}
                                <div class="view-options__legend">Showing 6 of 98 products</div>
                                <div class="view-options__divider"></div>

                                {{-- Sort By --}}
                                <div class="view-options__control">
                                    <label for="">Sort By</label>
                                    <select class="form-control form-control-sm">
                                        <option value="">Default</option>
                                        <option value="">Name (A-Z)</option>
                                    </select>
                                </div>

                                {{-- Show Count --}}
                                <div class="view-options__control">
                                    <label for="">Show</label>
                                    <select class="form-control form-control-sm">
                                        <option value="">12</option>
                                        <option value="">24</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        {{-- Product List --}}
                        <div class="productList">
                            <div class="products-view__list products-list" data-layout="grid-3-sidebar"
                                data-with-features="false">
                                <div class="products-list__body">
                                    @foreach ($cat_products as $product)
                                        <div class="products-list__item">
                                            <div class="product-card">
                                                {{-- Quickview Button --}}
                                                <button class="product-card__quickview" type="button">
                                                    <i class="fa fa-eye"></i>
                                                    {{-- <span class="fake-svg-icon"></span> --}}
                                                </button>

                                                {{-- Product Badges --}}
                                                <div class="product-card__badges-list">
                                                    <div class="product-card__badge product-card__badge--new">New</div>
                                                </div>

                                                {{-- Product Image --}}
                                                <div class="product-card__image">
                                                    <a href="{{ route('product_details', ['id' => $product->slug]) }}">
                                                        <img src="{{ asset('public/images/product/' . $product->thumb) }}"
                                                            alt="{{ $product->img_alt ?? 'Product Image' }}">
                                                    </a>
                                                </div>

                                                {{-- Product Info --}}
                                                <div class="product-card__info">
                                                    <div class="product-card__name">
                                                        <a href="{{ route('product_details', ['id' => $product->slug]) }}">
                                                            {!! Str::limit($product->title, 32, ' ...') !!}
                                                        </a>
                                                    </div>
                                                    @include('Frontend.components.ratingReview')
                                                </div>

                                                {{-- Product Actions --}}
                                                <div class="product-card__actions">
                                                    <div class="product-card__availability">Availability: <span
                                                            class="text-success">In Stock</span></div>
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
