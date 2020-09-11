<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<p>hello 
    <?php echo $_SESSION['login'].' '.$_SESSION['mdp']."?"?>
</p>

<?php
   echo "nom : ".$_SESSION['login']; 
   echo "<br>pass : ".$_SESSION['mdp'];
?>
<br>
<a href="logout.php">Deconnexion</a>