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
@endsection
