<?php

    require_once('./conn.inc.php');

    $result = array();
    $queryPet="SELECT pid,name FROM pet WHERE uid='".$_COOKIE['uid']."'";
    $resultPet = mysqli_query($conn, $queryPet);

    while($row = mysqli_fetch_assoc($resultPet)) {
        $result[] = $row;
    }

    echo json_encode($result);

?>