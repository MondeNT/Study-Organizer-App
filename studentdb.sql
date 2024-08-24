-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2024 at 04:17 PM
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
-- Database: `studentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `studyorganizer`
--

CREATE TABLE `studyorganizer` (
  `id` int(11) NOT NULL,
  `module_code` varchar(50) NOT NULL,
  `module_name` varchar(100) NOT NULL,
  `module_credits` int(11) NOT NULL,
  `class_hours` int(11) NOT NULL,
  `num_weeks` int(11) NOT NULL,
  `starts_date` date NOT NULL,
  `hours_studied` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studyorganizer`
--

INSERT INTO `studyorganizer` (`id`, `module_code`, `module_name`, `module_credits`, `class_hours`, `num_weeks`, `starts_date`, `hours_studied`) VALUES
(1, 'ml500', 'Machine Learning', 23, 14, 6, '2024-07-02', 24),
(2, 'NPRG512', 'Programming I', 300, 13, 12, '2024-08-08', 36);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studyorganizer`
--
ALTER TABLE `studyorganizer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studyorganizer`
--
ALTER TABLE `studyorganizer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
