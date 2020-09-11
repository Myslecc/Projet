<?php
// Connexion à la base de données 'voiture_site'
try
{
    $connectbdd = new PDO ('mysql:host=localhost;dbname=voiture_site', 'root', '');
}

catch (Exception $e)
{
    // En cas d'erreur, on affiche un méssage et on arret tout
    die('Erreur : ' . $e->getMessage());

}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <style> h2 { font-family : Brush Script MT, Brush Script Std, cursive;} </style>
    <h2>Rechercher un membre : ⬇️</h2>
<form name="moteurderecherche" action="index.php" method="post">
    <input type="search" name="motcle" id="motcle" value="<?php echo $_POST['motcle']; ?>" />
    <input type="submit" name="boutonrecherche" id="boutonrecherche" value="Rechercher dans la liste des membres"/>
</form>
<ul>
<?php
if(isset($_POST['boutonrecherche'])) {

    $requete = "SELECT * FROM clients WHERE Nom LIKE '%".$_POST['motcle']."%'";
}


else {
    $requete = "SELECT * FROM clients ORDER BY Nom";
}

$reponse = $connectbdd->query($requete);


while($donnees = $reponse->fetch()) {

    $Nom = $donnees['Nom'];
    $Email = $donnees['Email'];
    if(!empty($donnees['photo'])) { $photo = $donnees['photo']; } else {
$photo = "profile.png"; }



   echo "<li>$Nom $Email <img src='images/$photo' alt='' width='30' height='30' /></li>";

}
?>
</ul>


</body>
</html>