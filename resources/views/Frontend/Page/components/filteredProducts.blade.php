<div class="products-view__list products-list" data-layout="grid-3-sidebar" data-with-features="false">
    <div class="products-list__body">
        @if ($products->isEmpty())
            <div class="products-list__empty text-center py-5">
                <img src="{{ asset('public/coot_assets/no_product_found.png') }}" alt="" class="img-fluid">
            </div>
        @endif
        @foreach ($products as $product)
            {{-- Copy the product card from shop.blade.php --}}
            @include('Frontend.components.productCard', ['product' => $product])
        @endforeach
    </div>
</div>

@if ($products->hasPages())
    <div class="products-view__pagination">
        {!! $products->links() !!}
    </div>
@endif
