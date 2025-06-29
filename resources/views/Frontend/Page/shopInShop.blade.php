@extends('Frontend.Layout.master')

@section('meta_title', $category->meta_title ?? $seo->meta_title)
@section('meta_keywords', $category->meta_keyword ?? $seo->meta_keyword)
@section('meta_description', $category->meta_description ?? $seo->meta_description)

@section('content')
    @include('Frontend.components.breadcrumb', ['page' => __('Brand'), 'subPage' => $category->title])

    <div class="container">
        <div class="shop-layout shop-layout--sidebar--start">

            {{-- Sidebar Filter --}}
            @include('Frontend.Page.components.brandFilter')

            <div class="shop-layout__content">
                <div class="block">
                    <div class="products-view">
                        <div class="products-view__options">
                            <div class="view-options">
                                <div class="view-options__layout">
                                    <div class="layout-switcher">
                                        <div class="layout-switcher__list">
                                            <button data-layout="grid-3-sidebar" data-with-features="false" title="{{ __('Grid') }}"
                                                type="button" class="layout-switcher__button layout-switcher__button--active">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#layout-grid-16x16"></use>
                                                </svg>
                                            </button>
                                            <button data-layout="grid-3-sidebar" data-with-features="true" title="{{ __('Grid With Features') }}" type="button"
                                                class="layout-switcher__button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#layout-grid-with-details-16x16"></use>
                                                </svg>
                                            </button>
                                            <button data-layout="list" data-with-features="false" title="{{ __('List') }}" type="button"
                                                class="layout-switcher__button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#layout-list-16x16"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="view-options__legend">
                                    {{ __('Showing :count of :total products', ['count' => $cat_products->count(), 'total' => $cat_products->total()]) }}
                                </div>

                                <div class="view-options__divider"></div>

                                <div class="view-options__control">
                                    <label for="sortBy">{{ __('Sort By') }}</label>
                                    <div>
                                        <select class="form-control form-control-sm" id="sortBy" name="sortBy">
                                            <option value="default">{{ __('Default') }}</option>
                                            <option value="name_asc">{{ __('Name (A-Z)') }}</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="view-options__control">
                                    <label for="showCount">{{ __('Show') }}</label>
                                    <div>
                                        <select class="form-control form-control-sm" id="showCount" name="showCount">
                                            <option value="12">12</option>
                                            <option value="24">24</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="productList">
                            <div class="products-view__list products-list" data-layout="grid-3-sidebar" data-with-features="false">
                                <div class="products-list__body">
                                    @if ($cat_products->isEmpty())
                                        <div class="products-list__empty text-center py-5">
                                            <img src="{{ asset('public/assets/no_product_found.png') }}"
                                                alt="{{ __('No products found') }}" class="img-fluid">
                                        </div>
                                    @endif
                                    {{-- Product Items --}}
                                    <section id="product1" class="section-p1">
                                        <div class="row">
                                            @foreach ($cat_products as $product)
                                                @include('Frontend.components.productCard', ['product' => $product])
                                            @endforeach
                                        </div>
                                    </section>
                                    {{-- Product Items / End --}}
                                </div>
                            </div>

                            <div class="products-view__pagination">
                                <ul class="pagination justify-content-center">
                                    {!! $cat_products->onEachSide(0)->links() !!}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
