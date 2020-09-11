<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

        function calculPerimetreCarre($coterx)
        {
            $result = $coterx * 4;
            return $result;
        }

        $result = calculPerimetreCarre(6);
        echo '<h3>Le périmètre d\'un carré avec un coté de 6 est de ' . $result;

    ?>
  
</body>
</html>