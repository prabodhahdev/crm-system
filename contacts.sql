-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2025 at 07:42 AM
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
-- Database: `crm_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `company`, `notes`, `created_at`, `updated_at`) VALUES
(1, 'Harshani Nawodya', 'test1@gmail.com', '+705845755', 'Lanka Property Web', 'Allows the user to enter and save customer details including Name, Email, Phone, Company, and Notes into the system for easy management and retrieval.', '2025-07-13 23:32:35', '2025-07-14 00:10:44'),
(4, 'Prabodha Harshani', 'test2@gmail.com', '+705845755', 'Lanka Property Web', 'Allows the user to enter and save customer details including Name, Email, Phone, Company, and Notes into the system for easy management and retrieval.', '2025-07-13 23:41:04', '2025-07-14 00:10:26'),
(5, 'Saman Jayakodi', 'saman@gmail.com', '0771234567', 'Lanka Property Web', 'Allows the user to enter and save customer details including Name, Email, Phone, Company, and Notes into the system for easy management and retrieval.', '2025-07-14 00:10:15', '2025-07-14 00:10:15'),
(6, 'Ajiith Priyantha', 'ajith@gmail.com', '0771234567', 'Lanka Property Web', 'Allows the user to enter and save customer details including Name, Email, Phone, Company, and Notes into the system for easy management and retrieval.', '2025-07-14 00:11:15', '2025-07-14 00:11:15'),
(7, 'Yamuna Kumari', 'yamuna@gmail.com', '07712345678', 'Lanka Property Web', 'Allows the user to enter and save customer details including Name, Email, Phone, Company, and Notes into the system for easy management and retrieval.', '2025-07-14 00:11:49', '2025-07-14 00:11:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
