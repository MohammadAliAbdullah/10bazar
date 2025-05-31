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
                                @foreach ($cat_products as $product)
                                    <div class="products-list__item">
                                        <div class="product-card">
                                            <button class="product-card__quickview" type="button"><svg width="16px"
                                                    height="16px">
                                                    <use xlink:href="images/sprite.svg#quickview-16"></use>
                                                </svg> <span class="fake-svg-icon"></span></button>
                                            <div class="product-card__badges-list">
                                                <div class="product-card__badge product-card__badge--new">New</div>
                                            </div>
                                            <div class="product-card__image">
                                                <a href="{{ route('product_details', ['id' => $product->slug]) }}">
                                                    <img src="{{ asset('public/coot_assets/images/products/' . $product->thumb) }}"
                                                        alt="{{ $product->img_alt ?? 'Product Image' }}">
                                                </a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__name">
                                                    <a href="{{ route('product_details', ['id' => $product->slug]) }}">
                                                        {!! Str::limit($product->title, 32, ' ...') !!}
                                                    </a>
                                                </div>
                                                @include('Frontend.components.ratingReview')
                                                <ul class="product-card__features-list">
                                                    <li>Speed: 750 RPM</li>
                                                    <li>Power Source: Cordless-Electric</li>
                                                    <li>Battery Cell Type: Lithium</li>
                                                    <li>Voltage: 20 Volts</li>
                                                    <li>Battery Capacity: 2 Ah</li>
                                                </ul>
                                            </div>
                                            <div class="product-card__actions">
                                                <div class="product-card__availability">Availability: <span
                                                        class="text-success">In Stock</span></div>

                                                @include('Frontend.components.productPrice', [
                                                    'product' => $product,
                                                ])
                                                @include('Frontend.components.addToCart', [
                                                    'product' => $product,
                                                ])
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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
