-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 26 mai 2020 à 02:22
-- Version du serveur :  10.1.39-MariaDB
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `samar`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

CREATE TABLE `actualite` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `text` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `actualite`
--

INSERT INTO `actualite` (`id`, `titre`, `text`) VALUES
(1, 'Awesome checkbox', 'Awesome checkbox'),
(2, 'Awesome checkbox', 'Awesome checkbox'),
(3, 'Awesome checkbox', 'Awesome checkbox'),
(4, 'Awesome checkbox', 'Awesome checkbox'),
(5, 'Awesome checkbox', 'Awesome checkbox'),
(6, 'hjlkghjk', 'hjlkghjk'),
(8, 'hjlkghjk', 'hjlkghjk'),
(9, 'hjlkghjk', 'hjlkghjk'),
(10, 'hjlkghjk', 'hjlkghjk');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(3, 'chahir', 'chahirjbali@gmail.co', 'aazersd dfg');

-- --------------------------------------------------------

--
-- Structure de la table `docteur`
--

CREATE TABLE `docteur` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `specialite` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `docteur`
--

INSERT INTO `docteur` (`id`, `name`, `specialite`) VALUES
(1, 'Google Play card 5$', 'ghjgh'),
(2, 'chahir', 'jhf kjhgsdgf lkhksdf'),
(3, 'ahmed', 'generaliste'),
(5, 'ghjg', 'kjhkjlhlkbkjghv'),
(6, '', ''),
(7, 'ghjg', 'kjgjuygtiu'),
(8, 'ghjg', 'hfgh');

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

CREATE TABLE `medicament` (
  `id` int(255) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `prix` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `medicament`
--

INSERT INTO `medicament` (`id`, `nom`, `description`, `prix`) VALUES
(1, 'TITRE', 'KJLKSDHG', 52),
(2, 'TITRE', 'KJLKSDHG', 52),
(3, 'TITRE', 'KJLKSDHG', 52),
(4, 'jbali', 'google play cards 5$-100$', 52),
(5, 'jbali', 'google play cards 5$-100$', 52),
(6, 'jbali', 'google play cards 5$-100$', 52),
(7, 'jbali', 'google play cards 5$-100$', 52),
(8, 'jbali', 'google play cards 5$-100$', 52),
(9, 'jbali', 'google play cards 5$-100$', 52),
(10, 'jbali', 'google play cards 5$-100$', 52),
(11, 'Ø§Ù„Ø¹ÙˆÙŠÙ†ÙŠ', 'google play cards 5$-100$', 52),
(12, 'adole', 'dekkf hhd hhcnndjh nndeh dejjke jjde jjndc', 23);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ncin` int(255) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `age` int(20) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `maladie` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ncin`, `nom`, `prenom`, `age`, `telephone`, `maladie`, `username`, `password`, `role`) VALUES
(14355758, 'jbali', 'chahir', 2, '5242424', 'fghfg', 'admin', 'chahir', ''),
(545454, 'samar', 'samra', 12, '11422563', '!!!!!!!', 'samar', 'samar', '2'),
(14355755, 'jbali', 'chahir', 1, '5242424', 'fghfg', 'andro', 'Lily8237', '1'),
(14225545, 'amine', 'jbali', 21, '21445221', 'gripppeee', 'amine', 'amine', '1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actualite`
--
ALTER TABLE `actualite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `docteur`
--
ALTER TABLE `docteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `medicament`
--
ALTER TABLE `medicament`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actualite`
--
ALTER TABLE `actualite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `docteur`
--
ALTER TABLE `docteur`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `medicament`
--
ALTER TABLE `medicament`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
