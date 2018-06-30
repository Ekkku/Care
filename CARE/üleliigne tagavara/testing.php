<?php
    //lisame andmebaasi ühendust sisaldava php faili
    include_once 'db.php';
    
    //kontrollime kas on sisestatavaid andmeid
    if(empty($_GET['action'])&&!empty($_GET['artist']) && !empty($_GET['album'])){
        $artist = $_GET['artist'];
        $album = $_GET['album'];
        $aasta = $_GET['aasta'];
        $hind = $_GET['hind'];
        $query = "INSERT INTO albumid (artist,album,aasta,hind)VALUES(
        '{$artist}','{$album}','{$aasta}',$hind);";
        $_POST = array();
        if(!$mysql->query($query)){
            echo'Sisestus ebaõnnestus';
        }
        
    }
    //kustutab antud id-ga elemendi
    if($_GET['action'] == 'kustuta'){
        echo 'kustutan';
        $query = 'DELETE FROM albumid WHERE id =' . $_GET['id'] .';';
        
        $mysql->query($query);
    }
    
    //mysqli_fetch_assoc($mysql, $result);
    $result = $mysql->query('SELECT * FROM albumid;');
    echo '<table border="1">';
    while($row = $result->fetch_assoc()){
        //prindi iga rea kohta andmed
        //print_r($row);
        echo '<tr>
            <td>' . $row['artist'] . '</td>
            <td>' . $row['album'] . '</td>
            <td>' . $row['aasta'] . '</td>
            <td><a href="?action=kustuta&id='. $row['id'] .'">kustuta</a></td> 
        </tr>';
    }
    echo '</table>';
    ?>
    <form action="albumid.php?action=lisa" method='get'>
        <span>Artist</span><input type="text" name="artist"/><br>
        <span>Album</span><input type="text" name="album"/><br>
        <span>Aasta</span><input type="text" name="aasta"/><br>
        <span>Hind</span><input type="text" name="hind"/><br>
        <input type="submit" value="Sisesta"/>
    </form>