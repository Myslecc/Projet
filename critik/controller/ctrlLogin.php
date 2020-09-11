<?php

    session_start();//je demarre ma session !

    //Connexion à la bdd
    try{
        $bdd = new PDO("mysql:host=localhost;dbname=critik;charset=utf8","root","");
    }catch (Exception $e){
        die("erreur ".$e->getMessage());
    }

    //Selectin de l'utilisateur
    $req = $bdd->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
    $req->execute(
        array(
            $_POST["email"],
            sha1($_POST['password'])
        )
    );

    //verification de l'existance du user
    $isError = true;

    while($data = $req->fetch()){
        $isError = false;
        $_SESSION['user'] = $data;
        header('Location: ../index.php');
    }

    if($isError){
        echo "Erreur dans le mail ou le mot de passe";
    }

?>