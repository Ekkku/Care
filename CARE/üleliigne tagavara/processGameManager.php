<?php 

include('mysqli_connect.php');
session_start();

// initializing variables
$first_name = "";
$last_name  = "";
$errors = array(); 



// REGISTER USER
if (isset($_POST['first_name_1'])) {
  // receive all input values from the form
  $first_name_1 = mysqli_real_escape_string($db, $_POST['first_name_1']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($first_name_1)) { array_push($errors, "Eesnimi on puudu"); }
  if (empty($password_1)) { array_push($errors, "Parool on puudu"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM player WHERE first_name='$first_name' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if(!empty($user)){
      array_push($errors, "selline mängija on juba olemas");
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO player (first_name, last_name, password) 
  			  VALUES('$first_name', '$last_name', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['first_name'] = $first_name;
  	$_SESSION['success'] = "Olete sisse logitud";
  	header('location: index.php');
  }
  else{
      include('error.php');
  }
}

?>