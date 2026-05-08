-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2026 at 11:09 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, ' ali', 'alialialiali', '2026-04-08 13:18:50', '2026-04-17 13:18:50'),
(2, 'alialialialialiali', 'alialialialialialialialialiali', '2026-04-22 13:18:50', '2026-04-28 13:18:50'),
(3, 'Prof. Jarvis Zulauf', 'eius-id-dolor-temporibus-est-eos', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(4, 'Miss Claudie D\'Amore', 'perferendis-optio-molestiae-sed-distinctio-et-ut', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(129, 'Deontae Dibbert', 'quasi-quam-facere-provident-eius-dolorum', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(130, 'Mr. Nikko Weissnat', 'et-non-ea-animi-earum', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(131, 'Prof. Francis Kshlerin III', 'libero-magni-consequuntur-ex-eum-modi-est', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(132, 'Reid Morar', 'voluptas-hic-aut-ex-cumque-est', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(133, 'Macy Ward', 'quod-consectetur-unde-enim-eum-animi', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(134, 'Deontae Lowe', 'ipsum-et-autem-corrupti-labore-autem-ut', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(135, 'Maegan Torphy', 'illo-impedit-non-atque-ut-rerum', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(136, 'Mia Dach Jr.', 'nihil-autem-magni-itaque-magnam-consequuntur-qui-dolore', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(137, 'Vivien Harber', 'sit-sed-possimus-rerum-rerum-voluptates', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(138, 'Mr. Guiseppe Bogisich', 'quasi-saepe-est-numquam', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(139, 'Reanna Nicolas', 'rem-ut-est-voluptate', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(140, 'Salvatore Hettinger II', 'dolores-quisquam-voluptatem-nisi-ipsa-iste', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(141, 'Martine Oberbrunner Sr.', 'tempora-iure-totam-sed-possimus-qui-amet-ducimus-qui', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(142, 'Mr. Rosario Hansen', 'qui-molestiae-et-architecto-iusto-ut-culpa-soluta', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(143, 'Delmer Cummerata', 'officia-rem-tempore-suscipit-nam-minus', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(144, 'Prof. Vladimir Marquardt', 'laborum-voluptas-doloribus-nostrum-numquam-sit-nostrum-minus', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(145, 'Reymundo Sanford', 'culpa-sed-illo-sunt-est-vero-ipsum-perspiciatis-est', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(146, 'Mitchel Crist', 'dolorum-adipisci-perferendis-magni-ullam-suscipit-aut', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(147, 'Bill Hagenes', 'reiciendis-aliquam-voluptas-suscipit-in-modi-sunt', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(148, 'Prof. Maxine Ziemann', 'dolores-aliquid-et-voluptatem-molestias', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(149, 'Isadore Gerlach', 'quia-quia-pariatur-autem-esse-est', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(150, 'Aileen Brakus III', 'quis-magni-architecto-officiis-ipsum-ex', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(151, 'Dr. Marvin Bergstrom', 'architecto-quas-deserunt-vel-ullam-ducimus-omnis-sit', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(152, 'Lambert Tillman Jr.', 'omnis-sit-facilis-ipsum-voluptatem-dolor-maiores-consequatur', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(153, 'Dr. Antone Heller', 'non-nobis-modi-voluptatibus-corrupti-atque-eaque', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(154, 'Lazaro Spinka', 'aut-quas-vel-voluptas-fuga', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(155, 'Nathaniel Emmerich DDS', 'placeat-dolor-illo-enim-inventore-corporis', '2026-04-30 20:28:49', '2026-04-30 20:28:49'),
(156, 'Suzanne Schmitt', 'accusamus-qui-atque-voluptatem-excepturi-in-blanditiis', '2026-04-30 20:28:49', '2026-04-30 20:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
(31, 96, 203, 'hgfgf', '2026-05-02 21:10:58', '2026-05-02 21:10:58'),
(32, 99, 203, 'fgsgdfgfds', '2026-05-02 21:17:18', '2026-05-02 21:17:18'),
(33, 95, 203, 'fdfa', '2026-05-02 21:24:00', '2026-05-02 21:24:00'),
(34, 99, 203, 'بلی', '2026-05-02 21:26:50', '2026-05-02 21:26:50'),
(35, 99, 203, 'بلی', '2026-05-02 21:27:28', '2026-05-02 21:27:28'),
(36, 99, 203, 'fdsfdas', '2026-05-02 21:30:18', '2026-05-02 21:30:18'),
(37, 97, 203, 'سلام', '2026-05-02 21:52:23', '2026-05-02 21:52:23'),
(38, 97, 204, 'والیکم', '2026-05-02 21:56:21', '2026-05-02 21:56:21'),
(39, 93, 204, 'lfkdjlkgfd', '2026-05-02 22:12:03', '2026-05-02 22:12:03'),
(40, 93, 204, 'fdsgfsd', '2026-05-02 22:12:17', '2026-05-02 22:12:17'),
(41, 102, 203, 'خوب تا این حد مهم نیست', '2026-05-03 01:17:53', '2026-05-03 01:17:53'),
(43, 99, 203, 'hi', '2026-05-03 19:43:09', '2026-05-03 19:43:09'),
(44, 100, 203, 'بلی واقعت است', '2026-05-03 20:11:34', '2026-05-03 20:11:34'),
(45, 95, 203, 'sghl', '2026-05-03 23:24:43', '2026-05-03 23:24:43'),
(46, 100, 203, 'gflkdg', '2026-05-03 23:25:19', '2026-05-03 23:25:19'),
(47, 104, 203, 'maitullah', '2026-05-03 23:25:56', '2026-05-03 23:25:56'),
(48, 101, 203, 'به شدت گوه در گوه', '2026-05-03 23:31:00', '2026-05-03 23:31:00'),
(49, 93, 206, 'sghl', '2026-05-04 18:39:53', '2026-05-04 18:39:53'),
(50, 96, 206, 'ali', '2026-05-04 19:25:27', '2026-05-04 19:25:27'),
(51, 109, 206, 'hi', '2026-05-04 22:36:13', '2026-05-04 22:36:13'),
(52, 107, 206, 'hhhhhhhh', '2026-05-04 22:39:21', '2026-05-04 22:39:21'),
(53, 96, 196, 'this is good', '2026-05-05 10:47:44', '2026-05-05 10:47:44'),
(54, 98, 196, 'ali is girl', '2026-05-05 10:54:33', '2026-05-05 10:54:33'),
(55, 103, 196, 'سنگ خوبی است', '2026-05-05 20:29:17', '2026-05-05 20:29:17'),
(56, 107, 196, 'یستبمنیبسش', '2026-05-05 20:41:41', '2026-05-05 20:41:41'),
(57, 95, 196, 'sghl', '2026-05-05 21:16:10', '2026-05-05 21:16:10'),
(58, 95, 196, 'dsfdsafsadfdsaf', '2026-05-05 22:48:27', '2026-05-05 22:48:27'),
(59, 105, 206, 'بهترین مسجد است', '2026-05-08 16:26:52', '2026-05-08 16:26:52');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` smallint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_04_25_062649_create_categories_table', 1),
(5, '2026_04_25_062755_create_posts_table', 1),
(6, '2026_04_25_063058_create_comments_table', 1),
(7, '2026_04_25_063136_create_likes_table', 1),
(8, '2026_04_29_152527_add_photo_to_users_table', 2),
(9, '2026_05_04_123142_add_deleted_at_to_posts_table', 3),
(10, '2026_05_04_124331_add_deleted_at_to_posts_table', 4),
(11, '2026_05_04_124411_add_deleted_at_to_posts_table', 4),
(12, '2026_05_04_124634_add_deleted_at_table', 5),
(13, '2026_05_06_140608_add_soft_deletes_to_users_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `views` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `image`, `category_id`, `user_id`, `views`, `created_at`, `updated_at`, `deleted_at`) VALUES
(93, 'ورزش یوگا', 'ورزش یوگا', 'یو گا بهترین ورزش است کی مردم چین جاپان از ان استفاده می کنه و ما همچنان باید این کار را بکنیم تا بدن مان سلامت باشه برای این یوگا بهترین ورزش است از نظر من اه دیوانه', '1777555901.jpg', 3, 196, 9, '2026-04-30 20:31:41', '2026-05-08 16:25:59', NULL),
(95, 'ساخت دیزارین کارد', 'ساخت دیزارین کارد', 'یکی از بهترین مودل های سال ام سال بوده است کی شما انرا دیده اید بلی', '1777988646.jpg', 3, 196, 5, '2026-04-30 20:38:22', '2026-05-06 20:50:26', '2026-05-06 20:50:26'),
(96, 'عکاسی های مدرن', 'عکاسی های مدرن', 'این یکی از بهترین عکاسی های بود کی در عمرم دیده بودم واقعا ک شیر است و شما هم باید این طور باشید شروع کنید', '1777996447.jpg', 3, 196, 3, '2026-04-30 20:46:55', '2026-05-06 20:39:57', '2026-05-06 20:39:57'),
(97, 'اقتصادی', 'اقتصادی', 'اقتصادی یک کشور باید انجینری باشه نه اقتصاد بخاطر کی نمیشه اخی اقتصادی اقتصادیاقتصادی اقتصادی یک کشور باید انجینری باشه', '1777557178.jpg', 1, 196, 0, '2026-04-30 20:52:58', '2026-05-06 20:42:53', '2026-05-06 20:42:53'),
(98, 'طیاره plan', 'طیاره plan', 'طیاره  یک کشور باید انجینری باشه طیاره یک کشور باید انجینری باشه طیاره  یک کشور باید انجینری باشه طیاره  یک کشور باید انجینری باشه طیاره یک کشور باید انجینری باشه طیاره یک کشور باید انجینری باشه', '1778163320.jpg', 3, 196, 5, '2026-04-30 21:01:11', '2026-05-08 16:26:13', NULL),
(99, 'فرزاد', 'فرزاد جان', 'یک سیاست مدار بی خبر از سیاست است خوش بختانه عادیوانه', '1777575058.png', 1, 196, 5, '2026-05-01 01:50:58', '2026-05-04 22:43:16', NULL),
(100, 'مونیر', 'منیر', 'یک کستیکش است یعنی بسیار کسکشی بلد است عا نی گاییده', '1777575254.jpg', 2, 196, 6, '2026-05-01 01:54:14', '2026-05-05 00:17:42', '2026-05-05 00:17:42'),
(101, 'اقتصاد کشور', 'اقتصاد کشور', 'اقتصاد کشور اقتصاد کشور اقتصاد کشور اقتصاد کشور اقتصاد کشور اقتصاد کشور اقتصاد کشوراقتصاد کشور اقتصاد کشور اقتصاد کشور اقتصاد کشور اقتصاد کشور اقتصاد کشور اقتصاد کشوراقتصاد کشور اقتصاد کشور', '1777644010.jpg', 4, 196, 2, '2026-05-01 21:00:10', '2026-05-06 20:41:08', '2026-05-06 20:41:08'),
(102, 'سیاست', 'سیاست', 'سیاست سیاست سیاست سیاست سیاست سیاست سیاست سیاست سیاست سیاست سیاست سیاست سیاست سیاست سیاست', '1777644393.jpg', 1, 196, 0, '2026-05-01 21:06:33', '2026-05-05 20:21:10', '2026-05-05 20:21:10'),
(103, 'تکنالوژی', 'تکنالوژی', 'تکنالوژی تکنالوژی تکنالوژی تکنالوژی تکنالوژی تکنالوژی تکنالوژی تکنالوژی تکنالوژی تکنالوژی تکنالوژی تکنالوژی تکنالوژی تکنالوژی تکنالوژی تکنالوژی', '1777644502.jpg', 3, 196, 3, '2026-05-01 21:08:22', '2026-05-06 15:11:40', NULL),
(104, 'پروگرامینگ', 'پروگرامینگ', 'پروگرامینگ پروگرامینگ پروگرامینگ پروگرامینگ پروگرامینگ پروگرامینگ پروگرامینگ پروگرامینگپروگرامینگ پروگرامینگ پروگرامینگ پروگرامینگ پروگرامینگ پروگرامینگ پروگرامینگ پروگرامینگ پروگرامینگ پروگرامینگ پروگرامینگ پروگرامینگ', '1777646206.jpg', 3, 196, 1, '2026-05-01 21:36:46', '2026-05-04 22:12:24', '2026-05-04 22:12:24'),
(105, 'مسجد', 'مسجد', 'مسجد مسجد مسجد مسجد مسجد مسجد مسجد مسجد مسجد مسجد مسجد مسجد مسجد مسجد مسجد مسجد مسجد مسجد مسجد مسجد مسجد مسجد مسجد مسجد مسجد', '1777648385.png', 4, 196, 6, '2026-05-01 22:13:05', '2026-05-08 16:26:20', NULL),
(106, 'علبی اسیبم بیمنبت', 'علبی اسیبم بیمنبت', 'بیسشب شیسب یسب بیس', '1777726006.jpg', 4, 203, 0, '2026-05-02 19:46:46', '2026-05-04 22:18:23', '2026-05-04 22:18:23'),
(107, 'dfgfd', 'dfgfd', 'gfdgfdg gf dfsgfd', '1777734937.jpg', 2, 204, 4, '2026-05-02 22:15:37', '2026-05-05 20:41:34', NULL),
(108, 'study', 'study', 'alialialialiali ali alialialialialialialialialialialialialialialialialiali', '1777908077.jpg', 3, 206, 0, '2026-05-04 22:21:17', '2026-05-04 22:21:17', NULL),
(109, 'matiullah zamarodi', 'matiullah zamarodi', 'im student of computer sience im student of computer sience im student of computer sience im student of computer sience im student of computer sience im student of computer sience', '1777908940.jpg', 3, 206, 2, '2026-05-04 22:35:40', '2026-05-05 01:08:16', NULL),
(110, 'تکنالوژی نو', 'تکنالوژی نو', 'تکنالوژی نو تکنالوژی نو تکنالوژی نو تکنالوژی نو تکنالوژی نو تکنالوژی نو تکنالوژی نو تکنالوژی نو تکنالوژی نو تکنالوژی نو تکنالوژی نو تکنالوژی نو تکنالوژی نو', '1777914658.jpg', 3, 203, 0, '2026-05-05 00:10:58', '2026-05-06 20:41:22', '2026-05-06 20:41:22'),
(111, 'fdssdfd', 'fdssdfd', 'fdsfdsfdsa', '1777952130.png', 1, 203, 1, '2026-05-05 10:35:30', '2026-05-05 10:35:50', '2026-05-05 10:35:50'),
(112, 'fdfdsa', 'fdfdsa', 'fdsafsdfdsfdsfds', '1777952186.jpg', 2, 203, 0, '2026-05-05 10:36:26', '2026-05-05 10:36:54', '2026-05-05 10:36:54'),
(113, 'fldsf', 'fldsf', 'fdfdsf', '1778073690.jpg', 2, 206, 0, '2026-05-06 20:20:52', '2026-05-06 20:29:31', '2026-05-06 20:29:31'),
(114, 'fdsf', 'fdsf', 'sadfsfdsf fdsafdsf', '1778143246.jpg', 2, 206, 0, '2026-05-07 15:40:46', '2026-05-07 20:50:39', '2026-05-07 20:50:39'),
(115, 'dsfdsfnsd sdfds', 'dsfdsfnsd sdfds', 'dsfdsaf dsfdsaf sdfdsaf dsfd fsdfsd', '1778143470.jpg', 4, 206, 3, '2026-05-07 15:44:30', '2026-05-07 23:01:27', NULL),
(116, 'dsf', 'dsf', 'sfdsa', '1778166646.jpg', 2, 209, 0, '2026-05-07 22:10:46', '2026-05-07 22:10:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('iol4SJxn2GEYlylyBt2uEz6D9GFFYWLkAbYDNT9p', 206, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiI3NVNVMDVhamJTTndGUzVna1lwZUFlSWpjckk3M1lJVHZ6eThPWW1RIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9wYW5lbEFkbWluIiwicm91dGUiOiJzaG93QWRtaW5wYW5lbCJ9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX0sImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjoyMDZ9', 1778177667),
('lfIH10ggIAUr9Yg4UhhNxvWDV6tZRBIoeZWrN5OF', 206, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJSbXR1ZlF3OXY4ZTNyaXlLM3BSYkRVM1Z4YnNlSWJHVWg1eWxLSkU3IiwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJfcHJldmlvdXMiOnsidXJsIjoiaHR0cDpcL1wvMTI3LjAuMC4xOjgwMDBcL3BhbmVsQWRtaW4iLCJyb3V0ZSI6InNob3dBZG1pbnBhbmVsIn0sImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjoyMDZ9', 1778170271),
('lRgohU0qcEgw3e28FpO2QTCgikr9iAN35Jg2P2LM', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.119.0 Chrome/142.0.7444.265 Electron/39.8.8 Safari/537.36', 'eyJfdG9rZW4iOiJuZWxmaUZiMUk5bEpmQ2tRSTZ6MUhyWk1oRENQcmNPREdJd1d2SVJiIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9sb2dpbiIsInJvdXRlIjoibG9naW4ifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJ1cmwiOnsiaW50ZW5kZWQiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvbmV3cyJ9fQ==', 1778177657),
('Uknbpnp8RHHlCobTQ3bEuRIls8GzjUmbCWJD2zIw', 206, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36', 'eyJfdG9rZW4iOiJUVXl3QTNUQUN1aWhxMWkwSFdUQjVUcFNSZWQ5R2hVOHRQT3pSVVVCIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9wb3N0XC9tYXRpdWxsYWglMjB6YW1hcm9kaVwvYXNzZXRzXC9pbWdcL2Zhdmljb24ucG5nIiwicm91dGUiOiJlcnJvclBhZ2UifSwiX2ZsYXNoIjp7Im9sZCI6W10sIm5ldyI6W119LCJ1cmwiOnsiaW50ZW5kZWQiOiJodHRwOlwvXC8xMjcuMC4wLjE6ODAwMFwvbmV3cyJ9LCJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI6MjA2LCJ2aWV3ZF9wb3N0XzkzIjp0cnVlLCJ2aWV3ZF9wb3N0Xzk4Ijp0cnVlLCJ2aWV3ZF9wb3N0XzEwNSI6dHJ1ZX0=', 1778232637);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `photo`, `role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(196, 'matiullah zamarodi0093', 'ZamarodiMatiullah95@gmail.com', '$2y$12$VQowpmNPzAGwNegS/VF34e0xbisYIQR.Osj0XPMzxfqNWR25F140S', '1777988458 . jpg', 'user', '2026-04-30 20:08:05', '2026-05-07 22:33:19', NULL),
(197, 'خیرالله ازاد', 'khairullah@gmail.com', '$2y$12$eq3nwZKGZIk6toH6eS4y8.tO2NQY0xjvBHluNbgpccjXs8s9LtyCO', '1778052546 . jpg', 'user', '2026-04-30 20:28:49', '2026-05-06 21:09:45', '2026-05-06 21:09:45'),
(203, 'MatiullahZamarodi', 'matiullah@gmail.com', '$2y$12$siMnl0yDnWQaNRafQNfwzuqKCf3sg0xmQOoWzSlU9.GOPCW.y0Y3K', '1777951309 . jpg', 'user', '2026-05-02 19:22:26', '2026-05-05 10:26:18', NULL),
(204, 'ahmadulklah', 'ahmad@dc.dc', '$2y$12$UMVUAsczBHFrXJNz09oCHeJ0APvlVgy8dpY2PxpZWMZSZzAUNlOYW', '1777733740.jpg', 'user', '2026-05-02 21:55:41', '2026-05-06 21:42:42', '2026-05-06 21:42:42'),
(206, 'مطیع الله زمردی', 'MATIULLAHzamarodi@gmailcom', '$2y$12$fkc2CTM7n.J7Jx0k2aRHo.vJJYZ839icFtJmd9iuAnhDs4Hdu0WQO', '1777894487.png', 'admin', '2026-05-04 18:34:50', '2026-05-05 23:08:45', NULL),
(208, 'afds', 'asas@v.v', '$2y$12$CXcKfLvLnEobSYhCCmXHzex3IM/fD6U7gtXV6WzJt5A/isx.WkGKO', '1778143176.jpg', 'user', '2026-05-07 15:39:38', '2026-05-07 15:44:57', '2026-05-07 15:44:57'),
(209, 'asas', 'aa@a.a', '$2y$12$qI5gB6cDy1O.agIiyexeA.0jP5NI1vICOQCfqXkXWMMyunG4JUhyS', '1778166608.jpg', 'user', '2026-05-07 22:10:09', '2026-05-07 22:10:09', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_post_id_foreign` (`post_id`),
  ADD KEY `likes_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_category_id_foreign` (`category_id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
