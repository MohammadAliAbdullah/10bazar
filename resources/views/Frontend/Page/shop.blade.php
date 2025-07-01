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
                        @include('Frontend.components.productViewOption')
                        {{-- Product List --}}
                        <div class="productList">
                            <div class="products-view__list products-list" data-layout="grid-3-sidebar"
                                data-with-features="false">
                                <div class="products-list__body">
                                    <section
                                        id="{{ request()->get('style') == 'list' ? 'productListView' : 'productGirdView' }}"
                                        class="section-p1 {{ request()->get('style') == 'list' ? 'container' : '' }}">
                                        <div class="{{ request()->get('style') == 'list' ? 'list-container' : 'row' }}">
                                            {{-- Loop through products --}}
                                            @foreach ($cat_products as $product)
                                                @include('Frontend.components.productCard', [
                                                    'product' => $product,
                                                ])
                                            @endforeach
                                        </div>
                                    </section>
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
