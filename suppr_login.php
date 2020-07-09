<?php
session_start();
include('Requettes.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style_login.css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
</head>

<body>
    <h3 id="label_suppr">Vous êtes sûr de vouloir supprimer votre compte ?</h3>
    <form action="Requettes.php" method="POST" id="formulaire_suppression">
        <input type="submit" name="supprimer" id="submit_suppr" value="Supprimer mon compte Bacchus">
    </form>
</body>

</html>