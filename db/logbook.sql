-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 24, 2024 at 11:07 AM
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
-- Database: `logbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `attachment`
--

CREATE TABLE `attachment` (
  `student_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `address`, `datetime`) VALUES
(1, 'Harvoxx Tech Hub', 'Elzazi Plaza', '2024-06-18 19:16:02'),
(2, 'Whyte Creativity', 'Elzazi Plaza', '2024-06-18 19:16:03'),
(3, 'RSU', 'Tazi Plaza', '2024-06-18 19:16:03'),
(4, 'NLNG', 'Plaza', '2024-06-18 19:16:03');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(10) UNSIGNED NOT NULL,
  `supervisor_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `log_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `feedback` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `supervisor_id`, `student_id`, `log_id`, `company_id`, `feedback`, `datetime`) VALUES
(9, 2, 3, 5, 1, 'Srew Ya! Srew Ya! Srew Ya! Srew Ya! Srew Ya! Srew Ya! Srew Ya! Srew Ya! Srew Ya! Srew Ya! Srew Ya! Srew Ya! Srew Ya! Srew Ya! ', '2024-06-21 10:11:58'),
(13, 2, 4, 8, 1, 'trying', '2024-06-22 11:41:29'),
(17, 2, 3, 9, 1, ' and at Child giggles academy Im the best and at Child giggles academy Im the best and at Child giggles academy Im the best and at Child giggles academy Im the best and at Child giggles academy Im the best and at Child giggles academy', '2024-06-22 11:46:04'),
(18, 2, 4, 7, 1, 'Damn Bloody Damn', '2024-06-22 11:59:18'),
(21, 2, 3, 13, 1, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas ducimus facere expedita beatae maiores commodi odit sapiente natus cumque quod?', '2024-07-18 11:15:04'),
(22, 2, 3, 4, 1, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi odio omnis natus aut ab, facere, mollitia cumque nihil repellendus a ipsam.', '2024-07-22 18:19:23');

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`id`, `user_id`, `faculty`, `department`) VALUES
(2, 16, 'Science', 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `activity` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `company_id`, `activity`, `datetime`) VALUES
(4, 13, 1, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi odio omnis natus aut ab, facere, mollitia cumque nihil repellendus a ipsam. Modi voluptatibus quia facere incidunt nihil soluta dolor veritatis quod officia unde ipsum eum blanditiis, facilis fugiat repudiandae et quibusdam dicta, mollitia ut doloribus optio sunt earum eveniet. Officiis?\r\n098765321 qwertyuiop 1234567890 asfghjkl 1234567890 mnbvcxz 0987654321 098765321 qwertyuiop 1234567890 asfghjkl 1234567890 mnbvcxz 0987654321 098765321 qwertyuiop 1234567890 asfghjkl 1234567890 mnbvcxz 0987654321 098765321 qwertyuiop 1234567890 asfghjkl 1234567890 mnbvcxz 0987654321 ', '2024-06-19 10:30:19'),
(5, 13, 1, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi odio omnis natus aut ab, facere, mollitia cumque nihil repellendus a ipsam. Modi voluptatibus quia facere incidunt nihil soluta dolor veritatis quod officia unde ipsum eum blanditiis, facilis fugiat repudiandae et quibusdam dicta, mollitia ut doloribus optio sunt earum eveniet. Officiis?\r\n098765321 qwertyuiop 1234567890 asfghjkl 1234567890 mnbvcxz 0987654321 098765321 qwertyuiop 1234567890 asfghjkl 1234567890 mnbvcxz 0987654321 098765321 qwertyuiop 1234567890 asfghjkl 1234567890 mnbvcxz 0987654321 098765321 qwertyuiop 1234567890 asfghjkl 1234567890 mnbvcxz 0987654321 ', '2024-06-20 00:33:16'),
(7, 15, 1, 'What the hell What the hell What the hell What the hell What the hell What the hell What the hell What the hell What the hell What the hell What the hell What the hell What the hell What the hell What the hell What the hell What the hell What the hell What the hell What the hell What the hell What the hell What the hell What the hell What the hell What the hell What the hell What the hell What the hell What the hell What the hell What the hell What the hell ', '2024-06-19 20:14:58'),
(8, 15, 1, 'Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 Part 2 ', '2024-06-20 20:15:58'),
(10, 15, 1, 'I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC I lost my PC ', '2024-06-21 10:14:01'),
(12, 15, 1, 'Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit Bloody Hell, Shit ', '2024-06-22 11:22:36'),
(13, 13, 1, '12345678 12345678 12345678 12345678 12345678 12345678 12345678 12345678 12345678 12345678 12345678 12345678 12345678 ', '2024-06-24 12:31:31');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `matric` varchar(20) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_id`, `matric`, `faculty`, `department`, `company_id`) VALUES
(3, 13, 'DE:2020/4316', 'Science', 'Computer Science', 1),
(4, 15, 'DE.2020/4276', 'Science', 'Computer Science', 1);

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE `supervisors` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supervisors`
--

INSERT INTO `supervisors` (`id`, `user_id`, `company_id`) VALUES
(2, 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `password` varchar(60) NOT NULL,
  `role` set('student','supervisor','lecturer','admin') DEFAULT NULL,
  `loginkey` varchar(60) CHARACTER SET gb2312 COLLATE gb2312_chinese_nopad_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phone`, `password`, `role`, `loginkey`) VALUES
(2, 'Prime', 'Okanlawon', 'oyedelenewton@gmail.com', '09114895572', '$2y$10$jOOzpVYz2YxtUydtXjNZquvU/.qKbqAyPAgSV5ujYmhTHSMMLsx4.', 'admin', '$2y$10$88pTPtwU34J4MoPhzDOHz.ghM1/IOQBPPJsLHg3Yxr2EzrbSPNh.u'),
(13, 'Martins', 'Okanlawon', 'martinsobomate@gmail.com', '08087837190', '$2y$10$bk.AusE5i.TKk4haJFzgjuRv8of/dP5ufkxBYAyXaxrklPbj0bKmS', 'student', '$2y$10$TohHXJFrXgFDdbBpv76uTOfwkMrNIQAqBlf/Zflhyv2kpdmbKHD/O'),
(14, 'Super', 'Visor', 'super@visor.com', '1234567890', '$2y$10$mHhAU1MrP1b3sZWR2XWrR.iXe4eBE4fIMqUbCMs0yOQcQ4bG.b7ju', 'supervisor', '$2y$10$PhXI2jfFST.PhPVeU6d4yu0x0F49Wxxc2etuCco4DWMf6XeGLgw7C'),
(15, 'Stud', 'ent', 'stud@ent.com', '98765432', '$2y$10$T26hqjBvk6edqut2eHkEW.djACWz1nD1j4NyePJugMC0LU4/y2Ivy', 'student', '$2y$10$wUhFNGskYHD6NYTXNt2LK.ZIXh3AaaSJ4Y0uehhrV4aIzyV34UVx6'),
(16, 'Lectur', 'Er', 'lectur@er.com', '9876523457', '$2y$10$1SIpPJFJzwgO/wbgenUVreivMkQXzDkwl6dwd/KQxAXGmhZL1./1y', 'lecturer', '$2y$10$zmqDaAZoN4AK7SImm35B.OgjQJ9a0HC5MUxsJg7puw3xY74nmkPLi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisors`
--
ALTER TABLE `supervisors`
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
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
