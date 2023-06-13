-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 13 juin 2023 à 21:30
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `administrator_dclic`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mot_de_passe` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `email`, `mot_de_passe`) VALUES
(1, 'ashneouedraogo@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `apprenant`
--

CREATE TABLE `apprenant` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `date_de_naissance` date DEFAULT NULL,
  `formation_de_base` varchar(255) DEFAULT NULL,
  `ville_d_origine` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `apprenant`
--

INSERT INTO `apprenant` (`id`, `nom`, `prenom`, `date_de_naissance`, `formation_de_base`, `ville_d_origine`) VALUES
(2, 'lp', 'bhghg', '0001-12-12', 'informatique', '6666'),
(3, 'zongo', 'ferdina', '1222-01-01', 'electronique', 'koudougou'),
(4, 'lp', 'armel', '0000-00-00', 'uhyhj', 'huvhj'),
(6, 'ouedraogo', 'armel', '0305-02-05', 'informatique', '65636'),
(7, 'ouedraogo', 'armel', '2010-12-12', 'informatique', 'koudougou'),
(8, 'ymg', 'ok', '0000-00-00', 'electronique', 'kdg'),
(9, 'ouedraogo', 'armel', '2222-02-22', 'informatique', 'ghjklm'),
(10, 'ouedraogo', 'armel', '0000-00-00', 'zsczs', 'koudougou'),
(11, 'ouedraogo', 'armel', '0000-00-00', 'zsczs', 'koudougou'),
(16, 'sdfgh', 'gygfhj', '2222-05-12', 'informatique', 'ghjklm'),
(20, 'FCVN', 'XRXGHJ', '1111-12-12', 'informatique', 'koudougou'),
(22, 'lp', 'bhghg', '0001-12-12', 'informatique', '6667');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `apprenant`
--
ALTER TABLE `apprenant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `apprenant`
--
ALTER TABLE `apprenant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
