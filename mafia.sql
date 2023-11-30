-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2023 at 07:56 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cameras`
--

INSERT INTO `cameras` (`id`, `brand`, `name`, `description`, `quantity`, `price`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Olympus', 'Some', 'Classin', 2, '200.00', NULL, 1, '2023-11-28 10:36:45', '2023-11-28 10:36:45'),
(2, 'Olympus', 'Trip 500', 'Classic', 2, '200.00', NULL, 1, '2023-11-28 10:46:14', '2023-11-28 10:46:14'),
(3, 'Olympus', 'Trip 500', 'Classic', 2, '200.00', NULL, 1, '2023-11-28 10:46:33', '2023-11-28 10:46:33'),
(4, 'Olympus', 'Trip 500', 'Classic', 2, '200.00', NULL, 1, '2023-11-28 10:47:46', '2023-11-28 10:47:46'),
(5, 'Olympus', 'Trip 500', 'Classic', 2, '200.00', NULL, 1, '2023-11-28 10:49:24', '2023-11-28 10:49:24'),
(6, 'Olympus', 'Trip 500', 'Classic', 2, '200.00', NULL, 1, '2023-11-28 10:50:08', '2023-11-28 10:50:08'),
(7, 'Olympus', 'Trip 500', 'Classic camera', 2, '200.00', NULL, 1, '2023-11-28 10:50:28', '2023-11-28 10:50:28'),
(8, 'Olympus', 'Some', 'Classsicc', 2, '500.00', NULL, 1, '2023-11-28 11:14:22', '2023-11-28 11:14:22'),
(9, 'Olympus', 'Trip 500', 'Somethingss', 2, '300.00', NULL, 1, '2023-11-28 11:15:58', '2023-11-28 11:15:58'),
(10, 'Olympus', 'Trip 500', 'Somee filess', 2, '300.00', NULL, 1, '2023-11-28 11:16:40', '2023-11-28 11:16:40'),
(11, 'Olympus', 'Some', 'Somees', 2, '300.00', NULL, 1, '2023-11-28 11:40:41', '2023-11-28 11:40:41'),
(12, 'sda', 'dsad', 'sdas', 2, '300.00', NULL, 1, '2023-11-28 11:50:25', '2023-11-28 11:50:25');

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(8, '2023_11_28_180722_create_cameras_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_as` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role_as`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$.SRJsbOoKY50uOdmquTdHu1SJ169u.wYFnQGgb0hUdTm/m2GBHvim', NULL, 0, '2023-11-22 09:39:44', '2023-11-22 09:39:44'),
(2, 'User', 'user@gmail.com', NULL, '$2y$12$es3zRPR9oDUHfLPChygfxuYq3MrNPg4sgjB0gU..yXQ6WUB.yIyfC', NULL, 1, '2023-11-22 09:40:24', '2023-11-22 09:40:24'),
(5, 'Some More', 'example@gmail.com', NULL, '$2y$12$X3PW1PqfUK.b9joj4NrRrOXpl6NMHqxNK2UarugWdib96NkR.t6Vu', NULL, 1, '2023-11-22 10:02:40', '2023-11-22 10:02:40'),
(6, 'Another', 'sign@gmail.com', NULL, '$2y$12$nj9S0ABKdRYgu8Vsp9BUAeNzC6MGDZYraEzj4HHREn4R70HufAFR.', NULL, 1, '2023-11-22 10:03:38', '2023-11-22 10:03:38');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
