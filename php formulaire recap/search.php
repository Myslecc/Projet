<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<?php
    //Lettre passée en GET
    $searchText = $_GET['searchText'];

    //Connexion à la base de données
    try{
        $bdd = new PDO("mysql:host=localhost;dbname=pokedex;charset=utf8","root","");
    }catch (Exception $e){
        die("erreur ".$e->getMessage());
    }

    //Requête préparée
    $req = $bdd->query("SELECT * FROM pokemon WHERE name LIKE '%".$searchText. "%'");
    $req->execute(
        array(
            "%".$searchText."%"
        )
    )
?>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th scope="col">Niveau</th>
    </tr>
  </thead>
  <tbody>
    <?php
        //Récupérer les résultats
        while($data = $req->fetch()){
            echo("<tr>
                    <th>".$data['id']."</th>
                    <td>".$data['name']."</td>
                    <td>".$data['desc']."</td>
                    <td>".$data['level']."</td>
                </tr>");
        }
    ?>
  </tbody>
</table>

</body>
</html>