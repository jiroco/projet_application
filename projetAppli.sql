-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 24 Juin 2017 à 13:03
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
-- Structure de la table `DEFAILLANCE`
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
-- Structure de la table `DOC_D`
--

CREATE TABLE `DOC_D` (
  `IDDOCD` int(255) NOT NULL,
  `URLDOCD` varchar(256) NOT NULL,
  `NAMEDOCD` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `DOC_D`
--

INSERT INTO `DOC_D` (`IDDOCD`, `URLDOCD`, `NAMEDOCD`) VALUES
(1, '', 'DOC_Downloader_1'),
(2, '', 'DOC_Downloader_2'),
(3, '', 'DOC_Downloader_3'),
(4, '', 'DOC_Downloader_4');

-- --------------------------------------------------------

--
-- Structure de la table `DOC_U`
--

CREATE TABLE `DOC_U` (
  `IDDOCU` int(255) NOT NULL,
  `URLDOCU` varchar(256) NOT NULL,
  `NAMEDOCU` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `DOC_U`
--

INSERT INTO `DOC_U` (`IDDOCU`, `URLDOCU`, `NAMEDOCU`) VALUES
(1, '', 'DOC_Uploader_1'),
(2, '', 'DOC_Uploader_2'),
(3, '', 'DOC_Uploader_3'),
(4, '', 'DOC_Uploader_4');

-- --------------------------------------------------------

--
-- Structure de la table `DTOS`
--

CREATE TABLE `DTOS` (
  `INDEXKEY` int(255) NOT NULL,
  `IDDOCU` int(255) NOT NULL,
  `IDDEFAI` int(255) NOT NULL,
  `IDSETUP` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `SETUP`
--

CREATE TABLE `SETUP` (
  `IDSETUP` int(255) NOT NULL,
  `NUMERO` tinyint(1) NOT NULL DEFAULT '0',
  `FONCTION` tinyint(1) NOT NULL DEFAULT '0',
  `EXIFONCTIONNEL` tinyint(1) DEFAULT '0',
  `ORGANE` tinyint(1) DEFAULT '0',
  `MODEDEFAI` tinyint(1) NOT NULL DEFAULT '0',
  `CAUSELOCAL` tinyint(1) NOT NULL DEFAULT '0',
  `EFFETLOCAL` tinyint(1) NOT NULL DEFAULT '0',
  `BESOIN` tinyint(1) DEFAULT '0',
  `EXIBESOIN` tinyint(1) DEFAULT '0',
  `NVLLIGNE` tinyint(1) NOT NULL DEFAULT '0',
  `AGARDER` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `USER`
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
-- Contenu de la table `USER`
--

INSERT INTO `USER` (`IDUSER`, `PERMISSION`, `URLUSER`, `USERNAME`, `EMAIL`, `PASSWORD`, `SOCIETE`, `NOM`, `PRENOM`) VALUES
(1, 1, '', 'adepelley', 'aloise.depelley@insa-cvl.fr', 'c5992ae9801d756f8cba5a61589771bfd06046f6', 'INSA', 'Depelley', 'Aloïse'),
(2, 1, '', 'jiroco', 'jean.savoldeli@insa-cvl.fr', '51f8b1fa9b424745378826727452997ee2a7c3d7', 'INSA', 'Savoldeli', 'Jean'),
(3, 0, '', 'dneyron', 'david.neyron@insa-cvl.fr', 'aa743a0aaec8f7d7a1f01442503957f4d7a2d634', 'INSA', 'Neyron', 'David'),
(6, 1, NULL, 'admin', NULL, '2261cf51c9172d668297bd6524239b9e23591611', 'INSA', 'admin', 'admin'),
(7, 0, NULL, 'no_username', 'test@mail.fr', NULL, 'Gaumont', 'Galabru', 'Michel'),
(8, 0, NULL, 'no_username', 'test@mail.com', NULL, 'J&M', 'Schieffer', 'Claudia');

-- --------------------------------------------------------

--
-- Structure de la table `UTOD`
--

CREATE TABLE `UTOD` (
  `INDEXKEY` int(255) NOT NULL,
  `IDUSER` int(255) NOT NULL,
  `IDDOCU` int(255) NOT NULL,
  `IDDOCD` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `UTOD`
--

INSERT INTO `UTOD` (`INDEXKEY`, `IDUSER`, `IDDOCU`, `IDDOCD`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 2),
(3, 1, 3, 3),
(4, 2, 4, 4);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `DEFAILLANCE`
--
ALTER TABLE `DEFAILLANCE`
  ADD PRIMARY KEY (`IDDEFAI`);

--
-- Index pour la table `DOC_D`
--
ALTER TABLE `DOC_D`
  ADD PRIMARY KEY (`IDDOCD`);

--
-- Index pour la table `DOC_U`
--
ALTER TABLE `DOC_U`
  ADD PRIMARY KEY (`IDDOCU`);

--
-- Index pour la table `DTOS`
--
ALTER TABLE `DTOS`
  ADD PRIMARY KEY (`INDEXKEY`);

--
-- Index pour la table `SETUP`
--
ALTER TABLE `SETUP`
  ADD PRIMARY KEY (`IDSETUP`);

--
-- Index pour la table `USER`
--
ALTER TABLE `USER`
  ADD PRIMARY KEY (`IDUSER`);

--
-- Index pour la table `UTOD`
--
ALTER TABLE `UTOD`
  ADD PRIMARY KEY (`INDEXKEY`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `DEFAILLANCE`
--
ALTER TABLE `DEFAILLANCE`
  MODIFY `IDDEFAI` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `DOC_D`
--
ALTER TABLE `DOC_D`
  MODIFY `IDDOCD` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `DOC_U`
--
ALTER TABLE `DOC_U`
  MODIFY `IDDOCU` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `DTOS`
--
ALTER TABLE `DTOS`
  MODIFY `INDEXKEY` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `SETUP`
--
ALTER TABLE `SETUP`
  MODIFY `IDSETUP` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `USER`
--
ALTER TABLE `USER`
  MODIFY `IDUSER` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `UTOD`
--
ALTER TABLE `UTOD`
  MODIFY `INDEXKEY` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
