<?php
    $root = "../../";
    require $root . "/templates/queries/db.php";

    session_start();

    $errors = array();

    $data = $_POST;

    if($data){
        if(isset($data["action"])){
            require $root . "templates/queries/adm.php";
        }
    }
    if (isset($_SESSION["user"]["name"])){
        require $root . "templates/page_parts/administrator/administrator.php";
    }else{
        require $root . "templates/page_parts/administrator/auth.php";
    }

?>