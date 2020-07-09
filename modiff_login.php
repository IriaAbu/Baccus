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
    <form id="form_modiff" action="Requettes.php" method="POST">
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
                <label for="nom">Nouveau nom de famille </label>
                <input type="text" name="new_nom" id="nom" value="<?php if (isset($_SESSION['nom'])) {
                                                                        echo $_SESSION['nom'];
                                                                    }; ?>">
                <br>

                <p>Prénom : <?php if (isset($_SESSION['prenom'])) {
                                echo $_SESSION['prenom'];
                            }; ?></p>
                <label for="prenom">Nouveau prénom </label>
                <input type="text" name="new_prenom" id="prenom" value="<?php if (isset($_SESSION['prenom'])) {
                                                                            echo $_SESSION['prenom'];
                                                                        }; ?>">
                <br>

                <p>Date de naissance : <?php if (isset($_SESSION['date_naissance'])) {
                                            echo $_SESSION['date_naissance'];
                                        }; ?></p>

                <p>Ville : <?php if (isset($_SESSION['ville'])) {
                                echo $_SESSION['ville'];
                            }; ?></p>
                <label for="ville">Tu as changé de ville ? </label>
                <select name="new_ville" id="ville">
                    <option value="<?php if (isset($_SESSION['ville'])) {
                                        echo $_SESSION['ville'];
                                    }; ?>"><?php if (isset($_SESSION['ville'])) {
                                                echo $_SESSION['ville'];
                                            }; ?></option>
                    <option value="Paris">Paris</option>
                    <option value="Marseille">Marseille</option>
                    <option value="Lyon">Lyon</option>
                    <option value="Toulouse">Toulouse</option>
                    <option value="Nice">Nice</option>
                    <option value="Nantes">Nantes</option>
                    <option value="Montpellier">Montpellier</option>
                    <option value="Strasbourg">Strasbourg</option>
                    <option value="Bordeaux">Bordeaux</option>
                    <option value="Lille">Lille</option>
                    <option value="Etranger">Étranger</option>
                </select>
                <br>

                <p>Email : <?php if (isset($_SESSION['e_mail'])) {
                                echo $_SESSION['e_mail'];
                            }; ?></p>
                <label for="email">Nouveau email </label>
                <input type="email" name="new_email" id="email" value="<?php if (isset($_SESSION['e_mail'])) {
                                                                            echo $_SESSION['e_mail'];
                                                                        }; ?>">
                <br>

                <p>Mot de passe : <input type="password" id="password" value="<?php if (isset($_SESSION['mot_de_passe'])) {
                                                                                    echo $_SESSION['mot_de_passe'];
                                                                                }; ?>">
                    <label for="checkbox">
                        <input type="checkbox" id="checkbox"></label></p>
                <label for="mdp">Nouveau mot de passe </label>
                <input type="password" name="new_mdp" id="mdp" value="<?php if (isset($_SESSION['mot_de_passe'])) {
                                                                            echo $_SESSION['mot_de_passe'];
                                                                        }; ?>">
                <label for="checkbox">
                    <input type="checkbox" id="checkbox"></label>
                <br>
                
                <p>Un de tes loisirs : <?php if (isset($_SESSION['nom_loisir'])) {
                                            echo ucfirst($_SESSION['nom_loisir']);
                                        }; ?></p>

                <input type="submit" id="submit_modiff" value="Modiffier" name="modiff_compte">
            </div>
        </div>
    </form>

    <script src="utils/jQuery.js"></script>
    <script>
        $(document).ready(function() {
            $('input[type="checkbox"]').click(function() {
                if ($(this).is(":checked")) {
                    $('#password').attr("type", "text");
                    $('#mdp').attr("type", "text");
                } else if ($(this).is(":not(:checked)")) {
                    $('#password').attr("type", "password");
                    $('#mdp').attr("type", "password");
                }
            });
        });
    </script>
</body>

</html>