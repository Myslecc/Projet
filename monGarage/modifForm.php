<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        //Connexion à la bdd
        try{
            $bdd = new PDO("mysql:host=localhost;dbname=MonGarage;charset=utf8","root","");
        }catch (Exception $e){
            die("erreur ".$e->getMessage());
        }

        $req = $bdd->prepare("SELECT * FROM Voiture WHERE id= ?");
        $req->execute(
            array(
                $_GET['id']
            )
        );

        $oldKm =0;
        while($data = $req->fetch()){
            $oldKm = $data["km"];
            echo "Données actuelles <br>".$data['brand']." ".$data['km'];
        }
    ?>

    <form action="modifCar.php" method="POST">
        <input type="number" placeholder=<?php echo $oldKm."km" ?> name="km">
        <input type="hidden" value=<?php echo $_GET["id"] ?> name="id">
        <button type="submit">Modifier</button>
    </form>
</body>
</html>