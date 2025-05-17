<div class="product-card__prices">
    @if ($product->sales_price && $product->sales_price < $product->regular_price)
        <del>${{ number_format($product->regular_price, 2) }}</del>
        <span>${{ number_format($product->sales_price, 2) }}</span>
    @else
        <span>${{ number_format($product->regular_price, 2) }}</span>
    @endif
</div>
