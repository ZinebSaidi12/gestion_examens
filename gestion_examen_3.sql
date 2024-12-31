-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 30 déc. 2024 à 17:58
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_examen_3`
--

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

CREATE TABLE `comptes` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `role_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `comptes`
--

INSERT INTO `comptes` (`id`, `username`, `password_hash`, `email`, `user_id`, `role_name`) VALUES
(1, 'ZINWB', '$2y$10$L5IFC/eNH3Eb/eIuVen0a.8DxCbX7GrV77BhQbfhZccVCsdwhSALi', 'ZINEBSAIDI@GMAIL.COM', 5, 'Student'),
(2, 'hibdhibd', '$2y$10$YzdQ4/S1c.ncBxwFCSwzmOJPeTn/VLeKjHPcyOR968R0DisHD4dJu', 'hind@gmail.com', 6, 'Student'),
(3, 'saidasd', '$2y$10$5v1HTc19M5Snh0Ldq.NS9uD9hdokJdHiYJ56SDbjK4lmtMJAZXufu', 'saida@gmail.com', 7, 'Student');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`name`) VALUES
('Admin'),
('Professor'),
('Student');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `niveau` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `date_of_birth`, `niveau`, `section`) VALUES
(1, 'Doe', 'John', '1990-01-01', 'Master', 'Science'),
(2, 'guyguy', 'ggg', '2024-12-09', 'hhgiugiu', 'huihuihi'),
(3, 'fuygyuguy', 'iuuiyiu', '2024-12-01', 'giuguig', 'hiuguigiu'),
(4, 'GGIUGIU', 'UUIUI', '2003-02-28', 'BHUIHIU', 'HYUGG'),
(5, 'ZINEB', 'SAADI', '1990-02-28', 'MASTER', 'M1'),
(6, 'hind', 'saadi', '1999-02-28', 'master', 'm2'),
(7, 'saida', 'errami', '1998-01-30', 'master', 'm2');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comptes`
--
ALTER TABLE `comptes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `role_name` (`role_name`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`name`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comptes`
--
ALTER TABLE `comptes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comptes`
--
ALTER TABLE `comptes`
  ADD CONSTRAINT `comptes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comptes_ibfk_2` FOREIGN KEY (`role_name`) REFERENCES `role` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
