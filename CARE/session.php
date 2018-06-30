<?php
   include('mysqli_connect.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select first_name from player where first_name = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['first_name'];
   
   if(!isset($_SESSION['login_user'])){
      header("location: Player.php");
   }
?>