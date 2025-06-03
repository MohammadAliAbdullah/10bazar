-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 04, 2025 at 12:44 AM
-- Server version: 10.6.22-MariaDB
-- PHP Version: 8.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bazarsto_10bazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `mission` longtext DEFAULT NULL,
  `vision` longtext DEFAULT NULL,
  `establistmet` longtext DEFAULT NULL,
  `outlet` longtext DEFAULT NULL,
  `total_delivary` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `about_title`, `content`, `images`, `mission`, `vision`, `establistmet`, `outlet`, `total_delivary`, `created_at`, `updated_at`) VALUES
(1, '10Bazar.store', '10Bazar একটি অনলাইন শপিং প্ল্যাটফর্ম, যা বাংলাদেশে প্রযুক্তি ও ইলেকট্রনিক্স পণ্যের সহজ ও নির্ভরযোগ্য কেনাকাটার অভিজ্ঞতা প্রদান করে।\r\n\r\n---\r\n\r\n🛒 আমাদের সম্পর্কে\r\n\r\n10Bazar-এ আমরা প্রতিশ্রুতিবদ্ধ গ্রাহকদের জন্য মানসম্মত পণ্য সরবরাহে। আমাদের পণ্যের সংগ্রহে রয়েছে বিভিন্ন গ্যাজেট ও ইলেকট্রনিক্স সামগ্রী, যা আপনার দৈনন্দিন জীবনে প্রযুক্তির সহজ সমাধান এনে দেবে।\r\n\r\n\r\n📞 যোগাযোগ\r\n- ইমেইল: 10bazar.store@gmail.com\r\n- হটলাইন: +880 17 200 85127\r\n- \r\n10Bazar-এ আপনার অনলাইন শপিং অভিজ্ঞতা হোক আরও সহজ ও নিরাপদ', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-26 11:22:40', '2025-06-01 04:13:19');

-- --------------------------------------------------------

--
-- Table structure for table `adjustments`
--

CREATE TABLE `adjustments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product` varchar(255) NOT NULL,
  `sku` int(11) NOT NULL,
  `sized` varchar(255) NOT NULL,
  `stock_qty` int(11) NOT NULL,
  `action_qty` int(11) NOT NULL,
  `note` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bn_name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `atributes`
--

CREATE TABLE `atributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `code` text DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'Images',
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `position`, `url`, `images`, `code`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home1', '#', '20231003101736banner.png', '', 'Image', 'Active', '2023-08-26 05:15:16', '2023-10-03 14:17:36'),
(2, 'Home2', '#', '20230827095540banner.jpg', '', 'Image', 'Active', '2023-08-26 05:16:04', '2023-08-27 03:55:40'),
(3, 'Home3', '#', '20231005120246banner.jpg', '', 'Image', 'Active', '2023-08-26 05:16:35', '2023-10-05 16:02:46');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `writer` varchar(255) DEFAULT NULL,
  `smm_title` text DEFAULT NULL,
  `smm_content` text DEFAULT NULL,
  `smm_images` text DEFAULT NULL,
  `meta_title` longtext DEFAULT NULL,
  `meta_keyword` longtext DEFAULT NULL,
  `meta_description` longtext DEFAULT NULL,
  `schema` longtext DEFAULT NULL,
  `follow` varchar(255) NOT NULL DEFAULT 'Yes',
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `thumb`, `images`, `content`, `writer`, `smm_title`, `smm_content`, `smm_images`, `meta_title`, `meta_keyword`, `meta_description`, `schema`, `follow`, `status`, `created_at`, `updated_at`) VALUES
(1, 'আপনার প্রয়োজন, আমাদের অঙ্গীকার', 'apnar-pryojn-amader-ongoeekar', '1697015067.jpg', '1697015067.jpg', 'Lorem ipsum dolor sit amet consectetur adipiscing, elit netus imperdiet pellentesque himenaeos, sociosqu inceptos ad in conubia. Facilisi vulputate sed etiam hac ad arcu proin vestibulum, eleifend magna convallis suscipit lectus natoque imperdiet netus, consequat sagittis lacinia euismod leo orci enim. Lacinia ut suscipit tincidunt morbi id euismod malesuada, sociis egestas nunc proin accumsan curae, congue varius vitae senectus aliquam turpis. Feugiat dictumst ridiculus class ornare sollicitudin risus purus ultricies hac himenaeos eu cursus, praesent fermentum fringilla enim urna vehicula posuere donec convallis aenean suscipit, libero facilisi turpis ad habitant tempus primis lectus id viverra phasellus. Tempus cras dui euismod convallis montes semper etiam hendrerit in egestas ut, dapibus magnis suspendisse praesent torquent porttitor sociosqu augue cursus ullamcorper, mus varius luctus vehicula vel mollis elementum habitant vulputate commodo. Dictumst donec hendrerit penatibus tristique et fermentum dapibus ridiculus bibendum, ornare consequat natoque lectus nascetur interdum quisque ut, lacinia ante magna cursus tortor tellus ad tempor. Fermentum condimentum imperdiet elementum rhoncus ad ultricies aliquet facilisi habitasse, himenaeos risus varius leo proin lectus viverra bibendum justo scelerisque, congue orci netus vitae hendrerit maecenas diam accumsan. Pulvinar penatibus euismod sollicitudin augue justo pellentesque a odio aptent inceptos gravida, dis tempus mus per habitasse non scelerisque risus sagittis.\r\n\r\nLectus mus magnis habitant pellentesque eleifend donec turpis fusce, ridiculus malesuada quisque laoreet velit auctor cursus eros, odio scelerisque potenti aliquet elementum pulvinar facilisi. Felis dapibus praesent commodo congue rutrum molestie nullam donec feugiat, ante tortor lacus ultricies gravida auctor eu interdum nisl vestibulum, etiam pulvinar orci nunc facilisis porta malesuada proin. Justo ligula nam faucibus aenean non odio, iaculis torquent lacus fusce et magnis, eros egestas turpis natoque ac, arcu purus cras interdum rhoncus. Neque dui egestas vehicula enim sagittis aenean porttitor facilisi, non himenaeos dapibus ornare sem bibendum varius commodo phasellus, tempus fermentum placerat vestibulum nostra risus dignissim. Gravida tempor mollis est dictumst risus a nostra, augue enim auctor sollicitudin tincidunt eleifend, velit pellentesque montes sodales conubia bibendum. Leo posuere natoque luctus aliquam proin sapien volutpat lacinia rutrum taciti netus, himenaeos habitant sagittis duis vestibulum enim molestie condimentum at ullamcorper tempor, vel tortor neque placerat tincidunt facilisis pulvinar velit suspendisse mauris. Potenti fames molestie lobortis platea orci fringilla taciti facilisis diam vivamus mi quisque, enim viverra magnis auctor tortor eros primis elementum tempus sem libero.', 'Md.Omar Faruqe', NULL, NULL, NULL, 'Maria Theresa', 'Maria Theresa', 'Maria Theresa', NULL, 'Yes', 'Active', '2023-08-26 06:15:57', '2025-06-02 10:04:03'),
(2, 'Maria Theresa Crystal Chandelier Dimmable Lighting Gold Pendant Chandelier', 'maria-theresa-crystal-chandelier-dimmable-lighting-gold-pendant-chandelier-1', '1697016209.jpg', '1697016209.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit etiam aliquam, sed nascetur lacinia quam felis at suscipit habitant, enim mauris faucibus erat blandit penatibus ante fermentum. Turpis lacus cras class habitasse vitae sollicitudin nulla arcu sed, sagittis placerat tortor morbi vehicula duis consequat torquent, sociosqu aenean porttitor fames condimentum in ante egestas. Penatibus dapibus tincidunt nulla ridiculus praesent habitasse feugiat bibendum volutpat phasellus, cursus nibh eros convallis ante conubia quis suscipit neque parturient, semper at integer venenatis lobortis sagittis imperdiet odio lacus. Dictum rhoncus enim integer vestibulum lacinia, quisque praesent primis lobortis phasellus, nibh placerat condimentum sollicitudin. Rhoncus habitant netus placerat conubia lobortis blandit potenti et aenean pulvinar, aptent primis platea odio nisi scelerisque donec sem. Habitant mi turpis facilisis natoque integer accumsan mauris vulputate conubia non gravida, nulla proin dapibus torquent odio diam nunc ridiculus fames massa, tempor ut leo magna ullamcorper semper vehicula quis auctor lectus. Torquent consequat vulputate sed felis senectus purus scelerisque faucibus sollicitudin tempor, vitae vehicula a praesent platea porta nisl hac tellus, ante augue euismod accumsan quis laoreet cum maecenas ad. Est fermentum tempor eros donec libero conubia nascetur, ridiculus pulvinar placerat risus torquent diam vel, orci taciti habitant turpis sagittis suscipit. Elementum aliquet dignissim ut donec malesuada dictumst, mus sodales ornare hac mollis sociis cursus, convallis duis suscipit sed dis.\r\n\r\nSapien cursus viverra imperdiet dapibus ac habitant, eget commodo ad per ullamcorper euismod, cum primis congue mattis mi. </p><p>Hac donec commodo morbi vulputate eget facilisis porttitor velit habitant euismod pulvinar quisque penatibus nisi, egestas ultrices metus primis nunc vestibulum ridiculus tristique quis accumsan auctor cum justo. Laoreet cursus ornare platea erat viverra, aenean aptent gravida a lobortis vestibulum, metus elementum libero eros. Purus ac porttitor facilisi congue accumsan volutpat venenatis semper rhoncus conubia, quam eget lobortis penatibus montes mi mus pulvinar felis suscipit, interdum metus placerat cum vestibulum ultrices libero magnis morbi. Tempor aptent per fermentum arcu diam non integer pellentesque aenean, quis urna laoreet commodo curae posuere condimentum fusce, eleifend ante magna erat platea ut iaculis mollis. Eget hac mattis accumsan et vulputate mus risus tristique, nec non dignissim donec viverra tortor tempor iaculis, egestas placerat aliquam class magna hendrerit curae. Vel fusce porta penatibus tincidunt volutpat dignissim egestas ornare est, consequat dis parturient sociosqu primis natoque proin dictum vivamus molestie, ultricies mollis luctus augue ac himenaeos justo laoreet. Fringilla aenean gravida nunc vel etiam tempus senectus tellus, orci faucibus aliquet facilisis mi scelerisque integer tortor, pharetra libero lacinia donec elementum nec non.</p>', 'Omar', NULL, NULL, NULL, 'Maria Theresa 1', 'Maria Theresa 1', 'Maria Theresa 1', NULL, 'Yes', 'Active', '2023-08-26 06:17:21', '2024-04-06 05:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `img_alt` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `smm_title` text DEFAULT NULL,
  `smm_content` text DEFAULT NULL,
  `smm_images` text DEFAULT NULL,
  `meta_title` longtext DEFAULT NULL,
  `meta_keyword` longtext DEFAULT NULL,
  `meta_description` longtext DEFAULT NULL,
  `schema` longtext DEFAULT NULL,
  `follow` varchar(255) NOT NULL DEFAULT 'Yes',
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `slug`, `thumb`, `images`, `img_alt`, `banner`, `content`, `smm_title`, `smm_content`, `smm_images`, `meta_title`, `meta_keyword`, `meta_description`, `schema`, `follow`, `status`, `created_at`, `updated_at`) VALUES
(34, 'Mira', 'mira', '1748794512thumb.jpg', '1748794512images.jpg', NULL, '1748794497banner.jpg', NULL, 'Mira', 'Mira', NULL, 'Mira', 'Mira', 'Mira', 'Mira', 'Yes', 'Active', '2025-06-01 10:14:57', '2025-06-01 10:15:12');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `content` longtext DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `img_alt` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `smm_title` text DEFAULT NULL,
  `smm_content` text DEFAULT NULL,
  `smm_images` text DEFAULT NULL,
  `meta_title` longtext DEFAULT NULL,
  `meta_keyword` longtext DEFAULT NULL,
  `meta_description` longtext DEFAULT NULL,
  `schema` longtext DEFAULT NULL,
  `follow` varchar(255) NOT NULL DEFAULT 'Yes',
  `orders` int(1) NOT NULL DEFAULT 0,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `background` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `type`, `content`, `thumb`, `images`, `img_alt`, `banner`, `parent_id`, `smm_title`, `smm_content`, `smm_images`, `meta_title`, `meta_keyword`, `meta_description`, `schema`, `follow`, `orders`, `status`, `created_at`, `updated_at`, `background`) VALUES
(20, 'Fan', 'fan', 'Regular', '<p>FAN</p>', '1748794629thumb.jpg', '1748794629images.jpg', NULL, NULL, 0, 'FAN', 'FAN', NULL, 'FAN', 'FAN', 'FAN', 'FAN', 'Yes', 0, 'Active', '2025-05-31 03:12:32', '2025-06-01 10:17:09', '1748682870background.jpg'),
(21, 'Gadget & electronics', 'gadget-electronics', 'Regular', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', 0, 'Active', '2025-05-31 03:15:05', '2025-05-31 03:15:05', NULL),
(22, 'Kitchen & Dining', 'kitchen-dining', 'Regular', NULL, NULL, NULL, NULL, NULL, 0, 'Kitchen & Dining', 'Kitchen & Dining', NULL, 'Kitchen & Dining', 'Kitchen', 'Kitchen', 'Kitchen', 'Yes', 0, 'Active', '2025-05-31 20:47:46', '2025-05-31 20:47:46', NULL),
(23, 'Blender', 'blender', 'Regular', NULL, NULL, NULL, NULL, NULL, 21, 'Blender', 'Blender', NULL, 'Blender', 'Blender', 'Blender', 'Blender', 'Yes', 0, 'Active', '2025-05-31 20:59:12', '2025-05-31 20:59:12', NULL),
(24, 'Baby item', 'baby-item', 'Regular', NULL, NULL, NULL, NULL, NULL, 0, 'Baby item', 'Baby item', NULL, 'Baby item', 'Baby item', 'Baby item', 'Baby item', 'Yes', 0, 'Active', '2025-05-31 22:43:10', '2025-05-31 22:43:10', NULL),
(25, 'Healsth & Beauty', 'healsth-beauty', 'Regular', NULL, NULL, NULL, NULL, NULL, 0, 'Healsth', 'Healsth', NULL, 'Healsth & Beauty', 'Healsth & Beauty', 'Healsth', 'Healsth', 'Yes', 0, 'Active', '2025-05-31 22:56:44', '2025-05-31 22:56:44', NULL),
(26, 'Bag', 'bag', 'Regular', NULL, NULL, NULL, NULL, NULL, 0, 'Bag', 'Bag', NULL, 'Bag', 'Bag', 'Bag', 'Bag', 'Yes', 0, 'Active', '2025-06-01 03:39:40', '2025-06-01 03:39:40', NULL),
(27, 'Ghee (ঘি)', 'ghee-ghi', 'Regular', NULL, NULL, NULL, NULL, NULL, 0, 'Ghee (ঘি)', 'Ghee (ঘি)', NULL, 'Ghee (ঘি)', 'Ghee (ঘি)', 'Ghee (ঘি)', 'Ghee (ঘি)', 'Yes', 0, 'Active', '2025-06-01 03:55:41', '2025-06-01 03:55:41', NULL),
(28, 'Accessories', 'accessories', 'Regular', NULL, NULL, NULL, NULL, NULL, 0, 'Accessories', 'Accessories', NULL, 'Accessories', 'Accessories', 'Accessories', 'Accessories', 'Yes', 0, 'Active', '2025-06-01 04:50:08', '2025-06-01 04:50:08', NULL),
(29, 'Kitchen', 'kitchen', 'Special', NULL, NULL, NULL, NULL, NULL, 0, 'Kitchen', 'Kitchen', NULL, 'Kitchen', 'Kitchen', 'Kitchen', 'Kitchen', 'Yes', 0, 'Active', '2025-06-01 23:25:34', '2025-06-01 23:25:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bn_name` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lon` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `division_id`, `name`, `bn_name`, `lat`, `lon`, `url`, `created_at`, `updated_at`) VALUES
(1, 1, 'Debidwar', 'দেবিদ্বার', '', '', 'debidwar.comilla.gov.bd', NULL, NULL),
(2, 1, 'Barura', 'বরুড়া', '', '', 'barura.comilla.gov.bd', NULL, NULL),
(3, 1, 'Brahmanpara', 'ব্রাহ্মণপাড়া', '', '', 'brahmanpara.comilla.gov.bd', NULL, NULL),
(4, 1, 'Chandina', 'চান্দিনা', '', '', 'chandina.comilla.gov.bd', NULL, NULL),
(5, 1, 'Chauddagram', 'চৌদ্দগ্রাম', '', '', 'chauddagram.comilla.gov.bd', NULL, NULL),
(6, 1, 'Daudkandi', 'দাউদকান্দি', '', '', 'daudkandi.comilla.gov.bd', NULL, NULL),
(7, 1, 'Homna', 'হোমনা', '', '', 'homna.comilla.gov.bd', NULL, NULL),
(8, 1, 'Laksam', 'লাকসাম', '', '', 'laksam.comilla.gov.bd', NULL, NULL),
(9, 1, 'Muradnagar', 'মুরাদনগর', '', '', 'muradnagar.comilla.gov.bd', NULL, NULL),
(10, 1, 'Nangalkot', 'নাঙ্গলকোট', '', '', 'nangalkot.comilla.gov.bd', NULL, NULL),
(11, 1, 'Comilla Sadar', 'কুমিল্লা সদর', '', '', 'comillasadar.comilla.gov.bd', NULL, NULL),
(12, 1, 'Meghna', 'মেঘনা', '', '', 'meghna.comilla.gov.bd', NULL, NULL),
(13, 1, 'Monohargonj', 'মনোহরগঞ্জ', '', '', 'monohargonj.comilla.gov.bd', NULL, NULL),
(14, 1, 'Sadarsouth', 'সদর দক্ষিণ', '', '', 'sadarsouth.comilla.gov.bd', NULL, NULL),
(15, 1, 'Titas', 'তিতাস', '', '', 'titas.comilla.gov.bd', NULL, NULL),
(16, 1, 'Burichang', 'বুড়িচং', '', '', 'burichang.comilla.gov.bd', NULL, NULL),
(17, 1, 'Lalmai', 'লালমাই', '', '', 'lalmai.comilla.gov.bd', NULL, NULL),
(18, 2, 'Chhagalnaiya', 'ছাগলনাইয়া', '', '', 'chhagalnaiya.feni.gov.bd', NULL, NULL),
(19, 2, 'Feni Sadar', 'ফেনী সদর', '', '', 'sadar.feni.gov.bd', NULL, NULL),
(20, 2, 'Sonagazi', 'সোনাগাজী', '', '', 'sonagazi.feni.gov.bd', NULL, NULL),
(21, 2, 'Fulgazi', 'ফুলগাজী', '', '', 'fulgazi.feni.gov.bd', NULL, NULL),
(22, 2, 'Parshuram', 'পরশুরাম', '', '', 'parshuram.feni.gov.bd', NULL, NULL),
(23, 2, 'Daganbhuiyan', 'দাগনভূঞা', '', '', 'daganbhuiyan.feni.gov.bd', NULL, NULL),
(24, 3, 'Brahmanbaria Sadar', 'ব্রাহ্মণবাড়িয়া সদর', '', '', 'sadar.brahmanbaria.gov.bd', NULL, NULL),
(25, 3, 'Kasba', 'কসবা', '', '', 'kasba.brahmanbaria.gov.bd', NULL, NULL),
(26, 3, 'Nasirnagar', 'নাসিরনগর', '', '', 'nasirnagar.brahmanbaria.gov.bd', NULL, NULL),
(27, 3, 'Sarail', 'সরাইল', '', '', 'sarail.brahmanbaria.gov.bd', NULL, NULL),
(28, 3, 'Ashuganj', 'আশুগঞ্জ', '', '', 'ashuganj.brahmanbaria.gov.bd', NULL, NULL),
(29, 3, 'Akhaura', 'আখাউড়া', '', '', 'akhaura.brahmanbaria.gov.bd', NULL, NULL),
(30, 3, 'Nabinagar', 'নবীনগর', '', '', 'nabinagar.brahmanbaria.gov.bd', NULL, NULL),
(31, 3, 'Bancharampur', 'বাঞ্ছারামপুর', '', '', 'bancharampur.brahmanbaria.gov.bd', NULL, NULL),
(32, 3, 'Bijoynagar', 'বিজয়নগর', '', '', 'bijoynagar.brahmanbaria.gov.bd    ', NULL, NULL),
(33, 4, 'Rangamati Sadar', 'রাঙ্গামাটি সদর', '', '', 'sadar.rangamati.gov.bd', NULL, NULL),
(34, 4, 'Kaptai', 'কাপ্তাই', '', '', 'kaptai.rangamati.gov.bd', NULL, NULL),
(35, 4, 'Kawkhali', 'কাউখালী', '', '', 'kawkhali.rangamati.gov.bd', NULL, NULL),
(36, 4, 'Baghaichari', 'বাঘাইছড়ি', '', '', 'baghaichari.rangamati.gov.bd', NULL, NULL),
(37, 4, 'Barkal', 'বরকল', '', '', 'barkal.rangamati.gov.bd', NULL, NULL),
(38, 4, 'Langadu', 'লংগদু', '', '', 'langadu.rangamati.gov.bd', NULL, NULL),
(39, 4, 'Rajasthali', 'রাজস্থলী', '', '', 'rajasthali.rangamati.gov.bd', NULL, NULL),
(40, 4, 'Belaichari', 'বিলাইছড়ি', '', '', 'belaichari.rangamati.gov.bd', NULL, NULL),
(41, 4, 'Juraichari', 'জুরাছড়ি', '', '', 'juraichari.rangamati.gov.bd', NULL, NULL),
(42, 4, 'Naniarchar', 'নানিয়ারচর', '', '', 'naniarchar.rangamati.gov.bd', NULL, NULL),
(43, 5, 'Noakhali Sadar', 'নোয়াখালী সদর', '', '', 'sadar.noakhali.gov.bd', NULL, NULL),
(44, 5, 'Companiganj', 'কোম্পানীগঞ্জ', '', '', 'companiganj.noakhali.gov.bd', NULL, NULL),
(45, 5, 'Begumganj', 'বেগমগঞ্জ', '', '', 'begumganj.noakhali.gov.bd', NULL, NULL),
(46, 5, 'Hatia', 'হাতিয়া', '', '', 'hatia.noakhali.gov.bd', NULL, NULL),
(47, 5, 'Subarnachar', 'সুবর্ণচর', '', '', 'subarnachar.noakhali.gov.bd', NULL, NULL),
(48, 5, 'Kabirhat', 'কবিরহাট', '', '', 'kabirhat.noakhali.gov.bd', NULL, NULL),
(49, 5, 'Senbug', 'সেনবাগ', '', '', 'senbug.noakhali.gov.bd', NULL, NULL),
(50, 5, 'Chatkhil', 'চাটখিল', '', '', 'chatkhil.noakhali.gov.bd', NULL, NULL),
(51, 5, 'Sonaimori', 'সোনাইমুড়ী', '', '', 'sonaimori.noakhali.gov.bd', NULL, NULL),
(52, 6, 'Haimchar', 'হাইমচর', '', '', 'haimchar.chandpur.gov.bd', NULL, NULL),
(53, 6, 'Kachua', 'কচুয়া', '', '', 'kachua.chandpur.gov.bd', NULL, NULL),
(54, 6, 'Shahrasti', 'শাহরাস্তি	', '', '', 'shahrasti.chandpur.gov.bd', NULL, NULL),
(55, 6, 'Chandpur Sadar', 'চাঁদপুর সদর', '', '', 'sadar.chandpur.gov.bd', NULL, NULL),
(56, 6, 'Matlab South', 'মতলব দক্ষিণ', '', '', 'matlabsouth.chandpur.gov.bd', NULL, NULL),
(57, 6, 'Hajiganj', 'হাজীগঞ্জ', '', '', 'hajiganj.chandpur.gov.bd', NULL, NULL),
(58, 6, 'Matlab North', 'মতলব উত্তর', '', '', 'matlabnorth.chandpur.gov.bd', NULL, NULL),
(59, 6, 'Faridgonj', 'ফরিদগঞ্জ', '', '', 'faridgonj.chandpur.gov.bd', NULL, NULL),
(60, 7, 'Lakshmipur Sadar', 'লক্ষ্মীপুর সদর', '', '', 'sadar.lakshmipur.gov.bd', NULL, NULL),
(61, 7, 'Kamalnagar', 'কমলনগর', '', '', 'kamalnagar.lakshmipur.gov.bd', NULL, NULL),
(62, 7, 'Raipur', 'রায়পুর', '', '', 'raipur.lakshmipur.gov.bd', NULL, NULL),
(63, 7, 'Ramgati', 'রামগতি', '', '', 'ramgati.lakshmipur.gov.bd', NULL, NULL),
(64, 7, 'Ramganj', 'রামগঞ্জ', '', '', 'ramganj.lakshmipur.gov.bd', NULL, NULL),
(65, 8, 'Rangunia', 'রাঙ্গুনিয়া', '', '', 'rangunia.chittagong.gov.bd', NULL, NULL),
(66, 8, 'Sitakunda', 'সীতাকুন্ড', '', '', 'sitakunda.chittagong.gov.bd', NULL, NULL),
(67, 8, 'Mirsharai', 'মীরসরাই', '', '', 'mirsharai.chittagong.gov.bd', NULL, NULL),
(68, 8, 'Patiya', 'পটিয়া', '', '', 'patiya.chittagong.gov.bd', NULL, NULL),
(69, 8, 'Sandwip', 'সন্দ্বীপ', '', '', 'sandwip.chittagong.gov.bd', NULL, NULL),
(70, 8, 'Banshkhali', 'বাঁশখালী', '', '', 'banshkhali.chittagong.gov.bd', NULL, NULL),
(71, 8, 'Boalkhali', 'বোয়ালখালী', '', '', 'boalkhali.chittagong.gov.bd', NULL, NULL),
(72, 8, 'Anwara', 'আনোয়ারা', '', '', 'anwara.chittagong.gov.bd', NULL, NULL),
(73, 8, 'Chandanaish', 'চন্দনাইশ', '', '', 'chandanaish.chittagong.gov.bd', NULL, NULL),
(74, 8, 'Satkania', 'সাতকানিয়া', '', '', 'satkania.chittagong.gov.bd', NULL, NULL),
(75, 8, 'Lohagara', 'লোহাগাড়া', '', '', 'lohagara.chittagong.gov.bd', NULL, NULL),
(76, 8, 'Hathazari', 'হাটহাজারী', '', '', 'hathazari.chittagong.gov.bd', NULL, NULL),
(77, 8, 'Fatikchhari', 'ফটিকছড়ি', '', '', 'fatikchhari.chittagong.gov.bd', NULL, NULL),
(78, 8, 'Raozan', 'রাউজান', '', '', 'raozan.chittagong.gov.bd', NULL, NULL),
(79, 8, 'Karnafuli', 'কর্ণফুলী', '', '', 'karnafuli.chittagong.gov.bd', NULL, NULL),
(80, 9, 'Coxsbazar Sadar', 'কক্সবাজার সদর', '', '', 'sadar.coxsbazar.gov.bd', NULL, NULL),
(81, 9, 'Chakaria', 'চকরিয়া', '', '', 'chakaria.coxsbazar.gov.bd', NULL, NULL),
(82, 9, 'Kutubdia', 'কুতুবদিয়া', '', '', 'kutubdia.coxsbazar.gov.bd', NULL, NULL),
(83, 9, 'Ukhiya', 'উখিয়া', '', '', 'ukhiya.coxsbazar.gov.bd', NULL, NULL),
(84, 9, 'Moheshkhali', 'মহেশখালী', '', '', 'moheshkhali.coxsbazar.gov.bd', NULL, NULL),
(85, 9, 'Pekua', 'পেকুয়া', '', '', 'pekua.coxsbazar.gov.bd', NULL, NULL),
(86, 9, 'Ramu', 'রামু', '', '', 'ramu.coxsbazar.gov.bd', NULL, NULL),
(87, 9, 'Teknaf', 'টেকনাফ', '', '', 'teknaf.coxsbazar.gov.bd', NULL, NULL),
(88, 10, 'Khagrachhari Sadar', 'খাগড়াছড়ি সদর', '', '', 'sadar.khagrachhari.gov.bd', NULL, NULL),
(89, 10, 'Dighinala', 'দিঘীনালা', '', '', 'dighinala.khagrachhari.gov.bd', NULL, NULL),
(90, 10, 'Panchari', 'পানছড়ি', '', '', 'panchari.khagrachhari.gov.bd', NULL, NULL),
(91, 10, 'Laxmichhari', 'লক্ষীছড়ি', '', '', 'laxmichhari.khagrachhari.gov.bd', NULL, NULL),
(92, 10, 'Mohalchari', 'মহালছড়ি', '', '', 'mohalchari.khagrachhari.gov.bd', NULL, NULL),
(93, 10, 'Manikchari', 'মানিকছড়ি', '', '', 'manikchari.khagrachhari.gov.bd', NULL, NULL),
(94, 10, 'Ramgarh', 'রামগড়', '', '', 'ramgarh.khagrachhari.gov.bd', NULL, NULL),
(95, 10, 'Matiranga', 'মাটিরাঙ্গা', '', '', 'matiranga.khagrachhari.gov.bd', NULL, NULL),
(96, 10, 'Guimara', 'গুইমারা', '', '', 'guimara.khagrachhari.gov.bd', NULL, NULL),
(97, 11, 'Bandarban Sadar', 'বান্দরবান সদর', '', '', 'sadar.bandarban.gov.bd', NULL, NULL),
(98, 11, 'Alikadam', 'আলীকদম', '', '', 'alikadam.bandarban.gov.bd', NULL, NULL),
(99, 11, 'Naikhongchhari', 'নাইক্ষ্যংছড়ি', '', '', 'naikhongchhari.bandarban.gov.bd', NULL, NULL),
(100, 11, 'Rowangchhari', 'রোয়াংছড়ি', '', '', 'rowangchhari.bandarban.gov.bd', NULL, NULL),
(101, 11, 'Lama', 'লামা', '', '', 'lama.bandarban.gov.bd', NULL, NULL),
(102, 11, 'Ruma', 'রুমা', '', '', 'ruma.bandarban.gov.bd', NULL, NULL),
(103, 11, 'Thanchi', 'থানচি', '', '', 'thanchi.bandarban.gov.bd', NULL, NULL),
(104, 12, 'Belkuchi', 'বেলকুচি', '', '', 'belkuchi.sirajganj.gov.bd', NULL, NULL),
(105, 12, 'Chauhali', 'চৌহালি', '', '', 'chauhali.sirajganj.gov.bd', NULL, NULL),
(106, 12, 'Kamarkhand', 'কামারখন্দ', '', '', 'kamarkhand.sirajganj.gov.bd', NULL, NULL),
(107, 12, 'Kazipur', 'কাজীপুর', '', '', 'kazipur.sirajganj.gov.bd', NULL, NULL),
(108, 12, 'Raigonj', 'রায়গঞ্জ', '', '', 'raigonj.sirajganj.gov.bd', NULL, NULL),
(109, 12, 'Shahjadpur', 'শাহজাদপুর', '', '', 'shahjadpur.sirajganj.gov.bd', NULL, NULL),
(110, 12, 'Sirajganj Sadar', 'সিরাজগঞ্জ সদর', '', '', 'sirajganjsadar.sirajganj.gov.bd', NULL, NULL),
(111, 12, 'Tarash', 'তাড়াশ', '', '', 'tarash.sirajganj.gov.bd', NULL, NULL),
(112, 12, 'Ullapara', 'উল্লাপাড়া', '', '', 'ullapara.sirajganj.gov.bd', NULL, NULL),
(113, 13, 'Sujanagar', 'সুজানগর', '', '', 'sujanagar.pabna.gov.bd', NULL, NULL),
(114, 13, 'Ishurdi', 'ঈশ্বরদী', '', '', 'ishurdi.pabna.gov.bd', NULL, NULL),
(115, 13, 'Bhangura', 'ভাঙ্গুড়া', '', '', 'bhangura.pabna.gov.bd', NULL, NULL),
(116, 13, 'Pabna Sadar', 'পাবনা সদর', '', '', 'pabnasadar.pabna.gov.bd', NULL, NULL),
(117, 13, 'Bera', 'বেড়া', '', '', 'bera.pabna.gov.bd', NULL, NULL),
(118, 13, 'Atghoria', 'আটঘরিয়া', '', '', 'atghoria.pabna.gov.bd', NULL, NULL),
(119, 13, 'Chatmohar', 'চাটমোহর', '', '', 'chatmohar.pabna.gov.bd', NULL, NULL),
(120, 13, 'Santhia', 'সাঁথিয়া', '', '', 'santhia.pabna.gov.bd', NULL, NULL),
(121, 13, 'Faridpur', 'ফরিদপুর', '', '', 'faridpur.pabna.gov.bd', NULL, NULL),
(122, 14, 'Kahaloo', 'কাহালু', '', '', 'kahaloo.bogra.gov.bd', NULL, NULL),
(123, 14, 'Bogra Sadar', 'বগুড়া সদর', '', '', 'sadar.bogra.gov.bd', NULL, NULL),
(124, 14, 'Shariakandi', 'সারিয়াকান্দি', '', '', 'shariakandi.bogra.gov.bd', NULL, NULL),
(125, 14, 'Shajahanpur', 'শাজাহানপুর', '', '', 'shajahanpur.bogra.gov.bd', NULL, NULL),
(126, 14, 'Dupchanchia', 'দুপচাচিঁয়া', '', '', 'dupchanchia.bogra.gov.bd', NULL, NULL),
(127, 14, 'Adamdighi', 'আদমদিঘি', '', '', 'adamdighi.bogra.gov.bd', NULL, NULL),
(128, 14, 'Nondigram', 'নন্দিগ্রাম', '', '', 'nondigram.bogra.gov.bd', NULL, NULL),
(129, 14, 'Sonatala', 'সোনাতলা', '', '', 'sonatala.bogra.gov.bd', NULL, NULL),
(130, 14, 'Dhunot', 'ধুনট', '', '', 'dhunot.bogra.gov.bd', NULL, NULL),
(131, 14, 'Gabtali', 'গাবতলী', '', '', 'gabtali.bogra.gov.bd', NULL, NULL),
(132, 14, 'Sherpur', 'শেরপুর', '', '', 'sherpur.bogra.gov.bd', NULL, NULL),
(133, 14, 'Shibganj', 'শিবগঞ্জ', '', '', 'shibganj.bogra.gov.bd', NULL, NULL),
(134, 15, 'Paba', 'পবা', '', '', 'paba.rajshahi.gov.bd', NULL, NULL),
(135, 15, 'Durgapur', 'দুর্গাপুর', '', '', 'durgapur.rajshahi.gov.bd', NULL, NULL),
(136, 15, 'Mohonpur', 'মোহনপুর', '', '', 'mohonpur.rajshahi.gov.bd', NULL, NULL),
(137, 15, 'Charghat', 'চারঘাট', '', '', 'charghat.rajshahi.gov.bd', NULL, NULL),
(138, 15, 'Puthia', 'পুঠিয়া', '', '', 'puthia.rajshahi.gov.bd', NULL, NULL),
(139, 15, 'Bagha', 'বাঘা', '', '', 'bagha.rajshahi.gov.bd', NULL, NULL),
(140, 15, 'Godagari', 'গোদাগাড়ী', '', '', 'godagari.rajshahi.gov.bd', NULL, NULL),
(141, 15, 'Tanore', 'তানোর', '', '', 'tanore.rajshahi.gov.bd', NULL, NULL),
(142, 15, 'Bagmara', 'বাগমারা', '', '', 'bagmara.rajshahi.gov.bd', NULL, NULL),
(143, 16, 'Natore Sadar', 'নাটোর সদর', '', '', 'natoresadar.natore.gov.bd', NULL, NULL),
(144, 16, 'Singra', 'সিংড়া', '', '', 'singra.natore.gov.bd', NULL, NULL),
(145, 16, 'Baraigram', 'বড়াইগ্রাম', '', '', 'baraigram.natore.gov.bd', NULL, NULL),
(146, 16, 'Bagatipara', 'বাগাতিপাড়া', '', '', 'bagatipara.natore.gov.bd', NULL, NULL),
(147, 16, 'Lalpur', 'লালপুর', '', '', 'lalpur.natore.gov.bd', NULL, NULL),
(148, 16, 'Gurudaspur', 'গুরুদাসপুর', '', '', 'gurudaspur.natore.gov.bd', NULL, NULL),
(149, 16, 'Naldanga', 'নলডাঙ্গা', '', '', 'naldanga.natore.gov.bd', NULL, NULL),
(150, 17, 'Akkelpur', 'আক্কেলপুর', '', '', 'akkelpur.joypurhat.gov.bd', NULL, NULL),
(151, 17, 'Kalai', 'কালাই', '', '', 'kalai.joypurhat.gov.bd', NULL, NULL),
(152, 17, 'Khetlal', 'ক্ষেতলাল', '', '', 'khetlal.joypurhat.gov.bd', NULL, NULL),
(153, 17, 'Panchbibi', 'পাঁচবিবি', '', '', 'panchbibi.joypurhat.gov.bd', NULL, NULL),
(154, 17, 'Joypurhat Sadar', 'জয়পুরহাট সদর', '', '', 'joypurhatsadar.joypurhat.gov.bd', NULL, NULL),
(155, 18, 'Chapainawabganj Sadar', 'চাঁপাইনবাবগঞ্জ সদর', '', '', 'chapainawabganjsadar.chapainawabganj.gov.bd', NULL, NULL),
(156, 18, 'Gomostapur', 'গোমস্তাপুর', '', '', 'gomostapur.chapainawabganj.gov.bd', NULL, NULL),
(157, 18, 'Nachol', 'নাচোল', '', '', 'nachol.chapainawabganj.gov.bd', NULL, NULL),
(158, 18, 'Bholahat', 'ভোলাহাট', '', '', 'bholahat.chapainawabganj.gov.bd', NULL, NULL),
(159, 18, 'Shibganj', 'শিবগঞ্জ', '', '', 'shibganj.chapainawabganj.gov.bd', NULL, NULL),
(160, 19, 'Mohadevpur', 'মহাদেবপুর', '', '', 'mohadevpur.naogaon.gov.bd', NULL, NULL),
(161, 19, 'Badalgachi', 'বদলগাছী', '', '', 'badalgachi.naogaon.gov.bd', NULL, NULL),
(162, 19, 'Patnitala', 'পত্নিতলা', '', '', 'patnitala.naogaon.gov.bd', NULL, NULL),
(163, 19, 'Dhamoirhat', 'ধামইরহাট', '', '', 'dhamoirhat.naogaon.gov.bd', NULL, NULL),
(164, 19, 'Niamatpur', 'নিয়ামতপুর', '', '', 'niamatpur.naogaon.gov.bd', NULL, NULL),
(165, 19, 'Manda', 'মান্দা', '', '', 'manda.naogaon.gov.bd', NULL, NULL),
(166, 19, 'Atrai', 'আত্রাই', '', '', 'atrai.naogaon.gov.bd', NULL, NULL),
(167, 19, 'Raninagar', 'রাণীনগর', '', '', 'raninagar.naogaon.gov.bd', NULL, NULL),
(168, 19, 'Naogaon Sadar', 'নওগাঁ সদর', '', '', 'naogaonsadar.naogaon.gov.bd', NULL, NULL),
(169, 19, 'Porsha', 'পোরশা', '', '', 'porsha.naogaon.gov.bd', NULL, NULL),
(170, 19, 'Sapahar', 'সাপাহার', '', '', 'sapahar.naogaon.gov.bd', NULL, NULL),
(171, 20, 'Manirampur', 'মণিরামপুর', '', '', 'manirampur.jessore.gov.bd', NULL, NULL),
(172, 20, 'Abhaynagar', 'অভয়নগর', '', '', 'abhaynagar.jessore.gov.bd', NULL, NULL),
(173, 20, 'Bagherpara', 'বাঘারপাড়া', '', '', 'bagherpara.jessore.gov.bd', NULL, NULL),
(174, 20, 'Chougachha', 'চৌগাছা', '', '', 'chougachha.jessore.gov.bd', NULL, NULL),
(175, 20, 'Jhikargacha', 'ঝিকরগাছা', '', '', 'jhikargacha.jessore.gov.bd', NULL, NULL),
(176, 20, 'Keshabpur', 'কেশবপুর', '', '', 'keshabpur.jessore.gov.bd', NULL, NULL),
(177, 20, 'Jessore Sadar', 'যশোর সদর', '', '', 'sadar.jessore.gov.bd', NULL, NULL),
(178, 20, 'Sharsha', 'শার্শা', '', '', 'sharsha.jessore.gov.bd', NULL, NULL),
(179, 21, 'Assasuni', 'আশাশুনি', '', '', 'assasuni.satkhira.gov.bd', NULL, NULL),
(180, 21, 'Debhata', 'দেবহাটা', '', '', 'debhata.satkhira.gov.bd', NULL, NULL),
(181, 21, 'Kalaroa', 'কলারোয়া', '', '', 'kalaroa.satkhira.gov.bd', NULL, NULL),
(182, 21, 'Satkhira Sadar', 'সাতক্ষীরা সদর', '', '', 'satkhirasadar.satkhira.gov.bd', NULL, NULL),
(183, 21, 'Shyamnagar', 'শ্যামনগর', '', '', 'shyamnagar.satkhira.gov.bd', NULL, NULL),
(184, 21, 'Tala', 'তালা', '', '', 'tala.satkhira.gov.bd', NULL, NULL),
(185, 21, 'Kaliganj', 'কালিগঞ্জ', '', '', 'kaliganj.satkhira.gov.bd', NULL, NULL),
(186, 22, 'Mujibnagar', 'মুজিবনগর', '', '', 'mujibnagar.meherpur.gov.bd', NULL, NULL),
(187, 22, 'Meherpur Sadar', 'মেহেরপুর সদর', '', '', 'meherpursadar.meherpur.gov.bd', NULL, NULL),
(188, 22, 'Gangni', 'গাংনী', '', '', 'gangni.meherpur.gov.bd', NULL, NULL),
(189, 23, 'Narail Sadar', 'নড়াইল সদর', '', '', 'narailsadar.narail.gov.bd', NULL, NULL),
(190, 23, 'Lohagara', 'লোহাগড়া', '', '', 'lohagara.narail.gov.bd', NULL, NULL),
(191, 23, 'Kalia', 'কালিয়া', '', '', 'kalia.narail.gov.bd', NULL, NULL),
(192, 24, 'Chuadanga Sadar', 'চুয়াডাঙ্গা সদর', '', '', 'chuadangasadar.chuadanga.gov.bd', NULL, NULL),
(193, 24, 'Alamdanga', 'আলমডাঙ্গা', '', '', 'alamdanga.chuadanga.gov.bd', NULL, NULL),
(194, 24, 'Damurhuda', 'দামুড়হুদা', '', '', 'damurhuda.chuadanga.gov.bd', NULL, NULL),
(195, 24, 'Jibannagar', 'জীবননগর', '', '', 'jibannagar.chuadanga.gov.bd', NULL, NULL),
(196, 25, 'Kushtia Sadar', 'কুষ্টিয়া সদর', '', '', 'kushtiasadar.kushtia.gov.bd', NULL, NULL),
(197, 25, 'Kumarkhali', 'কুমারখালী', '', '', 'kumarkhali.kushtia.gov.bd', NULL, NULL),
(198, 25, 'Khoksa', 'খোকসা', '', '', 'khoksa.kushtia.gov.bd', NULL, NULL),
(199, 25, 'Mirpur', 'মিরপুর', '', '', 'mirpurkushtia.kushtia.gov.bd', NULL, NULL),
(200, 25, 'Daulatpur', 'দৌলতপুর', '', '', 'daulatpur.kushtia.gov.bd', NULL, NULL),
(201, 25, 'Bheramara', 'ভেড়ামারা', '', '', 'bheramara.kushtia.gov.bd', NULL, NULL),
(202, 26, 'Shalikha', 'শালিখা', '', '', 'shalikha.magura.gov.bd', NULL, NULL),
(203, 26, 'Sreepur', 'শ্রীপুর', '', '', 'sreepur.magura.gov.bd', NULL, NULL),
(204, 26, 'Magura Sadar', 'মাগুরা সদর', '', '', 'magurasadar.magura.gov.bd', NULL, NULL),
(205, 26, 'Mohammadpur', 'মহম্মদপুর', '', '', 'mohammadpur.magura.gov.bd', NULL, NULL),
(206, 27, 'Paikgasa', 'পাইকগাছা', '', '', 'paikgasa.khulna.gov.bd', NULL, NULL),
(207, 27, 'Fultola', 'ফুলতলা', '', '', 'fultola.khulna.gov.bd', NULL, NULL),
(208, 27, 'Digholia', 'দিঘলিয়া', '', '', 'digholia.khulna.gov.bd', NULL, NULL),
(209, 27, 'Rupsha', 'রূপসা', '', '', 'rupsha.khulna.gov.bd', NULL, NULL),
(210, 27, 'Terokhada', 'তেরখাদা', '', '', 'terokhada.khulna.gov.bd', NULL, NULL),
(211, 27, 'Dumuria', 'ডুমুরিয়া', '', '', 'dumuria.khulna.gov.bd', NULL, NULL),
(212, 27, 'Botiaghata', 'বটিয়াঘাটা', '', '', 'botiaghata.khulna.gov.bd', NULL, NULL),
(213, 27, 'Dakop', 'দাকোপ', '', '', 'dakop.khulna.gov.bd', NULL, NULL),
(214, 27, 'Koyra', 'কয়রা', '', '', 'koyra.khulna.gov.bd', NULL, NULL),
(215, 28, 'Fakirhat', 'ফকিরহাট', '', '', 'fakirhat.bagerhat.gov.bd', NULL, NULL),
(216, 28, 'Bagerhat Sadar', 'বাগেরহাট সদর', '', '', 'sadar.bagerhat.gov.bd', NULL, NULL),
(217, 28, 'Mollahat', 'মোল্লাহাট', '', '', 'mollahat.bagerhat.gov.bd', NULL, NULL),
(218, 28, 'Sarankhola', 'শরণখোলা', '', '', 'sarankhola.bagerhat.gov.bd', NULL, NULL),
(219, 28, 'Rampal', 'রামপাল', '', '', 'rampal.bagerhat.gov.bd', NULL, NULL),
(220, 28, 'Morrelganj', 'মোড়েলগঞ্জ', '', '', 'morrelganj.bagerhat.gov.bd', NULL, NULL),
(221, 28, 'Kachua', 'কচুয়া', '', '', 'kachua.bagerhat.gov.bd', NULL, NULL),
(222, 28, 'Mongla', 'মোংলা', '', '', 'mongla.bagerhat.gov.bd', NULL, NULL),
(223, 28, 'Chitalmari', 'চিতলমারী', '', '', 'chitalmari.bagerhat.gov.bd', NULL, NULL),
(224, 29, 'Jhenaidah Sadar', 'ঝিনাইদহ সদর', '', '', 'sadar.jhenaidah.gov.bd', NULL, NULL),
(225, 29, 'Shailkupa', 'শৈলকুপা', '', '', 'shailkupa.jhenaidah.gov.bd', NULL, NULL),
(226, 29, 'Harinakundu', 'হরিণাকুন্ডু', '', '', 'harinakundu.jhenaidah.gov.bd', NULL, NULL),
(227, 29, 'Kaliganj', 'কালীগঞ্জ', '', '', 'kaliganj.jhenaidah.gov.bd', NULL, NULL),
(228, 29, 'Kotchandpur', 'কোটচাঁদপুর', '', '', 'kotchandpur.jhenaidah.gov.bd', NULL, NULL),
(229, 29, 'Moheshpur', 'মহেশপুর', '', '', 'moheshpur.jhenaidah.gov.bd', NULL, NULL),
(230, 30, 'Jhalakathi Sadar', 'ঝালকাঠি সদর', '', '', 'sadar.jhalakathi.gov.bd', NULL, NULL),
(231, 30, 'Kathalia', 'কাঠালিয়া', '', '', 'kathalia.jhalakathi.gov.bd', NULL, NULL),
(232, 30, 'Nalchity', 'নলছিটি', '', '', 'nalchity.jhalakathi.gov.bd', NULL, NULL),
(233, 30, 'Rajapur', 'রাজাপুর', '', '', 'rajapur.jhalakathi.gov.bd', NULL, NULL),
(234, 31, 'Bauphal', 'বাউফল', '', '', 'bauphal.patuakhali.gov.bd', NULL, NULL),
(235, 31, 'Patuakhali Sadar', 'পটুয়াখালী সদর', '', '', 'sadar.patuakhali.gov.bd', NULL, NULL),
(236, 31, 'Dumki', 'দুমকি', '', '', 'dumki.patuakhali.gov.bd', NULL, NULL),
(237, 31, 'Dashmina', 'দশমিনা', '', '', 'dashmina.patuakhali.gov.bd', NULL, NULL),
(238, 31, 'Kalapara', 'কলাপাড়া', '', '', 'kalapara.patuakhali.gov.bd', NULL, NULL),
(239, 31, 'Mirzaganj', 'মির্জাগঞ্জ', '', '', 'mirzaganj.patuakhali.gov.bd', NULL, NULL),
(240, 31, 'Galachipa', 'গলাচিপা', '', '', 'galachipa.patuakhali.gov.bd', NULL, NULL),
(241, 31, 'Rangabali', 'রাঙ্গাবালী', '', '', 'rangabali.patuakhali.gov.bd', NULL, NULL),
(242, 32, 'Pirojpur Sadar', 'পিরোজপুর সদর', '', '', 'sadar.pirojpur.gov.bd', NULL, NULL),
(243, 32, 'Nazirpur', 'নাজিরপুর', '', '', 'nazirpur.pirojpur.gov.bd', NULL, NULL),
(244, 32, 'Kawkhali', 'কাউখালী', '', '', 'kawkhali.pirojpur.gov.bd', NULL, NULL),
(245, 32, 'Zianagar', 'জিয়ানগর', '', '', 'zianagar.pirojpur.gov.bd', NULL, NULL),
(246, 32, 'Bhandaria', 'ভান্ডারিয়া', '', '', 'bhandaria.pirojpur.gov.bd', NULL, NULL),
(247, 32, 'Mathbaria', 'মঠবাড়ীয়া', '', '', 'mathbaria.pirojpur.gov.bd', NULL, NULL),
(248, 32, 'Nesarabad', 'নেছারাবাদ', '', '', 'nesarabad.pirojpur.gov.bd', NULL, NULL),
(249, 33, 'Barisal Sadar', 'বরিশাল সদর', '', '', 'barisalsadar.barisal.gov.bd', NULL, NULL),
(250, 33, 'Bakerganj', 'বাকেরগঞ্জ', '', '', 'bakerganj.barisal.gov.bd', NULL, NULL),
(251, 33, 'Babuganj', 'বাবুগঞ্জ', '', '', 'babuganj.barisal.gov.bd', NULL, NULL),
(252, 33, 'Wazirpur', 'উজিরপুর', '', '', 'wazirpur.barisal.gov.bd', NULL, NULL),
(253, 33, 'Banaripara', 'বানারীপাড়া', '', '', 'banaripara.barisal.gov.bd', NULL, NULL),
(254, 33, 'Gournadi', 'গৌরনদী', '', '', 'gournadi.barisal.gov.bd', NULL, NULL),
(255, 33, 'Agailjhara', 'আগৈলঝাড়া', '', '', 'agailjhara.barisal.gov.bd', NULL, NULL),
(256, 33, 'Mehendiganj', 'মেহেন্দিগঞ্জ', '', '', 'mehendiganj.barisal.gov.bd', NULL, NULL),
(257, 33, 'Muladi', 'মুলাদী', '', '', 'muladi.barisal.gov.bd', NULL, NULL),
(258, 33, 'Hizla', 'হিজলা', '', '', 'hizla.barisal.gov.bd', NULL, NULL),
(259, 34, 'Bhola Sadar', 'ভোলা সদর', '', '', 'sadar.bhola.gov.bd', NULL, NULL),
(260, 34, 'Borhan Sddin', 'বোরহান উদ্দিন', '', '', 'borhanuddin.bhola.gov.bd', NULL, NULL),
(261, 34, 'Charfesson', 'চরফ্যাশন', '', '', 'charfesson.bhola.gov.bd', NULL, NULL),
(262, 34, 'Doulatkhan', 'দৌলতখান', '', '', 'doulatkhan.bhola.gov.bd', NULL, NULL),
(263, 34, 'Monpura', 'মনপুরা', '', '', 'monpura.bhola.gov.bd', NULL, NULL),
(264, 34, 'Tazumuddin', 'তজুমদ্দিন', '', '', 'tazumuddin.bhola.gov.bd', NULL, NULL),
(265, 34, 'Lalmohan', 'লালমোহন', '', '', 'lalmohan.bhola.gov.bd', NULL, NULL),
(266, 35, 'Amtali', 'আমতলী', '', '', 'amtali.barguna.gov.bd', NULL, NULL),
(267, 35, 'Barguna Sadar', 'বরগুনা সদর', '', '', 'sadar.barguna.gov.bd', NULL, NULL),
(268, 35, 'Betagi', 'বেতাগী', '', '', 'betagi.barguna.gov.bd', NULL, NULL),
(269, 35, 'Bamna', 'বামনা', '', '', 'bamna.barguna.gov.bd', NULL, NULL),
(270, 35, 'Pathorghata', 'পাথরঘাটা', '', '', 'pathorghata.barguna.gov.bd', NULL, NULL),
(271, 35, 'Taltali', 'তালতলি', '', '', 'taltali.barguna.gov.bd', NULL, NULL),
(272, 36, 'Balaganj', 'বালাগঞ্জ', '', '', 'balaganj.sylhet.gov.bd', NULL, NULL),
(273, 36, 'Beanibazar', 'বিয়ানীবাজার', '', '', 'beanibazar.sylhet.gov.bd', NULL, NULL),
(274, 36, 'Bishwanath', 'বিশ্বনাথ', '', '', 'bishwanath.sylhet.gov.bd', NULL, NULL),
(275, 36, 'Companiganj', 'কোম্পানীগঞ্জ', '', '', 'companiganj.sylhet.gov.bd', NULL, NULL),
(276, 36, 'Fenchuganj', 'ফেঞ্চুগঞ্জ', '', '', 'fenchuganj.sylhet.gov.bd', NULL, NULL),
(277, 36, 'Golapganj', 'গোলাপগঞ্জ', '', '', 'golapganj.sylhet.gov.bd', NULL, NULL),
(278, 36, 'Gowainghat', 'গোয়াইনঘাট', '', '', 'gowainghat.sylhet.gov.bd', NULL, NULL),
(279, 36, 'Jaintiapur', 'জৈন্তাপুর', '', '', 'jaintiapur.sylhet.gov.bd', NULL, NULL),
(280, 36, 'Kanaighat', 'কানাইঘাট', '', '', 'kanaighat.sylhet.gov.bd', NULL, NULL),
(281, 36, 'Sylhet Sadar', 'সিলেট সদর', '', '', 'sylhetsadar.sylhet.gov.bd', NULL, NULL),
(282, 36, 'Zakiganj', 'জকিগঞ্জ', '', '', 'zakiganj.sylhet.gov.bd', NULL, NULL),
(283, 36, 'Dakshinsurma', 'দক্ষিণ সুরমা', '', '', 'dakshinsurma.sylhet.gov.bd', NULL, NULL),
(284, 36, 'Osmaninagar', 'ওসমানী নগর', '', '', 'osmaninagar.sylhet.gov.bd', NULL, NULL),
(285, 37, 'Barlekha', 'বড়লেখা', '', '', 'barlekha.moulvibazar.gov.bd', NULL, NULL),
(286, 37, 'Kamolganj', 'কমলগঞ্জ', '', '', 'kamolganj.moulvibazar.gov.bd', NULL, NULL),
(287, 37, 'Kulaura', 'কুলাউড়া', '', '', 'kulaura.moulvibazar.gov.bd', NULL, NULL),
(288, 37, 'Moulvibazar Sadar', 'মৌলভীবাজার সদর', '', '', 'moulvibazarsadar.moulvibazar.gov.bd', NULL, NULL),
(289, 37, 'Rajnagar', 'রাজনগর', '', '', 'rajnagar.moulvibazar.gov.bd', NULL, NULL),
(290, 37, 'Sreemangal', 'শ্রীমঙ্গল', '', '', 'sreemangal.moulvibazar.gov.bd', NULL, NULL),
(291, 37, 'Juri', 'জুড়ী', '', '', 'juri.moulvibazar.gov.bd', NULL, NULL),
(292, 38, 'Nabiganj', 'নবীগঞ্জ', '', '', 'nabiganj.habiganj.gov.bd', NULL, NULL),
(293, 38, 'Bahubal', 'বাহুবল', '', '', 'bahubal.habiganj.gov.bd', NULL, NULL),
(294, 38, 'Ajmiriganj', 'আজমিরীগঞ্জ', '', '', 'ajmiriganj.habiganj.gov.bd', NULL, NULL),
(295, 38, 'Baniachong', 'বানিয়াচং', '', '', 'baniachong.habiganj.gov.bd', NULL, NULL),
(296, 38, 'Lakhai', 'লাখাই', '', '', 'lakhai.habiganj.gov.bd', NULL, NULL),
(297, 38, 'Chunarughat', 'চুনারুঘাট', '', '', 'chunarughat.habiganj.gov.bd', NULL, NULL),
(298, 38, 'Habiganj Sadar', 'হবিগঞ্জ সদর', '', '', 'habiganjsadar.habiganj.gov.bd', NULL, NULL),
(299, 38, 'Madhabpur', 'মাধবপুর', '', '', 'madhabpur.habiganj.gov.bd', NULL, NULL),
(300, 39, 'Sunamganj Sadar', 'সুনামগঞ্জ সদর', '', '', 'sadar.sunamganj.gov.bd', NULL, NULL),
(301, 39, 'South Sunamganj', 'দক্ষিণ সুনামগঞ্জ', '', '', 'southsunamganj.sunamganj.gov.bd', NULL, NULL),
(302, 39, 'Bishwambarpur', 'বিশ্বম্ভরপুর', '', '', 'bishwambarpur.sunamganj.gov.bd', NULL, NULL),
(303, 39, 'Chhatak', 'ছাতক', '', '', 'chhatak.sunamganj.gov.bd', NULL, NULL),
(304, 39, 'Jagannathpur', 'জগন্নাথপুর', '', '', 'jagannathpur.sunamganj.gov.bd', NULL, NULL),
(305, 39, 'Dowarabazar', 'দোয়ারাবাজার', '', '', 'dowarabazar.sunamganj.gov.bd', NULL, NULL),
(306, 39, 'Tahirpur', 'তাহিরপুর', '', '', 'tahirpur.sunamganj.gov.bd', NULL, NULL),
(307, 39, 'Dharmapasha', 'ধর্মপাশা', '', '', 'dharmapasha.sunamganj.gov.bd', NULL, NULL),
(308, 39, 'Jamalganj', 'জামালগঞ্জ', '', '', 'jamalganj.sunamganj.gov.bd', NULL, NULL),
(309, 39, 'Shalla', 'শাল্লা', '', '', 'shalla.sunamganj.gov.bd', NULL, NULL),
(310, 39, 'Derai', 'দিরাই', '', '', 'derai.sunamganj.gov.bd', NULL, NULL),
(311, 40, 'Belabo', 'বেলাবো', '', '', 'belabo.narsingdi.gov.bd', NULL, NULL),
(312, 40, 'Monohardi', 'মনোহরদী', '', '', 'monohardi.narsingdi.gov.bd', NULL, NULL),
(313, 40, 'Narsingdi Sadar', 'নরসিংদী সদর', '', '', 'narsingdisadar.narsingdi.gov.bd', NULL, NULL),
(314, 40, 'Palash', 'পলাশ', '', '', 'palash.narsingdi.gov.bd', NULL, NULL),
(315, 40, 'Raipura', 'রায়পুরা', '', '', 'raipura.narsingdi.gov.bd', NULL, NULL),
(316, 40, 'Shibpur', 'শিবপুর', '', '', 'shibpur.narsingdi.gov.bd', NULL, NULL),
(317, 41, 'Kaliganj', 'কালীগঞ্জ', '', '', 'kaliganj.gazipur.gov.bd', NULL, NULL),
(318, 41, 'Kaliakair', 'কালিয়াকৈর', '', '', 'kaliakair.gazipur.gov.bd', NULL, NULL),
(319, 41, 'Kapasia', 'কাপাসিয়া', '', '', 'kapasia.gazipur.gov.bd', NULL, NULL),
(320, 41, 'Gazipur Sadar', 'গাজীপুর সদর', '', '', 'sadar.gazipur.gov.bd', NULL, NULL),
(321, 41, 'Sreepur', 'শ্রীপুর', '', '', 'sreepur.gazipur.gov.bd', NULL, NULL),
(322, 42, 'Shariatpur Sadar', 'শরিয়তপুর সদর', '', '', 'sadar.shariatpur.gov.bd', NULL, NULL),
(323, 42, 'Naria', 'নড়িয়া', '', '', 'naria.shariatpur.gov.bd', NULL, NULL),
(324, 42, 'Zajira', 'জাজিরা', '', '', 'zajira.shariatpur.gov.bd', NULL, NULL),
(325, 42, 'Gosairhat', 'গোসাইরহাট', '', '', 'gosairhat.shariatpur.gov.bd', NULL, NULL),
(326, 42, 'Bhedarganj', 'ভেদরগঞ্জ', '', '', 'bhedarganj.shariatpur.gov.bd', NULL, NULL),
(327, 42, 'Damudya', 'ডামুড্যা', '', '', 'damudya.shariatpur.gov.bd', NULL, NULL),
(328, 43, 'Araihazar', 'আড়াইহাজার', '', '', 'araihazar.narayanganj.gov.bd', NULL, NULL),
(329, 43, 'Bandar', 'বন্দর', '', '', 'bandar.narayanganj.gov.bd', NULL, NULL),
(330, 43, 'Narayanganj Sadar', 'নারায়নগঞ্জ সদর', '', '', 'narayanganjsadar.narayanganj.gov.bd', NULL, NULL),
(331, 43, 'Rupganj', 'রূপগঞ্জ', '', '', 'rupganj.narayanganj.gov.bd', NULL, NULL),
(332, 43, 'Sonargaon', 'সোনারগাঁ', '', '', 'sonargaon.narayanganj.gov.bd', NULL, NULL),
(333, 44, 'Basail', 'বাসাইল', '', '', 'basail.tangail.gov.bd', NULL, NULL),
(334, 44, 'Bhuapur', 'ভুয়াপুর', '', '', 'bhuapur.tangail.gov.bd', NULL, NULL),
(335, 44, 'Delduar', 'দেলদুয়ার', '', '', 'delduar.tangail.gov.bd', NULL, NULL),
(336, 44, 'Ghatail', 'ঘাটাইল', '', '', 'ghatail.tangail.gov.bd', NULL, NULL),
(337, 44, 'Gopalpur', 'গোপালপুর', '', '', 'gopalpur.tangail.gov.bd', NULL, NULL),
(338, 44, 'Madhupur', 'মধুপুর', '', '', 'madhupur.tangail.gov.bd', NULL, NULL),
(339, 44, 'Mirzapur', 'মির্জাপুর', '', '', 'mirzapur.tangail.gov.bd', NULL, NULL),
(340, 44, 'Nagarpur', 'নাগরপুর', '', '', 'nagarpur.tangail.gov.bd', NULL, NULL),
(341, 44, 'Sakhipur', 'সখিপুর', '', '', 'sakhipur.tangail.gov.bd', NULL, NULL),
(342, 44, 'Tangail Sadar', 'টাঙ্গাইল সদর', '', '', 'tangailsadar.tangail.gov.bd', NULL, NULL),
(343, 44, 'Kalihati', 'কালিহাতী', '', '', 'kalihati.tangail.gov.bd', NULL, NULL),
(344, 44, 'Dhanbari', 'ধনবাড়ী', '', '', 'dhanbari.tangail.gov.bd', NULL, NULL),
(345, 45, 'Itna', 'ইটনা', '', '', 'itna.kishoreganj.gov.bd', NULL, NULL),
(346, 45, 'Katiadi', 'কটিয়াদী', '', '', 'katiadi.kishoreganj.gov.bd', NULL, NULL),
(347, 45, 'Bhairab', 'ভৈরব', '', '', 'bhairab.kishoreganj.gov.bd', NULL, NULL),
(348, 45, 'Tarail', 'তাড়াইল', '', '', 'tarail.kishoreganj.gov.bd', NULL, NULL),
(349, 45, 'Hossainpur', 'হোসেনপুর', '', '', 'hossainpur.kishoreganj.gov.bd', NULL, NULL),
(350, 45, 'Pakundia', 'পাকুন্দিয়া', '', '', 'pakundia.kishoreganj.gov.bd', NULL, NULL),
(351, 45, 'Kuliarchar', 'কুলিয়ারচর', '', '', 'kuliarchar.kishoreganj.gov.bd', NULL, NULL),
(352, 45, 'Kishoreganj Sadar', 'কিশোরগঞ্জ সদর', '', '', 'kishoreganjsadar.kishoreganj.gov.bd', NULL, NULL),
(353, 45, 'Karimgonj', 'করিমগঞ্জ', '', '', 'karimgonj.kishoreganj.gov.bd', NULL, NULL),
(354, 45, 'Bajitpur', 'বাজিতপুর', '', '', 'bajitpur.kishoreganj.gov.bd', NULL, NULL),
(355, 45, 'Austagram', 'অষ্টগ্রাম', '', '', 'austagram.kishoreganj.gov.bd', NULL, NULL),
(356, 45, 'Mithamoin', 'মিঠামইন', '', '', 'mithamoin.kishoreganj.gov.bd', NULL, NULL),
(357, 45, 'Nikli', 'নিকলী', '', '', 'nikli.kishoreganj.gov.bd', NULL, NULL),
(358, 46, 'Harirampur', 'হরিরামপুর', '', '', 'harirampur.manikganj.gov.bd', NULL, NULL),
(359, 46, 'Saturia', 'সাটুরিয়া', '', '', 'saturia.manikganj.gov.bd', NULL, NULL),
(360, 46, 'Manikganj Sadar', 'মানিকগঞ্জ সদর', '', '', 'sadar.manikganj.gov.bd', NULL, NULL),
(361, 46, 'Gior', 'ঘিওর', '', '', 'gior.manikganj.gov.bd', NULL, NULL),
(362, 46, 'Shibaloy', 'শিবালয়', '', '', 'shibaloy.manikganj.gov.bd', NULL, NULL),
(363, 46, 'Doulatpur', 'দৌলতপুর', '', '', 'doulatpur.manikganj.gov.bd', NULL, NULL),
(364, 46, 'Singiar', 'সিংগাইর', '', '', 'singiar.manikganj.gov.bd', NULL, NULL),
(365, 47, 'Savar', 'সাভার', '', '', 'savar.dhaka.gov.bd', NULL, NULL),
(366, 47, 'Dhamrai', 'ধামরাই', '', '', 'dhamrai.dhaka.gov.bd', NULL, NULL),
(367, 47, 'Keraniganj', 'কেরাণীগঞ্জ', '', '', 'keraniganj.dhaka.gov.bd', NULL, NULL),
(368, 47, 'Nawabganj', 'নবাবগঞ্জ', '', '', 'nawabganj.dhaka.gov.bd', NULL, NULL),
(369, 47, 'Dohar', 'দোহার', '', '', 'dohar.dhaka.gov.bd', NULL, NULL),
(370, 48, 'Munshiganj Sadar', 'মুন্সিগঞ্জ সদর', '', '', 'sadar.munshiganj.gov.bd', NULL, NULL),
(371, 48, 'Sreenagar', 'শ্রীনগর', '', '', 'sreenagar.munshiganj.gov.bd', NULL, NULL),
(372, 48, 'Sirajdikhan', 'সিরাজদিখান', '', '', 'sirajdikhan.munshiganj.gov.bd', NULL, NULL),
(373, 48, 'Louhajanj', 'লৌহজং', '', '', 'louhajanj.munshiganj.gov.bd', NULL, NULL),
(374, 48, 'Gajaria', 'গজারিয়া', '', '', 'gajaria.munshiganj.gov.bd', NULL, NULL),
(375, 48, 'Tongibari', 'টংগীবাড়ি', '', '', 'tongibari.munshiganj.gov.bd', NULL, NULL),
(376, 49, 'Rajbari Sadar', 'রাজবাড়ী সদর', '', '', 'sadar.rajbari.gov.bd', NULL, NULL),
(377, 49, 'Goalanda', 'গোয়ালন্দ', '', '', 'goalanda.rajbari.gov.bd', NULL, NULL),
(378, 49, 'Pangsa', 'পাংশা', '', '', 'pangsa.rajbari.gov.bd', NULL, NULL),
(379, 49, 'Baliakandi', 'বালিয়াকান্দি', '', '', 'baliakandi.rajbari.gov.bd', NULL, NULL),
(380, 49, 'Kalukhali', 'কালুখালী', '', '', 'kalukhali.rajbari.gov.bd', NULL, NULL),
(381, 50, 'Madaripur Sadar', 'মাদারীপুর সদর', '', '', 'sadar.madaripur.gov.bd', NULL, NULL),
(382, 50, 'Shibchar', 'শিবচর', '', '', 'shibchar.madaripur.gov.bd', NULL, NULL),
(383, 50, 'Kalkini', 'কালকিনি', '', '', 'kalkini.madaripur.gov.bd', NULL, NULL),
(384, 50, 'Rajoir', 'রাজৈর', '', '', 'rajoir.madaripur.gov.bd', NULL, NULL),
(385, 51, 'Gopalganj Sadar', 'গোপালগঞ্জ সদর', '', '', 'sadar.gopalganj.gov.bd', NULL, NULL),
(386, 51, 'Kashiani', 'কাশিয়ানী', '', '', 'kashiani.gopalganj.gov.bd', NULL, NULL),
(387, 51, 'Tungipara', 'টুংগীপাড়া', '', '', 'tungipara.gopalganj.gov.bd', NULL, NULL),
(388, 51, 'Kotalipara', 'কোটালীপাড়া', '', '', 'kotalipara.gopalganj.gov.bd', NULL, NULL),
(389, 51, 'Muksudpur', 'মুকসুদপুর', '', '', 'muksudpur.gopalganj.gov.bd', NULL, NULL),
(390, 52, 'Faridpur Sadar', 'ফরিদপুর সদর', '', '', 'sadar.faridpur.gov.bd', NULL, NULL),
(391, 52, 'Alfadanga', 'আলফাডাঙ্গা', '', '', 'alfadanga.faridpur.gov.bd', NULL, NULL),
(392, 52, 'Boalmari', 'বোয়ালমারী', '', '', 'boalmari.faridpur.gov.bd', NULL, NULL),
(393, 52, 'Sadarpur', 'সদরপুর', '', '', 'sadarpur.faridpur.gov.bd', NULL, NULL),
(394, 52, 'Nagarkanda', 'নগরকান্দা', '', '', 'nagarkanda.faridpur.gov.bd', NULL, NULL),
(395, 52, 'Bhanga', 'ভাঙ্গা', '', '', 'bhanga.faridpur.gov.bd', NULL, NULL),
(396, 52, 'Charbhadrasan', 'চরভদ্রাসন', '', '', 'charbhadrasan.faridpur.gov.bd', NULL, NULL),
(397, 52, 'Madhukhali', 'মধুখালী', '', '', 'madhukhali.faridpur.gov.bd', NULL, NULL),
(398, 52, 'Saltha', 'সালথা', '', '', 'saltha.faridpur.gov.bd', NULL, NULL),
(399, 53, 'Panchagarh Sadar', 'পঞ্চগড় সদর', '', '', 'panchagarhsadar.panchagarh.gov.bd', NULL, NULL),
(400, 53, 'Debiganj', 'দেবীগঞ্জ', '', '', 'debiganj.panchagarh.gov.bd', NULL, NULL),
(401, 53, 'Boda', 'বোদা', '', '', 'boda.panchagarh.gov.bd', NULL, NULL),
(402, 53, 'Atwari', 'আটোয়ারী', '', '', 'atwari.panchagarh.gov.bd', NULL, NULL),
(403, 53, 'Tetulia', 'তেতুলিয়া', '', '', 'tetulia.panchagarh.gov.bd', NULL, NULL),
(404, 54, 'Nawabganj', 'নবাবগঞ্জ', '', '', 'nawabganj.dinajpur.gov.bd', NULL, NULL),
(405, 54, 'Birganj', 'বীরগঞ্জ', '', '', 'birganj.dinajpur.gov.bd', NULL, NULL),
(406, 54, 'Ghoraghat', 'ঘোড়াঘাট', '', '', 'ghoraghat.dinajpur.gov.bd', NULL, NULL),
(407, 54, 'Birampur', 'বিরামপুর', '', '', 'birampur.dinajpur.gov.bd', NULL, NULL),
(408, 54, 'Parbatipur', 'পার্বতীপুর', '', '', 'parbatipur.dinajpur.gov.bd', NULL, NULL),
(409, 54, 'Bochaganj', 'বোচাগঞ্জ', '', '', 'bochaganj.dinajpur.gov.bd', NULL, NULL),
(410, 54, 'Kaharol', 'কাহারোল', '', '', 'kaharol.dinajpur.gov.bd', NULL, NULL),
(411, 54, 'Fulbari', 'ফুলবাড়ী', '', '', 'fulbari.dinajpur.gov.bd', NULL, NULL),
(412, 54, 'Dinajpur Sadar', 'দিনাজপুর সদর', '', '', 'dinajpursadar.dinajpur.gov.bd', NULL, NULL),
(413, 54, 'Hakimpur', 'হাকিমপুর', '', '', 'hakimpur.dinajpur.gov.bd', NULL, NULL),
(414, 54, 'Khansama', 'খানসামা', '', '', 'khansama.dinajpur.gov.bd', NULL, NULL),
(415, 54, 'Birol', 'বিরল', '', '', 'birol.dinajpur.gov.bd', NULL, NULL),
(416, 54, 'Chirirbandar', 'চিরিরবন্দর', '', '', 'chirirbandar.dinajpur.gov.bd', NULL, NULL),
(417, 55, 'Lalmonirhat Sadar', 'লালমনিরহাট সদর', '', '', 'sadar.lalmonirhat.gov.bd', NULL, NULL),
(418, 55, 'Kaliganj', 'কালীগঞ্জ', '', '', 'kaliganj.lalmonirhat.gov.bd', NULL, NULL),
(419, 55, 'Hatibandha', 'হাতীবান্ধা', '', '', 'hatibandha.lalmonirhat.gov.bd', NULL, NULL),
(420, 55, 'Patgram', 'পাটগ্রাম', '', '', 'patgram.lalmonirhat.gov.bd', NULL, NULL),
(421, 55, 'Aditmari', 'আদিতমারী', '', '', 'aditmari.lalmonirhat.gov.bd', NULL, NULL),
(422, 56, 'Syedpur', 'সৈয়দপুর', '', '', 'syedpur.nilphamari.gov.bd', NULL, NULL),
(423, 56, 'Domar', 'ডোমার', '', '', 'domar.nilphamari.gov.bd', NULL, NULL),
(424, 56, 'Dimla', 'ডিমলা', '', '', 'dimla.nilphamari.gov.bd', NULL, NULL),
(425, 56, 'Jaldhaka', 'জলঢাকা', '', '', 'jaldhaka.nilphamari.gov.bd', NULL, NULL),
(426, 56, 'Kishorganj', 'কিশোরগঞ্জ', '', '', 'kishorganj.nilphamari.gov.bd', NULL, NULL),
(427, 56, 'Nilphamari Sadar', 'নীলফামারী সদর', '', '', 'nilphamarisadar.nilphamari.gov.bd', NULL, NULL),
(428, 57, 'Sadullapur', 'সাদুল্লাপুর', '', '', 'sadullapur.gaibandha.gov.bd', NULL, NULL),
(429, 57, 'Gaibandha Sadar', 'গাইবান্ধা সদর', '', '', 'gaibandhasadar.gaibandha.gov.bd', NULL, NULL),
(430, 57, 'Palashbari', 'পলাশবাড়ী', '', '', 'palashbari.gaibandha.gov.bd', NULL, NULL),
(431, 57, 'Saghata', 'সাঘাটা', '', '', 'saghata.gaibandha.gov.bd', NULL, NULL),
(432, 57, 'Gobindaganj', 'গোবিন্দগঞ্জ', '', '', 'gobindaganj.gaibandha.gov.bd', NULL, NULL),
(433, 57, 'Sundarganj', 'সুন্দরগঞ্জ', '', '', 'sundarganj.gaibandha.gov.bd', NULL, NULL),
(434, 57, 'Phulchari', 'ফুলছড়ি', '', '', 'phulchari.gaibandha.gov.bd', NULL, NULL),
(435, 58, 'Thakurgaon Sadar', 'ঠাকুরগাঁও সদর', '', '', 'thakurgaonsadar.thakurgaon.gov.bd', NULL, NULL),
(436, 58, 'Pirganj', 'পীরগঞ্জ', '', '', 'pirganj.thakurgaon.gov.bd', NULL, NULL),
(437, 58, 'Ranisankail', 'রাণীশংকৈল', '', '', 'ranisankail.thakurgaon.gov.bd', NULL, NULL),
(438, 58, 'Haripur', 'হরিপুর', '', '', 'haripur.thakurgaon.gov.bd', NULL, NULL),
(439, 58, 'Baliadangi', 'বালিয়াডাঙ্গী', '', '', 'baliadangi.thakurgaon.gov.bd', NULL, NULL),
(440, 59, 'Rangpur Sadar', 'রংপুর সদর', '', '', 'rangpursadar.rangpur.gov.bd', NULL, NULL),
(441, 59, 'Gangachara', 'গংগাচড়া', '', '', 'gangachara.rangpur.gov.bd', NULL, NULL),
(442, 59, 'Taragonj', 'তারাগঞ্জ', '', '', 'taragonj.rangpur.gov.bd', NULL, NULL),
(443, 59, 'Badargonj', 'বদরগঞ্জ', '', '', 'badargonj.rangpur.gov.bd', NULL, NULL),
(444, 59, 'Mithapukur', 'মিঠাপুকুর', '', '', 'mithapukur.rangpur.gov.bd', NULL, NULL),
(445, 59, 'Pirgonj', 'পীরগঞ্জ', '', '', 'pirgonj.rangpur.gov.bd', NULL, NULL),
(446, 59, 'Kaunia', 'কাউনিয়া', '', '', 'kaunia.rangpur.gov.bd', NULL, NULL),
(447, 59, 'Pirgacha', 'পীরগাছা', '', '', 'pirgacha.rangpur.gov.bd', NULL, NULL),
(448, 60, 'Kurigram Sadar', 'কুড়িগ্রাম সদর', '', '', 'kurigramsadar.kurigram.gov.bd', NULL, NULL),
(449, 60, 'Nageshwari', 'নাগেশ্বরী', '', '', 'nageshwari.kurigram.gov.bd', NULL, NULL),
(450, 60, 'Bhurungamari', 'ভুরুঙ্গামারী', '', '', 'bhurungamari.kurigram.gov.bd', NULL, NULL),
(451, 60, 'Phulbari', 'ফুলবাড়ী', '', '', 'phulbari.kurigram.gov.bd', NULL, NULL),
(452, 60, 'Rajarhat', 'রাজারহাট', '', '', 'rajarhat.kurigram.gov.bd', NULL, NULL),
(453, 60, 'Ulipur', 'উলিপুর', '', '', 'ulipur.kurigram.gov.bd', NULL, NULL),
(454, 60, 'Chilmari', 'চিলমারী', '', '', 'chilmari.kurigram.gov.bd', NULL, NULL),
(455, 60, 'Rowmari', 'রৌমারী', '', '', 'rowmari.kurigram.gov.bd', NULL, NULL),
(456, 60, 'Charrajibpur', 'চর রাজিবপুর', '', '', 'charrajibpur.kurigram.gov.bd', NULL, NULL),
(457, 61, 'Sherpur Sadar', 'শেরপুর সদর', '', '', 'sherpursadar.sherpur.gov.bd', NULL, NULL),
(458, 61, 'Nalitabari', 'নালিতাবাড়ী', '', '', 'nalitabari.sherpur.gov.bd', NULL, NULL),
(459, 61, 'Sreebordi', 'শ্রীবরদী', '', '', 'sreebordi.sherpur.gov.bd', NULL, NULL),
(460, 61, 'Nokla', 'নকলা', '', '', 'nokla.sherpur.gov.bd', NULL, NULL),
(461, 61, 'Jhenaigati', 'ঝিনাইগাতী', '', '', 'jhenaigati.sherpur.gov.bd', NULL, NULL),
(462, 62, 'Fulbaria', 'ফুলবাড়ীয়া', '', '', 'fulbaria.mymensingh.gov.bd', NULL, NULL),
(463, 62, 'Trishal', 'ত্রিশাল', '', '', 'trishal.mymensingh.gov.bd', NULL, NULL),
(464, 62, 'Bhaluka', 'ভালুকা', '', '', 'bhaluka.mymensingh.gov.bd', NULL, NULL),
(465, 62, 'Muktagacha', 'মুক্তাগাছা', '', '', 'muktagacha.mymensingh.gov.bd', NULL, NULL),
(466, 62, 'Mymensingh Sadar', 'ময়মনসিংহ সদর', '', '', 'mymensinghsadar.mymensingh.gov.bd', NULL, NULL),
(467, 62, 'Dhobaura', 'ধোবাউড়া', '', '', 'dhobaura.mymensingh.gov.bd', NULL, NULL),
(468, 62, 'Phulpur', 'ফুলপুর', '', '', 'phulpur.mymensingh.gov.bd', NULL, NULL),
(469, 62, 'Haluaghat', 'হালুয়াঘাট', '', '', 'haluaghat.mymensingh.gov.bd', NULL, NULL),
(470, 62, 'Gouripur', 'গৌরীপুর', '', '', 'gouripur.mymensingh.gov.bd', NULL, NULL),
(471, 62, 'Gafargaon', 'গফরগাঁও', '', '', 'gafargaon.mymensingh.gov.bd', NULL, NULL),
(472, 62, 'Iswarganj', 'ঈশ্বরগঞ্জ', '', '', 'iswarganj.mymensingh.gov.bd', NULL, NULL),
(473, 62, 'Nandail', 'নান্দাইল', '', '', 'nandail.mymensingh.gov.bd', NULL, NULL),
(474, 62, 'Tarakanda', 'তারাকান্দা', '', '', 'tarakanda.mymensingh.gov.bd', NULL, NULL),
(475, 63, 'Jamalpur Sadar', 'জামালপুর সদর', '', '', 'jamalpursadar.jamalpur.gov.bd', NULL, NULL),
(476, 63, 'Melandah', 'মেলান্দহ', '', '', 'melandah.jamalpur.gov.bd', NULL, NULL),
(477, 63, 'Islampur', 'ইসলামপুর', '', '', 'islampur.jamalpur.gov.bd', NULL, NULL),
(478, 63, 'Dewangonj', 'দেওয়ানগঞ্জ', '', '', 'dewangonj.jamalpur.gov.bd', NULL, NULL),
(479, 63, 'Sarishabari', 'সরিষাবাড়ী', '', '', 'sarishabari.jamalpur.gov.bd', NULL, NULL),
(480, 63, 'Madarganj', 'মাদারগঞ্জ', '', '', 'madarganj.jamalpur.gov.bd', NULL, NULL),
(481, 63, 'Bokshiganj', 'বকশীগঞ্জ', '', '', 'bokshiganj.jamalpur.gov.bd', NULL, NULL),
(482, 64, 'Barhatta', 'বারহাট্টা', '', '', 'barhatta.netrokona.gov.bd', NULL, NULL),
(483, 64, 'Durgapur', 'দুর্গাপুর', '', '', 'durgapur.netrokona.gov.bd', NULL, NULL),
(484, 64, 'Kendua', 'কেন্দুয়া', '', '', 'kendua.netrokona.gov.bd', NULL, NULL),
(485, 64, 'Atpara', 'আটপাড়া', '', '', 'atpara.netrokona.gov.bd', NULL, NULL),
(486, 64, 'Madan', 'মদন', '', '', 'madan.netrokona.gov.bd', NULL, NULL),
(487, 64, 'Khaliajuri', 'খালিয়াজুরী', '', '', 'khaliajuri.netrokona.gov.bd', NULL, NULL),
(488, 64, 'Kalmakanda', 'কলমাকান্দা', '', '', 'kalmakanda.netrokona.gov.bd', NULL, NULL),
(489, 64, 'Mohongonj', 'মোহনগঞ্জ', '', '', 'mohongonj.netrokona.gov.bd', NULL, NULL),
(490, 64, 'Purbadhala', 'পূর্বধলা', '', '', 'purbadhala.netrokona.gov.bd', NULL, NULL),
(491, 64, 'Netrokona Sadar', 'নেত্রকোণা সদর', '', '', 'netrokonasadar.netrokona.gov.bd', NULL, NULL),
(492, 47, 'Adabor', 'Adabor', '', '', '', NULL, NULL),
(493, 47, 'Uttar Khan', 'Uttar Khan', '', '', '', NULL, NULL),
(494, 47, 'Uttara', 'Uttara', '', '', '', NULL, NULL),
(495, 47, 'Kadamtali', 'Kadamtali', '', '', '', NULL, NULL),
(496, 47, 'Kalabagan', 'Kalabagan', '', '', '', NULL, NULL),
(497, 47, 'Kafrul', 'Kafrul', '', '', '', NULL, NULL),
(498, 47, 'Kamrangirchar', 'Kamrangirchar', '', '', '', NULL, NULL),
(499, 47, 'Cantonment', 'Cantonment', '', '', '', NULL, NULL),
(500, 47, 'Kotwali', 'Kotwali', '', '', '', NULL, NULL),
(501, 47, 'Khilkhet', 'Khilkhet', '', '', '', NULL, NULL),
(502, 47, 'Khilgaon', 'Khilgaon', '', '', '', NULL, NULL),
(503, 47, 'Gulshan', 'Gulshan', '', '', '', NULL, NULL),
(504, 47, 'Gendaria', 'Gendaria', '', '', '', NULL, NULL),
(505, 47, 'Chawkbazar Model	', 'Chawkbazar Model	', '', '', '', NULL, NULL),
(506, 47, 'Demra', 'Demra', '', '', '', NULL, NULL),
(507, 47, 'Turag', 'Turag', '', '', '', NULL, NULL),
(508, 47, 'Tejgaon', 'Tejgaon', '', '', '', NULL, NULL),
(509, 47, 'Tejgaon I/A	', 'Tejgaon I/A	', '', '', '', NULL, NULL),
(510, 47, 'Dakshinkhan', 'Dakshinkhan', '', '', '', NULL, NULL),
(511, 47, 'Darus Salam	', 'Darus Salam	', '', '', '', NULL, NULL),
(512, 47, 'Dhanmondi', 'Dhanmondi', '', '', '', NULL, NULL),
(513, 47, 'New Market	', 'New Market	', '', '', '', NULL, NULL),
(514, 47, 'Paltan', 'Paltan', '', '', '', NULL, NULL),
(515, 47, 'Pallabi', 'Pallabi', '', '', '', NULL, NULL),
(516, 47, 'Bangshal', 'Bangshal', '', '', '', NULL, NULL),
(517, 47, 'Badda', 'Badda', '', '', '', NULL, NULL),
(518, 47, 'Bimanbandar', 'Bimanbandar', '', '', '', NULL, NULL),
(519, 47, 'Motijheel', 'Motijheel', '', '', '', NULL, NULL),
(520, 47, 'Mirpur Model	', 'Mirpur Model	', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `complain` varchar(255) NOT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `concave_bkash_response`
--

CREATE TABLE `concave_bkash_response` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currency` varchar(255) NOT NULL,
  `amount` decimal(12,2) NOT NULL,
  `invoice_number` varchar(255) NOT NULL,
  `intent` varchar(255) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `trxID` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_infos`
--

CREATE TABLE `contact_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_name` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `hotline` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `officetime` longtext DEFAULT NULL,
  `googlemap` longtext DEFAULT NULL,
  `imo` varchar(255) DEFAULT NULL,
  `wechat` varchar(255) DEFAULT NULL,
  `viber` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_infos`
--

INSERT INTO `contact_infos` (`id`, `branch_name`, `logo`, `favicon`, `hotline`, `phone`, `email`, `address`, `officetime`, `googlemap`, `imo`, `wechat`, `viber`, `whatsapp`, `created_at`, `updated_at`) VALUES
(1, '10BAZAR.STORE', '1748704255logo.jpg', '1748704255favicon.jpg', '01720085127', '01720085127', '10BAZAR.STORE@GMAL.COM', 'Sector#07, Uttara, Dhaka.', NULL, NULL, '01705210280', NULL, NULL, '01832191722', '2023-08-26 12:48:10', '2025-05-31 09:10:55'),
(2, '10BAZAR.STORE', '1748704280logo.jpg', '1748704280favicon.jpg', '01720085127', '01720085127', '10BAZAR.STORE@GMAL.COM', 'Sector-7 Uttara Dhaka', NULL, NULL, NULL, NULL, NULL, '01832191722', '2023-09-11 08:52:18', '2025-05-31 09:11:20');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `google_id` varchar(255) DEFAULT NULL,
  `facebook_id` varchar(255) DEFAULT NULL,
  `linkedin_id` varchar(255) DEFAULT NULL,
  `virification` varchar(255) DEFAULT NULL,
  `balance` varchar(255) NOT NULL DEFAULT '0',
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `email`, `address`, `images`, `password`, `google_id`, `facebook_id`, `linkedin_id`, `virification`, `balance`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Md.Omar Faruqe', '01941698614', 'omar@admin.com', NULL, NULL, '$2y$10$mTVXDATPLeGEIAVO1/RbyetiVMpQCgv0j.yKM8o4EHcuBg0QKLcmC', NULL, NULL, NULL, '71619', '0', 'Pending', '2023-09-09 06:29:01', '2023-09-09 06:29:01'),
(2, 'Md.Jasim Uddin', '01682314951', 'jasim@gmail.com', 'uttara', NULL, '$2y$10$C8xQu3Cz/TXjZMLa2XyUAO96n3Klz88UmJ8ltLtKvC.qwkOxiXw9C', NULL, NULL, NULL, 'NULL', '0', 'Pending', '2023-09-09 06:38:17', '2023-09-14 05:50:18'),
(3, 'asim', '01755417191', 'asarker703@gmail.com', NULL, NULL, '$2y$10$VEsDMI5gCb/Nt6n2vO7Uweo8XmncOiT867qx10QiNMXiSD0V63xBm', NULL, NULL, NULL, 'NULL', '0', 'Active', '2023-10-12 11:49:35', '2023-10-12 11:49:35'),
(4, 'Bably saha', '01688382118', 'www.azabably@gmail.com', NULL, NULL, '$2y$10$qTyiUHxheUKJuxQ7W60Qgu/fy2gEEc2xv2Bi3nLr/LUDc3vuqhcum', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-04-17 08:09:15', '2024-04-17 08:09:15'),
(5, 'BuMcxFmfeTyJov', '6065195148', 'apetersty1098@gmail.com', NULL, NULL, '$2y$10$beijOjkldisCfAR8d9zZMuJ6gHjhjQGadWSVCXUc.aYR.l//KiG8.', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-07-25 13:20:54', '2024-07-25 13:20:54'),
(6, 'ueUowrCpKnqicBfy', '8810289928', 'lewis_jessica1985@yahoo.com', NULL, NULL, '$2y$10$I3S25CbmG0MVwlULgX7x5exjTLp5K9p2ViKRH4dJmUXs2Pax0rBHi', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-07-28 01:37:24', '2024-07-28 01:37:24'),
(7, 'vuUfTIfeEB', '9504211248', 'tadderryan232418@yahoo.com', NULL, NULL, '$2y$10$bWRzRNNFEj1VfeSPhPKRe.FlxCbtmwVKcQ6tJUw8swNY/Gioy3IHC', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-09-23 14:21:59', '2024-09-23 14:21:59'),
(8, 'SXfObRkmL', '2981500795', 'maikawattsn2006@gmail.com', NULL, NULL, '$2y$10$hwJnxN.dcEsHmzwczHph0e6pKq1tYcaavueGeubbD.9QVlqJZD3hi', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-09-27 02:07:58', '2024-09-27 02:07:58'),
(9, 'dXQlMaHK', '9589028248', 'sabrinhuynhhq42@gmail.com', NULL, NULL, '$2y$10$YIIaeG3v3D6Iz6COZG31SeGUvyQYuFZ.tIT1sXP/XW6cW7KMJypsm', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-10-17 10:24:07', '2024-10-17 10:24:07'),
(10, 'uYUHvhCOz', '9652322068', 'dyermerlru9794@gmail.com', NULL, NULL, '$2y$10$SQP/JNqRFUriZg0TceEa9OyTf3SaQKfEejaugsFiRNNPF4RKMuCDG', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-10-20 20:56:14', '2024-10-20 20:56:14'),
(11, '4ucjks89weklf43s www.yandex.ru', '+74956450822', 'prov45@banya-mini.ru', NULL, NULL, '$2y$10$7LoU1kW/GSoZWLW7uuLXNOss2id0eoNw.0c8ojRa42jAUpdFB5ifS', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-11-05 10:44:04', '2024-11-05 10:44:04'),
(12, 'ZvuUjleExyIBoLn', '2371670427', 'stivenrichardg565@gmail.com', NULL, NULL, '$2y$10$VMPU5dJ7ioU0bSj5s2oAU.t0YM0bbwGQG8vs14nYdC0929H/JbFni', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-11-07 17:52:36', '2024-11-07 17:52:36'),
(13, 'mVYgfVqioQ', '5119754805', 'emmalainmichaeli@gmail.com', NULL, NULL, '$2y$10$q4wmLWO3rDw/lxXFmhnxH.DseMFdmpC03y02SPa56spQX.QIWIKty', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-11-08 15:05:18', '2024-11-08 15:05:18'),
(14, 'dpWTWUGuuxRZ', '2163096477', 'pcoutelet@yahoo.fr', NULL, NULL, '$2y$10$gFzXyDLSnukqqngl8macx.L8YPPunzd3RE4mC5OH6sR1GJFbus/yi', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-11-09 09:56:37', '2024-11-09 09:56:37'),
(15, 'NapOrndZfnvT', '5229054224', 'reijpkijlsy@yahoo.com', NULL, NULL, '$2y$10$b31mlRqzI0L61Gg3RjoXGOrTx4Yc5zcW7F7cXlpFPAg3itp5l2KNe', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-11-11 15:22:51', '2024-11-11 15:22:51'),
(16, 'hPlAbKEWrmPhmxm', '5320141188', 'kburchr721@gmail.com', NULL, NULL, '$2y$10$vJeI9B.NiWI3lPf2f.BnMOou1ds4FPcNNLIrxUv64m0uVC525tqH2', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-11-12 11:16:35', '2024-11-12 11:16:35'),
(17, 'NFLmmiJenRIzxCu', '6504242473', 'andrewstayniyf1984@gmail.com', NULL, NULL, '$2y$10$.BEgRNSycwXLtcDylonCHuXO5ukfbAt20e6QucLA7ST8E0w3rgEdS', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-11-16 01:20:14', '2024-11-16 01:20:14'),
(18, 'sKEgUKGFDBKbbxq', '4703808294', 'correirobuyer@yahoo.com', NULL, NULL, '$2y$10$e5nLghZQwMIWFOAenwedEeX.2ZsRuVSIP1BLf7g0MGzNy6RRWgct.', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-11-18 04:42:12', '2024-11-18 04:42:12'),
(19, 'gfhAcKvtrC', '9206875132', 'wfshuwvarg@yahoo.com', NULL, NULL, '$2y$10$bVHOK7WqdpdLtXn016hZT..k5Yqkrs6JIBQ7o5lwuyfcN9OZUIm4S', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-11-25 07:02:46', '2024-11-25 07:02:46'),
(20, 'UiWSSiQkJiL', '7904482720', 'djeilonld2003@gmail.com', NULL, NULL, '$2y$10$kVujKC57iOfafXCH/Vj5AeBHR7BlOnpOV9cdnFVsQQrKbbvh9CgHi', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-11-28 02:10:40', '2024-11-28 02:10:40'),
(21, 'tOZnJgbhyvtdUKw', '3938051817', 'newtoserenin@gmail.com', NULL, NULL, '$2y$10$lMR/jxgv2TW80nVCW3AhZebfrUdIhrvXDsRlJUX.UuvKeqfw7/oh.', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-11-30 12:04:02', '2024-11-30 12:04:02'),
(22, 'fIoHhenCEaUP', '4978102549', 'riliw582@gmail.com', NULL, NULL, '$2y$10$YVDwOWlRZuIHrEfKcYAeHeGdj5SI/2VhBFm.rKnV0RFH4MsKcs1Hm', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-12-01 06:48:31', '2024-12-01 06:48:31'),
(23, 'KhoOkHDoVPh', '8399031131', 'wqwbudiykxhgpojx@yahoo.com', NULL, NULL, '$2y$10$VWQHVuk7pLvWXpA5KyUXHeNgyDeHThTuqfUcztzm7PxNJ4rgs0zZK', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-12-02 17:43:25', '2024-12-02 17:43:25'),
(24, 'USLRJYwEp', '9538087266', 'graneroeagr@yahoo.com', NULL, NULL, '$2y$10$RBLzkbRp32CGQm70XQNiuOW7nD3SVWRCPppkCnZimM658F9qeeTnG', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-12-04 03:16:15', '2024-12-04 03:16:15'),
(25, 'BCKYAQCiszbT', '5810089346', 'dtvgggnohfchgcaqj@yahoo.com', NULL, NULL, '$2y$10$MQHkdGMm1UF2N6CBHV8LpuH0SjOnwnozlO0hED2wh6P1VhYYrT9fW', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-12-11 22:15:20', '2024-12-11 22:15:20'),
(26, 'LoOtFVzkkaPemf', '6292704290', 'manasesspencer584@gmail.com', NULL, NULL, '$2y$10$Q7x7anSwMhkGZLkENBIrU.t.ds8IwrdbiUvY89BBbNMT09k92xHhi', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-12-14 01:19:47', '2024-12-14 01:19:47'),
(27, 'TKjfdPzFBGYWNIi', '9511010073', 'fitzharnschsa@yahoo.com', NULL, NULL, '$2y$10$N//YSdzEBDAj9LHCb8p3m.mVq8B15gIL6uRnh6vbpYHBFcxUCFR22', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-12-16 23:59:30', '2024-12-16 23:59:30'),
(28, 'QYjIRAyC', '8791310706', 'mhloexlcaapmbv@yahoo.com', NULL, NULL, '$2y$10$VQbfVZIrJhjRg8RP8vMK3eC8rydzMVOta2AJBCeeVeEYk3Upz5uYS', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-12-18 03:35:36', '2024-12-18 03:35:36'),
(29, 'ZEBON KHAN', '01934105155', 'kjibon920@gmail.com', NULL, NULL, '$2y$10$R4nWIte.x8mUZyZp0nsrfuKQ9arD2m.1zOqqmEJbjJOotG3wbkTrG', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-12-19 01:55:02', '2024-12-19 01:55:02'),
(30, 'OgcpWHkZ', '6356740135', 'desheenpet@yahoo.com', NULL, NULL, '$2y$10$v1Ml/gVr1Uz8k3iGrG8apeW0r.HN99Bgue1U/JWlSumg59KinYpPq', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-12-19 04:22:13', '2024-12-19 04:22:13'),
(31, 'sxVzqbhv', '4670940570', 'kuliretivo364@gmail.com', NULL, NULL, '$2y$10$IYMWp3OBiGC7UyeLrZUQKuXfupf9G64lW/M7JXV0prx58q5yA0fDq', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-12-21 01:23:13', '2024-12-21 01:23:13'),
(32, 'jTzoEEDT', '7966504508', 'ixubelakeq91@gmail.com', NULL, NULL, '$2y$10$FHBP2SAeqL0BeuhAgFbrOekXgnIXqvHdssWOSipXfedZd0ZlPAXJ2', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-12-21 20:44:26', '2024-12-21 20:44:26'),
(33, 'pFRgdLGj', '8432270785', 'xiqihehac43@gmail.com', NULL, NULL, '$2y$10$SyXsET0PS4EnBn7.VEhLQur2aiHAhPiTmT8C9CMFmC4PLBSKwnFz2', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-12-23 10:39:13', '2024-12-23 10:39:13'),
(34, 'xCgARCJEVbd', '6140405000', 'mqzpnh14k@yahoo.com', NULL, NULL, '$2y$10$6JrgIl0fuKgIsczv3hMhEepqBVZeuBIMVAwzcMQpSFzz1kRY5gjpu', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-12-26 04:35:01', '2024-12-26 04:35:01'),
(35, 'HUWNTFQuvHk', '3083591400', 'naqiwaseg19@gmail.com', NULL, NULL, '$2y$10$558yhOfZ6f405BD9.o34IeIIdtYCv3r2m8L.PIxjCBTYZg1C1pMfm', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-12-27 05:10:23', '2024-12-27 05:10:23'),
(36, 'UVrZvMwRv', '2203505969', 'gudarajit98@gmail.com', NULL, NULL, '$2y$10$by1L276Pujf/1.fj533zje2sxXCH/QQvQ8CNy.Q.Ykli0.zSUosne', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-12-28 04:09:48', '2024-12-28 04:09:48'),
(37, 'ZSOmZHLxUqg', '2430003067', 'hlgadikywht@yahoo.com', NULL, NULL, '$2y$10$7pGe5ZmpD7ZIKZQNfuTtQesxpFT7vnsctMCU8IOgP1XzuNxWir82.', NULL, NULL, NULL, 'NULL', '0', 'Active', '2024-12-29 23:08:32', '2024-12-29 23:08:32'),
(38, 'uSYGGwAED', '3052330710', 'vgebmctpqapjjximx@yahoo.com', NULL, NULL, '$2y$10$4Ry0nBjh1hOzb1vkdOWTV.T7dpFN.x4Irc7GPVU9qTDVWK/eaCOY6', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-01-02 21:44:03', '2025-01-02 21:44:03'),
(39, 'bBanPIggEn', '4976530170', 'esosholis@yahoo.com', NULL, NULL, '$2y$10$PGerA3xlybtU15SmK1Z/rOgja4FwlmWLn0Ay1NT5/yqgk/W6haM.m', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-01-03 21:04:26', '2025-01-03 21:04:26'),
(40, 'mIxEtAbkBGCO', '4726998205', 'simstriebinger@yahoo.com', NULL, NULL, '$2y$10$VChgrpFKTFCHLWUPw5S3seQjblW7slqtSG2yDSu1rcCV1jef7HxcK', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-01-07 04:07:52', '2025-01-07 04:07:52'),
(41, 'gpubeXBNMBt', '4472256035', 'aralakiwujif00@gmail.com', NULL, NULL, '$2y$10$rwd17EvG28DyWz744.5dHuVQAAZrGQ9wAbzHaE0ELZy4PCym4vrs6', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-01-09 08:54:59', '2025-01-09 08:54:59'),
(42, 'TDQpBlAYthwF', '8108039690', 'l7ngkyjixxyr@yahoo.com', NULL, NULL, '$2y$10$qCpdB9YHw946rV88uSgZnuY2LftS5BBhqClcyGobqO50lZpH0FQTu', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-01-10 07:44:24', '2025-01-10 07:44:24'),
(43, 'NxqkQFkxOzHu', '6071122210', 'tempeste5yarn12ai@gmail.com', NULL, NULL, '$2y$10$snQ7PxbfXY8Swt0Re9Y8o.8GaTT/YYPRy4nqGaDzmXLUuPdIdvOVi', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-01-16 12:58:10', '2025-01-16 12:58:10'),
(44, 'mubeYPKtjv', '7786408042', 'bwcltclyuky@yahoo.com', NULL, NULL, '$2y$10$k2ncqhBtmJfaE69Gqdx2CuHN0UtSuNVgyF/w.BGmKbfAdHkJpRmlC', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-01-17 21:28:43', '2025-01-17 21:28:43'),
(45, 'zYfFAVCWCkQbHu', '8169034157', 'uabraxasoualchemy46@gmail.com', NULL, NULL, '$2y$10$XStEqSocl9ID6lsNeMK0cu8bIFbBHwAspQki6u.bmuhqm8oBcJ/yC', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-01-18 19:11:11', '2025-01-18 19:11:11'),
(46, 'gLvFVuQM', '8028981781', 'm7jlyvklgxopt67h@yahoo.com', NULL, NULL, '$2y$10$WovKppyv3dOrCRsqPKzoUOA32zg7h2pssOgjHkVl3R7MnlHQqWY.C', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-01-20 16:02:05', '2025-01-20 16:02:05'),
(47, 'NXHQTZzdN', '8857490342', 'kismetia82verge20ay@gmail.com', NULL, NULL, '$2y$10$LF.OH2g6NCHGLdS7nI2J9.9f0nzsJIPYAqF/NtHXUQUvk/QnnMCNG', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-01-22 03:26:56', '2025-01-22 03:26:56'),
(48, 'kweIiGUSw', '8216829057', 'jm29nlomgxj3t@yahoo.com', NULL, NULL, '$2y$10$Jd2dzevdBnJYB7dpNnbIIeZd3PBhNd/t//QmEN3JhKd3iG8Y9QnK2', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-01-27 00:05:55', '2025-01-27 00:05:55'),
(49, 'cptqsNgU', '6151724605', 'Xavier0Clapton0063@gmail.com', NULL, NULL, '$2y$10$BKo76/qNl4W/MVICZ0Q1bOaaEi5V8yVcnWd2i/QE9kRCvWEH9FDvS', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-01-30 22:56:13', '2025-01-30 22:56:13'),
(50, 'voxRCkOHOkOYtea', '3477380627', 'tuxwgmwylcnlkxaq@yahoo.com', NULL, NULL, '$2y$10$Xwz6Hc/cCaIzUuI02qz.yu9/0MuFQl01RFUxBpvSXqpUsUK6bhNXK', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-02-01 04:26:04', '2025-02-01 04:26:04'),
(51, 'XbLdIXZuaGvIQ', '5601839888', 'uharuzimeza474@gmail.com', NULL, NULL, '$2y$10$UO6vzYMXmqWV/RdxejcJJ.1wT8KZX3xhRrhjTvqruPf6H23JM5M7y', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-02-02 02:11:52', '2025-02-02 02:11:52'),
(52, 'AqbcByYngPScv', '4408434832', 'oneyahulo60@gmail.com', NULL, NULL, '$2y$10$.qyc8vnh/huRGITQfOWlKu.ZCBAD8VD8AjcQq37ElA4794InLsnXW', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-02-03 00:26:49', '2025-02-03 00:26:49'),
(53, 'QOYDVQfcQG', '2820263086', 'uailluminatea71xenon96e@gmail.com', NULL, NULL, '$2y$10$RaI5mFkMWEb6qHswBn9X.OstrYcMo6B.nFw.uV1vZ.8zkpW7dulFS', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-02-04 02:08:47', '2025-02-04 02:08:47'),
(54, 'CofKZeMzGsoG', '8154101853', 'phantomiu21glyph67@gmail.com', NULL, NULL, '$2y$10$AAAwtKFCFuXePozZHrh0eeKSA3GXCIF8RiY7fepGHZKHUZB3Ea4ae', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-02-06 02:08:26', '2025-02-06 02:08:26'),
(55, 'JmcLtTjRt', '4201236730', 'aezenithaecho53@gmail.com', NULL, NULL, '$2y$10$lq9dl8Goa/RQS4EDZ.cNL.miyU96w5ZXW1wJb1U7YX5oqYNSkgapS', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-02-08 21:18:32', '2025-02-08 21:18:32'),
(56, 'JmnhtshARptl', '4552201749', 'lunar17glyph68@gmail.com', NULL, NULL, '$2y$10$rCw4F/GKfG643UaeV.62.OyJ/ozHwYvCGCO3M28AckXByiaLQlj1u', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-02-10 03:58:58', '2025-02-10 03:58:58'),
(57, 'eqIWHifFkSUb', '6017145038', 'gossamerio96nexus74@gmail.com', NULL, NULL, '$2y$10$q8G29ipFjrdAlSsQoA9PL.elkNDNBBckrb44pRxhWhVgR30cxQ07i', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-02-14 23:02:19', '2025-02-14 23:02:19'),
(58, 'vqCKZKmzLskfdb', '9143570987', 'tloveib6@gmail.com', NULL, NULL, '$2y$10$V6/ZBqnKvB7s7mC//ta6p.4dZOv/3eby76lu1W8Nnb3TTcAI14CG6', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-02-16 07:33:43', '2025-02-16 07:33:43'),
(59, 'fuChQtbVu', '2798790001', 'yljmgvja1api7vh@yahoo.com', NULL, NULL, '$2y$10$KXjZuxjc1wQQWgvoe.6pku/G.QcZw6MmfT4suG5LIa8jgmlIAja/.', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-02-17 00:05:25', '2025-02-17 00:05:25'),
(60, 'MD. SALIM UDDIN', '01678170074', 'salim8bd@gmail.com', NULL, NULL, '$2y$10$6W8jPX5m1XnNtm2hYPGmSufJYJ3gTAWKfHkusZY1EUYugmmr76JYO', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-02-17 08:11:52', '2025-02-17 08:11:52'),
(61, 'UAZRSMzvQAT', '9325280509', 'dalyafbe2004@gmail.com', NULL, NULL, '$2y$10$..69aQD4hpADeA9JPcoqQ.GCfKSwGaXI.f3wnHhdElULeA6CHoE9.', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-02-18 03:45:00', '2025-02-18 03:45:00'),
(62, 'XvIrNiWXTSNWV', '5856500188', 'slorni2004@gmail.com', NULL, NULL, '$2y$10$2EzbTSjeoN0qRrGL2RpSieXPQNK2TI.XE8Nz/Udw4pdjFp8LhdkCq', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-02-19 14:18:45', '2025-02-19 14:18:45'),
(63, 'vMYCXcWUyVSKnk', '6059106235', 'masonglinisi3@gmail.com', NULL, NULL, '$2y$10$LKRGws1owzrgyDQOdsDfOuF8vKxsU2D3iZulPFPKAqgFsP8beqaZ6', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-02-21 18:20:22', '2025-02-21 18:20:22'),
(64, 'Shuvo', '01729586315', 'saniurshuvo.aiub@gmail.com', NULL, NULL, '$2y$10$jPnUsxH9Z9TG2x/juM8rSebZu/rcxUJzJyfTyDQ9EbL6hwcmkoOpS', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-02-22 01:53:12', '2025-02-22 01:53:12'),
(65, 'Philip', '01717709857', 'philipmessi@gmail.com', NULL, NULL, '$2y$10$8rzKur8ZTOIXbGZu2Vkb9O8WIA9/LY0my10vcwIxr5irTf.CNY3nG', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-02-23 11:10:24', '2025-02-23 11:10:24'),
(66, 'niloy', '01688303111', 'alaminbd001@gmail.com', NULL, NULL, '$2y$10$ZlWhjQm.G0FuAnr3bz0PmOFmv4V5FxybueO53OyBQPAVpOMdiTneu', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-02-24 01:13:02', '2025-02-24 01:13:02'),
(67, 'Farhad', '01726223330', 'feminalighting@gmail.com', NULL, NULL, '$2y$10$X52RjQXZP2b8oOIp9Ltn3eFL7vtThuLq1XKVkPP4PikQ450uvA6Z6', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-02-24 01:24:10', '2025-02-24 01:24:10'),
(68, 'wKJpMUqr', '9401348724', 'odhqqvadccxypc@yahoo.com', NULL, NULL, '$2y$10$vhYtn72wnf9hfh8S7TiIR.7MzIHqQ1vk1pfjwCGo8zR/flLvkeL7K', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-02-25 05:09:59', '2025-02-25 05:09:59'),
(69, 'FIAzeqouaStOh', '9198904605', 'ksanderbridges33@gmail.com', NULL, NULL, '$2y$10$s.pEmzPz6v8lsmdoDBJ9b.uII5wcxEBACawp6kj50PXm8dMt2UsXO', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-02-28 02:11:03', '2025-02-28 02:11:03'),
(70, 'isrNZkXntx', '2070186915', 'bentleimx@gmail.com', NULL, NULL, '$2y$10$xC.J1n4qBDg2Uh/mydGsZeX5fDDgWrz6YcyXGB3CsDQ3Y8F8Qjnv6', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-02-28 20:05:33', '2025-02-28 20:05:33'),
(71, 'PHFWKQlTY', '2645780382', 'cabvenj@gmail.com', NULL, NULL, '$2y$10$k0v8GNuJlvoAP/QABhj2Xuqu3Evw9H08U.ilvKaIh28IWFBHwHKwu', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-03-02 22:39:38', '2025-03-02 22:39:38'),
(72, 'etrrJsIChPwQTLX', '6247800896', 'djongarnerq9@gmail.com', NULL, NULL, '$2y$10$Tfu3PriOMJlq2C2j.IM.dupbcNJlySF8Y5zrlOtOUzGkDlrQjaQt6', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-03-05 01:10:37', '2025-03-05 01:10:37'),
(73, 'tUjOpYHaGSqae', '7928361808', 'brenkorepi42@gmail.com', NULL, NULL, '$2y$10$ijJ4GbqfWsR/IJpgv/UmTeJbr5y3JebGvAraFN9wPFS6UlwIX4A/S', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-03-14 20:43:40', '2025-03-14 20:43:40'),
(74, 'gtCyjQUU', '5179126806', 'skaimorrisonc@gmail.com', NULL, NULL, '$2y$10$2KoKmZ0vMn031IvDvNXRGu9SKBcwdaErxRHJtQfvaNbZGQwODDuGy', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-03-15 16:20:53', '2025-03-15 16:20:53'),
(75, 'BtoUPRcVFeRVxLQ', '9396706996', 'laladjfloreshh4@gmail.com', NULL, NULL, '$2y$10$VmVrcgaAh21FqyghRQyDvudcFc4Fqevyt.liAhXr/uMjgTnWNDVVy', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-03-17 03:16:00', '2025-03-17 03:16:00'),
(76, 'AcrxQPEXePy', '4010275779', 'palmer.jonathan62254@yahoo.com', NULL, NULL, '$2y$10$H5GcJtbE4teJot340SJMOunja7jy6bniONPW5y7iIfeJtVTRIRMKG', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-03-23 00:36:20', '2025-03-23 00:36:20'),
(77, 'UpsjxJubGPoIF', '2219313016', 'malloy_jeff24660@yahoo.com', NULL, NULL, '$2y$10$KC8hP2pKSYz.Tg50A.WPLOo5W107aeDvBOU2if2lu6SQOMzTgdsjq', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-03-24 09:48:18', '2025-03-24 09:48:18'),
(78, 'shamim', '019111601614', 'a.showon@gmail.com', NULL, NULL, '$2y$10$0ZRN8GCzlSFLPrexR8MRge9p4N.e4n9DqLAEfY6AVBh2tvn5r6GsO', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-04-07 11:01:47', '2025-04-07 11:01:47'),
(79, 'Milon Mondol', '01717887081', 'milonm2010@gmail.com', NULL, NULL, '$2y$10$eoK6W5ArgcV/lcQA8JL8duMN9ZF2o3s/K6szm38jsoUvDC.BT.U0i', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-04-16 04:08:27', '2025-04-16 04:08:27'),
(80, 'Abdullah', '01849378511', 'mdalibd511@gmail.com', NULL, NULL, '$2y$10$dFwGmDTEjoBVsIm8eqe1SuLBbBKe/wPsw9mrROyqFOQUV8KsR0Ile', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-05-29 12:59:47', '2025-05-29 12:59:47'),
(81, 'MD FERDAUS', '01720085127', 'fardaushossain594@gmail.com', NULL, NULL, '$2y$10$DH8Y1khIkfzh956GhA5rQ.Nk6shbvI1GvZihkWoXeLNa6Yolu0EXy', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-05-31 17:44:37', '2025-05-31 17:44:37'),
(82, 'fedous', '015178544', 'fedous511@gmail.com', NULL, NULL, '$2y$10$BHHPFHe7zscnO4MvSDr3duWnx8.pTwYtW2rZsDciyhCeebCsY428a', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-05-31 18:21:26', '2025-05-31 18:21:26'),
(83, 'Hasan', '01832191722', 'Az@gmail.com', NULL, NULL, '$2y$10$lXeY3NoeoQauC8H01C4YUeKakD.8Tz7EVk5tRyjpm87UeeGepJBpK', NULL, NULL, NULL, 'NULL', '0', 'Active', '2025-05-31 20:23:38', '2025-05-31 20:23:38'),
(84, 'Laboni', '01304304346', NULL, 'Anam Editor', NULL, '$2y$10$6XYd4TLzjfpCMM1ODVvqHOclGh2p7pmdav/Ky2z.EPPACE7v1OzVC', NULL, NULL, NULL, NULL, '0', 'Active', '2025-06-01 11:23:23', '2025-06-01 11:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `discount_name` varchar(255) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `limit_qty` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(2) NOT NULL,
  `division_id` int(1) NOT NULL,
  `name` varchar(25) NOT NULL,
  `bn_name` varchar(25) NOT NULL,
  `lat` varchar(15) DEFAULT NULL,
  `lon` varchar(15) DEFAULT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `division_id`, `name`, `bn_name`, `lat`, `lon`, `url`) VALUES
(1, 1, 'Comilla', 'কুমিল্লা', '23.4682747', '91.1788135', 'www.comilla.gov.bd'),
(2, 1, 'Feni', 'ফেনী', '23.023231', '91.3840844', 'www.feni.gov.bd'),
(3, 1, 'Brahmanbaria', 'ব্রাহ্মণবাড়িয়া', '23.9570904', '91.1119286', 'www.brahmanbaria.gov.bd'),
(4, 1, 'Rangamati', 'রাঙ্গামাটি', NULL, NULL, 'www.rangamati.gov.bd'),
(5, 1, 'Noakhali', 'নোয়াখালী', '22.869563', '91.099398', 'www.noakhali.gov.bd'),
(6, 1, 'Chandpur', 'চাঁদপুর', '23.2332585', '90.6712912', 'www.chandpur.gov.bd'),
(7, 1, 'Lakshmipur', 'লক্ষ্মীপুর', '22.942477', '90.841184', 'www.lakshmipur.gov.bd'),
(8, 1, 'Chattogram', 'চট্টগ্রাম', '22.335109', '91.834073', 'www.chittagong.gov.bd'),
(9, 1, 'Coxsbazar', 'কক্সবাজার', NULL, NULL, 'www.coxsbazar.gov.bd'),
(10, 1, 'Khagrachhari', 'খাগড়াছড়ি', '23.119285', '91.984663', 'www.khagrachhari.gov.bd'),
(11, 1, 'Bandarban', 'বান্দরবান', '22.1953275', '92.2183773', 'www.bandarban.gov.bd'),
(12, 2, 'Sirajganj', 'সিরাজগঞ্জ', '24.4533978', '89.7006815', 'www.sirajganj.gov.bd'),
(13, 2, 'Pabna', 'পাবনা', '23.998524', '89.233645', 'www.pabna.gov.bd'),
(14, 2, 'Bogura', 'বগুড়া', '24.8465228', '89.377755', 'www.bogra.gov.bd'),
(15, 2, 'Rajshahi', 'রাজশাহী', NULL, NULL, 'www.rajshahi.gov.bd'),
(16, 2, 'Natore', 'নাটোর', '24.420556', '89.000282', 'www.natore.gov.bd'),
(17, 2, 'Joypurhat', 'জয়পুরহাট', NULL, NULL, 'www.joypurhat.gov.bd'),
(18, 2, 'Chapainawabganj', 'চাঁপাইনবাবগঞ্জ', '24.5965034', '88.2775122', 'www.chapainawabganj.gov.bd'),
(19, 2, 'Naogaon', 'নওগাঁ', NULL, NULL, 'www.naogaon.gov.bd'),
(20, 3, 'Jashore', 'যশোর', '23.16643', '89.2081126', 'www.jessore.gov.bd'),
(21, 3, 'Satkhira', 'সাতক্ষীরা', NULL, NULL, 'www.satkhira.gov.bd'),
(22, 3, 'Meherpur', 'মেহেরপুর', '23.762213', '88.631821', 'www.meherpur.gov.bd'),
(23, 3, 'Narail', 'নড়াইল', '23.172534', '89.512672', 'www.narail.gov.bd'),
(24, 3, 'Chuadanga', 'চুয়াডাঙ্গা', '23.6401961', '88.841841', 'www.chuadanga.gov.bd'),
(25, 3, 'Kushtia', 'কুষ্টিয়া', '23.901258', '89.120482', 'www.kushtia.gov.bd'),
(26, 3, 'Magura', 'মাগুরা', '23.487337', '89.419956', 'www.magura.gov.bd'),
(27, 3, 'Khulna', 'খুলনা', '22.815774', '89.568679', 'www.khulna.gov.bd'),
(28, 3, 'Bagerhat', 'বাগেরহাট', '22.651568', '89.785938', 'www.bagerhat.gov.bd'),
(29, 3, 'Jhenaidah', 'ঝিনাইদহ', '23.5448176', '89.1539213', 'www.jhenaidah.gov.bd'),
(30, 4, 'Jhalakathi', 'ঝালকাঠি', NULL, NULL, 'www.jhalakathi.gov.bd'),
(31, 4, 'Patuakhali', 'পটুয়াখালী', '22.3596316', '90.3298712', 'www.patuakhali.gov.bd'),
(32, 4, 'Pirojpur', 'পিরোজপুর', NULL, NULL, 'www.pirojpur.gov.bd'),
(33, 4, 'Barisal', 'বরিশাল', NULL, NULL, 'www.barisal.gov.bd'),
(34, 4, 'Bhola', 'ভোলা', '22.685923', '90.648179', 'www.bhola.gov.bd'),
(35, 4, 'Barguna', 'বরগুনা', NULL, NULL, 'www.barguna.gov.bd'),
(36, 5, 'Sylhet', 'সিলেট', '24.8897956', '91.8697894', 'www.sylhet.gov.bd'),
(37, 5, 'Moulvibazar', 'মৌলভীবাজার', '24.482934', '91.777417', 'www.moulvibazar.gov.bd'),
(38, 5, 'Habiganj', 'হবিগঞ্জ', '24.374945', '91.41553', 'www.habiganj.gov.bd'),
(39, 5, 'Sunamganj', 'সুনামগঞ্জ', '25.0658042', '91.3950115', 'www.sunamganj.gov.bd'),
(40, 6, 'Narsingdi', 'নরসিংদী', '23.932233', '90.71541', 'www.narsingdi.gov.bd'),
(41, 6, 'Gazipur', 'গাজীপুর', '24.0022858', '90.4264283', 'www.gazipur.gov.bd'),
(42, 6, 'Shariatpur', 'শরীয়তপুর', NULL, NULL, 'www.shariatpur.gov.bd'),
(43, 6, 'Narayanganj', 'নারায়ণগঞ্জ', '23.63366', '90.496482', 'www.narayanganj.gov.bd'),
(44, 6, 'Tangail', 'টাঙ্গাইল', NULL, NULL, 'www.tangail.gov.bd'),
(45, 6, 'Kishoreganj', 'কিশোরগঞ্জ', '24.444937', '90.776575', 'www.kishoreganj.gov.bd'),
(46, 6, 'Manikganj', 'মানিকগঞ্জ', NULL, NULL, 'www.manikganj.gov.bd'),
(47, 6, 'Dhaka', 'ঢাকা', '23.7115253', '90.4111451', 'www.dhaka.gov.bd'),
(48, 6, 'Munshiganj', 'মুন্সিগঞ্জ', NULL, NULL, 'www.munshiganj.gov.bd'),
(49, 6, 'Rajbari', 'রাজবাড়ী', '23.7574305', '89.6444665', 'www.rajbari.gov.bd'),
(50, 6, 'Madaripur', 'মাদারীপুর', '23.164102', '90.1896805', 'www.madaripur.gov.bd'),
(51, 6, 'Gopalganj', 'গোপালগঞ্জ', '23.0050857', '89.8266059', 'www.gopalganj.gov.bd'),
(52, 6, 'Faridpur', 'ফরিদপুর', '23.6070822', '89.8429406', 'www.faridpur.gov.bd'),
(53, 7, 'Panchagarh', 'পঞ্চগড়', '26.3411', '88.5541606', 'www.panchagarh.gov.bd'),
(54, 7, 'Dinajpur', 'দিনাজপুর', '25.6217061', '88.6354504', 'www.dinajpur.gov.bd'),
(55, 7, 'Lalmonirhat', 'লালমনিরহাট', NULL, NULL, 'www.lalmonirhat.gov.bd'),
(56, 7, 'Nilphamari', 'নীলফামারী', '25.931794', '88.856006', 'www.nilphamari.gov.bd'),
(57, 7, 'Gaibandha', 'গাইবান্ধা', '25.328751', '89.528088', 'www.gaibandha.gov.bd'),
(58, 7, 'Thakurgaon', 'ঠাকুরগাঁও', '26.0336945', '88.4616834', 'www.thakurgaon.gov.bd'),
(59, 7, 'Rangpur', 'রংপুর', '25.7558096', '89.244462', 'www.rangpur.gov.bd'),
(60, 7, 'Kurigram', 'কুড়িগ্রাম', '25.805445', '89.636174', 'www.kurigram.gov.bd'),
(61, 8, 'Sherpur', 'শেরপুর', '25.0204933', '90.0152966', 'www.sherpur.gov.bd'),
(62, 8, 'Mymensingh', 'ময়মনসিংহ', NULL, NULL, 'www.mymensingh.gov.bd'),
(63, 8, 'Jamalpur', 'জামালপুর', '24.937533', '89.937775', 'www.jamalpur.gov.bd'),
(64, 8, 'Netrokona', 'নেত্রকোণা', '24.870955', '90.727887', 'www.netrokona.gov.bd');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext DEFAULT NULL,
  `orders` int(11) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `content`, `orders`, `status`, `created_at`, `updated_at`) VALUES
(1, 'What type of products do you sell online?', 'If your item is faulty/harmed or mistaken/deficient at the hour of conveyance, if you don’t mind, please get in touch with us inside the pertinent return window. Your item might be qualified for discount or substitution relying upon the item class and condition.\r\nPlease note that a few items are not qualified for arrival if the item is “Never again required”\r\nFor gadget related issues after use or the lapse of the arrival window, we will allude you to the brand guarantee focus (if relevant).\r\nPlease note that you should keep and be able to provide proper documentations and proof about your return/refund claim (i.e. unboxing video, receiving invoice, etc.)', 1, 'Active', '2023-08-26 06:34:54', '2024-04-25 03:30:22'),
(2, 'Are the products the same as you show on the images?', 'We try to take as clear pictures of the products as possible. However, according to the resolution and the setup of your monitor, it might vary a little from the original product.', 2, 'Active', '2023-08-26 06:35:18', '2024-04-25 03:29:54'),
(4, 'What about quality?', 'First ever in Bangladesh jagopower.com uses premium herbs for manufacturing all products. If you are not satisfied then please contact us.', 3, 'Active', '2024-04-25 03:29:08', '2024-04-25 03:29:08'),
(5, 'What are the payment options at  Jagopower.com?.', 'To purchase online, you can use your debit card, credit card, Bkash or even pay cash when you receive your parcel. You can also visit our delivery hubs to pick up your order and make your payment during then.', 4, 'Active', '2024-04-25 03:35:37', '2024-04-25 03:35:37'),
(6, 'Is using credit or debit cards safe on Jagopower.com?', 'YES, We are a government approved site and maintain a strict customer confidentiality policy. We use the latest version of modern technology of the payment system. So you are 100% safe using your credit and debit cards.', 5, 'Active', '2024-04-25 03:37:01', '2024-04-25 03:38:38'),
(7, 'I don\'t have a credit/debit card. Can I still buy from jagopower.com??', 'YES. You can use mobile banking for your payment or pay cash on delivery in case you don’t have a debit or credit card.', 6, 'Active', '2024-04-25 03:39:57', '2024-04-25 03:39:57'),
(8, 'Are there any hidden costs apart from the product price and shipping charges?', 'No. You will only need to pay the price of the product and delivery charge if you want to get home delivery for your order.', 7, 'Active', '2024-04-25 03:40:26', '2024-04-25 03:40:26'),
(9, 'Does Jagopower.com deliver outside Dhaka?', 'We deliver products anywhere in Bangladesh through our effective delivery team as well as using the third party.', 8, 'Active', '2024-04-25 03:41:07', '2024-04-25 03:41:07'),
(10, 'How much do deliveries cost?', 'Delivery charge in Dhaka Uttara (all Sectors) free home delivery and others area tk 200.', 9, 'Active', '2024-04-25 03:43:08', '2024-04-25 03:43:08'),
(11, 'Can I buy a product/offer as a gift for someone else?', 'Yes. You can purchase any product/offer to gift someone. All you need to do is order online, make the transaction, and provide the address where you want the gift to be delivered. Our delivery team will deliver your order on that given address on your behalf.', 10, 'Active', '2024-04-25 03:44:02', '2024-04-25 03:44:02'),
(12, 'How can I contact you?', 'You can always call 01705-210280 or mail us at info@jagopower.com', 11, 'Active', '2024-04-25 03:45:00', '2024-04-25 03:45:00'),
(13, 'My order is wrong. What do I do?', 'Please immediately call 01705-210280 and let us know the problem.', 12, 'Active', '2024-04-25 03:45:47', '2024-04-25 03:45:47'),
(14, 'An item from my order is missing, what should I do?', 'If an item is missing, please contact our customer service center mentioning your order number and the name and code number of the missing item. We will resolve the issue as soon as possible.', 13, 'Active', '2024-04-25 03:46:16', '2024-04-25 03:46:16'),
(15, 'Where is your shop located?', 'We don’t have any physical shop at the moment, but you can place your order here and we will deliver the products at your doorsteps. You can get our products at  below shop details.', 14, 'Active', '2024-04-25 03:46:47', '2024-04-25 03:46:47'),
(16, 'Our Shop', 'FEMINA LIGHTINGS: 46/47, A.B.Super Market,1st & 2nd floor, \r\nUttara Commercial area, Mymansingh road, Dhaka 1230.\r\n\r\nCall: 01705-210280', 14, 'Active', '2024-04-25 03:47:26', '2024-04-25 03:48:49');

-- --------------------------------------------------------

--
-- Table structure for table `flash_deals`
--

CREATE TABLE `flash_deals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `start_date` int(11) NOT NULL,
  `end_date` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `featured` varchar(255) DEFAULT NULL,
  `background_color` varchar(255) DEFAULT NULL,
  `text_color` varchar(255) DEFAULT NULL,
  `banner` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flash_deal_products`
--

CREATE TABLE `flash_deal_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `flash_deal_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `discount` double(8,2) NOT NULL,
  `	discount_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `shortname` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `madmins`
--

CREATE TABLE `madmins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) DEFAULT 2,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `madmins`
--

INSERT INTO `madmins` (`id`, `name`, `images`, `email`, `password`, `role_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', NULL, 'admin@gmail.com', '$2y$10$WNTiQTsFen2pvGLnl48CSu0aG30p2GA1HzOyx1gvoulezp6bmLfoO', 1, 'Active', '2023-04-15 01:59:09', '2025-05-07 10:31:07'),
(2, 'Ferdous', NULL, 'ferdous@gmail.com', '$2y$10$WNTiQTsFen2pvGLnl48CSu0aG30p2GA1HzOyx1gvoulezp6bmLfoO', 1, 'Active', '2025-05-03 20:04:41', '2025-05-03 20:07:08');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `url` varchar(255) DEFAULT NULL,
  `orders` int(11) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `parent_id`, `url`, `orders`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Authentication', 0, '#', 1, 'fas fa-user-cog', 'Active', '2023-08-23 19:19:11', '2025-05-25 05:47:37'),
(2, 'Sales', 0, '#', 2, 'fas fa-cart-plus', 'Active', '2023-08-23 19:19:33', '2025-05-25 05:48:04'),
(3, 'Catelog', 0, '#', 3, 'fas fa-hospital', 'Active', '2023-08-23 19:19:53', '2025-05-25 05:48:19'),
(4, 'Customer', 0, '#', 4, 'fas fa-users', 'Active', '2023-08-23 19:20:12', '2025-05-25 05:48:37'),
(5, 'Inventory', 0, '#', 5, 'fas fa-university', 'Active', '2023-08-23 19:20:33', '2025-05-25 05:48:30'),
(6, 'Marketing', 0, '#', 6, 'fas fa-bullhorn', 'Active', '2023-08-23 19:21:07', '2025-05-25 05:48:46'),
(7, 'Home', 0, '#', 7, 'fas fa-home', 'Active', '2023-08-23 19:21:24', '2025-05-25 05:49:10'),
(8, 'Content', 0, '#', 7, 'fas fa-book', 'Active', '2023-08-23 19:21:41', '2025-05-25 05:49:03'),
(9, 'Reports', 0, '#', 9, 'fa fa-calculator', 'Active', '2023-08-23 19:22:04', '2023-08-23 19:22:04'),
(10, 'Settings', 0, '#', 10, 'fas fa-cogs', 'Active', '2023-08-23 19:22:23', '2023-08-23 19:22:23'),
(11, 'Admin Menu', 1, 'madmin.adminmenu.index', 1, 'fas fa-angle-right', 'Active', '2023-08-23 19:34:00', '2023-08-23 19:34:00'),
(12, 'Admin User', 1, 'madmin.adminuser.index', 2, 'fas fa-angle-right', 'Active', '2023-08-23 19:34:28', '2023-08-23 19:34:28'),
(13, 'Pending Order', 2, 'madmin.orders.pending', 1, 'fas fa-angle-right', 'Active', '2023-08-23 19:34:45', '2023-08-23 19:34:45'),
(14, 'Complete Order', 2, 'madmin.orders.complete', 2, 'fas fa-angle-right', 'Active', '2023-08-23 19:35:03', '2023-08-23 19:37:09'),
(15, 'Return Order', 2, 'madmin.orderreturn.index', 3, 'fas fa-angle-right', 'Pending', '2023-08-23 19:35:35', '2023-09-25 20:50:24'),
(16, 'All Order', 2, 'madmin.orderadmin.index', 4, 'fas fa-angle-right', 'Active', '2023-08-23 19:36:20', '2023-08-23 19:36:20'),
(17, 'Product ', 3, 'madmin.products.index', 1, 'fas fa-angle-right', 'Active', '2023-08-23 19:37:53', '2023-08-23 19:37:53'),
(18, 'Category', 3, 'madmin.categories.index', 2, 'fas fa-angle-right', 'Active', '2023-08-23 19:38:13', '2023-08-23 19:38:13'),
(19, 'Brand ', 3, 'madmin.brands.index', 3, 'fas fa-angle-right', 'Active', '2023-08-23 19:38:33', '2023-08-23 19:38:33'),
(20, 'Attribute ', 3, 'madmin.attributes.index', 4, 'fas fa-angle-right', 'Active', '2023-08-23 19:38:56', '2023-08-23 19:38:56'),
(21, 'Unit ', 3, 'madmin.units.index', 5, 'fas fa-angle-right', 'Active', '2023-08-23 19:39:23', '2023-08-23 19:39:23'),
(22, 'Tag ', 3, '#', 6, 'fas fa-angle-right', 'Deactive', '2023-08-23 19:42:23', '2023-08-23 19:43:53'),
(23, 'Add Customer', 4, 'madmin.customeradmin.create', 1, 'fas fa-angle-right', 'Active', '2023-08-23 19:42:57', '2023-08-23 19:42:57'),
(24, 'All Customer', 4, 'madmin.customeradmin.index', 2, 'fas fa-angle-right', 'Active', '2023-08-23 19:43:20', '2023-08-23 19:43:20'),
(25, 'Stock ', 5, 'madmin.stock.index', 1, 'fas fa-angle-right', 'Active', '2023-08-23 19:44:58', '2023-08-23 19:44:58'),
(26, 'Low Stock', 5, 'madmin.stock.low', 2, 'fas fa-angle-right', 'Active', '2023-08-23 19:45:30', '2023-08-23 19:45:30'),
(27, 'Sold ', 5, 'madmin.stock.sold', 3, 'fas fa-angle-right', 'Deactive', '2023-08-23 19:45:49', '2023-08-23 19:45:49'),
(28, 'Adjustment', 5, 'madmin.stock.adjustment', 4, 'fas fa-angle-right', 'Pending', '2023-08-23 19:46:17', '2023-09-25 20:47:55'),
(29, 'SMS Marketing', 6, 'madmin.smscampaign.index', 1, 'fas fa-angle-right', 'Active', '2023-08-23 19:47:01', '2023-09-13 23:17:31'),
(30, 'Slide ', 7, 'madmin.slides.index', 1, 'fas fa-angle-right', 'Active', '2023-08-23 19:47:36', '2023-08-23 19:47:36'),
(31, 'Banner ', 7, 'madmin.banners.index', 2, 'fas fa-angle-right', 'Active', '2023-08-23 19:47:58', '2023-08-23 19:47:58'),
(32, 'About Us', 7, 'madmin.aboutadmin.index', 3, 'fas fa-angle-right', 'Active', '2023-08-23 19:48:31', '2023-08-23 19:48:31'),
(33, 'Page ', 8, 'madmin.pages.index', 1, 'fas fa-angle-right', 'Active', '2023-08-23 19:49:01', '2023-08-23 19:49:01'),
(34, 'Blog ', 8, 'madmin.blogs.index', 2, 'fas fa-angle-right', 'Active', '2023-08-23 19:49:29', '2023-08-23 19:49:29'),
(35, 'FAQ', 8, 'madmin.faqs.index', 3, 'fas fa-angle-right', 'Active', '2023-08-23 19:50:04', '2023-08-23 19:50:04'),
(36, 'All Reports', 9, '#', 1, 'fas fa-angle-right', 'Pending', '2023-08-23 19:50:24', '2023-09-25 23:05:05'),
(37, 'Sales Reports', 9, 'madmin.sales.reports', 2, 'fas fa-angle-right', 'Active', '2023-08-23 19:50:49', '2023-09-25 21:32:50'),
(38, 'Stock Reports', 9, 'madmin.stock.reports', 3, 'fas fa-angle-right', 'Active', '2023-08-23 19:51:09', '2023-08-23 19:51:09'),
(39, 'Contact ', 10, 'madmin.contactinfo.index', 1, 'fas fa-angle-right', 'Active', '2023-08-23 19:51:32', '2023-08-23 19:51:32'),
(40, 'Logo & Favicon', 10, 'madmin.logofavs.index', 2, 'fas fa-angle-right', 'Active', '2023-08-23 19:51:46', '2023-08-23 19:51:46'),
(41, 'Social Media Link', 10, 'madmin.socialmedia.index', 3, 'fas fa-angle-right', 'Active', '2023-08-23 19:52:01', '2023-08-26 01:30:24'),
(42, 'Payment Getaway', 10, 'madmin.paymentgetway.index', 4, 'fas fa-angle-right', 'Active', '2023-08-23 19:52:22', '2023-09-09 22:17:55'),
(43, 'SMS Getaway', 10, '#', 5, 'fas fa-angle-right', 'Active', '2023-08-23 19:52:51', '2023-08-23 19:52:51'),
(44, 'SEO ', 10, 'madmin.seoconfigs.index', 5, 'fas fa-angle-right', 'Active', '2023-08-23 19:53:13', '2023-08-23 19:53:13'),
(45, 'Login Setup', 10, '#', 8, 'fas fa-angle-right', 'Active', '2023-08-23 19:53:48', '2023-08-23 19:53:48'),
(46, 'Newsletter', 4, 'madmin.newsletteradmin.index', 3, 'fas fa-angle-right', 'Active', '2023-09-12 18:27:13', '2023-09-12 18:27:13'),
(47, 'SMS Log', 6, 'madmin.smslog.index', 2, 'fas fa-angle-right', 'Active', '2023-09-14 15:55:34', '2023-09-14 15:55:34'),
(48, 'Visitors', 9, 'madmin.visitors', 3, 'fas fa-angle-right', 'Active', '2025-06-03 11:15:38', '2025-06-03 11:15:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_24_10_000000_create_bkash_response_table', 1),
(5, '2021_05_07_180616_create_madmins_table', 1),
(6, '2021_05_19_175548_create_menus_table', 1),
(7, '2021_06_09_193903_create_weblogs_table', 1),
(8, '2021_06_09_193937_create_customers_table', 1),
(9, '2021_06_09_194021_create_reviews_table', 1),
(10, '2021_06_09_194035_create_review_replies_table', 1),
(11, '2021_06_09_194103_create_categories_table', 1),
(12, '2021_06_09_194111_create_brands_table', 1),
(13, '2021_06_09_194138_create_units_table', 1),
(14, '2021_06_09_194158_create_atributes_table', 1),
(15, '2021_06_09_194303_create_webinfos_table', 1),
(18, '2021_06_09_194610_create_seo_metas_table', 1),
(19, '2021_06_09_194623_create_slides_table', 1),
(27, '2021_06_09_200336_create_languages_table', 1),
(28, '2021_06_09_200410_create_smtp_settings_table', 1),
(29, '2021_06_10_190453_create_vendors_table', 1),
(32, '2021_08_07_213735_create_adjustments_table', 1),
(33, '2021_08_14_071934_create_vouchers_table', 1),
(34, '2021_08_14_091930_create_discounts_table', 1),
(35, '2021_08_19_103041_create_testimonials_table', 1),
(38, '2021_08_28_134845_create_requests_table', 1),
(40, '2021_09_11_063647_create_complains_table', 1),
(44, '2021_09_20_161841_create_wallets_table', 1),
(45, '2021_09_20_165418_create_divisions_table', 1),
(46, '2021_09_20_165504_create_cities_table', 1),
(47, '2021_09_20_165551_create_areas_table', 1),
(48, '2021_10_17_140619_create_flash_deals_table', 1),
(49, '2021_10_17_140640_create_flash_deal_products_table', 1),
(50, '2021_12_25_110140_create_servicings_table', 1),
(51, '2022_10_03_095023_create_tags_table', 1),
(52, '2022_10_03_111907_create_product_tags_table', 1),
(53, '2021_06_09_194648_create_banners_table', 2),
(54, '2021_09_11_233337_create_about_us_table', 3),
(55, '2021_06_09_194750_create_pages_table', 4),
(56, '2021_06_09_194759_create_blogs_table', 5),
(57, '2021_06_09_194807_create_faqs_table', 6),
(58, '2020_10_09_173858_create_contact_infos_table', 7),
(59, '2020_10_09_190631_create_socialmedia_table', 7),
(60, '2021_08_22_044444_create_contacts_table', 8),
(61, '2021_06_09_194543_create_seo_configs_table', 9),
(62, '2021_06_09_195104_create_product_stocks_table', 10),
(63, '2021_06_10_204643_create_products_table', 10),
(64, '2021_09_11_062014_create_payment_getways_table', 11),
(65, '2021_09_12_063700_create_orderhistries_table', 11),
(68, '2023_09_10_083637_create_order_addresses_table', 12),
(69, '2021_06_09_195620_create_orders_table', 13),
(70, '2021_06_09_195633_create_order_details_table', 14),
(72, '2023_09_10_083711_create_order_payments_table', 15),
(73, '2023_09_13_055833_create_newsletters_table', 16),
(74, '2023_02_13_234110_create_sms_campaigns_table', 17),
(75, '2023_02_14_222527_create_sms_logs_table', 17),
(76, '2023_02_15_001851_create_sms_contents_table', 17),
(77, '2023_10_07_144639_add_field_to_pages_table', 18),
(78, '2023_10_07_144651_add_field_to_categories_table', 18);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `name`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'omarwebkit@gmail.com', 'Active', '2023-09-13 00:13:20', '2023-09-13 00:13:20'),
(3, NULL, 'JlfoBH.hwtppj@chiffon.fun', 'Active', '2023-10-21 16:08:35', '2023-10-21 16:08:35'),
(4, NULL, 'rlal_generic_b18a5b28_jagopower.com@data-backup-store.com', 'Active', '2023-10-24 14:24:29', '2023-10-24 14:24:29'),
(5, NULL, '11.01hepy80scd6kjsdqjaasjg7yg@mail5u.pw', 'Active', '2023-11-10 15:44:15', '2023-11-10 15:44:15'),
(6, NULL, 'CtojDX.qhthcpq@sandcress.xyz', 'Active', '2023-12-02 15:32:50', '2023-12-02 15:32:50'),
(7, NULL, 'HVWWfo.tddbqcd@wheelry.boats', 'Active', '2023-12-14 03:54:04', '2023-12-14 03:54:04'),
(8, NULL, 'JozHjS.djwdbhj@virilia.life', 'Active', '2023-12-17 07:43:27', '2023-12-17 07:43:27'),
(9, NULL, 'XeWWfj.dcqhjbd@wheelry.boats', 'Active', '2023-12-18 16:36:11', '2023-12-18 16:36:11'),
(10, NULL, 'jzdIjP.bcmjppq@anaphora.team', 'Active', '2023-12-31 23:08:01', '2023-12-31 23:08:01'),
(11, NULL, 'xcDFcu.wqwppqc@chiffon.fun', 'Active', '2024-01-02 06:32:25', '2024-01-02 06:32:25'),
(12, NULL, 'tdmKdX.djdhpbm@flexduck.click', 'Active', '2024-01-03 23:04:14', '2024-01-03 23:04:14'),
(13, NULL, 'XHKzYs.bbjmwjh@rightbliss.beauty', 'Active', '2024-01-07 08:45:53', '2024-01-07 08:45:53'),
(14, NULL, '26.01hk6av63q4ve2j4hjsn6m0ewj@mail4u.fun', 'Active', '2024-01-10 09:15:19', '2024-01-10 09:15:19'),
(15, NULL, 'ojYjYV.hcddthj@borasca.xyz', 'Active', '2024-01-11 05:13:36', '2024-01-11 05:13:36'),
(16, NULL, 'fKCUxj.hcpcphd@tonetics.biz', 'Active', '2024-01-21 00:37:23', '2024-01-21 00:37:23'),
(17, NULL, 'fVxtpm.qwht@chiffon.fun', 'Active', '2024-01-31 01:39:33', '2024-01-31 01:39:33'),
(18, NULL, 'QURm_generic_b18a5b28_jagopower.com@data-backup-store.com', 'Active', '2024-02-10 04:43:06', '2024-02-10 04:43:06'),
(19, NULL, 'fwTXoj.qhtdwjtq@borasca.xyz', 'Active', '2024-02-22 20:23:27', '2024-02-22 20:23:27'),
(20, NULL, 'dpmhbccpc.hh@monochord.xyz', 'Active', '2024-03-18 23:58:57', '2024-03-18 23:58:57'),
(21, NULL, 'ppcthdctd.hh@monochord.xyz', 'Active', '2024-03-22 01:11:05', '2024-03-22 01:11:05'),
(22, NULL, 'qtpjdcjbbj.hh@monochord.xyz', 'Active', '2024-03-27 22:30:52', '2024-03-27 22:30:52'),
(23, NULL, 'um8G_generic_b18a5b28_jagopower.com@data-backup-store.com', 'Active', '2024-03-30 02:16:27', '2024-03-30 02:16:27'),
(24, NULL, 'um4j_generic_b18a5b28_jagopower.com@serviseantilogin.com', 'Active', '2024-07-02 16:19:32', '2024-07-02 16:19:32'),
(25, NULL, 'fQwS_generic_b18a5b28_jagopower.com@serviseantilogin.com', 'Active', '2024-07-03 00:48:34', '2024-07-03 00:48:34'),
(26, NULL, 'dVDl_generic_b18a5b28_jagopower.com@serviseantilogin.com', 'Active', '2024-07-03 12:12:39', '2024-07-03 12:12:39'),
(27, NULL, 'apetersty1098@gmail.com', 'Active', '2024-07-25 13:20:10', '2024-07-25 13:20:10'),
(28, NULL, 'apetersty1098@gmail.com', 'Active', '2024-07-25 13:20:22', '2024-07-25 13:20:22'),
(29, NULL, 'apetersty1098@gmail.com', 'Active', '2024-07-25 13:20:37', '2024-07-25 13:20:37'),
(30, NULL, 'lewis_jessica1985@yahoo.com', 'Active', '2024-07-28 01:36:05', '2024-07-28 01:36:05'),
(31, NULL, 'lewis_jessica1985@yahoo.com', 'Active', '2024-07-28 01:36:13', '2024-07-28 01:36:13'),
(32, NULL, 'lewis_jessica1985@yahoo.com', 'Active', '2024-07-28 01:36:26', '2024-07-28 01:36:26'),
(33, NULL, 'lewis_jessica1985@yahoo.com', 'Active', '2024-07-28 01:36:37', '2024-07-28 01:36:37'),
(34, NULL, 'johnsonbrittany2952@yahoo.com', 'Active', '2024-07-30 12:41:21', '2024-07-30 12:41:21'),
(35, NULL, 'johnsonbrittany2952@yahoo.com', 'Active', '2024-07-30 12:41:32', '2024-07-30 12:41:32'),
(36, NULL, 'johnsonbrittany2952@yahoo.com', 'Active', '2024-07-30 12:42:01', '2024-07-30 12:42:01'),
(37, NULL, 'ieajsmlruee@solid-hamster.skin', 'Active', '2024-08-17 01:01:45', '2024-08-17 01:01:45'),
(38, NULL, 'ieajsmlrura@solid-hamster.skin', 'Active', '2024-08-17 01:01:51', '2024-08-17 01:01:51'),
(39, NULL, 'ieajsmlruil@solid-hamster.skin', 'Active', '2024-08-17 01:01:56', '2024-08-17 01:01:56'),
(40, NULL, 'ieajsmlrumz@solid-hamster.skin', 'Active', '2024-08-17 01:02:05', '2024-08-17 01:02:05'),
(41, NULL, 'ieajsmlruzzb@solid-hamster.skin', 'Active', '2024-08-17 01:02:30', '2024-08-17 01:02:30'),
(42, NULL, 'ieajsmlruzbi@solid-hamster.skin', 'Active', '2024-08-17 01:02:37', '2024-08-17 01:02:37'),
(43, NULL, 'ieajsmlruzam@solid-hamster.skin', 'Active', '2024-08-17 01:02:44', '2024-08-17 01:02:44'),
(44, NULL, 'ieajsmlruzlz@solid-hamster.skin', 'Active', '2024-08-17 01:02:52', '2024-08-17 01:02:52'),
(45, NULL, 'ieajsmlruejr@solid-hamster.skin', 'Active', '2024-08-17 01:03:04', '2024-08-17 01:03:04'),
(46, NULL, 'ieajsmlruees@solid-hamster.skin', 'Active', '2024-08-17 01:03:08', '2024-08-17 01:03:08'),
(47, NULL, 'zaeablbzluee@solid-hamster.skin', 'Active', '2024-08-31 00:25:01', '2024-08-31 00:25:01'),
(48, NULL, 'zaeablbzlura@solid-hamster.skin', 'Active', '2024-08-31 00:25:10', '2024-08-31 00:25:10'),
(49, NULL, 'zaeablbzluil@solid-hamster.skin', 'Active', '2024-08-31 00:25:13', '2024-08-31 00:25:13'),
(50, NULL, 'zaeablbzlumz@solid-hamster.skin', 'Active', '2024-08-31 00:25:16', '2024-08-31 00:25:16'),
(51, NULL, 'zaeablbzluzzb@solid-hamster.skin', 'Active', '2024-08-31 00:25:21', '2024-08-31 00:25:21'),
(52, NULL, 'zaeablbzluzbi@solid-hamster.skin', 'Active', '2024-08-31 00:25:27', '2024-08-31 00:25:27'),
(53, NULL, 'zaeablbzluzam@solid-hamster.skin', 'Active', '2024-08-31 00:25:33', '2024-08-31 00:25:33'),
(54, NULL, 'zaeablbzluzlz@solid-hamster.skin', 'Active', '2024-08-31 00:25:46', '2024-08-31 00:25:46'),
(55, NULL, 'zaeablbzluejr@solid-hamster.skin', 'Active', '2024-08-31 00:25:51', '2024-08-31 00:25:51'),
(56, NULL, 'zaeablbzluees@solid-hamster.skin', 'Active', '2024-08-31 00:25:58', '2024-08-31 00:25:58'),
(57, NULL, 'nKNp_generic_b18a5b28_jagopower.com@serviseantilogin.com', 'Active', '2024-09-09 19:17:32', '2024-09-09 19:17:32'),
(58, NULL, 'elizabeth24krikorianssv@outlook.com', 'Active', '2024-09-10 18:13:00', '2024-09-10 18:13:00'),
(59, NULL, 'KMJP_generic_b18a5b28_jagopower.com@serviseantilogin.com', 'Active', '2024-09-14 07:29:21', '2024-09-14 07:29:21'),
(60, NULL, 'andinidewih@yahoo.com', 'Active', '2024-09-23 14:01:59', '2024-09-23 14:01:59'),
(61, NULL, 'andinidewih@yahoo.com', 'Active', '2024-09-23 14:02:22', '2024-09-23 14:02:22'),
(62, NULL, 'andinidewih@yahoo.com', 'Active', '2024-09-23 14:02:32', '2024-09-23 14:02:32'),
(63, NULL, 'tadderryan232418@yahoo.com', 'Active', '2024-09-23 14:21:18', '2024-09-23 14:21:18'),
(64, NULL, 'tadderryan232418@yahoo.com', 'Active', '2024-09-23 14:21:23', '2024-09-23 14:21:23'),
(65, NULL, 'tadderryan232418@yahoo.com', 'Active', '2024-09-23 14:21:36', '2024-09-23 14:21:36'),
(66, NULL, 'tadderryan232418@yahoo.com', 'Active', '2024-09-23 14:21:39', '2024-09-23 14:21:39'),
(67, NULL, 'maikawattsn2006@gmail.com', 'Active', '2024-09-27 02:07:18', '2024-09-27 02:07:18'),
(68, NULL, 'maikawattsn2006@gmail.com', 'Active', '2024-09-27 02:07:27', '2024-09-27 02:07:27'),
(69, NULL, 'maikawattsn2006@gmail.com', 'Active', '2024-09-27 02:07:34', '2024-09-27 02:07:34'),
(70, NULL, 'maikawattsn2006@gmail.com', 'Active', '2024-09-27 02:07:43', '2024-09-27 02:07:43'),
(71, NULL, 'riiiiizzmuee@dont-reply.me', 'Active', '2024-09-29 11:27:32', '2024-09-29 11:27:32'),
(72, NULL, 'sharoncf_gaskintf@outlook.com', 'Active', '2024-09-30 19:53:53', '2024-09-30 19:53:53'),
(73, NULL, 'sharoncf_gaskintf@outlook.com', 'Active', '2024-09-30 19:53:57', '2024-09-30 19:53:57'),
(74, NULL, 'sharoncf_gaskintf@outlook.com', 'Active', '2024-09-30 19:54:05', '2024-09-30 19:54:05'),
(75, NULL, 'sharoncf_gaskintf@outlook.com', 'Active', '2024-09-30 19:54:13', '2024-09-30 19:54:13'),
(76, NULL, 'VKjE_generic_b18a5b28_jagopower.com@serviseantilogin.com', 'Active', '2024-10-01 04:13:22', '2024-10-01 04:13:22'),
(77, NULL, 'AmandagFILeGkgoCornishNm@yahoo.com', 'Active', '2024-10-11 04:00:39', '2024-10-11 04:00:39'),
(78, NULL, 'AmandagFILeGkgoCornishNm@yahoo.com', 'Active', '2024-10-11 04:00:44', '2024-10-11 04:00:44'),
(79, NULL, 'AmandagFILeGkgoCornishNm@yahoo.com', 'Active', '2024-10-11 04:00:52', '2024-10-11 04:00:52'),
(80, NULL, 'sabrinhuynhhq42@gmail.com', 'Active', '2024-10-17 10:23:14', '2024-10-17 10:23:14'),
(81, NULL, 'sabrinhuynhhq42@gmail.com', 'Active', '2024-10-17 10:23:19', '2024-10-17 10:23:19'),
(82, NULL, 'sabrinhuynhhq42@gmail.com', 'Active', '2024-10-17 10:23:26', '2024-10-17 10:23:26'),
(83, NULL, 'sabrinhuynhhq42@gmail.com', 'Active', '2024-10-17 10:23:30', '2024-10-17 10:23:30'),
(84, NULL, 'leijsmjsauee@dont-reply.me', 'Active', '2024-10-18 10:35:24', '2024-10-18 10:35:24'),
(85, NULL, 'dyermerlru9794@gmail.com', 'Active', '2024-10-20 20:55:16', '2024-10-20 20:55:16'),
(86, NULL, 'dyermerlru9794@gmail.com', 'Active', '2024-10-20 20:55:29', '2024-10-20 20:55:29'),
(87, NULL, 'dyermerlru9794@gmail.com', 'Active', '2024-10-20 20:55:38', '2024-10-20 20:55:38'),
(88, NULL, 'lillaijackson23@gmail.com', 'Active', '2024-10-25 05:43:12', '2024-10-25 05:43:12'),
(89, NULL, 'lillaijackson23@gmail.com', 'Active', '2024-10-25 05:43:20', '2024-10-25 05:43:20'),
(90, NULL, 'lillaijackson23@gmail.com', 'Active', '2024-10-25 05:43:34', '2024-10-25 05:43:34'),
(91, NULL, 'zzlarmejbzuee@dont-reply.me', 'Active', '2024-10-27 09:25:28', '2024-10-27 09:25:28'),
(92, NULL, 'cheryll61desrosiersbir@outlook.com', 'Active', '2024-11-03 15:53:58', '2024-11-03 15:53:58'),
(93, NULL, 'cheryll61desrosiersbir@outlook.com', 'Active', '2024-11-03 15:54:02', '2024-11-03 15:54:02'),
(94, NULL, 'cheryll61desrosiersbir@outlook.com', 'Active', '2024-11-03 15:54:07', '2024-11-03 15:54:07'),
(95, NULL, 'zarrmjrmlsuee@dont-reply.me', 'Active', '2024-11-06 14:07:59', '2024-11-06 14:07:59'),
(96, NULL, 'stivenrichardg565@gmail.com', 'Active', '2024-11-07 17:51:45', '2024-11-07 17:51:45'),
(97, NULL, 'stivenrichardg565@gmail.com', 'Active', '2024-11-07 17:51:50', '2024-11-07 17:51:50'),
(98, NULL, 'stivenrichardg565@gmail.com', 'Active', '2024-11-07 17:52:06', '2024-11-07 17:52:06'),
(99, NULL, 'stivenrichardg565@gmail.com', 'Active', '2024-11-07 17:52:14', '2024-11-07 17:52:14'),
(100, NULL, 'emmalainmichaeli@gmail.com', 'Active', '2024-11-08 15:04:36', '2024-11-08 15:04:36'),
(101, NULL, 'emmalainmichaeli@gmail.com', 'Active', '2024-11-08 15:04:43', '2024-11-08 15:04:43'),
(102, NULL, 'emmalainmichaeli@gmail.com', 'Active', '2024-11-08 15:04:51', '2024-11-08 15:04:51'),
(103, NULL, 'emmalainmichaeli@gmail.com', 'Active', '2024-11-08 15:04:56', '2024-11-08 15:04:56'),
(104, NULL, 'pcoutelet@yahoo.fr', 'Active', '2024-11-09 09:55:15', '2024-11-09 09:55:15'),
(105, NULL, 'pcoutelet@yahoo.fr', 'Active', '2024-11-09 09:55:24', '2024-11-09 09:55:24'),
(106, NULL, 'pcoutelet@yahoo.fr', 'Active', '2024-11-09 09:55:42', '2024-11-09 09:55:42'),
(107, NULL, 'byntchlwt@yahoo.com', 'Active', '2024-11-10 20:14:50', '2024-11-10 20:14:50'),
(108, NULL, 'byntchlwt@yahoo.com', 'Active', '2024-11-10 20:14:58', '2024-11-10 20:14:58'),
(109, NULL, 'byntchlwt@yahoo.com', 'Active', '2024-11-10 20:15:13', '2024-11-10 20:15:13'),
(110, NULL, 'byntchlwt@yahoo.com', 'Active', '2024-11-10 20:15:21', '2024-11-10 20:15:21'),
(111, NULL, 'reijpkijlsy@yahoo.com', 'Active', '2024-11-11 15:22:08', '2024-11-11 15:22:08'),
(112, NULL, 'reijpkijlsy@yahoo.com', 'Active', '2024-11-11 15:22:19', '2024-11-11 15:22:19'),
(113, NULL, 'reijpkijlsy@yahoo.com', 'Active', '2024-11-11 15:22:27', '2024-11-11 15:22:27'),
(114, NULL, 'kburchr721@gmail.com', 'Active', '2024-11-12 11:16:01', '2024-11-12 11:16:01'),
(115, NULL, 'kburchr721@gmail.com', 'Active', '2024-11-12 11:16:05', '2024-11-12 11:16:05'),
(116, NULL, 'kburchr721@gmail.com', 'Active', '2024-11-12 11:16:10', '2024-11-12 11:16:10'),
(117, NULL, 'eallison7760@gmail.com', 'Active', '2024-11-13 09:50:54', '2024-11-13 09:50:54'),
(118, NULL, 'eallison7760@gmail.com', 'Active', '2024-11-13 09:50:58', '2024-11-13 09:50:58'),
(119, NULL, 'eallison7760@gmail.com', 'Active', '2024-11-13 09:51:09', '2024-11-13 09:51:09'),
(120, NULL, 'eallison7760@gmail.com', 'Active', '2024-11-13 09:51:20', '2024-11-13 09:51:20'),
(121, NULL, 'yves1776@yahoo.com', 'Active', '2024-11-14 06:41:17', '2024-11-14 06:41:17'),
(122, NULL, 'yves1776@yahoo.com', 'Active', '2024-11-14 06:41:33', '2024-11-14 06:41:33'),
(123, NULL, 'yves1776@yahoo.com', 'Active', '2024-11-14 06:41:37', '2024-11-14 06:41:37'),
(124, NULL, 'rontrujillo5593@gmail.com', 'Active', '2024-11-15 03:26:20', '2024-11-15 03:26:20'),
(125, NULL, 'rontrujillo5593@gmail.com', 'Active', '2024-11-15 03:26:26', '2024-11-15 03:26:26'),
(126, NULL, 'rontrujillo5593@gmail.com', 'Active', '2024-11-15 03:26:33', '2024-11-15 03:26:33'),
(127, NULL, 'rontrujillo5593@gmail.com', 'Active', '2024-11-15 03:26:37', '2024-11-15 03:26:37'),
(128, NULL, 'zmjrbzsmrbuee@dont-reply.me', 'Active', '2024-11-15 13:49:55', '2024-11-15 13:49:55'),
(129, NULL, 'andrewstayniyf1984@gmail.com', 'Active', '2024-11-16 01:19:38', '2024-11-16 01:19:38'),
(130, NULL, 'andrewstayniyf1984@gmail.com', 'Active', '2024-11-16 01:19:43', '2024-11-16 01:19:43'),
(131, NULL, 'andrewstayniyf1984@gmail.com', 'Active', '2024-11-16 01:19:49', '2024-11-16 01:19:49'),
(132, NULL, 'andrewstayniyf1984@gmail.com', 'Active', '2024-11-16 01:19:56', '2024-11-16 01:19:56'),
(133, NULL, 'paola.bucciarelli@yahoo.com', 'Active', '2024-11-16 23:42:01', '2024-11-16 23:42:01'),
(134, NULL, 'paola.bucciarelli@yahoo.com', 'Active', '2024-11-16 23:42:07', '2024-11-16 23:42:07'),
(135, NULL, 'paola.bucciarelli@yahoo.com', 'Active', '2024-11-16 23:42:33', '2024-11-16 23:42:33'),
(136, NULL, 'paola.bucciarelli@yahoo.com', 'Active', '2024-11-16 23:42:40', '2024-11-16 23:42:40'),
(137, NULL, 'correirobuyer@yahoo.com', 'Active', '2024-11-18 04:41:27', '2024-11-18 04:41:27'),
(138, NULL, 'correirobuyer@yahoo.com', 'Active', '2024-11-18 04:41:30', '2024-11-18 04:41:30'),
(139, NULL, 'correirobuyer@yahoo.com', 'Active', '2024-11-18 04:41:37', '2024-11-18 04:41:37'),
(140, NULL, 'correirobuyer@yahoo.com', 'Active', '2024-11-18 04:41:40', '2024-11-18 04:41:40'),
(141, NULL, 'kgdknhhvisy@yahoo.com', 'Active', '2024-11-21 01:57:03', '2024-11-21 01:57:03'),
(142, NULL, 'kgdknhhvisy@yahoo.com', 'Active', '2024-11-21 01:57:09', '2024-11-21 01:57:09'),
(143, NULL, 'kgdknhhvisy@yahoo.com', 'Active', '2024-11-21 01:57:18', '2024-11-21 01:57:18'),
(144, NULL, 'kgdknhhvisy@yahoo.com', 'Active', '2024-11-21 01:57:22', '2024-11-21 01:57:22'),
(145, NULL, 'ezlsjmerzmuee@dont-reply.me', 'Active', '2024-11-23 03:21:17', '2024-11-23 03:21:17'),
(146, NULL, 'xlvev0pduf5@yahoo.com', 'Active', '2024-11-23 14:07:39', '2024-11-23 14:07:39'),
(147, NULL, 'xlvev0pduf5@yahoo.com', 'Active', '2024-11-23 14:08:06', '2024-11-23 14:08:06'),
(148, NULL, 'wfshuwvarg@yahoo.com', 'Active', '2024-11-25 07:01:35', '2024-11-25 07:01:35'),
(149, NULL, 'wfshuwvarg@yahoo.com', 'Active', '2024-11-25 07:01:42', '2024-11-25 07:01:42'),
(150, NULL, 'wfshuwvarg@yahoo.com', 'Active', '2024-11-25 07:01:55', '2024-11-25 07:01:55'),
(151, NULL, 'santoslorisd6544@gmail.com', 'Active', '2024-11-27 04:03:42', '2024-11-27 04:03:42'),
(152, NULL, 'santoslorisd6544@gmail.com', 'Active', '2024-11-27 04:03:49', '2024-11-27 04:03:49'),
(153, NULL, 'santoslorisd6544@gmail.com', 'Active', '2024-11-27 04:04:05', '2024-11-27 04:04:05'),
(154, NULL, 'djeilonld2003@gmail.com', 'Active', '2024-11-28 02:09:31', '2024-11-28 02:09:31'),
(155, NULL, 'djeilonld2003@gmail.com', 'Active', '2024-11-28 02:09:39', '2024-11-28 02:09:39'),
(156, NULL, 'djeilonld2003@gmail.com', 'Active', '2024-11-28 02:09:54', '2024-11-28 02:09:54'),
(157, NULL, 'djeilonld2003@gmail.com', 'Active', '2024-11-28 02:09:59', '2024-11-28 02:09:59'),
(158, NULL, 'burchdevnetd@gmail.com', 'Active', '2024-11-28 22:55:16', '2024-11-28 22:55:16'),
(159, NULL, 'burchdevnetd@gmail.com', 'Active', '2024-11-28 22:55:23', '2024-11-28 22:55:23'),
(160, NULL, 'burchdevnetd@gmail.com', 'Active', '2024-11-28 22:55:37', '2024-11-28 22:55:37'),
(161, NULL, 'erisemjrljuee@do-not-respond.me', 'Active', '2024-11-30 00:55:28', '2024-11-30 00:55:28'),
(162, NULL, 'newtoserenin@gmail.com', 'Active', '2024-11-30 12:03:13', '2024-11-30 12:03:13'),
(163, NULL, 'newtoserenin@gmail.com', 'Active', '2024-11-30 12:03:23', '2024-11-30 12:03:23'),
(164, NULL, 'newtoserenin@gmail.com', 'Active', '2024-11-30 12:03:32', '2024-11-30 12:03:32'),
(165, NULL, 'newtoserenin@gmail.com', 'Active', '2024-11-30 12:03:37', '2024-11-30 12:03:37'),
(166, NULL, 'riliw582@gmail.com', 'Active', '2024-12-01 06:47:32', '2024-12-01 06:47:32'),
(167, NULL, 'riliw582@gmail.com', 'Active', '2024-12-01 06:47:49', '2024-12-01 06:47:49'),
(168, NULL, 'riliw582@gmail.com', 'Active', '2024-12-01 06:47:56', '2024-12-01 06:47:56'),
(169, NULL, 'gatheualberino@yahoo.com', 'Active', '2024-12-01 23:12:10', '2024-12-01 23:12:10'),
(170, NULL, 'gatheualberino@yahoo.com', 'Active', '2024-12-01 23:12:39', '2024-12-01 23:12:39'),
(171, NULL, 'gatheualberino@yahoo.com', 'Active', '2024-12-01 23:12:58', '2024-12-01 23:12:58'),
(172, NULL, 'gatheualberino@yahoo.com', 'Active', '2024-12-01 23:13:17', '2024-12-01 23:13:17'),
(173, NULL, 'wqwbudiykxhgpojx@yahoo.com', 'Active', '2024-12-02 17:42:15', '2024-12-02 17:42:15'),
(174, NULL, 'wqwbudiykxhgpojx@yahoo.com', 'Active', '2024-12-02 17:42:28', '2024-12-02 17:42:28'),
(175, NULL, 'wqwbudiykxhgpojx@yahoo.com', 'Active', '2024-12-02 17:42:47', '2024-12-02 17:42:47'),
(176, NULL, 'd1exwhder3csshf@yahoo.com', 'Active', '2024-12-03 11:09:11', '2024-12-03 11:09:11'),
(177, NULL, 'd1exwhder3csshf@yahoo.com', 'Active', '2024-12-03 11:09:21', '2024-12-03 11:09:21'),
(178, NULL, 'd1exwhder3csshf@yahoo.com', 'Active', '2024-12-03 11:09:26', '2024-12-03 11:09:26'),
(179, NULL, 'graneroeagr@yahoo.com', 'Active', '2024-12-04 03:15:33', '2024-12-04 03:15:33'),
(180, NULL, 'graneroeagr@yahoo.com', 'Active', '2024-12-04 03:15:39', '2024-12-04 03:15:39'),
(181, NULL, 'graneroeagr@yahoo.com', 'Active', '2024-12-04 03:15:45', '2024-12-04 03:15:45'),
(182, NULL, 'graneroeagr@yahoo.com', 'Active', '2024-12-04 03:15:48', '2024-12-04 03:15:48'),
(183, NULL, 'eiasamjljauee@do-not-respond.me', 'Active', '2024-12-04 12:39:04', '2024-12-04 12:39:04'),
(184, NULL, 'hrlbknkthck@yahoo.com', 'Active', '2024-12-07 05:31:24', '2024-12-07 05:31:24'),
(185, NULL, 'hrlbknkthck@yahoo.com', 'Active', '2024-12-07 05:31:30', '2024-12-07 05:31:30'),
(186, NULL, 'hrlbknkthck@yahoo.com', 'Active', '2024-12-07 05:31:45', '2024-12-07 05:31:45'),
(187, NULL, 'hrlbknkthck@yahoo.com', 'Active', '2024-12-07 05:31:51', '2024-12-07 05:31:51'),
(188, NULL, 'gledisj1996@gmail.com', 'Active', '2024-12-07 23:09:42', '2024-12-07 23:09:42'),
(189, NULL, 'gledisj1996@gmail.com', 'Active', '2024-12-07 23:10:02', '2024-12-07 23:10:02'),
(190, NULL, 'cleliakimbril@gmail.com', 'Active', '2024-12-08 16:21:29', '2024-12-08 16:21:29'),
(191, NULL, 'cleliakimbril@gmail.com', 'Active', '2024-12-08 16:21:53', '2024-12-08 16:21:53'),
(192, NULL, 'cleliakimbril@gmail.com', 'Active', '2024-12-08 16:22:03', '2024-12-08 16:22:03'),
(193, NULL, 'ellijmsbsauee@dont-reply.me', 'Active', '2024-12-09 18:04:34', '2024-12-09 18:04:34'),
(194, NULL, 'brynsmallv9@gmail.com', 'Active', '2024-12-09 18:13:46', '2024-12-09 18:13:46'),
(195, NULL, 'laracarsonil41@gmail.com', 'Active', '2024-12-10 17:43:28', '2024-12-10 17:43:28'),
(196, NULL, 'laracarsonil41@gmail.com', 'Active', '2024-12-10 17:43:34', '2024-12-10 17:43:34'),
(197, NULL, 'laracarsonil41@gmail.com', 'Active', '2024-12-10 17:43:40', '2024-12-10 17:43:40'),
(198, NULL, 'laracarsonil41@gmail.com', 'Active', '2024-12-10 17:43:44', '2024-12-10 17:43:44'),
(199, NULL, 'dtvgggnohfchgcaqj@yahoo.com', 'Active', '2024-12-11 22:13:27', '2024-12-11 22:13:27'),
(200, NULL, 'dtvgggnohfchgcaqj@yahoo.com', 'Active', '2024-12-11 22:13:42', '2024-12-11 22:13:42'),
(201, NULL, 'dtvgggnohfchgcaqj@yahoo.com', 'Active', '2024-12-11 22:14:04', '2024-12-11 22:14:04'),
(202, NULL, 'dtvgggnohfchgcaqj@yahoo.com', 'Active', '2024-12-11 22:14:18', '2024-12-11 22:14:18'),
(203, NULL, 'manasesspencer584@gmail.com', 'Active', '2024-12-14 01:19:16', '2024-12-14 01:19:16'),
(204, NULL, 'manasesspencer584@gmail.com', 'Active', '2024-12-14 01:19:20', '2024-12-14 01:19:20'),
(205, NULL, 'manasesspencer584@gmail.com', 'Active', '2024-12-14 01:19:24', '2024-12-14 01:19:24'),
(206, NULL, 'manasesspencer584@gmail.com', 'Active', '2024-12-14 01:19:28', '2024-12-14 01:19:28'),
(207, NULL, 'dw5cyriwybsiof6s@yahoo.com', 'Active', '2024-12-14 21:24:11', '2024-12-14 21:24:11'),
(208, NULL, 'dw5cyriwybsiof6s@yahoo.com', 'Active', '2024-12-14 21:24:23', '2024-12-14 21:24:23'),
(209, NULL, 'dw5cyriwybsiof6s@yahoo.com', 'Active', '2024-12-14 21:24:35', '2024-12-14 21:24:35'),
(210, NULL, 'bzzrijbmrauee@do-not-respond.me', 'Active', '2024-12-15 03:43:04', '2024-12-15 03:43:04'),
(211, NULL, 'fitzharnschsa@yahoo.com', 'Active', '2024-12-16 23:58:31', '2024-12-16 23:58:31'),
(212, NULL, 'fitzharnschsa@yahoo.com', 'Active', '2024-12-16 23:58:46', '2024-12-16 23:58:46'),
(213, NULL, 'fitzharnschsa@yahoo.com', 'Active', '2024-12-16 23:58:56', '2024-12-16 23:58:56'),
(214, NULL, 'mhloexlcaapmbv@yahoo.com', 'Active', '2024-12-18 03:34:10', '2024-12-18 03:34:10'),
(215, NULL, 'mhloexlcaapmbv@yahoo.com', 'Active', '2024-12-18 03:34:20', '2024-12-18 03:34:20'),
(216, NULL, 'mhloexlcaapmbv@yahoo.com', 'Active', '2024-12-18 03:34:46', '2024-12-18 03:34:46'),
(217, NULL, 'mhloexlcaapmbv@yahoo.com', 'Active', '2024-12-18 03:34:52', '2024-12-18 03:34:52'),
(218, NULL, 'desheenpet@yahoo.com', 'Active', '2024-12-19 04:21:22', '2024-12-19 04:21:22'),
(219, NULL, 'desheenpet@yahoo.com', 'Active', '2024-12-19 04:21:35', '2024-12-19 04:21:35'),
(220, NULL, 'desheenpet@yahoo.com', 'Active', '2024-12-19 04:21:42', '2024-12-19 04:21:42'),
(221, NULL, 'bbrbzzjazauee@do-not-respond.me', 'Active', '2024-12-20 02:11:39', '2024-12-20 02:11:39'),
(222, NULL, 'xuhuquvafo89@gmail.com', 'Active', '2024-12-20 04:18:09', '2024-12-20 04:18:09'),
(223, NULL, 'xuhuquvafo89@gmail.com', 'Active', '2024-12-20 04:18:12', '2024-12-20 04:18:12'),
(224, NULL, 'xuhuquvafo89@gmail.com', 'Active', '2024-12-20 04:18:20', '2024-12-20 04:18:20'),
(225, NULL, 'xuhuquvafo89@gmail.com', 'Active', '2024-12-20 04:18:26', '2024-12-20 04:18:26'),
(226, NULL, 'kuliretivo364@gmail.com', 'Active', '2024-12-21 01:21:20', '2024-12-21 01:21:20'),
(227, NULL, 'kuliretivo364@gmail.com', 'Active', '2024-12-21 01:21:29', '2024-12-21 01:21:29'),
(228, NULL, 'kuliretivo364@gmail.com', 'Active', '2024-12-21 01:21:48', '2024-12-21 01:21:48'),
(229, NULL, 'kuliretivo364@gmail.com', 'Active', '2024-12-21 01:21:58', '2024-12-21 01:21:58'),
(230, NULL, 'ixubelakeq91@gmail.com', 'Active', '2024-12-21 20:42:51', '2024-12-21 20:42:51'),
(231, NULL, 'ixubelakeq91@gmail.com', 'Active', '2024-12-21 20:43:04', '2024-12-21 20:43:04'),
(232, NULL, 'ixubelakeq91@gmail.com', 'Active', '2024-12-21 20:44:00', '2024-12-21 20:44:00'),
(233, NULL, 'ixubelakeq91@gmail.com', 'Active', '2024-12-21 20:44:10', '2024-12-21 20:44:10'),
(234, NULL, 't1onzcziwqp@yahoo.com', 'Active', '2024-12-22 15:21:28', '2024-12-22 15:21:28'),
(235, NULL, 't1onzcziwqp@yahoo.com', 'Active', '2024-12-22 15:21:32', '2024-12-22 15:21:32'),
(236, NULL, 't1onzcziwqp@yahoo.com', 'Active', '2024-12-22 15:21:37', '2024-12-22 15:21:37'),
(237, NULL, 'xiqihehac43@gmail.com', 'Active', '2024-12-23 10:38:31', '2024-12-23 10:38:31'),
(238, NULL, 'xiqihehac43@gmail.com', 'Active', '2024-12-23 10:38:36', '2024-12-23 10:38:36'),
(239, NULL, 'xiqihehac43@gmail.com', 'Active', '2024-12-23 10:38:44', '2024-12-23 10:38:44'),
(240, NULL, 'xiqihehac43@gmail.com', 'Active', '2024-12-23 10:38:49', '2024-12-23 10:38:49'),
(241, NULL, 'qrslnn20ttbijc@yahoo.com', 'Active', '2024-12-24 13:40:50', '2024-12-24 13:40:50'),
(242, NULL, 'qrslnn20ttbijc@yahoo.com', 'Active', '2024-12-24 13:40:56', '2024-12-24 13:40:56'),
(243, NULL, 'qrslnn20ttbijc@yahoo.com', 'Active', '2024-12-24 13:41:06', '2024-12-24 13:41:06'),
(244, NULL, 'qrslnn20ttbijc@yahoo.com', 'Active', '2024-12-24 13:41:12', '2024-12-24 13:41:12'),
(245, NULL, 'baszizsjlauee@do-not-respond.me', 'Active', '2024-12-25 02:08:20', '2024-12-25 02:08:20'),
(246, NULL, 'carllohanc@yahoo.com', 'Active', '2024-12-25 09:12:16', '2024-12-25 09:12:16'),
(247, NULL, 'carllohanc@yahoo.com', 'Active', '2024-12-25 09:12:24', '2024-12-25 09:12:24'),
(248, NULL, 'carllohanc@yahoo.com', 'Active', '2024-12-25 09:12:37', '2024-12-25 09:12:37'),
(249, NULL, 'carllohanc@yahoo.com', 'Active', '2024-12-25 09:12:47', '2024-12-25 09:12:47'),
(250, NULL, 'mqzpnh14k@yahoo.com', 'Active', '2024-12-26 04:34:17', '2024-12-26 04:34:17'),
(251, NULL, 'mqzpnh14k@yahoo.com', 'Active', '2024-12-26 04:34:25', '2024-12-26 04:34:25'),
(252, NULL, 'mqzpnh14k@yahoo.com', 'Active', '2024-12-26 04:34:33', '2024-12-26 04:34:33'),
(253, NULL, 'mqzpnh14k@yahoo.com', 'Active', '2024-12-26 04:34:39', '2024-12-26 04:34:39'),
(254, NULL, 'naqiwaseg19@gmail.com', 'Active', '2024-12-27 05:09:28', '2024-12-27 05:09:28'),
(255, NULL, 'naqiwaseg19@gmail.com', 'Active', '2024-12-27 05:09:35', '2024-12-27 05:09:35'),
(256, NULL, 'naqiwaseg19@gmail.com', 'Active', '2024-12-27 05:09:44', '2024-12-27 05:09:44'),
(257, NULL, 'naqiwaseg19@gmail.com', 'Active', '2024-12-27 05:09:53', '2024-12-27 05:09:53'),
(258, NULL, 'gudarajit98@gmail.com', 'Active', '2024-12-28 04:09:04', '2024-12-28 04:09:04'),
(259, NULL, 'gudarajit98@gmail.com', 'Active', '2024-12-28 04:09:15', '2024-12-28 04:09:15'),
(260, NULL, 'gudarajit98@gmail.com', 'Active', '2024-12-28 04:09:28', '2024-12-28 04:09:28'),
(261, NULL, 'hlgadikywht@yahoo.com', 'Active', '2024-12-29 23:07:24', '2024-12-29 23:07:24'),
(262, NULL, 'hlgadikywht@yahoo.com', 'Active', '2024-12-29 23:07:33', '2024-12-29 23:07:33'),
(263, NULL, 'hlgadikywht@yahoo.com', 'Active', '2024-12-29 23:07:47', '2024-12-29 23:07:47'),
(264, NULL, 'hlgadikywht@yahoo.com', 'Active', '2024-12-29 23:07:55', '2024-12-29 23:07:55'),
(265, NULL, 'bljjzebiaauee@do-not-respond.me', 'Active', '2024-12-30 07:02:53', '2024-12-30 07:02:53'),
(266, NULL, 'rkpsvhkemjomm@yahoo.com', 'Active', '2024-12-30 20:29:35', '2024-12-30 20:29:35'),
(267, NULL, 'rkpsvhkemjomm@yahoo.com', 'Active', '2024-12-30 20:29:42', '2024-12-30 20:29:42'),
(268, NULL, 'rkpsvhkemjomm@yahoo.com', 'Active', '2024-12-30 20:29:54', '2024-12-30 20:29:54'),
(269, NULL, 'rkpsvhkemjomm@yahoo.com', 'Active', '2024-12-30 20:30:01', '2024-12-30 20:30:01'),
(270, NULL, 'geyutahikaz532@gmail.com', 'Active', '2024-12-31 14:57:03', '2024-12-31 14:57:03'),
(271, NULL, 'geyutahikaz532@gmail.com', 'Active', '2024-12-31 14:57:09', '2024-12-31 14:57:09'),
(272, NULL, 'geyutahikaz532@gmail.com', 'Active', '2024-12-31 14:57:22', '2024-12-31 14:57:22'),
(273, NULL, 'geyutahikaz532@gmail.com', 'Active', '2024-12-31 14:57:27', '2024-12-31 14:57:27'),
(274, NULL, 'vgebmctpqapjjximx@yahoo.com', 'Active', '2025-01-02 21:43:21', '2025-01-02 21:43:21'),
(275, NULL, 'vgebmctpqapjjximx@yahoo.com', 'Active', '2025-01-02 21:43:31', '2025-01-02 21:43:31'),
(276, NULL, 'vgebmctpqapjjximx@yahoo.com', 'Active', '2025-01-02 21:43:38', '2025-01-02 21:43:38'),
(277, NULL, 'esosholis@yahoo.com', 'Active', '2025-01-03 21:03:18', '2025-01-03 21:03:18'),
(278, NULL, 'esosholis@yahoo.com', 'Active', '2025-01-03 21:03:26', '2025-01-03 21:03:26'),
(279, NULL, 'esosholis@yahoo.com', 'Active', '2025-01-03 21:03:39', '2025-01-03 21:03:39'),
(280, NULL, 'esosholis@yahoo.com', 'Active', '2025-01-03 21:03:50', '2025-01-03 21:03:50'),
(281, NULL, 'abucucig742@gmail.com', 'Active', '2025-01-04 20:39:43', '2025-01-04 20:39:43'),
(282, NULL, 'abucucig742@gmail.com', 'Active', '2025-01-04 20:39:53', '2025-01-04 20:39:53'),
(283, NULL, 'abucucig742@gmail.com', 'Active', '2025-01-04 20:39:58', '2025-01-04 20:39:58'),
(284, NULL, 'abucucig742@gmail.com', 'Active', '2025-01-04 20:40:13', '2025-01-04 20:40:13'),
(285, NULL, 'rjelibjeeauee@dont-reply.me', 'Active', '2025-01-05 03:06:49', '2025-01-05 03:06:49'),
(286, NULL, 'xewilisizec851@gmail.com', 'Active', '2025-01-06 01:16:23', '2025-01-06 01:16:23'),
(287, NULL, 'xewilisizec851@gmail.com', 'Active', '2025-01-06 01:16:31', '2025-01-06 01:16:31'),
(288, NULL, 'xewilisizec851@gmail.com', 'Active', '2025-01-06 01:16:40', '2025-01-06 01:16:40'),
(289, NULL, 'xewilisizec851@gmail.com', 'Active', '2025-01-06 01:16:46', '2025-01-06 01:16:46'),
(290, NULL, 'simstriebinger@yahoo.com', 'Active', '2025-01-07 04:06:52', '2025-01-07 04:06:52'),
(291, NULL, 'simstriebinger@yahoo.com', 'Active', '2025-01-07 04:06:59', '2025-01-07 04:06:59'),
(292, NULL, 'simstriebinger@yahoo.com', 'Active', '2025-01-07 04:07:11', '2025-01-07 04:07:11'),
(293, NULL, 'simstriebinger@yahoo.com', 'Active', '2025-01-07 04:07:16', '2025-01-07 04:07:16'),
(294, NULL, 'ahimofub46@gmail.com', 'Active', '2025-01-08 04:28:22', '2025-01-08 04:28:22'),
(295, NULL, 'ahimofub46@gmail.com', 'Active', '2025-01-08 04:28:26', '2025-01-08 04:28:26'),
(296, NULL, 'ahimofub46@gmail.com', 'Active', '2025-01-08 04:29:05', '2025-01-08 04:29:05'),
(297, NULL, 'ahimofub46@gmail.com', 'Active', '2025-01-08 04:29:14', '2025-01-08 04:29:14'),
(298, NULL, 'aralakiwujif00@gmail.com', 'Active', '2025-01-09 08:54:18', '2025-01-09 08:54:18'),
(299, NULL, 'aralakiwujif00@gmail.com', 'Active', '2025-01-09 08:54:26', '2025-01-09 08:54:26'),
(300, NULL, 'aralakiwujif00@gmail.com', 'Active', '2025-01-09 08:54:33', '2025-01-09 08:54:33'),
(301, NULL, 'l7ngkyjixxyr@yahoo.com', 'Active', '2025-01-10 07:43:43', '2025-01-10 07:43:43'),
(302, NULL, 'l7ngkyjixxyr@yahoo.com', 'Active', '2025-01-10 07:43:49', '2025-01-10 07:43:49'),
(303, NULL, 'l7ngkyjixxyr@yahoo.com', 'Active', '2025-01-10 07:43:55', '2025-01-10 07:43:55'),
(304, NULL, 'l7ngkyjixxyr@yahoo.com', 'Active', '2025-01-10 07:44:03', '2025-01-10 07:44:03'),
(305, NULL, 'reaszbismauee@dont-reply.me', 'Active', '2025-01-11 00:30:13', '2025-01-11 00:30:13'),
(306, NULL, 'lpfwqssqdnf@yahoo.com', 'Active', '2025-01-11 05:43:37', '2025-01-11 05:43:37'),
(307, NULL, 'lpfwqssqdnf@yahoo.com', 'Active', '2025-01-11 05:44:00', '2025-01-11 05:44:00'),
(308, NULL, 'lpfwqssqdnf@yahoo.com', 'Active', '2025-01-11 05:44:10', '2025-01-11 05:44:10'),
(309, NULL, 'ahefupetap13@gmail.com', 'Active', '2025-01-12 06:32:38', '2025-01-12 06:32:38'),
(310, NULL, 'ahefupetap13@gmail.com', 'Active', '2025-01-12 06:32:41', '2025-01-12 06:32:41'),
(311, NULL, 'ahefupetap13@gmail.com', 'Active', '2025-01-12 06:32:47', '2025-01-12 06:32:47'),
(312, NULL, 'ahefupetap13@gmail.com', 'Active', '2025-01-12 06:32:54', '2025-01-12 06:32:54'),
(313, NULL, 'primitivotae@yahoo.com', 'Active', '2025-01-13 11:33:57', '2025-01-13 11:33:57'),
(314, NULL, 'primitivotae@yahoo.com', 'Active', '2025-01-13 11:34:22', '2025-01-13 11:34:22'),
(315, NULL, 'mericyekelchyk@yahoo.com', 'Active', '2025-01-15 02:12:47', '2025-01-15 02:12:47'),
(316, NULL, 'mericyekelchyk@yahoo.com', 'Active', '2025-01-15 02:12:55', '2025-01-15 02:12:55'),
(317, NULL, 'mericyekelchyk@yahoo.com', 'Active', '2025-01-15 02:13:06', '2025-01-15 02:13:06'),
(318, NULL, 'mericyekelchyk@yahoo.com', 'Active', '2025-01-15 02:13:10', '2025-01-15 02:13:10'),
(319, NULL, 'tempeste5yarn12ai@gmail.com', 'Active', '2025-01-16 12:57:12', '2025-01-16 12:57:12'),
(320, NULL, 'tempeste5yarn12ai@gmail.com', 'Active', '2025-01-16 12:57:24', '2025-01-16 12:57:24'),
(321, NULL, 'bwcltclyuky@yahoo.com', 'Active', '2025-01-17 21:27:30', '2025-01-17 21:27:30'),
(322, NULL, 'bwcltclyuky@yahoo.com', 'Active', '2025-01-17 21:27:44', '2025-01-17 21:27:44'),
(323, NULL, 'bwcltclyuky@yahoo.com', 'Active', '2025-01-17 21:27:57', '2025-01-17 21:27:57'),
(324, NULL, 'bwcltclyuky@yahoo.com', 'Active', '2025-01-17 21:28:07', '2025-01-17 21:28:07'),
(325, NULL, 'uabraxasoualchemy46@gmail.com', 'Active', '2025-01-18 19:09:59', '2025-01-18 19:09:59'),
(326, NULL, 'uabraxasoualchemy46@gmail.com', 'Active', '2025-01-18 19:10:24', '2025-01-18 19:10:24'),
(327, NULL, 'uabraxasoualchemy46@gmail.com', 'Active', '2025-01-18 19:10:34', '2025-01-18 19:10:34'),
(328, NULL, 'm7jlyvklgxopt67h@yahoo.com', 'Active', '2025-01-20 16:00:53', '2025-01-20 16:00:53'),
(329, NULL, 'm7jlyvklgxopt67h@yahoo.com', 'Active', '2025-01-20 16:01:05', '2025-01-20 16:01:05'),
(330, NULL, 'm7jlyvklgxopt67h@yahoo.com', 'Active', '2025-01-20 16:01:18', '2025-01-20 16:01:18'),
(331, NULL, 'kismetia82verge20ay@gmail.com', 'Active', '2025-01-22 03:25:28', '2025-01-22 03:25:28'),
(332, NULL, 'kismetia82verge20ay@gmail.com', 'Active', '2025-01-22 03:25:36', '2025-01-22 03:25:36'),
(333, NULL, 'kismetia82verge20ay@gmail.com', 'Active', '2025-01-22 03:26:01', '2025-01-22 03:26:01'),
(334, NULL, 'runighanradlif@yahoo.com', 'Active', '2025-01-23 22:08:28', '2025-01-23 22:08:28'),
(335, NULL, 'runighanradlif@yahoo.com', 'Active', '2025-01-23 22:08:36', '2025-01-23 22:08:36'),
(336, NULL, 'runighanradlif@yahoo.com', 'Active', '2025-01-23 22:08:46', '2025-01-23 22:08:46'),
(337, NULL, 'runighanradlif@yahoo.com', 'Active', '2025-01-23 22:08:53', '2025-01-23 22:08:53'),
(338, NULL, 'jm29nlomgxj3t@yahoo.com', 'Active', '2025-01-27 00:05:01', '2025-01-27 00:05:01'),
(339, NULL, 'jm29nlomgxj3t@yahoo.com', 'Active', '2025-01-27 00:05:07', '2025-01-27 00:05:07'),
(340, NULL, 'jm29nlomgxj3t@yahoo.com', 'Active', '2025-01-27 00:05:18', '2025-01-27 00:05:18'),
(341, NULL, 'jm29nlomgxj3t@yahoo.com', 'Active', '2025-01-27 00:05:22', '2025-01-27 00:05:22'),
(342, NULL, 'aielzsiezauee@dont-reply.me', 'Active', '2025-01-28 16:11:38', '2025-01-28 16:11:38'),
(343, NULL, 'qxbnoiuhc@yahoo.com', 'Active', '2025-01-29 12:06:28', '2025-01-29 12:06:28'),
(344, NULL, 'qxbnoiuhc@yahoo.com', 'Active', '2025-01-29 12:06:37', '2025-01-29 12:06:37'),
(345, NULL, 'qxbnoiuhc@yahoo.com', 'Active', '2025-01-29 12:06:47', '2025-01-29 12:06:47'),
(346, NULL, 'qxbnoiuhc@yahoo.com', 'Active', '2025-01-29 12:06:50', '2025-01-29 12:06:50'),
(347, NULL, 'Xavier0Clapton0063@gmail.com', 'Active', '2025-01-30 22:55:23', '2025-01-30 22:55:23'),
(348, NULL, 'Xavier0Clapton0063@gmail.com', 'Active', '2025-01-30 22:55:32', '2025-01-30 22:55:32'),
(349, NULL, 'Xavier0Clapton0063@gmail.com', 'Active', '2025-01-30 22:55:40', '2025-01-30 22:55:40'),
(350, NULL, 'Xavier0Clapton0063@gmail.com', 'Active', '2025-01-30 22:55:46', '2025-01-30 22:55:46'),
(351, NULL, 'tuxwgmwylcnlkxaq@yahoo.com', 'Active', '2025-02-01 04:25:14', '2025-02-01 04:25:14'),
(352, NULL, 'tuxwgmwylcnlkxaq@yahoo.com', 'Active', '2025-02-01 04:25:24', '2025-02-01 04:25:24'),
(353, NULL, 'tuxwgmwylcnlkxaq@yahoo.com', 'Active', '2025-02-01 04:25:33', '2025-02-01 04:25:33'),
(354, NULL, 'tuxwgmwylcnlkxaq@yahoo.com', 'Active', '2025-02-01 04:25:37', '2025-02-01 04:25:37'),
(355, NULL, 'uharuzimeza474@gmail.com', 'Active', '2025-02-02 02:10:51', '2025-02-02 02:10:51'),
(356, NULL, 'uharuzimeza474@gmail.com', 'Active', '2025-02-02 02:11:02', '2025-02-02 02:11:02'),
(357, NULL, 'uharuzimeza474@gmail.com', 'Active', '2025-02-02 02:11:11', '2025-02-02 02:11:11'),
(358, NULL, 'uharuzimeza474@gmail.com', 'Active', '2025-02-02 02:11:20', '2025-02-02 02:11:20'),
(359, NULL, 'oneyahulo60@gmail.com', 'Active', '2025-02-03 00:26:01', '2025-02-03 00:26:01'),
(360, NULL, 'oneyahulo60@gmail.com', 'Active', '2025-02-03 00:26:07', '2025-02-03 00:26:07'),
(361, NULL, 'oneyahulo60@gmail.com', 'Active', '2025-02-03 00:26:17', '2025-02-03 00:26:17'),
(362, NULL, 'oneyahulo60@gmail.com', 'Active', '2025-02-03 00:26:24', '2025-02-03 00:26:24'),
(363, NULL, 'uailluminatea71xenon96e@gmail.com', 'Active', '2025-02-04 02:07:24', '2025-02-04 02:07:24'),
(364, NULL, 'uailluminatea71xenon96e@gmail.com', 'Active', '2025-02-04 02:07:31', '2025-02-04 02:07:31'),
(365, NULL, 'uailluminatea71xenon96e@gmail.com', 'Active', '2025-02-04 02:07:42', '2025-02-04 02:07:42'),
(366, NULL, 'uailluminatea71xenon96e@gmail.com', 'Active', '2025-02-04 02:07:50', '2025-02-04 02:07:50'),
(367, NULL, 'dusk92quartz87ie@gmail.com', 'Active', '2025-02-05 02:30:46', '2025-02-05 02:30:46'),
(368, NULL, 'dusk92quartz87ie@gmail.com', 'Active', '2025-02-05 02:30:52', '2025-02-05 02:30:52'),
(369, NULL, 'dusk92quartz87ie@gmail.com', 'Active', '2025-02-05 02:31:33', '2025-02-05 02:31:33'),
(370, NULL, 'dusk92quartz87ie@gmail.com', 'Active', '2025-02-05 02:31:44', '2025-02-05 02:31:44'),
(371, NULL, 'phantomiu21glyph67@gmail.com', 'Active', '2025-02-06 02:07:13', '2025-02-06 02:07:13'),
(372, NULL, 'phantomiu21glyph67@gmail.com', 'Active', '2025-02-06 02:07:22', '2025-02-06 02:07:22'),
(373, NULL, 'phantomiu21glyph67@gmail.com', 'Active', '2025-02-06 02:07:32', '2025-02-06 02:07:32'),
(374, NULL, 'phantomiu21glyph67@gmail.com', 'Active', '2025-02-06 02:07:39', '2025-02-06 02:07:39'),
(375, NULL, 'aezenithaecho53@gmail.com', 'Active', '2025-02-08 21:18:02', '2025-02-08 21:18:02'),
(376, NULL, 'aezenithaecho53@gmail.com', 'Active', '2025-02-08 21:18:12', '2025-02-08 21:18:12'),
(377, NULL, 'lunar17glyph68@gmail.com', 'Active', '2025-02-10 03:57:47', '2025-02-10 03:57:47'),
(378, NULL, 'lunar17glyph68@gmail.com', 'Active', '2025-02-10 03:58:01', '2025-02-10 03:58:01'),
(379, NULL, 'lunar17glyph68@gmail.com', 'Active', '2025-02-10 03:58:14', '2025-02-10 03:58:14'),
(380, NULL, 'lunar17glyph68@gmail.com', 'Active', '2025-02-10 03:58:24', '2025-02-10 03:58:24'),
(381, NULL, 'halepepasuy68@gmail.com', 'Active', '2025-02-14 04:38:59', '2025-02-14 04:38:59'),
(382, NULL, 'halepepasuy68@gmail.com', 'Active', '2025-02-14 04:39:19', '2025-02-14 04:39:19'),
(383, NULL, 'halepepasuy68@gmail.com', 'Active', '2025-02-14 04:39:37', '2025-02-14 04:39:37'),
(384, NULL, 'halepepasuy68@gmail.com', 'Active', '2025-02-14 04:39:57', '2025-02-14 04:39:57'),
(385, NULL, 'gossamerio96nexus74@gmail.com', 'Active', '2025-02-14 23:00:57', '2025-02-14 23:00:57'),
(386, NULL, 'gossamerio96nexus74@gmail.com', 'Active', '2025-02-14 23:01:09', '2025-02-14 23:01:09'),
(387, NULL, 'tloveib6@gmail.com', 'Active', '2025-02-16 07:32:18', '2025-02-16 07:32:18'),
(388, NULL, 'tloveib6@gmail.com', 'Active', '2025-02-16 07:32:30', '2025-02-16 07:32:30'),
(389, NULL, 'tloveib6@gmail.com', 'Active', '2025-02-16 07:32:54', '2025-02-16 07:32:54'),
(390, NULL, 'ijzraemisuee@dont-reply.me', 'Active', '2025-02-16 08:41:26', '2025-02-16 08:41:26'),
(391, NULL, 'yljmgvja1api7vh@yahoo.com', 'Active', '2025-02-17 00:03:54', '2025-02-17 00:03:54'),
(392, NULL, 'dalyafbe2004@gmail.com', 'Active', '2025-02-18 03:43:42', '2025-02-18 03:43:42'),
(393, NULL, 'dalyafbe2004@gmail.com', 'Active', '2025-02-18 03:44:02', '2025-02-18 03:44:02'),
(394, NULL, 'dalyafbe2004@gmail.com', 'Active', '2025-02-18 03:44:16', '2025-02-18 03:44:16'),
(395, NULL, 'dalyafbe2004@gmail.com', 'Active', '2025-02-18 03:44:25', '2025-02-18 03:44:25'),
(396, NULL, 'lemmamabsuee@dont-reply.me', 'Active', '2025-02-19 02:23:56', '2025-02-19 02:23:56'),
(397, NULL, 'jpvrorue@do-not-respond.me', 'Active', '2025-02-19 05:40:16', '2025-02-19 05:40:16'),
(398, NULL, 'bjfjezna@do-not-respond.me', 'Active', '2025-02-19 05:40:16', '2025-02-19 05:40:16'),
(399, NULL, 'fmdbsodd@do-not-respond.me', 'Active', '2025-02-19 05:40:16', '2025-02-19 05:40:16'),
(400, NULL, 'slorni2004@gmail.com', 'Active', '2025-02-19 14:17:12', '2025-02-19 14:17:12'),
(401, NULL, 'slorni2004@gmail.com', 'Active', '2025-02-19 14:17:21', '2025-02-19 14:17:21'),
(402, NULL, 'slorni2004@gmail.com', 'Active', '2025-02-19 14:17:39', '2025-02-19 14:17:39'),
(403, NULL, 'slorni2004@gmail.com', 'Active', '2025-02-19 14:17:54', '2025-02-19 14:17:54'),
(404, NULL, 'masonglinisi3@gmail.com', 'Active', '2025-02-21 18:19:22', '2025-02-21 18:19:22'),
(405, NULL, 'masonglinisi3@gmail.com', 'Active', '2025-02-21 18:19:26', '2025-02-21 18:19:26'),
(406, NULL, 'masonglinisi3@gmail.com', 'Active', '2025-02-21 18:19:36', '2025-02-21 18:19:36'),
(407, NULL, 'masonglinisi3@gmail.com', 'Active', '2025-02-21 18:19:43', '2025-02-21 18:19:43'),
(408, NULL, 'gentosbeoryv15@gmail.com', 'Active', '2025-02-22 16:52:25', '2025-02-22 16:52:25'),
(409, NULL, 'gentosbeoryv15@gmail.com', 'Active', '2025-02-22 16:52:34', '2025-02-22 16:52:34'),
(410, NULL, 'gentosbeoryv15@gmail.com', 'Active', '2025-02-22 16:52:55', '2025-02-22 16:52:55'),
(411, NULL, 'gentosbeoryv15@gmail.com', 'Active', '2025-02-22 16:52:59', '2025-02-22 16:52:59'),
(412, NULL, 'odhqqvadccxypc@yahoo.com', 'Active', '2025-02-25 05:08:56', '2025-02-25 05:08:56'),
(413, NULL, 'odhqqvadccxypc@yahoo.com', 'Active', '2025-02-25 05:09:09', '2025-02-25 05:09:09'),
(414, NULL, 'odhqqvadccxypc@yahoo.com', 'Active', '2025-02-25 05:09:17', '2025-02-25 05:09:17'),
(415, NULL, 'odhqqvadccxypc@yahoo.com', 'Active', '2025-02-25 05:09:20', '2025-02-25 05:09:20'),
(416, NULL, 'ksanderbridges33@gmail.com', 'Active', '2025-02-28 02:10:25', '2025-02-28 02:10:25'),
(417, NULL, 'ksanderbridges33@gmail.com', 'Active', '2025-02-28 02:10:36', '2025-02-28 02:10:36'),
(418, NULL, 'ksanderbridges33@gmail.com', 'Active', '2025-02-28 02:10:43', '2025-02-28 02:10:43'),
(419, NULL, 'bentleimx@gmail.com', 'Active', '2025-02-28 20:04:03', '2025-02-28 20:04:03'),
(420, NULL, 'bentleimx@gmail.com', 'Active', '2025-02-28 20:04:25', '2025-02-28 20:04:25'),
(421, NULL, 'bentleimx@gmail.com', 'Active', '2025-02-28 20:04:45', '2025-02-28 20:04:45'),
(422, NULL, 'bbsebcajsof@yahoo.com', 'Active', '2025-03-02 05:46:30', '2025-03-02 05:46:30'),
(423, NULL, 'bbsebcajsof@yahoo.com', 'Active', '2025-03-02 05:46:36', '2025-03-02 05:46:36'),
(424, NULL, 'bbsebcajsof@yahoo.com', 'Active', '2025-03-02 05:46:44', '2025-03-02 05:46:44'),
(425, NULL, 'bbsebcajsof@yahoo.com', 'Active', '2025-03-02 05:46:49', '2025-03-02 05:46:49'),
(426, NULL, 'cabvenj@gmail.com', 'Active', '2025-03-02 22:38:45', '2025-03-02 22:38:45'),
(427, NULL, 'cabvenj@gmail.com', 'Active', '2025-03-02 22:38:50', '2025-03-02 22:38:50'),
(428, NULL, 'cabvenj@gmail.com', 'Active', '2025-03-02 22:38:57', '2025-03-02 22:38:57'),
(429, NULL, 'cabvenj@gmail.com', 'Active', '2025-03-02 22:39:04', '2025-03-02 22:39:04'),
(430, NULL, 'djongarnerq9@gmail.com', 'Active', '2025-03-05 01:09:17', '2025-03-05 01:09:17'),
(431, NULL, 'djongarnerq9@gmail.com', 'Active', '2025-03-05 01:09:33', '2025-03-05 01:09:33'),
(432, NULL, 'djongarnerq9@gmail.com', 'Active', '2025-03-05 01:09:40', '2025-03-05 01:09:40'),
(433, NULL, 'djongarnerq9@gmail.com', 'Active', '2025-03-05 01:09:49', '2025-03-05 01:09:49'),
(434, NULL, 'merdodukev40@gmail.com', 'Active', '2025-03-06 04:49:56', '2025-03-06 04:49:56'),
(435, NULL, 'merdodukev40@gmail.com', 'Active', '2025-03-06 04:50:16', '2025-03-06 04:50:16'),
(436, NULL, 'merdodukev40@gmail.com', 'Active', '2025-03-06 04:50:37', '2025-03-06 04:50:37'),
(437, NULL, 'merdodukev40@gmail.com', 'Active', '2025-03-06 04:50:42', '2025-03-06 04:50:42'),
(438, NULL, 'asparksr47@gmail.com', 'Active', '2025-03-08 05:19:49', '2025-03-08 05:19:49'),
(439, NULL, 'asparksr47@gmail.com', 'Active', '2025-03-08 05:19:53', '2025-03-08 05:19:53'),
(440, NULL, 'asparksr47@gmail.com', 'Active', '2025-03-08 05:20:00', '2025-03-08 05:20:00'),
(441, NULL, 'asparksr47@gmail.com', 'Active', '2025-03-08 05:20:20', '2025-03-08 05:20:20'),
(442, NULL, 'bryahykk@gmail.com', 'Active', '2025-03-09 03:59:56', '2025-03-09 03:59:56'),
(443, NULL, 'bryahykk@gmail.com', 'Active', '2025-03-09 04:00:16', '2025-03-09 04:00:16'),
(444, NULL, 'bryahykk@gmail.com', 'Active', '2025-03-09 04:00:55', '2025-03-09 04:00:55'),
(445, NULL, 'bryahykk@gmail.com', 'Active', '2025-03-09 04:01:11', '2025-03-09 04:01:11'),
(446, NULL, 'kbernardwh2006@gmail.com', 'Active', '2025-03-12 19:27:05', '2025-03-12 19:27:05'),
(447, NULL, 'kbernardwh2006@gmail.com', 'Active', '2025-03-12 19:27:13', '2025-03-12 19:27:13'),
(448, NULL, 'kbernardwh2006@gmail.com', 'Active', '2025-03-12 19:27:26', '2025-03-12 19:27:26'),
(449, NULL, 'kbernardwh2006@gmail.com', 'Active', '2025-03-12 19:27:33', '2025-03-12 19:27:33'),
(450, NULL, 'brenkorepi42@gmail.com', 'Active', '2025-03-14 20:42:21', '2025-03-14 20:42:21'),
(451, NULL, 'brenkorepi42@gmail.com', 'Active', '2025-03-14 20:42:29', '2025-03-14 20:42:29'),
(452, NULL, 'brenkorepi42@gmail.com', 'Active', '2025-03-14 20:42:45', '2025-03-14 20:42:45'),
(453, NULL, 'brenkorepi42@gmail.com', 'Active', '2025-03-14 20:42:54', '2025-03-14 20:42:54'),
(454, NULL, 'skaimorrisonc@gmail.com', 'Active', '2025-03-15 16:19:04', '2025-03-15 16:19:04'),
(455, NULL, 'skaimorrisonc@gmail.com', 'Active', '2025-03-15 16:19:21', '2025-03-15 16:19:21'),
(456, NULL, 'skaimorrisonc@gmail.com', 'Active', '2025-03-15 16:19:37', '2025-03-15 16:19:37'),
(457, NULL, 'skaimorrisonc@gmail.com', 'Active', '2025-03-15 16:19:58', '2025-03-15 16:19:58'),
(458, NULL, 'laladjfloreshh4@gmail.com', 'Active', '2025-03-17 03:14:57', '2025-03-17 03:14:57'),
(459, NULL, 'laladjfloreshh4@gmail.com', 'Active', '2025-03-17 03:15:05', '2025-03-17 03:15:05'),
(460, NULL, 'laladjfloreshh4@gmail.com', 'Active', '2025-03-17 03:15:20', '2025-03-17 03:15:20'),
(461, NULL, 'laladjfloreshh4@gmail.com', 'Active', '2025-03-17 03:15:27', '2025-03-17 03:15:27'),
(462, NULL, 'wilkerluks@gmail.com', 'Active', '2025-03-18 09:13:22', '2025-03-18 09:13:22'),
(463, NULL, 'wilkerluks@gmail.com', 'Active', '2025-03-18 09:13:30', '2025-03-18 09:13:30'),
(464, NULL, 'wilkerluks@gmail.com', 'Active', '2025-03-18 09:13:42', '2025-03-18 09:13:42'),
(465, NULL, 'wilkerluks@gmail.com', 'Active', '2025-03-18 09:13:49', '2025-03-18 09:13:49'),
(466, NULL, 'vendidudleyaq30@gmail.com', 'Active', '2025-03-19 19:08:25', '2025-03-19 19:08:25'),
(467, NULL, 'vendidudleyaq30@gmail.com', 'Active', '2025-03-19 19:08:45', '2025-03-19 19:08:45'),
(468, NULL, 'denmaddenb51@gmail.com', 'Active', '2025-03-21 03:32:52', '2025-03-21 03:32:52'),
(469, NULL, 'denmaddenb51@gmail.com', 'Active', '2025-03-21 03:32:59', '2025-03-21 03:32:59'),
(470, NULL, 'denmaddenb51@gmail.com', 'Active', '2025-03-21 03:33:11', '2025-03-21 03:33:11'),
(471, NULL, 'denmaddenb51@gmail.com', 'Active', '2025-03-21 03:33:24', '2025-03-21 03:33:24'),
(472, NULL, 'lonnians6@gmail.com', 'Active', '2025-03-21 19:42:20', '2025-03-21 19:42:20'),
(473, NULL, 'lonnians6@gmail.com', 'Active', '2025-03-21 19:42:28', '2025-03-21 19:42:28'),
(474, NULL, 'lonnians6@gmail.com', 'Active', '2025-03-21 19:42:40', '2025-03-21 19:42:40'),
(475, NULL, 'karlayalambert@gmail.com', 'Active', '2025-03-22 09:02:34', '2025-03-22 09:02:34'),
(476, NULL, 'karlayalambert@gmail.com', 'Active', '2025-03-22 09:02:41', '2025-03-22 09:02:41'),
(477, NULL, 'karlayalambert@gmail.com', 'Active', '2025-03-22 09:02:56', '2025-03-22 09:02:56'),
(478, NULL, 'karlayalambert@gmail.com', 'Active', '2025-03-22 09:03:02', '2025-03-22 09:03:02'),
(479, NULL, 'palmer.jonathan62254@yahoo.com', 'Active', '2025-03-23 00:34:47', '2025-03-23 00:34:47'),
(480, NULL, 'palmer.jonathan62254@yahoo.com', 'Active', '2025-03-23 00:35:07', '2025-03-23 00:35:07'),
(481, NULL, 'palmer.jonathan62254@yahoo.com', 'Active', '2025-03-23 00:35:23', '2025-03-23 00:35:23'),
(482, NULL, 'palmer.jonathan62254@yahoo.com', 'Active', '2025-03-23 00:35:31', '2025-03-23 00:35:31'),
(483, NULL, 'trishyemelendezey2000@gmail.com', 'Active', '2025-03-23 18:27:41', '2025-03-23 18:27:41'),
(484, NULL, 'trishyemelendezey2000@gmail.com', 'Active', '2025-03-23 18:28:01', '2025-03-23 18:28:01'),
(485, NULL, 'trishyemelendezey2000@gmail.com', 'Active', '2025-03-23 18:28:25', '2025-03-23 18:28:25'),
(486, NULL, 'trishyemelendezey2000@gmail.com', 'Active', '2025-03-23 18:28:36', '2025-03-23 18:28:36'),
(487, NULL, 'malloy_jeff24660@yahoo.com', 'Active', '2025-03-24 09:46:46', '2025-03-24 09:46:46'),
(488, NULL, 'malloy_jeff24660@yahoo.com', 'Active', '2025-03-24 09:47:00', '2025-03-24 09:47:00'),
(489, NULL, 'malloy_jeff24660@yahoo.com', 'Active', '2025-03-24 09:47:29', '2025-03-24 09:47:29'),
(490, NULL, 'malloy_jeff24660@yahoo.com', 'Active', '2025-03-24 09:47:35', '2025-03-24 09:47:35'),
(491, NULL, 'djorjetcrosska3@gmail.com', 'Active', '2025-03-27 03:18:44', '2025-03-27 03:18:44'),
(492, NULL, 'djorjetcrosska3@gmail.com', 'Active', '2025-03-27 03:18:52', '2025-03-27 03:18:52'),
(493, NULL, 'djorjetcrosska3@gmail.com', 'Active', '2025-03-27 03:19:12', '2025-03-27 03:19:12'),
(494, NULL, 'tsavagecr2@gmail.com', 'Active', '2025-03-27 07:07:38', '2025-03-27 07:07:38'),
(495, NULL, 'tsavagecr2@gmail.com', 'Active', '2025-03-27 07:07:44', '2025-03-27 07:07:44'),
(496, NULL, 'tsavagecr2@gmail.com', 'Active', '2025-03-27 07:07:53', '2025-03-27 07:07:53'),
(497, NULL, 'tsavagecr2@gmail.com', 'Active', '2025-03-27 07:07:57', '2025-03-27 07:07:57'),
(498, NULL, 'dfoxwj5@gmail.com', 'Active', '2025-03-29 20:12:55', '2025-03-29 20:12:55'),
(499, NULL, 'dfoxwj5@gmail.com', 'Active', '2025-03-29 20:13:15', '2025-03-29 20:13:15'),
(500, NULL, 'dfoxwj5@gmail.com', 'Active', '2025-03-29 20:13:37', '2025-03-29 20:13:37'),
(501, NULL, 'dfoxwj5@gmail.com', 'Active', '2025-03-29 20:13:49', '2025-03-29 20:13:49'),
(502, NULL, 'yorkkonanwi75@gmail.com', 'Active', '2025-04-01 07:53:46', '2025-04-01 07:53:46'),
(503, NULL, 'yorkkonanwi75@gmail.com', 'Active', '2025-04-01 07:53:51', '2025-04-01 07:53:51'),
(504, NULL, 'yorkkonanwi75@gmail.com', 'Active', '2025-04-01 07:53:56', '2025-04-01 07:53:56'),
(505, NULL, 'yorkkonanwi75@gmail.com', 'Active', '2025-04-01 07:54:01', '2025-04-01 07:54:01'),
(506, NULL, 'kelvinbcz84@gmail.com', 'Active', '2025-04-02 10:22:53', '2025-04-02 10:22:53'),
(507, NULL, 'kelvinbcz84@gmail.com', 'Active', '2025-04-02 10:23:00', '2025-04-02 10:23:00'),
(508, NULL, 'kelvinbcz84@gmail.com', 'Active', '2025-04-02 10:23:17', '2025-04-02 10:23:17'),
(509, NULL, 'kelvinbcz84@gmail.com', 'Active', '2025-04-02 10:23:30', '2025-04-02 10:23:30'),
(510, NULL, 'vydroyhxu1991@gmail.com', 'Active', '2025-04-02 17:03:25', '2025-04-02 17:03:25'),
(511, NULL, 'vydroyhxu1991@gmail.com', 'Active', '2025-04-02 17:03:29', '2025-04-02 17:03:29'),
(512, NULL, 'vydroyhxu1991@gmail.com', 'Active', '2025-04-02 17:03:48', '2025-04-02 17:03:48'),
(513, NULL, 'vydroyhxu1991@gmail.com', 'Active', '2025-04-02 17:03:53', '2025-04-02 17:03:53'),
(514, NULL, 'jenny.burns604372@yahoo.com', 'Active', '2025-04-03 00:01:42', '2025-04-03 00:01:42'),
(515, NULL, 'jenny.burns604372@yahoo.com', 'Active', '2025-04-03 00:02:01', '2025-04-03 00:02:01'),
(516, NULL, 'levineyrsyla@gmail.com', 'Active', '2025-04-03 01:40:41', '2025-04-03 01:40:41'),
(517, NULL, 'levineyrsyla@gmail.com', 'Active', '2025-04-03 01:40:46', '2025-04-03 01:40:46'),
(518, NULL, 'terloay23@gmail.com', 'Active', '2025-04-03 11:30:37', '2025-04-03 11:30:37'),
(519, NULL, 'terloay23@gmail.com', 'Active', '2025-04-03 11:30:46', '2025-04-03 11:30:46'),
(520, NULL, 'terloay23@gmail.com', 'Active', '2025-04-03 11:31:16', '2025-04-03 11:31:16'),
(521, NULL, 'terloay23@gmail.com', 'Active', '2025-04-03 11:31:23', '2025-04-03 11:31:23'),
(522, NULL, 'hortbardr96@gmail.com', 'Active', '2025-04-05 05:11:19', '2025-04-05 05:11:19'),
(523, NULL, 'hortbardr96@gmail.com', 'Active', '2025-04-05 05:11:44', '2025-04-05 05:11:44'),
(524, NULL, 'hortbardr96@gmail.com', 'Active', '2025-04-05 05:11:53', '2025-04-05 05:11:53');
INSERT INTO `newsletters` (`id`, `name`, `email`, `status`, `created_at`, `updated_at`) VALUES
(525, NULL, 'greisondeanap@gmail.com', 'Active', '2025-04-06 05:16:34', '2025-04-06 05:16:34'),
(526, NULL, 'greisondeanap@gmail.com', 'Active', '2025-04-06 05:16:53', '2025-04-06 05:16:53'),
(527, NULL, 'greisondeanap@gmail.com', 'Active', '2025-04-06 05:17:19', '2025-04-06 05:17:19'),
(528, NULL, 'greisondeanap@gmail.com', 'Active', '2025-04-06 05:17:39', '2025-04-06 05:17:39'),
(529, NULL, 'gisleinai@gmail.com', 'Active', '2025-04-07 00:16:54', '2025-04-07 00:16:54'),
(530, NULL, 'gisleinai@gmail.com', 'Active', '2025-04-07 00:17:10', '2025-04-07 00:17:10'),
(531, NULL, 'marquezrichvg@gmail.com', 'Active', '2025-04-07 01:48:26', '2025-04-07 01:48:26'),
(532, NULL, 'marquezrichvg@gmail.com', 'Active', '2025-04-07 01:48:48', '2025-04-07 01:48:48'),
(533, NULL, 'marquezrichvg@gmail.com', 'Active', '2025-04-07 01:49:00', '2025-04-07 01:49:00'),
(534, NULL, 'eponabx1985@gmail.com', 'Active', '2025-04-07 16:07:08', '2025-04-07 16:07:08'),
(535, NULL, 'eponabx1985@gmail.com', 'Active', '2025-04-07 16:07:23', '2025-04-07 16:07:23'),
(536, NULL, 'eponabx1985@gmail.com', 'Active', '2025-04-07 16:07:34', '2025-04-07 16:07:34'),
(537, NULL, 'breanna_davis940478@yahoo.com', 'Active', '2025-04-08 05:06:58', '2025-04-08 05:06:58'),
(538, NULL, 'breanna_davis940478@yahoo.com', 'Active', '2025-04-08 05:07:06', '2025-04-08 05:07:06'),
(539, NULL, 'breanna_davis940478@yahoo.com', 'Active', '2025-04-08 05:07:27', '2025-04-08 05:07:27'),
(540, NULL, 'breanna_davis940478@yahoo.com', 'Active', '2025-04-08 05:07:46', '2025-04-08 05:07:46'),
(541, NULL, 'lovenia_andrus594417@yahoo.com', 'Active', '2025-04-08 15:01:18', '2025-04-08 15:01:18'),
(542, NULL, 'lovenia_andrus594417@yahoo.com', 'Active', '2025-04-08 15:01:26', '2025-04-08 15:01:26'),
(543, NULL, 'lovenia_andrus594417@yahoo.com', 'Active', '2025-04-08 15:01:58', '2025-04-08 15:01:58'),
(544, NULL, 'lovenia_andrus594417@yahoo.com', 'Active', '2025-04-08 15:02:06', '2025-04-08 15:02:06'),
(545, NULL, 'sherlibarronb@gmail.com', 'Active', '2025-04-09 13:42:01', '2025-04-09 13:42:01'),
(546, NULL, 'sherlibarronb@gmail.com', 'Active', '2025-04-09 13:42:31', '2025-04-09 13:42:31'),
(547, NULL, 'sherlibarronb@gmail.com', 'Active', '2025-04-09 13:42:44', '2025-04-09 13:42:44'),
(549, NULL, 'emjohy55@gmail.com', 'Active', '2025-04-11 19:00:39', '2025-04-11 19:00:39'),
(550, NULL, 'emjohy55@gmail.com', 'Active', '2025-04-11 19:00:49', '2025-04-11 19:00:49'),
(551, NULL, 'emjohy55@gmail.com', 'Active', '2025-04-11 19:01:02', '2025-04-11 19:01:02'),
(553, NULL, 'sendishx2@gmail.com', 'Active', '2025-04-12 10:30:59', '2025-04-12 10:30:59'),
(554, NULL, 'baptigomeqh1984@gmail.com', 'Active', '2025-04-13 05:35:11', '2025-04-13 05:35:11'),
(555, NULL, 'baptigomeqh1984@gmail.com', 'Active', '2025-04-13 05:35:23', '2025-04-13 05:35:23'),
(556, NULL, 'baptigomeqh1984@gmail.com', 'Active', '2025-04-13 05:35:32', '2025-04-13 05:35:32'),
(557, NULL, 'menlaci1993@gmail.com', 'Active', '2025-04-14 10:57:20', '2025-04-14 10:57:20'),
(558, NULL, 'menlaci1993@gmail.com', 'Active', '2025-04-14 10:57:25', '2025-04-14 10:57:25'),
(559, NULL, 'menlaci1993@gmail.com', 'Active', '2025-04-14 10:57:32', '2025-04-14 10:57:32'),
(560, NULL, 'menlaci1993@gmail.com', 'Active', '2025-04-14 10:57:39', '2025-04-14 10:57:39'),
(561, NULL, 'karonbuc@gmail.com', 'Active', '2025-04-15 05:51:22', '2025-04-15 05:51:22'),
(562, NULL, 'karonbuc@gmail.com', 'Active', '2025-04-15 05:51:30', '2025-04-15 05:51:30'),
(563, NULL, 'karonbuc@gmail.com', 'Active', '2025-04-15 05:52:03', '2025-04-15 05:52:03'),
(564, NULL, 'meidlinchambers42@gmail.com', 'Active', '2025-04-15 07:59:30', '2025-04-15 07:59:30'),
(565, NULL, 'meidlinchambers42@gmail.com', 'Active', '2025-04-15 07:59:39', '2025-04-15 07:59:39'),
(566, NULL, 'meidlinchambers42@gmail.com', 'Active', '2025-04-15 07:59:54', '2025-04-15 07:59:54'),
(567, NULL, 'meidlinchambers42@gmail.com', 'Active', '2025-04-15 08:00:14', '2025-04-15 08:00:14');

-- --------------------------------------------------------

--
-- Table structure for table `orderhistries`
--

CREATE TABLE `orderhistries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currency` varchar(255) NOT NULL,
  `invoice_no` varchar(255) NOT NULL,
  `callan_no` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `subtotal` varchar(255) NOT NULL DEFAULT '0',
  `discount` varchar(255) NOT NULL DEFAULT '0',
  `vat` varchar(255) NOT NULL DEFAULT '0',
  `delivary_charge` varchar(255) NOT NULL DEFAULT '0',
  `total` varchar(255) NOT NULL,
  `shipping_address` text NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `cupon_id` varchar(255) DEFAULT NULL,
  `cupon_amount` varchar(255) NOT NULL DEFAULT '0',
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `currency`, `invoice_no`, `callan_no`, `customer_id`, `subtotal`, `discount`, `vat`, `delivary_charge`, `total`, `shipping_address`, `payment_type`, `payment_status`, `cupon_id`, `cupon_amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 'BDT', 'IN1748735176', 'CL1748735176', '81', '400', '0', '0', '0', '400', '{\"customer_id\":81,\"name\":\"rtgyhfg\",\"phone\":\"01720085127\",\"city_id\":\"33\",\"area_id\":\"256\",\"city\":\"Barisal\",\"area\":\"Mehendiganj\",\"address\":\"andharmanik\"}', 'Bkash', 'Pending', 'cupon_id', 'cupon_amount', 'Completed', '2025-05-31 17:46:16', '2025-06-01 04:38:13'),
(2, 'BDT', 'IN1748735253', 'CL1748735253', '81', '0', '0', '0', '0', '0', '{\"customer_id\":81,\"name\":\"rtgyhfg\",\"phone\":\"01720085127\",\"city_id\":\"33\",\"area_id\":\"256\",\"city\":\"Barisal\",\"area\":\"Mehendiganj\",\"address\":\"andharmanik\"}', 'COD', 'Pending', 'cupon_id', 'cupon_amount', 'Processing', '2025-05-31 17:47:33', '2025-05-31 18:49:20'),
(3, 'BDT', 'IN1748739038', 'CL1748739038', '82', '400', '0', '0', '0', '400', '{\"customer_id\":82,\"name\":\"fedous\",\"phone\":\"01849378211\",\"city_id\":\"24\",\"area_id\":\"192\",\"city\":\"Chuadanga\",\"area\":\"Chuadanga Sadar\",\"address\":\"test\"}', 'COD', 'Pending', 'cupon_id', 'cupon_amount', 'Completed', '2025-05-31 18:50:38', '2025-05-31 18:54:27'),
(4, 'BDT', 'IN1748744697', 'CL1748744697', '83', '1550', '0', '0', '0', '1550', '{\"customer_id\":83,\"name\":\"Hasan\",\"phone\":\"01832191722\",\"city_id\":\"33\",\"area_id\":\"256\",\"city\":\"Barisal\",\"area\":\"Mehendiganj\",\"address\":\"Kauriya\"}', 'COD', 'Pending', 'cupon_id', 'cupon_amount', 'Completed', '2025-05-31 20:24:57', '2025-06-03 10:18:19'),
(5, 'BDT', 'IN1748745672', 'CL1748745672', '83', '300', '0', '0', '0', '300', '{\"customer_id\":83,\"name\":\"Hasan\",\"phone\":\"01720085127\",\"city_id\":\"6\",\"area_id\":\"58\",\"city\":\"Chandpur\",\"area\":\"Matlab North\",\"address\":\"Fusbjaa8b\"}', 'COD', 'Pending', 'cupon_id', 'cupon_amount', 'Completed', '2025-05-31 20:41:12', '2025-06-03 10:18:39'),
(6, 'BDT', 'IN1748751907', 'CL1748751907', '83', '99', '0', '0', '0', '99', '{\"customer_id\":83,\"name\":\"Joynal\",\"phone\":\"138978768\",\"city_id\":\"14\",\"area_id\":\"130\",\"city\":\"Bogura\",\"area\":\"Dhunot\",\"address\":\"Suievdudd\"}', 'COD', 'Pending', 'cupon_id', 'cupon_amount', 'Completed', '2025-05-31 22:25:07', '2025-06-03 10:19:05'),
(7, 'BDT', 'IN1748774575', 'CL1748774575', '83', '400', '0', '0', '0', '400', '{\"customer_id\":83,\"name\":\"Joynal\",\"phone\":\"01720085127\",\"city_id\":\"18\",\"area_id\":\"158\",\"city\":\"Chapainawabganj\",\"area\":\"Bholahat\",\"address\":\"Gghhvj\"}', 'COD', 'Pending', 'cupon_id', 'cupon_amount', 'Processing', '2025-06-01 04:42:55', '2025-06-01 04:45:51'),
(8, 'BDT', 'IN1748797543', 'CL1748797543', '81', '680', '0', '0', '0', '680', '{\"customer_id\":81,\"name\":\"Kalam\",\"phone\":\"01720085127\",\"city_id\":\"33\",\"area_id\":\"256\",\"city\":\"Barisal\",\"area\":\"Mehendiganj\",\"address\":\"Alam the\"}', 'COD', 'Pending', 'cupon_id', 'cupon_amount', 'Pending', '2025-06-01 11:05:43', '2025-06-01 11:05:43'),
(9, 'BDT', 'IN1748797636', 'CL1748797636', '81', '300', '0', '0', '0', '300', '{\"customer_id\":81,\"name\":\"Nayen\",\"phone\":\"01720085127\",\"city_id\":\"6\",\"area_id\":\"58\",\"city\":\"Chandpur\",\"area\":\"Matlab North\",\"address\":\"Gfkugbji\"}', 'COD', 'Pending', 'cupon_id', 'cupon_amount', 'Pending', '2025-06-01 11:07:16', '2025-06-01 11:07:16'),
(10, 'BDT', 'IN1748798590', 'CL1748798590', '80', '300', '0', '0', '0', '300', '{\"customer_id\":80,\"name\":\"moha\",\"phone\":\"01849378511\",\"city_id\":\"47\",\"area_id\":\"502\",\"city\":\"Dhaka\",\"area\":\"Khilgaon\",\"address\":\"addd\"}', 'COD', 'Pending', 'cupon_id', 'cupon_amount', 'Pending', '2025-06-01 11:23:10', '2025-06-01 11:23:10'),
(11, 'BDT', 'IN1748798603', 'CL1748798603', '84', '300', '0', '0', '0', '300', '{\"customer_id\":84,\"name\":\"Laboni\",\"phone\":\"01304304346\",\"city_id\":\"33\",\"area_id\":\"253\",\"city\":\"Barisal\",\"area\":\"Banaripara\",\"address\":\"Anam Editor\"}', 'COD', 'Pending', 'cupon_id', 'cupon_amount', 'Processing', '2025-06-01 11:23:23', '2025-06-03 10:19:19'),
(12, 'BDT', 'IN1748829560', 'CL1748829560', '84', '400', '0', '0', '0', '400', '{\"customer_id\":84,\"name\":\"Jgjnf\",\"phone\":\"01304304346\",\"city_id\":\"34\",\"area_id\":\"261\",\"city\":\"Bhola\",\"area\":\"Charfesson\",\"address\":\"Hfhffhf\"}', 'COD', 'Pending', 'cupon_id', 'cupon_amount', 'Completed', '2025-06-01 19:59:20', '2025-06-01 23:07:02'),
(13, 'BDT', 'IN1748842700', 'CL1748842700', '81', '800', '0', '0', '0', '800', '{\"customer_id\":81,\"name\":\"Rana\",\"phone\":\"01720085127\",\"city_id\":\"33\",\"area_id\":\"254\",\"city\":\"Barisal\",\"area\":\"Gournadi\",\"address\":\"Hdigba\"}', 'COD', 'Pending', 'cupon_id', 'cupon_amount', 'Pending', '2025-06-01 23:38:20', '2025-06-01 23:38:20'),
(14, 'BDT', 'IN1748970648', 'CL1748970648', '80', '300', '0', '0', '130', '430', '{\"customer_id\":80,\"name\":\"Abdullah (test )\",\"phone\":\"01849378511\",\"city_id\":\"5\",\"area_id\":\"45\",\"city\":\"Noakhali\",\"area\":\"Begumganj\",\"address\":\"maindee\"}', 'COD', 'Pending', 'cupon_id', 'cupon_amount', 'Pending', '2025-06-03 11:10:48', '2025-06-03 11:10:48');

-- --------------------------------------------------------

--
-- Table structure for table `order_addresses`
--

CREATE TABLE `order_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `division_id` int(11) DEFAULT NULL,
  `city_id` int(11) NOT NULL,
  `area_id` int(11) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `address` text NOT NULL,
  `primary` varchar(255) NOT NULL DEFAULT 'No',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_addresses`
--

INSERT INTO `order_addresses` (`id`, `order_id`, `customer_id`, `name`, `phone`, `division_id`, `city_id`, `area_id`, `city`, `area`, `address`, `primary`, `created_at`, `updated_at`) VALUES
(1, 1, 81, 'rtgyhfg', '01720085127', NULL, 33, 256, 'Barisal', 'Mehendiganj', 'andharmanik', 'No', '2025-05-31 17:46:16', '2025-05-31 17:46:16'),
(2, 2, 81, 'rtgyhfg', '01720085127', NULL, 33, 256, 'Barisal', 'Mehendiganj', 'andharmanik', 'No', '2025-05-31 17:47:33', '2025-05-31 17:47:33'),
(3, 3, 82, 'fedous', '01849378211', NULL, 24, 192, 'Chuadanga', 'Chuadanga Sadar', 'test', 'No', '2025-05-31 18:50:38', '2025-05-31 18:50:38'),
(4, 4, 83, 'Hasan', '01832191722', NULL, 33, 256, 'Barisal', 'Mehendiganj', 'Kauriya', 'No', '2025-05-31 20:24:57', '2025-05-31 20:24:57'),
(5, 5, 83, 'Hasan', '01720085127', NULL, 6, 58, 'Chandpur', 'Matlab North', 'Fusbjaa8b', 'No', '2025-05-31 20:41:12', '2025-05-31 20:41:12'),
(6, 6, 83, 'Joynal', '138978768', NULL, 14, 130, 'Bogura', 'Dhunot', 'Suievdudd', 'No', '2025-05-31 22:25:07', '2025-05-31 22:25:07'),
(7, 7, 83, 'Joynal', '01720085127', NULL, 18, 158, 'Chapainawabganj', 'Bholahat', 'Gghhvj', 'No', '2025-06-01 04:42:55', '2025-06-01 04:42:55'),
(8, 8, 81, 'Kalam', '01720085127', NULL, 33, 256, 'Barisal', 'Mehendiganj', 'Alam the', 'No', '2025-06-01 11:05:43', '2025-06-01 11:05:43'),
(9, 9, 81, 'Nayen', '01720085127', NULL, 6, 58, 'Chandpur', 'Matlab North', 'Gfkugbji', 'No', '2025-06-01 11:07:16', '2025-06-01 11:07:16'),
(10, 10, 80, 'moha', '01849378511', NULL, 47, 502, 'Dhaka', 'Khilgaon', 'addd', 'No', '2025-06-01 11:23:10', '2025-06-01 11:23:10'),
(11, 11, 84, 'Laboni', '01304304346', NULL, 33, 253, 'Barisal', 'Banaripara', 'Anam Editor', 'No', '2025-06-01 11:23:23', '2025-06-01 11:23:23'),
(12, 12, 84, 'Jgjnf', '01304304346', NULL, 34, 261, 'Bhola', 'Charfesson', 'Hfhffhf', 'No', '2025-06-01 19:59:20', '2025-06-01 19:59:20'),
(13, 13, 81, 'Rana', '01720085127', NULL, 33, 254, 'Barisal', 'Gournadi', 'Hdigba', 'No', '2025-06-01 23:38:20', '2025-06-01 23:38:20'),
(14, 14, 80, 'Abdullah (test )', '01849378511', NULL, 5, 45, 'Noakhali', 'Begumganj', 'maindee', 'No', '2025-06-03 11:10:48', '2025-06-03 11:10:48');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `sized` varchar(255) DEFAULT NULL,
  `colored` varchar(255) DEFAULT NULL,
  `blade` varchar(255) DEFAULT NULL,
  `qty` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `name`, `sized`, `colored`, `blade`, `qty`, `price`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '3-in-1 Mini Portable Air Cooler Fan with Humidifier & 7-Color LED Light', NULL, NULL, NULL, '1', '400', '400', '2025-05-31 17:46:16', '2025-05-31 17:46:16'),
(2, 3, 1, '3-in-1 Mini Portable Air Cooler Fan with Humidifier & 7-Color LED Light', NULL, NULL, NULL, '1', '400', '400', '2025-05-31 18:50:38', '2025-05-31 18:50:38'),
(3, 4, 3, '3 in 1 Double Head Led Light Water Spray Portable Ice Mist Cooling Fan', NULL, NULL, NULL, '1', '1550', '1550', '2025-05-31 20:24:57', '2025-05-31 20:24:57'),
(4, 5, 4, 'Mini Cute Handheld Fan', NULL, NULL, NULL, '1', '300', '300', '2025-05-31 20:41:12', '2025-05-31 20:41:12'),
(5, 6, 12, 'Egg Holder Organizer for Refrigerator', NULL, NULL, NULL, '1', '99', '99', '2025-05-31 22:25:07', '2025-05-31 22:25:07'),
(6, 7, 22, 'Baby Carry Bag', NULL, NULL, NULL, '1', '400', '400', '2025-06-01 04:42:55', '2025-06-01 04:42:55'),
(7, 8, 33, 'Vaccuum Flask Set Drinking Water Bottle', NULL, NULL, NULL, '1', '680', '680', '2025-06-01 11:05:43', '2025-06-01 11:05:43'),
(8, 9, 4, 'Mini Cute Handheld Fan', NULL, NULL, NULL, '1', '300', '300', '2025-06-01 11:07:16', '2025-06-01 11:07:16'),
(9, 10, 4, 'Mini Cute Handheld Fan', NULL, NULL, NULL, '1', '300', '300', '2025-06-01 11:23:10', '2025-06-01 11:23:10'),
(10, 11, 7, 'Mini Hand Fan (Long)', NULL, NULL, NULL, '1', '300', '300', '2025-06-01 11:23:23', '2025-06-01 11:23:23'),
(11, 12, 22, 'Baby Carry Bag', NULL, NULL, NULL, '1', '400', '400', '2025-06-01 19:59:20', '2025-06-01 19:59:20'),
(12, 13, 29, 'Original Men Anti-Theft Waterproof Crossbody Bag', NULL, NULL, NULL, '1', '800', '800', '2025-06-01 23:38:20', '2025-06-01 23:38:20'),
(13, 14, 4, 'Mini Cute Handheld Fan', NULL, NULL, NULL, '1', '300', '300', '2025-06-03 11:10:48', '2025-06-03 11:10:48');

-- --------------------------------------------------------

--
-- Table structure for table `order_payments`
--

CREATE TABLE `order_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `amount` varchar(255) NOT NULL,
  `full_info` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_payments`
--

INSERT INTO `order_payments` (`id`, `order_id`, `payment_id`, `transaction_id`, `amount`, `full_info`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, '400', NULL, '2025-05-31 17:46:16', '2025-05-31 17:46:16'),
(2, 2, 1, 'COD', '0', 'cash_on_delivery', '2025-05-31 17:47:33', '2025-05-31 17:47:33'),
(3, 3, 1, 'COD', '400', 'cash_on_delivery', '2025-05-31 18:50:38', '2025-05-31 18:50:38'),
(4, 4, 1, 'COD', '1550', 'cash_on_delivery', '2025-05-31 20:24:57', '2025-05-31 20:24:57'),
(5, 5, 1, 'COD', '300', 'cash_on_delivery', '2025-05-31 20:41:12', '2025-05-31 20:41:12'),
(6, 6, 1, 'COD', '99', 'cash_on_delivery', '2025-05-31 22:25:07', '2025-05-31 22:25:07'),
(7, 7, 1, 'COD', '400', 'cash_on_delivery', '2025-06-01 04:42:55', '2025-06-01 04:42:55'),
(8, 8, 1, 'COD', '680', 'cash_on_delivery', '2025-06-01 11:05:43', '2025-06-01 11:05:43'),
(9, 9, 1, 'COD', '300', 'cash_on_delivery', '2025-06-01 11:07:16', '2025-06-01 11:07:16'),
(10, 10, 1, 'COD', '300', 'cash_on_delivery', '2025-06-01 11:23:10', '2025-06-01 11:23:10'),
(11, 11, 1, 'COD', '300', 'cash_on_delivery', '2025-06-01 11:23:23', '2025-06-01 11:23:23'),
(12, 12, 1, 'COD', '400', 'cash_on_delivery', '2025-06-01 19:59:20', '2025-06-01 19:59:20'),
(13, 13, 1, 'COD', '800', 'cash_on_delivery', '2025-06-01 23:38:20', '2025-06-01 23:38:20'),
(14, 14, 1, 'COD', '430', 'cash_on_delivery', '2025-06-03 11:10:48', '2025-06-03 11:10:48');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `smm_title` text DEFAULT NULL,
  `smm_content` text DEFAULT NULL,
  `smm_images` text DEFAULT NULL,
  `meta_title` longtext DEFAULT NULL,
  `meta_keyword` longtext DEFAULT NULL,
  `meta_description` longtext DEFAULT NULL,
  `schema` longtext DEFAULT NULL,
  `follow` varchar(255) NOT NULL DEFAULT 'Yes',
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `background` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `thumb`, `images`, `content`, `smm_title`, `smm_content`, `smm_images`, `meta_title`, `meta_keyword`, `meta_description`, `schema`, `follow`, `status`, `created_at`, `updated_at`, `background`) VALUES
(1, 'Refund &  Return Policy', 'refund-return-policy', NULL, NULL, '<h3 style=\"margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; font-family: Oswald, sans-serif; font-weight: 700; line-height: 1.25em; color: rgb(45, 45, 45); font-size: 20px; padding: 0px; letter-spacing: 0.24px;\"><span style=\"font-weight: bolder;\">Return Policy</span></h3><ul data-mce-fragment=\"1\" style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 20px; padding: 0px; list-style: none; color: rgb(45, 45, 45); font-family: Arimo, sans-serif; font-size: 12px; letter-spacing: 0.24px;\"><li data-mce-fragment=\"1\" style=\"margin-bottom: 6px;\"><span data-mce-fragment=\"1\">Kindly check &amp; make sure however that you’ve got all the items mentioned on this invoice, if you’re missing any item, damaged, wrong or defective items, request immediately return the package to the delivery agent or sales person.</span></li><li data-mce-fragment=\"1\" style=\"margin-bottom: 6px;\"><span data-mce-fragment=\"1\">You can exchange size or model within&nbsp;<span style=\"font-weight: bolder;\">7-10 working Days</span>.&nbsp;We will not accept any exchange for used items.</span></li><li data-mce-fragment=\"1\" style=\"margin-bottom: 6px;\"><span data-mce-fragment=\"1\">After claiming Return jagopower.com will Exchange the products with&nbsp;<span style=\"font-weight: bolder;\">7-10 Working Days</span>.&nbsp;</span></li><li data-mce-fragment=\"1\" style=\"margin-bottom: 6px;\"><span data-mce-fragment=\"1\">If your item is faulty/harmed or mistaken/deficient at the hour of conveyance, if you don’t mind, please get in touch with us inside the pertinent return window. Your item might be qualified for discount or substitution relying upon the item class and condition.</span></li><li data-mce-fragment=\"1\" style=\"margin-bottom: 6px;\"><span data-mce-fragment=\"1\">Please note that a few items are not qualified for arrival if the item is “Never again required”</span></li><li data-mce-fragment=\"1\" style=\"margin-bottom: 6px;\"><span data-mce-fragment=\"1\">For gadget related issues after use or the lapse of the arrival window, we will allude you to the brand guarantee focus (if relevant).</span></li><li data-mce-fragment=\"1\" style=\"margin-bottom: 6px;\"><span data-mce-fragment=\"1\">Please note that you should keep and be able to provide proper documentations and proof about your return/refund claim (i.e. unboxing video, receiving invoice, etc.</span></li></ul><h3 data-mce-fragment=\"1\" style=\"margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; font-family: Oswald, sans-serif; font-weight: 700; line-height: 1.25em; color: rgb(45, 45, 45); font-size: 20px; padding: 0px; letter-spacing: 0.24px;\"><span data-mce-fragment=\"1\"></span></h3><h3 data-mce-fragment=\"1\" style=\"margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; font-family: Oswald, sans-serif; font-weight: 700; line-height: 1.25em; color: rgb(45, 45, 45); font-size: 20px; padding: 0px; letter-spacing: 0.24px;\"><span style=\"font-weight: bolder;\"></span></h3><h3 data-mce-fragment=\"1\" style=\"margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; font-family: Oswald, sans-serif; font-weight: 700; line-height: 1.25em; color: rgb(45, 45, 45); font-size: 20px; padding: 0px; letter-spacing: 0.24px;\"><span style=\"font-weight: bolder;\">Refund&nbsp;</span><span style=\"font-weight: bolder;\">Policy</span></h3><p data-mce-fragment=\"1\" style=\"margin-bottom: 2rem; color: rgb(45, 45, 45); font-family: Arimo, sans-serif; font-size: 12px; letter-spacing: 0.24px;\"><span data-mce-fragment=\"1\">In case of any cancellations of any order(s) due to inevitable circumstances the paid amount would be refunded as the customers’&nbsp;</span><span data-mce-fragment=\"1\"><span style=\"letter-spacing: 0.24px;\">jagopower.com</span>&nbsp;account firstly. Customer need to report an issue as refund category and should mention his/her desired refund type (i.e. bkash/bank) along with details (bkash personal number, bank account details)</span></p><ul data-mce-fragment=\"1\" style=\"margin-right: 0px; margin-bottom: 25px; margin-left: 20px; padding: 0px; list-style: none; color: rgb(45, 45, 45); font-family: Arimo, sans-serif; font-size: 12px; letter-spacing: 0.24px;\"><li data-mce-fragment=\"1\" style=\"margin-bottom: 6px;\"><span data-mce-fragment=\"1\">If the order gets canceled, then the customer will get refunded with his/her principal amount and will be disqualified for any kind of offers or cashback associated with the particular order.</span></li><li data-mce-fragment=\"1\" style=\"margin-bottom: 6px;\"><span data-mce-fragment=\"1\">The refund process may take&nbsp;<span data-mce-fragment=\"1\" style=\"font-weight: bolder;\">7 to 10 working days</span>&nbsp;depending upon the payment service gateway provider’s clauses. The refund will be initiated within the same payment channel i.e. if the customer pays via bkash then the customer will be refunded through bkash. The customer cannot be refunded via any other payment channels. But&nbsp;<span data-mce-fragment=\"1\" style=\"font-weight: bolder;\"><span style=\"font-weight: 400; letter-spacing: 0.24px;\">jagopower.com</span>.</span></span><span data-mce-fragment=\"1\">&nbsp;retains the right and has the right to consider/reconsider refund via another flexible channel(s) to make the refund system faster or to make it easier for the customer.</span></li><li data-mce-fragment=\"1\" style=\"margin-bottom: 6px;\"><span data-mce-fragment=\"1\">After claiming Refund&nbsp;<span style=\"letter-spacing: 0.24px;\">jagopower.com</span>&nbsp;will&nbsp;Process the payment within&nbsp;<span style=\"font-weight: bolder;\">7-10 Working Days</span>.</span></li><li data-mce-fragment=\"1\" style=\"margin-bottom: 6px;\"><span data-mce-fragment=\"1\">The customer will not be eligible for any extra cashback/bonus against his principal amount in case of refunds.<span data-mce-fragment=\"1\" style=\"font-weight: bolder;\"><span style=\"font-weight: 400; letter-spacing: 0.24px;\">jagopower.com</span>&nbsp;Ltd.</span></span><span data-mce-fragment=\"1\">&nbsp;is not bound to pay any kind of service charge or cost for the refunded amount.</span></li></ul><h3 data-mce-fragment=\"1\" style=\"margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; font-family: Oswald, sans-serif; font-weight: 700; line-height: 1.25em; color: rgb(45, 45, 45); font-size: 20px; padding: 0px; letter-spacing: 0.24px;\"><span data-mce-fragment=\"1\"></span></h3><h3 data-mce-fragment=\"1\" style=\"margin-right: 0px; margin-bottom: 1.25em; margin-left: 0px; font-family: Oswald, sans-serif; font-weight: 700; line-height: 1.25em; color: rgb(45, 45, 45); font-size: 20px; padding: 0px; letter-spacing: 0.24px;\"><span data-mce-fragment=\"1\">Cancellation</span></h3><p data-mce-fragment=\"1\" style=\"margin-bottom: 2rem; color: rgb(45, 45, 45); font-family: Arimo, sans-serif; font-size: 12px; letter-spacing: 0.24px;\"><span data-mce-fragment=\"1\"><span style=\"letter-spacing: 0.24px;\">jagopower.com</span>&nbsp;retains unqualified right to cancel any order at its sole discretion prior to dispatch and for any reason which may include, but not limited to, the product being mispriced, out of stock, expired, defective, malfunctioned, and containing incorrect information or description arising out of technical or typographical error or for any other reason.</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', 'Active', '2023-08-26 05:39:13', '2024-04-18 07:24:26', NULL),
(2, 'TERMS OF SERVICES', 'terms-of-services', NULL, NULL, '<p style=\"margin-bottom: 2rem; color: rgb(45, 45, 45); font-family: Arimo, sans-serif; font-size: 12px; letter-spacing: 0.24px;\"><span style=\"font-weight: bolder;\">OVERVIEW</span><br>This website is operated by jagopower.com. Throughout the site, the terms “we”, “us” and “our” refer to <span style=\"letter-spacing: 0.24px;\">jagopower.com</span>. <span style=\"letter-spacing: 0.24px;\">jagopower.com</span> offers this website, including all information, tools and services available from this site to you, the user, conditioned upon your acceptance of all terms, conditions, policies and notices stated here.<br><br>By visiting our site and/ or purchasing something from us, you engage in our “Service” and agree to be bound by the following terms and conditions (“Terms of Service”, “Terms”), including those additional terms and conditions and policies referenced herein and/or available by hyperlink. These Terms of Service apply to all users of the site, including without limitation users who are browsers, vendors, customers, merchants, and/ or contributors of content.<br><br>Please read these Terms of Service carefully before accessing or using our website. By accessing or using any part of the site, you agree to be bound by these Terms of Service. If you do not agree to all the terms and conditions of this agreement, then you may not access the website or use any services. If these Terms of Service are considered an offer, acceptance is expressly limited to these Terms of Service.<br><br>Any new features or tools which are added to the current store shall also be subject to the Terms of Service. You can review the most current version of the Terms of Service at any time on this page. We reserve the right to update, change or replace any part of these Terms of Service by posting updates and/or changes to our website. It is your responsibility to check this page periodically for changes. Your continued use of or access to the website following the posting of any changes constitutes acceptance of those changes.<br><br>Our store is hosted on Shopify Inc. They provide us with the online e-commerce platform that allows us to sell our products and services to you.<br><br><span style=\"font-weight: bolder;\">SECTION 1 - ONLINE STORE TERMS</span></p><p style=\"margin-bottom: 2rem; color: rgb(45, 45, 45); font-family: Arimo, sans-serif; font-size: 12px; letter-spacing: 0.24px;\">By agreeing to these Terms of Service, you represent that you are at least the age of majority in your state or province of residence, or that you are the age of majority in your state or province of residence and you have given us your consent to allow any of your minor dependents to use this site.<br>You may not use our products for any illegal or unauthorized purpose nor may you, in the use of the Service, violate any laws in your jurisdiction (including but not limited to copyright laws).<br>You must not transmit any worms or viruses or any code of a destructive nature.<br>A breach or violation of any of the Terms will result in an immediate termination of your Services.<br><br><span style=\"font-weight: bolder;\">SECTION 2 - GENERAL CONDITIONS</span></p><p style=\"margin-bottom: 2rem; color: rgb(45, 45, 45); font-family: Arimo, sans-serif; font-size: 12px; letter-spacing: 0.24px;\">We reserve the right to refuse service to anyone for any reason at any time.<br>You understand that your content (not including credit card information), may be transferred unencrypted and involve (a) transmissions over various networks; and (b) changes to conform and adapt to technical requirements of connecting networks or devices. Credit card information is always encrypted during transfer over networks.<br>You agree not to reproduce, duplicate, copy, sell, resell or exploit any portion of the Service, use of the Service, or access to the Service or any contact on the website through which the service is provided, without express written permission by us.<br>The headings used in this agreement are included for convenience only and will not limit or otherwise affect these Terms.<br><br><span style=\"font-weight: bolder;\">SECTION 3 - ACCURACY, COMPLETENESS AND TIMELINESS OF INFORMATION</span></p><p style=\"margin-bottom: 2rem; color: rgb(45, 45, 45); font-family: Arimo, sans-serif; font-size: 12px; letter-spacing: 0.24px;\">We are not responsible if information made available on this site is not accurate, complete or current. The material on this site is provided for general information only and should not be relied upon or used as the sole basis for making decisions without consulting primary, more accurate, more complete or more timely sources of information. Any reliance on the material on this site is at your own risk.<br>This site may contain certain historical information. Historical information, necessarily, is not current and is provided for your reference only. We reserve the right to modify the contents of this site at any time, but we have no obligation to update any information on our site. You agree that it is your responsibility to monitor changes to our site.<br><br><span style=\"font-weight: bolder;\">SECTION 4 - MODIFICATIONS TO THE SERVICE AND PRICES</span></p><p style=\"margin-bottom: 2rem; color: rgb(45, 45, 45); font-family: Arimo, sans-serif; font-size: 12px; letter-spacing: 0.24px;\"><br>Prices for our products are subject to change without notice.<br>We reserve the right at any time to modify or discontinue the Service (or any part or content thereof) without notice at any time.<br>We shall not be liable to you or to any third-party for any modification, price change, suspension or discontinuance of the Service.<br><br><span style=\"font-weight: bolder;\">SECTION 5 - PRODUCTS OR SERVICES (if applicable)</span></p><p style=\"margin-bottom: 2rem; color: rgb(45, 45, 45); font-family: Arimo, sans-serif; font-size: 12px; letter-spacing: 0.24px;\">Certain products or services may be available exclusively online through the website. These products or services may have limited quantities and are subject to return or exchange only according to our Return Policy.<br>We have made every effort to display as accurately as possible the colors and images of our products that appear at the store. We cannot guarantee that your computer monitor\'s display of any color will be accurate.<br>We reserve the right, but are not obligated, to limit the sales of our products or Services to any person, geographic region or jurisdiction. We may exercise this right on a case-by-case basis. We reserve the right to limit the quantities of any products or services that we offer. All descriptions of products or product pricing are subject to change at any time without notice, at the sole discretion of us. We reserve the right to discontinue any product at any time. </p><p style=\"margin-bottom: 2rem; color: rgb(45, 45, 45); font-family: Arimo, sans-serif; font-size: 12px; letter-spacing: 0.24px;\"><span style=\"font-weight: bolder;\">SECTION 6 - ACCURACY OF BILLING AND ACCOUNT INFORMATION</span></p><p style=\"margin-bottom: 2rem; color: rgb(45, 45, 45); font-family: Arimo, sans-serif; font-size: 12px; letter-spacing: 0.24px;\">We reserve the right to refuse any order you place with us. We may, in our sole discretion, limit or cancel quantities purchased per person, per household or per order. These restrictions may include orders placed by or under the same customer account, the same credit card, and/or orders that use the same billing and/or shipping address. In the event that we make a change to or cancel an order, we may attempt to notify you by contacting the e-mail and/or billing address/phone number provided at the time the order was made. We reserve the right to limit or prohibit orders that, in our sole judgment, appear to be placed by dealers, resellers or distributors.<br><br>You agree to provide current, complete and accurate purchase and account information for all purchases made at our store. You agree to promptly update your account and other information, including your email address and credit card numbers and expiration dates, so that we can complete your transactions and contact you as needed.<br><br>For more detail, please review our Returns Policy.<br><br><span style=\"font-weight: bolder;\">SECTION 7 - OPTIONAL TOOLS</span></p><p style=\"margin-bottom: 2rem; color: rgb(45, 45, 45); font-family: Arimo, sans-serif; font-size: 12px; letter-spacing: 0.24px;\">We may provide you with access to third-party tools over which we neither monitor nor have any control nor input.<br>You acknowledge and agree that we provide access to such tools” as is” and “as available” without any warranties, representations or conditions of any kind and without any endorsement. We shall have no liability whatsoever arising from or relating to your use of optional third-party tools.<br>Any use by you of optional tools offered through the site is entirely at your own risk and discretion and you should ensure that you are familiar with and approve of the terms on which tools are provided by the relevant third-party provider(s).<br>We may also, in the future, offer new services and/or features through the website (including, the release of new tools and resources). Such new features and/or services shall also be subject to these Terms of Service.<br><br><span style=\"font-weight: bolder;\">SECTION 8 - THIRD-PARTY LINKS</span></p><p style=\"margin-bottom: 2rem; color: rgb(45, 45, 45); font-family: Arimo, sans-serif; font-size: 12px; letter-spacing: 0.24px;\">Certain content, products and services available via our Service may include materials from third-parties.<br>Third-party links on this site may direct you to third-party websites that are not affiliated with us. We are not responsible for examining or evaluating the content or accuracy and we do not warrant and will not have any liability or responsibility for any third-party materials or websites, or for any other materials, products, or services of third-parties.<br>We are not liable for any harm or damages related to the purchase or use of goods, services, resources, content, or any other transactions made in connection with any third-party websites. Please review carefully the third-party\'s policies and practices and make sure you understand them before you engage in any transaction. Complaints, claims, concerns, or questions regarding third-party products should be directed to the third-party.<br><br><span style=\"font-weight: bolder;\">SECTION 9 - USER COMMENTS, FEEDBACK AND OTHER SUBMISSIONS</span></p><p style=\"margin-bottom: 2rem; color: rgb(45, 45, 45); font-family: Arimo, sans-serif; font-size: 12px; letter-spacing: 0.24px;\">If, at our request, you send certain specific submissions (for example contest entries) or without a request from us you send creative ideas, suggestions, proposals, plans, or other materials, whether online, by email, by postal mail, or otherwise (collectively, \'comments\'), you agree that we may, at any time, without restriction, edit, copy, publish, distribute, translate and otherwise use in any medium any comments that you forward to us. We are and shall be under no obligation (1) to maintain any comments in confidence; (2) to pay compensation for any comments; or (3) to respond to any comments.<br>We may, but have no obligation to, monitor, edit or remove content that we determine in our sole discretion are unlawful, offensive, threatening, libelous, defamatory, pornographic, obscene or otherwise objectionable or violates any party’s intellectual property or these Terms of Service.<br>You agree that your comments will not violate any right of any third-party, including copyright, trademark, privacy, personality or other personal or proprietary right. You further agree that your comments will not contain libelous or otherwise unlawful, abusive or obscene material, or contain any computer virus or other malware that could in any way affect the operation of the Service or any related website. You may not use a false e-mail address, pretend to be someone other than yourself, or otherwise mislead us or third-parties as to the origin of any comments. You are solely responsible for any comments you make and their accuracy. We take no responsibility and assume no liability for any comments posted by you or any third-party.<br><br><span style=\"font-weight: bolder;\">SECTION 10 - PERSONAL INFORMATION</span></p><p style=\"margin-bottom: 2rem; color: rgb(45, 45, 45); font-family: Arimo, sans-serif; font-size: 12px; letter-spacing: 0.24px;\">Your submission of personal information through the store is governed by our Privacy Policy. To view our Privacy Policy.<br><br><span style=\"font-weight: bolder;\">SECTION 11 - ERRORS, INACCURACIES AND OMISSIONS</span></p><p style=\"margin-bottom: 2rem; color: rgb(45, 45, 45); font-family: Arimo, sans-serif; font-size: 12px; letter-spacing: 0.24px;\">Occasionally there may be information on our site or in the Service that contains typographical errors, inaccuracies or omissions that may relate to product descriptions, pricing, promotions, offers, product shipping charges, transit times and availability. We reserve the right to correct any errors, inaccuracies or omissions, and to change or update information or cancel orders if any information in the Service or on any related website is inaccurate at any time without prior notice (including after you have submitted your order).<br>We undertake no obligation to update, amend or clarify information in the Service or on any related website, including without limitation, pricing information, except as required by law. No specified update or refresh date applied in the Service or on any related website, should be taken to indicate that all information in the Service or on any related website has been modified or updated.<br><br><span style=\"font-weight: bolder;\">SECTION 12 - PROHIBITED USES</span></p><p style=\"margin-bottom: 2rem; color: rgb(45, 45, 45); font-family: Arimo, sans-serif; font-size: 12px; letter-spacing: 0.24px;\">In addition to other prohibitions as set forth in the Terms of Service, you are prohibited from using the site or its content: (a) for any unlawful purpose; (b) to solicit others to perform or participate in any unlawful acts; (c) to violate any international, federal, provincial or state regulations, rules, laws, or local ordinances; (d) to infringe upon or violate our intellectual property rights or the intellectual property rights of others; (e) to harass, abuse, insult, harm, defame, slander, disparage, intimidate, or discriminate based on gender, sexual orientation, religion, ethnicity, race, age, national origin, or disability; (f) to submit false or misleading information; (g) to upload or transmit viruses or any other type of malicious code that will or may be used in any way that will affect the functionality or operation of the Service or of any related website, other websites, or the Internet; (h) to collect or track the personal information of others; (i) to spam, phish, pharm, pretext, spider, crawl, or scrape; (j) for any obscene or immoral purpose; or (k) to interfere with or circumvent the security features of the Service or any related website, other websites, or the Internet. We reserve the right to terminate your use of the Service or any related website for violating any of the prohibited uses.<br><br><span style=\"font-weight: bolder;\">SECTION 13 - DISCLAIMER OF WARRANTIES; LIMITATION OF LIABILITY</span></p><p style=\"margin-bottom: 2rem; color: rgb(45, 45, 45); font-family: Arimo, sans-serif; font-size: 12px; letter-spacing: 0.24px;\">We do not guarantee, represent or warrant that your use of our service will be uninterrupted, timely, secure or error-free.<br>We do not warrant that the results that may be obtained from the use of the service will be accurate or reliable.<br>You agree that from time to time we may remove the service for indefinite periods of time or cancel the service at any time, without notice to you.<br>You expressly agree that your use of, or inability to use, the service is at your sole risk. The service and all products and services delivered to you through the service are (except as expressly stated by us) provided \'as is\' and \'as available\' for your use, without any representation, warranties or conditions of any kind, either express or implied, including all implied warranties or conditions of merchantability, merchantable quality, fitness for a particular purpose, durability, title, and non-infringement.<br>In no case shall <span style=\"letter-spacing: 0.24px;\">jagopower.com</span>, our directors, officers, employees, affiliates, agents, contractors, interns, suppliers, service providers or licensors be liable for any injury, loss, claim, or any direct, indirect, incidental, punitive, special, or consequential damages of any kind, including, without limitation lost profits, lost revenue, lost savings, loss of data, replacement costs, or any similar damages, whether based in contract, tort (including negligence), strict liability or otherwise, arising from your use of any of the service or any products procured using the service, or for any other claim related in any way to your use of the service or any product, including, but not limited to, any errors or omissions in any content, or any loss or damage of any kind incurred as a result of the use of the service or any content (or product) posted, transmitted, or otherwise made available via the service, even if advised of their possibility. Because some states or jurisdictions do not allow the exclusion or the limitation of liability for consequential or incidental damages, in such states or jurisdictions, our liability shall be limited to the maximum extent permitted by law.<br><br><span style=\"font-weight: bolder;\">SECTION 14 – INDEMNIFICATION</span></p><p style=\"margin-bottom: 2rem; color: rgb(45, 45, 45); font-family: Arimo, sans-serif; font-size: 12px; letter-spacing: 0.24px;\">You agree to indemnify, defend and hold harmless <span style=\"letter-spacing: 0.24px;\">jagopower.com</span> and our parent, subsidiaries, affiliates, partners, officers, directors, agents, contractors, licensors, service providers, subcontractors, suppliers, interns and employees, harmless from any claim or demand, including reasonable attorneys’ fees, made by any third-party due to or arising out of your breach of these Terms of Service or the documents they incorporate by reference, or your violation of any law or the rights of a third-party.<br><br><span style=\"font-weight: bolder;\">SECTION 15 – SEVERABILITY</span></p><p style=\"margin-bottom: 2rem; color: rgb(45, 45, 45); font-family: Arimo, sans-serif; font-size: 12px; letter-spacing: 0.24px;\">In the event that any provision of these Terms of Service is determined to be unlawful, void or unenforceable, such provision shall nonetheless be enforceable to the fullest extent permitted by applicable law, and the unenforceable portion shall be deemed to be severed from these Terms of Service, such determination shall not affect the validity and enforceability of any other remaining provisions.<br><br><span style=\"font-weight: bolder;\">SECTION 16 – TERMINATION</span></p><p style=\"margin-bottom: 2rem; color: rgb(45, 45, 45); font-family: Arimo, sans-serif; font-size: 12px; letter-spacing: 0.24px;\">The obligations and liabilities of the parties incurred prior to the termination date shall survive the termination of this agreement for all purposes.<br>These Terms of Service are effective unless and until terminated by either you or us. You may terminate these Terms of Service at any time by notifying us that you no longer wish to use our Services, or when you cease using our site.<br>If in our sole judgment you fail, or we suspect that you have failed, to comply with any term or provision of these Terms of Service, we also may terminate this agreement at any time without notice and you will remain liable for all amounts due up to and including the date of termination; and/or accordingly may deny you access to our Services (or any part thereof).<br><br><span style=\"font-weight: bolder;\">SECTION 17 - ENTIRE AGREEMENT</span></p><p style=\"margin-bottom: 2rem; color: rgb(45, 45, 45); font-family: Arimo, sans-serif; font-size: 12px; letter-spacing: 0.24px;\">The failure of us to exercise or enforce any right or provision of these Terms of Service shall not constitute a waiver of such right or provision.<br>These Terms of Service and any policies or operating rules posted by us on this site or in respect to The Service constitutes the entire agreement and understanding between you and us and govern your use of the Service, superseding any prior or contemporaneous agreements, communications and proposals, whether oral or written, between you and us (including, but not limited to, any prior versions of the Terms of Service).<br>Any ambiguities in the interpretation of these Terms of Service shall not be construed against the drafting party.<br><br><span style=\"font-weight: bolder;\">SECTION 18 - GOVERNING LAW</span></p><p style=\"margin-bottom: 2rem; color: rgb(45, 45, 45); font-family: Arimo, sans-serif; font-size: 12px; letter-spacing: 0.24px;\">These Terms of Service and any separate agreements whereby we provide you Services shall be governed by and construed in accordance with the laws of Bangladesh.<br><br><span style=\"font-weight: bolder;\">SECTION 19 - CHANGES TO TERMS OF SERVICE</span></p><p style=\"margin-bottom: 2rem; color: rgb(45, 45, 45); font-family: Arimo, sans-serif; font-size: 12px; letter-spacing: 0.24px;\">You can review the most current version of the Terms of Service at any time at this page.<br>We reserve the right, at our sole discretion, to update, change or replace any part of these Terms of Service by posting updates and changes to our website. It is your responsibility to check our website periodically for changes. Your continued use of or access to our website or the Service following the posting of any changes to these Terms of Service constitutes acceptance of those changes.<br><br><span style=\"font-weight: bolder;\">SECTION 20 - CONTACT INFORMATION</span></p><p style=\"margin-bottom: 2rem; color: rgb(45, 45, 45); font-family: Arimo, sans-serif; font-size: 12px; letter-spacing: 0.24px;\">Questions about the Terms of Service should be sent to us at Contact <span style=\"letter-spacing: 0.24px;\">jagopower.com</span></p>', NULL, NULL, NULL, 'Terms of Services', 'Terms of Services', 'Terms of Services', NULL, 'Yes', 'Active', '2023-08-26 05:53:25', '2024-04-22 21:48:34', NULL),
(3, 'Privacy Policy', 'privacy-policy', NULL, NULL, '<p><span style=\"color: rgba(0, 0, 0, 0.8); font-family: \"Source Sans Pro\", sans-serif; font-size: 16.2px; letter-spacing: -0.0486px; text-align: justify;\">Lorem ipsum dolor sit amet consectetur adipiscing elit ad, tempus commodo vivamus aptent magnis sagittis auctor senectus conubia, proin donec cras laoreet per maecenas facilisis. Dui vulputate ligula proin libero hac in arcu, rutrum maecenas habitant ad nibh laoreet massa, euismod tincidunt vitae ultrices non torquent fames, fusce leo id curae est aliquet. Duis eros enim vitae iaculis habitasse cum placerat lacus libero, felis posuere ut vestibulum montes sociis venenatis platea, molestie aptent porttitor sociosqu semper natoque eu suscipit. Pretium magna sem ultrices lectus sed fermentum imperdiet aenean, at molestie curae risus potenti sodales lacus parturient convallis, quisque ut varius ante vel hendrerit aliquet. Dignissim imperdiet bibendum tincidunt viverra semper ultricies morbi fringilla, duis fames faucibus lacus quis lacinia tellus tempor placerat, metus accumsan quisque facilisis rhoncus penatibus tempus. Maecenas tortor rutrum quisque dis integer massa habitant commodo accumsan, sociis ullamcorper venenatis sapien eget urna mattis convallis magna arcu, sodales pretium tincidunt lacinia luctus vitae primis nisi.</span><br></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', 'Active', '2023-08-26 05:54:01', '2023-09-11 09:18:56', NULL),
(4, 'Terms & Conditions', 'terms-conditions', NULL, NULL, '<p class=\"MsoNormal\"><b><span style=\"font-family: Calibri; font-size: 11pt;\">Welcome to Jagopower private LTD</span></b><b><span style=\"font-family: Calibri; font-size: 11pt;\"><o:p></o:p></span></b></p><p class=\"MsoNormal\"><span style=\"font-family: Calibri; font-size: 11pt;\">&nbsp;</span><span style=\"font-family: Calibri; font-size: 11pt;\">These terms and conditions govern your use of this page. You accept these terms and conditions in full and without reservation. So please read the following carefully. If you do not agree to be bound by this Terms of Service, we request you do not visit the page.</span></p><p class=\"MsoNormal\"><span style=\"font-family: Calibri; font-size: 11pt;\">&nbsp;</span><b style=\"font-size: 1rem;\"><span style=\"font-family: Calibri; font-size: 11pt;\">Pricing, Availability &amp; other processing</span></b></p><p class=\"MsoNormal\"><span style=\"font-family: Calibri; font-size: 11pt;\">&nbsp;</span><span style=\"font-family: Calibri; font-size: 11pt;\">All prices are listed in Bangladeshi Taka (BDT) and are inclusive of all taxes. However, errors may still occur, such as cases when the price of an item is not displayed correctly on the Page. As such, we reserve the right to refuse or cancel any order. In the event that an item is mispriced, we may, at our own discretion, either contact you for instructions or cancel your order and notify you of such cancellation. We shall have the right to refuse or cancel any such orders whether or not the order has been confirmed and your prepayment processed.</span></p><p class=\"MsoNormal\"><span style=\"font-family: Calibri; font-size: 11pt;\">&nbsp;</span><b style=\"font-size: 1rem;\"><span style=\"font-family: Calibri; font-size: 11pt;\">Supply Policy</span></b></p><p class=\"MsoNormal\"><span style=\"font-family: Calibri; font-size: 11pt;\">&nbsp;</span><span style=\"font-family: Calibri; font-size: 11pt;\">If any user, at the time of receiving the order delivery, finds any product is not good condition. All products displayed on the page are subject to change and are subject to availability.</span></p><p class=\"MsoNormal\"><span style=\"font-family: Calibri; font-size: 11pt;\">&nbsp;</span><b style=\"font-size: 1rem;\"><span style=\"font-family: Calibri; font-size: 11pt;\">Promotional Activity</span></b></p><p class=\"MsoNormal\"><span style=\"font-family: Calibri; font-size: 11pt;\">&nbsp;</span><span style=\"font-family: Calibri; font-size: 11pt;\">To promote its services Jagopower private LTD uses various advertisement and commercials which are truthful and are not deceptive or unfair to the best of our knowledge and belief. Every user is under the obligation to go through the relevant information contained in the Page before using the service and it will be assumed that each user is aware of every &nbsp;information provided in the Page. Images of products in the Page are for and by reference only and actual product may vary from the corresponding image exhibited.</span></p><p class=\"MsoNormal\"><span style=\"font-family: Calibri; font-size: 11pt;\">&nbsp;</span><b style=\"font-size: 1rem;\"><span style=\"font-family: Calibri; font-size: 11pt;\">Trademark &amp; Copyrights</span></b></p><p class=\"MsoNormal\"><span style=\"font-family: Calibri; font-size: 11pt;\">&nbsp;</span><span style=\"font-family: Calibri; font-size: 11pt;\">Jagopower private LTD logo and other marks indicated on our page are trademarks or registered trademarks in the relevant jurisdiction(s). Our graphics, logos, page headers, brand mascot, scripts and service names are the trademarks or trade dress and may not be used in connection with any product or service that does not belong to us or in any manner that is likely to cause confusion among customers, or in any manner that disparages or discredits us.</span></p><p class=\"MsoNormal\"><span style=\"font-family: Calibri; font-size: 11pt;\">&nbsp;</span><b style=\"font-size: 1rem;\"><span style=\"font-family: Calibri; font-size: 11pt;\">Communication with Us</span></b></p><p class=\"MsoNormal\"><span style=\"font-family: Calibri; font-size: 11pt;\">&nbsp;</span><span style=\"font-family: Calibri; font-size: 11pt;\">When you visit the page or send e-mails to us, you are communicating with us electronically. You will be required to provide a valid phone number while placing an order with us. We may communicate with you by e-mails, massages, phones call or by posting notices on the page or by any other mode of communication we choose to employ.</span></p><p class=\"MsoNormal\"><span style=\"font-family: Calibri; font-size: 11pt;\">&nbsp;</span><b style=\"font-size: 1rem;\"><span style=\"font-family: Calibri; font-size: 11pt;\">Privacy</span></b></p><p class=\"MsoNormal\"><span style=\"font-family: Calibri; font-size: 11pt;\">&nbsp;</span><span style=\"font-family: Calibri; font-size: 11pt;\">Privacy is extremely important to us and our community and we wrote this privacy policy to help you understand what information we are using about our customers &amp; how we are keeping it safe. Please find our Privacy Policy here. In order to keep the page up-to-date, we may offer automatic or manual updates at any time and without notice to you.</span></p><p class=\"MsoNormal\"><b><span style=\"font-family: Calibri; font-size: 11pt;\">&nbsp;</span></b><b style=\"font-size: 1rem;\"><span style=\"font-family: Calibri; font-size: 11pt;\">Copyright</span></b></p><p class=\"MsoNormal\"><span style=\"font-family: Calibri; font-size: 11pt;\">&nbsp;</span><span style=\"font-family: Calibri; font-size: 11pt;\">The material (including the content, and any other content, or services) contained on jagopower.com are the property of Jagopower private LTD.</span></p><p class=\"MsoNormal\"><b><span style=\"font-family: Calibri; font-size: 11pt;\">Miscellaneous</span></b><b><span style=\"font-family: Calibri; font-size: 11pt;\"><o:p></o:p></span></b></p><p class=\"MsoNormal\"><span style=\"font-family: Calibri; font-size: 11pt;\">Post, promote or transmit through the page any prohibited materials as deemed illegal by The People Republic of Bangladesh.</span><span style=\"font-family: Calibri; font-size: 11pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"font-family: Calibri; font-size: 11pt;\">&nbsp;</span><b style=\"font-size: 1rem;\"><span style=\"font-family: Calibri; font-size: 11pt;\">Modification</span></b></p><p class=\"MsoNormal\"><span style=\"font-family: Calibri; font-size: 11pt;\">&nbsp;</span><span style=\"font-family: Calibri; font-size: 11pt;\">The page reserves the right to change, modify, add, or remove portions of these Terms and Conditions at any time without any prior notification. Changes will be effective when posted on the page with no other notice provided. Please check these Terms and Conditions regularly for updates. Your continued use of the Page following the posting of changes to Terms and Conditions of use constitutes your acceptance of those changes.</span></p>', NULL, NULL, NULL, 'Terms & Conditions', 'Terms & Conditions', 'Terms & Conditions', NULL, 'Yes', 'Active', '2023-09-11 09:31:42', '2024-04-22 02:46:19', NULL);
INSERT INTO `pages` (`id`, `title`, `slug`, `thumb`, `images`, `content`, `smm_title`, `smm_content`, `smm_images`, `meta_title`, `meta_keyword`, `meta_description`, `schema`, `follow`, `status`, `created_at`, `updated_at`, `background`) VALUES
(5, 'Payment options', 'payment-options', NULL, NULL, '<h2 style=\"margin-top:0.0000pt;margin-right:0.0000pt;margin-bottom:31.5000pt;\r\nmargin-left:0.0000pt;padding:0pt 0pt 0pt 0pt ;mso-pagination:widow-orphan;\r\nline-height:13.1500pt;\"><b><span style=\"font-family: sans-serif; color: rgb(0, 0, 0); letter-spacing: 0.2pt; text-transform: uppercase; font-size: 18pt;\">PAYMENT OPTIONS</span></b><b><span style=\"font-family: sans-serif; color: rgb(0, 0, 0); letter-spacing: 0.2pt; text-transform: uppercase; font-size: 18pt;\"><o:p></o:p></span></b></h2><p class=\"MsoNormal\" style=\"margin-top: 5pt; margin-bottom: 5pt; margin-left: 15pt; text-indent: -18pt; line-height: 18pt;\"><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 12pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">1.&nbsp;</span><!--[endif]--><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">DEBIT / CREDIT CARD (Master / Visa / Amex / DBBL Nexus/ Fast Cash)</span><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-fareast-font-family:等线;\r\nmso-bidi-font-family:\'Times New Roman\';\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top: 5pt; margin-bottom: 5pt; margin-left: 15pt; text-indent: -18pt; line-height: 18pt;\"><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 12pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">2.&nbsp;</span><!--[endif]--><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">MOBILE BANKING (bKash /</span><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Rocket/</span><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">&nbsp;My Cash / M Cash/ DBBL Mobile Banking</span><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-fareast-font-family:等线;\r\nmso-bidi-font-family:\'Times New Roman\';\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top: 5pt; margin-bottom: 5pt; margin-left: 15pt; text-indent: -18pt; line-height: 18pt;\"><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 12pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">3.&nbsp;</span><!--[endif]--><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">INTERNET BANKING</span><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-fareast-font-family:等线;\r\nmso-bidi-font-family:\'Times New Roman\';\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-top: 5pt; margin-bottom: 5pt; margin-left: 15pt; text-indent: -18pt; line-height: 18pt;\"><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 12pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">4.&nbsp;</span><!--[endif]--><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">CASH ON DELIVERY</span><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-fareast-font-family:等线;\r\nmso-bidi-font-family:\'Times New Roman\';\"><o:p></o:p></span></p><p class=\"p\" style=\"margin-top: 0pt; line-height: 18pt;\"><b><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Payment Options -&gt; Debit / Credit Card (Master / Visa / Amex / DBBL Nexus/ Fast Cash)</span></b><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';font-size:12.0000pt;\r\nmso-font-kerning:0.0000pt;\"><o:p></o:p></span></p><p class=\"p\" style=\"margin-top: 0pt; line-height: 18pt;\"><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">VISA payments are processed through an online payment gateway system. You need not worry about your debit / credit card information falling into the wrong hands because your bank will authorize the card transaction directly without any information passing through us. Your bank will issue via the online payment gateway an authorization code and confirmation of completion of transactions.</span><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';font-size:12.0000pt;\r\nmso-font-kerning:0.0000pt;\"><o:p></o:p></span></p><p class=\"p\" style=\"margin-top: 0pt; line-height: 18pt;\"><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">www.jagopower.com</span><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">/ uses the latest encryption technology and other methods to protect your credit card information. You can place your orders using SSL encryption (the Internet standard for secure transactions). In fact, shopping online with a debit / credit card at </span><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">www.jagopower.com</span><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">/ is even safer than using a debit / credit card at a restaurant because we do not retain your card information. You can be assured that </span><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">www.jagopower.com</span><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">/ offers you the highest standards of security currently available on the Internet so as to ensure that your shopping experience is private, safe and secure.</span><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';font-size:12.0000pt;\r\nmso-font-kerning:0.0000pt;\"><o:p></o:p></span></p><p class=\"p\" style=\"margin-top: 0pt; line-height: 18pt;\"><b><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Internet Banking</span></b><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';font-size:12.0000pt;\r\nmso-font-kerning:0.0000pt;\"><o:p></o:p></span></p><p class=\"p\" style=\"margin-top: 0pt; line-height: 18pt;\"><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Internet Banking payments are processed through an online payment system provided by respective banks. You need not worry about your Internet Banking user information falling into the wrong hands because your bank will authorize the Internet banking transaction directly without any information passing through us. Once you are directed to your bank’s website/ log in panel, you have to authorize the transaction using your Login ID&amp; Password. (Provided by your respective bank)</span><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><br></span><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><br></span><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">www.jagopower.com</span><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">&nbsp;</span><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">uses the latest encryption technology and other methods to protect your personal information. You can be assured that </span><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">www.jagopower.com</span><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">&nbsp;offers you the highest standards of security currently available on the Net so as to ensure that your shopping experience is private, safe and secure.</span><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><br></span><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"><br></span><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Currently we have the following Banks listed below available to Shop online at&nbsp;</span><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">www.jagopower.com</span><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">. We will add more banks for your convenience soon.</span><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';font-size:12.0000pt;\r\nmso-font-kerning:0.0000pt;\"><o:p></o:p></span></p><p class=\"p\" style=\"margin-top: 0pt; line-height: 18pt;\"><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Bank Asia, Mutual Trust Bank, Brac Bank, City Touch by City Bank, Islami Bank Bangladesh Limited, AB Bank.</span><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';font-size:12.0000pt;\r\nmso-font-kerning:0.0000pt;\"><o:p></o:p></span></p><p class=\"p\" style=\"margin-top: 0pt; line-height: 18pt;\"><b><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Mobile Banking</span></b><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';font-size:12.0000pt;\r\nmso-font-kerning:0.0000pt;\"><o:p></o:p></span></p><p class=\"p\" style=\"margin-top: 0pt; line-height: 18pt;\"><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">You may pay through your existing mobile banking accounts as well. For that, when you select your mobile banking partner, you will be redirected to a page where instruction will be shown. All you will need to do is just follow the instruction and you will receive a transaction ID through SMS on your mobile from your respective bank. Enter the ID and submit to confirm your payment through Mobile Banking.</span><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';font-size:12.0000pt;\r\nmso-font-kerning:0.0000pt;\"><o:p></o:p></span></p><p class=\"p\" style=\"margin-top: 0pt; line-height: 18pt;\"><span style=\"font-family: sans-serif; color: rgb(45, 45, 45); letter-spacing: 0.2pt; font-size: 9pt; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Currently you can avail mobile banking facility through your existing bKash, MCash. My Cash, DBBL Mobile Banking accounts.</span><span style=\"mso-spacerun:\'yes\';font-family:\'Times New Roman\';font-size:12.0000pt;\r\nmso-font-kerning:0.0000pt;\"><o:p></o:p></span></p><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-fareast-font-family:等线;\r\nmso-bidi-font-family:\'Times New Roman\';\">&nbsp;</span></p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', 'Active', '2023-09-11 09:32:59', '2024-04-22 04:17:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_getways`
--

CREATE TABLE `payment_getways` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `branch_name` varchar(255) DEFAULT NULL,
  `account_name` varchar(255) DEFAULT NULL,
  `account_no` varchar(255) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `secret` varchar(255) DEFAULT NULL,
  `inst` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_getways`
--

INSERT INTO `payment_getways` (`id`, `name`, `slug`, `images`, `bank`, `branch_name`, `account_name`, `account_no`, `key`, `secret`, `inst`, `content`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Cash on Delivery', 'cash-on-delivery', '1694346258images.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Website', 'Active', '2023-09-10 05:00:34', '2023-09-10 05:44:18'),
(2, 'Bkash', 'bkash-1', '1694345890images.jpg', NULL, NULL, NULL, '01720085127', NULL, NULL, NULL, NULL, 'Website', 'Active', '2023-09-10 05:38:10', '2025-05-31 06:21:44'),
(3, 'Nogod', 'nogod-1', '1694348151images.jpg', NULL, NULL, NULL, '01720085127', NULL, NULL, NULL, NULL, 'Website', 'Active', '2023-09-10 06:15:51', '2025-05-31 06:22:09'),
(4, 'Online Pay', 'online-pay-1', '1748694439images.png', NULL, NULL, NULL, '20502060202281716', NULL, NULL, NULL, NULL, 'Website', 'Active', '2023-09-10 06:16:13', '2025-05-31 06:49:09');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `sub_category_id` varchar(255) DEFAULT NULL,
  `sub_subcategory_id` varchar(255) DEFAULT NULL,
  `spacialcat_id` text DEFAULT NULL,
  `brand_id` varchar(255) DEFAULT NULL,
  `unit_id` varchar(255) DEFAULT NULL,
  `content` longtext NOT NULL,
  `specification` longtext DEFAULT NULL,
  `warrenty` longtext DEFAULT NULL,
  `thumb` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `img_alt` varchar(255) DEFAULT NULL,
  `gallery` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `qty` text NOT NULL DEFAULT '1',
  `regular_price` text DEFAULT NULL,
  `sales_price` text NOT NULL,
  `featured` text NOT NULL DEFAULT 'Yes',
  `color` text DEFAULT NULL,
  `size` text DEFAULT NULL,
  `blade` text DEFAULT NULL,
  `smm_title` text DEFAULT NULL,
  `smm_content` text DEFAULT NULL,
  `smm_images` text DEFAULT NULL,
  `meta_tags` text DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `schema` longtext DEFAULT NULL,
  `follow` varchar(255) NOT NULL DEFAULT 'Yes',
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `title`, `slug`, `category_id`, `sub_category_id`, `sub_subcategory_id`, `spacialcat_id`, `brand_id`, `unit_id`, `content`, `specification`, `warrenty`, `thumb`, `images`, `img_alt`, `gallery`, `video`, `qty`, `regular_price`, `sales_price`, `featured`, `color`, `size`, `blade`, `smm_title`, `smm_content`, `smm_images`, `meta_tags`, `meta_title`, `meta_keyword`, `meta_description`, `schema`, `follow`, `status`, `created_at`, `updated_at`) VALUES
(3, '3 in 1 Double Head Led Light Water Spray Portable Ice Mist Cooling Fan', '3 in 1 Double Head Led Light Water Spray Portable Ice Mist Cooling Fan', '3-in-1-double-head-led-light-water-spray-portable-ice-mist-cooling-fan', '20', '0', NULL, '0', '0', '1', '<ul style=\"box-sizing: border-box; padding-left: 1rem; font-size: 0.875rem; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, Helvetica, sans-serif;\"><li style=\"box-sizing: border-box; line-height: 1.8;\"><p class=\"detail-desc-decorate-title\" style=\"box-sizing: border-box; margin-bottom: 12px; text-shadow: none; font-size: 20px; line-height: 28px; -webkit-tap-highlight-color: transparent; outline: 0px; white-space-collapse: preserve; font-family: OpenSans; font-weight: 900; color: rgb(0, 0, 0);\">3 in 1 Double Head Led Light Water Spray Portable Ice Mist Cooling Fan Desk Humidifier DC Air Conditioners Mini Air Cooler Fan</p><p class=\"detail-desc-decorate-content\" data-spm-anchor-id=\"a2g0o.detail.1000023.i0.1f05e6cae6cat0\" style=\"box-sizing: border-box; margin-bottom: 12px; text-shadow: none; font-size: 0.9375rem; line-height: 20px; -webkit-tap-highlight-color: transparent; outline: 0px; white-space-collapse: preserve; font-family: OpenSans; color: rgb(0, 0, 0);\">Featured Function:Humidify, with light<br style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px;\">Power supply method:USB<br style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px;\">rated voltage:3.7<br style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px;\">Rated frequency:50hz<br style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px;\">static:40-50db</p></li></ul>', '<ul style=\"box-sizing: border-box; padding-left: 1rem; font-size: 0.875rem; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, Helvetica, sans-serif;\"><li style=\"box-sizing: border-box; line-height: 1.8;\"><p class=\"detail-desc-decorate-title\" style=\"box-sizing: border-box; margin-bottom: 12px; text-shadow: none; font-size: 20px; line-height: 28px; -webkit-tap-highlight-color: transparent; outline: 0px; white-space-collapse: preserve; font-family: OpenSans; font-weight: 900; color: rgb(0, 0, 0);\">3 in 1 Double Head Led Light Water Spray Portable Ice Mist Cooling Fan Desk Humidifier DC Air Conditioners Mini Air Cooler Fan</p><p class=\"detail-desc-decorate-content\" data-spm-anchor-id=\"a2g0o.detail.1000023.i0.1f05e6cae6cat0\" style=\"box-sizing: border-box; margin-bottom: 12px; text-shadow: none; font-size: 0.9375rem; line-height: 20px; -webkit-tap-highlight-color: transparent; outline: 0px; white-space-collapse: preserve; font-family: OpenSans; color: rgb(0, 0, 0);\">Featured Function:Humidify, with light<br style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px;\">Power supply method:USB<br style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px;\">rated voltage:3.7<br style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px;\">Rated frequency:50hz<br style=\"box-sizing: border-box; -webkit-tap-highlight-color: transparent; outline: 0px;\">static:40-50db</p></li></ul>', NULL, '20250601014414-thumbnail-180X178.jpg', '20250601014414-photo-300X370.jpg', NULL, '20250601014415-e2.jpg,20250601014415-e1.webp', NULL, '100', '1900', '1550', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '6,7', '3 in 1 Double Head Led Light Water Spray Portable Ice Mist Cooling Fan', '3 in 1 Double Head Led Light Water Spray Portable Ice Mist Cooling Fan', '3 in 1 Double Head Led Light Water Spray Portable Ice Mist Cooling Fan', NULL, 'Yes', 'Active', '2025-05-31 19:44:15', '2025-05-31 19:44:15'),
(4, 'Mini Cute Handheld Fan', 'Mini Cute Handheld Fan', 'mini-cute-handheld-fan', '20', '0', NULL, '0', '0', '1', '<table class=\"a-normal a-spacing-micro\" style=\"box-sizing: border-box; width: 387.344px; color: rgb(15, 17, 17); font-family: Arial, sans-serif;\"><tbody style=\"box-sizing: border-box;\"><tr class=\"a-spacing-small po-brand\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 0px 3px 3px 0px; width: 103.365px; float: none !important;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; text-shadow: none; font-weight: 700 !important; line-height: 20px !important;\">Brand</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 0px 0px 3px 3px; width: 283.979px; float: none !important;\"><span class=\"a-size-base po-break-word\" style=\"box-sizing: border-box; text-shadow: none; word-break: break-word; line-height: 20px !important;\">PRITECH</span></td></tr><tr class=\"a-spacing-small po-color\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; width: 103.365px; float: none !important;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; text-shadow: none; font-weight: 700 !important; line-height: 20px !important;\">Colour</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; width: 283.979px; float: none !important;\"><span class=\"a-size-base po-break-word\" style=\"box-sizing: border-box; text-shadow: none; word-break: break-word; line-height: 20px !important;\">pink</span></td></tr><tr class=\"a-spacing-small po-power_source_type\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; width: 103.365px; float: none !important;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; text-shadow: none; font-weight: 700 !important; line-height: 20px !important;\">Power source</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; width: 283.979px; float: none !important;\"><span class=\"a-size-base po-break-word\" style=\"box-sizing: border-box; text-shadow: none; word-break: break-word; line-height: 20px !important;\">Battery Powered</span></td></tr><tr class=\"a-spacing-small po-room_type\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; width: 103.365px; float: none !important;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; text-shadow: none; font-weight: 700 !important; line-height: 20px !important;\">Room type</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; width: 283.979px; float: none !important;\"><span class=\"a-size-base po-break-word\" style=\"box-sizing: border-box; text-shadow: none; word-break: break-word; line-height: 20px !important;\">Home Office</span></td></tr><tr class=\"a-spacing-small po-special_feature\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; width: 103.365px; float: none !important;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; text-shadow: none; font-weight: 700 !important; line-height: 20px !important;\">Special features</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; width: 283.979px; float: none !important;\"><span class=\"a-size-base po-break-word\" style=\"box-sizing: border-box; text-shadow: none; word-break: break-word; line-height: 20px !important;\">led_light</span></td></tr><tr class=\"a-spacing-small po-recommended_uses_for_product\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; width: 103.365px; float: none !important;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; text-shadow: none; font-weight: 700 !important; line-height: 20px !important;\">Recommended uses for product</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; width: 283.979px; float: none !important;\"><span class=\"a-size-base po-break-word\" style=\"box-sizing: border-box; text-shadow: none; word-break: break-word; line-height: 20px !important;\">Cooling</span></td></tr><tr class=\"a-spacing-small po-number_of_speeds\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; width: 103.365px; float: none !important;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; text-shadow: none; font-weight: 700 !important; line-height: 20px !important;\">Number of speeds</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; width: 283.979px; float: none !important;\"><span class=\"a-size-base po-break-word\" style=\"box-sizing: border-box; text-shadow: none; word-break: break-word; line-height: 20px !important;\">2</span></td></tr><tr class=\"a-spacing-small po-included_components\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; width: 103.365px; float: none !important;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; text-shadow: none; font-weight: 700 !important; line-height: 20px !important;\">Included components</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; width: 283.979px; float: none !important;\"><span class=\"a-size-base po-break-word\" style=\"box-sizing: border-box; text-shadow: none; word-break: break-word; line-height: 20px !important;\">Kordel</span></td></tr><tr class=\"a-spacing-small po-specification_met\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 0px 0px; width: 103.365px; float: none !important;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; text-shadow: none; font-weight: 700 !important; line-height: 20px !important;\">Specification met</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 0px 3px; width: 283.979px; float: none !important;\"><span class=\"a-size-base po-break-word\" style=\"box-sizing: border-box; text-shadow: none; word-break: break-word; line-height: 20px !important;\">CE</span></td></tr></tbody></table>', '<table class=\"a-normal a-spacing-micro\" style=\"box-sizing: border-box; width: 387.344px; color: rgb(15, 17, 17); font-family: Arial, sans-serif;\"><tbody style=\"box-sizing: border-box;\"><tr class=\"a-spacing-small po-brand\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 0px 3px 3px 0px; width: 103.365px; float: none !important;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; text-shadow: none; font-weight: 700 !important; line-height: 20px !important;\">Brand</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 0px 0px 3px 3px; width: 283.979px; float: none !important;\"><span class=\"a-size-base po-break-word\" style=\"box-sizing: border-box; text-shadow: none; word-break: break-word; line-height: 20px !important;\">PRITECH</span></td></tr><tr class=\"a-spacing-small po-color\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; width: 103.365px; float: none !important;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; text-shadow: none; font-weight: 700 !important; line-height: 20px !important;\">Colour</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; width: 283.979px; float: none !important;\"><span class=\"a-size-base po-break-word\" style=\"box-sizing: border-box; text-shadow: none; word-break: break-word; line-height: 20px !important;\">pink</span></td></tr><tr class=\"a-spacing-small po-power_source_type\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; width: 103.365px; float: none !important;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; text-shadow: none; font-weight: 700 !important; line-height: 20px !important;\">Power source</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; width: 283.979px; float: none !important;\"><span class=\"a-size-base po-break-word\" style=\"box-sizing: border-box; text-shadow: none; word-break: break-word; line-height: 20px !important;\">Battery Powered</span></td></tr><tr class=\"a-spacing-small po-room_type\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; width: 103.365px; float: none !important;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; text-shadow: none; font-weight: 700 !important; line-height: 20px !important;\">Room type</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; width: 283.979px; float: none !important;\"><span class=\"a-size-base po-break-word\" style=\"box-sizing: border-box; text-shadow: none; word-break: break-word; line-height: 20px !important;\">Home Office</span></td></tr><tr class=\"a-spacing-small po-special_feature\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; width: 103.365px; float: none !important;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; text-shadow: none; font-weight: 700 !important; line-height: 20px !important;\">Special features</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; width: 283.979px; float: none !important;\"><span class=\"a-size-base po-break-word\" style=\"box-sizing: border-box; text-shadow: none; word-break: break-word; line-height: 20px !important;\">led_light</span></td></tr><tr class=\"a-spacing-small po-recommended_uses_for_product\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; width: 103.365px; float: none !important;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; text-shadow: none; font-weight: 700 !important; line-height: 20px !important;\">Recommended uses for product</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; width: 283.979px; float: none !important;\"><span class=\"a-size-base po-break-word\" style=\"box-sizing: border-box; text-shadow: none; word-break: break-word; line-height: 20px !important;\">Cooling</span></td></tr><tr class=\"a-spacing-small po-number_of_speeds\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; width: 103.365px; float: none !important;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; text-shadow: none; font-weight: 700 !important; line-height: 20px !important;\">Number of speeds</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; width: 283.979px; float: none !important;\"><span class=\"a-size-base po-break-word\" style=\"box-sizing: border-box; text-shadow: none; word-break: break-word; line-height: 20px !important;\">2</span></td></tr><tr class=\"a-spacing-small po-included_components\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 3px 0px; width: 103.365px; float: none !important;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; text-shadow: none; font-weight: 700 !important; line-height: 20px !important;\">Included components</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 3px 3px; width: 283.979px; float: none !important;\"><span class=\"a-size-base po-break-word\" style=\"box-sizing: border-box; text-shadow: none; word-break: break-word; line-height: 20px !important;\">Kordel</span></td></tr><tr class=\"a-spacing-small po-specification_met\" style=\"box-sizing: border-box; margin-bottom: 8px !important;\"><td class=\"a-span3\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 3px 0px 0px; width: 103.365px; float: none !important;\"><span class=\"a-size-base a-text-bold\" style=\"box-sizing: border-box; text-shadow: none; font-weight: 700 !important; line-height: 20px !important;\">Specification met</span></td><td class=\"a-span9\" style=\"box-sizing: border-box; vertical-align: top; padding: 3px 0px 0px 3px; width: 283.979px; float: none !important;\"><span class=\"a-size-base po-break-word\" style=\"box-sizing: border-box; text-shadow: none; word-break: break-word; line-height: 20px !important;\">CE</span></td></tr></tbody></table>', NULL, '20250601015131-thumbnail-180X178.jpg', '20250601015131-photo-300X370.jpg', NULL, '20250601015131-d1.jpg', NULL, '100', '700', '300', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Mini Cute Handheld Fan', 'Mini Cute Handheld Fan', 'Mini Cute Handheld Fan', NULL, 'Yes', 'Active', '2025-05-31 19:51:31', '2025-05-31 19:51:31'),
(5, 'Table Fan with LED Light JY-1880', 'Table Fan with LED Light JY-1880', 'table-fan-with-led-light-jy-1880', '20', '0', NULL, '0', '0', '1', '<ul class=\"\" data-spm-anchor-id=\"a2a0e.pdp_revamp.product_detail.i1.72ba7958nJFUQH\" style=\"box-sizing: border-box; padding-left: 1rem; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">JY SUPER Or SUNMOON lithium rechargeable mini table fan with LED light JY-1880 or SM - 1880</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">Quick DetailsPower Source:lithium battery</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">Type:air cooling fan installation:table</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">Material: ABS plastic</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">Certification:ceBrand</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">Place of Origin: CHINA</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">Battery Power:2400 mAh</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">Fan Size:6 inch</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">Fan Speed:low/middle/high</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">Light Step:dim/strong</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">LED Power:5 pcs*0.5W</li><li class=\"\" data-spm-anchor-id=\"a2a0e.pdp_revamp.product_detail.i2.72ba7958nJFUQH\" style=\"box-sizing: border-box; line-height: 1.8;\">Packing:color boxCharger:USB</li></ul>', '<ul class=\"\" data-spm-anchor-id=\"a2a0e.pdp_revamp.product_detail.i1.72ba7958nJFUQH\" style=\"box-sizing: border-box; padding-left: 1rem; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">JY SUPER Or SUNMOON lithium rechargeable mini table fan with LED light JY-1880 or SM - 1880</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">Quick DetailsPower Source:lithium battery</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">Type:air cooling fan installation:table</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">Material: ABS plastic</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">Certification:ceBrand</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">Place of Origin: CHINA</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">Battery Power:2400 mAh</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">Fan Size:6 inch</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">Fan Speed:low/middle/high</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">Light Step:dim/strong</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">LED Power:5 pcs*0.5W</li><li class=\"\" data-spm-anchor-id=\"a2a0e.pdp_revamp.product_detail.i2.72ba7958nJFUQH\" style=\"box-sizing: border-box; line-height: 1.8;\">Packing:color boxCharger:USB</li></ul>', NULL, '20250601015456-thumbnail-180X178.webp', '20250601015456-photo-300X370.webp', NULL, '20250601015456-c3.jpg,20250601015456-c2.jpg', NULL, '100', '1400', '999', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Table Fan with LED Light JY-1880', 'Table Fan with LED Light JY-1880', 'Table Fan with LED Light JY-1880', NULL, 'Yes', 'Active', '2025-05-31 19:54:56', '2025-05-31 19:54:56'),
(6, 'Folding LR Fan', 'Folding LR Fan', 'folding-lr-fan', '20', '0', NULL, '0', '0', '1', '<p><span style=\"color: rgb(61, 70, 77); font-family: \"Noto Sans Bengali\", Roboto, \"sans-serif\";\">খুব সহজে ভাজ করা যায় বলে আকারে ছোট হয় তাই বহন করা সহজ হয় । বাসা বা অফিসের রাখলে সুন্দর লাগে । প্রচন্ড গরম থেকে মুক্তি দিতে আমরা আপনাদের জন্য নিয়ে এলাম রিচার্জেবল ফ্যান with LED লাইট। ✅ বর্তমান মূল্য মাত্র: 1190/= (সীমিত সময়ের জন্য) * রিচার্জ্যাবল টেবিল ফ্যান এবং লাইট * ফুল চার্জে ফ্যান ৪ ঘন্টা এবং লাইট ৮ ঘন্টা জ্বলবে। * স্টাইলিশ ফোল্ডিং ডিজাইন * লো এন্ড হাই অ্যাডজাস্টেবল সুইচ * LED লাইট ভোল্টেজঃ 220 V, 50 Hz * ফ্যান স্পিডঃ 2100 RPM * ব্যাটারী ক্যাপাসিটি: 1600 mAh</span></p>', '<p><span style=\"color: rgb(61, 70, 77); font-family: \"Noto Sans Bengali\", Roboto, \"sans-serif\";\">খুব সহজে ভাজ করা যায় বলে আকারে ছোট হয় তাই বহন করা সহজ হয় । বাসা বা অফিসের রাখলে সুন্দর লাগে । প্রচন্ড গরম থেকে মুক্তি দিতে আমরা আপনাদের জন্য নিয়ে এলাম রিচার্জেবল ফ্যান with LED লাইট। ✅ বর্তমান মূল্য মাত্র: 1190/= (সীমিত সময়ের জন্য) * রিচার্জ্যাবল টেবিল ফ্যান এবং লাইট * ফুল চার্জে ফ্যান ৪ ঘন্টা এবং লাইট ৮ ঘন্টা জ্বলবে। * স্টাইলিশ ফোল্ডিং ডিজাইন * লো এন্ড হাই অ্যাডজাস্টেবল সুইচ * LED লাইট ভোল্টেজঃ 220 V, 50 Hz * ফ্যান স্পিডঃ 2100 RPM * ব্যাটারী ক্যাপাসিটি: 1600 mAh</span></p>', NULL, '20250601015705-thumbnail-180X178.jpg', '20250601015705-photo-300X370.jpg', NULL, '20250601015705-b1.jpg', NULL, '10', '1190', '900', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Folding LR Fan', 'Folding LR Fan', 'Folding LR Fan', NULL, 'Yes', 'Active', '2025-05-31 19:57:05', '2025-06-01 04:10:08'),
(7, 'Mini Hand Fan (Long)', 'Mini Hand Fan (Long)', 'mini-hand-fan-long', '20', '0', NULL, '0', '0', '1', '<div class=\"xdj266r x11i5rnm xat24cr x1mh8g0r x1vvkbs x126k92a\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">Mini fan<span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tea/1/16/1f970.png\" alt=\"🥰\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span></div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">এত এত কিউট আর এত ঠান্ডা বাতাস দেয়&nbsp;<span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ta/1/16/1f343.png\" alt=\"🍃\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span></div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">২ ঘন্টা সার্ভিস দিবে।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">গরমে অতিষ্ঠ?লোডশেডিং হচ্ছে বারবার<span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tbd/1/16/1f62a.png\" alt=\"😪\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span></div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">ইচ্ছে করছে নদীতে ঝাপ দিতে? আর চিন্তার কারণ নেই আপনাদের জন্য আমরা নিয়ে আসছি Mini Hand Portable Fan<span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t40/1/16/1f4a5.png\" alt=\"💥\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span></div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">এই গরমে যারা লোকাল বাস এ চলাচল করে তাদের জন্য বেস্ট সঙ্গী এই mini fan।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">স্কুল, কলেজ ছাত্র ছাত্রী জন্য এই fan অনেক উপকারী।</div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">Portable mini Fan(Rechargeable)<span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf3/1/16/1f539.png\" alt=\"🔹\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span><span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf3/1/16/1f539.png\" alt=\"🔹\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span></div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\"><span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t6f/1/16/1f6ab.png\" alt=\"🚫\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>&nbsp;চার্জ দিয়ে আপনি এইটি ইউজ করতে পারবেন তাই তেমন কোনো ঝামেলা নেয়।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\"><span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t6f/1/16/1f6ab.png\" alt=\"🚫\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>&nbsp;একবার চার্জ করে অনেক্ক্ষণ ইউজ করতে পারবেন।</div></div>', '<div class=\"xdj266r x11i5rnm xat24cr x1mh8g0r x1vvkbs x126k92a\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">Mini fan<span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tea/1/16/1f970.png\" alt=\"🥰\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span></div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">এত এত কিউট আর এত ঠান্ডা বাতাস দেয়&nbsp;<span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ta/1/16/1f343.png\" alt=\"🍃\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span></div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">২ ঘন্টা সার্ভিস দিবে।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">গরমে অতিষ্ঠ?লোডশেডিং হচ্ছে বারবার<span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tbd/1/16/1f62a.png\" alt=\"😪\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span></div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">ইচ্ছে করছে নদীতে ঝাপ দিতে? আর চিন্তার কারণ নেই আপনাদের জন্য আমরা নিয়ে আসছি Mini Hand Portable Fan<span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t40/1/16/1f4a5.png\" alt=\"💥\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span></div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">এই গরমে যারা লোকাল বাস এ চলাচল করে তাদের জন্য বেস্ট সঙ্গী এই mini fan।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">স্কুল, কলেজ ছাত্র ছাত্রী জন্য এই fan অনেক উপকারী।</div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">Portable mini Fan(Rechargeable)<span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf3/1/16/1f539.png\" alt=\"🔹\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span><span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tf3/1/16/1f539.png\" alt=\"🔹\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span></div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\"><span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t6f/1/16/1f6ab.png\" alt=\"🚫\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>&nbsp;চার্জ দিয়ে আপনি এইটি ইউজ করতে পারবেন তাই তেমন কোনো ঝামেলা নেয়।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\"><span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t6f/1/16/1f6ab.png\" alt=\"🚫\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>&nbsp;একবার চার্জ করে অনেক্ক্ষণ ইউজ করতে পারবেন।</div></div>', NULL, '20250601015922-thumbnail-180X178.webp', '20250601015922-photo-300X370.webp', NULL, '20250601015922-a3.webp,20250601015922-a2.webp,20250601015922-a1.webp', NULL, '100', '500', '300', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Mini Hand Fan', 'Mini Hand Fan', 'Mini Hand Fan', NULL, 'Yes', 'Active', '2025-05-31 19:59:22', '2025-05-31 19:59:22'),
(8, 'Electric Sewing Machine', '4 in 1 Electric Sewing Machine', '4-in-1-electric-sewing-machine', '21', '0', NULL, '0', '0', '1', '<ul style=\"box-sizing: border-box; padding-left: 1rem; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><li style=\"box-sizing: border-box; line-height: 1.8;\">সিঙ্গেল থ্রেড, সিঙ্গেল স্পিড</li><li style=\"box-sizing: border-box; line-height: 1.8;\">৬ ভোল্ট পাওয়ারে চলে</li><li style=\"box-sizing: border-box; line-height: 1.8;\">কাপড়, প্যান্ট এবং টেক্সটাইলের জন্য উপযোগী</li><li style=\"box-sizing: border-box; line-height: 1.8;\">পাওয়ার সাপ্লাই: ৪টি AA ব্যাটারি অথবা AC/DC &gt; 6V 800MA</li><li style=\"box-sizing: border-box; line-height: 1.8;\">অ্যাডাপ্টারের সাহায্যে চলে (সংযুক্ত নয়)</li><li style=\"box-sizing: border-box; line-height: 1.8;\">ম্যাটেরিয়াল: ABS + স্টেইনলেস স্টীল</li><li style=\"box-sizing: border-box; line-height: 1.8;\">ফ্যামিলি ব্যবহারের জন্য আদর্শ মিনি সাইজ,</li><li style=\"box-sizing: border-box; line-height: 1.8;\">হালকা ও বহনযোগ্য</li></ul>', '<ul style=\"box-sizing: border-box; padding-left: 1rem; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><li style=\"box-sizing: border-box; line-height: 1.8;\">সিঙ্গেল থ্রেড, সিঙ্গেল স্পিড</li><li style=\"box-sizing: border-box; line-height: 1.8;\">৬ ভোল্ট পাওয়ারে চলে</li><li style=\"box-sizing: border-box; line-height: 1.8;\">কাপড়, প্যান্ট এবং টেক্সটাইলের জন্য উপযোগী</li><li style=\"box-sizing: border-box; line-height: 1.8;\">পাওয়ার সাপ্লাই: ৪টি AA ব্যাটারি অথবা AC/DC &gt; 6V 800MA</li><li style=\"box-sizing: border-box; line-height: 1.8;\">অ্যাডাপ্টারের সাহায্যে চলে (সংযুক্ত নয়)</li><li style=\"box-sizing: border-box; line-height: 1.8;\">ম্যাটেরিয়াল: ABS + স্টেইনলেস স্টীল</li><li style=\"box-sizing: border-box; line-height: 1.8;\">ফ্যামিলি ব্যবহারের জন্য আদর্শ মিনি সাইজ,</li><li style=\"box-sizing: border-box; line-height: 1.8;\">হালকা ও বহনযোগ্য</li></ul>', NULL, '20250601025148-thumbnail-180X178.jpg', '20250601025148-photo-300X370.jpg', NULL, '20250601025148-a3.jpg,20250601025148-a2.jpg,20250601025148-a1.jpg', NULL, '100', '1490', '999', 'No', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Electric Sewing Machine', 'Electric Sewing Machine', 'Electric Sewing Machine', NULL, 'Yes', 'Active', '2025-05-31 20:51:48', '2025-05-31 20:51:48');
INSERT INTO `products` (`id`, `sku`, `title`, `slug`, `category_id`, `sub_category_id`, `sub_subcategory_id`, `spacialcat_id`, `brand_id`, `unit_id`, `content`, `specification`, `warrenty`, `thumb`, `images`, `img_alt`, `gallery`, `video`, `qty`, `regular_price`, `sales_price`, `featured`, `color`, `size`, `blade`, `smm_title`, `smm_content`, `smm_images`, `meta_tags`, `meta_title`, `meta_keyword`, `meta_description`, `schema`, `follow`, `status`, `created_at`, `updated_at`) VALUES
(9, 'Self Defence ART NO 801', 'Self Defence ART NO 801', 'self-defence-art-no-801', '21', '0', NULL, '0', '0', '1', '<ul style=\"box-sizing: border-box; margin-bottom: 0px; padding-left: 2rem; font-size: 0.875rem; margin-left: 0px; padding-right: 2rem; outline: 0px; list-style: unset; color: rgb(0, 0, 0); font-family: Rubik, sans-serif;\"><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">রিচার্জেবল ইলেকট্রিক শর্ট।পাগলা কুকুর এবং নিজের নিরাপত্তার জন্য ইউজ করতে পারবেন</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Rechargeable Electric Premium High Voltage Torch Light for Security.</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Comes with a cover and a charger</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">High voltage electric</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Ideal for woman self-defense</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Size: 8 Inch</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Volt : 5000</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Body material: anti-discharge and shock-resistant ABS body</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Output power: 5k volts</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Light power: white</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">LED P</span></span><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder; font-size: 9.5pt;\">ower supply: internal NiMh rechargeable batteries with electric cable</span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Total length: 9.5 cm</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Width: 3.5 cm</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Thickness: 2 cm.</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Weight: 89gr</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Case: black nylon with belt loop</span></span></li></ul>', '<ul style=\"box-sizing: border-box; margin-bottom: 0px; padding-left: 2rem; font-size: 0.875rem; margin-left: 0px; padding-right: 2rem; outline: 0px; list-style: unset; color: rgb(0, 0, 0); font-family: Rubik, sans-serif;\"><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">রিচার্জেবল ইলেকট্রিক শর্ট।পাগলা কুকুর এবং নিজের নিরাপত্তার জন্য ইউজ করতে পারবেন</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Rechargeable Electric Premium High Voltage Torch Light for Security.</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Comes with a cover and a charger</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">High voltage electric</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Ideal for woman self-defense</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Size: 8 Inch</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Volt : 5000</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Body material: anti-discharge and shock-resistant ABS body</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Output power: 5k volts</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Light power: white</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">LED P</span></span><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder; font-size: 9.5pt;\">ower supply: internal NiMh rechargeable batteries with electric cable</span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Total length: 9.5 cm</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Width: 3.5 cm</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Thickness: 2 cm.</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Weight: 89gr</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Case: black nylon with belt loop</span></span></li></ul>', '<ul style=\"box-sizing: border-box; margin-bottom: 0px; padding-left: 2rem; font-size: 0.875rem; margin-left: 0px; padding-right: 2rem; outline: 0px; list-style: unset; color: rgb(0, 0, 0); font-family: Rubik, sans-serif;\"><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">রিচার্জেবল ইলেকট্রিক শর্ট।পাগলা কুকুর এবং নিজের নিরাপত্তার জন্য ইউজ করতে পারবেন</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Rechargeable Electric Premium High Voltage Torch Light for Security.</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Comes with a cover and a charger</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">High voltage electric</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Ideal for woman self-defense</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Size: 8 Inch</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Volt : 5000</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Body material: anti-discharge and shock-resistant ABS body</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Output power: 5k volts</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Light power: white</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">LED P</span></span><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder; font-size: 9.5pt;\">ower supply: internal NiMh rechargeable batteries with electric cable</span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Total length: 9.5 cm</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Width: 3.5 cm</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Thickness: 2 cm.</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Weight: 89gr</span></span></li><li style=\"box-sizing: border-box; line-height: 1.8; margin-bottom: 0px; margin-left: 0px; outline: 0px;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-size: 9.5pt;\"><span style=\"box-sizing: border-box; text-shadow: none; outline: 0px; font-weight: bolder;\">Case: black nylon with belt loop</span></span></li></ul>', '20250601025555-thumbnail-180X178.jpg', '20250601025555-photo-300X370.jpg', NULL, '20250601025555-a2.jpg,20250601025555-a1.jpg', NULL, '100', '1200', '750', 'No', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Self Defence ART NO 801', 'Self Defence ART NO 801', 'Self Defence ART NO 801', NULL, 'Yes', 'Active', '2025-05-31 20:55:55', '2025-05-31 20:55:55'),
(10, 'Blender', 'Nima 2 in 1 Blender', 'nima-2-in-1-blender', '21', '23', NULL, '0', '0', '1', '<p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">লেকট্রিক গ্রাইন্ডার এবং ব্লেন্ডার সকল প্রকার মসলা ব্লেন্ড ও যে কোন ধরনের জুস তৈরি হবে এটা দিয়ে।</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span style=\"box-sizing: border-box; text-shadow: none; font-weight: bolder;\">পন্যের বিবরণ-</span></p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉 সব ধরনের জুস করা যাবে।</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉 পেয়াজ,রসুন,আদা সহ সকল প্রকার মসলা ব্লেন্ডার করা যাবে।</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉 কালোজিরা, শুকনা মরিচ, জিরা, মেথি, সরিষা, গোলমরিচ, এলাচি, দারুচিনি সহ যেকোন ধরনের ডাল, বাদাম ইত্যাদি গুড়া বা পাউডার করা যাবে মাত্র কয়েক সেকেন্ডে।</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉&nbsp; আকর্ষনীয় ডিজাইন</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉&nbsp;স্টেইনলেস স্টিল ব্লেড</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉 শক্তিশালী মটর</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉 পাওয়ার: 200W</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉&nbsp; Motor speed: 14500 R.P.M</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉&nbsp; উচ্চতা: 10 inch</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉 ম্যাটেরিয়ালঃ স্টেইনলেস স্টীল।</p>', '<p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">লেকট্রিক গ্রাইন্ডার এবং ব্লেন্ডার সকল প্রকার মসলা ব্লেন্ড ও যে কোন ধরনের জুস তৈরি হবে এটা দিয়ে।</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span style=\"box-sizing: border-box; text-shadow: none; font-weight: bolder;\">পন্যের বিবরণ-</span></p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉 সব ধরনের জুস করা যাবে।</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉 পেয়াজ,রসুন,আদা সহ সকল প্রকার মসলা ব্লেন্ডার করা যাবে।</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉 কালোজিরা, শুকনা মরিচ, জিরা, মেথি, সরিষা, গোলমরিচ, এলাচি, দারুচিনি সহ যেকোন ধরনের ডাল, বাদাম ইত্যাদি গুড়া বা পাউডার করা যাবে মাত্র কয়েক সেকেন্ডে।</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉&nbsp; আকর্ষনীয় ডিজাইন</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉&nbsp;স্টেইনলেস স্টিল ব্লেড</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉 শক্তিশালী মটর</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉 পাওয়ার: 200W</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉&nbsp; Motor speed: 14500 R.P.M</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉&nbsp; উচ্চতা: 10 inch</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉 ম্যাটেরিয়ালঃ স্টেইনলেস স্টীল।</p>', '<p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">লেকট্রিক গ্রাইন্ডার এবং ব্লেন্ডার সকল প্রকার মসলা ব্লেন্ড ও যে কোন ধরনের জুস তৈরি হবে এটা দিয়ে।</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span style=\"box-sizing: border-box; text-shadow: none; font-weight: bolder;\">পন্যের বিবরণ-</span></p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉 সব ধরনের জুস করা যাবে।</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉 পেয়াজ,রসুন,আদা সহ সকল প্রকার মসলা ব্লেন্ডার করা যাবে।</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉 কালোজিরা, শুকনা মরিচ, জিরা, মেথি, সরিষা, গোলমরিচ, এলাচি, দারুচিনি সহ যেকোন ধরনের ডাল, বাদাম ইত্যাদি গুড়া বা পাউডার করা যাবে মাত্র কয়েক সেকেন্ডে।</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉&nbsp; আকর্ষনীয় ডিজাইন</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉&nbsp;স্টেইনলেস স্টিল ব্লেড</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉 শক্তিশালী মটর</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉 পাওয়ার: 200W</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉&nbsp; Motor speed: 14500 R.P.M</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉&nbsp; উচ্চতা: 10 inch</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉 ম্যাটেরিয়ালঃ স্টেইনলেস স্টীল।</p>', '20250601030359-thumbnail-180X178.jpg', '20250601030359-photo-300X370.jpg', NULL, '20250601030359-a3.jpg,20250601030359-a2.jpg,20250601030359-a1.jpg', NULL, '100', '1150', '999', 'No', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Blender', 'Blender', 'Blender', NULL, 'Yes', 'Active', '2025-05-31 21:03:59', '2025-05-31 21:03:59'),
(11, 'Portable USB Juicer Blender', 'Portable USB Juicer Blender', 'portable-usb-juicer-blender', '21', '23', NULL, '0', '0', '1', '<ul style=\"box-sizing: border-box; padding-left: 1rem; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><li style=\"box-sizing: border-box; line-height: 1.8;\">চলে এসেছে গ্রীষ্মকাল।</li><li style=\"box-sizing: border-box; line-height: 1.8;\">গ্রীষ্মকাল মানেই ফলের মাস।</li><li style=\"box-sizing: border-box; line-height: 1.8;\">গ্রীষ্মকাল নানারকমের রসালো, ঠাণ্ডা, মিষ্টি ফলের সময়; যেমন: আম, তরমুজ, জামরুল, লিচু, কাঁঠাল ইত্যাদি ।</li><li style=\"box-sizing: border-box; line-height: 1.8;\">তাই ফলের জুস বানানোর জন্য নিয়ে এলাম পোর্টেবল জুস মেকার।</li><li style=\"box-sizing: border-box; line-height: 1.8;\">খুব সহজেই বানিয়ে নিতে পারবেন আপনার মনের মতো জুস এই পোর্টেবল ইউএসবি জুস মেকার এর মাধ্যমে।</li><li style=\"box-sizing: border-box; line-height: 1.8;\">স্মল সাইজ</li><li style=\"box-sizing: border-box; line-height: 1.8;\">মাল্টি-ইউজ কাপ/ জুসার ব্লেন্ডার/ পাওয়ার ব্যাংক</li><li style=\"box-sizing: border-box; line-height: 1.8;\">বিভিন্ন ফল ও সব্জী মিক্স করতে পারে</li><li style=\"box-sizing: border-box; line-height: 1.8;\">স্বাস্হ্যসম্মত ও পরিবেশবান্ধব</li><li style=\"box-sizing: border-box; line-height: 1.8;\">নন-টক্সিক ফুড গ্রেড PP/PC ম্যাটেরিয়াল</li><li style=\"box-sizing: border-box; line-height: 1.8;\">ডাবল সেফটি প্রোটেকশন সুইচ</li><li style=\"box-sizing: border-box; line-height: 1.8;\">চার্জ/ ডিসচার্জ প্রোটেকশন</li><li style=\"box-sizing: border-box; line-height: 1.8;\">কুইক স্পিড, ১ মিনিটেই তৈরি হয়ে যায় জুস</li></ul>', '<ul style=\"box-sizing: border-box; padding-left: 1rem; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><li style=\"box-sizing: border-box; line-height: 1.8;\">চলে এসেছে গ্রীষ্মকাল।</li><li style=\"box-sizing: border-box; line-height: 1.8;\">গ্রীষ্মকাল মানেই ফলের মাস।</li><li style=\"box-sizing: border-box; line-height: 1.8;\">গ্রীষ্মকাল নানারকমের রসালো, ঠাণ্ডা, মিষ্টি ফলের সময়; যেমন: আম, তরমুজ, জামরুল, লিচু, কাঁঠাল ইত্যাদি ।</li><li style=\"box-sizing: border-box; line-height: 1.8;\">তাই ফলের জুস বানানোর জন্য নিয়ে এলাম পোর্টেবল জুস মেকার।</li><li style=\"box-sizing: border-box; line-height: 1.8;\">খুব সহজেই বানিয়ে নিতে পারবেন আপনার মনের মতো জুস এই পোর্টেবল ইউএসবি জুস মেকার এর মাধ্যমে।</li><li style=\"box-sizing: border-box; line-height: 1.8;\">স্মল সাইজ</li><li style=\"box-sizing: border-box; line-height: 1.8;\">মাল্টি-ইউজ কাপ/ জুসার ব্লেন্ডার/ পাওয়ার ব্যাংক</li><li style=\"box-sizing: border-box; line-height: 1.8;\">বিভিন্ন ফল ও সব্জী মিক্স করতে পারে</li><li style=\"box-sizing: border-box; line-height: 1.8;\">স্বাস্হ্যসম্মত ও পরিবেশবান্ধব</li><li style=\"box-sizing: border-box; line-height: 1.8;\">নন-টক্সিক ফুড গ্রেড PP/PC ম্যাটেরিয়াল</li><li style=\"box-sizing: border-box; line-height: 1.8;\">ডাবল সেফটি প্রোটেকশন সুইচ</li><li style=\"box-sizing: border-box; line-height: 1.8;\">চার্জ/ ডিসচার্জ প্রোটেকশন</li><li style=\"box-sizing: border-box; line-height: 1.8;\">কুইক স্পিড, ১ মিনিটেই তৈরি হয়ে যায় জুস</li></ul>', '<ul style=\"box-sizing: border-box; padding-left: 1rem; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><li style=\"box-sizing: border-box; line-height: 1.8;\">চলে এসেছে গ্রীষ্মকাল।</li><li style=\"box-sizing: border-box; line-height: 1.8;\">গ্রীষ্মকাল মানেই ফলের মাস।</li><li style=\"box-sizing: border-box; line-height: 1.8;\">গ্রীষ্মকাল নানারকমের রসালো, ঠাণ্ডা, মিষ্টি ফলের সময়; যেমন: আম, তরমুজ, জামরুল, লিচু, কাঁঠাল ইত্যাদি ।</li><li style=\"box-sizing: border-box; line-height: 1.8;\">তাই ফলের জুস বানানোর জন্য নিয়ে এলাম পোর্টেবল জুস মেকার।</li><li style=\"box-sizing: border-box; line-height: 1.8;\">খুব সহজেই বানিয়ে নিতে পারবেন আপনার মনের মতো জুস এই পোর্টেবল ইউএসবি জুস মেকার এর মাধ্যমে।</li><li style=\"box-sizing: border-box; line-height: 1.8;\">স্মল সাইজ</li><li style=\"box-sizing: border-box; line-height: 1.8;\">মাল্টি-ইউজ কাপ/ জুসার ব্লেন্ডার/ পাওয়ার ব্যাংক</li><li style=\"box-sizing: border-box; line-height: 1.8;\">বিভিন্ন ফল ও সব্জী মিক্স করতে পারে</li><li style=\"box-sizing: border-box; line-height: 1.8;\">স্বাস্হ্যসম্মত ও পরিবেশবান্ধব</li><li style=\"box-sizing: border-box; line-height: 1.8;\">নন-টক্সিক ফুড গ্রেড PP/PC ম্যাটেরিয়াল</li><li style=\"box-sizing: border-box; line-height: 1.8;\">ডাবল সেফটি প্রোটেকশন সুইচ</li><li style=\"box-sizing: border-box; line-height: 1.8;\">চার্জ/ ডিসচার্জ প্রোটেকশন</li><li style=\"box-sizing: border-box; line-height: 1.8;\">কুইক স্পিড, ১ মিনিটেই তৈরি হয়ে যায় জুস</li></ul>', '20250601030634-thumbnail-180X178.webp', '20250601030635-photo-300X370.webp', NULL, '20250601030635-b4.jpg,20250601030635-b3.webp,20250601030635-b2.jpg,20250601030635-b1.webp', NULL, '100', '1250', '700', 'No', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Portable USB Juicer Blender', 'Portable USB Juicer Blender', 'Portable USB Juicer Blender', NULL, 'Yes', 'Active', '2025-05-31 21:06:35', '2025-05-31 21:06:35'),
(12, 'New BaEgg Holder Organizer for Refrigerator', 'Egg Holder Organizer for Refrigerator', 'egg-holder-organizer-for-refrigerator', '22', '0', NULL, '0', '0', '1', '<p><span style=\"color: rgb(61, 70, 77); font-family: \" noto=\"\" sans=\"\" bengali\",=\"\" roboto,=\"\" \"sans-serif\";\"=\"\">এ</span><span style=\"color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;; font-size: 1rem;\">আপনার ডিম সাজানোর সকল চাহিদার জন্য রোলিং এগ স্টোরেজ বক্স, যা আপনার রান্নাঘরে বিপ্লব আনবে! এই চতুরভাবে ডিজাইন করা, স্থান সাশ্রয়ী স্টোরেজ বক্স দিয়ে, বিশেষ করে ডিম প্রেমীদের জন্য তৈরি করা হয়েছে যারা শৃঙ্খলা এবং কার্যকারিতাকে মূল্য দেয়।</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text xkrh14z\" style=\"box-sizing: border-box; text-shadow: none;\">মূল বৈশিষ্ট্য এবং সুবিধা:</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text xkrh14z\" style=\"box-sizing: border-box; text-shadow: none;\">উদার ক্ষমতা: ডিমের কার্টনের অনিশ্চিত স্তূপকে বিদায় জানান। আমাদের রোলিং এগ স্টোরেজ বক্সে ৩য় স্তরে ২৫-৩০টি ডিম এবং ২য় স্তরে ১৬-২০টি ডিম আরামে রাখা যায়, যা আপনার সরবরাহকে তাজা এবং সুশৃঙ্খল রাখে।</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text xkrh14z\" style=\"box-sizing: border-box; text-shadow: none;\">উন্নত রোলিং সিস্টেম: একটি ডিম উদ্ধার করা কখনও সহজ ছিল না। মাধ্যাকর্ষণ-প্রবণ রোলিং ডিজাইনের জন্য ধন্যবাদ, আপনার পরবর্তী ডিমটি অ্যাক্সেস করা কেবল একটি কাত দূরে, নিশ্চিত করে যে আপনি সর্বদা সবচেয়ে পুরানো ডিমটি প্রথমে ব্যবহার করবেন।</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text xkrh14z\" style=\"box-sizing: border-box; text-shadow: none;\">কম্প্যাক্ট প্রোফাইল: আধুনিক রান্নাঘরের কথা মাথায় রেখে ডিজাইন করা, রোলিং এগ স্টোরেজ বক্সটি একটি মসৃণ এবং কম্প্যাক্ট আকার ধারণ করে যা নান্দনিকতা বা ক্ষমতা ত্যাগ না করেই আপনার ফ্রিজ বা কাউন্টারটপের স্থানকে সর্বাধিক করে তোলে।</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text xkrh14z\" style=\"box-sizing: border-box; text-shadow: none;\">স্বচ্ছ দৃশ্যমানতা: একটি স্বচ্ছ উপাদান দিয়ে তৈরি, এই স্টোরেজ বক্সটি অনুমানকে দূর করে। আপনি অনায়াসে আপনার ডিমের স্টক এক নজরে দেখতে পারেন, কখন রিফিল করার সময় হয়েছে তা সহজেই জানা যায়।</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text xkrh14z\" style=\"box-sizing: border-box; text-shadow: none;\">দৃঢ় নির্মাণ: স্থায়িত্ব নকশার সাথে মিলে যায়; রোলিং এগ স্টোরেজ বক্সটি টেকসইভাবে তৈরি, উচ্চমানের, BPA-মুক্ত প্লাস্টিক দিয়ে তৈরি যা খাদ্য সংরক্ষণ এবং পরিচালনার জন্য নিরাপদ।</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text xkrh14z\" style=\"box-sizing: border-box; text-shadow: none;\">সহজে পরিষ্কার করা: পরিষ্কার করা সহজ উপকরণ দিয়ে তৈরি, যা আপনার রান্নাঘরের পরিবেশে স্বাস্থ্যবিধিকে অগ্রাধিকার দেয়।</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text xkrh14z\" style=\"box-sizing: border-box; text-shadow: none;\">রোলিং এগ স্টোরেজ বক্স কেবল ব্যবহারিকই নয়; এটি যেকোনো রান্নাঘরের জন্য একটি আড়ম্বরপূর্ণ সংযোজন, যা আপনার বাড়ির হৃদয়ে দক্ষতা এবং আধুনিকতা নিয়ে আসে। আপনি বেকিং প্রেমী হোন বা শুধু একটি ভাল ব্রেকফাস্ট স্ক্র্যাম্বল পছন্দ করেন, রোলিং এগ স্টোরেজ বক্স যেকোনো রান্নাঘরের জন্য একটি নিখুঁত সংযোজন, কার্যকারিতা এবং স্টাইল উভয়ই প্রদান করে।</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text xkrh14z\" style=\"box-sizing: border-box; text-shadow: none;\">একটি পরিপাটি ফ্রিজকে হ্যালো বলুন এবং ডিম-সম্পর্কিত বিশৃঙ্খলাকে বিদায় জানান! বিশৃঙ্খল স্থানকে বিদায় জানান এবং সুবিন্যস্ত, সরল রান্নাঘরের জীবনযাত্রাকে হ্যালো বলুন। আলটিমেট কিচেন অর্গানাইজারের সাথে আপনার রান্নাঘরের খেলাকে উন্নত করতে প্রস্তুত হন। আপনার ডিম আপনাকে ধন্যবাদ জানাবে!</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">&nbsp;</p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text xkrh14z\" style=\"box-sizing: border-box; text-shadow: none;\">আজই আপনার অর্ডার করুন, এবং নিখুঁত ডিম সাজানোর সাথে আসা স্বাচ্ছন্দ্য এবং সরলতা উপভোগ করুন!&nbsp;</span><span class=\"x19la9d6 x1fc57z9 x6ikm8r x10wlt62 x19co3pv x1g5zs5t xfibh0p xiy17q3 x1xsqp64 x1lkfr7t xexx8yu x4uap5 x18d9i69 xkhd6sd\" style=\"box-sizing: border-box; text-shadow: none;\">🥚</span><span class=\"x19la9d6 x1fc57z9 x6ikm8r x10wlt62 x19co3pv x1g5zs5t xfibh0p xiy17q3 x1xsqp64 x1lkfr7t xexx8yu x4uap5 x18d9i69 xkhd6sd\" style=\"box-sizing: border-box; text-shadow: none;\">✨</span></p>', '<p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text xkrh14z\" style=\"box-sizing: border-box; text-shadow: none;\">আপনার ডিম সাজানোর সকল চাহিদার জন্য রোলিং এগ স্টোরেজ বক্স, যা আপনার রান্নাঘরে বিপ্লব আনবে! এই চতুরভাবে ডিজাইন করা, স্থান সাশ্রয়ী স্টোরেজ বক্স দিয়ে, বিশেষ করে ডিম প্রেমীদের জন্য তৈরি করা হয়েছে যারা শৃঙ্খলা এবং কার্যকারিতাকে মূল্য দেয়।</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text xkrh14z\" style=\"box-sizing: border-box; text-shadow: none;\">মূল বৈশিষ্ট্য এবং সুবিধা:</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text xkrh14z\" style=\"box-sizing: border-box; text-shadow: none;\">উদার ক্ষমতা: ডিমের কার্টনের অনিশ্চিত স্তূপকে বিদায় জানান। আমাদের রোলিং এগ স্টোরেজ বক্সে ৩য় স্তরে ২৫-৩০টি ডিম এবং ২য় স্তরে ১৬-২০টি ডিম আরামে রাখা যায়, যা আপনার সরবরাহকে তাজা এবং সুশৃঙ্খল রাখে।</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text xkrh14z\" style=\"box-sizing: border-box; text-shadow: none;\">উন্নত রোলিং সিস্টেম: একটি ডিম উদ্ধার করা কখনও সহজ ছিল না। মাধ্যাকর্ষণ-প্রবণ রোলিং ডিজাইনের জন্য ধন্যবাদ, আপনার পরবর্তী ডিমটি অ্যাক্সেস করা কেবল একটি কাত দূরে, নিশ্চিত করে যে আপনি সর্বদা সবচেয়ে পুরানো ডিমটি প্রথমে ব্যবহার করবেন।</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text xkrh14z\" style=\"box-sizing: border-box; text-shadow: none;\">কম্প্যাক্ট প্রোফাইল: আধুনিক রান্নাঘরের কথা মাথায় রেখে ডিজাইন করা, রোলিং এগ স্টোরেজ বক্সটি একটি মসৃণ এবং কম্প্যাক্ট আকার ধারণ করে যা নান্দনিকতা বা ক্ষমতা ত্যাগ না করেই আপনার ফ্রিজ বা কাউন্টারটপের স্থানকে সর্বাধিক করে তোলে।</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text xkrh14z\" style=\"box-sizing: border-box; text-shadow: none;\">স্বচ্ছ দৃশ্যমানতা: একটি স্বচ্ছ উপাদান দিয়ে তৈরি, এই স্টোরেজ বক্সটি অনুমানকে দূর করে। আপনি অনায়াসে আপনার ডিমের স্টক এক নজরে দেখতে পারেন, কখন রিফিল করার সময় হয়েছে তা সহজেই জানা যায়।</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text xkrh14z\" style=\"box-sizing: border-box; text-shadow: none;\">দৃঢ় নির্মাণ: স্থায়িত্ব নকশার সাথে মিলে যায়; রোলিং এগ স্টোরেজ বক্সটি টেকসইভাবে তৈরি, উচ্চমানের, BPA-মুক্ত প্লাস্টিক দিয়ে তৈরি যা খাদ্য সংরক্ষণ এবং পরিচালনার জন্য নিরাপদ।</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text xkrh14z\" style=\"box-sizing: border-box; text-shadow: none;\">সহজে পরিষ্কার করা: পরিষ্কার করা সহজ উপকরণ দিয়ে তৈরি, যা আপনার রান্নাঘরের পরিবেশে স্বাস্থ্যবিধিকে অগ্রাধিকার দেয়।</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text xkrh14z\" style=\"box-sizing: border-box; text-shadow: none;\">রোলিং এগ স্টোরেজ বক্স কেবল ব্যবহারিকই নয়; এটি যেকোনো রান্নাঘরের জন্য একটি আড়ম্বরপূর্ণ সংযোজন, যা আপনার বাড়ির হৃদয়ে দক্ষতা এবং আধুনিকতা নিয়ে আসে। আপনি বেকিং প্রেমী হোন বা শুধু একটি ভাল ব্রেকফাস্ট স্ক্র্যাম্বল পছন্দ করেন, রোলিং এগ স্টোরেজ বক্স যেকোনো রান্নাঘরের জন্য একটি নিখুঁত সংযোজন, কার্যকারিতা এবং স্টাইল উভয়ই প্রদান করে।</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text xkrh14z\" style=\"box-sizing: border-box; text-shadow: none;\">একটি পরিপাটি ফ্রিজকে হ্যালো বলুন এবং ডিম-সম্পর্কিত বিশৃঙ্খলাকে বিদায় জানান! বিশৃঙ্খল স্থানকে বিদায় জানান এবং সুবিন্যস্ত, সরল রান্নাঘরের জীবনযাত্রাকে হ্যালো বলুন। আলটিমেট কিচেন অর্গানাইজারের সাথে আপনার রান্নাঘরের খেলাকে উন্নত করতে প্রস্তুত হন। আপনার ডিম আপনাকে ধন্যবাদ জানাবে!</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">&nbsp;</p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text xkrh14z\" style=\"box-sizing: border-box; text-shadow: none;\">আজই আপনার অর্ডার করুন, এবং নিখুঁত ডিম সাজানোর সাথে আসা স্বাচ্ছন্দ্য এবং সরলতা উপভোগ করুন!&nbsp;</span><span class=\"x19la9d6 x1fc57z9 x6ikm8r x10wlt62 x19co3pv x1g5zs5t xfibh0p xiy17q3 x1xsqp64 x1lkfr7t xexx8yu x4uap5 x18d9i69 xkhd6sd\" style=\"box-sizing: border-box; text-shadow: none;\">🥚</span><span class=\"x19la9d6 x1fc57z9 x6ikm8r x10wlt62 x19co3pv x1g5zs5t xfibh0p xiy17q3 x1xsqp64 x1lkfr7t xexx8yu x4uap5 x18d9i69 xkhd6sd\" style=\"box-sizing: border-box; text-shadow: none;\">✨</span></p>', NULL, '20250601033224-thumbnail-180X178.webp', '20250601033224-photo-300X370.webp', NULL, '20250601033224-a3.jpg', NULL, '100', '300', '99', 'No', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Egg Holder Organizer for Refrigerator', 'Egg Holder Organizer for Refrigerator', 'Egg Holder Organizer for Refrigerator', NULL, 'Yes', 'Active', '2025-05-31 21:32:24', '2025-05-31 21:45:19'),
(14, 'New Bathroom Shelf Suction Rack Organizer Cup Storage Shower Wall Basket', 'New Bathroom Shelf Suction Rack Organizer Cup Storage Shower Wall Basket', 'new-bathroom-shelf-suction-rack-organizer-cup-storage-shower-wall-basket', '22', '0', NULL, '0', '0', '1', '<p><span style=\"color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">এটি আপনার বাথরুম, রান্নাঘর বা ওয়াশ-বেসিন এলাকায় ব্যবহার করুন। এই শেল্ফটিতে একটি সাকশন কাপ ওয়াল মাউন্ট রয়েছে যাতে হালকা ওজনের বোতল, রান্নাঘরের ছোট আইটেম এবং সাবান এবং শ্যাম্পুগুলির মতো প্রসাধন সামগ্রী রাখার জন্য পর্যাপ্ত লোড বহন করার ক্ষমতা রয়েছে৷ সাকশন কাপ মাউন্ট করা এই শেল্ফটিকে সহজেই ইনস্টল করা যায় এবং এটি ছাড়াই এটি সরানো যায়। আপনার প্রাচীর টাইলস মধ্যে ড্রিল গর্ত ছেড়ে. সাকশন কাপগুলি টাইলস, কাচ, আয়নার মতো মসৃণ শক্ত পৃষ্ঠগুলিতে সঠিকভাবে আটকে থাকতে পারে। আপনার বাথরুম, ওয়াশ-বেসিন বা রান্নাঘরের জন্য সাকশন কাপ শেল্ফ। সাকশন কাপ মাউন্ট: সাকশন কাপ দিয়ে দেয়ালে মাউন্ট করা সহজ। লোড বহন ক্ষমতা ছোট প্রসাধন সামগ্রী বা লাইটওয়েট রান্নাঘরের বোতল এবং বয়ামগুলির জন্য যথেষ্ট। প্রয়োজন না হলে সহজেই আনইনস্টল করা যায় এবং অপসারণ করা যায় - আপনার দেয়ালে ড্রিল ছিদ্র না রেখে।</span></p>', '<p><span style=\"color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">এটি আপনার বাথরুম, রান্নাঘর বা ওয়াশ-বেসিন এলাকায় ব্যবহার করুন। এই শেল্ফটিতে একটি সাকশন কাপ ওয়াল মাউন্ট রয়েছে যাতে হালকা ওজনের বোতল, রান্নাঘরের ছোট আইটেম এবং সাবান এবং শ্যাম্পুগুলির মতো প্রসাধন সামগ্রী রাখার জন্য পর্যাপ্ত লোড বহন করার ক্ষমতা রয়েছে৷ সাকশন কাপ মাউন্ট করা এই শেল্ফটিকে সহজেই ইনস্টল করা যায় এবং এটি ছাড়াই এটি সরানো যায়। আপনার প্রাচীর টাইলস মধ্যে ড্রিল গর্ত ছেড়ে. সাকশন কাপগুলি টাইলস, কাচ, আয়নার মতো মসৃণ শক্ত পৃষ্ঠগুলিতে সঠিকভাবে আটকে থাকতে পারে। আপনার বাথরুম, ওয়াশ-বেসিন বা রান্নাঘরের জন্য সাকশন কাপ শেল্ফ। সাকশন কাপ মাউন্ট: সাকশন কাপ দিয়ে দেয়ালে মাউন্ট করা সহজ। লোড বহন ক্ষমতা ছোট প্রসাধন সামগ্রী বা লাইটওয়েট রান্নাঘরের বোতল এবং বয়ামগুলির জন্য যথেষ্ট। প্রয়োজন না হলে সহজেই আনইনস্টল করা যায় এবং অপসারণ করা যায় - আপনার দেয়ালে ড্রিল ছিদ্র না রেখে।</span></p>', NULL, '20250601034703-thumbnail-180X178.jpg', '20250601034703-photo-300X370.jpg', NULL, '20250601034703-b3.jpg,20250601034703-b2.jpg,20250601034703-b1.jpg', NULL, '100', '350', '99', 'No', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'New Bathroom Shelf Suction Rack Organizer Cup Storage Shower Wall Basket', 'New Bathroom Shelf Suction Rack Organizer Cup Storage Shower Wall Basket', 'New Bathroom Shelf Suction Rack Organizer Cup Storage Shower Wall Basket', NULL, 'Yes', 'Active', '2025-05-31 21:47:03', '2025-05-31 21:47:03');
INSERT INTO `products` (`id`, `sku`, `title`, `slug`, `category_id`, `sub_category_id`, `sub_subcategory_id`, `spacialcat_id`, `brand_id`, `unit_id`, `content`, `specification`, `warrenty`, `thumb`, `images`, `img_alt`, `gallery`, `video`, `qty`, `regular_price`, `sales_price`, `featured`, `color`, `size`, `blade`, `smm_title`, `smm_content`, `smm_images`, `meta_tags`, `meta_title`, `meta_keyword`, `meta_description`, `schema`, `follow`, `status`, `created_at`, `updated_at`) VALUES
(15, 'Portable 2-Tier Basket Drawers', 'Portable 2-Tier Basket Drawers', 'portable-2-tier-basket-drawers', '22', '0', NULL, '0', '0', '1', '<ul style=\"box-sizing: border-box; padding-left: 1rem; font-size: 0.875rem; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, Helvetica, sans-serif;\"><li style=\"box-sizing: border-box; line-height: 1.8;\"><span style=\"font-family: &quot;Times New Roman&quot;;\">﻿</span>Great for organizing kitchen and bathroom cabinets</li><li style=\"box-sizing: border-box; line-height: 1.8;\">Rubber, non-skid feet; sturdy and supportive(4 strong suction cups keep shelves securely in place.)</li><li style=\"box-sizing: border-box; line-height: 1.8;\">Each shelf slides out for easy access to stored articles</li><li style=\"box-sizing: border-box; line-height: 1.8;\">Easy assembly – no tools or DIY required!</li><li style=\"box-sizing: border-box; line-height: 1.8;\">Organizes kitchen and bathroom cabinets(Size: 46cm x 18.5cm x 37.5cm)</li></ul>', '<ul style=\"box-sizing: border-box; padding-left: 1rem; font-size: 0.875rem; color: rgb(51, 51, 51); font-family: &quot;Open Sans&quot;, Helvetica, sans-serif;\"><li style=\"box-sizing: border-box; line-height: 1.8;\">Great for organizing kitchen and bathroom cabinets</li><li style=\"box-sizing: border-box; line-height: 1.8;\">Rubber, non-skid feet; sturdy and supportive(4 strong suction cups keep shelves securely in place.)</li><li style=\"box-sizing: border-box; line-height: 1.8;\">Each shelf slides out for easy access to stored articles</li><li style=\"box-sizing: border-box; line-height: 1.8;\">Easy assembly – no tools or DIY required!</li><li style=\"box-sizing: border-box; line-height: 1.8;\">Organizes kitchen and bathroom cabinets(Size: 46cm x 18.5cm x 37.5cm)<span style=\"font-family: &quot;Times New Roman&quot;;\">﻿</span></li></ul>', NULL, '20250601035023-thumbnail-180X178.jpg', '20250601035023-photo-300X370.jpg', NULL, '20250601035023-c1.jpg', NULL, '100', '1500', '1400', 'No', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Portable 2-Tier Basket Drawers', 'Portable 2-Tier Basket Drawers', 'Portable 2-Tier Basket Drawers', NULL, 'Yes', 'Active', '2025-05-31 21:50:23', '2025-05-31 21:50:23'),
(16, 'Vegetable cutter machine', 'Vegetable cutter machine', 'vegetable-cutter-machine', '22', '0', NULL, '0', '0', '1', '<h1 class=\"product-title\" style=\"box-sizing: border-box; margin-bottom: 10px; font-weight: 600; line-height: 32px; font-size: 24px; text-shadow: none; font-family: \"Open Sans\", Helvetica, sans-serif; color: rgb(51, 51, 51); background-color: rgb(245, 246, 247);\"><span style=\"font-family: \"Times New Roman\";\">﻿</span>Vegetable cutter machine</h1><div><br></div>', '<h1 class=\"product-title\" style=\"box-sizing: border-box; margin-bottom: 10px; font-weight: 600; line-height: 32px; font-size: 24px; text-shadow: none; font-family: \"Open Sans\", Helvetica, sans-serif; color: rgb(51, 51, 51); background-color: rgb(245, 246, 247);\"><span style=\"font-family: \"Times New Roman\";\">﻿</span>Vegetable cutter machine</h1><div><br></div>', NULL, '20250601035248-thumbnail-180X178.jpg', '20250601035248-photo-300X370.jpg', NULL, '20250601035248-d1.jpg', NULL, '100', '1170', '999', 'No', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Vegetable cutter machine', 'Vegetable cutter machine', 'Vegetable cutter machine', NULL, 'Yes', 'Active', '2025-05-31 21:52:48', '2025-05-31 21:55:17'),
(17, 'Kitchen Foam Cleaner', 'Kitchen Foam Cleaner', 'kitchen-foam-cleaner', '22', '0', NULL, '0', '0', '1', '<p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉&nbsp; Kitchen Cleaner স্প্রে দ্বারা আপনি আপনার রান্নাঘর, রান্নকরার প্রয়জনিও সরঞ্জাম, দেয়াল, লেদার, কমোড, টাইলস, বেসিন সব কিছু পরিস্কার করুন সহজেই</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉&nbsp; আপনার বাসার যেকোনো কিছু পরিস্কার করতে ব্যাবহার করুন</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉&nbsp; এটি হতে পারে আপনার তেল কাস্টে বা সব কিছু উঠানোর পারফেক্ট সলিউশন</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉 এটা দিয়ে সব কিছুই পরিষ্কার করতে পারবেন।</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉&nbsp; এটি ফোম তাই অল্প পরিমানে দিলেই কাজ করবে</p>', '<p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉&nbsp; Kitchen Cleaner স্প্রে দ্বারা আপনি আপনার রান্নাঘর, রান্নকরার প্রয়জনিও সরঞ্জাম, দেয়াল, লেদার, কমোড, টাইলস, বেসিন সব কিছু পরিস্কার করুন সহজেই</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉&nbsp; আপনার বাসার যেকোনো কিছু পরিস্কার করতে ব্যাবহার করুন</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉&nbsp; এটি হতে পারে আপনার তেল কাস্টে বা সব কিছু উঠানোর পারফেক্ট সলিউশন</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉 এটা দিয়ে সব কিছুই পরিষ্কার করতে পারবেন।</p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">👉&nbsp; এটি ফোম তাই অল্প পরিমানে দিলেই কাজ করবে</p>', NULL, '20250601040134-thumbnail-180X178.jpg', '20250601040134-photo-300X370.jpg', NULL, '20250601040135-a4.jpg,20250601040135-a3.jpg,20250601040135-a2.jpg,20250601040135-a1.jpg', NULL, '100', '590', '299', 'No', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Kitchen Foam Cleaner', 'Kitchen Foam Cleaner', 'Kitchen Foam Cleaner', NULL, 'Yes', 'Active', '2025-05-31 22:01:35', '2025-05-31 22:01:35'),
(19, 'Bubble Cleaner (1Pcs)', 'Bubble Cleaner (1Pcs)', 'bubble-cleaner-1pcs', '22', '0', NULL, '0', '0', '1', '<p><span style=\"color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">Multi-Purpose Cleaner আপনার বাসার যেকোনো কিছু পরিস্কার করতে এটি ব্যবহার করুন! কিচেন এর এডজাস্ট ফ্যান,চিমনী, ওয়াল ,চুলা ,জানালার গ্রিল অথবা যে কোন কিছু এর তেল-কাস্টে সহজেই পরিস্কার করতে পারবেন। বাথরুম অথবা ঘর এর ফ্লোর টাইলস এর দাগ দূর করতে পারবেন। কিচেন অথবা বাথরুম হবে নতুন এর মত ঝকঝকে । তেল কাস্টে উঠানোর পারফেক্ট সলিউশন। টাইলস পরিস্কার করতে পারবেন। ফ্লোর পরিস্কার করতে পারবেন। থালা-বাসন পরিস্কার করতে পারবেন। গ্লাস ক্লিনার হিসেবে ব্যবহার করতে পারবেন। তেলের দাগ পরিস্কার করতে পারবেন। Weight: 450 ML</span></p>', '<p><span style=\"color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">Multi-Purpose Cleaner আপনার বাসার যেকোনো কিছু পরিস্কার করতে এটি ব্যবহার করুন! কিচেন এর এডজাস্ট ফ্যান,চিমনী, ওয়াল ,চুলা ,জানালার গ্রিল অথবা যে কোন কিছু এর তেল-কাস্টে সহজেই পরিস্কার করতে পারবেন। বাথরুম অথবা ঘর এর ফ্লোর টাইলস এর দাগ দূর করতে পারবেন। কিচেন অথবা বাথরুম হবে নতুন এর মত ঝকঝকে । তেল কাস্টে উঠানোর পারফেক্ট সলিউশন। টাইলস পরিস্কার করতে পারবেন। ফ্লোর পরিস্কার করতে পারবেন। থালা-বাসন পরিস্কার করতে পারবেন। গ্লাস ক্লিনার হিসেবে ব্যবহার করতে পারবেন। তেলের দাগ পরিস্কার করতে পারবেন। Weight: 450 ML</span></p>', NULL, '20250601041003-thumbnail-180X178.jpg', '20250601041003-photo-300X370.jpg', NULL, '20250601041004-c2.jpg,20250601041004-c1.jpg', NULL, '155', '490', '250', 'No', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Bubble Cleaner (1Pcs)', 'Bubble Cleaner (1Pcs)', 'Bubble Cleaner (1Pcs)', NULL, 'Yes', 'Active', '2025-05-31 22:10:04', '2025-05-31 22:10:04'),
(20, 'Multifunctional Rotate Vegetable Slicer with Basket (9 in 1)', 'Multifunctional Rotate Vegetable Slicer with Basket (9 in 1)', 'multifunctional-rotate-vegetable-slicer-with-basket-9-in-1', '22', '0', NULL, '0', '0', '1', '<ul style=\"box-sizing: border-box; padding-left: 1rem; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><li style=\"box-sizing: border-box; line-height: 1.8;\">সহজেই শাকসবজি কাটা ও পরিস্কারের জন্য ব্যাবহার করুন!! আপনার প্রয়োজনীয়তা অনুসারে আপনি আলাদা ছুরির মাথা ব্যবহার করতে পারবেন। ড্রেইন সিস্টেমের মাধ্যমে সরাসরি পরিষ্কার করা যাবে। সাইজ :24*11*11cm ওজন :500g ধারন ক্ষমতা : 2000ML 1X Vegetable Cutter with Drain Basket (8 Dicing Blades)</li></ul>', '<ul style=\"box-sizing: border-box; padding-left: 1rem; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><li style=\"box-sizing: border-box; line-height: 1.8;\">সহজেই শাকসবজি কাটা ও পরিস্কারের জন্য ব্যাবহার করুন!! আপনার প্রয়োজনীয়তা অনুসারে আপনি আলাদা ছুরির মাথা ব্যবহার করতে পারবেন। ড্রেইন সিস্টেমের মাধ্যমে সরাসরি পরিষ্কার করা যাবে। সাইজ :24*11*11cm ওজন :500g ধারন ক্ষমতা : 2000ML 1X Vegetable Cutter with Drain Basket (8 Dicing Blades)</li></ul>', NULL, '20250601041535-thumbnail-180X178.jpg', '20250601041536-photo-300X370.jpg', NULL, '20250601041536-b1.jpg', NULL, '19', '790', '620', 'No', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Multifunctional Rotate Vegetable Slicer with Basket (9 in 1)', 'Multifunctional Rotate Vegetable Slicer with Basket (9 in 1)', 'Multifunctional Rotate Vegetable Slicer with Basket (9 in 1)', NULL, 'Yes', 'Active', '2025-05-31 22:15:36', '2025-05-31 22:15:36'),
(21, 'Electric Mini Juicer', 'Electric Mini Juicer', 'electric-mini-juicer', '22', '0', NULL, '0', '0', '1', '<p><span style=\"color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">সব ধরনের রসালো ফলের জুস করতে পারবেন। ওজনে হালকা তাই বহন করা খুবই সহজ। রিচার্জেবল হওয়ায় বিদুং না থাকলে জুস করা যাবে। বিশেষ করে ছোট ছেলে মেয়ে টাটকা জুস খাওয়ানোর জন্য খুবই দরকারি।</span></p>', '<p><span style=\"color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">সব ধরনের রসালো ফলের জুস করতে পারবেন। ওজনে হালকা তাই বহন করা খুবই সহজ। রিচার্জেবল হওয়ায় বিদুং না থাকলে জুস করা যাবে। বিশেষ করে ছোট ছেলে মেয়ে টাটকা জুস খাওয়ানোর জন্য খুবই দরকারি।</span></p>', NULL, '20250601041720-thumbnail-180X178.webp', '20250601041720-photo-300X370.webp', NULL, '20250601041721-d4.webp,20250601041721-d3.jpg,20250601041721-d2.webp,20250601041721-d1.webp', NULL, '19', '1100', '670', 'No', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Electric Mini Juicer', 'Electric Mini Juicer', 'Electric Mini Juicer', NULL, 'Yes', 'Active', '2025-05-31 22:17:21', '2025-05-31 22:17:21'),
(22, 'Baby Carry Bag', 'Baby Carry Bag', 'baby-carry-bag', '24', '0', NULL, '0', '0', '1', '<p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">6 in 1 multi-function baby carrier Safe, easy and comfortable Can be used in 6 ways Designed for the newborn babies until 30 months old Soft material provide comfortable feeling Load capacity: below 15kg</p><p style=\"box-sizing: border-box; text-shadow: none; font-size: 0.9375rem; line-height: 1.5; color: rgb(52, 58, 64); font-family: &quot;Open Sans&quot;, sans-serif;\">(Colour- Red Colour)</p>', '<p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">6 in 1 multi-function baby carrier Safe, easy and comfortable Can be used in 6 ways Designed for the newborn babies until 30 months old Soft material provide comfortable feeling Load capacity: below 15kg</p><p style=\"box-sizing: border-box; text-shadow: none; font-size: 0.9375rem; line-height: 1.5; color: rgb(52, 58, 64); font-family: &quot;Open Sans&quot;, sans-serif;\">(Colour- Red Colour)</p>', NULL, '20250601044652-thumbnail-180X178.png', '20250601044652-photo-300X370.png', NULL, '20250601044653-a3.jpg,20250601044653-a2.png,20250601044653-a1.png', NULL, '19', '890', '400', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Baby Carry Bag', 'Baby Carry Bag', 'Baby Carry Bag', NULL, 'Yes', 'Active', '2025-05-31 22:46:53', '2025-05-31 22:46:53'),
(23, 'Baby Bouncer with Toys', 'Baby Bouncer with Toys', 'baby-bouncer-with-toys', '24', '0', NULL, '0', '0', '1', '<p><span style=\"color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">টলি বেবি চেয়ার ভাজ করে রাখা যায় চাকা আছে ৪ টা পিছনের ২ চাকায় বেড়ক আছে বেলজীয়াম লোহার খেলনা আছে ৩ টা ঝুনঝুনই , পুতুল , বাঁশী আছে কাটুন আছে সহজে বহন করা যায় ৫বছরের রিপ্লোস করা যাবে ।</span></p>', '<p><span style=\"color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">টলি বেবি চেয়ার ভাজ করে রাখা যায় চাকা আছে ৪ টা পিছনের ২ চাকায় বেড়ক আছে বেলজীয়াম লোহার খেলনা আছে ৩ টা ঝুনঝুনই , পুতুল , বাঁশী আছে কাটুন আছে সহজে বহন করা যায় ৫বছরের রিপ্লোস করা যাবে ।</span></p>', NULL, '20250601044841-thumbnail-180X178.jpg', '20250601044841-photo-300X370.jpg', NULL, '20250601044842-b2.jpeg,20250601044842-b1.jpeg', NULL, '50', '2000', '899', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Baby Bouncer with Toys', 'Baby Bouncer with Toys', 'Baby Bouncer with Toys', NULL, 'Yes', 'Active', '2025-05-31 22:48:42', '2025-05-31 22:48:42'),
(24, 'Lightweight Baby Carrier', 'Lightweight Baby Carrier', 'lightweight-baby-carrier', '24', '0', NULL, '0', '0', '1', '<p><span style=\"color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">লাইটওয়েট বেবী ক্যারিয়ার নবজাতক বা ছোট্ট বাবুকে দীর্ঘক্ষণ বহন করা, বিশেষকরে সদ্য প্রসূত মায়েদের আরামদায়ক ভাবে ছোট্ট শিশুকে দীর্ঘক্ষণ কোলে রাখার জন্য খুবই অসাধারণ একটি পণ্য হলো “ লাইটওয়েট বেবী ক্যারিয়ার “। এটি উন্নতমানের, নরম ও ব্রেথেবল উপাদান দিয়ে তৈরি এবং সকল ঋতুর জন্যই উপযুক্ত। এই ক্যারিয়ারটি খুব হালকা তাই ভাঁজ করে সহজেই বহন করা যায় এবং এটি নার্সিং কভার হিসাবেও ব্যবহার করা যেতে পারে। এটি পরিধান করে যে কোন জায়গায়, বিব্রতকর অবস্থা এড়িয়ে শিশুদের দুগ্ধ পান করাতে পারবেন। এটি শিশুর হাড়ের স্বাভাবিক বিকাশ রক্ষা করে এবং এটি শিশুর নিতম্বের সাথে ভালোভাবে ফিট হয়। এর মাধ্যমে শিশুকে কোলে রেখেই বাড়ির কাজ, চা/কফি পান, কেনাকাটা এবং অন্য শিশুদেরও যত্ন নিতে পারবেন।</span><br style=\"box-sizing: border-box; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"></p>', '<p><span style=\"color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">লাইটওয়েট বেবী ক্যারিয়ার নবজাতক বা ছোট্ট বাবুকে দীর্ঘক্ষণ বহন করা, বিশেষকরে সদ্য প্রসূত মায়েদের আরামদায়ক ভাবে ছোট্ট শিশুকে দীর্ঘক্ষণ কোলে রাখার জন্য খুবই অসাধারণ একটি পণ্য হলো “ লাইটওয়েট বেবী ক্যারিয়ার “। এটি উন্নতমানের, নরম ও ব্রেথেবল উপাদান দিয়ে তৈরি এবং সকল ঋতুর জন্যই উপযুক্ত। এই ক্যারিয়ারটি খুব হালকা তাই ভাঁজ করে সহজেই বহন করা যায় এবং এটি নার্সিং কভার হিসাবেও ব্যবহার করা যেতে পারে। এটি পরিধান করে যে কোন জায়গায়, বিব্রতকর অবস্থা এড়িয়ে শিশুদের দুগ্ধ পান করাতে পারবেন। এটি শিশুর হাড়ের স্বাভাবিক বিকাশ রক্ষা করে এবং এটি শিশুর নিতম্বের সাথে ভালোভাবে ফিট হয়। এর মাধ্যমে শিশুকে কোলে রেখেই বাড়ির কাজ, চা/কফি পান, কেনাকাটা এবং অন্য শিশুদেরও যত্ন নিতে পারবেন।</span><br style=\"box-sizing: border-box; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"></p>', NULL, '20250601045110-thumbnail-180X178.jpg', '20250601045110-photo-300X370.jpg', NULL, '20250601045111-c1.jpg', NULL, '20', '599', '350', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Lightweight Baby Carrier', 'Lightweight Baby Carrier', 'Lightweight Baby Carrier', NULL, 'Yes', 'Active', '2025-05-31 22:51:11', '2025-05-31 22:51:11'),
(25, 'Steel Nail Cutter box-(16ps) Manicure Set.', 'Steel Nail Cutter box-(16ps) Manicure Set.', 'steel-nail-cutter-box-16ps-manicure-set', '25', '0', NULL, '0', '0', '1', '<p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: \"Noto Sans Bengali\", Roboto, \"sans-serif\";\"><span class=\"page_speed_1929793813\" style=\"box-sizing: border-box; text-shadow: none;\">16 pcs Stainless Steel Nail Cutter Clipper Tool Box Set For Personal Care Manicure Set.</span></p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: \"Noto Sans Bengali\", Roboto, \"sans-serif\";\"><span class=\"page_speed_1929793813\" style=\"box-sizing: border-box; text-shadow: none;\">মেনিকিওর এন্ড পেডিকিওর সেট।</span></p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: \"Noto Sans Bengali\", Roboto, \"sans-serif\";\"><span class=\"page_speed_1929793813\" style=\"box-sizing: border-box; text-shadow: none;\">✓হাত এবং পায়ের যত্নের জন্য রয়েছে প্রয়োজনীয় সমস্ত ইকুপমেন্টস।</span></p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: \"Noto Sans Bengali\", Roboto, \"sans-serif\";\"><span class=\"page_speed_1929793813\" style=\"box-sizing: border-box; text-shadow: none;\">✓নেইল কার্টার, কিউটিক্যাল কার্টার,পুশার, ফাইল সব প্রয়োজনীয় সকল ইকুপমেন্টস।</span></p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: \"Noto Sans Bengali\", Roboto, \"sans-serif\";\"><span class=\"page_speed_1929793813\" style=\"box-sizing: border-box; text-shadow: none;\">✓নখ এবং চামড়া কাটা, ঘষা, সমান করা, পরিষ্কার করা সহ যাবতীয় কাজের উপকরণ সমূহ পাবেন এই সেটটিতে।</span></p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: \"Noto Sans Bengali\", Roboto, \"sans-serif\";\"><span class=\"page_speed_1929793813\" style=\"box-sizing: border-box; text-shadow: none;\">Brand and high qualityManicure set.</span></p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: \"Noto Sans Bengali\", Roboto, \"sans-serif\";\"><span class=\"page_speed_1929793813\" style=\"box-sizing: border-box; text-shadow: none;\">-Material: STAINLESS STEEL</span></p>', '<p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: \"Noto Sans Bengali\", Roboto, \"sans-serif\";\"><span class=\"page_speed_1929793813\" style=\"box-sizing: border-box; text-shadow: none;\">16 pcs Stainless Steel Nail Cutter Clipper Tool Box Set For Personal Care Manicure Set.</span></p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: \"Noto Sans Bengali\", Roboto, \"sans-serif\";\"><span class=\"page_speed_1929793813\" style=\"box-sizing: border-box; text-shadow: none;\">মেনিকিওর এন্ড পেডিকিওর সেট।</span></p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: \"Noto Sans Bengali\", Roboto, \"sans-serif\";\"><span class=\"page_speed_1929793813\" style=\"box-sizing: border-box; text-shadow: none;\">✓হাত এবং পায়ের যত্নের জন্য রয়েছে প্রয়োজনীয় সমস্ত ইকুপমেন্টস।</span></p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: \"Noto Sans Bengali\", Roboto, \"sans-serif\";\"><span class=\"page_speed_1929793813\" style=\"box-sizing: border-box; text-shadow: none;\">✓নেইল কার্টার, কিউটিক্যাল কার্টার,পুশার, ফাইল সব প্রয়োজনীয় সকল ইকুপমেন্টস।</span></p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: \"Noto Sans Bengali\", Roboto, \"sans-serif\";\"><span class=\"page_speed_1929793813\" style=\"box-sizing: border-box; text-shadow: none;\">✓নখ এবং চামড়া কাটা, ঘষা, সমান করা, পরিষ্কার করা সহ যাবতীয় কাজের উপকরণ সমূহ পাবেন এই সেটটিতে।</span></p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: \"Noto Sans Bengali\", Roboto, \"sans-serif\";\"><span class=\"page_speed_1929793813\" style=\"box-sizing: border-box; text-shadow: none;\">Brand and high qualityManicure set.</span></p><p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: \"Noto Sans Bengali\", Roboto, \"sans-serif\";\"><span class=\"page_speed_1929793813\" style=\"box-sizing: border-box; text-shadow: none;\">-Material: STAINLESS STEEL</span></p>', NULL, '20250601050300-thumbnail-180X178.jpg', '20250601050300-photo-300X370.jpg', NULL, '20250601050301-a4.jpg,20250601050301-a3.webp,20250601050301-a2.jpg,20250601050301-a1.jpg', NULL, '190', '1190', '800', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Steel Nail Cutter box-(16ps) Manicure Set.', 'Steel Nail Cutter box-(16ps) Manicure Set.', 'Steel Nail Cutter box-(16ps) Manicure Set.', NULL, 'Yes', 'Active', '2025-05-31 23:03:01', '2025-05-31 23:24:00'),
(26, 'Knee Compression Sleeve With Patella Stabilizer Straps', 'Knee Compression Sleeve With Patella Stabilizer Straps', 'knee-compression-sleeve-with-patella-stabilizer-straps', '25', '0', NULL, '0', '0', '1', '<p style=\"box-sizing: border-box; text-shadow: none; font-size: 0.9375rem; line-height: 1.5; color: rgb(52, 58, 64); font-family: &quot;Open Sans&quot;, sans-serif;\"><span style=\"box-sizing: border-box; text-shadow: none; color: rgb(205, 205, 205); font-family: &quot;Google Sans&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(16, 18, 24);\">রক্ত সঞ্চালন উন্নত করে, কম্প্রেশন স্লিভ সাহায্য করে: পা, বাহু এবং জয়েন্টগুলিতে ফোলাভাব কমাতে। রক্ত ​​জমাট বাঁধার ঝুঁকি কমাতে, বিশেষ করে যাদের রক্ত ​​সঞ্চালনের সমস্যা আছে তাদের ক্ষেত্রে। অস্বস্তি এবং শক্ত হয়ে যেতে পারে এমন তরল জমাট বাঁধা রোধ করুন।</span></p><p style=\"box-sizing: border-box; text-shadow: none; font-size: 0.9375rem; line-height: 1.5; color: rgb(52, 58, 64); font-family: &quot;Open Sans&quot;, sans-serif;\"><span style=\"box-sizing: border-box; text-shadow: none; background-color: rgb(16, 18, 24);\"><span style=\"box-sizing: border-box; text-shadow: none; color: rgb(205, 205, 205); font-family: &quot;Google Sans&quot;, Arial, sans-serif;\"><span style=\"box-sizing: border-box; text-shadow: none; font-size: 16px;\">হালকা এবং শ্বাস-প্রশ্বাসের উপযোগী, কাটআউট স্ট্র্যাপগুলি হাঁটুর কাছে চাপযুক্ত 2. উচ্চ ইলাস্টিক কাট-আউট স্ট্র্যাপগুলি, হালকা এবং সুন্দর, মাঝারি চাপ এবং আরাম 3. বৈজ্ঞানিক ফ্যাব্রিক অনুপাত, সূক্ষ্ম ত্বকের যত্ন 4.3D বোনা ফ্যাব্রিক আরামদায়ক, শ্বাস-প্রশ্বাসের উপযোগী এবং চাপযুক্ত, এবং এটি সমস্ত ঋতুতে পরতে আরামদায়ক 5. হাঁটুর চারপাশে সমস্ত দিকে মোড়ানো, পায়ের সকেটের কাছে শক্তভাবে মোড়ানো আরামদায়ক এবং টাইট নয় প্যাকেজ 1 পিসি হাঁটু সাপোর্ট কলার..1.আকাশী নীল..2.বেগুনি</span></span></span></p><p style=\"box-sizing: border-box; text-shadow: none; font-size: 0.9375rem; line-height: 1.5; color: rgb(52, 58, 64); font-family: &quot;Open Sans&quot;, sans-serif;\">&nbsp;</p>', '<p style=\"box-sizing: border-box; text-shadow: none; font-size: 0.9375rem; line-height: 1.5; color: rgb(52, 58, 64); font-family: &quot;Open Sans&quot;, sans-serif;\"><span style=\"box-sizing: border-box; text-shadow: none; color: rgb(205, 205, 205); font-family: &quot;Google Sans&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(16, 18, 24);\">রক্ত সঞ্চালন উন্নত করে, কম্প্রেশন স্লিভ সাহায্য করে: পা, বাহু এবং জয়েন্টগুলিতে ফোলাভাব কমাতে। রক্ত ​​জমাট বাঁধার ঝুঁকি কমাতে, বিশেষ করে যাদের রক্ত ​​সঞ্চালনের সমস্যা আছে তাদের ক্ষেত্রে। অস্বস্তি এবং শক্ত হয়ে যেতে পারে এমন তরল জমাট বাঁধা রোধ করুন।</span></p><p style=\"box-sizing: border-box; text-shadow: none; font-size: 0.9375rem; line-height: 1.5; color: rgb(52, 58, 64); font-family: &quot;Open Sans&quot;, sans-serif;\"><span style=\"box-sizing: border-box; text-shadow: none; background-color: rgb(16, 18, 24);\"><span style=\"box-sizing: border-box; text-shadow: none; color: rgb(205, 205, 205); font-family: &quot;Google Sans&quot;, Arial, sans-serif;\"><span style=\"box-sizing: border-box; text-shadow: none; font-size: 16px;\">হালকা এবং শ্বাস-প্রশ্বাসের উপযোগী, কাটআউট স্ট্র্যাপগুলি হাঁটুর কাছে চাপযুক্ত 2. উচ্চ ইলাস্টিক কাট-আউট স্ট্র্যাপগুলি, হালকা এবং সুন্দর, মাঝারি চাপ এবং আরাম 3. বৈজ্ঞানিক ফ্যাব্রিক অনুপাত, সূক্ষ্ম ত্বকের যত্ন 4.3D বোনা ফ্যাব্রিক আরামদায়ক, শ্বাস-প্রশ্বাসের উপযোগী এবং চাপযুক্ত, এবং এটি সমস্ত ঋতুতে পরতে আরামদায়ক 5. হাঁটুর চারপাশে সমস্ত দিকে মোড়ানো, পায়ের সকেটের কাছে শক্তভাবে মোড়ানো আরামদায়ক এবং টাইট নয় প্যাকেজ 1 পিসি হাঁটু সাপোর্ট কলার..1.আকাশী নীল..2.বেগুনি</span></span></span></p><p style=\"box-sizing: border-box; text-shadow: none; font-size: 0.9375rem; line-height: 1.5; color: rgb(52, 58, 64); font-family: &quot;Open Sans&quot;, sans-serif;\">&nbsp;</p>', '<p style=\"box-sizing: border-box; text-shadow: none; font-size: 0.9375rem; line-height: 1.5; color: rgb(52, 58, 64); font-family: &quot;Open Sans&quot;, sans-serif;\"><span style=\"box-sizing: border-box; text-shadow: none; color: rgb(205, 205, 205); font-family: &quot;Google Sans&quot;, Arial, sans-serif; font-size: 16px; background-color: rgb(16, 18, 24);\">রক্ত সঞ্চালন উন্নত করে, কম্প্রেশন স্লিভ সাহায্য করে: পা, বাহু এবং জয়েন্টগুলিতে ফোলাভাব কমাতে। রক্ত ​​জমাট বাঁধার ঝুঁকি কমাতে, বিশেষ করে যাদের রক্ত ​​সঞ্চালনের সমস্যা আছে তাদের ক্ষেত্রে। অস্বস্তি এবং শক্ত হয়ে যেতে পারে এমন তরল জমাট বাঁধা রোধ করুন।</span></p><p style=\"box-sizing: border-box; text-shadow: none; font-size: 0.9375rem; line-height: 1.5; color: rgb(52, 58, 64); font-family: &quot;Open Sans&quot;, sans-serif;\"><span style=\"box-sizing: border-box; text-shadow: none; background-color: rgb(16, 18, 24);\"><span style=\"box-sizing: border-box; text-shadow: none; color: rgb(205, 205, 205); font-family: &quot;Google Sans&quot;, Arial, sans-serif;\"><span style=\"box-sizing: border-box; text-shadow: none; font-size: 16px;\">হালকা এবং শ্বাস-প্রশ্বাসের উপযোগী, কাটআউট স্ট্র্যাপগুলি হাঁটুর কাছে চাপযুক্ত 2. উচ্চ ইলাস্টিক কাট-আউট স্ট্র্যাপগুলি, হালকা এবং সুন্দর, মাঝারি চাপ এবং আরাম 3. বৈজ্ঞানিক ফ্যাব্রিক অনুপাত, সূক্ষ্ম ত্বকের যত্ন 4.3D বোনা ফ্যাব্রিক আরামদায়ক, শ্বাস-প্রশ্বাসের উপযোগী এবং চাপযুক্ত, এবং এটি সমস্ত ঋতুতে পরতে আরামদায়ক 5. হাঁটুর চারপাশে সমস্ত দিকে মোড়ানো, পায়ের সকেটের কাছে শক্তভাবে মোড়ানো আরামদায়ক এবং টাইট নয় প্যাকেজ 1 পিসি হাঁটু সাপোর্ট কলার..1.আকাশী নীল..2.বেগুনি</span></span></span></p><p style=\"box-sizing: border-box; text-shadow: none; font-size: 0.9375rem; line-height: 1.5; color: rgb(52, 58, 64); font-family: &quot;Open Sans&quot;, sans-serif;\">&nbsp;</p>', '20250601050532-thumbnail-180X178.jpg', '20250601050532-photo-300X370.jpg', NULL, '20250601050533-b4.jpg,20250601050533-b3.jpg,20250601050533-b2.jpg,20250601050533-b1.jpg', NULL, '19', '800', '400', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Knee Compression Sleeve With Patella Stabilizer Straps', 'Knee Compression Sleeve With Patella Stabilizer Straps', 'Knee Compression Sleeve With Patella Stabilizer Straps', NULL, 'Yes', 'Active', '2025-05-31 23:05:33', '2025-05-31 23:05:33'),
(27, 'Smart Sensor Corrector', 'Smart Sensor Corrector', 'smart-sensor-corrector', '25', '0', NULL, '0', '0', '1', '<ul style=\"box-sizing: border-box; padding-left: 1rem; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><li style=\"box-sizing: border-box; line-height: 1.8;\">Intelligent Posture Corrector</li><li style=\"box-sizing: border-box; line-height: 1.8;\">Posture Corrector for Men and Women Kids with Smart Sensor Vibration Reminder</li><li style=\"box-sizing: border-box; line-height: 1.8;\">Help straight postures for posture correction</li><li style=\"box-sizing: border-box; line-height: 1.8;\">Pulling back the shoulder strap improves and corrects bad posture</li><li style=\"box-sizing: border-box; line-height: 1.8;\">Stable support for the upper body, relieves back, neck, and shoulder pain</li><li style=\"box-sizing: border-box; line-height: 1.8;\">It reminds sit or stand up straight with a real-time gentle vibration reminder.</li><li style=\"box-sizing: border-box; line-height: 1.8;\">Project confidence, never slouch again</li><li style=\"box-sizing: border-box; line-height: 1.8;\">Adjustable &amp; easy to put on</li><li style=\"box-sizing: border-box; line-height: 1.8;\">One size fits most (applies to around 25-53’’ chest sizes)</li><li style=\"box-sizing: border-box; line-height: 1.8;\">Working voltage: 5V, Rated power: 0.4W, USB charging</li><li style=\"box-sizing: border-box; line-height: 1.8;\">Material: ABS+ high strength elastic nylon belt, Weight- 85g</li></ul><table class=\"table tab table-hover\" style=\"box-sizing: border-box; width: 1090px; color: rgb(61, 70, 77); background-color: rgb(255, 255, 255); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><tbody style=\"box-sizing: border-box;\"><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">Item</td><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">Smart Sensor Corrector&nbsp;</td></tr><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">Type</td><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">Back Posture Corrector</td></tr><tr style=\"box-sizing: border-box; color: rgb(33, 37, 41); background-color: rgb(236, 240, 244);\"><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">Targeted Group</td><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">Adults And Kids</td></tr><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">Working voltage</td><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">5V</td></tr><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">Rated power</td><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">0.4W</td></tr><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">charging Type</td><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">USB&nbsp;charging</td></tr><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">Material</td><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">ABS+ high strength elastic nylon belt</td></tr><tr style=\"box-sizing: border-box; background-color: rgba(0, 0, 0, 0.075);\"><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">Weight</td><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">85g</td></tr></tbody></table>', '<ul style=\"box-sizing: border-box; padding-left: 1rem; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><li style=\"box-sizing: border-box; line-height: 1.8;\">Intelligent Posture Corrector</li><li style=\"box-sizing: border-box; line-height: 1.8;\">Posture Corrector for Men and Women Kids with Smart Sensor Vibration Reminder</li><li style=\"box-sizing: border-box; line-height: 1.8;\">Help straight postures for posture correction</li><li style=\"box-sizing: border-box; line-height: 1.8;\">Pulling back the shoulder strap improves and corrects bad posture</li><li style=\"box-sizing: border-box; line-height: 1.8;\">Stable support for the upper body, relieves back, neck, and shoulder pain</li><li style=\"box-sizing: border-box; line-height: 1.8;\">It reminds sit or stand up straight with a real-time gentle vibration reminder.</li><li style=\"box-sizing: border-box; line-height: 1.8;\">Project confidence, never slouch again</li><li style=\"box-sizing: border-box; line-height: 1.8;\">Adjustable &amp; easy to put on</li><li style=\"box-sizing: border-box; line-height: 1.8;\">One size fits most (applies to around 25-53’’ chest sizes)</li><li style=\"box-sizing: border-box; line-height: 1.8;\">Working voltage: 5V, Rated power: 0.4W, USB charging</li><li style=\"box-sizing: border-box; line-height: 1.8;\">Material: ABS+ high strength elastic nylon belt, Weight- 85g</li></ul><table class=\"table tab table-hover\" style=\"box-sizing: border-box; width: 1090px; color: rgb(61, 70, 77); background-color: rgb(255, 255, 255); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><tbody style=\"box-sizing: border-box;\"><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">Item</td><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">Smart Sensor Corrector&nbsp;</td></tr><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">Type</td><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">Back Posture Corrector</td></tr><tr style=\"box-sizing: border-box; color: rgb(33, 37, 41); background-color: rgb(236, 240, 244);\"><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">Targeted Group</td><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">Adults And Kids</td></tr><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">Working voltage</td><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">5V</td></tr><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">Rated power</td><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">0.4W</td></tr><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">charging Type</td><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">USB&nbsp;charging</td></tr><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">Material</td><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">ABS+ high strength elastic nylon belt</td></tr><tr style=\"box-sizing: border-box; background-color: rgba(0, 0, 0, 0.075);\"><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">Weight</td><td style=\"box-sizing: border-box; border-top-color: rgb(222, 226, 230); font-size: 0.875rem; line-height: 1; text-wrap-mode: nowrap;\">85g</td></tr></tbody></table>', NULL, '20250601050821-thumbnail-180X178.jpg', '20250601050821-photo-300X370.jpg', NULL, '20250601050821-c1.jpg', NULL, '19', '250', '200', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Smart Sensor Corrector', 'Smart Sensor Corrector', 'Smart Sensor Corrector', NULL, 'Yes', 'Active', '2025-05-31 23:08:21', '2025-05-31 23:08:21'),
(28, 'T9 Trimmer New', 'T9 Trimmer New', 't9-trimmer-new', '25', '0', NULL, '0', '0', '1', '<p><span style=\"color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">আমাদের প্রোডাক্ট অরিজিনাল কপার কয়েলের। ✅ একবার ফুল চার্জে ২ ঘন্টা ব্যবহার করা যায়। ✅ আকর্ষনীয় ডিজাইন। শক্তিশালী মটর ✅ ০/১/২/৩/৪ এই ৫ সাইজে দাড়ি/চুল কাটা যায়। ✅ সম্পুর্ন মেটালের তৈরী পিওর গোল্ডেন কালার। ✅ সংগে থাকছে ব্যাটারী, চার্জার, ৪ রকমের ক্লিপ, ব্রাশ।</span></p>', '<p><span style=\"color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">আমাদের প্রোডাক্ট অরিজিনাল কপার কয়েলের। ✅ একবার ফুল চার্জে ২ ঘন্টা ব্যবহার করা যায়। ✅ আকর্ষনীয় ডিজাইন। শক্তিশালী মটর ✅ ০/১/২/৩/৪ এই ৫ সাইজে দাড়ি/চুল কাটা যায়। ✅ সম্পুর্ন মেটালের তৈরী পিওর গোল্ডেন কালার। ✅ সংগে থাকছে ব্যাটারী, চার্জার, ৪ রকমের ক্লিপ, ব্রাশ।</span></p>', NULL, '20250601051015-thumbnail-180X178.jpg', '20250601051015-photo-300X370.jpg', NULL, '20250601051016-d3.jpg,20250601051016-d2.webp,20250601051016-d1.jpg', NULL, '19', '900', '599', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'T9 Trimmer New', 'T9 Trimmer New', 'T9 Trimmer New', NULL, 'Yes', 'Active', '2025-05-31 23:10:16', '2025-05-31 23:10:16'),
(29, 'Original Men Anti-Theft Waterproof Crossbody Bag', 'Original Men Anti-Theft Waterproof Crossbody Bag', 'original-men-anti-theft-waterproof-crossbody-bag', '26', '0', NULL, '0', '0', '1', '<ul style=\"box-sizing: border-box; padding-left: 1rem; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><li style=\"box-sizing: border-box; line-height: 1.8;\"><span data-spm-anchor-id=\"a2o4l.pdp_revamp.product_detail.i1.5b265e44ef5qKj\" style=\"box-sizing: border-box; text-shadow: none;\">Lining Material：Polyester</span></li><li style=\"box-sizing: border-box; line-height: 1.8;\"><div data-spm-anchor-id=\"a2o4l.pdp_revamp.product_detail.i2.5b265e44ef5qKj\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">Hardness：HARD</div></li><li style=\"box-sizing: border-box; line-height: 1.8;\"><div data-spm-anchor-id=\"a2o4l.pdp_revamp.product_detail.i3.5b265e44ef5qKj\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">Pattern Type：Solid</div></li><li style=\"box-sizing: border-box; line-height: 1.8;\"><div data-spm-anchor-id=\"a2o4l.pdp_revamp.product_detail.i4.5b265e44ef5qKj\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">Exterior：Silt Pocket</div></li><li style=\"box-sizing: border-box; line-height: 1.8;\"><div data-spm-anchor-id=\"a2o4l.pdp_revamp.product_detail.i5.5b265e44ef5qKj\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">Closure Type：zipper</div></li><li style=\"box-sizing: border-box; line-height: 1.8;\"><div data-spm-anchor-id=\"a2o4l.pdp_revamp.product_detail.i6.5b265e44ef5qKj\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">Gender：MEN</div></li><li style=\"box-sizing: border-box; line-height: 1.8;\"><div data-spm-anchor-id=\"a2o4l.pdp_revamp.product_detail.i7.5b265e44ef5qKj\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">Style：Casual</div></li><li style=\"box-sizing: border-box; line-height: 1.8;\"><div data-spm-anchor-id=\"a2o4l.pdp_revamp.product_detail.i8.5b265e44ef5qKj\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">bag for man：chest bag</div></li><li style=\"box-sizing: border-box; line-height: 1.8;\"><div data-spm-anchor-id=\"a2o4l.pdp_revamp.product_detail.i9.5b265e44ef5qKj\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">men bag：crossbody bag</div></li><li style=\"box-sizing: border-box; line-height: 1.8;\"><span data-spm-anchor-id=\"a2o4l.pdp_revamp.product_detail.i1.5b265e44ef5qKj\" style=\"box-sizing: border-box; text-shadow: none;\">100% waterproof</span></li><li style=\"box-sizing: border-box; line-height: 1.8;\"><span data-spm-anchor-id=\"a2o4l.pdp_revamp.product_detail.i1.5b265e44ef5qKj\" style=\"box-sizing: border-box; text-shadow: none;\">Zipper Lock System</span></li><li style=\"box-sizing: border-box; line-height: 1.8;\"><span data-spm-anchor-id=\"a2o4l.pdp_revamp.product_detail.i1.5b265e44ef5qKj\" style=\"box-sizing: border-box; text-shadow: none;\">Size : 32cm x 16cm x 6cm</span></li><li style=\"box-sizing: border-box; line-height: 1.8;\"><span data-spm-anchor-id=\"a2o4l.pdp_revamp.product_detail.i1.5b265e44ef5qKj\" style=\"box-sizing: border-box; text-shadow: none;\">Original China product</span></li></ul>', '<ul style=\"box-sizing: border-box; padding-left: 1rem; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><li style=\"box-sizing: border-box; line-height: 1.8;\"><span data-spm-anchor-id=\"a2o4l.pdp_revamp.product_detail.i1.5b265e44ef5qKj\" style=\"box-sizing: border-box; text-shadow: none;\">Lining Material：Polyester</span></li><li style=\"box-sizing: border-box; line-height: 1.8;\"><div data-spm-anchor-id=\"a2o4l.pdp_revamp.product_detail.i2.5b265e44ef5qKj\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">Hardness：HARD</div></li><li style=\"box-sizing: border-box; line-height: 1.8;\"><div data-spm-anchor-id=\"a2o4l.pdp_revamp.product_detail.i3.5b265e44ef5qKj\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">Pattern Type：Solid</div></li><li style=\"box-sizing: border-box; line-height: 1.8;\"><div data-spm-anchor-id=\"a2o4l.pdp_revamp.product_detail.i4.5b265e44ef5qKj\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">Exterior：Silt Pocket</div></li><li style=\"box-sizing: border-box; line-height: 1.8;\"><div data-spm-anchor-id=\"a2o4l.pdp_revamp.product_detail.i5.5b265e44ef5qKj\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">Closure Type：zipper</div></li><li style=\"box-sizing: border-box; line-height: 1.8;\"><div data-spm-anchor-id=\"a2o4l.pdp_revamp.product_detail.i6.5b265e44ef5qKj\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">Gender：MEN</div></li><li style=\"box-sizing: border-box; line-height: 1.8;\"><div data-spm-anchor-id=\"a2o4l.pdp_revamp.product_detail.i7.5b265e44ef5qKj\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">Style：Casual</div></li><li style=\"box-sizing: border-box; line-height: 1.8;\"><div data-spm-anchor-id=\"a2o4l.pdp_revamp.product_detail.i8.5b265e44ef5qKj\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">bag for man：chest bag</div></li><li style=\"box-sizing: border-box; line-height: 1.8;\"><div data-spm-anchor-id=\"a2o4l.pdp_revamp.product_detail.i9.5b265e44ef5qKj\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">men bag：crossbody bag</div></li><li style=\"box-sizing: border-box; line-height: 1.8;\"><span data-spm-anchor-id=\"a2o4l.pdp_revamp.product_detail.i1.5b265e44ef5qKj\" style=\"box-sizing: border-box; text-shadow: none;\">100% waterproof</span></li><li style=\"box-sizing: border-box; line-height: 1.8;\"><span data-spm-anchor-id=\"a2o4l.pdp_revamp.product_detail.i1.5b265e44ef5qKj\" style=\"box-sizing: border-box; text-shadow: none;\">Zipper Lock System</span></li><li style=\"box-sizing: border-box; line-height: 1.8;\"><span data-spm-anchor-id=\"a2o4l.pdp_revamp.product_detail.i1.5b265e44ef5qKj\" style=\"box-sizing: border-box; text-shadow: none;\">Size : 32cm x 16cm x 6cm</span></li><li style=\"box-sizing: border-box; line-height: 1.8;\"><span data-spm-anchor-id=\"a2o4l.pdp_revamp.product_detail.i1.5b265e44ef5qKj\" style=\"box-sizing: border-box; text-shadow: none;\">Original China product</span></li></ul>', NULL, '20250601094508-thumbnail-180X178.jpg', '20250601094508-photo-300X370.jpg', NULL, '20250601094508-a1.jpg', NULL, '20', '1000', '800', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Original Men Anti-Theft Waterproof Crossbody Bag', 'Bag', 'Original Men Anti-Theft Waterproof Crossbody Bag', NULL, 'Yes', 'Active', '2025-06-01 03:45:08', '2025-06-01 03:45:08'),
(30, 'Laptop Bag & College Bag', 'Laptop Bag & College Bag', 'laptop-bag-college-bag', '26', '0', NULL, '0', '0', '1', '<p><span style=\"color: rgb(61, 70, 77); font-family: \"Noto Sans Bengali\", Roboto, \"sans-serif\";\">অনলাইন কালেকশনের অনেক ব্যাগের মাঝে, জনপ্রিয় আরট্রিক হ্যানটারের কলেজ ব্যাগ। এই ব্যাগটি এত সুন্দর, এত প্রিমিয়াম কোয়ালিটি যে, ব্যাগটি ব্যাবহার করলে আপনাকে স্মার্ট লাগবে। ব্যাগটিতে আছে, দুটি পাট, বহন করার জন্য দু টি হাতল, আছে হেট ফোন পয়েন্ট, ব্যাগটিতে ব্যাবহার করা হয়েছে উন্নত মানের শ্যলন কাপড়, প্রিমিয়াম কোয়ালিটি রানার, জিপার, কমফোর্ট। ব্যাগটি ২ বছরের ওয়ারেনটি পাবেন। তাই আর দেরি না করে এখনি অর্ডার করুন।</span></p>', '<p><span style=\"color: rgb(61, 70, 77); font-family: \"Noto Sans Bengali\", Roboto, \"sans-serif\";\">অনলাইন কালেকশনের অনেক ব্যাগের মাঝে, জনপ্রিয় আরট্রিক হ্যানটারের কলেজ ব্যাগ। এই ব্যাগটি এত সুন্দর, এত প্রিমিয়াম কোয়ালিটি যে, ব্যাগটি ব্যাবহার করলে আপনাকে স্মার্ট লাগবে। ব্যাগটিতে আছে, দুটি পাট, বহন করার জন্য দু টি হাতল, আছে হেট ফোন পয়েন্ট, ব্যাগটিতে ব্যাবহার করা হয়েছে উন্নত মানের শ্যলন কাপড়, প্রিমিয়াম কোয়ালিটি রানার, জিপার, কমফোর্ট। ব্যাগটি ২ বছরের ওয়ারেনটি পাবেন। তাই আর দেরি না করে এখনি অর্ডার করুন।</span></p>', NULL, '20250601094823-thumbnail-180X178.jpg', '20250601094823-photo-300X370.jpg', NULL, '20250601094823-b2.jpg,20250601094823-b1.jpg', NULL, '19', '999', '850', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Laptop Bag & College Bag', 'Laptop Bag & College Bag', 'Laptop Bag & College Bag', NULL, 'Yes', 'Active', '2025-06-01 03:48:23', '2025-06-01 04:11:04'),
(31, 'Retro Belt Waist Fashionable Bag (Blue)', 'Retro Belt Waist Fashionable Bag (Blue)', 'retro-belt-waist-fashionable-bag-blue', '26', '0', NULL, '0', '0', '1', '<p><span style=\"color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">খুব সহজে বেল্ট এর সাথে রাখা যায়। কালো, কফি, নিল কালার পাবেন। স্মার্ট লুক। লেদার এর বানানো। বাইরে বের আমাদের হতেই হয়। সাথে করে নিয়ে যেতে হয় মোবাইল, চাবির রিং সহ গুরুত্বপূর্ণ জিনিস আর আমাদের ভয় থাকে এগুলা হারিয়ে যাওয়ার। এই ভয় থেকে আপনাকে নিশ্চিত রাখবে এই ব্যাগ। বিদেশি ভাইদের পাসপোর্ট অনেক গুরুত্বপূর্ণ। সুতরাং হারিয়ে যাওয়ার ভয় নয়।</span></p>', '<p><span style=\"color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">খুব সহজে বেল্ট এর সাথে রাখা যায়। কালো, কফি, নিল কালার পাবেন। স্মার্ট লুক। লেদার এর বানানো। বাইরে বের আমাদের হতেই হয়। সাথে করে নিয়ে যেতে হয় মোবাইল, চাবির রিং সহ গুরুত্বপূর্ণ জিনিস আর আমাদের ভয় থাকে এগুলা হারিয়ে যাওয়ার। এই ভয় থেকে আপনাকে নিশ্চিত রাখবে এই ব্যাগ। বিদেশি ভাইদের পাসপোর্ট অনেক গুরুত্বপূর্ণ। সুতরাং হারিয়ে যাওয়ার ভয় নয়।</span></p>', NULL, '20250601095016-thumbnail-180X178.jpg', '20250601095016-photo-300X370.jpg', NULL, '20250601095016-c2.jpg,20250601095016-c1.jpg', NULL, '19', '590', '400', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Retro Belt Waist Fashionable Bag (Blue)', 'Retro Belt Waist Fashionable Bag (Blue)', 'Retro Belt Waist Fashionable Bag (Blue)', NULL, 'Yes', 'Active', '2025-06-01 03:50:16', '2025-06-01 03:50:16'),
(32, '3 In 1 Large Capacity Foldable Travel Gym Bag', '3 In 1 Large Capacity Foldable Travel Gym Bag', '3-in-1-large-capacity-foldable-travel-gym-bag', '26', '0', NULL, '0', '0', '1', '<h1 class=\"product-title\" style=\"box-sizing: border-box; margin-bottom: 10px; font-weight: 600; line-height: 32px; font-size: 24px; text-shadow: none; font-family: &quot;Open Sans&quot;, Helvetica, sans-serif; color: rgb(51, 51, 51); background-color: rgb(245, 246, 247);\">3 In 1 Large Capacity Foldable Travel Gym Bag</h1>', '<h1 class=\"product-title\" style=\"box-sizing: border-box; margin-bottom: 10px; font-weight: 600; line-height: 32px; font-size: 24px; text-shadow: none; font-family: &quot;Open Sans&quot;, Helvetica, sans-serif; color: rgb(51, 51, 51); background-color: rgb(245, 246, 247);\">3 In 1 Large Capacity Foldable Travel Gym Bag</h1>', NULL, '20250601095248-thumbnail-180X178.jpg', '20250601095248-photo-300X370.jpg', NULL, '20250601095248-d4.jpg,20250601095248-d3.jpg,20250601095248-d2.jpg,20250601095248-d1.jpg', NULL, '17', '1200', '1000', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '4', '3 In 1 Large Capacity Foldable Travel Gym Bag', '3 In 1 Large Capacity Foldable Travel Gym Bag', '3 In 1 Large Capacity Foldable Travel Gym Bag', NULL, 'Yes', 'Active', '2025-06-01 03:52:48', '2025-06-01 03:52:48');
INSERT INTO `products` (`id`, `sku`, `title`, `slug`, `category_id`, `sub_category_id`, `sub_subcategory_id`, `spacialcat_id`, `brand_id`, `unit_id`, `content`, `specification`, `warrenty`, `thumb`, `images`, `img_alt`, `gallery`, `video`, `qty`, `regular_price`, `sales_price`, `featured`, `color`, `size`, `blade`, `smm_title`, `smm_content`, `smm_images`, `meta_tags`, `meta_title`, `meta_keyword`, `meta_description`, `schema`, `follow`, `status`, `created_at`, `updated_at`) VALUES
(33, 'Vaccuum Flask Set Drinking Water Bottle', 'Vaccuum Flask Set Drinking Water Bottle', 'vaccuum-flask-set-drinking-water-bottle', '28', '0', NULL, '0', '0', '1', '<p class=\"page_speed_1815137207\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;; background-color: rgb(248, 249, 250);\">স্মার্ট Vacuum Flask Set এর মাধ্যমে আপনি গরম পানি বা ঠান্ডা পানি রাখতে পারবেন ।</p><p class=\"page_speed_1815137207\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;; background-color: rgb(248, 249, 250);\">যাদের বার বার গরম পানি খাওয়ার অভ্যাস। এছাড়া চা-কফি নিয়মিত খান!! তাদের জন্য এই স্মার্ট Vacuum Flask Setটি খুবই প্রয়োজন ।<br style=\"box-sizing: border-box;\">এই Vacuum Flask সেটের সাথে তিনটি টেম্পারেচার আকর্ষণীয় মগ রয়েছে। যার কারণে আলাদা করে মগ বা কাপে প্রয়োজন নেই ।<br style=\"box-sizing: border-box;\">ব্যবহার করতে পারবেন আপনার সকল কাজের সময়, দূরে ভ্রমণের সময়, ড্রাইভ করার সময়, স্কুল কলেজে যাওয়ার সময়, অফিসে যাবার সময়।<br style=\"box-sizing: border-box;\">বাচ্চাদের গরম পানি এবং দুধ রাখতে পারবেন যা সাধারণ ফ্লাক্স থেকে ঘন্টার পর ঘন্টা গরম থাকবে।<br style=\"box-sizing: border-box;\">ফ্লাক্সটির ম্যাটেরিয়াল স্টেনলেস স্টিল হওয়াতে মরিচা পড়ার কোন ভয় নেই এছাড়া অত্যধিক টেকসই ও মজবুত ।<br style=\"box-sizing: border-box;\">চা কফি পানি ধারণক্ষমতা 500 মিলি ।<br style=\"box-sizing: border-box;\">একটি সাধারন ফ্লাক্স থেকে কয়েক গুণ বেশি পানি গরম রাখতে সক্ষম ।<br style=\"box-sizing: border-box;\">সাধারণ ফ্লাক্স এর মত পড়ে গেলেই ভেঙ্গে যাওয়ার চান্স নেই ।<br style=\"box-sizing: border-box;\">ঠান্ডা এবং গরম ভিতরে যায় থাকবে তা সাধারণ ফ্লাক্স থেকে কয়েকগুণ বেশি গরম থাকবে।<br style=\"box-sizing: border-box;\">অত্যন্ত আকর্ষণীয় ডিজাইন হওয়াতে আপনি উপহার হিসেবে গিফট করতে পারবেন।</p>', '<p class=\"page_speed_1815137207\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;; background-color: rgb(248, 249, 250);\">স্মার্ট Vacuum Flask Set এর মাধ্যমে আপনি গরম পানি বা ঠান্ডা পানি রাখতে পারবেন ।</p><p class=\"page_speed_1815137207\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;; background-color: rgb(248, 249, 250);\">যাদের বার বার গরম পানি খাওয়ার অভ্যাস। এছাড়া চা-কফি নিয়মিত খান!! তাদের জন্য এই স্মার্ট Vacuum Flask Setটি খুবই প্রয়োজন ।<br style=\"box-sizing: border-box;\">এই Vacuum Flask সেটের সাথে তিনটি টেম্পারেচার আকর্ষণীয় মগ রয়েছে। যার কারণে আলাদা করে মগ বা কাপে প্রয়োজন নেই ।<br style=\"box-sizing: border-box;\">ব্যবহার করতে পারবেন আপনার সকল কাজের সময়, দূরে ভ্রমণের সময়, ড্রাইভ করার সময়, স্কুল কলেজে যাওয়ার সময়, অফিসে যাবার সময়।<br style=\"box-sizing: border-box;\">বাচ্চাদের গরম পানি এবং দুধ রাখতে পারবেন যা সাধারণ ফ্লাক্স থেকে ঘন্টার পর ঘন্টা গরম থাকবে।<br style=\"box-sizing: border-box;\">ফ্লাক্সটির ম্যাটেরিয়াল স্টেনলেস স্টিল হওয়াতে মরিচা পড়ার কোন ভয় নেই এছাড়া অত্যধিক টেকসই ও মজবুত ।<br style=\"box-sizing: border-box;\">চা কফি পানি ধারণক্ষমতা 500 মিলি ।<br style=\"box-sizing: border-box;\">একটি সাধারন ফ্লাক্স থেকে কয়েক গুণ বেশি পানি গরম রাখতে সক্ষম ।<br style=\"box-sizing: border-box;\">সাধারণ ফ্লাক্স এর মত পড়ে গেলেই ভেঙ্গে যাওয়ার চান্স নেই ।<br style=\"box-sizing: border-box;\">ঠান্ডা এবং গরম ভিতরে যায় থাকবে তা সাধারণ ফ্লাক্স থেকে কয়েকগুণ বেশি গরম থাকবে।<br style=\"box-sizing: border-box;\">অত্যন্ত আকর্ষণীয় ডিজাইন হওয়াতে আপনি উপহার হিসেবে গিফট করতে পারবেন।</p>', NULL, '20250601105459-thumbnail-180X178.jpg', '20250601105459-photo-300X370.jpg', NULL, '20250601105459-a3.jpg,20250601105459-a2.jpg,20250601105459-a1.jpg', NULL, '19', '1000', '680', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Vaccuum Flask Set Drinking Water Bottle', 'Vaccuum Flask Set Drinking Water Bottle', 'Vaccuum Flask Set Drinking Water Bottle', NULL, 'Yes', 'Active', '2025-06-01 04:54:59', '2025-06-01 04:54:59'),
(34, 'LED Mushroom Light', 'LED Mushroom Light', 'led-mushroom-light', '28', '0', NULL, '0', '0', '1', '<p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">মাশরুম লাইট অন্ধকার থাকলে অটো আলো জ্বলবে আবার দিনের আলো বা লাইটের আলো পেলে অটো নিভে যাবে 2 ধরনের কালার হবে । এটা ডিম লাইটে হিসাবে ব্যাবহার করা যায় ।</p><p style=\"box-sizing: border-box; text-shadow: none; font-size: 0.9375rem; line-height: 1.5; color: rgb(52, 58, 64); font-family: &quot;Open Sans&quot;, sans-serif;\">&nbsp;</p>', '<p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">মাশরুম লাইট অন্ধকার থাকলে অটো আলো জ্বলবে আবার দিনের আলো বা লাইটের আলো পেলে অটো নিভে যাবে 2 ধরনের কালার হবে । এটা ডিম লাইটে হিসাবে ব্যাবহার করা যায় ।</p><p style=\"box-sizing: border-box; text-shadow: none; font-size: 0.9375rem; line-height: 1.5; color: rgb(52, 58, 64); font-family: &quot;Open Sans&quot;, sans-serif;\">&nbsp;</p>', NULL, '20250601105640-thumbnail-180X178.jpg', '20250601105640-photo-300X370.jpg', NULL, '20250601105641-b5.webp,20250601105641-b4.webp,20250601105641-b2.jpg,20250601105641-b1.jpg', NULL, '10', '300', '200', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'LED Mushroom Light', 'LED Mushroom Light', 'LED Mushroom Light', NULL, 'Yes', 'Active', '2025-06-01 04:56:41', '2025-06-01 04:56:41'),
(35, '360 Rotating Cosmetic Organizer', '360 Rotating Cosmetic Organizer', '360-rotating-cosmetic-organizer', '22', '0', NULL, '0', '34', '1', '<p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: \"Noto Sans Bengali\", Roboto, \"sans-serif\";\"><span class=\"Y2IQFc\" lang=\"bn\" style=\"box-sizing: border-box; text-shadow: none;\">360 ডিগ্রি ঘূর্ণায়মান প্রসাধনী সংগঠক একত্রিত করা এবং সামঞ্জস্য করা সহজ । আপনার সমস্ত পণ্য একটি পরিষ্কার এবং সুশৃঙ্খল জায়গায়। প্রসাধনী এবং ব্রাশের জন্য বড় ক্ষমতা ভ্যানিটি বা কাউন্টারটপ স্টোরেজের জন্য পারফেক্ট । পারফিউম এবং অন্যান্য সৌন্দর্য পণ্য ধারণ করে সুবিধাজনক এবং আপনার মেকআপ অ্যাক্সেস করা সহজ আপনার সৌন্দর্য রুটিন সংগঠিত জন্য আদর্শ ।                                                             </span></p><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: \"Noto Sans Bengali\", Roboto, \"sans-serif\";\">Materials: Acrylic<br style=\"box-sizing: border-box;\">Size: 22 × 31 cm</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: \"Noto Sans Bengali\", Roboto, \"sans-serif\";\">Feature: 360° Roatable</div>', '<p style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: \"Noto Sans Bengali\", Roboto, \"sans-serif\";\"><span class=\"Y2IQFc\" lang=\"bn\" style=\"box-sizing: border-box; text-shadow: none;\">360 ডিগ্রি ঘূর্ণায়মান প্রসাধনী সংগঠক একত্রিত করা এবং সামঞ্জস্য করা সহজ । আপনার সমস্ত পণ্য একটি পরিষ্কার এবং সুশৃঙ্খল জায়গায়। প্রসাধনী এবং ব্রাশের জন্য বড় ক্ষমতা ভ্যানিটি বা কাউন্টারটপ স্টোরেজের জন্য পারফেক্ট । পারফিউম এবং অন্যান্য সৌন্দর্য পণ্য ধারণ করে সুবিধাজনক এবং আপনার মেকআপ অ্যাক্সেস করা সহজ আপনার সৌন্দর্য রুটিন সংগঠিত জন্য আদর্শ ।                                                             </span></p><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: \"Noto Sans Bengali\", Roboto, \"sans-serif\";\">Materials: Acrylic<br style=\"box-sizing: border-box;\">Size: 22 × 31 cm</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: \"Noto Sans Bengali\", Roboto, \"sans-serif\";\">Feature: 360° Roatable</div>', NULL, '20250601105930-thumbnail-180X178.jpg', '20250601105930-photo-300X370.jpg', NULL, '20250601105930-c5.webp,20250601105930-c4.webp,20250601105930-c3.jpg,20250601105930-c2.jpg,20250601105930-c1.jpg', NULL, '10', '1590', '1290', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '4', '360 Rotating Cosmetic Organizer', '360 Rotating Cosmetic Organizer', '360 Rotating Cosmetic Organizer', NULL, 'Yes', 'Active', '2025-06-01 04:59:30', '2025-06-01 10:16:36'),
(36, 'Rechargeable LED 3W Torch', 'Rechargeable LED 3W Torch', 'rechargeable-led-3w-torch', '21', '23', NULL, '0', '0', '1', '<p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text\" style=\"box-sizing: border-box; text-shadow: none;\">আমাদের LED ফ্ল্যাশলাইট সর্বদা ড্রাইভিং করার জন্য প্রস্তুত, এবং এটি বিপদে জরুরী পালানোর জন্য ব্যবহার করা যেতে পারে। এটি গাড়ির সিটে বা পিছনের সারিতে এবং নাগালের মধ্যে অন্যান্য জায়গায় প্রস্তুত করা যেতে পারে। পানিতে ড্রাইভিং করার সময় এবং আটকা পড়ে, পণ্যের উপর একটি নিরাপত্তা হাতুড়ি থাকে, যা পালানোর জন্য জানালায় ঠক্ঠক্ করতে ব্যবহার করা যেতে পারে। এটি গ্যাংস্টার আক্রমণ থেকে নিজেকে রক্ষা করতে পারে।</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text\" style=\"box-sizing: border-box; text-shadow: none;\">KLIFFOO [সীট বেল্ট কাটার সহ] পণ্যটিতে একটি অন্তর্নির্মিত লুকানো সিট বেল্ট কাটার রয়েছে, যা বিপদের ক্ষেত্রে সিট বেল্ট কেটে ফেলতে পারে এবং সিট বেল্টটিকে প্রাণঘাতী বেল্ট হতে বাধা দিতে পারে।</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text\" style=\"box-sizing: border-box; text-shadow: none;\">KLIFFOO [মাল্টিফাংশনাল ফ্ল্যাশলাইট] এই মাল্টি-ফাংশন ফ্ল্যাশলাইট, পাশে COB সাদা আলো সহ, একটি ডেস্ক ল্যাম্প হিসাবে স্থাপন করা যেতে পারে। ল্যাম্প হেড ম্যাগনেট ব্যবহারের জন্য শোষণ করা যেতে পারে, বিল্ট-ইন বড়-ক্ষমতার লিথিয়াম ব্যাটারি, জরুরি অবস্থায় মোবাইল ফোন চার্জ করার জন্য পাওয়ার ব্যাংক হিসাবে ব্যবহার করা যেতে পারে।</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text\" style=\"box-sizing: border-box; text-shadow: none;\">KLIFFOO [4 লাইট মোড] আমাদের ফ্ল্যাশলাইটে রয়েছে ফ্লাড লাইট + ঘনীভূত আলো লম্বা শট, দীর্ঘ পরিসর, বড় পরিসর, 300 মিটার শক্তিশালী আলো দীর্ঘ দূরত্ব। পণ্যটির চারটি গিয়ার রয়েছে: শক্তিশালী হালকা-মাঝারি হালকা-স্ট্রোব-সাইড লাইট। এটি যে কোনো সময় আপনার চাহিদা মেটাতে পারে, যেমন ক্যাম্পিং, ফিশিং, নাইট দৌড়, ক্লাইম্বিং ইত্যাদি।&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></p><table style=\"box-sizing: border-box; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;; width: 224.41px;\"><tbody style=\"box-sizing: border-box;\"><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; width: 134.635px;\">Wattage</td><td style=\"box-sizing: border-box; width: 89.7743px;\">3W</td></tr><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; width: 134.635px;\">Battery Type</td><td style=\"box-sizing: border-box; width: 89.7743px;\">Lithium Ion</td></tr><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; width: 134.635px;\">Material</td><td style=\"box-sizing: border-box; width: 89.7743px;\">Plastic</td></tr><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; width: 134.635px;\">Battery Capacity</td><td data-spm-anchor-id=\"a2a0e.pdp_revamp.product_detail.i4.689f7581luXeEF\" style=\"box-sizing: border-box; width: 89.7743px;\">600 mAh</td></tr></tbody></table>', '<p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text\" style=\"box-sizing: border-box; text-shadow: none;\">আমাদের LED ফ্ল্যাশলাইট সর্বদা ড্রাইভিং করার জন্য প্রস্তুত, এবং এটি বিপদে জরুরী পালানোর জন্য ব্যবহার করা যেতে পারে। এটি গাড়ির সিটে বা পিছনের সারিতে এবং নাগালের মধ্যে অন্যান্য জায়গায় প্রস্তুত করা যেতে পারে। পানিতে ড্রাইভিং করার সময় এবং আটকা পড়ে, পণ্যের উপর একটি নিরাপত্তা হাতুড়ি থাকে, যা পালানোর জন্য জানালায় ঠক্ঠক্ করতে ব্যবহার করা যেতে পারে। এটি গ্যাংস্টার আক্রমণ থেকে নিজেকে রক্ষা করতে পারে।</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text\" style=\"box-sizing: border-box; text-shadow: none;\">KLIFFOO [সীট বেল্ট কাটার সহ] পণ্যটিতে একটি অন্তর্নির্মিত লুকানো সিট বেল্ট কাটার রয়েছে, যা বিপদের ক্ষেত্রে সিট বেল্ট কেটে ফেলতে পারে এবং সিট বেল্টটিকে প্রাণঘাতী বেল্ট হতে বাধা দিতে পারে।</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text\" style=\"box-sizing: border-box; text-shadow: none;\">KLIFFOO [মাল্টিফাংশনাল ফ্ল্যাশলাইট] এই মাল্টি-ফাংশন ফ্ল্যাশলাইট, পাশে COB সাদা আলো সহ, একটি ডেস্ক ল্যাম্প হিসাবে স্থাপন করা যেতে পারে। ল্যাম্প হেড ম্যাগনেট ব্যবহারের জন্য শোষণ করা যেতে পারে, বিল্ট-ইন বড়-ক্ষমতার লিথিয়াম ব্যাটারি, জরুরি অবস্থায় মোবাইল ফোন চার্জ করার জন্য পাওয়ার ব্যাংক হিসাবে ব্যবহার করা যেতে পারে।</span></p><p class=\"selectable-text copyable-text x15bjb6t x1n2onr6\" dir=\"ltr\" style=\"box-sizing: border-box; text-shadow: none; line-height: 1.5; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"selectable-text copyable-text\" style=\"box-sizing: border-box; text-shadow: none;\">KLIFFOO [4 লাইট মোড] আমাদের ফ্ল্যাশলাইটে রয়েছে ফ্লাড লাইট + ঘনীভূত আলো লম্বা শট, দীর্ঘ পরিসর, বড় পরিসর, 300 মিটার শক্তিশালী আলো দীর্ঘ দূরত্ব। পণ্যটির চারটি গিয়ার রয়েছে: শক্তিশালী হালকা-মাঝারি হালকা-স্ট্রোব-সাইড লাইট। এটি যে কোনো সময় আপনার চাহিদা মেটাতে পারে, যেমন ক্যাম্পিং, ফিশিং, নাইট দৌড়, ক্লাইম্বিং ইত্যাদি।&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></p><table style=\"box-sizing: border-box; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;; width: 224.41px;\"><tbody style=\"box-sizing: border-box;\"><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; width: 134.635px;\">Wattage</td><td style=\"box-sizing: border-box; width: 89.7743px;\">3W</td></tr><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; width: 134.635px;\">Battery Type</td><td style=\"box-sizing: border-box; width: 89.7743px;\">Lithium Ion</td></tr><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; width: 134.635px;\">Material</td><td style=\"box-sizing: border-box; width: 89.7743px;\">Plastic</td></tr><tr style=\"box-sizing: border-box;\"><td style=\"box-sizing: border-box; width: 134.635px;\">Battery Capacity</td><td data-spm-anchor-id=\"a2a0e.pdp_revamp.product_detail.i4.689f7581luXeEF\" style=\"box-sizing: border-box; width: 89.7743px;\">600 mAh</td></tr></tbody></table>', NULL, '20250602050409-thumbnail-180X178.jpg', '20250602050409-photo-300X370.jpg', NULL, '20250602050409-a3.webp,20250602050409-a2.jpg,20250602050409-a1.jpg', NULL, '19', '800', '599', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Rechargeable LED 3W Torch', 'Rechargeable LED 3W Torch', 'Rechargeable LED 3W Torch', NULL, 'Yes', 'Active', '2025-06-01 23:04:09', '2025-06-01 23:04:09'),
(37, NULL, 'Cooking Oil Spray bottle', 'cooking-oil-spray-bottle', '22', '0', NULL, '0', '0', '1', '<div class=\"xdj266r x11i5rnm xat24cr x1mh8g0r x1vvkbs x126k92a\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\"><span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png\" alt=\"🔥\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>Oil Dispenser Sprayer Bottle for Kitchen Cooking<span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png\" alt=\"🔥\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span></div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\"><span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t2/1/16/1f60d.png\" alt=\"😍\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>একই সাথে তেল ঢেলে এবং স্প্রে করে ব্যবহার করা যায়<span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t2/1/16/1f60d.png\" alt=\"😍\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span></div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">আপনার রান্না ঘরে আধুনিকতার ছোঁয়া আনুন এই অনন্য oil Spray তেলের বোতল দিয়ে<span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png\" alt=\"🔥\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span><span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png\" alt=\"🔥\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span><span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png\" alt=\"🔥\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span></div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">আসসালামু আলাইকুম ভ্যারাইটি বাজার পেজের পক্ষ থেকে নিয়ে আসলাম&nbsp;<span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png\" alt=\"🔥\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>Oil Dispenser Sprayer Bottle for Kitchen Cooking<span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png\" alt=\"🔥\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span></div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\"><span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t51/1/16/1f449.png\" alt=\"👉\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>&nbsp;রান্নাঘরে রান্নার কাজে তেল আমাদের নিত্যদিনের সঙ্গী</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">তেল ছাড়া রান্না কল্পনাই করা যায় না, তেল ছাড়া রান্না যেমন মজা হয় না, ঠিক এর বিপরীতে অতিরিক্ত তেল আমাদের স্বাস্থ্যের জন্য খুবই ক্ষতিকর</div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\"><span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t51/1/16/1f449.png\" alt=\"👉\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>সচরাচর বোতল থেকে সরাসরি ঢেলে রান্না করায় তেল বেশি খরচ হয়, স্বাস্থ্যের জন্য ক্ষতি করে।</div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">এই সমস্যা সমাধান করতেই আমরা নিয়ে এসেছি Oil Spray Bottle</div></div>', NULL, '<div class=\"xdj266r x11i5rnm xat24cr x1mh8g0r x1vvkbs x126k92a\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\"><span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png\" alt=\"🔥\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>Oil Dispenser Sprayer Bottle for Kitchen Cooking<span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png\" alt=\"🔥\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span></div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\"><span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t2/1/16/1f60d.png\" alt=\"😍\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>একই সাথে তেল ঢেলে এবং স্প্রে করে ব্যবহার করা যায়<span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t2/1/16/1f60d.png\" alt=\"😍\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span></div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">আপনার রান্না ঘরে আধুনিকতার ছোঁয়া আনুন এই অনন্য oil Spray তেলের বোতল দিয়ে<span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png\" alt=\"🔥\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span><span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png\" alt=\"🔥\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span><span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png\" alt=\"🔥\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span></div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">আসসালামু আলাইকুম ভ্যারাইটি বাজার পেজের পক্ষ থেকে নিয়ে আসলাম&nbsp;<span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png\" alt=\"🔥\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>Oil Dispenser Sprayer Bottle for Kitchen Cooking<span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t50/1/16/1f525.png\" alt=\"🔥\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span></div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\"><span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t51/1/16/1f449.png\" alt=\"👉\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>&nbsp;রান্নাঘরে রান্নার কাজে তেল আমাদের নিত্যদিনের সঙ্গী</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">তেল ছাড়া রান্না কল্পনাই করা যায় না, তেল ছাড়া রান্না যেমন মজা হয় না, ঠিক এর বিপরীতে অতিরিক্ত তেল আমাদের স্বাস্থ্যের জন্য খুবই ক্ষতিকর</div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\"><span class=\"html-span xexx8yu x4uap5 x18d9i69 xkhd6sd x1hl2dhg x16tdsg8 x1vvkbs x3nfvp2 x1j61x8r x1fcty0u xdj266r xat24cr xgzva0m xhhsvwb xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr x168nmei x13lgxp2 x5pf9jr xo71vjh\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t51/1/16/1f449.png\" alt=\"👉\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>সচরাচর বোতল থেকে সরাসরি ঢেলে রান্না করায় তেল বেশি খরচ হয়, স্বাস্থ্যের জন্য ক্ষতি করে।</div></div><div class=\"x11i5rnm xat24cr x1mh8g0r x1vvkbs xtlvy1s x126k92a\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none;\">এই সমস্যা সমাধান করতেই আমরা নিয়ে এসেছি Oil Spray Bottle</div></div>', '20250602052055-thumbnail-180X178.jpg', '20250602052056-photo-300X370.jpg', NULL, '20250602052056-a4.webp,20250602052056-a3.webp,20250602052056-a2.webp,20250602052056-a1.jpg', NULL, '10', '550', '500', 'No', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Cooking Oil Spray bottle', 'Cooking Oil Spray bottle', 'Cooking Oil Spray bottle', NULL, 'Yes', 'Active', '2025-06-01 23:20:56', '2025-06-01 23:20:56');
INSERT INTO `products` (`id`, `sku`, `title`, `slug`, `category_id`, `sub_category_id`, `sub_subcategory_id`, `spacialcat_id`, `brand_id`, `unit_id`, `content`, `specification`, `warrenty`, `thumb`, `images`, `img_alt`, `gallery`, `video`, `qty`, `regular_price`, `sales_price`, `featured`, `color`, `size`, `blade`, `smm_title`, `smm_content`, `smm_images`, `meta_tags`, `meta_title`, `meta_keyword`, `meta_description`, `schema`, `follow`, `status`, `created_at`, `updated_at`) VALUES
(38, 'Kitchen Magic Silicon Hand Gloves', 'Kitchen Magic Silicon Hand Gloves', 'kitchen-magic-silicon-hand-gloves', '22', '0', NULL, '29', '0', '1', '<div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">কিচেন ম্যাজিক সিলিকন হ্যান্ড গ্লাভস৷</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb1/1/16/2747.png\" alt=\"❇️\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>এই কনকনে শীতে পানির স্পর্শ ছাড়া রান্না হবে উষ্ণ হাতে</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">ব্যবহার বিধি।।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb1/1/16/2747.png\" alt=\"❇️\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>Kitchen Magic Silicon hand gloves। (কিচেন সিলিকন ম্যাজিক হ্যান্ড গ্লাভস)</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb1/1/16/2747.png\" alt=\"❇️\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>রান্না ও দোয়া মোছার কাছে হাতকে ব্যাকটেরিয়া ও জীবাণু মুক্ত রাখবে</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb1/1/16/2747.png\" alt=\"❇️\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>বিশেষ করে যেসব আপুদের বেবি আছে বেবিদের ব্যাকটেরিয়া ও জীবাণু মুক্ত রাখতে. কাজে আসবে।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb1/1/16/2747.png\" alt=\"❇️\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>বারবার পানির কাজে যাদের নখের কোনে ঘা হয়ে গেছে তারা মুক্তি পাবে।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb1/1/16/2747.png\" alt=\"❇️\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>ম্যাজিক হ্যান্ড গ্লাভস গুলো ব্যবহার করে সব ধরনের পরিষ্কার পরিচ্ছন্নতা কাজ করা যাবে।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb1/1/16/2747.png\" alt=\"❇️\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>সাবান ও ভীম ডিটারজেনের থাকা ক্ষতিকর কেমিক্যাল এর হাতকে সুরক্ষা করবে হাত কে কমল রাখবে।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb1/1/16/2747.png\" alt=\"❇️\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>খুব সহজে গরু ছাগল এবং পালিত কুকুর বিড়াল গোসল করানো যাবে /</div>', '<div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">কিচেন ম্যাজিক সিলিকন হ্যান্ড গ্লাভস৷</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb1/1/16/2747.png\" alt=\"❇️\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>এই কনকনে শীতে পানির স্পর্শ ছাড়া রান্না হবে উষ্ণ হাতে</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">ব্যবহার বিধি।।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb1/1/16/2747.png\" alt=\"❇️\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>Kitchen Magic Silicon hand gloves। (কিচেন সিলিকন ম্যাজিক হ্যান্ড গ্লাভস)</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb1/1/16/2747.png\" alt=\"❇️\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>রান্না ও দোয়া মোছার কাছে হাতকে ব্যাকটেরিয়া ও জীবাণু মুক্ত রাখবে</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb1/1/16/2747.png\" alt=\"❇️\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>বিশেষ করে যেসব আপুদের বেবি আছে বেবিদের ব্যাকটেরিয়া ও জীবাণু মুক্ত রাখতে. কাজে আসবে।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb1/1/16/2747.png\" alt=\"❇️\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>বারবার পানির কাজে যাদের নখের কোনে ঘা হয়ে গেছে তারা মুক্তি পাবে।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb1/1/16/2747.png\" alt=\"❇️\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>ম্যাজিক হ্যান্ড গ্লাভস গুলো ব্যবহার করে সব ধরনের পরিষ্কার পরিচ্ছন্নতা কাজ করা যাবে।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb1/1/16/2747.png\" alt=\"❇️\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>সাবান ও ভীম ডিটারজেনের থাকা ক্ষতিকর কেমিক্যাল এর হাতকে সুরক্ষা করবে হাত কে কমল রাখবে।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb1/1/16/2747.png\" alt=\"❇️\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>খুব সহজে গরু ছাগল এবং পালিত কুকুর বিড়াল গোসল করানো যাবে /</div>', '<div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">কিচেন ম্যাজিক সিলিকন হ্যান্ড গ্লাভস৷</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb1/1/16/2747.png\" alt=\"❇️\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>এই কনকনে শীতে পানির স্পর্শ ছাড়া রান্না হবে উষ্ণ হাতে</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">ব্যবহার বিধি।।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb1/1/16/2747.png\" alt=\"❇️\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>Kitchen Magic Silicon hand gloves। (কিচেন সিলিকন ম্যাজিক হ্যান্ড গ্লাভস)</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb1/1/16/2747.png\" alt=\"❇️\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>রান্না ও দোয়া মোছার কাছে হাতকে ব্যাকটেরিয়া ও জীবাণু মুক্ত রাখবে</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb1/1/16/2747.png\" alt=\"❇️\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>বিশেষ করে যেসব আপুদের বেবি আছে বেবিদের ব্যাকটেরিয়া ও জীবাণু মুক্ত রাখতে. কাজে আসবে।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb1/1/16/2747.png\" alt=\"❇️\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>বারবার পানির কাজে যাদের নখের কোনে ঘা হয়ে গেছে তারা মুক্তি পাবে।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb1/1/16/2747.png\" alt=\"❇️\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>ম্যাজিক হ্যান্ড গ্লাভস গুলো ব্যবহার করে সব ধরনের পরিষ্কার পরিচ্ছন্নতা কাজ করা যাবে।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb1/1/16/2747.png\" alt=\"❇️\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>সাবান ও ভীম ডিটারজেনের থাকা ক্ষতিকর কেমিক্যাল এর হাতকে সুরক্ষা করবে হাত কে কমল রাখবে।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img class=\"xz74otr\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb1/1/16/2747.png\" alt=\"❇️\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span>খুব সহজে গরু ছাগল এবং পালিত কুকুর বিড়াল গোসল করানো যাবে /</div>', '20250602052853-thumbnail-180X178.jpg', '20250602052853-photo-300X370.jpg', NULL, '20250602052854-b2.jpg,20250602052854-b1.jpg', NULL, '10', '390', '200', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Kitchen Magic Silicon Hand Gloves', 'Kitchen Magic Silicon Hand Gloves', 'Kitchen Magic Silicon Hand Gloves', NULL, 'Yes', 'Active', '2025-06-01 23:28:54', '2025-06-01 23:28:54'),
(39, 'Multi-Purpose Cleaner', 'Multi-Purpose Cleaner', 'multi-purpose-cleaner', '22', '0', NULL, '0', '0', '1', '<div id=\"ListStyle2\" class=\"col-sm-12 text-left product-dynamic-details\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; width: 1050px; -webkit-box-flex: 0; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">Multi-Purpose Cleaner আপনার বাসার যেকোনো কিছু পরিস্কার করতে এটি ব্যবহার করুন! কিচেন এর এডজাস্ট ফ্যান,চিমনী, ওয়াল ,চুলা ,জানালার গ্রিল অথবা যে কোন কিছু এর তেল-কাস্টে সহজেই পরিস্কার করতে পারবেন। বাথরুম অথবা ঘর এর ফ্লোর টাইলস এর দাগ দূর করতে পারবেন। কিচেন অথবা বাথরুম হবে নতুন এর মত ঝকঝকে । তেল কাস্টে উঠানোর পারফেক্ট সলিউশন। টাইলস পরিস্কার করতে পারবেন। ফ্লোর পরিস্কার করতে পারবেন। থালা-বাসন পরিস্কার করতে পারবেন। গ্লাস ক্লিনার হিসেবে ব্যবহার করতে পারবেন। তেলের দাগ পরিস্কার করতে পারবেন। Weight: 450 ML</div><div><br></div>', '<div id=\"ListStyle2\" class=\"col-sm-12 text-left product-dynamic-details\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; width: 1050px; -webkit-box-flex: 0; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">Multi-Purpose Cleaner আপনার বাসার যেকোনো কিছু পরিস্কার করতে এটি ব্যবহার করুন! কিচেন এর এডজাস্ট ফ্যান,চিমনী, ওয়াল ,চুলা ,জানালার গ্রিল অথবা যে কোন কিছু এর তেল-কাস্টে সহজেই পরিস্কার করতে পারবেন। বাথরুম অথবা ঘর এর ফ্লোর টাইলস এর দাগ দূর করতে পারবেন। কিচেন অথবা বাথরুম হবে নতুন এর মত ঝকঝকে । তেল কাস্টে উঠানোর পারফেক্ট সলিউশন। টাইলস পরিস্কার করতে পারবেন। ফ্লোর পরিস্কার করতে পারবেন। থালা-বাসন পরিস্কার করতে পারবেন। গ্লাস ক্লিনার হিসেবে ব্যবহার করতে পারবেন। তেলের দাগ পরিস্কার করতে পারবেন। Weight: 450 ML</div><div><br></div>', '<div id=\"ListStyle2\" class=\"col-sm-12 text-left product-dynamic-details\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; width: 1050px; -webkit-box-flex: 0; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">Multi-Purpose Cleaner আপনার বাসার যেকোনো কিছু পরিস্কার করতে এটি ব্যবহার করুন! কিচেন এর এডজাস্ট ফ্যান,চিমনী, ওয়াল ,চুলা ,জানালার গ্রিল অথবা যে কোন কিছু এর তেল-কাস্টে সহজেই পরিস্কার করতে পারবেন। বাথরুম অথবা ঘর এর ফ্লোর টাইলস এর দাগ দূর করতে পারবেন। কিচেন অথবা বাথরুম হবে নতুন এর মত ঝকঝকে । তেল কাস্টে উঠানোর পারফেক্ট সলিউশন। টাইলস পরিস্কার করতে পারবেন। ফ্লোর পরিস্কার করতে পারবেন। থালা-বাসন পরিস্কার করতে পারবেন। গ্লাস ক্লিনার হিসেবে ব্যবহার করতে পারবেন। তেলের দাগ পরিস্কার করতে পারবেন। Weight: 450 ML</div><div><br></div>', '20250602054823-thumbnail-180X178.jpg', '20250602054823-photo-300X370.jpg', NULL, '20250602054824-c1.jpg', NULL, '10', '400', '200', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Multi-Purpose Cleaner', 'Multi-Purpose Cleaner', 'Multi-Purpose Cleaner', NULL, 'Yes', 'Active', '2025-06-01 23:48:24', '2025-06-01 23:48:24'),
(40, 'Original Smart Electric Grinder Machine', 'Original Smart Electric Grinder Machine', 'original-smart-electric-grinder-machine', '22', '0', NULL, '0', '0', '1', '<div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">High Power Electric Grinder Machine&nbsp;<span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tea/1/16/1f970.png\" alt=\"🥰\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span></div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">• আর নয় ঝামেলা, যে কোন মশলা গুড়া করা যাবে খুব সহজে।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">আলহামদুলিল্লাহ খুব ভালো রিভিউ পেয়েছি এই grinder, যারা নিয়েছে সবাই অনেক ভালো রিভিউ দিয়েছেন। সেম ভিডিওর মতো ব্লেন্ড হয়।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">• ম্যাটেরিয়ালঃ স্টেইনলেসস্টিল। কভারম্যাটেরিয়ালঃ ট্রান্সপারেন্ট প্লাস্টিক</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">• খুব সহজেই আপনি কফি বানাতে পারবেন।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">• পাওয়ার: 150W</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">• ভোল্টেজ: 220V-240v</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">• অন/অফসুইচ</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">• কালোজিরা, কিমা,শুকনামরিচ, জিরা, মেথি, সরিষা, গোলমরিচ, এলাচি, দারুচিনিসহ যেকোন ধরনের ডাল যেকোন ধরনের বাদাম ইত্যাদি গুড়া বাপাউডার করা যাবে মাত্র কয়েক সেকেন্ড হতে ১ মিনিটের মধ্যে।</div>', '<div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">High Power Electric Grinder Machine&nbsp;<span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tea/1/16/1f970.png\" alt=\"🥰\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span></div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">• আর নয় ঝামেলা, যে কোন মশলা গুড়া করা যাবে খুব সহজে।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">আলহামদুলিল্লাহ খুব ভালো রিভিউ পেয়েছি এই grinder, যারা নিয়েছে সবাই অনেক ভালো রিভিউ দিয়েছেন। সেম ভিডিওর মতো ব্লেন্ড হয়।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">• ম্যাটেরিয়ালঃ স্টেইনলেসস্টিল। কভারম্যাটেরিয়ালঃ ট্রান্সপারেন্ট প্লাস্টিক</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">• খুব সহজেই আপনি কফি বানাতে পারবেন।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">• পাওয়ার: 150W</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">• ভোল্টেজ: 220V-240v</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">• অন/অফসুইচ</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">• কালোজিরা, কিমা,শুকনামরিচ, জিরা, মেথি, সরিষা, গোলমরিচ, এলাচি, দারুচিনিসহ যেকোন ধরনের ডাল যেকোন ধরনের বাদাম ইত্যাদি গুড়া বাপাউডার করা যাবে মাত্র কয়েক সেকেন্ড হতে ১ মিনিটের মধ্যে।</div>', '<div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">High Power Electric Grinder Machine&nbsp;<span class=\"x3nfvp2 x1j61x8r x1fcty0u xdj266r xhhsvwb xat24cr xgzva0m xxymvpz xlup9mm x1kky2od\" style=\"box-sizing: border-box; text-shadow: none;\"><img src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tea/1/16/1f970.png\" alt=\"🥰\" width=\"16\" height=\"16\" style=\"box-sizing: border-box; max-width: 100%;\"></span></div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">• আর নয় ঝামেলা, যে কোন মশলা গুড়া করা যাবে খুব সহজে।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">আলহামদুলিল্লাহ খুব ভালো রিভিউ পেয়েছি এই grinder, যারা নিয়েছে সবাই অনেক ভালো রিভিউ দিয়েছেন। সেম ভিডিওর মতো ব্লেন্ড হয়।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">• ম্যাটেরিয়ালঃ স্টেইনলেসস্টিল। কভারম্যাটেরিয়ালঃ ট্রান্সপারেন্ট প্লাস্টিক</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">• খুব সহজেই আপনি কফি বানাতে পারবেন।</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">• পাওয়ার: 150W</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">• ভোল্টেজ: 220V-240v</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">• অন/অফসুইচ</div><div dir=\"auto\" style=\"box-sizing: border-box; text-shadow: none; box-shadow: none; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\">• কালোজিরা, কিমা,শুকনামরিচ, জিরা, মেথি, সরিষা, গোলমরিচ, এলাচি, দারুচিনিসহ যেকোন ধরনের ডাল যেকোন ধরনের বাদাম ইত্যাদি গুড়া বাপাউডার করা যাবে মাত্র কয়েক সেকেন্ড হতে ১ মিনিটের মধ্যে।</div>', '20250602055057-thumbnail-180X178.jpg', '20250602055057-photo-300X370.jpg', NULL, '20250602055057-d2.jpg,20250602055057-d1.jpg', NULL, '10', '1490', '999', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Original Smart Electric Grinder Machine', 'Original Smart Electric Grinder Machine', 'Original Smart Electric Grinder Machine', NULL, 'Yes', 'Active', '2025-06-01 23:50:57', '2025-06-01 23:50:57'),
(41, 'Gawa Ghee/গাওয়া ঘি (১ কেজি)', 'Gawa Ghee/গাওয়া ঘি (১ কেজি)', 'gawa-gheegaooza-ghi-1-keji', '27', '0', NULL, '0', '0', '1', '<h3 basic=\"\" commercial\",=\"\" sans-serif;=\"\" color:=\"\" rgb(0,=\"\" 0,=\"\" 0);=\"\" line-height:=\"\" 1.6;\"=\"\" style=\"box-sizing: border-box; margin: 1em 0px 0.85em; font-family: calibri; font-weight: 600; color: rgb(33, 37, 41); font-size: 1.25em; border: 0px solid rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,.5019607843137255); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"box-sizing: border-box; border: 0px solid rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,.5019607843137255); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: currentcolor;\">আমাদের যে কোন পণ্য অর্ডার করতে কল বা WhatsApp করুন:</span></h3><h3 basic=\"\" commercial\",=\"\" sans-serif;=\"\" color:=\"\" rgb(0,=\"\" 0,=\"\" 0);=\"\" line-height:=\"\" 1.6;\"=\"\" style=\"box-sizing: border-box; margin: 1em 0px 0.85em; font-family: calibri; font-weight: 600; color: rgb(33, 37, 41); font-size: 1.25em; border: 0px solid rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,.5019607843137255); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);\"><span style=\"box-sizing: border-box; border: 0px solid rgb(229, 231, 235); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,.5019607843137255); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); color: currentcolor;\">01832191722</span></h3>', '<h3 style=\"border: 0px solid rgb(229, 231, 235); box-sizing: border-box; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-scroll-snap-strictness: proximity; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,.5019607843137255); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent; --tw-shadow: 0 0 transparent; --tw-shadow-colored: 0 0 transparent; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 1.25em; font-weight: 600; margin: 1em 0px 0.85em; font-family: \" basic=\"\" commercial\",=\"\" sans-serif;=\"\" color:=\"\" rgb(0,=\"\" 0,=\"\" 0);=\"\" line-height:=\"\" 1.6;\"=\"\"><br></h3>', NULL, '20250602060416-thumbnail-180X178.jpg', '20250602060416-photo-300X370.jpg', NULL, '20250602060417-WhatsApp-Image-2025-06-01-at-9.38.40-PM.jpeg', NULL, '10', '1750', '1750', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Gawa Ghee', 'Gawa Ghee', 'Gawa Ghee', NULL, 'Yes', 'Active', '2025-06-02 00:04:17', '2025-06-02 00:04:17'),
(42, 'Kitchen Knife Sharpener', 'Kitchen Knife Sharpener', 'kitchen-knife-sharpener', '28', '0', NULL, '0', '0', '1', '<ul class=\"\" style=\"box-sizing: border-box; padding-left: 1rem; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">Made in China</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Material: Stainless Steel+ABS</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Color: Multicolor</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Size: 21*.5*5.7cm</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Weight: 150g</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Type: Utensils</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Feature: Sustainable</li><li class=\"\" data-spm-anchor-id=\"a2a0e.pdp_revamp.product_detail.i1.a01f3c69iK9V7K\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Style: Fashionable</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Function: Multifunction</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Application: Kitchen Knives Sahrpening</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">#knife sharpener</li></ul>', '<ul class=\"\" style=\"box-sizing: border-box; padding-left: 1rem; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">Made in China</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Material: Stainless Steel+ABS</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Color: Multicolor</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Size: 21*.5*5.7cm</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Weight: 150g</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Type: Utensils</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Feature: Sustainable</li><li class=\"\" data-spm-anchor-id=\"a2a0e.pdp_revamp.product_detail.i1.a01f3c69iK9V7K\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Style: Fashionable</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Function: Multifunction</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Application: Kitchen Knives Sahrpening</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">#knife sharpener</li></ul>', '<ul class=\"\" style=\"box-sizing: border-box; padding-left: 1rem; color: rgb(61, 70, 77); font-family: &quot;Noto Sans Bengali&quot;, Roboto, &quot;sans-serif&quot;;\"><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">Made in China</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Material: Stainless Steel+ABS</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Color: Multicolor</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Size: 21*.5*5.7cm</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Weight: 150g</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Type: Utensils</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Feature: Sustainable</li><li class=\"\" data-spm-anchor-id=\"a2a0e.pdp_revamp.product_detail.i1.a01f3c69iK9V7K\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Style: Fashionable</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Function: Multifunction</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">This Product Application: Kitchen Knives Sahrpening</li><li class=\"\" style=\"box-sizing: border-box; line-height: 1.8;\">#knife sharpener</li></ul>', '20250602115734-thumbnail-180X178.jpg', '20250602115734-photo-300X370.jpg', NULL, '20250602115734-z1.jpg', NULL, '20', '790', '230', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '4', 'Kitchen Knife Sharpener', 'Kitchen Knife Sharpener', 'Kitchen Knife Sharpener', NULL, 'Yes', 'Active', '2025-06-02 05:57:34', '2025-06-02 05:57:34');

-- --------------------------------------------------------

--
-- Table structure for table `product_stocks`
--

CREATE TABLE `product_stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `sized` text DEFAULT NULL,
  `colored` text DEFAULT NULL,
  `unit_id` varchar(255) NOT NULL,
  `stock_qty` varchar(255) NOT NULL,
  `sales_qty` varchar(255) DEFAULT NULL,
  `purchase_qty` varchar(255) DEFAULT NULL,
  `ragular_price` varchar(255) NOT NULL,
  `sales_price` varchar(255) NOT NULL,
  `purchase_price` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_stocks`
--

INSERT INTO `product_stocks` (`id`, `product_id`, `sku`, `sized`, `colored`, `unit_id`, `stock_qty`, `sales_qty`, `purchase_qty`, `ragular_price`, `sales_price`, `purchase_price`, `created_at`, `updated_at`) VALUES
(1, '1', '21212', NULL, NULL, '2', '100', NULL, NULL, '5000', '400', NULL, '2025-05-31 11:11:58', '2025-05-31 11:11:58'),
(2, '2', 'mouse-200', NULL, NULL, '1', '200', NULL, NULL, '800', '400', NULL, '2025-05-31 18:46:17', '2025-05-31 18:46:17'),
(3, '3', '3 in 1 Double Head Led Light Water Spray Portable Ice Mist Cooling Fan', NULL, NULL, '1', '100', NULL, NULL, '1900', '1550', NULL, '2025-05-31 19:44:15', '2025-05-31 19:44:15'),
(4, '4', 'Mini Cute Handheld Fan', NULL, NULL, '1', '100', NULL, NULL, '700', '300', NULL, '2025-05-31 19:51:31', '2025-05-31 19:51:31'),
(5, '5', 'Table Fan with LED Light JY-1880', NULL, NULL, '1', '100', NULL, NULL, '1400', '999', NULL, '2025-05-31 19:54:56', '2025-05-31 19:54:56'),
(6, '6', 'Folding LR Fan', NULL, NULL, '1', '10', NULL, NULL, '1190', '900', NULL, '2025-05-31 19:57:05', '2025-06-01 04:10:08'),
(7, '7', 'Mini Hand Fan (Long)', NULL, NULL, '1', '100', NULL, NULL, '500', '300', NULL, '2025-05-31 19:59:22', '2025-05-31 19:59:22'),
(8, '8', 'Electric Sewing Machine', NULL, NULL, '1', '100', NULL, NULL, '1490', '999', NULL, '2025-05-31 20:51:48', '2025-05-31 20:51:48'),
(9, '9', 'Self Defence ART NO 801', NULL, NULL, '1', '100', NULL, NULL, '1200', '750', NULL, '2025-05-31 20:55:55', '2025-05-31 20:55:55'),
(10, '10', 'Blender', NULL, NULL, '1', '100', NULL, NULL, '1150', '999', NULL, '2025-05-31 21:03:59', '2025-05-31 21:03:59'),
(11, '11', 'Portable USB Juicer Blender', NULL, NULL, '1', '100', NULL, NULL, '1250', '700', NULL, '2025-05-31 21:06:35', '2025-05-31 21:06:35'),
(12, '12', 'New BaEgg Holder Organizer for Refrigerator', NULL, NULL, '1', '100', NULL, NULL, '300', '99', NULL, '2025-05-31 21:32:24', '2025-05-31 21:45:19'),
(13, '14', 'New Bathroom Shelf Suction Rack Organizer Cup Storage Shower Wall Basket', NULL, NULL, '1', '100', NULL, NULL, '350', '99', NULL, '2025-05-31 21:47:03', '2025-05-31 21:47:03'),
(14, '15', 'Portable 2-Tier Basket Drawers', NULL, NULL, '1', '100', NULL, NULL, '1500', '1400', NULL, '2025-05-31 21:50:23', '2025-05-31 21:50:23'),
(15, '16', 'Vegetable cutter machine', NULL, NULL, '1', '100', NULL, NULL, '1170', '999', NULL, '2025-05-31 21:52:48', '2025-05-31 21:55:17'),
(16, '17', 'Kitchen Foam Cleaner', NULL, NULL, '1', '100', NULL, NULL, '590', '299', NULL, '2025-05-31 22:01:35', '2025-05-31 22:01:35'),
(17, '18', 'Multifunctional Rotate Vegetable Slicer with Basket (9 in 1)', NULL, NULL, '1', '99', NULL, NULL, '790', '620', NULL, '2025-05-31 22:04:01', '2025-05-31 22:04:01'),
(18, '19', 'Bubble Cleaner (1Pcs)', NULL, NULL, '1', '155', NULL, NULL, '490', '250', NULL, '2025-05-31 22:10:04', '2025-05-31 22:10:04'),
(19, '20', 'Multifunctional Rotate Vegetable Slicer with Basket (9 in 1)', NULL, NULL, '1', '19', NULL, NULL, '790', '620', NULL, '2025-05-31 22:15:36', '2025-05-31 22:15:36'),
(20, '21', 'Electric Mini Juicer', NULL, NULL, '1', '19', NULL, NULL, '1100', '670', NULL, '2025-05-31 22:17:21', '2025-05-31 22:17:21'),
(21, '22', 'Baby Carry Bag', NULL, NULL, '1', '19', NULL, NULL, '890', '400', NULL, '2025-05-31 22:46:53', '2025-05-31 22:46:53'),
(22, '23', 'Baby Bouncer with Toys', NULL, NULL, '1', '50', NULL, NULL, '2000', '899', NULL, '2025-05-31 22:48:42', '2025-05-31 22:48:42'),
(23, '24', 'Lightweight Baby Carrier', NULL, NULL, '1', '20', NULL, NULL, '599', '350', NULL, '2025-05-31 22:51:11', '2025-05-31 22:51:11'),
(24, '25', 'Steel Nail Cutter box-(16ps) Manicure Set.', NULL, NULL, '1', '190', NULL, NULL, '1190', '800', NULL, '2025-05-31 23:03:01', '2025-05-31 23:24:00'),
(25, '26', 'Knee Compression Sleeve With Patella Stabilizer Straps', NULL, NULL, '1', '19', NULL, NULL, '800', '400', NULL, '2025-05-31 23:05:33', '2025-05-31 23:05:33'),
(26, '27', 'Smart Sensor Corrector', NULL, NULL, '1', '19', NULL, NULL, '250', '200', NULL, '2025-05-31 23:08:21', '2025-05-31 23:08:21'),
(27, '28', 'T9 Trimmer New', NULL, NULL, '1', '19', NULL, NULL, '900', '599', NULL, '2025-05-31 23:10:16', '2025-05-31 23:10:16'),
(28, '29', 'Original Men Anti-Theft Waterproof Crossbody Bag', NULL, NULL, '1', '20', NULL, NULL, '1000', '800', NULL, '2025-06-01 03:45:08', '2025-06-01 03:45:08'),
(29, '30', 'Laptop Bag & College Bag', NULL, NULL, '1', '19', NULL, NULL, '999', '850', NULL, '2025-06-01 03:48:23', '2025-06-01 04:11:04'),
(30, '31', 'Retro Belt Waist Fashionable Bag (Blue)', NULL, NULL, '1', '19', NULL, NULL, '590', '400', NULL, '2025-06-01 03:50:16', '2025-06-01 03:50:16'),
(31, '32', '3 In 1 Large Capacity Foldable Travel Gym Bag', NULL, NULL, '1', '17', NULL, NULL, '1200', '1000', NULL, '2025-06-01 03:52:48', '2025-06-01 03:52:48'),
(32, '33', 'Vaccuum Flask Set Drinking Water Bottle', NULL, NULL, '1', '19', NULL, NULL, '1000', '680', NULL, '2025-06-01 04:54:59', '2025-06-01 04:54:59'),
(33, '34', 'LED Mushroom Light', NULL, NULL, '1', '10', NULL, NULL, '300', '200', NULL, '2025-06-01 04:56:41', '2025-06-01 04:56:41'),
(34, '35', '360 Rotating Cosmetic Organizer', NULL, NULL, '1', '10', NULL, NULL, '1590', '1290', NULL, '2025-06-01 04:59:30', '2025-06-01 04:59:30'),
(35, '36', 'Rechargeable LED 3W Torch', NULL, NULL, '1', '19', NULL, NULL, '800', '599', NULL, '2025-06-01 23:04:09', '2025-06-01 23:04:09'),
(36, '37', NULL, NULL, NULL, '1', '10', NULL, NULL, '550', '500', NULL, '2025-06-01 23:20:56', '2025-06-01 23:20:56'),
(37, '38', 'Kitchen Magic Silicon Hand Gloves', NULL, NULL, '1', '10', NULL, NULL, '390', '200', NULL, '2025-06-01 23:28:54', '2025-06-01 23:28:54'),
(38, '39', 'Multi-Purpose Cleaner', NULL, NULL, '1', '10', NULL, NULL, '400', '200', NULL, '2025-06-01 23:48:24', '2025-06-01 23:48:24'),
(39, '40', 'Original Smart Electric Grinder Machine', NULL, NULL, '1', '10', NULL, NULL, '1490', '999', NULL, '2025-06-01 23:50:57', '2025-06-01 23:50:57'),
(40, '41', 'Gawa Ghee/গাওয়া ঘি (১ কেজি)', NULL, NULL, '1', '10', NULL, NULL, '1750', '1750', NULL, '2025-06-02 00:04:17', '2025-06-02 00:04:17'),
(41, '42', 'Kitchen Knife Sharpener', NULL, NULL, '1', '20', NULL, NULL, '790', '230', NULL, '2025-06-02 05:57:34', '2025-06-02 05:57:34');

-- --------------------------------------------------------

--
-- Table structure for table `product_tags`
--

CREATE TABLE `product_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `tags_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tags`
--

INSERT INTO `product_tags` (`id`, `product_id`, `tags_id`, `created_at`, `updated_at`) VALUES
(2, 1, 4, '2025-05-31 12:02:53', '2025-05-31 12:02:53'),
(3, 2, 4, '2025-05-31 18:46:17', '2025-05-31 18:46:17'),
(4, 3, 6, '2025-05-31 19:44:15', '2025-05-31 19:44:15'),
(5, 3, 7, '2025-05-31 19:44:15', '2025-05-31 19:44:15'),
(6, 4, 4, '2025-05-31 19:51:31', '2025-05-31 19:51:31'),
(7, 5, 4, '2025-05-31 19:54:56', '2025-05-31 19:54:56'),
(9, 7, 4, '2025-05-31 19:59:22', '2025-05-31 19:59:22'),
(10, 8, 4, '2025-05-31 20:51:48', '2025-05-31 20:51:48'),
(11, 9, 4, '2025-05-31 20:55:55', '2025-05-31 20:55:55'),
(12, 10, 4, '2025-05-31 21:03:59', '2025-05-31 21:03:59'),
(13, 11, 4, '2025-05-31 21:06:35', '2025-05-31 21:06:35'),
(15, 12, 4, '2025-05-31 21:45:19', '2025-05-31 21:45:19'),
(16, 14, 4, '2025-05-31 21:47:03', '2025-05-31 21:47:03'),
(17, 15, 4, '2025-05-31 21:50:23', '2025-05-31 21:50:23'),
(19, 16, 4, '2025-05-31 21:55:17', '2025-05-31 21:55:17'),
(20, 17, 4, '2025-05-31 22:01:35', '2025-05-31 22:01:35'),
(22, 19, 4, '2025-05-31 22:10:04', '2025-05-31 22:10:04'),
(23, 18, 4, '2025-05-31 22:13:24', '2025-05-31 22:13:24'),
(24, 20, 4, '2025-05-31 22:15:36', '2025-05-31 22:15:36'),
(25, 21, 4, '2025-05-31 22:17:21', '2025-05-31 22:17:21'),
(26, 22, 4, '2025-05-31 22:46:53', '2025-05-31 22:46:53'),
(27, 23, 4, '2025-05-31 22:48:42', '2025-05-31 22:48:42'),
(28, 24, 4, '2025-05-31 22:51:11', '2025-05-31 22:51:11'),
(30, 26, 4, '2025-05-31 23:05:33', '2025-05-31 23:05:33'),
(31, 27, 4, '2025-05-31 23:08:21', '2025-05-31 23:08:21'),
(32, 28, 4, '2025-05-31 23:10:16', '2025-05-31 23:10:16'),
(33, 25, 4, '2025-05-31 23:24:01', '2025-05-31 23:24:01'),
(34, 29, 4, '2025-06-01 03:45:08', '2025-06-01 03:45:08'),
(36, 31, 4, '2025-06-01 03:50:16', '2025-06-01 03:50:16'),
(37, 32, 4, '2025-06-01 03:52:48', '2025-06-01 03:52:48'),
(38, 6, 4, '2025-06-01 04:10:08', '2025-06-01 04:10:08'),
(39, 30, 4, '2025-06-01 04:11:04', '2025-06-01 04:11:04'),
(40, 33, 4, '2025-06-01 04:54:59', '2025-06-01 04:54:59'),
(41, 34, 4, '2025-06-01 04:56:41', '2025-06-01 04:56:41'),
(44, 35, 4, '2025-06-01 10:16:36', '2025-06-01 10:16:36'),
(45, 36, 4, '2025-06-01 23:04:09', '2025-06-01 23:04:09'),
(46, 37, 4, '2025-06-01 23:20:56', '2025-06-01 23:20:56'),
(47, 38, 4, '2025-06-01 23:28:54', '2025-06-01 23:28:54'),
(48, 39, 4, '2025-06-01 23:48:24', '2025-06-01 23:48:24'),
(49, 40, 4, '2025-06-01 23:50:57', '2025-06-01 23:50:57'),
(50, 41, 4, '2025-06-02 00:04:17', '2025-06-02 00:04:17'),
(51, 42, 4, '2025-06-02 05:57:34', '2025-06-02 05:57:34');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `rating` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review_replies`
--

CREATE TABLE `review_replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `review_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_configs`
--

CREATE TABLE `seo_configs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` text NOT NULL,
  `meta_keyword` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `google_webmaster` text DEFAULT NULL,
  `bing_webmaster` text DEFAULT NULL,
  `yindex_webmaster` text DEFAULT NULL,
  `google_analytics` text DEFAULT NULL,
  `facebook_id` text DEFAULT NULL,
  `facebook_pixel` text DEFAULT NULL,
  `tawk` text DEFAULT NULL,
  `other_code` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_configs`
--

INSERT INTO `seo_configs` (`id`, `meta_title`, `meta_keyword`, `meta_description`, `google_webmaster`, `bing_webmaster`, `yindex_webmaster`, `google_analytics`, `facebook_id`, `facebook_pixel`, `tawk`, `other_code`, `created_at`, `updated_at`) VALUES
(1, 'Jagopower', 'Jagopower', 'Jagopower', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-26 07:52:31', '2024-05-10 05:13:43');

-- --------------------------------------------------------

--
-- Table structure for table `seo_metas`
--

CREATE TABLE `seo_metas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servicings`
--

CREATE TABLE `servicings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `complain` text NOT NULL,
  `solution` text DEFAULT NULL,
  `product_model` varchar(255) DEFAULT NULL,
  `technician` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `admin_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `orders` int(11) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title`, `url`, `images`, `orders`, `status`, `created_at`, `updated_at`) VALUES
(19, 'আপনার প্রয়োজন, আমাদের অঙ্গীকার', '#', '1748879970slide.jpg', 1, 'Active', '2025-06-01 22:42:40', '2025-06-02 09:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `sms_campaigns`
--

CREATE TABLE `sms_campaigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `schedule` varchar(255) DEFAULT NULL,
  `send_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sms_campaigns`
--

INSERT INTO `sms_campaigns` (`id`, `subject`, `type`, `content`, `schedule`, `send_status`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Shop form online', 'Client', 'Hello this is from Jago Power Ltd, you can buy luxury fans and lights in our shop or order online jagopower.com', NULL, 'Send', 'Instant', '2023-09-14 05:37:14', '2023-09-15 03:39:29'),
(2, 'Friday Offer', 'Client', 'Hello this form Jago Power Ltd, you can buy luxury fan and lights in our shop or order online jagopower.com', NULL, 'Pending', 'Instant', '2023-09-14 05:37:43', '2023-09-14 05:37:43');

-- --------------------------------------------------------

--
-- Table structure for table `sms_contents`
--

CREATE TABLE `sms_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `admin_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sms_logs`
--

CREATE TABLE `sms_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message_id` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `delivary` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL DEFAULT 'No',
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sms_logs`
--

INSERT INTO `sms_logs` (`id`, `message_id`, `subject`, `content`, `phone`, `delivary`, `job`, `status`, `created_at`, `updated_at`) VALUES
(1, '208797925', 'Shop form online', 'Hello this is from Jago Power Ltd, you can buy luxury fans and lights in our shop or order online jagopower.com', '01941698614', 'SENT', 'Yes', '0', '2023-09-15 03:54:42', '2023-09-14 22:01:56'),
(2, '208797928', 'Shop form online', 'Hello this is from Jago Power Ltd, you can buy luxury fans and lights in our shop or order online jagopower.com', '01682314951', 'SENT', 'Yes', '0', '2023-09-15 03:54:43', '2023-09-14 22:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `smtp_settings`
--

CREATE TABLE `smtp_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `encription` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `port` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `socialmedia`
--

CREATE TABLE `socialmedia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `tiktak` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socialmedia`
--

INSERT INTO `socialmedia` (`id`, `branch_id`, `facebook`, `twitter`, `linkedin`, `instagram`, `youtube`, `tiktak`, `created_at`, `updated_at`) VALUES
(1, 1, 'https://www.facebook.com/share/1KSG3bQu6q/', NULL, NULL, 'https://www.instagram.com/10bazar.store?igsh=MTB0dDQ4Z3FycmhoYg==', NULL, 'https://www.tiktok.com/@10bazar.store?_t=ZS-8woOuyv6fAO&_r=1', '2023-08-26 07:41:37', '2025-05-31 04:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `title`, `slug`, `content`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'luxary fan', 'luxary-fan', NULL, NULL, NULL, NULL, '2023-09-02 05:16:53', '2023-09-02 05:16:53'),
(2, 'website', 'website', NULL, NULL, NULL, NULL, '2023-09-02 05:16:53', '2023-09-02 05:16:53'),
(3, 'graphics design', 'graphics-design', NULL, NULL, NULL, NULL, '2023-09-02 05:16:53', '2023-09-02 05:16:53'),
(4, '', '', NULL, NULL, NULL, NULL, '2023-09-02 06:29:50', '2023-09-02 06:29:50'),
(5, 'Lighting', 'lighting', NULL, NULL, NULL, NULL, '2023-09-03 03:21:07', '2023-09-03 03:21:07'),
(6, 'Fan', 'fan', NULL, NULL, NULL, NULL, '2025-05-31 03:46:26', '2025-05-31 03:46:26'),
(7, 'MINI FAN', 'mini-fan', NULL, NULL, NULL, NULL, '2025-05-31 03:46:26', '2025-05-31 03:46:26');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pice', 'Pice', 'Active', '2023-08-24 02:06:58', '2023-08-24 02:06:58'),
(2, 'Grams', 'Grams', 'Active', '2023-08-24 02:07:08', '2023-08-24 02:07:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `trade_license` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `google_id` varchar(255) DEFAULT NULL,
  `facebook_id` varchar(255) DEFAULT NULL,
  `linkedin_id` varchar(255) DEFAULT NULL,
  `virification` varchar(255) DEFAULT NULL,
  `balance` varchar(255) NOT NULL DEFAULT '0',
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `browser` varchar(255) DEFAULT NULL,
  `platform` varchar(255) DEFAULT NULL,
  `device` varchar(255) DEFAULT NULL,
  `referer` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `country`, `city`, `browser`, `platform`, `device`, `referer`, `created_at`, `updated_at`) VALUES
(3, '103.129.212.160', 'Unknown', 'Unknown', 'Chrome', 'Windows', 'WebKit', NULL, '2025-06-03 11:05:01', '2025-06-03 11:05:01'),
(4, '57.141.2.20', 'Unknown', 'Unknown', '0', '0', '0', NULL, '2025-06-03 11:15:43', '2025-06-03 11:15:43'),
(5, '221.229.106.25', 'Unknown', 'Unknown', 'Safari', 'iOS', 'iPhone', NULL, '2025-06-03 11:20:53', '2025-06-03 11:20:53'),
(6, '57.141.2.4', 'Unknown', 'Unknown', '0', '0', '0', NULL, '2025-06-03 11:23:59', '2025-06-03 11:23:59'),
(7, '52.169.53.20', 'Unknown', 'Unknown', '0', '0', '0', NULL, '2025-06-03 11:32:31', '2025-06-03 11:32:31'),
(8, '57.141.2.30', 'Unknown', 'Unknown', '0', '0', '0', NULL, '2025-06-03 11:35:51', '2025-06-03 11:35:51'),
(9, '103.158.2.98', 'Unknown', 'Unknown', 'Chrome', 'AndroidOS', 'WebKit', NULL, '2025-06-03 11:37:30', '2025-06-03 11:37:30'),
(10, '43.165.69.68', 'Unknown', 'Unknown', 'Safari', 'iOS', 'iPhone', NULL, '2025-06-03 12:06:52', '2025-06-03 12:06:52'),
(11, '178.128.81.164', 'Unknown', 'Unknown', 'Chrome', 'Windows', 'WebKit', NULL, '2025-06-03 12:17:28', '2025-06-03 12:17:28'),
(12, '192.178.8.33', 'Unknown', 'Unknown', 'Chrome', 'AndroidOS', 'WebKit', NULL, '2025-06-03 12:17:51', '2025-06-03 12:17:51'),
(13, '192.178.8.34', 'Unknown', 'Unknown', 'Chrome', 'AndroidOS', 'WebKit', NULL, '2025-06-03 12:17:51', '2025-06-03 12:17:51'),
(14, '192.178.8.32', 'Unknown', 'Unknown', 'Chrome', 'AndroidOS', 'WebKit', NULL, '2025-06-03 12:18:17', '2025-06-03 12:18:17'),
(15, '57.141.2.5', 'Unknown', 'Unknown', '0', '0', '0', NULL, '2025-06-03 12:20:16', '2025-06-03 12:20:16'),
(16, '20.171.207.206', 'Unknown', 'Unknown', 'Mozilla', '0', 'WebKit', NULL, '2025-06-03 12:20:40', '2025-06-03 12:20:40'),
(17, '64.181.247.96', 'Unknown', 'Unknown', 'Chrome', 'Windows', 'WebKit', NULL, '2025-06-03 12:20:58', '2025-06-03 12:20:58'),
(18, '57.141.2.18', 'Unknown', 'Unknown', '0', '0', '0', NULL, '2025-06-03 12:23:02', '2025-06-03 12:23:02'),
(19, '91.134.91.17', 'Unknown', 'Unknown', 'Firefox', 'Windows', '0', NULL, '2025-06-03 12:28:26', '2025-06-03 12:28:26'),
(20, '57.141.2.6', 'Unknown', 'Unknown', '0', '0', '0', NULL, '2025-06-03 12:42:36', '2025-06-03 12:42:36');

-- --------------------------------------------------------

--
-- Table structure for table `vouchers`
--

CREATE TABLE `vouchers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `startdate` datetime NOT NULL,
  `enddate` datetime NOT NULL,
  `rewordtype` varchar(255) NOT NULL,
  `amount_type` varchar(255) NOT NULL,
  `discount_amount` varchar(255) NOT NULL,
  `min_amount` varchar(255) NOT NULL,
  `voucher_limit` varchar(255) NOT NULL,
  `useges_qty` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `current_balance` double(8,2) NOT NULL,
  `giftcard_balance` double(8,2) DEFAULT NULL,
  `cashback_balance` double(8,2) DEFAULT NULL,
  `holding_balance` double(8,2) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`id`, `current_balance`, `giftcard_balance`, `cashback_balance`, `holding_balance`, `customer_id`, `created_at`, `updated_at`) VALUES
(1, 0.00, 0.00, 0.00, 0.00, 1, '2023-09-09 06:29:01', '2023-09-09 06:29:01');

-- --------------------------------------------------------

--
-- Table structure for table `webinfos`
--

CREATE TABLE `webinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company` varchar(255) NOT NULL,
  `hotline` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `weblogs`
--

CREATE TABLE `weblogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `work_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `work_type` varchar(255) NOT NULL,
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
-- Indexes for table `adjustments`
--
ALTER TABLE `adjustments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `atributes`
--
ALTER TABLE `atributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
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
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `concave_bkash_response`
--
ALTER TABLE `concave_bkash_response`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_infos`
--
ALTER TABLE `contact_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flash_deals`
--
ALTER TABLE `flash_deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flash_deal_products`
--
ALTER TABLE `flash_deal_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `madmins`
--
ALTER TABLE `madmins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `madmins_email_unique` (`email`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderhistries`
--
ALTER TABLE `orderhistries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_addresses`
--
ALTER TABLE `order_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_payments`
--
ALTER TABLE `order_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_getways`
--
ALTER TABLE `payment_getways`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_sku_unique` (`sku`);

--
-- Indexes for table `product_stocks`
--
ALTER TABLE `product_stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_replies`
--
ALTER TABLE `review_replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_configs`
--
ALTER TABLE `seo_configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_metas`
--
ALTER TABLE `seo_metas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicings`
--
ALTER TABLE `servicings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_campaigns`
--
ALTER TABLE `sms_campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_contents`
--
ALTER TABLE `sms_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_logs`
--
ALTER TABLE `sms_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smtp_settings`
--
ALTER TABLE `smtp_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socialmedia`
--
ALTER TABLE `socialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ip` (`ip`,`created_at`);

--
-- Indexes for table `vouchers`
--
ALTER TABLE `vouchers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webinfos`
--
ALTER TABLE `webinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weblogs`
--
ALTER TABLE `weblogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adjustments`
--
ALTER TABLE `adjustments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `atributes`
--
ALTER TABLE `atributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=521;

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `concave_bkash_response`
--
ALTER TABLE `concave_bkash_response`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_infos`
--
ALTER TABLE `contact_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `flash_deals`
--
ALTER TABLE `flash_deals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flash_deal_products`
--
ALTER TABLE `flash_deal_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `madmins`
--
ALTER TABLE `madmins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=572;

--
-- AUTO_INCREMENT for table `orderhistries`
--
ALTER TABLE `orderhistries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_addresses`
--
ALTER TABLE `order_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_payments`
--
ALTER TABLE `order_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment_getways`
--
ALTER TABLE `payment_getways`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `product_stocks`
--
ALTER TABLE `product_stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `product_tags`
--
ALTER TABLE `product_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review_replies`
--
ALTER TABLE `review_replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_configs`
--
ALTER TABLE `seo_configs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seo_metas`
--
ALTER TABLE `seo_metas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicings`
--
ALTER TABLE `servicings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sms_campaigns`
--
ALTER TABLE `sms_campaigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sms_contents`
--
ALTER TABLE `sms_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sms_logs`
--
ALTER TABLE `sms_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `smtp_settings`
--
ALTER TABLE `smtp_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `socialmedia`
--
ALTER TABLE `socialmedia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `vouchers`
--
ALTER TABLE `vouchers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `webinfos`
--
ALTER TABLE `webinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `weblogs`
--
ALTER TABLE `weblogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
