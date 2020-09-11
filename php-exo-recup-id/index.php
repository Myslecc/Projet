<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Garage | Accueil</title>
</head>
<body>

<ul>
    <?php
        //Connexion à la bdd
        try{
            $bdd = new PDO("mysql:host=localhost;dbname=pokedex;charset=utf8","root","");
        }catch (Exception $e){
            die("erreur ".$e->getMessage());
        }

        //récupérer les voitures en triant par id descendant
        $req = $bdd->prepare("SELECT * FROM pokemon ORDER BY id DESC");
        $req->execute();

        //récupère les données
        while($data = $req->fetch()){
            echo "<li>".$data["name"]." : ".$data['description']." : ".$data['level']."
                    <a href='updateform.php?id=".$data["id"]."'>Modifier</a>
                    <a href='delete.php?id=".$data["id"]."'>Supprimer</a>
                </li>";
        }

    ?>
</ul>

    <a href="./addpokemon.php">
        <button>
            Ajouter un Pokémon
        </button>
    </a>
</body>
</html>