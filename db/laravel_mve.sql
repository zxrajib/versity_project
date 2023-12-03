-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 08:08 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_mve`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_pic` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active' COMMENT 'Active & Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `uuid`, `user_id`, `address`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'kjgfdfjzdfgjdjgiirfsg', 1, 'Dhaka', 'Active', '2023-10-10 04:07:23', '2023-10-10 04:07:23', NULL),
(2, 'kjgfdfjzdfgjdjgiirfsg', 2, 'Khulna', 'Active', '2023-10-10 04:07:23', '2023-10-10 04:07:23', NULL),
(3, 'kjgfdfjzdfgjdjgiirfsg', 3, 'Rajshahi', 'Active', '2023-10-10 04:07:23', '2023-10-10 04:07:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1= active & 0= inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attribute_values`
--

CREATE TABLE `attribute_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Status 1= active & 0= inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT 10,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Slug` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active and 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `uuid`, `user_id`, `name`, `description`, `image`, `Slug`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'kjgfdfjzdfgjdjgiirfsg', 1, 'No Brand', 'This is description', NULL, 'brand', 0, '2023-10-10 04:07:23', '2023-11-09 03:59:01', NULL),
(2, 'kjgfdfjzdfgjdjgiirfsg', 3, 'Apple', 'Iphone 13 pro', 'brand_9f6290f4436e5a2351f12e03b6433c3c1701064935.png', 'Apple', 1, '2023-10-10 04:07:23', '2023-11-27 00:02:15', NULL),
(3, 'kjgfdfjzdfgjdjgiirfsg', 3, 'Nokia', 'This is description', 'brand_49f17151a1bc1d859e8db35cd7b2059b1701065196.png', 'Nokia', 0, '2023-10-10 04:07:23', '2023-11-27 00:33:34', NULL),
(4, 'kjgfdfjzdfgjdjgiirfsg', 1, 'Hp', 'This is description', NULL, 'Hp', 0, '2023-10-10 04:07:23', '2023-11-09 03:59:03', NULL),
(5, 'kjgfdfjzdfgjdjgiirfsg', 3, 'Dell', 'This is description', 'brand_ab2724d10b490217916b1bcc56aef48f1701065167.png', 'Dell', 0, '2023-10-10 04:07:23', '2023-11-27 00:33:41', NULL),
(6, 'kjgfdfjzdfgjdjgiirfsg', 3, 'ACI', 'This is description', 'brand_545ca7cbd18e705fccc373a7a70698d81701065145.png', 'ACI', 1, '2023-10-10 04:07:23', '2023-11-27 00:05:47', NULL),
(7, 'kjgfdfjzdfgjdjgiirfsg', 3, 'LG', 'This is description', 'brand_3138b8e6061fdf7cfaaa79279175cbcd1701064962.png', 'LG', 1, '2023-10-10 04:07:23', '2023-11-27 00:02:42', NULL),
(8, 'kjgfdfjzdfgjdjgiirfsg', 1, 'Fresh', 'This is description', NULL, 'Fresh', 0, '2023-10-10 04:07:23', '2023-11-09 03:59:05', NULL),
(9, 'kjgfdfjzdfgjdjgiirfsg', 1, 'Lotto', 'This is description', NULL, 'Lotto', 0, '2023-10-10 04:07:23', '2023-11-09 03:59:06', NULL),
(10, 'kjgfdfjzdfgjdjgiirfsg', 1, 'Easy', 'This is description', NULL, 'Lotto', 0, '2023-10-10 04:07:23', '2023-11-09 03:59:06', NULL),
(11, 'kjgfdfjzdfgjdjgiirfsg', 3, 'Hatil', 'This is description', 'brand_f52339459e40062d2f8427c09a35dd241701065087.jpg', 'Hatil', 1, '2023-10-10 04:07:23', '2023-11-27 00:04:47', NULL),
(12, 'kjgfdfjzdfgjdjgiirfsg', 1, 'RFL', 'This is description', NULL, 'RFL', 0, '2023-10-10 04:07:23', '2023-11-09 05:48:06', NULL),
(13, 'kjgfdfjzdfgjdjgiirfsg', 3, 'Lenevo', 'This is description', 'brand_ae735a9f17e86bc0eb7aba6f97b529591701065006.png', 'Lenevo', 1, '2023-10-10 04:07:23', '2023-11-27 00:03:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `stock_details_id` bigint(20) UNSIGNED NOT NULL,
  `attr_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(15,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sub_total` decimal(15,2) NOT NULL,
  `discount` decimal(15,2) NOT NULL DEFAULT 0.00,
  `total` decimal(15,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `uuid`, `user_id`, `product_id`, `stock_details_id`, `attr_id`, `price`, `quantity`, `sub_total`, `discount`, `total`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ccc4e782-044a-4d09-8771-22d9cc8bda19', 4, 15, 9, NULL, '245555.00', 1, '245555.00', '10.00', '245545.00', '2023-11-26 00:57:18', '2023-11-26 00:57:22', '2023-11-26 00:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Slug` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active and 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `uuid`, `user_id`, `parent_id`, `name`, `description`, `image`, `Slug`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'exampleofuuid', 1, NULL, 'Fashion', 'This is man category', 'category_93e002c712ad248bb0ade31909cef8761701065296.jpg', 'men', 1, '2023-10-10 04:07:23', '2023-11-27 00:08:16', NULL),
(2, 'exampleofuuid', 1, '1', 'Women', 'This is women category', 'category_b133ad579435cfc931fc4843bcf0256d1701065305.jpg', 'women', 1, '2023-10-10 04:07:23', '2023-11-27 00:08:25', NULL),
(3, 'exampleofuuid', 1, '1', 'Men', 'This is Men category', 'category_bbbcb4ecce212f38c5dcfefbb03a85331701065313.jpg', 'Men', 1, '2023-10-10 04:07:23', '2023-11-27 00:08:33', NULL),
(4, 'exampleofuuid', 1, NULL, 'Electronics', 'This is example category', 'category_ee3c6e8ed9c27c45f161ea416c997df81701065324.jpg', 'men', 1, '2023-10-10 04:07:23', '2023-11-27 00:08:44', NULL),
(5, 'exampleofuuid', 1, '4', 'Mobile', 'This is example category', 'category_87d17f4624a514e81dc7c8e016a7405c1701065244.jpg', 'men', 1, '2023-10-10 04:07:23', '2023-11-27 00:07:24', NULL),
(6, 'exampleofuuid', 1, '4', 'Printer', 'This is example category', 'category_37fe93164a9c7b7622bab12c349b98c81701065372.jpg', 'men', 1, '2023-10-10 04:07:23', '2023-11-27 00:09:32', NULL),
(7, 'exampleofuuid', 1, '4', 'Computer Accessories', 'This is example category', 'category_719e3736907bc4d5a30b7156c0b393161701065386.jpg', 'men', 1, '2023-10-10 04:07:23', '2023-11-27 00:09:46', NULL),
(8, 'exampleofuuid', 1, '4', 'Television', 'This is example category', 'category_1bf5d98412bd4d9dd84137f3e39412f21701065393.jpg', 'men', 1, '2023-10-10 04:07:23', '2023-11-27 00:09:53', NULL),
(9, 'exampleofuuid', 1, NULL, 'Food', 'This is category', 'category_0a38e7286ebbb560354992b3ce62be671701065406.jpg', 'food', 1, '2023-10-10 04:07:23', '2023-11-27 00:10:06', NULL),
(10, 'exampleofuuid', 1, NULL, 'Furniture', 'This is category', 'category_bb3a8b2e390142074e49741a0121d6231701065441.jpg', 'Furniture', 1, '2023-10-10 04:07:23', '2023-11-27 00:10:41', NULL),
(11, 'exampleofuuid', 1, NULL, 'Kitchen', 'This is category', 'category_33fa00a66f2edf0d1c5697a9f8693ba81701065482.jpg', 'Kitchen', 1, '2023-10-10 04:07:23', '2023-11-27 00:11:22', NULL),
(12, 'exampleofuuid', 1, NULL, 'Health & Beauty', 'This is category', 'category_e4763c9e49ba6dd252c3e8935637bb861701065492.jpg', 'Health & Beauty', 1, '2023-10-10 04:07:23', '2023-11-27 00:11:32', NULL),
(13, 'exampleofuuid', 1, '11', 'Mens Care', 'This is example category', 'category_07029c42fbcd75b0cbd2f586061caaf71701065503.jpg', 'Mens', 1, '2023-10-10 04:07:23', '2023-11-27 00:11:43', NULL),
(14, 'exampleofuuid', 1, '11', 'Women Beauty', 'This is example category', 'category_3ccede1c5cf98fdd2ba90ef9261a3eb41701065513.jpg', 'Women', 1, '2023-10-10 04:07:23', '2023-11-27 00:11:53', NULL),
(15, 'exampleofuuid', 1, '11', 'Baby Care', 'This is example category', 'category_757356c128de174611c5f0a65e2d1c1b1701065524.jpg', 'Baby', 1, '2023-10-10 04:07:23', '2023-11-27 00:12:04', NULL),
(16, 'exampleofuuid', 1, NULL, 'Computers & Desktop', 'This is category', 'category_12c4c869098cf8e384485a8fd9985f871701065598.jpg', 'food', 1, '2023-10-10 04:07:23', '2023-11-27 00:13:18', NULL),
(17, 'exampleofuuid', 1, '15', 'Computers', 'This is example category', 'category_45888a4da062f16a099a7f7c6cc15ee01701065555.jpg', 'computers', 1, '2023-10-10 04:07:23', '2023-11-27 00:12:35', NULL),
(18, 'exampleofuuid', 1, '15', 'Desktop', 'This is example category', 'category_2310408a63388fe57e3a4177168a87981701065588.jpg', 'desktop', 1, '2023-10-10 04:07:23', '2023-11-27 00:13:08', NULL),
(19, 'exampleofuuid', 1, NULL, 'Laptop', 'This is category', 'category_146bdebb324a64d327b1dde22a07d0bd1701065286.jpg', 'Laptop', 1, '2023-10-10 04:07:23', '2023-11-27 00:08:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `charges`
--

CREATE TABLE `charges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_charge_in_city` decimal(16,2) NOT NULL,
  `delivery_charge_around_city` decimal(16,2) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '1=active & 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AX', 'Åland Islands'),
(3, 'AL', 'Albania'),
(4, 'DZ', 'Algeria'),
(5, 'AS', 'American Samoa'),
(6, 'AD', 'Andorra'),
(7, 'AO', 'Angola'),
(8, 'AI', 'Anguilla'),
(9, 'AQ', 'Antarctica'),
(10, 'AG', 'Antigua and Barbuda'),
(11, 'AR', 'Argentina'),
(12, 'AM', 'Armenia'),
(13, 'AW', 'Aruba'),
(14, 'AU', 'Australia'),
(15, 'AT', 'Austria'),
(16, 'AZ', 'Azerbaijan'),
(17, 'BS', 'Bahamas'),
(18, 'BH', 'Bahrain'),
(19, 'BD', 'Bangladesh'),
(20, 'BB', 'Barbados'),
(21, 'BY', 'Belarus'),
(22, 'BE', 'Belgium'),
(23, 'BZ', 'Belize'),
(24, 'BJ', 'Benin'),
(25, 'BM', 'Bermuda'),
(26, 'BT', 'Bhutan'),
(27, 'BO', 'Bolivia, Plurinational State of'),
(28, 'BQ', 'Bonaire, Sint Eustatius and Saba'),
(29, 'BA', 'Bosnia and Herzegovina'),
(30, 'BW', 'Botswana'),
(31, 'BV', 'Bouvet Island'),
(32, 'BR', 'Brazil'),
(33, 'IO', 'British Indian Ocean Territory'),
(34, 'BN', 'Brunei Darussalam'),
(35, 'BG', 'Bulgaria'),
(36, 'BF', 'Burkina Faso'),
(37, 'BI', 'Burundi'),
(38, 'KH', 'Cambodia'),
(39, 'CM', 'Cameroon'),
(40, 'CA', 'Canada'),
(41, 'CV', 'Cape Verde'),
(42, 'KY', 'Cayman Islands'),
(43, 'CF', 'Central African Republic'),
(44, 'TD', 'Chad'),
(45, 'CL', 'Chile'),
(46, 'CN', 'China'),
(47, 'CX', 'Christmas Island'),
(48, 'CC', 'Cocos (Keeling) Islands'),
(49, 'CO', 'Colombia'),
(50, 'KM', 'Comoros'),
(51, 'CG', 'Congo'),
(52, 'CD', 'Congo, the Democratic Republic of the'),
(53, 'CK', 'Cook Islands'),
(54, 'CR', 'Costa Rica'),
(55, 'CI', 'Côte d\'Ivoire'),
(56, 'HR', 'Croatia'),
(57, 'CU', 'Cuba'),
(58, 'CW', 'Curaçao'),
(59, 'CY', 'Cyprus'),
(60, 'CZ', 'Czech Republic'),
(61, 'DK', 'Denmark'),
(62, 'DJ', 'Djibouti'),
(63, 'DM', 'Dominica'),
(64, 'DO', 'Dominican Republic'),
(65, 'EC', 'Ecuador'),
(66, 'EG', 'Egypt'),
(67, 'SV', 'El Salvador'),
(68, 'GQ', 'Equatorial Guinea'),
(69, 'ER', 'Eritrea'),
(70, 'EE', 'Estonia'),
(71, 'ET', 'Ethiopia'),
(72, 'FK', 'Falkland Islands (Malvinas)'),
(73, 'FO', 'Faroe Islands'),
(74, 'FJ', 'Fiji'),
(75, 'FI', 'Finland'),
(76, 'FR', 'France'),
(77, 'GF', 'French Guiana'),
(78, 'PF', 'French Polynesia'),
(79, 'TF', 'French Southern Territories'),
(80, 'GA', 'Gabon'),
(81, 'GM', 'Gambia'),
(82, 'GE', 'Georgia'),
(83, 'DE', 'Germany'),
(84, 'GH', 'Ghana'),
(85, 'GI', 'Gibraltar'),
(86, 'GR', 'Greece'),
(87, 'GL', 'Greenland'),
(88, 'GD', 'Grenada'),
(89, 'GP', 'Guadeloupe'),
(90, 'GU', 'Guam'),
(91, 'GT', 'Guatemala'),
(92, 'GG', 'Guernsey'),
(93, 'GN', 'Guinea'),
(94, 'GW', 'Guinea-Bissau'),
(95, 'GY', 'Guyana'),
(96, 'HT', 'Haiti'),
(97, 'HM', 'Heard Island and McDonald Mcdonald Islands'),
(98, 'VA', 'Holy See (Vatican City State)'),
(99, 'HN', 'Honduras'),
(100, 'HK', 'Hong Kong'),
(101, 'HU', 'Hungary'),
(102, 'IS', 'Iceland'),
(103, 'IN', 'India'),
(104, 'ID', 'Indonesia'),
(105, 'IR', 'Iran, Islamic Republic of'),
(106, 'IQ', 'Iraq'),
(107, 'IE', 'Ireland'),
(108, 'IM', 'Isle of Man'),
(109, 'IL', 'Israel'),
(110, 'IT', 'Italy'),
(111, 'JM', 'Jamaica'),
(112, 'JP', 'Japan'),
(113, 'JE', 'Jersey'),
(114, 'JO', 'Jordan'),
(115, 'KZ', 'Kazakhstan'),
(116, 'KE', 'Kenya'),
(117, 'KI', 'Kiribati'),
(118, 'KP', 'Korea, Democratic People\'s Republic of'),
(119, 'KR', 'Korea, Republic of'),
(120, 'KW', 'Kuwait'),
(121, 'KG', 'Kyrgyzstan'),
(122, 'LA', 'Lao People\'s Democratic Republic'),
(123, 'LV', 'Latvia'),
(124, 'LB', 'Lebanon'),
(125, 'LS', 'Lesotho'),
(126, 'LR', 'Liberia'),
(127, 'LY', 'Libya'),
(128, 'LI', 'Liechtenstein'),
(129, 'LT', 'Lithuania'),
(130, 'LU', 'Luxembourg'),
(131, 'MO', 'Macao'),
(132, 'MK', 'Macedonia, the Former Yugoslav Republic of'),
(133, 'MG', 'Madagascar'),
(134, 'MW', 'Malawi'),
(135, 'MY', 'Malaysia'),
(136, 'MV', 'Maldives'),
(137, 'ML', 'Mali'),
(138, 'MT', 'Malta'),
(139, 'MH', 'Marshall Islands'),
(140, 'MQ', 'Martinique'),
(141, 'MR', 'Mauritania'),
(142, 'MU', 'Mauritius'),
(143, 'YT', 'Mayotte'),
(144, 'MX', 'Mexico'),
(145, 'FM', 'Micronesia, Federated States of'),
(146, 'MD', 'Moldova, Republic of'),
(147, 'MC', 'Monaco'),
(148, 'MN', 'Mongolia'),
(149, 'ME', 'Montenegro'),
(150, 'MS', 'Montserrat'),
(151, 'MA', 'Morocco'),
(152, 'MZ', 'Mozambique'),
(153, 'MM', 'Myanmar'),
(154, 'NA', 'Namibia'),
(155, 'NR', 'Nauru'),
(156, 'NP', 'Nepal'),
(157, 'NL', 'Netherlands'),
(158, 'NC', 'New Caledonia'),
(159, 'NZ', 'New Zealand'),
(160, 'NI', 'Nicaragua'),
(161, 'NE', 'Niger'),
(162, 'NG', 'Nigeria'),
(163, 'NU', 'Niue'),
(164, 'NF', 'Norfolk Island'),
(165, 'MP', 'Northern Mariana Islands'),
(166, 'NO', 'Norway'),
(167, 'OM', 'Oman'),
(168, 'PK', 'Pakistan'),
(169, 'PW', 'Palau'),
(170, 'PS', 'Palestine, State of'),
(171, 'PA', 'Panama'),
(172, 'PG', 'Papua New Guinea'),
(173, 'PY', 'Paraguay'),
(174, 'PE', 'Peru'),
(175, 'PH', 'Philippines'),
(176, 'PN', 'Pitcairn'),
(177, 'PL', 'Poland'),
(178, 'PT', 'Portugal'),
(179, 'PR', 'Puerto Rico'),
(180, 'QA', 'Qatar'),
(181, 'RE', 'Réunion'),
(182, 'RO', 'Romania'),
(183, 'RU', 'Russian Federation'),
(184, 'RW', 'Rwanda'),
(185, 'BL', 'Saint Barthélemy'),
(186, 'SH', 'Saint Helena, Ascension and Tristan da Cunha'),
(187, 'KN', 'Saint Kitts and Nevis'),
(188, 'LC', 'Saint Lucia'),
(189, 'MF', 'Saint Martin (French part)'),
(190, 'PM', 'Saint Pierre and Miquelon'),
(191, 'VC', 'Saint Vincent and the Grenadines'),
(192, 'WS', 'Samoa'),
(193, 'SM', 'San Marino'),
(194, 'ST', 'Sao Tome and Principe'),
(195, 'SA', 'Saudi Arabia'),
(196, 'SN', 'Senegal'),
(197, 'RS', 'Serbia'),
(198, 'SC', 'Seychelles'),
(199, 'SL', 'Sierra Leone'),
(200, 'SG', 'Singapore'),
(201, 'SX', 'Sint Maarten (Dutch part)'),
(202, 'SK', 'Slovakia'),
(203, 'SI', 'Slovenia'),
(204, 'SB', 'Solomon Islands'),
(205, 'SO', 'Somalia'),
(206, 'ZA', 'South Africa'),
(207, 'GS', 'South Georgia and the South Sandwich Islands'),
(208, 'SS', 'South Sudan'),
(209, 'ES', 'Spain'),
(210, 'LK', 'Sri Lanka'),
(211, 'SD', 'Sudan'),
(212, 'SR', 'Suriname'),
(213, 'SJ', 'Svalbard and Jan Mayen'),
(214, 'SZ', 'Swaziland'),
(215, 'SE', 'Sweden'),
(216, 'CH', 'Switzerland'),
(217, 'SY', 'Syrian Arab Republic'),
(218, 'TW', 'Taiwan'),
(219, 'TJ', 'Tajikistan'),
(220, 'TZ', 'Tanzania, United Republic of'),
(221, 'TH', 'Thailand'),
(222, 'TL', 'Timor-Leste'),
(223, 'TG', 'Togo'),
(224, 'TK', 'Tokelau'),
(225, 'TO', 'Tonga'),
(226, 'TT', 'Trinidad and Tobago'),
(227, 'TN', 'Tunisia'),
(228, 'TR', 'Turkey'),
(229, 'TM', 'Turkmenistan'),
(230, 'TC', 'Turks and Caicos Islands'),
(231, 'TV', 'Tuvalu'),
(232, 'UG', 'Uganda'),
(233, 'UA', 'Ukraine'),
(234, 'AE', 'United Arab Emirates'),
(235, 'GB', 'United Kingdom'),
(236, 'US', 'United States'),
(237, 'UM', 'United States Minor Outlying Islands'),
(238, 'UY', 'Uruguay'),
(239, 'UZ', 'Uzbekistan'),
(240, 'VU', 'Vanuatu'),
(241, 'VE', 'Venezuela, Bolivarian Republic of'),
(242, 'VN', 'Viet Nam'),
(243, 'VG', 'Virgin Islands, British'),
(244, 'VI', 'Virgin Islands, U.S.'),
(245, 'WF', 'Wallis and Futuna'),
(246, 'EH', 'Western Sahara'),
(247, 'YE', 'Yemen'),
(248, 'ZM', 'Zambia'),
(249, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `coupon_code` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `amount_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiry_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active and 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mac_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active' COMMENT 'Active & Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valid_till` date NOT NULL,
  `value` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = active & 0 = inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `expense_category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `reference` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active & 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expense_categories`
--

CREATE TABLE `expense_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active and 0=inactive',
  `slug` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tw_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active and 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `uuid`, `user_id`, `address`, `phone`, `email`, `fb_link`, `tw_link`, `google_link`, `insta_link`, `youtube_link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 1, 'uttara dhaka', '0172564565456', 'test@gmail.com', 'www.facebook.com', 'www.tweeter.com', 'www.google.com', 'www.instagram.com', 'www.youtube.com', 'demo-logo.png', 1, '2023-11-05 13:45:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_01_06_170114_create_brands_table', 1),
(4, '2021_01_06_170115_create_units_table', 1),
(5, '2021_01_06_170116_create_categories_table', 1),
(6, '2021_01_06_170117_create_attributes_table', 1),
(7, '2021_01_06_170118_create_attribute_values_table', 1),
(8, '2021_01_06_170119_create_discounts_table', 1),
(9, '2021_01_06_170120_create_vendors_table', 1),
(10, '2021_01_06_170121_create_products_table', 1),
(11, '2021_01_06_170216_create_product_details_table', 1),
(12, '2021_01_06_170253_create_orders_table', 1),
(13, '2021_01_06_170434_create_stocks_table', 1),
(14, '2021_01_06_170435_create_stock_details_table', 1),
(15, '2021_01_06_170436_create_order_details_table', 1),
(16, '2021_01_06_170449_create_sliders_table', 1),
(17, '2021_01_06_170501_create_banners_table', 1),
(18, '2021_01_06_170550_create_shipping_charges_table', 1),
(19, '2021_01_09_060403_create_coupons_table', 1),
(20, '2021_01_09_060620_create_reviews_table', 1),
(21, '2021_01_09_060713_create_offers_table', 1),
(22, '2021_01_13_193853_create_charges_table', 1),
(23, '2021_01_14_091750_create_countries_table', 1),
(24, '2021_01_14_091751_create_suppliers_table', 1),
(25, '2021_01_14_191032_create_purchases_table', 1),
(26, '2021_01_14_191810_create_purchase_details_table', 1),
(27, '2021_01_14_192640_create_carts_table', 1),
(28, '2021_01_16_115147_create_expense_categories_table', 1),
(29, '2021_01_16_115148_create_expenses_table', 1),
(30, '2021_01_16_121138_create_payment_types_table', 1),
(31, '2021_01_16_121139_create_payments_table', 1),
(32, '2021_01_16_123146_create_sales_table', 1),
(33, '2021_01_16_123225_create_sale_details_table', 1),
(34, '2021_01_17_010142_create_customers_table', 1),
(35, '2021_02_06_024232_create_abouts_table', 1),
(36, '2021_03_13_183617_create_temporary_images_table', 1),
(37, '2021_04_03_190139_create_website_controls_table', 1),
(38, '2021_04_05_165600_create_notifications_table', 1),
(39, '2021_04_10_185715_create_supplier_payments_table', 1),
(40, '2021_04_15_101650_create_supplier_payment_details_table', 1),
(41, '2021_04_29_182419_create_product_returns_table', 1),
(42, '2021_05_02_192414_create_product_return_details_table', 1),
(43, '2021_07_02_104751_create_admins_table', 1),
(44, '2021_07_02_195709_create_product_images_table', 1),
(45, '2021_07_06_113924_create_stock_attributes_table', 1),
(46, '2021_09_22_075425_create_footers_table', 1),
(47, '2022_12_20_031232_create_product_ads_table', 1),
(48, '2023_01_26_085604_create_user_reviews_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer_price` decimal(8,2) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active & 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total_discount` decimal(15,2) NOT NULL,
  `sub_total` decimal(15,2) NOT NULL,
  `total` decimal(15,2) NOT NULL,
  `delivery_charge` decimal(15,2) NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0= pending, 1=processing, 1=collected, 1=shipped, 1=complete,',
  `is_completed` int(11) NOT NULL DEFAULT 0,
  `payment_status` int(11) NOT NULL DEFAULT 0 COMMENT '0= pending, 1=completed,',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `stock_details_id` bigint(20) UNSIGNED NOT NULL,
  `attr_value` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(15,2) NOT NULL,
  `discount` decimal(15,2) NOT NULL DEFAULT 0.00,
  `sub_total` decimal(15,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `purchase_id` bigint(20) UNSIGNED NOT NULL,
  `payment_type_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active & 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_types`
--

CREATE TABLE `payment_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT 'Status 1 = Active & 0 = Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `unit_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `other_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0= Pending, 1= Approved, 2= Not Approved and 3 = Rejected',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `uuid`, `user_id`, `vendor_id`, `category_id`, `unit_id`, `brand_id`, `other_brand`, `name`, `description`, `slug`, `sku`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'kjgfdfjzdfgjdjgiirfsg', 4, 1, 1, 1, 1, 'Other Band', 'This is product name', 'This is Description', 'product-slug', '12562', 3, '2023-10-10 04:07:24', '2023-11-09 04:12:15', NULL),
(2, 'kjgfdfjzdfgjdjgiirfsg', 4, 1, 1, 1, 1, 'Other Band2', 'This is product name2', 'This is Description', 'product-slug-2', '125622', 3, '2023-10-10 04:07:24', '2023-11-09 04:08:38', NULL),
(3, 'kjgfdfjzdfgjdjgiirfsg', 4, 1, 1, 1, 1, 'Other Band3', 'This is product name3', 'This is Description3', 'product-slug-3', '125623', 3, '2023-10-10 04:07:24', '2023-11-09 04:08:37', NULL),
(8, '47a3ee36-2899-443c-b8ac-9061091f8ec9', 4, 1, 4, 2, 7, NULL, 'LG 138 LITER CHEST FREEZER SILVER', '<p>LG 138 LITER CHEST FREEZER SILVER<br></p>', 'lg-138-liter-chest-freezer-silver', 'ekrLDqEU7AWlu3i4', 3, '2023-11-09 04:13:30', '2023-11-26 00:39:57', NULL),
(9, '23d2b135-5627-4a83-82b7-e7892d8fd06a', 4, 1, 4, 2, 7, NULL, 'LG INSTAVIEW REFRIGERATOR 675 LITER NOBLE STEEL', '<p>LG INSTAVIEW REFRIGERATOR 675 LITER NOBLE STEEL<br></p>', 'lg-instaview-refrigerator-675-liter-noble-steel', 'vE1qUhlqfteVNvAC', 3, '2023-11-09 04:14:38', '2023-11-09 04:15:44', NULL),
(10, 'e4fa0559-a1ec-42ae-9888-6fef1fbdeb45', 4, 1, 4, 2, 7, NULL, 'Craft Brand 32 inch 4k LED Smart TV - 2GB RAM/6 GB ROM', '<p>Craft Brand 32 inch 4k LED Smart TV - 2GB RAM/6 GB ROM<br></p>', 'craft-brand-32-inch-4k-led-smart-tv-2gb-ram6-gb-rom', '7Bz7qvQjlt5RGBp8', 3, '2023-11-09 04:15:25', '2023-11-26 00:39:06', NULL),
(11, '7bbfa48f-f842-487b-a682-c64ab00d000c', 4, 1, 19, 2, 13, NULL, 'Lenovo IP S145 Intel Core i3-7020U 2.3GHz, 4GB, 1TB HDD, 15.6FHD, Win10 Laptop', '<p>Lenovo IP S145 Intel Core i3-7020U 2.3GHz, 4GB, 1TB HDD, 15.6FHD, Win10 Laptop<br></p>', 'lenovo-ip-s145-intel-core-i3-7020u-23ghz-4gb-1tb-hdd-156fhd-win10-laptop', 'Pn4sQRbCjG0HqgLE', 3, '2023-11-09 04:23:22', '2023-11-26 00:38:01', NULL),
(12, '67b0265f-335b-4207-8c63-a5fb911ce93e', 4, 1, 4, 2, 13, NULL, 'Lenovo K3 Portable Bluetooth Speaker Hifi Stereo Surround Sound Subwoofer Loudspeaker Mini Sound Box - Speaker', '<p>Lenovo K3 Portable Bluetooth Speaker Hifi Stereo Surround Sound Subwoofer Loudspeaker Mini Sound Box - Speaker&nbsp;<br></p>', 'lenovo-k3-portable-bluetooth-speaker-hifi-stereo-surround-sound-subwoofer-loudspeaker-mini-sound-box-speaker', 'uu3AY7CyOvb4Ct6N', 3, '2023-11-09 04:24:23', '2023-11-26 00:36:54', NULL),
(13, '44a9ee0e-6a90-41ae-8597-cd0c24267e05', 4, 1, 4, 2, 13, NULL, 'Lenovo Livepods Airpods_Pro True Wireless Bluetooth Tws Headset Earbuds Earphones - Bluetooth Headphone', '<p>Lenovo Livepods Airpods_Pro True Wireless Bluetooth Tws Headset Earbuds Earphones - Bluetooth Headphone<br></p>', 'lenovo-livepods-airpods-pro-true-wireless-bluetooth-tws-headset-earbuds-earphones-bluetooth-headphone', 'Ftwbd2bYdkqthQgo', 3, '2023-11-09 04:24:56', '2023-11-26 00:35:56', NULL),
(14, 'd919c0dc-a1f8-4397-aaca-304f4dfd3a27', 4, 1, 1, 2, 1, NULL, 'Smile Tshirt for kids boys and girls - T Shirt For Women', '<p>Smile Tshirt for kids boys and girls - T Shirt For Women<br></p>', 'smile-tshirt-for-kids-boys-and-girls-t-shirt-for-women', 'mx0RoVbBAulN8Le9', 3, '2023-11-09 04:45:36', '2023-11-26 00:33:17', NULL),
(15, '10218b8d-7d2b-41ef-ac54-4b831a2b3c61', 4, 1, 8, 2, 13, NULL, 'Haier 43\" FHD Smart Google TV (H43K800FX) with Free Bongo Subscription', '<p>Haier 43\" FHD Smart Google TV (H43K800FX) with Free Bongo Subscription<br></p>', 'haier-43-fhd-smart-google-tv-h43k800fx-with-free-bongo-subscription', 'zXlgZiVJTtbZVYts', 1, '2023-11-26 00:31:20', '2023-11-26 00:32:02', NULL),
(16, '93ec209e-9457-4cdd-ab80-c4d55664a5d5', 4, 1, 2, 2, 1, NULL, 'Smile Tshirt for kids boys and girls - T Shirt For Women', '<p><span style=\"color: rgb(166, 176, 207); text-wrap: nowrap;\">Smile Tshirt for kids boys and girls - T Shirt For Women</span><br></p>', 'smile-tshirt-for-kids-boys-and-girls-t-shirt-for-women', 'r2t9saGxJ5YGxDqw', 1, '2023-11-26 00:35:04', '2023-11-26 00:42:55', NULL),
(17, '04a5298f-d81c-4a24-8f00-8e29899cb9dc', 4, 1, 4, 2, 13, NULL, 'Lenovo Livepods Airpods_Pro True Wireless Bluetooth Tws Headset Earbuds Earphones - Bluetooth Headphone', '<p><span style=\"color: rgb(166, 176, 207); text-wrap: nowrap; background-color: rgba(191, 200, 226, 0.05);\">Lenovo Livepods Airpods_Pro True Wireless Bluetooth Tws Headset Earbuds Earphones - Bluetooth Headphone</span><br></p>', 'lenovo-livepods-airpods-pro-true-wireless-bluetooth-tws-headset-earbuds-earphones-bluetooth-headphone', 'r3oeR6HevJJBEoi6', 1, '2023-11-26 00:35:49', '2023-11-26 00:42:56', NULL),
(18, '12ecc1ad-b0a4-4463-b90d-9f485627248c', 4, 1, 4, 2, 13, NULL, 'Lenovo K3 Portable Bluetooth Speaker Hifi Stereo Surround Sound Subwoofer Loudspeaker Mini Sound Box - Speaker', '<p><span style=\"color: rgb(166, 176, 207); text-wrap: nowrap;\">Lenovo K3 Portable Bluetooth Speaker Hifi Stereo Surround Sound Subwoofer Loudspeaker Mini Sound Box - Speaker</span><br></p>', 'lenovo-k3-portable-bluetooth-speaker-hifi-stereo-surround-sound-subwoofer-loudspeaker-mini-sound-box-speaker', 'ZY6gxAQYkxoGNuOA', 1, '2023-11-26 00:36:47', '2023-11-26 00:42:57', NULL),
(20, 'ce57be53-303e-4acb-8b55-c3ea701315da', 4, 1, 19, 2, 13, NULL, 'Lenovo IP S145 Intel Core i3-7020U 2.3GHz, 4GB, 1TB HDD, 15.6FHD, Win10 Laptop', '<p><span style=\"color: rgb(166, 176, 207); text-wrap: nowrap; background-color: rgba(191, 200, 226, 0.05);\">Lenovo IP S145 Intel Core i3-7020U 2.3GHz, 4GB, 1TB HDD, 15.6FHD, Win10 Laptop</span><br></p>', 'lenovo-ip-s145-intel-core-i3-7020u-23ghz-4gb-1tb-hdd-156fhd-win10-laptop', 'Qre2m5gYD09rAfbk', 1, '2023-11-26 00:38:17', '2023-11-26 00:42:58', NULL),
(21, '931451e1-dc4a-4e56-b921-88281c1bbb79', 4, 1, 8, 2, 7, NULL, 'Craft Brand 32 inch 4k LED Smart TV - 2GB RAM/6 GB ROM', '<p><span style=\"color: rgb(166, 176, 207); text-wrap: nowrap;\">Craft Brand 32 inch 4k LED Smart TV - 2GB RAM/6 GB ROM</span><br></p>', 'craft-brand-32-inch-4k-led-smart-tv-2gb-ram6-gb-rom', 'zxQMD2z7V6Ylprmz', 1, '2023-11-26 00:39:35', '2023-11-26 00:42:58', NULL),
(22, 'a6a4eeb9-42c2-407d-9ed8-1cf32fa93673', 4, 1, 4, 2, 7, NULL, 'LG 138 LITER CHEST FREEZER SILVER', '<p><span style=\"color: rgb(166, 176, 207); text-wrap: nowrap; background-color: rgba(191, 200, 226, 0.05);\">LG 138 LITER CHEST FREEZER SILVER</span><br></p>', 'lg-138-liter-chest-freezer-silver', 'FrR8WMGW3LcdKMiF', 1, '2023-11-26 00:40:39', '2023-11-26 00:42:59', NULL),
(23, '028c3108-5e41-41c8-b871-32a2949d201b', 4, 1, 4, 2, 2, NULL, 'iphone 15 Pro 128GB/256GB/512GB/1TB (USA-LL/A) Smartphone - Unofficial', '<p>iphone 15 Pro 128GB/256GB/512GB/1TB (USA-LL/A) Smartphone - Unofficial<br></p>', 'iphone-15-pro-128gb256gb512gb1tb-usa-lla-smartphone-unofficial', 'X21MPcn1KMC3AQcl', 1, '2023-11-26 00:41:50', '2023-11-26 00:42:54', NULL),
(24, 'b2b7712f-e2c8-43fe-9305-f5f957701cfa', 4, 1, 1, 2, 1, NULL, 'Room slippers winter room slippers winter warm room slippers winter shoes house shoes for men / women', '<p>Room slippers winter room slippers winter warm room slippers winter shoes house shoes for men / women<br></p>', 'room-slippers-winter-room-slippers-winter-warm-room-slippers-winter-shoes-house-shoes-for-men-women', 'dYnb5gRGuZzNXqbp', 1, '2023-11-26 23:47:53', '2023-11-26 23:51:33', NULL),
(25, 'c7e286b3-70ed-48c9-800d-d929ea1241ca', 4, 1, 3, 2, 1, NULL, 'Fashion Women\'s Watch For Men\'s Sports Simple Silicone', '<p>Fashion Women\'s Watch For Men\'s Sports Simple Silicone<br></p>', 'fashion-womens-watch-for-mens-sports-simple-silicone', 'WEWbsFagLqGBrIEU', 1, '2023-11-26 23:49:25', '2023-11-26 23:51:34', NULL),
(26, '9cb17116-6cb2-4532-b689-ecaf4284d5cc', 4, 1, 2, 2, 1, NULL, 'Mulatani Clay Powder Jar - 100Gm', '<p><font color=\"#212121\" face=\"Roboto, -apple-system, BlinkMacSystemFont, Helvetica Neue, Helvetica, sans-serif\"><span style=\"font-size: 22px;\">Mulatani Clay Powder Jar - 100Gm</span></font><br></p>', 'mulatani-clay-powder-jar-100gm', 'WQj7Xi20isKl6imK', 1, '2023-11-26 23:50:41', '2023-11-26 23:51:35', NULL),
(27, 'afda2279-5744-4f07-9614-515d233a20e3', 4, 1, 2, 2, 1, NULL, 'Vaseline Lip Therapy Rossy Lip - 20g', '<p>Vaseline Lip Therapy Rossy Lip - 20g<br></p>', 'vaseline-lip-therapy-rossy-lip-20g', '2a20gRQmZmKleknB', 1, '2023-11-26 23:51:22', '2023-11-26 23:51:36', NULL),
(28, '025d3b65-f0df-4077-a351-1e40d5fd6680', 4, 1, 11, 2, 11, NULL, 'Cutting Board - White', '<p>Cutting Board - White<br></p>', 'cutting-board-white', '7UQEvv0IY5YgxtIk', 1, '2023-11-27 00:15:35', '2023-11-27 00:19:29', NULL),
(29, 'f8c6d469-17c4-43ec-a890-ba532c2acc83', 4, 1, 10, 2, 11, NULL, 'Beautiful Saddam Double Sofa with 2 Seats for Small Families', '<p>Beautiful Saddam Double Sofa with 2 Seats for Small Families<br></p>', 'beautiful-saddam-double-sofa-with-2-seats-for-small-families', 'n7A7nQanbayErPZ7', 1, '2023-11-27 00:16:22', '2023-11-27 00:19:30', NULL),
(30, 'c1da55c6-0116-4ef4-a52c-7fe8ea108896', 4, 1, 6, 2, 13, NULL, 'Lenevo smart tank 500 all-in-one border less printer', '<p>Lenevo&nbsp;smart tank 500 all-in-one border less printer<br></p>', 'lenevo-smart-tank-500-all-in-one-border-less-printer', 'wAlEC1eX63lXZJ8L', 1, '2023-11-27 00:17:07', '2023-11-27 00:19:26', NULL),
(31, 'bbf0551a-242a-4d74-98a8-02d19074d5a8', 4, 1, 10, 2, 11, NULL, 'Bed Side Table SIde box side table Height 18 Inch Width 20 Inch Depth 12.5 Inch', '<p>Bed Side Table SIde box side table Height 18 Inch Width 20 Inch Depth 12.5 Inch&nbsp;<br></p>', 'bed-side-table-side-box-side-table-height-18-inch-width-20-inch-depth-125-inch', 'CIjEFqkXpfveMZSm', 1, '2023-11-27 00:21:52', '2023-11-27 00:23:39', NULL),
(32, '49be905c-0c29-4eb4-beee-e488a7866f56', 4, 1, 10, 2, 11, NULL, 'Stylish and High Quality Daffodil Bed 1 Pair For Home King Size', '<p>Stylish and High Quality Daffodil Bed 1 Pair For Home King Size<br></p>', 'stylish-and-high-quality-daffodil-bed-1-pair-for-home-king-size', 'PDY3ukBD86fWsC6f', 1, '2023-11-27 00:22:25', '2023-11-27 00:22:34', NULL),
(33, '013908aa-88bc-4dca-b57b-bac1de4adca2', 4, 1, 9, 1, 6, NULL, 'ACI Pure Salt 1kg', '<p>ACI Pure Salt 1kg<br></p>', 'aci-pure-salt-1kg', 'QeklJFnoxvT9JKZk', 1, '2023-11-27 00:25:27', '2023-11-27 00:27:01', NULL),
(34, '2d92f1fe-a829-4f73-ae00-7a5c2abbecc1', 4, 1, 9, 1, 6, NULL, 'Chaka Advanced Washing Powder - 500g', '<p>Chaka Advanced Washing Powder - 500g<br></p>', 'chaka-advanced-washing-powder-500g', 'zERWKzGItWrqvSVN', 1, '2023-11-27 00:26:08', '2023-11-27 00:27:03', NULL),
(35, 'ebe63ab3-17a0-4131-8655-35f33eb4f57a', 4, 1, 9, 1, 6, NULL, 'ACI Pure Turmeric (Holud) Powder 200 gm', '<p>ACI Pure Turmeric (Holud) Powder 200 gm<br></p>', 'aci-pure-turmeric-holud-powder-200-gm', 'FxMjS7l3Pm02jQUQ', 1, '2023-11-27 00:26:54', '2023-11-27 00:27:00', NULL),
(36, '00115b11-f678-4484-9a9d-765589f3cb82', 4, 1, 9, 1, 6, NULL, 'Rin Advanced Synthetic Laundry Detergent Powder 2kg', '<p>Rin Advanced Synthetic Laundry Detergent Powder 2kg<br></p>', 'rin-advanced-synthetic-laundry-detergent-powder-2kg', '6behlBMV24qhFZjX', 1, '2023-11-27 00:29:26', '2023-11-27 00:29:28', NULL),
(37, '63d549ef-25a1-4f6c-b135-dcd0c6c01345', 4, 1, 5, 2, 2, NULL, 'iphone 15 Pro 128GB/256GB/512GB/1TB (USA-LL/A) Smartphone - Unofficial', '<p>iphone 15 Pro 128GB/256GB/512GB/1TB (USA-LL/A) Smartphone - Unofficial<br></p>', 'iphone-15-pro-128gb256gb512gb1tb-usa-lla-smartphone-unofficial', 'OmXGPVqCTQ7WPKcd', 1, '2023-11-27 00:53:11', '2023-11-27 00:55:38', NULL),
(38, '248a7eff-40fe-40d3-9a3f-1c2b50255063', 4, 1, 5, 2, 2, NULL, 'Iphone 14 Pro 256GB (USA) Smartphone - Unofficial', '<p>Iphone 14 Pro 256GB (USA) Smartphone - Unofficial<br></p>', 'iphone-14-pro-256gb-usa-smartphone-unofficial', 'AF0YY7mK1kkTsege', 1, '2023-11-27 00:53:43', '2023-11-27 00:55:36', NULL),
(39, '6deffb90-1407-4695-9c0f-1c077cc1c00f', 4, 1, 5, 2, 2, NULL, 'iphone 15 plus 128/256/512GB (USA-LL/A) Smartphone - Unofficial', '<p>iphone 15 plus 128/256/512GB (USA-LL/A) Smartphone - Unofficial<br></p>', 'iphone-15-plus-128256512gb-usa-lla-smartphone-unofficial', 'yGs5DzmJrvLstWyF', 1, '2023-11-27 00:54:15', '2023-11-27 00:55:35', NULL),
(40, '35d298bc-859e-4797-abf2-9011d1c71d70', 4, 1, 5, 2, 2, NULL, 'iPhone 14 Plus 128GB (USA-LLA) Smartphone - Unofficial', '<p>iPhone 14 Plus 128GB (USA-LLA) Smartphone - Unofficial<br></p>', 'iphone-14-plus-128gb-usa-lla-smartphone-unofficial', 'HOgJ2HlwlNS7W5sL', 1, '2023-11-27 00:54:48', '2023-11-27 00:55:34', NULL),
(41, 'cd7c9ed3-0705-4daf-9c75-394d75475acb', 4, 1, 5, 2, 2, NULL, 'Pre-Owned iPhone XS 256GB Gold Grade B+ With SWAP Custom Box', '<p>Pre-Owned iPhone XS 256GB Gold Grade B+ With SWAP Custom Box<br></p>', 'pre-owned-iphone-xs-256gb-gold-grade-b-with-swap-custom-box', 'cKZEgCNl47EQ3iTP', 1, '2023-11-27 00:55:23', '2023-11-27 00:55:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_ads`
--

CREATE TABLE `product_ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `rank` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active and 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `uuid`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'kjgfdfjzdfgjdjgiirfsg', 1, 'product1.jpg', '2023-10-10 04:07:24', '2023-10-10 04:07:24'),
(2, 'kjgfdfjzdfgjdjgiirfsg', 1, 'product2.jpg', '2023-10-10 04:07:24', '2023-10-10 04:07:24'),
(3, 'kjgfdfjzdfgjdjgiirfsg', 1, 'product3.jpg', '2023-10-10 04:07:24', '2023-10-10 04:07:24'),
(8, '56546c71-b96d-4be8-857d-44e3078d51e7', 8, 'product_525f7e83d6031a0cb01fe05eadfac752.jpg', '2023-11-09 04:13:30', '2023-11-09 04:13:30'),
(9, '5732e62c-9f5c-4f70-a38f-4bd31f850403', 9, 'product_19988d0d99b5d6f5dbcf6178a6c4609c.jpg', '2023-11-09 04:14:38', '2023-11-09 04:14:38'),
(10, 'f42f73e7-9b81-48e2-8f4e-8b3e4767ec73', 10, 'product_f894babc54fa2f8107e51f7f8e23b0d7.jpg', '2023-11-09 04:15:25', '2023-11-09 04:15:25'),
(11, '9ed34d17-22f1-42cb-83a0-4b2aab5842d3', 11, 'product_50d359388ce4d202edc737aa255eae66.jpg', '2023-11-09 04:23:22', '2023-11-09 04:23:22'),
(12, 'ac6aca0b-21d3-441d-98d2-0c5659c1987b', 12, 'product_9c9f0f80f596ad87deb553ac26516c8f.jpg', '2023-11-09 04:24:23', '2023-11-09 04:24:23'),
(13, '62b8c7d0-9972-493a-83ee-aea457015928', 13, 'product_c79a827247663dbebc7a99c3c024005c.jpg', '2023-11-09 04:24:56', '2023-11-09 04:24:56'),
(14, '88562877-d7c6-4d00-8860-317d9cef1819', 14, 'product_99f633bbcbcc3583ee1182c7705c7e66.jpg', '2023-11-09 04:45:36', '2023-11-09 04:45:36'),
(15, 'bfb0fb3f-16ab-4c89-b040-127e59ab8f87', 15, 'product_64fac3aeb1521d73ea5cc6999c56b8a2.jpg', '2023-11-26 00:31:20', '2023-11-26 00:31:20'),
(16, '774e808d-8e7b-4176-bd94-6ed5ad65d082', 16, 'product_43fca5a601878c6dabffd94ef92dd846.jpg', '2023-11-26 00:35:04', '2023-11-26 00:35:04'),
(17, '422a12dc-60bc-44c1-b934-789c08067ece', 17, 'product_639b48a335d45059fa1df4b7ceb02bc3.jpg', '2023-11-26 00:35:49', '2023-11-26 00:35:49'),
(18, '19b4bc79-ce80-4882-a40b-0b4a10f08145', 18, 'product_f89063efff715f14b42c1581770d00f2.jpg', '2023-11-26 00:36:47', '2023-11-26 00:36:47'),
(19, '609894dd-42b3-4bfb-aaa8-49d343f8d7cd', 20, 'product_2746e4b431eaf4d83048278c1dc43b91.jpg', '2023-11-26 00:38:17', '2023-11-26 00:38:17'),
(20, '23eb852d-042d-42e0-8818-1229e1c0ab3f', 21, 'product_608c7e0c6cdfbf86aec32183630d901a.jpg', '2023-11-26 00:39:35', '2023-11-26 00:39:35'),
(21, 'c82fd235-2867-457a-b8b2-310bb0c212ce', 22, 'product_349cd362964618816fc939cbc2781a22.jpg', '2023-11-26 00:40:39', '2023-11-26 00:40:39'),
(22, '7b187a1e-65a4-48af-9614-a3523ef95787', 23, 'product_e90991d910c3739c6249da566f02e840.jpg', '2023-11-26 00:41:50', '2023-11-26 00:41:50'),
(23, '2b64bbf8-8271-485c-91a6-519e418774af', 24, 'product_0ccacca752329c3165d84c243b49bbae.jpg', '2023-11-26 23:47:53', '2023-11-26 23:47:53'),
(24, '18a89488-0031-4542-9ecc-a0d82cff00ab', 25, 'product_ace2fbd40cd2cddbb4a9c95e01c569cf.jpg', '2023-11-26 23:49:25', '2023-11-26 23:49:25'),
(25, '05119f4c-aaf5-44f4-9f58-3df6be937ef8', 26, 'product_369abb4b8254f0b2224fc22e2daf85a9.jpg', '2023-11-26 23:50:41', '2023-11-26 23:50:41'),
(26, '236072a2-7dec-401b-811a-9c361b5166ac', 27, 'product_546fda463cecdacec0ae396ac4f031d6.jpg', '2023-11-26 23:51:22', '2023-11-26 23:51:22'),
(27, '69fcef29-1ce9-4856-9bd2-2de5ae38c42e', 28, 'product_680fbc2c61fdbd0e26cf70bc1177596b.jpg', '2023-11-27 00:15:35', '2023-11-27 00:15:35'),
(28, '11d93694-b32a-41dc-b0dc-ba642fec759b', 29, 'product_acb9f42fecd2e83303731b941a299aec.jpg', '2023-11-27 00:16:22', '2023-11-27 00:16:22'),
(29, '7f35ff9d-5e0f-4875-a965-75817ad8b840', 30, 'product_0b46a5f786e26651dac7bcc89c8d0241.jpg', '2023-11-27 00:17:07', '2023-11-27 00:17:07'),
(30, '849e74fb-9a5e-4b00-b6fc-505ef087922c', 31, 'product_47927351c66f21261a9f0be035362f4c.jpg', '2023-11-27 00:21:52', '2023-11-27 00:21:52'),
(31, 'b40ec047-0270-4af9-a443-74a5960846ac', 32, 'product_33d8edf956e64fb801ab44911cecfb4e.jpg', '2023-11-27 00:22:25', '2023-11-27 00:22:25'),
(32, 'ef969c1e-950d-43cf-9c97-af05c8dff7f7', 33, 'product_641a6338bfde6834d945081dbc13eaae.jpg', '2023-11-27 00:25:27', '2023-11-27 00:25:27'),
(33, 'bd8751e7-9fe2-4f65-92c0-11b96d8eb7d7', 34, 'product_c7a78b7242584877bb0275278fcacef0.jpg', '2023-11-27 00:26:08', '2023-11-27 00:26:08'),
(34, '6a7d1390-2232-49c9-8ce7-4ae7e10ebade', 35, 'product_a25f12d3abe3e7572cac505d3a3decf7.jpg', '2023-11-27 00:26:54', '2023-11-27 00:26:54'),
(35, '01a9e474-69a0-4b2a-b7c7-5e8e3f1deeb1', 36, 'product_2b87e06fae8b1c18187e727b6eb1132d.jpg', '2023-11-27 00:29:26', '2023-11-27 00:29:26'),
(36, 'cd861b80-d1b1-4196-a55c-953c98b55e02', 37, 'product_11740fc7918aa133fa19431229ff06de.jpg', '2023-11-27 00:53:11', '2023-11-27 00:53:11'),
(37, '2b7268a9-db38-436c-b83e-97d1af6b9c0e', 38, 'product_a52ee677b41fb64ab73a9a452ac53303.jpg', '2023-11-27 00:53:43', '2023-11-27 00:53:43'),
(38, 'f2cfc755-3a79-4339-88c0-095c321feff1', 39, 'product_ea2a4854f3cee28fc22ddb23dd759ff8.jpg', '2023-11-27 00:54:15', '2023-11-27 00:54:15'),
(39, 'd518f4fa-8373-4ec7-bbec-4408b04292fb', 40, 'product_c0af341e6dbc0327e461efd965263f73.jpg', '2023-11-27 00:54:48', '2023-11-27 00:54:48'),
(40, '8295dc9a-bab5-472c-b1e5-d4d714b6a291', 41, 'product_f084bbcebeca7e5b2d4498e412cf7e74.jpg', '2023-11-27 00:55:23', '2023-11-27 00:55:23');

-- --------------------------------------------------------

--
-- Table structure for table `product_returns`
--

CREATE TABLE `product_returns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `stock_details_id` int(11) NOT NULL,
  `purchase_price` decimal(8,2) NOT NULL,
  `returned_quantity` int(11) NOT NULL,
  `remaining_quantity` int(11) NOT NULL,
  `total_amount` decimal(8,2) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_return_details`
--

CREATE TABLE `product_return_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_return_id` bigint(20) UNSIGNED NOT NULL,
  `returned_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `chalan_no` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` decimal(8,2) DEFAULT NULL,
  `total` decimal(15,2) NOT NULL,
  `payment_status` int(11) NOT NULL DEFAULT 0 COMMENT '0= pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `purchase_id` bigint(20) UNSIGNED NOT NULL,
  `attr_val_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `buy_price` decimal(8,2) NOT NULL,
  `sell_price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '1=active & 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total_price` decimal(8,2) NOT NULL,
  `total_discount` decimal(8,2) NOT NULL,
  `total_vat` decimal(8,2) DEFAULT NULL,
  `paid` decimal(8,2) NOT NULL,
  `due` decimal(8,2) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active & 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sale_details`
--

CREATE TABLE `sale_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `sale_price` decimal(8,2) NOT NULL,
  `discount` decimal(8,2) NOT NULL,
  `vat` decimal(8,2) DEFAULT NULL,
  `sub_total` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_charges`
--

CREATE TABLE `shipping_charges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_charge_in_city` decimal(16,2) NOT NULL,
  `delivery_charge_around_city` decimal(16,2) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active & 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT 10,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active & 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `uuid`, `user_id`, `title`, `description`, `image`, `button_text`, `button_link`, `priority`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'e30395d3-704c-45e8-af06-2ae74707ac25', 2, 'Friday Offer', 'slider one', 'category_3fa7906f2d054d3cb09ae06d7c8c223c1701064678.jpg', 'New Collections', 'ssss', 2, 1, '2023-11-05 08:22:27', '2023-11-26 23:57:58', NULL),
(2, '16a58057-b151-4337-adbb-a83231d03586', 1, 'Travel Explore', 'Add', 'category_94cb7481252092748b8c3b670406a4041701064697.jpg', 'Banner', 'aa', 1, 1, '2023-11-09 04:01:29', '2023-11-26 23:58:17', NULL),
(3, '0586c00c-18b6-4a34-ac34-c9fa6ed6590a', 1, 'Black Friday Sale', 'Slider', 'category_453b0c0bdb626d20ef2239160a426bfb1701064522.jpg', 'Banner', 'fff', 3, 1, '2023-11-09 04:07:03', '2023-11-26 23:55:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `total_in` int(11) NOT NULL DEFAULT 0,
  `total_out` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `uuid`, `user_id`, `product_id`, `total_in`, `total_out`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'kjgfdfjzdfgjdjgiirfsg', 1, 1, 100, 0, '2023-10-10 04:07:24', '2023-10-10 04:07:24', NULL),
(2, 'kjgfdfjzdfgjdjgiirfsg', 1, 2, 200, 0, '2023-10-10 04:07:24', '2023-10-10 04:07:24', NULL),
(3, 'kjgfdfjzdfgjdjgiirfsg', 1, 3, 500, 0, '2023-10-10 04:07:24', '2023-10-10 04:07:24', NULL),
(8, 'caf921db-fcd5-4ede-be17-f7b61b2bd7cc', 4, 11, 100, 0, '2023-11-21 01:05:55', '2023-11-21 01:05:55', NULL),
(9, '99889cf8-12a7-404a-b06c-ccda967e20e5', 4, 15, 100, 0, '2023-11-26 00:32:25', '2023-11-26 00:32:25', NULL),
(10, '2763b584-80f0-4111-a6b3-986c52ce5780', 4, 16, 22, 0, '2023-11-26 00:43:18', '2023-11-26 00:43:18', NULL),
(11, '6340ff71-a92f-41b3-b359-8cc57e0dceb7', 4, 17, 33, 0, '2023-11-26 00:44:03', '2023-11-26 00:44:03', NULL),
(12, '1ae31618-c12f-46b2-a59d-350cac8ad018', 4, 18, 11, 0, '2023-11-26 00:45:37', '2023-11-26 00:45:37', NULL),
(13, '56df2428-b6c4-41d5-8a29-68288187e1e4', 4, 21, 8, 0, '2023-11-26 00:46:26', '2023-11-26 00:46:26', NULL),
(14, 'b04f5802-8757-4d5c-8e83-953c0b65ff9a', 4, 22, 22, 0, '2023-11-26 00:46:38', '2023-11-26 00:46:38', NULL),
(15, '8349e7af-a907-41b1-9666-e8456969bee0', 4, 23, 52, 0, '2023-11-26 00:46:51', '2023-11-26 00:46:51', NULL),
(16, '89950b22-c028-42a4-b440-8cfc799be125', 4, 25, 120, 0, '2023-11-26 23:51:56', '2023-11-26 23:51:56', NULL),
(17, 'de5d4c0a-4880-4fb9-9759-e7c43a098d18', 4, 24, 20, 0, '2023-11-26 23:52:27', '2023-11-26 23:52:27', NULL),
(18, '967e9cd5-02f7-4224-a64b-15045e1ab0ed', 4, 26, 60, 0, '2023-11-26 23:52:43', '2023-11-26 23:52:43', NULL),
(19, '4cd8f04a-885a-4772-9a35-c57c64de2151', 4, 27, 33, 0, '2023-11-26 23:52:57', '2023-11-26 23:52:57', NULL),
(20, '2b10d4ba-2b91-422b-93ce-fc0b07a7d549', 4, 28, 111, 0, '2023-11-27 00:19:49', '2023-11-27 00:19:49', NULL),
(21, '89efc352-2cf4-47ab-84e3-c6e7ce2943b6', 4, 29, 4, 0, '2023-11-27 00:20:06', '2023-11-27 00:20:06', NULL),
(22, '96e3f456-a95d-4e33-b06c-e47b528ca47d', 4, 30, 52, 0, '2023-11-27 00:20:14', '2023-11-27 00:20:14', NULL),
(23, 'd61a21a6-62a7-43bb-9c8b-4e75a6123ad5', 4, 31, 52, 0, '2023-11-27 00:22:51', '2023-11-27 00:22:51', NULL),
(24, '75a4d626-b761-4a70-9b3a-4c544ffd3d2b', 4, 32, 14, 0, '2023-11-27 00:23:03', '2023-11-27 00:23:03', NULL),
(25, 'efbbc16a-dec2-4d6f-a7f5-5e03dc95b56d', 4, 33, 100, 0, '2023-11-27 00:27:23', '2023-11-27 00:27:23', NULL),
(26, '878a96b1-53d4-4214-a581-392b3cfcb860', 4, 34, 12, 0, '2023-11-27 00:27:35', '2023-11-27 00:27:35', NULL),
(27, '276d7476-67be-4223-bc0f-c37d0de425f3', 4, 35, 25, 0, '2023-11-27 00:27:47', '2023-11-27 00:27:47', NULL),
(28, '89976c41-ddc7-4d5d-83f9-a1c1be0559f1', 4, 36, 52, 0, '2023-11-27 00:29:41', '2023-11-27 00:29:41', NULL),
(29, '242f397f-34be-4261-b169-f823ae82de2b', 4, 37, 50, 0, '2023-11-27 00:56:12', '2023-11-27 00:56:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stock_attributes`
--

CREATE TABLE `stock_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `stock_details_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `attr_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock_details`
--

CREATE TABLE `stock_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `attr_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `total_in` int(11) NOT NULL DEFAULT 0,
  `total_out` int(11) NOT NULL DEFAULT 0,
  `price` decimal(8,2) NOT NULL,
  `discount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `discount_percentage` decimal(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stock_details`
--

INSERT INTO `stock_details` (`id`, `uuid`, `stock_id`, `user_id`, `product_id`, `attr_id`, `quantity`, `total_in`, `total_out`, `price`, `discount`, `discount_percentage`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'kjgfdfjzdfgjdjgiirfsg', 1, 1, 1, NULL, 100, 0, 0, '500.00', '0.00', '0.00', '2023-10-10 04:07:24', '2023-10-10 04:07:24', NULL),
(2, 'kjgfdfjzdfgjdjgiirfsg', 1, 1, 2, NULL, 100, 0, 0, '1000.00', '0.00', '0.00', '2023-10-10 04:07:24', '2023-10-10 04:07:24', NULL),
(3, 'kjgfdfjzdfgjdjgiirfsg', 1, 1, 3, NULL, 500, 0, 0, '2000.00', '0.00', '0.00', '2023-10-10 04:07:24', '2023-10-10 04:07:24', NULL),
(8, 'ad0d6e3c-d37b-4566-8072-759ad484984f', 8, 4, 11, NULL, 100, 100, 0, '25410.00', '10.00', '0.04', '2023-11-21 01:05:55', '2023-11-21 01:05:55', NULL),
(9, '5d5249fe-56eb-4c8d-874d-ec7d3d21caa5', 9, 4, 15, NULL, 100, 100, 0, '245555.00', '10.00', '0.00', '2023-11-26 00:32:25', '2023-11-26 00:32:25', NULL),
(10, '625f2f7a-9930-4a08-af4a-6ddb3c26c672', 10, 4, 16, NULL, 22, 22, 0, '2323.00', '2.00', '0.09', '2023-11-26 00:43:18', '2023-11-26 00:43:18', NULL),
(11, 'cccd894e-35b9-42e3-85d8-d5a1dd9d33e4', 11, 4, 17, NULL, 33, 33, 0, '322332.00', '20.00', '0.01', '2023-11-26 00:44:03', '2023-11-26 00:44:03', NULL),
(12, '462a4b04-ea17-47a7-a566-9a06eb940bef', 12, 4, 18, NULL, 11, 11, 0, '53300.00', '5.00', '0.01', '2023-11-26 00:45:37', '2023-11-26 00:45:37', NULL),
(13, '1814beb0-db03-4048-9551-bdef93993395', 13, 4, 21, NULL, 8, 8, 0, '25022.00', '5.00', '0.02', '2023-11-26 00:46:26', '2023-11-26 00:46:26', NULL),
(14, '06a2bd2c-d745-4aea-b4ef-5a99612cd941', 14, 4, 22, NULL, 22, 22, 0, '38100.00', '10.00', '0.03', '2023-11-26 00:46:38', '2023-11-26 00:46:38', NULL),
(15, '4c4c5b23-1f07-45c0-a7ed-6cc9b3f080d3', 15, 4, 23, NULL, 52, 52, 0, '105422.00', '10.00', '0.01', '2023-11-26 00:46:51', '2023-11-26 00:46:51', NULL),
(16, '5c9ef68e-1570-4197-9de6-d7d6fc61dd4d', 16, 4, 25, NULL, 120, 120, 0, '2587.00', '50.00', '1.93', '2023-11-26 23:51:56', '2023-11-26 23:51:56', NULL),
(17, '69508033-2ca9-4b62-8767-b97e5bd6925f', 17, 4, 24, NULL, 20, 20, 0, '250.00', '20.00', '8.00', '2023-11-26 23:52:27', '2023-11-26 23:52:27', NULL),
(18, '30a689f8-5a46-4d0d-bdfc-133473ab4d37', 18, 4, 26, NULL, 60, 60, 0, '350.00', '10.00', '2.86', '2023-11-26 23:52:43', '2023-11-26 23:52:43', NULL),
(19, 'abdb1c26-7007-4347-b66d-5ba2c26d529d', 19, 4, 27, NULL, 33, 33, 0, '280.00', '20.00', '7.14', '2023-11-26 23:52:57', '2023-11-26 23:52:57', NULL),
(20, '0088547e-8d3b-42d3-bf8c-fedba93012a4', 20, 4, 28, NULL, 111, 111, 0, '850.00', '10.00', '1.18', '2023-11-27 00:19:49', '2023-11-27 00:19:49', NULL),
(21, '2be9119b-a7f4-4b7b-9c54-56f0e0e8b9d9', 21, 4, 29, NULL, 4, 4, 0, '45775.00', '20.00', '0.04', '2023-11-27 00:20:06', '2023-11-27 00:20:06', NULL),
(22, 'b142f844-a0c7-4ca1-ae14-b21f9a66e358', 22, 4, 30, NULL, 52, 52, 0, '45744.00', '10.00', '0.02', '2023-11-27 00:20:14', '2023-11-27 00:20:14', NULL),
(23, '548163ed-a919-4443-a50f-33a27a4c2f80', 23, 4, 31, NULL, 52, 52, 0, '55444.00', '20.00', '0.04', '2023-11-27 00:22:51', '2023-11-27 00:22:51', NULL),
(24, 'fc92ce17-0642-487f-9d35-ea8734bb69a4', 24, 4, 32, NULL, 14, 14, 0, '7555.00', '10.00', '0.13', '2023-11-27 00:23:03', '2023-11-27 00:23:03', NULL),
(25, '31f61062-0f95-4c39-8ce1-f1991341b112', 25, 4, 33, NULL, 100, 100, 0, '100.00', '10.00', '10.00', '2023-11-27 00:27:23', '2023-11-27 00:27:23', NULL),
(26, 'e15177b2-dd9a-477b-ba5e-8e319e469565', 26, 4, 34, NULL, 12, 12, 0, '120.00', '10.00', '8.33', '2023-11-27 00:27:35', '2023-11-27 00:27:35', NULL),
(27, 'd1d4a16f-d563-4218-96a4-28af56874b54', 27, 4, 35, NULL, 25, 25, 0, '100.00', '7.00', '7.00', '2023-11-27 00:27:47', '2023-11-27 00:27:47', NULL),
(28, '8d82b222-8d6c-4b1b-a41c-682954942330', 28, 4, 36, NULL, 52, 52, 0, '350.00', '10.00', '2.86', '2023-11-27 00:29:41', '2023-11-27 00:29:41', NULL),
(29, 'fe8d123c-5eb4-4f8b-a069-2c199f30d889', 29, 4, 37, NULL, 50, 50, 0, '120000.00', '500.00', '0.42', '2023-11-27 00:56:12', '2023-11-27 00:56:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1= active & 0= inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_payments`
--

CREATE TABLE `supplier_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `chalan_no` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_amount` decimal(8,2) NOT NULL,
  `pay_amount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `due_amount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `discount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_payment_details`
--

CREATE TABLE `supplier_payment_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `supplier_payment_id` bigint(20) UNSIGNED NOT NULL,
  `payment_no` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chalan_no` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temporary_images`
--

CREATE TABLE `temporary_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `folder` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 =active & 0 = inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `uuid`, `user_id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'kjgfdfjzdfgjdjgiirfsg', 1, 'KG', 1, '2023-10-10 04:07:24', '2023-10-10 04:07:24', NULL),
(2, 'kjgfdfjzdfgjdjgiirfsg', 1, 'PCS', 1, '2023-10-10 04:07:24', '2023-10-10 04:07:24', NULL),
(3, 'kjgfdfjzdfgjdjgiirfsg', 1, 'Litter', 1, '2023-10-10 04:07:24', '2023-10-10 04:07:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` enum('Admin','Vendor','Customer') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified` tinyint(4) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `email_verification_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active' COMMENT 'Active & Inactive',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uuid`, `name`, `user_name`, `phone`, `email`, `password`, `user_type`, `email_verified`, `email_verified_at`, `email_verification_token`, `status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'exampleofuuid', 'Super Admin', 'super_admin', '01858721723', 'superadmin@gmail.com', '$2y$10$.g0xvmT6YFJmVU94/pj9f.zihMb/IgNQbOdCCxw.bDlxwZsJnAJ4u', 'Admin', 0, NULL, NULL, 'Active', NULL, '2023-10-10 04:07:23', '2023-10-10 04:07:23', NULL),
(2, 'exampleofuuid', 'Admin', 'admin', '01858721724', 'admin@gmail.com', '$2y$10$gJ.HWWTAFCCBHZjd98cP7.ru7PW4H77pWebLZvBR71zTDiuuReCBC', 'Admin', 0, NULL, NULL, 'Active', NULL, '2023-10-10 04:07:23', '2023-10-10 04:07:23', NULL),
(3, 'exampleofuuid', 'Sub Admin', 'sub_admin', '01858721725', 'subadmin@gmail.com', '$2y$10$GOtkZmW0xQlfbwKtTFf/FuSOjKThtp4HH00LYpV3OGAIcu9MphgUm', 'Admin', 0, NULL, NULL, 'Active', NULL, '2023-10-10 04:07:23', '2023-10-10 04:07:23', NULL),
(4, 'exampleofuuid', 'Vendor1', 'Vendor_1', '01858721726', 'vendor1@gmail.com', '$2y$10$r/u3RVKnLQzuNuqY4dmKo.WEupwJpsrYUc6vL2YQuBxi3pVjpC9YK', 'Vendor', 0, NULL, NULL, 'Active', NULL, '2023-10-10 04:07:23', '2023-10-10 04:07:23', NULL),
(5, '39554cbe-404b-431c-aea1-4de0960cf116', 'saiful', 'saiful', '01949384257', 'saifulislamrazib57@gmail.com', '$2y$10$iJ69KZuS8i4rM9tyKu/V2OoXGkSAXaDMajYv.iGArx01kV21jQrr2', 'Vendor', 0, NULL, 'uYfgDTI3ElVotMkGvtddzclu9qsNlFF6', 'Active', NULL, '2023-11-21 00:42:21', '2023-11-21 00:42:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_reviews`
--

CREATE TABLE `user_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL DEFAULT 0,
  `comments` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active and 0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `store_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mac_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Inactive' COMMENT 'Active & Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `uuid`, `user_id`, `address`, `store_name`, `store_address`, `store_logo`, `ip_address`, `mac_address`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'exampleofuuid', 4, 'Dhaka', NULL, NULL, NULL, '127.0.0.1', 'linux', 'Inactive', '2023-10-10 04:07:23', '2023-10-10 04:07:23', NULL),
(2, '8890e727-7fb6-4df4-8bc3-80b7360c2d10', 5, NULL, NULL, NULL, NULL, '127.0.0.1', '00-FF-1F-92-B6-45   Media disconnected', 'Inactive', '2023-11-21 00:42:21', '2023-11-21 00:42:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `website_controls`
--

CREATE TABLE `website_controls` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admins_user_id_foreign` (`user_id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attributes_user_id_foreign` (`user_id`),
  ADD KEY `attributes_category_id_foreign` (`category_id`);

--
-- Indexes for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_values_attribute_id_foreign` (`attribute_id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banners_user_id_foreign` (`user_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brands_user_id_foreign` (`user_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`),
  ADD KEY `carts_stock_details_id_foreign` (`stock_details_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

--
-- Indexes for table `charges`
--
ALTER TABLE `charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `countries_code_index` (`code`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coupons_user_id_foreign` (`user_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_user_id_foreign` (`user_id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `discounts_code_unique` (`code`),
  ADD KEY `discounts_user_id_foreign` (`user_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expenses_user_id_foreign` (`user_id`),
  ADD KEY `expenses_expense_category_id_foreign` (`expense_category_id`);

--
-- Indexes for table `expense_categories`
--
ALTER TABLE `expense_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expense_categories_user_id_foreign` (`user_id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `footers_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_stock_details_id_foreign` (`stock_details_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_user_id_foreign` (`user_id`),
  ADD KEY `payments_supplier_id_foreign` (`supplier_id`),
  ADD KEY `payments_purchase_id_foreign` (`purchase_id`),
  ADD KEY `payments_payment_type_id_foreign` (`payment_type_id`);

--
-- Indexes for table `payment_types`
--
ALTER TABLE `payment_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_sku_unique` (`sku`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_vendor_id_foreign` (`vendor_id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_unit_id_foreign` (`unit_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `product_ads`
--
ALTER TABLE `product_ads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_ads_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_returns`
--
ALTER TABLE `product_returns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_returns_user_id_foreign` (`user_id`),
  ADD KEY `product_returns_supplier_id_foreign` (`supplier_id`);

--
-- Indexes for table `product_return_details`
--
ALTER TABLE `product_return_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_return_details_product_return_id_foreign` (`product_return_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchases_supplier_id_foreign` (`supplier_id`),
  ADD KEY `purchases_product_id_foreign` (`product_id`),
  ADD KEY `purchases_user_id_foreign` (`user_id`);

--
-- Indexes for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchase_details_supplier_id_foreign` (`supplier_id`),
  ADD KEY `purchase_details_purchase_id_foreign` (`purchase_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_user_id_foreign` (`user_id`);

--
-- Indexes for table `sale_details`
--
ALTER TABLE `sale_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sale_details_sale_id_foreign` (`sale_id`),
  ADD KEY `sale_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `shipping_charges`
--
ALTER TABLE `shipping_charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_user_id_foreign` (`user_id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stocks_user_id_foreign` (`user_id`),
  ADD KEY `stocks_product_id_foreign` (`product_id`);

--
-- Indexes for table `stock_attributes`
--
ALTER TABLE `stock_attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stock_attributes_user_id_foreign` (`user_id`),
  ADD KEY `stock_attributes_stock_details_id_foreign` (`stock_details_id`),
  ADD KEY `stock_attributes_product_id_foreign` (`product_id`);

--
-- Indexes for table `stock_details`
--
ALTER TABLE `stock_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stock_details_stock_id_foreign` (`stock_id`),
  ADD KEY `stock_details_user_id_foreign` (`user_id`),
  ADD KEY `stock_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suppliers_country_id_foreign` (`country_id`);

--
-- Indexes for table `supplier_payments`
--
ALTER TABLE `supplier_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supplier_payments_user_id_foreign` (`user_id`),
  ADD KEY `supplier_payments_supplier_id_foreign` (`supplier_id`);

--
-- Indexes for table `supplier_payment_details`
--
ALTER TABLE `supplier_payment_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supplier_payment_details_user_id_foreign` (`user_id`),
  ADD KEY `supplier_payment_details_supplier_payment_id_foreign` (`supplier_payment_id`);

--
-- Indexes for table `temporary_images`
--
ALTER TABLE `temporary_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD KEY `units_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_reviews`
--
ALTER TABLE `user_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_reviews_user_id_foreign` (`user_id`),
  ADD KEY `user_reviews_product_id_foreign` (`product_id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vendors_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attribute_values`
--
ALTER TABLE `attribute_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `charges`
--
ALTER TABLE `charges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense_categories`
--
ALTER TABLE `expense_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_types`
--
ALTER TABLE `payment_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `product_ads`
--
ALTER TABLE `product_ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `product_returns`
--
ALTER TABLE `product_returns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_return_details`
--
ALTER TABLE `product_return_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_details`
--
ALTER TABLE `purchase_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sale_details`
--
ALTER TABLE `sale_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipping_charges`
--
ALTER TABLE `shipping_charges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `stock_attributes`
--
ALTER TABLE `stock_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock_details`
--
ALTER TABLE `stock_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier_payments`
--
ALTER TABLE `supplier_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier_payment_details`
--
ALTER TABLE `supplier_payment_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temporary_images`
--
ALTER TABLE `temporary_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_reviews`
--
ALTER TABLE `user_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attributes`
--
ALTER TABLE `attributes`
  ADD CONSTRAINT `attributes_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attributes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD CONSTRAINT `attribute_values_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `banners`
--
ALTER TABLE `banners`
  ADD CONSTRAINT `banners_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `brands`
--
ALTER TABLE `brands`
  ADD CONSTRAINT `brands_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_stock_details_id_foreign` FOREIGN KEY (`stock_details_id`) REFERENCES `stock_details` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `coupons`
--
ALTER TABLE `coupons`
  ADD CONSTRAINT `coupons_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `discounts`
--
ALTER TABLE `discounts`
  ADD CONSTRAINT `discounts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_expense_category_id_foreign` FOREIGN KEY (`expense_category_id`) REFERENCES `expense_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `expenses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `expense_categories`
--
ALTER TABLE `expense_categories`
  ADD CONSTRAINT `expense_categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `footers`
--
ALTER TABLE `footers`
  ADD CONSTRAINT `footers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_stock_details_id_foreign` FOREIGN KEY (`stock_details_id`) REFERENCES `stock_details` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_payment_type_id_foreign` FOREIGN KEY (`payment_type_id`) REFERENCES `payment_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_purchase_id_foreign` FOREIGN KEY (`purchase_id`) REFERENCES `purchases` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_unit_id_foreign` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_vendor_id_foreign` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_ads`
--
ALTER TABLE `product_ads`
  ADD CONSTRAINT `product_ads_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_returns`
--
ALTER TABLE `product_returns`
  ADD CONSTRAINT `product_returns_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_returns_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_return_details`
--
ALTER TABLE `product_return_details`
  ADD CONSTRAINT `product_return_details_product_return_id_foreign` FOREIGN KEY (`product_return_id`) REFERENCES `product_returns` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `purchases_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `purchases_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD CONSTRAINT `purchase_details_purchase_id_foreign` FOREIGN KEY (`purchase_id`) REFERENCES `purchases` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `purchase_details_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sale_details`
--
ALTER TABLE `sale_details`
  ADD CONSTRAINT `sale_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sale_details_sale_id_foreign` FOREIGN KEY (`sale_id`) REFERENCES `sales` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sliders`
--
ALTER TABLE `sliders`
  ADD CONSTRAINT `sliders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stocks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `stock_attributes`
--
ALTER TABLE `stock_attributes`
  ADD CONSTRAINT `stock_attributes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stock_attributes_stock_details_id_foreign` FOREIGN KEY (`stock_details_id`) REFERENCES `stock_details` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stock_attributes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `stock_details`
--
ALTER TABLE `stock_details`
  ADD CONSTRAINT `stock_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stock_details_stock_id_foreign` FOREIGN KEY (`stock_id`) REFERENCES `stocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stock_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD CONSTRAINT `suppliers_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `supplier_payments`
--
ALTER TABLE `supplier_payments`
  ADD CONSTRAINT `supplier_payments_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `supplier_payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `supplier_payment_details`
--
ALTER TABLE `supplier_payment_details`
  ADD CONSTRAINT `supplier_payment_details_supplier_payment_id_foreign` FOREIGN KEY (`supplier_payment_id`) REFERENCES `supplier_payments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `supplier_payment_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `units`
--
ALTER TABLE `units`
  ADD CONSTRAINT `units_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_reviews`
--
ALTER TABLE `user_reviews`
  ADD CONSTRAINT `user_reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vendors`
--
ALTER TABLE `vendors`
  ADD CONSTRAINT `vendors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
