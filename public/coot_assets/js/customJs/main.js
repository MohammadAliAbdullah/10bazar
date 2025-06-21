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