-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 16 Novembre 2023 à 00:18
-- Version du serveur :  10.1.26-MariaDB-0+deb9u1
-- Version de PHP :  7.0.30-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_6_1`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id_comment` int(4) NOT NULL,
  `commentaires` varchar(60) NOT NULL,
  `pseudo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

CREATE TABLE `games` (
  `id_game` int(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `category` varchar(60) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `games`
--

INSERT INTO `games` (`id_game`, `name`, `category`, `Description`, `date_added`) VALUES
(1, 'Crash BanditCoot', 'Racing', 'Crash Bandicoot est une série de jeux vidéo de plates-formes créée par Andy Gavin et Jason Rubin, débutée en 1996 sur PlayStation.', '2023-11-01'),
(2, 'Grand Theft Auto', 'Action-Aventure', 'Grand Theft Auto  est un jeu vidéo d\'action-aventure, édité par Rockstar Games.', '2023-11-02'),
(18, 'Dance Battle', 'Dance', 'Dance Battle is not just another rhythm game; it\'s your stage, your spotlight! Time your clicks perfectly to the beat, and watch as your character grooves alongside the iconic singers of each song.', '2023-11-05'),
(33, 'Dr Driving', 'Racing', 'Dr. Driving est un jeu de conduite qui s\'éloigne du modèle de sports de course classique où la vitesse est la clé. Plutôt, il opte pour un modèle qui vous laisse conduire des voitures normales, dans des environnements, et à des vitesses normales.', '2023-11-07'),
(55, 'Street Fighter', 'Fighting', 'Street Fighter is a series of one-on-one fighting video games developed by Capcom, the first episode of which was published in 1987. Street Fighter is one of the most popular video game series...', '2023-11-08'),
(67, 'Penalty Shoot', 'Sport', 'Êtes-vous prêt pour le défi ultime de la séance de tirs au but ? Sélectionnez votre équipe de football préférée parmi 12 ligues. Battez-vous tout au long de la phase de groupes et de la phase à élimination directe et tentez de remporter la coupe ! ', '2023-11-14'),
(777, 'Supreme Football', 'Sport', 'Steal the ball from your opponent by running up to it and taking control. Play as any of the 32 teams in a single match against the computer or a friend, or compete in a full-on tournament', '2023-11-17'),
(785, 'Princesses Villain Party ', 'Girl', 'Princesses Villain Party Crashers is a dress up game for girls featuring dark villain style of dress. The princesses just found out what the Villains are up to in the midst of preparations for a super party to which the princesses were obviously not invited', '2023-11-15'),
(853, 'My BFF’s Wedding', 'Girl', 'These young ladies are about to participate in their BFF\'s wedding and they need your help in picking put their outfits. They need a special dress for the occasion, accessories and of course the perfect hairdo!', '2023-11-04');

-- --------------------------------------------------------

--
-- Structure de la table `gameslotproposal`
--

CREATE TABLE `gameslotproposal` (
  `id_slot_proposal` int(6) NOT NULL,
  `id_upcoming_game` int(6) DEFAULT NULL,
  `date_proposal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `gameslotproposal`
--

INSERT INTO `gameslotproposal` (`id_slot_proposal`, `id_upcoming_game`, `date_proposal`) VALUES
(6598, 9853, '2023-11-01 11:30:00');

-- --------------------------------------------------------

--
-- Structure de la table `historic`
--

CREATE TABLE `historic` (
  `id_historic` int(6) NOT NULL,
  `id_user` int(6) DEFAULT NULL,
  `id_game` int(6) DEFAULT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `historic`
--

INSERT INTO `historic` (`id_historic`, `id_user`, `id_game`, `Description`) VALUES
(456, 667, 33, 'Dr Driving a été joué'),
(479, 445, 55, 'Street Fighter a été joué'),
(758, 22, 18, 'Dance Battle a été joué');

-- --------------------------------------------------------

--
-- Structure de la table `Inscription`
--

CREATE TABLE `Inscription` (
  `id_inscription` int(4) NOT NULL,
  `nom` varchar(4) NOT NULL,
  `prenom` varchar(4) NOT NULL,
  `e_mail` varchar(30) NOT NULL,
  `mot_de_passe` varchar(20) NOT NULL,
  `id_user` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Inscription`
--

INSERT INTO `Inscription` (`id_inscription`, `nom`, `prenom`, `e_mail`, `mot_de_passe`, `id_user`) VALUES
(4525, 'Ly', 'Theo', 'theoly@gmail.com', 'abcdefh', 25);

-- --------------------------------------------------------

--
-- Structure de la table `playersinslot`
--

CREATE TABLE `playersinslot` (
  `id_playerinslot` int(6) NOT NULL,
  `id_user` int(6) DEFAULT NULL,
  `id_game` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `playersinslot`
--

INSERT INTO `playersinslot` (`id_playerinslot`, `id_user`, `id_game`) VALUES
(6543, 22, 2);

-- --------------------------------------------------------

--
-- Structure de la table `score`
--

CREATE TABLE `score` (
  `id_score` int(6) NOT NULL,
  `id_game` int(6) DEFAULT NULL,
  `id_user` int(6) DEFAULT NULL,
  `Score` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `score`
--

INSERT INTO `score` (`id_score`, `id_game`, `id_user`, `Score`) VALUES
(7654, 33, 7543, 9999);

-- --------------------------------------------------------

--
-- Structure de la table `upcoming_games`
--

CREATE TABLE `upcoming_games` (
  `idupcoming_games` int(6) NOT NULL,
  `id_game` int(6) DEFAULT NULL,
  `id_user_registred` int(6) DEFAULT NULL,
  `game_starting` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `upcoming_games`
--

INSERT INTO `upcoming_games` (`idupcoming_games`, `id_game`, `id_user_registred`, `game_starting`) VALUES
(421, 18, 667, '15:30:00'),
(652, 55, 7543, '17:20:00'),
(1321, 2, 445, '09:15:00'),
(9853, 33, 1, '10:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(6) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `mail` varchar(40) DEFAULT NULL,
  `mot_de_passe` varchar(20) NOT NULL,
  `role` int(11) NOT NULL,
  `Connexion_detail` datetime(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `nom`, `prenom`, `mail`, `mot_de_passe`, `role`, `Connexion_detail`) VALUES
(1, 'CHEN', 'Yang', 'chen.lezen667@hotmail.fr', 'ekipekip667', 1, '2023-11-14 11:15:17.2492'),
(22, 'SY', 'Aïcha', 'aïchasy97@hotmail.fr', 'faleme128', 1, '2023-11-14 10:09:12.1374'),
(25, 'Ly', 'Theo', 'theoly@gmail.com', 'abcdefgh', 1, '2023-11-20 14:19:19.2001'),
(445, 'DIALLO', 'Moussa', 'moussa.diallo45@gmail.com', 'azerty45', 1, '2023-11-18 11:14:13.0002'),
(475, 'LECLERC', 'Charles', 'leclerc.charles@hotmail.fr', 'sotteville123', 1, '2023-11-04 15:27:27.0004'),
(551, 'DIALLO', 'Aïssatou', 'aïssatou.diallo@hotmail.fr', 'cap123', 1, '2023-11-02 15:25:20.3483'),
(667, 'GUINDO', 'Safietou', 'safietou.guindo@groupe-esigelec.org', 'goat123', 2, '2023-11-23 15:35:27.2232'),
(743, 'BA', 'Lamine', 'Lamine.bâ@hotmail.fr', 'Sbcity2008', 1, '2023-11-23 11:25:24.3873'),
(853, 'LASALLE', 'Lasalle', 'Jean.lasalle@hotmail.fr', 'tototata89', 1, '2023-11-15 10:22:22.3640'),
(7543, 'SOW', 'Ousmane', 'ousmane267.sow@gmail.com', 'trusttheprocess', 2, '2023-11-24 11:28:18.2622'),
(8640, 'VALLOIS', 'Lucas', 'Lucas.vallois@hotmail.fr', 'featmhd56', 1, '2023-11-01 09:20:17.3253');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id_comment`);

--
-- Index pour la table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id_game`);

--
-- Index pour la table `gameslotproposal`
--
ALTER TABLE `gameslotproposal`
  ADD PRIMARY KEY (`id_slot_proposal`),
  ADD KEY `idgame` (`id_upcoming_game`);

--
-- Index pour la table `historic`
--
ALTER TABLE `historic`
  ADD PRIMARY KEY (`id_historic`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_game` (`id_game`);

--
-- Index pour la table `Inscription`
--
ALTER TABLE `Inscription`
  ADD PRIMARY KEY (`id_inscription`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `playersinslot`
--
ALTER TABLE `playersinslot`
  ADD PRIMARY KEY (`id_playerinslot`),
  ADD KEY `iduser` (`id_user`),
  ADD KEY `id_game_userplaying` (`id_game`);

--
-- Index pour la table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id_score`),
  ADD KEY `idscoreuser` (`id_game`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `upcoming_games`
--
ALTER TABLE `upcoming_games`
  ADD PRIMARY KEY (`idupcoming_games`),
  ADD KEY `idgame` (`id_game`),
  ADD KEY `iduser_registred` (`id_user_registred`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `gameslotproposal`
--
ALTER TABLE `gameslotproposal`
  MODIFY `id_slot_proposal` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6599;
--
-- AUTO_INCREMENT pour la table `historic`
--
ALTER TABLE `historic`
  MODIFY `id_historic` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=759;
--
-- AUTO_INCREMENT pour la table `Inscription`
--
ALTER TABLE `Inscription`
  MODIFY `id_inscription` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4526;
--
-- AUTO_INCREMENT pour la table `playersinslot`
--
ALTER TABLE `playersinslot`
  MODIFY `id_playerinslot` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6544;
--
-- AUTO_INCREMENT pour la table `score`
--
ALTER TABLE `score`
  MODIFY `id_score` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7655;
--
-- AUTO_INCREMENT pour la table `upcoming_games`
--
ALTER TABLE `upcoming_games`
  MODIFY `idupcoming_games` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9854;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `gameslotproposal`
--
ALTER TABLE `gameslotproposal`
  ADD CONSTRAINT `id_game_proposal` FOREIGN KEY (`id_upcoming_game`) REFERENCES `upcoming_games` (`idupcoming_games`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `historic`
--
ALTER TABLE `historic`
  ADD CONSTRAINT `id_historic_game` FOREIGN KEY (`id_game`) REFERENCES `games` (`id_game`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `id_historic_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `Inscription`
--
ALTER TABLE `Inscription`
  ADD CONSTRAINT `id_user_inscription` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `playersinslot`
--
ALTER TABLE `playersinslot`
  ADD CONSTRAINT `id_game_userplaying` FOREIGN KEY (`id_game`) REFERENCES `games` (`id_game`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `id_user_inslot` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `score`
--
ALTER TABLE `score`
  ADD CONSTRAINT `game_fk` FOREIGN KEY (`id_game`) REFERENCES `games` (`id_game`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `id_score_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `upcoming_games`
--
ALTER TABLE `upcoming_games`
  ADD CONSTRAINT `idgame_FK` FOREIGN KEY (`id_game`) REFERENCES `games` (`id_game`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `iduser_registred` FOREIGN KEY (`id_user_registred`) REFERENCES `user` (`id_user`) ON DELETE SET NULL ON UPDATE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
