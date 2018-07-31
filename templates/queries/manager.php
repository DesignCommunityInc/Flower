<?php
    require_once "db.php";
    require_once "functions.php";

    $post = $_POST;
    $get = $_GET;
    $session = $_SESSION;
    $cookie = $_COOKIE;
    $categories = array();

    function cart_fill($db){
        $cookie = unserialize($_COOKIE["flower_cart"]);
        return var_dump($cookie);
        $query = "SELECT `ID`, `category_name` FROM `categories`";
        $action = mysqli_query($db, $query);

        $categories = array();
        
        while ($item = mysqli_fetch_array($action)){
            $categories[$item["ID"]][] = $item["category_name"];
        }

        foreach($categories as $it => $s){
            $subcategories = array();
            $id = $it;
            $query1 = "SELECT `ID`, `category_name` FROM `sub_categories` WHERE `parent_id` = '$id'";
            $action1 = mysqli_query($db, $query1);

            while($item1 = mysqli_fetch_assoc($action1)){

                $subcategories[] = $item1;
                
            }

            $categories[$id]["sub"] = $subcategories;     
        }

        return $categories;
    }
   
    function header_fill($db){
        $query = "SELECT `ID`, `category_name` FROM `categories`";
        $action = mysqli_query($db, $query);

        $categories = array();
        
        while ($item = mysqli_fetch_array($action)){
            $categories[$item["ID"]][] = $item["category_name"];
        }

        foreach($categories as $it => $s){
            $subcategories = array();
            $id = $it;
            $query1 = "SELECT `ID`, `category_name` FROM `sub_categories` WHERE `parent_id` = '$id'";
            $action1 = mysqli_query($db, $query1);

            while($item1 = mysqli_fetch_assoc($action1)){

                $subcategories[] = $item1;
                
            }

            $categories[$id]["sub"] = $subcategories;     
        }

        return $categories;
    }

    function brands_fill($db){
        $query = "SELECT `ID`, `name` FROM `brands`";
        $action = mysqli_query($db, $query);

        $brands = array();
        
        while ($item = mysqli_fetch_assoc($action)){
            $brands[] = $item;
        }

        return $brands;
    }
   
    function get_content($db) {//$filters = array(), $param){
        $errors = array();
        $query = "db_query";
        $content = $query("SELECT `ID`, `title`, `price`, `type`, `image_path` FROM `products` where `type` = 'sale'", $db);
        if (count($content) == 0){
            $errors[] = "Ошибка при поиске товара<br />";
        };
        echo $errors[0];
        if(empty($errors)){
           return $content;
        }
    }
    
    if($post)
    {
        $action = $post["action"];

        switch($action)
        {
            // case "addToCart":{
            //     $prod = $post["prod"];
            //     $addToCart = "addToCart";
            //     $addToCart($prod);
            //     // echo "success";
            //     exit();
            // } break;
            case "fill": 
            {
                $errors = array();
        
                $_news = array();
                $_sales = array();
                $_seasons = array();
                //$_categories = array();
                //$_subcategories = array();

                $query = "db_query";

                $_news = $query("SELECT `ID`, `title`, `price`, `type`, `image_path` FROM `products` WHERE `type` = 'new'", $db);
                $_sales = $query("SELECT `ID`, `title`, `price`, `type`, `image_path` FROM `products` WHERE `type` = 'sale'", $db);
                $_seasons = $query("SELECT `ID`, `title`, `price`, `type`, `image_path` FROM `products` WHERE `type` = 'season'", $db);
                

                if (count($_news) == 0 || count($_sales) == 0 || count($_seasons) == 0){
                    $errors[] = "Ошибка при поиске товара<br>";
                };

                if(empty($errors)){
                    $news = $_news;
                    $sales = $_sales;
                    $seasons = $_seasons;
                    //$categories = $_categories;
                    //$subcategories = $_subcategories;
                }
            } break;

            default: break;
        }
    }
   

?>