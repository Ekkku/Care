<!DOCTYPE html>
<html>
    <head>
        <title>CARE</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="frontPage.css" type="text/css" />
        <script type="text/javascript">
            function validate(evt) {
              var theEvent = evt || window.event;
              var key = theEvent.keyCode || theEvent.which;
              key = String.fromCharCode( key );
              var regex = /[0-9]|\./;
              if( !regex.test(key) ) {
                theEvent.returnValue = false;
                if(theEvent.preventDefault) theEvent.preventDefault();
              }
            }
            
            function chkcontrol(j) {
              var total=0;
              for(var i=0; i < document.form1.ckb.length; i++){
              if(document.form1.ckb[i].checked){
              total =total +1;
              }
              if(total > 9){
              alert("Valige üheksa!")
              document.form1.ckb[j].checked = false ;
              return false;
        }
    }
} 
            
        </script>
    </head>
    <body>
        <div class="container">
            <div class="Header">
                <div>

                    <div class="Ftitle">
                        <div> <a href="index.php">CARE</a></div>
                    </div>    
                </div>
                <nav>
                    <ul class="menu">
                        <li><a href="?site=Player" class="sitePlayer">Mängija</a></li><!-- 
                        --><li><a href="?site=GameManager" class="siteGameManager">Mängujuht</a></li><!--
                        --><li><a href="?site=Guide" class="siteGuide">Juhend</a></li>    
                    </ul>
                </nav>
            </div>
            <div class="content">