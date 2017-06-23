-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Ven 23 Juin 2017 à 15:26
-- Version du serveur :  5.6.35
-- Version de PHP :  7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `projetAppli`
--

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

--
-- Contenu de la table `USER`
--

INSERT INTO `USER` (`IDUSER`, `PERMISSION`, `URLUSER`, `USERNAME`, `EMAIL`, `PASSWORD`, `SOCIETE`, `NOM`, `PRENOM`) VALUES
(1, 1, '', 'adepelley', 'aloise.depelley@insa-cvl.fr', 'c5992ae9801d756f8cba5a61589771bfd06046f6', 'INSA', 'Depelley', 'Aloïse'),
(2, 1, '', 'jiroco', 'jean.savoldeli@insa-cvl.fr', '51f8b1fa9b424745378826727452997ee2a7c3d7', 'INSA', 'Savoldeli', 'Jean'),
(3, 0, '', 'dneyron', 'david.neyron@insa-cvl.fr', 'aa743a0aaec8f7d7a1f01442503957f4d7a2d634', 'INSA', 'Neyron', 'David');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `USER`
--
ALTER TABLE `USER`
  ADD PRIMARY KEY (`IDUSER`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `USER`
--
ALTER TABLE `USER`
  MODIFY `IDUSER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;