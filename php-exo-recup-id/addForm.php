<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ajouter un Pokémon</h1>

    <form action="addForm.php" method="POST">
        <input type="text" placeholder="name" name="name">
        <input type="text" placeholder="description" name="description">
        <input type="number" name="level" placeholder="level">
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>