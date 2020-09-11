<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recettes</title>
</head>
<body>
    <?php
        function gateaux_choco () {
            echo "Préchauffez votre four à 180°C (thermostat 6). Dans une casserole, faites fondre le chocolat et le beurre coupé en morceaux à feu très doux.<br/>";
            echo "Dans un saladier, ajoutez le sucre, les oeufs, la farine. Mélangez.<br/>";
            echo "Ajoutez le mélange chocolat/beurre. Mélangez bien.<br/>";
            echo "Beurrez et farinez votre moule puis y versez la pâte à gâteau.<br/>";
            echo "Faites cuire au four environ 20 minutes.<br/>";
            echo "A la sortie du four le gâteau ne paraît pas assez cuit. C'est normal, laissez-le refroidir puis démoulez- le.<br/>";
        }

        function tarte_pomme () {
            echo "Éplucher et découper en morceaux 4 Golden.<br/>";
            echo "Faire une compote : les mettre dans une casserole avec un peu d'eau (1 verre ou 2). Bien remuer. Quand les pommes commencent à ramollir, ajouter un sachet ou un sachet et demi de sucre vanillé. Ajouter un peu d'eau si nécessaire.<br/>";
            echo "Vous saurez si la compote est prête une fois que les pommes ne seront plus dures du tout. Ce n'est pas grave s'il reste quelques morceaux.<br/>";
            echo "Pendant que la compote cuit, éplucher et couper en quatre les deux dernières pommes, puis, couper les quartiers en fines lamelles (elles serviront à être posées sur la compote).<br/>";
            echo "Préchauffer le four à 210°C (thermostat 7).<br/>";
            echo "Laisser un peu refroidir la compote et étaler la pâte brisée dans un moule et la piquer avec une fourchette.<br/>";
            echo "Verser la compote sur la pâte et placer les lamelles de pommes en formant une spirale ou plusieurs cercles, au choix ! Disposer des lamelles de beurre dessus.<br/>";
            echo "Mettre au four et laisser cuire pendant 30 min max. Surveiller la cuisson. Vous pouvez ajouter un peu de sucre vanillé sur la tarte pendant que çà cuit pour caraméliser un peu.<br/>";
        }
    ?>
        
        <h1>Les 2 tartes au pommes</h1>
        <?php tarte_pomme(); ?>

        <hr>

        <?php tarte_pomme(); ?>

        <hr>

        <h1>Le gateaux au chocolat</h1>
        <?php gateaux_choco(); ?>

        <hr>

        <h1>La tartes au pommes</h1>
        <?php tarte_pomme(); ?>

</body>
</html>