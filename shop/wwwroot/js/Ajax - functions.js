﻿// Administrator authentification 
function administrator_auth(log, pass) {
    var login = log;
    var password = pass;
        
    $.ajax({
        url: "/administrator/index.php",
        type: 'POST',
        data: {
            action: "auth",
            login: login,
            password: password,
            userState: "entered"
        },
    }).done(function (data) {
        onAjaxSuccess_reload(data);
    }).always(function (dataError) {
    });
};


// Administrator authentification_exit
function administrator_exit() {
    $.ajax({
        url: "/administrator/index.php",
        method: 'POST',
        data: { action: "quit" },

    }).done(function (data) {
        onAjaxSuccess_reload(data);

    }).always(function (dataError) {
    });
};

// Administrator authentification_exit
// function addToCart(product, image, message, state, href) {
//     $.ajax({
//         url: "/",
//         method: 'POST',
//         data: {
//              action: "addToCart",
//              prod: product
//         },
//     }).done(function (data) { 
//         notification(image, message, state, href);
//     }).always(function (dataError) {
//     });
// };

function onAjaxSuccess_reload(data) {
    if (data == "success")
        window.location.replace("https://Flower/administrator/");
}

//function splitString(stringToSplit, separator) {
//    var arrayOfStrings = stringToSplit.split(separator);

//    return arrayOfStrings;
//}