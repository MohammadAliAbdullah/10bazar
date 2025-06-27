$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on('click', '.itemAddToCart', function (e) {
        e.preventDefault();
        var productId = $(this).data('id');

        $.post(window.routes.cartAdd, {
            id: productId
        }, function (response) {
            if (response.success) {
                $('#cartCountHeader, #cartCountMobileHeader').text(response.cart_count);
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
        }).fail(function (xhr) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: xhr.responseJSON?.message || 'An error occurred.'
            });
        });
    });

    function updateQuantity(productId, quantity) {
        $.post(window.routes.cartUpdate, {
            id: productId,
            quantity: quantity
        }, function (res) {
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
                $('#cartCountHeader, #cartCountMobileHeader').text(res.cart_count);
            }
        });
    }

    $(document).on('click', '.increment', function () {
        let row = $(this).closest('tr');
        let productId = row.data('id');
        let quantity = parseInt(row.find('.quantity').val());
        console.log('productId', productId);
        console.log('quantity', quantity);
        // return false;
        updateQuantity(productId, quantity);
    });

    $(document).on('click', '.decrement', function () {
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

    $(document).on('click', '.itemRemove', function () {
        let row = $(this).closest('tr') || $(this).closest('.dropcart__product');
        let productId = row.data('id') || $(this).data('id');
        // console.log(productId);

        Swal.fire({
            title: 'Are you sure?',
            text: 'This item will be removed from your cart.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, remove it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                $.post(window.routes.cartRemove, {
                    id: productId
                }, function (res) {
                    if (res.success) {
                        row.remove();
                        $('.itemSubTotal').text(parseFloat(res.sub_total).toFixed(2));
                        $('.itemTotal').text(parseFloat(res.grand_total).toFixed(2));
                        $('#cartCountHeader, #cartCountMobileHeader').text(res.cart_count);
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

    $(document).on('click', '#cartViewButton', function () {
        // alert('cartView');
        if (!$(this).hasClass('indicator--opened')) {
            // If the class 'indicator--open' is not present, do nothing
            return;
        }
        var img = window.routes.loader;
        var loadingHtml = `<div class="text-center">
        <img src="${img}" alt="Loading..." style="width: 50px; height: 50px;">
        <p>Loading cart...</p>
    </div>`;
        $('#headerCartList').html(loadingHtml);
        // return false;
        $.ajax({
            url: window.routes.headerCartList,
            method: "GET",
            success: function (res) {
                if (res.items.length === 0) {
                    $('#headerCartList').html('<h4 class="text-center pt-5 text-danger fw-bold">Your cart is empty.</h3>');
                    return;
                }
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
                    <span class="dropcart__product-price">${(item.price).toLocaleString()}</span>
                </div>
            </div>
            <button type="button"
                class="dropcart__product-remove btn btn-danger btn-sm btn-svg-icon remove-from-cart itemRemove"
                data-id="${item.id}">
               <i class="fa fa-times"></i>
            </button>
        </div>`;
                });

                html += `</div> <!-- /.dropcart__products-list -->`;

                html += `
    <div class="dropcart__totals">
        <table>
            <tr>
                <th>Subtotal</th>
                <td class="itemSubTotal">${res.subtotal}</td>
            </tr>
            <tr>
                <th>Shipping</th>
                <td>0.00</td>
            </tr>
            <tr>
                <th>Tax</th>
                <td>0.00</td>
            </tr>
            <tr>
                <th>Total</th>
                <td class="itemTotal">${res.subtotal}</td>
            </tr>
        </table>
    </div>`;

                $('#headerCartList').html(html);

            }
        });
    });
});