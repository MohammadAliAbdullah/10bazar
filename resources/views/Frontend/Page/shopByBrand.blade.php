@extends('Frontend.Layout.master')

@section('meta_title')
    {{ $brand->meta_title ?? $seo->meta_title }}
@endsection

@section('meta_keywords')
    {{ $brand->meta_keyword ?? $seo->meta_keyword }}
@endsection

@section('meta_description')
    {{ $brand->meta_description ?? $seo->meta_description }}
@endsection

@section('content')
    <!-- Breadcrumb Start -->
    @include('Frontend.components.breadcrumb', [
        'page' => __('Shop'),
        'subPage' => $brand->title ?? __('N/A'),
    ])

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="block">
                    <div class="products-view">
                        {{-- View Options --}}
                        @include('Frontend.components.productViewOption')

                        <div class="products-view__list products-list" data-layout="grid-4-full" data-with-features="false">
                            <div class="products-list__body">
                                @if ($cat_products->isEmpty())
                                    <div class="products-list__empty text-center py-5">
                                        <img src="{{ asset('public/assets/no_product_found.png') }}"
                                            alt="{{ __('No products found') }}" class="img-fluid">
                                    </div>
                                @endif

                                {{-- Product Items --}}
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
                                {{-- Product Items / End --}}
                            </div>
                        </div>

                        <div class="products-view__pagination">
                            <ul class="pagination justify-content-center">
                                {{ $cat_products->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
