<?php 

include('mysqli_connect.php');


// initializing variables
$first_name = "";
$errors = array(); 



// REGISTER USER
if (!empty($_POST['first_name_1'])) {
  // receive all input values from the form
  $first_name_1 = mysqli_real_escape_string($db, $_POST['first_name_1']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($first_name_1)) { array_push($errors, "1. mängija kasutajanimi on puudu. Sisestage uuesti, alustades 1. mängijast"); }
  if (empty($password_1)) { array_push($errors, "1. mängija parool on puudu. Sisestage uuesti, alustades 1. mängijast"); }
  if(strlen($password_1) < 6 || strlen($password_1) > 6){array_push($errors, "1. mängija parool peab olema 6 NUMBRIT. Sisestage uuesti, alustades 1. mängijast");}
  if(strlen($password_1) < 1){array_push($errors, "1. mängija parool on negatiivne. Sisestage uuesti, alustades 1. mängijast");}

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM player WHERE first_name='$first_name' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if(!empty($user)){
      array_push($errors, "Selline mängija on juba olemas");
      
  }
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO player (first_name,  password) 
  			  VALUES('$first_name_1',  '$password_1')";
  	mysqli_query($db, $query);
  	echo "1. mängija lisatud " ;
  	echo "<br /> " ;
  	
  	
  	
  	
  	
  	if (!empty($_POST['first_name_2'])) {
  	    $first_name_2 = mysqli_real_escape_string($db, $_POST['first_name_2']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    
        // form validation: ensure that the form is correctly filled ...
        // by adding (array_push()) corresponding error unto $errors array
        if (empty($first_name_2)) { array_push($errors, "2. mängija kasutajanimi on puudu. Sisestage uuesti, alustades 1. mängijast."); }
        if (empty($password_2)) { array_push($errors, "2. mängija parool on puudu. Sisestage uuesti, alustades 1. mängijast"); }
        if(strlen($password_2) < 6  || strlen($password_2) > 6){array_push($errors, "2. mängija parool peab olema 6 NUMBRIT. Sisestage uuesti, alustades 1. mängijast");}
        if(strlen($password_2) < 0){array_push($errors, "2. mängija parool on negtiivne. Sisestage uuesti, alustades 1. mängijast.");}
    
        // first check the database to make sure 
        // a user does not already exist with the same username and/or email
        $user_check_query = "SELECT * FROM player WHERE first_name='$first_name' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        if(!empty($user)){
            array_push($errors, "Selline mängija on juba olemas");
        }
        // Finally, register user if there are no errors in the form
        if (count($errors) == 0) {
      	    $password = md5($password_2);//encrypt the password before saving in the database
    
      	    $query = "INSERT INTO player (first_name, password) 
      			  VALUES('$first_name_2',  '$password_2')";
      	    mysqli_query($db, $query);
      	    echo "2. mängija lisatud ";
      	    echo "<br /> " ;
  	    }
  	    
  	        
  	    
  	    
  	    
  	    if (!empty($_POST['first_name_3'])) {
      	    $first_name_3 = mysqli_real_escape_string($db, $_POST['first_name_3']);
            $password_3 = mysqli_real_escape_string($db, $_POST['password_3']);
        
            // form validation: ensure that the form is correctly filled ...
            // by adding (array_push()) corresponding error unto $errors array
            if (empty($first_name_3)) { array_push($errors, "3. mängija kasutajanimi on puudu.  Sisestage uuesti, alustades 1. mängijast."); }
            if (empty($password_3)) { array_push($errors, "3. mängija parool on puudu.  Sisestage uuesti, alustades 1. mängijast."); }
            if(strlen($password_3) < 6  || strlen($password_3) > 6){array_push($errors, "3. mängija parool peab olema 6 NUMBRIT.  Sisestage uuesti, alustades 1. mängijast.");}
            if(strlen($password_3) < 1){array_push($errors, "3. mängija parool on negatiivne.  Sisestage uuesti, alustades 1. mängijast.");}
        
            // first check the database to make sure 
            // a user does not already exist with the same username and/or email
            $user_check_query = "SELECT * FROM player WHERE first_name='$first_name' LIMIT 1";
            $result = mysqli_query($db, $user_check_query);
            $user = mysqli_fetch_assoc($result);
            if(!empty($user)){
                array_push($errors, "Selline mängija on juba olemas");
            }
            // Finally, register user if there are no errors in the form
            if (count($errors) == 0) {
          	    $password = md5($password_3);//encrypt the password before saving in the database
        
          	    $query = "INSERT INTO player (first_name, password) 
          			  VALUES('$first_name_3', '$password_3')";
          	    mysqli_query($db, $query);
          	    echo "3. mängija lisatud";
          	    echo "<br /> " ;
      	    }
      	    
      	    
      	    
      	    
      	    
  	        if (!empty($_POST['first_name_4'])) {
          	    $first_name_4 = mysqli_real_escape_string($db, $_POST['first_name_4']);
                $password_4 = mysqli_real_escape_string($db, $_POST['password_4']);
            
                // form validation: ensure that the form is correctly filled ...
                // by adding (array_push()) corresponding error unto $errors array
                if (empty($first_name_4)) { array_push($errors, "4. mängija kasutajanimi on puudu.  Sisestage uuesti, alustades 1. mängijast."); }
                if (empty($password_4)) { array_push($errors, "4. mängija parool on puudu.  Sisestage uuesti, alustades 1. mängijast."); }
                if(strlen($password_4) < 6  || strlen($password_4) > 6){array_push($errors, "4. mängija parool peab olema 6 NUMBRIT.  Sisestage uuesti, alustades 1. mängijast.");}
                if(strlen($password_4) < 1){array_push($errors, "4. mängija parool on negatiivne.  Sisestage uuesti, alustades 1. mängijast.");}
                
            
                // first check the database to make sure 
                // a user does not already exist with the same username and/or email
                $user_check_query = "SELECT * FROM player WHERE first_name='$first_name' LIMIT 1";
                $result = mysqli_query($db, $user_check_query);
                $user = mysqli_fetch_assoc($result);
                if(!empty($user)){
                    array_push($errors, "Selline mängija on juba olemas");
                }
                // Finally, register user if there are no errors in the form
                if (count($errors) == 0) {
              	    $password = md5($password_4);//encrypt the password before saving in the database
            
              	    $query = "INSERT INTO player (first_name, password) 
              			  VALUES('$first_name_4', '$password_4')";
              	    mysqli_query($db, $query);
              	    echo "4. mängija lisatud";
              	    echo "<br /> " ;
          	    }
  	    
      	    }
      	}
  	}
  }
}


?>

<style>
    .siteGameManager{
        color:#a5af5a !important;
    }
</style>
  <div class="Reg_vor">
  	<h2>Registreerimine</h2>
  	<p>Registreerige 1-4 mängijat.</p>
  	<p>Sisestage parooliks 6 positiivset numbrit. Mängijate lisamist alustage alati esimesest mängijast.</p>
  </div>
  <form method="post" action="index.php?site=GameManager">
  	<?php include('error.php'); ?>
  	<!--player1-->
  	<div class="input-groupK">
  	  <label>1. Mängija</label>
  	  <input type="text" name="first_name_1" value="<?php echo $first_name; ?>">
  	</div>

  	<div class="input-groupM">
  	  <label>1. Mängija parool</label>
  	  <input maxlength="6" size="6" placeholder="123456" type="text" name="password_1" onkeypress='validate(event)'>
  	</div>

  	<br>
    <!--player2-->
  	<div class="input-groupK">
  	  <label>2. Mängija</label>
  	  <input type="text" name="first_name_2" value="<?php echo $first_name; ?>">
  	</div>

  	<div class="input-groupM">
  	  <label>2. Mängija parool</label>
  	  <input maxlength="6" size="6" placeholder="123456" type="text" name="password_2" onkeypress='validate(event)'>
  	</div>
  	<br>
    <!--player3-->
  	<div class="input-groupK">
  	  <label>3. Mängija</label>
  	  <input type="text" name="first_name_3" value="<?php echo $first_name; ?>">
  	</div>

  	<div class="input-groupM">
  	  <label>3. Mängija parool</label>
  	  <input maxlength="6" size="6" placeholder="123456" type="text" name="password_3" onkeypress='validate(event)'>
  	</div>
	<br>	
    <!--player4-->
  	<div class="input-groupK">
  	  <label>4. Mängija</label>
  	  <input type="text" name="first_name_4" value="<?php echo $first_name; ?>">
  	</div>

  	<div class="input-groupM">
  	  <label>4. Mängija parool</label>
  	  <input maxlength="6" size="6" placeholder="123456" type="text" name="password_4" onkeypress='validate(event)'>
  	</div>
  	<br>
  	<div class="input-groupS">
  	  <button type="submit" class="btn" name="reg_user">Registreeri mängijad</button>
  	</div>
  </form>
  
  <div class="nupp">
  <a href="ManagerGame.php" class="Valmis">Küsimusi valima &#8680 </a>
  </div>


