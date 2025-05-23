@php
    $product = $product ?? null;
    $price = !empty($product?->sales_price) && $product->sales_price != 0 ? $product->sales_price : 0;
@endphp

@if ($product)
    <div class="product-card__buttons">
        <button class="btn btn-primary product-card__addtocart itemAddToCart" data-id="{{ $product->id }}" type="submit" title="Add to Cart">
            <i class="fa fa-shopping-cart me-1"></i> Add To Cart
        </button>
        {{-- quick Button --}}
        <button class="btn btn-secondary product-card__addtocart" type="button" title="Quick View">
            <i class="fa fa-eye"></i> View
        </button>
        {{-- Compare Button --}}
        {{-- <button class="btn btn-light btn-svg-icon product-card__compare" type="button" title="Compare Product">
            <svg width="16" height="16">
                <use xlink:href="{{ asset('images/sprite.svg#compare-16') }}"></use>
            </svg>
        </button> --}}
    </div>
@endif
