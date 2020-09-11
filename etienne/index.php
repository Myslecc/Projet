<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="text-danger">Selectionnez une eau</h1>

                <h2>Eaux plates</h2>
                <ul>
                    <li>10 : Avian</li>
                    <li>11 : Hépure</li>
                    <li>12 : Nittel</li>
                    <li>13 : Cristalone</li>
                </ul>

                <h2>Eaux pétillantes</h2>
                <ul>
                    <li>20 : Baloie</li>
                    <li>21 : Carzac</li>
                    <li>22 : Pellier</li>
                    <li>23 : San Pelrino</li>
                </ul>

                <form method="POST">
                    <label>Entrez le numéro de la bouteille que vous souhaiter :</label> <br>
                    <input name="choice" type="number">
                    <input type="submit" value="OK">
                </form>
                <br>

<?php   
    $choix = $_POST['choice'];

    if ($choix == 10) {
        echo "Vous avez choisis Avian";
    } else if ($choix == 11) {
        echo "Vous avez choisis Hépure";
    } else if ($choix == 12) {
        echo "Vous avez choisis Nittel";
    } else if ($choix == 13) {
        echo "Vous avez choisis Cristalone";
    } else if ($choix == 20) {
        echo "Vous avez choisis Baloie";
    } else if ($choix == 21) {
        echo "Vous avez choisis Carzac";
    } else if ($choix == 22) {
        echo "Vous avez choisis Pellier";
    } else if ($choix == 23) {
        echo "Vous avez choisis San Pelrino";
    } else {
        echo "Veuillez entrez le bon numéro s'il vous plaît";
    }
?>
            
            
            
            </div>
        </div>
    </div>







      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>