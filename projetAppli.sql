-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 26 Juin 2017 à 12:21
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

CREATE TABLE `DEFAILLANCE` (
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

CREATE TABLE `DOC_D` (
  `IDDOCD` int(255) NOT NULL,
  `URLDOCD` varchar(256) NOT NULL,
  `NAMEDOCD` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `doc_d`
--

INSERT INTO `DOC_D` (`IDDOCD`, `URLDOCD`, `NAMEDOCD`) VALUES
(1, 'test', 'aefnazekjfnazefkjnzefj');

-- --------------------------------------------------------

--
-- Structure de la table `doc_u`
--

CREATE TABLE `DOC_U` (
  `IDDOCU` int(255) NOT NULL,
  `URLDOCU` varchar(256) NOT NULL,
  `NAMEDOCU` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `doc_u`
--

INSERT INTO `DOC_U` (`IDDOCU`, `URLDOCU`, `NAMEDOCU`) VALUES
(8, './data/jiroco/upload/ded5f4a771b7d9e84fdfcb2df3752a70.xml', 'ded5f4a771b7d9e84fdfcb2df3752a70.xml'),
(9, './data/jiroco/upload/b32507d7007407b864ad586505c9b0e0.xml', 'b32507d7007407b864ad586505c9b0e0.xml');

-- --------------------------------------------------------

--
-- Structure de la table `dtos`
--

CREATE TABLE `DTOS` (
  `INDEXKEY` int(255) NOT NULL,
  `IDDOCU` int(255) NOT NULL,
  `IDDEFAI` int(255) NOT NULL,
  `IDSETUP` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `setup`
--

CREATE TABLE `SETUP` (
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

INSERT INTO `SETUP` (`IDSETUP`, `TYPE`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`) VALUES
(1, 'Numero', 'x', '', '', '', '', '', '', '', '', '', ''),
(2, 'Fonction', '', 'x', '', '', '', '', '', '', '', '', ''),
(3, 'Exigence fonctionnelle', '', '', 'x', '', '', '', '', '', '', '', ''),
(4, 'Organe', '', '', '', 'x', '', '', '', '', '', '', ''),
(5, 'Mode de defaillance', '', '', '', '', 'x', '', '', '', '', '', ''),
(6, 'Cause locale', '', '', '', '', '', 'x', '', '', '', '', ''),
(7, 'Effet locale', '', '', '', '', '', '', 'x', '', '', '', ''),
(8, 'Besoin', '', '', '', '', '', '', '', 'x', '', '', ''),
(9, 'Exigence besoin', '', '', '', '', '', '', '', '', 'x', '', ''),
(10, 'Nouvelle ligne', '', '', '', '', '', '', '', '', '', 'x', ''),
(11, 'A garder ?', '', '', '', '', '', '', '', '', '', '', 'x');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `USER` (
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

INSERT INTO `USER` (`IDUSER`, `PERMISSION`, `URLUSER`, `USERNAME`, `EMAIL`, `PASSWORD`, `SOCIETE`, `NOM`, `PRENOM`) VALUES
(1, 1, '', 'adepelley', 'aloise.depelley@insa-cvl.fr', 'c5992ae9801d756f8cba5a61589771bfd06046f6', 'INSA', 'Depelley', 'Aloïse'),
(3, 0, '', 'dneyron', 'david.neyron@insa-cvl.fr', 'aa743a0aaec8f7d7a1f01442503957f4d7a2d634', 'INSA', 'Neyron', 'David'),
(6, 1, NULL, 'admin', NULL, '2261cf51c9172d668297bd6524239b9e23591611', 'INSA', 'admin', 'admin'),
(26, 1, './../data/jiroco', 'jiroco', 'jeansavol@gmail.com', 'd4e457004f39e01ec1c25fdc0cfb20d5a9ebb792', 'jemo services', 'savoldelli', 'jean');

-- --------------------------------------------------------

--
-- Structure de la table `utod`
--

CREATE TABLE `UTOD` (
  `INDEXKEY` int(255) NOT NULL,
  `IDUSER` int(255) NOT NULL,
  `IDDOCU` int(255) NOT NULL,
  `IDDOCD` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utod`
--

INSERT INTO `UTOD` (`INDEXKEY`, `IDUSER`, `IDDOCU`, `IDDOCD`) VALUES
(5, 26, 8, 1),
(6, 26, 9, 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `defaillance`
--
ALTER TABLE `DEFAILLANCE`
  ADD PRIMARY KEY (`IDDEFAI`);

--
-- Index pour la table `doc_d`
--
ALTER TABLE `DOC_D`
  ADD PRIMARY KEY (`IDDOCD`);

--
-- Index pour la table `doc_u`
--
ALTER TABLE `DOC_U`
  ADD PRIMARY KEY (`IDDOCU`);

--
-- Index pour la table `dtos`
--
ALTER TABLE `DTOS`
  ADD PRIMARY KEY (`INDEXKEY`);

--
-- Index pour la table `setup`
--
ALTER TABLE `SETUP`
  ADD PRIMARY KEY (`IDSETUP`);

--
-- Index pour la table `user`
--
ALTER TABLE `USER`
  ADD PRIMARY KEY (`IDUSER`);

--
-- Index pour la table `utod`
--
ALTER TABLE `UTOD`
  ADD PRIMARY KEY (`INDEXKEY`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `defaillance`
--
ALTER TABLE `DEFAILLANCE`
  MODIFY `IDDEFAI` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `doc_d`
--
ALTER TABLE `DOC_D`
  MODIFY `IDDOCD` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `doc_u`
--
ALTER TABLE `DOC_U`
  MODIFY `IDDOCU` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `dtos`
--
ALTER TABLE `DTOS`
  MODIFY `INDEXKEY` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `setup`
--
ALTER TABLE `SETUP`
  MODIFY `IDSETUP` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `USER`
  MODIFY `IDUSER` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `utod`
--
ALTER TABLE `UTOD`
  MODIFY `INDEXKEY` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
