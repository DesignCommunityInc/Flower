$(document).ready(function () {

    // Administrator authentification 
     $('#submit').on('click', function () {
         var login = $('#login').val();
         var password = $('#password').val();
        
         administrator_auth(login, password);
    });

    // Administrator authentification_exit 
    $('#quit').on('click', function () {
        administrator_exit();
    });
});

function splitString(stringToSplit, separator) {
    var arrayOfStrings = stringToSplit.split(separator);

    return arrayOfStrings;
}


function cart_view_form_Sent() {
    $('#cart_view_form').submit(function (e) {
        var $form = $(this);
        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: $form.serialize()
        }).done(function () {
            onAjaxSuccess_reload(data)
            }).fail(function () {
                alert('error');
        });
        //отмена действия по умолчанию для кнопки submit
        e.preventDefault();
    });
};

function onAjaxSuccess_reload(data) {
    if (data == "success")
        window.location.replace("https://Flower/shop/administrator/");
}
