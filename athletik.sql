-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 26 Juillet 2017 à 16:40
-- Version du serveur :  5.7.19-0ubuntu0.17.04.1
-- Version de PHP :  7.0.18-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `athletik`
--

-- --------------------------------------------------------

--
-- Structure de la table `athlete`
--

CREATE TABLE `athlete` (
  `id` int(11) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `birthdate` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `athlete`
--

INSERT INTO `athlete` (`id`, `firstname`, `lastname`, `birthdate`) VALUES
(1, 'Jean Claude', 'Duss', 1985),
(2, 'Bibi', 'Lafrite', 1965),
(3, 'Robert', 'Camembert', 1989),
(4, 'Christine', 'Boutin', 1992),
(5, 'Albert', 'Heinstein', 1995),
(6, 'Marguaret', 'Thatcher', 2003),
(7, 'Jules', 'Cesar', 1991),
(8, 'Momo', 'Ise', 1997),
(9, 'Sidharta', 'gautama', 1991),
(10, 'Adolf', 'Hitler', 2006),
(11, 'Oussama', 'Ben Laden', 2001),
(12, 'Jonnhy', 'Haliday', 1989),
(13, 'Justin', 'Bieber', 1982),
(14, 'Nicky', 'Minaj', 2006),
(15, 'Lionel', 'Duboeuf', 2004),
(16, 'Pika', 'Tchu', 1999),
(17, 'marion', 'Cueff', 1985);

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `athlete_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `athlete_id`) VALUES
(2, 'mayrone', 'mayrone', 'marioncueff@gmail.com', 'marioncueff@gmail.com', 1, NULL, '$2y$13$.XX.GOPDu.t86utvbDsjP.vUUQ1Mq0mcgRH.ioHwAuC1krwyVWpey', '2017-07-26 10:13:23', NULL, NULL, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}', NULL),
(3, 'totot', 'totot', 'tata@toto.plop', 'tata@toto.plop', 1, NULL, '$2y$13$AnthobQGDHNvRlpHXt4NIuCI5HLsvw6eZWSA0Q1HFYUZ/m4.4g6gS', '2017-07-26 10:10:08', NULL, NULL, 'a:0:{}', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `meeting`
--

CREATE TABLE `meeting` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `meeting`
--

INSERT INTO `meeting` (`id`, `name`, `description`, `date`) VALUES
(1, 'Peta Ouchnok', '3 parcours avec classements vous sont proposés : 10 km, 18 km, et 28 km.\r\nLa Roche Sports Nature organise le Trail de l\'Elorn, le dimanche 2 juillet 2017 au départ de La Roche Maurice.\r\n\r\nCe site vous permet de vous inscrire à l\'épreuve, et vous donne les infos pratiques sur le programme, les parcours, l\'accès... ', '2017-07-18'),
(2, 'Troufaillon Les oies', '3 parcours avec classements vous sont proposés : 10 km, 18 km, et 28 km.\r\nLa Roche Sports Nature organise le Trail de l\'Elorn, le dimanche 2 juillet 2017 au départ de La Roche Maurice.\r\n\r\nCe site vous permet de vous inscrire à l\'épreuve, et vous donne les infos pratiques sur le programme, les parcours, l\'accès... ', '2017-07-28');

-- --------------------------------------------------------

--
-- Structure de la table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `meeting_id` int(11) DEFAULT NULL,
  `athlete_id` int(11) DEFAULT NULL,
  `time` float NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `result`
--

INSERT INTO `result` (`id`, `meeting_id`, `athlete_id`, `time`, `points`) VALUES
(1, 1, 1, 2.48, 404),
(2, 1, 2, 3.45, 392),
(3, 1, 3, 2.39, 419),
(4, 1, 4, 2.45, 409),
(5, 1, 5, 3.2, 341),
(6, 1, 6, 3.56, 380),
(7, 1, 8, 2.56, 391),
(8, 1, 9, 3.25, 308),
(9, 1, 7, 3.12, 321),
(10, 1, 10, 4.2, 358),
(11, 1, 11, 4.3, 282),
(12, 1, 12, 5.2, 193),
(13, 1, 13, 2.3, 435),
(14, 1, 14, 3.12, 481),
(15, 1, 15, 4.59, 310),
(16, 1, 16, 2.53, 467);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `athlete`
--
ALTER TABLE `athlete`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`),
  ADD KEY `IDX_957A6479FE6BCB8B` (`athlete_id`);

--
-- Index pour la table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `athlete_id` (`athlete_id`),
  ADD KEY `meeting_id` (`meeting_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `athlete`
--
ALTER TABLE `athlete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD CONSTRAINT `FK_957A6479FE6BCB8B` FOREIGN KEY (`athlete_id`) REFERENCES `athlete` (`id`);

--
-- Contraintes pour la table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`athlete_id`) REFERENCES `athlete` (`id`),
  ADD CONSTRAINT `result_ibfk_2` FOREIGN KEY (`meeting_id`) REFERENCES `meeting` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
