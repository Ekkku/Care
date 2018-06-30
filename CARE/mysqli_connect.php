<?php
    
    DEFINE ('DB_USER', 'student');

    DEFINE ('DB_PASSWORD', 'hoolimine');

    DEFINE ('DB_HOST', 'localhost');

    DEFINE ('DB_NAME', 'care');
    
    
    DEFINE ("CAN_REGISTER", "any");
    
    DEFINE("DEFAULT_ROLE", "member");


    $db = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    OR die('Ei saanud ühendada MySQL-ga: ' .
    mysqli_connect_error());
    

        if(!$db->set_charset('utf8')){
        echo 'Error - utf8 rakendamine ebaõnnestus';
        exit();
    }
?>