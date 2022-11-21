<?php

require_once ('conn.inc.php');
require_once ('functions.inc.php');

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $password = $_POST['password'];

    if(emptyInputSignup($name, $email, $phone, $address, $pincode, $password) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if(exists($conn, $email) !== false)
    {
        header("location: ../signup.php?error=emailerror");
        exit();
    }

    createUser($conn, $name, $email, $phone, $address, $pincode, $password);

}

else {
    header("location: ../signup.php");
}