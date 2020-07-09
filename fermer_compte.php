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
    <h3 id="label_fermer">Fermer session ?</h3>
    <form action="Requettes.php" method="POST" id="formulaire_fermer_session">
        <input type="submit" name="out" id="submit_out" value="Sortir de ma session">
    </form>
</body>

</html>