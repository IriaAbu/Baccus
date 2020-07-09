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
    <header>
        <div id="div_taille">
            <img id="img_header" src="utils/taille.png" alt="taille_grec" titre="taille_grec">
        </div>
        <div>
            <form method="POST" action="Requettes.php" class="menu">
                <select name="genre" class="filtres">
                    <option value="Femme">Femme</option>
                    <option value="Homme">Homme</option>
                    <option value="non-genre">non-genre</option>
                </select>
                <select name="age" class="filtres">
                    <option value="18-25">18 - 25</option>
                    <option value="25-35">25 - 35</option>
                    <option value="35-45">35 - 45</option>
                    <option value="45+">45+</option>
                </select>
                <select name="ville" class="filtres">
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
                    <option value="Etranger">Etranger</option>
                </select>
                <select name="loisir" class="filtres">
                    <option value="dance">dance</option>
                    <option value="music">music</option>
                    <option value="manger">manger</option>
                    <option value="cuisine">cuisine</option>
                    <option value="sexe">sexe</option>
                    <option value="lecture">lecture</option>
                    <option value="ecriture">ecriture</option>
                    <option value="bacchanal">bacchanal</option>
                    <option value="code">code</option>
                    <option value="foresti">foresti</option>
                </select>
                <a href="#" id="submit_recherche"><input type="submit" value="Faire recherche"></a>
            </form>
            <ul class="menu">
                <li id="menu_login"><a href="#">Login</a>
                    <ul>
                        <li><a href="#" id="compte">Mon Compte</a></li>
                        <li><a href="#" id="modiff">Modiffier le compte</a></li>
                        <li><a href="#" id="fermer">Fermer session</a></li>
                        <li><a href="#" id="suppr">Supprimer compte</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <main>
        <div>
            <h1 id="titre">Hello <?php if (isset($_SESSION['prenom'])) {
                                        echo $_SESSION['prenom'];
                                    }; ?></h1>
        </div>
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
    </main>
    <footer>
        <img id="img_frise" src="utils/frise.png" alt="frise grecque" titre="frise grecque">
    </footer>

    <script src="utils/jQuery.js"></script>
    <script>
        $(document).ready(function() {
            $('.menu li').hover(function() {
                $('ul:first', this).stop().slideDown();
            }, function() {
                $('ul:first', this).stop().slideUp();
            });
        });

        $(document).ready(function() {
            $('input[type="checkbox"]').click(function() {
                if ($(this).is(":checked")) {
                    $('#password').attr("type", "text");
                } else if ($(this).is(":not(:checked)")) {
                    $('#password').attr("type", "password");
                }
            });
        });

        $(document).ready(function() {
            $('#compte').click(function() {
                $('#infos').load('login.php');
            })
        });

        $(document).ready(function() {
            $('#modiff').click(function() {
                $('#infos').load('modiff_login.php');
            })
        });

        $(document).ready(function() {
            $('#fermer').click(function() {
                $('#infos').load('fermer_compte.php');
            })
        });

        $(document).ready(function() {
            $('#suppr').click(function() {
                $('#infos').load('suppr_login.php');
            })
        });
    </script>
</body>

</html>