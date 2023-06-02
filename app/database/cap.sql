-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 02 juin 2023 à 09:16
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cap`
--

-- --------------------------------------------------------

--
-- Structure de la table `biere`
--

DROP TABLE IF EXISTS `biere`;
CREATE TABLE IF NOT EXISTS `biere` (
  `id_biere` int NOT NULL,
  `Nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Prix` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Taux_alcool` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Piment` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Goût` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_biere`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `biere`
--

INSERT INTO `biere` (`id_biere`, `Nom`, `Description`, `Type`, `Prix`, `Taux_alcool`, `Piment`, `Goût`) VALUES
(1, 'P\'tite Nature', 'La P\'tite Nature est une bière rafraichissante bien qu\'elle soit pour les challengers les moins expérimentés, elle représente le départ d\'une aventure que vous n\'êtes pas prêts d\'oublier. Contenant 0% d\'alcool et aucune trace de piment, elle sera appréciée par les moins courageux du groupe.', 'Blanche', '5€', '0%', '0', 'Kiwi'),
(2, 'C\'est tout', 'La C\'est tout ? est une bière aromatisée pour des challengers avec un peu d\'expérience. Sans trace de piment et légèrement alcoolisée elle représente un challenge que même les plus anciens pourraient réussir.', 'Blanche', '5€', '2%', 'Pas pimenté', 'Myrtille'),
(3, 'Sapikote hein', 'La Sapikote hein !! est la première de nos bière qui vous fera zozoter. Contenant un léger niveau de piment et d\'alcool elle vous feras entrevoir le reste de l\'épreuve Cap. Les moins courageux n\'oseront pas la prendre au petit dej', 'Blanche', '5€', '4%', 'Un soupçon de piment', 'Ananas/Piment'),
(4, 'Lassécho', 'Il s\'agit de la 4ème étape de notre challenge ! La \"Lassécho\" ! Dans cette bière, vous retrouverez une ambiance chaleureuse remplie de festivité. Mais malgré un goût agréable de mangue exotique, le piment antillais commence à sérieusement se faire ressentir à travers notre boisson. Bon courage à celles et ceux voulant tenir tête à l\'avant-dernière étape de notre challenge.', 'Blanche', '5€', '4%', 'Légèrement relevé', 'Mangue/Piment'),
(5, 'Aysabrûle', 'La Aysabrûle est l\'ultime bière de notre challenge, réservé aux moins peureux, elle vous promet de vous brûler intérieurement. très pimentée et normalement alcoolisée, elle vous poussera à vous hydrater le plus vite possible.', 'Blanche', '5€', '6%', 'Très pimenté', 'Cerise/Piment');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int NOT NULL,
  `Nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Prenom` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Numero de telephone` int NOT NULL,
  `Mail` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Adresse` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Ville` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Code postal` int NOT NULL,
  PRIMARY KEY (`id_client`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int NOT NULL,
  `Date de commande` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Numero de commande` int NOT NULL,
  PRIMARY KEY (`id_commande`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
