<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice MOIS</title>
</head>
<body>
    <?php
        $noms_mois= array(
            1 => "Janvier",
            2 => "Février",
            3 => "Mars",
            4 => "Avril",
            5 => "Mai",
            6 =>  "Juin",
            7 => "Juillet",
            8 => "Aout",
            9 => "Septembre",
            10 => "Octobre",
            11 => "Novembre",
            12 => "Décembre",
        );

        $nbr_jours_mois=array(
            "Janvier" => 31,
            "Février" =>30,
            "Mars" =>31,
            "Avril" =>30,
            "Mai" =>31,
            "Juin" =>30,
            "Juillet" =>31,
            "Aout" =>31,
            "Septembre" =>30,
            "Octobre" =>31,
            "Novembre" =>30,
            "Decembre" =>31
        );

        echo "Il y a ".$nbr_jours_mois[ $noms_mois[2] ]." jours en Mars<br>";
        echo "Il y a ".$nbr_jours_mois[ $noms_mois[5] ]." jours en Juin<br>";
        echo "Il y a ".$nbr_jours_mois[ $noms_mois[7] ]." jours en Aout<br>";
        echo "Il y a ".$nbr_jours_mois[ $noms_mois[10 ]]." jours en Novembre";
    ?>
</body>
</html>
