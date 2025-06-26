@php
    $regular = $product->regular_price ?? 0;
    $sales = $product->sales_price ?? 0;
    $discount = $regular > 0 && $sales > 0 && $sales < $regular ? round((($regular - $sales) / $regular) * 100) : null;
@endphp

@if ($discount)
    <div class="discount-tag"> -{{ $discount }}% {{ __('OFF')}}</div>
@endif
