-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 23 Juin 2017 à 15:11
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
  `IDDEFAI` int(11) NOT NULL,
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
  `IDDOCD` int(11) NOT NULL,
  `URLDOCD` int(11) NOT NULL,
  `NAMEDOCD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `doc_u`
--

CREATE TABLE `doc_u` (
  `IDDOCU` int(11) NOT NULL,
  `URLDOCU` int(11) NOT NULL,
  `NAMEDOCU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `dtos`
--

CREATE TABLE `dtos` (
  `IDSETUP` int(11) NOT NULL,
  `IDDEFAI` int(11) NOT NULL,
  `IDDOCU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `setup`
--

CREATE TABLE `setup` (
  `IDSETUP` int(11) NOT NULL,
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
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `IDUSER` int(11) NOT NULL,
  `PERMISSION` tinyint(1) NOT NULL DEFAULT '0',
  `URLUSER` varchar(254) DEFAULT NULL,
  `USERNAME` varchar(254) DEFAULT NULL,
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
(2, 1, '', 'jiroco', 'jean.savoldeli@insa-cvl.fr', '51f8b1fa9b424745378826727452997ee2a7c3d7', 'INSA', 'Savoldeli', 'Jean'),
(3, 0, '', 'dneyron', 'david.neyron@insa-cvl.fr', 'aa743a0aaec8f7d7a1f01442503957f4d7a2d634', 'INSA', 'Neyron', 'David'),
(6, 1, NULL, 'admin', 'admin@admin.fr', 'COCATargus182019!', 'INSA', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `utod`
--

CREATE TABLE `utod` (
  `IDUSER` int(11) NOT NULL,
  `IDDOCU` int(11) NOT NULL,
  `IDDOCD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  ADD PRIMARY KEY (`IDSETUP`);

--
-- Index pour la table `setup`
--
ALTER TABLE `setup`
  ADD PRIMARY KEY (`IDSETUP`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDUSER`);

--
-- Index pour la table `utod`
--
ALTER TABLE `utod`
  ADD PRIMARY KEY (`IDUSER`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `defaillance`
--
ALTER TABLE `defaillance`
  MODIFY `IDDEFAI` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `doc_d`
--
ALTER TABLE `doc_d`
  MODIFY `IDDOCD` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `doc_u`
--
ALTER TABLE `doc_u`
  MODIFY `IDDOCU` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `setup`
--
ALTER TABLE `setup`
  MODIFY `IDSETUP` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `IDUSER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
