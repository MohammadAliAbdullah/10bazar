$(document).ready(function () {
    $(Document).on('change', '#district', function () {
        var id = $(this).val();
        if (id) {
            $.ajax({
                type: "GET",
                url: window.routes.areas + "?parent_id=" + id,
                success: function (res) {
                    if (res) {
                        $("#sub_cat").empty();
                        $("#sub_cat").append('<option value="">Select Area</option>');
                        $.each(res, function (key, value) {
                            $("#sub_cat").append('<option value="' + key + '">' + value + '</option>');
                        });

                    } else {
                        $("#sub_cat").empty();
                    }
                }
            });
        } else {
            $("#sub_cat").empty();
        }
    });

    // Shipping fee calculation based on district
    // Define shipping fees and district ID
    const SHIPPING_FEES = {
        inDhaka: 80,
        outDhaka: 130
    };
    const DHAKA_DISTRICT_ID = '47';

    function updateShippingInfo(districtId) {
        const isInDhaka = districtId === DHAKA_DISTRICT_ID;
        const shippingFee = isInDhaka ? SHIPPING_FEES.inDhaka : SHIPPING_FEES.outDhaka;

        // Sync radio buttons
        $('#inDhaka').prop('checked', isInDhaka);
        $('#outDhaka').prop('checked', !isInDhaka);

        // Update fee and total
        const subTotal = parseFloat($('#subTotal').text()) || 0;
        const grandTotal = subTotal + shippingFee;

        $('#shippingFee').text(shippingFee);
        $('#grandTotal').text(grandTotal);
    }

    // Handle district change
    $(document).on('change', '#district', function () {
        const districtId = $(this).val();
        updateShippingInfo(districtId);
    });

    // Handle inDhaka click
    $(document).on('change', '#inDhaka', function () {
        if ($(this).is(':checked')) {
            $('#district').val(DHAKA_DISTRICT_ID).trigger('change');
        }
    });

    // Handle outDhaka click
    $(document).on('change', '#outDhaka', function () {
        if ($(this).is(':checked')) {
            const currentDistrict = $('#district').val();
            if (currentDistrict === DHAKA_DISTRICT_ID) {
                $('#district').val('').trigger('change');
            }
        }
    });

    // Optional: Trigger initial calculation on page load
    updateShippingInfo($('#district').val());
});