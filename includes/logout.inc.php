<?php  
require_once('conn.inc.php');
$uidcookie = $_COOKIE['uid'];
$onlinesql = "UPDATE user SET status='offline' WHERE uid='".$uidcookie."'";
$stmt = mysqli_stmt_init($conn);
mysqli_stmt_prepare($stmt, $onlinesql);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

session_start();
session_unset();
session_destroy();
unset($_COOKIE['uid']);
setcookie('uid', null, -1, '/');
unset($_COOKIE['name']);
setcookie('name', null, -1, '/');
unset($_COOKIE['pname']);
setcookie('name', null, -1, '/');
unset($_COOKIE['pid']);
setcookie('name', null, -1, '/');
unset($_COOKIE['receiver']);
setcookie('name', null, -1, '/');
unset($_COOKIE['receiverName']);
setcookie('name', null, -1, '/');
header("location: ../index.php");
 
exit();