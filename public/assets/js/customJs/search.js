$(document).ready(function () {
    function filterProducts(page = 1) {
        let brands = [];
        let categories = [];
        let subCategories = [];
        let colors = [];
        let sizes = [];
        let prices = [];

        $('.brand:checked').each(function () {
            brands.push($(this).val());
        });
        $('.category:checked').each(function () {
            categories.push($(this).val());
        });
        $('.subCategory:checked').each(function () {
            subCategories.push($(this).val());
        });
        $('.color:checked').each(function () {
            colors.push($(this).val());
        });
        $('.size:checked').each(function () {
            sizes.push($(this).val());
        });
        $('.price:checked').each(function () {
            prices.push($(this).val());
        });

        $.ajax({
            url: window.routes.shopFilter + '?page=' + page,
            type: 'GET',
            data: {
                brands       : brands,
                categories   : categories,
                subCategories: subCategories,
                colors       : colors,
                sizes        : sizes,
                prices       : prices,
                layout       : window.routes.layout,
                order        : window.routes.order,
                limit        : window.routes.limit
            },
            beforeSend: function () {
                $('.loader').html(
                    `<div><img src="${window.routes.loader}" alt="Loading..." style="width: 20px; height: 20px;"></div>`
                );
            },
            success: function (res) {
                $('.productList').html(res.html);
                $('.loader').html('');
            },
            error: function () {
                $('.productList').html('<p>Error loading products.</p>');
            }
        });
    }

    // Trigger on filter change
    $(document).on('change', '.sort_rang', function () {
        filterProducts();
    });

    // Handle pagination links
    $(document).on('click', '.pagination a', function (e) {
        e.preventDefault();
        let page = $(this).attr('href').split('page=')[1];
        filterProducts(page);
    });

    // product view option
    function updateURLParam(paramName, paramValue) {
        const url = new URL(window.location.href);

        if (paramValue === '') {
            url.searchParams.delete(paramName);
        } else {
            url.searchParams.set(paramName, paramValue);
        }

        url.searchParams.delete('page'); // Reset to first page on filter change
        window.location.href = url.toString();
    }

    document.getElementById('sortSelect')?.addEventListener('change', function () {
        const selectedUrl = new URL(this.value || window.location.href);
        const sortParam = selectedUrl.searchParams.get('order') || '';
        updateURLParam('order', sortParam);
    });

    document.getElementById('showCount')?.addEventListener('change', function () {
        const selectedUrl = new URL(this.value || window.location.href);
        const limitParam = selectedUrl.searchParams.get('limit') || '';
        updateURLParam('limit', limitParam);
    });
});