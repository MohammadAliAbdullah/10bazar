@extends('Frontend.Layout.master')

@section('meta_title', $category->meta_title ?? $seo->meta_title)
@section('meta_keywords', $category->meta_keyword ?? $seo->meta_keyword)
@section('meta_description', $category->meta_description ?? $seo->meta_description)

@section('content')
    @include('Frontend.components.breadcrumb', ['page' => __('Brand'), 'subPage' => $category->title])

    <div class="container">
        <div class="shop-layout shop-layout--sidebar--start">

            {{-- Sidebar Filter --}}
            <div class="d-none d-md-block">
                @include('Frontend.Page.components.brandFilter')
            </div>
            {{-- Main Content --}}

            <div class="shop-layout__content">
                <div class="block">
                    <div class="products-view">
                        {{-- View Options --}}
                        @include('Frontend.components.productViewOption')

                        <div class="productList">
                            <div class="products-view__list products-list" data-layout="grid-3-sidebar"
                                data-with-features="false">
                                <div class="products-list__body">

                                    {{-- Product Items --}}
                                    <section
                                        id="{{ request()->get('style') == 'list' ? 'productListView' : 'productGirdView' }}"
                                        class="section-p1 {{ request()->get('style') == 'list' ? 'container' : '' }}">
                                        <div class="{{ request()->get('style') == 'list' ? 'list-container' : 'row' }}">
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

                            <div class="products-view__pagination">
                                <ul class="pagination justify-content-center">
                                </ul>
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
                    @include('Frontend.Page.components.brandFilter')
                </div>
            </div>
        </div>
    </div>
@endsection
