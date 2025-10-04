-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2025 at 02:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsdatabaseprogect`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_name` varchar(255) NOT NULL,
  `category_description` varchar(255) NOT NULL,
  `date_added` date DEFAULT NULL,
  `category_status` enum('active','notactive') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_name`, `category_description`, `date_added`, `category_status`) VALUES
('اخبار رياضية ', 'مباراة اليوم ريال مدريد و برشلونة ', '2025-10-02', 'active'),
('اخبار رياضية ', 'مباراة اليوم ريال مدريد و برشلونة ', '2025-10-02', 'active'),
('اخبار رياضية ', 'مباراة اليوم ريال مدريد و برشلونة ', '2025-10-02', 'active'),
('اخبار رياضية ', 'مباراة اليوم ريال مدريد و برشلونة ', '2025-10-02', 'notactive'),
('اخبار رياضية ', 'مباراة اليوم ريال مدريد و برشلونة ', '2025-10-03', 'notactive'),
('اخبار رياضية ', 'مباراة اليوم ريال مدريد و برشلونة ', '2025-10-03', 'active'),
('اخبار رياضية ', 'مباراة اليوم ريال مدريد و برشلونة ', '2025-10-03', 'active'),
('اخبار رياضية ', 'مباراة اليوم ريال مدريد و برشلونة ', '2025-10-03', 'active'),
('اخبار رياضية ', 'مباراة اليوم ريال مدريد و برشلونة ', '2025-10-04', ''),
('اخبار رياضية ', 'مباراة اليوم ريال مدريد و برشلونة ', '2025-10-04', 'active'),
('اخبار رياضية ', 'مباراة اليوم ريال مدريد و برشلونة ', '2025-10-04', ''),
('اخبار رياضية ', 'مباراة اليوم ريال مدريد و برشلونة ', '2025-10-04', ''),
('اخبار اقتصادية', 'مباراة اليوم ريال مدريد و برشلونة ', '2025-10-04', ''),
('اخبار رياضية ', 'مباراة اليوم ريال مدريد و برشلونة ', '2025-10-03', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(5) NOT NULL,
  `newstitle` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `newsdetails` varchar(255) NOT NULL,
  `newsimage` varchar(255) NOT NULL,
  `user_id` int(5) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `newstitle`, `category`, `newsdetails`, `newsimage`, `user_id`, `status`) VALUES
(37, 'new news', 'سياسة', 'الخبر الاول اليوم الثلاثلاء', '', 1, 'deleted'),
(38, 'الخبر الثاني', 'سياسة', 'الخبر الثاني اليوم الثلاثلاء', '_', 2, 'active'),
(39, 'الخبر الثالث', 'سياسة', 'الخبر الاول اليوم الثلاثلاء', '_', 3, 'active'),
(40, 'الخبر الثاني', 'رياضة', 'الخبر الاول اليوم الثلاثلاء', '_', 4, 'active'),
(41, 'غزة اليوم', 'رياضة', 'الخبر الاول اليوم الثلاثلاء', '_', 5, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'batool', 'batoolsafadi15@gmail.com', '1'),
(2, 'mahmoud', 'mahmoud@gmail.com', '2'),
(3, 'sara', 'sara@gmail', '3'),
(4, 'salma', 'salma@gmail', '4'),
(5, 'alma', 'alma@gmail.com', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1112;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
