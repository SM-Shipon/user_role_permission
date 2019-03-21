-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2019 at 06:32 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `permission`
--

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_01_28_155010_create_permissions_table', 1),
(9, '2019_01_28_162018_create_roles_table', 1),
(10, '2019_02_01_124008_create_role_users_table', 1),
(11, '2019_02_01_142243_create_role_permissions_table', 2);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `permission_key`, `created_at`, `updated_at`) VALUES
(1, 'Role Create', 'role-create', '2019-02-01 09:09:23', '2019-02-01 09:09:23'),
(2, 'Role Manage', 'role-manage', '2019-02-01 09:10:11', '2019-02-01 09:10:11'),
(3, 'User Create', 'user-create', '2019-02-01 09:10:43', '2019-02-01 09:10:43'),
(4, 'User Manage', 'user-manage', '2019-02-01 09:11:03', '2019-02-01 09:11:03'),
(5, 'Permission Manage', 'permission-manage', '2019-02-01 09:11:35', '2019-02-01 09:12:21'),
(6, 'Permission Create', 'permission-create', '2019-02-01 09:12:01', '2019-02-01 09:12:01'),
(9, 'Permission Edit', 'permission-edit', '2019-02-02 04:08:23', '2019-02-02 04:08:23'),
(12, 'Permission Assign', 'permission-assign', '2019-02-02 04:15:19', '2019-02-02 04:15:19'),
(13, 'User Edit', 'user-edit', '2019-02-02 04:24:20', '2019-02-02 04:24:20'),
(14, 'User Delete', 'user-delete', '2019-02-02 04:24:44', '2019-02-02 04:24:44'),
(15, 'Permission Delete', 'permission-delete', '2019-02-02 04:28:02', '2019-02-02 04:28:02'),
(16, 'Role Delete', 'role-delete', '2019-02-02 04:29:20', '2019-02-02 04:29:20'),
(17, 'Role Edit', 'role-edit', '2019-02-02 04:50:12', '2019-02-02 04:50:12');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2019-02-01 06:45:04', '2019-02-01 06:45:04'),
(2, 'User', '2019-02-01 06:45:06', '2019-02-01 06:45:06'),
(3, 'Accountant', '2019-02-02 04:13:18', '2019-02-02 04:13:18');

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

CREATE TABLE `role_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_permissions`
--

INSERT INTO `role_permissions` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(120, 3, 3, '2019-02-02 04:14:34', '2019-02-02 04:14:34'),
(121, 3, 4, '2019-02-02 04:14:34', '2019-02-02 04:14:34'),
(251, 1, 1, '2019-02-02 11:29:15', '2019-02-02 11:29:15'),
(252, 1, 2, '2019-02-02 11:29:15', '2019-02-02 11:29:15'),
(253, 1, 3, '2019-02-02 11:29:15', '2019-02-02 11:29:15'),
(254, 1, 4, '2019-02-02 11:29:15', '2019-02-02 11:29:15'),
(255, 1, 6, '2019-02-02 11:29:15', '2019-02-02 11:29:15'),
(256, 1, 9, '2019-02-02 11:29:15', '2019-02-02 11:29:15'),
(257, 1, 12, '2019-02-02 11:29:16', '2019-02-02 11:29:16'),
(258, 1, 13, '2019-02-02 11:29:16', '2019-02-02 11:29:16'),
(259, 1, 14, '2019-02-02 11:29:16', '2019-02-02 11:29:16'),
(260, 1, 17, '2019-02-02 11:29:16', '2019-02-02 11:29:16'),
(261, 2, 1, '2019-02-02 11:30:29', '2019-02-02 11:30:29'),
(262, 2, 2, '2019-02-02 11:30:29', '2019-02-02 11:30:29'),
(263, 2, 3, '2019-02-02 11:30:29', '2019-02-02 11:30:29'),
(264, 2, 4, '2019-02-02 11:30:29', '2019-02-02 11:30:29'),
(265, 2, 5, '2019-02-02 11:30:29', '2019-02-02 11:30:29'),
(266, 2, 6, '2019-02-02 11:30:29', '2019-02-02 11:30:29'),
(267, 2, 16, '2019-02-02 11:30:29', '2019-02-02 11:30:29');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-02-01 06:51:54', '2019-02-01 06:51:54'),
(2, 2, 2, '2019-02-01 06:53:05', '2019-02-01 06:53:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Shipon', 'admin', 'admin@gmail.com', '$2y$10$BHAJHXGQdAGWE4A8B0zjDOlzfFEVV.rUStJcn45vvyOJhXsnFPknK', 1, 'ayWVFxiHzRg7uqf212hvAH0xHSEjhHV4IJN18ZRHUguAlwqACrrsGAanzLxq', '2019-02-01 06:51:54', '2019-02-01 06:51:54'),
(2, 'Rubel', 'user', 'user@gmail.com', '$2y$10$GbBLTE7.n4N/5vGpJFR7Ru7/AVvNLUkNOolwZbaz0jn2vuDxFZ9su', 1, '4U1veJvkCwKSTdiprLG07FDmivfVtfF6GCGFFlq53jZJmROGNNS3GJIykM5I', '2019-02-01 06:53:05', '2019-02-01 06:53:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_permissions_role_id_foreign` (`role_id`),
  ADD KEY `role_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_users_role_id_foreign` (`role_id`),
  ADD KEY `role_users_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `role_permissions`
--
ALTER TABLE `role_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT for table `role_users`
--
ALTER TABLE `role_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD CONSTRAINT `role_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_users`
--
ALTER TABLE `role_users`
  ADD CONSTRAINT `role_users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
