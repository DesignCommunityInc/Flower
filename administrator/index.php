<?php
    require "../templates/queries/db.php";

    $errors = array();

    $data = $_POST;
    if(isset($data["action"])){
        require "../templates/queries/adm.php";
    }
    if(isset($data['submit'])){

        $login = $data["login"];
        $password = $data["password"];

        if($login == ""){
            $errors[] = "Вы не ввели логин!<br>"; 
        } 
        if($password == ""){
            $errors[] = "Вы не ввели пароль!<br>";
        }

        $query = "SELECT `Id`, `password_hash`, `username` FROM `admins` WHERE `username` = '$login'";
        $action = mysqli_query($db, $query);
        $user = array();

        while($item = mysqli_fetch_assoc($action)){
            $user[] = $item;
        }

        if( password_verify( $password, $user[0]["password_hash"] ) == false ){
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
        require "../templates/page_parts/administrator/administrator.php";
    }else{
        require "../templates/page_parts/administrator/auth.php";
    }

?>