-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 23 mai 2022 à 15:46
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `omnes sante`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(200) NOT NULL AUTO_INCREMENT,
  `Mdp` varchar(200) NOT NULL,
  `Login` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

DROP TABLE IF EXISTS `medecin`;
CREATE TABLE IF NOT EXISTS `medecin` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Login` varchar(30) NOT NULL,
  `Mdp` varchar(30) NOT NULL,
  `Specialiste` tinyint(1) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Tel` varchar(30) NOT NULL,
  `Specialite` varchar(50) NOT NULL,
  `Photo` longblob NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `IDpatient` int(20) NOT NULL AUTO_INCREMENT,
  `NomPatient` varchar(30) NOT NULL,
  `PrenomPatient` varchar(30) NOT NULL,
  `MdpPatient` varchar(30) NOT NULL,
  `LoginPatient` varchar(30) NOT NULL,
  `AdressePatient` varchar(100) NOT NULL,
  `EmailPatient` varchar(50) NOT NULL,
  `NumPatient` varchar(20) NOT NULL,
  `NumCarteVitale` int(50) NOT NULL,
  `SpecialitePref` varchar(50) NOT NULL,
  `Ville` varchar(20) NOT NULL,
  `CodePostal` int(10) NOT NULL,
  `Pays` varchar(20) NOT NULL,
  `Photo` longblob NOT NULL,
  PRIMARY KEY (`IDpatient`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

DROP TABLE IF EXISTS `rdv`;
CREATE TABLE IF NOT EXISTS `rdv` (
  `NumRDV` int(11) NOT NULL AUTO_INCREMENT,
  `IDPatient` int(11) NOT NULL,
  `IDMedecin` int(11) NOT NULL,
  `Date_RDV` date NOT NULL,
  `Heure_RDV` int(11) NOT NULL,
  `Motif_RDV` varchar(100) NOT NULL,
  `Durée_RDV` int(11) NOT NULL,
  `Salle_RDV` varchar(20) NOT NULL,
  `Etat_RDV` tinyint(1) NOT NULL,
  `Type_RDV` varchar(50) NOT NULL,
  PRIMARY KEY (`NumRDV`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
