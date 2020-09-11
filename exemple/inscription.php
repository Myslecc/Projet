<?php
    echo 
    'login : '.($_POST["login"]).
    '<br> mdp : '.($_POST["mdp"]).
    '<br> choix : '.($_POST["choix"]);
    
    if (isset($_POST["case"])) {
        
        echo '<br>box: Case coché';
    } 
    else {

        echo '<br>box: Case non coché';
    }
?>
