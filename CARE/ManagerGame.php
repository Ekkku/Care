<?php 
include('header.php') ;
include('mysqli_connect.php');

define('QUESTIONS', 10);
$errors = array(); 


if($_GET['action'] == 'reset'){
            $query="UPDATE questions SET checkbox=0 WHERE checkbox=1;";
            //echo $query;
            mysqli_query($db, $query);
            array_push($errors, "Küsimuste valik eemaldatud");
        }
if(isset($_POST['formSubmit'])){
        $questions_checked = array();
        //esimene küsimus
        for($i = 1;$i <= QUESTIONS+1;$i++){
            $tag = 'questions_'.$i;
            if(isset($_POST[$tag])){
                $questions_checked[] = $i;
            }
        }
        //ühendab array elemendid
        $questions = implode(',',$questions_checked);
       
        
        $query="UPDATE questions SET checkbox = 1 WHERE questions_id IN($questions);";
        //echo $query;
        if (!$db->query($query)) {
            printf("Error: %s\n", $db->error);
        }
        array_push($errors, "Valitud küsimused $questions.");
        echo "<br /> " ;

}    

?>


<h2>Küsimuste Valimine</h2>
<p>Valige 9 küsimust</p>
<?php include('error.php');?>
<form id="form1" name="form1" action="ManagerGame.php" method="post">
    <input id="ckb" type="checkbox" name="questions_1" onclick="chkcontrol(0)" value="value_1" />1. Sinu peale karjuti terve klassi ees. Kuidas sa ennast tundsid?  <br />
    <input id="ckb" type="checkbox" name="questions_2"  onclick="chkcontrol(1)" value="value_2" />2. Sa õppisid kontrolltööks, aga said ikkagi halva hinde. Kuidas sa ennast tundsid? <br />
    <input id="ckb" type="checkbox" name="questions_3" onclick="chkcontrol(2)" value="value_3" />3. Sa käisid  klassiga lemmik jäätise poes ekskursioonil. Kuidas sa ennast tundsid? <br />
    <input id="ckb" type="checkbox" name="questions_4" onclick="chkcontrol(3)" value="value_4" />4. Üks õpilane naeris su üle ja andis sulle ebameeldiva hüüdnime. Kuidas sa ennast tundsid?<br />
    <input id="ckb" type="checkbox" name="questions_5" onclick="chkcontrol(4)"value="value_5" />5. Sinu parim sõber ostis sulle sünnipäeva kingituse. Kuidas sa ennast tundsid?<br />
    <input id="ckb" type="checkbox" name="questions_6" onclick="chkcontrol(5)"value="value_6" />6. Sa ei olnud eile sõbra vastu kena . Kuidas sa ennast tundsid?<br />
    <input id="ckb" type="checkbox" name="questions_7" onclick="chkcontrol(6)"value="value_7" />7. Sa pead süsti saamiseks minema arsti juurde. Kuidas sa ennast tundsid?<br />
    <input id="ckb" type="checkbox" name="questions_8" onclick="chkcontrol(7)"value="value_8"/>8. Komistasid ja kukkusid koridoris, kõik õpilased naersid sinu üle. Kuidas sa ennast tundsid<br />
    <input id="ckb" type="checkbox" name="questions_9" onclick="chkcontrol(8)"value="value_9" //>9. Sinu sõber kolis ära. Kuidas sa ennast tundsid? <br />
    <input id="ckb" type="checkbox" name="questions_10" onclick="chkcontrol(9)"value="value_10" />10. Sa said koolis uue sõbra. Kuidas sa ennast tundsid?  <br />
    
    
    <input type="submit" name="formSubmit" value="Vali märgitud küsimused" />
    <br>
    
    </form>
    <form action="GameReset.php" method="post">
    <input type="submit" name="oopsSubmit" value="Kustuta kõik valitud küsimused ja vali uuesti."/>
    </form>
    
    <div class="nupp">
    <a href="GameM.php" class="GPlay">Mängima &#8680 </a>
    </div>
    
<?php include('footer.php') ?>
    


