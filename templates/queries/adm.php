<?php

//$data = $_POST;

    $param = $data["action"];
    switch($param)
    {
        case "quit":
        {
            session_destroy();
            json_encode("success");
            exit();
            break;
        }
        case "auth":
        {
            $login = $data["login"];
            $password = $data["password"];

            if($login == ""){
                $errors[] = "�� �� ����� �����!<br>"; 
            } 
            if($password == ""){
                $errors[] = "�� �� ����� ������!<br>";
            }

            $query = "SELECT `Id`, `password_hash`, `username` FROM `admins` WHERE `username` = '$login'";
            $action = mysqli_query($db, $query);
            $user = array();

            while($item = mysqli_fetch_assoc($action)){
                $user[] = $item;
            }

            if( password_verify( $password, $user[0]["password_hash"] ) == false ){
                $errors[] = "������ �� ������!";
            }

            if (count($user) == 0){
                $errors[] = "������������ �� ������<br>";
            };

            if(empty($errors)){
                $_SESSION["user"]["name"] = $login;
            
            }
            echo "success";
            exit();
            break;
        }
    }

?>