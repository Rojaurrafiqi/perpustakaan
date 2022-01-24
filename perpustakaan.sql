-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2022 at 04:37 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_01_22_045536_create_sessions_table', 1),
(7, '2016_08_03_072729_create_provinces_table', 2),
(8, '2016_08_03_072750_create_cities_table', 2),
(9, '2016_08_03_072804_create_districts_table', 2),
(10, '2016_08_03_072819_create_villages_table', 2),
(11, '2022_01_22_164606_create_perpustakaans_table', 3);

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
-- Table structure for table `perpustakaan`
--

CREATE TABLE `perpustakaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ktp_ktas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nomor_ktp_ktas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namalengkap` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_rumah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_instansi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telpon_instansi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_instansi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pendidikan_terakhir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_perkawinan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perpustakaan`
--

INSERT INTO `perpustakaan` (`id`, `ktp_ktas`, `nomor_ktp_ktas`, `email`, `namalengkap`, `password`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `hp`, `nama_instansi`, `telpon_instansi`, `alamat_instansi`, `pendidikan_terakhir`, `kelamin`, `pekerjaan`, `status_perkawinan`, `created_at`, `updated_at`) VALUES
(6, 'option_select_name', '11111111111111111111111111111111111111111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-22 20:55:43', '2022-01-22 20:55:43'),
(7, 'option_select_name', '11111111111112222222222222', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-22 20:56:55', '2022-01-22 20:56:55'),
(8, 'KTP', '111122222222', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-22 21:03:00', '2022-01-22 21:03:00'),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-22 21:37:00', '2022-01-22 21:37:00'),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-22 21:37:40', '2022-01-22 21:37:40'),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Menikah', '2022-01-22 21:39:58', '2022-01-22 21:39:58'),
(17, 'KTP', '111109010901901', 'rojaurrafiqi@gmail.com', 'Rojaur Rafiqi', '123123123', 'aceh besar', '2014-05-21', 'aceh', '09098228308', 'aceh', '09029093', 'aech', 'S1/D4', 'Pria', 'Wiraswasta', 'BelumMenikah', '2022-01-22 22:10:27', '2022-01-23 05:01:24'),
(18, 'KTP', '3525011711086058', 'ucok@gmail.com', 'ucok', '123123123', 'singkil', '2022-01-16', 'aceh', '0909878998', 'aceh', '0909878998', 'aceh', 'S1/D4', 'Pria', 'PNS', 'BelumMenikah', '2022-01-23 00:58:54', '2022-01-23 05:03:05'),
(22, 'KTP', '1111111111111111111110202010', 'febi@email.com', 'Febi ', '12345668', 'Banda Aceh', '1998-01-10', 'Jln mangga, gang sentosa, Banda Aceh', '08219090212', 'Unsyiah', '085277867', 'Jl. Teuku Nyak Arief No.441, Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh, Aceh 23111', 'SMA', 'Wanita', 'Mahasiswa', 'BelumMenikah', '2022-01-23 08:19:38', '2022-01-23 08:19:38'),
(23, 'KTP', '3525010510930001', 'Wulandari@gmail.com', 'Wulandari', '12345678', 'Jeunib', '2000-01-01', 'Jl Nirwana Sunter Asri Kompl Nirwana Sunter Asri Tahap 1 Bl F-20/', '082347126017', 'Unsyiah', '021888', 'Jl. Teuku Nyak Arief No.441, Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh, Aceh 23111', 'SMA', 'Wanita', 'Wiraswasta', 'BelumMenikah', '2022-01-23 08:22:17', '2022-01-23 08:22:17'),
(24, 'KTP', '3525016005650004', 'jail@email.com', 'Jail Firmansyah', '12345678', 'Lhokseumawe', '2001-11-09', 'Kompl Tmn Palem Lestari Ruko Galaxy Bl L/36, banda aceh', '083870239357', 'Unsyiah', '083870239357', 'Jl. Teuku Nyak Arief No.441, Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh, Aceh 23111', 'SMA', 'Pria', 'Mahasiswa', 'BelumMenikah', '2022-01-23 08:24:58', '2022-01-23 08:24:58'),
(25, 'KTP', '3525015306780002', 'zizi@gmail.com', 'Zizi Utami ', '12345678', 'Sigli', '2000-01-09', 'Jl Jend Sudirman Kav 1 Wisma 46 Kota BNI Lt 35, banda aceh', '082330602071', 'Unsyiah', '082330602071', 'Jl. Teuku Nyak Arief No.441, Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh, Aceh 23111', 'SMA', 'Pria', 'Mahasiswa', 'BelumMenikah', '2022-01-23 08:27:13', '2022-01-23 08:27:13'),
(26, 'KTP', '3525016501830002', 'ana@gmail.com', 'Ana Fujiati', '11111111', 'Bireun', '1999-04-04', 'Jl Nirwana Sunter Asri Kompl Nirwana Sunter Asri Tahap 1 Bl F-20/, Aceh besar', '083870239357', 'Unsyiah', '083870239357', 'Jl. Teuku Nyak Arief No.441, Kopelma Darussalam, Kec. Syiah Kuala, Kota Banda Aceh, Aceh 23111', 'SMA', 'Pria', 'Mahasiswa', 'BelumMenikah', '2022-01-23 08:28:42', '2022-01-23 08:28:42');

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('k8I0rmMc07oMwcJMfzQ330qY3OWHz0REHy0XtzTc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT0RXbjl4NlJRc1ZYNldKT0tRc21WbzBhelBJaXdYeU50T3dQalNQUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9kYXRhYW5nZ290YSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1642952049),
('NpTNsYk9HNffvN4A7aoZAnSG37LI51jwaXYZugy7', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVDluVGpiakswa1lxdjVXaEZMQ3lNcmJWNEw4RW96bDZQTzBMZ1FWbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9kYXRhYW5nZ290YSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1642952089),
('XExDwWWx6Cf4ha55Zhrp89lND8IFAppi60snSr11', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4692.71 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTW9Pc2phQm50bWM3MFdGNEVrZVZZYkRkcU9kQU5yNEFpdVhVYlJZZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9kYXRhYW5nZ290YSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1642947576);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@perpustakaan.com', NULL, '$2y$10$mCGglbbM7Q57rbtj7fq.Pua.C1ZmPT6sn57GmxbJ26ZrmqSE68Ume', NULL, NULL, NULL, NULL, NULL, '2022-01-21 22:14:25', '2022-01-21 22:14:25'),
(2, 'rojaur rafiqi', 'rojaurrafiqi25@gmail.com', NULL, '$2y$10$SieVGh6AkFrcPe9fWOknBOgrlxrdL.Qtk3e.EKMBkEEpLLh6E4Vwy', NULL, NULL, NULL, NULL, NULL, '2022-01-22 01:38:30', '2022-01-22 01:38:30');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `perpustakaan`
--
ALTER TABLE `perpustakaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `perpustakaan`
--
ALTER TABLE `perpustakaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
