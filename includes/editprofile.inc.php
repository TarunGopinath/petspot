<?php

if(isset($_POST["submit"])) {
    $radioption = $_POST["inlineRadioOptions"];
    $newValue = $_POST["newValue"];
    require_once ('conn.inc.php');

    if($radioption === 'email') {
        $sql = "UPDATE user SET email = ? WHERE uid = ?";
    }
    else if($radioption === 'phone') {
        $sql = "UPDATE user SET phone = ? WHERE uid = ?";
    }
    else if($radioption === 'address') {
        $sql = "UPDATE user SET address = ? WHERE uid = ?";
    }
    else if($radioption === 'pincode') {
        $sql = "UPDATE user SET pincode = ? WHERE uid = ?";
    }
    
    $stmt = mysqli_stmt_init($conn);    
    $uid = $_COOKIE['uid'];

    if(mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../addpet.php?error=userstmtfail");
        //exit();
    }

    if($radioption === 'phone' or $radioption === 'pincode') {
        mysqli_stmt_bind_param($stmt, "ii", $newValue, $uid);
    }
    else {
        mysqli_stmt_bind_param($stmt, "si", $newValue, $uid);
    }
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../profile.php");
    exit();
    
}

else {
    header("location: ../editprofile.php");
    exit();
}