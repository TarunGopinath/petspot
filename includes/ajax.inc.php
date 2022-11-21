<?php

require_once ('conn.inc.php');

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($email) && !empty($password)) {
    $query = "SELECT name from user WHERE email = '{$email}' ";
    $result = mysqli_query($conn, $query);
    if($result && mysqli_num_rows($result) > 0) {
        echo "Sheeskabab";
        while($row = mysqli_fetch_assoc($result))
            echo $row['name'];
    }
    else {
        echo $result;
    }
}
else {
    echo "All fields required";
}


