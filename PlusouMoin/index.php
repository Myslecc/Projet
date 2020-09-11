<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function multiplier ($a, $b) {
            return $a * $b ;
        };

        function diviser ($a, $b) {
            return $a / $b  ;
        };

        echo  "<br/>" .multiplier(3, 5);
        echo "<br/>" .diviser(80, 7);

        echo "<br/>" .multiplier(multiplier(3,8),7);
        echo "<br/>" .diviser(diviser(180,10),9);

        echo "<br/>" .multiplier(diviser( diviser( multiplier( multiplier(5, 7), 8), 9), 2), 6);
    ?>
</body>
</html>

