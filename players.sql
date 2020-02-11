-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Ven 15 Mars 2019 à 12:38
-- Version du serveur :  5.7.25-0ubuntu0.18.04.2
-- Version de PHP :  7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `salon`
--

-- --------------------------------------------------------

--
-- Structure de la table `players`
--

CREATE TABLE `players` (
  `id` int(4) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL DEFAULT '',
  `birthday` date DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(10) DEFAULT NULL,
  `school` varchar(100) NOT NULL,
  `studies` varchar(100) DEFAULT NULL,
  `active` varchar(7) DEFAULT NULL,
  `laptop` int(1) DEFAULT NULL,
  `level` int(4) DEFAULT NULL,
  `onGame` varchar(7) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `comment` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `players`
--

INSERT INTO `players` (`id`, `firstname`, `lastname`, `birthday`, `email`, `phone`, `school`, `studies`, `active`, `laptop`, `level`, `onGame`, `timestamp`, `comment`) VALUES
(3, 'stacy', 'robert', '2019-03-24', 'stacyrobert95@gmail.com', 664429389, 'EPITECH', 'Bachillerato', 'checked', 1, 10, NULL, NULL, NULL),
(4, 'elsa', 'presselin', '2019-03-24', 'elsa.presselin@epitech.eu', NULL, 'ecole', 'Colegio', NULL, 1, NULL, 'checked', '2019-03-14 16:39:44', NULL),
(5, 'gaetan', 'leandre', '2019-03-24', 'gaetan.leandre@epitech.eu', NULL, 'EPITECH', 'Diplomatura', 'checked', 1, NULL, 'checked', '2019-03-14 18:27:15', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
