    <div class="col-6 col-md-3">
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
                    {{-- <img src="{{ asset('public/coot_assets/no_image.png') }}"
                        alt="{{ $product->img_alt ?? 'Product Image' }}"> --}}
                </a>
            @endif
            <div class="des">
                <span>{{ $product->brand->title ?? 'Brand' }}</span>
                <h5>
                    <a href="{{ route('product_details', ['id' => $product->slug]) }}">
                        {!! Str::limit($product->title, 32, ' ...') !!}
                    </a>
                </h5>
                @include('Frontend.components.ratingReview')
                @include('Frontend.components.productPrice', [
                    'product' => $product,
                ])
            </div>
            @include('Frontend.components.addToCart', [
                'product' => $product,
            ])
        </div>
    </div>
