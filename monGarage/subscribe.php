<?php

    //Connexion à la bdd
    try{
        $bdd = new PDO("mysql:host=localhost;dbname=MonGarage;charset=utf8","root","");
    }catch (Exception $e){
        die("erreur ".$e->getMessage());
    }

    $req = $bdd->prepare("INSERT INTO user(email,password,phone) VALUES (?,?,?)");
    $req->execute(
        array(
            $_POST['email'],
            $_POST['password'],
            $_POST['phone']
        )
    );


?>