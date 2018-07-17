<?php

    require_once "db.php";
    require_once "functions.php";

    $post = $_POST;
    $get = $_GET;
    $session = $_SESSION;
    $cookie = $_COOKIE;

    if($post)
    {
        $action = $post["action"];

        switch($action)
        {
            case "show_byId": break;
            case "fill": 
            {
                $errors = array();
        
                $_news = array();
                $_sales = array();
                $_seasons = array();

                $query = "db_query";

                $_news = $query("SELECT `Id`, `name`, `description_min`, `price`, `type`, `image_path` FROM `products` WHERE `type` = 'new'", $db);
                $_sales = $query("SELECT `Id`, `name`, `description_min`, `price`, `type`, `image_path` FROM `products` WHERE `type` = 'sale'", $db);
                $_seasons = $query("SELECT `Id`, `name`, `description_min`, `price`, `type`, `image_path` FROM `products` WHERE `type` = 'season'", $db);

                //$query = "SELECT `Id`, `name`, `description_min`, `price`, `type`, `image_path` FROM `products` WHERE `type` = 'new'";
                //$action = mysqli_query($db, $query);

                //while($item = mysqli_fetch_assoc($action)){
                //    $_news[] = $item;
                //}

                if (count($_news) == 0 || count($_sales) == 0 || count($_seasons) == 0){
                    $errors[] = "Ошибка при поиске товара<br>";
                };

                if(empty($errors)){
                    $news = $_news;
                    $sales = $sales;
                    $seasons = $seasons;
                }
            } break;

            default: break;
        }
    }
   

?>