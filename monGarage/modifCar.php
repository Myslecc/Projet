<?php

    //Connexion à la bdd
    try{
        $bdd = new PDO("mysql:host=localhost;dbname=MonGarage;charset=utf8","root","");
    }catch (Exception $e){
        die("erreur ".$e->getMessage());
    }


    $req = $bdd->prepare("UPDATE Voiture SET km = ? WHERE id = ?");
    $req->execute(
        array(
            $_POST['km'],
            $_POST['id']
        )
    );

    header('Location: index.php');

?>