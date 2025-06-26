@extends('Frontend.Layout.master')

@section('content')
    @include('Frontend.components.breadcrumb', [
        'page' => __('home'),
        'subPage' => __('upcoming')
    ])

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="block">
                    <div class="products-view">
                        <div class="products-view__options">
                            <div class="view-options">
                                <div class="view-options__layout">
                                    <div class="layout-switcher">
                                        <div class="layout-switcher__list">
                                            <button data-layout="grid-5-full" data-with-features="false" title="{{ __('grid') }}" type="button"
                                                class="layout-switcher__button layout-switcher__button--active">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#layout-grid-16x16"></use>
                                                </svg>
                                            </button>
                                            <button data-layout="grid-5-full" data-with-features="true" title="{{ __('grid_with_features') }}" type="button"
                                                class="layout-switcher__button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#layout-grid-with-details-16x16"></use>
                                                </svg>
                                            </button>
                                            <button data-layout="list" data-with-features="false" title="{{ __('list') }}" type="button"
                                                class="layout-switcher__button">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#layout-list-16x16"></use>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="view-options__legend">{{ __('showing') }} {{ $products->count() }} {{ __('of') }} {{ $products->total() ?? 'N/A' }} {{ __('products') }}</div>
                                <div class="view-options__divider"></div>
                                <div class="view-options__control">
                                    <label for="sortBy">{{ __('sort_by') }}</label>
                                    <div>
                                        <select class="form-control form-control-sm" name="sortBy" id="sortBy">
                                            <option value="default">{{ __('default') }}</option>
                                            <option value="name_asc">{{ __('name_a_z') }}</option>
                                            <option value="name_desc">{{ __('name_z_a') }}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="view-options__control">
                                    <label for="showCount">{{ __('show') }}</label>
                                    <div>
                                        <select class="form-control form-control-sm" name="showCount" id="showCount">
                                            <option value="12">12</option>
                                            <option value="24">24</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products-view__list products-list" data-layout="grid-5-full" data-with-features="false">
                            <div class="products-list__body">
                                @forelse ($products as $product)
                                    <div class="products-list__item">
                                        <div class="product-card">
                                            <button class="product-card__quickview" type="button" aria-label="{{ __('quick_view') }}">
                                                <svg width="16px" height="16px">
                                                    <use xlink:href="images/sprite.svg#quickview-16"></use>
                                                </svg>
                                            </button>
                                            <div class="product-card__badges-list">
                                                <div class="product-card__badge product-card__badge--new">{{ __('new') }}</div>
                                            </div>
                                            <div class="product-card__image">
                                                <a href="{{ route('product_details', ['id' => $product->slug]) }}">
                                                    <img src="{{ asset('public/coot_assets/images/products/' . $product->thumb) }}"
                                                        alt="{{ $product->img_alt ?? __('product_image') }}">
                                                </a>
                                            </div>
                                            <div class="product-card__info">
                                                <div class="product-card__name">
                                                    <a href="{{ route('product_details', ['id' => $product->slug]) }}">
                                                        {{ $product->title }}
                                                    </a>
                                                </div>
                                                <ul class="product-card__features-list">
                                                    <li>{{ __('speed') }}: 750 RPM</li>
                                                    <li>{{ __('power_source') }}: Cordless-Electric</li>
                                                    <li>{{ __('battery_cell_type') }}: Lithium</li>
                                                    <li>{{ __('voltage') }}: 20 Volts</li>
                                                    <li>{{ __('battery_capacity') }}: 2 Ah</li>
                                                </ul>
                                            </div>
                                            <div class="product-card__actions">
                                                <div class="product-card__availability">
                                                    {{ __('availability') }}:
                                                    <span class="text-success">{{ __('in_stock') }}</span>
                                                </div>
                                                @include('Frontend.components.productPrice', ['product' => $product])
                                                @include('Frontend.components.addToCart', ['product' => $product])
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <p>{{ __('no_products_found') }}</p>
                                @endforelse
                            </div>
                        </div>
                        <div class="products-view__pagination">
                            {{-- Uncomment below if pagination is needed --}}
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
