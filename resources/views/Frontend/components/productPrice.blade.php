<h4>
    @if ($product)
        @if ($product->sales_price && $product->sales_price < $product->regular_price)
            <del>{{ formatPrice($product->regular_price) }}</del>
            <br>
            {{ formatPrice($product->sales_price) }}
        @else
            {{ formatPrice($product->regular_price) }}
        @endif
    @endif
</h4>

