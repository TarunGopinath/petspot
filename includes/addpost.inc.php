<?php

require_once ('conn.inc.php');
require_once ('functions.inc.php');

if(isset($_POST['submit']))
{
    $title = $_POST['title'];
    $info = $_POST['info'];
    $ps = $_POST['ps'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $venue = $_POST['venue'];
    $price = $_POST['price'];
    $imgData = file_get_contents($_FILES['image']['tmp_name']);

    if(emptyPostAdd($title, $info, $ps, $date, $time, $venue, $price, $imgData) !== false) {
        header("location: ../addpost.php?error=emptyinput");
        exit(); 
    }
    
    $sql = "INSERT INTO exp(uid, pid, title, info, ps, date, time, venue, price, image) VALUES(?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);    
    $uid = $_COOKIE['uid'];
    $pid = 11;

    if(mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../addpost.php?error=userstmtfail");
    }
    
    mysqli_stmt_bind_param($stmt, "iissssssds", $uid, $pid, $title, $info, $ps, $date, $time, $venue, $price, $imgData);
    $stmt->send_long_data(9, $imgData);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../addpost.php?error=none");
    exit();
}

else {
    header("location: ../signup.php");
}