-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 07 jan. 2023 à 12:21
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `supremecommunication`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `idArticle` int(11) NOT NULL,
  `nom` varchar(55) NOT NULL,
  `description` varchar(55) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `son` varchar(255) NOT NULL,
  `datepublier` datetime NOT NULL DEFAULT current_timestamp(),
  `vues` int(11) DEFAULT NULL,
  `idCategorie` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idArticle`, `nom`, `description`, `cover`, `son`, `datepublier`, `vues`, `idCategorie`) VALUES
(3, 'GEMEZI PALACE', 'BUT DO ', 'gp.jpg', 'Gamezi palace - BUT DO ( Audio Officiel 2020 prod by Gp-record ).mp4', '2022-06-30 00:00:00', 0, 10),
(4, 'Master sumi', 'le mali', 'Master.jpg', 'master.mp4', '2022-06-30 00:00:00', 0, 10),
(5, 'Tal b', 'Sauvage', 'tal.png', 'tal sauvage.mp4', '2022-06-30 00:00:00', 0, 10),
(6, 'lezby', 'le Mali', 'lezby.jpg', 'lezby le mali.mp4', '2022-06-30 00:00:00', 0, 10),
(7, 'Adji One', 'Tièkisè ya', 'ADJI-ONE.jpg', 'adji tiekise.mp4', '2022-06-30 00:00:00', NULL, 10),
(8, 'kante', 'ladebayo', 'kante.png', 'KANTÉ - LOYER (Vidéo 2021).mp4', '2022-06-30 00:00:00', NULL, 6);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idCategorie` int(11) NOT NULL,
  `nom` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `nom`) VALUES
(10, 'HipHOP');

-- --------------------------------------------------------

--
-- Structure de la table `dislike`
--

CREATE TABLE `dislike` (
  `idDislike` int(11) NOT NULL,
  `idArticle` int(11) NOT NULL,
  `idUser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `dislike`
--

INSERT INTO `dislike` (`idDislike`, `idArticle`, `idUser`) VALUES
(12, 6, NULL),
(13, 7, NULL),
(14, 7, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `idLike` int(11) NOT NULL,
  `idArticle` int(11) NOT NULL,
  `idUser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `likes`
--

INSERT INTO `likes` (`idLike`, `idArticle`, `idUser`) VALUES
(20, 7, NULL),
(21, 6, NULL),
(22, 6, NULL),
(23, 6, NULL),
(24, 6, NULL),
(25, 6, NULL),
(26, 6, NULL),
(27, 6, NULL),
(28, 6, NULL),
(29, 6, NULL),
(30, 6, NULL),
(31, 6, NULL),
(32, 6, NULL),
(33, 6, NULL),
(34, 6, NULL),
(35, 6, NULL),
(36, 6, NULL),
(37, 6, NULL),
(38, 6, NULL),
(39, 6, NULL),
(40, 4, NULL),
(41, 4, NULL),
(42, 4, NULL),
(43, 4, NULL),
(44, 4, NULL),
(45, 4, NULL),
(46, 4, NULL),
(47, 4, NULL),
(48, 4, NULL),
(49, 4, NULL),
(50, 4, NULL),
(51, 3, NULL),
(52, 3, NULL),
(53, 5, NULL),
(54, 5, NULL),
(55, 5, NULL),
(56, 5, NULL),
(57, 5, NULL),
(58, 5, NULL),
(59, 5, NULL),
(60, 7, NULL),
(61, 7, NULL),
(62, 7, NULL),
(63, 7, NULL),
(64, 7, NULL),
(65, 7, NULL),
(66, 7, NULL),
(67, 6, NULL),
(68, 3, NULL),
(69, 3, NULL),
(70, 3, NULL),
(71, 3, NULL),
(72, 3, NULL),
(73, 3, NULL),
(74, 3, NULL),
(75, 3, NULL),
(76, 5, NULL),
(77, 7, NULL),
(78, 6, NULL),
(79, 6, NULL),
(80, 6, NULL),
(81, 6, NULL),
(82, 6, NULL),
(83, 6, NULL),
(84, 6, NULL),
(85, 6, NULL),
(86, 6, NULL),
(87, 7, NULL),
(88, 7, NULL),
(89, 3, NULL),
(90, 4, NULL),
(91, 4, NULL),
(92, 4, NULL),
(93, 4, NULL),
(94, 4, NULL),
(95, 4, NULL),
(96, 4, NULL),
(97, 4, NULL),
(98, 5, NULL),
(99, 5, NULL),
(100, 3, NULL),
(101, 3, NULL),
(102, 3, NULL),
(103, 3, NULL),
(104, 3, NULL),
(105, 6, NULL),
(106, 6, NULL),
(107, 3, NULL),
(108, 8, NULL),
(109, 6, NULL),
(110, 6, NULL),
(111, 3, NULL),
(112, 3, NULL),
(113, 6, NULL),
(114, 8, NULL),
(115, 8, NULL),
(116, 8, NULL),
(117, 8, NULL),
(118, 8, NULL),
(119, 8, NULL),
(120, 8, NULL),
(121, 8, NULL),
(122, 8, NULL),
(123, 8, NULL),
(124, 8, NULL),
(125, 8, NULL),
(126, 8, NULL),
(127, 8, NULL),
(128, 8, NULL),
(129, 8, NULL),
(130, 8, NULL),
(131, 8, NULL),
(132, 8, NULL),
(133, 8, NULL),
(134, 8, NULL),
(135, 8, NULL),
(136, 8, NULL),
(137, 8, NULL),
(138, 8, NULL),
(139, 8, NULL),
(140, 8, NULL),
(141, 8, NULL),
(142, 8, NULL),
(143, 8, NULL),
(144, 8, NULL),
(145, 3, NULL),
(146, 3, NULL),
(147, 8, NULL),
(148, 7, NULL),
(149, 8, NULL),
(150, 3, NULL),
(151, 7, NULL),
(152, 8, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`idArticle`),
  ADD KEY `idCategorie` (`idCategorie`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idCategorie`);

--
-- Index pour la table `dislike`
--
ALTER TABLE `dislike`
  ADD PRIMARY KEY (`idDislike`),
  ADD KEY `idArticle` (`idArticle`);

--
-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`idLike`),
  ADD KEY `idArticle` (`idArticle`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `idArticle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `dislike`
--
ALTER TABLE `dislike`
  MODIFY `idDislike` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `idLike` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
