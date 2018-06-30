<?php 
    include_once "header.php";
    
    if(isset($_GET['site']))include $_GET['site'] . '.php';
    else include 'frontPage.php';
    
    include_once "footer.php";
    
?>


