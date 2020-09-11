<?php
    include('menu.php');
?>

<?php

    //Connexion à la bdd
    try{
        $bdd = new PDO("mysql:host=localhost;dbname=critik;charset=utf8","root","");
    }catch (Exception $e){
        die("erreur ".$e->getMessage());
    }

    $req = $bdd->prepare('SELECT * FROM critik ORDER BY id DESC');
    $req->execute();

?>

<div class="container">
    <div class='row'>
    <?php
        while($critik = $req->fetch()){
            echo('
            <div class="col-4 p-3">
                <h6>'.$critik['titleFilm']." - ".$critik['titleCritik'].'</h6>
                <a href="critik.php?id='.$critik['id'].'" class="text-primary">Voir plus</a>
            </div>');
        }
    ?>
    </div>
</div>
</body>
</html>