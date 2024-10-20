-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2024 at 12:45 PM
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
-- Database: `giftheaven_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `quantity`, `total_price`, `created_at`) VALUES
(1, 1, 1, 1, 2500.00, '2024-10-20 07:36:50'),
(2, 1, 1, 7, 17500.00, '2024-10-20 07:51:56'),
(3, 1, 1, 1, 2500.00, '2024-10-20 07:55:57'),
(4, 1, 1, 2, 5000.00, '2024-10-20 08:16:13'),
(5, 1, 1, 3, 12750.00, '2024-10-20 08:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `userlist`
--

CREATE TABLE `userlist` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlist`
--

INSERT INTO `userlist` (`id`, `fullname`, `email`, `phone`, `password`, `address`, `created_at`) VALUES
(1, 'kestroy', 'stephankestroy@gmail.com', '0702036472', '$2y$10$gjvUoWOHR5z4gV1Jj4//1uLCJNneXYd0KuJACTmDmRAng97K/iErO', 'kotagala', '2024-10-20 06:36:51'),
(4, 'kest', 'sbd@gmail.com', 'kestroy', '$2y$10$2mXo9FzoYIgWLqgx7NrexeWU29fmyyo6V7p.fCzmCK2GQsQQpGXli', 'kotagala', '2024-10-20 09:01:29'),
(5, 'vds', 'dsv@gmail.com', 'sefdv', '$2y$10$.ueCU.fTiClX/qwtAV4cz.ilrWmeDM2kzHVpFQr3p1d9C7tvPiBWG', 'sdv', '2024-10-20 09:13:59'),
(6, 'stephan', '123@gmail.com', '0125', '$2y$10$DGcPaIQ72XqzrgQif09PnusUQUYERtHL.Ex8EpwhuVd.gb9AfC8K6', 'hatton', '2024-10-20 09:30:53'),
(7, 'kes', 'abc@gmail.com', '075', '$2y$10$uFGOripMhBiQbeywhKGqrO14aV05j93d6se/iJri3UplY5006T9fS', 'colombo', '2024-10-20 09:38:48'),
(8, 'roy', 'roy@gmail.com', '12345', '$2y$10$WfwOn8vh4sWL9WwK1MnzvOv1zQEHjOJX2WPg707EnYym404xfRj1S', 'colombo', '2024-10-20 09:45:01'),
(9, 'Baba', 'bb@gmail.com', '12345', '123', 'fr', '2024-10-20 09:52:14'),
(10, 'ab', 'a@gmail.com', '123', '1234', 'hatton', '2024-10-20 10:01:05');

-- --------------------------------------------------------

--
-- Table structure for table `user_questions_answers`
--

CREATE TABLE `user_questions_answers` (
  `id` int(11) NOT NULL,
  `user_question` varchar(255) NOT NULL,
  `user_answer` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_questions_answers`
--

INSERT INTO `user_questions_answers` (`id`, `user_question`, `user_answer`, `created_at`) VALUES
(1, 'kestroy', 'i\'m the one', '2024-10-20 08:34:28'),
(2, 'kestroy', 'ascx', '2024-10-20 08:36:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlist`
--
ALTER TABLE `userlist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_questions_answers`
--
ALTER TABLE `user_questions_answers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userlist`
--
ALTER TABLE `userlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_questions_answers`
--
ALTER TABLE `user_questions_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
