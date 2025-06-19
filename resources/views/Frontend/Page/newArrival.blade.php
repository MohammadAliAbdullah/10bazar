@extends('Frontend.Layout.master')

@section('content')
    @include('Frontend.components.breadcrumb', ['page' => 'Home', 'subPage' => 'New Arrivals'])
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="block">
                    <div class="products-view">
                        <div class="products-view__options">
                            <div class="view-options">
                                <div class="view-options__layout">
                                    <div class="layout-switcher">
                                        <div class="layout-switcher__list"><button data-layout="grid-5-full"
                                                data-with-features="false" title="Grid" type="button"
                                                class="layout-switcher__button layout-switcher__button--active"><svg
                                                    width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#layout-grid-16x16"></use>
                                                </svg></button> <button data-layout="grid-5-full" data-with-features="true"
                                                title="Grid With Features" type="button"
                                                class="layout-switcher__button"><svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#layout-grid-with-details-16x16">
                                                    </use>
                                                </svg></button> <button data-layout="list" data-with-features="false"
                                                title="List" type="button" class="layout-switcher__button"><svg
                                                    width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#layout-list-16x16"></use>
                                                </svg></button></div>
                                    </div>
                                </div>
                                <div class="view-options__legend">Showing 6 of 98 products</div>
                                <div class="view-options__divider"></div>
                                <div class="view-options__control"><label for="">Sort By</label>
                                    <div><select class="form-control form-control-sm" name="" id="">
                                            <option value="">Default</option>
                                            <option value="">Name (A-Z)</option>
                                        </select></div>
                                </div>
                                <div class="view-options__control"><label for="">Show</label>
                                    <div><select class="form-control form-control-sm" name="" id="">
                                            <option value="">12</option>
                                            <option value="">24</option>
                                        </select></div>
                                </div>
                            </div>
                        </div>
                        <div class="products-view__list products-list" data-layout="grid-5-full" data-with-features="false">
                            <div class="products-list__body">
                                @if ($products->isEmpty())
                                    <div class="products-list__empty text-center py-5">
                                        <img src="{{ asset('public/coot_assets/no_product_found.png') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                @endif
                                {{-- Product Items --}}
                                <section id="product1" class="section-p1">
                                    <div class="row">
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
