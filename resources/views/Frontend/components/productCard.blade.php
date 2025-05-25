<div class="products-list__item">
    <div class="product-card">

        {{-- Quickview Button --}}
        <button class="product-card__quickview" type="button">
            <i class="fa fa-eye"></i>
            {{-- <span class="fake-svg-icon"></span> --}}
        </button>

        {{-- Product Badges --}}
        <div class="product-card__badges-list">
            <div class="product-card__badge product-card__badge--new">New</div>
        </div>

        {{-- Product Image --}}
        <div class="product-card__image">
            <a href="{{ route('product_details', ['id' => $product->slug]) }}">
                <img src="{{ asset('public/images/product/' . $product->thumb) }}"
                    alt="{{ $product->img_alt ?? 'Product Image' }}">
            </a>
        </div>

        {{-- Product Info --}}
        <div class="product-card__info">
            <div class="product-card__name">
                <a href="{{ route('product_details', ['id' => $product->slug]) }}">
                    {!! Str::limit($product->title, 32, ' ...') !!}
                </a>
            </div>
            @include('Frontend.components.ratingReview')
        </div>

        {{-- Product Actions --}}
        <div class="product-card__actions">
            <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
            @include('Frontend.components.productPrice', [
                'product' => $product,
            ])
            @include('Frontend.components.addToCart', [
                'product' => $product,
            ])
        </div>

    </div>
</div>
