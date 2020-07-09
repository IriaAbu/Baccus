<?php
session_start();
class Requette
{
    private $_age;
    private $_genre;
    private $_prenom;
    private $_nom;
    private $_ville;
    private $_email;
    private $_password;
    private $pdo;

    public function __construct()
    {
        try {
            $user = 'miriam';
            $passWord = "root";
            $bdd = 'my_meetic';

            $pdo = new PDO(
                'mysql:host=localhost;dbname=' . $bdd,
                $user,
                $passWord
            );
            $this->pdo = $pdo;
        } catch (PDOException $error) {
            echo 'Error : ' . $error->getMessage() . PHP_EOL;
        }
    }

    public function getAge()
    {
        return $this->_age;
    }
    public function setAge($age)
    {
        $this->_age = $age;
    }
    public function getGenre()
    {
        return $this->_genre;
    }
    public function setGenre($genre)
    {
        $this->_genre = $genre;
    }
    public function getPrenom()
    {
        return $this->_prenom;
    }
    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }
    public function getNom()
    {
        return $this->_nom;
    }
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }
    public function getVille()
    {
        return $this->_ville;
    }
    public function setVille($ville)
    {
        $this->_ville = $ville;
    }
    public function getEmail()
    {
        return $this->_email;
    }
    public function setEmail($email)
    {
        $this->_email = $email;
    }
    public function getPassword()
    {
        return $this->_password;
    }
    public function setPassword($password)
    {
        $this->_password = $password;
    }
    public function conexion()
    {
        $qpdo1 = "SELECT e_mail FROM membre WHERE e_mail='$_POST[email_membre]'";
        $req1 = $this->pdo->query($qpdo1);
        $email = $req1->fetch();

        $qpdo2 = "SELECT mot_de_passe FROM membre WHERE e_mail='$_POST[email_membre]'";
        $req2 = $this->pdo->query($qpdo2);
        $mdp = $req2->fetch();

        $qpdo13 = "SELECT compte FROM membre WHERE e_mail='$_POST[email_membre]'";
        $req13 = $this->pdo->query($qpdo13);
        $compte = $req13->fetch();

        if ($email['e_mail'] == $_POST['email_membre'] && $mdp['mot_de_passe'] == $_POST['password_membre'] && $compte['compte'] == 'Actif') {
            $qpdo10 = "SELECT * FROM membre LEFT JOIN loisir_membre ON membre.id_membre=loisir_membre.id_membre LEFT JOIN loisir ON loisir_membre.id_loisir=loisir.id_loisir WHERE e_mail='$_POST[email_membre]'";
            $req10 = $this->pdo->query($qpdo10);
            foreach ($req10 as $row) {
                $_SESSION['genre'] = $row['genre'];
                $_SESSION['nom'] = $row['nom'];
                $_SESSION['prenom'] = $row['prenom'];
                $_SESSION['date_naissance'] = $row['date_naissance'];
                $_SESSION['ville'] = $row['ville'];
                $_SESSION['e_mail'] = $row['e_mail'];
                $_SESSION['mot_de_passe'] = $row['mot_de_passe'];
                $_SESSION['nom_loisir'] = $row['nom_loisir'];
            }
            header('Location: http://localhost/Projets/my_meetic/membre_recherche.php');
            exit;
        } else {
            echo '<h3>Données incorrectes. Il n\'y a pas de compte avec ce mail et mot de passe.</h3>';
            echo "<a href='http://localhost/Projets/my_meetic/conexion_inscription.php'><button style='background-color: grey; color: #111; font-weight: bold; letter-spacing: 0.05em; padding: 5px; border: 1px solid #111;'>Revenir en arrière</button></a>";
        }
    }

    public function inscription()
    {
        $dateToday = new DateTime(date('Y-m-d'));
        $dateNaissance = new DateTime($_POST['input_date']);
        $age = $dateToday->diff($dateNaissance);
        $age->format('%Y');

        $qpdo3 = "SELECT e_mail FROM membre WHERE e_mail='$_POST[email]'";
        $req3 = $this->pdo->query($qpdo3);
        $mail = $req3->fetch();

        $qpdo4 = "SELECT mot_de_passe FROM membre WHERE mot_de_passe='$_POST[password]'";
        $req4 = $this->pdo->query($qpdo4);
        $motDP = $req4->fetch();

        if ($age->format('%Y') < 18) {
            echo '<h3>Nous sommes navrés, ce site est reservé aux majeurs de 18 ans.</h3>';
        } elseif (isset($mail['e_mail'])) {
            echo '<h3>Ce mail à déjà un compte chez-nous. Veuillez insérer un mail valide.</h3>';
            echo "<a href='http://localhost/Projets/my_meetic/conexion_inscription.php'><button style='background-color: grey; color: #111; font-weight: bold; letter-spacing: 0.05em; padding: 5px; border: 1px solid #111;'>Revenir en arrière</button></a>";
        } elseif (isset($motDP['mot_de_passe'])) {
            echo '<h3>Ce mot de passe existe déjà. Veuillez renseigner un mot de passe valide.</h3>';
            echo "<a href='http://localhost/Projets/my_meetic/conexion_inscription.php'><button style='background-color: grey; color: #111; font-weight: bold; letter-spacing: 0.05em; padding: 5px; border: 1px solid #111;'>Revenir en arrière</button></a>";
        } elseif (empty($_POST['loisir'])) {
            echo '<h3>Vous devez remplir tous les champs pour valider le formulaire.</h3>';
            echo "<a href='http://localhost/Projets/my_meetic/conexion_inscription.php'><button style='background-color: grey; color: #111; font-weight: bold; letter-spacing: 0.05em; padding: 5px; border: 1px solid #111;'>Revenir en arrière</button></a>";
        } elseif ($age->format('%Y') >= 18 && isset($_POST['loisir'])) {
            $qpdo5 = "INSERT INTO membre (nom, prenom, date_naissance, genre, ville, e_mail, mot_de_passe) VALUES ('$_POST[nom]', '$_POST[prenom]', '$_POST[input_date]', '$_POST[genre]', '$_POST[ville]', '$_POST[email]', '$_POST[password]')";
            $req5 = $this->pdo->query($qpdo5);

            if ($req5) {
                usleep(250000);

                $qpdo6 = "SELECT id_membre FROM membre WHERE e_mail='$_POST[email]'";
                $req6 = $this->pdo->query($qpdo6);
                $id_membre = $req6->fetch();

                foreach ($_POST['loisir'] as $string) {

                    $qpdo7 = "SELECT id_loisir FROM loisir WHERE nom_loisir='$string'";
                    $req7 = $this->pdo->query($qpdo7);
                    $id_loisir = $req7->fetch();

                    $qpdo8 = "INSERT INTO loisir_membre (id_membre, id_loisir) VALUES ($id_membre[id_membre], $id_loisir[id_loisir])";
                    $req8 = $this->pdo->query($qpdo8);
                }
                if ($req8) {
                    $_SESSION['nom'] = $_POST['nom'];
                    $_SESSION['prenom'] = $_POST['prenom'];
                    $_SESSION['date_naissance'] = $_POST['input_date'];
                    $_SESSION['genre'] = $_POST['genre'];
                    $_SESSION['ville'] = $_POST['ville'];
                    $_SESSION['e_mail'] = $_POST['email'];
                    $_SESSION['mot_de_passe'] = $_POST['password'];
                    $_SESSION['nom_loisir'] = $_POST['loisir'];
                    foreach($_SESSION['nom_loisir'] as $row) {
                        $_SESSION['nom_loisir'] = $row;
                    }
                    header("Location: http://localhost/Projets/my_meetic/membre_recherche.php");
                    exit;
                }
            }
        }
    }
    public function modiffier_compte()
    {
        if (isset($_POST['new_nom'])) {

            $qpdo6 = "SELECT id_membre FROM membre WHERE e_mail='$_SESSION[e_mail]'";
            $req6 = $this->pdo->query($qpdo6);
            $id_membre = $req6->fetch();

            $qpdo9 = "UPDATE membre SET nom='$_POST[new_nom]', prenom='$_POST[new_prenom]', ville='$_POST[new_ville]', e_mail='$_POST[new_email]', mot_de_passe='$_POST[new_mdp]' WHERE id_membre='$id_membre[0]'";
            $req9 = $this->pdo->query($qpdo9);
            if ($req9) {
                $_SESSION['nom'] = $_POST['new_nom'];
                $_SESSION['prenom'] = $_POST['new_prenom'];
                $_SESSION['ville'] = $_POST['new_ville'];
                $_SESSION['e_mail'] = $_POST['new_email'];
                $_SESSION['mot_de_passe'] = $_POST['new_mdp'];

                header("Location: http://localhost/Projets/my_meetic/membre_recherche.php");
                exit;
            }
        }
    }

    public function fermer_session()
    {
        header("Location: http://localhost/Projets/my_meetic/conexion_inscription.php");
        exit;
    }

    public function supprimer_compte()
    {
        $qpdo12 = "UPDATE membre SET compte='Inactif' WHERE e_mail='$_SESSION[e_mail]'";
        $req12 = $this->pdo->query($qpdo12);
        if ($req12) {
            echo '<h3>Votre compte à été supprimé. On espère vous revoir bientot !</h3>';
            echo "<a href='http://localhost/Projets/my_meetic/conexion_inscription.php'><button style='background-color: grey; color: #111; font-weight: bold; letter-spacing: 0.05em; padding: 5px; border: 1px solid #111;'>Revenir à la page d'inscription</button></a>";
        }
    }

    public function recherche()
    {
        $_SESSION['genre_f'] = $_POST['genre'];
        $_SESSION['age_f'] = $_POST['age'];
        $_SESSION['ville_f'] = $_POST['ville'];
        $_SESSION['loisir_f'] = $_POST['loisir'];


        $qpdo14 = "SELECT m.nom, m.prenom, m.date_naissance, m.genre, m.ville, l.nom_loisir FROM membre m LEFT JOIN loisir_membre ON loisir_membre.id_membre=m.id_membre LEFT JOIN loisir l ON l.id_loisir=loisir_membre.id_loisir WHERE m.genre='$_SESSION[genre_f]' AND m.ville='$_SESSION[ville_f]' AND l.nom_loisir='$_SESSION[loisir_f]' AND m.compte='Actif' ORDER BY m.prenom ASC";
        $req14 = $this->pdo->query($qpdo14);
        $requette = $req14->fetchAll(0);
        
        if ($requette) {
            $_SESSION['rslt'] = $requette;
            header('Location: http://localhost/Projets/my_meetic/recherche.php');
            exit;
        } else {
            echo '<h3>Il n\'y a pas des resultats pour cette recherche.</h3>';
            echo "<a href='http://localhost/Projets/my_meetic/membre_recherche.php'><button style='background-color: grey; color: #111; font-weight: bold; letter-spacing: 0.05em; padding: 5px; border: 1px solid #111;'>Faire une autre recherche</button></a>";
        }
    }
}

$membre = new Requette();
if (isset($_POST['connexion'])) {
    $membre->conexion();
} elseif (isset($_POST['inscription'])) {
    $membre->inscription();
} elseif (isset($_POST['modiff_compte'])) {
    $membre->modiffier_compte();
} elseif (isset($_POST['out'])) {
    $membre->fermer_session();
} elseif (isset($_POST['supprimer'])) {
    $membre->supprimer_compte();
} elseif (isset($_POST['genre'])) {
    $membre->recherche();
}
