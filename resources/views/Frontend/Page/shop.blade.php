@extends('Frontend.Layout.master')

@section('content')
    @include('Frontend.components.breadcrumb', ['page' => __('Shop'), 'subPage' => __('Filter')])

    <div class="container">
        <div class="shop-layout shop-layout--sidebar--start">

            {{-- Sidebar Filter --}}
            <div class="d-none d-md-block">
                @include('Frontend.Page.components.shopFilter')
            </div>
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
    <div class="modal left fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-slideout" role="document">
            <div class="modal-content h-100 d-flex flex-column">
                <div class="modal-header">
                    <h5 class="modal-title">Filter Products</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body overflow-auto flex-grow-1">
                    @include('Frontend.Page.components.shopFilter')
                </div>
            </div>
        </div>
    </div>
@endsection
