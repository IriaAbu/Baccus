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
    <div id="infos">
        <div id="div_infos1">
            <img src="utils/profil.png" alt="photo de profil" titre="photo du membre">
            <p><?php if (isset($_SESSION['genre'])) {
                    echo $_SESSION['genre'];
                }; ?></p>
        </div>
        <div id="div_infos2">
            <h2>Voici vos informations</h2>
            <p>Nom : <?php if (isset($_SESSION['nom'])) {
                            echo $_SESSION['nom'];
                        }; ?></p>
            <p>Prénom : <?php if (isset($_SESSION['prenom'])) {
                            echo $_SESSION['prenom'];
                        }; ?></p>
            <p>Date de naissance : <?php if (isset($_SESSION['date_naissance'])) {
                                        echo $_SESSION['date_naissance'];
                                    }; ?></p>
            <p>Ville : <?php if (isset($_SESSION['ville'])) {
                            echo $_SESSION['ville'];
                        }; ?></p>
            <p>Email : <?php if (isset($_SESSION['e_mail'])) {
                            echo $_SESSION['e_mail'];
                        }; ?></p>
            <p>Mot de passe : <input type="password" id="password" value="<?php if (isset($_SESSION['mot_de_passe'])) {
                                                                                echo $_SESSION['mot_de_passe'];
                                                                            }; ?>">
                <label for="checkbox">
                    <input type="checkbox" id="checkbox"></label></p>
            <p>Un de tes loisirs : <?php if (isset($_SESSION['nom_loisir'])) {
                                        echo ucfirst($_SESSION['nom_loisir']);
                                    }; ?></p>
        </div>
    </div>
    <script src="utils/jQuery.js"></script>
    <script>
        $(document).ready(function() {
            $('input[type="checkbox"]').click(function() {
                if ($(this).is(":checked")) {
                    $('#password').attr("type", "text");
                } else if ($(this).is(":not(:checked)")) {
                    $('#password').attr("type", "password");
                }
            });
        });
    </script>
</body>

</html>