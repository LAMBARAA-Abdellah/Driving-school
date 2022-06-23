-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 23 juin 2022 à 09:00
-- Version du serveur : 5.7.36
-- Version de PHP : 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `school`
--

-- --------------------------------------------------------

--
-- Structure de la table `absence`
--

DROP TABLE IF EXISTS `absence`;
CREATE TABLE IF NOT EXISTS `absence` (
  `id_absence` int(11) NOT NULL AUTO_INCREMENT,
  `id_seance` int(11) DEFAULT NULL,
  `id_student` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_absence`),
  KEY `id_seance` (`id_seance`),
  KEY `id_student` (`id_student`)
) ENGINE=MyISAM AUTO_INCREMENT=181 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `absence`
--

INSERT INTO `absence` (`id_absence`, `id_seance`, `id_student`) VALUES
(157, 54, 90),
(178, 83, 91),
(171, 72, 91),
(179, 83, 91);

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_Admin` int(11) NOT NULL AUTO_INCREMENT,
  `nom_admin` varchar(255) DEFAULT NULL,
  `prenom_admin` varchar(255) DEFAULT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`id_Admin`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_Admin`, `nom_admin`, `prenom_admin`, `login`, `email`, `pass`, `photo`) VALUES
(1, 'Lambaraa', 'Abdellah', 'abdellah17lambaraa@gmail.com', 'abdellah17lambaraa@gmail.com', '123456789', 'A1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `candidat`
--

DROP TABLE IF EXISTS `candidat`;
CREATE TABLE IF NOT EXISTS `candidat` (
  `id_Candidat` int(11) NOT NULL AUTO_INCREMENT,
  `nom_candidat` varchar(255) DEFAULT NULL,
  `prenom_candidat` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `cin` varchar(50) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `datNaissance` text,
  `sexe` varchar(255) DEFAULT NULL,
  `permis` varchar(20) DEFAULT NULL,
  `Total` varchar(50) DEFAULT NULL,
  `avance` int(11) DEFAULT '0',
  `photo` varchar(255) DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `archive` int(11) NOT NULL DEFAULT '0',
  `dateCreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(50) NOT NULL DEFAULT 'En cours ...',
  PRIMARY KEY (`id_Candidat`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `candidat`
--

INSERT INTO `candidat` (`id_Candidat`, `nom_candidat`, `prenom_candidat`, `email`, `tel`, `cin`, `adresse`, `datNaissance`, `sexe`, `permis`, `Total`, `avance`, `photo`, `id_utilisateur`, `archive`, `dateCreation`, `status`) VALUES
(72, 'Lambaraa', 'Abdellah', 'abdellah17lambaraa@gmail.com', '0652086766', 'hh27344', 'hay nahda etg1, Mohammedia', '2022-06-15', 'Homme', 'A', '3000', 1, 'A1.jpg', 1, 1, '2022-06-13 13:02:44', 'ValidÃ©'),
(91, 'Alami', 'ibrahim', 'alami12ibrahim@gmail.com', '0754337618', 'hh124398', 'hay riad 24 casablanca', '2001-02-14', 'homme', 'C', '4500', 0, 'p3.png', 1, 0, '2022-06-17 16:00:20', 'En cours ...'),
(78, 'Lambaraa', 'Abdellah', 'abdellah17lambaraa@gmail.com', '0652086766', 'hh343343', 'hay nahda etg1, Mohammedia', '2001-06-06', 'homme', 'A', '3000', 1, 'A7.jpg', 1, 1, '2022-06-13 23:26:51', 'ValidÃ©'),
(77, 'dasap', 'pace', 'matizuwely@mailinator.com', '073915239', 'hh653322', 'tokamamy@mailinator.com', '1971-11-03', 'femme', 'C', '76', 1, 'p4.png', 1, 0, '2022-06-13 22:03:59', 'ValidÃ©'),
(85, 'abdellah', 'lambarra', 'woqygimov@mailinator.com', '0662818847', 'hh434323', 'xavife@mailinator.com', '1981-12-18', 'homme', 'C', '68', 0, 'A7.jpg', 1, 0, '2022-06-16 20:02:38', 'ValidÃ©'),
(87, 'Rabhi', 'Faiza', 'rabhi17faiza@gmail.com', '0643872518', 'hh753484', 'hay raha 24 lotisement  berkane ', '1999-10-20', 'Homme', 'B', '5000', 0, 'sec.png', 1, 1, '2022-06-17 15:32:26', 'ValidÃ©'),
(88, 'Lambaraa', 'Abdellah', 'abdellah17lambaraa@gmail.com', '075342715', 'H765348', 'dr zouaher hrara safi', '2003-10-22', 'Homme', 'C', '4000', 0, 'A1.jpg', 1, 0, '2022-06-17 15:41:55', 'ValidÃ©'),
(89, 'Basidi', 'Ayoub', 'basidi1ayoub@gmail.com', '0632875411', 'hh234321', 'hay nahda etg1, Mohammedia', '1994-06-08', 'Homme', 'A', '2500', 0, 'monitor1.png', 1, 0, '2022-06-17 15:44:41', 'Non validÃ©'),
(90, 'hala', 'ziani', 'hallaziani@gmail.com', '0654237618', 'hh221765', 'adresse3 casablanca ', '2002-12-31', 'Femme', 'C', '4000', 0, 'p1.png', 1, 0, '2022-06-17 15:57:52', 'En cours ...'),
(98, 'fil', 'rouge', 'abdellah17lambaraa@gmail.com', '06543214', 'hh245434', '40406', '2000-06-09', 'Homme', 'C', '5000', 0, 'A5.jpg', 1, 1, '2022-06-20 14:29:46', 'ValidÃ©');

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `message` text,
  `dateCreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `etat` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`id`, `name`, `email`, `phone`, `message`, `dateCreation`, `etat`) VALUES
(52, 'Ulysses Reynolds', 'roxo@mailinator.com', 'Non laboris est magn', 'Vitae et laboriosam', '2022-06-15 13:50:09', 0),
(53, 'Ulysses Reynolds', 'roxo@mailinator.com', 'Non laboris est magn', 'Vitae et laboriosam', '2022-06-15 13:50:11', 0),
(54, 'Ulysses Reynolds', 'roxo@mailinator.com', 'Non laboris est magn', 'Vitae et laboriosam', '2022-06-15 13:50:13', 1),
(55, 'Ulysses Reynolds', 'roxo@mailinator.com', 'Non laboris est magn', 'Vitae et laboriosam', '2022-06-15 13:50:13', 0),
(56, 'Ulysses Reynolds', 'roxo@mailinator.com', 'Non laboris est magn', 'Vitae et laboriosam', '2022-06-15 13:50:13', 0),
(57, 'Sarah Cox', 'nihopilydu@mailinator.com', 'Ut veniam in dolore', 'Quam quo aliquid inc', '2022-06-15 13:50:26', 0),
(58, 'Sarah Cox', 'nihopilydu@mailinator.com', 'Ut veniam in dolore', 'Quam quo aliquid inc', '2022-06-15 13:50:46', 0),
(77, 'Fil rouge ', 'dulivawu@mailinator.com', '+1 (413) 277-4715', 'Minim fugit qui aut', '2022-06-20 14:25:58', 1),
(60, 'Mari Davis', 'rijyzuwy@mailinator.com', '+1 (452) 849-6295', 'Perferendis similiqu', '2022-06-15 13:52:49', 1),
(61, 'Price Lucas', 'maporoh@mailinator.com', '+1 (774) 205-2322', 'Dolores illo dolores', '2022-06-15 13:58:27', 1),
(72, 'Carlos West', 'kyril@mailinator.com', '+1 (951) 808-1009', 'Et a iste distinctio', '2022-06-19 21:26:10', 0),
(63, 'Raphael Stephens', 'Camden Schwartz', '+1 (659) 378-8064', 'In molestias fugiat', '2022-06-15 14:38:17', 0),
(75, 'Jolene Larson', 'sybejytu@mailinator.com', '+1 (915) 722-9746', 'Eum eligendi asperna', '2022-06-20 12:26:20', 1),
(68, 'Gray Mendez', 'tydubyboji@mailinator.com', '+1 (414) 291-8246', 'Necessitatibus sit c', '2022-06-16 10:13:59', 1),
(66, 'Dana Roy', 'hujyhohyg@mailinator.com', '+1 (555) 127-5739', 'Omnis laborum sunt ', '2022-06-15 14:40:06', 1),
(73, 'Amity English', 'fyhuqy@mailinator.com', '+1 (503) 139-6171', 'Inventore similique ', '2022-06-19 21:26:15', 0),
(51, 'Axel Finley', 'biranaf@mailinator.com', 'Nam velit omnis fugi', 'Ex aperiam atque inc', '2022-06-15 13:49:57', 0);

-- --------------------------------------------------------

--
-- Structure de la table `monitor`
--

DROP TABLE IF EXISTS `monitor`;
CREATE TABLE IF NOT EXISTS `monitor` (
  `id_Monitor` int(11) NOT NULL AUTO_INCREMENT,
  `nom_monitor` varchar(255) DEFAULT NULL,
  `prenom_monitor` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `cin` varchar(50) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `datNaissance` date DEFAULT NULL,
  `sexe` varchar(255) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `dateCreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_Monitor`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `monitor`
--

INSERT INTO `monitor` (`id_Monitor`, `nom_monitor`, `prenom_monitor`, `email`, `tel`, `cin`, `adresse`, `datNaissance`, `sexe`, `photo`, `id_utilisateur`, `dateCreation`) VALUES
(3, 'abdellah', 'Lambaraa', 'Lambaraa@gmail.com', '0792242572', 'HH9873533', 'hay nahda 12 Mohammedia', '2000-05-12', 'homme', 'A5.jpg', 1, '0000-00-00 00:00:00'),
(4, 'moubtahij', 'Hassan', 'jaajaa@gmail.com', '0792242572', 'H9873533', 'hay nahda 12 Mohammedia', '1992-05-12', 'homme', 'A1.jpg', 1, '0000-00-00 00:00:00'),
(6, 'Basidi', 'ayoub', 'gehitetyg@mailinator.com', '087655443', 'HH65443', 'liloj@mailinator.com', '1984-11-25', 'homme', 'A7.jpg', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id_payment` int(11) NOT NULL AUTO_INCREMENT,
  `valeur` varchar(50) DEFAULT NULL,
  `datap` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_utilisateur` int(11) DEFAULT NULL,
  `id_Candidat` int(11) DEFAULT NULL,
  `dateCreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_payment`),
  KEY `id_utilisateur` (`id_utilisateur`),
  KEY `id_Candidat` (`id_Candidat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `seance`
--

DROP TABLE IF EXISTS `seance`;
CREATE TABLE IF NOT EXISTS `seance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `debut` time NOT NULL,
  `fin` time NOT NULL,
  `seance` varchar(50) NOT NULL DEFAULT 'code',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `seance`
--

INSERT INTO `seance` (`id`, `date`, `debut`, `fin`, `seance`) VALUES
(57, '2022-06-17', '14:58:00', '16:00:00', 'code'),
(49, '2022-05-06', '03:44:00', '22:48:00', 'conduite'),
(77, '1992-04-23', '13:03:00', '08:03:00', 'conduite'),
(79, '2006-09-28', '19:37:00', '20:04:00', 'conduite'),
(64, '2022-06-07', '20:45:00', '10:05:00', 'code'),
(80, '2009-04-12', '07:45:00', '06:02:00', 'code'),
(83, '2022-06-20', '16:32:00', '19:32:00', 'conduite'),
(82, '1988-04-10', '02:30:00', '13:47:00', 'code');

-- --------------------------------------------------------

--
-- Structure de la table `tranche`
--

DROP TABLE IF EXISTS `tranche`;
CREATE TABLE IF NOT EXISTS `tranche` (
  `id_tranche` int(11) NOT NULL AUTO_INCREMENT,
  `tranche` int(11) DEFAULT NULL,
  `id_Candidat` int(11) DEFAULT NULL,
  `dateCreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_tranche`),
  KEY `id_Candidat` (`id_Candidat`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tranche`
--

INSERT INTO `tranche` (`id_tranche`, `tranche`, `id_Candidat`, `dateCreation`) VALUES
(1, 1, 30, '2022-06-12 13:29:25'),
(2, 100, 30, '2022-06-12 13:30:35'),
(3, 1, 30, '2022-06-12 13:42:43'),
(4, 1, 30, '2022-06-12 13:42:45'),
(5, 5556, 5, '2022-06-12 13:43:31'),
(6, 1, 5, '2022-06-12 13:44:17'),
(7, 1, 5, '2022-06-12 13:44:18'),
(8, 1, 5, '2022-06-12 13:44:19'),
(9, 1, 5, '2022-06-12 13:44:19'),
(10, 1, 5, '2022-06-12 13:44:37'),
(11, 1, 5, '2022-06-12 13:45:25'),
(12, 1, 5, '2022-06-12 13:45:25'),
(13, 1, 5, '2022-06-12 13:45:26'),
(14, 1, 5, '2022-06-12 13:45:26'),
(15, 1, 5, '2022-06-12 13:45:26'),
(16, 1, 5, '2022-06-12 13:46:11'),
(17, 1, 5, '2022-06-12 13:46:46'),
(18, 2, 5, '2022-06-12 13:46:56'),
(19, 12, 5, '2022-06-12 17:28:40'),
(20, 99, 37, '2022-06-12 17:53:45'),
(21, 344, 4, '2022-06-13 08:24:51'),
(22, 2000, 72, '2022-06-13 14:24:11'),
(23, 2000, 78, '2022-06-13 23:29:45'),
(24, 40, 81, '2022-06-13 23:34:30'),
(25, 1000, 78, '2022-06-13 23:36:58'),
(26, 28, 79, '2022-06-14 00:16:32'),
(27, 28, 79, '2022-06-14 00:16:32'),
(28, -28, 79, '2022-06-14 00:16:47'),
(29, 76, 77, '2022-06-14 08:17:15'),
(30, 3000, 84, '2022-06-14 08:46:11'),
(31, 3000, 87, '2022-06-17 15:33:17'),
(32, 3000, 88, '2022-06-17 15:42:24'),
(33, 1000, 72, '2022-06-17 21:39:20'),
(34, 2000, 87, '2022-06-17 21:39:54'),
(35, 2000, 89, '2022-06-18 12:11:09'),
(36, 500, 89, '2022-06-19 21:27:57'),
(37, 3000, 98, '2022-06-20 14:30:16');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_utilisateur` varchar(255) DEFAULT NULL,
  `prenom_utilisateur` varchar(255) DEFAULT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass` varchar(255) NOT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `cin` varchar(50) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `datNaissance` date DEFAULT NULL,
  `sexe` varchar(255) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `id_Admin` int(11) DEFAULT NULL,
  `dateCreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_utilisateur`),
  KEY `id_Admin` (`id_Admin`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`, `login`, `email`, `pass`, `tel`, `cin`, `adresse`, `datNaissance`, `sexe`, `profession`, `photo`, `id_Admin`, `dateCreation`) VALUES
(5, 'Guerroum', 'Khawla', '', 'utilisateur@gmail.com', '123456789', '0652086766', 'hh454545', '40406', '2003-01-02', 'femme', 'Secritaire', 'sec.png', NULL, '0000-00-00 00:00:00'),
(40, 'Lambaraa', 'Abdellah', '', 'abdellah17lambaraa@gmail.com', '62b038a3f1a13', '0652086766', 'hh23467', 'hay nahda etg1, Mohammedia', '1998-06-10', '', 'directeur', 'A7.jpg', NULL, '2022-06-20 09:06:43');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

DROP TABLE IF EXISTS `voiture`;
CREATE TABLE IF NOT EXISTS `voiture` (
  `id_voiture` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` varchar(50) DEFAULT NULL,
  `marque` varchar(50) DEFAULT NULL,
  `module` year(4) NOT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `dateCreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_voiture`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`id_voiture`, `matricule`, `marque`, `module`, `id_utilisateur`, `photo`, `dateCreation`) VALUES
(3, 'A1231', 'Mobilite', 2020, 1, 'c2.png', '0000-00-00 00:00:00'),
(6, 'AZ5432', 'hyndai', 2014, NULL, '21.png', '0000-00-00 00:00:00'),
(23, 'C231212', 'hyndai', 2010, 1, 'images (7).jfif', '2022-06-16 20:03:17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
