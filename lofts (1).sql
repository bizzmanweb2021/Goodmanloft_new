-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2022 at 11:54 AM
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
-- Database: `lofts`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `Description` longtext NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `updated_at` datetime(6) NOT NULL,
  `created_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `Description`, `Title`, `Image`, `updated_at`, `created_at`) VALUES
(1, 'Inspired by nature, Goodman’s loft embodies a raw and natural approach to your sacred living\r\nenvironment. The brand represents the apotheosis of natural, handcrafted furniture as well as home\r\naccessories made from quality materials with a clean, elegant and bohemian-inspired style. From\r\nsustainable rattan to reclaimed teakwood, every single item is beautifully handmade by our trusted\r\ngroup of talented craftsmen and craftswomen. Every single product in our curation is painstakingly\r\nhandmade, so each piece has a character of its own. The slight imperfections ensure that each piece\r\nhas its own human touch and is just as perfect, if not better.\r\nShop online to view our entire collection or visit us at our showroom located One Pemimpin to see and\r\nfeel our products before you purchase!', 'About Goodman\'s Loft', 'images/about-us.jpg', '2022-04-13 05:33:13.000000', '2022-04-13 05:33:13.000000');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$TOvbSWeUOcXBHGB/Y7J1S.59/9i1EcYyiAsvvgSeE8WLhyJ2xvAS6'),
(2, 'admin', 'admin123@gmail.com', '$2y$10$TOvbSWeUOcXBHGB/Y7J1S.59/9i1EcYyiAsvvgSeE8WLhyJ2xvAS6');

-- --------------------------------------------------------

--
-- Table structure for table `billing_addresses`
--

CREATE TABLE `billing_addresses` (
  `user_id` bigint(20) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `id` bigint(20) NOT NULL,
  `updated_at` datetime(6) NOT NULL,
  `created_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing_addresses`
--

INSERT INTO `billing_addresses` (`user_id`, `full_name`, `email`, `phone`, `country`, `address`, `city`, `state`, `zip`, `id`, `updated_at`, `created_at`) VALUES
(1, 'test123', 'test123@gmail.com', '8967565467', '1', 'Bihar', 'Muzaffarpur', 'Bihar', '785300', 1, '2022-03-16 10:48:59.000000', '2022-03-16 10:48:59.000000'),
(1, 'test123', 'test123@gmail.com', '8967565467', '1', 'Bihar', 'Muzaffarpur', 'Bihar', '785300', 2, '2022-03-16 10:49:56.000000', '2022-03-16 10:49:56.000000'),
(1, 'test123', 'test123@gmail.com', '8967565467', '1', 'Bihar', 'Muzaffarpur', 'Bihar', '785300', 3, '2022-03-16 10:53:25.000000', '2022-03-16 10:53:25.000000'),
(1, 'test123', 'test123@gmail.com', '8967565467', '1', 'Bihar', 'Muzaffarpur', 'Bihar', '785300', 4, '2022-03-16 10:54:09.000000', '2022-03-16 10:54:09.000000'),
(1, 'test123', 'test123@gmail.com', '8967565467', '1', 'hfshgh', 'Erode', 'Tamilnadu', '638455', 5, '2022-03-23 09:53:24.000000', '2022-03-23 09:53:24.000000'),
(1, 'test123', 'test123@gmail.com', '8967565467', '4', 'Bihar', 'Bihar', 'Bihar', '87654', 6, '2022-03-25 07:41:41.000000', '2022-03-25 07:41:41.000000'),
(1, 'test123', 'test123@gmail.com', '8967565467', '5', 'gfhsj', 'vcnb', 'khjgkh', '786987', 7, '2022-03-28 06:57:47.000000', '2022-03-28 06:57:47.000000'),
(1, 'test123', 'test123@gmail.com', '8967565467', '3', 'fadsfa', 'jgbkg', 'uti', '85789', 8, '2022-03-28 13:07:19.000000', '2022-03-28 13:07:19.000000'),
(1, 'test123', 'test123@gmail.com', '8967565467', '2', 'Singapore', 'Singapore', 'Singapore', '7689354', 9, '2022-04-13 06:53:49.000000', '2022-04-13 06:53:49.000000');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `total` double NOT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `product_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_image`, `product_name`, `price`, `quantity`, `total`, `updated_at`, `created_at`, `user_id`, `product_id`) VALUES
(3, 'images/8 (2).jpg', 'Thrive Tribal Wood Candle', 59, 3, 177, '2022-04-01 02:50:23.000000', '2022-03-25 05:34:42.000000', 1, '5');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Category_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Category_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `Category_Name`, `Category_image`, `created_at`, `updated_at`) VALUES
(1, 'Furniture', 'images/8 (1).png', '2022-04-13 04:22:57', '2022-04-13 04:22:57'),
(2, 'Decor & Accessories', 'images/7 (1).png', '2022-04-13 04:23:11', '2022-04-13 04:23:11'),
(3, 'KitchenWare', 'images/KITCHENWARE.png', '2022-04-13 04:23:38', '2022-04-13 04:23:38'),
(4, 'Bed. Bath & Body', 'images/1 (1).png', '2022-04-13 04:23:52', '2022-04-13 04:23:52');

-- --------------------------------------------------------

--
-- Table structure for table `checkouts`
--

CREATE TABLE `checkouts` (
  `user_id` bigint(20) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `address_type` varchar(255) NOT NULL,
  `id` bigint(20) NOT NULL,
  `updated_at` datetime(6) NOT NULL,
  `created_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `message` longtext NOT NULL,
  `subject` varchar(255) NOT NULL,
  `updated_at` datetime(6) NOT NULL,
  `created_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `subject`, `updated_at`, `created_at`) VALUES
(1, 'Harsha', 'harsha123@gmail.com', 987654433, 'Defective product please change them soon.', 'Product Related Query', '2022-03-25 09:57:36.000000', '2022-03-25 09:57:36.000000'),
(2, 'Twinkal', 'twinkal123@gmail.com', 9087766556, 'use, disclose or otherwise process personal data of our customers in accordance with the Personal Data Protection Act', 'Product Related Query', '2022-03-25 10:14:15.000000', '2022-03-25 10:14:15.000000');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `code`) VALUES
(1, 'Afghanistan', 'AF'),
(2, 'Åland Islands', 'AX'),
(3, 'Albania', 'AL'),
(4, 'Algeria', 'DZ'),
(5, 'American Samoa', 'AS'),
(6, 'Andorra', 'AD'),
(7, 'Angola', 'AO'),
(8, 'Anguilla', 'AI'),
(9, 'Antarctica', 'AQ'),
(10, 'Antigua and Barbuda', 'AG'),
(11, 'Argentina', 'AR'),
(12, 'Armenia', 'AM'),
(13, 'Aruba', 'AW'),
(14, 'Australia', 'AU'),
(15, 'Austria', 'AT'),
(16, 'Azerbaijan', 'AZ'),
(17, 'Bahamas', 'BS'),
(18, 'Bahrain', 'BH'),
(19, 'Bangladesh', 'BD'),
(20, 'Barbados', 'BB'),
(21, 'Belarus', 'BY'),
(22, 'Belgium', 'BE'),
(23, 'Belize', 'BZ'),
(24, 'Benin', 'BJ'),
(25, 'Bermuda', 'BM'),
(26, 'Bhutan', 'BT'),
(27, 'Bolivia, Plurinational State of', 'BO'),
(28, 'Bonaire, Sint Eustatius and Saba', 'BQ'),
(29, 'Bosnia and Herzegovina', 'BA'),
(30, 'Botswana', 'BW'),
(31, 'Bouvet Island', 'BV'),
(32, 'Brazil', 'BR'),
(33, 'British Indian Ocean Territory', 'IO'),
(34, 'Brunei Darussalam', 'BN'),
(35, 'Bulgaria', 'BG'),
(36, 'Burkina Faso', 'BF'),
(37, 'Burundi', 'BI'),
(38, 'Cambodia', 'KH'),
(39, 'Cameroon', 'CM'),
(40, 'Canada', 'CA'),
(41, 'Cape Verde', 'CV'),
(42, 'Cayman Islands', 'KY'),
(43, 'Central African Republic', 'CF'),
(44, 'Chad', 'TD'),
(45, 'Chile', 'CL'),
(46, 'China', 'CN'),
(47, 'Christmas Island', 'CX'),
(48, 'Cocos (Keeling) Islands', 'CC'),
(49, 'Colombia', 'CO'),
(50, 'Comoros', 'KM'),
(51, 'Congo', 'CG'),
(52, 'Congo, the Democratic Republic of the', 'CD'),
(53, 'Cook Islands', 'CK'),
(54, 'Costa Rica', 'CR'),
(55, 'Côte d\'Ivoire', 'CI'),
(56, 'Croatia', 'HR'),
(57, 'Cuba', 'CU'),
(58, 'Curaçao', 'CW'),
(59, 'Cyprus', 'CY'),
(60, 'Czech Republic', 'CZ'),
(61, 'Denmark', 'DK'),
(62, 'Djibouti', 'DJ'),
(63, 'Dominica', 'DM'),
(64, 'Dominican Republic', 'DO'),
(65, 'Ecuador', 'EC'),
(66, 'Egypt', 'EG'),
(67, 'El Salvador', 'SV'),
(68, 'Equatorial Guinea', 'GQ'),
(69, 'Eritrea', 'ER'),
(70, 'Estonia', 'EE'),
(71, 'Ethiopia', 'ET'),
(72, 'Falkland Islands (Malvinas)', 'FK'),
(73, 'Faroe Islands', 'FO'),
(74, 'Fiji', 'FJ'),
(75, 'Finland', 'FI'),
(76, 'France', 'FR'),
(77, 'French Guiana', 'GF'),
(78, 'French Polynesia', 'PF'),
(79, 'French Southern Territories', 'TF'),
(80, 'Gabon', 'GA'),
(81, 'Gambia', 'GM'),
(82, 'Georgia', 'GE'),
(83, 'Germany', 'DE'),
(84, 'Ghana', 'GH'),
(85, 'Gibraltar', 'GI'),
(86, 'Greece', 'GR'),
(87, 'Greenland', 'GL'),
(88, 'Grenada', 'GD'),
(89, 'Guadeloupe', 'GP'),
(90, 'Guam', 'GU'),
(91, 'Guatemala', 'GT'),
(92, 'Guernsey', 'GG'),
(93, 'Guinea', 'GN'),
(94, 'Guinea-Bissau', 'GW'),
(95, 'Guyana', 'GY'),
(96, 'Haiti', 'HT'),
(97, 'Heard Island and McDonald Mcdonald Islands', 'HM'),
(98, 'Holy See (Vatican City State)', 'VA'),
(99, 'Honduras', 'HN'),
(100, 'Hong Kong', 'HK'),
(101, 'Hungary', 'HU'),
(102, 'Iceland', 'IS'),
(103, 'India', 'IN'),
(104, 'Indonesia', 'ID'),
(105, 'Iran, Islamic Republic of', 'IR'),
(106, 'Iraq', 'IQ'),
(107, 'Ireland', 'IE'),
(108, 'Isle of Man', 'IM'),
(109, 'Israel', 'IL'),
(110, 'Italy', 'IT'),
(111, 'Jamaica', 'JM'),
(112, 'Japan', 'JP'),
(113, 'Jersey', 'JE'),
(114, 'Jordan', 'JO'),
(115, 'Kazakhstan', 'KZ'),
(116, 'Kenya', 'KE'),
(117, 'Kiribati', 'KI'),
(118, 'Korea, Democratic People\'s Republic of', 'KP'),
(119, 'Korea, Republic of', 'KR'),
(120, 'Kuwait', 'KW'),
(121, 'Kyrgyzstan', 'KG'),
(122, 'Lao People\'s Democratic Republic', 'LA'),
(123, 'Latvia', 'LV'),
(124, 'Lebanon', 'LB'),
(125, 'Lesotho', 'LS'),
(126, 'Liberia', 'LR'),
(127, 'Libya', 'LY'),
(128, 'Liechtenstein', 'LI'),
(129, 'Lithuania', 'LT'),
(130, 'Luxembourg', 'LU'),
(131, 'Macao', 'MO'),
(132, 'Macedonia, the Former Yugoslav Republic of', 'MK'),
(133, 'Madagascar', 'MG'),
(134, 'Malawi', 'MW'),
(135, 'Malaysia', 'MY'),
(136, 'Maldives', 'MV'),
(137, 'Mali', 'ML'),
(138, 'Malta', 'MT'),
(139, 'Marshall Islands', 'MH'),
(140, 'Martinique', 'MQ'),
(141, 'Mauritania', 'MR'),
(142, 'Mauritius', 'MU'),
(143, 'Mayotte', 'YT'),
(144, 'Mexico', 'MX'),
(145, 'Micronesia, Federated States of', 'FM'),
(146, 'Moldova, Republic of', 'MD'),
(147, 'Monaco', 'MC'),
(148, 'Mongolia', 'MN'),
(149, 'Montenegro', 'ME'),
(150, 'Montserrat', 'MS'),
(151, 'Morocco', 'MA'),
(152, 'Mozambique', 'MZ'),
(153, 'Myanmar', 'MM'),
(154, 'Namibia', 'NA'),
(155, 'Nauru', 'NR'),
(156, 'Nepal', 'NP'),
(157, 'Netherlands', 'NL'),
(158, 'New Caledonia', 'NC'),
(159, 'New Zealand', 'NZ'),
(160, 'Nicaragua', 'NI'),
(161, 'Niger', 'NE'),
(162, 'Nigeria', 'NG'),
(163, 'Niue', 'NU'),
(164, 'Norfolk Island', 'NF'),
(165, 'Northern Mariana Islands', 'MP'),
(166, 'Norway', 'NO'),
(167, 'Oman', 'OM'),
(168, 'Pakistan', 'PK'),
(169, 'Palau', 'PW'),
(170, 'Palestine, State of', 'PS'),
(171, 'Panama', 'PA'),
(172, 'Papua New Guinea', 'PG'),
(173, 'Paraguay', 'PY'),
(174, 'Peru', 'PE'),
(175, 'Philippines', 'PH'),
(176, 'Pitcairn', 'PN'),
(177, 'Poland', 'PL'),
(178, 'Portugal', 'PT'),
(179, 'Puerto Rico', 'PR'),
(180, 'Qatar', 'QA'),
(181, 'Réunion', 'RE'),
(182, 'Romania', 'RO'),
(183, 'Russian Federation', 'RU'),
(184, 'Rwanda', 'RW'),
(185, 'Saint Barthélemy', 'BL'),
(186, 'Saint Helena, Ascension and Tristan da Cunha', 'SH'),
(187, 'Saint Kitts and Nevis', 'KN'),
(188, 'Saint Lucia', 'LC'),
(189, 'Saint Martin (French part)', 'MF'),
(190, 'Saint Pierre and Miquelon', 'PM'),
(191, 'Saint Vincent and the Grenadines', 'VC'),
(192, 'Samoa', 'WS'),
(193, 'San Marino', 'SM'),
(194, 'Sao Tome and Principe', 'ST'),
(195, 'Saudi Arabia', 'SA'),
(196, 'Senegal', 'SN'),
(197, 'Serbia', 'RS'),
(198, 'Seychelles', 'SC'),
(199, 'Sierra Leone', 'SL'),
(200, 'Singapore', 'SG'),
(201, 'Sint Maarten (Dutch part)', 'SX'),
(202, 'Slovakia', 'SK'),
(203, 'Slovenia', 'SI'),
(204, 'Solomon Islands', 'SB'),
(205, 'Somalia', 'SO'),
(206, 'South Africa', 'ZA'),
(207, 'South Georgia and the South Sandwich Islands', 'GS'),
(208, 'South Sudan', 'SS'),
(209, 'Spain', 'ES'),
(210, 'Sri Lanka', 'LK'),
(211, 'Sudan', 'SD'),
(212, 'Suriname', 'SR'),
(213, 'Svalbard and Jan Mayen', 'SJ'),
(214, 'Swaziland', 'SZ'),
(215, 'Sweden', 'SE'),
(216, 'Switzerland', 'CH'),
(217, 'Syrian Arab Republic', 'SY'),
(218, 'Taiwan', 'TW'),
(219, 'Tajikistan', 'TJ'),
(220, 'Tanzania, United Republic of', 'TZ'),
(221, 'Thailand', 'TH'),
(222, 'Timor-Leste', 'TL'),
(223, 'Togo', 'TG'),
(224, 'Tokelau', 'TK'),
(225, 'Tonga', 'TO'),
(226, 'Trinidad and Tobago', 'TT'),
(227, 'Tunisia', 'TN'),
(228, 'Turkey', 'TR'),
(229, 'Turkmenistan', 'TM'),
(230, 'Turks and Caicos Islands', 'TC'),
(231, 'Tuvalu', 'TV'),
(232, 'Uganda', 'UG'),
(233, 'Ukraine', 'UA'),
(234, 'United Arab Emirates', 'AE'),
(235, 'United Kingdom', 'GB'),
(236, 'United States', 'US'),
(237, 'United States Minor Outlying Islands', 'UM'),
(238, 'Uruguay', 'UY'),
(239, 'Uzbekistan', 'UZ'),
(240, 'Vanuatu', 'VU'),
(241, 'Venezuela, Bolivarian Republic of', 'VE'),
(242, 'Viet Nam', 'VN'),
(243, 'Virgin Islands, British', 'VG'),
(244, 'Virgin Islands, U.S.', 'VI'),
(245, 'Wallis and Futuna', 'WF'),
(246, 'Western Sahara', 'EH'),
(247, 'Yemen', 'YE'),
(248, 'Zambia', 'ZM'),
(249, 'Zimbabwe', 'ZW');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `coupon_name` varchar(255) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `coupon_description` longtext NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `discount_type` varchar(255) NOT NULL,
  `discount_amount` varchar(255) NOT NULL,
  `Banner` varchar(255) NOT NULL,
  `grouped_by_users` varchar(255) NOT NULL,
  `grouped_by_products` varchar(255) NOT NULL,
  `grouped_by_category` varchar(255) NOT NULL,
  `updated_at` datetime(6) NOT NULL,
  `created_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f_a_q_s`
--

CREATE TABLE `f_a_q_s` (
  `id` int(11) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Answer` longtext NOT NULL,
  `updated_at` datetime(6) NOT NULL,
  `created_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f_a_q_s`
--

INSERT INTO `f_a_q_s` (`id`, `Question`, `Answer`, `updated_at`, `created_at`) VALUES
(1, 'Shipping & Delivery', '<p>We ship direct from Singapore via Easyparcel for Singapore orders. International orders are currently not available. All orders shipped are trackable. You&#39;ll be able to track and manage your delivery by using the Shipping Confirmation email that we send as soon as your order begins its journey.</p>\r\n\r\n<p>Based on your location, delivery times are:</p>\r\n\r\n<p><ins>Singapore</ins></p>\r\n\r\n<ol>\r\n	<li>Delivers Next Business Day after order processing.</li>\r\n	<li>You&rsquo;ll be asked to select a Delivery Window of either 9am to 5pm or 5pm to 10pm.</li>\r\n</ol>\r\n\r\n<p>Please note that shipping and delivery charges are also based on size and weight of choice of product.</p>\r\n\r\n<p>Please take note that our delivery charge does not include unpacking of your items, assembly, and packaging removal. Most of our items do not require assembly, however if you need us to arrange any of these services do contact us so we can arrange it at a small additional cost.</p>\r\n\r\n<p>We offer free delivery for orders above SGD$250.</p>\r\n\r\n<p><ins>How do I check my order status?</ins></p>\r\n\r\n<p>You&rsquo;ll receive an automated Order Confirmation email from Goodman&rsquo;s Loft after your order has been submitted, and a&nbsp;second automated Shipping Confirmation email containing tracking information once your order has shipped. If you don&rsquo;t see these emails in your inbox, try checking your spam or trash folder. All automated confirmation emails will be sent to the email address provided on the order.</p>\r\n\r\n<p>You may also check the order status by logging into your account and clicking the &ldquo;Order History&rdquo; tab.</p>\r\n\r\n<p><ins>Processing Times</ins></p>\r\n\r\n<p>Orders placed Tuesday to Friday before 12pm Singapore time (GMT+8) are typically processed within the next business day. For example, if an order is placed on Tuesday before 12pm (GMT+8), it will be dispatched on Wednesday.</p>\r\n\r\n<p>Any orders placed Tuesday to Friday after 12pm Singapore time (GMT+8) will be processed within 2 business days. For example, if an order is placed on Tuesday after 12pm (GMT+8), it will be dispatched on Thursday.</p>\r\n\r\n<p>Please note that we don&rsquo;t process orders on Saturdays, Sundays and Public Holidays. Orders placed on these days will be processed the subsequent business day. For example, if an order is placed on either Saturday or Sunday it will be processed on Monday and dispatched on Tuesday.</p>\r\n\r\n<p><ins>What if I keyed in my address wrongly?</ins></p>\r\n\r\n<p>If you have provided an incorrect delivery address during checkout, please email your order number and the correct information to hello@goodmansloft.com as soon as possible. We will only be able to make changes free of charge if your order has not yet been delivered.</p>\r\n\r\n<p><ins>What if I&rsquo;m not present to receive my delivery?</ins></p>\r\n\r\n<p>Our delivery team will send reminders via email and/or SMS on the day of delivery. You will also receive a call 15 minutes before your estimated delivery time.</p>\r\n\r\n<p><ins>For small parcels:</ins></p>\r\n\r\n<p>We engage local couriers for small parcels. If you are not home to receive, you may instruct our courier to leave the package(s) at your doorstep at your own risk. If no instructions were given, they will return your items to their distribution centre and attempt for redelivery another day.</p>\r\n\r\n<p><ins>For bulky deliveries:</ins></p>\r\n\r\n<p>Bulky and fragile items are delivered by our delivery partners or our internal delivery team. If you are not available to accept delivery of your shipment on the scheduled date of delivery, our delivery team will return the items to our warehouse. You will then be contacted by our team for rescheduling of delivery. Do note delivery charges are applicable to all redeliveries by our partners.</p>\r\n\r\n<p><ins>Assembly Services</ins></p>\r\n\r\n<p>Some of our furniture may require you to assemble before being ready to use as larger furniture are transported and disassembled for easier delivery. If you would like your item to be assembled by our staff, do add assembly service upon checking out. There will be a small charge for such assembly services. Alternatively, instructions and all required assembly components will be provided with the items.</p>', '2022-03-29 08:09:07.000000', '2022-03-29 08:09:07.000000'),
(2, 'Returns & Refund', '<p><strong>Return policies</strong></p>\r\n\r\n<p>We want you to be happy with your purchase and we understand that sometimes our products might not be what you want or expect. In the event that your purchases do not live up to your expectations, we are happy to exchange it or take it back with a 100% refund (excluding delivery costs) within 7 days after delivery/collection.</p>\r\n\r\n<p>Items need to be in <strong>perfect,</strong> <strong>unused condition</strong> when returned.<strong> Please take note that all refunds will be subjected to a case to case basis.</strong></p>\r\n\r\n<p><strong>For delivered items:</strong> Purchases which were delivered will be collected by Goodman&rsquo;s Loft from clients&rsquo; address, the collection fee is $50. Alternatively, the product can be returned by the client to Goodman&rsquo;s Loft&rsquo;s physical retail space @ 1 Pemimpin Dr, #04-01/02 One Pemimpin, Singapore 576151.</p>\r\n\r\n<p><strong>For items yet to be delivered:</strong> No restocking and handling fee if you make changes to your order 3 days prior to the scheduled delivery date. If you cancel your order within 48 hours of purchase, provided you&rsquo;re not within the 3 days delivery window, you may request a full refund to the same payment mode you used during purchase. (consider taking out)</p>\r\n\r\n<p>For more information on the collection fee and process, please contact our customer service team at hello@goodmansloft.com.</p>\r\n\r\n<p>Return requests can only be made within 7 days of the date you received the item. To initiate this request, please email us at hello@goodman&rsquo;sloft.com with your order number, reason for return and photographs of the item.</p>\r\n\r\n<p>Please note that the policy is subject to the conditions below:</p>\r\n\r\n<ol>\r\n	<li>Only items in as-new condition can be returned. Products with scratches, stains, damages, drilling, or any other modification will not be accepted.</li>\r\n	<li>We reserve the right to reject a return request of a product that, in our reasonable opinion, is of unacceptable quality due to fair wear and tear, misuse, or poor maintenance and care of the product.</li>\r\n	<li>Please return the item in its original packaging. Alternatively, repack the item sufficiently to avoid damage in transit. We encourage customers to photograph the item scheduled for return and the condition of the packaging before handing them over to our delivery partners.</li>\r\n</ol>\r\n\r\n<p>The following items are not applicable for return:</p>\r\n\r\n<ol>\r\n	<li>Clearance items and sample pieces</li>\r\n	<li>Items requiring assembly</li>\r\n	<li>Damaged items resulting from misuse, abuse, normal wear &amp; tear</li>\r\n	<li>Bedding removed from original packaging.</li>\r\n</ol>\r\n\r\n<p>We will process the return once we have received and inspected your returned item. If approved, you will receive email notifications regarding your refund.</p>', '2022-03-29 08:14:56.000000', '2022-03-29 08:14:56.000000'),
(3, 'Returns for faulty or damaged goods', '<p>If you receive a product that is damaged, faulty or incorrect, we will repair or replace the item for you (depending on availability), or offer you a full refund provided you contact us within 48 hours of receiving the delivery. Please note that upon receiving your order, you acknowledge that the goods received are in good condition and not faulty or damaged.</p>\r\n\r\n<p>To be eligible for a return, your item must be unused and in the same condition that you received it. It must also be in the original packaging.</p>', '2022-03-29 08:15:54.000000', '2022-03-29 08:15:54.000000'),
(4, 'For customized items', '<p>No returns or refunds are available on custom-made items, unless a manufacturing defect is found, or an item is damaged during shipment. You can contact us if you find any defaults at hello@goodmansloft.com</p>', '2022-03-29 08:16:18.000000', '2022-03-29 08:16:18.000000'),
(6, 'Maintenance & Care', '<p>Our products are all handcrafted and handmade by our team of talented craftsmen as well as craftswomen. Only the best quality and sourced natural materials are used for our products. To enjoy it, we would advise you to handle it with the utmost care required. Every product is unique and might have different materials, please note that every product should be cared for differently due to their unique characteristics. Here are some of the tips to take note so that you can prolong the lifespan of our products:</p>\r\n\r\n<p><strong>Teak</strong></p>\r\n\r\n<p>Here at Goodman&rsquo;s loft, each teak product does not go through any excessive protective treatment as we want to preserve its rustic, unfinished original look and to allow it to age naturally. Hence, some stains will remain on the surface and will not penetrate the wood as easily since the wood has been polished prior.</p>\r\n\r\n<p>To clean your teak furniture, we recommend that you use a damp cloth (with a solution of soap and warm water). Please ensure that the cleaned surface is completely dry afterwards.</p>\r\n\r\n<p>To avoid scratching the wood, avoid using scouring pads and always ensure that you clean in the direction of the wood grain.</p>\r\n\r\n<p>To further protect your teak wood furniture, it is recommended that you use teak oil to waterproof your timber and prevent any dirty spots.</p>\r\n\r\n<p><strong>Leather</strong></p>\r\n\r\n<p>Soft or dry cloth can be used to clean leather. You can also use a damp cloth (with a solution of soap and warm water) to clean thoroughly. To maintain your leather, we recommend that you clean it often with an uncoloured leather polish. To avoid your leather products from deteriorating, please avoid direct exposure to sunlight.</p>\r\n\r\n<p><strong>Rattan</strong></p>\r\n\r\n<p>You can also use a damp cloth (with a solution of soap and warm water) to clean rattan, however, avoid pouring water on your rattan furniture. Although rattan fibers are extremely resistant, they are naturally a dried-out plant. Proper care is needed such as avoiding constant exposure to sunlight, rain or constant changes in temperature or humidity. To prolong your rattan furniture&rsquo;s lifespan, you should place it at a corner with a cover when it is not in use outdoors to avoid weather changes. Rattan will last longer when it is protected or indoors than being exposed to the change of weather for quite some time.</p>\r\n\r\n<p><ins><strong>Textiles</strong></ins></p>\r\n\r\n<p><ins>Small decorative cushions and bed covers</ins></p>\r\n\r\n<p>For cotton throws and cushions, we will suggest dry cleaning. If there are creases, you can use an iron (up to 150&deg;C), you can use a tea towel or similar to it to preferably protect the material.</p>\r\n\r\n<p><ins>Sofa textiles stored indoors</ins></p>\r\n\r\n<p>You can use a vacuum cleaner to get rid of the dust from your sofa textiles. We suggest using a vacuum with an attachment to do so. To wash sofa covers, dry cleaning would be sufficient.</p>\r\n\r\n<p><ins>SOFA TEXTILES &ndash; OUTDOOR</ins></p>\r\n\r\n<p>If you spot any small marks on your outdoor sofa, we suggest that you use lukewarm and slightly soapy water and clean it with a cloth or a small gentle brush.</p>', '2022-03-29 11:07:08.000000', '2022-03-29 11:07:08.000000'),
(7, 'Shipping Policy', '<p><strong>Can I view the products before I place an order?</strong></p>\r\n\r\n<p>Absolutely! Visit our showroom at One Pemimpin to experience all available products so you can place your order with confidence. Our showroom is located at 1 Pemimpin Drive #04-01/02 One Pemimpin Singapore 576151.</p>\r\n\r\n<p><strong>Do I have to make an appointment for the showroom?</strong></p>\r\n\r\n<p>No, appointments are not needed. If you would like to check out our products in person, you can drop by during our operating hours. We are open from Mondays to Fridays, 9am to 7pm. Saturdays/Sundays/PH are open by appointments only.</p>\r\n\r\n<p><strong>Can I opt for self-collection at your showroom for an online order?</strong></p>\r\n\r\n<p>Yes, self-collection can be arranged. Please indicate &ldquo;Self collection&rdquo; with your preferred collection date indicated when you check out online.</p>\r\n\r\n<p><strong>Do you allow cash-and-carry at your showroom?</strong></p>\r\n\r\n<p>We do not offer cash-and-carry services at our showroom but self-collection is allowed for online purchases. You can place an order online and opt for self-collection at our showroom.</p>\r\n\r\n<p><strong>Can I reschedule my delivery?</strong></p>\r\n\r\n<p>Yes, please email us at hello@goodmansloft.com at least 1 business day before your delivery is scheduled. Otherwise, we might not be able to accommodate any last minute requests and there might be redelivery charges in the event of failed delivery trips</p>', '2022-04-13 05:39:49.000000', '2022-04-13 05:39:49.000000');

-- --------------------------------------------------------

--
-- Table structure for table `gsts`
--

CREATE TABLE `gsts` (
  `id` bigint(20) NOT NULL,
  `gst_rate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gsts`
--

INSERT INTO `gsts` (`id`, `gst_rate`) VALUES
(1, '7');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_28_073457_create_product_table', 1),
(6, '2021_12_28_084130_create_category_table', 1),
(7, '2021_12_28_085918_create_subcategory_table', 1),
(8, '2022_01_12_071616_create_order_table', 2),
(9, '2022_01_13_092844_create_payment_table', 3),
(10, '2022_01_18_104433_create__register_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `total` varchar(255) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `order_total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_statuses`
--

CREATE TABLE `order_statuses` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_statuses`
--

INSERT INTO `order_statuses` (`id`, `name`) VALUES
(1, 'Processing'),
(2, 'Order-Placed'),
(3, 'In-Transit'),
(4, 'On The Way'),
(5, 'Delivered'),
(6, 'Cancelled');

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
  `Image` blob NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Category_id` bigint(20) NOT NULL,
  `SubCategory_id` bigint(20) NOT NULL,
  `product_name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Product_Size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_availability` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Weight` int(10) NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `Color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Shape` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Brand` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Product_Dimension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Pattern` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Product_Description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Category_id`, `SubCategory_id`, `product_name`, `Product_Size`, `stock_availability`, `Weight`, `product_image`, `created_at`, `updated_at`, `Color`, `Shape`, `Brand`, `Product_Dimension`, `Quantity`, `Pattern`, `Product_Description`, `Price`, `gallery_photo`, `sale`) VALUES
(3, 4, 8, 'Joveno Teakwood Candle', 'Medium', 'Available', 1, 'images/2.jpg', '2022-03-05 05:00:51', '2022-02-15 06:54:07', 'Brown', 'Curved', 'Wax', '16 x 13 x 8', 1, 'Dotted', 'Looking for a way of capturing that wonderful exotic feeling you always enjoy while on vacation or at the beach? The Joveno teakwood candle is the perfect solution! Add a tropical touch to your home décor with these elegantly handcrafted candles, featuring a unique wooden shell design which is easy to mix and match with any style or room!', '49', '[\"1644927847_1.jpg\",\"1644927847_2.jpg\"]', ''),
(4, 4, 6, 'Freya Bed Runner With All Sides Fringe', 'Medium', 'Available', 1, 'images/4.jpg', '2022-03-05 05:01:03', '2022-02-15 06:59:45', 'Mustard', 'Square', 'Bombay Dyeing.', '246 x 75', 1, 'Dotted', 'Our bed runner is beautiful and luxurious. \r\nOur handmade bed runner comes in a unique mustard\r\ncolour, with a white hem and matching\r\nmustard fringe. This bed runner is a perfect accessory \r\nfor a bed, sitting room, or chair and it also\r\ncomplements different types of cushions especially white.\r\n\r\nDue to it being handmade, \r\nplease allow some variations \r\nas the item will not be identical.\r\nCare instruction: Wash separately the first time. Hand wash cold, or machine wash cold on a gentle cycle. Avoid the use of bleach and air dry or tumble dry on low to keep your blanket soft.', '109', '[\"1644928185_2.jpg\",\"1644928185_4.jpg\"]', ''),
(5, 4, 8, 'Thrive Tribal Wood Candle', 'Small', 'Unavailable', 1, 'images/8 (2).jpg', '2022-03-05 05:01:14', '2022-02-15 07:02:39', 'Brown', 'Round', 'Wax', '13 x 13 x 10', 1, 'Dotted', 'Specially crafted with an amazing tribal carvings in wood, this candle makes for an outstanding decoration for your tribal home decor. Suitable for all home designs esp. Boho and Moroccan styles!', '59', '[\"1644928359_8 (2).jpg\",\"1644928359_9 (2).jpg\"]', ''),
(6, 4, 8, 'Josina Cowrie Shell Candle Light Holder', 'Small', 'Unavailable', 1, 'images/9 (2).jpg', '2022-03-05 05:01:22', '2022-02-15 07:04:42', 'white', 'Round', 'Wax', '12 x 13', 1, 'Dotted', 'Our Cowrie Shell Candle Light Holder is beautifully hand crafted \r\nwith seashells.  The jagged pattern on the candle holder is made up \r\nby rows of cowrie seashells.  In the African legend, the shell \r\nsymbolize wealth and fertility.  A nice home warming décor for\r\nyour living space, office, bedroom.', '49', '[\"1644928482_6 (2).jpg\",\"1644928482_9 (2).jpg\"]', ''),
(7, 1, 3, 'Jojon Long High Water Hyacinth Bench With Wooden Legs', 'Large', 'Available', 20, 'images/f.jpg', '2022-03-04 05:17:33', '2022-02-15 07:11:06', 'Brown', 'Round', 'Jute', '90 x 50 x 30', 1, 'Dotted', 'This rectangle-shaped bench is made of woven \r\nwater hyacinth to produce a beautiful soft seat. \r\nThis bench seat comes in one size and a natural\r\n colour and has four wooden legs. This bench will\r\n look great anywhere in the home and is a \r\ngreat accessory in any room. This bench is 90cm long,\r\n50cm high and 30cm wide. Due to it being handmade, \r\nplease allow some variations as the item will not be identical.', '209', '[\"1644928866_f.jpg\",\"1644928866_g.jpg\"]', ''),
(8, 1, 3, 'Pedro Long Woven Straw Grass and Wood Bench', 'Medium', 'Available', 25, 'images/g.jpg', '2022-03-04 05:17:41', '2022-02-15 07:13:33', 'Brown', 'Square', 'Wooden', '90 x 30 x 50', 1, 'Dotted', 'This rectangle-shaped bench is made of strong\r\nwoven straw grass to produce a beautiful \r\nnatural bench. This bench seat comes in one size and features wooden frame and legs. This bench will look great anywhere\r\n in the home and is a great accessory in any room.\r\nThis bench is 90cm long, 50cm high and 30cm wide. \r\nDue to it being handmade, please allow some variations as the item will not be identical.', '219', '[\"1644929013_g.jpg\",\"1644929013_h.jpg\"]', ''),
(9, 1, 3, 'Marcelo Round Low Water Hyacinth Stool', 'Medium', 'Unavailable', 15, 'images/h.jpg', '2022-03-04 05:17:53', '2022-02-15 07:16:35', 'Brown', 'Round', 'Jute', '40 x 45', 1, 'Plain', 'This round shaped stool is made of woven \r\nwater hyacinth, woven to produce a beautiful pattern.\r\nThis stool comes in one size and natural colour \r\nand has four long wooden legs. This stool will look \r\ngreat anywhere in the house and is a great accessory in any room.', '139', '[\"1644929195_h.jpg\",\"1644929195_i.jpg\"]', ''),
(10, 1, 3, 'Roma Round Water Hyacinth Stool With Long Wooden Legs', 'Medium', 'Unavailable', 15, 'images/i.jpg', '2022-03-04 05:18:03', '2022-02-15 07:18:26', 'white', 'Round', 'Wooden', '47 x 55', 1, 'Dotted', 'This natural colour, cylinder shaped stool is handcrafted\r\n with woven water hyacinth.   The stool has a beautiful pattern \r\nand comes with four wooden legs.  It looks great any where in the\r\n house, it is certainly a nice piece of furniture to own.', '229', '[\"1644929306_i.jpg\",\"1644929306_j.jpg\"]', ''),
(11, 1, 3, 'Malena Rattan Storage Bench with Cushion', 'Large', 'Available', 28, 'images/d.jpg', '2022-03-04 05:18:15', '2022-02-15 07:31:13', 'white&Brown', 'Square', 'Wooden', '118 x 46 x 64', 1, 'Plain', 'This rattan storage bench is great for storage use as well as a unique piece of furniture in your interior spaces. The dark brown rattan material with a tough thick rope brings out a rustic character.', '729', '[\"1644930073_d.jpg\",\"1644930073_f.jpg\"]', ''),
(12, 1, 3, 'Vienna Teakwood Branch Occasional Chair', 'Medium', 'Available', 14, 'images/e.jpg', '2022-03-04 05:18:22', '2022-02-15 07:33:08', 'white', 'Round', 'Plastic', '67 x 81 x 71', 1, 'Dotted', 'Our teakwood branch occasional chair is specially designed with cotton rope mesh. The chair plays with themes of permanency and fluidity creating new ways of sitting. The rope moulds and conforms when leaning back. Suitable to be placed as a centerpiece as part of home decor.', '359', '[\"1644930188_e.jpg\",\"1644930188_f.jpg\"]', ''),
(13, 1, 3, 'Lana Vintage Rattan ArmChair with Cushion (Natural)', 'Medium', 'Available', 10, 'images/a.jpg', '2022-03-04 05:18:30', '2022-02-15 07:36:21', 'Brown', 'Square', 'Wooden', '70 x 70 x 92', 1, 'Dotted', 'This hand-crafted vintage rattan & woven wicker framed \r\narmchair will transform your home.  Add your favourite cushions,\r\n grab a coffee & a book and watch how quickly this chair becomes \r\nyour new hangout.', '699', '[\"1644930381_a.jpg\",\"1644930381_c.jpg\"]', ''),
(14, 1, 4, 'Havana 4 Tier Rattan Arch Shaped Bookshelf (Natural)', 'Large', 'Unavailable', 34, 'images/k.jpg', '2022-03-04 05:18:40', '2022-02-15 07:41:36', 'Brown', 'Curved', 'Wooden', '63 x 42 x 166', 1, 'Plain', 'Our bookshelf is unique as it is handmade from rattan. You can place it at any part of the house, and it will blend in well as it has a nature feel.', '599', '[\"1644930696_k.jpg\",\"1644930696_m.jpg\"]', ''),
(15, 1, 4, 'Siena 5 Step Wooden Ladder (Natural)', 'Large', 'Unavailable', 16, 'images/n.jpg', '2022-03-04 05:18:50', '2022-02-15 07:45:03', 'Brown', 'Square', 'Wooden', '50 x 50 x 160', 1, 'Plain', 'This natural wooden ladder is perfect for displaying throws, towels and tea towels for your kitchens, bathrooms or bedrooms. Great piece that brings a rustic feel to your homes.', '69', '[\"1644930903_n.jpg\",\"1644930903_o.jpg\"]', ''),
(16, 2, 11, 'Felipe Large Two Tone Blue Rafia and Straw Grass Basket', 'Medium', '', 2, 'images/ac.jpg', '2022-02-15 07:56:59', '2022-02-15 07:56:59', 'Natural & Blue', 'Round', 'jute', '35 x 53', 1, 'Dotted', 'This cylinder-shaped basket is made from a\r\n combination of natural straw grass and synthetic blue raffia, \r\nwoven together to create an amazing two-tone pattern. \r\nThis basket comes in one size only (35cm in diameter x 53cm tall). \r\nThese baskets can be used for a wide variety \r\nof purposes around the home, and are a \r\ngreat accessory in any room. Due to it being \r\nhandmade, please allow some \r\nvariations as the item will not be identical.', '89', '[\"1644931619_ab.jpg\",\"1644931619_ac.jpg\"]', ''),
(17, 2, 11, 'Natural Straw Grass & White Raffia Basket Set(4)  (Natural; White)', 'Medium', '', 25, 'images/ad.jpg', '2022-02-15 08:00:20', '2022-02-15 08:00:20', 'Natural & White', 'Round', 'Jute', '26 x 35', 1, 'Plain', 'Our basket set is handmade, \r\nand has a nice cylinder shape. Our baskets \r\nare made from a combination of natural straw\r\ngrass and synthetic white raffia, woven together to\r\ncreate the beautiful patterns on the basket. \r\nThese baskets can be use for a wide variety of purposes \r\naround your home or office. It also acts as a good\r\naesthetic for an object.\r\n\r\nDue to it being handmade, \r\nplease allow some variations \r\nas the item will not be identical.', '209', '[\"1644931820_ad.jpg\",\"1644931820_ae.jpg\"]', ''),
(18, 2, 11, 'Woven Rattan Basket Set', 'Medium', '', 16, 'images/af.jpg', '2022-02-16 03:09:37', '2022-02-16 03:09:37', 'white', 'Round', 'Jute', '22 x 21', 1, 'Dotted', 'This set of baskets are made from woven rattan and \r\ncome in one colour, whitewash.\r\nThese versatile and practical baskets can be \r\nused for any number of purposes, from a decor piece, \r\nto a waste bin, and everything in between! \r\nDue to it being handmade, please allow some\r\n variations as the item will not be identical.', '49', '[\"1645000777_af.jpg\",\"1645000777_ag.jpg\"]', ''),
(19, 2, 11, 'Bamboo Laundry  Style Baskets With Lids', 'Medium', '', 6, 'images/ah.jpg', '2022-02-16 03:19:07', '2022-02-16 03:19:07', 'Grey', 'Round', 'Jute', '40 x 50', 1, 'Dotted', 'These lovely large round baskets are made from woven bamboo,\r\n with a natural straw jute rim on the top and handles on the lids.\r\n These baskets come in set of two sizes - a large size and a medium\r\n size, and in a grey or white color. These versatile and useful baskets \r\ncan be used for any purposes, from a decor piece, to a waste bin, \r\nto a laundry bin!', '250', '[\"1645001347_ah.jpg\",\"1645001347_ai.jpg\"]', ''),
(20, 2, 11, 'Bamboo Laundry  Style Baskets With Lids', 'Medium', '', 8, 'images/ai.jpg', '2022-02-16 03:20:38', '2022-02-16 03:20:38', 'white', 'Round', 'Jute', '50 x 60', 1, 'Plain', 'These lovely large round baskets are made from woven bamboo,\r\n with a natural straw jute rim on the top and handles on the lids.\r\n These baskets come in set of two sizes - a large size and a medium\r\n size, and in a grey or white color. These versatile and useful baskets \r\ncan be used for any purposes, from a decor piece, to a waste bin, \r\nto a laundry bin!', '250', '[\"1645001438_ah.jpg\",\"1645001438_ai.jpg\"]', ''),
(22, 2, 18, 'Hand-Woven Round Floor Rug with White Tassel (Natural)', 'Small', '', 1, 'images/re.jpg', '2022-03-01 10:25:40', '2022-03-01 04:51:54', 'white&Brown', 'Round', 'Sleepwell', '45 x 45 x 45', 1, 'Printed', 'Perfect round floor rug for your living room, bedroom, kitchen, entryway, laundry room, office. This hand-woven round floor rug with tassel can be a perfect gift for your family and friends on occasions such as holidays, birthdays and Christmas too!', '29.9', '[\"1646130113_re.jpg\",\"1646130114_ve.jpg\"]', ''),
(23, 2, 18, 'Hand-Woven Round Floor Rug with White Tassel (Natural)', 'Medium', '', 1, 'images/pe.jpg', '2022-03-01 04:54:01', '2022-03-01 04:54:01', 'white&Brown', 'Round', 'Bombay Dyeing.', '80 x 80 x 80', 1, 'Plain', 'Perfect round floor rug for your living room, bedroom, kitchen, entryway, laundry room, office. This hand-woven round floor rug with tassel can be a perfect gift for your family and friends on occasions such as holidays, birthdays and Christmas too!', '39.9', '[\"1646130241_pe.jpg\",\"1646130241_re.jpg\"]', ''),
(24, 2, 18, 'Hand-Woven Floor Rugs', 'Medium', '', 1, 'images/se.jpg', '2022-04-13 08:17:07', '2022-03-01 04:58:26', 'White & Grey', 'Square', 'Bombay Dyeing.', '60 x 90 x 61', 2, 'Printed', 'This good quality hand-woven floor rug adopts minimalist design and modern style concept, use of solid color and simple line to adds warmth and elegance to room of your home, soft lightweight but not fade; the soft fluffy carpet is available in multiple colors and sizes to suit your different style and need.', '39.99', '[\"1646130506_se.jpg\",\"1646130506_te.jpg\"]', '');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` bigint(20) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `updated_at` datetime(6) NOT NULL,
  `created_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `banner`, `updated_at`, `created_at`) VALUES
(1, 'images/add2.jpg', '2022-04-13 05:29:45.000000', '2022-04-13 05:29:45.000000'),
(2, 'images/add1.jpg', '2022-04-13 05:29:56.000000', '2022-04-13 05:29:56.000000');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_addresses`
--

CREATE TABLE `shipping_addresses` (
  `user_id` bigint(20) DEFAULT NULL,
  `full_name_ship` varchar(255) DEFAULT NULL,
  `email_ship` varchar(255) DEFAULT NULL,
  `phone_ship` varchar(255) DEFAULT NULL,
  `country_ship` varchar(255) DEFAULT NULL,
  `address_ship` varchar(255) DEFAULT NULL,
  `city_ship` varchar(255) DEFAULT NULL,
  `state_ship` varchar(255) DEFAULT NULL,
  `zip_ship` varchar(255) DEFAULT NULL,
  `address_type_ship` varchar(255) DEFAULT NULL,
  `id` bigint(20) NOT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping_addresses`
--

INSERT INTO `shipping_addresses` (`user_id`, `full_name_ship`, `email_ship`, `phone_ship`, `country_ship`, `address_ship`, `city_ship`, `state_ship`, `zip_ship`, `address_type_ship`, `id`, `updated_at`, `created_at`) VALUES
(1, 'test123', 'test123@gmail.com', '8967565467', '1', 'Bihar', 'Muzaffarpur', 'Bihar', '785300', 'Home', 1, '2022-03-16 10:48:59.000000', '2022-03-16 10:48:59.000000'),
(1, 'test123', 'test123@gmail.com', '8967565467', '1', 'Bihar', 'Muzaffarpur', 'Bihar', '785300', 'Office', 2, '2022-03-16 10:49:56.000000', '2022-03-16 10:49:56.000000'),
(1, 'test123', 'test123@gmail.com', '8967565467', '1', 'Bihar', 'Muzaffarpur', 'Bihar', '785300', 'Office', 3, '2022-03-16 10:53:25.000000', '2022-03-16 10:53:25.000000'),
(1, 'test123', 'test123@gmail.com', '8967565467', '1', 'Bi', 'Muzaffar', 'Biha', '7853', 'Office', 4, '2022-03-16 10:54:09.000000', '2022-03-16 10:54:09.000000'),
(1, 'test123', 'test123@gmail.com', '8967565467', '1', 'hfshgh', 'Erode', 'Tamilnadu', '638455', NULL, 5, '2022-03-23 09:53:24.000000', '2022-03-23 09:53:24.000000'),
(1, 'test123', 'test123@gmail.com', '8967565467', '4', 'Bihar', 'Bihar', 'Bihar', '87654', NULL, 6, '2022-03-25 07:41:41.000000', '2022-03-25 07:41:41.000000'),
(1, 'test123', 'test123@gmail.com', '8967565467', '5', 'gfhsj', 'vcnb', 'khjgkh', '786987', NULL, 7, '2022-03-28 06:57:47.000000', '2022-03-28 06:57:47.000000'),
(1, 'test123', 'test123@gmail.com', '8967565467', '3', 'fadsfa', 'jgbkg', 'uti', '85789', NULL, 8, '2022-03-28 13:07:19.000000', '2022-03-28 13:07:19.000000'),
(1, 'test123', 'test123@gmail.com', '8967565467', '2', 'Singapore', 'Singapore', 'Singapore', '7689354', NULL, 9, '2022-04-13 06:53:49.000000', '2022-04-13 06:53:49.000000');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_charges`
--

CREATE TABLE `shipping_charges` (
  `id` bigint(20) NOT NULL,
  `country_id` bigint(100) NOT NULL,
  `delivery_amount` varchar(255) NOT NULL,
  `updated_at` datetime(6) NOT NULL,
  `created_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping_charges`
--

INSERT INTO `shipping_charges` (`id`, `country_id`, `delivery_amount`, `updated_at`, `created_at`) VALUES
(1, 1, '90', '2022-02-18 13:00:51.000000', '2022-02-18 13:00:51.000000');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `stock_image` varchar(255) NOT NULL,
  `stock_available` varchar(255) NOT NULL,
  `updated_at` datetime(6) NOT NULL,
  `created_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `product_name`, `stock_image`, `stock_available`, `updated_at`, `created_at`) VALUES
(1, '4', '', '40', '2022-03-23 10:00:03.000000', '2022-03-23 10:00:03.000000'),
(2, '5', 'images/banner1.jpg', '57', '2022-04-13 07:18:27.000000', '2022-04-13 07:18:27.000000');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `Category_id` bigint(20) NOT NULL,
  `id` bigint(20) NOT NULL,
  `SubCategory_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SubCategory_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`Category_id`, `id`, `SubCategory_Name`, `SubCategory_image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nurseries', 'images/81- Wall Shelf Front View.png', '2022-02-15 05:12:19', '2022-02-15 05:12:19'),
(1, 2, 'Bedroom', 'images/3 & 16 - European Ceramic Flower Pot with Marble-Like Prints (11cm x 11cm x 11cm) or  (17cm x 17cm x 17cm) v2.png', '2022-02-15 05:13:07', '2022-02-15 05:13:07'),
(1, 3, 'Chair and Benches', 'images/5- Luxurious Sofa Cushion - Fluffy Black Diamond Shapes (45cm x 45cm).png', '2022-02-15 05:13:47', '2022-02-15 05:13:47'),
(1, 4, 'Shelves, Cabinets & Consoles', 'images/63 - Bookshelf.png', '2022-02-15 05:14:48', '2022-02-15 05:14:48'),
(1, 5, 'Tables', 'images/63- Bookself Details.png', '2022-02-15 05:15:32', '2022-02-15 05:15:32'),
(4, 6, 'Bed Runners', 'images/1.jpg', '2022-02-15 05:16:32', '2022-02-15 05:16:32'),
(4, 7, 'Beddings', 'images/2.jpg', '2022-02-15 05:17:17', '2022-02-15 05:17:17'),
(4, 8, 'Candles & Diffusers', 'images/3.jpg', '2022-02-15 05:17:38', '2022-02-15 05:17:38'),
(3, 9, 'Bowls and Plates', 'images/78 - Teakwood Candle Topview.png', '2022-02-15 05:18:49', '2022-02-15 05:18:49'),
(3, 10, 'Kitchen Textiles', 'images/3 & 16 - European Ceramic Flower Pot with Marble-Like Prints (11cm x 11cm x 11cm) or  (17cm x 17cm x 17cm) v2.png', '2022-02-15 05:19:27', '2022-02-15 05:19:27'),
(2, 11, 'Baskets', 'images/154 - Bamboo Laundry Style Baskets With Lid - Grey.jpg', '2022-02-15 05:22:12', '2022-02-15 05:22:12'),
(2, 12, 'Cushions and Throws', 'images/4TO6-L_1.PNG', '2022-02-15 05:22:45', '2022-02-15 05:22:45'),
(2, 13, 'Decorative Ornaments', 'images/24 - Luxurious Glass Ball on Gold Stand Ornament - Height 29cm, Width 15cm.png', '2022-02-15 05:23:19', '2022-02-15 05:23:19'),
(2, 14, 'Lightings and Shades', 'images/47 - Japanese Style Light 40cm Bamboo silk [LED 15W Warm Light] v2.png', '2022-02-15 05:24:03', '2022-02-15 05:24:03'),
(2, 15, 'Mirrors', 'images/2- Farm Garden Painting with Beautiful Greens and Lake (38cm x 38cm) - Set of 3.png', '2022-02-15 05:24:36', '2022-02-15 05:24:36'),
(2, 16, 'Planters, Vases & Pots', 'images/10 to 12 - Hanging Planter (White, Small, Medium, Large) - Single.png', '2022-02-15 05:25:17', '2022-02-15 05:25:17'),
(2, 17, 'Wall Decors', 'images/82 - Wall Decor.png', '2022-02-15 05:25:45', '2022-02-15 05:25:45'),
(2, 18, 'Mats and Rugs', 'images/52 &53 - Hand-Woven Round Floor Rug with Tassel (Dia 45cm) or (Dia 80cm) v2 (1).png', '2022-02-15 05:26:24', '2022-02-15 05:26:24');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `review` longtext NOT NULL,
  `updated_at` datetime(6) NOT NULL,
  `created_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `review`, `updated_at`, `created_at`) VALUES
(1, 'Javier Lim, Sunrise Ave', 'Had a really easy and smooth experience in finding my ideal furniture from\r\nGoodman’s Loft!', '2022-04-13 05:47:34.000000', '2022-04-13 05:47:34.000000'),
(2, 'P. Mahendren, Ang Mo Kio Ave 6', 'Strongly recommend Goodman’s Loft if you are looking for rattan items. So many\r\nrattan products to choose from, I wish I could bring them all home!', '2022-04-13 05:48:08.000000', '2022-04-13 05:48:08.000000'),
(3, 'Melanie S., Sixth Ave', 'Fantastic service from the moment I entered their showroom. Dawn was very patient\r\nwith me even though I was very indecisive with what suits my new home. She also\r\nrecommended several items that would fit together the theme of my home. Great\r\nexperience! I will be back again!', '2022-04-13 05:48:32.000000', '2022-04-13 05:48:32.000000'),
(4, 'Felicia Chew, Cashew Crescent', 'My husband and I have been on a lookout for pretty rattan designed furniture and\r\nluckily we came across Goodman’s Loft. The bohemian designs stole our hearts and\r\nwe especially love the Havana 4-tier Rattan Arch-shaped bookshelf. I would love to\r\npurchase more items from them in the future', '2022-04-13 05:48:59.000000', '2022-04-13 05:48:59.000000'),
(5, 'Michaela F., Mayfair Gardens', 'Goodman’s Loft has the most beautifully curated pieces ranging from knick knacks to\r\nbig furniture. The showroom is like a treasure trove of goodies. Will definitely\r\nrecommend it to my friends!', '2022-04-13 05:49:25.000000', '2022-04-13 05:49:25.000000'),
(6, 'Tan SW, Punggol Walk', 'We love the basket collections! We will always be looking out for their new arrivals.\r\nPrices are reasonable too.', '2022-04-13 05:49:50.000000', '2022-04-13 05:49:50.000000'),
(7, 'Emma Louise, Maplewoods.', 'We got to know about Goodman’s Loft via Instagram. We love the aesthetics and\r\nhave been looking for a place that carries all the Boho feels products. Much\r\nrecommended!', '2022-04-13 05:50:24.000000', '2022-04-13 05:50:24.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id` int(20) NOT NULL,
  `unique_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`, `id`, `unique_id`, `phone`) VALUES
('test123', 'test123@gmail.com', NULL, '$2y$10$Kko/XU41zH02Bmvz13ecwOl3SGZJTc38fV0Jv7k4EODy/Qi7Mhgda', NULL, NULL, '2022-02-07 04:54:12', '2022-02-07 04:54:12', 1, 'GML0000001', '8967565467');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `product_id`, `user_id`, `updated_at`, `created_at`) VALUES
(1, 5, '1', NULL, NULL),
(2, 3, '1', NULL, NULL),
(3, 6, '1', NULL, NULL),
(4, 13, '1', NULL, NULL),
(5, 4, '1', NULL, NULL),
(6, 19, '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `_registers`
--

CREATE TABLE `_registers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` int(11) NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Retype_Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing_addresses`
--
ALTER TABLE `billing_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_charges`
--
ALTER TABLE `shipping_charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_registers`
--
ALTER TABLE `_registers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `billing_addresses`
--
ALTER TABLE `billing_addresses`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shipping_charges`
--
ALTER TABLE `shipping_charges`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `_registers`
--
ALTER TABLE `_registers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
