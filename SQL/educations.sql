-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: mariadb
-- Generation Time: Oct 16, 2025 at 11:27 AM
-- Server version: 10.4.34-MariaDB-1:10.4.34+maria~ubu2004
-- PHP Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` int(11) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `difficulty` varchar(255) DEFAULT NULL,
  `field_of_study` varchar(255) DEFAULT NULL,
  `start_year` year(4) DEFAULT NULL,
  `end_year` year(4) DEFAULT NULL,
  `grade` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `school_name`, `difficulty`, `field_of_study`, `start_year`, `end_year`, `grade`, `description`) VALUES
(1, 'ISK Duin en Bollenstreek Katwijk', 'NT2/Entry level Dutch language ', 'Ceritificate A1/A2/B1 Dutch', '2017', '2019', NULL, 'In this school I got introduced to the Dutch language and learned much so I could actually follow the Dutch studies and be able to study. It was a good push so I can get the flow.'),
(2, 'MBORijnland Leiden', 'Secondary Vocational Education (MBO) 2', 'Assistant Cook', '2019', '2021', NULL, 'I graduated from this school and I became an assistant cook.\r\nMborijnland and Teylingen College - KTS where working together.\r\nOn this school I became a better person but learned to speak Dutch even better.'),
(3, 'Roc Mondriaan The Hague', 'Secondary Vocational Education (MBO) 3', 'Self-Employed Cook', '2021', '2023', NULL, 'Roc Mondriaan in the Hague is a good school.\r\nObviously better than the previous one, I became a self-employed cook and that means I am able to take responsibilities myself also I can lead people and give them tasks just like a manager can do.'),
(4, 'Roc Nova College Haarlem', 'Secondary Vocational Education (MBO) 4', 'Software-Developer', '2025', '2028', NULL, 'I am not yet graduated, I am on my first year of studying and I enjoy this school a lot.\r\nI am improving even more just by studying on school with passion.\r\nIt is quite a tough study but it is worth it.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
