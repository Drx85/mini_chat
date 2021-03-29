-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 29 mars 2021 à 13:48
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `mini_chat_db`
--

DROP TABLE IF EXISTS `mini_chat_db`;
CREATE TABLE IF NOT EXISTS `mini_chat_db` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `user_message` varchar(255) NOT NULL,
  `chat_date` date NOT NULL,
  `chat_time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mini_chat_db`
--

INSERT INTO `mini_chat_db` (`id`, `pseudo`, `user_message`, `chat_date`, `chat_time`) VALUES
(1, 'Drx85', 'Test message n°1', '2021-03-21', '13:43:54'),
(2, 'Drx85', 'Test message n°2', '2021-03-21', '13:43:58'),
(3, 'Drx85', 'Test message n°3', '2021-03-21', '13:44:00'),
(4, 'Drx85', 'Test message n°4', '2021-03-21', '13:44:04'),
(5, 'Drx85', 'Test message n°5', '2021-03-21', '13:44:06'),
(6, 'Drx85', 'Test message n°6', '2021-03-21', '13:44:09'),
(7, 'Drx85', 'Test message n°7', '2021-03-21', '13:44:11'),
(8, 'Drx85', 'Test message n°8', '2021-03-21', '13:44:14'),
(9, 'Drx85', 'Test message n°9', '2021-03-21', '13:44:16'),
(10, 'Drx85', 'Test message n°10', '2021-03-21', '13:44:19'),
(11, 'Drx85', 'Test message n°11', '2021-03-21', '13:44:22'),
(12, 'Drx85', 'Test message n°12', '2021-03-21', '13:44:29'),
(13, 'Drx85', 'Test message n°13', '2021-03-21', '13:44:31'),
(14, 'Drx85', 'Test message n°14', '2021-03-21', '13:44:33'),
(15, 'Drx85', 'Test message n°15', '2021-03-21', '13:44:36'),
(16, 'Drx85', 'Test message n°16', '2021-03-21', '13:44:38'),
(17, 'Drx85', 'Test message n°17', '2021-03-21', '13:44:41'),
(18, 'Drx85', 'Test message n°18', '2021-03-21', '13:44:44'),
(19, 'Drx85', 'Test message n°19', '2021-03-21', '13:44:46'),
(20, 'Drx85', 'Test message n°20', '2021-03-21', '13:44:49'),
(21, 'Drx85', 'Test message n°21', '2021-03-21', '13:44:56'),
(22, 'Drx85', 'Test message n°22', '2021-03-21', '13:44:59'),
(23, 'Drx85', 'Test message n°23', '2021-03-21', '13:45:01'),
(24, 'Drx85', 'Test message n°24', '2021-03-21', '13:45:03'),
(25, 'Drx85', 'Test message n°25', '2021-03-21', '13:45:06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
