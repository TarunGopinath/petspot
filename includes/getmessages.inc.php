<?php

require_once('./conn.inc.php');

$result = "";
$sql="SELECT * from messages WHERE sender='".$_COOKIE['pid']."' OR receiver='".$_COOKIE['pid']."'";
$resultsql = mysqli_query($conn, $sql);

$petsql = "SELECT * from pet WHERE pid='".$_COOKIE['receiver']."'";
$resultpet = mysqli_query($conn, $petsql);
$rowPet = mysqli_fetch_assoc($resultpet);

while($row = mysqli_fetch_assoc($resultsql)) {

        if($row['receiver'] === $_COOKIE['receiver']) {
            $result .= '<div class="d-flex flex-row justify-content-end">
                            <div>
                            <p class="medium p-2 me-3 text-white bg-primary shadow-3-strong mt-1"
                                style="border-top-left-radius: 10px; border-top-right-radius: 10px; border-bottom-left-radius: 10px; "
                                >
                                '.$row['msg'].'
                            </p>
                            </div>
                        </div>';
        }
        else if($row['sender'] === $_COOKIE['receiver']) {
            $result .= '<div class="d-flex flex-row justify-content-start ms-1 mt-2">
                            <img  
                            src="data:/image/jpeg;base64,'.base64_encode($rowPet['file']).'"
                            alt="avatar"
                            class="rounded-pill d-flex align-self-center me-3 shadow-1-strong" width="55" height="55">
                            <div>
                            <p class="medium p-2 ms-3 mb-1 shadow-5-strong " 
                                style="background-color: #f5f6f7; border-top-left-radius: 10px; border-top-right-radius: 10px; border-bottom-right-radius: 10px;"
                                >
                                '.$row['msg'].'
                            </p>
                            </div>
                        </div>';
        }
    }

    if($result === "") {
        echo "<div class='text-center mt-5'><h3>Don't be shy, initiate conversation!</h3></div>";
    }
    else {
        echo $result;
    }

?>