<?php
session_start();
include('Requettes.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style_recherche.css">
    <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div id="div_taille">
            <img id="img_header" src="utils/taille.png" alt="taille_grec" titre="taille_grec">
            <a href="http://localhost/Projets/my_meetic/membre_recherche.php"><input type="button" value="Faire autre recherche" id="button_autre_recherche"></a>
            <a href="http://localhost/Projets/my_meetic/membre_recherche.php"><input type="button" value="Revenir à mon compte" id="button_accueil"></a>
        </div>
    </header>
    <main>
        <h2 id="">Voici le résultat de tes recherches :</h2>
        <?php foreach ($_SESSION['rslt'] as $row) {
            echo "<div class='carrousel'>";
                echo "<div class='slide1'>";
                    echo "<div class='visu'>";
                        echo "<img class='img_recherche' src='utils/profil.png' alt='photo de profil' titre='photo du membre'>";
                        echo "<div class='div_infos_recherche'>";
                            echo "<p class='nom'>$row[nom]</p>";
                            echo "<p class='prenom'>$row[prenom]</p>";
                            echo "<p>$row[date_naissance]</p>";
                            echo "<p>$row[genre]</p>";
                            echo "<p>$row[ville]</p>";
                        if ($row['nom_loisir'] == 'Peu_importe') {
                            echo "Pour cette personne les loisirs en commun ne sont pas importants";
                        } else {
                            echo "<p>Cette personne aime " . $row['nom_loisir'] . "</p>";
                        }   
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        }
        ?>
    </main>
    <footer>
        <img id="img_frise" src="utils/frise.png" alt="frise grecque" titre="frise grecque">
    </footer>

    <!-- <script src="utils/jQuery.js"></script>
    <script> -->
        <!-- // $(document).ready(function() {
        //     s = new slider('#galerie');
        // });

        // var slider = function(id) {
        //     self = this;
        //     // stocker la galerie :
        //     this.div = $(id);
        //     this.slider = this.div.find(".slider");
        //     // stoquer la largeur de la galerie :
        //     this.largeurCache = this.div.width();
        //     // stocker la largeur de basse :
        //     this.largeur = 0;
        //     this.div.find('a').each(function() {
        //         self.largeur += $(this).width();
        //         self.largeur += parseInt($(this).css("padding-left"));
        //         self.largeur += parseInt($(this).css("padding-right"));
        //         self.largeur += parseInt($(this).css("margin-left"));
        //         self.largeur += parseInt($(this).css("margin-right"));
        //     });
        //     this.prec = this.div.find('.prec');
        //     this.suiv = this.div.find('.suiv');
        //     this.saut = this.largeurCache / 2;
        //     this.nbEtapes = Math.ceil(this.largeur / this.saut - this.largeurCache / this.saut);
        //     this.courant = 0;

        //     this.suiv.click(function() {
        //         if (self.courant <= self.nbEtapes) {
        //             self.courant++;
        //             self.slider.animate({
        //                 left: -self.courant * self.saut
        //             }, 1000);
        //         } else {
        //             alert("finit");
        //         }

        //     });

        //     this.prec.click(function() {
        //         if (self.courant <= 0) {
        //             self.courant--;
        //             self.slider.animate({
        //                 left: -self.courant * self.saut
        //             }, 1000);
        //         } else {
        //             alert("finit");
        //         }

        //     });

        // } -->
    <!-- </script> -->
</body>

</html>