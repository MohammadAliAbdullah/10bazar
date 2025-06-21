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

                                    @if ($cat_products->isEmpty())
                                        <div class="products-list__empty text-center py-5">
                                            <img src="{{ asset('public/coot_assets/no_product_found.png') }}" alt=""
                                                class="img-fluid">
                                        </div>
                                    @endif
                                    {{-- Product Items --}}
                                    <section id="product1" class="section-p1">
                                        <div class="row">
                                            @foreach ($cat_products as $product)
                                                @include('Frontend.components.productCard', [
                                                    'product' => $product,
                                                ])
                                            @endforeach
                                        </div>
                                    </section>
                                    {{-- Product Items / End --}}

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
