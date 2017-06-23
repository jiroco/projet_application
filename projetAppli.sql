-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Ven 23 Juin 2017 à 13:16
-- Version du serveur :  5.6.35
-- Version de PHP :  7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `projetAppli`
--

-- --------------------------------------------------------

--
-- Structure de la table `DEFAILLANCE`
--

CREATE TABLE `DEFAILLANCE` (
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
-- Structure de la table `DOC_D`
--

CREATE TABLE `DOC_D` (
  `IDDOCD` int(11) NOT NULL,
  `URLDOCD` int(11) NOT NULL,
  `NAMEDOCD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `DOC_U`
--

CREATE TABLE `DOC_U` (
  `IDDOCU` int(11) NOT NULL,
  `URLDOCU` int(11) NOT NULL,
  `NAMEDOCU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `DTOS`
--

CREATE TABLE `DTOS` (
  `IDSETUP` int(11) NOT NULL,
  `IDDEFAI` int(11) NOT NULL,
  `IDDOCU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `SETUP`
--

CREATE TABLE `SETUP` (
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
-- Structure de la table `USER`
--

CREATE TABLE `USER` (
  `IDUSER` int(11) NOT NULL,
  `PERMISSION` tinyint(1) NOT NULL DEFAULT '0',
  `URLUSER` varchar(254) NOT NULL,
  `USERNAME` varchar(254) NOT NULL,
  `EMAIL` varchar(254) NOT NULL,
  `PASSWORD` varchar(254) NOT NULL,
  `SOCIETE` varchar(254) NOT NULL,
  `NOM` varchar(254) NOT NULL,
  `PRENOM` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `UTOD`
--

CREATE TABLE `UTOD` (
  `IDUSER` int(11) NOT NULL,
  `IDDOCU` int(11) NOT NULL,
  `IDDOCD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  ADD PRIMARY KEY (`IDSETUP`);

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
  ADD PRIMARY KEY (`IDUSER`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `DEFAILLANCE`
--
ALTER TABLE `DEFAILLANCE`
  MODIFY `IDDEFAI` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `DOC_D`
--
ALTER TABLE `DOC_D`
  MODIFY `IDDOCD` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `DOC_U`
--
ALTER TABLE `DOC_U`
  MODIFY `IDDOCU` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `SETUP`
--
ALTER TABLE `SETUP`
  MODIFY `IDSETUP` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `USER`
--
ALTER TABLE `USER`
  MODIFY `IDUSER` int(11) NOT NULL AUTO_INCREMENT;