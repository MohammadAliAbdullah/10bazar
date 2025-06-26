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
                                <div class="layout-switcher">
                                    <div class="layout-switcher__list">
                                        <!-- Grid with Features -->
                                        <button data-layout="grid-3-sidebar" data-with-features="true"
                                            title="{{ __('Grid With Features') }}" type="button"
                                            class="layout-switcher__button">
                                            <i class="fas fa-th-large" style="font-size: 16px;"></i>
                                        </button>

                                        <!-- List View -->
                                        <button data-layout="list" data-with-features="false"
                                            title="{{ __('List') }}" type="button"
                                            class="layout-switcher__button">
                                            <i class="fas fa-list" style="font-size: 16px;"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="view-options__divider"></div>

                                {{-- Sort By --}}
                                <div class="view-options__control">
                                    <select class="form-control form-control-sm" aria-label="{{ __('Sort By') }}">
                                        <option value="">{{ __('Default') }}</option>
                                        <option value="name_asc">{{ __('Name (A-Z)') }}</option>
                                    </select>
                                </div>

                                {{-- Show Count --}}
                                <div class="view-options__control">
                                    <label for="showCount">{{ __('Show') }}</label>
                                    <select class="form-control form-control-sm" id="showCount">
                                        <option value="12">12</option>
                                        <option value="24">24</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        {{-- Product List --}}
                        <div class="productList">
                            <div class="products-view__list products-list" data-layout="grid-3-sidebar"
                                data-with-features="false">
                                <div class="products-list__body">
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
