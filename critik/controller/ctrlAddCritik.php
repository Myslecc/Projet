<?php

    session_start();

    //Connexion à la bdd
    try{
        $bdd = new PDO("mysql:host=localhost;dbname=critik;charset=utf8","root","");
    }catch (Exception $e){
        die("erreur ".$e->getMessage());
    }

    $req = $bdd->prepare('INSERT INTO critik(titleFilm, titleCritik, text, userId) VALUES (?,?,?,?)');
    $req->execute(
        array(
            $_POST['titleFilm'],
            $_POST['titleCritik'],
            $_POST['text'],
            $_SESSION['user']['id']
        )
    );

    header('Location: ../index.php');
?>