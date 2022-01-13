-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 02:21 PM
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
(1, 'COMPUTER VIRUS', 'IMG-6266.happy-female-surfing-internet-on-laptop-at-home.jpg', '<div style=\"margin: 0px 14.4px 0px 28.8px; padding: 0px; width: 436.8px; float: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div><div style=\"margin: 0px 28.8px 0px 14.4px; padding: 0px; width: 436.8px; float: right; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">Why do we use it?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p></div><br style=\"margin: 0px; padding: 0px; clear: both; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: center;\"><div style=\"margin: 0px 14.4px 0px 28.8px; padding: 0px; width: 436.8px; float: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">Where does it come from?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p></div><div style=\"margin: 0px 28.8px 0px 14.4px; padding: 0px; width: 436.8px; float: right; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">Where can I get some?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p></div>', 'Anup Dubey', '2022-01-06', 1, '::1', '1', '2022-01-10 17:35:45', '2022-01-10 17:35:45'),
(2, 'FEATURED', 'IMG-55652.happy-female-surfing-internet-on-laptop-at-home.jpg', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</span>                                                                        ', 'Anup Dubey', '2022-01-14', 1, '::1', '1', '2022-01-10 17:37:32', '2022-01-10 17:37:32'),
(3, 'Programmer', 'IMG-39019.happy-young-colleagues-sitting-in-office-coworking-using-laptop.jpg', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</span>                                                                        ', 'Rakesh Kumar', '2022-01-05', 1, '::1', '1', '2022-01-10 17:38:10', '2022-01-10 17:38:10'),
(4, 'Cyber Set', 'IMG-18205.happy-young-colleagues-sitting-in-office-coworking-using-laptop.jpg', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</span>                                                                        ', 'Vishal sud', '2022-01-21', 1, '::1', '1', '2022-01-10 17:43:01', '2022-01-10 17:43:01');

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
  `ip_add` varchar(200) NOT NULL,
  `entry_by` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_about_us`
--

INSERT INTO `manage_about_us` (`id`, `title`, `description`, `year_of_experience`, `number_of_employee`, `number_of_partners`, `background_color`, `heading`, `mission`, `vision`, `moto`, `biography`, `upload_biography`, `ip_add`, `entry_by`, `status`, `updated_at`, `created_at`) VALUES
(1, 'About us', '<p style=\"margin-bottom: 0.9rem; text-align: justify; color: rgb(51, 51, 51); font-family: Heebo, sans-serif;\">HSOC Cyber, formerly Professional Certifications and Consulting Services, is a service-disabled, veteran-owned small business (SDVOSB). Since 2016, HSOC Cyber has provided certification and real skill training in information technology, cybersecurity, and project management. As a result of COVID-19, HSOC Cyber altered its business model from the live classroom training to live online training in the form of an internship, and all from the comfort of your home. At HSOC Cyber, we work on real projects and tasks that equate to real experience versus attending an online class to complete assignments.</p><p style=\"margin-bottom: 0.9rem; text-align: justify; color: rgb(51, 51, 51); font-family: Heebo, sans-serif;\">Whether new to the industry or experienced, each HSOC Cyber team member is considered a cybersecurity intern from day one. We practice with a variety of real industry tools and techniques used in federal agencies, and small to large businesses. We work in a peer-supported environment, where team members conduct a myriad of tasks and projects related to popular cybersecurity roles within the National Initiative for Cybersecurity Education (NICE) Workforce Framework, the INFOSEC Wheel, and the National Institute of Standards and Technology (NIST) Risk Management Framework.</p>                                                                             \r\n                                    ', '', '', '', '', '', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</span>', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</span>                                         \r\n                                    ', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</span>                                                                                \r\n                                    ', '<span style=\"color: rgb(51, 51, 51); font-family: Heebo, sans-serif; text-align: justify;\">Accomplished cybersecurity professional with over 20 years of combined law enforcement, physical security, network security, risk management, and executive protection experience. Over 16 years specific counterintelligence, technical surveillance countermeasures, and cybersecurity experience focused on proactively protecting the infrastructure and security of company resources and data. Proven project manager, strategist, educator, and technologist with demonstrated leadership ability to set strategic direction, align teams and their performance, and achieve desired results with greater efficiency and effectiveness. Collaborative team leader, college instructor, certification instructor, skill-based instruction, and effective communicator with the ability to work well both independently and in group settings, as well as the ability to engage with others throughout the organization to set and achieve common goals.</span>                                                                                \r\n                                    ', 'IMG-53878.about_1.png', '::1', '1', '1', '2022-01-07 19:38:52', '2022-01-07 19:38:52');

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

--
-- Dumping data for table `manage_service`
--

INSERT INTO `manage_service` (`id`, `icon_upload`, `image_upload`, `title`, `description`, `status`, `ip_add`, `entry_by`, `updated_at`, `created_at`) VALUES
(2, 'IMG-1690.3-protection-1.png', 'IMG-1690.3-protection-1.png', 'Self-Control', '<div>Completing tasks and projects without letting</div><div>distractors or bad habits get in the way (e.g.,</div><div>adaptability, self-awareness, self-confidence,</div><div>stress management)</div>', 1, '::1', 1, '2022-01-10 15:05:52', '2022-01-10 15:05:52'),
(3, '', 'IMG-64170.2-database-1.png', 'Productivity', '<div>Completing tasks and projects without letting</div><div>distractors or bad habits get in the way (e.g.,</div><div>adaptability, self-awareness, self-confidence,</div><div>stress management)</div>', 1, '::1', 1, '2022-01-10 15:07:06', '2022-01-10 15:07:06'),
(4, '', 'IMG-99371.4-payment-protection-1.png', 'Wisdom', '<div>Real-world skills applied based off experience,</div><div>knowledge, and good judgment (e.g., conflict</div><div>resolution instincts, creativity in the face of</div><div>challenges, critical thinking, supervising with</div><div>confidence)</div>', 1, '::1', 1, '2022-01-10 15:08:05', '2022-01-10 15:08:05'),
(5, '', 'IMG-75567.10-server-1.png', 'Perception', '<div>Experience and practice that provide insight to point</div><div>things out with courage and without influence from</div><div>others (e.g., designing, mapping, judging people and</div><div>situations, strategic thinking)</div>                                                                         ', 1, '::1', 1, '2022-01-10 15:08:45', '2022-01-10 15:08:45'),
(6, '', 'IMG-26073.18-laptop-1.png', 'Influence', '<div>The skills needed to inspire others to act (e.g.,</div><div>constructive criticism, presentation skills, team</div><div>building, writing for impact)</div>                                                                         ', 1, '::1', 1, '2022-01-10 15:15:25', '2022-01-10 15:15:25'),
(7, '', 'IMG-9232.25-shopping-online-1.png', 'Secure Transactions', '<div>The skills needed to inspire others to act (e.g.,</div><div>constructive criticism, presentation skills, team</div><div>building, writing for impact)</div>                                                                         ', 1, '::1', 1, '2022-01-10 15:17:08', '2022-01-10 15:17:08'),
(8, '2-database-11.png', '11-secret-1.png', '', '', 0, '', 0, '2022-01-13 12:12:06', '2022-01-13 12:12:06'),
(9, '3-protection-11.png', '16-antivirus-1.png', '', '', 0, '', 0, '2022-01-13 12:12:06', '2022-01-13 12:12:06'),
(10, '4-payment-protection-11.png', '18-laptop-1.png', '', '', 0, '', 0, '2022-01-13 12:12:06', '2022-01-13 12:12:06'),
(11, '10-server-11.png', '25-shopping-online-1.png', '', '', 0, '', 0, '2022-01-13 12:12:06', '2022-01-13 12:12:06'),
(12, '2-database-12.png', '11-secret-11.png', '', '', 0, '', 0, '2022-01-13 12:13:58', '2022-01-13 12:13:58'),
(13, '3-protection-12.png', '16-antivirus-11.png', '', '', 0, '', 0, '2022-01-13 12:13:58', '2022-01-13 12:13:58'),
(14, '4-payment-protection-12.png', '18-laptop-11.png', '', '', 0, '', 0, '2022-01-13 12:13:58', '2022-01-13 12:13:58'),
(15, '10-server-12.png', '25-shopping-online-11.png', '', '', 0, '', 0, '2022-01-13 12:13:58', '2022-01-13 12:13:58');

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
(1, 'Welcome to Home Security Operations Center (HSOC) Cyber!', 'Securing Your Home Beyond the Physical', 'Discover More', '', 'IMG-3459.banner.jpg', '::1', '1', '1', '2022-01-10 13:02:26', '2022-01-10 13:02:26');

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
(1, 'Hsoc Securing Your Business', '                                                                        <span style=\"font-family: Heebo, sans-serif; text-align: justify; background-color: rgb(235, 235, 235);\">Whether you have a home-based business, a small- or medium-sized business, HSOC Cyber professional interns will consult with you to help you achieve your business objectives and provide the protection and defense you deserve. Contact us to learn more. We want to help you; therefore, we provide services at an extremely affordable rate</span>                                                                                                                                                ', '#893434', '#5e2121', 'IMG-71537.Comp_7.gif', 'IMG-51248.head_business.jpg', '::1', '1', '2', '2022-01-10 13:49:53'),
(2, 'Securing Your Home', '<span style=\"font-family: Heebo, sans-serif; text-align: justify; background-color: rgb(235, 235, 235);\">Gain real cybersecurity experience by building your own HSOC. Apply the same tools and techniques that protect and defend organizations in your home, and then take those new skills with you to your professional organization. Learn more about the HSOC Cyber Internship Program.</span>                                                                        ', '', '', 'IMG-1144.Comp_7.gif', 'IMG-75291.head_family.jpg', '::1', '1', '1', '2022-01-10 14:12:50');

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
(1, '', '', '2', 'Anup Dubey', 'React Developer', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</span>                                                                        ', 'IMG-25466.2-database-1.png', '', 1, '::1', '1', '2022-01-10 16:07:27', '2022-01-10 16:07:27'),
(2, '', '', '4', 'Roushan Singh', 'Node Js Developer', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</span>                                                                        ', 'IMG-56901.4-payment-protection-1.png', '', 1, '::1', '1', '2022-01-10 16:09:40', '2022-01-10 16:09:40'),
(3, '', '', '5', 'Rahul kumar dubey', 'PHP Developer', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</span>                                                                        ', 'IMG-12875.18-laptop-1.png', '', 1, '::1', '1', '2022-01-10 16:10:14', '2022-01-10 16:10:14');

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
(1, 'Brand Box', '#d52020', '', '<p>Brand Box Description</p>', '::1', '1', 1, '2022-01-12 20:12:13', '0000-00-00 00:00:00'),
(3, '', '', '3-protection-1.png', '', '', '', 0, '2022-01-12 20:26:47', '0000-00-00 00:00:00'),
(4, '', '', '4-payment-protection-1.png', '', '', '', 0, '2022-01-12 20:26:47', '0000-00-00 00:00:00'),
(5, '', '', '10-server-1.png', '', '', '', 0, '2022-01-12 20:26:47', '0000-00-00 00:00:00');

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
(1, 'IMG-10031.Comp_7.gif', 'Jln Cempaka Wangi No 22, Jakarta - Indonesia                                                                        ', 'support@mail.tld, business@mail.tld', '8877665544', 'https://maps.google.com/maps?q=Jakarta&amp;t=m&amp;z=12&amp;output=embed&amp;iwloc=near', 'Vcana Global', 'Anup Dubey', '', '', '', '', '', '', '', 1, '::1', '1', '2022-01-07 17:52:56', '2022-01-07 17:52:56');

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
(1, 'Trusted by International Brand', 'lkjflsjdfljsfjsldf', 'IMG-31246.2-database-1.png', 'IMG-80216.10-server-1.png', 1, '1', '::1', '2022-01-12 12:36:37', '2022-01-12 12:36:37'),
(2, '', '', '', '', 0, '', '', '2022-01-12 12:38:05', '2022-01-12 12:38:05');

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

--
-- Dumping data for table `service_details`
--

INSERT INTO `service_details` (`id`, `title`, `description`, `logo`, `ip_add`, `entry_by`, `status`, `updated_at`, `created_at`) VALUES
(1, 'Hello user', 'Hello Description                                                                    ', '2-database-1_-_Copy3.png', '::1', '1', '1', '2022-01-13 16:25:15', '2022-01-13 16:25:15'),
(2, 'Hello user', 'Hello Description                                                                    ', '2-database-17.png', '::1', '1', '1', '2022-01-13 16:25:15', '2022-01-13 16:25:15'),
(3, 'Hello user', 'Hello Description                                                                    ', '3-protection-1_-_Copy3.png', '::1', '1', '1', '2022-01-13 16:25:15', '2022-01-13 16:25:15'),
(4, 'Hello user', 'Hello Description                                                                    ', '3-protection-17.png', '::1', '1', '1', '2022-01-13 16:25:15', '2022-01-13 16:25:15');

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
(1, 'lkjksdjfkds', 'jlksdjklfdjslf', 'IMG-64028.3-protection-1.png', '::1', '1', '1', '2022-01-13 14:44:20', '2022-01-13 14:44:20');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manage_team`
--
ALTER TABLE `manage_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manage_testimonial`
--
ALTER TABLE `manage_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manage_trusted_brand`
--
ALTER TABLE `manage_trusted_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `manage_website_setting`
--
ALTER TABLE `manage_website_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manage_welcome_message`
--
ALTER TABLE `manage_welcome_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_details`
--
ALTER TABLE `service_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service_section`
--
ALTER TABLE `service_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
