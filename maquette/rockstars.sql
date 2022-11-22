-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 17 nov. 2022 à 23:34
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rockstars`
--

-- --------------------------------------------------------

--
-- Structure de la table `adminx`
--

CREATE TABLE `adminx` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `psw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `adminx`
--

INSERT INTO `adminx` (`id_user`, `nom`, `prenom`, `email`, `psw`) VALUES
(1, 'Tadlaoui', 'Youssef', 'youssef@ycode.com', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `name`) VALUES
(1, 'les instrements bois'),
(2, 'les instrments cordes'),
(3, 'les instrement celle des claviers'),
(5, 'les instrements percussion');

-- --------------------------------------------------------

--
-- Structure de la table `instrement`
--

CREATE TABLE `instrement` (
  `instrement_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_time` date NOT NULL,
  `quantite` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `instrement`
--

INSERT INTO `instrement` (`instrement_id`, `name`, `description`, `date_time`, `quantite`, `categoryId`, `prix`) VALUES
(5, 'Incididunt fugit no', 'Eos iure et consequa', '2022-08-17', 94, 5, 34),
(6, 'Iusto natus duis exp', 'Quasi fugiat facere', '2021-01-27', 54, 1, 69),
(7, 'Nihil rerum labore e', 'Atque architecto qui', '1988-10-26', 11, 3, 71),
(8, 'Similique neque solu', 'Voluptates dicta quo', '1987-05-11', 28, 2, 56),
(9, 'Non nisi voluptas do', 'Consequatur ut repr', '2022-05-02', 43, 5, 87),
(10, 'Maiores dolorum ex p', 'Dolorum omnis sapien', '2019-04-03', 41, 3, 64),
(11, 'Modi consectetur en', 'Enim ut ad ducimus ', '1980-07-27', 21, 2, 98),
(12, 'Incidunt labore con', 'Sed excepteur illum', '2004-12-13', 96, 2, 52),
(13, 'Ut tempore architec', 'Aliquip distinctio ', '2009-10-08', 42, 3, 79),
(14, 'Fugiat expedita ut ', 'Quisquam et sed saep', '1979-08-06', 53, 1, 79),
(15, 'Provident sint alia', 'Eveniet maxime aute', '1973-12-08', 59, 5, 45),
(16, 'FAHD', 'Molestiae quia quisq', '2012-11-18', 65, 1, 84);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adminx`
--
ALTER TABLE `adminx`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `instrement`
--
ALTER TABLE `instrement`
  ADD PRIMARY KEY (`instrement_id`),
  ADD KEY `categoryId` (`categoryId`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adminx`
--
ALTER TABLE `adminx`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `instrement`
--
ALTER TABLE `instrement`
  MODIFY `instrement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `instrement`
--
ALTER TABLE `instrement`
  ADD CONSTRAINT `instrement_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `categorie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
