<?php

    //Connexion à la bdd
    try{
        $bdd = new PDO("mysql:host=localhost;dbname=critik;charset=utf8","root","");
    }catch (Exception $e){
        die("erreur ".$e->getMessage());
    }

    //Inscription de l'utilisateur
    $req = $bdd->prepare("INSERT INTO user(email, password, firstname, lastname, isAdmin) VALUES(?,?,?,?,0)");
    $req->execute(
        array(
            $_POST["email"],
            sha1($_POST["password"]),
            $_POST["firstname"],
            $_POST["lastname"]
        )
    );

    header('Location: ../index.php');
?>