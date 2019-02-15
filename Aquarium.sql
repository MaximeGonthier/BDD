-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 29 Novembre 2017 à 18:26
-- Version du serveur :  10.1.24-MariaDB-6
-- Version de PHP :  7.0.22-3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Aquarium`
--

-- --------------------------------------------------------

--
-- Structure de la table `Activites`
--

CREATE TABLE `Activites` (
  `nactivitee` int(2) DEFAULT NULL,
  `date` varchar(10) DEFAULT NULL,
  `numerobassin` int(4) DEFAULT NULL,
  `heure` varchar(5) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Activites`
--

INSERT INTO `Activites` (`nactivitee`, `date`, `numerobassin`, `heure`, `type`) VALUES
(1, '12/01', 5, '12', 'nourissage des pingouins'),
(2, '12/01', 5, '15', 'spectacle des pingouins'),
(3, '12/01', 10, '11', 'sensibilisation aux especes en danger'),
(4, '15/01', 10, '16', 'decouverte des requins'),
(5, '16/01', 1, '12', 'nourissage des poissons tropicaux'),
(6, '12/01', 6, '12', 'les modes de reproduction des requins');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `activites_bat_b`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `activites_bat_b` (
`batiment` varchar(1)
,`date` varchar(10)
,`heure` varchar(5)
,`type` varchar(50)
,`numerobassin` int(4)
);

-- --------------------------------------------------------

--
-- Structure de la table `Animaux`
--

CREATE TABLE `Animaux` (
  `id` int(8) NOT NULL,
  `espece` varchar(60) DEFAULT NULL,
  `taille` decimal(4,0) DEFAULT NULL,
  `numerobassin` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Animaux`
--

INSERT INTO `Animaux` (`id`, `espece`, `taille`, `numerobassin`) VALUES
(2993923, 'dorade', '15', 3),
(11145678, 'requin guitare', '110', 10),
(12235678, 'requin zebre', '120', 10),
(12345643, 'requin taureau', '150', 10),
(12345677, 'poisson perroquet', '10', 1),
(12345678, 'poisson clown', '5', 1),
(12345679, 'poisson chirurgien', '5', 1),
(12424244, 'requin pointe noire', '70', 9),
(17482894, 'pastenague', '40', 9),
(19384984, 'baliste clown', '30', 7),
(19930204, 'thon', '70', 10),
(20293924, 'roussete', '14', 6),
(23209872, 'meduse bleu', '6', 2),
(23232323, 'meduse', '6', 2),
(23244242, 'brochet', '30', 3),
(23444222, 'meduse trefle', '6', 2),
(24525255, 'tetra', '7', 8),
(24728759, 'sacalaire', '6', 8),
(27267723, 'homard', '30', 4),
(28482944, 'poisson ballon', '35', 7),
(28829424, 'krobia', '6', 8),
(29849824, 'crevette', '2', 4),
(29849898, 'raie aigle', '100', 9),
(62345678, 'requin gris', '110', 10),
(72882392, 'oursin', '9', 4),
(82782444, 'rascasse', '10', 3),
(82994924, 'baliste picasso', '35', 7),
(92828292, 'pingouin', '40', 5);

-- --------------------------------------------------------

--
-- Structure de la table `Aquarium`
--

CREATE TABLE `Aquarium` (
  `nomaquarium` varchar(30) NOT NULL,
  `nomboutique` varchar(30) DEFAULT NULL,
  `tarif` decimal(5,0) DEFAULT NULL,
  `nbbassin` int(4) DEFAULT NULL,
  `adresse` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Aquarium`
--

INSERT INTO `Aquarium` (`nomaquarium`, `nomboutique`, `tarif`, `nbbassin`, `adresse`) VALUES
('Aquarium de Versailles', 'Aquaboutique', '20', 10, '5 boulevard de la reine');

-- --------------------------------------------------------

--
-- Structure de la table `Articles`
--

CREATE TABLE `Articles` (
  `codebarre` int(8) NOT NULL,
  `prix` decimal(7,0) DEFAULT NULL,
  `rayon` int(2) DEFAULT NULL,
  `nomboutique` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Articles`
--

INSERT INTO `Articles` (`codebarre`, `prix`, `rayon`, `nomboutique`) VALUES
(9482441, '45', 2, 'Aquaboutique'),
(9484924, '10', 2, 'Aquaboutique'),
(10908248, '43', 1, 'Aquaboutique'),
(22309942, '19', 1, 'Aquaboutique'),
(23421254, '13', 1, 'Aquaboutique'),
(23448944, '15', 1, 'Aquaboutique'),
(28049494, '12', 3, 'Aquaboutique'),
(49094924, '8', 3, 'Aquaboutique'),
(57429820, '30', 3, 'Aquaboutique'),
(57842024, '10', 2, 'Aquaboutique'),
(57928498, '35', 3, 'Aquaboutique'),
(87248709, '90', 3, 'Aquaboutique'),
(87492898, '20', 3, 'Aquaboutique'),
(89458205, '10', 2, 'Aquaboutique'),
(89509244, '5', 3, 'Aquaboutique'),
(90947983, '70', 3, 'Aquaboutique');

-- --------------------------------------------------------

--
-- Structure de la table `Bassin`
--

CREATE TABLE `Bassin` (
  `numerobassin` int(4) NOT NULL,
  `nomaquarium` varchar(30) DEFAULT NULL,
  `temperature` decimal(4,0) DEFAULT NULL,
  `contenance` decimal(10,0) DEFAULT NULL,
  `batiment` varchar(1) DEFAULT NULL,
  `nombreanimaux` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Bassin`
--

INSERT INTO `Bassin` (`numerobassin`, `nomaquarium`, `temperature`, `contenance`, `batiment`, `nombreanimaux`) VALUES
(1, 'Aquarium de Versailles', '22', '1000', 'A', 50),
(2, 'Aquarium de Versailles', '22', '1000', 'A', 85),
(3, 'Aquarium de Versailles', '25', '10000', 'A', 65),
(4, 'Aquarium de Versailles', '25', '20000', 'B', 10),
(5, 'Aquarium de Versailles', '12', '7000', 'B', 6),
(6, 'Aquarium de Versailles', '12', '800', 'B', 7),
(7, 'Aquarium de Versailles', '12', '50000', 'C', 45),
(8, 'Aquarium de Versailles', '15', '500', 'C', 10),
(9, 'Aquarium de Versailles', '15', '100000', 'C', 8),
(10, 'Aquarium de Versailles', '20', '200000', 'C', 30);

-- --------------------------------------------------------

--
-- Structure de la table `Boutique`
--

CREATE TABLE `Boutique` (
  `nomboutique` varchar(30) NOT NULL,
  `horaires` varchar(30) DEFAULT NULL,
  `nomgerant` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Boutique`
--

INSERT INTO `Boutique` (`nomboutique`, `horaires`, `nomgerant`) VALUES
('Aquaboutique', 'ouverture: 10h, fermeture: 18h', 'Pic');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `gros_animaux`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `gros_animaux` (
`id` int(8)
,`espece` varchar(60)
,`taille` decimal(4,0)
,`numerobassin` int(4)
);

-- --------------------------------------------------------

--
-- Structure de la table `Soigne`
--

CREATE TABLE `Soigne` (
  `cause` varchar(30) DEFAULT NULL,
  `id` int(8) NOT NULL,
  `numerosoigneur` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Soigne`
--

INSERT INTO `Soigne` (`cause`, `id`, `numerosoigneur`) VALUES
('inconnue', 2993923, 5),
('points blanc sur la tete', 12345678, 1),
('ailerons abime', 12424244, 2),
('ne mange plus', 28829424, 6),
('inconnue', 62345678, 8),
('inconnue', 92828292, 5);

-- --------------------------------------------------------

--
-- Structure de la table `Soigneur`
--

CREATE TABLE `Soigneur` (
  `numerosoigneur` int(6) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `specialite` enum('requin','otarie','mollusque','poisson','pingouin') DEFAULT 'poisson'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Soigneur`
--

INSERT INTO `Soigneur` (`numerosoigneur`, `nom`, `prenom`, `specialite`) VALUES
(1, 'Potiron', 'Paul', 'poisson'),
(2, 'Shark', 'Steven', 'requin'),
(3, 'Oot', 'Jean', 'otarie'),
(4, 'Squid', 'Emma', 'mollusque'),
(5, 'Kinder', 'Robert', 'pingouin'),
(6, 'Fish', 'Gerard', 'poisson'),
(7, 'Blob', 'Herve', 'requin'),
(8, 'Tuc', 'Michel', 'requin');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `soigneur_requin`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `soigneur_requin` (
`nom` varchar(30)
,`prenom` varchar(30)
,`numerosoigneur` int(6)
);

-- --------------------------------------------------------

--
-- Structure de la vue `activites_bat_b`
--
DROP TABLE IF EXISTS `activites_bat_b`;

CREATE ALGORITHM=UNDEFINED DEFINER=`max`@`localhost` SQL SECURITY DEFINER VIEW `activites_bat_b`  AS  select `Bassin`.`batiment` AS `batiment`,`Activites`.`date` AS `date`,`Activites`.`heure` AS `heure`,`Activites`.`type` AS `type`,`Activites`.`numerobassin` AS `numerobassin` from (`Bassin` join `Activites`) where ((`Bassin`.`batiment` = 'B') and (`Bassin`.`numerobassin` = `Activites`.`numerobassin`)) ;

-- --------------------------------------------------------

--
-- Structure de la vue `gros_animaux`
--
DROP TABLE IF EXISTS `gros_animaux`;

CREATE ALGORITHM=UNDEFINED DEFINER=`max`@`localhost` SQL SECURITY DEFINER VIEW `gros_animaux`  AS  select `Animaux`.`id` AS `id`,`Animaux`.`espece` AS `espece`,`Animaux`.`taille` AS `taille`,`Animaux`.`numerobassin` AS `numerobassin` from `Animaux` where (`Animaux`.`taille` >= 100) ;

-- --------------------------------------------------------

--
-- Structure de la vue `soigneur_requin`
--
DROP TABLE IF EXISTS `soigneur_requin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`max`@`localhost` SQL SECURITY DEFINER VIEW `soigneur_requin`  AS  select `Soigneur`.`nom` AS `nom`,`Soigneur`.`prenom` AS `prenom`,`Soigneur`.`numerosoigneur` AS `numerosoigneur` from `Soigneur` where (`Soigneur`.`specialite` = 'requin') ;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Activites`
--
ALTER TABLE `Activites`
  ADD KEY `numerobassin` (`numerobassin`);

--
-- Index pour la table `Animaux`
--
ALTER TABLE `Animaux`
  ADD PRIMARY KEY (`id`),
  ADD KEY `numerobassin` (`numerobassin`);

--
-- Index pour la table `Aquarium`
--
ALTER TABLE `Aquarium`
  ADD PRIMARY KEY (`nomaquarium`),
  ADD KEY `nomboutique` (`nomboutique`);

--
-- Index pour la table `Articles`
--
ALTER TABLE `Articles`
  ADD PRIMARY KEY (`codebarre`),
  ADD KEY `nomboutique` (`nomboutique`);

--
-- Index pour la table `Bassin`
--
ALTER TABLE `Bassin`
  ADD PRIMARY KEY (`numerobassin`),
  ADD KEY `nomaquarium` (`nomaquarium`);

--
-- Index pour la table `Boutique`
--
ALTER TABLE `Boutique`
  ADD PRIMARY KEY (`nomboutique`);

--
-- Index pour la table `Soigne`
--
ALTER TABLE `Soigne`
  ADD PRIMARY KEY (`id`,`numerosoigneur`),
  ADD KEY `numerosoigneur` (`numerosoigneur`);

--
-- Index pour la table `Soigneur`
--
ALTER TABLE `Soigneur`
  ADD PRIMARY KEY (`numerosoigneur`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Activites`
--
ALTER TABLE `Activites`
  ADD CONSTRAINT `Activites_ibfk_1` FOREIGN KEY (`numerobassin`) REFERENCES `Bassin` (`numerobassin`);

--
-- Contraintes pour la table `Animaux`
--
ALTER TABLE `Animaux`
  ADD CONSTRAINT `Animaux_ibfk_1` FOREIGN KEY (`numerobassin`) REFERENCES `Bassin` (`numerobassin`);

--
-- Contraintes pour la table `Aquarium`
--
ALTER TABLE `Aquarium`
  ADD CONSTRAINT `Aquarium_ibfk_1` FOREIGN KEY (`nomboutique`) REFERENCES `Boutique` (`nomboutique`);

--
-- Contraintes pour la table `Articles`
--
ALTER TABLE `Articles`
  ADD CONSTRAINT `Articles_ibfk_1` FOREIGN KEY (`nomboutique`) REFERENCES `Boutique` (`nomboutique`);

--
-- Contraintes pour la table `Bassin`
--
ALTER TABLE `Bassin`
  ADD CONSTRAINT `Bassin_ibfk_1` FOREIGN KEY (`nomaquarium`) REFERENCES `Aquarium` (`nomaquarium`);

--
-- Contraintes pour la table `Soigne`
--
ALTER TABLE `Soigne`
  ADD CONSTRAINT `Soigne_ibfk_1` FOREIGN KEY (`id`) REFERENCES `Animaux` (`id`),
  ADD CONSTRAINT `Soigne_ibfk_2` FOREIGN KEY (`numerosoigneur`) REFERENCES `Soigneur` (`numerosoigneur`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
