-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 20 juil. 2023 à 15:14
-- Version du serveur :  10.4.6-MariaDB
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestionentreprise`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `matricule` varchar(250) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `embauche` date NOT NULL,
  `poste` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `code_acces` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `matricule`, `nom`, `prenom`, `embauche`, `poste`, `email`, `code_acces`) VALUES
(42, 'matricule1', 'Randria', 'Ony', '2023-07-24', 'employe', 'onyrandy1998@gmail.com', '2nFYcolI'),
(43, 'matricule2', 'Jane', 'Doe', '2023-07-20', 'admin', 'test@gmail.com', 'Cktl4rUL'),
(45, 'matricule3', 'Soa', 'zara', '2023-07-09', 'employe', 'soazara@gmail.com', 'xgCbnFSV'),
(46, 'matricule4', 'Kotonandra', 'Fetsy', '2023-07-16', 'employe', 'kotofts@gmail.com', 'JXKhtNC9'),
(47, 'matricule5', 'Noro', 'Tatamo', '2023-07-30', 'admin', 'noro@gmail.com', 'gqBrDcCy'),
(49, 'matricule6', 'Patrick', 'Jane', '2023-07-13', 'admin', 'jane@gmail.com', 'QwLcM6dy'),
(50, 'matricule7', 'Ravaka', 'Aina', '2023-07-02', 'employe', 'ravaka@gmail.com', 'mi9vNpTH'),
(52, 'matricule8', 'Sitraka', 'Toky', '2023-07-02', 'employe', 'ravaka@gmail.com', 'KWE1two6'),
(53, 'matricule9', 'Mac', 'Dever', '2023-07-02', 'admin', 'mac@gmail.com', 'AtUrCKbW'),
(55, 'matricule10', 'Titi', 'Jack', '2023-07-16', 'employe', 'titi@gmail.com', 'L0fOMXjC');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matricule` (`matricule`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
