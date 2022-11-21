<?php

if(isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    require_once ('conn.inc.php');
    require_once ('functions.inc.php'); 

    if(emptyInputLogin($email, $password) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    }

    loginUser($conn ,$email, $password);
    
    $queryPet="SELECT * FROM pet WHERE uid='".$_COOKIE['uid']."'";
    $resultPet = mysqli_query($conn, $queryPet);
    $resultCheckPet = mysqli_num_rows($resultPet);

    $onlinesql = "INSERT INTO online (uid) VALUES ('".$_COOKIE['uid']."')";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $onlinesql);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

else {
    header("location: ../login.php");
    exit();
}