<!DOCTYPE html>
<html>
<head>
    <title>Flower</title>
    <meta charset="utf-8" accesskey="makeup"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/wwwroot/css/Administrator/adm_entry.css" />
    <link rel="stylesheet" type="text/css" href="/wwwroot/css/_Layout.css" />

    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
    <script src="/wwwroot/js/Ajax.js"></script>
    <script src="/wwwroot/js/Ajax - functions.js"></script>
</head>
<body>
    <div class="auth_container">
        <div class="auth">
            <label>Flower</label>
            <div>
                <label>
                    <input type="text" placeholder="Логин" name="login" id="login" value="<?php if (isset($login)) echo $login; ?>"/>
                </label>
                <label>
                    <input type="password" placeholder="Пароль" name="password" id="password"/>
                </label>
                <input class="button" type="submit" value="Войти" name="submit" id="submit"/>
            </div>
            <?php
                foreach ($errors as $ts){
                    echo $ts;
                }
            ?>

            <div class="list_gradient"></div>
        </div>
    </div>
    <script type="text/javascript">
        document.addEventListener("keyup", function (event) {
            event.preventDefault();
            if (event.keyCode === 13) {
                document.getElementById("submit").click();
            }
        }); 
    </script>
</body>
</html>
