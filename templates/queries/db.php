<?php
    ob_start();
    session_start();
    $logindb = "root";
    $password = "";
    $host = "localhost";
    $DataBase = "FlowerDataBase";
    $db = mysqli_connect($host, $logindb, $password, $DataBase) or die ("Не удалось подключиться!");
?>