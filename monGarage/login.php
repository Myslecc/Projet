<?php
    //Connexion à la bdd
    try{
        $bdd = new PDO("mysql:host=localhost;dbname=MonGarage;charset=utf8","root","");
    }catch (Exception $e){
        die("erreur ".$e->getMessage());
    }

    $req = $bdd->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
    $req->execute(
        array(
            $_POST["email"],
            $_POST["password"]
        )
    );

    $isError = true;//de base, on imagine qu'il y aune erreur
    while($data = $req->fetch()){
        $isError = false;//si on passe dans le fetch, alors, il n'y plus d'erreur !
        echo "Vous êtes connecté avec ".$data['email'];
    }

    if($isError == true){
        echo "il y a une erreur dans le mail ou le mdp";
    }
?>