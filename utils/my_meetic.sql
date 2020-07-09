-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Sam 08 Février 2020 à 16:55
-- Version du serveur :  5.7.29-0ubuntu0.18.04.1
-- Version de PHP :  7.2.24-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `my_meetic`
--

-- --------------------------------------------------------

--
-- Structure de la table `loisir`
--

CREATE TABLE `loisir` (
  `id_loisir` smallint(6) UNSIGNED NOT NULL,
  `nom_loisir` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `loisir`
--

INSERT INTO `loisir` (`id_loisir`, `nom_loisir`) VALUES
(1, 'dance'),
(2, 'music'),
(3, 'manger'),
(4, 'cuisine'),
(5, 'sexe'),
(6, 'lecture'),
(7, 'ecriture'),
(8, 'bacchanal'),
(9, 'code'),
(10, 'foresti');

-- --------------------------------------------------------

--
-- Structure de la table `loisir_membre`
--

CREATE TABLE `loisir_membre` (
  `id_entree` smallint(6) UNSIGNED NOT NULL,
  `id_membre` smallint(6) NOT NULL,
  `id_loisir` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `loisir_membre`
--

INSERT INTO `loisir_membre` (`id_entree`, `id_membre`, `id_loisir`) VALUES
(1, 10, 3),
(3, 12, 5),
(6, 28, 2),
(7, 29, 2),
(8, 29, 5),
(9, 31, 3),
(10, 31, 9),
(25, 35, 1),
(26, 35, 2),
(27, 35, 5),
(28, 35, 6),
(29, 35, 7),
(32, 38, 1),
(35, 36, 5),
(36, 36, 8),
(37, 37, 10),
(39, 38, 2),
(40, 38, 5),
(41, 38, 6),
(42, 38, 8),
(43, 1, 9),
(44, 2, 9),
(45, 3, 9),
(46, 3, 5),
(47, 3, 8),
(48, 4, 1),
(49, 4, 2),
(50, 4, 3),
(51, 4, 4),
(52, 11, 10),
(53, 13, 1),
(54, 13, 9),
(55, 14, 9),
(56, 14, 1),
(57, 30, 9),
(58, 30, 2),
(59, 34, 2),
(61, 34, 3),
(62, 34, 6),
(63, 34, 1),
(64, 39, 5),
(65, 40, 10),
(66, 41, 8),
(67, 42, 8),
(68, 43, 5),
(69, 43, 8),
(70, 44, 5),
(71, 45, 3),
(72, 45, 5),
(73, 45, 8),
(74, 46, 5),
(75, 46, 8),
(76, 46, 5),
(77, 46, 8),
(78, 48, 5),
(79, 48, 6),
(80, 48, 8),
(81, 59, 1),
(82, 59, 2),
(83, 59, 3),
(84, 59, 4),
(85, 59, 5),
(86, 59, 6),
(87, 59, 7),
(88, 59, 8),
(89, 59, 9),
(90, 59, 10),
(91, 60, 1),
(92, 60, 2),
(93, 60, 3),
(94, 60, 4),
(95, 60, 5),
(96, 60, 6),
(97, 60, 7),
(98, 60, 8),
(99, 60, 9),
(100, 60, 10),
(101, 61, 1),
(102, 61, 2),
(103, 61, 3),
(104, 61, 4),
(105, 61, 5),
(106, 61, 6),
(107, 61, 7),
(108, 61, 8),
(109, 61, 9),
(110, 61, 10),
(111, 62, 2),
(112, 62, 4),
(113, 62, 8),
(114, 63, 1),
(115, 63, 5),
(116, 63, 7),
(117, 64, 1),
(118, 64, 2),
(119, 64, 3),
(120, 64, 4),
(121, 64, 5),
(122, 64, 6),
(123, 64, 7),
(124, 64, 8),
(125, 64, 9),
(126, 64, 10),
(127, 65, 1),
(128, 65, 2),
(129, 65, 3),
(130, 65, 4),
(131, 65, 5),
(132, 65, 6),
(133, 65, 7),
(134, 65, 8),
(135, 65, 9),
(136, 65, 10),
(137, 66, 1),
(138, 66, 2),
(139, 66, 3),
(140, 66, 4),
(141, 66, 5),
(142, 66, 6),
(143, 66, 7),
(144, 66, 8),
(145, 66, 9),
(146, 66, 10),
(147, 67, 1),
(148, 67, 2),
(149, 67, 3),
(150, 67, 4),
(151, 67, 5),
(152, 67, 6),
(153, 67, 7),
(154, 67, 8),
(155, 67, 9),
(156, 67, 10),
(157, 68, 1),
(158, 68, 2),
(159, 68, 3),
(160, 68, 4),
(161, 68, 5),
(162, 68, 6),
(163, 68, 7),
(164, 68, 8),
(165, 69, 1),
(166, 70, 1),
(167, 70, 2),
(168, 70, 3),
(169, 70, 4),
(170, 70, 5),
(171, 70, 6),
(172, 70, 7),
(173, 70, 8),
(174, 70, 9),
(175, 70, 10);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_membre` smallint(6) UNSIGNED NOT NULL,
  `compte` varchar(10) NOT NULL DEFAULT 'Actif',
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `date_naissance` date NOT NULL,
  `genre` varchar(15) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `e_mail` varchar(40) NOT NULL,
  `mot_de_passe` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `compte`, `nom`, `prenom`, `date_naissance`, `genre`, `ville`, `e_mail`, `mot_de_passe`) VALUES
(1, 'Inactif', 'Laruelle', 'Lucas', '1998-04-17', 'Homme', 'Paris', 'lucas.laruelle@epitech.eu', 'MDPLucas'),
(2, 'Inactif', 'Vladimir', 'Sebastien', '1997-04-07', 'Homme', 'Paris', 'sebastien.vladimir@epitech.eu', 'AutreMotDePasse'),
(3, 'Actif', 'Olmedo Vera', 'Miriam', '1992-12-13', 'Femme', 'Etranger', 'molmedovera@gmail.com', 'EncoreUnMDP'),
(4, 'Actif', 'Moreiras Blanco', 'Coco', '1990-02-09', 'Femme', 'Paris', 'carole.moreiras-blanco@epitech.eu', 'amoi'),
(10, 'Actif', 'Boquillion', 'Christelle', '1996-02-10', 'Femme', 'Paris', 'christelle.boquillion@epitech.eu', 'MDPChristelle'),
(11, 'Actif', 'Ahamed-mze', 'Taslima', '1998-07-13', 'Femme', 'Etranger', 'ahamed-mze.taslima@epitech.eu', 'MDPTaslima'),
(12, 'Actif', 'Camuzeaux', 'Guillaume', '1992-01-15', 'Homme', 'Etranger', 'guillaume.camuzeaux@epitech.eu', 'MDPGuillaume'),
(13, 'Actif', 'Reiss', 'Theresa', '1993-06-12', 'Femme', 'Paris', 'reiss.theresa@epitech.eu', 'MDPTheresa'),
(14, 'Actif', 'Andriamanantena', 'Rebecca', '1989-10-12', 'Femme', 'Paris', 'andriamanantena.rebecca@epitech.eu', 'MDPRebecca'),
(28, 'Actif', 'Rocha', 'Icaro', '2000-01-14', 'Homme', 'Etranger', 'rocha.icaro@epitech.eu', 'MDPIcaro'),
(29, 'Actif', 'Bouzerand', 'Camille', '1999-02-05', 'Homme', 'Paris', 'bouzerand.camille@epitech.eu', 'MDPCamille'),
(30, 'Actif', 'Ouaibi', 'Ali', '1995-06-21', 'Homme', 'Paris', 'ouaibi.ali@epitech.eu', 'MDPAli'),
(31, 'Actif', 'Keita', 'Koumba', '1997-07-10', 'Femme', 'Marseille', 'keita.koumba@epitech.eu', 'MDPKeita'),
(34, 'Inactif', 'Vera', 'Nerea', '1966-04-04', 'Femme', 'Etranger', 'nerea.vera@epitech.eu', 'MDPAma'),
(35, 'Actif', 'Olmedo', 'Javier', '1963-11-27', 'Homme', 'Etranger', 'javier.olmedo@epitech.eu', 'MDPApa'),
(36, 'Actif', 'Laruelle', 'Regis', '1979-06-11', 'Homme', 'Marseille', 'laruelle.regis@epitech.eu', 'MDPRegis'),
(37, 'Actif', 'Sommat', 'Auguste', '1983-03-30', 'Homme', 'Strasbourg', 'sommat.auguste@epitech.eu', 'MDPAuguste'),
(38, 'Actif', 'Prat', 'Flavien', '1994-01-31', 'Homme', 'Bordeaux', 'prat.flavien@epitech.eu', 'MDPLoup'),
(39, 'Actif', 'Breton', 'Philip', '1971-08-15', 'Homme', 'Nice', 'philip.breton@epitech.eu', 'MDPPhilip'),
(40, 'Actif', 'Malmaison', 'Betha', '1980-03-19', 'non-genre', 'Lille', 'betha.malmaison@epitech.eu', 'MDPBetha'),
(41, 'Actif', 'Del Rio', 'Lucca', '1975-02-28', 'non-genre', 'Montpellier', 'lucca.del-rio@epitech.eu', 'MDPLucca'),
(42, 'Actif', 'Belasco', 'Maria', '1963-05-23', 'on', 'Etranger', 'maria.belasco@epitech.eu', 'MDPMaria'),
(43, 'Actif', 'Lira', 'StÃ¨le', '1973-09-23', 'non-genre', 'Nantes', 'stele.lira@epitech.eu', 'MDPStele'),
(44, 'Actif', 'Pinsson', 'Bea', '1975-12-07', 'Femme', 'Paris', 'beatrice.pincon@epitech.eu', 'MDPBea'),
(46, 'Actif', 'Quebedo', 'Deborah', '1970-08-21', 'non-genre', 'Nice', 'deborah.quebedo@epitech.eu', 'MDPDeborah'),
(47, 'Actif', 'Sympa', 'Deborah', '1967-12-25', 'Homme', 'Lille', 'deborah.buffon@epitech.eu', 'MDPBuffon'),
(48, 'Actif', 'Marty', 'Martina', '1967-12-25', 'Femme', 'Lyon', 'martina.marty@epitech.eu', 'MDPMartina'),
(49, 'Actif', 'Buvet', 'Alexia', '1965-10-09', 'non-genre', 'Marseille', 'alexia.buvet@epitech.eu', 'MDPAlexia'),
(50, 'Actif', 'Balthe', 'Robert', '2001-11-06', 'Homme', 'Lyon', 'rober.balthe@epitech.eu', 'MDPRobert'),
(51, 'Actif', 'Decole', 'Ismael', '1999-09-01', 'non-genre', 'Lyon', 'ismael.decole@epitech.eu', 'MDPIsmael'),
(52, 'Actif', 'Amadeo', 'Denisse', '1953-08-02', 'Femme', 'Nice', 'denisse.amadeo@epitech.eu', 'MDPDenisse'),
(53, 'Actif', 'Conrad', 'Theo', '1948-07-03', 'Homme', 'Nantes', 'theo.conrad@epitech.eu', 'MDPTheo'),
(54, 'Actif', 'Nantes', 'Solanne', '1948-07-03', 'Homme', 'Montpellier', 'solanne.nantes@epitech.eu', 'MDPSolanne'),
(55, 'Actif', 'Nino', 'Manoa', '1985-06-04', 'non-genre', 'Strasbourg', 'manoa.nino@epitech.eu', 'MDPManoa'),
(56, 'Actif', 'Berne', 'Jules', '1995-05-05', 'non-genre', 'Bordeaux', 'jules.berne@epitech.eu', 'MDPJules'),
(57, 'Actif', 'Sanchez', 'Livia', '1979-03-07', 'Femme', 'Etranger', 'livia.sanchez@epitech.eu', 'MDPLivia'),
(58, 'Actif', 'Blanc', 'Joy', '1971-02-08', 'non-genre', 'Lille', 'joy.blanc@epitech.eu', 'MDPJoy'),
(59, 'Actif', 'Halvi', 'Charlotte', '1999-02-09', 'Homme', 'Bordeaux', 'charlotte.halvi@epitech.eu', 'MDPCharlotte'),
(60, 'Actif', 'Castro', 'Mathieu', '1990-02-09', 'non-genre', 'Bordeaux', 'mathieu.castro@epitech.eu', 'MDPMathieu'),
(61, 'Actif', 'Mateo', 'Enrique', '1969-01-10', 'non-genre', 'Strasbourg', 'enrique.mateo@epitech.eu', 'MDPEnrique'),
(62, 'Actif', 'Angel', 'Miguel', '1973-12-11', 'Homme', 'Strasbourg', 'miguel.angel@epitech.eu', 'MDPMiguel'),
(63, 'Actif', 'Rose', 'Nina', '1980-11-12', 'Femme', 'Montpellier', 'nina.rose@epitech.eu', 'MDPNina'),
(64, 'Actif', 'Del Carmen', 'Miren', '2001-11-13', 'Femme', 'Nantes', 'miren.del-carmen@epitech.eu', 'MDPMiren'),
(65, 'Actif', 'Dassier', 'Arthur', '1997-11-06', 'Homme', 'Montpellier', 'arthur.dassier@epitech.eu', 'MDPArthur'),
(66, 'Actif', 'Pangolin', 'Mathis', '1982-09-12', 'non-genre', 'Nantes', 'mathis.pangolin@epitech.eu', 'MDPMathis'),
(67, 'Actif', 'Betrave', 'Lexy', '1972-08-13', 'Femme', 'Nice', 'lexy.betrave@epitech.eu', 'MDPLexy'),
(68, 'Actif', 'Sin Llave', 'Pedro', '1999-07-14', 'Homme', 'Lyon', 'pedro.sin-llave@epitech.eu', 'MDPPedro'),
(69, 'Actif', 'Durand', 'Leila', '1996-07-15', 'Femme', 'Paris', 'leila.durand@epitech.eu', 'MDPLeila'),
(70, 'Actif', 'Delux', 'Beth', '2000-06-16', 'non-genre', 'Marseille', 'beth.delux@epitech.eu', 'MDPBeth');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `loisir`
--
ALTER TABLE `loisir`
  ADD PRIMARY KEY (`id_loisir`);

--
-- Index pour la table `loisir_membre`
--
ALTER TABLE `loisir_membre`
  ADD PRIMARY KEY (`id_entree`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `loisir`
--
ALTER TABLE `loisir`
  MODIFY `id_loisir` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `loisir_membre`
--
ALTER TABLE `loisir_membre`
  MODIFY `id_entree` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
