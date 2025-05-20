@extends('Frontend.Layout.master')
{{-- @section('meta_title', $seo->meta_title)
@section('meta_keywords', $seo->meta_keyword)
@section('meta_description', $seo->meta_description) --}}
@section('content')
    <!-- .block-slideshow -->
    <div class="block-slideshow block-slideshow--layout--with-departments block">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9 offset-lg-3">
                    <div class="block-slideshow__body">
                        <div class="owl-carousel"><a class="block-slideshow__slide" href="#">
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                    style="background-image: url('{{ asset('public') }}/coot_assets/images/slides/slide-1.jpg')">
                                </div>
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                    style="background-image: url('{{ asset('public') }}/coot_assets/images/slides/slide-1-mobile.jpg')">
                                </div>
                                <div class="block-slideshow__slide-content">
                                    <div class="block-slideshow__slide-title">Big choice of<br>Plumbing products
                                    </div>
                                    <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.<br>Etiam pharetra laoreet dui quis
                                        molestie.</div>
                                    <div class="block-slideshow__slide-button"><span class="btn btn-primary btn-lg">Shop
                                            Now</span></div>
                                </div>
                            </a><a class="block-slideshow__slide" href="#">
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                    style="background-image: url('{{ asset('public') }}/coot_assets/images/slides/slide-2.jpg')">
                                </div>
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                    style="background-image: url('{{ asset('public') }}/coot_assets/images/slides/slide-2-mobile.jpg')">
                                </div>
                                <div class="block-slideshow__slide-content">
                                    <div class="block-slideshow__slide-title">Screwdrivers<br>Professional Tools
                                    </div>
                                    <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.<br>Etiam pharetra laoreet dui quis
                                        molestie.</div>
                                    <div class="block-slideshow__slide-button"><span class="btn btn-primary btn-lg">Shop
                                            Now</span></div>
                                </div>
                            </a><a class="block-slideshow__slide" href="#">
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                    style="background-image: url('{{ asset('public') }}/coot_assets/images/slides/slide-3.jpg')">
                                </div>
                                <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                    style="background-image: url('{{ asset('public') }}/coot_assets/images/slides/slide-3-mobile.jpg')">
                                </div>
                                <div class="block-slideshow__slide-content">
                                    <div class="block-slideshow__slide-title">One more<br>Unique header</div>
                                    <div class="block-slideshow__slide-text">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit.<br>Etiam pharetra laoreet dui quis
                                        molestie.</div>
                                    <div class="block-slideshow__slide-button"><span class="btn btn-primary btn-lg">Shop
                                            Now</span></div>
                                </div>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .block-slideshow / end -->
    <!-- .block-features -->
    @include('Frontend.Page.components.homeFeature')
    <!-- .block-features / end -->
    <!-- .block-products-carousel -->
    <div class="block block-products-carousel" data-layout="grid-4">
        <div class="container">
            <div class="block-header">
                <h3 class="block-header__title">Featured Products</h3>
                <div class="block-header__divider"></div>
                <ul class="block-header__groups-list">
                    <li><button type="button" class="block-header__group block-header__group--active">All</button></li>
                </ul>
                <div class="block-header__arrows-list">
                    <button class="block-header__arrow block-header__arrow--left" type="button">
                        <i class="fa fa-angle-left"></i>
                    </button>
                    <button class="block-header__arrow block-header__arrow--right" type="button">
                        <i class="fa fa-angle-right"></i>
                    </button>
                </div>
            </div>
            <div class="block-products-carousel__slider">
                <div class="block-products-carousel__preloader"></div>
                <div class="owl-carousel">
                    @foreach ($featureds as $product)
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
                                        <div class="product-card__badge product-card__badge--new">New</div>
                                    </div>
                                    <div class="product-card__image">
                                        <a href="#">
                                            <img src="{{ asset('public/images/product/' . $product->thumb) }}"
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
                                        <div class="product-card__availability">Availability: <span class="text-success">In
                                                Stock</span></div>

                                        @include('Frontend.components.productPrice', [
                                            'product' => $product,
                                        ])
                                        @include('Frontend.components.addToCart', ['product' => $product])
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- @endforeach --}}
                </div>
            </div>
        </div>
    </div>
    <!-- .block-products-carousel / end -->
    <!-- .block-banner -->
    {{-- <div class="block block-banner">
        <div class="container"><a href="#" class="block-banner__body">
                <div class="block-banner__image block-banner__image--desktop"
                    style="background-image: url('images/banners/banner-1.jpg')"></div>
                <div class="block-banner__image block-banner__image--mobile"
                    style="background-image: url('images/banners/banner-1-mobile.jpg')"></div>
                <div class="block-banner__title">Hundreds<br class="block-banner__mobile-br">Hand Tools</div>
                <div class="block-banner__text">Hammers, Chisels, Universal Pliers, Nippers, Jigsaws, Saws</div>
                <div class="block-banner__button"><span class="btn btn-sm btn-primary">Shop Now</span></div>
            </a>
        </div>
    </div> --}}
    <!-- .block-banner / end -->
    <!-- .block-products -->
    <div class="block block-products block-products--layout--large-first">
        <div class="container">
            <div class="block-header">
                <h3 class="block-header__title">Bestsellers</h3>
                <div class="block-header__divider"></div>
            </div>
            @php
                // Best Seller Banner Product
                $bestSeller = $featureds->first();
            @endphp
            <div class="block-products__body">
                <div class="block-products__featured">
                    <div class="block-products__featured-item">
                        <div class="product-card">
                            <button class="product-card__quickview" type="button">
                                <svg width="16px" height="16px">
                                    <use xlink:href="images/sprite.svg#quickview-16"></use>
                                </svg> <span class="fake-svg-icon"></span>
                            </button>
                            <div class="product-card__badges-list">
                                <div class="product-card__badge product-card__badge--new">New</div>
                            </div>
                            <div class="product-card__image">
                                <a href="product.html">
                                    <img src="{{ asset('public/images/product/' . $bestSeller->thumb) }}"
                                        alt="{{ $bestSeller->img_alt ?? 'Product Image' }}">
                                </a>
                            </div>
                            <div class="product-card__info">
                                <div class="product-card__name">
                                    <a href="{{ route('product_details', ['id' => $bestSeller->slug]) }}">
                                        {!! Str::limit($bestSeller->title, 32, ' ...') !!}
                                    </a>
                                </div>
                                <div class="product-card__rating">
                                    <div class="rating">
                                        <div class="rating__body"><svg class="rating__star rating__star--active"
                                                width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use xlink:href="images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                    </use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div><svg class="rating__star rating__star--active" width="13px"
                                                height="12px">
                                                <g class="rating__fill">
                                                    <use xlink:href="images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                    </use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div><svg class="rating__star rating__star--active" width="13px"
                                                height="12px">
                                                <g class="rating__fill">
                                                    <use xlink:href="images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                    </use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div><svg class="rating__star rating__star--active" width="13px"
                                                height="12px">
                                                <g class="rating__fill">
                                                    <use xlink:href="images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                    </use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge rating__star--active">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div><svg class="rating__star" width="13px" height="12px">
                                                <g class="rating__fill">
                                                    <use xlink:href="images/sprite.svg#star-normal"></use>
                                                </g>
                                                <g class="rating__stroke">
                                                    <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                    </use>
                                                </g>
                                            </svg>
                                            <div class="rating__star rating__star--only-edge">
                                                <div class="rating__fill">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                                <div class="rating__stroke">
                                                    <div class="fake-svg-icon"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__rating-legend">9 Reviews</div>
                                </div>
                                <ul class="product-card__features-list">
                                    <li>Speed: 750 RPM</li>
                                    <li>Power Source: Cordless-Electric</li>
                                    <li>Battery Cell Type: Lithium</li>
                                    <li>Voltage: 20 Volts</li>
                                    <li>Battery Capacity: 2 Ah</li>
                                </ul>
                            </div>
                            <div class="product-card__actions">
                                <div class="product-card__availability">Availability: <span class="text-success">In
                                        Stock</span></div>
                                @include('Frontend.components.productPrice', ['product' => $bestSeller])
                                @include('Frontend.components.addToCart', ['product' => $bestSeller])
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-products__list">
                    @foreach ($featureds as $key => $product)
                        @if ($key < 6)
                            <div class="block-products__list-item">
                                <div class="product-card">
                                    <button class="product-card__quickview" type="button"><svg width="16px"
                                            height="16px">
                                            <use xlink:href="images/sprite.svg#quickview-16"></use>
                                        </svg> <span class="fake-svg-icon"></span></button>
                                    <div class="product-card__badges-list">
                                        <div class="product-card__badge product-card__badge--hot">Hot</div>
                                    </div>
                                    <div class="product-card__image">
                                        <a href="product.html">
                                            <img src="{{ asset('public/images/product/' . $product->thumb) }}"
                                                alt="{{ $product->img_alt ?? 'Product Image' }}">
                                        </a>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__name">
                                            <a href="product.html">
                                                <a href="{{ route('product_details', ['id' => $product->slug]) }}">
                                                    {!! Str::limit($product->title, 32, ' ...') !!}
                                                </a>
                                            </a>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body"><svg class="rating__star rating__star--active"
                                                        width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div><svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div><svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div><svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div><svg class="rating__star rating__star--active" width="13px"
                                                        height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                            </use>
                                                        </g>
                                                    </svg>
                                                    <div class="rating__star rating__star--only-edge rating__star--active">
                                                        <div class="rating__fill">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                        <div class="rating__stroke">
                                                            <div class="fake-svg-icon"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">11 Reviews</div>
                                        </div>
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
                                                class="text-success">In
                                                Stock</span>
                                        </div>

                                        @include('Frontend.components.productPrice', [
                                            'product' => $product,
                                        ])
                                        @include('Frontend.components.addToCart', ['product' => $product])
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- .block-products / end -->
    <!-- .block-categories -->
    <div class="block block--highlighted block-categories block-categories--layout--classic">
        <div class="container">
            <div class="block-header">
                <h3 class="block-header__title">Popular Categories</h3>
                <div class="block-header__divider"></div>
            </div>
            <div class="block-categories__list">
                @foreach ($categories as $category)
                    <div class="block-categories__item category-card category-card--layout--classic">
                        <div class="category-card__body">
                            <div class="category-card__image">
                                <a href="#">
                                    <img src="{{ asset('public/images/category/' . $category->images) }}"
                                        alt="{{ $category->title }}">
                                </a>
                            </div>
                            <div class="category-card__content">
                                <div class="category-card__name">
                                    <a href="{{ url('category') }}/{{ $category->slug }}">{{ $category->title }}</a>
                                </div>
                                <div class="category-card__all">
                                    <a href="{{ url('category') }}/{{ $category->slug }}">Show All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- .block-categories / end -->
    <!-- .block-products-carousel -->
    <div class="block block-products-carousel" data-layout="horizontal">
        <div class="container">
            <div class="block-header">
                <h3 class="block-header__title">New Arrivals</h3>
                <div class="block-header__divider"></div>
                <ul class="block-header__groups-list">
                    <li><button type="button" class="block-header__group block-header__group--active">All</button></li>
                    <li><button type="button" class="block-header__group">Power Tools</button></li>
                    <li><button type="button" class="block-header__group">Hand Tools</button></li>
                    <li><button type="button" class="block-header__group">Plumbing</button></li>
                </ul>
                <div class="block-header__arrows-list"><button class="block-header__arrow block-header__arrow--left"
                        type="button">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                    </button>
                    <button class="block-header__arrow block-header__arrow--right" type="button">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <div class="block-products-carousel__slider">
                <div class="block-products-carousel__preloader"></div>
                <div class="owl-carousel">

                    @foreach ($newArrivals as $newArrival)
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
                                        <div class="product-card__badge product-card__badge--new">New</div>
                                    </div>
                                    <div class="product-card__image">

                                        <a href="{{ url('product/' . $newArrival->slug) }}">
                                            <img src="{{ asset('public/images/product/' . $product->thumb) }}"
                                                alt="{{ $product->img_alt ?? 'Product Image' }}">
                                        </a>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__name">
                                            <a
                                                href="{{ url('product/' . $newArrival->slug) }}">{{ $newArrival->title }}</a>
                                        </div>

                                        {{-- Static Rating Stars --}}
                                        <div class="product-card__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    @for ($i = 0; $i < 4; $i++)
                                                        <svg class="rating__star rating__star--active" width="13px"
                                                            height="12px">
                                                            <g class="rating__fill">
                                                                <use xlink:href="images/sprite.svg#star-normal"></use>
                                                            </g>
                                                            <g class="rating__stroke">
                                                                <use xlink:href="images/sprite.svg#star-normal-stroke">
                                                                </use>
                                                            </g>
                                                        </svg>
                                                    @endfor
                                                    <svg class="rating__star" width="13px" height="12px">
                                                        <g class="rating__fill">
                                                            <use xlink:href="images/sprite.svg#star-normal"></use>
                                                        </g>
                                                        <g class="rating__stroke">
                                                            <use xlink:href="images/sprite.svg#star-normal-stroke"></use>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-legend">9 Reviews</div>
                                        </div>

                                        {{-- Optional Features (could be dynamic if stored in DB) --}}
                                        <ul class="product-card__features-list">
                                            <li>Speed: 750 RPM</li>
                                            <li>Power Source: Cordless-Electric</li>
                                            <li>Battery Cell Type: Lithium</li>
                                            <li>Voltage: 20 Volts</li>
                                            <li>Battery Capacity: 2 Ah</li>
                                        </ul>
                                    </div>

                                    <div class="product-card__actions">
                                        <div class="product-card__availability">
                                            Availability:
                                            <span class="{{ $newArrival->qty > 0 ? 'text-success' : 'text-danger' }}">
                                                {{ $newArrival->qty > 0 ? 'In Stock' : 'Out of Stock' }}
                                            </span>
                                        </div>

                                        @include('Frontend.components.productPrice', [
                                            'product' => $product,
                                        ])
                                        @include('Frontend.components.addToCart', ['product' => $product])
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- .block-products-carousel / end -->
    <!-- .block-posts -->
    <div class="block block-posts block-posts--layout--list-sm" data-layout="list-sm">
        <div class="container">
            <div class="block-header">
                <h3 class="block-header__title">Latest News</h3>
                <div class="block-header__divider"></div>
                <div class="block-header__arrows-list">
                    <button class="block-header__arrow block-header__arrow--left" type="button">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                    </button>
                    <button class="block-header__arrow block-header__arrow--right" type="button">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <div class="block-posts__slider">
                <div class="owl-carousel">
                    @foreach ($blogs as $blog)
                        <div class="post-card">
                            <div class="post-card__image">
                                <a href="#">
                                    <img src="{{ asset('public/images/blogs') }}/{{ $blog->images }}" alt="{{ $blog->title ?? 'N/A' }}">
                                </a>
                            </div>
                            <div class="post-card__info">
                                <div class="post-card__category"><a href="#">Special Offers</a></div>
                                <div class="post-card__name"><a href="#">{!! Str::limit($blog->title, 80, ' ...') !!}</a></div>
                                <div class="post-card__date">October 19, 2019</div>
                                <div class="post-card__content">{!! Str::limit($blog->title, 80, ' ...') !!}</div>
                                <div class="post-card__read-more">
                                    <a href="{{ url('blogs') }}/{{ $blog->slug }}" class="btn btn-secondary btn-sm">
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="post-card">
                        <div class="post-card__image"><a href="#"><img
                                    src="{{ asset('public') }}/coot_assets/images/posts/post-1.jpg" alt=""></a>
                        </div>
                        <div class="post-card__info">
                            <div class="post-card__category"><a href="#">Special Offers</a></div>
                            <div class="post-card__name"><a href="#">Philosophy That Addresses Topics Such As
                                    Goodness</a></div>
                            <div class="post-card__date">October 19, 2019</div>
                            <div class="post-card__content">In one general sense, philosophy is associated with
                                wisdom, intellectual culture and a search for knowledge. In that sense, all
                                cultures...</div>
                            <div class="post-card__read-more"><a href="#" class="btn btn-secondary btn-sm">Read
                                    More</a></div>
                        </div>
                    </div>
                    <div class="post-card">
                        <div class="post-card__image"><a href="#"><img
                                    src="{{ asset('public') }}/coot_assets/images/posts/post-10.jpg" alt=""></a>
                        </div>
                        <div class="post-card__info">
                            <div class="post-card__category"><a href="#">Special Offers</a></div>
                            <div class="post-card__name"><a href="#">Engineers Use Many Methods To Minimize
                                    Logic Functions</a></div>
                            <div class="post-card__date">January 1, 2019</div>
                            <div class="post-card__content">In one general sense, philosophy is associated with
                                wisdom, intellectual culture and a search for knowledge. In that sense, all
                                cultures...</div>
                            <div class="post-card__read-more"><a href="#" class="btn btn-secondary btn-sm">Read
                                    More</a></div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- .block-posts / end -->
    <!-- .block-brands -->
    <div class="block block-brands">
        <div class="container">
            <div class="block-brands__slider">
                <div class="owl-carousel">
                    @foreach ($brands as $brand)
                        <div class="block-brands__item">
                            <a href="#">{{ $brand->brand->title ?? 'N/A' }}</a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- .block-brands / end -->
@endsection
