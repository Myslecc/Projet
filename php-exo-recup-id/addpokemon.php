<?php
    //Connexion à la bdd
    try{
        $bdd = new PDO("mysql:host=localhost;dbname=pokedex;charset=utf8","root","");
    }catch (Exception $e){
        die("erreur ".$e->getMessage());
    }

    $req = $bdd->prepare("INSERT INTO pokemon(name,description,level) VALUES (?,?,?)");
    $req->execute(
        array(
            $_POST['name'],
            $_POST['description'],
            $_POST['level']
        )
    );

    header('Location: index.php');
?>