-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 05 déc. 2021 à 22:58
-- Version du serveur : 5.7.31
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `medias3`
--

-- --------------------------------------------------------

--
-- Structure de la table `annotations`
--

DROP TABLE IF EXISTS `annotations`;
CREATE TABLE IF NOT EXISTS `annotations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `annotation_media`
--

DROP TABLE IF EXISTS `annotation_media`;
CREATE TABLE IF NOT EXISTS `annotation_media` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_annotation` bigint(20) UNSIGNED NOT NULL,
  `id_media` bigint(20) UNSIGNED NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `annotation_media_id_annotation_foreign` (`id_annotation`),
  KEY `annotation_media_id_media_foreign` (`id_media`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `artistes`
--

DROP TABLE IF EXISTS `artistes`;
CREATE TABLE IF NOT EXISTS `artistes` (
  `id_artiste` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationalite` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_artiste`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `artiste_media`
--

DROP TABLE IF EXISTS `artiste_media`;
CREATE TABLE IF NOT EXISTS `artiste_media` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_artiste` bigint(20) UNSIGNED NOT NULL,
  `id_media` bigint(20) UNSIGNED NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `artiste_media_id_artiste_foreign` (`id_artiste`),
  KEY `artiste_media_id_media_foreign` (`id_media`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `texte` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `texte`, `created_at`, `updated_at`) VALUES
(1, 'tJ0eIVGZTe', NULL, NULL),
(2, 'j\'aime', NULL, '2021-12-04 13:03:17'),
(3, 'W2zoE3seEo', NULL, NULL),
(32, '(M) :cava', '2021-12-03 11:18:54', '2021-12-04 14:13:12'),
(31, '(M) :bon film', '2021-12-03 10:26:30', '2021-12-04 14:12:57'),
(8, 'aaaa', '2021-12-01 23:06:20', '2021-12-01 23:06:20'),
(30, 'film cava', '2021-12-03 10:25:13', '2021-12-03 10:25:13'),
(36, 'Bon Film, un des meilleurs', '2021-12-05 09:45:30', '2021-12-05 09:45:30'),
(14, 'this film is very good', '2021-12-01 23:44:20', '2021-12-01 23:44:20'),
(40, 'une des meilleurs histoires', '2021-12-05 17:49:14', '2021-12-05 17:49:14'),
(39, 'bon film je le recommande', '2021-12-05 17:47:53', '2021-12-05 17:47:53'),
(19, 'j\'ai aimé ce film je le recommande', '2021-12-03 08:45:37', '2021-12-03 08:45:37'),
(38, '(M) :j\'ai aimé ce film', '2021-12-05 16:50:16', '2021-12-05 16:54:26'),
(35, '(M) :tres bien', '2021-12-03 19:57:25', '2021-12-04 15:24:52'),
(34, '(M) :cava comme film', '2021-12-03 11:21:33', '2021-12-04 15:35:27'),
(33, '(M) :bien', '2021-12-03 11:21:16', '2021-12-04 15:24:27'),
(26, 'ok', '2021-12-03 10:09:02', '2021-12-03 10:09:02'),
(37, '(M) :bien', '2021-12-05 10:29:14', '2021-12-05 16:54:40'),
(29, '(M) :(M) :j\'ai pas aimé ce film', '2021-12-03 10:20:08', '2021-12-05 00:31:09'),
(41, '(M) :un tres bon film', '2021-12-05 18:23:16', '2021-12-05 18:28:39');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_media`
--

DROP TABLE IF EXISTS `commentaire_media`;
CREATE TABLE IF NOT EXISTS `commentaire_media` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_commentaire` bigint(20) UNSIGNED NOT NULL,
  `id_media` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `commentaire_media_id_commentaire_foreign` (`id_commentaire`),
  KEY `commentaire_media_id_media_foreign` (`id_media`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commentaire_media`
--

INSERT INTO `commentaire_media` (`id`, `id_commentaire`, `id_media`, `created_at`, `updated_at`) VALUES
(1, 15, 1, '2021-12-01 23:44:36', '2021-12-01 23:44:36'),
(2, 19, 1, '2021-12-03 08:46:21', '2021-12-03 08:46:21'),
(12, 30, 2, '2021-12-03 10:25:13', '2021-12-03 10:25:13'),
(11, 29, 2, '2021-12-03 10:20:08', '2021-12-03 10:20:08'),
(5, 21, 1, '2021-12-03 10:01:08', '2021-12-03 10:01:08'),
(17, 35, 1, '2021-12-03 19:57:25', '2021-12-03 19:57:25'),
(16, 34, 1, '2021-12-03 11:21:33', '2021-12-03 11:21:33'),
(15, 33, 1, '2021-12-03 11:21:16', '2021-12-03 11:21:16'),
(14, 32, 2, '2021-12-03 11:18:54', '2021-12-03 11:18:54'),
(13, 31, 1, '2021-12-03 10:26:30', '2021-12-03 10:26:30'),
(18, 36, 1, '2021-12-05 09:45:30', '2021-12-05 09:45:30'),
(19, 37, 27, '2021-12-05 10:29:14', '2021-12-05 10:29:14'),
(20, 38, 2, '2021-12-05 16:50:16', '2021-12-05 16:50:16'),
(21, 39, 7, '2021-12-05 17:47:53', '2021-12-05 17:47:53'),
(22, 40, 3, '2021-12-05 17:49:14', '2021-12-05 17:49:14'),
(23, 41, 2, '2021-12-05 18:23:16', '2021-12-05 18:23:16');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_user`
--

DROP TABLE IF EXISTS `commentaire_user`;
CREATE TABLE IF NOT EXISTS `commentaire_user` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_commentaire` bigint(20) UNSIGNED NOT NULL,
  `id_utilisateur` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `commentaire_user_id_commentaire_foreign` (`id_commentaire`),
  KEY `commentaire_user_id_utilisateur_foreign` (`id_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commentaire_user`
--

INSERT INTO `commentaire_user` (`id`, `id_commentaire`, `id_utilisateur`, `created_at`, `updated_at`) VALUES
(7, 21, 1959, '2021-12-03 09:53:13', '2021-12-03 09:53:13'),
(8, 21, 1959, '2021-12-03 09:54:20', '2021-12-03 09:54:20'),
(9, 21, 1959, '2021-12-03 10:01:08', '2021-12-03 10:01:08'),
(10, 24, 1959, '2021-12-03 10:05:19', '2021-12-03 10:05:19'),
(17, 31, 1959, '2021-12-03 10:26:30', '2021-12-03 10:26:30'),
(6, 19, 1959, '2021-12-03 08:46:21', '2021-12-03 08:46:21'),
(16, 30, 1959, '2021-12-03 10:25:13', '2021-12-03 10:25:13'),
(15, 29, 1959, '2021-12-03 10:20:08', '2021-12-03 10:20:08'),
(18, 32, 1959, '2021-12-03 11:18:54', '2021-12-03 11:18:54'),
(19, 33, 1960, '2021-12-03 11:21:16', '2021-12-03 11:21:16'),
(20, 34, 1960, '2021-12-03 11:21:33', '2021-12-03 11:21:33'),
(21, 35, 1959, '2021-12-03 19:57:25', '2021-12-03 19:57:25'),
(22, 36, 1959, '2021-12-05 09:45:30', '2021-12-05 09:45:30'),
(23, 37, 1964, '2021-12-05 10:29:14', '2021-12-05 10:29:14'),
(24, 38, 1959, '2021-12-05 16:50:16', '2021-12-05 16:50:16'),
(25, 39, 1967, '2021-12-05 17:47:53', '2021-12-05 17:47:53'),
(26, 40, 1967, '2021-12-05 17:49:14', '2021-12-05 17:49:14'),
(27, 41, 1967, '2021-12-05 18:23:16', '2021-12-05 18:23:16');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jaimes`
--

DROP TABLE IF EXISTS `jaimes`;
CREATE TABLE IF NOT EXISTS `jaimes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_utilisateurs` bigint(20) UNSIGNED NOT NULL,
  `id_media` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `jaimes_id_utilisateurs_foreign` (`id_utilisateurs`),
  KEY `jaimes_id_media_foreign` (`id_media`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jaimes`
--

INSERT INTO `jaimes` (`id`, `id_utilisateurs`, `id_media`, `created_at`, `updated_at`) VALUES
(5, 1959, 1, '2021-12-03 14:29:43', '2021-12-03 14:29:43'),
(2, 11, 1, '2021-12-02 10:22:12', '2021-12-02 10:22:12'),
(3, 11, 1, '2021-12-02 10:22:29', '2021-12-02 10:22:29'),
(6, 1959, 3, '2021-12-03 15:49:32', '2021-12-03 15:49:32'),
(7, 1959, 27, '2021-12-04 22:49:27', '2021-12-04 22:49:27'),
(8, 1964, 21, '2021-12-05 10:27:44', '2021-12-05 10:27:44'),
(9, 1964, 27, '2021-12-05 10:28:52', '2021-12-05 10:28:52'),
(10, 1959, 2, '2021-12-05 16:49:21', '2021-12-05 16:49:21'),
(11, 1965, 1, '2021-12-05 16:55:16', '2021-12-05 16:55:16'),
(12, 1967, 2, '2021-12-05 18:21:54', '2021-12-05 18:21:54');

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `id_media` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duree` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `annee` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_media`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `media`
--

INSERT INTO `media` (`id_media`, `type`, `titre`, `image`, `duree`, `annee`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Movie', 'The Shawshank Redemption', 'https://imdb-api.com/images/original/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_Ratio0.6791_AL_.jpg', '2h 22mins', '1994', 'Chronicles the experiences of a formerly successful banker as a prisoner in the gloomy jailhouse of Shawshank after being found guilty of a crime he did not commit. The film portrays the man\'s unique way of dealing with his new, torturous life; along the way he befriends a number of fellow prisoners, most notably a wise long-term inmate named Red.', NULL, NULL),
(2, 'Movie', 'The Godfather', 'https://imdb-api.com/images/original/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_Ratio0.7015_AL_.jpg', '2h 55mins', '1972', 'The Godfather \"Don\" Vito Corleone is the head of the Corleone mafia family in New York. He is at the event of his daughter\'s wedding. Michael, Vito\'s youngest son and a decorated WW II Marine is also present at the wedding. Michael seems to be uninterested in being a part of the family business. Vito is a powerful man, and is kind to all those who give him respect but is ruthless against those who do not. But when a powerful and treacherous rival wants to sell drugs and needs the Don\'s influence for the same, Vito refuses to do it. What follows is a clash between Vito\'s fading old values and the new ways which may cause Michael to do the thing he was most reluctant in doing and wage a mob war against all the other mafia families which could tear the Corleone family apart.', NULL, NULL),
(3, 'Movie', 'The Godfather: Part II', 'https://imdb-api.com/images/original/MV5BMWMwMGQzZTItY2JlNC00OWZiLWIyMDctNDk2ZDQ2YjRjMWQ0XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_Ratio0.7015_AL_.jpg', '3h 22mins', '1974', 'The continuing saga of the Corleone crime family tells the story of a young Vito Corleone growing up in Sicily and in 1910s New York; and follows Michael Corleone in the 1950s as he attempts to expand the family business into Las Vegas, Hollywood and Cuba.', NULL, NULL),
(4, 'Movie', 'The Dark Knight', 'https://imdb-api.com/images/original/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_Ratio0.6791_AL_.jpg', '2h 32mins', '2008', 'Set within a year after the events of Batman Begins (2005), Batman, Lieutenant James Gordon, and new District Attorney Harvey Dent successfully begin to round up the criminals that plague Gotham City, until a mysterious and sadistic criminal mastermind known only as \"The Joker\" appears in Gotham, creating a new wave of chaos. Batman\'s struggle against The Joker becomes deeply personal, forcing him to \"confront everything he believes\" and improve his technology to stop him. A love triangle develops between Bruce Wayne, Dent, and Rachel Dawes.', NULL, NULL),
(5, 'Movie', '12 Angry Men', 'https://imdb-api.com/images/original/MV5BMWU4N2FjNzYtNTVkNC00NzQ0LTg0MjAtYTJlMjFhNGUxZDFmXkEyXkFqcGdeQXVyNjc1NTYyMjg@._V1_Ratio0.6791_AL_.jpg', '1h 36mins', '1957', 'The defense and the prosecution have rested, and the jury is filing into the jury room to decide if a young man is guilty or innocent of murdering his father. What begins as an open-and-shut case of murder soon becomes a detective story that presents a succession of clues creating doubt, and a mini-drama of each of the jurors\' prejudices and preconceptions about the trial, the accused, AND each other. Based on the play, all of the action takes place on the stage of the jury room.', NULL, NULL),
(6, 'Movie', 'Schindler\'s List', 'https://imdb-api.com/images/original/MV5BNDE4OTMxMTctNmRhYy00NWE2LTg3YzItYTk3M2UwOTU5Njg4XkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_Ratio0.6791_AL_.jpg', '3h 15mins', '1993', 'Oskar Schindler is a vain and greedy German businessman who becomes an unlikely humanitarian amid the barbaric German Nazi reign when he feels compelled to turn his factory into a refuge for Jews. Based on the true story of Oskar Schindler who managed to save about 1100 Jews from being gassed at the Auschwitz concentration camp, it is a testament to the good in all of us.', NULL, NULL),
(7, 'Movie', 'The Lord of the Rings: The Return of the King', 'https://imdb-api.com/images/original/MV5BNzA5ZDNlZWMtM2NhNS00NDJjLTk4NDItYTRmY2EwMWZlMTY3XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_Ratio0.6791_AL_.jpg', '3h 21mins', '2003', 'The final confrontation between the forces of good and evil fighting for control of the future of Middle-earth. Frodo and Sam reach Mordor in their quest to destroy the One Ring, while Aragorn leads the forces of good against Sauron\'s evil army at the stone city of Minas Tirith.', NULL, NULL),
(8, 'Movie', 'Pulp Fiction', 'https://imdb-api.com/images/original/MV5BNGNhMDIzZTUtNTBlZi00MTRlLWFjM2ItYzViMjE3YzI5MjljXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_Ratio0.6866_AL_.jpg', '2h 34mins', '1994', 'Jules Winnfield (Samuel L. Jackson) and Vincent Vega (John Travolta) are two hit men who are out to retrieve a suitcase stolen from their employer, mob boss Marsellus Wallace (Ving Rhames). Wallace has also asked Vincent to take his wife Mia (Uma Thurman) out a few days later when Wallace himself will be out of town. Butch Coolidge (Bruce Willis) is an aging boxer who is paid by Wallace to lose his fight. The lives of these seemingly unrelated people are woven together comprising of a series of funny, bizarre and uncalled-for incidents.', NULL, NULL),
(9, 'Movie', 'The Good, the Bad and the Ugly', 'https://imdb-api.com/images/original/MV5BOTQ5NDI3MTI4MF5BMl5BanBnXkFtZTgwNDQ4ODE5MDE@._V1_Ratio0.6791_AL_.jpg', '2h 58mins', '1966', 'Blondie (The Good) (Clint Eastwood) is a professional gunslinger who is out trying to earn a few dollars. Angel Eyes (The Bad) (Lee Van Cleef) is a hitman who always commits to a task and sees it through, as long as he is paid to do so. And Tuco (The Ugly) (Eli Wallach) is a wanted outlaw trying to take care of his own hide. Tuco and Blondie share a partnership together making money off of Tuco\'s bounty, but when Blondie unties the partnership, Tuco tries to hunt down Blondie. When Blondie and Tuco come across a horse carriage loaded with dead bodies, they soon learn from the only survivor, Bill Carson (Antonio Casale), that he and a few other men have buried a stash of gold in a cemetery. Unfortunately, Carson dies and Tuco only finds out the name of the cemetery, while Blondie finds out the name on the grave. Now the two must keep each other alive in order to find the gold. Angel Eyes (who had been looking for Bill Carson) discovers that Tuco and Blondie met with Carson and knows ...', NULL, NULL),
(10, 'Movie', 'The Lord of the Rings: The Fellowship of the Ring', 'https://imdb-api.com/images/original/MV5BN2EyZjM3NzUtNWUzMi00MTgxLWI0NTctMzY4M2VlOTdjZWRiXkEyXkFqcGdeQXVyNDUzOTQ5MjY@._V1_Ratio0.6791_AL_.jpg', '2h 58mins', '2001', 'An ancient Ring thought lost for centuries has been found, and through a strange twist of fate has been given to a small Hobbit named Frodo. When Gandalf discovers the Ring is in fact the One Ring of the Dark Lord Sauron, Frodo must make an epic quest to the Cracks of Doom in order to destroy it. However, he does not go alone. He is joined by Gandalf, Legolas the elf, Gimli the Dwarf, Aragorn, Boromir, and his three Hobbit friends Merry, Pippin, and Samwise. Through mountains, snow, darkness, forests, rivers and plains, facing evil and danger at every corner the Fellowship of the Ring must go. Their quest to destroy the One Ring is the only hope for the end of the Dark Lords reign.', NULL, NULL),
(11, 'Movie', 'Fight Club', 'https://imdb-api.com/images/original/MV5BMmEzNTkxYjQtZTc0MC00YTVjLTg5ZTEtZWMwOWVlYzY0NWIwXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_Ratio0.6791_AL_.jpg', '2h 19mins', '1999', 'A nameless first person narrator (Edward Norton) attends support groups in attempt to subdue his emotional state and relieve his insomniac state. When he meets Marla (Helena Bonham Carter), another fake attendee of support groups, his life seems to become a little more bearable. However when he associates himself with Tyler (Brad Pitt) he is dragged into an underground fight club and soap making scheme. Together the two men spiral out of control and engage in competitive rivalry for love and power.', NULL, NULL),
(12, 'Movie', 'Forrest Gump', 'https://imdb-api.com/images/original/MV5BNWIwODRlZTUtY2U3ZS00Yzg1LWJhNzYtMmZiYmEyNmU1NjMzXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_Ratio0.6866_AL_.jpg', '2h 22mins', '1994', 'Forrest Gump is a simple man with a low I.Q. but good intentions. He is running through childhood with his best and only friend Jenny. His \'mama\' teaches him the ways of life and leaves him to choose his destiny. Forrest joins the army for service in Vietnam, finding new friends called Dan and Bubba, he wins medals, creates a famous shrimp fishing fleet, inspires people to jog, starts a ping-pong craze, creates the smiley, writes bumper stickers and songs, donates to people and meets the president several times. However, this is all irrelevant to Forrest who can only think of his childhood sweetheart Jenny Curran, who has messed up her life. Although in the end all he wants to prove is that anyone can love anyone.', NULL, NULL),
(13, 'Movie', 'Inception', 'https://imdb-api.com/images/original/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_Ratio0.6762_AL_.jpg', '2h 28min', '2010', 'Dom Cobb is a skilled thief, the absolute best in the dangerous art of extraction, stealing valuable secrets from deep within the subconscious during the dream state, when the mind is at its most vulnerable. Cobb&#39;s rare ability has made him a coveted player in this treacherous new world of corporate espionage, but it has also made him an international fugitive and cost him everything he has ever loved. Now Cobb is being offered a chance at redemption. One last job could give him his life back but only if he can accomplish the impossible, inception. Instead of the perfect heist, Cobb and his team of specialists have to pull off the reverse: their task is not to steal an idea, but to plant one. If they succeed, it could be the perfect crime. But no amount of careful planning or expertise can prepare the team for the dangerous enemy that seems to predict their every move. An enemy that only Cobb could have seen coming.', NULL, NULL),
(14, 'Movie', 'The Lord of the Rings: The Two Towers', 'https://imdb-api.com/images/original/MV5BZGMxZTdjZmYtMmE2Ni00ZTdkLWI5NTgtNjlmMjBiNzU2MmI5XkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_Ratio0.6791_AL_.jpg', '2h 59mins', '2002', 'The continuing quest of Frodo and the Fellowship to destroy the One Ring. Frodo and Sam discover they are being followed by the mysterious Gollum. Aragorn, the Elf archer Legolas, and Gimli the Dwarf encounter the besieged Rohan kingdom, whose once great King Theoden has fallen under Saruman\'s deadly spell.', NULL, NULL),
(15, 'Movie', 'Star Wars: Episode V - The Empire Strikes Back', 'https://imdb-api.com/images/original/MV5BYmU1NDRjNDgtMzhiMi00NjZmLTg5NGItZDNiZjU5NTU4OTE0XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_Ratio0.6791_AL_.jpg', '2h 4mins', '1980', 'Luke Skywalker, Han Solo, Princess Leia and Chewbacca face attack by the Imperial forces and its AT-AT walkers on the ice planet Hoth. While Han and Leia escape in the Millennium Falcon, Luke travels to Dagobah in search of Yoda. Only with the Jedi Master\'s help will Luke survive when the Dark Side of the Force beckons him into the ultimate duel with Darth Vader.', NULL, NULL),
(16, 'Movie', 'The Matrix', 'https://imdb-api.com/images/original/MV5BNzQzOTk3OTAtNDQ0Zi00ZTVkLWI0MTEtMDllZjNkYzNjNTc4L2ltYWdlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_Ratio0.6791_AL_.jpg', '2h 16mins', '1999', 'Thomas A. Anderson is a man living two lives. By day he is an average computer programmer and by night a hacker known as Neo. Neo has always questioned his reality, but the truth is far beyond his imagination. Neo finds himself targeted by the police when he is contacted by Morpheus, a legendary computer hacker branded a terrorist by the government. As a rebel against the machines, Neo must confront the agents: super-powerful computer programs devoted to stopping Neo and the entire human rebellion.', NULL, NULL),
(17, 'Movie', 'Goodfellas', 'https://imdb-api.com/images/original/MV5BY2NkZjEzMDgtN2RjYy00YzM1LWI4ZmQtMjIwYjFjNmI3ZGEwXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_Ratio0.6791_AL_.jpg', '2h 26mins', '1990', 'Henry Hill might be a small time gangster, who may have taken part in a robbery with Jimmy Conway and Tommy De Vito, two other gangsters who might have set their sights a bit higher. His two partners could kill off everyone else involved in the robbery, and slowly start to think about climbing up through the hierarchy of the Mob. Henry, however, might be badly affected by his partners\' success, but will he consider stooping low enough to bring about the downfall of Jimmy and Tommy?', NULL, NULL),
(18, 'Movie', 'One Flew Over the Cuckoo\'s Nest', 'https://imdb-api.com/images/original/MV5BZjA0OWVhOTAtYWQxNi00YzNhLWI4ZjYtNjFjZTEyYjJlNDVlL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_Ratio0.6791_AL_.jpg', '2h 13mins', '1975', 'McMurphy has a criminal past and has once again gotten himself into trouble and is sentenced by the court. To escape labor duties in prison, McMurphy pleads insanity and is sent to a ward for the mentally unstable. Once here, McMurphy both endures and stands witness to the abuse and degradation of the oppressive Nurse Ratched, who gains superiority and power through the flaws of the other inmates. McMurphy and the other inmates band together to make a rebellious stance against the atrocious Nurse.', NULL, NULL),
(19, 'Movie', 'Seven Samurai', 'https://imdb-api.com/images/original/MV5BOWE4ZDdhNmMtNzE5ZC00NzExLTlhNGMtY2ZhYjYzODEzODA1XkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_Ratio0.7090_AL_.jpg', '3h 27mins', '1954', 'A veteran samurai, who has fallen on hard times, answers a village\'s request for protection from bandits. He gathers 6 other samurai to help him, and they teach the townspeople how to defend themselves, and they supply the samurai with three small meals a day. The film culminates in a giant battle when 40 bandits attack the village.', NULL, NULL),
(20, 'Movie', 'Se7en', 'https://imdb-api.com/images/original/MV5BOTUwODM5MTctZjczMi00OTk4LTg3NWUtNmVhMTAzNTNjYjcyXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_Ratio0.6791_AL_.jpg', '2h 7mins', '1995', 'A film about two homicide detectives\' (Morgan Freeman and Brad Pitt) desperate hunt for a serial killer who justifies his crimes as absolution for the world\'s ignorance of the Seven Deadly Sins. The movie takes us from the tortured remains of one victim to the next as the sociopathic \"John Doe\" (Kevin Spacey) sermonizes to Detectives Somerset and Mills -- one sin at a time. The sin of Gluttony comes first and the murderer\'s terrible capacity is graphically demonstrated in the dark and subdued tones characteristic of film noir. The seasoned and cultured but jaded Somerset researches the Seven Deadly Sins in an effort to understand the killer\'s modus operandi while the bright but green and impulsive Detective Mills (Pitt) scoffs at his efforts to get inside the mind of a killer...', NULL, NULL),
(21, 'Movie', 'Superman', 'https://imdb-api.com/images/original/MV5BMzA0YWMwMTUtMTVhNC00NjRkLWE2ZTgtOWEzNjJhYzNiMTlkXkEyXkFqcGdeQXVyNjc1NTYyMjg@._V1_Ratio0.6762_AL_.jpg', '2h 23min', '1978', 'Just before the destruction of the planet Krypton, scientist Jor-El sends his infant son Kal-El on a spaceship to Earth. Raised by kindly farmers Jonathan and Martha Kent, young Clark discovers the source of his superhuman powers and moves to Metropolis to fight evil. As Superman, he battles the villainous Lex Luthor, while, as novice reporter Clark Kent, he attempts to woo co-worker Lois Lane', NULL, NULL),
(22, 'TVSeries', 'Lois & Clark: The New Adventures of Superman', 'https://imdb-api.com/images/original/MV5BZTU1ZGFjNzEtZWYzZC00ZmI0LTg2NmMtN2YyNTY4YzhlODIyXkEyXkFqcGdeQXVyMjExMjk0ODk@._V1_Ratio0.7388_AL_.jpg', '46min', '1993', 'This show was based on Superman (Dean Cain) being a Generation X man. In his twenties, somewhere Clark Kent (Dean Cain) must experience life as a pre-thirties pupil. Lois Lane (Teri Hatcher), as always, is by his side at the Daily Planet, adding that oh-so-ever romantic side to his life. The relationship between Lois and Clark, is as always, a platonic but on the edge of mad love, type of experience.', NULL, NULL),
(23, 'TVSeries', 'Adventures of Superman', 'https://imdb-api.com/images/original/MV5BZmYwMzY4OWMtZmYxMC00M2VmLWFlZDgtMWEyY2IzNDdjNWRmXkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_Ratio0.7544_AL_.jpg', '30min', '1952', '\"Faster than a speeding bullet! More powerful than a locomotive! Able to leap tall buildings at a single bound!\" Mild-mannered reporter for the Daily Planet is really the greatest superhero of them all who \"fights a never-ending battle for truth, justice, and the American way!\"', NULL, NULL),
(24, 'TVSeries', 'Smallville', 'https://imdb-api.com/images/original/MV5BYmNiNzlhOWItMDM5Mi00MGYzLWI1ZDYtNmI5NzI0MWFkMTIwXkEyXkFqcGdeQXVyNjU2NjA5NjM@._V1_Ratio0.7239_AL_.jpg', '1h 0min', '2001', 'The numerous miraculous rescues by the local wonder boy Clark Kent (Tom Welling) have aroused suspicions amongst colonials of Smallville, Kansas. Interestingly, the boy has managed to downplay his acts of various heroic egresses in the past. They say he\'s either too fast or has a penchant for finding trouble. He was found by Martha (Annette O\'Toole) and Jonathan Kent (John Schneider) on the day of an infamous meteor shower, and subsequently adopted. Clark\'s friend Lex Luthor (Michael Rosenbaum), the only heir of LuthorCorp, has been secretly investigating grounds for Clark\'s outlandish valor. However, on the face of it, Clark just seems to be a normal boy who\'s slightly more secretive than usual.', NULL, NULL),
(25, 'TVSeries', 'Superman and Lois', 'https://imdb-api.com/images/original/MV5BOTA2MDVhMWItNTYwYi00OTcyLWJjZmEtNTQ2NTAxMDQyYTQwXkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_Ratio0.6791_AL_.jpg', '42min', '2021', 'Superman &amp; Lois stars Tyler Hoechlin (Teen Wolf) and Elizabeth Tulloch (Grimm) as the world\'s most famous superhero and comic books\' most famous journalist as they deal with all the stress, pressures and complexities that come with being working parents in today\'s society.', NULL, NULL),
(26, 'Movie', 'The Godfather', 'https://imdb-api.com/images/original/MV5BM2MyNjYxNmUtYTAwNi00MTYxLWJmNWYtYzZlODY3ZTk3OTFlXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_Ratio0.7015_AL_.jpg', '2h 55mins', '1972', 'The Godfather \"Don\" Vito Corleone is the head of the Corleone mafia family in New York. He is at the event of his daughter\'s wedding. Michael, Vito\'s youngest son and a decorated WW II Marine is also present at the wedding. Michael seems to be uninterested in being a part of the family business. Vito is a powerful man, and is kind to all those who give him respect but is ruthless against those who do not. But when a powerful and treacherous rival wants to sell drugs and needs the Don\'s influence for the same, Vito refuses to do it. What follows is a clash between Vito\'s fading old values and the new ways which may cause Michael to do the thing he was most reluctant in doing and wage a mob war against all the other mafia families which could tear the Corleone family apart.', NULL, NULL),
(27, 'TVSeries', 'Game of Thrones', 'https://imdb-api.com/images/original/MV5BYTRiNDQwYzAtMzVlZS00NTI5LWJjYjUtMzkwNTUzMWMxZTllXkEyXkFqcGdeQXVyNDIzMzcwNjc@._V1_Ratio0.7313_AL_.jpg', '57mins', '2011', 'In the mythical continent of Westeros, several powerful families fight for control of the Seven Kingdoms. As conflict erupts in the kingdoms of men, an ancient enemy rises once again to threaten them all. Meanwhile, the last heirs of a recently usurped dynasty plot to take back their homeland from across the Narrow Sea.', NULL, NULL),
(28, 'TVSeries', 'Vikings', 'https://imdb-api.com/images/original/MV5BODk4ZjU0NDUtYjdlOS00OTljLTgwZTUtYjkyZjk1NzExZGIzXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_Ratio0.6791_AL_.jpg', '44mins', '2013', 'The adventures of a Ragnar Lothbrok: the greatest hero of his age. The series tells the saga of Ragnar\'s band of Viking brothers and his family as he rises to become King of the Viking tribes. As well as being a fearless warrior, Ragnar embodies the Norse traditions of devotion to the gods: legend has it that he was a direct descendant of Odin, the god of war and warriors.', NULL, NULL),
(29, 'TVSeries', 'Gotham', 'https://imdb-api.com/images/original/MV5BMTU5NjQ2MTU4NV5BMl5BanBnXkFtZTgwOTYyNTAwNzM@._V1_Ratio0.7985_AL_.jpg', '42min', '2014', 'In crime ridden Gotham City, Thomas and Martha Wayne are murdered before young Bruce Wayne\'s eyes. Although Gotham City Police Department detectives, James Gordon, and his cynical partner, Harvey Bullock, seem to solace\'s the case quickly, things are not so simple. Inspired by Bruce\'s traumatized desire for justice, Gordon vows to find it amid Gotham\'s corruption. Thus begins Gordon\'s lonely quest that would set him against his own comrades and the underworld with their own deadly rivalries and mysteries. In the coming wars, innocence will be lost and compromises will be made as some criminals will fall as casualties while others will rise as super villains. All the while, young Bruce observes this war with a growing obsession that would one day drive him to seek his own justice against the evil of Gotham as The Batman.', NULL, NULL),
(30, 'TVSeries', 'Power', 'https://imdb-api.com/images/original/MV5BYjllZjcwNjItMzc1OC00YjRkLWI5YzUtODM1YmEzNjFiYzNhXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_Ratio0.6791_AL_.jpg', '50mins', '2014', '\"Power\" is a visionary drama that straddles the glamorous Manhattan lifestyles of the rich and infamous and the underworld of the international drug trade. The cast is led by Omari Hardwick as James \"Ghost\" St. Patrick, a man trying to escape his role as a drug kingpin for a legitimized life in the elite of NYC; Joseph Sikora as his brother in arms in the drug business, Tommy Egan; Naturi Naughton plays Ghost\'s fierce wife Tasha St. Patrick; and Lela Loren is his first love, Assistant U.S. Attorney Angela Valdes.', NULL, NULL),
(31, 'TVSeries', 'Narcos', 'https://imdb-api.com/images/original/MV5BNmFjODU3YzgtMGUwNC00ZGI3LWFkZjQtMjkxZDc3NmQ1MzcyXkEyXkFqcGdeQXVyNjUwNzk3NDc@._V1_Ratio0.6791_AL_.jpg', '49mins', '2015', 'Narcos tells the true-life story of the growth and spread of cocaine drug cartels across the globe and attendant efforts of law enforcement to meet them head on in brutal, bloody conflict. It centers around the notorious Colombian cocaine kingpin Pablo Escobar (Wagner Moura) and Steve Murphy (Holbrook), a DEA agent sent to Colombia on a U.S. mission to capture him and ultimately kill him.', NULL, NULL),
(32, 'TVSeries', 'Breaking Bad', 'https://imdb-api.com/images/original/MV5BMjhiMzgxZTctNDc1Ni00OTIxLTlhMTYtZTA3ZWFkODRkNmE2XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_Ratio0.7164_AL_.jpg', '49mins', '2008', 'When chemistry teacher Walter White is diagnosed with Stage III cancer and given only two years to live, he decides he has nothing to lose. He lives with his teenage son, who has cerebral palsy, and his wife, in New Mexico. Determined to ensure that his family will have a secure future, Walt embarks on a career of drugs and crime. He proves to be remarkably proficient in this new world as he begins manufacturing and selling methamphetamine with one of his former students. The series tracks the impacts of a fatal diagnosis on a regular, hard working man, and explores how a fatal diagnosis affects his morality and transforms him into a major player of the drug trade.', NULL, NULL),
(33, 'TVSeries', 'Luke Cage', 'https://imdb-api.com/images/original/MV5BMjAxOTM3NjEwMV5BMl5BanBnXkFtZTgwNTkyOTY4NTM@._V1_Ratio0.6762_AL_.jpg', '55min', '2016', 'After a sabotaged experiment leaves him with super strength and unbreakable skin, Luke Cage becomes a fugitive trying to rebuild his life in modern day Harlem, New York City. But he is soon pulled out of the shadows and must fight a battle for the heart of his city - forcing him to confront a past he had tried to bury.', NULL, NULL),
(34, 'Movie', 'Saving Private Ryan', 'https://imdb-api.com/images/original/MV5BZjhkMDM4MWItZTVjOC00ZDRhLThmYTAtM2I5NzBmNmNlMzI1XkEyXkFqcGdeQXVyNDYyMDk5MTU@._V1_Ratio0.6791_AL_.jpg', '2h 49mins', '1998', 'Opening with the Allied invasion of Normandy on 6 June 1944, members of the 2nd Ranger Battalion under Cpt. Miller fight ashore to secure a beachhead. Amidst the fighting, two brothers are killed in action. Earlier in New Guinea, a third brother is KIA. Their mother, Mrs. Ryan, is to receive all three of the grave telegrams on the same day. The United States Army Chief of Staff, George C. Marshall, is given an opportunity to alleviate some of her grief when he learns of a fourth brother, Private James Ryan, and decides to send out 8 men (Cpt. Miller and select members from 2nd Rangers) to find him and bring him back home to his mother...', NULL, NULL),
(35, 'Movie', 'Interstellar', 'https://imdb-api.com/images/original/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_Ratio0.6791_AL_.jpg', '2h 49mins', '2014', 'Earth\'s future has been riddled by disasters, famines, and droughts. There is only one way to ensure mankind\'s survival: Interstellar travel. A newly discovered wormhole in the far reaches of our solar system allows a team of astronauts to go where no man has gone before, a planet that may have the right environment to sustain human life.', NULL, NULL),
(36, 'Movie', 'Spirited Away', 'https://imdb-api.com/images/original/MV5BMjlmZmI5MDctNDE2YS00YWE0LWE5ZWItZDBhYWQ0NTcxNWRhXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_Ratio0.6791_AL_.jpg', '2h 5mins', '2001', 'Chihiro and her parents are moving to a small Japanese town in the countryside, much to Chihiro\'s dismay. On the way to their new home, Chihiro\'s father makes a wrong turn and drives down a lonely one-lane road which dead-ends in front of a tunnel. Her parents decide to stop the car and explore the area. They go through the tunnel and find an abandoned amusement park on the other side, with its own little town. When her parents see a restaurant with great-smelling food but no staff, they decide to eat and pay later. However, Chihiro refuses to eat and decides to explore the theme park a bit more. She meets a boy named Haku who tells her that Chihiro and her parents are in danger, and they must leave immediately. She runs to the restaurant and finds that her parents have turned into pigs. In addition, the theme park turns out to be a town inhabited by demons, spirits, and evil gods. At the center of the town is a bathhouse where these creatures go to relax. The owner of the bathhouse ...', NULL, NULL),
(37, 'Movie', 'The Green Mile', 'https://imdb-api.com/images/original/MV5BMTUxMzQyNjA5MF5BMl5BanBnXkFtZTYwOTU2NTY3._V1_Ratio0.6791_AL_.jpg', '3h 9mins', '1999', 'Death Row guards at a penitentiary, in the 1930\'s, have a moral dilemma with their job when they discover one of their prisoners, a convicted murderer, has a special gift.', NULL, NULL),
(38, 'Movie', 'Parasite', 'https://imdb-api.com/images/original/MV5BYWZjMjk3ZTItODQ2ZC00NTY5LWE0ZDYtZTI3MjcwN2Q5NTVkXkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_Ratio0.6791_AL_.jpg', '2h 12mins', '2019', 'The Kims - mother and father Chung-sook and Ki-taek, and their young adult offspring, son Ki-woo and daughter Ki-jung - are a poor family living in a shabby and cramped half basement apartment in a busy lower working class commercial district of Seoul. Without even knowing it, they, especially Mr. and Mrs. Kim, literally smell of poverty. Often as a collective, they perpetrate minor scams to get by, and even when they have jobs, they do the minimum work required. Ki-woo is the one who has dreams of getting out of poverty by one day going to university. Despite not having that university education, Ki-woo is chosen by his university student friend Min, who is leaving to go to school, to take over his tutoring job to Park Da-hye, who Min plans to date once he returns to Seoul and she herself is in university. The Parks are a wealthy family who for four years have lived in their modernistic house designed by and the former residence of famed architect Namgoong. While Mr. and Mrs. Park ...', NULL, NULL),
(39, 'Movie', 'Saving Private Ryan', 'https://imdb-api.com/images/original/MV5BZjhkMDM4MWItZTVjOC00ZDRhLThmYTAtM2I5NzBmNmNlMzI1XkEyXkFqcGdeQXVyNDYyMDk5MTU@._V1_Ratio0.6791_AL_.jpg', '2h 49mins', '1998', 'Opening with the Allied invasion of Normandy on 6 June 1944, members of the 2nd Ranger Battalion under Cpt. Miller fight ashore to secure a beachhead. Amidst the fighting, two brothers are killed in action. Earlier in New Guinea, a third brother is KIA. Their mother, Mrs. Ryan, is to receive all three of the grave telegrams on the same day. The United States Army Chief of Staff, George C. Marshall, is given an opportunity to alleviate some of her grief when he learns of a fourth brother, Private James Ryan, and decides to send out 8 men (Cpt. Miller and select members from 2nd Rangers) to find him and bring him back home to his mother...', NULL, NULL),
(40, 'Movie', 'Interstellar', 'https://imdb-api.com/images/original/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_Ratio0.6791_AL_.jpg', '2h 49mins', '2014', 'Earth\'s future has been riddled by disasters, famines, and droughts. There is only one way to ensure mankind\'s survival: Interstellar travel. A newly discovered wormhole in the far reaches of our solar system allows a team of astronauts to go where no man has gone before, a planet that may have the right environment to sustain human life.', NULL, NULL),
(41, 'Movie', 'Spirited Away', 'https://imdb-api.com/images/original/MV5BMjlmZmI5MDctNDE2YS00YWE0LWE5ZWItZDBhYWQ0NTcxNWRhXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_Ratio0.6791_AL_.jpg', '2h 5mins', '2001', 'Chihiro and her parents are moving to a small Japanese town in the countryside, much to Chihiro\'s dismay. On the way to their new home, Chihiro\'s father makes a wrong turn and drives down a lonely one-lane road which dead-ends in front of a tunnel. Her parents decide to stop the car and explore the area. They go through the tunnel and find an abandoned amusement park on the other side, with its own little town. When her parents see a restaurant with great-smelling food but no staff, they decide to eat and pay later. However, Chihiro refuses to eat and decides to explore the theme park a bit more. She meets a boy named Haku who tells her that Chihiro and her parents are in danger, and they must leave immediately. She runs to the restaurant and finds that her parents have turned into pigs. In addition, the theme park turns out to be a town inhabited by demons, spirits, and evil gods. At the center of the town is a bathhouse where these creatures go to relax. The owner of the bathhouse ...', NULL, NULL),
(42, 'Movie', 'The Green Mile', 'https://imdb-api.com/images/original/MV5BMTUxMzQyNjA5MF5BMl5BanBnXkFtZTYwOTU2NTY3._V1_Ratio0.6791_AL_.jpg', '3h 9mins', '1999', 'Death Row guards at a penitentiary, in the 1930\'s, have a moral dilemma with their job when they discover one of their prisoners, a convicted murderer, has a special gift.', NULL, NULL),
(43, 'Movie', 'Parasite', 'https://imdb-api.com/images/original/MV5BYWZjMjk3ZTItODQ2ZC00NTY5LWE0ZDYtZTI3MjcwN2Q5NTVkXkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_Ratio0.6791_AL_.jpg', '2h 12mins', '2019', 'The Kims - mother and father Chung-sook and Ki-taek, and their young adult offspring, son Ki-woo and daughter Ki-jung - are a poor family living in a shabby and cramped half basement apartment in a busy lower working class commercial district of Seoul. Without even knowing it, they, especially Mr. and Mrs. Kim, literally smell of poverty. Often as a collective, they perpetrate minor scams to get by, and even when they have jobs, they do the minimum work required. Ki-woo is the one who has dreams of getting out of poverty by one day going to university. Despite not having that university education, Ki-woo is chosen by his university student friend Min, who is leaving to go to school, to take over his tutoring job to Park Da-hye, who Min plans to date once he returns to Seoul and she herself is in university. The Parks are a wealthy family who for four years have lived in their modernistic house designed by and the former residence of famed architect Namgoong. While Mr. and Mrs. Park ...', NULL, NULL),
(44, 'Movie', 'Léon: The Professional', 'https://imdb-api.com/images/original/MV5BODllNWE0MmEtYjUwZi00ZjY3LThmNmQtZjZlMjI2YTZjYmQ0XkEyXkFqcGdeQXVyNTc1NTQxODI@._V1_Ratio0.6791_AL_.jpg', '1h 50mins', '1994', 'After her father, step-mother, step-sister and little brother are killed by her father\'s employers, the 12-year-old daughter of an abject drug dealer manages to take refuge in the apartment of a professional hitman who at her request teaches her the methods of his job so she can take her revenge on the corrupt DEA agent who ruined her life by killing her beloved brother.', NULL, NULL),
(45, 'Movie', 'Hara-Kiri', 'https://imdb-api.com/images/original/MV5BYjBmYTQ1NjItZWU5MS00YjI0LTg2OTYtYmFkN2JkMmNiNWVkXkEyXkFqcGdeQXVyMTMxMTY0OTQ@._V1_Ratio0.7313_AL_.jpg', '2h 13mins', '1962', 'Peace in 17th-century Japan causes the Shogunate\'s breakup of warrior clans, throwing thousands of samurai out of work and into poverty. An honorable end to such fate under the samurai code is ritual suicide, or hara-kiri (self-inflicted disembowelment). An elder warrior, Hanshiro Tsugumo (Tatsuya Nakadai) seeks admittance to the house of a feudal lord to commit the act. There, he learns of the fate of his son-in-law, a young samurai who sought work at the house but was instead barbarically forced to commit traditional hara-kiri in an excruciating manner with a dull bamboo blade. In flashbacks the samurai tells the tragic story of his son-in-law, and how he was forced to sell his real sword to support his sick wife and child. Tsugumo thus sets in motion a tense showdown of revenge against the house.', NULL, NULL),
(46, 'Movie', 'The Pianist', 'https://imdb-api.com/images/original/MV5BOWRiZDIxZjktMTA1NC00MDQ2LWEzMjUtMTliZmY3NjQ3ODJiXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_Ratio0.7239_AL_.jpg', '2h 30mins', '2002', 'In this adaptation of the autobiography \"The Pianist: The Extraordinary True Story of One Man\'s Survival in Warsaw, 1939-1945,\" Wladyslaw Szpilman, a Polish Jewish radio station pianist, sees Warsaw change gradually as World War II begins. Szpilman is forced into the Warsaw Ghetto, but is later separated from his family during Operation Reinhard. From this time until the concentration camp prisoners are released, Szpilman hides in various locations among the ruins of Warsaw.', NULL, NULL),
(47, 'Movie', 'Terminator 2: Judgment Day', 'https://imdb-api.com/images/original/MV5BMGU2NzRmZjUtOGUxYS00ZjdjLWEwZWItY2NlM2JhNjkxNTFmXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_Ratio0.6791_AL_.jpg', '2h 17mins', '1991', 'Over 10 years have passed since the first machine called The Terminator tried to kill Sarah Connor and her unborn son, John. The man who will become the future leader of the human resistance against the Machines is now a healthy young boy. However, another Terminator, called the T-1000, is sent back through time by the supercomputer Skynet. This new Terminator is more advanced and more powerful than its predecessor and its mission is to kill John Connor when he\'s still a child. However, in the Internet and John do not have to face the threat of the T-1000 alone. Another Terminator (identical to the same model that tried and failed to kill Sarah Connor in 1984) is also sent back through time to protect them. Now, the battle for tomorrow has begun.', NULL, NULL),
(48, 'Movie', 'Back to the Future', 'https://imdb-api.com/images/original/MV5BZmU0M2Y1OGUtZjIxNi00ZjBkLTg1MjgtOWIyNThiZWIwYjRiXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_Ratio0.6791_AL_.jpg', '1h 56mins', '1985', 'Marty McFly, a typical American teenager of the Eighties, is accidentally sent back to 1955 in a plutonium-powered DeLorean \"time machine\" invented by a slightly mad scientist. During his often hysterical, always amazing trip back in time, Marty must make certain his teenage parents-to-be meet and fall in love - so he can get back to the future.', NULL, NULL),
(49, 'Movie', 'Cinema Paradiso', 'https://imdb-api.com/images/original/MV5BM2FhYjEyYmYtMDI1Yy00YTdlLWI2NWQtYmEzNzAxOGY1NjY2XkEyXkFqcGdeQXVyNTA3NTIyNDg@._V1_Ratio0.6791_AL_.jpg', '2h 35mins', '1988', 'A boy who grew up in a native Sicilian Village returns home as a famous director after receiving news about the death of an old friend. Told in a flashback, Salvatore reminiscences about his childhood and his relationship with Alfredo, a projectionist at Cinema Paradiso. Under the fatherly influence of Alfredo, Salvatore fell in love with film making, with the duo spending many hours discussing about films and Alfredo painstakingly teaching Salvatore the skills that became a stepping stone for the young boy into the world of film making. The film brings the audience through the changes in cinema and the dying trade of traditional film making, editing and screening. It also explores a young boy\'s dream of leaving his little town to foray into the world outside.', NULL, NULL),
(50, 'Movie', 'Alien', 'https://imdb-api.com/images/original/MV5BMmQ2MmU3NzktZjAxOC00ZDZhLTk4YzEtMDMyMzcxY2IwMDAyXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_Ratio0.6791_AL_.jpg', '1h 57mins', '1979', 'In the distant future, the crew of the commercial spaceship Nostromo are on their way home when they pick up a distress call from a distant moon. The crew are under obligation to investigate and the spaceship descends on the moon afterwards. After a rough landing, three crew members leave the spaceship to explore the area on the moon. At the same time as they discover a hive colony of some unknown creature, the ship\'s computer deciphers the message to be a warning, not a distress call. When one of the eggs is disturbed, the crew realizes that they are not alone on the spaceship and they must deal with the consequences.', NULL, NULL),
(51, 'Movie', 'Apocalypse Now', 'https://imdb-api.com/images/original/MV5BMDdhODg0MjYtYzBiOS00ZmI5LWEwZGYtZDEyNDU4MmQyNzFkXkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_Ratio0.6791_AL_.jpg', '2h 27mins', '1979', 'It is the height of the war in Vietnam, and U.S. Army Captain Willard is sent by Colonel Lucas and a General to carry out a mission that, officially, \'does not exist - nor will it ever exist\'. The mission: To seek out a mysterious Green Beret Colonel, Walter Kurtz, whose army has crossed the border into Cambodia and is conducting hit-and-run missions against the Viet Cong and NVA. The army believes Kurtz has gone completely insane and Willard\'s job is to eliminate him. Willard, sent up the Nung River on a U.S. Navy patrol boat, discovers that his target is one of the most decorated officers in the U.S. Army. His crew meets up with surfer-type Lt-Colonel Kilgore, head of a U.S Army helicopter cavalry group which eliminates a Viet Cong outpost to provide an entry point into the Nung River. After some hair-raising encounters, in which some of his crew are killed, Willard, Lance and Chef reach Colonel Kurtz\'s outpost, beyond the Do Lung Bridge. Now, after becoming prisoners of Kurtz, will...', NULL, NULL),
(52, 'Movie', 'Memento', 'https://imdb-api.com/images/original/MV5BZTcyNjk1MjgtOWI3Mi00YzQwLWI5MTktMzY4ZmI2NDAyNzYzXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_Ratio0.6791_AL_.jpg', '1h 53mins', '2000', 'Memento chronicles two separate stories of Leonard, an ex-insurance investigator who can no longer build new memories, as he attempts to find the murderer of his wife, which is the last thing he remembers. One story line moves forward in time while the other tells the story backwards revealing more each time.', NULL, NULL),
(53, 'Movie', 'Indiana Jones and the Raiders of the Lost Ark', 'https://imdb-api.com/images/original/MV5BMjA0ODEzMTc1Nl5BMl5BanBnXkFtZTcwODM2MjAxNA@@._V1_Ratio0.6791_AL_.jpg', '1h 55mins', '1981', 'The year is 1936. An archeology professor named Indiana Jones is venturing in the jungles of South America searching for a golden statue. Unfortunately, he sets off a deadly trap but miraculously escapes. Then, Jones hears from a museum curator named Marcus Brody about a biblical artifact called The Ark of the Covenant, which can hold the key to humanly existence. Jones has to venture to vast places such as Nepal and Egypt to find this artifact. However, he will have to fight his enemy Rene Belloq and a band of Nazis in order to reach it.', NULL, NULL),
(54, 'Movie', 'The Great Dictator', 'https://imdb-api.com/images/original/MV5BMmExYWJjNTktNGUyZS00ODhmLTkxYzAtNWIzOGEyMGNiMmUwXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_Ratio0.6791_AL_.jpg', '2h 5mins', '1940', '20 years after the end of WWI, in which the nation of Tomainia was on the losing side, Adenoid Hynkel has risen to power as the ruthless dictator of the country. He believes in a pure Aryan state and the decimation of the Jews. This situation is unknown to a simple Jewish Tomainian barber who has been hospitalized since a WWI battle. Upon his release the barber, who had been suffering from memory loss about the war, is shown the new persecuted life of the Jews by many living in the Jewish ghetto, including a washerwoman named Hannah with whom he begins a relationship. The barber is ultimately spared such persecution by Commander Schultz, whom he saved in that WWI battle. The lives of all Jews in Tomainia are eventually spared with a policy shift by Hynkel himself, who is doing so for ulterior motives. But those motives include a desire for world domination, starting with the invasion of neighboring Osterlich, which may be threatened by Benzino Napaloni, the dictator of neighboring ...', NULL, NULL),
(55, 'Movie', 'The Lives of Others', 'https://imdb-api.com/images/original/MV5BOThkM2EzYmMtNDE3NS00NjlhLTg4YzktYTdhNzgyOWY3ZDYzXkEyXkFqcGdeQXVyNzQzNzQxNzI@._V1_Ratio0.7015_AL_.jpg', '2h 17mins', '2006', 'Gerd Wiesler is an officer with the Stasi, the East German secret police. The film begins in 1984 when Wiesler attends a play written by Georg Dreyman, who is considered by many to be the ultimate example of the loyal citizen. Wiesler has a gut feeling that Dreyman can\'t be as ideal as he seems, and believes surveillance is called for. The Minister of Culture agrees but only later does Wiesler learn that the Minister sees Dreyman as a rival and lusts after his partner Christa-Maria. The more time he spends listening in on them, the more he comes to care about them. The once rigid Stasi officer begins to intervene in their lives, in a positive way, protecting them whenever possible. Eventually, Wiesler\'s activities catch up to him and while there is no proof of wrongdoing, he finds himself in menial jobs - until the unbelievable happens.', NULL, NULL),
(56, 'Movie', 'Django Unchained', 'https://imdb-api.com/images/original/MV5BMjIyNTQ5NjQ1OV5BMl5BanBnXkFtZTcwODg1MDU4OA@@._V1_Ratio0.6791_AL_.jpg', '2h 45mins', '2012', 'In 1858, a bounty-hunter named King Schultz seeks out a slave named Django and buys him because he needs him to find some men he is looking for. After finding them, Django wants to find his wife, Broomhilda, who along with him were sold separately by his former owner for trying to escape. Schultz offers to help him if he chooses to stay with him and be his partner. Eventually they learn that she was sold to a plantation in Mississippi. Knowing they can\'t just go in and say they want her, they come up with a plan so that the owner will welcome them into his home and they can find a way.', NULL, NULL),
(57, 'Movie', 'Paths of Glory', 'https://imdb-api.com/images/original/MV5BNjViMmRkOTEtM2ViOS00ODg0LWJhYWEtNTBlOGQxNDczOGY3XkEyXkFqcGdeQXVyMDI2NDg0NQ@@._V1_Ratio0.7239_AL_.jpg', '1h 28mins', '1957', 'The futility and irony of the war in the trenches in WWI is shown as a unit commander in the French army must deal with the mutiny of his men and a glory-seeking general after part of his force falls back under fire in an impossible attack.', NULL, NULL),
(58, 'Movie', 'Sunset Blvd.', 'https://imdb-api.com/images/original/MV5BMTU0NTkyNzYwMF5BMl5BanBnXkFtZTgwMDU0NDk5MTI@._V1_Ratio0.6791_AL_.jpg', '1h 50mins', '1950', 'In Hollywood of the 50\'s, the obscure screenplay writer Joe Gillis is not able to sell his work to the studios, is full of debts and is thinking in returning to his hometown to work in an office. While trying to escape from his creditors, he has a flat tire and parks his car in a decadent mansion in Sunset Boulevard. He meets the owner and former silent-movie star Norma Desmond, who lives alone with her butler and driver Max Von Mayerling. Norma is demented and believes she will return to the cinema industry, and is protected and isolated from the world by Max, who was her director and husband in the past and still loves her. Norma proposes Joe to move to the mansion and help her in writing a screenplay for her comeback to the cinema, and the small-time writer becomes her lover and gigolo. When Joe falls in love for the young aspirant writer Betty Schaefer, Norma becomes jealous and completely insane and her madness leads to a tragic end.', NULL, NULL),
(59, 'Movie', 'WALL·E', 'https://imdb-api.com/images/original/MV5BMjExMTg5OTU0NF5BMl5BanBnXkFtZTcwMjMxMzMzMw@@._V1_Ratio0.6791_AL_.jpg', '1h 38mins', '2008', 'In a distant, but not so unrealistic, future where mankind has abandoned earth because it has become covered with trash from products sold by the powerful multi-national Buy N Large corporation, WALL-E, a garbage collecting robot has been left to clean up the mess. Mesmerized with trinkets of Earth\'s history and show tunes, WALL-E is alone on Earth except for a sprightly pet cockroach. One day, EVE, a sleek (and dangerous) reconnaissance robot, is sent to Earth to find proof that life is once again sustainable. WALL-E falls in love with EVE. WALL-E rescues EVE from a dust storm and shows her a living plant he found amongst the rubble. Consistent with her \"directive\", EVE takes the plant and automatically enters a deactivated state except for a blinking green beacon. WALL-E, doesn\'t understand what has happened to his new friend, but, true to his love, he protects her from wind, rain, and lightning, even as she is unresponsive. One day a massive ship comes to reclaim EVE, but WALL-E, ...', NULL, NULL),
(60, 'Movie', 'Avengers: Infinity War', 'https://imdb-api.com/images/original/MV5BMjMxNjY2MDU1OV5BMl5BanBnXkFtZTgwNzY1MTUwNTM@._V1_Ratio0.6791_AL_.jpg', '2h 29mins', '2018', 'As the Avengers and their allies have continued to protect the world from threats too large for any one hero to handle, a new danger has emerged from the cosmic shadows: Thanos. A despot of intergalactic infamy, his goal is to collect all six Infinity Stones, artifacts of unimaginable power, and use them to inflict his twisted will on all of reality. Everything the Avengers have fought for has led up to this moment, the fate of Earth and existence has never been more uncertain.', NULL, NULL),
(61, 'Movie', 'Witness for the Prosecution', 'https://imdb-api.com/images/original/MV5BNDQwODU5OWYtNDcyNi00MDQ1LThiOGMtZDkwNWJiM2Y3MDg0XkEyXkFqcGdeQXVyMDI2NDg0NQ@@._V1_Ratio0.6791_AL_.jpg', '1h 56mins', '1957', 'Ailing barrister Sir Wilfrid Robarts is thrust back into the courtroom in what becomes one of the most unusual and eventful murder case of the lawyer\'s career when he finds himself defending Leonard Vole, a man being tried for the murder of a wealthy woman. With Robarts choosing to represent him, the two find themselves up against Leonard\'s cold-hearted wife, Christine - who, in a surprising turn of events, chooses to appear in court against her husband.', NULL, NULL),
(62, 'Movie', 'The Shining', 'https://imdb-api.com/images/original/MV5BZWFlYmY2MGEtZjVkYS00YzU4LTg0YjQtYzY1ZGE3NTA5NGQxXkEyXkFqcGdeQXVyMTQxNzMzNDI@._V1_Ratio0.6791_AL_.jpg', '2h 26mins', '1980', 'Haunted by a persistent writer\'s block, the aspiring author and recovering alcoholic, Jack Torrance, drags his wife, Wendy, and his gifted son, Danny, up snow-capped Colorado\'s secluded Overlook Hotel after taking up a job as an off-season caretaker. As the cavernous hotel shuts down for the season, the manager gives Jack a grand tour, and the facility\'s chef, the ageing Mr Hallorann, has a fascinating chat with Danny about a rare psychic gift called \"The Shining\", making sure to warn him about the hotel\'s abandoned rooms, and, in particular, the off-limits Room 237. However, instead of overcoming the dismal creative rut, little by little, Jack starts losing his mind, trapped in an unforgiving environment of seemingly endless snowstorms, and a gargantuan silent prison riddled with strange occurrences and eerie visions. Now, the incessant voices inside Jack\'s head demand sacrifice. Is Jack capable of murder?', NULL, NULL),
(63, 'Movie', 'Spider-Man: Into the Spider-Verse', 'https://imdb-api.com/images/original/MV5BMjMwNDkxMTgzOF5BMl5BanBnXkFtZTgwNTkwNTQ3NjM@._V1_Ratio0.6791_AL_.jpg', '1h 57mins', '2018', 'Phil Lord and Christopher Miller, the creative minds behind The Lego Movie and 21 Jump Street, bring their unique talents to a fresh vision of a different Spider-Man Universe, with a groundbreaking visual style that\'s the first of its kind. \"Spider-Man(TM): Into the Spider-Verse\" introduces Brooklyn teen Miles Morales (Shameik Moore), and the limitless possibilities of the Spider-Verse, where more than one can wear the mask.', NULL, NULL);
INSERT INTO `media` (`id_media`, `type`, `titre`, `image`, `duree`, `annee`, `description`, `created_at`, `updated_at`) VALUES
(64, 'Movie', 'Dr. Strangelove or: How I Learned to Stop Worrying and Love the Bomb', 'https://imdb-api.com/images/original/MV5BZWI3ZTMxNjctMjdlNS00NmUwLWFiM2YtZDUyY2I3N2MxYTE0XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_Ratio0.6791_AL_.jpg', '1h 35mins', '1964', 'Paranoid Brigadier General Jack D. Ripper of Burpelson Air Force Base, believing that fluoridation of the American water supply is a Soviet plot to poison the U.S. populace, is able to deploy through a back door mechanism a nuclear attack on the Soviet Union without the knowledge of his superiors, including the Chair of the Joint Chiefs of Staff, General Buck Turgidson, and President Merkin Muffley. Only Ripper knows the code to recall the B-52 bombers and he has shut down communication in and out of Burpelson as a measure to protect this attack. Ripper\'s executive officer, RAF Group Captain Lionel Mandrake (on exchange from Britain), who is being held at Burpelson by Ripper, believes he knows the recall codes if he can only get a message to the outside world. Meanwhile at the Pentagon War Room, key persons including Muffley, Turgidson and nuclear scientist and adviser, a former Nazi named Dr. Strangelove, are discussing measures to stop the attack or mitigate its blow-up into an all ...', NULL, NULL),
(65, 'Movie', 'Princess Mononoke', 'https://imdb-api.com/images/original/MV5BNGIzY2IzODQtNThmMi00ZDE4LWI5YzAtNzNlZTM1ZjYyYjUyXkEyXkFqcGdeQXVyODEzNjM5OTQ@._V1_Ratio0.6791_AL_.jpg', '2h 14mins', '1997', 'While protecting his village from rampaging boar-god/demon, a confident young warrior, Ashitaka, is stricken by a deadly curse. To save his life, he must journey to the forests of the west. Once there, he\'s embroiled in a fierce campaign that humans were waging on the forest. The ambitious Lady Eboshi and her loyal clan use their guns against the gods of the forest and a brave young woman, Princess Mononoke, who was raised by a wolf-god. Ashitaka sees the good in both sides and tries to stem the flood of blood. This is met by animosity by both sides as they each see him as supporting the enemy.', NULL, NULL),
(66, 'Movie', 'Oldboy', 'https://imdb-api.com/images/original/MV5BMTI3NTQyMzU5M15BMl5BanBnXkFtZTcwMTM2MjgyMQ@@._V1_Ratio0.6791_AL_.jpg', '2h 0mins', '2003', 'Abducted on a rainy night in 1988, the obnoxious drunk, Oh Dae-Su, much to his surprise, wakes up locked in a windowless and dilapidated hotel room, for an unknown reason. There, his invisible and pitiless captors will feed him, clothe him, and sedate him to avert a desperate suicide--and as his only companion and a window to the world is the TV in his stark cell--the only thing that helps Oh Dae-Su keep going is his daily journal. Then, unexpectedly, after fifteen long years in captivity, the perplexed prisoner is deliberately released, encouraged to track down his tormentor to finally get his retribution. However, who would hate Oh Dae-Su so much he would deny him of a quick and clean death?', NULL, NULL),
(67, 'Movie', 'Joker', 'https://imdb-api.com/images/original/MV5BNGVjNWI4ZGUtNzE0MS00YTJmLWE0ZDctN2ZiYTk2YmI3NTYyXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_Ratio0.6791_AL_.jpg', '2h 2mins', '2019', 'Arthur Fleck works as a clown and is an aspiring stand-up comic. He has mental health issues, part of which involves uncontrollable laughter. Times are tough and, due to his issues and occupation, Arthur has an even worse time than most. Over time these issues bear down on him, shaping his actions, making him ultimately take on the persona he is more known as...Joker.', NULL, NULL),
(68, 'Movie', 'Your Name.', 'https://imdb-api.com/images/original/MV5BODRmZDVmNzUtZDA4ZC00NjhkLWI2M2UtN2M0ZDIzNDcxYThjL2ltYWdlXkEyXkFqcGdeQXVyNTk0MzMzODA@._V1_Ratio0.6791_AL_.jpg', '1h 46mins', '2016', 'Mitsuha is the daughter of the mayor of a small mountain town. She\'s a straightforward high school girl who lives with her sister and her grandmother and has no qualms about letting it be known that she\'s uninterested in Shinto rituals or helping her father\'s electoral campaign. Instead she dreams of leaving the boring town and trying her luck in Tokyo. Taki is a high school boy in Tokyo who works part-time in an Italian restaurant and aspires to become an architect or an artist. Every night he has a strange dream where he becomes...a high school girl in a small mountain town.', NULL, NULL),
(69, 'monga', 'One Piece', 'https://media.senscritique.com/media/000015702798/100/One_Piece.jpg', '50min', '1997', 'Les meilleures mangas Shōnen', NULL, NULL),
(70, 'monga', 'Dragon Ball ', 'https://media.senscritique.com/media/000019266699/100/Dragon_Ball.png', '32min', '1984', 'Les meilleures BD éditées par Glénat', NULL, NULL),
(71, 'monga', 'Death Note', 'https://media.senscritique.com/media/000015559402/100/Death_Note.jpg', '40min', '2003', 'Les meilleurs mangas édités par Kana', NULL, NULL),
(72, 'monga', 'Berserk', 'https://media.senscritique.com/media/000005359259/100/Berserk.jpg', '53', '1989', 'Les BD avec les héros les plus badass', NULL, NULL),
(73, 'monga', 'Fullmetal Alchemist', 'https://media.senscritique.com/media/000019267150/100/Fullmetal_Alchemist.jpg', '23min', '2001', 'Les meilleurs mangas édités par Kurokawa', NULL, NULL),
(74, 'monga', 'Naruto ', 'https://media.senscritique.com/media/000015536243/100/Naruto.jpg', '40min', '1999', 'Les meilleurs mangas édités par Kana', NULL, NULL),
(75, 'monga', 'Akira ', 'https://media.senscritique.com/media/000019241465/100/Akira.png', '10min', '1982', 'Les meilleures BD de science-fiction\r\nLes meilleurs mangas Seinen', NULL, NULL),
(76, 'monga', 'L\'Attaque des Titans ', 'https://media.senscritique.com/media/000015702899/100/L_Attaque_des_Titans.jpg', '40min', '2009', 'Les meilleurs mangas édités par Pika\r\nLes BD qui ont changé votre vie\r\nLes meilleures mangas Shōnen\r\nLes meilleures BD avec des mondes imaginaires\r\nLes meilleures BD des années 2000\r\nLes meilleures BD de 2013\r\nLes BD avec les meilleurs méchants\r\nLes BD avec les héros les plus badass', NULL, NULL),
(77, 'monga', 'GTO', 'https://media.senscritique.com/media/000020130593/100/GTO.png', '23min', '1997', 'Les meilleurs mangas édités par Pika\r\nLes meilleures BD sur le milieu scolaire\r\nLes BD aux héros les plus originaux\r\nLes meilleures mangas Shōnen\r\nLes BD aux héros les plus charismatiques\r\nLes BD avec les héros les plus badass\r\nLes BD les plus drôles\r\nLes meilleures BD des années 1990\r\nLes BD qui ont changé votre vie\r\nLes BD que vous recommandez le plus à vos amis', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `media_layliste`
--

DROP TABLE IF EXISTS `media_layliste`;
CREATE TABLE IF NOT EXISTS `media_layliste` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_playliste` bigint(20) UNSIGNED NOT NULL,
  `id_media` bigint(20) UNSIGNED NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_layliste_id_playliste_foreign` (`id_playliste`),
  KEY `media_layliste_id_media_foreign` (`id_media`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `media_playliste`
--

DROP TABLE IF EXISTS `media_playliste`;
CREATE TABLE IF NOT EXISTS `media_playliste` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_playliste` bigint(20) UNSIGNED NOT NULL,
  `id_media` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_playliste_id_playliste_foreign` (`id_playliste`),
  KEY `media_playliste_id_media_foreign` (`id_media`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `media_playliste`
--

INSERT INTO `media_playliste` (`id`, `id_playliste`, `id_media`, `created_at`, `updated_at`) VALUES
(1, 9, 1, '2021-12-02 15:53:03', '2021-12-02 15:53:03'),
(2, 6, 2, '2021-12-02 15:56:06', '2021-12-02 15:56:06'),
(3, 22, 21, NULL, NULL),
(4, 22, 22, NULL, NULL),
(5, 22, 23, NULL, NULL),
(6, 22, 24, NULL, NULL),
(7, 22, 25, NULL, NULL),
(8, 23, 2, NULL, NULL),
(9, 23, 3, NULL, NULL),
(10, 24, 19, NULL, NULL),
(11, 24, 20, NULL, NULL),
(12, 26, 1, '2021-12-05 09:54:22', '2021-12-05 09:54:22');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=199 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(187, '2014_10_12_000000_create_users_table', 6),
(164, '2014_10_12_100000_create_password_resets_table', 1),
(165, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(166, '2019_08_19_000000_create_failed_jobs_table', 1),
(167, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(168, '2021_11_27_113128_create_artistes_table', 1),
(188, '2021_11_27_113324_create_media_table', 7),
(198, '2021_11_27_113343_create_roles_table', 14),
(171, '2021_11_27_113436_create_commentaires_table', 1),
(192, '2021_11_27_113459_create_vues_table', 11),
(191, '2021_11_27_113517_create_jaimes_table', 10),
(174, '2021_11_27_113542_create_playlistes_table', 1),
(175, '2021_11_27_113811_create_annotations_table', 1),
(194, '2021_11_27_181834_create_media_playliste_table', 13),
(177, '2021_11_27_182127_create_annotation_media_table', 1),
(178, '2021_11_28_100033_create_sessions_table', 1),
(179, '2021_11_28_142314_create_artiste_media_table', 1),
(193, '2021_11_28_142531_create_playliste_user_table', 12),
(190, '2021_11_28_162318_create_commentaire_media_table', 9),
(189, '2021_11_28_164813_create_commentaire_user_table', 8),
(186, '2021_11_28_170006_create_role_user_table', 5);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `playlistes`
--

DROP TABLE IF EXISTS `playlistes`;
CREATE TABLE IF NOT EXISTS `playlistes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `playlistes`
--

INSERT INTO `playlistes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(17, 'salam', '2021-12-02 22:42:32', '2021-12-02 22:42:32'),
(16, 'salam', '2021-12-02 22:41:39', '2021-12-02 22:41:39'),
(15, 'achraf', '2021-12-02 22:32:39', '2021-12-02 22:32:39'),
(14, 'testplayliste', '2021-12-02 22:26:34', '2021-12-02 22:26:34'),
(13, 'pl1', '2021-12-02 21:54:51', '2021-12-02 21:54:51'),
(11, 'achrafPlayliste', '2021-12-02 19:36:47', '2021-12-02 19:36:47'),
(18, 'salam', '2021-12-02 22:43:46', '2021-12-02 22:43:46'),
(19, 'maplayliste', '2021-12-03 10:28:58', '2021-12-03 10:28:58'),
(22, 'Marvel', NULL, NULL),
(23, 'GodFather', NULL, NULL),
(24, 'seven', NULL, NULL),
(25, 'playlist3', '2021-12-05 09:46:27', '2021-12-05 09:46:27'),
(26, 'playliste5', '2021-12-05 09:53:24', '2021-12-05 09:53:24'),
(27, 'abouPlayliste', '2021-12-05 17:25:54', '2021-12-05 17:25:54'),
(28, 'abouplaylist', '2021-12-05 18:22:32', '2021-12-05 18:22:32');

-- --------------------------------------------------------

--
-- Structure de la table `playliste_user`
--

DROP TABLE IF EXISTS `playliste_user`;
CREATE TABLE IF NOT EXISTS `playliste_user` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_playliste` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `playliste_user_id_user_foreign` (`id_user`),
  KEY `playliste_user_id_playliste_foreign` (`id_playliste`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `playliste_user`
--

INSERT INTO `playliste_user` (`id`, `id_playliste`, `id_user`, `created_at`, `updated_at`) VALUES
(22, 27, 1959, '2021-12-05 17:25:54', '2021-12-05 17:25:54'),
(21, 26, 1964, '2021-12-05 10:29:24', '2021-12-05 10:29:24'),
(20, 26, 1959, '2021-12-05 09:54:22', '2021-12-05 09:54:22'),
(19, 26, 1959, '2021-12-05 09:53:24', '2021-12-05 09:53:24'),
(9, 11, 1959, '2021-12-02 21:54:28', '2021-12-02 21:54:28'),
(7, 11, 11, '2021-12-02 19:36:47', '2021-12-02 19:36:47'),
(14, 19, 1959, '2021-12-03 10:28:58', '2021-12-03 10:28:58'),
(17, 22, 1959, '2021-12-04 10:42:22', '2021-12-04 10:42:22'),
(18, 25, 1959, '2021-12-05 09:46:27', '2021-12-05 09:46:27'),
(23, 28, 1967, '2021-12-05 18:22:32', '2021-12-05 18:22:32'),
(24, 22, 1967, '2021-12-05 18:25:10', '2021-12-05 18:25:10');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'utilisateur',
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `roles_id_user_foreign` (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_role` bigint(20) UNSIGNED NOT NULL,
  `id_utilisateur` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_id_role_foreign` (`id_role`),
  KEY `role_user_id_utilisateur_foreign` (`id_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `role_user`
--

INSERT INTO `role_user` (`id`, `id_role`, `id_utilisateur`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('JXIyFFgs3LtgtquK3UJFYPRMQb6PM8Rwqit8uW88', 1959, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36 OPR/81.0.4196.60', 'YTo3OntzOjM6InVybCI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTQ6Imh0dHA6Ly9sb2NhbGhvc3QvdGVzdF9maW5hbC9jYXRhbG9ndWUvcHVibGljL2Rhc2hib2FyZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NjoiX3Rva2VuIjtzOjQwOiI3N0xFakdGcVpGOWt4V0Rab0xhOUJjOUNuN21PcjBPc1hhejVtOHBrIjtzOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxOTU5O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkTi80ak1xSXVxc2VpYUZFREJPM0llLktWWjRCTWwuOWgycXl6QTRPVDNCRkdNcHNKM296RnkiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJE4vNGpNcUl1cXNlaWFGRURCTzNJZS5LVlo0Qk1sLjloMnF5ekE0T1QzQkZHTXBzSjNvekZ5Ijt9', 1638732715);

-- --------------------------------------------------------

--
-- Structure de la table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `teams_user_id_index` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 12, 'tara\'s Team', 1, '2021-11-30 08:03:57', '2021-11-30 08:03:57'),
(2, 1958, 'ach1\'s Team', 1, '2021-11-30 13:15:54', '2021-11-30 13:15:54'),
(3, 1959, 'test\'s Team', 1, '2021-12-02 21:45:10', '2021-12-02 21:45:10'),
(4, 1960, 'bd\'s Team', 1, '2021-12-03 11:20:20', '2021-12-03 11:20:20'),
(5, 1963, 'AchrafBc\'s Team', 1, '2021-12-04 20:14:31', '2021-12-04 20:14:31'),
(6, 1964, 'alAb\'s Team', 1, '2021-12-05 10:26:07', '2021-12-05 10:26:07'),
(7, 1965, 'mod\'s Team', 1, '2021-12-05 10:46:02', '2021-12-05 10:46:02'),
(8, 1966, 'achraf\'s Team', 1, '2021-12-05 12:45:22', '2021-12-05 12:45:22'),
(9, 1967, 'aboubakr\'s Team', 1, '2021-12-05 14:48:28', '2021-12-05 14:48:28');

-- --------------------------------------------------------

--
-- Structure de la table `team_invitations`
--

DROP TABLE IF EXISTS `team_invitations`;
CREATE TABLE IF NOT EXISTS `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `team_user`
--

DROP TABLE IF EXISTS `team_user`;
CREATE TABLE IF NOT EXISTS `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banni` tinyint(1) DEFAULT '0',
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'utilisateur',
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=1968 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `nom`, `prenom`, `email`, `email_verified_at`, `password`, `remember_token`, `banni`, `role`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1962, '2login', '2nom', '2prenom', '2email@gmail.com', NULL, '2password', NULL, 0, 'Moderateur', NULL, NULL, NULL, '2021-12-05 00:01:25'),
(1961, '1login', '1nom', '1prenom', '1email@gmail.com', NULL, '1password', NULL, 0, 'Moderateur', NULL, NULL, NULL, '2021-12-05 16:45:51'),
(3, '3login', '3nom', '3prenom', '3email@gmail.com', NULL, '3password', NULL, 1, 'administrateur', NULL, NULL, NULL, '2021-12-03 22:40:51'),
(5, '5login', '5nom', '5prenom', '5email@gmail.com', NULL, '5password', NULL, 0, 'utilisateur', NULL, NULL, NULL, NULL),
(6, '6login', '6nom', '6prenom', '6email@gmail.com', NULL, '6password', NULL, 1, 'Moderateur', NULL, NULL, NULL, '2021-12-05 00:01:45'),
(7, '7login', '7nom', '7prenom', '7email@gmail.com', NULL, '7password', NULL, 0, 'utilisateur', NULL, NULL, NULL, NULL),
(8, '8login', '8nom', '8prenom', '8email@gmail.com', NULL, '8password', NULL, 0, 'utilisateur', NULL, NULL, NULL, NULL),
(9, '9login', '9nom', '9prenom', '9email@gmail.com', NULL, '9password', NULL, 0, 'utilisateur', NULL, NULL, NULL, NULL),
(10, '10login', '10nom', '10prenom', '10email@gmail.com', NULL, '10password', NULL, 0, 'utilisateur', NULL, NULL, NULL, NULL),
(11, 'ach1', 'bouachrine', 'achraf', 'bouachrine@gmail.com', NULL, '$2y$10$UtdpPgj.e4w6uogKfC8saezDCYdhLxX3OnwlQS8ITn3n7B2SH51hO', NULL, 0, 'utilisateur', NULL, NULL, '2021-11-30 13:15:54', '2021-11-30 13:24:37'),
(1959, 'test', 'test', 'test', 'test@gmai.com', NULL, '$2y$10$N/4jMqIuqseiaFEDBO3Ie.KVZ4BMl.9h2qyzA4OT3BFGMpsJ3ozFy', 'ZmTBzF5qEWVZDP8CQED7hrNrk2YbsiSC4Fw8HqSf9PynvcFMoE4GE5VXDgg3', 0, 'administrateur', 3, '1638729038.png', '2021-12-02 21:45:10', '2021-12-05 17:30:38'),
(1960, 'bd', 'achraf', 'b', 'o@gmail.com', NULL, '$2y$10$Cg8FrWG5rQngQulfM51aw.pMq55xZpgCSFhgYeCjOmdr6p9ik0pHe', NULL, 0, 'utilisateur', NULL, NULL, '2021-12-03 11:20:20', '2021-12-03 11:20:20'),
(1963, 'AchrafBc', 'bouachrine', 'achraf', 'bouachrineachraf@gmail.com', NULL, '$2y$10$Y7cTrIr7r5ohPg7ajOROkO7SLL50sHysqfCTIS/4wRH68vhTwrLre', NULL, 0, 'utilisateur', NULL, NULL, '2021-12-04 20:14:31', '2021-12-04 20:14:31'),
(1965, 'mod', 'moder', 'mod', 'mod@gmail.com', NULL, '$2y$10$nAXv5kE6gfSgyjfa658j2OXsURUNLaU3muEek0N4.6tPE345dgPCi', NULL, 0, 'Moderateur', NULL, NULL, '2021-12-05 10:46:02', '2021-12-05 10:46:02'),
(1966, 'achraf bouachrine', 'achraf bouachrine', 'achraf bouachrine', 'bcachraf12@gmail.com', NULL, '$2y$10$9E.cxyhrzScCsRWzFUv88eoSQNutK2vAsg7c3OeIbS.4OW440kReS', NULL, 0, 'utilisateur', NULL, NULL, '2021-12-05 12:45:22', '2021-12-05 12:45:22'),
(1967, 'aboubakr', 'Alaoui', 'aboubakr', 'aboubakr@gmail.com', NULL, '$2y$10$aKpSC/E9R/HxWahTUiuZieI0jFszoNdj.1unBTMPjNBxcPZ4doDDC', NULL, 0, 'utilisateur', NULL, '1638732241.png', '2021-12-05 14:48:28', '2021-12-05 18:24:01');

-- --------------------------------------------------------

--
-- Structure de la table `vues`
--

DROP TABLE IF EXISTS `vues`;
CREATE TABLE IF NOT EXISTS `vues` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_utilisateurs` bigint(20) UNSIGNED NOT NULL,
  `id_media` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vues_id_utilisateurs_foreign` (`id_utilisateurs`),
  KEY `vues_id_media_foreign` (`id_media`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `vues`
--

INSERT INTO `vues` (`id`, `id_utilisateurs`, `id_media`, `created_at`, `updated_at`) VALUES
(1, 11, 1, '2021-12-02 10:56:56', '2021-12-02 10:56:56'),
(2, 1959, 2, '2021-12-03 11:17:56', '2021-12-03 11:17:56'),
(3, 1959, 1, '2021-12-03 14:28:56', '2021-12-03 14:28:56'),
(4, 1959, 27, '2021-12-04 22:49:30', '2021-12-04 22:49:30'),
(5, 1964, 27, '2021-12-05 10:28:56', '2021-12-05 10:28:56'),
(6, 1967, 2, '2021-12-05 18:22:04', '2021-12-05 18:22:04');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
