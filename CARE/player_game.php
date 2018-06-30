<?php
   include('session.php');
   include('header.php') ;
?>

   
   <body>
      <h1>Tere <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Lahku</a></h2>
   </body>
   
<?php include('footer.php') ?>  