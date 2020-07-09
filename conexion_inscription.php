<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Bacchus</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <img id="img_header" src="utils/taille.png" alt="taille_grec" titre="taille_grec">
        <h1 id="titre">Bacchus</h1>
    </header>
    <main>
        <div id="div_img_main">
            <img id="img_main" src="utils/bacchus.png" alt="bacchus" titre="taille_bacchus">
        </div>
        <div>
            <form id="formulaire_conexion" action="Requettes.php" method="POST">
                <h3>Conexion</h3>
                <input type="email" name="email_membre" id="email_membre" placeholder="alex.durand@epitech.eu" required>
                <input type="password" name="password_membre" id="password_membre" placeholder="mot de passe">
                <input type="submit" id="submit_conexion" name="connexion" value="Entrer">
            </form>
        </div>
        <div>
            <form id="formulaire_inscription" action="Requettes.php" method="POST">
                <div class="questions_form">
                    <h1 id="date_naissance">Insère ta date de naissance :</h1>
                    <input type="date" name="input_date" id="input_date" required>
                </div>

                <div class="questions_form">
                    <h1 id="Tu_es">Tu es :</h1>
                    <input class="radio" type="radio" name="genre" id="femme" value="Femme" required>
                    <label class="label" id="label_femme" for="femme">Femme</label>
                    <input class="radio" type="radio" name="genre" id="homme" value="Homme">
                    <label class="label" id="label_homme" for="homme">Homme</label>
                    <input class="radio" type="radio" name="genre" id="non-genre" value="non-genre">
                    <label class="label" id="label_non_genre" for="non-genre">Non genré</label>
                </div>

                <div class="questions_form">
                    <h1 id="nom_prenom">Quel est ton nom et prénom ?</h1>
                    <input type="text" name="prenom" id="prenom" placeholder="Alex" required>
                    <input type="text" name="nom" id="nom" placeholder="Durand" required>
                </div>

                <div class="questions_form">
                    <h1 id="d_ou">Tu viens d'où ?</h1>
                    <select name="ville" id="ville" required>
                        <option value="Paris">Paris/Ile de France</option>
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
                </div>

                <div class="questions_form">
                    <h1 id="inserer_mail">Insère ton email :</h1>
                    <input type="email" name="email" id="email" placeholder="alex.durand@epitech.eu" required>
                </div>

                <div class="questions_form">
                    <h1 id="mot_de_passe">Choisi un mot de passe personnel :</h1>
                    <input type="password" name="password" id="password" placeholder="mot de passe" required>
                </div>

                <div class="question_form">
                    <h1 id="t_aimes_quoi">T'aimes faire quoi dans la vie ?</h1>
                    <div id="premiers_loisirs">
                        <div id="check1">
                            <input type="checkbox" name="loisir[]" id="loisir1" value="dance">
                            <label id="label1" for="loisir1">Danser</label>
                            <br>
                        </div>
                        <div id="check2">
                            <input type="checkbox" name="loisir[]" id="loisir2" value="music">
                            <label id="label2" for="loisir2">La musique</label>
                            <br>
                        </div>
                        <div id="check3">
                            <input type="checkbox" name="loisir[]" id="loisir3" value="manger">
                            <label id="label3" for="loisir3">Manger</label>
                            <br>
                        </div>
                        <div id="check4">
                            <input type="checkbox" name="loisir[]" id="loisir4" value="cuisine">
                            <label id="label4" for="loisir4">Cuisiner</label>
                            <br>
                        </div>
                        <div id="check5">
                            <input type="checkbox" name="loisir[]" id="loisir5" value="sexe">
                            <label id="label5" for="loisir5">Le sexe</label>
                            <br>
                        </div>
                    </div>
                    <div id="derniers_loisirs">
                        <div id="check6">
                            <input type="checkbox" name="loisir[]" id="loisir6" value="lecture">
                            <label id="label6" for="loisir6">Lire</label>
                            <br>
                        </div>
                        <div id="check7">
                            <input type="checkbox" name="loisir[]" id="loisir7" value="ecriture">
                            <label id="label7" for="loisir7">Écrire</label>
                            <br>
                        </div>
                        <div id="check8">
                            <input type="checkbox" name="loisir[]" id="loisir8" value="bacchanal">
                            <label id="label8" for="loisir8">Les Bacchanales</label>
                            <br>
                        </div>
                        <div id="check9">
                            <input type="checkbox" name="loisir[]" id="loisir9" value="code">
                            <label id="label9" for="loisir9">Le code !</label>
                            <br>
                        </div>
                        <div id="check10">
                            <input type="checkbox" name="loisir[]" id="loisir10" value="foresti">
                            <label id="label10" for="loisir10">Foresti</label>
                            <br>
                        </div>
                    </div>
                </div>

                <input type="submit" id="submit_inscription" name="inscription" value="S'inscrire">

            </form>
        </div>

        <div id="r"></div>
    </main>
    <footer>
        <img id="img_footer" src="utils/taille.png" alt="taille_grec" titre="taille_grec">
    </footer>

    <script src="utils/jQuery.js"></script>
</body>

</html>
