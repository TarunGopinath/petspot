<?php

    require_once('./conn.inc.php');

    $cookie_name = "pid";
    $cookie_value = $_GET['pid'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

    $cookie_name = "pname";
    $cookie_value = $_GET['pname'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

    echo $_COOKIE['pid'] . $_COOKIE['pname'];

    header("location: ../test.php");

?>