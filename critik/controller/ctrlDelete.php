<?php

    $critikId = $_GET['id'];
    //Connexion à la bdd
    try{
        $bdd = new PDO("mysql:host=localhost;dbname=critik;charset=utf8","root","");
    }catch (Exception $e){
        die("erreur ".$e->getMessage());
    }

    $req = $bdd->prepare('DELETE FROM critik WHERE id=?');
    $req->execute(
        array(
            $critikId
        )
    );

    header("Location: ../index.php");

?>