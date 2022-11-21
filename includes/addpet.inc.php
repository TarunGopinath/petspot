<?php

require_once ('conn.inc.php');
require_once ('functions.inc.php');

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $species = $_POST['species'];
    $breed = $_POST['breed'];
    $dob = $_POST['dob'];
    $imgData = file_get_contents($_FILES['image']['tmp_name']);

    if(emptyPetAdd($name, $species, $breed, $dob, $imgData) !== false) {
        header("location: ../addpet.php?error   =emptyinput");
        exit();
    }

    #createPet($conn,$name, $species, $breed, $dob, $imgData);

    $sql = "INSERT INTO pet(uid, name, species, breed, dob, file) VALUES(?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);    
    $uid = $_COOKIE['uid'];

    if(mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../addpet.php?error=userstmtfail");
        //exit();
    }

    mysqli_stmt_bind_param($stmt, "isssss", $uid, $name, $species, $breed, $dob, $imgData);
    $stmt->send_long_data(5, $imgData);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../addpet.php?error=none");
    exit();

}

else {
    header("location: ../signup.php");
}

