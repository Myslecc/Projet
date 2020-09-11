<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice PHP</title>
</head>
<body>
    <h2>Exercice sur les URL - Transfert de donnée URL vers page2.php</h2>
    <ul>
        <li><a href="Page2.php?title=démon&group=debut%20de%20soirée">Démon de minuit</a></li> 
        <li><a href="Page2.php?title=toujours%20debout&group=renaud">toujour debout</a></li>
        <li><a href="Page2.php?title=les%20sardines&group=Patrick">Les sardines</a></li>
    </ul>
    <hr>
    <h2>Exercice sur les envoies de données de formulaires vers inscription.php</h2>

    <form action="inscription.php" method="POST">
    <input type="text" name="login">
    <input type="password" name="mdp"> <br>
    <input type="checkbox" name="case">Inscription newsletter <br>
    <select name="choix" id="pet-select"> 
    <option value="dog" name="choix1">Dog</option>
    <option value="cat" name="choix2">Cat</option> 
    <input type="submit">
    </form>

    <hr>

    <h2>Exercice sur les sessions PHP - Inscription</h2>

    <?php
        $_SESSION["login"] = $_POST["login"];
        $_SESSION["mdp"] = $_POST["mdp"];

        echo "Coucou ".$_SESSION["login"];
    ?>

    <a href="connect.php">Se connecter</a>
    <a href="logout.php">Deconnexion</a>


</body>
</html>