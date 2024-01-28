-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2023 pada 23.07
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_forecast`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `forecastings`
--

CREATE TABLE `forecastings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `forecastings`
--

INSERT INTO `forecastings` (`id`, `tanggal`, `harga`, `created_at`, `updated_at`) VALUES
(1, '2021-06-02', 231, '2023-12-11 13:43:56', '2023-12-11 14:16:42'),
(2, '2021-06-03', 234, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(3, '2021-06-04', 234, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(4, '2021-06-07', 232, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(5, '2021-06-08', 228, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(6, '2021-06-09', 226, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(7, '2021-06-10', 226, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(8, '2021-06-11', 230, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(9, '2021-06-14', 230, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(10, '2021-06-15', 226, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(11, '2021-06-16', 214, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(12, '2021-06-17', 232, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(13, '2021-06-18', 228, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(14, '2021-06-21', 226, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(15, '2021-06-22', 222, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(16, '2021-06-23', 236, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(17, '2021-06-24', 232, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(18, '2021-06-25', 224, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(19, '2021-06-28', 238, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(20, '2021-06-29', 238, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(21, '2021-06-30', 238, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(22, '2021-07-01', 238, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(23, '2021-07-02', 240, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(24, '2021-07-05', 238, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(25, '2021-07-06', 240, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(26, '2021-07-07', 238, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(27, '2021-07-08', 236, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(28, '2021-07-09', 250, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(29, '2021-07-12', 246, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(30, '2021-07-13', 258, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(31, '2021-07-14', 262, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(32, '2021-07-15', 268, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(33, '2021-07-16', 274, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(34, '2021-07-19', 322, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(35, '2021-07-21', 368, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(36, '2021-07-22', 362, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(37, '2021-07-23', 432, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(38, '2021-07-26', 540, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(39, '2021-07-27', 590, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(40, '2021-07-28', 580, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(41, '2021-07-29', 580, '2023-12-11 13:43:56', '2023-12-11 13:43:56'),
(42, '2021-07-30', 600, '2023-12-11 13:43:56', '2023-12-11 13:43:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_forecasts`
--

CREATE TABLE `hasil_forecasts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `forecastings_id` bigint(20) UNSIGNED NOT NULL,
  `Y1` decimal(8,2) NOT NULL,
  `Y2` decimal(8,2) NOT NULL,
  `a` decimal(8,2) NOT NULL,
  `b` decimal(8,2) NOT NULL,
  `forecast` decimal(8,2) NOT NULL,
  `mape` decimal(8,3) NOT NULL,
  `mse` decimal(8,2) NOT NULL,
  `alpha` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hasil_forecasts`
--

INSERT INTO `hasil_forecasts` (`id`, `forecastings_id`, `Y1`, `Y2`, `a`, `b`, `forecast`, `mape`, `mse`, `alpha`, `created_at`, `updated_at`) VALUES
(85, 1, '231.00', '231.00', '231.00', '0.00', '0.00', '0.000', '0.00', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(86, 2, '231.30', '231.03', '231.57', '0.03', '231.00', '0.013', '9.00', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(87, 3, '231.57', '231.08', '232.06', '0.05', '231.60', '0.010', '5.76', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(88, 4, '231.61', '231.14', '232.09', '0.05', '232.11', '0.000', '0.01', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(89, 5, '231.25', '231.15', '231.36', '0.01', '232.14', '0.018', '17.16', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(90, 6, '230.73', '231.11', '230.35', '-0.04', '231.37', '0.024', '28.80', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(91, 7, '230.25', '231.02', '229.49', '-0.09', '230.30', '0.019', '18.53', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(92, 8, '230.23', '230.94', '229.52', '-0.08', '229.40', '0.003', '0.36', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(93, 9, '230.21', '230.87', '229.54', '-0.07', '229.44', '0.002', '0.32', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(94, 10, '229.79', '230.76', '228.81', '-0.11', '229.47', '0.015', '12.04', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(95, 11, '228.21', '230.50', '225.91', '-0.26', '228.70', '0.069', '216.15', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(96, 12, '228.59', '230.31', '226.86', '-0.19', '225.65', '0.027', '40.28', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(97, 13, '228.53', '230.13', '226.92', '-0.18', '226.67', '0.006', '1.78', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(98, 14, '228.27', '229.95', '226.60', '-0.19', '226.74', '0.003', '0.55', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(99, 15, '227.65', '229.72', '225.58', '-0.23', '226.42', '0.020', '19.49', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(100, 16, '228.48', '229.59', '227.37', '-0.12', '225.35', '0.045', '113.51', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(101, 17, '228.83', '229.52', '228.15', '-0.08', '227.25', '0.020', '22.59', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(102, 18, '228.35', '229.40', '227.30', '-0.12', '228.07', '0.018', '16.60', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(103, 19, '229.32', '229.39', '229.24', '-0.01', '227.18', '0.045', '117.01', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(104, 20, '230.18', '229.47', '230.90', '0.08', '229.23', '0.037', '76.92', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(105, 21, '230.97', '229.62', '232.31', '0.15', '230.98', '0.030', '49.35', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(106, 22, '231.67', '229.83', '233.51', '0.20', '232.46', '0.023', '30.70', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(107, 23, '232.50', '230.09', '234.91', '0.27', '233.72', '0.026', '39.48', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(108, 24, '233.05', '230.39', '235.71', '0.30', '235.18', '0.012', '7.96', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(109, 25, '233.75', '230.73', '236.77', '0.34', '236.01', '0.017', '15.92', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(110, 26, '234.17', '231.07', '237.27', '0.34', '237.10', '0.004', '0.80', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(111, 27, '234.35', '231.40', '237.31', '0.33', '237.62', '0.007', '2.62', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(112, 28, '235.92', '231.85', '239.99', '0.45', '237.64', '0.049', '152.78', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(113, 29, '236.93', '232.36', '241.50', '0.51', '240.44', '0.023', '30.91', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(114, 30, '239.03', '233.03', '245.04', '0.67', '242.00', '0.062', '255.86', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(115, 31, '241.33', '233.86', '248.81', '0.83', '245.71', '0.062', '265.33', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(116, 32, '244.00', '234.87', '253.13', '1.01', '249.64', '0.069', '337.22', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(117, 33, '247.00', '236.08', '257.91', '1.21', '254.14', '0.072', '394.43', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(118, 34, '254.50', '237.92', '271.07', '1.84', '259.13', '0.195', '3953.14', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(119, 35, '265.85', '240.72', '290.98', '2.79', '272.91', '0.258', '9041.43', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(120, 36, '275.46', '244.19', '306.74', '3.47', '293.77', '0.188', '4655.01', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(121, 37, '291.12', '248.88', '333.35', '4.69', '310.21', '0.282', '14832.75', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(122, 38, '316.01', '255.60', '376.41', '6.71', '338.04', '0.374', '40786.69', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(123, 39, '343.41', '264.38', '422.43', '8.78', '383.13', '0.351', '42796.51', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(124, 40, '367.06', '274.65', '459.48', '10.27', '431.21', '0.257', '22137.40', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(125, 41, '388.36', '286.02', '490.70', '11.37', '469.75', '0.190', '12154.69', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51'),
(126, 42, '409.52', '298.37', '520.68', '12.35', '502.07', '0.163', '9590.27', '0.10', '2023-12-11 14:16:51', '2023-12-11 14:16:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_01_113120_create_forcastings_table', 1),
(6, '2022_02_15_153355_update_forcastings_table', 1),
(7, '2023_12_10_174658_create_hasil_forecasts_table', 1),
(8, '2023_12_11_185741_create_ramalan_selanjutnyas_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ramalan_selanjutnyas`
--

CREATE TABLE `ramalan_selanjutnyas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `periode` int(11) NOT NULL,
  `forecast` decimal(8,2) NOT NULL,
  `alpha` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `forecastings`
--
ALTER TABLE `forecastings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hasil_forecasts`
--
ALTER TABLE `hasil_forecasts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `ramalan_selanjutnyas`
--
ALTER TABLE `ramalan_selanjutnyas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `forecastings`
--
ALTER TABLE `forecastings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `hasil_forecasts`
--
ALTER TABLE `hasil_forecasts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ramalan_selanjutnyas`
--
ALTER TABLE `ramalan_selanjutnyas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
