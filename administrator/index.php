<?php

    require "../templates/queries/db.php";
    $errors = array();

    if(isset($_POST['submit'])){

        $login = $_POST["login"];
        $password = $_POST["password"];

        if($login == ""){
            $errors[] = "Вы не ввели логин!<br>"; 
        } 
        if($password == ""){
            $errors[] = "Вы не ввели пароль!<br>";
        }

        $query = "SELECT `ID`, `password`, `username` FROM `admins` WHERE `username` = '$login'";
        $action = mysqli_query($db, $query);
        $user = array();

        while($item = mysqli_fetch_assoc($action)){
            $user[] = $item;
        }

        if( password_verify( $password, $user[0]["password"] ) == false ){
            $errors[] = "Пароль не верный!";
        }

        if (count($user) == 0){
            $errors[] = "Пользователь не найден<br>";
        };

        if(empty($errors)){
            $_SESSION["user"]["name"] = $login;
            
        }
    }

    if (isset($_SESSION["user"]["name"])){
        require "administrator.php";
    }else{
        require "auth.php"; 
    }

?>