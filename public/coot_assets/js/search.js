$(document).ready(function () {

    filter_data();

    function filter_data() {
        var brand = get_filter('brand');
        var category = get_filter('category');
        var size = get_filter('size');
        var color = get_filter('color');
        $.ajax({
            url: window.routes.shopFilter,
            method: "POST",
            data: {
                brand: brand,
                category: category,
                size: size,
                color: color
            },
            success: function (data) {
                //console.log(data)
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name) {
        var filter = [];
        $('.' + class_name + ':checked').each(function () {
            filter.push($(this).val());
        });
        return filter;
    }

    $(document).on('click', '.sort_rang', function () {
        alert('hi');
        filter_data();
    });

    $('#price_range').slider({
        range: true,
        min: 1000,
        max: 65000,
        values: [1000, 65000],
        step: 500,
        stop: function (event, ui) {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});