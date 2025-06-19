@extends('Frontend.Layout.master')
@if (!empty($brand->meta_title))
    @section('meta_title', $brand->meta_title)
@else
    @section('meta_title', $seo->meta_title)
@endif
@if (!empty($brand->meta_keyword))
    @section('meta_keywords', $brand->meta_keyword)
@else
    @section('meta_keywords', $seo->meta_keyword)
@endif
@if (!empty($brand->meta_description))
    @section('meta_description', $brand->meta_description)
@else
    @section('meta_description', $seo->meta_description)
@endif
@section('content')
    <!-- Breadcrumb Start -->
    @include('Frontend.components.breadcrumb', ['page' => 'Shop', 'subPage' => $brand->title ?? 'N/A'])
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="block">
                    <div class="products-view">
                        <div class="products-view__options">
                            <div class="view-options">
                                <div class="view-options__layout">
                                    <div class="layout-switcher">
                                        <div class="layout-switcher__list"><button data-layout="grid-4-full"
                                                data-with-features="false" title="Grid" type="button"
                                                class="layout-switcher__button layout-switcher__button--active"><svg
                                                    width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#layout-grid-16x16"></use>
                                                </svg></button> <button data-layout="grid-4-full" data-with-features="true"
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
                        <div class="products-view__list products-list" data-layout="grid-4-full" data-with-features="false">
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
                                            @include('Frontend.components.productCard', ['product' => $product])
                                        @endforeach
                                    </div>
                                </section>
                                {{-- Product Items / End --}}
                            </div>
                        </div>
                        <div class="products-view__pagination">
                            <ul class="pagination justify-content-center">
                                {{ $cat_products->render() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
