<?php
    $news = array();
    $sales = array();
    $seasons = array();
    //$categories = array();
    $slider = array();
    $footer = array();

    $_POST["action"] = "fill";
    $root = "../";
    require_once($root . "templates/queries/manager.php");
    $query = "db_query";
    $style = $query("SELECT * FROM `section_style`", $db);
    $color_1 = $style[0]["color"];
    $color_2 = $style[0]["color_2"];
    $gradient = $style[0]["gradient"];
    //$color = "#d1f563";

?>
<!DOCTYPE html>
<html style="--color-dynamic:<?php echo $color_1; ?>; --gradient-dynamic:<?php echo $gradient; ?>; --color2-dynamic:<?php echo $color_2; ?>">
<head>
    <title>Flower</title>

    <link rel="stylesheet" type="text/css" href="wwwroot/css/slider.css" />
    <link rel="stylesheet" type="text/css" href="wwwroot/css/menu.css" />
    <link rel="stylesheet" type="text/css" href="wwwroot/css/viewport.css" />
    <?php

    require_once($root . "templates/layout.php");
    require_once($root . "templates/page_parts/header.php");
    ?>
</head>
<body>
    <div class="default_container">
        <?php
    require_once($root . "templates/page_parts/slider.php");
    require_once($root . "templates/page_parts/container.php");
    require_once($root . "templates/page_parts/footer.php");
    
        ?>
        <div class="up button">
            <p>up</p>
        </div>
    </div>
    
    <script src="/wwwroot/js/SliderScript.js"></script>
</body>
</html>
