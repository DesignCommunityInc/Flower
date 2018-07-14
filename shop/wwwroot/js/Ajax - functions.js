    // Administrator authentification 
    function administrator_auth(log, pass) {
         var login = log;
         var password = pass;
        
             $.ajax({
                 url: "/administrator/index.php",
                 type: 'POST',
                 data: {
                     action: "auth",
                     login: login,
                     password: password
                 },
             }).done(function (data) {
                 onAjaxSuccess_reload(data);
             }).always(function (dataError) {
             });
        

};


//    // Administrator authentification_exit 
//    $('#quit').on('click', function () {

//        $.ajax({
//            url: "/administrator/index.php",
//            method: 'POST',
//            data: { action: "quit" },

//        }).done(function (data) {
//            onAjaxSuccess(data);

//        }).always(function (dataError) {
//        });
//    });
//});

function onAjaxSuccess_reload(data) {
    if (data == "success")
        window.location.reload(true);
}

//function splitString(stringToSplit, separator) {
//    var arrayOfStrings = stringToSplit.split(separator);

//    return arrayOfStrings;
//}