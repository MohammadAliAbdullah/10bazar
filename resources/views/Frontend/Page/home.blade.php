@extends('Frontend.Layout.master')
@section('meta_title', $seo->meta_title)
@section('meta_keywords', $seo->meta_keyword)
@section('meta_description', $seo->meta_description)
@section('content')
    <style>
        #product1 {
            text-align: center;
        }

        #product1 .pro {
            width: 23%;
            min-width: 100%;
            padding: 10px 12px;
            border: 1px solid #cce7d0;
            border-radius: 15px;
            cursor: pointer;
            box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.02);
            margin: 15px 0;
            transition: 0.2s ease;
            position: relative;
        }

        #product1 .pro:hover {
            transform: translateY(-3px);
            box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.06);
        }

        /* #product1 .pro:hover {
                            transform: translateY(-10px);
                            box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.15);
                        } */

        #product1 .pro img {
            width: 100%;
            border-radius: 20px;
        }

        #product1 .pro .des {
            text-align: start;
            padding: 10px 0;
        }

        #product1 .pro .des span {
            color: #606063;
            font-size: 12px;
        }

        #product1 .pro .des h5 {
            padding-top: 7px;
            color: #1a1a1a;
            font-size: 14px;
        }

        #product1 .pro .des i {
            font-size: 12px;
            color: rgb(243, 181, 25)
        }

        #product1 .pro .des h4 {
            font-size: 15px;
            padding-top: 7px;
            font-weight: 700;
            color: #088178;
        }

        .button-container {
            position: absolute;
            bottom: 10px;
            right: 10px;
            display: flex;
            gap: 10px;
        }

        .cart,
        .eye {
            width: 30px;
            height: 30px;
            line-height: 30px;
            border-radius: 50px;
            background-color: #e8f6ea;
            font-weight: 500;
            color: #088178;
            border: 1px solid #cce7d0;
            text-align: center;
        }

        .cart:hover,
        .eye:hover {
            background-color: #088178;
            color: white;
        }

        .discount-tag {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #ff4757;
            color: white;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 12px;
            font-weight: bold;
        }
    </style>
    <!-- .block-slideshow -->
    <div class="block-slideshow block-slideshow--layout--with-departments block">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9 offset-lg-3">
                    <div class="block-slideshow__body">
                        <div class="owl-carousel">
                            @foreach ($slides as $slide)
                                <a class="block-slideshow__slide" href="{{ $slide->url ?? '#' }}">
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--desktop"
                                        style="background-image: url('{{ asset('public/images/slide/' . $slide->images) }}')">
                                    </div>
                                    <div class="block-slideshow__slide-image block-slideshow__slide-image--mobile"
                                        style="background-image: url('{{ asset('public/images/slide/' . $slide->mobile_image ?? $slide->images) }}')">
                                    </div>
                                    <div class="block-slideshow__slide-content">
                                        <div class="block-slideshow__slide-title">
                                            {!! $slide->title ?? '' !!}
                                        </div>
                                        <div class="block-slideshow__slide-text">
                                            {!! $slide->description ?? '' !!}
                                        </div>
                                        @if (!empty($slide->button_text))
                                            <div class="block-slideshow__slide-button">
                                                <span class="btn btn-primary btn-lg">{{ $slide->button_text }}</span>
                                            </div>
                                        @endif
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .block-slideshow / end -->
    <!-- .block-features -->
    {{-- @include('Frontend.Page.components.homeFeature') --}}
    <!-- .block-features / end -->
    <!-- .block-products-carousel -->
    {{-- customs start --}}
    {{-- customs --}}
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
                <h3 class="block-header__title">Featured</h3>
                <div class="block-header__divider"></div>
            </div>

            <section id="product1" class="section-p1">
                <div class="row">
                    <!-- Product 1 -->
                    <div class="col-6 col-md-3">
                        <div class="pro">
                            <div class="discount-tag">20% OFF</div>
                            <img src="https://i.postimg.cc/kg9YYbTn/f1.jpg" alt="">
                            <div class="des">
                                <span>adidas</span>
                                <h5>Carton Astronault Tshirts</h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>
                                    <del>৳78000000</del>
                                    ৳780000
                                </h4>
                            </div>
                            <div class="button-container">
                                <a href="#" class="eye"><i class="fas fa-eye"></i></a>
                                <a href="#" class="cart"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="pro">
                            <img src="https://i.postimg.cc/kg9YYbTn/f1.jpg" alt="">
                            <div class="des">
                                <span>adidas</span>
                                <h5>Carton Astronault Tshirts</h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>$78</h4>
                            </div>
                            <div class="button-container">
                                <a href="#" class="eye"><i class="fas fa-eye"></i></a>
                                <a href="#" class="cart"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="pro">
                            <img src="https://i.postimg.cc/kg9YYbTn/f1.jpg" alt="">
                            <div class="des">
                                <span>adidas</span>
                                <h5>Carton Astronault Tshirts</h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>$78</h4>
                            </div>
                            <div class="button-container">
                                <a href="#" class="eye"><i class="fas fa-eye"></i></a>
                                <a href="#" class="cart"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="pro">
                            <img src="https://i.postimg.cc/kg9YYbTn/f1.jpg" alt="">
                            <div class="des">
                                <span>adidas</span>
                                <h5>Carton Astronault Tshirts</h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>$78</h4>
                            </div>
                            <div class="button-container">
                                <a href="#" class="eye"><i class="fas fa-eye"></i></a>
                                <a href="#" class="cart"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="pro">
                            <img src="https://i.postimg.cc/kg9YYbTn/f1.jpg" alt="">
                            <div class="des">
                                <span>adidas</span>
                                <h5>Carton Astronault Tshirts</h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>$78</h4>
                            </div>
                            <div class="button-container">
                                <a href="#" class="eye"><i class="fas fa-eye"></i></a>
                                <a href="#" class="cart"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="pro">
                            <img src="https://i.postimg.cc/kg9YYbTn/f1.jpg" alt="">
                            <div class="des">
                                <span>adidas</span>
                                <h5>Carton Astronault Tshirts</h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>$78</h4>
                            </div>
                            <div class="button-container">
                                <a href="#" class="eye"><i class="fas fa-eye"></i></a>
                                <a href="#" class="cart"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="pro">
                            <img src="https://i.postimg.cc/kg9YYbTn/f1.jpg" alt="">
                            <div class="des">
                                <span>adidas</span>
                                <h5>Carton Astronault Tshirts</h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>$78</h4>
                            </div>
                            <div class="button-container">
                                <a href="#" class="eye"><i class="fas fa-eye"></i></a>
                                <a href="#" class="cart"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="pro">
                            <img src="https://i.postimg.cc/kg9YYbTn/f1.jpg" alt="">
                            <div class="des">
                                <span>adidas</span>
                                <h5>Carton Astronault Tshirts</h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>$78</h4>
                            </div>
                            <div class="button-container">
                                <a href="#" class="eye"><i class="fas fa-eye"></i></a>
                                <a href="#" class="cart"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                
                    <!-- Additional products can follow the same pattern -->
                </div>
            </section>

        </div>
    </div>
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

            <section id="product1" class="section-p1">
                <div class="row">
                    <!-- Product 1 -->
                    <div class="col-6 col-md-3">
                        <div class="pro">
                            <div class="discount-tag">20% OFF</div>
                            <img src="https://i.postimg.cc/kg9YYbTn/f1.jpg" alt="">
                            <div class="des">
                                <span>adidas</span>
                                <h5>Carton Astronault Tshirts</h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>
                                    <del>৳78000000</del>
                                    ৳780000
                                </h4>
                            </div>
                            <div class="button-container">
                                <a href="#" class="eye"><i class="fas fa-eye"></i></a>
                                <a href="#" class="cart"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="pro">
                            <img src="https://i.postimg.cc/kg9YYbTn/f1.jpg" alt="">
                            <div class="des">
                                <span>adidas</span>
                                <h5>Carton Astronault Tshirts</h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>$78</h4>
                            </div>
                            <div class="button-container">
                                <a href="#" class="eye"><i class="fas fa-eye"></i></a>
                                <a href="#" class="cart"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="pro">
                            <img src="https://i.postimg.cc/kg9YYbTn/f1.jpg" alt="">
                            <div class="des">
                                <span>adidas</span>
                                <h5>Carton Astronault Tshirts</h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>$78</h4>
                            </div>
                            <div class="button-container">
                                <a href="#" class="eye"><i class="fas fa-eye"></i></a>
                                <a href="#" class="cart"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="pro">
                            <img src="https://i.postimg.cc/kg9YYbTn/f1.jpg" alt="">
                            <div class="des">
                                <span>adidas</span>
                                <h5>Carton Astronault Tshirts</h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>$78</h4>
                            </div>
                            <div class="button-container">
                                <a href="#" class="eye"><i class="fas fa-eye"></i></a>
                                <a href="#" class="cart"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="pro">
                            <img src="https://i.postimg.cc/kg9YYbTn/f1.jpg" alt="">
                            <div class="des">
                                <span>adidas</span>
                                <h5>Carton Astronault Tshirts</h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>$78</h4>
                            </div>
                            <div class="button-container">
                                <a href="#" class="eye"><i class="fas fa-eye"></i></a>
                                <a href="#" class="cart"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="pro">
                            <img src="https://i.postimg.cc/kg9YYbTn/f1.jpg" alt="">
                            <div class="des">
                                <span>adidas</span>
                                <h5>Carton Astronault Tshirts</h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>$78</h4>
                            </div>
                            <div class="button-container">
                                <a href="#" class="eye"><i class="fas fa-eye"></i></a>
                                <a href="#" class="cart"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="pro">
                            <img src="https://i.postimg.cc/kg9YYbTn/f1.jpg" alt="">
                            <div class="des">
                                <span>adidas</span>
                                <h5>Carton Astronault Tshirts</h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>$78</h4>
                            </div>
                            <div class="button-container">
                                <a href="#" class="eye"><i class="fas fa-eye"></i></a>
                                <a href="#" class="cart"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="pro">
                            <img src="https://i.postimg.cc/kg9YYbTn/f1.jpg" alt="">
                            <div class="des">
                                <span>adidas</span>
                                <h5>Carton Astronault Tshirts</h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>$78</h4>
                            </div>
                            <div class="button-container">
                                <a href="#" class="eye"><i class="fas fa-eye"></i></a>
                                <a href="#" class="cart"><i class="fas fa-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Additional products can follow the same pattern -->
                </div>
            </section>
        </div>
    </div>
    <!-- .block-products / end -->
    <!-- .block-categories -->
    <!-- .block-categories / end -->
    <!-- .block-products-carousel -->
    <div class="block block-products-carousel" data-layout="horizontal">
        <div class="container">
            <div class="block-header">
                <h3 class="block-header__title">New Arrivals</h3>
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
                                    @include('Frontend.components.productDiscount', [
                                        'product' => $newArrival,
                                    ])
                                    <div class="product-card__image">

                                        <a href="{{ url('product/' . $newArrival->slug) }}">
                                            <img src="{{ asset('public/coot_assets/images/products/' . $newArrival->thumb) }}"
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
                                            'product' => $newArrival,
                                        ])
                                        @include('Frontend.components.addToCart', [
                                            'product' => $newArrival,
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
                                    <img src="{{ asset('public/images/blogs') }}/{{ $blog->images }}"
                                        alt="{{ $blog->title ?? 'N/A' }}">
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
