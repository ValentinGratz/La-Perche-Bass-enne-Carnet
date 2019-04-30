-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mar. 30 avr. 2019 à 14:47
-- Version du serveur :  10.3.14-MariaDB
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `valenti1_carnetperche`
--

-- --------------------------------------------------------

--
-- Structure de la table `Composition de l'amorce`
--

CREATE TABLE `Composition de l'amorce` (
  `Composition de l'amorce` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Jour`
--

CREATE TABLE `Jour` (
  `Date` date NOT NULL,
  `Lieu` int(11) NOT NULL,
  `Durée` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `l'eau`
--

CREATE TABLE `l'eau` (
  `Type` int(11) NOT NULL,
  `couleur de l'eau` int(11) NOT NULL,
  `Force du courant` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `le fond`
--

CREATE TABLE `le fond` (
  `type de fond` int(11) NOT NULL,
  `végétation` int(11) NOT NULL,
  `profondeur` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Materiel et lignes`
--

CREATE TABLE `Materiel et lignes` (
  `Materiel et lignes` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Meteo`
--

CREATE TABLE `Meteo` (
  `Temps` int(11) NOT NULL,
  `Direction du vent` int(11) NOT NULL,
  `Force du vent` int(11) NOT NULL,
  `phase lunaire` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Prises`
--

CREATE TABLE `Prises` (
  `Nombre` int(11) NOT NULL,
  `Espece` int(11) NOT NULL,
  `Taille` int(11) NOT NULL,
  `poids` int(11) NOT NULL,
  `Appât` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Remarques, anecdotes...`
--

CREATE TABLE `Remarques, anecdotes...` (
  `Remarques, anecdotes...` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
