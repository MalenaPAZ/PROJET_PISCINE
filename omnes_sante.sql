-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 27 mai 2022 à 14:16
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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`ID`, `Mdp`, `Login`) VALUES
(1, 'Victoria', 'Victoria2222'),
(2, 'Amine', 'Amine'),
(3, 'www', 'MMM'),
(5, 'ddddd', 'ssss'),
(6, '2001', 'rr'),
(7, 'qqqqq', 'qqqqq'),
(8, 'wwww2001', 'wwww');

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
  `Photo` varchar(200) NOT NULL,
  `Salle` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`ID`, `Nom`, `Prenom`, `Login`, `Mdp`, `Specialiste`, `Email`, `Tel`, `Specialite`, `Photo`, `Salle`) VALUES
(6, 'PAZ', 'Malena', 'MAMAMA2001', 'MAMAMA', 1, 'pazmalena2001@yahoo.fr', '0789099297', 'Generaliste', 'medecin.png', '101'),
(1, 'VU-HUY-DAT', 'Matthieu', 'matmat', 'matmat2001', 1, 'mat.vhd@gmail.fr', '0987654321', 'Addictologie', 'medecin.png', '200'),
(2, 'SHABOU', 'Amine', 'Amine22', 'Amine20', 0, 'amine.shabou@gmail.fr', '97321644432', 'Gynecologue', 'medecin.png', '301');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `IDpatient` int(20) NOT NULL AUTO_INCREMENT,
  `NomPatient` varchar(30) NOT NULL,
  `PrenomPatient` varchar(30) NOT NULL,
  `Mdp` varchar(30) NOT NULL,
  `Login` varchar(30) NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`IDpatient`, `NomPatient`, `PrenomPatient`, `Mdp`, `Login`, `AdressePatient`, `EmailPatient`, `NumPatient`, `NumCarteVitale`, `SpecialitePref`, `Ville`, `CodePostal`, `Pays`, `Photo`) VALUES
(1, 'PAZ', 'Malena', 'Malena2', 'Malena1', '30 rue Faidherbe', 'pazmalena2001@yahoo.fr', '07890999297', 8876643, 'generaliste', 'Paris', 75011, 'FRANCE', ''),
(2, 'PAZ', 'Malena', 'sedrftyu', 'werf', '30 rue Faidherbe 75011', 'pazmalena2001@yahoo.fr', '0789099297', 123467890, 'rien', 'PARIS', 75011, 'wert', 0x7369676e2e706e67);

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
  `prix` int(5) NOT NULL,
  PRIMARY KEY (`NumRDV`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `Servicelabo` varchar(30) NOT NULL,
  `Infos` varchar(5000) NOT NULL,
  `Salle` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`Servicelabo`, `Infos`, `Salle`) VALUES
('Depistage covid-19', 'info info info ', '100'),
('Biologie preventive', 'info info info ', '101'),
('Biologie de la femme enceinte', 'info info info ', '102'),
('Biologie de routine', 'infos infos infos', '103'),
('Cancerologie', 'infos infos infos', '104'),
('Gynecologie', 'infos infos infos ', '105');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
