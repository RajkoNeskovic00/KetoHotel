-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2022 at 04:15 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keto`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `alt`, `title`, `sub_title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'blog1.jpg', 'swwimingPool', 'Enjoy in the music', 'Swwiming pool', 'Expect a night swimming party every night in front of the hotel', '2022-03-03 20:42:01', NULL),
(2, 'blog2.jpg', 'hotel', 'Reception at the hotel', 'Inside the hotel', 'At the entrance of the hotel there is a reception and the staff is very pleasant', '2022-03-01 20:42:17', NULL),
(3, 'blog3.jpg', 'hotelRoom', 'The best hotel room', 'Comfortable bed', 'On the tenth floor, there is a room that everyone says is the best, and people is ratings show that', '2022-03-02 20:42:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_cat` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_cat`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Single room', NULL, NULL),
(2, 'Double room', NULL, NULL),
(3, 'Triple room', NULL, NULL),
(4, 'Four-bed room', NULL, NULL),
(5, 'Five-bed room', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cena`
--

CREATE TABLE `cena` (
  `id_cena` int(10) UNSIGNED NOT NULL,
  `Price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cena`
--

INSERT INTO `cena` (`id_cena`, `Price`, `created_at`, `updated_at`) VALUES
(1, 55, NULL, NULL),
(2, 66, NULL, NULL),
(3, 34, NULL, NULL),
(4, 54, NULL, NULL),
(5, 67, NULL, NULL),
(6, 87, NULL, NULL),
(7, 67, NULL, NULL),
(8, 98, NULL, NULL),
(9, 65, NULL, NULL),
(10, 45, NULL, NULL),
(11, 12, NULL, NULL),
(12, 11, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `alt`, `created_at`, `updated_at`) VALUES
(1, 'gallery1.jpg', 'loby', '2022-03-01 21:32:39', NULL),
(2, 'gallery2.jpg', 'redRoom', '2022-03-02 21:32:44', NULL),
(3, 'gallery3.jpg', 'nightRoom', '2022-03-03 21:32:46', NULL),
(4, 'gallery4.jpg', 'wedingRoom', '2022-03-02 21:32:49', NULL),
(5, 'gallery5.jpg', 'seaRoom', '2022-03-01 21:32:52', NULL),
(6, 'gallery6.jpg', 'bussinesRoom', '2022-03-02 21:32:54', NULL),
(7, 'gallery7.jpg', 'eleganceRoom', '2022-03-02 21:32:57', NULL),
(8, 'gallery8.jpg', 'doubleRoom', '2022-03-02 21:32:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manu`
--

CREATE TABLE `manu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manu`
--

INSERT INTO `manu` (`id`, `name`, `route`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'home', NULL, NULL),
(2, 'About', 'about', NULL, NULL),
(3, 'Our room', 'room', NULL, NULL),
(5, 'Blog', 'blog', NULL, NULL),
(6, 'Contact us', 'contact', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `id_mark` int(10) UNSIGNED NOT NULL,
  `value` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`id_mark`, `value`, `created_at`, `updated_at`) VALUES
(1, 3, NULL, NULL),
(2, 4, NULL, NULL),
(3, 5, NULL, NULL),
(4, 6, NULL, NULL),
(5, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Rajko Nešković', 'rajko.neskovic.23.19@ict.edu.rs', '0640279400', 'asasssasasasas', NULL, NULL),
(3, 'Rajko Nešković', 'rajko.neskovic.23.19@ict.edu.rs', '0640279400', 'adadasgdj', NULL, NULL),
(4, 'Rajko Nešković', 'rajko.neskovic.23.19@ict.edu.rs', '0640279400', 'Message', NULL, NULL),
(5, 'Rajko Nešković', 'rajko.neskovic.23.19@ict.edu.rs', '0640279400', 'Message', NULL, NULL),
(6, 'Rajko Nešković', 'rajko.neskovic.23.19@ict.edu.rs', '0640279400', 'Message', NULL, NULL);

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_03_01_110937_create_manu_table', 1),
(3, '2022_03_01_132851_create_slider_table', 2),
(4, '2022_03_01_143633_create_messages_table', 3),
(5, '2022_03_01_201235_create_blogs_table', 4),
(6, '2022_03_01_212100_create_galleries_table', 5),
(10, '2022_03_02_121740_create_rooms_table', 6),
(11, '2022_03_02_122354_create_mark_table', 6),
(12, '2022_03_02_122514_create_category_table', 6),
(13, '2022_03_02_133438_create_cena_table', 7),
(14, '2022_03_02_133613_create_soba_cena_table', 7),
(15, '2022_03_02_133944_create_popust_table', 7),
(16, '2022_03_02_134049_create_popust_soba_table', 7),
(17, '2022_03_02_134257_create_sarzaj_smestaj_table', 7),
(18, '2022_03_02_134545_create_soba_sadrzaj_table', 7),
(19, '2022_03_02_141347_create_uloge_table', 8),
(20, '2022_03_02_141523_create_korisnici_table', 8),
(21, '2022_03_07_221636_create_reservations_table', 9);

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
-- Table structure for table `popust`
--

CREATE TABLE `popust` (
  `id` int(10) UNSIGNED NOT NULL,
  `value` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `popust`
--

INSERT INTO `popust` (`id`, `value`, `created_at`, `updated_at`) VALUES
(1, 5, NULL, NULL),
(2, 10, NULL, NULL),
(3, 20, NULL, NULL),
(4, 30, NULL, NULL),
(5, 40, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `popust_soba`
--

CREATE TABLE `popust_soba` (
  `id_popust_soba` int(10) UNSIGNED NOT NULL,
  `id_popust` int(10) UNSIGNED NOT NULL,
  `id_soba` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `popust_soba`
--

INSERT INTO `popust_soba` (`id_popust_soba`, `id_popust`, `id_soba`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-03-02', NULL, NULL),
(2, 1, 2, '2022-03-02', NULL, '2022-03-13 01:40:13'),
(3, 2, 4, '2022-03-02', NULL, NULL),
(4, 1, 5, '2022-03-02', NULL, NULL),
(5, 3, 6, '2022-03-02', NULL, NULL),
(6, 1, 7, '2022-03-02', NULL, NULL),
(7, 5, 8, '2022-03-02', NULL, NULL),
(8, 1, 9, '2022-03-02', NULL, NULL),
(9, 5, 10, '2022-03-02', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id_report` int(10) NOT NULL,
  `fullName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `poruka` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id_report`, `fullName`, `email`, `poruka`, `date`) VALUES
(1, 'Rajko Nešković', 'rajko.neskovic.23.19@ict.edu.rs', 'The user has logged in', '2022-03-12 00:00:00'),
(2, 'Rajko Nešković', 'rajko.neskovic.23.19@ict.edu.rs', 'The user has logged in', '2022-03-12 15:01:38'),
(3, 'Rajko Nešković', 'rajko.neskovic.23.19@ict.edu.rs', 'The user has logged out', '2022-03-12 15:02:51'),
(4, 'Rajko Nešković', 'rajko.neskovic.23.19@ict.edu.rs', 'The user has logged in', '2022-03-12 15:07:23'),
(5, 'Rajko Nešković', 'rajko.neskovic.23.19@ict.edu.rs', 'The user has logged out', '2022-03-12 16:04:11'),
(6, 'Ivan Ivanic', 'ivan@gmail.com', 'The user has logged out', '2022-03-12 16:06:02'),
(7, 'Marko Markovic', 'marko@gmail.com', 'The user has logged out', '2022-03-12 16:09:45'),
(8, 'Konstantin Kokic', 'konstantin@gmail.com', 'The user has registered', '2022-03-12 16:10:33'),
(9, 'Konstantin Kokic', 'konstantin@gmail.com', 'The user has logged out', '2022-03-12 16:10:48'),
(10, 'Rajko Nešković', 'rajko.neskovic.23.19@ict.edu.rs', 'The user has logged in', '2022-03-12 16:10:57'),
(11, 'Rajko Nešković', 'rajko.neskovic.23.19@ict.edu.rs', 'The user has logged out', '2022-03-12 16:14:16'),
(12, 'Rajko Nešković', 'rajko.neskovic.23.19@ict.edu.rs', 'The user has logged in', '2022-03-12 16:18:55'),
(13, 'Rajko Nešković', 'rajko.neskovic.23.19@ict.edu.rs', 'The user has logged in', '2022-03-13 01:08:28'),
(14, 'Rajko Nešković', 'rajko.neskovic.23.19@ict.edu.rs', 'The user has logged in', '2022-03-13 10:42:21'),
(15, 'Rajko Nešković', 'rajko.neskovic.23.19@ict.edu.rs', 'The user has logged out', '2022-03-13 16:02:38'),
(16, 'Rajko Nešković', 'rajko.neskovic.23.19@ict.edu.rs', 'The user has logged in', '2022-03-13 16:04:53'),
(17, 'Rajko Nešković', 'rajko.neskovic.23.19@ict.edu.rs', 'The user has logged out', '2022-03-13 18:36:32'),
(18, 'Rajko Nešković', 'rajko.neskovic.23.19@ict.edu.rs', 'The user has logged in', '2022-03-13 18:46:23'),
(19, 'Rajko Nešković', 'rajko.neskovic.23.19@ict.edu.rs', 'The user has logged out', '2022-03-13 18:46:28'),
(20, 'Konstantin Kokic', 'konstantin@gmail.com', 'The user has logged in', '2022-03-13 18:46:43'),
(21, 'Konstantin Kokic', 'konstantin@gmail.com', 'The user has logged out', '2022-03-13 18:46:47'),
(22, 'Konstantin Kokic', 'konstantin@gmail.com', 'The user has logged in', '2022-03-13 19:02:09'),
(23, 'Konstantin Kokic', 'konstantin@gmail.com', 'The user has logged out', '2022-03-13 19:15:05'),
(24, 'Rajko Nešković', 'rajko.neskovic.23.19@ict.edu.rs', 'The user has logged in', '2022-03-13 19:15:15'),
(25, 'Rajko Nešković', 'rajko.neskovic.23.19@ict.edu.rs', 'The user has logged out', '2022-03-13 20:16:07'),
(26, 'Rajko Nešković', 'rajko.neskovic.23.19@ict.edu.rs', 'The user has logged in', '2022-03-13 22:06:03');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id_rez` int(10) UNSIGNED NOT NULL,
  `broj_rezervacije` int(11) NOT NULL,
  `datumOd` date NOT NULL,
  `datumDo` date NOT NULL,
  `vreme_rezervacije` date NOT NULL,
  `id_korisnika` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_soba` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id_rez`, `broj_rezervacije`, `datumOd`, `datumDo`, `vreme_rezervacije`, `id_korisnika`, `created_at`, `updated_at`, `id_soba`) VALUES
(1, 1, '2022-03-08', '2022-03-10', '2007-03-22', 1, NULL, NULL, 1),
(2, 1, '2022-03-10', '2022-03-12', '2007-03-22', 1, NULL, NULL, 2),
(3, 5875, '2022-03-10', '2022-03-12', '2022-03-07', 1, NULL, NULL, 2),
(4, 9415, '2022-03-10', '2022-03-12', '2022-03-07', 1, NULL, NULL, 2),
(5, 457, '2022-03-12', '2022-03-18', '2022-03-11', 1, NULL, NULL, 1),
(6, 7260, '2022-03-12', '2022-03-18', '2022-03-11', 1, NULL, NULL, 1),
(7, 362, '2022-03-19', '2022-03-29', '2022-03-11', 1, NULL, NULL, 1),
(8, 627, '2022-03-18', '2022-03-24', '2022-03-11', 1, NULL, NULL, 1),
(9, 929, '2022-03-12', '2022-03-19', '2022-03-11', 1, NULL, NULL, 1),
(10, 8579, '2022-03-14', '2022-03-15', '2022-03-13', 1, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_cat` int(10) UNSIGNED NOT NULL,
  `id_mark` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `description`, `id_cat`, `id_mark`, `created_at`, `updated_at`, `image`) VALUES
(1, 'DOUBLE ROOM', 'Double room of 30-32m2. It is equipped with a double bed (dimensions 200x180cm), a sofa and a separate bathroom with underfloor heating. The position of these rooms allows guests a view of the Konake and the Malo Jezero trail.', 2, 1, NULL, NULL, 'room1.jpg'),
(2, 'DOUBLE ROOM', 'Double room of 30-32m2. It is equipped with a double bed (dimensions 200x180cm), a sofa and a separate bathroom with underfloor heating. The position of these rooms allows guests a view of the Konake and the Malo Jezero trail.', 1, 1, NULL, '2022-03-13 01:40:13', 'room2.jpg'),
(4, 'SUPERIOR ROOM', 'Superior room of 32m2, equipped with a double bed (dimensions 200x180cm), sofa bed (dimensions 180x120) and a separate bathroom with underfloor heating. The position of these rooms allows guests a view of the top of Pančići and a view of the Konake and the trail Malo Jezero. There is a possibility of connected rooms for certain accommodation units of this type.', 3, 2, NULL, NULL, 'room3.jpg'),
(5, 'SUPERIOR TWIN ROOM', 'Superior twin room of 32m2, equipped with two single beds (dimensions 200x100), sofa bed (dimensions 180x120), and a separate bathroom with underfloor heating. The position of these rooms allows guests a view of the top of Pančići and a view of the Konake and the trail Malo Jezero. There is a possibility of connected rooms for certain accommodation units of this type.', 2, 3, NULL, NULL, 'room5.jpg'),
(6, 'SUPERIOR FAMILY ROOM', 'Superior room of 34 m2, equipped with a double bed (dimensions 200x180cm), a spacious sofa bed (dimensions 180x140) and a separate bathroom with underfloor heating. The position of these rooms allows guests a view of the top of Pančići and a view of the Konake and the trail Malo Jezero.', 5, 4, NULL, NULL, 'room6.jpg'),
(7, 'DELUXE ROOM', 'Deluxe room površine 35m2, opremljena je francuskim ležajem (dimenzije 200x180cm), sofom na razvalčenje (dimenzije 180x120cm) i odvojenim kupatilom sa podnim grejanjem. Pozicija ovih soba omogućuje gostima pogled na vrh Pančića i pogled na Konake.', 4, 5, NULL, NULL, 'room6.jpg'),
(8, 'DELUXE FAMILY ROOM', 'Deluxe room of 42m2, equipped with a double bed (dimensions 200x180cm), a spacious sofa bed (dimensions 180x120cm) and a separate bathroom with underfloor heating. The position of these rooms allows guests a view of the top of Pančići and a view of the Konake.', 4, 3, NULL, NULL, 'room6.jpg'),
(9, 'ONE-BEDROOM SUITE', 'The apartments are 55 m2 in size and consist of a spacious living room with a sofa (dimensions 180x140cm) that can serve as an extra bed and bedrooms equipped with a double bed (dimensions 180x200cm). The bedroom has a separate bathroom with underfloor heating. In the living room there is a separate toilet with underfloor heating.', 1, 2, NULL, NULL, 'room4.jpg'),
(10, 'TWO-BEDROOM SUITE', 'The apartments have an area of 100m2 and consist of a spacious living room with a sofa (dimensions 180x140cm), table, chairs and a practical kitchen and two bedrooms equipped with a double bed (dimensions 200x180cm). The apartment has two separate bathrooms with underfloor heating. One room has its own bathroom, while the other room and living room share one bathroom. The apartment has a terrace.', 2, 4, NULL, NULL, 'room6.jpg'),
(30, 'CLASSIC ROOM', 'Classic room for our ....', 2, 2, '2022-03-14 00:46:07', NULL, 'room10.jpg'),
(31, 'ROOM DEX', 'dasdasasd', 1, 1, '2022-03-14 01:08:15', NULL, 'undefined'),
(32, 'Rajko', 'dasdasasd', 1, 1, '2022-03-14 01:09:07', NULL, 'room10.jpg'),
(33, 'Jovan', 'dasdasasd', 1, 1, '2022-03-14 01:23:35', NULL, 'room10.jpg'),
(36, 'aaaaaa', 'dasdasasd', 1, 1, '2022-03-14 01:31:32', NULL, 'room10.jpg'),
(37, 'www', 'dasdasasd', 1, 1, '2022-03-14 01:33:20', NULL, 'room10.jpg'),
(38, 'wwww', 'dasdasasd', 1, 1, '2022-03-14 01:35:51', NULL, 'room10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sadrzaj_smestaj`
--

CREATE TABLE `sadrzaj_smestaj` (
  `id_sadrzaj_smestaj` int(10) UNSIGNED NOT NULL,
  `naziv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sadrzaj_smestaj`
--

INSERT INTO `sadrzaj_smestaj` (`id_sadrzaj_smestaj`, `naziv`, `created_at`, `updated_at`) VALUES
(1, 'Free wi-fi', NULL, NULL),
(2, 'French bed / two separate beds', NULL, NULL),
(3, 'Bath coat and slippers', NULL, NULL),
(4, 'Lcd tv', NULL, NULL),
(5, 'Phone', NULL, NULL),
(6, 'Well equipped mini bar', NULL, NULL),
(7, 'Personal safety', NULL, NULL),
(8, 'Bathroom with shower cabin', NULL, NULL),
(9, 'Fen', NULL, NULL),
(10, 'Temperature control system', NULL, NULL),
(11, 'Slippers', NULL, NULL),
(12, 'Bed on request', NULL, NULL),
(13, 'Washing and ironing clothes on request', NULL, NULL),
(14, 'Additional pillows and covers on request', NULL, NULL),
(15, 'Extensible sofa', NULL, NULL),
(16, 'Coffee / tea set up', NULL, NULL),
(17, 'Newspapers and magazines', NULL, NULL),
(18, 'Additional pillows and covers on request', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currently_active` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `alt`, `currently_active`, `created_at`, `updated_at`) VALUES
(1, 'banner1.jpg', 'hotelRoom', 1, NULL, NULL),
(2, 'banner2.jpg', 'hotelView', 1, NULL, NULL),
(3, 'banner3.jpg', 'pool', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `soba_cena`
--

CREATE TABLE `soba_cena` (
  `id_soba_cena` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `id_cena` int(10) UNSIGNED NOT NULL,
  `id_soba` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soba_cena`
--

INSERT INTO `soba_cena` (`id_soba_cena`, `date`, `id_cena`, `id_soba`, `created_at`, `updated_at`) VALUES
(1, '2022-03-03', 2, 8, NULL, NULL),
(2, '2022-03-03', 3, 7, NULL, NULL),
(3, '2022-03-03', 5, 1, NULL, NULL),
(4, '2022-03-03', 5, 4, NULL, NULL),
(5, '2022-03-03', 5, 9, NULL, NULL),
(6, '2022-03-05', 9, 10, NULL, NULL),
(7, '2022-03-03', 7, 6, NULL, NULL),
(8, '2022-03-03', 8, 5, NULL, NULL),
(9, '2022-03-03', 1, 2, NULL, '2022-03-13 01:40:13');

-- --------------------------------------------------------

--
-- Table structure for table `soba_sadrzaj`
--

CREATE TABLE `soba_sadrzaj` (
  `id_soba_sad` int(10) UNSIGNED NOT NULL,
  `id_sadrzaj_smestaj` int(10) UNSIGNED NOT NULL,
  `id_soba` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soba_sadrzaj`
--

INSERT INTO `soba_sadrzaj` (`id_soba_sad`, `id_sadrzaj_smestaj`, `id_soba`, `created_at`, `updated_at`) VALUES
(1, 5, 5, NULL, NULL),
(2, 9, 7, NULL, NULL),
(3, 9, 9, NULL, NULL),
(4, 9, 10, NULL, NULL),
(5, 7, 4, NULL, NULL),
(6, 16, 7, NULL, NULL),
(7, 16, 2, NULL, NULL),
(8, 4, 10, NULL, NULL),
(9, 17, 10, NULL, NULL),
(10, 11, 8, NULL, NULL),
(11, 10, 10, NULL, NULL),
(12, 4, 2, NULL, NULL),
(13, 7, 6, NULL, NULL),
(14, 14, 5, NULL, NULL),
(15, 18, 9, NULL, NULL),
(16, 1, 8, NULL, NULL),
(17, 1, 1, NULL, NULL),
(18, 1, 31, '2022-03-14 01:08:15', NULL),
(19, 1, 32, '2022-03-14 01:09:07', NULL),
(22, 1, 36, NULL, NULL),
(23, 1, 37, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `uloge`
--

CREATE TABLE `uloge` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uloge`
--

INSERT INTO `uloge` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Aministrator', NULL, NULL),
(2, 'Korisnik', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_korisnika` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_uloga` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_korisnika`, `name`, `last_name`, `email`, `password`, `id_uloga`, `created_at`, `updated_at`) VALUES
(1, 'Rajko', 'Nešković', 'rajko.neskovic.23.19@ict.edu.rs', '$2y$10$rVUxqWI2hua8arktPbLDxuIV7lWyOx3G.Hf4h6XXCcbnhOOz.obVq', 1, '2022-03-05 16:33:38', '2022-03-05 16:33:38'),
(2, 'Rajko', 'Nešković', 'rajko.neskovic.23.19@ict.edu.rs', '$2y$10$4dpxv6/Tkq4NakVijBKEyuVxU7pmHCycE4IJ5K7Q5cV5fGqP5mP3O', 1, '2022-03-05 16:35:00', '2022-03-05 16:35:00'),
(3, 'Rajko', 'Nešković', 'rajko.neskovic.23.19@ict.edu.rs', '$2y$10$BE/bJyrjMP7CBnurTxbwtewpuEZrYi2pFIU80JqfAG4yqKxoxhgTe', 1, '2022-03-05 16:35:07', '2022-03-05 16:35:07'),
(4, 'Rajko', 'Nešković', 'rajko.neskovic.23.19@ict.edu.rs', '$2y$10$Aj3pmnjSGK3fD5UsYnhHou7WNxaJYwIWjp1TYFpUdDf6WNtTwUyj2', 1, '2022-03-05 16:41:07', '2022-03-05 16:41:07'),
(5, 'Rajko', 'Nešković', 'rajko.neskovic.23.19@ict.edu.rs', '$2y$10$eJO8pTwIwfa7tV3eI5aRLeNPAwqb6Il/m8rEnqnQAMWRDVg4WhHW6', 1, '2022-03-05 18:23:47', '2022-03-05 18:23:47'),
(6, 'Milan', 'Nešković', 'milan@gmail.com', '$2y$10$U5ffA0l04fugXlxwThtb2uFZIILqnDXPbDjMuCuEau87w00ncRIEq', 1, '2022-03-05 20:15:32', '2022-03-05 20:15:32'),
(7, 'Jovan', 'Jojic', 'jojo@gmail.com', '$2y$10$GlHqSpwfKzUdwNUaj5Cddev.RV5Ey.U7vt30pPtd6Mj/4RHPlu7RG', 2, '2022-03-06 11:02:02', '2022-03-06 11:02:02'),
(10, 'Milica', 'Micic', 'milica@gmail.com', '$2y$10$/xqsF8CIeNBtxo7SbcaZdeYcJOQRtTMMzH4B29SdDwdhTHA3ExqXa', 2, '2022-03-12 01:01:07', '2022-03-12 01:01:07'),
(11, 'Ivan', 'Ivanic', 'ivan@gmail.com', '$2y$10$DzOqHwFg0GQ9I0C4AddxceOTHAQYUQnTojpxommXmN1wVI7A.XjU6', 2, '2022-03-12 14:04:41', '2022-03-12 14:04:41'),
(12, 'Ivan', 'Ivanic', 'ivan@gmail.com', '$2y$10$UoA5E/9gt.7044QB6ysta.BKAYXtYN17lu/jZemq/Fy9DiPGX7ECC', 2, '2022-03-12 14:04:54', '2022-03-12 14:04:54'),
(13, 'Marko', 'Markovic', 'marko@gmail.com', '$2y$10$P/xj3D/yFxZijhTkcq1RXOyZ7OF64hTgeHAlCkUPmyoPAvyq8MbxO', 2, '2022-03-12 14:06:23', '2022-03-12 14:06:23'),
(14, 'Marko', 'Markovic', 'marko@gmail.com', '$2y$10$UaE6qEdY6DguF4iDSxVF5etWncm8S6FlIj2rzDai9EPg7boYq1sTi', 2, '2022-03-12 14:07:25', '2022-03-12 14:07:25'),
(15, 'Konstantin', 'Kokic', 'konstantin@gmail.com', '$2y$10$dBWx7kh82cT49qRfWy7zu.q/d7mgo/Ylhq85.Z3Tjjpu8HTsDr7Ai', 2, '2022-03-12 14:10:33', '2022-03-12 14:10:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `cena`
--
ALTER TABLE `cena`
  ADD PRIMARY KEY (`id_cena`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manu`
--
ALTER TABLE `manu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`id_mark`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `popust`
--
ALTER TABLE `popust`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popust_soba`
--
ALTER TABLE `popust_soba`
  ADD PRIMARY KEY (`id_popust_soba`),
  ADD KEY `popust_soba_id_popust_index` (`id_popust`),
  ADD KEY `popust_soba_id_soba_index` (`id_soba`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id_report`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id_rez`),
  ADD KEY `reservations_id_korisnika_index` (`id_korisnika`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rooms_id_cat_index` (`id_cat`),
  ADD KEY `rooms_id_mark_index` (`id_mark`);

--
-- Indexes for table `sadrzaj_smestaj`
--
ALTER TABLE `sadrzaj_smestaj`
  ADD PRIMARY KEY (`id_sadrzaj_smestaj`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soba_cena`
--
ALTER TABLE `soba_cena`
  ADD PRIMARY KEY (`id_soba_cena`),
  ADD KEY `soba_cena_id_cena_index` (`id_cena`),
  ADD KEY `soba_cena_id_soba_index` (`id_soba`);

--
-- Indexes for table `soba_sadrzaj`
--
ALTER TABLE `soba_sadrzaj`
  ADD PRIMARY KEY (`id_soba_sad`),
  ADD KEY `soba_sadrzaj_id_sadrzaj_smestaj_index` (`id_sadrzaj_smestaj`),
  ADD KEY `soba_sadrzaj_id_soba_index` (`id_soba`);

--
-- Indexes for table `uloge`
--
ALTER TABLE `uloge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_korisnika`),
  ADD KEY `korisnici_id_uloga_index` (`id_uloga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_cat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cena`
--
ALTER TABLE `cena`
  MODIFY `id_cena` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `manu`
--
ALTER TABLE `manu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mark`
--
ALTER TABLE `mark`
  MODIFY `id_mark` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `popust`
--
ALTER TABLE `popust`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `popust_soba`
--
ALTER TABLE `popust_soba`
  MODIFY `id_popust_soba` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id_report` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id_rez` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `sadrzaj_smestaj`
--
ALTER TABLE `sadrzaj_smestaj`
  MODIFY `id_sadrzaj_smestaj` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `soba_cena`
--
ALTER TABLE `soba_cena`
  MODIFY `id_soba_cena` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `soba_sadrzaj`
--
ALTER TABLE `soba_sadrzaj`
  MODIFY `id_soba_sad` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `uloge`
--
ALTER TABLE `uloge`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_korisnika` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `popust_soba`
--
ALTER TABLE `popust_soba`
  ADD CONSTRAINT `popust_soba_ibfk_1` FOREIGN KEY (`id_soba`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `popust_soba_ibfk_2` FOREIGN KEY (`id_popust`) REFERENCES `popust` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`id_mark`) REFERENCES `mark` (`id_mark`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rooms_ibfk_2` FOREIGN KEY (`id_cat`) REFERENCES `category` (`id_cat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `soba_cena`
--
ALTER TABLE `soba_cena`
  ADD CONSTRAINT `soba_cena_ibfk_1` FOREIGN KEY (`id_soba`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `soba_cena_ibfk_2` FOREIGN KEY (`id_cena`) REFERENCES `cena` (`id_cena`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `soba_sadrzaj`
--
ALTER TABLE `soba_sadrzaj`
  ADD CONSTRAINT `soba_sadrzaj_ibfk_1` FOREIGN KEY (`id_soba`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `soba_sadrzaj_ibfk_2` FOREIGN KEY (`id_sadrzaj_smestaj`) REFERENCES `sadrzaj_smestaj` (`id_sadrzaj_smestaj`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_uloga`) REFERENCES `uloge` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
