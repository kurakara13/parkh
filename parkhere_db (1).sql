-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Mar 2018 pada 00.57
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkhere_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_16_212548_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('Normal','Admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Normal',
  `token_verifikasi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aktif` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `token_verifikasi`, `aktif`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test2', 'test2@test.test', '$2y$10$p3crVcArhtcglfVWjFRUuOKXdGBDzriexIbUt5nF2JowfHr.uEugS', 'Normal', NULL, 0, 'uiqyDjyNOtBdgbeTdW884I85LgdlGlkt7aDvB1sPancifBqVeiI35xaxx8wH', '2018-03-06 21:27:06', '2018-03-06 21:27:06'),
(2, 'Test', 'test@test.test', '$2y$10$AvWNhSM8xchLIM5PxxFHsuXLHr6OmZjlgyzZ0uBP6A9TyneShZuL2', 'Normal', NULL, 1, 'rTnTcWlUiMgD3A3xF1GyaH3UHf4JBOV6ko1XUvcM6jOSxZSXXv5pYpY1Opv2', '2018-03-06 21:59:43', '2018-03-06 21:59:43'),
(3, 'Admin', 'admin@test.test', '$2y$10$/evt/.Kyaufb883zBmIBLej8vSiQj.MgSmUcVQUCiyQBGVSNyDG3W', 'Admin', NULL, 0, '9MZtDPEUicSstxcupSGqb9TbSkwXoOyvgZCsn4McfExSvw09Ma4cLA6IkrJx', '2018-03-06 22:02:34', '2018-03-06 22:02:34'),
(8, 'Gingga', 'gingga_ismu_m@yahoo.com', '$2y$10$xcSW19L5Tf4QY6pDUfENWOMEj7.s1LnRtpVwVPVdwt/xxXu4N7qiS', 'Normal', NULL, 1, '9E1LzkssTFVodwKM8aLd1tAVSVjcXmyPyogPJ92j4HRYDITfd945MnOQD7Yi', '2018-03-07 03:01:26', '2018-03-07 03:03:07'),
(9, 'jihad', 'balgohum7@gmail.com', '$2y$10$P18.gLcVcsEE6qSaVuCNa.5eideioIaXe5ohX9yEfHQiJoDFjvx7i', 'Normal', 'QQWkS9GJdH8yH7W1C8xKwuCBcNADWxPZsh88vUZEn6AyiKnFzv', 0, NULL, '2018-03-16 20:55:23', '2018-03-16 20:55:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
