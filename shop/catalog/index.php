<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" accesskey="makeup" />
    <title>Flower</title>
    <?php
    $root = "../../";
    require($root . "templates/layout.php");
    include $root . "templates/page_parts/header.php";
    ?>
    <link rel="stylesheet" type="text/css" href="/wwwroot/css/catalog.css" />
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="face con_item"> 
                <img src="/wwwroot/images/icons/catalog_images/face.jpg"/> 
                <div class="gradient"></div>
            </div>
            <div class="body con_item">
                <img src="/wwwroot/images/icons/catalog_images/body.jpg" />
                <div class="gradient"></div>
            </div>
            <div class="hands con_item">
                <img src="/wwwroot/images/icons/catalog_images/hands.png" />
                <div class="gradient"></div>
            </div>
            <div class="feet con_item">
                <img src="/wwwroot/images/icons/catalog_images/feet.jpg" />
                <div class="gradient"></div>
            </div>
            <div class="any1 con_item">
                <!--<img src="/wwwroot/images/icons/catalog_images/feet.jpg" />-->
                <div class="gradient"></div>
            </div>
            <div class="any2 con_item">
                <!--<img src="/wwwroot/images/icons/catalog_images/feet.jpg" />-->
                <div class="gradient"></div>
            </div>
            <div class="any3 con_item">
                <!--<img src="/wwwroot/images/icons/catalog_images/feet.jpg" />-->
                <div class="gradient"></div>
            </div>
            <div class="any4 con_item">
                <!--<img src="/wwwroot/images/icons/catalog_images/feet.jpg" />-->
                <div class="gradient"></div>
            </div>
        </div>
    </div>

    <?php
    include $root . "templates/page_parts/footer.php";
    ?>

<div class="up"><p>up</p></div>
</body>
</html>
