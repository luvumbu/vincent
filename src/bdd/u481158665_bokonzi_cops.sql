-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 03 sep. 2020 à 14:49
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `u481158665_bokonzi_cops`
--

-- --------------------------------------------------------

--
-- Structure de la table `cookie_all_connexion`
--

CREATE TABLE `cookie_all_connexion` (
  `cookie_all_connexion_id` int(11) NOT NULL,
  `cookie_all_connexion_ip` varchar(500) COLLATE utf8_bin NOT NULL,
  `cookie_all_connexion_ville` varchar(500) COLLATE utf8_bin NOT NULL,
  `cookie_all_connexion_pays` varchar(500) COLLATE utf8_bin NOT NULL,
  `cookie_all_connexion_add` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `cookie_all_connexion`
--

INSERT INTO `cookie_all_connexion` (`cookie_all_connexion_id`, `cookie_all_connexion_ip`, `cookie_all_connexion_ville`, `cookie_all_connexion_pays`, `cookie_all_connexion_add`) VALUES
(16, '123', '', '', '2020-09-03 14:28:40'),
(15, '123', '', '', '2020-09-03 14:28:20'),
(14, '123', '', '', '2020-09-03 14:28:01'),
(17, '123', '', '', '2020-09-03 14:35:39'),
(18, '123', '456', '', '2020-09-03 14:36:09'),
(19, '123', 'France', '', '2020-09-03 14:37:10'),
(20, '123', 'Lille', 'France', '2020-09-03 14:38:00'),
(21, '89.158.223.194', 'Lille', 'France', '2020-09-03 14:38:29'),
(22, '89.158.223.194', 'Lille', 'France', '2020-09-03 14:39:05'),
(23, '89.158.223.194', 'Lille', 'France', '2020-09-03 14:39:14'),
(24, '89.158.223.194', 'Lille', 'France', '2020-09-03 14:39:15'),
(25, '89.158.223.194', 'Lille', 'France', '2020-09-03 14:40:35');

-- --------------------------------------------------------

--
-- Structure de la table `user_login`
--

CREATE TABLE `user_login` (
  `id_user_login` int(11) NOT NULL,
  `mail_user_login` varchar(500) COLLATE utf8_bin NOT NULL,
  `password_user_login` varchar(500) COLLATE utf8_bin NOT NULL,
  `add_user_login` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cookie_all_connexion`
--
ALTER TABLE `cookie_all_connexion`
  ADD PRIMARY KEY (`cookie_all_connexion_id`);

--
-- Index pour la table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id_user_login`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cookie_all_connexion`
--
ALTER TABLE `cookie_all_connexion`
  MODIFY `cookie_all_connexion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id_user_login` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
