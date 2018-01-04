-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2018 at 06:25 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bedshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `bl_nx_yt`
--

CREATE TABLE `bl_nx_yt` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_sp` int(10) UNSIGNED NOT NULL,
  `danh_gia` int(10) UNSIGNED DEFAULT NULL,
  `noi_dung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_thich` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bl_nx_yt`
--

INSERT INTO `bl_nx_yt` (`id`, `id_user`, `id_sp`, `danh_gia`, `noi_dung`, `is_thich`, `deleted_at`, `created_at`, `updated_at`) VALUES
(3, 1, 2, 0, 'binh luan', 0, NULL, NULL, '2017-12-05 09:27:11'),
(4, 1, 1, 0, 'hay', 1, NULL, NULL, '2017-12-28 09:18:24'),
(6, 1, 4, 3, '', 0, NULL, NULL, '2017-12-28 09:27:06');

-- --------------------------------------------------------

--
-- Table structure for table `ct_hoadon`
--

CREATE TABLE `ct_hoadon` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_hd` int(10) UNSIGNED NOT NULL,
  `id_sp` int(10) UNSIGNED NOT NULL,
  `so_luong` int(10) UNSIGNED NOT NULL,
  `so_tien` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ct_hoadon`
--

INSERT INTO `ct_hoadon` (`id`, `id_hd`, `id_sp`, `so_luong`, `so_tien`, `deleted_at`, `created_at`, `updated_at`) VALUES
(9, 1, 2, 1, 450000, NULL, NULL, NULL),
(10, 3, 1, 3, 15000000, NULL, '2017-12-14 09:27:54', '2017-12-25 09:22:17');

-- --------------------------------------------------------

--
-- Table structure for table `ct_mausac_sp`
--

CREATE TABLE `ct_mausac_sp` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_mau` int(10) UNSIGNED NOT NULL,
  `id_sp` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hinh_sp`
--

CREATE TABLE `hinh_sp` (
  `id_hinh` int(10) UNSIGNED NOT NULL,
  `vitri_hinh` text COLLATE utf8_unicode_ci NOT NULL,
  `hinh_idsp` int(10) UNSIGNED NOT NULL,
  `is_hinhchinh` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hinh_sp`
--

INSERT INTO `hinh_sp` (`id_hinh`, `vitri_hinh`, `hinh_idsp`, `is_hinhchinh`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'ao-lop-galaxy-a10-H5TekEfdt6.jpg', 4, 1, NULL, '2017-12-23 04:47:27', '2017-12-29 09:13:47'),
(2, 'ao-lop-galaxy-dep-3-3Op17OeaW4.jpg', 1, 1, NULL, '2017-12-23 23:47:27', '2017-12-29 12:37:13'),
(5, 'ao-lop-galaxy-a10-5NXcUWNJOM.jpg', 6, 1, NULL, '2018-01-02 10:06:04', '2018-01-02 10:06:04'),
(6, 'ao-lop-galaxy-dep-3-a8bDt4oZ52.jpg', 6, 0, NULL, '2018-01-02 10:06:05', '2018-01-02 10:06:05'),
(7, 'ao-lop-galaxy-a10-qToQklJlT5.jpg', 6, 0, NULL, '2018-01-02 10:06:05', '2018-01-02 10:06:05'),
(8, 'ao-lop-galaxy-a10-m06njCPDmL.jpg', 2, 1, NULL, '2018-01-02 10:39:59', '2018-01-02 10:39:59'),
(9, 'ao-lop-galaxy-dep-3-k1DSWafvqo.jpg', 2, 0, NULL, '2018-01-02 10:39:59', '2018-01-02 10:39:59'),
(10, 'ao-lop-galaxy-a10-i8FvL6DsXr.jpg', 2, 0, NULL, '2018-01-02 10:40:00', '2018-01-02 10:40:00'),
(11, 'ic-twitter-NE11DsorPU.jpg', 3, 1, NULL, '2018-01-02 10:43:50', '2018-01-02 10:43:50'),
(12, 'mnod05-mau-T1Sxlavcoq.png', 3, 0, NULL, '2018-01-02 10:43:50', '2018-01-02 10:43:50'),
(13, 'ic-google-DrWjmUTPVW.png', 3, 0, NULL, '2018-01-02 10:43:50', '2018-01-02 10:43:50');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hd` int(10) UNSIGNED NOT NULL,
  `cach_thanh_toan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tongtien` int(10) UNSIGNED NOT NULL,
  `tinh_trang_hang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dd_giao_hang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tong_sp` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_thanhtoan` int(11) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id_hd`, `cach_thanh_toan`, `tongtien`, `tinh_trang_hang`, `dd_giao_hang`, `tong_sp`, `id_user`, `sdt`, `is_thanhtoan`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Thanh toán khi nhận hàng', 450000, 'Đang Xử Lý', 'abc xyz', 1, 1, '01689383061', 1, NULL, '2017-12-03 07:44:14', '2017-12-30 22:01:45'),
(2, 'Thanh toán khi nhận hàng', 450000, 'Đang Giao', 'số 1 võ văn ngân', 1, 1, '01689383061', 1, NULL, '2017-12-12 19:47:51', '2017-12-31 10:26:15'),
(3, 'Thanh toán khi nhận hàng', 15000000, 'Đang Xử Lý', 'số 1 võ văn ngân', 3, 1, '01689383061', 0, NULL, '2017-12-14 09:27:43', '2017-12-29 22:58:33');

-- --------------------------------------------------------

--
-- Table structure for table `loai_sp`
--

CREATE TABLE `loai_sp` (
  `id_loaisp` int(10) UNSIGNED NOT NULL,
  `loaisp_ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_sp`
--

INSERT INTO `loai_sp` (`id_loaisp`, `loaisp_ten`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'quan nam', NULL, NULL, NULL),
(2, 'Áo Nam\r\n', NULL, NULL, NULL),
(3, 'Áo Nữ\r\n', NULL, NULL, NULL),
(4, 'Quan Nữ', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mausac_sp`
--

CREATE TABLE `mausac_sp` (
  `id_mau` int(10) UNSIGNED NOT NULL,
  `mau_ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mausac_sp`
--

INSERT INTO `mausac_sp` (`id_mau`, `mau_ten`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'do', NULL, NULL, NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_12_01_185346_create_sanpham_table', 2),
(4, '2017_12_01_185501_create_mausac_sp_table', 2),
(6, '2017_12_01_185636_create_hinh_sp_table', 2),
(7, '2017_12_01_185748_create_nsx_table', 2),
(8, '2017_12_01_185838_create_loai_sp_table', 2),
(15, '2014_10_12_000000_create_users_table', 3),
(20, '2017_12_01_185549_create_ct_mausac_sp_table', 4),
(21, '2017_12_01_185921_create_bl_nx_yt_table', 4),
(22, '2017_12_01_190057_create_ct_hoadon_table', 4),
(25, '2017_12_01_190020_create_hoadon_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `nsx`
--

CREATE TABLE `nsx` (
  `id_nsx` int(10) UNSIGNED NOT NULL,
  `nsx_ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nsx_diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nsx`
--

INSERT INTO `nsx` (`id_nsx`, `nsx_ten`, `nsx_diachi`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'nsx 1', 'cascsad', NULL, NULL, NULL),
(2, 'Nhà Sản Xuất 2\r\n', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('daihuynh2010@gmail.com', '$2y$10$8DGnFFtMTI4GYsZ0gr.GaOi5hQRfOVzdE7dfpdj5SLxax6gmHVWfy', '2017-12-30 01:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(10) UNSIGNED NOT NULL,
  `sp_ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sp_gia` int(10) UNSIGNED NOT NULL,
  `sp_km` int(10) UNSIGNED NOT NULL,
  `sp_hsd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sp_mota` text COLLATE utf8_unicode_ci NOT NULL,
  `sp_gioithieu` text COLLATE utf8_unicode_ci NOT NULL,
  `sp_trongluong` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sp_kichthuoc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sp_soluong` int(10) UNSIGNED NOT NULL,
  `sp_danhgia` int(10) UNSIGNED NOT NULL,
  `sp_idnsx` int(10) UNSIGNED NOT NULL,
  `sp_idloai` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `sp_ten`, `sp_gia`, `sp_km`, `sp_hsd`, `sp_mota`, `sp_gioithieu`, `sp_trongluong`, `sp_kichthuoc`, `sp_soluong`, `sp_danhgia`, `sp_idnsx`, `sp_idloai`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'san pham 1', 5000000, 0, 'dscas', 'ascascsac', 'casdcas', 'sdacas', '123', 23, 3, 1, 1, NULL, NULL, '2017-12-31 09:12:43'),
(2, 'san pham 2', 500000, 0, 'xsx', 'sxsdx', 'xasdx', 'xasdx', 'xasdx', 23, 1, 1, 4, NULL, NULL, '2018-01-02 10:39:56'),
(3, 'Sản Phẩm 3', 1000000, 0, '10 năm', 'csadc', 'sd ád', 'cádc', 'size 39', 10, 2, 1, 2, NULL, '2017-12-23 04:38:52', '2017-12-23 04:38:52'),
(4, 'Sản Phẩm 4', 2000000, 0, 'cádc', 'scsda', 'csdac', 'dcsac', 'acsa', 20, 3, 1, 3, NULL, '2017-12-23 04:47:27', '2017-12-29 22:04:36'),
(5, 'San Pham  5', 1000000, 15, 'cds', 'dvaafvsdfv', 'dbfdbdf', 'vdsfv', 'vsdv', 50, 3, 1, 3, NULL, NULL, NULL),
(6, 'Sản Phẩm 6', 150000, 0, 'cdsca', 'ácác', 'vsavrevrev', 'dác', '20', 50, 3, 1, 4, NULL, '2018-01-02 10:06:01', '2018-01-02 10:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chuc_vu` int(11) NOT NULL DEFAULT '1',
  `tich_diem` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `dd_giaohang_md` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `sdt`, `chuc_vu`, `tich_diem`, `dd_giaohang_md`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'daihuynh2010@gmail.com', '$2y$10$Y8MDSoFMgLjCShaXwsrxKujsEdBj3UXL4Yk0dUKQLYGWoGPX.d07y', 'Quốc Đại', '01689383061', 1, 0, 'số 1 võ văn ngân', 'F4EwXzqpipHTiHHRRmUXVrDVrFX9r9H9FrE0jr2SQBKdCQQ27S74eS3XSXQb', '2017-12-02 06:17:13', '2017-12-30 01:30:24'),
(3, 'a@gmail.com', '$2y$10$rVgM/z7KsME/UvHbgAqc7OZLn0l8jOGWKIuqg5TSftF2nr8PfjIjO', 'cdf', '0123456789', 3, 0, 'csdcdcsac', NULL, '2017-12-17 00:37:44', '2017-12-17 00:37:44'),
(4, 'b@gmail.com', '$2y$10$K0kVniQ7EqfO0p9tlbfig.jchN00Gh4i6FpgxW4xEaHB6u6mwen52', 'adscsad', '123', 2, 1, 'csdc', '6zBYS4iIIVp7MEyyugmQ3OsCJC3E9eNwl9poxEeoagI0beoVzcba73Dppubq', '2017-12-17 01:25:13', '2017-12-17 01:25:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bl_nx_yt`
--
ALTER TABLE `bl_nx_yt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ct_hoadon`
--
ALTER TABLE `ct_hoadon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ct_mausac_sp`
--
ALTER TABLE `ct_mausac_sp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hinh_sp`
--
ALTER TABLE `hinh_sp`
  ADD PRIMARY KEY (`id_hinh`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hd`);

--
-- Indexes for table `loai_sp`
--
ALTER TABLE `loai_sp`
  ADD PRIMARY KEY (`id_loaisp`);

--
-- Indexes for table `mausac_sp`
--
ALTER TABLE `mausac_sp`
  ADD PRIMARY KEY (`id_mau`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nsx`
--
ALTER TABLE `nsx`
  ADD PRIMARY KEY (`id_nsx`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`);

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
-- AUTO_INCREMENT for table `bl_nx_yt`
--
ALTER TABLE `bl_nx_yt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ct_hoadon`
--
ALTER TABLE `ct_hoadon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `ct_mausac_sp`
--
ALTER TABLE `ct_mausac_sp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hinh_sp`
--
ALTER TABLE `hinh_sp`
  MODIFY `id_hinh` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hd` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `loai_sp`
--
ALTER TABLE `loai_sp`
  MODIFY `id_loaisp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mausac_sp`
--
ALTER TABLE `mausac_sp`
  MODIFY `id_mau` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `nsx`
--
ALTER TABLE `nsx`
  MODIFY `id_nsx` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
