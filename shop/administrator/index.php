<?php
    $root = "../../";
    require $root . "templates/queries/db.php";
    require $root . "templates/queries/functions.php";

    
    $errors = array();

    $post = $_POST;
    $get = $_GET;
    $session = $_SESSION;
    $cookie = $_COOKIE;
    
    // 5UEYrydH5RKaKc2p2

    //echo password_hash("chery123", PASSWORD_BCRYPT);

     
    // var_dump($session);

    if($post){
        if(isset($post["action"])){
            require $root . "templates/queries/adm.php";
        }
    }
    if (isset($_SESSION["user"]["name"])){
        $verify = "user_verify";
        $user_verify = $verify($db, $session["user"]["name"], $session["user"]["password"]);
        if($user_verify){
            $header_parts = array("1", "2", "3", "4", "5");
            require_once $root . "templates/page_parts/administrator/header.php";
            require_once $root . "templates/page_parts/administrator/administrator.php";
        }
    }else{
        require $root . "templates/page_parts/administrator/auth.php";
    }

?>