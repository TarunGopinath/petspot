<?php

function exists($conn, $email) {
    $sql = "SELECT * FROM user WHERE email = ?; ";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfail");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        mysqli_stmt_close($stmt);
        return $row;    
    }
    else {
        $result = false;
        mysqli_stmt_close($stmt);
        return $result;
    } 
}

function emptyPostAdd($title, $info, $ps, $date, $time, $venue, $price, $imgData) {

    $result = true ;
    if(empty($title) || empty($info) || empty($ps) || empty($date) || empty($time) || empty($venue) || empty($price) || empty($imgData) ){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function emptyPetAdd($name, $species, $breed, $dob, $image) {

    $result = true ;
    if(empty($name) || empty($species) || empty($breed) || empty($dob)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function createPost($conn, $title, $info, $ps, $date, $time, $venue, $price, $imgData) {
    $sql = "INSERT INTO experiences(uid, pid, title, info, ps, date, time, venue, price , image) VALUES(?,?,?,?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);    
    $uid = $_COOKIE['uid'];
    $pid = 11;

    if(mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../addpost.php?error=userstmtfail");
        //exit();
    }

    mysqli_stmt_bind_param($stmt, "iissssssds", $uid, $pid, $title, $info, $ps, $date, $time, $venue, $price, $imgData);
    $stmt->send_long_data(9, $imgData);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../addpost.php?error=none");
    exit();
}


function createPet($conn, $name, $species, $breed, $dob, $image) {
    $sql = "INSERT INTO pet(uid, name, species, breed, dob, file) VALUES(?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);    
    $uid = $_COOKIE['uid'];

    if(mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../addpet.php?error=userstmtfail");
        //exit();
    }

    mysqli_stmt_bind_param($stmt, "issssb", $uid, $name, $species, $breed, $dob, $image);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../addpet.php?error=none");
    exit();
}

function emptyInputSignup($name, $email, $phone, $address, $pincode, $password) {

    $result = true ;
    if(empty($name) || empty($email) || empty($phone) || empty($address) || empty($pincode) || empty($password)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function createUser($conn, $name, $email, $phone, $address, $pincode, $password) {
    $sql = "INSERT INTO user(name, email, phone, address, pincode, password) VALUES(?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);

    if(mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=userstmtfail");
        //exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssisis",$name, $email, $phone, $address, $pincode, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

function emptyInputLogin($email, $password) {

    $result = true ;
    if( empty($email) || empty($password)){
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn ,$email, $password) {
    $emailExists = exists($conn, $email);

    if($emailExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $emailExists["password"];
    $checkPwd = password_verify($password, $pwdHashed);
    if($checkPwd === false) { 
        header("location: ../login.php?error=pwdmatchfail");
        exit();
    }  
    else if($checkPwd === true) {   
        ob_start();
        session_start();
        $_SESSION["email"] = $emailExists["email"];
        $_SESSION['uid'] = $emailExists["uid"];
        $_SESSION['name'] = $emailExists["name"];
        
        $cookie_name = "name";
        $cookie_value = $emailExists["name"];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
        
        $cookie_name = "uid";
        $cookie_value = $emailExists["uid"];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");// 86400 = 1 day

        $onlinesql = "UPDATE user SET status='online' WHERE uid='".$emailExists['uid']."'";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt, $onlinesql);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);

        header("location: ../index.php");
        exit();
    }  
}