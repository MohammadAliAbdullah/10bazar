 @php
     $layout = isset($layout) ? $layout : 'grid';
     $style = request()->get('style') ?? $layout;
 @endphp
 <div class="{{ $style == 'list' ? 'col-12' : 'col-6 col-md-3' }}">
     <div class="{{ $style == 'list' ? 'list-product d-flex align-items-start gap-3 mb-4 p-3' : 'gird-product' }}">
         @include('Frontend.components.productDiscount', [
             'product' => $product,
         ])
         <div class="product-thumb">
             @if ($product)
                 <a href="#">
                     @if (isset($product->thumb) && $product->thumb)
                         <img src="{{ asset($product->thumb) }}" alt="{{ $product->img_alt ?? 'Product Image' }}">
                     @else
                         <img src="{{ asset('public/assets/no_image.png') }}"
                             alt="{{ $product->img_alt ?? 'Product Image' }}">
                     @endif
                 </a>
             @endif
         </div>
         <div class="product-details">
             <span>{{ $product->brand->title ?? 'Brand' }}</span>
             <h5>
                 <a href="{{ route('product_details', ['id' => $product->slug]) }}">
                     {!! Str::limit($product->title, 32, ' ...') !!}
                 </a>
             </h5>
             @include('Frontend.components.productPrice', [
                 'product' => $product,
             ])
         </div>
         <div class="action-buttons">
             @include('Frontend.components.addToCart', [
                 'product' => $product,
             ])
         </div>
     </div>
 </div>
