$(document).ready(function () {

    // Administrator authentification 
     $('#submit').on('click', function () {
         var login = $('#login').val();
         var password = $('#password').val();
        
             $.ajax({
                 url: "/administrator/index.php",
                 type: 'POST',
                 data: {
                     login: login,
                     password: password,
                     submit: true
                 },
             }).done(function (data) {
                 onAjaxSuccess(data);
             }).always(function (dataError) {
             });
        

    });


    // Administrator authentification_exit 
    $('#quit').on('click', function () {

        $.ajax({
            url: "/administrator/index.php",
            method: 'POST',
            data: { action: "quit" },

        }).done(function (data) {
            onAjaxSuccess(data);

        }).always(function (dataError) {
        });
    });
});

function onAjaxSuccess(data) {
    if (data = "success")
        window.location.reload(true);
}

function splitString(stringToSplit, separator) {
    var arrayOfStrings = stringToSplit.split(separator);

    return arrayOfStrings;
}