-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 08:55 AM
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
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `authorname` varchar(200) NOT NULL,
  `publishdate` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `ip_add` varchar(200) NOT NULL,
  `entry_by` varchar(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `image`, `description`, `authorname`, `publishdate`, `status`, `ip_add`, `entry_by`, `updated_at`, `created_at`) VALUES
(1, 'COMPUTER VIRUS', 'IMG-28475.cropped-view-of-african-american-businessman-using-laptop-and-smartphone-in-car-with-cyber-security-e1624634401494.jpg', 'City of Liège hit by ransomware, Ryuk suspected', 'City of Liège hit by ransomware, Ryuk suspected', '2022-01-18', 1, '::1', '1', '2022-01-18 12:33:10', '2022-01-18 12:33:10'),
(2, 'FEATURED', 'IMG-99170.woman-working-on-computer-outdoors-e1624634377985.jpg', 'Make the Internet a Better, Safer Place on Stop Cyberbullying Day', '', '2022-01-18', 1, '::1', '1', '2022-01-18 12:34:58', '2022-01-18 12:34:58'),
(3, 'CYBER SECURITY', 'IMG-59320.male-teenage-hacker-with-data-reflected-from-computer-screen.jpg', 'Threat Actors Spread Agent Tesla Disguised as COVID-19 Vaccination Registration                                                                        ', '', '2022-01-20', 1, '::1', '1', '2022-01-18 13:06:45', '2022-01-18 13:06:45'),
(4, 'CRIMINAL', 'IMG-51892.computer-equipment-in-dark.jpg', 'Repairmen suspected of installing ransomware on customers’ PCs. Arrests in South Korea                                                                        ', '', '2022-01-20', 1, '::1', '1', '2022-01-18 13:08:20', '2022-01-18 13:08:20');

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
  `mission` longtext NOT NULL,
  `vision` longtext NOT NULL,
  `moto` longtext NOT NULL,
  `biography` longtext NOT NULL,
  `upload_biography` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `ip_add` varchar(200) NOT NULL,
  `entry_by` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_about_us`
--

INSERT INTO `manage_about_us` (`id`, `title`, `description`, `year_of_experience`, `number_of_employee`, `number_of_partners`, `background_color`, `heading`, `mission`, `vision`, `moto`, `biography`, `upload_biography`, `image`, `ip_add`, `entry_by`, `status`, `updated_at`, `created_at`) VALUES
(1, 'We know how to protect you.', '<p><span style=\"font-family: &quot;Source Sans Pro&quot;;\">﻿</span><font face=\"Source Sans Pro\">HSOC Cyber, formerly Professional Certifications and Consulting Services,&nbsp;<br></font></p><p><font face=\"Source Sans Pro\">is a service-disabled, veteran-owned small business (SDVOSB).&nbsp;</font></p><p><font face=\"Source Sans Pro\">Since 2016,&nbsp;</font></p><p><font face=\"Source Sans Pro\">HSOC Cyber has provided certification and real skill training in information technology, cybersecurity, and project management.&nbsp;</font></p><p><font face=\"Source Sans Pro\">As a result of COVID-19, HSOC Cyber altered its business model from the live classroom training to live online training in the form of an internship,&nbsp;</font></p><p><font face=\"Source Sans Pro\">and all from the comfort of your home. At HSOC Cyber, we work on real projects and tasks that equate to real experience versus attending an online class to complete assignments.</font></p>', '', '', '', '', '', '<br>', '', '                                                                                \r\n                                    ', '<span style=\"color: rgb(51, 51, 51); font-family: Heebo, sans-serif; text-align: justify;\">Accomplished cybersecurity professional with over 20 years of combined law enforcement, physical security, network security, risk management, and executive protection experience. Over 16 years specific counterintelligence, technical surveillance countermeasures, and cybersecurity experience focused on proactively protecting the infrastructure and security of company resources and data. Proven project manager, strategist, educator, and technologist with demonstrated leadership ability to set strategic direction, align teams and their performance, and achieve desired results with greater efficiency and effectiveness. Collaborative team leader, college instructor, certification instructor, skill-based instruction, and effective communicator with the ability to work well both independently and in group settings, as well as the ability to engage with others throughout the organization to set and achieve common goals.</span>                                                                                \r\n                                    ', 'IMG-68489.about_1.png', 'about_1.png', '::1', '1', '1', '2022-01-17 15:57:51', '2022-01-17 15:57:51');

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
-- Table structure for table `manage_feature`
--

CREATE TABLE `manage_feature` (
  `id` int(11) NOT NULL,
  `feature_type` varchar(100) NOT NULL,
  `feature_title` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `ip_add` varchar(100) NOT NULL,
  `entry_by` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manage_feature_details`
--

CREATE TABLE `manage_feature_details` (
  `id` int(11) NOT NULL,
  `icon` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `status` varchar(11) NOT NULL,
  `ip_add` varchar(100) NOT NULL,
  `entry_by` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manage_service`
--

CREATE TABLE `manage_service` (
  `id` int(11) NOT NULL,
  `icon_upload` varchar(255) NOT NULL,
  `image_upload` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `ip_add` varchar(200) NOT NULL,
  `entry_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Welcome to Home Security Operations Center (HSOC) Cyber!', 'Securing Your Home Beyond the Physical', 'Discover More', '', '', '::1', '1', '1', '2022-01-17 14:42:30', '2022-01-17 14:42:30');

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
(1, 'Securing Your Business', '                                    <div>Whether you have a home-based business, a small- or medium-sized business, HSOC Cyber professional interns will consult with you to help </div><div>you achieve your business objectives and provide the protection and defense you deserve. Contact us to learn more. We want to help you; </div><div>therefore, we provide services at an extremely affordable rate</div>                                                                                                            ', '#000000', '#000000', 'IMG-83820.Comp_7.gif', 'IMG-70857.head_business.jpg', '::1', '1', '1', '2022-01-17 14:56:24'),
(2, 'Securing Your Home', '                                    <div>Gain real cybersecurity experience by building your own HSOC. </div><div>Apply the same tools and techniques that protect and defend organizations in your home, </div><div>and then take those new skills with you to your professional organization.</div><div> Learn more about the HSOC Cyber Internship Program.</div>                                                                                                            ', '#000000', '#000000', 'IMG-29869.Comp_7.gif', 'IMG-48201.head_family.jpg', '::1', '1', '1', '2022-01-17 14:59:48');

-- --------------------------------------------------------

--
-- Table structure for table `manage_syllabus`
--

CREATE TABLE `manage_syllabus` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(200) NOT NULL,
  `ip_add` varchar(200) NOT NULL,
  `entry_by` varchar(200) NOT NULL,
  `status` varchar(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_syllabus`
--

INSERT INTO `manage_syllabus` (`id`, `title`, `description`, `image`, `ip_add`, `entry_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Information Security Learning Continuum', '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; color: rgb(51, 51, 51); font-family: Heebo, sans-serif;\"><li style=\"margin-top: 0px; margin-bottom: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 22px; padding: 0px 0px 6px;\"><a href=\"https://www.nist.gov/system/files/documents/2021/09/29/FinalSlides_AwarenessWorkshop_28sep2021%20%28508%20Compliant%29.pdf\" target=\"_blank\" style=\"color: rgb(5, 18, 42); box-shadow: none;\">Developing a Workforce for Security: A NICE Framework Workshop</a></li><li style=\"margin-top: 0px; margin-bottom: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 22px; padding: 0px 0px 6px;\"><a href=\"https://niccs.cisa.gov/workforce-development/cyber-security-workforce-framework\" target=\"_blank\" style=\"color: rgb(5, 18, 42); box-shadow: none;\">cyber-security-workforce-framework</a></li></ul>                                                                        ', 'IMG-84261.nisttt.png', '::1', '1', '1', '2022-01-17 15:38:35', '2022-01-17 15:38:35'),
(2, 'Infosec Wheel', '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; color: rgb(51, 51, 51); font-family: Heebo, sans-serif;\"><li style=\"margin-top: 0px; margin-bottom: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 22px; padding: 0px 0px 6px;\"><a href=\"https://hackernoon.com/introducing-the-infosec-colour-wheel-blending-developers-with-red-and-blue-security-teams-6437c1a07700\" target=\"_blank\" style=\"color: rgb(5, 18, 42); box-shadow: none;\">Introducing the InfoSec colour wheel- blending developers with red and blue security teams</a></li></ul>                                                                        ', 'IMG-10295.nistt.png', '::1', '1', '1', '2022-01-17 15:39:32', '2022-01-17 15:39:32'),
(3, 'Risk Management Framework', '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; color: rgb(51, 51, 51); font-family: Heebo, sans-serif;\"><li style=\"margin-top: 0px; margin-bottom: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; line-height: 22px; padding: 0px 0px 6px;\"><a href=\"https://csrc.nist.gov/projects/risk-management/about-rmf\" target=\"_blank\" style=\"color: rgb(5, 18, 42); box-shadow: none;\">NIST Risk Management Framework RMF</a></li></ul>                                                                        ', 'IMG-9894.nist.png', '::1', '1', '1', '2022-01-17 15:40:46', '2022-01-17 15:40:46');

-- --------------------------------------------------------

--
-- Table structure for table `manage_team`
--

CREATE TABLE `manage_team` (
  `id` int(11) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `photo` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `facebook_link` varchar(100) NOT NULL,
  `twitter_link` varchar(100) NOT NULL,
  `linkdin` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `ip_add` varchar(11) NOT NULL,
  `entry_by` varchar(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manage_testimonial`
--

CREATE TABLE `manage_testimonial` (
  `id` int(11) NOT NULL,
  `heading1` varchar(100) NOT NULL,
  `heading2` varchar(100) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `photo` varchar(100) NOT NULL,
  `backgroundimage` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `ip_add` varchar(100) NOT NULL,
  `entry_by` varchar(100) NOT NULL,
  `updated_at` datetime DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_testimonial`
--

INSERT INTO `manage_testimonial` (`id`, `heading1`, `heading2`, `rating`, `name`, `designation`, `description`, `photo`, `backgroundimage`, `status`, `ip_add`, `entry_by`, `updated_at`, `created_at`) VALUES
(1, 'What they say about us.', '', '5', 'Amber White', 'Biologist', '<span style=\"color: rgb(32, 33, 36); font-family: &quot;Source Sans Pro&quot;; font-size: 12px; white-space: pre-wrap;\">Quam auctor inceptos purus nec elementum consectetur. Faucibus nullam gravida quisque class a metus vitae venenatis ornare. Tempus ut accumsan natoque mattis porttitor aliquam felis taciti. Sagittis primis at nibh sociosqu platea turpis suscipit. Sociosqu nostra eget magnis viverra eleifend netus.</span>                                                                        ', 'IMG-48927.test3.png', '', 1, '::1', '1', '2022-01-18 12:25:35', '2022-01-18 12:25:35'),
(2, 'What they say about us.', '', '4', 'Andre Harris', 'Biologist', '<span style=\"color: rgb(32, 33, 36); font-family: &quot;Source Sans Pro&quot;; font-size: 12px; white-space: pre-wrap;\">Quam auctor inceptos purus nec elementum consectetur. Faucibus nullam gravida quisque class a metus vitae venenatis ornare. Tempus ut accumsan natoque mattis porttitor aliquam felis taciti. Sagittis primis at nibh sociosqu platea turpis suscipit. Sociosqu nostra eget magnis viverra eleifend netus.</span>                                                                        ', 'IMG-21623.test1.png', '', 1, '::1', '1', '2022-01-18 12:28:25', '2022-01-18 12:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `manage_trusted_brand`
--

CREATE TABLE `manage_trusted_brand` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `background_color` varchar(200) NOT NULL,
  `upload_logo` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `ip_add` varchar(200) NOT NULL,
  `entry_by` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_trusted_brand`
--

INSERT INTO `manage_trusted_brand` (`id`, `title`, `background_color`, `upload_logo`, `description`, `ip_add`, `entry_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Trusted by International Brand', '#000000', '', '<div>Erat morbi si adipiscing laoreet praesent.</div><div>&nbsp;Adipiscing duis laoreet orci aliquet ex dis</div><div>&nbsp;auctor platea. Penatibus enim volutpat&nbsp;</div><div>&nbsp;lectus curae ac porta etiam erat quam justo.</div>                                                                         ', '::1', '1', 1, '2022-01-17 15:23:59', '0000-00-00 00:00:00'),
(2, '', '', 'logo_2.png', '', '', '', 0, '2022-01-17 15:27:00', '0000-00-00 00:00:00'),
(3, '', '', 'logo_3.png', '', '', '', 0, '2022-01-17 15:27:00', '0000-00-00 00:00:00'),
(4, '', '', 'logo_4_(1).png', '', '', '', 0, '2022-01-17 15:27:00', '0000-00-00 00:00:00'),
(5, '', '', 'logo_4.png', '', '', '', 0, '2022-01-17 15:27:00', '0000-00-00 00:00:00'),
(6, '', '', 'logo_9.png', '', '', '', 0, '2022-01-17 15:27:00', '0000-00-00 00:00:00'),
(7, '', '', 'logo_10.png', '', '', '', 0, '2022-01-17 15:27:00', '0000-00-00 00:00:00'),
(8, '', '', 'logo_11.png', '', '', '', 0, '2022-01-17 15:27:00', '0000-00-00 00:00:00'),
(9, '', '', 'logo_12.png', '', '', '', 0, '2022-01-17 15:27:00', '0000-00-00 00:00:00');

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
  `facebook` varchar(200) NOT NULL,
  `linkdin` varchar(200) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `header_background_color` varchar(200) NOT NULL,
  `footer_background_color` varchar(200) NOT NULL,
  `footer_content` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `ip_add` varchar(200) NOT NULL,
  `entry_by` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_website_setting`
--

INSERT INTO `manage_website_setting` (`id`, `logo`, `address`, `email`, `phone`, `embed_map`, `copy_write`, `design_by`, `facebook`, `linkdin`, `instagram`, `twitter`, `header_background_color`, `footer_background_color`, `footer_content`, `status`, `ip_add`, `entry_by`, `created_at`, `updated_at`) VALUES
(1, 'IMG-56237.Comp_7.gif', '                                    Jln Cempaka Wangi No 22, Jakarta - Indonesia                                                                                                            ', 'support@mail.tld, business@mail.tld', '8877665544', 'https://maps.google.com/maps?q=Jakarta&t=m&z=12&output=embed&iwloc=near', 'Vcana Global', 'Anup Dubey', '', '', '', '', '#000000', '#000000', '', 1, '::1', '1', '2022-01-07 17:52:56', '2022-01-07 17:52:56');

-- --------------------------------------------------------

--
-- Table structure for table `manage_welcome_message`
--

CREATE TABLE `manage_welcome_message` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `message` longtext NOT NULL,
  `small_image` varchar(100) NOT NULL,
  `full_width` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `entry_by` varchar(200) NOT NULL,
  `ip_add` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_welcome_message`
--

INSERT INTO `manage_welcome_message` (`id`, `title`, `message`, `small_image`, `full_width`, `status`, `entry_by`, `ip_add`, `created_at`, `updated_at`) VALUES
(1, 'Welcome to HOSC Security', '<span style=\"color: rgb(51, 51, 51); font-family: Heebo, sans-serif; text-align: justify;\">At HSOC Cyber, security starts at home! Our voluntary, non-paid internship program is designed to help you gain quality, resume-building cybersecurity experience quickly. We empower you to change your life with a proven, real-time, live, hands-on training system that contributes to ethics and national security within the cybersecurity profession. Contact us to learn more about the HSOC Cyber Internship Program. Join us on Patreon today!</span>                                                                             \r\n                                    ', 'abt1.jpg,abt11.jpg,abt12.jpg', 'IMG-78357.abt4.jpg', 1, '1', '::1', '2022-01-17 15:19:52', '2022-01-17 15:19:52');

-- --------------------------------------------------------

--
-- Table structure for table `service_details`
--

CREATE TABLE `service_details` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `logo` varchar(200) NOT NULL,
  `ip_add` varchar(200) NOT NULL,
  `entry_by` varchar(200) NOT NULL,
  `status` varchar(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service_section`
--

CREATE TABLE `service_section` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(200) NOT NULL,
  `ip_add` varchar(200) NOT NULL,
  `entry_by` varchar(200) NOT NULL,
  `status` varchar(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_section`
--

INSERT INTO `service_section` (`id`, `title`, `description`, `image`, `ip_add`, `entry_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Self-Control', '<p><span style=\"font-family: &quot;Source Sans Pro&quot;;\">Completing tasks and projects without letting distractors or bad habits get in the way (e.g., adaptability, self-awareness, self-confidence, stress management)</span><span style=\"font-family: &quot;Source Sans Pro&quot;;\">﻿</span></p>', 'IMG-5149.3-protection-1 - Copy.png', '::1', '1', '1', '2022-01-17 16:06:42', '2022-01-17 16:06:42'),
(2, 'Productivity ', '                                     <span style=\"color: rgb(32, 33, 36); font-family: &quot;Source Sans Pro&quot;; font-size: 12px; white-space: pre-wrap;\">Using your non-vocational skills and commitment to complete tasks (e.g., attention to detail, crisis management, effective decision making, troubleshooting) </span>                                                                                                             ', 'IMG-65825.10-server-1.png', '::1', '1', '1', '2022-01-18 12:04:52', '2022-01-18 12:04:52'),
(3, 'Wisdom', '<span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space: pre-wrap;\">Real-world skills applied based off experience, knowledge, and good judgment (e.g., conflict resolution instincts, creativity in the face of challenges, critical thinking, supervising with confidence)</span>                                                                         ', 'IMG-4636.2-database-1.png', '::1', '1', '1', '2022-01-18 12:06:49', '2022-01-18 12:06:49'),
(4, 'Perception', '<span style=\"color: rgb(32, 33, 36); font-family: &quot;Source Sans Pro&quot;; font-size: 12px; white-space: pre-wrap;\">Experience and practice that provide insight to point things out with courage and without influence from others (e.g., designing, mapping, judging people and situations, strategic thinking)</span>                                                                         ', 'IMG-90314.16-antivirus-1.png', '::1', '1', '1', '2022-01-18 12:10:23', '2022-01-18 12:10:23'),
(5, 'Influence', '<span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space: pre-wrap;\">The skills needed to inspire others to act (e.g., constructive criticism, presentation skills, team building, writing for impact)</span>                                                                         ', 'IMG-59136.4-payment-protection-1.png', '::1', '1', '1', '2022-01-18 12:12:29', '2022-01-18 12:12:29'),
(6, ' Secure Transactions ', '                                     <span style=\"color: rgb(32, 33, 36); font-family: consolas, \" lucida=\"\" console\",=\"\" \"courier=\"\" new\",=\"\" monospace;=\"\" font-size:=\"\" 12px;=\"\" white-space:=\"\" pre-wrap;\"=\"\"><b>Quis neque fringilla duis auctor nam laoreet porttitor morbi diam suscipit montes </b></span>                                                                                                             ', 'IMG-60327.25-shopping-online-1.png', '::1', '1', '1', '2022-01-18 12:13:19', '2022-01-18 12:13:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `manage_feature`
--
ALTER TABLE `manage_feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_feature_details`
--
ALTER TABLE `manage_feature_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_service`
--
ALTER TABLE `manage_service`
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
-- Indexes for table `manage_syllabus`
--
ALTER TABLE `manage_syllabus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_team`
--
ALTER TABLE `manage_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_testimonial`
--
ALTER TABLE `manage_testimonial`
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
-- Indexes for table `manage_welcome_message`
--
ALTER TABLE `manage_welcome_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_details`
--
ALTER TABLE `service_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_section`
--
ALTER TABLE `service_section`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `manage_feature`
--
ALTER TABLE `manage_feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manage_feature_details`
--
ALTER TABLE `manage_feature_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manage_service`
--
ALTER TABLE `manage_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manage_slider`
--
ALTER TABLE `manage_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manage_sliderbox`
--
ALTER TABLE `manage_sliderbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manage_syllabus`
--
ALTER TABLE `manage_syllabus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manage_team`
--
ALTER TABLE `manage_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manage_testimonial`
--
ALTER TABLE `manage_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manage_trusted_brand`
--
ALTER TABLE `manage_trusted_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `manage_website_setting`
--
ALTER TABLE `manage_website_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manage_welcome_message`
--
ALTER TABLE `manage_welcome_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_details`
--
ALTER TABLE `service_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_section`
--
ALTER TABLE `service_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
