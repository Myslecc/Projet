<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Critik'</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand navbar-dark bg-dark justify-content-between">
        <a class="navbar-brand" href="index.php">Critik'</a>

    
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Accueil</a>
            </li>
            
        <?php
            //Si l'utilisateur est connecté
            if(isset($_SESSION["user"])){
                echo '
                        <li class="nav-item">
                            <a class="nav-link" href="addCritik.php">Ajouter une critik\'</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">'.$_SESSION["user"]['firstname']." ".$_SESSION["user"]['lastname'].'</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./controller/ctrlLogout.php">Déconnexion</a>
                        </li>
                    ';

                if($_SESSION["user"]["isAdmin"] == 1){ //Si, dans la bdd, isAdmin == 1
                    echo '<li class="nav-item">
                            <a class="nav-link" href="admin.php">Mode Admin</a>
                        </li>';
                }
            }else{//SINON
                echo '<button data-toggle="modal" data-target="#modalLogin" class="btn btn-outline-light my-2 my-sm-0" type="submit">Mon compte</button>';
            }
        ?>
        </ul>

    </nav>

    <!--Modal de connexion-->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalLogin">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Mon compte</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Formulaire de connexion-->
                <form action="./controller/ctrlLogin.php" method="POST">
                    <div class="modal-body">
                            <input type="text" name="email" placeholder="Email">
                            <input type="password" name="password" placeholder="Mot de passe">
                    </div>
                    <div class="modal-footer">
                        <a href="./subscribe.php" class="btn btn-dark">Je n'ai pas de compte...</a>
                        <button type="submit" class="btn btn-danger">Connexion</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
