<?php
    $root = "../../";
    $content = array();
    require_once($root . "templates/queries/manager.php"); 

    $query = "get_content";
    $content = $query($db);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" accesskey="makeup" />
    <title>Flower</title>
    <link rel="stylesheet" type="text/css" href="/wwwroot/css/content/content.css">
    <link rel="stylesheet" type="text/css" href="/wwwroot/css/slider.css">
    <link rel="stylesheet" type="text/css" href="/wwwroot/css/viewport.css">
    <?php
        require_once ($root . "templates/layout.php");
        require_once ($root . "templates/page_parts/header.php");
    ?>
</head>
<body>    
    <div class="default_container">
    <?php
        require_once $root . "templates/page_parts/slider.php";
        require_once $root . "templates/page_parts/content.php";
    ?>
       
    </div>
    <?php
    require_once $root . "templates/page_parts/footer.php";
    ?>

<div class="up"><p>up</p></div>

<script src="/wwwroot/js/ContentScript.js"></script>
<script src="/wwwroot/js/SliderScript.js"></script>
<script src="/wwwroot/js/content.js"></script>
</body>
</html>
