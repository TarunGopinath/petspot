<?php

    require_once('./conn.inc.php');

    $msg = $_GET['msg'];
    $sender = $_COOKIE['pid'];
    $receiver = $_COOKIE['receiver'];

    $sql = "INSERT INTO messages(sender,receiver,msg) VALUES(?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sql);
    
    mysqli_stmt_bind_param($stmt, "iis", $sender,$receiver,$msg);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../test.php");
    

?>