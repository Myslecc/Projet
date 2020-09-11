<?php
    //Connexion à la bdd
    try{
        $bdd = new PDO("mysql:host=localhost;dbname=MonGarage;charset=utf8","root","");
    }catch (Exception $e){
        die("erreur ".$e->getMessage());
    }

    $req = $bdd->prepare("INSERT INTO Voiture(brand,km) VALUES (?,?)");
    $req->execute(
        array(
            $_POST['brand'],
            $_POST['km']
        )
    );

    header('Location: index.php');
?>