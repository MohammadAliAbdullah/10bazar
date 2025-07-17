$(document).ready(function () {
    // editDeliveryAddress
    $(document).on('click', '#editDeliveryAddress', function () {
        $('#deliveryAddress').show();
        $('#editDeliveryAddress').html('<i class="fa fa-spinner"></i>');
    });
    // zone change
    $(document).on('change', '#zone_id', function () {
        var id = $(this).val();
        var zoneName = $(this).find('option:selected').text();
        // alert(id);
        if (id) {
            $.ajax({
                type: "GET",
                url: window.routes.states + "?zone_id=" + id,
                success: function (res) {
                    // console.log(res);
                    $("#zoneName").text(zoneName);
                    if (res && res.shippingMethods) {
                        $("#shippingMethod").empty(); // Clear previous shipping methods
                        var firstMethod = res.shippingMethods[0];
                        $.each(res.shippingMethods, function (index, method) {
                            var checked = index === 0 ? 'checked' : '';
                            var html = `
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input deliveryFee" type="radio" name="delivery_fee"
                                        id="shipping_method${method.id}" value="${method.base_fee}" ${checked}>
                                    <label class="form-check-label" for="shipping_method${method.id}">
                                        ${method.name} ${method.estimated_days} ${method.base_fee}
                                    </label>
                                </div>
                            `;
                            $("#shippingMethod").append(html);
                        });
                        updateShippingInfo(firstMethod.base_fee);
                    }
                    if (res && res.states) {
                        $("#state_id").empty();
                        $("#state_id").append('<option value="">Select District</option>');

                        $.each(res.states, function (key, state) {
                            $("#state_id").append('<option value="' + state.id + '">' + state.name + '</option>');
                        });
                    } else {
                        $("#state_id").empty();
                    }
                }
            });
        } else {
            $("#state_id").empty();
        }
    });

    $(Document).on('change', '#state_id', function () {
        var id = $(this).val();
        var stateName = $(this).find('option:selected').text();
        if (id) {
            $.ajax({
                type: "GET",
                url: window.routes.cities + "?state_id=" + id,
                success: function (res) {
                    $("#stateName").text(stateName);
                    if (res) {
                        $("#city_id").empty();
                        $("#city_id").append('<option value="">Select Area</option>');
                        $.each(res, function (index, city) {
                            $("#city_id").append('<option value="' + city.id + '">' + city.name + '</option>');
                        });

                    } else {
                        $("#city_id").empty();
                    }
                }
            });
        } else {
            $("#city_id").empty();
        }
    });
    // city_id change
    $(document).on('change', '#city_id', function () {
        var id = $(this).val();
        var cityName = $(this).find('option:selected').text();
        $("#cityName").text(cityName);
        $("#deliveryAddress").hide();
        $('#editDeliveryAddress').html('<i class="fa fa-edit"></i>');
    });

    // Shipping fee calculation based on district
    $(document).on('change', '.deliveryFee', function () {
        const shippingFee = $(this).val();
        updateShippingInfo(shippingFee);
    });

    function updateShippingInfo(shippingFee) {
        const subTotal       = $('#cartSubTotal').text();
        const couponDiscount = $('#couponDiscount').text() || '0';
        const grandTotal     = parseFloat(subTotal) - parseFloat(couponDiscount) + parseFloat(shippingFee);
        $('#shippingFee').text(shippingFee);
        $('#grandTotal').text(grandTotal.toFixed(2));
    }
});