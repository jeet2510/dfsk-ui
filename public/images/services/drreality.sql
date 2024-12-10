-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 06, 2024 at 08:55 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drreality`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 = visible, 2 = invisible',
  `short_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `image`, `blog_category`, `date`, `status`, `short_desc`, `main_desc`, `created_at`, `updated_at`) VALUES
(1, 'Industrial Land: The Backbone of Modern Economies ', '1712484395.jpg', '1', '2024-04-07', '1', 'Industrial Land: The Backbone of Modern Economies ', 'Industrial land is the unsung hero of our modern world. It\'s the foundation for manufacturing, warehousing, and logistics - the lifeblood of global tradeIndustrial zones create jobs, boost GDP, and attract investment. They\'re a magnet for businesses, fostering a thriving economic ecosystem.\nEfficiently located industrial land near transportation hubs like airports and highways reduces transportation costs and streamlines supply chains.Modern industrial parks often come equipped with advanced infrastructure, attracting cutting-edge companies involved in R&D and high-tech manufacturing.\nRedevelopment of brownfields (previously contaminated land) for industrial use creates jobs, cleans up the environment, and revitalizes neglected areas.Developing industrial land often requires significant investment in infrastructure like roads, utilities, and wastewater treatment facilities.\nThe surge in online shopping demands efficient warehousing and distribution networks, driving the need for well-located industrial land.The \"reshoring\" trend of businesses moving manufacturing back to their home countries increases demand for industrial land closer to consumer markets\n.New technologies like automation and robotics require specialized industrial spaces to accommodate sophisticated machinery and processes.Industrial properties boast long-term leases with reliable tenants, providing consistent rental income and a hedge against inflation.\nDemand for industrial land is expected to remain strong, with the potential for capital appreciation over time. Investing in industrial land can diversify your portfolio and offer a buffer against economic downturns that might impact other asset classes.\n', '2024-04-07 10:06:35', '2024-04-07 10:06:35'),
(2, 'The Importance of Industrial Sheds: Unveiling Their Secrets', '1712484717.png', '2', '2024-04-07', '1', 'The Importance of Industrial Sheds: Unveiling Their Secrets', 'In the bustling world of industry, there exists an unsung hero—an essential structure often overlooked but critical for smooth operations: the industrial shed. These unassuming giants provide shelter to countless businesses, serving as the backbone of many operations. If you’re an industrial enthusiast, buckle up! In this comprehensive blog, we’ll delve into everything you need to know about industrial sheds, from their types and construction to their undeniable importance and maintenance.\nIndustrial sheds, also known as industrial buildings or warehouses, are large, enclosed structures meticulously designed to house various industrial processes, machinery, and materials. They stand tall, silently supporting manufacturing, storage, and other crucial activities. These versatile structures come in various shapes and sizes, catering to the specific needs of different industries\nThe construction of industrial sheds involves meticulous planning to ensure robustness and durability. Various materials are used, including steel, concrete, and aluminum. The choice depends on factors like budget, purpose, and location.\nIndustrial sheds are the unsung heroes that keep businesses thriving. They provide shelter, security, and efficiency—essential ingredients for a successful industrial landscape. So next time you pass by one, remember the secrets they hold and the critical role they play in our world of industry1.\n', '2024-04-07 10:11:57', '2024-04-07 10:11:57');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

DROP TABLE IF EXISTS `blog_categories`;
CREATE TABLE IF NOT EXISTS `blog_categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Industrial Land', '1712484324.jpg', '2024-04-07 10:05:02', '2024-04-07 10:05:24'),
(2, 'Industrial Sheds', '1712484634.png', '2024-04-07 10:10:34', '2024-04-07 10:10:34');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `property_id`, `created_at`, `updated_at`) VALUES
(5, '3', '9', '2024-04-27 11:59:21', '2024-04-27 11:59:21');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `image`, `name`, `created_at`, `updated_at`) VALUES
(2, '1711712519.png', 'Industrial Units', '2024-03-29 11:41:59', '2024-03-29 11:41:59'),
(3, '1712318045.jpg', 'Residential Units', '2024-04-05 11:54:05', '2024-04-05 11:54:05'),
(4, '1712481918.jpg', 'Agricultural Units', '2024-04-07 09:25:18', '2024-04-07 09:25:18'),
(5, '1716787214.jpg', 'Commercial Units', '2024-05-27 05:20:14', '2024-05-27 05:20:14');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Idris Kabri', 'kabriidris53@gmail.com', '+919358473253', 'test', 'Test', '2024-04-06 10:03:54', '2024-04-06 10:03:54'),
(2, 'Munira', 'munira@gmail.com', '8923457891', 'Test', 'Test', '2024-04-07 09:53:33', '2024-04-07 09:53:33'),
(3, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-06 01:25:28', '2024-07-06 01:25:28'),
(4, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-18 02:06:38', '2024-07-18 02:06:38'),
(5, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-18 02:09:10', '2024-07-18 02:09:10'),
(6, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-22 04:25:57', '2024-07-22 04:25:57'),
(7, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-22 04:27:04', '2024-07-22 04:27:04'),
(8, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-22 04:29:40', '2024-07-22 04:29:40'),
(9, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-22 04:48:34', '2024-07-22 04:48:34'),
(10, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-22 04:49:18', '2024-07-22 04:49:18'),
(11, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-22 04:49:53', '2024-07-22 04:49:53'),
(12, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-22 04:50:10', '2024-07-22 04:50:10'),
(13, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-22 04:50:21', '2024-07-22 04:50:21'),
(14, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-22 04:50:36', '2024-07-22 04:50:36'),
(15, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-22 04:51:41', '2024-07-22 04:51:41'),
(16, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-22 04:52:20', '2024-07-22 04:52:20'),
(17, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-22 04:54:39', '2024-07-22 04:54:39'),
(18, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-22 04:55:32', '2024-07-22 04:55:32'),
(19, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-22 04:55:53', '2024-07-22 04:55:53'),
(20, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'tes', '2024-07-22 04:56:57', '2024-07-22 04:56:57'),
(21, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'tes', '2024-07-22 04:57:12', '2024-07-22 04:57:12'),
(22, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-22 04:58:24', '2024-07-22 04:58:24'),
(23, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-22 04:58:44', '2024-07-22 04:58:44'),
(24, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-23 04:02:39', '2024-07-23 04:02:39'),
(25, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-23 04:03:54', '2024-07-23 04:03:54'),
(26, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-23 04:05:08', '2024-07-23 04:05:08'),
(27, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-23 04:05:47', '2024-07-23 04:05:47'),
(28, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-23 04:06:07', '2024-07-23 04:06:07'),
(29, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-23 04:06:24', '2024-07-23 04:06:24'),
(30, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-23 04:06:50', '2024-07-23 04:06:50'),
(31, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-23 04:07:04', '2024-07-23 04:07:04'),
(32, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', 'test', 'test', '2024-07-23 04:21:48', '2024-07-23 04:21:48');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

DROP TABLE IF EXISTS `enquiries`;
CREATE TABLE IF NOT EXISTS `enquiries` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `documents` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `email`, `mobile`, `documents`, `property_id`, `created_at`, `updated_at`) VALUES
(2, 'test', 'r.munira14@gmail.com', '7867890897', '1711714779_en_docs.xlsx', '4', '2024-03-29 12:19:39', '2024-03-29 12:19:39'),
(3, 'testenquiry', 'testenquiry2gmail.com', '7898765678', '1711796962_en_docs.pdf', '4', '2024-03-30 11:09:22', '2024-03-30 11:09:22'),
(4, 'Munira', 'r.munira14@gmail.com', '9586496716', '', '9', '2024-04-06 11:31:54', '2024-04-06 11:31:54'),
(5, 'Urulli test', 'urulli@test.com', '7812390872', '', '10', '2024-04-07 09:52:12', '2024-04-07 09:52:12'),
(6, 'admin', 'admin@gmail.com', '7895642562', '', '4', '2024-04-17 07:30:19', '2024-04-17 07:30:19'),
(7, 'admin', 'admin@gmail.com', '7895642562', '', '10', '2024-04-17 07:30:19', '2024-04-17 07:30:19'),
(8, 'admin', 'admin@gmail.com', '7895642562', '', '10', '2024-04-17 07:32:25', '2024-04-17 07:32:25'),
(9, 'Test', 'test@gmail.com', '9878978978', '', '9', '2024-04-17 07:36:15', '2024-04-17 07:36:15'),
(10, 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', '', '10', '2024-07-05 05:58:19', '2024-07-05 05:58:19'),
(11, 'Idris Kabri', NULL, '1234567890', NULL, NULL, '2024-08-05 05:05:25', '2024-08-05 05:05:25'),
(12, 'Idris kabri', NULL, '9358473253', NULL, NULL, '2024-08-10 01:45:36', '2024-08-10 01:45:36'),
(13, 'Idris kabri', NULL, '9358473253', NULL, NULL, '2024-08-10 01:45:41', '2024-08-10 01:45:41'),
(14, 'Idris Kabri', NULL, '9358473253', NULL, NULL, '2024-08-10 01:47:10', '2024-08-10 01:47:10'),
(15, 'Idris Kabri', NULL, '1234567890', NULL, NULL, '2024-08-10 01:49:55', '2024-08-10 01:49:55');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inputtype_config`
--

DROP TABLE IF EXISTS `inputtype_config`;
CREATE TABLE IF NOT EXISTS `inputtype_config` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `input_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_object` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `input_multi_image` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT 'no',
  `input_dropdown_values` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `input_radio_values` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `input_checkbox_values` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inputtype_config`
--

INSERT INTO `inputtype_config` (`id`, `input_name`, `input_type`, `input_object`, `input_multi_image`, `input_dropdown_values`, `created_at`, `updated_at`, `input_radio_values`, `input_checkbox_values`) VALUES
(12, 'Floors allowed for construction', 'number', NULL, 'no', NULL, '2024-03-29 11:42:48', '2024-03-29 11:42:48', NULL, NULL),
(13, 'Number of open sides', 'dropdown', NULL, 'no', '1,2,3,4', '2024-03-29 11:43:43', '2024-03-29 11:43:43', NULL, NULL),
(14, 'Width of road facing the plot', 'textbox', NULL, 'no', NULL, '2024-03-29 11:44:20', '2024-03-29 11:44:20', NULL, NULL),
(15, 'Any Construction Done', 'textbox', NULL, 'no', NULL, '2024-03-29 11:45:52', '2024-04-02 11:29:20', 'Yes, No', NULL),
(16, 'Plot Area', 'textbox', NULL, 'no', NULL, '2024-03-29 11:46:31', '2024-03-29 11:46:31', NULL, NULL),
(17, 'Plot Length', 'textbox', NULL, 'no', NULL, '2024-03-29 11:47:04', '2024-03-29 11:47:04', NULL, NULL),
(18, 'Plot Breadth', 'textbox', NULL, 'no', NULL, '2024-03-29 11:47:53', '2024-03-29 11:47:53', NULL, NULL),
(19, 'This is a corner plot', 'radio', NULL, 'no', NULL, '2024-03-29 11:48:47', '2024-04-02 11:30:21', 'Yes, No', 'Yes, No'),
(20, 'Expected Price', 'text', NULL, 'no', NULL, '2024-03-29 11:49:55', '2024-05-07 06:42:20', NULL, NULL),
(21, 'Booking Token Amount', 'textbox', NULL, 'no', NULL, '2024-03-29 11:50:23', '2024-04-05 11:40:00', NULL, NULL),
(22, 'Price Negotioable', 'radio', NULL, 'no', NULL, '2024-03-29 11:51:04', '2024-04-02 11:32:52', 'Yes, No', 'Yes, No'),
(23, 'Site View Photos', 'image', NULL, 'no', NULL, '2024-03-29 11:51:33', '2024-03-29 11:51:33', NULL, NULL),
(24, 'Over looking', 'dropdown', NULL, 'no', 'Main road, Not avialable', '2024-03-29 12:00:40', '2024-03-29 12:00:40', NULL, NULL),
(25, 'Transaction type', 'dropdown', NULL, 'no', 'Rent,Sell,New property, Resale', '2024-03-29 12:01:28', '2024-05-27 11:41:57', NULL, NULL),
(26, 'Currently Leased Out', 'radio', NULL, 'no', NULL, '2024-03-29 12:02:24', '2024-03-29 12:02:24', 'Yes, No', NULL),
(27, 'Covered Area', 'textbox', NULL, 'no', NULL, '2024-04-02 11:03:49', '2024-04-02 11:03:49', NULL, NULL),
(28, 'Available From', 'date', NULL, 'no', NULL, '2024-04-02 11:08:36', '2024-04-05 11:40:30', NULL, NULL),
(29, 'Age of Consturction', 'number', NULL, 'no', NULL, '2024-04-02 11:09:30', '2024-04-02 11:09:30', NULL, NULL),
(31, 'Other Charges', 'textbox', NULL, 'no', NULL, '2024-04-02 11:13:03', '2024-04-02 11:13:03', NULL, NULL),
(32, 'Maintainence Changes		', 'textbox', NULL, 'no', NULL, '2024-04-02 11:14:13', '2024-04-02 11:14:13', NULL, NULL),
(33, 'Stamp Duty and registration charges excluded', 'radio', NULL, 'no', NULL, '2024-04-02 11:14:46', '2024-04-02 11:28:35', 'Yes, No', NULL),
(34, 'Brokerage(if broker)		', 'dropdown', NULL, 'no', 'No brokerage, 1%,2.5%', '2024-04-02 11:15:29', '2024-04-02 11:15:29', NULL, NULL),
(35, 'I am not interested in getting response from broker', 'radio', NULL, 'no', NULL, '2024-04-02 11:16:00', '2024-04-02 11:16:00', 'Yes, No', NULL),
(36, 'Availability of water', 'radio', NULL, 'no', NULL, '2024-04-02 11:17:29', '2024-04-05 11:26:08', 'Yes, No', NULL),
(37, 'Electricity status', 'radio', NULL, 'no', NULL, '2024-04-02 11:17:52', '2024-04-05 11:26:52', 'Yes, No', NULL),
(38, 'Amenities', 'checkbox', NULL, 'no', 'lift, Reserved parking, security, power backup', '2024-04-02 11:19:36', '2024-04-05 11:25:29', NULL, 'lift, Reserved parking, security, power backup, None'),
(39, 'Possession', 'radio', NULL, 'no', NULL, '2024-04-02 11:21:30', '2024-04-02 11:21:30', 'Under Construction, Ready to move, Ongoing', NULL),
(40, 'Monthly Rent', 'textbox', NULL, 'no', NULL, '2024-04-02 11:36:25', '2024-04-02 11:36:25', NULL, NULL),
(41, 'Electricity water charges excluded', 'radio', NULL, 'no', NULL, '2024-04-02 11:36:59', '2024-04-02 11:36:59', 'Yes, No', NULL),
(42, 'Boundary wall Made', 'radio', NULL, 'no', NULL, '2024-04-05 11:42:29', '2024-04-05 11:42:29', 'Yes, No', NULL),
(43, 'Gated Community', 'radio', NULL, 'no', NULL, '2024-04-05 11:42:59', '2024-04-05 11:42:59', 'Yes, No', NULL),
(44, 'Price Per ( Selected unit)', 'textbox', NULL, 'no', NULL, '2024-04-05 11:43:37', '2024-04-05 11:43:37', NULL, NULL),
(45, 'Property Area', 'text', NULL, 'no', NULL, '2024-05-27 05:14:27', '2024-05-27 05:14:27', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_22_140535_create_categories_table', 1),
(6, '2024_02_23_120451_create_roles_table', 1),
(7, '2024_02_27_071244_create_modules_table', 1),
(8, '2024_02_28_114822_create_permissions_table', 1),
(9, '2024_03_14_135030_create_inputtypeconfiguration_table', 1),
(10, '2024_03_15_232306_create_propertytypes_table', 1),
(11, '2024_03_16_121902_create_properties_table', 1),
(12, '2024_03_21_120311_create_table_property_config', 1),
(13, '2024_03_23_103101_create_enquiries_table', 1),
(14, '2024_03_23_130338_add_column_to_inputtyep_config_table', 1),
(15, '2024_03_25_083009_add_column_to_property_config_table', 1),
(16, '2024_04_04_180159_create_contactuses_table', 2),
(17, '2024_04_04_212228_create_blogs_table', 2),
(18, '2024_04_04_212806_create_blog_categories_table', 2),
(19, '2024_04_08_134122_add_priority_to_property_config_table', 3),
(20, '2024_04_10_141710_add_groups_column_to_property_types_table', 3),
(21, '2024_04_15_132841_create_cart_table', 3),
(22, '2024_04_16_142730_add_created_by_to_properties_table', 4),
(23, '2024_05_03_115142_create_subscribers_table', 5),
(24, '2024_05_07_130037_add_grouped_column_to_property_config_table', 5),
(25, '2024_08_05_074110_add_channel_provider_columns_to_users_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

DROP TABLE IF EXISTS `modules`;
CREATE TABLE IF NOT EXISTS `modules` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rights` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 = active, 2 = inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

DROP TABLE IF EXISTS `properties`;
CREATE TABLE IF NOT EXISTS `properties` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_images` longtext COLLATE utf8mb4_unicode_ci,
  `status` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 = visible, 2 = invisible',
  `property_type_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `landmark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `name`, `image`, `sub_images`, `status`, `property_type_id`, `price`, `city`, `landmark`, `address`, `zipcode`, `description`, `created_at`, `updated_at`, `created_by`) VALUES
(4, 'Khed Shivapur Kondanpur Road', '1712038280_im.jpg', '1712479070subimage_0.jpg,1712479070subimage_1.jpg,1712479070subimage_2.jpg', '1', '4', '12000000', 'Pune', 'Khed Shivapur Kondanpur Road', 'GAUDHARA NEAR VEDANT CLD STORAGE NH4 PUNE BANGALORE HIGHWAY PUNE, Khed Shivapur Kondanpur Road, Pune - Southern Outskirts, Maharashtra', '411013', 'GAUDHARA NEAR VEDANT COLD STORAGE NH4 PUNE BANGALORE HIGHWAY PUNE', NULL, '2024-05-03 10:03:44', '1'),
(6, 'Industrial Sheds for Rent ( Shivre)', '1714732637_im.png', '', '1', '6', '0', 'Pune', 'Shell Petrol Pump', 'Near Devgi Metal', '412205', 'Conventionel Shed for rent at Pune - Bangalore Highwa', NULL, '2024-05-03 10:37:17', '1'),
(9, 'Land ', '1712389369_im.jpg', '', '1', '4', '4999999', 'Pune ', 'Varve', 'Varve', '411020', 'Industrial land for sale', NULL, '2024-05-07 10:51:57', '1'),
(10, 'Land in Urulli Kanchan Pune', '1712483441_im.jpg', '1712483441subimage_0.jpg', '1', '7', '4320000', 'Pune', ' Haveli Dist - Pune', 'Gat no-775At Uruli Kanchan Tal ', '389151', 'Connectivity Start from Hadapsar. Drive (10 km) you will reach to MIT college at LoniKalbhor. Keep driving towards Solapur. Then at (5 km) you will reach to Kunjirwadi. Continue for another (6 km) you will reach to Uruli Kanchan Chok', NULL, '2024-05-03 10:06:54', '1'),
(18, 'Busheri Complex', '1717062754_im.jpg', '1717062754subimage_0.jpg,1717062754subimage_1.jpg', '1', '9', '4000000', 'Pune', '', 'Busheri Complex, Mahatma Phule Rasta, Jai Society, Harka Nagar, Bhawani Peth, Pune, Maharashtra 411042\n', '', '\"spacious shop a well-maintained property is perfect for retail or office use, offering ample space to accommodate various business needs.\n\nKey Features:\nThis property is an excellent investment, situated in a strategic location that promises high foot traffic and visibility. \n\"It is road touch basement shop\"', NULL, '2024-05-30 10:05:05', '1'),
(19, 'Sterling Center', '1717064055_im.jpg', '', '1', '9', '0', 'Pune', '', 'sterling center, MG Road, Opp Arora Towers, Office 531 5th Floor, Corner Roadside office', '', '\"Office Space for Sale on MG Road, Pune\n\nPremium office space in the prestigious Sterling Center, located on Pune\'s famous MG Road. This corner office on the 5th floor spans 425 square feet and offers an ideal location for businesses seeking visibility and accessibility.\n\nKey Features:\n- Location: Sterling Center, MG Road, Pune\n- Floor: 5th\n- Area: 425 sq. ft.\n- Current Rent: â‚¹17,000 per month\n- Position: Corner office with road view\n\nThis well-maintained office is currently leased, providing a steady rental income of â‚¹17,000 per month. Its prime location on MG Road ensures excellent connectivity and proximity to major commercial hubs, making it a highly attractive investment.\"\n', NULL, NULL, '1'),
(20, 'Boulevard Towers by Bramha Corporation', '1717065117_im.jpg', '1717065117subimage_0.jpg,1717065117subimage_1.jpg,1717065117subimage_2.jpg,1717065117subimage_3.jpg,1717065117subimage_4.jpg,1717065117subimage_5.jpg', '1', '9', '60000', 'Pune', '', 'Office O-456, 4th floor, Boulevard Towers by BramhaCorp, Sadhu Vaswani Chowk, opposite Vijay Sales, Camp, Pune, Maharashtra 411001', '', '\"Premium office space in the newly constructed Boulevard Towers by BramhaCorp, located at Sadhu Vaswani Chowk, opposite Vijay Sales, Camp, Pune, Maharashtra 411001. This 585 sq. ft. office is situated in a prime commercial property, renowned for its iconic location and excellent amenities.\n\nKey Features:\n- Property Type: Total commercial tower\n- Amenities: Canteen, conference room, and other facilities\n- Status: Well-maintained, 5-star rated, and recently constructed\n- Reserved car parking\n\nThis office space offers an excellent investment opportunity with its strategic location, state-of-the-art amenities, and well-maintained infrastructure. Ideal for businesses seeking a prestigious address in Pune\'s bustling commercial hub.\"', NULL, NULL, '1'),
(24, 'Busheri Complex', '', '', '1', '9', '40-42 lacs', '', '', 'Busheri Complex, Mahatma Phule Rasta, Jai Society, Harka Nagar, Bhawani Peth, Pune, Maharashtra 411042', '', 'spacious shop area of 351 square feet, This well-maintained property is perfect for retail or office use, offering ample space to accommodate various business needs.\n\nKey Features:\n- Total Area: 351 sq. ft.\n- Utilities: Electricity bill paid up to date\n- Taxes: Property tax paid up to date\n\nThis property is an excellent investment, situated in a strategic location that promises high foot traffic and visibility. \n\nIt is road touch basement shop', '2024-06-07 08:15:08', '2024-06-07 08:15:08', '1');

-- --------------------------------------------------------

--
-- Table structure for table `property_config`
--

DROP TABLE IF EXISTS `property_config`;
CREATE TABLE IF NOT EXISTS `property_config` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `property_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_type_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input_object_values` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `input_multi_image` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT 'no',
  `input_dropdown_values` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `input_value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `input_radio_values` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `input_checkbox_values` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `input_priority` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `grouped` enum('yes','no') COLLATE utf8mb4_unicode_ci DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=241 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_config`
--

INSERT INTO `property_config` (`id`, `property_id`, `input_type_id`, `input_name`, `input_type`, `input_object_values`, `input_multi_image`, `input_dropdown_values`, `input_value`, `created_at`, `updated_at`, `input_radio_values`, `input_checkbox_values`, `input_priority`, `grouped`) VALUES
(20, '4', '12', 'Floors allowed for construction', 'number', NULL, 'no', NULL, '1', '2024-03-29 12:13:04', '2024-03-29 12:13:04', NULL, NULL, '1', 'no'),
(21, '4', '13', 'Number of open sides', 'dropdown', NULL, 'no', '', '3', '2024-03-29 12:13:04', '2024-03-30 06:57:10', NULL, NULL, '1', 'no'),
(22, '4', '14', 'Width of road facing the plot', 'textbox', NULL, 'no', NULL, '200 Sq ft', '2024-03-29 12:13:04', '2024-03-29 12:13:04', NULL, NULL, '1', 'no'),
(23, '4', '15', 'Any Construction Done', 'radio', NULL, 'no', NULL, ' No', '2024-03-29 12:13:04', '2024-03-29 12:13:04', 'Yes, No', NULL, '1', 'no'),
(24, '4', '16', 'Plot Area', 'textbox', NULL, 'no', NULL, '11,000 sqft', '2024-03-29 12:13:04', '2024-03-29 12:13:04', NULL, NULL, '1', 'no'),
(25, '4', '17', 'Plot Length', 'textbox', NULL, 'no', NULL, '100 sqft', '2024-03-29 12:13:04', '2024-03-29 12:13:04', NULL, NULL, '1', 'no'),
(26, '4', '18', 'Plot Breadth', 'textbox', NULL, 'no', NULL, '100 sqft', '2024-03-29 12:13:04', '2024-03-29 12:13:04', NULL, NULL, '1', 'no'),
(27, '4', '19', 'This is a corner plot', 'checkbox', NULL, 'no', NULL, 'Yes', '2024-03-29 12:13:04', '2024-03-29 12:13:04', NULL, 'Yes, No', '1', 'no'),
(28, '4', '20', 'Expected Price', 'number', NULL, 'no', NULL, '12000000', '2024-03-29 12:13:04', '2024-03-29 12:13:04', NULL, NULL, '1', 'no'),
(29, '4', '21', 'Booking Token Amount', 'number', NULL, 'no', NULL, '6500000', '2024-03-29 12:13:04', '2024-03-29 12:13:04', NULL, NULL, '1', 'no'),
(30, '4', '22', 'Price Negotioable', 'checkbox', NULL, 'no', NULL, 'Yes', '2024-03-29 12:13:04', '2024-03-29 12:13:04', NULL, 'Yes, No', '1', 'no'),
(31, '4', '23', 'Site View Photos', 'image', NULL, 'no', NULL, '1711714384_input_image.jpg', '2024-03-29 12:13:04', '2024-05-03 10:03:44', NULL, NULL, '0', 'no'),
(32, '4', '24', 'Over looking', 'dropdown', NULL, 'no', '', 'Main road', '2024-03-29 12:13:04', '2024-03-30 06:57:10', NULL, NULL, '1', 'no'),
(33, '4', '25', 'Transaction type', 'dropdown', NULL, 'no', '', 'New property', '2024-03-29 12:13:04', '2024-03-30 06:57:10', NULL, NULL, '1', 'no'),
(34, '4', '26', 'Currently Leased Out', 'radio', NULL, 'no', NULL, ' No', '2024-03-29 12:13:04', '2024-03-29 12:13:04', 'Yes, No', NULL, '1', 'no'),
(53, '6', '13', 'Number of open sides', 'dropdown', NULL, 'no', '', '1', '2024-04-04 10:18:25', '2024-05-25 05:59:25', NULL, NULL, '1', 'no'),
(54, '6', '14', 'Width of road facing the plot', 'textbox', NULL, 'no', NULL, '125 Sqft ', '2024-04-04 10:18:25', '2024-05-25 05:59:25', NULL, NULL, '1', 'no'),
(55, '6', '16', 'Plot Area', 'textbox', NULL, 'no', NULL, '11000 Sqft', '2024-04-04 10:18:25', '2024-05-25 05:59:25', NULL, NULL, '1', 'no'),
(56, '6', '17', 'Plot Length', 'textbox', NULL, 'no', NULL, 'N/A', '2024-04-04 10:18:25', '2024-05-25 05:59:25', NULL, NULL, '1', 'no'),
(57, '6', '18', 'Plot Breadth', 'textbox', NULL, 'no', NULL, 'N/A', '2024-04-04 10:18:25', '2024-05-25 05:59:25', NULL, NULL, '1', 'no'),
(58, '6', '19', 'This is a corner plot', 'radio', NULL, 'no', NULL, 'Yes', '2024-04-04 10:18:25', '2024-05-25 05:59:25', 'Yes, No', NULL, '1', 'no'),
(59, '6', '21', 'Booking Token Amount', 'number', NULL, 'no', NULL, '123193', '2024-04-04 10:18:25', '2024-05-25 05:59:25', NULL, NULL, '1', 'no'),
(60, '6', '22', 'Price Negotioable', 'radio', NULL, 'no', NULL, 'Yes', '2024-04-04 10:18:25', '2024-05-25 05:59:25', 'Yes, No', NULL, '1', 'no'),
(61, '6', '25', 'Transaction type', 'dropdown', NULL, 'no', '', 'New property', '2024-04-04 10:18:25', '2024-05-25 05:59:25', NULL, NULL, '1', 'no'),
(62, '6', '27', 'Covered Area', 'textbox', NULL, 'no', NULL, '8800 Sqft', '2024-04-04 10:18:25', '2024-05-25 05:59:25', NULL, NULL, '1', 'no'),
(63, '6', '28', 'Avialable From', 'date', NULL, 'no', NULL, '2024-04-05', '2024-04-04 10:18:25', '2024-05-25 05:59:25', NULL, NULL, '1', 'no'),
(64, '6', '29', 'Age of Consturction', 'number', NULL, 'no', NULL, '0', '2024-04-04 10:18:25', '2024-05-25 05:59:25', NULL, NULL, '1', 'no'),
(65, '6', '31', 'Other Charges', 'textbox', NULL, 'no', NULL, 'Deposit GST ', '2024-04-04 10:18:25', '2024-05-25 05:59:25', NULL, NULL, '1', 'yes'),
(66, '6', '32', 'Maintainence Changes		', 'textbox', NULL, 'no', NULL, 'N/A', '2024-04-04 10:18:25', '2024-05-25 05:59:25', NULL, NULL, '1', 'yes'),
(67, '6', '34', 'Brokerage(if broker)		', 'dropdown', NULL, 'no', '', 'No brokerage', '2024-04-04 10:18:25', '2024-05-25 05:59:25', NULL, NULL, '1', 'yes'),
(68, '6', '35', 'I am not interested in getting response from broker', 'radio', NULL, 'no', NULL, 'Yes', '2024-04-04 10:18:25', '2024-05-25 05:59:25', 'Yes, No', NULL, '1', 'yes'),
(69, '6', '36', 'Aviability of water', 'radio', NULL, 'no', NULL, ' No', '2024-04-04 10:18:25', '2024-05-25 05:59:25', 'Yes, No', NULL, '1', 'no'),
(70, '6', '37', 'Exlectricity status', 'radio', NULL, 'no', NULL, 'Yes', '2024-04-04 10:18:25', '2024-05-25 05:59:25', 'Yes, No', NULL, '1', 'no'),
(71, '6', '38', 'Amenities', 'checkbox', NULL, 'no', NULL, ' power backup', '2024-04-04 10:18:25', '2024-05-25 05:59:25', NULL, 'lift, Reserved parking, security, power backup', '1', 'no'),
(72, '6', '40', 'Monthly Rent', 'textbox', NULL, 'no', NULL, '14 Rs per sqft', '2024-04-04 10:18:25', '2024-05-25 05:59:25', NULL, NULL, '1', 'no'),
(73, '6', '41', 'Electricity water charges excluded', 'radio', NULL, 'no', NULL, ' No', '2024-04-04 10:18:25', '2024-05-25 05:59:25', 'Yes, No', NULL, '1', 'no'),
(96, '9', '12', 'Floors allowed for construction', 'number', NULL, 'no', NULL, '1', '2024-04-06 07:42:49', '2024-04-06 07:42:49', NULL, NULL, '1', 'no'),
(97, '9', '13', 'Number of open sides', 'dropdown', NULL, 'no', 'New property, Resale', '1', '2024-04-06 07:42:49', '2024-04-06 07:42:49', NULL, NULL, '1', 'no'),
(98, '9', '14', 'Width of road facing the plot', 'textbox', NULL, 'no', NULL, '25', '2024-04-06 07:42:49', '2024-04-06 07:42:49', NULL, NULL, '1', 'no'),
(99, '9', '15', 'Any Construction Done', 'textbox', NULL, 'no', NULL, 'no', '2024-04-06 07:42:49', '2024-04-06 07:42:49', NULL, NULL, '1', 'no'),
(100, '9', '16', 'Plot Area', 'textbox', NULL, 'no', NULL, '5000', '2024-04-06 07:42:49', '2024-04-06 07:42:49', NULL, NULL, '1', 'no'),
(101, '9', '17', 'Plot Length', 'textbox', NULL, 'no', NULL, '1200', '2024-04-06 07:42:49', '2024-04-06 07:42:49', NULL, NULL, '1', 'no'),
(102, '9', '18', 'Plot Breadth', 'textbox', NULL, 'no', NULL, '1200', '2024-04-06 07:42:49', '2024-04-06 07:42:49', NULL, NULL, '1', 'no'),
(103, '9', '19', 'This is a corner plot', 'radio', NULL, 'no', NULL, ' No', '2024-04-06 07:42:49', '2024-04-06 07:42:49', 'Yes, No', NULL, '1', 'no'),
(104, '9', '20', 'Expected Price', 'number', NULL, 'no', NULL, '500000', '2024-04-06 07:42:49', '2024-04-06 07:42:49', NULL, NULL, '1', 'no'),
(105, '9', '21', 'Booking Token Amount', 'textbox', NULL, 'no', NULL, '500000', '2024-04-06 07:42:49', '2024-04-06 07:42:49', NULL, NULL, '1', 'no'),
(106, '9', '22', 'Price Negotioable', 'radio', NULL, 'no', NULL, 'Yes', '2024-04-06 07:42:49', '2024-04-06 07:42:49', 'Yes, No', NULL, '1', 'no'),
(107, '9', '23', 'Site View Photos', 'image', NULL, 'no', NULL, '1712389369_input_image.jpg', '2024-04-06 07:42:49', '2024-04-06 07:42:49', NULL, NULL, '1', 'no'),
(108, '9', '24', 'Over looking', 'dropdown', NULL, 'no', 'New property, Resale', 'New property', '2024-04-06 07:42:49', '2024-05-07 10:51:57', NULL, NULL, '1', 'no'),
(109, '9', '25', 'Transaction type', 'dropdown', NULL, 'no', 'New property, Resale', ' Resale', '2024-04-06 07:42:49', '2024-05-07 10:51:57', NULL, NULL, '1', 'no'),
(110, '9', '26', 'Currently Leased Out', 'radio', NULL, 'no', NULL, ' No', '2024-04-06 07:42:49', '2024-04-06 07:42:49', 'Yes, No', NULL, '1', 'no'),
(111, '10', '12', 'Floors allowed for construction', 'number', NULL, 'no', NULL, '1', '2024-04-07 09:50:41', '2024-04-07 09:50:41', NULL, NULL, '1', 'no'),
(112, '10', '13', 'Number of open sides', 'dropdown', NULL, 'no', '', '1', '2024-04-07 09:50:41', '2024-04-07 09:50:59', NULL, NULL, '1', 'no'),
(113, '10', '14', 'Width of road facing the plot', 'textbox', NULL, 'no', NULL, 'N/A', '2024-04-07 09:50:41', '2024-04-07 09:50:41', NULL, NULL, '1', 'no'),
(114, '10', '15', 'Any Construction Done', 'textbox', NULL, 'no', NULL, 'N/A', '2024-04-07 09:50:41', '2024-04-07 09:50:41', NULL, NULL, '1', 'no'),
(115, '10', '16', 'Plot Area', 'textbox', NULL, 'no', NULL, 'N/A', '2024-04-07 09:50:41', '2024-04-07 09:50:41', NULL, NULL, '1', 'no'),
(116, '10', '17', 'Plot Length', 'textbox', NULL, 'no', NULL, 'N/A', '2024-04-07 09:50:41', '2024-04-07 09:50:41', NULL, NULL, '1', 'no'),
(117, '10', '18', 'Plot Breadth', 'textbox', NULL, 'no', NULL, 'N/A', '2024-04-07 09:50:41', '2024-04-07 09:50:41', NULL, NULL, '1', 'no'),
(118, '10', '19', 'This is a corner plot', 'radio', NULL, 'no', NULL, ' No', '2024-04-07 09:50:41', '2024-04-07 09:50:41', 'Yes, No', NULL, '1', 'no'),
(119, '10', '20', 'Expected Price', 'number', NULL, 'no', NULL, '1', '2024-04-07 09:50:41', '2024-04-07 09:50:41', NULL, NULL, '1', 'no'),
(120, '10', '21', 'Booking Token Amount', 'textbox', NULL, 'no', NULL, 'N/A', '2024-04-07 09:50:41', '2024-04-07 09:50:41', NULL, NULL, '1', 'no'),
(121, '10', '25', 'Transaction type', 'dropdown', NULL, 'no', '', 'New property', '2024-04-07 09:50:41', '2024-04-07 09:50:59', NULL, NULL, '1', 'no'),
(122, '10', '33', 'Stamp Duty and registration charges excluded', 'radio', NULL, 'no', NULL, ' No', '2024-04-07 09:50:41', '2024-05-03 10:06:54', 'Yes, No', NULL, '-1', 'no'),
(123, '10', '35', 'I am not interested in getting response from broker', 'radio', NULL, 'no', NULL, ' No', '2024-04-07 09:50:41', '2024-04-07 09:50:41', 'Yes, No', NULL, '1', 'no'),
(124, '10', '42', 'Boundary wall Made', 'radio', NULL, 'no', NULL, ' No', '2024-04-07 09:50:41', '2024-04-07 09:50:41', 'Yes, No', NULL, '1', 'no'),
(125, '10', '43', 'Gated Community', 'radio', NULL, 'no', NULL, ' No', '2024-04-07 09:50:41', '2024-04-07 09:50:41', 'Yes, No', NULL, '1', 'no'),
(126, '10', '44', 'Price Per ( Selected unit)', 'textbox', NULL, 'no', NULL, 'N/A', '2024-04-07 09:50:41', '2024-04-07 09:50:41', NULL, NULL, '1', 'no'),
(178, '18', '20', 'Expected Price', 'text', NULL, 'no', NULL, '40-42 lacs', '2024-05-30 09:52:34', '2024-05-30 09:52:34', NULL, NULL, '2', 'no'),
(179, '18', '21', 'Booking Token Amount', 'textbox', NULL, 'no', NULL, '', '2024-05-30 09:52:34', '2024-05-30 09:52:34', NULL, NULL, '', 'no'),
(180, '18', '22', 'Price Negotioable', 'radio', NULL, 'no', NULL, '', '2024-05-30 09:52:34', '2024-05-30 09:52:34', 'Yes, No', NULL, '', 'no'),
(181, '18', '25', 'Transaction type', 'dropdown', NULL, 'no', 'Rent,Sell,New property, Resale', 'Sell', '2024-05-30 09:52:34', '2024-05-30 09:52:34', NULL, NULL, '1', 'no'),
(182, '18', '28', 'Available From', 'date', NULL, 'no', NULL, '2024-05-25', '2024-05-30 09:52:34', '2024-05-30 10:32:24', NULL, NULL, '', 'no'),
(183, '18', '36', 'Availability of water', 'radio', NULL, 'no', NULL, '', '2024-05-30 09:52:34', '2024-05-30 09:52:34', 'Yes, No', NULL, '', 'no'),
(184, '18', '37', 'Electricity status', 'radio', NULL, 'no', NULL, 'Yes', '2024-05-30 09:52:34', '2024-05-30 10:06:18', 'Yes, No', NULL, '4', 'no'),
(185, '18', '40', 'Monthly Rent', 'textbox', NULL, 'no', NULL, '', '2024-05-30 09:52:34', '2024-05-30 09:52:34', NULL, NULL, '', 'no'),
(186, '18', '45', 'Property Area', 'text', NULL, 'no', NULL, '351 sq. ft.', '2024-05-30 09:52:34', '2024-05-30 09:52:34', NULL, NULL, '3', 'no'),
(187, '19', '20', 'Expected Price', 'text', NULL, 'no', NULL, '48-50 lacs', '2024-05-30 10:14:15', '2024-05-30 10:14:15', NULL, NULL, '', 'no'),
(188, '19', '21', 'Booking Token Amount', 'textbox', NULL, 'no', NULL, '', '2024-05-30 10:14:15', '2024-05-30 10:14:15', NULL, NULL, '', 'no'),
(189, '19', '22', 'Price Negotioable', 'radio', NULL, 'no', NULL, '', '2024-05-30 10:14:15', '2024-05-30 10:14:15', 'Yes, No', NULL, '', 'no'),
(190, '19', '25', 'Transaction type', 'dropdown', NULL, 'no', 'Rent,Sell,New property, Resale', 'Sell', '2024-05-30 10:14:15', '2024-05-30 10:14:15', NULL, NULL, '', 'no'),
(191, '19', '28', 'Available From', 'date', NULL, 'no', NULL, '2024-04-25', '2024-05-30 10:14:15', '2024-05-30 10:14:15', NULL, NULL, '', 'no'),
(192, '19', '36', 'Availability of water', 'radio', NULL, 'no', NULL, '', '2024-05-30 10:14:15', '2024-05-30 10:14:15', 'Yes, No', NULL, '', 'no'),
(193, '19', '37', 'Electricity status', 'radio', NULL, 'no', NULL, 'Yes', '2024-05-30 10:14:15', '2024-05-30 10:14:15', 'Yes, No', NULL, '', 'no'),
(194, '19', '40', 'Monthly Rent', 'textbox', NULL, 'no', NULL, '', '2024-05-30 10:14:15', '2024-05-30 10:14:15', NULL, NULL, '', 'no'),
(195, '19', '45', 'Property Area', 'text', NULL, 'no', NULL, '425 sq. ft.', '2024-05-30 10:14:15', '2024-05-30 10:14:15', NULL, NULL, '', 'no'),
(196, '20', '20', 'Expected Price', 'text', NULL, 'no', NULL, '', '2024-05-30 10:31:57', '2024-05-30 10:31:57', NULL, NULL, '', 'no'),
(197, '20', '21', 'Booking Token Amount', 'textbox', NULL, 'no', NULL, '', '2024-05-30 10:31:57', '2024-05-30 10:31:57', NULL, NULL, '', 'no'),
(198, '20', '22', 'Price Negotioable', 'radio', NULL, 'no', NULL, '', '2024-05-30 10:31:57', '2024-05-30 10:31:57', 'Yes, No', NULL, '', 'no'),
(199, '20', '25', 'Transaction type', 'dropdown', NULL, 'no', 'Rent,Sell,New property, Resale', 'Rent', '2024-05-30 10:31:57', '2024-05-30 10:31:57', NULL, NULL, '', 'no'),
(200, '20', '28', 'Available From', 'date', NULL, 'no', NULL, '2024-05-25', '2024-05-30 10:31:57', '2024-05-30 10:31:57', NULL, NULL, '', 'no'),
(201, '20', '36', 'Availability of water', 'radio', NULL, 'no', NULL, '', '2024-05-30 10:31:57', '2024-05-30 10:31:57', 'Yes, No', NULL, '', 'no'),
(202, '20', '37', 'Electricity status', 'radio', NULL, 'no', NULL, '', '2024-05-30 10:31:57', '2024-05-30 10:31:57', 'Yes, No', NULL, '', 'no'),
(203, '20', '40', 'Monthly Rent', 'textbox', NULL, 'no', NULL, '60000', '2024-05-30 10:31:57', '2024-05-30 10:31:57', NULL, NULL, '', 'no'),
(204, '20', '45', 'Property Area', 'text', NULL, 'no', NULL, '585 sq. ft.', '2024-05-30 10:31:57', '2024-05-30 10:31:57', NULL, NULL, '', 'no'),
(232, '24', '20', 'Expected Price', 'text', NULL, 'no', NULL, '', '2024-06-07 08:15:08', '2024-06-07 08:15:08', NULL, NULL, '1', 'no'),
(233, '24', '21', 'Booking Token Amount', 'textbox', NULL, 'no', NULL, '', '2024-06-07 08:15:08', '2024-06-07 08:15:08', NULL, NULL, '1', 'no'),
(234, '24', '22', 'Price Negotioable', 'radio', NULL, 'no', NULL, '', '2024-06-07 08:15:08', '2024-06-07 08:15:08', 'Yes, No', NULL, '1', 'no'),
(235, '24', '25', 'Transaction type', 'dropdown', NULL, 'no', 'Rent,Sell,New property, Resale', 'Sell', '2024-06-07 08:15:08', '2024-06-07 08:15:08', NULL, NULL, '1', 'no'),
(236, '24', '28', 'Available From', 'date', NULL, 'no', NULL, '25-05-2024', '2024-06-07 08:15:08', '2024-06-07 08:15:08', NULL, NULL, '1', 'no'),
(237, '24', '36', 'Availability of water', 'radio', NULL, 'no', NULL, 'Yes', '2024-06-07 08:15:08', '2024-06-07 08:15:08', 'Yes, No', NULL, '1', 'no'),
(238, '24', '37', 'Electricity status', 'radio', NULL, 'no', NULL, 'Yes', '2024-06-07 08:15:08', '2024-06-07 08:15:08', 'Yes, No', NULL, '1', 'no'),
(239, '24', '40', 'Monthly Rent', 'textbox', NULL, 'no', NULL, '', '2024-06-07 08:15:08', '2024-06-07 08:15:08', NULL, NULL, '1', 'no'),
(240, '24', '45', 'Property Area', 'text', NULL, 'no', NULL, '351', '2024-06-07 08:15:08', '2024-06-07 08:15:08', NULL, NULL, '1', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `property_types`
--

DROP TABLE IF EXISTS `property_types`;
CREATE TABLE IF NOT EXISTS `property_types` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 = visible, 2 = invisible',
  `input_type_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `groups` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_types`
--

INSERT INTO `property_types` (`id`, `name`, `image`, `status`, `input_type_id`, `category_id`, `created_at`, `updated_at`, `groups`) VALUES
(4, 'Industrial Land', '1711713240.jpg', '1', '12,13,14,15,16,17,18,19,20,21,22,23,24,25,26', 2, '2024-03-29 11:54:00', '2024-05-06 08:00:40', '{\"Dimensions\":[\"16\",\"17\",\"18\"]}'),
(5, 'Industrial Shed for Sale', '1712057131.png', '1', '12,13,14,16,17,18,19,20,21,22,25,26,27,28,29,31,32,33,34,35,36,37,38,39', 2, '2024-04-02 11:25:31', '2024-04-02 11:25:31', NULL),
(6, 'Industrial Shed for Rent', '1712058187.png', '1', '13,14,16,17,18,19,21,22,25,27,28,29,31,32,34,35,36,37,38,40,41', 2, '2024-04-02 11:43:07', '2024-05-25 05:59:25', '{\"Charges\":[\"31\",\"32\",\"34\",\"35\"]}'),
(7, 'Residential Land for Sale', '1712482445.jpg', '1', '12,13,14,15,16,17,18,19,20,21,25,33,35,42,43,44', 3, '2024-04-07 09:34:05', '2024-04-07 09:34:05', NULL),
(8, 'Offices', '1716787471.jpg', '1', '20,21,22,25,26,28,29,36,37,40,45', 5, '2024-05-27 05:24:31', '2024-05-27 05:31:00', NULL),
(9, 'Shops', '1716787745.jpg', '1', '20,21,22,25,28,36,37,40,45', 5, '2024-05-27 05:29:05', '2024-05-27 05:29:05', NULL),
(10, 'Flats', '1716787996.png', '1', '20,21,22,25,28,29,32,36,37,40,45', 3, '2024-05-27 05:33:16', '2024-05-27 05:36:30', NULL),
(11, 'Villas', '1716788283.png', '1', '20,21,22,25,28,29,36,37,40,45', 3, '2024-05-27 05:38:03', '2024-05-27 05:38:03', NULL),
(12, 'Showroom', '1716788390.jpg', '1', '20,21,22,25,28,29,36,37,40,45', 5, '2024-05-27 05:39:50', '2024-05-27 05:39:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

DROP TABLE IF EXISTS `subscribers`;
CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'null = guest',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_format` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2' COMMENT '1 = active, 2 = inactive',
  `role` int NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rera_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_employees` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_area_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `mobile`, `email_verified_at`, `password`, `password_format`, `status`, `role`, `remember_token`, `created_at`, `updated_at`, `designation`, `rera_no`, `no_of_employees`, `active_area_number`, `office_address`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '7895642562', NULL, '$2y$12$F7KIn5KgwTlQZ6sykUc4DeMnDAFzQnpY1Lkt38Ii4ieIqX9ffn1SK', '1234', '2', 1, NULL, '2024-02-22 15:12:43', '2024-02-22 15:12:43', NULL, NULL, NULL, NULL, NULL),
(2, 'Test', 'Test', 'test@gmail.com', '9878978978', NULL, '$2y$12$OwnP1QkxW7we4UUYD2ock.1BsWRM7gwI5JI/qNHasDewFR0/fE.Lm', '1234', '2', 2, NULL, '2024-04-17 07:35:41', '2024-04-17 07:35:41', NULL, NULL, NULL, NULL, NULL),
(3, 'Idris Kabri', 'Idris Kabri', 'kabriidris53@gmail.com', '09358473253', NULL, '$2y$12$kRMFaU5TCFOMKjeqHRroZuGF.U7DwwwTxCXFJaQbm48T9pPBrmvRa', '123', '2', 2, NULL, '2024-04-27 11:56:58', '2024-04-27 11:56:58', NULL, NULL, NULL, NULL, NULL),
(4, 'Plan A', 'Plan A', 'plana@gmail.com', '9586496716', NULL, '$2y$12$GtDG30VKu0J3T/fI/P/VBO8CxwKmmczkurS..3cc9z7esAaRNb0Ly', '1234', '2', 2, NULL, '2024-05-02 12:28:04', '2024-05-02 12:28:04', NULL, NULL, NULL, NULL, NULL),
(5, 'Rancho', 'Rancho', 'rancho@gmail.com', '8712309834', NULL, '$2y$12$WiKks2AfibrNkDwKm.H3heYvONMgPsS0m9sM4o2gx06m.tjuqk6wy', '1234', '2', 2, NULL, '2024-05-03 10:33:46', '2024-05-03 10:33:46', NULL, NULL, NULL, NULL, NULL),
(6, 'Idris Kabri12', 'Idris Kabri12', 'trest@gmail.com', '1234567890', NULL, '$2y$12$If6aQ.1yes.JrvDcV1Sjeu9uNZB/4CZySmabReBL8l366bx.l9uZO', '123', '2', 3, NULL, '2024-08-05 02:15:40', '2024-08-05 04:51:02', 'test', '12345', '123', 'test12', 'Test12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
