-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 مايو 2024 الساعة 14:59
-- إصدار الخادم: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- بنية الجدول `administrateurs`
--

CREATE TABLE `administrateurs` (
  `id` int(11) NOT NULL,
  `utilisateur_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `administrateurs`
--

INSERT INTO `administrateurs` (`id`, `utilisateur_id`) VALUES
(2, 39);

-- --------------------------------------------------------

--
-- بنية الجدول `articlelikes`
--

CREATE TABLE `articlelikes` (
  `LikeID` int(11) NOT NULL,
  `ArticleID` int(11) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `LikedDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `articlelikes`
--

INSERT INTO `articlelikes` (`LikeID`, `ArticleID`, `UserID`, `LikedDate`) VALUES
(1, 3, 23, '2024-05-13 13:49:29'),
(2, 3, 17, '2024-05-04 18:23:09'),
(3, 1, 29, '2024-05-13 18:25:29'),
(4, 3, 27, '2024-05-13 18:34:42'),
(6, 4, 15, '2024-05-13 18:42:44'),
(8, 6, 17, '2024-05-13 19:28:40'),
(46, 3, 29, '2024-05-14 14:47:02'),
(50, 9, 29, '2024-05-14 14:50:42'),
(74, 7, 15, '2024-05-14 15:10:21'),
(91, 6, 15, '2024-05-14 15:41:01'),
(92, 10, 15, '2024-05-14 15:41:09'),
(96, 8, 29, '2024-05-14 16:19:42'),
(154, 5, 30, '2024-05-15 21:14:52'),
(157, 8, 37, '2024-05-16 08:37:09'),
(159, 6, 38, '2024-05-16 08:50:23'),
(160, 10, 38, '2024-05-16 08:50:27'),
(161, 8, 38, '2024-05-16 08:50:31'),
(167, 10, 30, '2024-05-16 15:01:40'),
(169, 9, 30, '2024-05-16 15:02:09');

-- --------------------------------------------------------

--
-- بنية الجدول `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date_creation` date DEFAULT NULL,
  `auteur_id` int(11) DEFAULT NULL,
  `categorie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `image`, `date_creation`, `auteur_id`, `categorie_id`) VALUES
(1, 'Two arrested after Leeds', 'It is also believed an object was thrown at the man, who suffered a cut to his chin, the force added.\r\n\r\nHe was seen by paramedics at the scene and did not require further treatment.\r\n\r\nPolice said a man in his late teens was arrested on suspicion of assault GBH.\r\n\r\nAnother man, in his 50s, was arrested on suspicion of assaulting an emergency worker.\r\n\r\nBoth men were in custody on Sunday night.\r\n\r\nOfficers believe another man was also involved in the incident and said enquiries were ongoing to locate him.', 'plane tach header2.jpg', '2024-05-08', 28, 1),
(2, 'Ukraine war: Russia \'advancing from', 'The warning from Kharkivs governor Oleh Syniehubov comes as a Ukrainian soldier takes the unusual step of publicly criticising Ukraine preparations to stop Russia from pushing into the northeast of the country in a Facebook pos writin  could die and no one will hear the truth', 'plane tach header2.jpg', '2024-05-04', 24, 1),
(3, 'More than 500 workers at Dounreay', 'Unite union members at the plant in the Scottish Highlands will walk out on Wednesday after rejecting a revised pay offer from employer Nuclear Restoration Services (NRS)', 'plane tach header2.jpg', '2024-05-09', 24, 2),
(4, 'Recyclables to go in one bin under', 'Under new plans, people will be able to put plastic, metal, glass, paper and card in one bin. Councils will also be able to co-collect food and garden waste.', 'plane tach header2.jpg', '2024-05-03', 24, 2),
(5, 'Under new plans, people willcollect ', 'Under new plans, people will be able to put plastic, metal, glass, paper and card in one bin. Councils will also be able to co-collect food and garden waste.', 'plane tach header2.jpg', '2024-05-03', 24, 3),
(6, 'Law allowing asylum seekers', 'Law allowing asylum seekersLaw allowing asylum seekersLaw allowing asylum seekersLaw allowing asylum seekersLaw allowing asylum seekers', 'Screenshot 2024-05-09 080644.png', '2024-05-10', 28, 4),
(7, 'Rwanda disapplied by court', 'Rwanda disapplied by courtRwanda disapplied by courtRwanda disapplied by courtRwanda disapplied by courtRwanda disapplied by court', 'WhatsApp Image 2024-04-04 at 1.10.19 AM.jpeg', '2024-05-22', 17, 4),
(8, 'Northern Ireland - but', 'Northern Ireland - butNorthern Ireland - butNorthern Ireland - butNorthern Ireland - butNorthern Ireland - butNorthern Ireland - but', 'WhatsApp Image 2024-04-04 at 1.10.19 AM.jpeg', '2024-05-09', 24, 6),
(9, 'UK govt to appeal', 'UK govt to appealUK govt to appealUK govt to appealUK govt to appealUK govt to appealUK govt to appealUK govt to appealUK govt to appealUK govt to appealUK govt to appeal', 'WhatsApp Image 2024-04-04 at 1.10.19 AM.jpeg', '2024-05-10', 24, 6),
(10, 'of sections of the act as they', 'of sections of the act as theyof sections of the act as theyof sections of the act as theyof sections of the act as theyof sections of the act as theyof sections of the act as theyof sections of the act as theyof sections of the act as they', 'WhatsApp Image 2024-04-04 at 1.10.19 AM.jpeg', '2024-05-09', 17, 5),
(11, 'r76,r.9', '6rt,8', 'MainBefore.webp', '2024-05-09', 27, 3);

-- --------------------------------------------------------

--
-- بنية الجدول `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `categories`
--

INSERT INTO `categories` (`id`, `nom`) VALUES
(1, 'Sport'),
(2, 'Science & Tech'),
(3, 'Business'),
(4, 'Recent articles'),
(5, 'Specialized categories'),
(6, 'News and events');

-- --------------------------------------------------------

--
-- بنية الجدول `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `date_creation` date DEFAULT NULL,
  `auteur_id` int(11) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `commentaires`
--

INSERT INTO `commentaires` (`id`, `contenu`, `date_creation`, `auteur_id`, `article_id`) VALUES
(1, 'ui l .ljkl', '2024-05-02', 28, 1),
(2, 'yunmkkn', '2024-05-02', 28, 2),
(3, 'ui mkuy6nkiyut', '2024-05-03', 28, 9),
(4, 'ggggggggggggggggggggggggg', '2024-05-10', 30, 5),
(5, 'p7ylk789', '2024-05-02', 28, 5),
(6, 'rrtytum', '2024-05-03', 17, 5),
(7, 'tkm7mk', '2024-05-02', 23, 5),
(8, 'tyu,lyuo', '2024-05-04', 15, 5),
(9, 'nrtbnrtn', '2024-05-03', 23, 6),
(10, 'tyukto', '2024-05-02', 29, 8),
(11, 'sdbybwe', '2024-05-02', 26, 10),
(12, 'f rrtmk', '2024-05-03', 15, 3),
(13, 'yfglyfg', '2024-05-02', 29, 7),
(14, 'rt,t769', '2024-05-03', 31, 6),
(15, 'abdelljabar', NULL, 30, 8),
(16, 'abdelljabar hamri', NULL, 30, 8),
(17, 'abdelljabar hamri', NULL, 30, 8),
(18, 'abdelljabar hamri', NULL, 30, 8),
(19, 'abdelljabar hamri', NULL, 30, 8),
(20, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', NULL, 30, 6),
(21, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', NULL, 30, 6),
(22, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', NULL, 30, 6),
(23, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', NULL, 30, 6),
(24, 'aaa', NULL, 30, 7),
(25, 'aaa', NULL, 30, 7),
(26, 'aaa', NULL, 30, 7),
(27, 'aaa', NULL, 30, 7),
(28, 'aaa', NULL, 30, 7),
(29, 'aaa', NULL, 30, 7),
(30, 'aaa', NULL, 30, 7),
(31, 'aaa', NULL, 30, 7),
(32, 'fm', NULL, 30, 7),
(33, 'aaaaaaaaaaaaaaaaaaa', NULL, 30, 7),
(34, 'aaaaaaaaaaaaaaaaaaaaa', NULL, 30, 7),
(35, 'aaaaaaaaaaaaaaaaaaaaa', NULL, 30, 7),
(36, 'aaaaaaaaaaaaaaaaaaaaa', NULL, 30, 7),
(37, 'aaaaaaaaaaaaaaaaaaaaa', NULL, 30, 7),
(38, 'aaaaaaaaaaaaaaaaaaaaa', NULL, 30, 7),
(39, 'aaaaaaaaaaaaaaaaaaaaa', NULL, 30, 7),
(40, 'aaaaaaaaaaaaaaaaaaaaa', NULL, 30, 7),
(41, 'aaaaaaaaaaaaaaaaaaaaa', NULL, 30, 7),
(42, 'aaaaaaaaaaaaaaaaaaaaa', NULL, 30, 7),
(43, 'qqqqqqqqqqqqqq', NULL, 30, 9),
(44, 'qqqqqqqqqqqqqq', NULL, 30, 9),
(45, 'qqqqqqqqqqqqqq', NULL, 30, 9),
(46, 'aaaaaaaaaaaaaaaaaa', NULL, 30, 9),
(47, 'aaaaaaaaaaaaaaaaaa', NULL, 30, 9),
(48, 'sssssssssssssssssssssssssssssssss', NULL, 30, 6),
(49, 'sssssssssssssssssssssssssssssssss', NULL, 30, 6),
(50, 'qbdelljqbqr', NULL, 30, 10),
(51, 'qbdelljqbqr', NULL, 30, 10),
(52, 'qbdelljqbqr', NULL, 30, 10),
(53, 'dfdddddddd', NULL, 39, 5),
(54, 'dddddddddddddddddddd', NULL, 39, 5),
(55, 'sadffffffffffffffffffffffff', NULL, 39, 6),
(56, 'dzfsnb', NULL, 28, 4),
(57, 'dzfsnb', NULL, 28, 4),
(58, 'dzfsnb', NULL, 28, 4),
(59, 'fgh', NULL, 28, 11),
(60, 'fgh', NULL, 28, 11);

-- --------------------------------------------------------

--
-- بنية الجدول `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `est_admin` tinyint(1) DEFAULT 0,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `email`, `mot_de_passe`, `est_admin`, `image`) VALUES
(13, 'sami', 'ami@gmail.com', 'nth7hnhuu4', 0, 'ea61d930-1413-11ef-b9d8-4f52aebe147d.jpg.webp'),
(15, 'abdelljbar', 'abdelljbar@gmail.com', '1112', 0, 'MainBefore.webp'),
(17, 's', 'salima', 'salima45@gmail.com', 0, 'images.jpg'),
(23, 'abdo', 'abdo', 'abdo', 0, 'MainBefore.webp'),
(24, 'aya', 'aya876@gmail.com', 'aya76juyf', 0, 'Girl-Download-PNG.png'),
(26, 'salwa', 'salwa', 'salwa', 0, 'Untitled (2).png'),
(27, 'safaaaaaaaa', 'safa@gkjhipoaaa', ' khlnmo,;aaa', 0, '55.jpg'),
(28, 'hasna', 'hasna@gmail.com', 'vaw535bs', 0, 'Girl-Download-PNG.png'),
(29, 'adil', 'adil@gmail', 'sd6bw5643n7', 0, 'MainBefore.webp'),
(30, 'salwa hakm', 'salwaHa@gmail.comm', 'myutm', 0, 'images.jpg'),
(31, 'salma', 'salma', 'salma', 0, 'Best-Books-for-Programmers.jpg'),
(37, 'anas', 'anas', 'anas', 0, 'p11993131_e_v13_ab.jpg'),
(38, 'badar', 'badar', 'badar', 0, 'p11993131_e_v13_ab.jpg'),
(39, 'admin', 'amin@gmail.com', 'admin', 1, 'p11993131_e_v13_ab.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrateurs`
--
ALTER TABLE `administrateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `utilisateur_id` (`utilisateur_id`);

--
-- Indexes for table `articlelikes`
--
ALTER TABLE `articlelikes`
  ADD PRIMARY KEY (`LikeID`),
  ADD KEY `ArticleID` (`ArticleID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auteur_id` (`auteur_id`),
  ADD KEY `categorie_id` (`categorie_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auteur_id` (`auteur_id`),
  ADD KEY `article_id` (`article_id`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrateurs`
--
ALTER TABLE `administrateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `articlelikes`
--
ALTER TABLE `articlelikes`
  MODIFY `LikeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- قيود الجداول المُلقاة.
--

--
-- قيود الجداول `administrateurs`
--
ALTER TABLE `administrateurs`
  ADD CONSTRAINT `administrateurs_ibfk_1` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateurs` (`id`) ON DELETE CASCADE;

--
-- قيود الجداول `articlelikes`
--
ALTER TABLE `articlelikes`
  ADD CONSTRAINT `articlelikes_ibfk_1` FOREIGN KEY (`ArticleID`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `articlelikes_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `utilisateurs` (`id`);

--
-- قيود الجداول `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`auteur_id`) REFERENCES `utilisateurs` (`id`),
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`);

--
-- قيود الجداول `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`auteur_id`) REFERENCES `utilisateurs` (`id`),
  ADD CONSTRAINT `commentaires_ibfk_2` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
