-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 07:22 AM
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
-- Table structure for table `manage_about_us`
--

CREATE TABLE `manage_about_us` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `year_of_experience` varchar(100) NOT NULL,
  `number_of_employee` varchar(100) NOT NULL,
  `number_of_partners` varchar(100) NOT NULL,
  `background_color` varchar(100) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `ip_add` varchar(200) NOT NULL,
  `entry_by` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_about_us`
--

INSERT INTO `manage_about_us` (`id`, `title`, `description`, `year_of_experience`, `number_of_employee`, `number_of_partners`, `background_color`, `heading`, `ip_add`, `entry_by`, `status`, `updated_at`, `created_at`) VALUES
(1, 'kldsjfsj', 'hello raja ', 'jlkjlkj', 'jlkjlkj', 'kjljlkj', 'ljljlkj', 'jljl', '::1', '1', '', '2022-01-03 14:40:30', '2022-01-03 14:40:30');

-- --------------------------------------------------------

--
-- Table structure for table `manage_admin`
--

CREATE TABLE `manage_admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `mobile_number` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `status` varchar(11) NOT NULL,
  `entry_by` varchar(200) NOT NULL,
  `ip_add` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_admin`
--

INSERT INTO `manage_admin` (`id`, `first_name`, `last_name`, `mobile_number`, `email`, `password`, `type`, `status`, `entry_by`, `ip_add`, `created_at`, `updated_at`) VALUES
(1, 'Anupsss', 'Dubey', '8521526062', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', '2', '1', '1', '::1', '2021-12-08 19:40:58', '2021-12-08 19:40:58'),
(2, 'Anup', 'Dubey', '8521526062', 'maddeveloper94@gmail.com', '202cb962ac59075b964b07152d234b70', '1', '1', '1', '::1', '2021-12-09 00:45:49', '2021-12-09 00:45:49'),
(3, 'Rakesh', 'Singh', '7766062317', 'rakesh@gmail.com', '202cb962ac59075b964b07152d234b70', '2', '1', '1', '::1', '2021-12-29 14:21:36', '2021-12-29 14:21:36'),
(4, 'Rahul', 'kumar dubey', '8877665544', 'rahul@gmail.com', '202cb962ac59075b964b07152d234b70', '2', '1', '1', '::1', '2021-12-30 15:17:15', '2021-12-30 15:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `manage_slider`
--

CREATE TABLE `manage_slider` (
  `id` int(11) NOT NULL,
  `heading_text` varchar(200) NOT NULL,
  `slider_text` varchar(200) NOT NULL,
  `rename_button` varchar(200) NOT NULL,
  `link_pageon_button` varchar(200) NOT NULL,
  `slider_image` varchar(200) NOT NULL,
  `ip_add` varchar(200) NOT NULL,
  `entry_by` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_slider`
--

INSERT INTO `manage_slider` (`id`, `heading_text`, `slider_text`, `rename_button`, `link_pageon_button`, `slider_image`, `ip_add`, `entry_by`, `status`, `created_at`, `updated_at`) VALUES
(2, 'hello rahul ', 'slider image', 'button rename', 'page link ', 'IMG-48177.DSC_0139.JPG', '::1', '1', '1', '2021-12-30 17:55:47', '2021-12-30 17:55:47'),
(3, 'rahul sing', 'singh ji singh', 'button rean', 'page lin', 'IMG-57207.DSC_0140.JPG', '::1', '1', '1', '2021-12-30 17:56:04', '2021-12-30 17:56:04'),
(4, 'Environment', 'slider1', 'button rename 1', 'page link ', 'IMG-98674.DSC_0139.JPG', '::1', '1', '1', '2021-12-30 17:58:25', '2021-12-30 17:58:25');

-- --------------------------------------------------------

--
-- Table structure for table `manage_sliderbox`
--

CREATE TABLE `manage_sliderbox` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `background_color` varchar(200) NOT NULL,
  `hover_color` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `ip_add` varchar(200) NOT NULL,
  `entry_by` varchar(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_sliderbox`
--

INSERT INTO `manage_sliderbox` (`id`, `title`, `description`, `background_color`, `hover_color`, `logo`, `image`, `ip_add`, `entry_by`, `status`, `created_at`) VALUES
(1, 'Title1 22', '       22              ', '22', '22', '', 'IMG-88731.DSC_0139.JPG', '::1', '1', '1', '2021-12-30 23:05:29'),
(3, 'About', 'descripoijhfdffugiosdfghjk           ', '#2243434', '#876876876686', 'IMG-83222.DSC_0141.JPG', 'IMG-81257.DSC_0139.JPG', '::1', '1', '1', '2022-01-03 11:22:43');

-- --------------------------------------------------------

--
-- Table structure for table `manage_trusted_brand`
--

CREATE TABLE `manage_trusted_brand` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `background_color` varchar(200) NOT NULL,
  `upload_logo` varchar(200) NOT NULL,
  `ip_add` varchar(200) NOT NULL,
  `entry_by` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_trusted_brand`
--

INSERT INTO `manage_trusted_brand` (`id`, `title`, `background_color`, `upload_logo`, `ip_add`, `entry_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'brand1', ' brand1 Background Color', 'IMG-45603.DSC_0139.JPG', '::1', '1', 1, '2022-01-03 12:31:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `manage_website_setting`
--

CREATE TABLE `manage_website_setting` (
  `id` int(11) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `embed_map` mediumtext NOT NULL,
  `copy_write` varchar(100) NOT NULL,
  `design_by` varchar(100) NOT NULL,
  `cip` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `entry_by` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_website_setting`
--

INSERT INTO `manage_website_setting` (`id`, `logo`, `address`, `email`, `phone`, `embed_map`, `copy_write`, `design_by`, `cip`, `status`, `entry_by`, `created_at`, `updated_at`) VALUES
(1, 'IMG-54707.DSC_0139.JPG', 'Dhobwal    Bazar post mushehari bazar vijaipur                  ', 'maddeveloper94@gmail.com', '+918521526062', 'Mumbai', 'No Copywri', 'vcana', '::1', 1, '1', '2022-01-03 19:39:16', '2022-01-03 19:39:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manage_about_us`
--
ALTER TABLE `manage_about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_admin`
--
ALTER TABLE `manage_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_slider`
--
ALTER TABLE `manage_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_sliderbox`
--
ALTER TABLE `manage_sliderbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_trusted_brand`
--
ALTER TABLE `manage_trusted_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_website_setting`
--
ALTER TABLE `manage_website_setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manage_about_us`
--
ALTER TABLE `manage_about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manage_admin`
--
ALTER TABLE `manage_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `manage_slider`
--
ALTER TABLE `manage_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `manage_sliderbox`
--
ALTER TABLE `manage_sliderbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manage_trusted_brand`
--
ALTER TABLE `manage_trusted_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manage_website_setting`
--
ALTER TABLE `manage_website_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
