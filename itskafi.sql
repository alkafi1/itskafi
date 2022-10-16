-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2022 at 08:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itskafi`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `welcome_note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `welcome_note`, `title`, `designation1`, `designation2`, `description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Hi! Welcome Here', ' Rupam', 'Laravel Developer', 'Full Stack Web Developer', 'I am a Web Developer and I have a few years experience with PHP, MySQL, HTML, CSS, jQuery, WordPress', 0, NULL, '2022-08-22 12:46:50', '2022-08-24 06:23:39'),
(5, 'Helloo Every One', 'I am Protik', 'Excutive', 'MBA Marketing', 'I am a Web Developer and I have a few years experience with PHP, MySQL, HTML, CSS, jQuery, WordPress', 0, NULL, '2022-08-24 06:23:06', '2022-08-24 06:45:19'),
(6, 'Hi! Welcome Here', 'Protik', 'Excutive', 'Marketing & Sales', 'I am Brand Marketing and Sales Executive of Siam Bangla Industry Limited.I am Brand Marketing and Sales Executive of Siam Bangla Industry Limited.', 1, NULL, '2022-08-24 06:45:10', '2022-08-24 06:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `banner_images`
--

CREATE TABLE `banner_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_images`
--

INSERT INTO `banner_images` (`id`, `image`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', '0', NULL, '2022-08-23 00:03:02', '2022-08-24 06:23:44'),
(2, '2.jpg', '0', '2022-08-23 00:03:45', '2022-08-23 00:03:08', '2022-08-23 00:03:45'),
(3, '3.png', '0', NULL, '2022-08-23 00:05:29', '2022-08-23 00:05:45'),
(4, '4.png', '0', NULL, '2022-08-24 06:23:27', '2022-08-24 06:37:11'),
(5, '5.jpg', '1', NULL, '2022-08-24 06:37:00', '2022-08-24 06:37:11');

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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(17, '2022_08_22_173713_create_banners_table', 2),
(20, '2022_08_22_174412_create_banner_images_table', 3);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `image`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Dina', 'dina@mailinator.com', NULL, '1.png', '$2y$10$qHoFzaPFkIeVEpatE/TZjemUnehp13xzU/lE7cDoK3rwRC7lsEkwu', NULL, '2022-08-22 10:13:51', '2022-08-22 10:02:37', '2022-08-22 10:13:51'),
(2, 'Ashely Gould', 'pojetiry@mailinator.com', NULL, '2.jpg', '$2y$10$R0uBWevFMimid4tRW0oUF.YOCjOzxRWh5q56MbfvQYzwJMVxAikE2', NULL, '2022-08-22 10:12:54', '2022-08-22 10:09:09', '2022-08-22 10:12:54'),
(3, 'Gibson', 'qodu@mailinator.com', NULL, '3.jpg', '$2y$10$6raqxqF9WTAHtvQZxdVjHO.zSmVfnTrh471K5r0WdMlr1iLr1a6Ju', NULL, NULL, '2022-08-22 10:13:44', '2022-08-24 06:43:23'),
(4, 'Flavia Jacobson', 'voke@mailinator.com', NULL, NULL, '$2y$10$NDbrKETQ4SxlMs0VEqU40.Jo5y81BTNJ0POhoALiknepfgAvdoFSy', NULL, NULL, '2022-08-22 23:35:26', '2022-08-22 23:35:26'),
(5, 'Rupam', 'hibem@mailinator.com', NULL, '5.png', '$2y$10$UiHf.L104ibKFWFF9U6m4.v1lIJx5e3Vqr.5zUKQh0TGxT/OoKY.O', NULL, NULL, '2022-08-22 23:47:09', '2022-08-23 03:54:10'),
(6, 'Hamilton Carr', 'horaj@mailinator.com', NULL, '6.png', '$2y$10$.rErri.0MGbdzD9LZrRfi.xohSSGHJk/HLKQdEu4i0Zaf5Hmwl8gy', NULL, NULL, '2022-08-23 08:02:21', '2022-08-23 08:02:23'),
(7, 'Tate Farrell', 'xuhe@mailinator.com', NULL, NULL, '$2y$10$JP1kn6McJMqyl8/oV1PKd.2ZYf6.h/os0zEQypmXdtyPnQzwl.N6G', NULL, NULL, '2022-08-23 08:41:47', '2022-08-23 08:41:47'),
(8, 'Quinn Nieves', 'tinowigiv@mailinator.com', NULL, NULL, '$2y$10$cRbQOZaYYrVsmbS3JIH4s.W9lVLoLMuXpCOiUT6Mh2wlCKaWNDUie', NULL, NULL, '2022-08-23 12:19:32', '2022-08-23 12:19:32'),
(9, 'Cedric Parsons', 'lyty@mailinator.com', NULL, NULL, '$2y$10$ck5u/w0G8dNPtlCZ7jGVmOlIM8LE0SwiUYCiuI.m2aDlRhXHl7eEq', NULL, NULL, '2022-08-24 06:21:35', '2022-08-24 06:21:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_images`
--
ALTER TABLE `banner_images`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `banner_images`
--
ALTER TABLE `banner_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
