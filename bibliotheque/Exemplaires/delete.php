<!doctype html>
  <html lang="en">
    <head>
      <title>Exemplaires</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
      <h1>Supprimer un exemplaire</h1> <br>
        <a href="http://localhost/bibliotheque/index.html">  ↩ Menu principal</a>
        <form action="delete.php" method="POST">
          <input type="text" placeholder="Entrez l'id" name="id">
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

      //Requête préparée pour supprimer par id
      $req = $bdd->prepare('DELETE FROM exemplaires WHERE id= ?');
      $req->execute(array($_POST['id']));

      //Requête préparée pour afficher par la suite dans un tableau
      $req = $bdd->prepare('SELECT * FROM exemplaires');
      $req->execute(array(
        $_POST["titre"],
        $_POST["statut"],
        $_POST["nom_emprunteur"],
        $_POST["prenom_emprunteur"],
        ));
      ?>

      <table class="table table-striped table-hover">
        <thead>
          <tr>
          <th scope="col">#</th>
          <th scope="col">Titre</th>
          <th scope="col">Statut</th>
          <th scope="col">Nom de l'emprunteur</th>
          <th scope="col">Prénom de l'emprunteur</th>
          </tr>
          </thead>
          <tbody>
          <?php
          //Récupérer les résultats
          while($data = $req->fetch()){
            echo("<tr>
                    <th>".$data['id']."</th>
                    <td>".$data['titre']."</td>
                    <td>".$data['statut']."</td>
                    <td>".$data['nom_emprunteur']."</td>
                    <td>".$data['prenom_emprunteur']."</td>
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