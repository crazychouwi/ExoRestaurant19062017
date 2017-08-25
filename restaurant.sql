-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Ven 25 Août 2017 à 10:10
-- Version du serveur :  5.5.57-0+deb8u1
-- Version de PHP :  5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `restaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`idMenu` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` decimal(10,0) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`idMenu`, `nom`, `prix`) VALUES
(48, 'leger', 16),
(50, 'midi', 22);

-- --------------------------------------------------------

--
-- Structure de la table `plat`
--

CREATE TABLE IF NOT EXISTS `plat` (
`idPlat` int(2) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `plat`
--

INSERT INTO `plat` (`idPlat`, `nom`, `prix`, `image`) VALUES
(12, 'choucroute', 22.00, 'choucroute'),
(13, 'choucroute', 22.00, 'caramba'),
(14, 'bolognaise', 28.00, 'LICORNE-04.jpg'),
(15, 'cacahuete', 22.00, 'assets/img/cacahuete'),
(16, 'salade', 8.00, 'assets/img/salade'),
(17, 'croc monsieur', 12.00, 'assets/img/croc monsieur');

-- --------------------------------------------------------

--
-- Structure de la table `plats_menu`
--

CREATE TABLE IF NOT EXISTS `plats_menu` (
`id` int(11) NOT NULL,
  `id_plat` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `plats_menu`
--

INSERT INTO `plats_menu` (`id`, `id_plat`, `id_menu`) VALUES
(21, 16, 48),
(22, 17, 48),
(25, 14, 50),
(26, 16, 50);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`idMenu`), ADD KEY `idMenu` (`idMenu`), ADD KEY `idMenu_2` (`idMenu`), ADD KEY `idMenu_3` (`idMenu`);

--
-- Index pour la table `plat`
--
ALTER TABLE `plat`
 ADD PRIMARY KEY (`idPlat`), ADD KEY `idPlat` (`idPlat`), ADD KEY `idPlat_2` (`idPlat`), ADD KEY `idPlat_3` (`idPlat`);

--
-- Index pour la table `plats_menu`
--
ALTER TABLE `plats_menu`
 ADD PRIMARY KEY (`id`), ADD KEY `id_plat` (`id_plat`), ADD KEY `id_menu` (`id_menu`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
MODIFY `idMenu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT pour la table `plat`
--
ALTER TABLE `plat`
MODIFY `idPlat` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `plats_menu`
--
ALTER TABLE `plats_menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `plats_menu`
--
ALTER TABLE `plats_menu`
ADD CONSTRAINT `menu_menu` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`idMenu`),
ADD CONSTRAINT `menu_plat` FOREIGN KEY (`id_plat`) REFERENCES `plat` (`idPlat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
