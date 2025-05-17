@php
    // Ensure $product exists with fallback/defaults
    $product = $product ?? null;
    $price = !empty($product?->sales_price) && $product->sales_price != 0 ? $product->sales_price : 0;
@endphp

@if ($product)
    {{-- <div class="product-card__buttons d-flex flex-wrap gap-2"> --}}
    <div class="product-card__buttons">
        {{-- Cart Form --}}
        {!! Form::open(['method' => 'POST', 'route' => 'cart.Store', 'class' => 'add-to-cart-form']) !!}
        {!! Form::hidden('id', $product->id) !!}
        {!! Form::hidden('name', $product->title) !!}
        {!! Form::hidden('thumbnail_img', $product->thumb) !!}
        {!! Form::hidden('price', $price) !!}
        {!! Form::hidden('quantity', 1) !!}
        {!! Form::hidden('slug', $product->slug) !!}

        <button class="btn btn-primary product-card__addtocart" type="submit" title="Add to Cart">
            <i class="fa fa-shopping-cart me-1"></i> Add To Cart
        </button>
        {!! Form::close() !!}
        
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
