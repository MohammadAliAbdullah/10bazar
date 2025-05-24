<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>10 Bazar</title>
    <link rel="icon" type="image/png" href="{{ asset('public') }}/coot_assets/images/favicon.png"><!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i"><!-- css -->
    <link rel="stylesheet" href="{{ asset('public') }}/coot_assets/vendor/bootstrap-4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="{{ asset('public') }}/coot_assets/vendor/owl-carousel-2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('public') }}/coot_assets/css/style.css"><!-- js -->
    <script src="{{ asset('public') }}/coot_assets/vendor/jquery-3.3.1/jquery.min.js"></script>
    <script src="{{ asset('public') }}/coot_assets/vendor/bootstrap-4.2.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('public') }}/coot_assets/vendor/owl-carousel-2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('public') }}/coot_assets/vendor/nouislider-12.1.0/nouislider.min.js"></script>
    <script src="{{ asset('public') }}/coot_assets/js/number.js"></script>
    <script src="{{ asset('public') }}/coot_assets/js/main.js"></script>
    <script src="{{ asset('public') }}/coot_assets/vendor/svg4everybody-2.1.9/svg4everybody.min.js"></script>
    <script>
        svg4everybody();
    </script>
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="{{ asset('public') }}/coot_assets/vendor/fontawesome-5.6.1/css/all.min.css">
    <!-- font - coot_assets -->
    <link rel="stylesheet" href="{{ asset('public') }}/coot_assets/fonts/coot_assets/coot_assets.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97489509-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-97489509-6');
    </script>
</head>

<body><!-- quickview-modal -->
    <div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content"></div>
        </div>
    </div>
    <!-- quickview-modal / end -->
    <!-- mobilemenu -->
    @include('Frontend.Layout.partials.mobileMenu')
    <!-- mobilemenu / end -->
    <!-- site -->
    <div class="site">
        <!-- mobile site__header -->
        @include('Frontend.Layout.partials.mobileHeader')
        <!-- mobile site__header / end -->
        <!-- desktop site__header -->
        @include('Frontend.Layout.partials.header')
        <!-- desktop site__header / end -->
        <!-- site__body -->
        <div class="site__body">
            @yield('content')
        </div>
        <!-- site__body / end -->
        <!-- site__footer -->
        @include('Frontend.Layout.partials.footer')
        <!-- site__footer / end -->
    </div>
    <!-- site / end -->
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.itemAddToCart').click(function() {
            var productId = $(this).data('id');
            var productId = $(this).data('id');

            $.post('{{ route('cart.add') }}', {
                id: productId
            }, function(response) {
                if (response.success) {
                    $('#cartCount').text(response.cart_count);
                    Swal.fire({
                        icon: 'success',
                        title: 'Added to Cart!',
                        text: response.message,
                        timer: 1500,
                        showConfirmButton: false,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops!',
                        text: 'Something went wrong!'
                    });
                }
            }).fail(function(xhr) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: xhr.responseJSON?.message || 'An error occurred.'
                });
            });
        });

        function updateQuantity(productId, quantity) {
            $.post('{{ route('cart.update') }}', {
                id: productId,
                quantity: quantity
            }, function(res) {
                if (res.success) {
                    Swal.fire({
                        icon: 'success',
                        title: res.message,
                        timer: 500,
                        position: 'center',
                        toast: true,
                        timerProgressBar: true,
                        showConfirmButton: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });
                    // Optionally refresh quantity display
                    const row = $('tr[data-id="' + productId + '"]');
                    row.find('.quantity').val(quantity);
                    row.find('.itemTotalPrice').text(parseFloat(res.total_price).toFixed(2));
                    $('.itemSubTotal').text(parseFloat(res.sub_total).toFixed(2));
                    $('.itemTotal').text(parseFloat(res.grand_total).toFixed(2));
                    $('#cartCount').text(res.cart_count);
                }
            });
        }

        $('.increment').click(function() {
            let row = $(this).closest('tr');
            let productId = row.data('id');
            let quantity = parseInt(row.find('.quantity').val());
            console.log('productId', productId);
            console.log('quantity', quantity);
            // return false;
            updateQuantity(productId, quantity);
        });

        $('.decrement').click(function() {
            let row = $(this).closest('tr');
            let productId = row.data('id');
            let quantity = parseInt(row.find('.quantity').val());
            console.log(quantity);
            // return false;
            if (quantity > 0) {
                updateQuantity(productId, quantity);
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'Minimum quantity is 1',
                    timer: 1500,
                    showConfirmButton: false,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
            }
        });

        $(document).on('click', '.itemRemove', function() {
            let row = $(this).closest('tr');
            let productId = row.data('id');

            Swal.fire({
                title: 'Are you sure?',
                text: 'This item will be removed from your cart.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, remove it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.post('{{ route('cart.remove') }}', {
                        id: productId
                    }, function(res) {
                        if (res.success) {
                            row.remove();
                            $('.itemSubTotal').text(parseFloat(res.sub_total).toFixed(2));
                            $('.itemTotal').text(parseFloat(res.grand_total).toFixed(2));
                            $('#cartCount').text(res.cart_count);
                            Swal.fire({
                                icon: 'success',
                                title: res.message,
                                timer: 1500,
                                timerProgressBar: true,
                                showConfirmButton: false,
                                didOpen: () => {
                                    Swal.showLoading();
                                }
                            });
                        }
                    });
                }
            });
        });

        $(document).on('click', '#cartViewButton', function() {
            if (!$(this).hasClass('indicator--opened')) {
                // If the class 'indicator--open' is not present, do nothing
                return;
            }
            var loadingHtml = `<div class="dropcart__loading">
                <div class="dropcart__loading-spinner"></div>
                <div class="dropcart__loading-text">Loading cart...</div>
            </div>`;
            $('#headerCartList').html(loadingHtml);
            $.ajax({
                url: "{{ route('headerCart.list') }}",
                method: "GET",
                success: function(res) {
                    Swal.fire({
                        title: 'Loading cart...',
                        // html: 'Please wait while we update your cart.',
                        didOpen: () => {
                            Swal.showLoading();
                        },
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        showConfirmButton: false,
                        timer: 400, // simulate loading delay
                        timerProgressBar: true
                    }).then(() => {
                        let html = `<div class="dropcart__products-list">`;

                        Object.values(res.items).forEach(item => {
                            html += `
                <div class="dropcart__product">
                    <div class="dropcart__product-image">
                        <a href="/product/${item.attributes.slug}">
                            <img src="${item.attributes.image ?? '/default-image.jpg'}" alt="image">
                        </a>
                    </div>
                    <div class="dropcart__product-info">
                        <div class="dropcart__product-name">
                            <a href="/product/${item.attributes.slug}">${item.name}</a>
                        </div>
                        <ul class="dropcart__product-options">
                            ${item.attributes.colored ? `<li>Color: ${item.attributes.colored}</li>` : ''}
                        </ul>
                        <div class="dropcart__product-meta">
                            <span class="dropcart__product-quantity">${item.quantity}</span> x 
                            <span class="dropcart__product-price">$${(item.price).toLocaleString()}</span>
                        </div>
                    </div>
                    <button type="button"
                        class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon remove-from-cart"
                        data-id="${item.id}">
                        <svg width="10px" height="10px">
                            <use xlink:href="images/sprite.svg#cross-10"></use>
                        </svg>
                    </button>
                </div>`;
                        });

                        html += `</div> <!-- /.dropcart__products-list -->`;

                        html += `
            <div class="dropcart__totals">
                <table>
                    <tr>
                        <th>Subtotal</th>
                        <td>$${res.subtotal}</td>
                    </tr>
                    <tr>
                        <th>Shipping</th>
                        <td>$0.00</td>
                    </tr>
                    <tr>
                        <th>Tax</th>
                        <td>$0.00</td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <td>$${res.subtotal}</td>
                    </tr>
                </table>
            </div>`;

                        $('#headerCartList').html(html);

                        // Show success message
                        // Swal.fire({
                        //     icon: 'success',
                        //     title: 'Cart Updated',
                        //     showConfirmButton: false,
                        //     timer: 1000
                        // });
                    });
                }


            });
        });
    </script>
</body>

</html>
