<?php 
//header("Cache-Control: no-store,no-cache,mustrevalidate");
//header("Location: https://flower/shop/administrator/add/product/");

$root = "../../../../";
require_once $root . "templates/queries/db.php";

$session = $_SESSION;
$post = $_POST;

require_once $root . "templates/queries/functions.php";

$verify = "user_verify";
$user = $verify($db, $session["user"]["name"], $session["user"]["password"], $root);

if($user){
    $header_parts = array("1", "2", "add");
    require_once $root . "templates/page_parts/administrator/header.php";
    require_once $root . "templates/queries/adm.php";
    if($post)
    {
        $title = $post["title"];
        $price = $post["price"];
        $sale = $post["IsSale"];
        $image = $post["image"];
    }

    $_stoken = isset($session['lastToken']);
    $token = "";

    if($_token) $token = $session['lastToken'];
    if ($_POST['token'] != $token || !$_token)
    {
        $_SESSION['lastToken'] = $_POST['token'];

        $_POST["action"] = "add_product";
        require_once($root . "templates/queries/adm.php");
    }
}
else{
require_once $root . "shop/error.php";
exit();
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Flower</title>
    <meta charset="utf-8" accesskey="makeup" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/wwwroot/css/Administrator/adm.css" />
    <link rel="stylesheet" type="text/css" href="/wwwroot/css/_Layout.css" />
    <link rel="stylesheet" type="text/css" href="/wwwroot/css/effects.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
    <script src="/wwwroot/js/Adm.js"></script>  
    <script src="/wwwroot/js/Ajax.js"></script>
    <script src="/wwwroot/js/Ajax - functions.js"></script>  

</head>
<body>
        <section class="viewport">
            <section class="viewport_section alignment" id="v_s_first">
                <div class="menu_label">
                    <label>Настройки конструктора</label>
                </div>
                 <div class="radio_container"> 
                        <div class="radio_item active_radio">
                            <span></span>    
                            <label>В виде карточки</label>
                        </div>
                        <div class="radio_item">
                            <span></span>    
                            <label>В виде текстовых полей</label>
                        </div>
                    </div>
                <div class="menu_label">
                    <label>Настройки</label>
                </div>
                <div class="set_container"> 
                    <div class="set_item">
                        <span></span>    
                        <label>Категория</label>
                    </div>
                </div>
            </section>
            <section class="viewport_section" id="v_s_second">
               <div class="edit_container"> 
                    <div class="cart_view">
                    <span class="line"></span>
                        <form method="post" enctype="multipart/form-data" id="cart_view_form">
                            <input type="hidden" name="token" value="<?php echo(rand(10000, 99999));?>" />
                            <input type="file" id="selectedFile" style="display: none;" name="image"/>
                            <input type="button" value="Изображение" class="button" onclick="document.getElementById('selectedFile').click();" />
                            <textarea id="title" cols="35" placeholder="заголовок" rows ="4" name="title"></textarea>
                            <input type="number" name="price" placeholder="цена" id="price" maxlength="10" step="10" min="0">
                            <input type="text" name="IsSale" disabled placeholder="Скидка" value="Скидка" id="IsSale">
                                <span class="line"></span>
                                <span class="radio_sale"></span>
                        </form>
                    </div>
               </div>
            </section>
        </section>
<? 
if(isset($post["token"])){
echo"
<script>
    document.getElementById('title').value = '$title'; 
</script>
<script>
    document.getElementById('price').value = '$price'; 
</script>
<script>
    document.getElementById('IsSale').value = '$sale'; 
</script>";
}
?>
</body>
</html>
