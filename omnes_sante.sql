-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 29 mai 2022 à 13:39
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
  `NomAdmin` varchar(20) NOT NULL,
  `PrenomAdmin` varchar(30) NOT NULL,
  `EmailAdmin` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`ID`, `Mdp`, `Login`, `NomAdmin`, `PrenomAdmin`, `EmailAdmin`) VALUES
(1, 'Victoria', 'Victoria2222', 'PAZ', 'Victoria', 'pazvictoria@gmail.fr'),
(2, 'Amine', 'Amine', 'SHABOU', 'Amine', 'Amine.Shabou@gmail.fr');

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`ID`, `Nom`, `Prenom`, `Login`, `Mdp`, `Specialiste`, `Email`, `Tel`, `Specialite`, `Photo`, `Salle`) VALUES
(6, 'PAZ', 'Malena', 'MAMAMA2001', 'MAMAMA', 1, 'pazmalena2001@yahoo.fr', '0789099297', 'Generaliste', 'medecin.png', '101'),
(1, 'VU-HUY-DAT', 'Matthieu', 'matmat', 'matmat2001', 1, 'mat.vhd@gmail.fr', '0987654321', 'Addictologie', 'medecin.png', '200'),
(8, 'Guillaume', 'Cornut', 'Guillaume', 'Guillaume200', 1, 'pazmalena2001@yahoo.fr', '0789099297', 'Andrologie', 'medecin.png', '123'),
(9, 'Chloe', 'Huang', 'Cloclo', 'cloclo2011', 1, 'pazmalena2001@yahoo.fr', '0789099297', 'Gynecologie', 'medecin.png', '122'),
(10, 'Faivre', 'Samuel', 'Samsam', 'samsam2001', 1, 'paz@gmail.fr', '1234567', 'Gynecologie', 'medecin.png', '234'),
(11, 'Cicile', 'Raphael', 'Raph', 'Raph2001', 0, '@', '123456', 'Generaliste', 'medecin.png', '1'),
(12, 'PAZ', 'Victoria', 'victo', 'victo1234', 1, 'malena.paz@edu.ece.fr', '0789099297', 'Gynecologie', 'medecin.png', '23');

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
  `Photo` varchar(200) NOT NULL DEFAULT 'Patient.png',
  `TypeCarte` varchar(200) NOT NULL,
  `NumCarteB` int(25) NOT NULL,
  `NomCarte` varchar(200) NOT NULL,
  `DateExp` varchar(9) NOT NULL,
  `CodeSecu` int(10) NOT NULL,
  PRIMARY KEY (`IDpatient`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`IDpatient`, `NomPatient`, `PrenomPatient`, `Mdp`, `Login`, `AdressePatient`, `EmailPatient`, `NumPatient`, `NumCarteVitale`, `SpecialitePref`, `Ville`, `CodePostal`, `Pays`, `Photo`, `TypeCarte`, `NumCarteB`, `NomCarte`, `DateExp`, `CodeSecu`) VALUES
(1, 'PAZ', 'Malena', 'Malena2', 'Malena1', '30 rue Faidherbe', 'pazmalena2001@yahoo.fr', '07890999297', 8876643, 'generaliste', 'Paris', 75011, 'FRANCE', 'Patient.png', 'Master Card', 123456789, 'PAZ Malena', '05/22', 1234);

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

DROP TABLE IF EXISTS `rdv`;
CREATE TABLE IF NOT EXISTS `rdv` (
  `NumRDV` int(11) NOT NULL AUTO_INCREMENT,
  `IDPatient` int(11) NOT NULL,
  `IDMedecin` int(11) NOT NULL,
  `Motif_RDV` varchar(100) NOT NULL,
  `Salle_RDV` varchar(20) NOT NULL,
  `Etat_RDV` tinyint(1) NOT NULL,
  `Type_RDV` varchar(50) NOT NULL,
  `prix` int(5) NOT NULL,
  `Date` datetime DEFAULT NULL,
  PRIMARY KEY (`NumRDV`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `rdv`
--

INSERT INTO `rdv` (`NumRDV`, `IDPatient`, `IDMedecin`, `Motif_RDV`, `Salle_RDV`, `Etat_RDV`, `Type_RDV`, `prix`, `Date`) VALUES
(16, 1, 11, 'coucou', '1', 0, 'Generaliste', 0, '2022-05-31 10:00:00'),
(15, 1, 1, 'coucou', '200', 0, 'Addictologie', 30, '2022-05-31 10:00:00'),
(14, 1, 11, 'coucou', '1', 0, 'Generaliste', 0, '2022-05-31 12:00:00'),
(10, 1, 11, 'motif', '2', 0, 'gene', 0, '2022-05-30 08:00:00'),
(11, 1, 11, 'Motif', '4', 0, 'gene', 0, '2022-05-31 17:00:00'),
(12, 1, 1, 'coucou', '200', 0, 'Addictologie', 30, '2022-05-31 09:00:00'),
(20, 1, 11, 'coucou', '1', 0, 'Generaliste', 0, '2022-05-30 15:00:00'),
(17, 1, 11, 'coucou', '1', 0, 'Generaliste', 0, '2022-06-02 13:00:00'),
(18, 1, 1, 'coucou', '200', 0, 'Addictologie', 30, '2022-06-01 13:00:00'),
(19, 1, 1, 'coucou', '200', 0, 'Addictologie', 30, '2022-05-31 17:00:00'),
(21, 1, 11, 'coucou', '1', 0, 'Generaliste', 0, '2022-06-01 15:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `Servicelab` varchar(30) NOT NULL,
  `Salle` varchar(10) NOT NULL,
  `Infos` varchar(5000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`ID`, `Servicelab`, `Salle`, `Infos`) VALUES
(1, 'Depistage covid-19', '100', 'info Depistage covid-19'),
(2, 'Biologie preventive', '101', 'infos Bilogie preventive'),
(3, 'Biologie de la femme enceinte', '102', 'infos '),
(4, 'Biologie de routine', '103', 'infos4'),
(5, 'Cancerologie', '104', 'info cancerologie'),
(6, 'Gynecologie', '105', 'infos gynecologie');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
