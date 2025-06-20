-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2025 at 09:35 AM
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
-- Database: `event-registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `fullname`, `email`, `phone`, `address`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Heaven Dave Q. Ancheta', 'daveancheta8@gmail.com', '09945367812', '123 CarVibe St., Gotham City, Philippines', '$2y$10$F5ECgMypcjoI4WIqjCcOtuYCxbiKApPB86P/BXZHlQ3xLmhCHdwCm', '2025-04-11 10:32:17', '2025-04-13 16:20:06'),
(2, 'Rafael John Alagar', 'rjalagar@gmail.com', '9284374672', '1123 gotham', '$2y$10$Fq86xFg8cjw0DRPLswGV6eTHcGXJhq6m9Yla.lFAfZQ0eVKlp7LaO', '2025-04-11 13:44:59', '2025-04-11 13:44:59'),
(6, 'Heaven Dave Ancheta', 'daveancheta1@gmail.com', '0978463728', '123 Gotham City', '$2y$10$lt8jhvme4khGiz/0pwAcsugmcq7Nm59B7hxcI6aa5yDHBSPxcS9h.', '2025-04-13 09:22:29', '2025-04-13 09:22:29');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` varchar(100) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin1', 'pogitayo', '2025-04-12 22:25:14', 'current_timestamp()');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_date` varchar(100) NOT NULL,
  `event_location` varchar(110) NOT NULL,
  `event_price` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `event_date`, `event_location`, `event_price`, `description`, `image_path`, `status`, `created_at`, `updated_at`) VALUES
(29, 'Ed Sheeran - Concert', '2025-04-15', 'Quezon City', '', 'kupal si julius', '1744685063_72793f43cf24239c0f08.jpg', 'Available', '2025-04-15 02:44:23', '2025-04-15 07:30:36'),
(30, 'Olivia Rodrigo - Concert', '2025-04-15', 'Manila', '', 'crush kita', '1744686286_add600b9f73e3b0e6b83.webp', 'Fully Booked', '2025-04-15 03:04:46', '2025-04-15 06:15:32'),
(31, 'Post Malone - Concert', '2026-01-03', 'Bulacan', '', 'adik si du30', '1744686402_13e2ec8c16d35ec668da.webp', 'Available', '2025-04-15 03:06:42', '2025-04-15 06:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `registered_events`
--

CREATE TABLE `registered_events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_location` varchar(100) NOT NULL,
  `event_date` varchar(100) NOT NULL,
  `fullname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered_events`
--

INSERT INTO `registered_events` (`id`, `event_name`, `event_location`, `event_date`, `fullname`) VALUES
(16, 'Post Malone - Concert', 'Bulacan', '2026-01-03', 'Heaven Dave Q. Ancheta'),
(17, 'Post Malone - Concert', 'Bulacan', '2026-01-03', 'Heaven Dave Q. Ancheta'),
(18, 'Post Malone - Concert', 'Bulacan', '2026-01-03', 'Heaven Dave Q. Ancheta'),
(19, 'Post Malone - Concert', 'Bulacan', '2026-01-03', 'Heaven Dave Q. Ancheta'),
(20, 'Post Malone - Concert', 'Bulacan', '2026-01-03', 'Heaven Dave Q. Ancheta'),
(24, 'Post Malone - Concert', 'Bulacan', '2026-01-03', 'Heaven Dave Q. Ancheta'),
(25, 'Post Malone - Concert', 'Bulacan', '2026-01-03', 'Heaven Dave Q. Ancheta'),
(26, 'Post Malone - Concert', 'Bulacan', '2026-01-03', 'Heaven Dave Q. Ancheta'),
(27, 'Post Malone - Concert', 'Bulacan', '2026-01-03', 'Heaven Dave Q. Ancheta'),
(28, 'Ed Sheeran - Concert', 'Quezon City', '2025-04-15', 'Heaven Dave Q. Ancheta'),
(29, 'Ed Sheeran - Concert', 'Quezon City', '2025-04-15', 'Heaven Dave Q. Ancheta'),
(30, 'Ed Sheeran - Concert', 'Quezon City', '2025-04-15', 'Heaven Dave Q. Ancheta'),
(31, 'Ed Sheeran - Concert', 'Quezon City', '2025-04-15', 'Heaven Dave Q. Ancheta'),
(32, 'Ed Sheeran - Concert', 'Quezon City', '2025-04-15', 'Heaven Dave Q. Ancheta'),
(33, 'Ed Sheeran - Concert', 'Quezon City', '2025-04-15', 'Heaven Dave Q. Ancheta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_events`
--
ALTER TABLE `registered_events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `registered_events`
--
ALTER TABLE `registered_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
