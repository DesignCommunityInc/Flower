$(document).ready(function () {
    
    $('#submit').on('click', function () {
        var login = $('#login').val();
        var password = $('#password').val();
        if (login.length != 0 && password.length != 0) {
            $.ajax({
                url: "/templates/queries/adm.php",
                type: 'GET',
                data: {
                    login: login,
                    password: password
                },
                dataType: 'json',
                contentType: 'application/json',
                json: true
            }).done(function (data) {
                onAjaxSuccess(data);
            }).always(function (dataError) {
                //alert(dataError);
            });
        }
        else {
            alert("Не все поля заполнены");
        }
    });
});

function onAjaxSuccess(data) {
    // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
    var array = splitString(data, '|');
    var success = array[0];
    var key = array[1];
    if(success == 'success')
        window.location.replace("https://flower/administrator/administrator.php/?=" + key);
}

function splitString(stringToSplit, separator) {
    var arrayOfStrings = stringToSplit.split(separator);

    return arrayOfStrings;
}