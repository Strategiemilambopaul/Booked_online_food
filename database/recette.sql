-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 03, 2024 at 08:51 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recette`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `subject` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `id_user`, `subject`, `content`) VALUES
(2, 5, 'appreciation', 'vraiment j\'ai hâte de repasser encore. '),
(3, 1, 'appreciation', 'cela était un régale, vous êtes la meilleurs de toutes les services que j\'ai eu à visiter'),
(6, 4, 'appreciation', 'vos plats sont vraiment délicieux'),
(7, 6, 'C\'était un regale', 'vraiment le plat était un regale'),
(8, 4, 'regale', 'je vraiment aimer du service que vous avez proposer');

-- --------------------------------------------------------

--
-- Table structure for table `plats`
--

CREATE TABLE `plats` (
  `id` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `photo_path` varchar(50) NOT NULL,
  `prix` varchar(70) NOT NULL,
  `category` varchar(70) NOT NULL,
  `details` varchar(255) NOT NULL DEFAULT 'C''est un plat qui est fortement consommé dans le secteur congolais avec la culture ngala'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `plats`
--

INSERT INTO `plats` (`id`, `nom`, `photo_path`, `prix`, `category`, `details`) VALUES
(1, 'Mbisi ya kokawuka na mbika', 'mbika.jpg', '13.500 fc', 'mbisi', 'C\'est un plat qui est fortement mangé avec un accompagnement selon votre choix'),
(2, 'Pondu ya malili', 'pondu.jpg', '25.000 fc', 'Makassa', 'C\'est un plat qui est regorge en elle, des protéines idéals pour la santé'),
(3, 'Mbisi ya mboto', 'mboto.jpg', '30.000 fc', 'mbisi', 'Le mboto est une jonction des mélanges qui aboutissent à un véritable régale'),
(4, 'Mbisi ya  mayi ba yita', 'yita.jpg', '5.000 fc', 'mbisi', 'le mbisi ba yita est un excellent choix pour assurer sa journée'),
(5, 'ngoukasa', 'ngoukasa.jpg', '17.500 fc', 'mbisi', 'C\'est un plat qui est fortement consommé dans le secteur congolais avec la culture ngala'),
(6, 'Pondu na mbala', 'mbala.jpg', '20.000 fc', 'mbisi', 'Ce mélange fait ressortir en lui le sens de la créativité'),
(7, 'Liboke ya ngolo', 'ngolo.jpg', '10.000 fc', 'mbisi', 'Le ngolo est un mbisi qui peut se prépare diverses manières comme en faisant un liboke'),
(8, 'Liboke ya malangwa', 'malangwa.jpg', '10.000 fc', 'mbisi', 'Le malangwa disperse un excellent régale lorsqu\'il est préparé en liboke'),
(9, 'Liboke ya mbembe', 'mbembe.jpg', '13.000 fc', 'mbisi', 'Le liboke ya mbembe est un plat préparé avec tant de délicace pour une meilleur présentation'),
(10, 'Dongo dongo', 'dongo.jpg', '15.000 fc', 'petit poids', 'C\'est un plat qui est fortement consommé dans le secteur congolais avec la culture ngala'),
(11, 'Nzombo na biso', 'biso.jpg', '20.000 fc', 'mbisi', 'C\'est un plat qui est fortement consommé dans le secteur congolais  avec un accompagnement des diverses compliments'),
(12, 'Nzombo ya sauce', 'sauce.jpg', '17.000 fc', 'mbisi', 'C\'est un plat qui est fortement consommé dans le secteur ngala elle traduit ainsi leur culture'),
(13, 'Liboke', 'liboke.jpg', '18.000 fc', 'Mbisi', 'Liboke est une manière de préparé un plat avec des concepts naturels'),
(14, 'liboke ya monzanda', 'monzanda.jpg', '23.000 fc', 'mbisi', 'C\'est un plat qui est fortement consommé dans le secteur congolais avec la culture ngala'),
(15, 'sombo ( porc sauvage )', 'sombo.jpg', '21.000 fc', 'musuni', 'La viande de sombo est un repas vraiment délicieux'),
(16, 'pondu ya libodo', 'libodo.jpg', '5.000 fc', 'Makasa', 'C\'est un plat qui est fortement consommé dans le secteur congolais avec la culture ngala');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `id_plat` int NOT NULL,
  `content` text NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `id_user`, `id_plat`, `content`, `date`, `time`) VALUES
(1, 1, 3, 'je hâte d\'en gouter cher dame', '2024-08-03', '22:19'),
(7, 5, 8, 'j\'aimerais bien gouter à la recette de Mungunsu avec  tand des plaisirs', '2024-08-04', '12:12'),
(8, 6, 3, 'ma recette préferé, le saveur offert sur un plat délicieux est un regale', '2024-08-04', '13:14'),
(9, 6, 5, 'reservez moi un bon plat avec cette recette, tellement des années que j\'en ai mangé', '2024-08-04', '10:21'),
(10, 6, 5, 'vraiment de la bonne nourriture pour une bonne cause', '2024-08-04', '10:48'),
(11, 4, 1, 'besoin d\'un liboke', '2024-08-04', '12:47'),
(12, 4, 3, 'je pourrais passer après mes services', '2024-08-04', '09:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `statut` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nom`, `email`, `password`, `statut`) VALUES
(1, 'strategie', 'pmilambo47@gmail.com', 'd827eb711dc0d40de2429833a9d9f349', 'user'),
(4, 'Pascal', 'strategie@gmail.com', '4f835678691c653d7e614aaad5d2c866', 'user'),
(5, 'paola', 'paola78@gamil.com', '9b90243fc64bd4be8c113d8ea912006e', 'user'),
(6, 'Abigaelle', 'abigaelle34@gmail.com', '1c57245e959898c1b5e5a0b87fbc83f3', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plats`
--
ALTER TABLE `plats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `plats`
--
ALTER TABLE `plats`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
