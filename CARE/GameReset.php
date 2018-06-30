<?php
    include('mysqli_connect.php');
    
    $query="UPDATE questions SET checkbox=0 WHERE checkbox=1;";
    //echo $query;
    mysqli_query($db, $query);
    header('Location: ManagerGame.php?action=reset');