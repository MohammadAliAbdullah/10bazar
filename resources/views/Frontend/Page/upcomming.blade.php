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
                        {{-- View Options --}}
                        @include('Frontend.components.productViewOption')
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
                                                    <img src="{{ asset( $product->thumb) }}"
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
