-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 21 déc. 2020 à 21:58
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `user_id_A` int(11) NOT NULL,
  `user_id_B` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `friends`
--

INSERT INTO `friends` (`id`, `user_id_A`, `user_id_B`) VALUES
(1, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `surveys`
--

CREATE TABLE `surveys` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author_id` int(11) NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `surveys`
--

INSERT INTO `surveys` (`id`, `title`, `author_id`, `end_date`) VALUES
(1, 'sondage', 3, '2020-12-13'),
(2, 'sss', 3, '2020-12-31');

-- --------------------------------------------------------

--
-- Structure de la table `surveys_answers`
--

CREATE TABLE `surveys_answers` (
  `id` int(11) NOT NULL,
  `survey_id` int(11) NOT NULL,
  `text` varchar(100) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `surveys_answers`
--

INSERT INTO `surveys_answers` (`id`, `survey_id`, `text`, `count`) VALUES
(1, 1, 'a', 1),
(2, 1, 'b', 1),
(3, 1, 'c', 0),
(4, 1, 'd', 0),
(5, 0, 'a', 0),
(6, 0, 'b', 0),
(7, 0, 'c', 0),
(8, 0, 'd', 0),
(9, 0, 'a', 0),
(10, 0, 'b', 0),
(11, 0, 'c', 0),
(12, 0, 'd', 0),
(13, 0, 'a', 0),
(14, 0, 'b', 0),
(15, 0, 'c', 0),
(16, 0, 'd', 0),
(17, 0, 'a', 0),
(18, 0, 'b', 0),
(19, 0, 'c', 0),
(20, 0, 'd', 0),
(21, 0, 'a', 0),
(22, 0, 'b', 0),
(23, 0, 'c', 0),
(24, 0, 'd', 0),
(25, 0, 'a', 0),
(26, 0, 'b', 0),
(27, 0, '', 0),
(28, 0, '', 0),
(29, 0, 'a', 0),
(30, 0, 'b', 0),
(31, 0, '', 0),
(32, 0, '', 0),
(33, 0, 'a', 0),
(34, 0, 'b', 0),
(35, 0, '', 0),
(36, 0, '', 0),
(37, 0, 'a', 0),
(38, 0, 'b', 0),
(39, 0, '', 0),
(40, 0, '', 0),
(41, 0, 'a', 0),
(42, 0, 'b', 0),
(43, 0, 'c', 0),
(44, 0, 'd', 0),
(45, 2, 'a', 0),
(46, 2, 'b', 0),
(47, 2, 'c', 0),
(48, 2, 'd', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `is_connected` tinyint(4) NOT NULL DEFAULT '0',
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `birthDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`, `is_connected`, `firstName`, `lastName`, `birthDate`) VALUES
(1, 'pbpierreantoine@gmail.com', '9513229d435978263d82902c59d4e0fb86c941a9bf09b605cd8a6643f40149a8', 'pierre', 0, 'pierre-antoine', 'Baizeau', '2020-12-07'),
(3, 'pbpierreantoine@gmail.com', 'd5a5d66b94e8da0cf63d4cd6d66cd489d78e77b697039c6c48e3ff8d81752139', '0651069969', 1, 'laposte.fr', 'Baizeau', '2020-12-07');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `surveys`
--
ALTER TABLE `surveys`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `surveys_answers`
--
ALTER TABLE `surveys_answers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `surveys`
--
ALTER TABLE `surveys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `surveys_answers`
--
ALTER TABLE `surveys_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
