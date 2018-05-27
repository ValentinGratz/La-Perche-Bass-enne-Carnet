-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  Dim 27 mai 2018 à 13:04
-- Version du serveur :  10.1.33-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `valentin_la_perche_basseenne`
--

-- --------------------------------------------------------

--
-- Structure de la table `Composition de l'amorce`
--

CREATE TABLE `Composition de l'amorce` (
  `Composition` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Jour`
--

CREATE TABLE `Jour` (
  `Date` date NOT NULL,
  `Lieu` text NOT NULL,
  `Durée` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `l'eau`
--

CREATE TABLE `l'eau` (
  `Type` int(11) NOT NULL,
  `Couleur de l'eau` text NOT NULL,
  `Force du vent` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `le fond`
--

CREATE TABLE `le fond` (
  `Type de fond` int(11) NOT NULL,
  `végétation` text NOT NULL,
  `profondeur` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Matériel et lignes`
--

CREATE TABLE `Matériel et lignes` (
  `Matériel et lignes` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Météo`
--

CREATE TABLE `Météo` (
  `Temps` int(11) NOT NULL,
  `Direction` int(11) NOT NULL,
  `Force du vent` int(11) NOT NULL,
  `phase lunaire` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Prises`
--

CREATE TABLE `Prises` (
  `Nombre` int(11) NOT NULL,
  `Espece` int(11) NOT NULL,
  `Taille` decimal(10,0) NOT NULL,
  `poids` decimal(10,0) NOT NULL,
  `Appât` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Remarques, anecdotes...`
--

CREATE TABLE `Remarques, anecdotes...` (
  `Remarques, anecdotes...` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
