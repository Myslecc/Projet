<!doctype html>
<html lang="en">
  <head>
    <title>Formulaire</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <h1>Ajouter un Client</h1> <br>


      <form action="index.php" method="POST">
            <input type="text" placeholder="Entrez le nom" name="nom">
            <input type="text" placeholder="Entrez le prénom" name="prenom">
            <input type="email" placeholder="Entrez l'email" name="email">
            <input type="text" placeholder="Entrez le téléphone" name="tel">
            <input type="password" placeholder="Entrez le mot de passe" name="pass">
            <input type="number" placeholder="Entrez le statut" name="statut">
            <input type="text" placeholder="Entrez la référence" name="reference">
            <button class="btn btn-success" type="submit">Envoyé</button>
    </form>

        <?php

        ini_set('display_errors', 'off');
    

        //Connexion à la base de données
        try{
            $bdd = new PDO("mysql:host=localhost;dbname=exodemo;charset=utf8;","root","");
        }catch(Exception $e){
            echo 'Erreur '.$e->getMessage();
        }

        //Préparation Reqûete pour Insérer
        $req = $bdd->prepare('INSERT INTO clients(nom, prenom, email, tel, pass, statut, reference) VALUES(?, ?, ?, ?, ?, ?, ?)');
        $req->execute(array(
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['tel'],
       sha1($_POST['pass']),
            $_POST['statut'],
            $_POST['reference']
            
        ));

        //Requête préparée pour afficher 
        $req = $bdd->prepare('SELECT * FROM clients');
        $req->execute(array(
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['tel'],
            $_POST['pass'],
            $_POST['statut'],
            $_POST['reference']
            
        ));
    ?>

<table class="table table-striped table-hover">
        <thead>
          <tr>
          <th scope="col">#</th>
          <th scope="col">Date</th>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Email</th>
          <th scope="col">Téléphone</th>
          <th scope="col">Mot de passe</th>
          <th scope="col">Statut</th>
          <th scope="col">Référence</th>
          </tr>
          </thead>
          <tbody>
          <?php
          //Récupérer les résultats
          while($data = $req->fetch()){
            echo("<tr>
                    <th>".$data['id']."</th>
                    <td>".$data['date']."</td>
                    <td>".$data['nom']."</td>
                    <td>".$data['prenom']."</td>
                    <td>".$data['email']."</td>
                    <td>".$data['tel']."</td>
                    <td>".$data['pass']."</td>
                    <td>".$data['statut']."</td>
                    <td>".$data['reference']."</td>
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