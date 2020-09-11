<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

        <h1>Mettre à jour un Client</h1> <br>
        <a href="http://localhost/bibliotheque/index.html">  ↩ Menu principal</a>

      <form action="update.php" method="POST">
            <input type="text" placeholder="Entrez l'id " name="id">
            <input type="text" placeholder="Entrez le prenom" name="prenom">
            <input type="text" placeholder="Entrez le nom" name="nom">
            <input type="email" placeholder="Entrez l'email" name="email">
            <input type="date" placeholder="Entrez la date de naissance" name="date_de_naissance">
            <button class="btn btn-success" type="submit">Envoyé</button>
    </form> 

        <?php
    
         ini_set('display_errors', 'off');


        //Connexion à la base de données
        try{
            $bdd = new PDO("mysql:host=localhost;dbname=bibliotheque;charset=utf8;","root","");
        }catch(Exception $e){
            echo 'Erreur '.$e->getMessage();
        }

        $req = $bdd->prepare('UPDATE clients SET id = ?,prenom = ?, nom = ?, email = ?, date_de_naissance = ?');
        $req->execute(array(
            $_POST['id'],
            $_POST['prenom'],
            $_POST['nom'],
            $_POST['email'],
            $_POST['date_de_naissance'],
        ));

        //Requête préparée
        $req = $bdd->prepare('SELECT * FROM liste_smartphones');
        $req->execute(array(
            $_POST["prenom"],
            $_POST["nom"],
            $_POST["email"],
            $_POST["date_de_naissance"],
            ));
    ?>

<table class="table table-striped table-hover">
        <thead>
          <tr>
          <th scope="col">#</th>
          <th scope="col">Prénom</th>
          <th scope="col">Nom</th>
          <th scope="col">Email</th>
          <th scope="col">Date de naissance</th>
          </tr>
          </thead>
          <tbody>
          <?php
          //Récupérer les résultats
          while($data = $req->fetch()){
            echo("<tr>
                    <th>".$data['id']."</th>
                    <td>".$data['prenom']."</td>
                    <td>".$data['nom']."</td>
                    <td>".$data['email']."</td>
                    <td>".$data['date_de_naissance']."</td>
                </tr>");
          }
          ?>
        </tbody>
      </table>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>