-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `site_vehicule`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `email` varchar(160) NOT NULL,
  `password` varchar(64) NOT NULL,
  `is_admin` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`) VALUES
(15, 'hakim', 'hako@hako.fr', '$2y$10$Q5EymJMbbj3Mia3Venl1F.klTByI9S/Oi.HjUR5Y.iZM/tfcUbIhq', 0),
(17, 'toto', 'toto@toto.fr', '$2y$10$.VGc/BovrEZZDeNuWmHxSer3oImA0CpuVraf.ndZC/mm3J73s6l8K', 0),
(16, 'admin', 'admin@admin.fr', '$2y$10$h91G9D9Roll7fC5F7QFP..0IH1BL3oaDf71PDCRHzW.4JJWgZNyK.', 0),
(14, 'hello', 'hello@world.fr', '$2y$10$MVcwFE1/rLOYsDDap/fdbe3O6BdwIQqM7.t7Kv.vp68rxVB6IBmpe', 0),
(18, 'user', 'user@user.fr', '$2y$10$/0YgzsnU.8CSWgxQKsXhB.JcicaRXDth1LYna/cXS5uk9lu3T0hpS', 0),
(19, 'user1', 'user1@u.fr', '$2y$10$EY..RpCFVpMZPXeAQuBxfOcsOygeV8pUAiYscJ2KRrED.9f9fPr6q', 0),
(20, 'tom', 'tom@tomus.fr', '$2y$10$cFyEuZTIwk2d3L51FRAOR.vwh6BzGR4Dv908LVAoBC5oWQb7ZlW36', 0),
(21, 'haha', 'haha@haha.fr', '$2y$10$XKpAWM24XsWzFj9xNeVzHOsSFxuGrokmm2AZJlm0aaLKMkXj4m8Tu', 0),
(22, 'bonjour', 'b@j.fr', '$2y$10$72Z3/yHKPz5KCR9sL0us8Oc15mfItVY6Bk49YC2Wuoh8QsWDCbQqu', 0),
(23, 'roger', 'roger@r.fr', '$2y$10$/kGEyqUROqANMDakaDownesQlZgK/jZRhxAN1UuZR1nNxyLENn1.O', 0);

-- --------------------------------------------------------

--
-- Structure de la table `vehicules`
--

DROP TABLE IF EXISTS `vehicules`;
CREATE TABLE IF NOT EXISTS `vehicules` (
  `marque` varchar(160) NOT NULL,
  `model` varchar(120) NOT NULL,
  `annee` year(4) NOT NULL,
  `moteur` varchar(120) NOT NULL,
  `places` int(11) NOT NULL,
  `commentaires` varchar(500) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `picture` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `model` (`model`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vehicules`
--

INSERT INTO `vehicules` (`marque`, `model`, `annee`, `moteur`, `places`, `commentaires`, `id`, `picture`) VALUES
('Nissan', 'GTR Nismo coupÃ©', 2020, 'Essence', 4, 'grzrtgrzrgrtgzr', 2, 'troisquartavant.jpg'),
('BMW', 'M4 competition (F82 coupé)', 2021, 'Essence', 4, '510cv, 1725kg  vitesse max 250 km/h,  0 à 100 3,9 sec', 3, 'téléchargement.jpg'),
('Audi', 'RS 6', 2021, 'Essence', 5, '600cv, 2150kg, vitesse max 250km/h, 0 à 100 3,6sec, boite auto', 4, 'téléchargementrs6.jpg'),
('Porsche', '911 GT3 RS (MK2 / phase 2)', 2018, 'Essence', 2, '520ch pour 1500kg / PDK 7 rapports / vitesse max : 312km/h / 0 à 100 en 3.2 sec', 5, 'porsche-911-gt3-rs.jpg'),
('Ford', 'Fiesta ST', 2022, 'Essence', 5, '200ch / boite manuelle / transmission avant / 1267 kg / vitesse max : 230km/h / 0à 100 en 6.5sec', 6, 'ford-fiesta.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
