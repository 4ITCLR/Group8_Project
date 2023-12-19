-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 19, 2023 at 09:30 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mafia`
--

-- --------------------------------------------------------

--
-- Table structure for table `cameras`
--

DROP TABLE IF EXISTS `cameras`;
CREATE TABLE IF NOT EXISTS `cameras` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cameras_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cameras`
--

INSERT INTO `cameras` (`id`, `brand`, `name`, `description`, `quantity`, `price`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(18, 'Nikon', 'TW zoom 3570', 'This a great camera', 5, '2500.00', '1702929962.png', 1, '2023-12-18 12:06:02', '2023-12-19 01:28:38'),
(15, 'Olympus', 'Trip 500', 'Classic Trip500 adventure', 4, '20000.00', '1701279935.png', 1, '2023-11-29 09:45:36', '2023-12-18 10:56:19');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `cam_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carts_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `cam_id`, `brand`, `name`, `quantity`, `price`, `image`, `user_name`, `user_id`, `status`, `address`, `created_at`, `updated_at`) VALUES
(1, '18', 'Nikon', 'TW zoom 3570', 2, '2500.00', '1702929962.png', 'Juan', 2, 'sold', 'Bry. Kung-Saan, Dihamahanap, Naprobinsya', '2023-12-19 01:28:22', '2023-12-19 01:28:38'),
(2, '15', 'Olympus', 'Trip 500', 1, '20000.00', '1701279935.png', 'Juan', 2, 'added', 'Bry. Kung-Saan, Dihamahanap, Naprobinsya', '2023-12-19 01:29:15', '2023-12-19 01:29:15'),
(3, '18', 'Nikon', 'TW zoom 3570', 1, '2500.00', '1702929962.png', 'Juan', 2, 'added', 'Bry. Kung-Saan, Dihamahanap, Naprobinsya', '2023-12-19 01:29:18', '2023-12-19 01:29:18');

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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_11_22_184029_create_cameras_table', 1),
(5, '2023_11_22_190809_create_cameras_table', 2),
(6, '2023_11_28_164106_create_cameras_table', 3),
(7, '2023_11_28_174302_create_cameras_table', 4),
(8, '2023_11_28_180722_create_cameras_table', 5),
(9, '2023_12_05_075650_create_cart_table', 6),
(10, '2023_12_05_085252_create_carts_table', 7),
(11, '2023_12_05_091026_create_carts_table', 8),
(12, '2023_12_05_094555_create_carts_table', 9),
(13, '2014_10_12_000000_create_users_table', 10),
(14, '2023_12_19_091919_create_carts_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_as` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `address`, `remember_token`, `role_as`, `created_at`, `updated_at`) VALUES
(1, 'Admin Admin', 'admin@gmail.com', NULL, '$2y$12$hVfomnjm8wZz4ZXkgM0Mw.oyw3NzBFig3XeON4Gy6frG/Mz6EEJ92', 'Some Home Town', NULL, 0, '2023-12-17 09:30:24', '2023-12-17 09:30:24'),
(2, 'Juan', 'juan@gmail.com', NULL, '$2y$12$VuH5XF0iFPQuDwha0c2sP.2Ipgkwu6Tl1Q0PqWdTH5Pbt.0DZPJPS', 'Bry. Kung-Saan, Dihamahanap, Naprobinsya', NULL, 1, '2023-12-17 09:56:35', '2023-12-17 09:56:35');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
