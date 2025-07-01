@extends('Frontend.Layout.master')

@section('content')
    @include('Frontend.components.breadcrumb', ['page' => 'Home', 'subPage' => 'New Arrivals'])
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="block">
                    <div class="products-view">
                        @include('Frontend.components.productViewOption')
                        <div class="products-view__list products-list" data-layout="grid-5-full" data-with-features="false">
                            <div class="products-list__body">
                                @if ($products->isEmpty())
                                    <div class="products-list__empty text-center py-5">
                                        <img src="{{ asset('public/assets/no_product_found.png') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                @endif
                                {{-- Product Items --}}
                                <section
                                    id="{{ request()->get('style') == 'list' ? 'productListView' : 'productGirdView' }}"
                                    class="section-p1 {{ request()->get('style') == 'list' ? 'container' : '' }}">
                                    <div class="{{ request()->get('style') == 'list' ? 'list-container' : 'row' }}">
                                        @foreach ($products as $product)
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
                            {{-- @if ($products->hasPages())
                                <ul class="pagination justify-content-center">
                                    {!! $products->links() !!}
                                </ul>
                            @endif --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
