-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 08 Juin 2020 à 13:25
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lc_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(25) NOT NULL,
  `mdp` text NOT NULL,
  `type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `login`, `mdp`, `type`) VALUES
(1, 'admin', 'bf4d34107ffb22cd6d240ac2d1b5655e03b63202', 'Administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `num` int(11) NOT NULL,
  `num_fact` varchar(250) NOT NULL,
  `num_client` int(11) NOT NULL,
  `date_commande` varchar(250) NOT NULL,
  `montantcommande` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`num`, `num_fact`, `num_client`, `date_commande`, `montantcommande`) VALUES
(1, '20061112321', 32, ' 8/06/2020', NULL),
(2, '20061121321', 32, ' 8/06/2020', NULL),
(3, '20061123323', 32, ' 8/06/2020', NULL),
(4, '20061133321', 32, ' 8/06/2020', NULL),
(5, '20061239344', 34, ' 8/06/2020', NULL),
(6, '20061243344', 34, ' 8/06/2020', NULL),
(7, '20061247344', 34, ' 8/06/2020', NULL),
(8, '20060107341', 34, ' 8/06/2020', NULL),
(9, '20060122355', 35, ' 8/06/2020', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

CREATE TABLE `forum` (
  `num` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `sujet` varchar(20) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `forum`
--

INSERT INTO `forum` (`num`, `pseudo`, `sujet`, `comment`) VALUES
(4, 'Thomas', 'evolution clio1', 'Pas mal l\'évolution ! j\'adore\r\n          '),
(8, 'Erickson.g', '206 rouge²', 'en vrai 2 vrai\r\n\r\n          '),
(10, 'Wilsonbnc', 'evolution clio1', 'aaaaah ley moche\r\n          ');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `num_prod` int(11) NOT NULL,
  `nom_prod` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `type` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `prix_prod` float NOT NULL,
  `desc_prod` text COLLATE latin1_general_ci NOT NULL,
  `img_prod` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `idprod` varchar(250) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`num_prod`, `nom_prod`, `type`, `prix_prod`, `desc_prod`, `img_prod`, `idprod`) VALUES
(1, 'Jante  ALU DEZENT SILVER 17', 'Jantes', 143, 'La jante DEZENT est adaptée à tout type de véhicule, grâce à ses 5 branches fines et concaves et son design épuré.\r\nSon diamètre est de 17 pouces et sa largeur de 7 pouces.\r\nElle possède un entraxe de 5x105, un moyeu de 56,6mm et un déport de 42.\r\nLa jante supporte une charge d’environ 670 kg, et représente un poids d’environ 9,76 kg.\r\nAvec un dessin simple mais efficace, dans sa couleur Silver, cette nouveauté de DEZENT a toutes les chances de devenir une référence !\r\n', './img/jante-alu-dezent-ty-silver.jpg', 'jantealudezent17'),
(2, 'Jante aluminium', 'Jantes', 300, 'jante aluminium legere', './img/jantealu.jpg', 'jantealum'),
(3, 'Baquet Sparco REV FIA', 'Siege Baquet', 378, 'Ce siège baquet Sparco REV possède une monocoque en fibre de verre. Ce baquet possède un revêtement ultra résistant avec des renforts contre les déchirures dans les zones les plus affectées par l\'usure.\r\n', './img/siege-baquet.jpg', 'baquetrevfia'),
(4, 'Siège Baquet FIA OMP TRS Sky Noir', 'Siege Baquet', 235, 'La marque Italienne OMP a décidé de revoir le design de son baquet TRS. Ce baquet homologué FIA 8855-1999 est doté d\'une structure tubulaire. Le revêtement en vinyle de qualité donne à ce baquet un parfait effet simili cuir\r\n', './img/siege-baquet-fia-omp.jpg', 'baquetfiaomp'),
(5, 'Jante  ALU AEZ STRAIGHT DARK GRAPHITE MAT 17', 'Jantes', 192, 'Grâce aux courbes qui apparaissent à la jonction des 10 branches de la AEZ Straight dark, une fascinante asymétrie se laisse apercevoir.\r\nLa jante Straight dark Graphite mat, d’un diamètre de 17 pouces et d’une largeur de 7,5 pouces, apporte une empreinte sportive au véhicule.\r\nElle permet une charge d’environ 670 kg et représente un poids d’environ 10,07 kg.\r\nSon moyeu mesure 71,6 mm, son entraxe est de 5x114,3 et son déport est de 45.\r\nToutes ces courbes et lignes « straight » (droites) donnent de la vitesse et de la force à cette jante résolument attractive.\r\n', './img/jante_alu_dark.jpg', 'jantealuaez'),
(6, 'Volant GT2i Race 75 Noir / Branche Noire', 'Volant Tulipé', 39, 'Volant alu tulipé GT2i Compétition Race 75 possède 3 branches anodisées noires.', './img/volant-gt2i-race-75-noir-branche-noire.jpg', 'volantgtrace'),
(7, 'Volant Sparco P222', 'Volant Tulipé', 115, 'Volant Sparco P222 plat à 3 branches.', './img/volant-sparco-222.jpg', 'volantsparp22'),
(8, 'Kit 3 Pédales OMP Spécial BMW / Porsche Alu Pédale', 'pedale', 19.8, 'Jeu de 3 pédales en fonderie d’aluminium avec pédale accélérateur longue. Jeu livré avec visserie en acier. Dimensions:- frein 60x70 mm- accélérateur 60x210 mm', './img/pedale-omp-bmw-porshe.jpg', 'pedaleompbm'),
(9, 'Kit 3 Pédales Bratex Noir / Argent avec Visserie', 'pedale', 19.99, 'Kit de 3 pédales Bratex en aluminium anodisé noir. Dimensions frein / embrayage: 60x70mm', './img/kit-3-pedales-bratex-noir-argent-avec-visserie.jpg', 'pedalebratexnoir'),
(10, 'jante rotor 15"', 'Jante', 500, 'Jante 15" en fibre carbone', './img/jante-rotor.jpg', 'janterotor15'),
(11, 'dfsdf', 'Ligne clio rs', 15000, 'dsfdsfjksdfdsklkfldflsd\r\n          ', './img/lignedsfsf', 'lgncliors'),
(12, 'cica', 'ligne', 25000, 'dfjsdf,kndf\r\n          ', './img/lignecica', 'cica2'),
(13, 'Ligne rs6', 'ligne', 70000, 'good    ', './img/ligners6', 'ligners6'),
(14, 'Stickers mickey', 'stickers', 2, '140 x 50 x 2 cm', './img/stickmick', 'stickmick');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `num` int(11) NOT NULL,
  `nom` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `prenom` varchar(50) CHARACTER SET latin2 NOT NULL,
  `login` varchar(25) NOT NULL,
  `date_nais` date NOT NULL,
  `tel` varchar(15) NOT NULL,
  `adresse` varchar(250) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `mdp` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`num`, `nom`, `prenom`, `login`, `date_nais`, `tel`, `adresse`, `email`, `mdp`) VALUES
(3, 'THOMAS', 'BALOURD', '', '2019-10-01', '069245879', '0', 'GROS.GAUTHIER@GMAIL.COM', 'da39a3ee5e6b4b0d3255bfef95601890afd80709'),
(28, 'Thomas', 'MAHON', 'Thomas974', '2020-02-11', '0692159835', 'sqdsqd', 'tomfab974@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(29, 'Gravier', 'Erickson', 'Erickson.g', '2020-02-13', '0662558745', '', 'erickson.g@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(31, 'Garnier', 'Wilson', 'Wilsonbnc', '2020-04-27', '0693458625', '0', 'wilsonbnc974@mail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(32, 'Kemma', 'Kevin', 'Kevinpapa974', '2020-04-30', '06921111111', '41 rue Desboisviliers', 'kevinpapapalissade@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2'),
(33, 'Mahon', 'Maxime', 'M.Maxime', '2020-04-27', '0692157489', '0', 'maxime.m@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2'),
(34, 'Coupama', 'Laurent', 'laurent974', '2020-05-27', '0692154786', NULL, 'laurent974@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(35, 'Gravier', 'Erickson', 'Erickson974', '2000-02-24', '0692415689', '56 rue etanne', 'erickson.g@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

--
-- Déclencheurs `utilisateur`
--
DELIMITER $$
CREATE TRIGGER `after_delete` AFTER DELETE ON `utilisateur` FOR EACH ROW BEGIN INSERT INTO utilisateur_histo (num, nom, prenom, login, date_nais, tel, adresse, email, mdp, Datehisto, User, evenement) VALUES (OLD.num, OLD.nom, OLD.prenom, OLD.login, OLD.date_nais, OLD.tel, OLD.adresse, OLD.email, OLD.mdp, NOW(), CURRENT_USER, 'DELETE');END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_update` AFTER UPDATE ON `utilisateur` FOR EACH ROW BEGIN INSERT INTO utilisateur_histo (num, nom, prenom, login, date_nais, tel, adresse, email, mdp, Datehisto, User, evenement) VALUES(old.num, old.nom, old.prenom, old.login, old.date_nais, old.tel, old.adresse, old.email, old.mdp, NOW(), CURRENT_USER, 'UPDATE');END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_histo`
--

CREATE TABLE `utilisateur_histo` (
  `num` int(11) NOT NULL,
  `nom` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `prenom` varchar(50) CHARACTER SET latin2 NOT NULL,
  `login` varchar(25) NOT NULL,
  `date_nais` date NOT NULL,
  `tel` varchar(15) NOT NULL,
  `adresse` varchar(250) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `mdp` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Datehisto` datetime NOT NULL,
  `User` varchar(30) NOT NULL,
  `evenement` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur_histo`
--

INSERT INTO `utilisateur_histo` (`num`, `nom`, `prenom`, `login`, `date_nais`, `tel`, `adresse`, `email`, `mdp`, `Datehisto`, `User`, `evenement`) VALUES
(20, 'Pauline', 'ouais', '', '2017-09-17', '0692478965', '41 rue desboisvilliers', 'aure.pauline@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2020-05-22 17:11:57', 'root@localhost', 'UPDATE'),
(20, 'Pauline', 'poitier', '', '2017-09-17', '0692478965', '41 rue desboisvilliers', 'aure.pauline@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2020-05-22 17:12:30', 'root@localhost', 'UPDATE'),
(20, 'Pauline', 'Chirois', '', '2017-09-17', '0692478965', '41 rue desboisvilliers', 'aure.pauline@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2020-05-22 17:16:22', 'root@localhost', 'DELETE'),
(29, 'Gravier', 'Erickson', 'Erickson.g', '2020-02-13', '0662558745', '', 'erickson.g@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2020-05-22 17:31:58', 'root@localhost', 'UPDATE'),
(18, 'Nicole', 'Pontier', '', '2014-06-28', '06 92 45 68 45', '0', 'R.tangue@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2020-05-22 17:32:10', 'root@localhost', 'UPDATE'),
(32, 'Kemma', 'Kevin', 'Kevinpapa974', '2020-04-30', '0692156358', '0', 'kevinpapapalissade@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', '2020-05-22 19:09:31', 'root@localhost', 'UPDATE'),
(32, 'Kemma', 'Kevin', 'Kevinpapa974', '2020-04-30', '06921111111', '0', 'kevinpapapalissade@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', '2020-05-23 15:30:51', 'root@localhost', 'UPDATE'),
(30, 'GARNIER', 'Wilson', 'Wilson.g', '1998-12-14', '0692324565', '0', 'Wilsong@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2020-06-05 13:30:41', 'root@localhost', 'DELETE'),
(34, 'test', 'test', 'test1', '2020-04-29', '0692159835', NULL, 'test@gmail.com', '51eac6b471a284d3341d8c0c63d0f1a286262a18', '2020-06-05 14:08:11', 'root@localhost', 'DELETE'),
(18, 'Nicolas', 'Taillame', '', '2014-06-28', '06 92 45 68 45', '0', 'R.tangue@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2020-06-07 14:04:03', 'root@localhost', 'DELETE'),
(15, 'romain', 'adras', '', '2005-09-03', '06 92 45 68 45', '0', 'thomas@gmail.com', '2bebd02ee6a5c5bdc14cd0b7dad3065ca083b04c', '2020-06-07 14:50:19', 'root@localhost', 'DELETE'),
(32, 'Kemma', 'Kevin', 'Kevinpapa974', '2020-04-30', '06921111111', '0', 'kevinpapapalissade@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', '2020-06-07 18:35:46', 'root@localhost', 'UPDATE'),
(35, 'test', 'test', 'test12', '2020-05-31', '0692158636', 'tetdtf', 'test@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2020-06-07 23:58:03', 'root@localhost', 'DELETE');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`num`),
  ADD UNIQUE KEY `UNIQUE` (`num_fact`);

--
-- Index pour la table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`num`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`num_prod`),
  ADD UNIQUE KEY `idprod` (`idprod`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`num`),
  ADD KEY `login` (`login`);

--
-- Index pour la table `utilisateur_histo`
--
ALTER TABLE `utilisateur_histo`
  ADD PRIMARY KEY (`Datehisto`),
  ADD KEY `login` (`login`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `forum`
--
ALTER TABLE `forum`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `num_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
