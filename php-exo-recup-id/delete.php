<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    <body>
    <?php
        
    try
    {
            $bdd = new PDO('mysql:host=localhost;dbname=pokedex;charset=utf8', 'root', '');
    }
    catch (Exeption $e)
    {
            die('Erreur : ' . $e_>getMessage());
    }
        
            $del = $bdd->prepare("DELETE FROM pokemon WHERE id = ?");
            $del->execute(
        array(
                    $_GET['id']
        )
            );
    ?>
    <?php      
    header('Location: index.php');    
    ?>
    

</body>
</html>