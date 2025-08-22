@extends('Frontend.Layout.master')

@section('meta_title', $product->meta_title ?? $seo->meta_title)
@section('meta_keywords', $product->meta_keyword ?? $seo->meta_keyword)
@section('meta_description', $product->meta_description ?? $seo->meta_description)

@section('content')
    @include('Frontend.components.breadcrumb', ['page' => __('shop'), 'subPage' => $product->title ?? __('Not Applicable')])

    <div class="block">
        <div class="container">
            <div class="product product--layout--standard" data-layout="standard">
                <div class="product__content">
                    <!-- .product__gallery -->
                    <div class="product__gallery">
                        <div class="product-gallery">
                            <div class="product-gallery__featured">
                                <div class="owl-carousel" id="product-image">
                                    @if (!empty($gallery) && count($gallery) > 0)
                                        @foreach ($gallery as $key => $img)
                                            <a href="#">
                                                <img src="{{ asset( $img) }}"
                                                    alt="{{ $product->title }} image {{ $key + 1 }}">
                                            </a>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="product-gallery__carousel">
                                <div class="owl-carousel" id="product-carousel">
                                    @if (!empty($gallery) && count($gallery) > 0)
                                        @foreach ($gallery as $key => $img)
                                            <a href="#" class="product-gallery__carousel-item">
                                                <img class="product-gallery__carousel-image"
                                                    src="{{ asset( $img) }}"
                                                    alt="{{ $product->title }} thumbnail {{ $key + 1 }}">
                                            </a>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .product__gallery / end -->

                    <!-- .product__info -->
                    <div class="product__info">
                        <h1 class="product__name">{{ $product->title ?? '' }}</h1>

                        <div class="product__description">
                            <p>{{ $product->description ?? '' }}</p>
                        </div>

                        <ul class="product__meta">
                            <li><b>{{ __('category') }}:</b> {{ $product->category->title ?? __('Not Applicable') }}</li>
                            <li><b>{{ __('brand') }}:</b> {{ $product->brand->title ?? __('Not Applicable') }}</li>
                            <li><b>SKU:</b> {{ $product->sku ?? __('Not Applicable') }}</li>
                            <li class="product__meta-availability">
                                <b>{{ __('availability') }}:</b>
                                @if ($product->qty != 0)
                                    {{ __('In Stock') }}
                                @else
                                    <span class="text-danger">{{ __('Out of Stock') }}</span>
                                @endif
                            </li>
                        </ul>
                    </div>
                    <!-- .product__info / end -->

                    <!-- .product__sidebar -->
                    <div class="product__sidebar">
                        <div class="product__availability"><b>{{ __('availability') }}:</b>
                            @if ($product->qty != 0)
                                {{ __('In Stock') }}
                            @else
                                <span class="text-danger">{{ __('Out of Stock') }}</span>
                            @endif
                        </div>

                        <div class="product__prices">
                            @if ($product->regular_price && $product->regular_price != $product->sales_price)
                                <del>Tk {{ $product->regular_price }}</del>
                            @endif
                            <span class="text-danger">Tk {{ $product->sales_price ?? 'N/A' }}</span>
                        </div>

                        <!-- .product__options -->
                        {!! Form::open(['method' => 'POST', 'url' => route('cart.add'), 'class' => 'product__options']) !!}
                            {!! Form::hidden('id', $product->id) !!}
                            {!! Form::hidden('name', $product->title) !!}
                            {!! Form::hidden('thumbnail_img', $product->thumb) !!}
                            {!! Form::hidden('slug', $product->slug) !!}
                            {!! Form::hidden('price', $product->sales_price ?? 0) !!}

                            {{-- Sizes --}}
                            @if ($product->size)
                                @php
                                    $sizes = explode(',', $product->size);
                                    $sizeAttributes = \App\Models\Atribute::whereIn('id', $sizes)->get()->keyBy('id');
                                @endphp
                                <div class="d-flex mb-3">
                                    <div class="sizes">
                                        <p class="text-uppercase"><b>{{ __('size') }}:</b></p>
                                        <label class="radio">
                                            @foreach ($sizes as $index => $val)
                                                @php
                                                    $atts = $sizeAttributes->get($val);
                                                @endphp
                                                @if($atts)
                                                    <input type="radio" name="size" value="{{ $val }}" {{ $index == 0 ? 'checked' : '' }}>
                                                    <span>{{ $atts->value }}"</span>
                                                @endif
                                            @endforeach
                                        </label>
                                    </div>
                                </div>
                            @endif

                            {{-- Colors --}}
                            @if ($product->color)
                                @php
                                    $colors = explode(',', $product->color);
                                    $colorAttributes = \App\Models\Atribute::whereIn('id', $colors)->get()->keyBy('id');
                                @endphp
                                <div class="d-flex mb-3">
                                    <div class="sizes">
                                        <h6 class="text-uppercase">{{ __('color') }}</h6>
                                        @foreach ($colors as $index => $val)
                                            @php
                                                $atts = $colorAttributes->get($val);
                                            @endphp
                                            @if($atts)
                                                <label class="color">
                                                    <input type="radio" name="color" value="{{ $val }}" {{ $index == 0 ? 'checked' : '' }}>
                                                    <span class="bg" style="background:{{ $atts->value }}"></span>
                                                </label>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endif

                            {{-- Quantity --}}
                            <div class="form-group product__option">
                                <label class="product__option-label" for="product-quantity">{{ __('quantity') }}</label>
                                <div class="product__actions">
                                    <div class="product__actions-item">
                                        <div class="input-number product__quantity">
                                            <input name="quantity" id="product-quantity" class="input-number__input form-control form-control-lg" type="number" min="1" value="1">
                                            <div class="input-number__add"></div>
                                            <div class="input-number__sub"></div>
                                        </div>
                                    </div>
                                    <div class="product__actions-item product__actions-item--addtocart">
                                        <button class="btn btn-primary btn-lg itemAddToCart" data-id="{{ $product->id }}" type="submit">
                                            <i class="fa fa-shopping-cart mr-1"></i> {{ __('add_to_cart') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}
                        <!-- .product__end -->

                        <div class="product__footer">
                            <div class="product__tags tags">
                                <div class="tags__list">
                                    {{-- example tags, you can replace or make dynamic --}}
                                    <a href="#">Mounts</a> 
                                    <a href="#">Electrodes</a> 
                                    <a href="#">Chainsaws</a>
                                </div>
                            </div>
                            <div class="product__share-links share-links">
                                <ul class="share-links__list">
                                    <li class="share-links__item share-links__item--type--like"><a href="#">{{ __('like') }}</a></li>
                                    <li class="share-links__item share-links__item--type--tweet"><a href="#">{{ __('tweet') }}</a></li>
                                    <li class="share-links__item share-links__item--type--pin"><a href="#">{{ __('pin_it') }}</a></li>
                                    <li class="share-links__item share-links__item--type--counter"><a href="#">4K</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- .product__sidebar / end -->

                </div>
            </div>

            <div class="product-tabs">
                <div class="product-tabs__list">
                    <a href="#tab-description" class="product-tabs__item product-tabs__item--active">{{ __('description') }}</a>
                    <a href="#tab-specification" class="product-tabs__item">{{ __('specification') }}</a>
                </div>
                <div class="product-tabs__content">
                    <div class="product-tabs__pane product-tabs__pane--active" id="tab-description">
                        <div class="typography">
                            <h3>{{ __('product_full_description') }}</h3>
                            <p>{!! $product->content ?? __('Not Applicable') !!}</p>
                        </div>
                    </div>
                    <div class="product-tabs__pane" id="tab-specification">
                        <div class="spec">
                            <h3 class="spec__header">{{ __('specification') }}</h3>
                            <p>{!! $product->specification ?? __('Not Applicable') !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- .block-products-carousel -->
    <div class="block block-products-carousel" data-layout="grid-5">
        <div class="container">
            <div class="block-header">
                <h3 class="block-header__title">{{ __('Related Products') }}</h3>
                <div class="block-header__divider"></div>
            </div>

            <section id="productGirdView" class="section-p1">
                <div class="row">
                    @foreach ($similar_products as $product)
                        @include('Frontend.components.productCard', ['product' => $product])
                    @endforeach
                </div>
            </section>

            
        </div>
    </div>
@endsection
