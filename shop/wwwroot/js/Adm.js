$(document).ready(function () {

    $(".radio_sale").on('click', function () {
        $(this).toggleClass("radio_sale_active");

        var able_toInput = document.getElementById("IsSale").disabled;
        if (able_toInput) {
            document.getElementById("IsSale").disabled = false;
            document.getElementById("IsSale").value = "";
        }
        else {
            document.getElementById("IsSale").disabled = true;
            document.getElementById("IsSale").value = "скидка";
        }
    });

    $(".add_btn").on('click', function () {
        //cart_view_form_Sent();
        document.getElementById("cart_view_form").submit();
    });


});