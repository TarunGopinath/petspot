<?php

    require_once('./conn.inc.php');
    error_reporting(E_ERROR | E_PARSE);

    $result = "";
    $sql="SELECT * FROM user WHERE status='online'";
    $resultsql = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($resultsql)) {
        $petsql = "SELECT * FROM pet WHERE uid='".$row['uid']."'";
        $resultPet = mysqli_query($conn, $petsql);
        
        while($rowPet = mysqli_fetch_assoc($resultPet)) {
            $msgsql = "SELECT * FROM messages WHERE sender='".$_COOKIE['pid']."' OR receiver='".$_COOKIE['pid']."'";
            $resultmsg = mysqli_query($conn, $msgsql);
            $messagevar = "Start talking!";
            while($rowmsg = mysqli_fetch_assoc($resultmsg)) {
                if($rowmsg['sender'] === $rowPet['pid'] or $rowmsg['receiver'] === $rowPet['pid']){
                    $messagevar = $rowmsg['msg'];
                }
            }
            if($rowPet['pid'] !== $_COOKIE['pid']) {
            $result .= '<li class="p-2 border-bottom" style="background-color:#eee">
                            <a href="./includes/setreceiver.inc.php?pid='.$rowPet['pid'].'&pname='.$rowPet['name'].'" class="d-flex justify-content-between">
                            <div class="d-flex flex-row">
                                <img src="data:/image/jpeg;base64,'.base64_encode($rowPet['file']).'"
                                    class="rounded-pill d-flex align-self-center me-3 shadow-1-strong" width="70" height="70">
                                <div class="pt-1">
                                    <p class="fw-bold mb-0">'.$rowPet['name'].'</p>
                                    <p class="small text-muted">'.$messagevar.'</p>
                                </div>
                            </div>
                            <div class="pt-1"> 
                                <i class="fa-solid fa-circle mt-4 me-2" style="color: #00FF00;"></i>
                            </div>
                            </a>
                        </li>';
            }
        }
    };

    echo $result;

?>