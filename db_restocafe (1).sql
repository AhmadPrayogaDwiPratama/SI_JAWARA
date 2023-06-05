-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 09:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_restocafe`
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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_01_062747_create_restorans_table', 1);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restorans`
--

CREATE TABLE `restorans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_cafe`
--

CREATE TABLE `tb_cafe` (
  `id_cafe` varchar(50) NOT NULL,
  `nama_cafe` varchar(50) NOT NULL,
  `alamat_cafe` varchar(20) NOT NULL,
  `nomor_telepon_cafe` varchar(12) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_cafe`
--

INSERT INTO `tb_cafe` (`id_cafe`, `nama_cafe`, `alamat_cafe`, `nomor_telepon_cafe`, `updated_at`, `created_at`) VALUES
('IC002', 'adade', 'rahasia', '025874569874', '2023-06-01 22:56:21', '2023-06-01 22:56:02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id_karyawan` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `nomor_telepon` varchar(12) NOT NULL,
  `alamat_karyawan` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_karyawan`, `id_user`, `nama_karyawan`, `nomor_telepon`, `alamat_karyawan`, `updated_at`, `created_at`) VALUES
('IDK001', 'USR001', 'awda', '025874569874', 'rahasia', '2023-06-03 11:50:52', '2023-06-03 11:46:37');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteriacafe`
--

CREATE TABLE `tb_kriteriacafe` (
  `id_KriteriaCafe` varchar(10) NOT NULL,
  `Nama_KriteriaCafe` varchar(20) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kriteriacafe`
--

INSERT INTO `tb_kriteriacafe` (`id_KriteriaCafe`, `Nama_KriteriaCafe`, `updated_at`, `created_at`) VALUES
('IKC001', 'good', '2023-06-01 11:23:51', '2023-06-01 11:23:51');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteriarestoran`
--

CREATE TABLE `tb_kriteriarestoran` (
  `id_KriteriaRestoran` varchar(10) NOT NULL,
  `Nama_KriteriaRestoran` varchar(20) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kriteriarestoran`
--

INSERT INTO `tb_kriteriarestoran` (`id_KriteriaRestoran`, `Nama_KriteriaRestoran`, `updated_at`, `created_at`) VALUES
('IKR001', 'good', '2023-06-01 11:24:12', '2023-06-01 11:24:12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_makanan`
--

CREATE TABLE `tb_makanan` (
  `id_makanan` varchar(50) NOT NULL,
  `nama_makanan` varchar(50) NOT NULL,
  `deskripsi_makanan` varchar(50) NOT NULL,
  `harga_makanan` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_makanan`
--

INSERT INTO `tb_makanan` (`id_makanan`, `nama_makanan`, `deskripsi_makanan`, `harga_makanan`, `updated_at`, `created_at`) VALUES
('MKN01', 'Sate', 'Bumbu Pisah', '30000', '2023-06-02 02:45:43', '2023-06-02 02:45:43');

-- --------------------------------------------------------

--
-- Table structure for table `tb_minuman`
--

CREATE TABLE `tb_minuman` (
  `id_minuman` varchar(50) NOT NULL,
  `nama_minuman` varchar(50) NOT NULL,
  `deskripsi_minuman` varchar(50) NOT NULL,
  `harga_minuman` int(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_minuman`
--

INSERT INTO `tb_minuman` (`id_minuman`, `nama_minuman`, `deskripsi_minuman`, `harga_minuman`, `updated_at`, `created_at`) VALUES
('IDM001', 'Teh Hangat', 'Manis + Madu', 6000, '2023-06-02 04:39:41', '2023-06-02 04:37:01');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembeli`
--

CREATE TABLE `tb_pembeli` (
  `id_pembeli` varchar(50) NOT NULL,
  `id_user` varchar(50) DEFAULT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pembeli`
--

INSERT INTO `tb_pembeli` (`id_pembeli`, `id_user`, `nama_pembeli`, `jenis_kelamin`, `updated_at`, `created_at`) VALUES
('IDP001', 'USR001', 'Febri', 'perempuan', '2023-06-03 07:18:34', '2023-06-03 07:18:26'),
('IDP002', 'USR003', 'Febri', 'perempuan', '2023-06-03 11:33:41', '2023-06-03 11:33:41');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penilaiancafe`
--

CREATE TABLE `tb_penilaiancafe` (
  `id_penilaiancafe` varchar(50) NOT NULL,
  `id_cafe` varchar(50) NOT NULL,
  `id_KriteriaCafe` varchar(50) NOT NULL,
  `id_pembeli` varchar(50) NOT NULL,
  `nilai_penilaian` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penilaianrestoran`
--

CREATE TABLE `tb_penilaianrestoran` (
  `id_penilaianrestoran` varchar(50) NOT NULL,
  `id_restoran` varchar(50) NOT NULL,
  `id_KriteriaRestoran` varchar(50) NOT NULL,
  `id_pembeli` varchar(50) NOT NULL,
  `nilai_penilaian` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanancafe`
--

CREATE TABLE `tb_pesanancafe` (
  `id_pesanancafe` varchar(50) NOT NULL,
  `id_cafe` varchar(50) NOT NULL,
  `id_minuman` varchar(50) NOT NULL,
  `id_pembeli` varchar(50) NOT NULL,
  `jumlah_minuman` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanancafe`
--

INSERT INTO `tb_pesanancafe` (`id_pesanancafe`, `id_cafe`, `id_minuman`, `id_pembeli`, `jumlah_minuman`, `updated_at`, `created_at`) VALUES
('IDPC01', 'IC002', 'IDM001', 'IDP001', '3', '2023-06-04 06:14:16', '2023-06-04 06:14:16');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesananrestoran`
--

CREATE TABLE `tb_pesananrestoran` (
  `id_pesananrestoran` varchar(50) NOT NULL,
  `id_restoran` varchar(50) NOT NULL,
  `id_makanan` varchar(50) NOT NULL,
  `id_pembeli` varchar(50) NOT NULL,
  `jumlah_makanan` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_restoran`
--

CREATE TABLE `tb_restoran` (
  `id_restoran` varchar(50) NOT NULL,
  `nama_restoran` varchar(50) NOT NULL,
  `alamat_restoran` varchar(20) NOT NULL,
  `nomor_telepon` varchar(12) NOT NULL,
  `deskripsi_restoran` varchar(50) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `katasandi_user` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `email_user`, `katasandi_user`, `updated_at`, `created_at`) VALUES
('USR001', 'Febri', 'user@gmail.com', 'FebFeb01', '2023-06-03 06:45:17', '2023-06-03 06:45:17'),
('USR002', 'dawd', 'yoga@gmail.com', 'chg', '2023-06-03 06:59:26', '2023-06-03 06:59:26'),
('USR003', 'Anti', 'Febri@gmail.com', 'yoo', '2023-06-03 11:33:08', '2023-06-03 11:33:08');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `restorans`
--
ALTER TABLE `restorans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_cafe`
--
ALTER TABLE `tb_cafe`
  ADD PRIMARY KEY (`id_cafe`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_kriteriacafe`
--
ALTER TABLE `tb_kriteriacafe`
  ADD PRIMARY KEY (`id_KriteriaCafe`);

--
-- Indexes for table `tb_kriteriarestoran`
--
ALTER TABLE `tb_kriteriarestoran`
  ADD PRIMARY KEY (`id_KriteriaRestoran`);

--
-- Indexes for table `tb_makanan`
--
ALTER TABLE `tb_makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indexes for table `tb_minuman`
--
ALTER TABLE `tb_minuman`
  ADD PRIMARY KEY (`id_minuman`);

--
-- Indexes for table `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  ADD PRIMARY KEY (`id_pembeli`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tb_penilaiancafe`
--
ALTER TABLE `tb_penilaiancafe`
  ADD PRIMARY KEY (`id_penilaiancafe`),
  ADD KEY `id_cafe` (`id_cafe`),
  ADD KEY `id_KriteriaCafe` (`id_KriteriaCafe`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indexes for table `tb_penilaianrestoran`
--
ALTER TABLE `tb_penilaianrestoran`
  ADD PRIMARY KEY (`id_penilaianrestoran`),
  ADD KEY `id_restoran` (`id_restoran`),
  ADD KEY `id_KriteriaRestoran` (`id_KriteriaRestoran`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indexes for table `tb_pesanancafe`
--
ALTER TABLE `tb_pesanancafe`
  ADD PRIMARY KEY (`id_pesanancafe`),
  ADD KEY `id_coffeeshop` (`id_cafe`,`id_minuman`),
  ADD KEY `relasi_id_minuman` (`id_minuman`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indexes for table `tb_pesananrestoran`
--
ALTER TABLE `tb_pesananrestoran`
  ADD PRIMARY KEY (`id_pesananrestoran`),
  ADD KEY `id_restoran` (`id_restoran`),
  ADD KEY `id_makanan` (`id_makanan`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indexes for table `tb_restoran`
--
ALTER TABLE `tb_restoran`
  ADD PRIMARY KEY (`id_restoran`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restorans`
--
ALTER TABLE `restorans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD CONSTRAINT `relasi_id_user_karyawan` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pembeli`
--
ALTER TABLE `tb_pembeli`
  ADD CONSTRAINT `relasi_id_user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_penilaiancafe`
--
ALTER TABLE `tb_penilaiancafe`
  ADD CONSTRAINT `tb_penilaiancafe_ibfk_1` FOREIGN KEY (`id_cafe`) REFERENCES `tb_cafe` (`id_cafe`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_penilaiancafe_ibfk_2` FOREIGN KEY (`id_KriteriaCafe`) REFERENCES `tb_kriteriacafe` (`id_KriteriaCafe`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_penilaiancafe_ibfk_3` FOREIGN KEY (`id_pembeli`) REFERENCES `tb_pembeli` (`id_pembeli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_penilaianrestoran`
--
ALTER TABLE `tb_penilaianrestoran`
  ADD CONSTRAINT `relasi_id_kriteriarestoran_penilaian` FOREIGN KEY (`id_KriteriaRestoran`) REFERENCES `tb_kriteriarestoran` (`id_KriteriaRestoran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relasi_id_pembeli_penilaian` FOREIGN KEY (`id_pembeli`) REFERENCES `tb_pembeli` (`id_pembeli`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relasi_id_restoran_penilaian` FOREIGN KEY (`id_restoran`) REFERENCES `tb_restoran` (`id_restoran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pesanancafe`
--
ALTER TABLE `tb_pesanancafe`
  ADD CONSTRAINT `relasi_id_cafe` FOREIGN KEY (`id_cafe`) REFERENCES `tb_cafe` (`id_cafe`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relasi_id_minuman` FOREIGN KEY (`id_minuman`) REFERENCES `tb_minuman` (`id_minuman`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relasicafe_id_pembeli` FOREIGN KEY (`id_pembeli`) REFERENCES `tb_pembeli` (`id_pembeli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pesananrestoran`
--
ALTER TABLE `tb_pesananrestoran`
  ADD CONSTRAINT `relasi_id_makanan` FOREIGN KEY (`id_makanan`) REFERENCES `tb_makanan` (`id_makanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relasi_id_pembeli` FOREIGN KEY (`id_pembeli`) REFERENCES `tb_pembeli` (`id_pembeli`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relasi_id_restoran` FOREIGN KEY (`id_restoran`) REFERENCES `tb_restoran` (`id_restoran`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
