-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2023 at 07:33 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talha_usa`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `banner_image_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image_two` text COLLATE utf8mb4_unicode_ci,
  `banner_image_three` text COLLATE utf8mb4_unicode_ci,
  `banner_image_four` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_image_one`, `banner_image_two`, `banner_image_three`, `banner_image_four`, `created_at`, `updated_at`) VALUES
(1, 'uploads/banner/15961f8106.jpg', 'uploads/banner/f37501efe1.jpg', 'uploads/banner/769a9d6219.jpg', 'uploads/banner/e94e30d174.jpg', '2023-09-03 05:41:14', '2023-09-03 22:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tfgh', 'tfgh', 'uploads/b3db1e07d3.webp', '1', '2023-08-28 00:23:32', '2023-08-28 00:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentid` int DEFAULT NULL,
  `level` int DEFAULT NULL,
  `ordering` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metatile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metadescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parentid`, `level`, `ordering`, `banner`, `icon`, `metatile`, `metadescription`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Men\'s', 0, 0, '0', NULL, NULL, NULL, NULL, 'mens', 1, '2023-08-30 00:14:25', '2023-08-30 00:14:25'),
(2, 'Women\'s', 0, 0, '0', NULL, NULL, NULL, NULL, 'womens', 1, '2023-08-30 00:14:38', '2023-08-30 00:14:38'),
(3, 'Kids', 0, 0, '0', NULL, NULL, NULL, NULL, 'kids', 1, '2023-08-30 00:14:49', '2023-08-30 00:14:49'),
(4, 'Others', 0, 0, '0', NULL, NULL, NULL, NULL, 'others', 1, '2023-08-30 00:14:55', '2023-08-30 00:14:55'),
(5, 'Winter', 0, 0, '0', NULL, NULL, NULL, NULL, 'winter', 1, '2023-09-09 01:32:43', '2023-09-09 01:32:43'),
(6, 'top', 2, 1, '0', NULL, NULL, NULL, NULL, 'top', 1, '2023-09-09 02:57:13', '2023-09-09 02:57:13'),
(7, 'tshirt', 1, 1, '0', NULL, NULL, NULL, NULL, 'tshirt', 1, '2023-09-09 02:57:37', '2023-09-09 02:57:37'),
(9, 'clothes', 2, 1, '0', NULL, NULL, NULL, NULL, 'clothes', 1, '2023-09-09 03:39:24', '2023-09-09 03:39:24'),
(10, 'Gloves', 5, 1, '0', NULL, NULL, NULL, NULL, 'gloves', 1, '2023-09-11 23:17:25', '2023-09-11 23:17:25'),
(11, 'Jeans', 4, 1, '0', NULL, NULL, NULL, NULL, 'jeans', 1, '2023-09-11 23:17:58', '2023-09-11 23:17:58'),
(15, 'tshirt', 2, 1, '0', NULL, NULL, NULL, NULL, 'tshirt', 1, '2023-10-03 04:54:11', '2023-10-03 04:54:11'),
(16, 'tesdddssss', 0, 0, '0', NULL, NULL, NULL, NULL, 'tesdddssss', 0, '2023-10-07 05:33:19', '2023-10-07 05:33:29');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'White', '#ffffff', 1, '2023-08-30 05:16:50', '2023-08-31 03:31:24'),
(2, 'Black', '#000000', 1, '2023-08-31 03:31:45', '2023-08-31 03:31:45'),
(3, 'Red', '#ed1b24', 1, '2023-08-31 03:32:19', '2023-08-31 03:32:19'),
(4, 'Navy Blue', '#272974', 1, '2023-08-31 03:32:51', '2023-08-31 03:32:51'),
(5, 'Purple', '#7d277e', 1, '2023-08-31 03:33:34', '2023-08-31 03:33:34'),
(6, 'Royal Blue', '#212c62', 1, '2023-08-31 03:34:17', '2023-08-31 03:34:17'),
(7, 'Turqoise', '#63c6c3', 1, '2023-08-31 03:35:02', '2023-08-31 03:35:02'),
(8, 'Lime', '#4db748', 1, '2023-08-31 03:36:03', '2023-08-31 03:36:03'),
(9, 'Brown', '#a35f0a', 1, '2023-08-31 03:36:41', '2023-08-31 03:36:41'),
(10, 'Khaki', '#c3b092', 1, '2023-08-31 03:37:41', '2023-08-31 03:37:41'),
(11, 'Hunter Green', '#406659', 1, '2023-08-31 03:38:21', '2023-08-31 03:38:21'),
(12, 'Gray', '#808281', 1, '2023-08-31 03:38:50', '2023-08-31 03:38:50'),
(13, 'Yellow', '#fef200', 1, '2023-08-31 03:39:14', '2023-08-31 03:39:14'),
(14, 'Light Pink', '#f8b4c3', 1, '2023-08-31 03:39:40', '2023-08-31 03:39:40'),
(15, 'Hot Pink', '#f58792', 1, '2023-08-31 03:40:08', '2023-08-31 03:40:08'),
(16, 'Orange', '#f05225', 1, '2023-08-31 03:40:42', '2023-08-31 03:40:42'),
(17, 'Sky', '#13b5e4', 1, '2023-08-31 03:41:09', '2023-08-31 03:41:09'),
(18, 'Olive', '#6d722f', 1, '2023-08-31 03:41:30', '2023-08-31 03:41:30'),
(19, 'Kelly Green', '#559644', 1, '2023-08-31 03:41:53', '2023-08-31 03:41:53');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `contact_option` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` int DEFAULT NULL,
  `city` int DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtotal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paymethod` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderStatus` int NOT NULL DEFAULT '0',
  `trackingid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `email`, `state`, `city`, `address`, `quantity`, `subtotal`, `tax`, `total`, `payment`, `paymethod`, `orderStatus`, `trackingid`, `created_at`, `updated_at`) VALUES
(1, 'Dipankar Biswas', '01741571104', 'admin@admin.com', NULL, NULL, '271-Boro Moghbazar, Dhaka, BD', '7', '7,289.00', '0.00', '7,289.00', NULL, NULL, 0, NULL, NULL, NULL),
(2, 'Jonah Buchanan', '+1 (603) 605-7336', 'qakavod@mailinator.com', NULL, NULL, 'In labore do sequi n', '3', '1,035.00', '103.50', '1,138.50', NULL, NULL, 0, NULL, NULL, NULL),
(3, 'Hope Ferrell', '+1 (687) 499-6201', 'lokikimab@mailinator.com', NULL, NULL, 'Non consectetur nih', '7', '19,311.00', '1,931.10', '21,242.10', NULL, NULL, 0, NULL, NULL, NULL),
(4, 'Jamalia Delaney', '+1 (852) 967-1888', 'xohybidef@mailinator.com', NULL, NULL, 'Consequatur provide', '2', '9,138.00', '913.80', '10,051.80', NULL, NULL, 0, '200923-14892', '2023-09-19 23:09:06', NULL),
(5, 'Dipankar Biswas', '01741571104', 'dipankarbiswasofficials@gmail.com', NULL, NULL, '271-Boro Moghbazar, Dhaka, BD', '6', '2,986.00', '298.60', '3,284.60', NULL, NULL, 0, '200923-63770', '2023-09-19 23:09:33', NULL),
(6, 'Dipankar Biswas', '01741571104', 'dipankarbiswasofficials@gmail.com', NULL, NULL, '271-Boro Moghbazar, Dhaka, BD', '2', '9,138.00', '913.80', '10,051.80', NULL, NULL, 0, '200923-12409', '2023-09-19 23:09:12', NULL),
(7, 'Madison Witt', '+1 (451) 713-9554', 'giqu@mailinator.com', NULL, NULL, 'Voluptas totam quam', '3', '1,413.00', '141.30', '1,554.30', NULL, NULL, 0, '200923-20763', '2023-09-20 00:09:16', NULL),
(8, 'Nadine Bowen', '+1 (586) 435-8043', 'jurevazus@mailinator.com', NULL, NULL, 'Voluptatem temporibu', '3', '1,606.00', '160.60', '1,766.60', NULL, NULL, 0, '210923-41824', '2023-09-21 01:09:51', NULL),
(9, 'Dipankar Biswas', '01741571104', 'dipankarbiswasofficials@gmail.com', NULL, NULL, '271-Boro Moghbazar, Dhaka, BD', '6', '1,980.00', '198.00', '2,178.00', NULL, NULL, 0, '210923-88846', '2023-09-21 02:09:32', NULL),
(10, 'Iris Callahan', '+1 (169) 191-6376', 'buxenel@mailinator.com', NULL, NULL, 'Et dignissimos dolor', '3', '1,240.00', '0.00', '1,240.00', '1', 'Stripe', 0, '161023-55664', '2023-10-15 23:10:03', NULL),
(11, 'Unity Arnold', '+1 (556) 417-3546', 'kufa@mailinator.com', NULL, NULL, 'Qui praesentium ipsa', '4', '2,272.00', '0.00', '2,272.00', '1', 'Stripe', 0, '161023-61293', '2023-10-15 23:10:34', NULL),
(12, 'Tanner Hernandez', '+1 (142) 932-9788', 'belohelo@mailinator.com', NULL, NULL, 'Harum consequuntur c', '5', '1,635.00', '0.00', '1,635.00', '1', 'Stripe', 0, '161023-29961', '2023-10-16 00:10:15', NULL),
(13, 'Bruno Whitney', '+1 (758) 998-9611', 'sulusydej@mailinator.com', NULL, NULL, 'Cupiditate aut irure', '5', '1,635.00', '0.00', '1,635.00', '1', 'Stripe', 0, '161023-25145', '2023-10-16 00:10:24', NULL),
(14, 'Emerald Booker', '+1 (977) 918-5296', 'cuzuxabym@mailinator.com', NULL, NULL, 'Rerum pariatur Ut d', '5', '1,635.00', '0.00', '1,635.00', '1', 'Stripe', 0, '161023-40299', '2023-10-16 00:10:00', NULL),
(15, 'Grady Mccullough', '+1 (704) 334-1524', 'sugavygugu@mailinator.com', NULL, NULL, 'Magni cillum dolore', '2', '808.00', '0.00', '808.00', '1', 'Stripe', 0, '161023-16958', '2023-10-16 00:10:59', NULL),
(16, 'Reagan Mclaughlin', '+1 (423) 152-6453', 'punovoqana@mailinator.com', NULL, NULL, 'Laboris et odio temp', '1', '809.00', '0.00', '809.00', '1', 'Stripe', 0, '291123-46166', '2023-11-28 23:11:38', NULL),
(17, 'Bruno Kirk', '+1 (756) 916-4086', 'nylo@mailinator.com', NULL, NULL, 'Aut consequat Et ea', '13', '6,481.00', '0.00', '6,481.00', '1', 'Stripe', 0, '291123-60540', '2023-11-29 00:11:49', NULL),
(18, 'Samantha Alvarez', '+1 (679) 123-4554', 'lyjadib@mailinator.com', NULL, NULL, 'Officia nulla est ut', '4', '1,996.00', '0.00', '1,996.00', '1', 'Stripe', 0, '291123-54009', '2023-11-29 00:11:33', NULL),
(19, 'Vanna Valdez', '+1 (869) 186-5709', 'mumogoq@mailinator.com', NULL, NULL, 'Quibusdam nobis sed', '3', '1,820.00', '0.00', '1,820.00', '1', 'Stripe', 0, '291123-46421', '2023-11-29 00:11:00', NULL),
(20, 'Lee Campos', '+1 (357) 562-1835', 'lapaput@mailinator.com', NULL, NULL, 'Qui rerum qui id qui', '3', '1,266.00', '0.00', '1,266.00', '1', 'Stripe', 0, '291123-46892', '2023-11-29 00:11:24', NULL),
(21, 'Larissa Salinas', '+1 (435) 869-7731', 'sexaba@mailinator.com', NULL, NULL, 'Est culpa reiciendi', '3', '1,886.00', '0.00', '1,886.00', '1', 'Stripe', 0, '291123-64383', '2023-11-29 00:11:11', NULL),
(22, 'Kirestin Reilly', '+1 (843) 814-3875', 'cuqu@mailinator.com', NULL, NULL, 'Sit natus quod plac', '3', '2,148.00', '0.00', '2,148.00', '1', 'Stripe', 0, '291123-74487', '2023-11-29 00:11:40', NULL),
(23, 'Shay Washington', '+1 (963) 417-5114', 'xywuxyju@mailinator.com', NULL, NULL, 'Sit ut et voluptate', '1', '319.00', '0.00', '319.00', '1', 'Stripe', 0, '291123-88488', '2023-11-29 00:11:52', NULL),
(24, 'Neve Guerrero', '+1 (689) 135-6875', 'xycaqutizy@mailinator.com', NULL, NULL, 'Non non est adipisci', '4', '3,418.00', '0.00', '3,418.00', '1', 'Stripe', 0, '291123-65333', '2023-11-29 00:11:55', NULL),
(25, 'Maggy England', '+1 (778) 783-4944', 'fymumul@mailinator.com', NULL, NULL, 'Obcaecati velit sun', '7', '2,806.00', '0.00', '2,806.00', '1', 'Stripe', 0, '291123-65471', '2023-11-29 00:11:36', NULL),
(26, 'Regina Forbes', '+1 (445) 614-4309', 'nabeb@mailinator.com', NULL, NULL, 'Cupiditate quis aspe', '6', '5,559.00', '0.00', '5,559.00', '1', 'Stripe', 0, '291123-57121', '2023-11-29 00:11:34', NULL),
(27, 'Garth Branch', '+1 (473) 672-4549', 'manezeturu@mailinator.com', NULL, NULL, 'Aliquam ipsum eum r', '7', '3,261.00', '0.00', '3,261.00', '1', 'Stripe', 0, '291123-50604', '2023-11-29 00:11:33', NULL),
(28, 'Athena Nguyen', '+1 (857) 264-4576', 'ronoja@mailinator.com', NULL, NULL, 'Reprehenderit ut pr', '5', '3,781.00', '0.00', '3,781.00', '1', 'Stripe', 0, '291123-18622', '2023-11-29 00:11:12', NULL),
(29, 'Malachi Gardner', '+1 (528) 422-4002', 'qeze@mailinator.com', NULL, NULL, 'Maiores fugit ratio', '6', '3,624.00', '0.00', '3,624.00', '1', 'Stripe', 0, '291123-21900', '2023-11-29 00:11:56', NULL),
(30, 'Tate Mosley', '+1 (499) 593-2139', 'japyqumav@mailinator.com', NULL, NULL, 'Eos obcaecati quis', '195', '148,960.00', '0.00', '148,960.00', '1', 'Stripe', 0, '051223-64481', '2023-12-05 01:12:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2023_08_09_112830_create_categories_table', 1),
(12, '2023_08_09_113017_create_brands_table', 1),
(13, '2023_08_28_072518_create_sizes_table', 2),
(16, '2023_08_28_072117_create_colors_table', 3),
(17, '2023_08_29_060118_create_site_setups_table', 3),
(26, '2023_08_29_103022_create_banners_table', 4),
(27, '2023_08_29_103131_create_slides_table', 4),
(37, '2023_08_28_093040_create_products_table', 5),
(38, '2023_08_30_104729_create_product_colors_table', 5),
(39, '2023_08_30_105751_create_product_sizes_table', 5),
(41, '2023_09_09_053345_create_necks_table', 6),
(47, '2023_09_17_043213_create_customers_table', 7),
(48, '2023_09_17_043214_create_orders_table', 7),
(50, '2023_10_07_091910_create_sliders_table', 8),
(51, '2023_09_17_091027_create_shoppingcart_table', 9),
(52, '2023_10_10_055938_create_stripe_payment_infos_table', 10),
(53, '2023_10_12_065457_create_contacts_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `necks`
--

CREATE TABLE `necks` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `necks`
--

INSERT INTO `necks` (`id`, `name`, `slug`, `image`, `status`, `created_at`, `updated_at`) VALUES
(11, 'Comfort Tee', 'comfort-tee', 'uploads/neck/e83d588bc0.png', '1', '2023-09-20 04:40:01', '2023-09-20 04:40:01'),
(12, 'Crew Neck Comfortsoft', 'crew-neck-comfortsoft', 'uploads/neck/b6e3fbae63.png', '1', '2023-09-20 04:40:12', '2023-09-20 04:40:12'),
(13, 'Crewneck Sweatshirt', 'crewneck-sweatshirt', 'uploads/neck/1d3cc0a0c2.png', '1', '2023-09-20 04:40:46', '2023-09-20 04:40:46'),
(14, 'Long Sleeve Tee', 'long-sleeve-tee', 'uploads/neck/da5c4f2e70.png', '1', '2023-09-20 04:41:14', '2023-09-20 04:41:14'),
(15, 'Pullover Hoodie', 'pullover-hoodie', 'uploads/neck/61f4d8a210.png', '1', '2023-09-20 04:42:16', '2023-09-20 04:42:16'),
(16, 'Ring-Spun', 'ring-spun', 'uploads/neck/98768e1203.png', '1', '2023-09-20 04:42:27', '2023-09-20 04:42:27'),
(17, 'Tank Top', 'tank-top', 'uploads/neck/d73cc0dda6.png', '1', '2023-09-20 04:42:41', '2023-09-20 04:42:41'),
(18, 'Women\'s Comfort Tee', 'womens-comfort-tee', 'uploads/neck/bbd4266f01.png', '1', '2023-09-20 04:42:50', '2023-09-20 04:42:50'),
(19, 'Women\'s Premium V-Neck Tee', 'womens-premium-v-neck-tee', 'uploads/neck/3252a34f60.png', '1', '2023-09-20 04:42:57', '2023-09-20 04:42:57'),
(20, 'V-Neck Tee', 'v-neck-tee', 'uploads/neck/26b9b8ec75.png', '1', '2023-09-20 23:15:46', '2023-09-20 23:15:46'),
(21, 'Premium Hoodie', 'premium-hoodie', 'uploads/neck/6a5ce315b2.png', '1', '2023-09-20 23:43:57', '2023-09-20 23:43:57'),
(22, 'Digisoft Printed Premium Tee', 'digisoft-printed-premium-tee', 'uploads/neck/9dbcbe2a1f.png', '1', '2023-09-20 23:45:03', '2023-09-20 23:45:03'),
(23, 'Baby Premium Onesie', 'baby-premium-onesie', 'uploads/neck/e769a69c30.png', '1', '2023-09-20 23:54:24', '2023-09-20 23:54:24'),
(24, 'Toddler Classic Tee', 'toddler-classic-tee', 'uploads/neck/47f58a13df.png', '1', '2023-09-21 00:02:03', '2023-09-21 00:02:03'),
(25, 'Women\'s Flowy Tank Top', 'womens-flowy-tank-top', 'uploads/neck/03d041739d.png', '1', '2023-09-21 01:06:41', '2023-09-22 23:46:31');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `customer_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `design` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` float(10,2) DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `product_id`, `name`, `slug`, `qty`, `price`, `image`, `design`, `color`, `color_code`, `size`, `tax`, `shipping`, `status`, `created_at`, `updated_at`) VALUES
(1, 8, 10, 'Florence Shepard', 'florence-shepard', 2, '555', 'uploads/neck/1d3cc0a0c2.png', 'Crewneck Sweatshirt', 'Purple', '#7d277e', '2XL', '55.50', NULL, 0, '2023-09-21 01:01:51', '2023-09-21 01:01:51'),
(2, 8, 16, 'Digisoft Printed Premium Tee', 'digisoft-printed-premium-tee', 1, '496', 'uploads/neck/9dbcbe2a1f.png', 'Digisoft Printed Premium Tee', 'Kelly Green', '#559644', 'S', '49.60', NULL, 0, '2023-09-21 01:01:51', '2023-09-21 01:01:51'),
(3, 9, 18, 'Baby Premium Onesie', 'baby-premium-onesie', 6, '330', 'uploads/neck/e769a69c30.png', 'Baby Premium Onesie', 'Olive', '#6d722f', 'M', '33.00', NULL, 0, '2023-09-21 02:03:32', '2023-09-21 02:03:32'),
(4, 10, 8, 'Whitney Glenn', 'whitney-glenn', 1, '341', 'uploads/neck/98768e1203.png', 'Ring-Spun', 'Hunter Green', '#406659', 'S', '0.00', NULL, 0, '2023-10-15 23:32:03', '2023-10-15 23:32:03'),
(5, 10, 8, 'Whitney Glenn', 'whitney-glenn', 1, '580', 'uploads/neck/98768e1203.png', 'Ring-Spun', 'Khaki', '#c3b092', 'S', '0.00', NULL, 0, '2023-10-15 23:32:03', '2023-10-15 23:32:03'),
(6, 10, 15, 'Elijah Wade', 'elijah-wade', 1, '319', 'uploads/neck/98768e1203.png', 'Ring-Spun', 'Sky', '#13b5e4', 'S', '0.00', NULL, 0, '2023-10-15 23:32:03', '2023-10-15 23:32:03'),
(7, 11, 17, 'Brielle Barnes', 'brielle-barnes', 4, '568', 'uploads/neck/6a5ce315b2.png', 'Premium Hoodie', 'Royal Blue', '#212c62', 'S', '0.00', NULL, 0, '2023-10-15 23:37:34', '2023-10-15 23:37:34'),
(8, 12, 17, 'Brielle Barnes', 'brielle-barnes', 5, '327', 'uploads/neck/6a5ce315b2.png', 'Premium Hoodie', 'Navy Blue', '#272974', 'S', '0.00', NULL, 0, '2023-10-16 00:33:15', '2023-10-16 00:33:15'),
(9, 13, 17, 'Brielle Barnes', 'brielle-barnes', 5, '327', 'uploads/neck/6a5ce315b2.png', 'Premium Hoodie', 'Navy Blue', '#272974', 'S', '0.00', NULL, 0, '2023-10-16 00:36:24', '2023-10-16 00:36:24'),
(10, 14, 17, 'Brielle Barnes', 'brielle-barnes', 5, '327', 'uploads/neck/6a5ce315b2.png', 'Premium Hoodie', 'Navy Blue', '#272974', 'S', '0.00', NULL, 0, '2023-10-16 00:38:00', '2023-10-16 00:38:00'),
(11, 15, 17, 'Brielle Barnes', 'brielle-barnes', 2, '404', 'uploads/neck/6a5ce315b2.png', 'Premium Hoodie', 'Red', '#ed1b24', 'S', '0.00', NULL, 0, '2023-10-16 00:41:59', '2023-10-16 00:41:59'),
(12, 16, 8, 'Whitney Glenn', 'whitney-glenn', 1, '809', 'uploads/neck/98768e1203.png', 'Ring-Spun', 'Gray', '#808281', 'S', '0.00', 0.75, 0, '2023-11-28 23:56:38', '2023-11-28 23:56:38'),
(13, 17, 18, 'Baby Premium Onesie', 'baby-premium-onesie', 6, '274', 'uploads/neck/e769a69c30.png', 'Baby Premium Onesie', 'Kelly Green', '#559644', 'S', '0.00', 0.75, 0, '2023-11-29 00:14:49', '2023-11-29 00:14:49'),
(14, 17, 3, 'TaShya Lane', 'tashya-lane', 7, '691', 'uploads/neck/b6e3fbae63.png', 'Crew Neck Comfortsoft', 'Orange', '#f05225', 'S', '0.00', 0.75, 0, '2023-11-29 00:14:49', '2023-11-29 00:14:49'),
(15, 18, 4, 'Cum dolorum eius ame', 'cum-dolorum-eius-ame', 2, '93', 'uploads/neck/3252a34f60.png', 'Women\'s Premium V-Neck Tee', 'Olive', '#6d722f', 'S', '0.00', 0.75, 0, '2023-11-29 00:18:33', '2023-11-29 00:18:33'),
(16, 18, 2, 'Carly Duran', 'carly-duran', 1, '950', 'uploads/neck/e83d588bc0.png', 'Comfort Tee', 'Kelly Green', '#559644', 'S', '0.00', 0.75, 0, '2023-11-29 00:18:33', '2023-11-29 00:18:33'),
(17, 18, 9, 'Cruz Espinoza', 'cruz-espinoza', 1, '860', 'uploads/neck/61f4d8a210.png', 'Pullover Hoodie', 'Olive', '#6d722f', 'S', '0.00', 0.75, 0, '2023-11-29 00:18:34', '2023-11-29 00:18:34'),
(18, 19, 10, 'Florence Shepard', 'florence-shepard', 1, '822', 'uploads/neck/1d3cc0a0c2.png', 'Crewneck Sweatshirt', 'Sky', '#13b5e4', 'S', '0.00', 0.75, 0, '2023-11-29 00:21:00', '2023-11-29 00:21:00'),
(19, 19, 9, 'Cruz Espinoza', 'cruz-espinoza', 1, '860', 'uploads/neck/61f4d8a210.png', 'Pullover Hoodie', 'Olive', '#6d722f', 'S', '0.00', 0.75, 0, '2023-11-29 00:21:00', '2023-11-29 00:21:00'),
(20, 19, 21, 'Kiona Romero', 'kiona-romero', 1, '138', 'uploads/neck/d73cc0dda6.png', 'Tank Top', 'Navy Blue', '#272974', 'S', '0.00', 0.75, 0, '2023-11-29 00:21:00', '2023-11-29 00:21:00'),
(21, 20, 18, 'Baby Premium Onesie', 'baby-premium-onesie', 1, '274', 'uploads/neck/e769a69c30.png', 'Baby Premium Onesie', 'Kelly Green', '#559644', 'S', '0.00', 0.75, 0, '2023-11-29 00:23:24', '2023-11-29 00:23:24'),
(22, 20, 20, 'Evangeline Mccullough', 'evangeline-mccullough', 1, '677', 'uploads/neck/d73cc0dda6.png', 'Tank Top', 'Black', '#000000', 'S', '0.00', 0.75, 0, '2023-11-29 00:23:24', '2023-11-29 00:23:24'),
(23, 20, 11, 'Nasim Black', 'nasim-black', 1, '315', 'uploads/neck/da5c4f2e70.png', 'Long Sleeve Tee', 'Gray', '#808281', 'S', '0.00', 0.75, 0, '2023-11-29 00:23:24', '2023-11-29 00:23:24'),
(24, 21, 16, 'Digisoft Printed Premium Tee', 'digisoft-printed-premium-tee', 1, '496', 'uploads/neck/9dbcbe2a1f.png', 'Digisoft Printed Premium Tee', 'Kelly Green', '#559644', 'S', '0.00', 0.75, 0, '2023-11-29 00:27:11', '2023-11-29 00:27:11'),
(25, 21, 17, 'Brielle Barnes', 'brielle-barnes', 1, '568', 'uploads/neck/6a5ce315b2.png', 'Premium Hoodie', 'Royal Blue', '#212c62', 'S', '0.00', 0.75, 0, '2023-11-29 00:27:11', '2023-11-29 00:27:11'),
(26, 21, 10, 'Florence Shepard', 'florence-shepard', 1, '822', 'uploads/neck/1d3cc0a0c2.png', 'Crewneck Sweatshirt', 'Sky', '#13b5e4', 'S', '0.00', 0.75, 0, '2023-11-29 00:27:11', '2023-11-29 00:27:11'),
(27, 22, 8, 'Whitney Glenn', 'whitney-glenn', 1, '809', 'uploads/neck/98768e1203.png', 'Ring-Spun', 'Gray', '#808281', 'S', '0.00', 0.75, 0, '2023-11-29 00:36:40', '2023-11-29 00:36:40'),
(28, 22, 19, 'Desiree Herring', 'desiree-herring', 1, '771', 'uploads/neck/47f58a13df.png', 'Toddler Classic Tee', 'Olive', '#6d722f', 'S', '0.00', 0.75, 0, '2023-11-29 00:36:40', '2023-11-29 00:36:40'),
(29, 22, 17, 'Brielle Barnes', 'brielle-barnes', 1, '568', 'uploads/neck/6a5ce315b2.png', 'Premium Hoodie', 'Royal Blue', '#212c62', 'S', '0.00', 0.75, 0, '2023-11-29 00:36:40', '2023-11-29 00:36:40'),
(30, 23, 15, 'Elijah Wade', 'elijah-wade', 1, '319', 'uploads/neck/98768e1203.png', 'Ring-Spun', 'Sky', '#13b5e4', 'S', '0.00', 0.75, 0, '2023-11-29 00:37:52', '2023-11-29 00:37:52'),
(31, 24, 2, 'Carly Duran', 'carly-duran', 3, '950', 'uploads/neck/e83d588bc0.png', 'Comfort Tee', 'Kelly Green', '#559644', 'S', '0.00', 0.75, 0, '2023-11-29 00:38:56', '2023-11-29 00:38:56'),
(32, 24, 17, 'Brielle Barnes', 'brielle-barnes', 1, '568', 'uploads/neck/6a5ce315b2.png', 'Premium Hoodie', 'Royal Blue', '#212c62', 'S', '0.00', 0.75, 0, '2023-11-29 00:38:56', '2023-11-29 00:38:56'),
(33, 25, 16, 'Digisoft Printed Premium Tee', 'digisoft-printed-premium-tee', 4, '496', 'uploads/neck/9dbcbe2a1f.png', 'Digisoft Printed Premium Tee', 'Kelly Green', '#559644', 'S', '0.00', 0.75, 0, '2023-11-29 00:40:36', '2023-11-29 00:40:36'),
(34, 25, 18, 'Baby Premium Onesie', 'baby-premium-onesie', 3, '274', 'uploads/neck/e769a69c30.png', 'Baby Premium Onesie', 'Kelly Green', '#559644', 'S', '0.00', 0.75, 0, '2023-11-29 00:40:36', '2023-11-29 00:40:36'),
(35, 26, 2, 'Carly Duran', 'carly-duran', 5, '950', 'uploads/neck/e83d588bc0.png', 'Comfort Tee', 'Kelly Green', '#559644', 'S', '0.00', 0.75, 0, '2023-11-29 00:43:35', '2023-11-29 00:43:35'),
(36, 26, 8, 'Whitney Glenn', 'whitney-glenn', 1, '809', 'uploads/neck/98768e1203.png', 'Ring-Spun', 'Gray', '#808281', 'S', '0.00', 0.75, 0, '2023-11-29 00:43:35', '2023-11-29 00:43:35'),
(37, 27, 13, 'Cooper Good', 'cooper-good', 5, '425', 'uploads/neck/98768e1203.png', 'Ring-Spun', 'Purple', '#7d277e', 'S', '0.00', 0.75, 0, '2023-11-29 00:46:33', '2023-11-29 00:46:33'),
(38, 27, 17, 'Brielle Barnes', 'brielle-barnes', 2, '568', 'uploads/neck/6a5ce315b2.png', 'Premium Hoodie', 'Royal Blue', '#212c62', 'S', '0.00', 0.75, 0, '2023-11-29 00:46:33', '2023-11-29 00:46:33'),
(39, 28, 8, 'Whitney Glenn', 'whitney-glenn', 3, '809', 'uploads/neck/98768e1203.png', 'Ring-Spun', 'Gray', '#808281', 'S', '0.00', 0.75, 0, '2023-11-29 00:48:12', '2023-11-29 00:48:12'),
(40, 28, 20, 'Evangeline Mccullough', 'evangeline-mccullough', 2, '677', 'uploads/neck/d73cc0dda6.png', 'Tank Top', 'Black', '#000000', 'S', '0.00', 0.75, 0, '2023-11-29 00:48:12', '2023-11-29 00:48:12'),
(41, 29, 15, 'Elijah Wade', 'elijah-wade', 1, '319', 'uploads/neck/98768e1203.png', 'Ring-Spun', 'Sky', '#13b5e4', 'S', '0.00', 0.75, 0, '2023-11-29 00:52:57', '2023-11-29 00:52:57'),
(42, 29, 16, 'Digisoft Printed Premium Tee', 'digisoft-printed-premium-tee', 2, '496', 'uploads/neck/9dbcbe2a1f.png', 'Digisoft Printed Premium Tee', 'Kelly Green', '#559644', 'S', '0.00', 0.75, 0, '2023-11-29 00:52:57', '2023-11-29 00:52:57'),
(43, 29, 19, 'Desiree Herring', 'desiree-herring', 3, '771', 'uploads/neck/47f58a13df.png', 'Toddler Classic Tee', 'Olive', '#6d722f', 'S', '0.00', 0.75, 0, '2023-11-29 00:52:57', '2023-11-29 00:52:57'),
(44, 30, 2, 'Carly Duran', 'carly-duran', 100, '950', 'uploads/neck/e83d588bc0.png', 'Comfort Tee', 'Kelly Green', '#559644', 'S', '0.00', 0.75, 0, '2023-12-05 01:45:52', '2023-12-05 01:45:52'),
(45, 30, 17, 'Brielle Barnes', 'brielle-barnes', 95, '568', 'uploads/neck/6a5ce315b2.png', 'Premium Hoodie', 'Royal Blue', '#212c62', 'S', '0.00', 0.75, 0, '2023-12-05 01:45:52', '2023-12-05 01:45:52');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('admin@admin.com', '$2y$10$RXG0FRcLQsJb9t95uimz2eGxjGilJhfVxIIB9T2Hbxyoua6JFCfXK', '2023-09-23 00:11:34');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `neck_id` int DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metatitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metadescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `thumbnail`, `neck_id`, `category_id`, `description`, `metatitle`, `tags`, `metadescription`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Carly Duran', 'carly-duran', NULL, 11, 1, '<h2>SDIOruweh dfhioni iogiohdf uiyeruitg&nbsp;</h2>\r\n\r\n<p>&nbsp;\r\n<p>&nbsp;</p>\r\n</p>', 'Dicta dolorum volupt', 'Eos voluptate moles', 'Nihil veniam sint p', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(3, 'TaShya Lane', 'tashya-lane', NULL, 12, 3, '<h2>dfGH %r$tg awrf dF sdfg sdsghdsfg</h2>', 'Exercitation eaque e', 'Voluptates laboriosa', 'At enim voluptas qua', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(4, 'Cum dolorum eius ame', 'cum-dolorum-eius-ame', NULL, 19, 2, '<p>SDIOrwe sdfhyiofsdg sdfgjfdsgiore w4eisdfhghsdrg dfjdxgnhsxd fgiobfuif dio&nbsp;</p>', 'Aute quisquam in sit', 'Cum dolorum eius ame', 'Cum dolorum eius ame', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(5, 'Kermit Sellers', 'kermit-sellers', NULL, 15, 5, '<p>FGDFg SFGSET gfxj dkg dgujsr6y gj jkh</p>', 'Aute quisquam in sit', 'Consequat Accusamus', 'Consequat Accusamus', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(6, 'Jameson Obrien', 'jameson-obrien', NULL, 18, 2, '<p>Htryu,ip[h tyyu oicf&nbsp; gfuj uui vugi ty</p>', 'Voluptatem Molestia', 'Voluptatem Molestia', 'Voluptatem Molestia', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(7, 'Barclay Gaines', 'barclay-gaines', NULL, 17, 4, '<p>Hdf gth g vhukikc cyxdty fjrftxurs eezry sdfds&nbsp;&nbsp;tuxeres</p>', 'At magna iusto volup', 'At magna iusto volup', 'At magna iusto volup', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(8, 'Whitney Glenn', 'whitney-glenn', NULL, 16, 1, '<p>Jfdgre e yty ugjgyjut yudfgh vb jujdfhkki7 turftyrty rty tu yugyf&nbsp;</p>', 'Whitney Glenn', 'Whitney Glenn', 'Whitney Glenn', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(9, 'Cruz Espinoza', 'cruz-espinoza', NULL, 15, 5, '<p>Cruz Espinoza</p>', 'Cruz Espinoza', 'Cruz Espinoza', 'Cruz Espinoza', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(10, 'Florence Shepard', 'florence-shepard', NULL, 13, 5, '<p>Florence Shepard&nbsp;Florence Shepard&nbsp;Florence Shepard</p>', 'Florence Shepard', 'Florence Shepard', 'Florence Shepard Florence Shepard', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(11, 'Nasim Black', 'nasim-black', NULL, 14, 5, '<p>Nasim Black&nbsp;Nasim Black&nbsp;Nasim Black</p>', 'Nasim Black', 'Nasim Black', 'Nasim Black', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(12, 'Beverly Warren', 'beverly-warren', NULL, 20, 2, '<p>Beverly Warren&nbsp;Beverly Warren&nbsp;Beverly Warren</p>', 'Beverly Warren', 'Beverly Warren', 'Beverly Warren', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(13, 'Cooper Good', 'cooper-good', NULL, 16, 2, '<p>Cooper Good&nbsp;Cooper Good&nbsp;Cooper Good</p>', 'Cooper Good', 'Cooper Good', 'Cooper Good Cooper Good', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(14, 'Sylvia Mcmahon', 'sylvia-mcmahon', NULL, 12, 1, '<p>Sylvia Mcmahon&nbsp;Sylvia Mcmahon&nbsp;Sylvia Mcmahon</p>', 'Sylvia Mcmahon', 'Sylvia, Mcmahon, Tshirt', 'Sylvia Mcmahon Sylvia Mcmahon', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(15, 'Elijah Wade', 'elijah-wade', NULL, 16, 1, '<p>Elijah Wade&nbsp;Elijah Wade&nbsp;Elijah Wade</p>', 'Elijah Wade', 'Elijah Wade', 'Elijah Wade Elijah Wade', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(16, 'Digisoft Printed Premium Tee', 'digisoft-printed-premium-tee', NULL, 22, 2, '<h4>Digisoft Printed Premium Tee&nbsp;Digisoft Printed Premium Tee&nbsp;Digisoft Printed Premium Tee</h4>', 'Digisoft Printed Premium Tee', 'Digisoft Printed Premium Tee', 'Digisoft Printed Premium Tee Digisoft Printed Premium Tee', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(17, 'Brielle Barnes', 'brielle-barnes', NULL, 21, 3, '<p>Brielle Barnes&nbsp;Brielle Barnes&nbsp;Brielle Barnes</p>', 'Brielle Barnes', 'Brielle Barnes', 'Brielle Barnes Brielle Barnes', 1, '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(18, 'Baby Premium Onesie', 'baby-premium-onesie', NULL, 23, 3, '<h4>Baby Premium Onesie&nbsp;Baby Premium Onesie&nbsp;Baby Premium Onesie</h4>', 'Baby Premium Onesie', 'Baby Premium Onesie', 'Baby Premium Onesie Baby Premium Onesie', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(19, 'Desiree Herring', 'desiree-herring', NULL, 24, 3, '<p>Desiree Herring&nbsp;Desiree Herring&nbsp;Desiree Herring</p>', 'Desiree Herring', 'Desiree Herring', 'Desiree Herring Desiree Herring', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(20, 'Evangeline Mccullough', 'evangeline-mccullough', NULL, 17, 4, '<p>Evangeline Mccullough&nbsp;Evangeline Mccullough&nbsp;Evangeline Mccullough</p>', 'Evangeline Mccullough', 'Evangeline Mccullough', 'Evangeline Mccullough Evangeline Mccullough', 1, '2023-09-21 00:20:35', '2023-09-21 00:20:35'),
(21, 'Kiona Romero', 'kiona-romero', NULL, 17, 4, '<p>Kiona Romero&nbsp;Kiona Romero&nbsp;Kiona Romero</p>', 'Kiona Romero', 'Kiona Romero', 'Kiona Romero Kiona Romero', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(22, 'Tanner Cline', 'tanner-cline', NULL, 17, 4, '<p>Tanner Cline&nbsp;Tanner Cline&nbsp;Tanner Cline</p>', 'Tanner Cline', 'Tanner Cline', 'Tanner Cline Tanner Cline', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(23, 'Women\'s Flowy Tank Top', 'womens-flowy-tank-top', NULL, 25, 6, '<h4>Women&#39;s Flowy Tank Top&nbsp;Women&#39;s Flowy Tank Top&nbsp;Women&#39;s Flowy Tank Top</h4>', 'Women\'s Flowy Tank Top', 'Women\'s Flowy Tank Top', 'Women\'s Flowy Tank Top Women\'s Flowy Tank Top', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` int DEFAULT NULL,
  `color_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`id`, `product_id`, `color_id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(12, 2, '19', NULL, '1', '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(13, 2, '17', NULL, '1', '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(14, 2, '15', NULL, '1', '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(15, 2, '14', NULL, '1', '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(16, 2, '13', NULL, '1', '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(17, 2, '12', NULL, '1', '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(18, 2, '8', NULL, '1', '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(19, 2, '7', NULL, '1', '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(20, 2, '6', NULL, '1', '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(21, 2, '5', NULL, '1', '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(22, 2, '4', NULL, '1', '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(23, 2, '3', NULL, '1', '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(24, 2, '2', NULL, '1', '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(25, 2, '1', NULL, '1', '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(26, 3, '16', NULL, '1', '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(27, 3, '15', NULL, '1', '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(28, 3, '14', NULL, '1', '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(29, 3, '13', NULL, '1', '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(30, 3, '11', NULL, '1', '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(31, 3, '10', NULL, '1', '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(32, 3, '9', NULL, '1', '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(33, 3, '8', NULL, '1', '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(34, 3, '7', NULL, '1', '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(35, 3, '5', NULL, '1', '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(36, 3, '3', NULL, '1', '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(37, 3, '2', NULL, '1', '2023-09-20 05:16:27', '2023-09-20 05:16:27'),
(38, 4, '18', NULL, '1', '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(39, 4, '17', NULL, '1', '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(40, 4, '15', NULL, '1', '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(41, 4, '14', NULL, '1', '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(42, 4, '10', NULL, '1', '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(43, 4, '4', NULL, '1', '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(44, 5, '19', NULL, '1', '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(45, 5, '18', NULL, '1', '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(46, 5, '17', NULL, '1', '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(47, 5, '5', NULL, '1', '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(48, 5, '4', NULL, '1', '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(49, 5, '2', NULL, '1', '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(50, 6, '15', NULL, '1', '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(51, 6, '14', NULL, '1', '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(52, 6, '11', NULL, '1', '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(53, 6, '10', NULL, '1', '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(54, 6, '4', NULL, '1', '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(55, 6, '2', NULL, '1', '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(56, 6, '1', NULL, '1', '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(57, 7, '8', NULL, '1', '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(58, 7, '6', NULL, '1', '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(59, 7, '5', NULL, '1', '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(60, 7, '4', NULL, '1', '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(61, 7, '2', NULL, '1', '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(62, 7, '1', NULL, '1', '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(63, 8, '12', NULL, '1', '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(64, 8, '11', NULL, '1', '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(65, 8, '10', NULL, '1', '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(66, 8, '9', NULL, '1', '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(67, 8, '7', NULL, '1', '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(68, 8, '5', NULL, '1', '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(69, 8, '2', NULL, '1', '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(70, 9, '18', NULL, '1', '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(71, 9, '17', NULL, '1', '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(72, 9, '15', NULL, '1', '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(73, 9, '9', NULL, '1', '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(74, 9, '8', NULL, '1', '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(75, 9, '4', NULL, '1', '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(76, 9, '3', NULL, '1', '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(77, 10, '17', NULL, '1', '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(78, 10, '6', NULL, '1', '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(79, 10, '5', NULL, '1', '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(80, 10, '4', NULL, '1', '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(81, 10, '3', NULL, '1', '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(82, 10, '2', NULL, '1', '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(83, 10, '1', NULL, '1', '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(84, 11, '12', NULL, '1', '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(85, 11, '11', NULL, '1', '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(86, 11, '10', NULL, '1', '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(87, 11, '9', NULL, '1', '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(88, 11, '8', NULL, '1', '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(89, 11, '7', NULL, '1', '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(90, 11, '6', NULL, '1', '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(91, 11, '4', NULL, '1', '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(92, 11, '3', NULL, '1', '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(93, 11, '2', NULL, '1', '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(94, 11, '1', NULL, '1', '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(95, 12, '17', NULL, '1', '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(96, 12, '15', NULL, '1', '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(97, 12, '10', NULL, '1', '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(98, 12, '6', NULL, '1', '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(99, 12, '5', NULL, '1', '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(100, 12, '4', NULL, '1', '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(101, 12, '3', NULL, '1', '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(102, 12, '2', NULL, '1', '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(103, 12, '1', NULL, '1', '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(104, 13, '5', NULL, '1', '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(105, 13, '4', NULL, '1', '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(106, 13, '3', NULL, '1', '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(107, 13, '2', NULL, '1', '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(108, 13, '1', NULL, '1', '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(109, 14, '11', NULL, '1', '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(110, 14, '10', NULL, '1', '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(111, 14, '9', NULL, '1', '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(112, 14, '8', NULL, '1', '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(113, 14, '7', NULL, '1', '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(114, 14, '6', NULL, '1', '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(115, 14, '5', NULL, '1', '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(116, 14, '4', NULL, '1', '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(117, 14, '3', NULL, '1', '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(118, 14, '2', NULL, '1', '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(119, 14, '1', NULL, '1', '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(120, 15, '17', NULL, '1', '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(121, 15, '10', NULL, '1', '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(122, 15, '9', NULL, '1', '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(123, 15, '7', NULL, '1', '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(124, 15, '6', NULL, '1', '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(125, 15, '5', NULL, '1', '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(126, 15, '4', NULL, '1', '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(127, 15, '3', NULL, '1', '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(128, 15, '2', NULL, '1', '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(129, 15, '1', NULL, '1', '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(130, 16, '19', NULL, '1', '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(131, 16, '10', NULL, '1', '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(132, 16, '7', NULL, '1', '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(133, 16, '6', NULL, '1', '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(134, 16, '5', NULL, '1', '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(135, 16, '4', NULL, '1', '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(136, 16, '3', NULL, '1', '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(137, 16, '2', NULL, '1', '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(138, 16, '1', NULL, '1', '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(139, 17, '6', NULL, '1', '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(140, 17, '5', NULL, '1', '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(141, 17, '4', NULL, '1', '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(142, 17, '3', NULL, '1', '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(143, 17, '2', NULL, '1', '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(144, 18, '19', NULL, '1', '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(145, 18, '18', NULL, '1', '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(146, 18, '17', NULL, '1', '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(147, 18, '9', NULL, '1', '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(148, 18, '8', NULL, '1', '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(149, 18, '6', NULL, '1', '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(150, 18, '5', NULL, '1', '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(151, 18, '4', NULL, '1', '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(152, 18, '3', NULL, '1', '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(153, 18, '2', NULL, '1', '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(154, 18, '1', NULL, '1', '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(155, 19, '18', NULL, '1', '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(156, 19, '17', NULL, '1', '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(157, 19, '16', NULL, '1', '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(158, 19, '15', NULL, '1', '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(159, 19, '14', NULL, '1', '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(160, 19, '13', NULL, '1', '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(161, 19, '12', NULL, '1', '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(162, 19, '11', NULL, '1', '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(163, 19, '10', NULL, '1', '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(164, 19, '9', NULL, '1', '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(165, 19, '8', NULL, '1', '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(166, 19, '7', NULL, '1', '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(167, 19, '6', NULL, '1', '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(168, 19, '5', NULL, '1', '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(169, 19, '4', NULL, '1', '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(170, 19, '3', NULL, '1', '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(171, 19, '2', NULL, '1', '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(172, 19, '1', NULL, '1', '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(173, 20, '2', NULL, '1', '2023-09-21 00:20:35', '2023-09-21 00:20:35'),
(174, 20, '1', NULL, '1', '2023-09-21 00:20:35', '2023-09-21 00:20:35'),
(175, 21, '4', NULL, '1', '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(176, 21, '3', NULL, '1', '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(177, 21, '2', NULL, '1', '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(178, 21, '1', NULL, '1', '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(179, 22, '6', NULL, '1', '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(180, 22, '5', NULL, '1', '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(181, 22, '4', NULL, '1', '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(182, 22, '3', NULL, '1', '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(183, 22, '2', NULL, '1', '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(184, 22, '1', NULL, '1', '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(185, 23, '18', NULL, '1', '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(186, 23, '17', NULL, '1', '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(187, 23, '15', NULL, '1', '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(188, 23, '14', NULL, '1', '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(189, 23, '6', NULL, '1', '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(190, 23, '5', NULL, '1', '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(191, 23, '4', NULL, '1', '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(192, 23, '2', NULL, '1', '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(193, 23, '1', NULL, '1', '2023-09-21 01:08:37', '2023-09-21 01:08:37');

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` int DEFAULT NULL,
  `product_color_id` int DEFAULT NULL,
  `size_id` int DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dis_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `product_id`, `product_color_id`, `size_id`, `price`, `dis_price`, `stock`, `status`, `created_at`, `updated_at`) VALUES
(57, 2, 19, 1, '974', '950', '-93', 1, '2023-09-20 04:47:51', '2023-12-05 01:45:52'),
(58, 2, 19, 2, '505', '453', '0', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(59, 2, 19, 3, '854', '800', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(60, 2, 19, 4, '402', '369', '0', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(61, 2, 19, 5, '873', '857', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(62, 2, 19, 7, '512', '470', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(63, 2, 19, 8, '155', '129', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(64, 2, 17, 1, '305', '272', '2', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(65, 2, 17, 2, '449', '420', '0', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(66, 2, 17, 3, '893', '860', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(67, 2, 17, 4, '269', '231', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(68, 2, 17, 6, '905', '859', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(69, 2, 15, 1, '303', '278', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(70, 2, 15, 2, '171', '140', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(71, 2, 15, 3, '533', '522', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(72, 2, 15, 4, '761', '741', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(73, 2, 15, 5, '992', '976', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(74, 2, 15, 6, '548', '523', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(75, 2, 14, 3, '138', '120', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(76, 2, 14, 5, '283', '269', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(77, 2, 14, 6, '186', '166', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(78, 2, 14, 7, '112', '86', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(79, 2, 13, 1, '862', '821', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(80, 2, 13, 2, '457', '402', '0', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(81, 2, 13, 3, '239', '216', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(82, 2, 13, 4, '179', '135', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(83, 2, 13, 5, '715', '687', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(84, 2, 13, 6, '677', '666', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(85, 2, 12, 2, '431', '416', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(86, 2, 12, 4, '252', '239', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(87, 2, 12, 6, '190', '137', '0', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(88, 2, 12, 7, '553', '503', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(89, 2, 8, 1, '839', '796', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(90, 2, 8, 2, '487', '472', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(91, 2, 8, 3, '663', '609', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(92, 2, 8, 6, '527', '500', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(93, 2, 8, 7, '304', '280', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(94, 2, 7, 1, '502', '468', '0', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(95, 2, 7, 4, '498', '455', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(96, 2, 7, 3, '937', '907', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(97, 2, 7, 8, '907', '891', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(98, 2, 7, 7, '640', '615', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(99, 2, 6, 1, '185', '131', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(100, 2, 6, 2, '787', '772', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(101, 2, 6, 4, '558', '512', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(102, 2, 5, 2, '439', '389', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(103, 2, 5, 5, '418', '370', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(104, 2, 4, 1, '329', '300', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(105, 2, 4, 2, '711', '700', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(106, 2, 4, 3, '144', '106', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(107, 2, 3, 3, '165', '114', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(108, 2, 3, 4, '736', '708', '0', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(109, 2, 3, 5, '536', '511', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(110, 2, 2, 2, '375', '328', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(111, 2, 2, 3, '201', '171', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(112, 2, 2, 5, '251', '212', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(113, 2, 2, 6, '745', '720', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(114, 2, 1, 1, '448', '407', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(115, 2, 1, 3, '542', '492', '45', 1, '2023-09-20 04:47:51', '2023-09-20 04:47:51'),
(116, 3, 16, 1, '718', '691', '38', 1, '2023-09-20 05:16:26', '2023-11-29 00:14:49'),
(117, 3, 16, 2, '946', '892', '0', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(118, 3, 16, 3, '869', '840', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(119, 3, 16, 4, '936', '901', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(120, 3, 16, 5, '757', '744', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(121, 3, 16, 6, '306', '273', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(122, 3, 16, 7, '278', '225', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(123, 3, 15, 6, '291', '257', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(124, 3, 15, 3, '150', '105', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(125, 3, 15, 1, '283', '235', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(126, 3, 15, 4, '959', '931', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(127, 3, 15, 7, '548', '527', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(128, 3, 14, 7, '810', '799', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(129, 3, 14, 8, '705', '670', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(130, 3, 13, 1, '886', '855', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(131, 3, 13, 3, '566', '523', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(132, 3, 13, 6, '442', '392', '0', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(133, 3, 11, 2, '201', '182', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(134, 3, 11, 3, '663', '619', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(135, 3, 11, 5, '295', '245', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(136, 3, 11, 6, '758', '731', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(137, 3, 11, 7, '455', '412', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(138, 3, 10, 1, '872', '838', '0', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(139, 3, 10, 2, '527', '501', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(140, 3, 10, 4, '472', '461', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(141, 3, 9, 1, '727', '680', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(142, 3, 9, 6, '816', '762', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(143, 3, 9, 5, '313', '278', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(144, 3, 9, 2, '415', '379', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(145, 3, 8, 3, '409', '363', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(146, 3, 8, 4, '346', '307', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(147, 3, 8, 2, '308', '292', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(148, 3, 8, 6, '125', '100', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(149, 3, 8, 5, '559', '522', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(150, 3, 7, 1, '681', '626', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(151, 3, 7, 2, '513', '460', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(152, 3, 7, 5, '428', '384', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(153, 3, 5, 2, '597', '566', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(154, 3, 5, 3, '782', '761', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(155, 3, 5, 5, '876', '834', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(156, 3, 5, 6, '597', '543', '0', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(157, 3, 3, 1, '513', '471', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(158, 3, 3, 3, '448', '431', '45', 1, '2023-09-20 05:16:26', '2023-09-20 05:16:26'),
(159, 3, 3, 8, '284', '242', '45', 1, '2023-09-20 05:16:27', '2023-09-20 05:16:27'),
(160, 3, 3, 9, '785', '767', '45', 1, '2023-09-20 05:16:27', '2023-09-20 05:16:27'),
(161, 3, 2, 1, '230', '186', '45', 1, '2023-09-20 05:16:27', '2023-09-20 05:16:27'),
(162, 3, 2, 2, '434', '399', '0', 1, '2023-09-20 05:16:27', '2023-09-20 05:16:27'),
(163, 3, 2, 3, '549', '514', '45', 1, '2023-09-20 05:16:27', '2023-09-20 05:16:27'),
(164, 3, 2, 5, '237', '207', '45', 1, '2023-09-20 05:16:27', '2023-09-20 05:16:27'),
(165, 3, 2, 6, '734', '721', '45', 1, '2023-09-20 05:16:27', '2023-09-20 05:16:27'),
(166, 4, 18, 1, '112', '93', '44', 1, '2023-09-20 22:33:32', '2023-11-29 00:18:33'),
(167, 4, 18, 2, '719', '700', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(168, 4, 18, 3, '423', '390', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(169, 4, 18, 4, '548', '506', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(170, 4, 18, 5, '500', '469', '0', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(171, 4, 18, 6, '425', '381', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(172, 4, 18, 7, '120', '97', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(173, 4, 18, 8, '651', '617', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(174, 4, 18, 9, '579', '559', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(175, 4, 17, 1, '347', '334', '0', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(176, 4, 17, 2, '997', '969', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(177, 4, 17, 3, '300', '257', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(178, 4, 17, 4, '538', '485', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(179, 4, 17, 5, '275', '252', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(180, 4, 17, 6, '763', '749', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(181, 4, 17, 7, '906', '878', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(182, 4, 17, 8, '805', '761', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(183, 4, 17, 9, '564', '547', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(184, 4, 15, 1, '312', '287', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(185, 4, 15, 2, '145', '99', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(186, 4, 15, 3, '737', '714', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(187, 4, 15, 4, '763', '742', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(188, 4, 15, 5, '726', '704', '0', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(189, 4, 15, 6, '449', '429', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(190, 4, 15, 7, '298', '257', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(191, 4, 15, 8, '382', '353', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(192, 4, 14, 1, '969', '927', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(193, 4, 14, 2, '112', '82', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(194, 4, 14, 3, '507', '465', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(195, 4, 14, 4, '723', '686', '0', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(196, 4, 14, 5, '547', '516', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(197, 4, 14, 6, '500', '465', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(198, 4, 14, 7, '828', '780', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(199, 4, 14, 8, '955', '934', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(200, 4, 10, 1, '497', '456', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(201, 4, 10, 2, '938', '892', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(202, 4, 10, 3, '522', '472', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(203, 4, 10, 4, '445', '425', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(204, 4, 10, 5, '179', '152', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(205, 4, 10, 6, '238', '196', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(206, 4, 4, 1, '191', '151', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(207, 4, 4, 2, '880', '864', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(208, 4, 4, 3, '440', '413', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(209, 4, 4, 4, '765', '751', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(210, 4, 4, 5, '172', '142', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(211, 4, 4, 6, '682', '671', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(212, 4, 4, 7, '614', '569', '45', 1, '2023-09-20 22:33:32', '2023-09-20 22:33:32'),
(213, 5, 19, 1, '290', '252', '0', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(214, 5, 19, 2, '914', '898', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(215, 5, 19, 3, '738', '718', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(216, 5, 19, 4, '481', '427', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(217, 5, 19, 5, '986', '961', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(218, 5, 19, 6, '553', '505', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(219, 5, 19, 7, '155', '123', '0', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(220, 5, 19, 8, '128', '115', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(221, 5, 19, 9, '250', '206', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(222, 5, 18, 1, '395', '376', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(223, 5, 18, 2, '480', '444', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(224, 5, 18, 4, '658', '639', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(225, 5, 18, 5, '870', '851', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(226, 5, 18, 6, '142', '130', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(227, 5, 17, 1, '773', '760', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(228, 5, 17, 2, '413', '388', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(229, 5, 17, 3, '311', '267', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(230, 5, 17, 4, '809', '754', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(231, 5, 17, 5, '508', '467', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(232, 5, 17, 6, '729', '680', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(233, 5, 17, 7, '209', '197', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(234, 5, 5, 1, '995', '954', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(235, 5, 5, 2, '746', '712', '0', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(236, 5, 5, 3, '985', '938', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(237, 5, 5, 5, '354', '336', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(238, 5, 5, 6, '453', '421', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(239, 5, 4, 1, '642', '618', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(240, 5, 4, 2, '230', '195', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(241, 5, 4, 3, '706', '670', '0', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(242, 5, 4, 4, '667', '621', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(243, 5, 4, 5, '845', '816', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(244, 5, 4, 6, '576', '556', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(245, 5, 4, 7, '967', '915', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(246, 5, 4, 8, '153', '128', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(247, 5, 4, 9, '346', '323', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(248, 5, 2, 1, '994', '969', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(249, 5, 2, 2, '337', '320', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(250, 5, 2, 3, '490', '464', '0', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(251, 5, 2, 4, '345', '294', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(252, 5, 2, 5, '522', '485', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(253, 5, 2, 6, '723', '708', '45', 1, '2023-09-20 22:38:22', '2023-09-20 22:38:22'),
(254, 6, 15, 1, '273', '239', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(255, 6, 15, 2, '808', '754', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(256, 6, 15, 3, '994', '946', '0', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(257, 6, 15, 4, '949', '909', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(258, 6, 15, 5, '893', '861', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(259, 6, 15, 6, '720', '688', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(260, 6, 15, 7, '528', '495', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(261, 6, 15, 8, '504', '480', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(262, 6, 14, 1, '143', '105', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(263, 6, 14, 2, '944', '923', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(264, 6, 14, 3, '429', '410', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(265, 6, 14, 4, '605', '577', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(266, 6, 14, 5, '392', '337', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(267, 6, 14, 6, '121', '74', '0', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(268, 6, 14, 7, '736', '712', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(269, 6, 14, 8, '773', '728', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(270, 6, 14, 9, '233', '191', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(271, 6, 11, 1, '815', '798', '14', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(272, 6, 11, 2, '501', '490', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(273, 6, 11, 3, '201', '175', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(274, 6, 11, 4, '175', '146', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(275, 6, 11, 5, '410', '362', '0', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(276, 6, 11, 6, '550', '504', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(277, 6, 11, 7, '885', '870', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(278, 6, 11, 8, '468', '431', '24', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(279, 6, 11, 9, '269', '226', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(280, 6, 10, 1, '234', '197', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(281, 6, 10, 2, '585', '560', '0', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(282, 6, 10, 3, '137', '89', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(283, 6, 10, 4, '453', '419', '65', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(284, 6, 10, 5, '636', '608', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(285, 6, 10, 6, '379', '356', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(286, 6, 10, 7, '447', '423', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(287, 6, 4, 1, '853', '828', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(288, 6, 4, 2, '125', '95', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(289, 6, 4, 3, '826', '775', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(290, 6, 4, 4, '839', '809', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(291, 6, 4, 5, '821', '784', '0', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(292, 6, 4, 6, '322', '304', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(293, 6, 4, 7, '277', '264', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(294, 6, 4, 8, '770', '735', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(295, 6, 2, 1, '863', '825', '56', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(296, 6, 2, 2, '748', '696', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(297, 6, 2, 3, '731', '708', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(298, 6, 2, 4, '912', '857', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(299, 6, 2, 5, '830', '803', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(300, 6, 2, 6, '625', '584', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(301, 6, 1, 1, '864', '826', '0', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(302, 6, 1, 2, '787', '755', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(303, 6, 1, 3, '486', '463', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(304, 6, 1, 4, '126', '100', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(305, 6, 1, 5, '922', '884', '3', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(306, 6, 1, 6, '442', '401', '45', 1, '2023-09-20 22:42:05', '2023-09-20 22:42:05'),
(307, 7, 8, 1, '184', '166', '67', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(308, 7, 8, 2, '480', '451', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(309, 7, 8, 3, '591', '561', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(310, 7, 8, 4, '892', '843', '98', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(311, 7, 8, 5, '616', '603', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(312, 7, 8, 6, '634', '589', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(313, 7, 8, 7, '490', '461', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(314, 7, 8, 8, '762', '748', '34', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(315, 7, 8, 9, '420', '384', '0', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(316, 7, 6, 1, '915', '873', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(317, 7, 6, 2, '634', '592', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(318, 7, 6, 3, '217', '184', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(319, 7, 6, 4, '978', '937', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(320, 7, 6, 5, '168', '127', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(321, 7, 6, 6, '528', '504', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(322, 7, 6, 7, '376', '327', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(323, 7, 6, 8, '573', '561', '0', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(324, 7, 6, 9, '877', '858', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(325, 7, 5, 1, '207', '167', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(326, 7, 5, 2, '146', '101', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(327, 7, 5, 3, '215', '188', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(328, 7, 5, 4, '452', '430', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(329, 7, 5, 5, '168', '149', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(330, 7, 5, 6, '444', '419', '0', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(331, 7, 5, 7, '428', '416', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(332, 7, 4, 1, '832', '778', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(333, 7, 4, 2, '331', '276', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(334, 7, 4, 3, '210', '178', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(335, 7, 4, 4, '180', '156', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(336, 7, 4, 5, '278', '264', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(337, 7, 4, 6, '243', '226', '0', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(338, 7, 4, 7, '501', '487', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(339, 7, 2, 1, '777', '754', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(340, 7, 2, 2, '479', '460', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(341, 7, 2, 3, '270', '227', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(342, 7, 2, 4, '337', '311', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(343, 7, 2, 5, '804', '787', '0', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(344, 7, 2, 6, '897', '867', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(345, 7, 2, 7, '675', '662', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(346, 7, 1, 1, '686', '642', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(347, 7, 1, 2, '255', '237', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(348, 7, 1, 3, '388', '336', '0', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(349, 7, 1, 4, '608', '584', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(350, 7, 1, 5, '494', '445', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(351, 7, 1, 6, '661', '638', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(352, 7, 1, 7, '491', '461', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(353, 7, 1, 8, '597', '568', '45', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(354, 7, 1, 9, '217', '162', '0', 1, '2023-09-20 22:45:00', '2023-09-20 22:45:00'),
(355, 8, 12, 1, '835', '809', '39', 1, '2023-09-20 22:49:49', '2023-11-29 00:48:12'),
(356, 8, 12, 2, '871', '853', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(357, 8, 12, 3, '597', '557', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(358, 8, 12, 4, '972', '946', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(359, 8, 12, 5, '946', '929', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(360, 8, 12, 6, '242', '188', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(361, 8, 12, 7, '710', '695', '0', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(362, 8, 12, 8, '237', '188', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(363, 8, 12, 9, '333', '317', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(364, 8, 11, 1, '392', '341', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(365, 8, 11, 2, '874', '861', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(366, 8, 11, 3, '379', '352', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(367, 8, 11, 4, '544', '511', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(368, 8, 11, 5, '901', '846', '0', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(369, 8, 11, 6, '959', '924', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(370, 8, 11, 7, '484', '463', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(371, 8, 11, 8, '427', '373', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(372, 8, 11, 9, '241', '227', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(373, 8, 10, 1, '612', '580', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(374, 8, 10, 2, '386', '341', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(375, 8, 10, 3, '208', '162', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(376, 8, 10, 4, '245', '204', '0', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(377, 8, 10, 5, '618', '565', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(378, 8, 10, 6, '293', '259', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(379, 8, 10, 7, '824', '792', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(380, 8, 10, 8, '142', '120', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(381, 8, 9, 1, '258', '208', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(382, 8, 9, 2, '778', '732', '0', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(383, 8, 9, 3, '964', '910', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(384, 8, 9, 4, '717', '667', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(385, 8, 9, 5, '610', '592', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(386, 8, 9, 6, '394', '350', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(387, 8, 9, 7, '771', '739', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(388, 8, 9, 8, '784', '729', '0', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(389, 8, 9, 9, '661', '631', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(390, 8, 7, 1, '684', '639', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(391, 8, 7, 2, '282', '266', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(392, 8, 7, 3, '592', '539', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(393, 8, 7, 4, '427', '406', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(394, 8, 7, 5, '742', '727', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(395, 8, 7, 6, '497', '443', '0', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(396, 8, 7, 7, '201', '152', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(397, 8, 7, 8, '559', '511', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(398, 8, 7, 9, '873', '845', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(399, 8, 5, 1, '775', '722', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(400, 8, 5, 2, '410', '363', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(401, 8, 5, 3, '245', '226', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(402, 8, 5, 4, '550', '518', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(403, 8, 5, 5, '745', '707', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(404, 8, 5, 6, '426', '413', '0', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(405, 8, 2, 1, '809', '776', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(406, 8, 2, 2, '555', '505', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(407, 8, 2, 3, '913', '886', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(408, 8, 2, 4, '980', '941', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(409, 8, 2, 5, '460', '442', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(410, 8, 2, 6, '479', '447', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(411, 8, 2, 7, '215', '187', '45', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(412, 8, 2, 8, '588', '561', '0', 1, '2023-09-20 22:49:49', '2023-09-20 22:49:49'),
(413, 9, 18, 1, '911', '860', '43', 1, '2023-09-20 22:53:16', '2023-11-29 00:21:00'),
(414, 9, 18, 2, '731', '700', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(415, 9, 18, 3, '703', '680', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(416, 9, 18, 4, '954', '914', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(417, 9, 18, 5, '505', '483', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(418, 9, 18, 6, '513', '500', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(419, 9, 18, 7, '259', '234', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(420, 9, 18, 8, '353', '308', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(421, 9, 18, 9, '937', '920', '0', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(422, 9, 17, 1, '414', '366', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(423, 9, 17, 2, '440', '400', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(424, 9, 17, 3, '548', '503', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(425, 9, 17, 4, '931', '908', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(426, 9, 17, 5, '524', '513', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(427, 9, 17, 6, '237', '193', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(428, 9, 17, 7, '481', '440', '0', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(429, 9, 15, 1, '586', '540', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(430, 9, 15, 2, '641', '609', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(431, 9, 15, 3, '397', '378', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(432, 9, 15, 4, '543', '530', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(433, 9, 15, 5, '751', '738', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(434, 9, 15, 6, '678', '649', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(435, 9, 9, 1, '845', '809', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(436, 9, 9, 2, '666', '623', '0', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(437, 9, 9, 3, '185', '139', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(438, 9, 9, 4, '223', '193', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(439, 9, 9, 6, '444', '400', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(440, 9, 9, 7, '379', '349', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(441, 9, 9, 8, '758', '726', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(442, 9, 8, 1, '744', '704', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(443, 9, 8, 2, '181', '162', '0', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(444, 9, 8, 3, '677', '638', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(445, 9, 8, 4, '457', '407', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(446, 9, 8, 6, '610', '564', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(447, 9, 8, 7, '892', '839', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(448, 9, 4, 1, '429', '395', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(449, 9, 4, 2, '856', '835', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(450, 9, 4, 3, '568', '539', '0', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(451, 9, 4, 4, '248', '233', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(452, 9, 4, 5, '360', '316', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(453, 9, 4, 6, '966', '949', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(454, 9, 4, 7, '563', '531', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(455, 9, 3, 1, '733', '689', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(456, 9, 3, 2, '887', '868', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(457, 9, 3, 3, '629', '606', '0', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(458, 9, 3, 4, '936', '919', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(459, 9, 3, 5, '622', '602', '45', 1, '2023-09-20 22:53:16', '2023-09-20 22:53:16'),
(460, 10, 17, 1, '867', '822', '43', 1, '2023-09-20 22:57:21', '2023-11-29 00:27:11'),
(461, 10, 17, 2, '508', '458', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(462, 10, 17, 3, '472', '459', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(463, 10, 17, 4, '260', '209', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(464, 10, 17, 5, '116', '87', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(465, 10, 17, 6, '329', '286', '0', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(466, 10, 17, 7, '794', '760', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(467, 10, 17, 8, '503', '469', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(468, 10, 17, 9, '717', '680', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(469, 10, 6, 1, '296', '279', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(470, 10, 6, 2, '277', '226', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(471, 10, 6, 3, '843', '812', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(472, 10, 6, 4, '573', '557', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(473, 10, 6, 5, '228', '182', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(474, 10, 6, 6, '454', '402', '0', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(475, 10, 6, 7, '244', '204', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(476, 10, 6, 8, '960', '914', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(477, 10, 5, 1, '266', '240', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(478, 10, 5, 2, '163', '138', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(479, 10, 5, 3, '956', '920', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(480, 10, 5, 4, '385', '346', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(481, 10, 5, 5, '576', '555', '0', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(482, 10, 5, 6, '566', '522', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(483, 10, 5, 7, '207', '185', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(484, 10, 4, 1, '399', '382', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(485, 10, 4, 2, '607', '586', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(486, 10, 4, 3, '969', '931', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(487, 10, 4, 4, '249', '217', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(488, 10, 4, 5, '683', '670', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(489, 10, 4, 6, '401', '362', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(490, 10, 4, 7, '127', '72', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(491, 10, 4, 8, '941', '899', '0', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(492, 10, 4, 9, '159', '147', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(493, 10, 3, 1, '197', '172', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(494, 10, 3, 2, '315', '283', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(495, 10, 3, 3, '795', '767', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(496, 10, 3, 4, '841', '803', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(497, 10, 3, 5, '376', '341', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(498, 10, 2, 1, '196', '174', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(499, 10, 2, 2, '521', '470', '0', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(500, 10, 2, 3, '918', '870', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(501, 10, 2, 4, '891', '859', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(502, 10, 2, 5, '312', '276', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(503, 10, 2, 6, '166', '119', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(504, 10, 2, 7, '429', '395', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(505, 10, 2, 8, '953', '932', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(506, 10, 2, 9, '747', '719', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(507, 10, 1, 1, '148', '137', '0', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(508, 10, 1, 2, '234', '215', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(509, 10, 1, 3, '682', '631', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(510, 10, 1, 4, '434', '417', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(511, 10, 1, 5, '530', '507', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(512, 10, 1, 6, '551', '516', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(513, 10, 1, 7, '222', '201', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(514, 10, 1, 8, '161', '138', '0', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(515, 10, 1, 9, '212', '199', '45', 1, '2023-09-20 22:57:21', '2023-09-20 22:57:21'),
(516, 11, 12, 1, '326', '315', '44', 1, '2023-09-20 23:01:47', '2023-11-29 00:23:24'),
(517, 11, 12, 2, '844', '814', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(518, 11, 12, 3, '606', '578', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(519, 11, 12, 4, '562', '513', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(520, 11, 12, 5, '208', '173', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(521, 11, 12, 6, '562', '518', '0', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(522, 11, 12, 7, '753', '721', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(523, 11, 12, 8, '285', '273', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(524, 11, 11, 1, '182', '158', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(525, 11, 11, 2, '324', '286', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(526, 11, 11, 3, '247', '235', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(527, 11, 11, 4, '927', '894', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(528, 11, 11, 5, '156', '140', '0', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(529, 11, 11, 6, '725', '690', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(530, 11, 11, 7, '757', '710', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(531, 11, 11, 8, '298', '287', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(532, 11, 11, 9, '677', '632', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(533, 11, 10, 1, '888', '855', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(534, 11, 10, 2, '834', '802', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(535, 11, 10, 3, '308', '264', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(536, 11, 10, 4, '676', '659', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(537, 11, 10, 5, '860', '812', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(538, 11, 10, 6, '756', '721', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(539, 11, 10, 7, '425', '379', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(540, 11, 9, 1, '903', '881', '0', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(541, 11, 9, 2, '381', '349', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(542, 11, 9, 3, '955', '938', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(543, 11, 9, 4, '853', '801', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(544, 11, 9, 5, '633', '618', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(545, 11, 9, 6, '888', '856', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(546, 11, 9, 7, '193', '148', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(547, 11, 9, 8, '507', '465', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(548, 11, 9, 9, '826', '801', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(549, 11, 8, 1, '114', '60', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(550, 11, 8, 2, '297', '272', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(551, 11, 8, 3, '161', '129', '0', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(552, 11, 8, 4, '345', '304', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(553, 11, 8, 5, '621', '602', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(554, 11, 8, 6, '549', '523', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(555, 11, 8, 7, '783', '762', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(556, 11, 7, 1, '485', '430', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(557, 11, 7, 2, '958', '944', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(558, 11, 7, 3, '714', '685', '0', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(559, 11, 7, 4, '710', '693', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(560, 11, 7, 5, '249', '230', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(561, 11, 7, 6, '441', '412', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(562, 11, 6, 1, '770', '755', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(563, 11, 6, 2, '969', '916', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(564, 11, 6, 3, '747', '719', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(565, 11, 6, 4, '469', '433', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(566, 11, 6, 5, '275', '253', '0', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(567, 11, 6, 6, '516', '473', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(568, 11, 6, 7, '259', '231', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(569, 11, 6, 8, '497', '453', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(570, 11, 6, 9, '980', '925', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(571, 11, 4, 1, '398', '359', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(572, 11, 4, 2, '795', '755', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(573, 11, 4, 3, '239', '206', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(574, 11, 4, 4, '858', '832', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(575, 11, 4, 5, '174', '119', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(576, 11, 4, 6, '178', '158', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(577, 11, 4, 7, '853', '835', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(578, 11, 4, 8, '298', '250', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(579, 11, 4, 9, '895', '853', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(580, 11, 3, 1, '232', '191', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(581, 11, 3, 2, '524', '504', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(582, 11, 3, 3, '563', '548', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(583, 11, 3, 4, '949', '916', '0', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(584, 11, 3, 5, '652', '607', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(585, 11, 3, 6, '697', '683', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(586, 11, 3, 7, '886', '853', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(587, 11, 3, 8, '552', '531', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(588, 11, 2, 1, '504', '451', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(589, 11, 2, 2, '358', '333', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(590, 11, 2, 3, '229', '194', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(591, 11, 2, 4, '620', '595', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(592, 11, 2, 5, '181', '133', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(593, 11, 2, 6, '967', '932', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(594, 11, 2, 7, '669', '615', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(595, 11, 2, 8, '713', '689', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(596, 11, 2, 9, '728', '677', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(597, 11, 1, 1, '452', '440', '0', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(598, 11, 1, 2, '359', '348', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(599, 11, 1, 3, '128', '104', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(600, 11, 1, 4, '483', '463', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(601, 11, 1, 5, '606', '560', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(602, 11, 1, 6, '443', '395', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(603, 11, 1, 7, '412', '369', '45', 1, '2023-09-20 23:01:47', '2023-09-20 23:01:47'),
(604, 12, 17, 1, '584', '538', '0', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(605, 12, 17, 2, '397', '345', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(606, 12, 17, 3, '591', '559', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(607, 12, 17, 4, '849', '818', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(608, 12, 17, 5, '220', '168', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(609, 12, 17, 6, '489', '472', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(610, 12, 17, 7, '484', '473', '0', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(611, 12, 17, 8, '389', '349', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(612, 12, 17, 9, '253', '220', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(613, 12, 15, 1, '391', '340', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(614, 12, 15, 2, '801', '756', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(615, 12, 15, 3, '720', '706', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(616, 12, 15, 4, '528', '486', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(617, 12, 15, 5, '350', '338', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(618, 12, 15, 6, '586', '555', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(619, 12, 15, 7, '747', '698', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(620, 12, 15, 8, '635', '615', '0', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(621, 12, 15, 9, '863', '841', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(622, 12, 10, 1, '144', '123', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(623, 12, 10, 2, '987', '946', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(624, 12, 10, 3, '287', '246', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(625, 12, 10, 4, '711', '683', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(626, 12, 10, 5, '972', '942', '0', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(627, 12, 10, 7, '399', '351', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(628, 12, 10, 8, '790', '750', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(629, 12, 6, 1, '697', '642', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(630, 12, 6, 2, '693', '650', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(631, 12, 6, 3, '642', '627', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(632, 12, 6, 4, '788', '744', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(633, 12, 6, 5, '779', '756', '0', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(634, 12, 6, 6, '430', '398', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(635, 12, 6, 7, '158', '105', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(636, 12, 5, 1, '133', '78', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(637, 12, 5, 2, '297', '245', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(638, 12, 5, 3, '899', '888', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(639, 12, 5, 4, '888', '859', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(640, 12, 5, 5, '955', '930', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(641, 12, 5, 6, '611', '594', '0', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(642, 12, 4, 1, '815', '761', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(643, 12, 4, 2, '786', '771', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(644, 12, 4, 3, '222', '203', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(645, 12, 4, 4, '788', '771', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(646, 12, 4, 5, '624', '600', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(647, 12, 4, 6, '366', '337', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(648, 12, 4, 7, '630', '579', '0', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(649, 12, 4, 8, '440', '424', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(650, 12, 4, 9, '779', '736', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(651, 12, 3, 1, '355', '340', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(652, 12, 3, 2, '313', '270', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55');
INSERT INTO `product_sizes` (`id`, `product_id`, `product_color_id`, `size_id`, `price`, `dis_price`, `stock`, `status`, `created_at`, `updated_at`) VALUES
(653, 12, 3, 3, '921', '896', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(654, 12, 3, 4, '563', '516', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(655, 12, 3, 5, '540', '494', '0', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(656, 12, 3, 6, '196', '150', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(657, 12, 2, 1, '356', '331', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(658, 12, 2, 2, '400', '368', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(659, 12, 2, 3, '736', '709', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(660, 12, 2, 4, '149', '106', '0', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(661, 12, 2, 5, '406', '370', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(662, 12, 2, 6, '514', '499', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(663, 12, 2, 7, '519', '477', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(664, 12, 2, 8, '418', '389', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(665, 12, 2, 9, '618', '587', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(666, 12, 1, 1, '943', '913', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(667, 12, 1, 2, '121', '86', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(668, 12, 1, 3, '643', '596', '0', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(669, 12, 1, 4, '653', '613', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(670, 12, 1, 5, '902', '863', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(671, 12, 1, 6, '519', '478', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(672, 12, 1, 7, '688', '668', '45', 1, '2023-09-20 23:18:55', '2023-09-20 23:18:55'),
(673, 13, 5, 1, '473', '425', '40', 1, '2023-09-20 23:25:14', '2023-11-29 00:46:33'),
(674, 13, 5, 2, '491', '450', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(675, 13, 5, 3, '437', '405', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(676, 13, 5, 4, '992', '962', '0', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(677, 13, 5, 5, '218', '191', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(678, 13, 5, 6, '434', '420', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(679, 13, 5, 7, '221', '188', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(680, 13, 5, 8, '634', '581', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(681, 13, 5, 9, '953', '902', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(682, 13, 4, 1, '596', '571', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(683, 13, 4, 2, '131', '81', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(684, 13, 4, 3, '940', '904', '0', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(685, 13, 4, 4, '923', '898', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(686, 13, 4, 5, '249', '205', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(687, 13, 4, 6, '344', '319', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(688, 13, 4, 7, '640', '610', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(689, 13, 4, 8, '731', '720', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(690, 13, 4, 9, '569', '556', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(691, 13, 3, 1, '708', '676', '0', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(692, 13, 3, 2, '575', '539', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(693, 13, 3, 3, '901', '877', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(694, 13, 3, 4, '170', '153', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(695, 13, 3, 5, '968', '934', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(696, 13, 3, 6, '950', '938', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(697, 13, 3, 7, '473', '441', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(698, 13, 3, 8, '822', '785', '0', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(699, 13, 3, 9, '819', '792', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(700, 13, 2, 1, '187', '174', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(701, 13, 2, 2, '930', '891', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(702, 13, 2, 3, '856', '844', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(703, 13, 2, 4, '575', '564', '0', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(704, 13, 2, 5, '516', '481', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(705, 13, 2, 6, '691', '679', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(706, 13, 2, 7, '906', '875', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(707, 13, 2, 8, '451', '397', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(708, 13, 2, 9, '967', '921', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(709, 13, 1, 1, '542', '508', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(710, 13, 1, 2, '291', '237', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(711, 13, 1, 3, '225', '175', '0', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(712, 13, 1, 4, '317', '301', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(713, 13, 1, 5, '667', '641', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(714, 13, 1, 6, '139', '126', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(715, 13, 1, 7, '302', '257', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(716, 13, 1, 8, '584', '533', '45', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(717, 13, 1, 9, '229', '198', '0', 1, '2023-09-20 23:25:14', '2023-09-20 23:25:14'),
(718, 14, 11, 1, '389', '352', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(719, 14, 11, 2, '352', '329', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(720, 14, 11, 3, '251', '210', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(721, 14, 11, 4, '347', '325', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(722, 14, 11, 5, '360', '345', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(723, 14, 11, 6, '903', '862', '0', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(724, 14, 11, 7, '866', '839', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(725, 14, 11, 8, '798', '756', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(726, 14, 11, 9, '458', '442', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(727, 14, 10, 1, '994', '983', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(728, 14, 10, 2, '649', '620', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(729, 14, 10, 3, '408', '372', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(730, 14, 10, 4, '603', '554', '0', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(731, 14, 10, 5, '427', '385', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(732, 14, 10, 6, '219', '165', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(733, 14, 10, 7, '348', '306', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(734, 14, 10, 8, '842', '819', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(735, 14, 10, 9, '194', '174', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(736, 14, 9, 1, '571', '519', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(737, 14, 9, 2, '896', '864', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(738, 14, 9, 3, '406', '375', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(739, 14, 9, 4, '268', '222', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(740, 14, 9, 5, '736', '718', '0', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(741, 14, 9, 6, '406', '372', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(742, 14, 8, 1, '814', '772', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(743, 14, 8, 2, '761', '712', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(744, 14, 8, 3, '300', '273', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(745, 14, 8, 4, '335', '299', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(746, 14, 8, 5, '583', '562', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(747, 14, 8, 6, '907', '855', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(748, 14, 7, 1, '837', '819', '0', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(749, 14, 7, 2, '751', '737', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(750, 14, 7, 3, '460', '442', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(751, 14, 7, 4, '485', '454', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(752, 14, 7, 5, '553', '502', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(753, 14, 7, 6, '792', '753', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(754, 14, 6, 1, '863', '843', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(755, 14, 6, 2, '213', '192', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(756, 14, 6, 3, '213', '166', '0', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(757, 14, 6, 4, '956', '910', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(758, 14, 6, 5, '429', '406', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(759, 14, 6, 6, '393', '343', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(760, 14, 6, 7, '751', '728', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(761, 14, 6, 8, '773', '726', '0', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(762, 14, 5, 1, '273', '235', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(763, 14, 5, 2, '586', '575', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(764, 14, 5, 3, '605', '567', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(765, 14, 5, 4, '676', '660', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(766, 14, 5, 5, '796', '750', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(767, 14, 5, 6, '380', '361', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(768, 14, 5, 7, '992', '970', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(769, 14, 5, 8, '149', '105', '0', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(770, 14, 5, 9, '572', '559', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(771, 14, 4, 1, '180', '135', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(772, 14, 4, 2, '728', '676', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(773, 14, 4, 3, '159', '120', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(774, 14, 4, 4, '326', '310', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(775, 14, 4, 5, '505', '455', '0', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(776, 14, 4, 6, '896', '876', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(777, 14, 4, 7, '382', '347', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(778, 14, 4, 8, '504', '455', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(779, 14, 3, 1, '781', '729', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(780, 14, 3, 2, '767', '726', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(781, 14, 3, 3, '577', '532', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(782, 14, 3, 4, '279', '251', '0', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(783, 14, 3, 5, '313', '274', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(784, 14, 3, 6, '532', '491', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(785, 14, 3, 7, '476', '456', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(786, 14, 2, 1, '824', '771', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(787, 14, 2, 2, '579', '557', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(788, 14, 2, 3, '145', '118', '0', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(789, 14, 2, 4, '908', '872', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(790, 14, 2, 5, '806', '794', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(791, 14, 2, 6, '784', '758', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(792, 14, 2, 7, '993', '966', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(793, 14, 2, 8, '355', '317', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(794, 14, 2, 9, '472', '434', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(795, 14, 1, 1, '398', '369', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(796, 14, 1, 2, '489', '444', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(797, 14, 1, 3, '831', '802', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(798, 14, 1, 4, '288', '239', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(799, 14, 1, 5, '432', '390', '0', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(800, 14, 1, 6, '440', '410', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(801, 14, 1, 7, '184', '166', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(802, 14, 1, 8, '514', '461', '45', 1, '2023-09-20 23:35:10', '2023-09-20 23:35:10'),
(803, 15, 17, 1, '334', '319', '43', 1, '2023-09-20 23:40:49', '2023-11-29 00:52:57'),
(804, 15, 17, 2, '217', '165', '0', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(805, 15, 17, 3, '323', '274', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(806, 15, 17, 4, '898', '846', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(807, 15, 17, 5, '879', '848', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(808, 15, 17, 6, '574', '527', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(809, 15, 17, 7, '420', '395', '0', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(810, 15, 17, 8, '901', '887', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(811, 15, 17, 9, '559', '510', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(812, 15, 10, 1, '740', '719', '0', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(813, 15, 10, 2, '569', '527', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(814, 15, 10, 3, '458', '421', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(815, 15, 10, 4, '237', '217', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(816, 15, 10, 5, '692', '659', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(817, 15, 10, 6, '475', '445', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(818, 15, 10, 7, '356', '304', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(819, 15, 10, 8, '539', '485', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(820, 15, 10, 9, '734', '711', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(821, 15, 9, 1, '114', '73', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(822, 15, 9, 2, '805', '788', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(823, 15, 9, 3, '942', '906', '0', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(824, 15, 9, 4, '670', '622', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(825, 15, 9, 5, '764', '744', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(826, 15, 9, 6, '573', '538', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(827, 15, 9, 7, '200', '152', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(828, 15, 7, 1, '503', '450', '0', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(829, 15, 7, 2, '848', '831', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(830, 15, 7, 3, '220', '167', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(831, 15, 7, 4, '839', '827', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(832, 15, 7, 5, '332', '297', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(833, 15, 7, 6, '989', '939', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(834, 15, 7, 7, '518', '485', '0', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(835, 15, 7, 8, '961', '935', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(836, 15, 6, 1, '949', '934', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(837, 15, 6, 2, '546', '516', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(838, 15, 6, 3, '490', '441', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(839, 15, 6, 4, '957', '933', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(840, 15, 6, 5, '743', '728', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(841, 15, 6, 6, '813', '798', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(842, 15, 6, 7, '122', '69', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(843, 15, 5, 1, '479', '467', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(844, 15, 5, 2, '267', '235', '0', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(845, 15, 5, 3, '150', '135', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(846, 15, 5, 4, '505', '491', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(847, 15, 5, 5, '422', '395', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(848, 15, 5, 6, '292', '281', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(849, 15, 5, 7, '254', '207', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(850, 15, 5, 8, '991', '959', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(851, 15, 4, 1, '446', '396', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(852, 15, 4, 2, '228', '185', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(853, 15, 4, 3, '830', '799', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(854, 15, 4, 4, '920', '897', '0', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(855, 15, 4, 5, '427', '408', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(856, 15, 4, 6, '376', '335', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(857, 15, 4, 7, '791', '747', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(858, 15, 4, 8, '399', '387', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(859, 15, 3, 1, '180', '125', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(860, 15, 3, 2, '799', '777', '0', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(861, 15, 3, 3, '960', '945', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(862, 15, 3, 4, '470', '416', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(863, 15, 3, 5, '292', '248', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(864, 15, 3, 6, '454', '422', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(865, 15, 3, 7, '870', '840', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(866, 15, 3, 8, '862', '808', '0', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(867, 15, 3, 9, '689', '646', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(868, 15, 2, 1, '580', '542', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(869, 15, 2, 2, '762', '737', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(870, 15, 2, 3, '883', '855', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(871, 15, 2, 4, '974', '933', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(872, 15, 2, 5, '543', '530', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(873, 15, 2, 6, '261', '217', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(874, 15, 2, 7, '760', '740', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(875, 15, 2, 8, '719', '702', '0', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(876, 15, 2, 9, '420', '381', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(877, 15, 1, 1, '716', '697', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(878, 15, 1, 2, '524', '501', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(879, 15, 1, 3, '691', '646', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(880, 15, 1, 4, '390', '347', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(881, 15, 1, 5, '503', '487', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(882, 15, 1, 6, '505', '467', '0', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(883, 15, 1, 8, '949', '927', '45', 1, '2023-09-20 23:40:49', '2023-09-20 23:40:49'),
(884, 16, 19, 1, '516', '496', '38', 1, '2023-09-20 23:48:10', '2023-11-29 00:52:57'),
(885, 16, 19, 2, '978', '952', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(886, 16, 19, 3, '124', '75', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(887, 16, 19, 4, '413', '374', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(888, 16, 19, 5, '212', '169', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(889, 16, 19, 6, '180', '150', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(890, 16, 19, 7, '840', '785', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(891, 16, 10, 1, '476', '431', '0', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(892, 16, 10, 2, '401', '372', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(893, 16, 10, 3, '621', '600', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(894, 16, 10, 4, '161', '136', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(895, 16, 10, 5, '540', '523', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(896, 16, 10, 6, '628', '591', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(897, 16, 10, 7, '826', '813', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(898, 16, 10, 8, '967', '914', '0', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(899, 16, 7, 1, '787', '765', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(900, 16, 7, 2, '994', '954', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(901, 16, 7, 3, '591', '580', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(902, 16, 7, 4, '443', '412', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(903, 16, 7, 5, '351', '296', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(904, 16, 7, 6, '274', '225', '0', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(905, 16, 7, 7, '603', '552', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(906, 16, 7, 8, '204', '177', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(907, 16, 6, 1, '148', '99', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(908, 16, 6, 2, '229', '185', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(909, 16, 6, 3, '863', '850', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(910, 16, 6, 4, '978', '936', '0', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(911, 16, 6, 5, '924', '912', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(912, 16, 6, 6, '227', '216', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(913, 16, 5, 1, '475', '459', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(914, 16, 5, 2, '975', '950', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(915, 16, 5, 3, '246', '230', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(916, 16, 5, 4, '135', '113', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(917, 16, 5, 5, '460', '448', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(918, 16, 5, 6, '998', '948', '0', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(919, 16, 5, 7, '857', '846', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(920, 16, 5, 8, '530', '510', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(921, 16, 5, 9, '904', '886', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(922, 16, 4, 1, '444', '417', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(923, 16, 4, 2, '701', '673', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(924, 16, 4, 3, '645', '621', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(925, 16, 4, 4, '563', '526', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(926, 16, 4, 5, '350', '305', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(927, 16, 4, 6, '643', '616', '0', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(928, 16, 4, 7, '816', '794', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(929, 16, 4, 8, '470', '437', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(930, 16, 4, 9, '827', '815', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(931, 16, 3, 1, '671', '619', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(932, 16, 3, 2, '683', '628', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(933, 16, 3, 3, '689', '643', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(934, 16, 3, 4, '193', '158', '0', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(935, 16, 3, 5, '408', '369', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(936, 16, 3, 6, '699', '676', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(937, 16, 3, 7, '917', '906', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(938, 16, 2, 1, '243', '190', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(939, 16, 2, 2, '876', '848', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(940, 16, 2, 3, '320', '283', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(941, 16, 2, 4, '394', '372', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(942, 16, 2, 5, '836', '824', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(943, 16, 2, 6, '207', '182', '0', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(944, 16, 1, 1, '395', '354', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(945, 16, 1, 2, '363', '323', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(946, 16, 1, 3, '586', '539', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(947, 16, 1, 4, '939', '920', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(948, 16, 1, 5, '461', '425', '45', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(949, 16, 1, 7, '305', '281', '0', 1, '2023-09-20 23:48:10', '2023-09-20 23:48:10'),
(950, 17, 6, 1, '582', '568', '-55', 1, '2023-09-20 23:51:01', '2023-12-05 01:45:52'),
(951, 17, 6, 2, '324', '310', '45', 1, '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(952, 17, 6, 3, '329', '307', '45', 1, '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(953, 17, 6, 4, '461', '434', '45', 1, '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(954, 17, 6, 5, '388', '366', '45', 1, '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(955, 17, 5, 1, '824', '792', '45', 1, '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(956, 17, 5, 2, '950', '922', '0', 1, '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(957, 17, 5, 3, '241', '220', '45', 1, '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(958, 17, 5, 4, '150', '97', '45', 1, '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(959, 17, 5, 5, '665', '613', '45', 1, '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(960, 17, 5, 6, '978', '940', '45', 1, '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(961, 17, 4, 1, '371', '327', '45', 1, '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(962, 17, 4, 2, '118', '65', '45', 1, '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(963, 17, 4, 3, '246', '225', '0', 1, '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(964, 17, 4, 4, '685', '654', '45', 1, '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(965, 17, 4, 5, '139', '85', '45', 1, '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(966, 17, 3, 1, '455', '404', '43', 1, '2023-09-20 23:51:01', '2023-10-16 00:41:59'),
(967, 17, 3, 2, '874', '843', '45', 1, '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(968, 17, 3, 3, '564', '514', '0', 1, '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(969, 17, 3, 4, '257', '243', '45', 1, '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(970, 17, 3, 5, '347', '308', '45', 1, '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(971, 17, 2, 1, '786', '735', '45', 1, '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(972, 17, 2, 2, '307', '277', '45', 1, '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(973, 17, 2, 3, '367', '317', '45', 1, '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(974, 17, 2, 4, '572', '534', '0', 1, '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(975, 17, 2, 5, '716', '677', '45', 1, '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(976, 17, 2, 6, '921', '869', '45', 1, '2023-09-20 23:51:01', '2023-09-20 23:51:01'),
(977, 18, 19, 1, '320', '274', '35', 1, '2023-09-20 23:56:02', '2023-11-29 00:40:36'),
(978, 18, 19, 2, '554', '537', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(979, 18, 19, 3, '345', '306', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(980, 18, 19, 4, '646', '595', '0', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(981, 18, 18, 1, '388', '366', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(982, 18, 18, 2, '364', '330', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(983, 18, 18, 3, '619', '593', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(984, 18, 17, 1, '804', '765', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(985, 18, 17, 2, '254', '203', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(986, 18, 17, 3, '539', '524', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(987, 18, 17, 4, '615', '572', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(988, 18, 9, 1, '606', '580', '0', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(989, 18, 9, 2, '937', '900', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(990, 18, 9, 3, '517', '485', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(991, 18, 9, 4, '234', '193', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(992, 18, 8, 1, '520', '508', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(993, 18, 8, 2, '978', '953', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(994, 18, 8, 3, '615', '578', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(995, 18, 6, 1, '896', '884', '0', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(996, 18, 6, 2, '247', '231', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(997, 18, 6, 3, '659', '646', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(998, 18, 5, 1, '119', '77', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(999, 18, 5, 2, '880', '857', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(1000, 18, 5, 3, '213', '185', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(1001, 18, 5, 4, '361', '342', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(1002, 18, 4, 1, '683', '669', '0', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(1003, 18, 4, 2, '378', '351', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(1004, 18, 4, 3, '448', '408', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(1005, 18, 3, 1, '841', '804', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(1006, 18, 3, 2, '440', '401', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(1007, 18, 3, 3, '928', '904', '0', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(1008, 18, 3, 4, '907', '873', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(1009, 18, 2, 1, '507', '486', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(1010, 18, 2, 2, '377', '366', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(1011, 18, 2, 3, '840', '785', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(1012, 18, 2, 4, '776', '747', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(1013, 18, 1, 1, '245', '203', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(1014, 18, 1, 2, '642', '591', '45', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(1015, 18, 1, 3, '651', '635', '0', 1, '2023-09-20 23:56:02', '2023-09-20 23:56:02'),
(1016, 19, 18, 1, '804', '771', '41', 1, '2023-09-21 00:04:44', '2023-11-29 00:52:57'),
(1017, 19, 18, 2, '703', '676', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1018, 19, 18, 3, '879', '855', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1019, 19, 17, 1, '218', '202', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1020, 19, 17, 2, '822', '800', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1021, 19, 17, 3, '706', '667', '0', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1022, 19, 16, 1, '506', '480', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1023, 19, 16, 2, '186', '161', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1024, 19, 16, 3, '699', '651', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1025, 19, 16, 4, '302', '258', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1026, 19, 15, 1, '756', '715', '0', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1027, 19, 15, 2, '647', '627', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1028, 19, 15, 3, '661', '641', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1029, 19, 15, 4, '198', '183', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1030, 19, 15, 5, '664', '647', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1031, 19, 14, 1, '995', '947', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1032, 19, 14, 2, '703', '666', '0', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1033, 19, 14, 3, '458', '421', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1034, 19, 14, 4, '267', '251', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1035, 19, 14, 5, '382', '328', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1036, 19, 13, 1, '310', '269', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1037, 19, 13, 2, '166', '128', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1038, 19, 13, 3, '199', '187', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1039, 19, 13, 4, '138', '108', '0', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1040, 19, 12, 1, '379', '367', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1041, 19, 12, 2, '897', '865', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1042, 19, 12, 3, '717', '670', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1043, 19, 11, 1, '190', '138', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1044, 19, 11, 2, '698', '678', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1045, 19, 11, 3, '923', '900', '0', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1046, 19, 10, 1, '484', '461', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1047, 19, 10, 2, '825', '798', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1048, 19, 10, 3, '527', '516', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1049, 19, 9, 1, '224', '202', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1050, 19, 9, 2, '553', '542', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1051, 19, 9, 3, '255', '211', '0', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1052, 19, 8, 1, '453', '424', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1053, 19, 8, 2, '928', '906', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1054, 19, 8, 3, '628', '606', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1055, 19, 8, 4, '414', '399', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1056, 19, 7, 1, '927', '908', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1057, 19, 7, 2, '721', '686', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1058, 19, 7, 3, '518', '495', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1059, 19, 6, 1, '647', '600', '0', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1060, 19, 6, 2, '822', '780', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1061, 19, 6, 3, '168', '133', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1062, 19, 6, 4, '596', '548', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1063, 19, 5, 1, '148', '116', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1064, 19, 5, 2, '675', '650', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1065, 19, 5, 3, '447', '414', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1066, 19, 5, 4, '964', '952', '0', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1067, 19, 4, 1, '265', '244', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1068, 19, 4, 2, '990', '952', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1069, 19, 4, 3, '298', '272', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1070, 19, 3, 1, '888', '840', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1071, 19, 3, 2, '489', '478', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1072, 19, 3, 3, '299', '244', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1073, 19, 3, 4, '314', '283', '0', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1074, 19, 2, 1, '645', '626', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1075, 19, 2, 2, '846', '821', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1076, 19, 2, 3, '846', '820', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1077, 19, 2, 4, '649', '600', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1078, 19, 1, 1, '786', '769', '0', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1079, 19, 1, 2, '592', '547', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1080, 19, 1, 3, '370', '355', '45', 1, '2023-09-21 00:04:44', '2023-09-21 00:04:44'),
(1081, 20, 2, 1, '694', '677', '42', 1, '2023-09-21 00:20:35', '2023-11-29 00:48:12'),
(1082, 20, 2, 2, '473', '446', '45', 1, '2023-09-21 00:20:35', '2023-09-21 00:20:35'),
(1083, 20, 2, 3, '811', '788', '45', 1, '2023-09-21 00:20:35', '2023-09-21 00:20:35'),
(1084, 20, 2, 4, '308', '254', '45', 1, '2023-09-21 00:20:35', '2023-09-21 00:20:35'),
(1085, 20, 2, 5, '512', '491', '0', 1, '2023-09-21 00:20:35', '2023-09-21 00:20:35'),
(1086, 20, 2, 6, '332', '294', '45', 1, '2023-09-21 00:20:35', '2023-09-21 00:20:35'),
(1087, 20, 2, 7, '578', '565', '45', 1, '2023-09-21 00:20:35', '2023-09-21 00:20:35'),
(1088, 20, 2, 8, '887', '842', '45', 1, '2023-09-21 00:20:35', '2023-09-21 00:20:35'),
(1089, 20, 2, 9, '407', '373', '45', 1, '2023-09-21 00:20:35', '2023-09-21 00:20:35'),
(1090, 20, 1, 1, '334', '283', '45', 1, '2023-09-21 00:20:35', '2023-09-21 00:20:35'),
(1091, 20, 1, 2, '856', '801', '45', 1, '2023-09-21 00:20:35', '2023-09-21 00:20:35'),
(1092, 20, 1, 3, '284', '269', '45', 1, '2023-09-21 00:20:35', '2023-09-21 00:20:35'),
(1093, 20, 1, 4, '496', '466', '45', 1, '2023-09-21 00:20:35', '2023-09-21 00:20:35'),
(1094, 20, 1, 5, '704', '691', '0', 1, '2023-09-21 00:20:35', '2023-09-21 00:20:35'),
(1095, 20, 1, 6, '286', '242', '45', 1, '2023-09-21 00:20:35', '2023-09-21 00:20:35'),
(1096, 20, 1, 7, '199', '147', '45', 1, '2023-09-21 00:20:35', '2023-09-21 00:20:35'),
(1097, 20, 1, 8, '931', '878', '45', 1, '2023-09-21 00:20:35', '2023-09-21 00:20:35'),
(1098, 20, 1, 9, '604', '559', '45', 1, '2023-09-21 00:20:35', '2023-09-21 00:20:35'),
(1099, 21, 4, 1, '183', '138', '44', 1, '2023-09-21 00:21:59', '2023-11-29 00:21:00'),
(1100, 21, 4, 2, '786', '767', '0', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1101, 21, 4, 3, '469', '452', '45', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1102, 21, 4, 4, '339', '315', '45', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1103, 21, 4, 5, '368', '355', '45', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1104, 21, 4, 6, '983', '939', '45', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1105, 21, 4, 7, '891', '844', '0', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1106, 21, 4, 8, '235', '185', '45', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1107, 21, 4, 9, '841', '792', '45', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1108, 21, 3, 1, '787', '759', '45', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1109, 21, 3, 2, '424', '374', '45', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1110, 21, 3, 3, '216', '164', '45', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1111, 21, 3, 4, '407', '362', '0', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1112, 21, 2, 1, '313', '290', '45', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1113, 21, 2, 2, '873', '846', '45', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1114, 21, 2, 3, '533', '497', '45', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1115, 21, 2, 4, '611', '593', '45', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1116, 21, 2, 5, '537', '501', '45', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1117, 21, 2, 6, '776', '749', '45', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1118, 21, 1, 1, '405', '352', '45', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1119, 21, 1, 2, '845', '820', '45', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1120, 21, 1, 3, '737', '708', '0', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1121, 21, 1, 4, '318', '300', '45', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1122, 21, 1, 5, '204', '185', '45', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1123, 21, 1, 6, '759', '725', '45', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1124, 21, 1, 7, '326', '272', '45', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1125, 21, 1, 8, '747', '721', '45', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1126, 21, 1, 9, '849', '822', '0', 1, '2023-09-21 00:21:59', '2023-09-21 00:21:59'),
(1127, 22, 6, 1, '474', '421', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1128, 22, 6, 2, '948', '914', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1129, 22, 6, 3, '705', '668', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1130, 22, 6, 4, '778', '754', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1131, 22, 6, 5, '312', '260', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1132, 22, 6, 6, '375', '348', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1133, 22, 6, 7, '634', '607', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1134, 22, 6, 8, '337', '324', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1135, 22, 5, 1, '728', '674', '0', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1136, 22, 5, 2, '311', '274', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1137, 22, 5, 3, '834', '797', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1138, 22, 5, 4, '994', '957', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1139, 22, 5, 5, '848', '817', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1140, 22, 4, 1, '677', '629', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1141, 22, 4, 2, '365', '337', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1142, 22, 4, 3, '860', '820', '0', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1143, 22, 4, 4, '241', '204', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1144, 22, 4, 5, '382', '348', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1145, 22, 4, 6, '339', '298', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1146, 22, 4, 7, '417', '394', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1147, 22, 4, 8, '765', '742', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1148, 22, 3, 1, '306', '272', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1149, 22, 3, 2, '294', '267', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1150, 22, 3, 3, '345', '306', '0', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1151, 22, 3, 4, '612', '566', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1152, 22, 3, 5, '747', '693', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1153, 22, 3, 6, '300', '266', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1154, 22, 3, 7, '709', '666', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1155, 22, 3, 8, '513', '465', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1156, 22, 2, 1, '915', '878', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1157, 22, 2, 2, '969', '947', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1158, 22, 2, 3, '439', '397', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1159, 22, 2, 4, '151', '129', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1160, 22, 2, 5, '800', '745', '0', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1161, 22, 2, 6, '632', '583', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1162, 22, 2, 7, '800', '789', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1163, 22, 1, 1, '591', '568', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1164, 22, 1, 2, '419', '405', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1165, 22, 1, 3, '677', '626', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1166, 22, 1, 4, '258', '241', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1167, 22, 1, 5, '313', '262', '0', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1168, 22, 1, 6, '121', '81', '45', 1, '2023-09-21 00:23:28', '2023-09-21 00:23:28'),
(1169, 23, 18, 1, '818', '773', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1170, 23, 18, 2, '894', '846', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1171, 23, 18, 3, '670', '643', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1172, 23, 18, 4, '704', '692', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1173, 23, 18, 5, '250', '221', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1174, 23, 18, 6, '805', '781', '0', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1175, 23, 18, 7, '113', '96', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1176, 23, 18, 8, '203', '182', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1177, 23, 18, 9, '774', '750', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1178, 23, 17, 1, '828', '807', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1179, 23, 17, 2, '929', '915', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1180, 23, 17, 3, '929', '891', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1181, 23, 17, 4, '751', '715', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1182, 23, 17, 5, '528', '481', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1183, 23, 17, 6, '332', '278', '0', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1184, 23, 17, 7, '340', '309', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1185, 23, 15, 1, '851', '834', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1186, 23, 15, 2, '674', '651', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1187, 23, 15, 3, '113', '73', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1188, 23, 15, 4, '540', '510', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1189, 23, 15, 5, '242', '208', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1190, 23, 15, 6, '487', '447', '0', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1191, 23, 14, 1, '219', '180', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1192, 23, 14, 2, '791', '736', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1193, 23, 14, 3, '793', '745', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1194, 23, 14, 4, '791', '741', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1195, 23, 14, 5, '375', '352', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1196, 23, 14, 6, '962', '911', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1197, 23, 6, 1, '897', '875', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1198, 23, 6, 2, '274', '225', '0', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1199, 23, 6, 3, '465', '449', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1200, 23, 6, 4, '872', '848', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1201, 23, 6, 5, '298', '279', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1202, 23, 6, 6, '556', '541', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1203, 23, 5, 1, '782', '757', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1204, 23, 5, 2, '853', '815', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1205, 23, 5, 3, '172', '129', '0', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1206, 23, 5, 4, '479', '428', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1207, 23, 5, 5, '242', '204', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1208, 23, 5, 6, '978', '931', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1209, 23, 5, 7, '756', '716', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1210, 23, 4, 1, '815', '763', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1211, 23, 4, 2, '332', '308', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1212, 23, 4, 3, '215', '182', '0', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1213, 23, 4, 4, '177', '153', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1214, 23, 4, 5, '766', '742', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1215, 23, 4, 6, '566', '518', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1216, 23, 4, 7, '317', '272', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1217, 23, 2, 1, '227', '192', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1218, 23, 2, 2, '165', '128', '0', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1219, 23, 2, 3, '429', '374', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1220, 23, 2, 4, '375', '341', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1221, 23, 2, 5, '873', '841', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1222, 23, 2, 6, '694', '650', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1223, 23, 2, 7, '606', '559', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1224, 23, 1, 1, '426', '399', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1225, 23, 1, 2, '239', '227', '0', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1226, 23, 1, 3, '501', '462', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1227, 23, 1, 4, '727', '678', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1228, 23, 1, 5, '641', '593', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1229, 23, 1, 6, '631', '606', '45', 1, '2023-09-21 01:08:37', '2023-09-21 01:08:37'),
(1230, NULL, NULL, NULL, NULL, NULL, '40', 1, '2023-10-16 00:38:00', '2023-10-16 00:38:00');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_setups`
--

CREATE TABLE `site_setups` (
  `id` bigint UNSIGNED NOT NULL,
  `header_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hot_line` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `maps` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_content` text COLLATE utf8mb4_unicode_ci,
  `copyright_text` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_setups`
--

INSERT INTO `site_setups` (`id`, `header_logo`, `hot_line`, `phone`, `phone_two`, `email`, `address`, `maps`, `facebook`, `instagram`, `twitter`, `linkedin`, `youtube`, `footer_logo`, `footer_content`, `copyright_text`, `created_at`, `updated_at`) VALUES
(1, 'setup/9b2be5d1b3.png', '54684152456', '01741571104', NULL, 'admin@admin.com', '271-Boro Moghbazar, Dhaka, BD', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14607.601180362846!2d90.38426189774805!3d23.750934648267464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s107%20Bir%20Uttam%20C%20R%20Dutta%20Road%2C%204th%20Floor%2C%20F%20Haque%20Tower%2C%20Dhaka-1205!5e0!3m2!1sen!2sbd!4v1697091451125!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'https://www.facebook.com/sobkisubazar', 'https://www.instagram.com/sobkisubazar/', 'https://twitter.com/SobkisuBazar/dip', 'https://linkedin.com/dipankar', 'https://www.youtube.com/@sobkisubazar', 'setup/063791221d.png', 'Feugiat in, litora eleui snam quis nec per sed nec vitae, non sed mus, in tincidunt metus dui eget', '&copy; Copyright 2018. All right reserved by Enrich IT.', '2023-08-29 03:48:08', '2023-10-12 03:14:09');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'S', 's', '1', '2023-08-28 01:45:02', '2023-08-28 01:45:02'),
(2, 'M', 'm', '1', '2023-08-28 01:45:10', '2023-08-28 01:45:10'),
(3, 'L', 'l', '1', '2023-08-28 01:45:16', '2023-08-28 01:45:16'),
(4, 'XL', 'xl', '1', '2023-08-28 01:45:23', '2023-08-28 01:45:23'),
(5, '2XL', '2xl', '1', '2023-08-28 01:45:29', '2023-08-28 01:50:04'),
(6, '3XL', '3xl', '1', '2023-08-28 01:50:16', '2023-08-28 01:50:16'),
(7, '4XL', '4xl', '1', '2023-08-28 01:50:43', '2023-08-28 01:50:43'),
(8, '5XL', '5xl', '1', '2023-08-28 01:50:49', '2023-08-28 01:50:49'),
(9, '6XL', '6xl', '1', '2023-08-28 01:50:57', '2023-08-28 01:50:57');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_des` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `slug`, `short_des`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Digisoft Printed Premium Tee', 'digisoft-printed-premium-tee', 'Digisoft Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore corporis adipisci sapiente recusandae sit, natus doloribus est odio quibusdam architecto soluta totam sint earum in provident neque cumque ducimus voluptate. SDF', 'uploads/slider/73ef367804.png', 'http://127.0.0.1:8000/product-details/brielle-barnes', '1', '2023-10-07 04:06:22', '2023-10-14 01:24:00'),
(4, 'Cum dolorum eius ame', 'cum-dolorum-eius-ame', 'Update Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore corporis adipisci sapiente recusandae sit, natus doloribus est odio quibusdam architecto soluta totam sint earum in provident neque cumque ducimus voluptate.', 'uploads/slider/4949ebe073.png', NULL, '1', '2023-10-11 00:40:51', '2023-10-12 02:37:28'),
(5, 'Jameson Obrien Brielle Barnes Evangeline', 'jameson-obrien-brielle-barnes-evangeline', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore corporis adipisci sapiente recusandae sit, natus doloribus est odio quibusdam architecto soluta totam sint earum in provident neque cumque ducimus voluptate.', 'uploads/slider/7d0899a3ec.png', 'http://127.0.0.1:8000/product-details/beverly-warren', '1', '2023-10-11 00:41:07', '2023-10-12 03:34:01');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint UNSIGNED NOT NULL,
  `slide_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `slide_image`, `slide_content`, `created_at`, `updated_at`) VALUES
(1, 'uploads/slide/ea1a359317.png', 'string string string', '2023-09-03 05:40:22', '2023-10-12 02:56:42');

-- --------------------------------------------------------

--
-- Table structure for table `stripe_payment_infos`
--

CREATE TABLE `stripe_payment_infos` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` int DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stripe_payment_infos`
--

INSERT INTO `stripe_payment_infos` (`id`, `name`, `customer_id`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Dipankar', 10, 'dipankarbiswasofficials@gmail.com', NULL, '{\"city\":null,\"country\":\"BD\",\"line1\":null,\"line2\":null,\"postal_code\":null,\"state\":null}', '2023-10-15 23:32:04', '2023-10-15 23:32:04'),
(2, 'Dipankar', 11, 'dipankarbiswasofficials@gmail.com', NULL, '{\"city\":null,\"country\":\"BD\",\"line1\":null,\"line2\":null,\"postal_code\":null,\"state\":null}', '2023-10-15 23:37:34', '2023-10-15 23:37:34'),
(3, 'Dipankar', 14, 'dipankarbiswasofficials@gmail.com', NULL, '{\"city\":null,\"country\":\"BD\",\"line1\":null,\"line2\":null,\"postal_code\":null,\"state\":null}', '2023-10-16 00:38:00', '2023-10-16 00:38:00'),
(4, 'Dipankar', 15, 'dipankarbiswasofficials@gmail.com', NULL, '{\"city\":null,\"country\":\"BD\",\"line1\":null,\"line2\":null,\"postal_code\":null,\"state\":null}', '2023-10-16 00:42:00', '2023-10-16 00:42:00'),
(5, 'Dipankar', 16, 'admin@app.com', NULL, '{\"city\":null,\"country\":\"BD\",\"line1\":null,\"line2\":null,\"postal_code\":null,\"state\":null}', '2023-11-28 23:56:46', '2023-11-28 23:56:46'),
(6, 'Dipankar', 17, 'dipankarbiswasofficials@gmail.com', NULL, '{\"city\":null,\"country\":\"BD\",\"line1\":null,\"line2\":null,\"postal_code\":null,\"state\":null}', '2023-11-29 00:14:55', '2023-11-29 00:14:55'),
(7, 'Dipankar', 18, 'dipankarbiswasofficials@gmail.com', NULL, '{\"city\":null,\"country\":\"BD\",\"line1\":null,\"line2\":null,\"postal_code\":null,\"state\":null}', '2023-11-29 00:18:39', '2023-11-29 00:18:39'),
(8, 'Dipankar', 19, 'dipankarbiswasofficials@gmail.com', NULL, '{\"city\":null,\"country\":\"BD\",\"line1\":null,\"line2\":null,\"postal_code\":null,\"state\":null}', '2023-11-29 00:21:05', '2023-11-29 00:21:05'),
(9, 'Dipankar', 20, 'dipankarbiswasofficials@gmail.com', NULL, '{\"city\":null,\"country\":\"BD\",\"line1\":null,\"line2\":null,\"postal_code\":null,\"state\":null}', '2023-11-29 00:23:30', '2023-11-29 00:23:30'),
(10, 'Dipankar', 21, 'dipankarbiswasofficials@gmail.com', NULL, '{\"city\":null,\"country\":\"BD\",\"line1\":null,\"line2\":null,\"postal_code\":null,\"state\":null}', '2023-11-29 00:27:16', '2023-11-29 00:27:16'),
(11, 'Dipankar', 22, 'dipankarbiswasofficials@gmail.com', NULL, '{\"city\":null,\"country\":\"BD\",\"line1\":null,\"line2\":null,\"postal_code\":null,\"state\":null}', '2023-11-29 00:36:45', '2023-11-29 00:36:45'),
(12, 'Dipankar', 23, 'dipankarbiswasofficials@gmail.com', NULL, '{\"city\":null,\"country\":\"BD\",\"line1\":null,\"line2\":null,\"postal_code\":null,\"state\":null}', '2023-11-29 00:37:58', '2023-11-29 00:37:58'),
(13, 'Dipankar', 24, 'dipankarbiswasofficials@gmail.com', NULL, '{\"city\":null,\"country\":\"BD\",\"line1\":null,\"line2\":null,\"postal_code\":null,\"state\":null}', '2023-11-29 00:39:01', '2023-11-29 00:39:01'),
(14, 'Dipankar', 25, 'dipankarbiswasofficials@gmail.com', NULL, '{\"city\":null,\"country\":\"BD\",\"line1\":null,\"line2\":null,\"postal_code\":null,\"state\":null}', '2023-11-29 00:40:42', '2023-11-29 00:40:42'),
(15, 'Dipankar', 26, 'dipankarbiswasofficials@gmail.com', NULL, '{\"city\":null,\"country\":\"BD\",\"line1\":null,\"line2\":null,\"postal_code\":null,\"state\":null}', '2023-11-29 00:43:39', '2023-11-29 00:43:39'),
(16, 'Dipankar', 27, 'dipankarbiswasofficials@gmail.com', NULL, '{\"city\":null,\"country\":\"BD\",\"line1\":null,\"line2\":null,\"postal_code\":null,\"state\":null}', '2023-11-29 00:46:38', '2023-11-29 00:46:38'),
(17, 'Dipankar', 28, 'dipankarbiswasofficials@gmail.com', NULL, '{\"city\":null,\"country\":\"BD\",\"line1\":null,\"line2\":null,\"postal_code\":null,\"state\":null}', '2023-11-29 00:48:17', '2023-11-29 00:48:17'),
(18, 'Dipankar', 29, 'dipankarbiswasofficials@gmail.com', NULL, '{\"city\":null,\"country\":\"BD\",\"line1\":null,\"line2\":null,\"postal_code\":null,\"state\":null}', '2023-11-29 00:53:02', '2023-11-29 00:53:02'),
(19, 'Dipankar', 30, 'dipankarbiswasofficials@gmail.com', NULL, '{\"city\":null,\"country\":\"BD\",\"line1\":null,\"line2\":null,\"postal_code\":null,\"state\":null}', '2023-12-05 01:45:59', '2023-12-05 01:45:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dipankar', 'admin@admin.com', NULL, '$2y$10$nJhRkZnvqJ7i7B1gJK9Sm.kFcbRXqDbA1TRWPZQZLoI345y9bszbO', NULL, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `necks`
--
ALTER TABLE `necks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Indexes for table `site_setups`
--
ALTER TABLE `site_setups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stripe_payment_infos`
--
ALTER TABLE `stripe_payment_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `necks`
--
ALTER TABLE `necks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1231;

--
-- AUTO_INCREMENT for table `site_setups`
--
ALTER TABLE `site_setups`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stripe_payment_infos`
--
ALTER TABLE `stripe_payment_infos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
