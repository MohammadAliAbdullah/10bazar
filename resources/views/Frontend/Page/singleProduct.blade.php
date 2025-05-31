@extends('Frontend.Layout.master')
@if (!empty($product->meta_title))
    @section('meta_title', $product->meta_title)
@else
    @section('meta_title', $seo->meta_title)
@endif
@if (!empty($product->meta_keyword))
    @section('meta_keywords', $product->meta_keyword)
@else
    @section('meta_keywords', $seo->meta_keyword)
@endif
@if (!empty($product->meta_description))
    @section('meta_description', $product->meta_description)
@else
    @section('meta_description', $seo->meta_description)
@endif
@section('content')
    @include('Frontend.components.breadcrumb', ['page' => 'Shop', 'subPage' => 'abdullah'])
    <div class="block">
        <div class="container">
            <div class="product product--layout--standard" data-layout="standard">
                <div class="product__content">
                    <!-- .product__gallery -->
                    <div class="product__gallery">
                        <div class="product-gallery">
                            <div class="product-gallery__featured">
                                <div class="owl-carousel" id="product-image">
                                    @if (!empty($gallery[0]))
                                        @foreach ($gallery as $key => $img)
                                            <a href="#">
                                                <img src="{{ asset('public/coot_assets/images/products/' . $img) }}" alt="">
                                            </a>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="product-gallery__carousel">
                                <div class="owl-carousel" id="product-carousel">
                                    @if (!empty($gallery[0]))
                                        @foreach ($gallery as $key => $img)
                                            <a href="#" class="product-gallery__carousel-item">
                                                <img class="product-gallery__carousel-image"
                                                    src="{{ asset('public/coot_assets/images/products/' . $img) }}" alt="">
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
                        <div class="product__wishlist-compare">
                            <button type="button" class="btn btn-sm btn-light btn-svg-icon" data-toggle="tooltip"
                                data-placement="right" title="Wishlist"><svg width="16px" height="16px">
                                    <use xlink:href="images/sprite.svg#wishlist-16"></use>
                                </svg></button> <button type="button" class="btn btn-sm btn-light btn-svg-icon"
                                data-toggle="tooltip" data-placement="right" title="Compare"><svg width="16px"
                                    height="16px">
                                    <use xlink:href="images/sprite.svg#compare-16"></use>
                                </svg></button>
                        </div>
                        <h1 class="product__name">{{ $product->title ?? 'N/A' }}</h1>
                        @include('Frontend.components.ratingReview')
                        <div class="product__description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Curabitur ornare, mi in ornare elementum, libero nibh lacinia urna, quis
                            convallis lorem erat at purus. Maecenas eu varius nisi.
                        </div>
                        <ul class="product__meta">
                            <li><b>Category:</b> {{ $product->category->title ?? 'N/A' }}</li>
                            <li><b>Brand:</b> {{ $product->brand->title ?? 'N/A' }}</li>
                            <li><b>SKU:</b> {{ $product->sku ?? 'N/A' }}</li>
                            <li class="product__meta-availability">
                                <b>Availability:</b>
                                @if ($product->qty != 0)
                                    in Stock
                                @else
                                    <span class="text-danger">Out of Stock</span>
                                @endif
                            </li>
                        </ul>
                    </div>
                    <!-- .product__info / end -->
                    <!-- .product__sidebar -->
                    <div class="product__sidebar">
                        <div class="product__availability"><b>Availability:</b>
                            @if ($product->qty != 0)
                                in Stock
                            @else
                                <span class="text-danger">Out of Stock</span>
                            @endif
                        </div>
                        <div class="product__prices">
                            <del>Tk {{ $product->regular_price ?? 'N/A' }}</del> <span class="text-danger">Tk
                                {{ $product->sales_price ?? 'N/A' }}</span>
                        </div>
                        <!-- .product__options -->
                        {!! Form::open(['method' => 'POST', 'url' => 'add', 'class' => 'product__options']) !!}
                        {!! Form::hidden('id', $product->id) !!}
                        {!! Form::hidden('name', $product->title) !!}
                        {!! Form::hidden('thumbnail_img', $product->thumb) !!}
                        {!! Form::hidden('slug', $product->slug) !!}
                        @if (!empty($product->sales_price) or $product->sales_price != 0)
                            {!! Form::hidden('price', $product->sales_price) !!}
                        @else
                            {!! Form::hidden('price', 0) !!}
                        @endif
                        {{-- old option --}}
                        @if ($product->size != null)
                            @php
                                $sizes = explode(',', $product->size);
                            @endphp
                            <div class="d-flex mb-3">
                                <div class="sizes">
                                    <p class="text-uppercase"><b>Size:</b></p>
                                    <label class="radio">
                                        @foreach ($sizes as $val)
                                            @php
                                                $atts = \App\Models\Atribute::where('id', $val)->first();
                                            @endphp
                                            <input type="radio" name="size" value="{{ $val }}" checked>
                                            <span>{{ $atts->value }}"</span>
                                        @endforeach
                                    </label>
                                </div>
                            </div>
                        @endif
                        @if ($product->color != null)
                            @php
                                $colors = explode(',', $product->color);
                            @endphp
                            <div class="d-flex mb-3">
                                <div class="sizes">
                                    <h6 class="text-uppercase">Color</h6>
                                    @foreach ($colors as $val)
                                        @php
                                            $atts = \App\Models\Atribute::where('id', $val)->first();
                                        @endphp
                                        <label class="color">
                                            <input type="radio" name="color" value="{{ $val }}" checked>
                                            <span class="bg" style="background:{{ $atts->value }}"></span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        {{-- old option --}}
                        <div class="form-group product__option">
                            <label class="product__option-label" for="product-quantity">Quantity</label>
                            <div class="product__actions">
                                <div class="product__actions-item">
                                    <div class="input-number product__quantity">
                                        <input name="quantity" id="product-quantity"
                                            class="input-number__input form-control form-control-lg" type="number"
                                            min="1" value="1">
                                        <div class="input-number__add"></div>
                                        <div class="input-number__sub"></div>
                                    </div>
                                </div>
                                <div class="product__actions-item product__actions-item--addtocart">
                                    <button class="btn btn-primary btn-lg">
                                        <i class="fa fa-shopping-cart mr-1"></i>
                                        Add To Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                        <!-- .product__end -->
                        <div class="product__footer">
                            <div class="product__tags tags">
                                <div class="tags__list"><a href="#">Mounts</a> <a href="#">Electrodes</a> <a
                                        href="#">Chainsaws</a></div>
                            </div>
                            <div class="product__share-links share-links">
                                <ul class="share-links__list">
                                    <li class="share-links__item share-links__item--type--like"><a href="#">Like</a>
                                    </li>
                                    <li class="share-links__item share-links__item--type--tweet"><a href="#">Tweet</a>
                                    </li>
                                    <li class="share-links__item share-links__item--type--pin"><a href="#">Pin
                                            It</a></li>
                                    <li class="share-links__item share-links__item--type--counter"><a href="#">4K</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tabs">
                    <div class="product-tabs__list">
                        <a href="#tab-description" class="product-tabs__item product-tabs__item--active">Description
                        </a>
                        <a href="#tab-specification" class="product-tabs__item">Specification
                        </a>
                    </div>
                    <div class="product-tabs__content">
                        <div class="product-tabs__pane product-tabs__pane--active" id="tab-description">
                            <div class="typography">
                                <h3>Product Full Description</h3>
                                <p>
                                    {!! $product->content ?? 'N/A' !!}
                                </p>

                            </div>
                        </div>
                        <div class="product-tabs__pane" id="tab-specification">
                            <div class="spec">
                                <h3 class="spec__header">Specification</h3>
                                <p>
                                    {!! $product->specification ?? 'N/A' !!}
                                </p>
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
                    <h3 class="block-header__title">Related Products</h3>
                    <div class="block-header__divider"></div>
                    <div class="block-header__arrows-list">
                        <button class="block-header__arrow block-header__arrow--left" type="button">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        </button>
                        <button class="block-header__arrow block-header__arrow--right" type="button">
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="block-products-carousel__slider">
                    <div class="block-products-carousel__preloader"></div>
                    <div class="owl-carousel">
                        @foreach ($similar_products as $product)
                            <div class="block-products-carousel__column">
                                <div class="block-products-carousel__cell">
                                    <div class="product-card">
                                        <button class="product-card__quickview" type="button">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                            <span class="fake-svg-icon"></span>
                                        </button>
                                        <div class="product-card__badges-list">
                                            <div class="product-card__badge product-card__badge--new">New
                                            </div>
                                        </div>
                                        <div class="product-card__image">
                                            <a href="#">
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

                                        </div>
                                        <div class="product-card__actions">
                                            <div class="product-card__availability">Availability: <span
                                                    class="text-success">In
                                                    Stock</span></div>

                                            @include('Frontend.components.productPrice', [
                                                'product' => $product,
                                            ])
                                            @include('Frontend.components.addToCart', [
                                                'product' => $product,
                                            ])
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endsection
