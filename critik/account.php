<?php
    include('menu.php');

    //Verification de la connexion de l'utisateur
    if(!isset($_SESSION["user"])){
        header("Location: index.php");
    }
?>

<div class="container">
    <h1>Mon compte</h1>
    <h3>
        <?php
            //Afficher les données du user
            echo $_SESSION['user']['firstname']." ".$_SESSION['user']['lastname']
        ?>
    </h3>


</div>
    
</body>
</html>