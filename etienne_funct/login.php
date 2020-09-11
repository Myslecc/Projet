<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

            //1 - Fonction login <br>
    <?php 

        function login($user, $mdp) {
            
            return $user == "Peter" and $mdp =="zizou12";

            }

            if (login($_POST['user'], $_POST['mdp'])); {
                echo "Connecté";
            } 

            else {
                echo "Erreur de login";
            };
        



    ?>


            //2 - Formulaire
    
        <form method="POST" action="">

            <label>Nom d'utilisateur</label>    
            <input name="user" type="login">
            
            <label>Mot de passe</label>
            <input name="mdp" type="password">

            <input type="submit">
        
        </form>













</body>
</html>