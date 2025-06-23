@extends('Frontend.Layout.master')
@section('meta_title', $seo->meta_title)
@section('meta_keywords', $seo->meta_keyword)
@section('meta_description', $seo->meta_description)
@section('content')
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
                                        style="background-image: url('{{ asset('public/images/slide/' . ($slide->mobile_image ?? $slide->images)) }}')">
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
                                                <span class="btn btn-primary btn-lg">{{ __($slide->button_text) }}</span>
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
    @include('Frontend.Page.components.homeFeature')
    <div class="block block-products block-products--layout--large-first">
        <div class="container">
            <div class="block-header">
                <h3 class="block-header__title">{{ __('Featured') }}</h3>
                <div class="block-header__divider"></div>
            </div>
            <section id="product1" class="section-p1">
                <div class="row">
                    @foreach ($featureds as $product)
                        @include('Frontend.components.productCard', ['product' => $product])
                    @endforeach
                </div>
            </section>
        </div>
    </div>
    <div class="block block-products block-products--layout--large-first">
        <div class="container">
            <div class="block-header">
                <h3 class="block-header__title">{{ __('Bestsellers') }}</h3>
                <div class="block-header__divider"></div>
            </div>

            <section id="product1" class="section-p1">
                <div class="row">
                    @foreach ($featureds as $product)
                        @include('Frontend.components.productCard', ['product' => $product])
                    @endforeach
                </div>
            </section>
        </div>
    </div>
    <!-- .block-products / end -->
    <section id="banner" class="section-m1">
        <h4>{{ __('Repair Service') }}</h4>
        <h2>{{ __('Up to') }} <span>70% {{ __('off') }}</span> – {{ __('All Tshirts and Accessories') }}</h2>
        <button class="btn normal">{{ __('Explore more') }}</button>
    </section>
    <!-- .block-products-carousel -->
    <div class="block block-products-carousel" data-layout="horizontal" style="padding-top: 10; padding-bottom: 0">
        <div class="container">
            <div class="block-header">
                <h3 class="block-header__title">{{ __('New Arrivals') }}</h3>
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
                <div class="owl-carousel owl-theme section-p1" id="product1">
                    @foreach ($newArrivals as $product)
                        <div class="pro">
                            @include('Frontend.components.productDiscount', [
                                'product' => $product,
                            ])
                            @if ($product)
                                <a href="#">
                                    @if (isset($product->thumb) && $product->thumb)
                                        <img src="{{ asset('public/coot_assets/images/products/' . $product->thumb) }}"
                                            alt="{{ $product->img_alt ?? 'Product Image' }}">
                                    @else
                                        <img src="{{ asset('public/coot_assets/no_image.png') }}"
                                            alt="{{ $product->img_alt ?? 'Product Image' }}">
                                    @endif
                                </a>
                            @endif
                            <div class="des">
                                <span>{{ $product->brand->title ?? __('Brand') }}</span>
                                <h5>
                                    <a href="{{ route('product_details', ['id' => $product->slug]) }}">
                                        {!! Str::limit($product->title, 32, ' ...') !!}
                                    </a>
                                </h5>
                                @include('Frontend.components.ratingReview')
                                @include('Frontend.components.productPrice', ['product' => $product])
                            </div>
                            @include('Frontend.components.addToCart', ['product' => $product])
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
                <h3 class="block-header__title">{{ __('Latest News') }}</h3>
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
                                <div class="post-card__category"><a href="#">{{ __('Special Offers') }}</a></div>
                                <div class="post-card__name"><a href="{{ url('blogs') }}/{{ $blog->slug }}">{!! Str::limit($blog->title, 80, ' ...') !!}</a></div>
                                <div class="post-card__date">October 19, 2019</div>
                                <div class="post-card__content">{!! Str::limit($blog->title, 80, ' ...') !!}</div>
                                <div class="post-card__read-more">
                                    <a href="{{ url('blogs') }}/{{ $blog->slug }}" class="btn btn-secondary btn-sm">
                                        {{ __('Read More') }}
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
    <div class="container">
        <section id="feature" class="section-p1">
            @foreach ($brands as $brand)
                <div class="fe-box">
                    <a href="{{ url('shops/ceiling-fans-1') }}/{{ $brand->slug }}">
                        <img src="{{ asset('public/images/brand') }}/{{ $brand->images }}" alt="{{ $brand->title }}">
                        <h6>{{ $brand->title ?? 'N/A' }}</h6>
                    </a>
                </div>
            @endforeach
        </section>
    </div>
    <!-- .block-brands / end -->
@endsection