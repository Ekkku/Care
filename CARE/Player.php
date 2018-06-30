<?php 
   include("mysqli_connect.php");

   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myfirst_name = mysqli_real_escape_string($db,$_POST['first_name']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
      

      
      $sql = "SELECT player_id FROM player WHERE first_name = '$myfirst_name' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myfirst_name");
         $_SESSION[$myfirst_name] =  $GLOBALS[$myfirst_name];
    
         $_SESSION['login_user'] = $myfirst_name;
         
         header("location: player_game.php");
      }else {
         $error = "Selline kasutaja ei eksisteeri";
      }
   }
 

?>
 



    <div class="wrapper">
        <h2>Sisselogimine</h2>
        <p>Palun sisestage saadud kasutajanimi ja parool.</p>
                       
        <form action = "" method = "post">
            <?php include('error.php'); ?>
            <label>Kasutajanimi  </label><input type = "text" name = "first_name" class = "box"/><br /><br />
            <label>Parool  </label><input maxlength="6" size="6" placeholder="123456" type="password" name="password" onkeypress='validate(event)' class = "box" /><br/><br />
            <!--input class="playerL" type = "submit" value = " Logi sisse "/><br /-->
            <button type="submit" class="btn" name="reg_user">Logi sisse</button>
        </form>
        
       
               

