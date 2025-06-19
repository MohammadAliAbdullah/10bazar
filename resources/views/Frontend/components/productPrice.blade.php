<h4>
    @if ($product)
        @if ($product->sales_price && $product->sales_price < $product->regular_price)
            <del>৳{{ number_format($product->regular_price, 2) }}</del>
                ৳{{ number_format($product->sales_price, 2) }}
            @else
                ৳{{ number_format($product->regular_price, 2) }}
        @endif
    @endif
</h4>
