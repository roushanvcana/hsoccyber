-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 10:30 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hsoc_cyber`
--

-- --------------------------------------------------------

--
-- Table structure for table `manage_evaluation`
--

CREATE TABLE `manage_evaluation` (
  `id` int(11) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `button_rename` varchar(100) NOT NULL,
  `ip_add` varchar(200) NOT NULL,
  `entry_by` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_evaluation`
--

INSERT INTO `manage_evaluation` (`id`, `heading`, `description`, `button_rename`, `ip_add`, `entry_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Request an evaluation', '<div><span style=\"font-size: 1rem;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</span><br></div>                                                                         ', 'Evaluate Now', '::1', '1', 1, '2022-01-20 14:47:57', '2022-01-20 14:47:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manage_evaluation`
--
ALTER TABLE `manage_evaluation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manage_evaluation`
--
ALTER TABLE `manage_evaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
