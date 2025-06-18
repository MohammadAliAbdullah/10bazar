@php
    $product = $product ?? null;
    $price = !empty($product?->sales_price) && $product->sales_price != 0 ? $product->sales_price : 0;
@endphp

@if ($product)
    <div class="button-container">
        <button class="cart itemAddToCart" data-id="{{ $product->id }}" type="submit"><i
                class="fas fa-shopping-cart"></i></button>
        <button class="eye"><i class="fas fa-eye"></i></button>
    </div>
@endif
