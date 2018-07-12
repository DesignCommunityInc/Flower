<!DOCTYPE html>
<html>
<head>
    <title>Flower</title>

    <link rel="stylesheet" type="text/css" href="wwwroot/css/slider.css" />
    <link rel="stylesheet" type="text/css" href="wwwroot/css/menu.css" />
    <link rel="stylesheet" type="text/css" href="wwwroot/css/viewport.css" />
    <?php
    $root = "../";
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
