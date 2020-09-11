<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //affiche critique du film en passe l'id en GET
    $critikFilm = $_GET['id'];

        //Connexion à la bdd
    try{
        $bdd = new PDO("mysql:host=localhost;dbname=critik;charset=utf8","root","");
    }catch (Exception $e){
        die("erreur ".$e->getMessage());
    }

    //Si la critique est écrite par l'utilisateur connecté
    if($critik["userId"] == $_SESSION["user"]["id"]){
        echo "<a href='controller/ctrlDelete.php?id=".$critik["id"]."' class='btn btn-danger'>Suppprimer</a>";}

    ?>
</body>
</html>