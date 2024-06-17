-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 11, 2024 at 02:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `disasters`
--

CREATE TABLE `disasters` (
  `id` int(11) NOT NULL,
  `event_datetime` datetime NOT NULL,
  `location` varchar(255) NOT NULL,
  `disaster` varchar(255) NOT NULL,
  `severity` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `affected` text DEFAULT NULL,
  `damages` text DEFAULT NULL,
  `response` text DEFAULT NULL,
  `casualties` text DEFAULT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `disasters`
--

INSERT INTO `disasters` (`id`, `event_datetime`, `location`, `disaster`, `severity`, `description`, `affected`, `damages`, `response`, `casualties`, `datetime`) VALUES
(1, '2024-06-09 18:09:00', 'Along Agreey Road', 'Flood', 6, 'cause by kerosene', 'cause by kerosenecause by kerosene', 'cause by kerosenecause by kerosene', 'cause by kerosenecause by kerosene', 'cause by kerosenecause by kerosene', '2024-06-09 17:09:55'),
(2, '2024-06-09 19:07:00', 'A Desert', 'Wildfire', 10, 'wqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr ', '\r\nDRMS\r\nDASHBOARD\r\n\r\nDISASTER ENTRY\r\n\r\nDISASTERS\r\n\r\nNOTIFICATIONS\r\n\r\nUSER PROFILE\r\n\r\nTABLE LIST\r\n\r\nTYPOGRAPHY\r\n\r\nLOGOUT\r\n\r\nDisaster Details\r\n \r\nDESCRIPTION\r\nwqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr\r\n\r\nDISASTER TYPE	SEVERITY	LOCATION	EVENT DATE/TIME\r\nWildfire	10	A Desert	09, Jun 2024 - 07:07PM\r\nUPDATE REPORT\r\nAffected Areas/Population\r\nDescribe the area/population affected by this disaster\r\nDamages/Losses\r\nDescribe the losses/damages done by this disaster\r\nResponse Effort\r\nDescribe the response and effort made to tackle the disaster\r\nCasualties and Injuries\r\nDescribe the casualties of this disaster\r\n© 2024, made with by The Primotion Studio', '\r\nDRMS\r\nDASHBOARD\r\n\r\nDISASTER ENTRY\r\n\r\nDISASTERS\r\n\r\nNOTIFICATIONS\r\n\r\nUSER PROFILE\r\n\r\nTABLE LIST\r\n\r\nTYPOGRAPHY\r\n\r\nLOGOUT\r\n\r\nDisaster Details\r\n \r\nDESCRIPTION\r\nwqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr\r\n\r\nDISASTER TYPE	SEVERITY	LOCATION	EVENT DATE/TIME\r\nWildfire	10	A Desert	09, Jun 2024 - 07:07PM\r\nUPDATE REPORT\r\nAffected Areas/Population\r\nDescribe the area/population affected by this disaster\r\nDamages/Losses\r\nDescribe the losses/damages done by this disaster\r\nResponse Effort\r\nDescribe the response and effort made to tackle the disaster\r\nCasualties and Injuries\r\nDescribe the casualties of this disaster\r\n© 2024, made with by The Primotion Studio', '\r\nDRMS\r\nDASHBOARD\r\n\r\nDISASTER ENTRY\r\n\r\nDISASTERS\r\n\r\nNOTIFICATIONS\r\n\r\nUSER PROFILE\r\n\r\nTABLE LIST\r\n\r\nTYPOGRAPHY\r\n\r\nLOGOUT\r\n\r\nDisaster Details\r\n \r\nDESCRIPTION\r\nwqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr\r\n\r\nDISASTER TYPE	SEVERITY	LOCATION	EVENT DATE/TIME\r\nWildfire	10	A Desert	09, Jun 2024 - 07:07PM\r\nUPDATE REPORT\r\nAffected Areas/Population\r\nDescribe the area/population affected by this disaster\r\nDamages/Losses\r\nDescribe the losses/damages done by this disaster\r\nResponse Effort\r\nDescribe the response and effort made to tackle the disaster\r\nCasualties and Injuries\r\nDescribe the casualties of this disaster\r\n© 2024, made with by The Primotion Studio', '\r\nDRMS\r\nDASHBOARD\r\n\r\nDISASTER ENTRY\r\n\r\nDISASTERS\r\n\r\nNOTIFICATIONS\r\n\r\nUSER PROFILE\r\n\r\nTABLE LIST\r\n\r\nTYPOGRAPHY\r\n\r\nLOGOUT\r\n\r\nDisaster Details\r\n \r\nDESCRIPTION\r\nwqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr wqerwty quqew ewqrfewqr\r\n\r\nDISASTER TYPE	SEVERITY	LOCATION	EVENT DATE/TIME\r\nWildfire	10	A Desert	09, Jun 2024 - 07:07PM\r\nUPDATE REPORT\r\nAffected Areas/Population\r\nDescribe the area/population affected by this disaster\r\nDamages/Losses\r\nDescribe the losses/damages done by this disaster\r\nResponse Effort\r\nDescribe the response and effort made to tackle the disaster\r\nCasualties and Injuries\r\nDescribe the casualties of this disaster\r\n© 2024, made with by The Primotion Studio', '2024-06-09 18:08:00'),
(3, '2024-06-05 01:30:00', 'i wanna fix you', 'Tornado', 8, 'i wanna fix you', NULL, NULL, NULL, NULL, '2024-06-10 00:31:26'),
(4, '2024-06-09 01:31:00', 'lagos in nigeria', 'Landslide', 6, 'i wanna fix you', NULL, NULL, NULL, NULL, '2024-06-10 00:31:41'),
(5, '2024-06-10 01:31:00', 'i wanna fix you', 'Tornado', 10, 'i wanna fix you', NULL, NULL, NULL, NULL, '2024-06-10 00:31:57'),
(6, '2024-06-10 01:32:00', 'i wanna fix you', 'Tornado', 3, 'i wanna fix you', NULL, NULL, NULL, NULL, '2024-06-10 00:32:16'),
(7, '2024-06-11 13:38:00', 'sup', 'Flood', 7, '', NULL, NULL, NULL, NULL, '2024-06-11 12:38:35'),
(8, '2024-06-11 13:39:00', 'Along Agreey Road', 'Flood', 3, '', NULL, NULL, NULL, NULL, '2024-06-11 12:39:12'),
(9, '2024-06-11 13:39:00', 'i wanna fix you', 'Landslide', 10, '', NULL, NULL, NULL, NULL, '2024-06-11 12:39:32'),
(10, '2024-06-15 13:39:00', 'A Desert', 'Wildfire', 5, '', NULL, NULL, NULL, NULL, '2024-06-11 12:39:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` set('member','government','emergency') NOT NULL DEFAULT 'member',
  `loginkey` varchar(60) CHARACTER SET gb2312 COLLATE gb2312_chinese_nopad_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `password`, `role`, `loginkey`) VALUES
(1, 'prime', 'prime@gmail.com', '1234567890', 'prime', 'member', '$2y$10$Y1ctwVmoD71gAmioai8qRO4Ngc3VuGzi21NYTsf4wGnyQ1GB88DSm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disasters`
--
ALTER TABLE `disasters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disasters`
--
ALTER TABLE `disasters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
