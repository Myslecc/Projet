    <?php
        include('menu.php');
    ?>

    <div class="container">
        <form action="./controller/ctrlSubscribe.php" method="POST">
            <div class="form-group">
                <label>Email</label>
                <input name="email" type="email" class="form-control" >
            </div>
            <div class="form-group">
                <label>Mot de passe</label>
                <input name="password" type="password" class="form-control" >
            </div>
            <div class="form-group">
                <label>Nom</label>
                <input name="lastname" type="text" class="form-control" >
            </div>
            <div class="form-group">
                <label>Prénom</label>
                <input name="firstname" type="text" class="form-control" >
            </div>
            <button type="submit" class="btn btn-success btn-block">Inscription</button>
        </form>
    </div>
</body>
</html>