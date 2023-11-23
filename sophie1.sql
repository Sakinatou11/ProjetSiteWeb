-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 23 nov. 2023 à 18:39
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
-- Base de données : `sophie1`
--

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

CREATE TABLE `games` (
  `id_game` int(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `category` varchar(60) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `games`
--

INSERT INTO `games` (`id_game`, `name`, `category`, `Description`, `picture`) VALUES
(854, 'twilight', 'danger', 'jeu aventure', 'https://tse3.mm.bing.net/th?id=OIP.BOx23m7XBNVhytnrVUH1EQHaEK&pid=Api&P=0&h=180');

-- --------------------------------------------------------

--
-- Structure de la table `souhait`
--

CREATE TABLE `souhait` (
  `id_souhait` int(6) NOT NULL,
  `id_user` int(6) DEFAULT NULL,
  `souhait` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(6) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `mail` varchar(40) DEFAULT NULL,
  `mot_de_passe` varchar(100) NOT NULL,
  `role` int(11) NOT NULL,
  `Connexion_detail` datetime(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `prenom`, `mail`, `mot_de_passe`, `role`, `Connexion_detail`) VALUES
(2, 'GUINDO', 'SafiCode', 'saficode@gmail.com', '$2y$12$UH7kkg3yWKiLEkRZWYIk0ei1q79ks9p.nCafHfnR7dL/xoV8mTLce', 1, '0000-00-00 00:00:00.0000'),
(3, 'DIOP', 'SillyCode', 'sillycode@gmail.com', '$2y$12$HaYNN1YEIc3mCP20wRZxcue457tO6zcGKIf5yZqIANMzDxV.diEmK', 1, '0000-00-00 00:00:00.0000'),
(6, 'diouf', 'abdoul', 'abdoul@abdoul.co', '$2y$12$nmJqZrsaH1RPkhwn.MIw1ONVHlYrjW5/b61H1PpCybCQKhSiqWbHK', 2, '0000-00-00 00:00:00.0000');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id_game`);

--
-- Index pour la table `souhait`
--
ALTER TABLE `souhait`
  ADD PRIMARY KEY (`id_souhait`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `games`
--
ALTER TABLE `games`
  MODIFY `id_game` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=855;

--
-- AUTO_INCREMENT pour la table `souhait`
--
ALTER TABLE `souhait`
  MODIFY `id_souhait` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `souhait`
--
ALTER TABLE `souhait`
  ADD CONSTRAINT `id_souhait_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
