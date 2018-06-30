<!DOCTYPE html>
<html>
<head>
    <title>Flower</title>

    <link rel="stylesheet" type="text/css" href="wwwroot/css/slider.css" />
    <link rel="stylesheet" type="text/css" href="wwwroot/css/menu.css" />
    <link rel="stylesheet" type="text/css" href="wwwroot/css/viewport.css" />
    <?php
        require("php/layout.php");
    ?>
</head>
<body>
        <?php
        require("php/header.php");
        require("php/slider.php");
        ?>
        <div class="borderBottom"></div>

        <?php
        include "php/main_page_container.php";
        include "php/footer.php";
        ?>
    <div class="up"><p>up</p></div>

    <script src="wwwroot/js/SliderScript.js"></script>
</body>
</html>
