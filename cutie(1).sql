-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 16, 2023 at 04:50 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cutie`
--

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `short_description` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `short_description`, `icon`, `status`) VALUES
(1, 'Web Design', 'ABc  ABc  ABc  ABc  ABc  ABc  ABc  ABc  ABc  ABc  ABc  ABc  ABc  ABc  ABc  ', 'abc', 'active'),
(2, 'Vero ad libero minim', 'Officia nihil conseq', 'Dolore exercitatione', 'inactive'),
(3, 'Enim qui quos assume', 'Et enim earum eum nu', 'Rerum maiores unde d', 'active'),
(4, 'Cupiditate eum magna', 'Alias aliquam dolor', 'Autem et assumenda u', 'inactive'),
(6, 'Cupidatat occaecat c', 'Velit omnis dolorem', 'Sed ad doloremque ev', 'active'),
(7, 'Qui in voluptas poss', 'Eum rerum aut dolore', 'Voluptas et atque re', 'active'),
(8, 'Illo consequat Anim', 'Quam veniam quam id', 'Nisi vero exercitati', 'active'),
(9, 'Incididunt error dol', 'Est labore dignissim', 'Error dolor officia', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `profile_pic` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `bio` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone_number`, `profile_pic`, `bio`, `role`, `description`) VALUES
(8, 'abir', 'abir@gmail.com', '978b220fc548f985649015e96b554763bff16fef', NULL, NULL, NULL, 'admin', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
