-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : ven. 03 mars 2023 à 20:48
-- Version du serveur : 10.4.28-MariaDB-1:10.4.28+maria~ubu2004
-- Version de PHP : 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mediatheque`
--
CREATE DATABASE IF NOT EXISTS `mediatheque` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mediatheque`;

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

DROP TABLE IF EXISTS `films`;
CREATE TABLE `films` (
  `ID` int(11) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `year` varchar(4) DEFAULT NULL,
  `note` varchar(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`ID`, `title`, `year`, `note`) VALUES
(1, "La ligne verte", "2004", "5"),
(2, "Contact", "2000", "5"),
(3, "La 7éme compagnie", "1987", "2"),
(4, "Le soleil rouge", "1978", "4"),
(5, "Le soleil rouge", "1978", "1"),
(6, "Le soleil rouge", "1978", "3");

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

DROP TABLE IF EXISTS `minichat`;
CREATE TABLE `minichat` (
  `ID` int(11) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `user_ID` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `minichat`
--

INSERT INTO `minichat` (`ID`, `date`, `user_ID`, `message`) VALUES
(1, "2015-11-01 19:32:49", 1, "Bonjour, je m'appelle Bruce Wayne, je suis de Gotham."),
(2, "2015-11-01 19:34:22", 2, "Bonjour, Je m'appelle Clark Kent, Je suis de Smallville mais actuellement je vis à Métropolis."),
(3, "2015-11-01 19:36:43", 2, "Non, je déconne je suis Kal-El de la planète Kripton mais je suis plus connu comme Superman."),
(4, "2015-11-01 19:38:43", 3, "Salut, Batman, salut Superman, cela vous dis de monter une petite association ?"),
(5, "2015-11-01 19:39:44", 3, "On l'appellerait « La Ligue des Justiciers », ok ? Génial ! A plus."),
(6, "2015-11-01 19:40:56", 1, "Je pense que m'ont secret est découvert"),
(7, "2015-11-01 19:41:50", 1, "Avenger, Rassemblement "),
(8, "2015-11-01 19:43:53", 2, "Euh ... Bruce, tu te trompe de Comics !");

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `ID` int(11) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `modified_at` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID`, `email`, `password`, `pseudo`) VALUES
(1, "bruce.wayne@gmail.com", "123456", "bruce"),
(2, "clark.kent@gmail.com", "123456", "clark"),
(3, "barry.alen@gmail.com", "123456", "barry");

-- --------------------------------------------------------

--
-- Structure de la table `videogames`
--

DROP TABLE IF EXISTS `videogames`;
CREATE TABLE `videogames` (
  `ID` int(11) UNSIGNED NOT NULL,
  `nom` varchar(100) NOT NULL,
  `possesseur` varchar(100) NOT NULL,
  `console` varchar(100) NOT NULL,
  `prix` double NOT NULL DEFAULT 0,
  `nbre_joueurs_max` tinyint(2) UNSIGNED NOT NULL DEFAULT 1,
  `commentaires` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `videogames`
--

INSERT INTO `videogames` (`ID`, `nom`, `possesseur`, `console`, `prix`, `nbre_joueurs_max`, `commentaires`) VALUES
(1, "Super Mario Bros", "Florent", "NES", 4, 1, "Un jeu d'anthologie !"),
(2, "Sonic", "Patrick", "Megadrive", 2, 1, "Pour moi, le meilleur jeu du monde !"),
(3, "Zelda : ocarina of time", "Florent", "Nintendo 64", 15, 1, "Un jeu grand, beau et complet comme on en voit rarement de nos jours"),
(4, "Mario Kart 64", "Florent", "Nintendo 64", 25, 4, "Un excellent jeu de kart !"),
(5, "Super Smash Bros Melee", "Michel", "GameCube", 55, 4, "Un jeu de baston délirant !"),
(6, "Dead or Alive", "Patrick", "Xbox", 60, 4, "Le plus beau jeu de baston jamais créé"),
(7, "Dead or Alive Xtreme Beach Volley Ball", "Patrick", "Xbox", 60, 4, "Un jeu de beach volley de toute beauté o_O"),
(8, "Enter the Matrix", "Michel", "PC", 45, 1, "Plutôt bof comme jeu, mais ça complète bien le film"),
(9, "Max Payne 2", "Michel", "PC", 50, 1, "Très réaliste, une sorte de film noir sur fond d'histoire d'amour. A essayer !"),
(10, "Yoshi's Island", "Florent", "SuperNES", 6, 1, "Le paradis des Yoshis :o)"),
(11, "Commandos 3", "Florent", "PC", 44, 12, "Un bon jeu d'action où on dirige un commando pendant la 2ème guerre mondiale !"),
(12, "Final Fantasy X", "Patrick", "PS2", 40, 1, "Encore un Final Fantasy mais celui la est encore plus beau !"),
(13, "Pokemon Rubis", "Florent", "GBA", 44, 4, "Pika-Pika-chu !!!"),
(14, "Starcraft", "Michel", "PC", 19, 8, "Le meilleur jeux pc de tout les temps !"),
(15, "Grand Theft Auto 3", "Michel", "PS2", 30, 1, "Comme dans les autres Gta on ecrase tout le monde :) ."),
(16, "Homeworld 2", "Michel", "PC", 45, 6, "Superbe ! o_O"),
(17, "Aladin", "Patrick", "SuperNES", 10, 1, "Comme le dessin Animé !"),
(18, "Super Mario Bros 3", "Michel", "SuperNES", 10, 2, "Le meilleur Mario selon moi."),
(19, "SSX 3", "Florent", "Xbox", 56, 2, "Un très bon jeu de snow !"),
(20, "Star Wars : Jedi outcast", "Patrick", "Xbox", 33, 1, "Encore un jeu sur star-wars où on se prend pour Luke Skywalker !"),
(21, "Actua Soccer 3", "Patrick", "PS", 30, 2, "Un jeu de foot assez bof ..."),
(22, "Time Crisis 3", "Florent", "PS2", 40, 1, "Un troisième volet efficace mais pas vraiment surprenant"),
(23, "X-FILES", "Patrick", "PS", 25, 1, "Un jeu censé ressembler a la série mais assez raté ..."),
(24, "Soul Calibur 2", "Patrick", "Xbox", 54, 1, "Un jeu bien axé sur le combat"),
(25, "Diablo", "Florent", "PS", 20, 1, "Comme sur PC mais la c'est sur un ecran de télé :) !"),
(26, "Street Fighter 2", "Patrick", "Megadrive", 10, 2, "Le célèbre jeu de combat !"),
(27, "Gundam Battle Assault 2", "Florent", "PS", 29, 1, "Jeu japonais dont le gameplay est un peu limité. Peu de robots malheureusement"),
(28, "Spider-Man", "Florent", "Megadrive", 15, 1, "Vivez l'aventure de l'homme araignée"),
(29, "Midtown Madness 3", "Michel", "Xbox", 59, 6, "Dans la suite des autres versions de Midtown Madness"),
(30, "Tetris", "Florent", "Gameboy", 5, 1, "Qui ne connait pas ? "),
(31, "The Rocketeer", "Michel", "NES", 2, 1, "Un super un film et un jeu de m*rde ..."),
(32, "Pro Evolution Soccer 3", "Patrick", "PS2", 59, 2, "Un petit jeu de foot sur PS2"),
(33, "Ice Hockey", "Michel", "NES", 7, 2, "Jamais joué mais a mon avis ca parle de hockey sur glace ... =)"),
(34, "Sydney 2000", "Florent", "Dreamcast", 15, 2, "Les JO de Sydney dans votre salon !"),
(35, "NBA 2k", "Patrick", "Dreamcast", 12, 2, "A votre avis :p ?"),
(36, "Aliens Versus Predator : Extinction", "Michel", "PS2", 20, 2, "Un shoot'em up pour pc"),
(37, "Crazy Taxi", "Florent", "Dreamcast", 11, 1, "Conduite de taxi en folie !"),
(38, "Le Maillon Faible", "Mathieu", "PS2", 10, 1, "Le jeu de l'émission"),
(39, "FIFA 64", "Michel", "Nintendo 64", 25, 2, "Le premier jeu de foot sur la N64 =) !"),
(40, "Qui Veut Gagner Des Millions", "Florent", "PS2", 10, 1, "Le jeu de l'émission"),
(41, "Monopoly", "Sebastien", "Nintendo 64", 21, 4, "Bheuuu le monopoly sur N64 !"),
(42, "Taxi 3", "Corentin", "PS2", 19, 4, "Un jeu de voiture sur le film"),
(43, "Indiana Jones Et Le Tombeau De L'Empereur", "Florent", "PS2", 25, 1, "Notre aventurier préféré est de retour !!!"),
(44, "F-ZERO", "Mathieu", "GBA", 25, 4, "Un super jeu de course futuriste !"),
(45, "Harry Potter Et La Chambre Des Secrets", "Mathieu", "Xbox", 30, 1, "Abracadabra !! Le célebre magicien est de retour !"),
(46, "Half-Life", "Corentin", "PC", 15, 32, "L'autre meilleur jeu de tout les temps (surtout ses mods)."),
(47, "Myst III Exile", "Sébastien", "Xbox", 49, 1, "Un jeu de réflexion"),
(48, "Wario World", "Sebastien", "Gamecube", 40, 4, "Wario vs Mario ! Qui gagnera ! ?"),
(49, "Rollercoaster Tycoon", "Florent", "Xbox", 29, 1, "Jeu de gestion d'un parc d'attraction"),
(50, "Splinter Cell", "Patrick", "Xbox", 53, 1, "Jeu magnifique !");

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Index pour la table `minichat`
--
ALTER TABLE `minichat`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `videogames`
--
ALTER TABLE `videogames`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `films`
--
ALTER TABLE `films`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `minichat`
--
ALTER TABLE `minichat`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `videogames`
--
ALTER TABLE `videogames`
  MODIFY `ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
