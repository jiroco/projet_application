-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 27 Juin 2017 à 08:18
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetappli`
--

-- --------------------------------------------------------

--
-- Structure de la table `defaillance`
--

CREATE TABLE `defaillance` (
  `IDDEFAI` int(255) NOT NULL,
  `PERTEFONCT` varchar(256) NOT NULL,
  `INTEMP` varchar(256) NOT NULL,
  `RETARDFONCT` varchar(256) NOT NULL,
  `DEMIMPOSSIBLE` varchar(256) NOT NULL,
  `ARRETIMPOSSIBLE` varchar(256) NOT NULL,
  `INTERMITANTE` varchar(256) NOT NULL,
  `DEGRADE` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `doc_d`
--

CREATE TABLE `doc_d` (
  `IDDOCD` int(255) NOT NULL,
  `URLDOCD` varchar(256) NOT NULL,
  `NAMEDOCD` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `doc_d`
--

INSERT INTO `doc_d` (`IDDOCD`, `URLDOCD`, `NAMEDOCD`) VALUES
(1, 'test', 'aefnazekjfnazefkjnzefj');

-- --------------------------------------------------------

--
-- Structure de la table `doc_u`
--

CREATE TABLE `doc_u` (
  `IDDOCU` int(255) NOT NULL,
  `URLDOCU` varchar(256) NOT NULL,
  `NAMEDOCU` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `doc_u`
--

INSERT INTO `doc_u` (`IDDOCU`, `URLDOCU`, `NAMEDOCU`) VALUES
(8, './data/jiroco/upload/ded5f4a771b7d9e84fdfcb2df3752a70.xml', 'ded5f4a771b7d9e84fdfcb2df3752a70.xml'),
(9, './data/jiroco/upload/b32507d7007407b864ad586505c9b0e0.xml', 'b32507d7007407b864ad586505c9b0e0.xml'),
(10, './data/chamonet/upload/51a97713314ff02c59e2b340d7de607c.xml', '51a97713314ff02c59e2b340d7de607c.xml'),
(11, './data/chamonet/upload/8f60c8cfdf05020796f8417412fc12f2.xml', '8f60c8cfdf05020796f8417412fc12f2.xml'),
(12, './data/chamonet/upload/6f79ea08404c7e6d7ef03a491c21d59d.xml', '6f79ea08404c7e6d7ef03a491c21d59d.xml'),
(13, './data/chamonet/upload/d3746a6ff28b4c92dd44cabe2b5f9a0e.xml', 'd3746a6ff28b4c92dd44cabe2b5f9a0e.xml');

-- --------------------------------------------------------

--
-- Structure de la table `dtos`
--

CREATE TABLE `dtos` (
  `INDEXKEY` int(255) NOT NULL,
  `IDDOCU` int(255) NOT NULL,
  `IDDEFAI` int(255) NOT NULL,
  `IDSETUP` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `setup`
--

CREATE TABLE `setup` (
  `IDSETUP` int(255) NOT NULL,
  `TYPE` varchar(256) NOT NULL,
  `1` varchar(256) NOT NULL DEFAULT '0',
  `2` varchar(256) NOT NULL DEFAULT '0',
  `3` varchar(256) DEFAULT '0',
  `4` varchar(256) DEFAULT '0',
  `5` varchar(256) NOT NULL DEFAULT '0',
  `6` varchar(256) NOT NULL DEFAULT '0',
  `7` varchar(256) NOT NULL DEFAULT '0',
  `8` varchar(256) DEFAULT '0',
  `9` varchar(256) DEFAULT '0',
  `10` varchar(256) NOT NULL DEFAULT '0',
  `11` varchar(256) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `setup`
--

INSERT INTO `setup` (`IDSETUP`, `TYPE`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`) VALUES
(1, 'Numero', 'x', '', '', '', '', '', '', '', '', '', ''),
(2, 'Fonction', '', 'x', '', '', '', '', '', '', '', '', ''),
(3, 'Exigence fonctionnelle', '', '', 'x', '', '', '', '', '', '', '', ''),
(4, 'Organe', '', '', '', 'x', '', '', '', '', '', '', ''),
(5, 'Mode de defaillance', '', '', '', '', 'x', '', '', '', '', '', ''),
(6, 'Cause locale', '', '', '', 'x', '', '', '', '', '', '', ''),
(7, 'Effet locale', '', '', 'x', '', '', '', '', '', '', '', ''),
(8, 'Besoin', '', 'x', '', '', '', '', '', '', '', '', ''),
(9, 'Exigence besoin', 'x', '', '', '', '', '', '', '', '', '', ''),
(10, 'Nouvelle ligne', '', 'x', '', '', '', '', '', '', '', '', ''),
(11, 'A garder ?', '', '', 'x', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `setup2`
--

CREATE TABLE `setup2` (
  `IDSETUP2` int(4) DEFAULT NULL,
  `TYPE2` varchar(256) NOT NULL,
  `1` varchar(256) DEFAULT NULL,
  `2` varchar(256) DEFAULT NULL,
  `3` varchar(256) DEFAULT NULL,
  `4` varchar(256) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `setup2`
--

INSERT INTO `setup2` (`IDSETUP2`, `TYPE2`, `1`, `2`, `3`, `4`) VALUES
(NULL, 'Texte de la premiere ligne fusionnee', 'x', '', '', ''),
(NULL, 'Concatenation', '', 'x', '', ''),
(NULL, 'Fusion avec cardinalite', 'x', '', '', ''),
(NULL, 'Fusion sans cardinalite', '', '', '', ''),
(NULL, 'Intersection', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `setup3`
--

CREATE TABLE `setup3` (
  `IDSETUP3` int(4) NOT NULL,
  `1` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `setup3`
--

INSERT INTO `setup3` (`IDSETUP3`, `1`) VALUES
(1, '=>');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `IDUSER` int(255) NOT NULL,
  `PERMISSION` tinyint(1) NOT NULL DEFAULT '0',
  `URLUSER` varchar(254) DEFAULT NULL,
  `USERNAME` varchar(254) DEFAULT 'no_username',
  `EMAIL` varchar(254) DEFAULT NULL,
  `PASSWORD` varchar(254) DEFAULT NULL,
  `SOCIETE` varchar(254) DEFAULT NULL,
  `NOM` varchar(254) DEFAULT NULL,
  `PRENOM` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`IDUSER`, `PERMISSION`, `URLUSER`, `USERNAME`, `EMAIL`, `PASSWORD`, `SOCIETE`, `NOM`, `PRENOM`) VALUES
(1, 1, '', 'adepelley', 'aloise.depelley@insa-cvl.fr', 'c5992ae9801d756f8cba5a61589771bfd06046f6', 'INSA', 'Depelley', 'Aloïse'),
(3, 0, '', 'dneyron', 'david.neyron@insa-cvl.fr', 'aa743a0aaec8f7d7a1f01442503957f4d7a2d634', 'INSA', 'Neyron', 'David'),
(6, 1, NULL, 'admin', NULL, '2261cf51c9172d668297bd6524239b9e23591611', 'INSA', 'admin', 'admin'),
(26, 1, './../data/jiroco', 'jiroco', 'jeansavol@gmail.com', 'd4e457004f39e01ec1c25fdc0cfb20d5a9ebb792', 'jemo services', 'savoldelli', 'jean'),
(27, 1, './../data/chamonet', 'chamonet', 'hamonet.claire@insa-cvl.fr', '042e22d11fc660923f91f241d15834b3919b92c9', 'poiuytr', 'hamonet', 'claire');

-- --------------------------------------------------------

--
-- Structure de la table `utod`
--

CREATE TABLE `utod` (
  `INDEXKEY` int(255) NOT NULL,
  `IDUSER` int(255) NOT NULL,
  `IDDOCU` int(255) NOT NULL,
  `IDDOCD` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utod`
--

INSERT INTO `utod` (`INDEXKEY`, `IDUSER`, `IDDOCU`, `IDDOCD`) VALUES
(5, 26, 8, 1),
(6, 26, 9, 1),
(7, 27, 10, 1),
(8, 27, 11, 1),
(9, 27, 12, 1),
(10, 27, 13, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `defaillance`
--
ALTER TABLE `defaillance`
  ADD PRIMARY KEY (`IDDEFAI`);

--
-- Index pour la table `doc_d`
--
ALTER TABLE `doc_d`
  ADD PRIMARY KEY (`IDDOCD`);

--
-- Index pour la table `doc_u`
--
ALTER TABLE `doc_u`
  ADD PRIMARY KEY (`IDDOCU`);

--
-- Index pour la table `dtos`
--
ALTER TABLE `dtos`
  ADD PRIMARY KEY (`INDEXKEY`);

--
-- Index pour la table `setup`
--
ALTER TABLE `setup`
  ADD PRIMARY KEY (`IDSETUP`);

--
-- Index pour la table `setup3`
--
ALTER TABLE `setup3`
  ADD PRIMARY KEY (`IDSETUP3`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDUSER`);

--
-- Index pour la table `utod`
--
ALTER TABLE `utod`
  ADD PRIMARY KEY (`INDEXKEY`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `defaillance`
--
ALTER TABLE `defaillance`
  MODIFY `IDDEFAI` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `doc_d`
--
ALTER TABLE `doc_d`
  MODIFY `IDDOCD` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `doc_u`
--
ALTER TABLE `doc_u`
  MODIFY `IDDOCU` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `dtos`
--
ALTER TABLE `dtos`
  MODIFY `INDEXKEY` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `setup`
--
ALTER TABLE `setup`
  MODIFY `IDSETUP` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `setup3`
--
ALTER TABLE `setup3`
  MODIFY `IDSETUP3` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `IDUSER` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT pour la table `utod`
--
ALTER TABLE `utod`
  MODIFY `INDEXKEY` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
