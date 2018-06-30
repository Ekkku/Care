

<?php

include('header.php') ;
// Get a connection for the database
require_once('mysqli_connect.php');

// Create a query for the database
$query = "SELECT player_id, first_name, password FROM player;";

// Get a response from the database by sending the connection
// and the query
$response = @mysqli_query($db, $query);

// If the query executed properly proceed
if($response){

echo '<table align="left"
cellspacing="5" cellpadding="8">
<td align="left"><b> </b></td>
<td align="left"><b>Kasutajanimi</b></td>
<td align="left"><b>Parool</b></td></tr>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($response)){

echo '<tr><td align="left" padding-bottom="20%">' . 
$row['player_id'] . '</td><td align="left">' .
$row['first_name'] . '</td><td align="left">' .
$row['password'] . '</td><td align="left">';

echo '</tr>';
}

echo '</table>';

} else {

echo "Couldn't issue database query<br />";

echo mysqli_error($db);

}

// Close connection to the database
mysqli_close($db);

    
   
 ?>
