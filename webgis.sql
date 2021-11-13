-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2019 at 05:52 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webgis`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar_jalan`
--

CREATE TABLE `gambar_jalan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `infrastruktur_air`
--

CREATE TABLE `infrastruktur_air` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `infrastruktur_bangunan`
--

CREATE TABLE `infrastruktur_bangunan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `infrastruktur_jembatan`
--

CREATE TABLE `infrastruktur_jembatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `infrastruktur_umum`
--

CREATE TABLE `infrastruktur_umum` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_infrastruktur`
--

CREATE TABLE `jenis_infrastruktur` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_jembatan`
--

CREATE TABLE `jenis_jembatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi_administrasi_jalan`
--

CREATE TABLE `klasifikasi_administrasi_jalan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi_beban_jalan`
--

CREATE TABLE `klasifikasi_beban_jalan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi_fungsi_jalan`
--

CREATE TABLE `klasifikasi_fungsi_jalan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi_fungsi_jembatan`
--

CREATE TABLE `klasifikasi_fungsi_jembatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi_jalan`
--

CREATE TABLE `klasifikasi_jalan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kondisi`
--

CREATE TABLE `kondisi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_fisik_jalan`
--

CREATE TABLE `kondisi_fisik_jalan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_jalan`
--

CREATE TABLE `kondisi_jalan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kondisi_permukaan_jalan`
--

CREATE TABLE `kondisi_permukaan_jalan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_history_kegiatan`
--

CREATE TABLE `laporan_history_kegiatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_infrastruktur_air`
--

CREATE TABLE `laporan_infrastruktur_air` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_infrastruktur_bangunan`
--

CREATE TABLE `laporan_infrastruktur_bangunan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_infrastruktur_jalan`
--

CREATE TABLE `laporan_infrastruktur_jalan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_infrastruktur_jembatan`
--

CREATE TABLE `laporan_infrastruktur_jembatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_perumahan_pemukiman`
--

CREATE TABLE `laporan_perumahan_pemukiman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_02_050927_create_kecamatan_table', 2),
(4, '2019_04_02_051243_create_jabatan_table', 2),
(5, '2019_04_02_051318_create_jenis_infrastruktur_table', 2),
(6, '2019_04_02_051347_create_sumber_dana_table', 2),
(7, '2019_04_02_051515_create_umum_infrastruktur_table', 2),
(8, '2019_04_02_051654_create_tingkat_akses_jalan_table', 2),
(9, '2019_04_02_051727_create_kondisi_table', 2),
(10, '2019_04_02_051803_create_kondisi_permukaan_jalan_table', 2),
(11, '2019_04_02_052014_create_wewenang_penanganan_jalan_table', 2),
(12, '2019_04_02_052104_create_jenis_jembatan_table', 2),
(13, '2019_04_02_052245_create_klasifikasi_fungsi_jalan_table', 2),
(14, '2019_04_02_052444_create_klasifikasi_beban_jalan_table', 2),
(15, '2019_04_02_052512_create_klasifikasi_administrasi_jalan_table', 2),
(16, '2019_04_02_052543_create_klasifikasi_fungsi_jembatan_table', 2),
(17, '2019_04_02_052630_create_pemetaan_infrastruktur_table', 2),
(18, '2019_04_02_052727_create_infrastruktur_jembatan_table', 2),
(19, '2019_04_02_052828_create_infrastruktur_bangunan_table', 2),
(20, '2019_04_02_052847_create_infrastruktur_air_table', 2),
(21, '2019_04_02_052911_create_infrastruktur_umum_table', 2),
(22, '2019_04_02_054850_create_laporan_infrastruktur_jalan_table', 2),
(23, '2019_04_02_055000_create_laporan_infrastruktur_jembatan_table', 2),
(24, '2019_04_02_055022_create_laporan_infrastruktur_bangunan_table', 2),
(25, '2019_04_02_055528_create_laporan_infrastruktur_air_table', 2),
(26, '2019_04_02_055657_create_laporan_perumahan_pemukiman_table', 2),
(27, '2019_04_02_055721_create_laporan_history_kegiatan_table', 2),
(28, '2019_04_02_055939_create_kondisi_fisik_jalan_table', 2),
(29, '2019_04_02_060003_create_klasifikasi_jalan_table', 2),
(30, '2019_04_02_060023_create_permukaan_jalan_table', 2),
(31, '2019_04_02_060113_create_kondisi_jalan_table', 2),
(32, '2019_04_02_060151_create_penanganan_jalan_table', 2),
(33, '2019_04_02_060233_create_gambar_jalan_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemetaan_infrastruktur`
--

CREATE TABLE `pemetaan_infrastruktur` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penanganan_jalan`
--

CREATE TABLE `penanganan_jalan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permukaan_jalan`
--

CREATE TABLE `permukaan_jalan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sumber_dana`
--

CREATE TABLE `sumber_dana` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tingkat_akses_jalan`
--

CREATE TABLE `tingkat_akses_jalan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `umum_infrastruktur`
--

CREATE TABLE `umum_infrastruktur` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'system testing', 'unclesukaopai@gmail.com', NULL, '$2y$10$pI4SM5HdwXF.JqmXNY1gme5YdsTbcoFjNB5.zyh3ywmpoS/vCm/7K', 'VczRNzgQOZv41MIPUD8cV7lYpSvTbxqHtM8p8SvGgVS5F3hwnJayRWfWvABw', '2019-04-02 20:25:11', '2019-04-02 20:37:19'),
(2, 'administrator', 'admin@admin.com', NULL, '$2y$10$w1DqvyFnafXcrPkQl1ue2uTyCdGluBkbGhlzmWmH7LTTL7BUwQzz6', NULL, '2019-04-04 08:09:14', '2019-04-04 08:09:14'),
(3, 'administrator', 'admin@mail.com', NULL, '$2y$10$BtuV.Iy8cMTM6oNXoQTcJ.AIKKZEcocxn4MVuq.8KPzxcDq47yohe', NULL, '2019-04-06 04:32:28', '2019-04-06 04:32:28');

-- --------------------------------------------------------

--
-- Table structure for table `wewenang_penanganan_jalan`
--

CREATE TABLE `wewenang_penanganan_jalan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar_jalan`
--
ALTER TABLE `gambar_jalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infrastruktur_air`
--
ALTER TABLE `infrastruktur_air`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infrastruktur_bangunan`
--
ALTER TABLE `infrastruktur_bangunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infrastruktur_jembatan`
--
ALTER TABLE `infrastruktur_jembatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infrastruktur_umum`
--
ALTER TABLE `infrastruktur_umum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_infrastruktur`
--
ALTER TABLE `jenis_infrastruktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_jembatan`
--
ALTER TABLE `jenis_jembatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klasifikasi_administrasi_jalan`
--
ALTER TABLE `klasifikasi_administrasi_jalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klasifikasi_beban_jalan`
--
ALTER TABLE `klasifikasi_beban_jalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klasifikasi_fungsi_jalan`
--
ALTER TABLE `klasifikasi_fungsi_jalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klasifikasi_fungsi_jembatan`
--
ALTER TABLE `klasifikasi_fungsi_jembatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klasifikasi_jalan`
--
ALTER TABLE `klasifikasi_jalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kondisi_fisik_jalan`
--
ALTER TABLE `kondisi_fisik_jalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kondisi_jalan`
--
ALTER TABLE `kondisi_jalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kondisi_permukaan_jalan`
--
ALTER TABLE `kondisi_permukaan_jalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_history_kegiatan`
--
ALTER TABLE `laporan_history_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_infrastruktur_air`
--
ALTER TABLE `laporan_infrastruktur_air`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_infrastruktur_bangunan`
--
ALTER TABLE `laporan_infrastruktur_bangunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_infrastruktur_jalan`
--
ALTER TABLE `laporan_infrastruktur_jalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_infrastruktur_jembatan`
--
ALTER TABLE `laporan_infrastruktur_jembatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_perumahan_pemukiman`
--
ALTER TABLE `laporan_perumahan_pemukiman`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pemetaan_infrastruktur`
--
ALTER TABLE `pemetaan_infrastruktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penanganan_jalan`
--
ALTER TABLE `penanganan_jalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permukaan_jalan`
--
ALTER TABLE `permukaan_jalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sumber_dana`
--
ALTER TABLE `sumber_dana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tingkat_akses_jalan`
--
ALTER TABLE `tingkat_akses_jalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `umum_infrastruktur`
--
ALTER TABLE `umum_infrastruktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wewenang_penanganan_jalan`
--
ALTER TABLE `wewenang_penanganan_jalan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar_jalan`
--
ALTER TABLE `gambar_jalan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infrastruktur_air`
--
ALTER TABLE `infrastruktur_air`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infrastruktur_bangunan`
--
ALTER TABLE `infrastruktur_bangunan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infrastruktur_jembatan`
--
ALTER TABLE `infrastruktur_jembatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `infrastruktur_umum`
--
ALTER TABLE `infrastruktur_umum`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_infrastruktur`
--
ALTER TABLE `jenis_infrastruktur`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_jembatan`
--
ALTER TABLE `jenis_jembatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `klasifikasi_administrasi_jalan`
--
ALTER TABLE `klasifikasi_administrasi_jalan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `klasifikasi_beban_jalan`
--
ALTER TABLE `klasifikasi_beban_jalan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `klasifikasi_fungsi_jalan`
--
ALTER TABLE `klasifikasi_fungsi_jalan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `klasifikasi_fungsi_jembatan`
--
ALTER TABLE `klasifikasi_fungsi_jembatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `klasifikasi_jalan`
--
ALTER TABLE `klasifikasi_jalan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kondisi_fisik_jalan`
--
ALTER TABLE `kondisi_fisik_jalan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kondisi_jalan`
--
ALTER TABLE `kondisi_jalan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kondisi_permukaan_jalan`
--
ALTER TABLE `kondisi_permukaan_jalan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan_history_kegiatan`
--
ALTER TABLE `laporan_history_kegiatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan_infrastruktur_air`
--
ALTER TABLE `laporan_infrastruktur_air`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan_infrastruktur_bangunan`
--
ALTER TABLE `laporan_infrastruktur_bangunan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan_infrastruktur_jalan`
--
ALTER TABLE `laporan_infrastruktur_jalan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan_infrastruktur_jembatan`
--
ALTER TABLE `laporan_infrastruktur_jembatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan_perumahan_pemukiman`
--
ALTER TABLE `laporan_perumahan_pemukiman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pemetaan_infrastruktur`
--
ALTER TABLE `pemetaan_infrastruktur`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penanganan_jalan`
--
ALTER TABLE `penanganan_jalan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permukaan_jalan`
--
ALTER TABLE `permukaan_jalan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sumber_dana`
--
ALTER TABLE `sumber_dana`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tingkat_akses_jalan`
--
ALTER TABLE `tingkat_akses_jalan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `umum_infrastruktur`
--
ALTER TABLE `umum_infrastruktur`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wewenang_penanganan_jalan`
--
ALTER TABLE `wewenang_penanganan_jalan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
