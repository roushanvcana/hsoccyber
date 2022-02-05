-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2022 at 12:43 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

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
(1, 'COMPUTER VIRUS', 'IMG-6610.cropped-view-of-african-american-businessman-using-laptop-and-smartphone-in-car-with-cyber-security-e1624634401494.jpg', '                                    City of Liège hit by ransomware, Ryuk suspected                                    ', 'City of Liège hit by ransomware, Ryuk suspected', '2022-01-18', 1, '::1', '1', '2022-01-18 12:33:10', '2022-01-18 12:33:10'),
(2, 'FEATURED', 'IMG-64815.woman-working-on-computer-outdoors-e1624634377985.jpg', '                                    Make the Internet a Better, Safer Place on Stop Cyberbullying Day                                    ', '', '2022-01-18', 1, '::1', '1', '2022-01-18 12:34:58', '2022-01-18 12:34:58'),
(3, 'CYBER SECURITY', 'IMG-47415.male-teenage-hacker-with-data-reflected-from-computer-screen.jpg', '                                    Threat Actors Spread Agent Tesla Disguised as COVID-19 Vaccination Registration                                                                                                            ', '', '2022-01-20', 1, '::1', '1', '2022-01-18 13:06:45', '2022-01-18 13:06:45'),
(4, 'CRIMINAL', 'IMG-89369.computer-equipment-in-dark.jpg', '                                    Repairmen suspected of installing ransomware on customers’ PCs. Arrests in South Korea                                                                                                            ', '', '2022-01-20', 1, '::1', '1', '2022-01-18 13:08:20', '2022-01-18 13:08:20');

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
  `small_bio_img` varchar(100) NOT NULL,
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

INSERT INTO `manage_about_us` (`id`, `title`, `description`, `year_of_experience`, `number_of_employee`, `number_of_partners`, `background_color`, `heading`, `mission`, `vision`, `moto`, `biography`, `upload_biography`, `small_bio_img`, `image`, `ip_add`, `entry_by`, `status`, `updated_at`, `created_at`) VALUES
(1, 'We know how to protect you.', '                                     <span style=\"sans-serif;\">HSOC Cyber, formerly Professional Certifications and Consulting Services, is a service-disabled, veteran-owned small business (SDVOSB). Since 2016, HSOC Cyber has provided certification and real skill training in information technology, cybersecurity, and project management. As a result of COVID-19, HSOC Cyber altered its business model from the live classroom training to live online training in the form of an internship, and all from the comfort of your home. At HSOC Cyber, we work on real projects and tasks that equate to real experience versus attending an online class to complete assignments.</span><br>                                        \r\n                                    ', '', '', '', '', '', '                                                                          <strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span><br> \r\n                                     \r\n                                    ', '                                        <strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>                                         \r\n                                     \r\n                                    ', '                                        <strong style=\"margin: 0px; padding: 0px; font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; text-align: justify;\"> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span>                                                                                                                        \r\n                                                                            \r\n                                                                            \r\n                                    ', '                                                                                <span style=\"color: rgb(51, 51, 51); font-family: Heebo, sans-serif; text-align: justify;\">Accomplished cybersecurity professional with over 20 years of combined law enforcement, physical security, network security, risk management, and executive protection experience. Over 16 years specific counterintelligence, technical surveillance countermeasures, and cybersecurity experience focused on proactively protecting the infrastructure and security of company resources and data. Proven project manager, strategist, educator, and technologist with demonstrated leadership ability to set strategic direction, align teams and their performance, and achieve desired results with greater efficiency and effectiveness. Collaborative team leader, college instructor, certification instructor, skill-based instruction, and effective communicator with the ability to work well both independently and in group settings, as well as the ability to engage with others throughout the organization to set and achieve common goals.</span>                                                                                \r\n                                                                            \r\n                                                                            \r\n                                    ', 'IMG-68489.about_1.png', '', 'live2.jpg,live21.jpg', '::1', '1', '1', '2022-01-17 15:57:51', '2022-01-17 15:57:51');

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
(1, 'Welcome to Home Security Operations Center (HSOC) Cyber!', 'Securing Your Home Beyond the Physical', 'Discover More', '', 'IMG-24745.OIP (1).jpg', '::1', '1', '1', '2022-01-17 14:42:30', '2022-01-17 14:42:30'),
(2, 'Welcome to Home Security Operations Center (HSOC) Cyber!', 'Securing Your Home Beyond the Physical', 'Discover More', '', 'IMG-15528.OIP.jpg', '::1', '1', '1', '2022-02-05 14:45:51', '2022-02-05 14:45:51'),
(3, '	Welcome to Home Security Operations Center (HSOC) Cyber!', 'Securing Your Home Beyond the Physical', 'Discover More', '', 'IMG-18201.600MINUTES-INFORMATION-AND-CYBER-SECURITY.jpg', '::1', '1', '1', '2022-02-05 14:46:18', '2022-02-05 14:46:18');

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
(1, 'Securing Your Business', '                                                                                                            <div>Whether you have a home-based business, a </div><div>small- or medium-sized business, HSOC </div><div>Cyber professional interns will consult with</div><div> you to help <span style=\"font-size: 1rem;\">you achieve your business</span></div><div><span style=\"font-size: 1rem;\"> objectives and provide the protection and </span></div><div><span style=\"font-size: 1rem;\">defense you deserve. Contact us to learn</span></div><div><span style=\"font-size: 1rem;\"> more. We want to help you;  </span><span style=\"font-size: 1rem;\">therefore, we </span></div><div><span style=\"font-size: 1rem;\">provide services at an extremely affordable rate</span></div>                                                                                                                                                                                    ', '#000000', '#000000', 'IMG-83820.Comp_7.gif', 'IMG-79282.head_business.jpg', '::1', '1', '1', '2022-01-17 14:56:24'),
(2, 'Securing Your Home', '                                                                                                            <div style=\"text-align: left;\">Gain real cybersecurity experience by building </div><div style=\"text-align: left;\">your own HSOC. <span style=\"font-size: 1rem;\">Apply the same tools and </span></div><div style=\"text-align: left;\"><span style=\"font-size: 1rem;\">techniques that protect and defend </span></div><div style=\"text-align: left;\"><span style=\"font-size: 1rem;\">organizations in your home, </span><span style=\"font-size: 1rem;\">and then take </span></div><div style=\"text-align: left;\"><span style=\"font-size: 1rem;\">those new skills with you to your professional</span></div><div style=\"text-align: left;\"><span style=\"font-size: 1rem;\"> organization.</span><span style=\"font-size: 1rem;\"> Learn more about the HSOC</span></div><div style=\"text-align: left;\"><span style=\"font-size: 1rem;\"> Cyber Internship Program.</span></div>                                                                                                                                                                                    ', '#000000', '#000000', 'IMG-29869.Comp_7.gif', 'IMG-7567.head_family.jpg', '::1', '1', '1', '2022-01-17 14:59:48');

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
(1, 'What they say about us.', '', '5', 'Amber White', 'Biologist', '<p style=\"color: #fff\">Quam auctor inceptos purus nec elementum consectetur. Faucibus nullam gravida quisque class a metus vitae venenatis ornare. Tempus ut accumsan natoque mattis porttitor aliquam felis taciti. Sagittis primis at nibh sociosqu platea turpis suscipit. Sociosqu nostra eget magnis viverra eleifend netus.</p>                                                                        ', 'IMG-48927.test3.png', '', 1, '::1', '1', '2022-01-18 12:25:35', '2022-01-18 12:25:35'),
(2, 'What they say about us.', '', '4', 'Andre Harris', 'Biologist', '<p style=\"color: #fff\">Quam auctor inceptos purus nec elementum consectetur. Faucibus nullam gravida quisque class a metus vitae venenatis ornare. Tempus ut accumsan natoque mattis porttitor aliquam felis taciti. Sagittis primis at nibh sociosqu platea turpis suscipit. Sociosqu nostra eget magnis viverra eleifend netus.</p>                                                                        ', 'IMG-21623.test1.png', '', 1, '::1', '1', '2022-01-18 12:28:25', '2022-01-18 12:28:25');

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
(1, 'Trusted Partners', '#eb1414', '', '                                                                          Erat morbi si adipiscing laoreet praesent. Adipiscing duis laoreet orci aliquet ex dis auctor platea. Penatibus enim volutpat lectus curae ac porta etiam erat quam justo.                                                                        ', '::1', '1', 1, '2022-01-17 15:23:59', '0000-00-00 00:00:00'),
(10, '', '', 'logo_1.png', '', '', '', 0, '2022-01-18 18:34:12', '0000-00-00 00:00:00'),
(11, '', '', 'logo_21.png', '', '', '', 0, '2022-01-18 18:34:12', '0000-00-00 00:00:00'),
(12, '', '', 'logo_31.png', '', '', '', 0, '2022-01-18 18:34:12', '0000-00-00 00:00:00'),
(13, '', '', 'logo_41.png', '', '', '', 0, '2022-01-18 18:34:12', '0000-00-00 00:00:00'),
(14, '', '', 'logo_5.png', '', '', '', 0, '2022-01-18 18:34:12', '0000-00-00 00:00:00'),
(15, '', '', 'logo_6.png', '', '', '', 0, '2022-01-18 18:34:12', '0000-00-00 00:00:00'),
(16, '', '', 'logo_7.png', '', '', '', 0, '2022-01-18 18:37:05', '0000-00-00 00:00:00'),
(17, '', '', 'logo_8.png', '', '', '', 0, '2022-01-18 18:37:05', '0000-00-00 00:00:00'),
(18, '', '', 'logo_91.png', '', '', '', 0, '2022-01-18 18:37:05', '0000-00-00 00:00:00'),
(19, '', '', 'logo_101.png', '', '', '', 0, '2022-01-18 18:37:05', '0000-00-00 00:00:00'),
(20, '', '', 'logo_111.png', '', '', '', 0, '2022-01-18 18:37:05', '0000-00-00 00:00:00'),
(21, '', '', 'logo_121.png', '', '', '', 0, '2022-01-18 18:37:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `manage_webmodel`
--

CREATE TABLE `manage_webmodel` (
  `id` int(11) NOT NULL,
  `heading` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `model_button` varchar(200) NOT NULL,
  `prerequisites` longtext NOT NULL,
  `system_requirements` longtext NOT NULL,
  `status` int(11) NOT NULL,
  `ip_add` varchar(200) NOT NULL,
  `entry_by` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_webmodel`
--

INSERT INTO `manage_webmodel` (`id`, `heading`, `description`, `model_button`, `prerequisites`, `system_requirements`, `status`, `ip_add`, `entry_by`, `created_at`, `updated_at`) VALUES
(1, 'Your Cybersecurity Coach', '                                     <p class=\"pup_txt\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: center; color: rgb(51, 51, 51); font-family: \"Hina Mincho\", sans-serif; font-size: 20px; line-height: 24px; padding: 0px; background-color: rgb(254, 254, 254);\">Hey! Are you new to cybersecurity or interested in transitioning into the profession?</p><p class=\"pup_txt\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: center; color: rgb(51, 51, 51); font-family: \"Hina Mincho\", sans-serif; font-size: 20px; line-height: 24px; padding: 0px; background-color: rgb(254, 254, 254);\">Great! You’re in the right place.</p><p class=\"pup_txt\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; text-align: center; color: rgb(51, 51, 51); font-family: \"Hina Mincho\", sans-serif; font-size: 20px; line-height: 24px; padding: 0px; background-color: rgb(254, 254, 254);\">Gain experience and confidence now every Tuesday and Thursday from 6:30pm to 8:30pm.</p>                                                                                                             ', 'Join me on Patreon', '<ul style=\"margin-bottom: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: rgb(254, 254, 254); color: rgb(51, 51, 51); font-family: Heebo, sans-serif; text-align: center;\"><li style=\"margin-top: 0px; margin-bottom: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; text-align: left; line-height: 22px; padding: 0px 0px 10px;\">No previous information technology or cybersecurity knowledge required</li><li style=\"margin-top: 0px; margin-bottom: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; text-align: left; line-height: 22px; padding: 0px 0px 10px;\">Willing to learn</li><li style=\"margin-top: 0px; margin-bottom: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; text-align: left; line-height: 22px; padding: 0px 0px 10px;\">The ability to work independently and as a team</li><li style=\"margin-top: 0px; margin-bottom: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; text-align: left; line-height: 22px; padding: 0px 0px 10px;\">Complete the&nbsp;<a href=\"https://curiosity.britannica.com/curiosity-personality-quiz.html\" target=\"_blank\" style=\"color: rgb(33, 102, 168) !important;\">Britannica Curiosity Compass</a>&nbsp;(3-minute quiz)</li><li style=\"margin-top: 0px; margin-bottom: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; text-align: left; line-height: 22px; padding: 0px 0px 10px;\">Complete the&nbsp;<a href=\"http://www.humanmetrics.com/personality\" target=\"_blank\" style=\"color: rgb(33, 102, 168) !important;\">Personality Test</a>&nbsp;(10-minute quiz)</li></ul>                                                                         ', '<h2 style=\"margin-top: 0.5rem; margin-bottom: 1rem; font-weight: var( --e-global-typography-9f2a5a0-font-weight ); line-height: var( --e-global-typography-9f2a5a0-line-height ); font-size: var( --e-global-typography-9f2a5a0-font-size ); font-family: var( --e-global-typography-9f2a5a0-font-family ), Sans-serif; color: rgb(255, 255, 255); background-color: rgb(254, 254, 254);\"></h2><ul style=\"margin-bottom: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: rgb(254, 254, 254); color: rgb(51, 51, 51); font-family: Heebo, sans-serif; text-align: center;\"><li style=\"margin-top: 0px; margin-bottom: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; text-align: left; line-height: 22px; padding: 0px 0px 10px;\">Laptop/Desktop</li><li style=\"margin-top: 0px; margin-bottom: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; text-align: left; line-height: 22px; padding: 0px 0px 10px;\">8GB of RAM minimum</li><li style=\"margin-top: 0px; margin-bottom: 0px; border: 0px; outline: 0px; vertical-align: baseline; background: transparent; text-align: left; line-height: 22px; padding: 0px 0px 10px;\">256GB hard drive minimum</li></ul>                                                                         ', 1, '::1', '1', '2022-01-19 14:21:49', '2022-01-19 14:21:49');

-- --------------------------------------------------------

--
-- Table structure for table `manage_website_setting`
--

CREATE TABLE `manage_website_setting` (
  `id` int(11) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `footer_logo` varchar(100) NOT NULL,
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
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `about_breadcom` varchar(100) NOT NULL,
  `service_breadcom` varchar(100) NOT NULL,
  `contact_breadcom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_website_setting`
--

INSERT INTO `manage_website_setting` (`id`, `logo`, `footer_logo`, `address`, `email`, `phone`, `embed_map`, `copy_write`, `design_by`, `facebook`, `linkdin`, `instagram`, `twitter`, `header_background_color`, `footer_background_color`, `footer_content`, `status`, `ip_add`, `entry_by`, `created_at`, `updated_at`, `about_breadcom`, `service_breadcom`, `contact_breadcom`) VALUES
(1, 'IMG-54070.Comp_12.gif', 'IMG-52733.Comp_13.gif', '                                                                                                                                                                                                                        Jln Cempaka Wangi No 22, Jakarta - Indonesia                                        ', 'support@mail.tld, business@mail.tld', '8877665544', 'https://maps.google.com/maps?q=Jakarta&t=m&z=12&output=embed&iwloc=near', 'Vcana Global', 'Anup Dubey', 'https://www.facebook.com', 'https://in.linkedin.com/', 'https://www.instagram.com/', 'https://twitter.com/?lang=en-in', '#fcfcfc', '#000000', '', 1, '::1', '1', '2022-01-07 17:52:56', '2022-01-07 17:52:56', 'IMG-29276.about-banner.jpg', 'IMG-59073.service-banner.jpg', 'IMG-94540.contact-us.jpg');

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
(1, 'Welcome to HOSC Security', '                                                                                                               <span style=\"color: rgb(51, 51, 51); font-family: Heebo, sans-serif; text-align: justify;\">At HSOC Cyber, security starts at home! Our voluntary, non-paid internship program is designed to help you gain quality, resume-building cybersecurity experience quickly. We empower you to change your life with a proven, real-time, live, hands-on training system that contributes to ethics and national security within the cybersecurity profession. Contact us to learn more about the HSOC Cyber Internship Program. Join us on Patreon today!</span>                                                                             \r\n                                                                            \r\n                                                                            \r\n                                                                            \r\n                                    ', 'abt3.jpg,abt31.jpg,abt32.jpg', 'IMG-65126.abt4.jpg', 1, '1', '::1', '2022-01-17 15:19:52', '2022-01-17 15:19:52');

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
(1, 'Self-Control', '                                                                          <p></p><p>Completing tasks and projects without letting distractors or bad habits get in the way (e.g., adaptability, self-awareness, self-confidence, stress management)</p><p></p>                                                                        ', 'IMG-5149.3-protection-1 - Copy.png', '::1', '1', '1', '2022-01-17 16:06:42', '2022-01-17 16:06:42'),
(2, 'Productivity ', '<p>Using your non-vocational skills and commitment to complete tasks (e.g., attention to detail, crisis management, effective decision making, troubleshooting)</p>', 'IMG-65825.10-server-1.png', '::1', '1', '1', '2022-01-18 12:04:52', '2022-01-18 12:04:52'),
(3, 'Wisdom', '<p>Real-world skills applied based off experience, knowledge, and good judgment (e.g., conflict resolution instincts, creativity in the face of challenges, critical thinking, supervising with confidence)</p>                                                                         ', 'IMG-4636.2-database-1.png', '::1', '1', '1', '2022-01-18 12:06:49', '2022-01-18 12:06:49'),
(4, 'Perception', '<p>Experience and practice that provide insight to point things out with courage and without influence from others (e.g., designing, mapping, judging people and situations, strategic thinking)</p>                                                                         ', 'IMG-90314.16-antivirus-1.png', '::1', '1', '1', '2022-01-18 12:10:23', '2022-01-18 12:10:23'),
(5, 'Influence', '<p>The skills needed to inspire others to act (e.g., constructive criticism, presentation skills, team building, writing for impact)</p>                                                                         ', 'IMG-59136.4-payment-protection-1.png', '::1', '1', '1', '2022-01-18 12:12:29', '2022-01-18 12:12:29'),
(6, ' Secure Transactions ', '                                     <p>Quis neque fringilla duis auctor nam laoreet porttitor morbi diam suscipit montes </p>                                                                                                             ', 'IMG-60327.25-shopping-online-1.png', '::1', '1', '1', '2022-01-18 12:13:19', '2022-01-18 12:13:19');

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
-- Indexes for table `manage_evaluation`
--
ALTER TABLE `manage_evaluation`
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
-- Indexes for table `manage_webmodel`
--
ALTER TABLE `manage_webmodel`
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
-- AUTO_INCREMENT for table `manage_evaluation`
--
ALTER TABLE `manage_evaluation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `manage_webmodel`
--
ALTER TABLE `manage_webmodel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
