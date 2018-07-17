<?php

//$data = $_POST;

    $param = $post["action"];
    
    switch($param)
    {
        case "quit":
        {
            session_destroy();
            echo("success");
            exit();
        } break;
        case "auth":
        {
            $login = $post["login"];
            $password = $post["password"];

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
                $_SESSION["user"]["password"] = $password;
                $_SESSION["user"]["succeed"] = true;
            }
            echo "success";
            exit();
        } break;
        case "main_page":
        {
            $_SESSION["user"]["state"] = $state;
            echo "success";
            exit();
        } break;
        case "add_product": 
        {
            //$_SESSION["user"]["state"] = $state;
            // $title from index, $db from index (required);
            $query = "db_query";
            $mass = $query("SELECT `name` FROM `products` WHERE `name` = '$title'", $db);

            if(count($mass) == 0)
            {
                $query = "db_update";
                $query("INSERT INTO `products` (`name`, `price`, `image_path`) VALUES('$title', '$price', '/wwwroot/images/products/$image') ", $db);
            }

            echo "success";
            exit();
        } break;
    }

?>