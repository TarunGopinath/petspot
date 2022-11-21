<?php

    require_once('./conn.inc.php');
    
    $cookie_name = "receiver";
    $cookie_value = $_GET['pid'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

    $cookie_name = "receiverName";
    $cookie_value = $_GET['pname'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

    header("location: ../test.php");

?>