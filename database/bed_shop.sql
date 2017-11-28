-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2017 at 12:37 PM
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
-- Database: `bed_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `bl_nx_yt`
--

CREATE TABLE `bl_nx_yt` (
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

INSERT INTO `bl_nx_yt` (`id_user`, `id_sp`, `danh_gia`, `noi_dung`, `is_thich`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'Rất Tốt', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ct_giohang`
--

CREATE TABLE `ct_giohang` (
  `id_gh` int(10) UNSIGNED NOT NULL,
  `id_sp` int(10) UNSIGNED NOT NULL,
  `so_luong` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ct_hoadon`
--

CREATE TABLE `ct_hoadon` (
  `id_hd` int(10) UNSIGNED NOT NULL,
  `id_sp` int(10) UNSIGNED NOT NULL,
  `so_luong` int(10) UNSIGNED NOT NULL,
  `so_tien` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ct_mausac_sp`
--

CREATE TABLE `ct_mausac_sp` (
  `id_mau` int(10) UNSIGNED NOT NULL,
  `id_sp` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ct_mausac_sp`
--

INSERT INTO `ct_mausac_sp` (`id_mau`, `id_sp`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id_gh` int(10) UNSIGNED NOT NULL,
  `tongtien` int(10) UNSIGNED NOT NULL,
  `tong_sp` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `giohang`
--

INSERT INTO `giohang` (`id_gh`, `tongtien`, `tong_sp`, `id_user`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 100000, 1, 1, NULL, NULL, NULL);

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
(1, 'data/imahgeacsacdscasdvsavsdddddddddddddddddvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', 1, 1, NULL, NULL, NULL);

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
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id_hd`, `cach_thanh_toan`, `tongtien`, `tinh_trang_hang`, `dd_giao_hang`, `tong_sp`, `id_user`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Tiền mặt khi giao hàng', 1000000, 'Đang Giao', 'Số 1-Võ Văn Ngân', 1, 1, NULL, NULL, NULL);

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
(1, 'Loai Sản Phẩm 1', NULL, NULL, NULL);

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
(1, 'Đỏ', NULL, NULL, NULL),
(2, 'Xanh Dương', NULL, NULL, NULL),
(3, 'Đen', NULL, NULL, NULL);

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
(3, '2017_11_11_090314_create_MauSac_SP_table', 1),
(4, '2017_11_11_091156_create_NSX_table', 1),
(5, '2017_11_11_091512_create_Loai_SP_table', 1),
(6, '2017_11_26_101227_create_users_table', 1),
(7, '2017_11_11_084026_create_SanPham_table', 2),
(8, '2017_11_11_090456_create_CT_MauSac_SP_table', 2),
(9, '2017_11_11_090850_create_Hinh_SP_table', 2),
(10, '2017_11_11_091949_create_BL_NX_YT_table', 2),
(11, '2017_11_11_092613_create_HoaDon_table', 2),
(12, '2017_11_11_093106_create_CT_HoaDon_table', 2),
(13, '2017_11_20_025304_create_GioHang_table', 2),
(14, '2017_11_20_025519_create_CT_GioHang_table', 2);

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
(1, 'Nhà Đầu Tư 1', '1/cdá/dcsca', NULL, NULL, NULL);

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
  `sp_somausac` int(10) UNSIGNED NOT NULL,
  `sp_idnsx` int(10) UNSIGNED NOT NULL,
  `sp_idloai` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `sp_ten`, `sp_gia`, `sp_km`, `sp_hsd`, `sp_mota`, `sp_gioithieu`, `sp_trongluong`, `sp_kichthuoc`, `sp_soluong`, `sp_somausac`, `sp_idnsx`, `sp_idloai`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Sản Phẩm 1', 200000, 0, 'không có', 'sản phẩm tốt', 'sản phẩm được nhập từ trung quốc', '500gr', '10x10', 100, 5, 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chuc_vu` int(10) UNSIGNED NOT NULL,
  `tich_diem` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `dd_giaohang_md` text COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `chuc_vu`, `tich_diem`, `dd_giaohang_md`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'daihuynh2010@gmail.com', 'admin', 3, 0, 'số 1 -võ văn ngân', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bl_nx_yt`
--
ALTER TABLE `bl_nx_yt`
  ADD PRIMARY KEY (`id_user`,`id_sp`),
  ADD KEY `bl_nx_yt_id_sp_foreign` (`id_sp`);

--
-- Indexes for table `ct_giohang`
--
ALTER TABLE `ct_giohang`
  ADD PRIMARY KEY (`id_gh`,`id_sp`),
  ADD KEY `ct_giohang_id_sp_foreign` (`id_sp`);

--
-- Indexes for table `ct_hoadon`
--
ALTER TABLE `ct_hoadon`
  ADD PRIMARY KEY (`id_hd`,`id_sp`),
  ADD KEY `ct_hoadon_id_sp_foreign` (`id_sp`);

--
-- Indexes for table `ct_mausac_sp`
--
ALTER TABLE `ct_mausac_sp`
  ADD PRIMARY KEY (`id_mau`,`id_sp`),
  ADD KEY `ct_mausac_sp_id_sp_foreign` (`id_sp`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id_gh`),
  ADD KEY `giohang_id_user_foreign` (`id_user`);

--
-- Indexes for table `hinh_sp`
--
ALTER TABLE `hinh_sp`
  ADD PRIMARY KEY (`id_hinh`),
  ADD KEY `hinh_sp_hinh_idsp_foreign` (`hinh_idsp`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hd`),
  ADD KEY `hoadon_id_user_foreign` (`id_user`);

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
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `sanpham_sp_idnsx_foreign` (`sp_idnsx`),
  ADD KEY `sanpham_sp_idloai_foreign` (`sp_idloai`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id_gh` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hinh_sp`
--
ALTER TABLE `hinh_sp`
  MODIFY `id_hinh` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hd` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `loai_sp`
--
ALTER TABLE `loai_sp`
  MODIFY `id_loaisp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mausac_sp`
--
ALTER TABLE `mausac_sp`
  MODIFY `id_mau` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `nsx`
--
ALTER TABLE `nsx`
  MODIFY `id_nsx` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bl_nx_yt`
--
ALTER TABLE `bl_nx_yt`
  ADD CONSTRAINT `bl_nx_yt_id_sp_foreign` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`) ON DELETE CASCADE,
  ADD CONSTRAINT `bl_nx_yt_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ct_giohang`
--
ALTER TABLE `ct_giohang`
  ADD CONSTRAINT `ct_giohang_id_gh_foreign` FOREIGN KEY (`id_gh`) REFERENCES `giohang` (`id_gh`) ON DELETE CASCADE,
  ADD CONSTRAINT `ct_giohang_id_sp_foreign` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`) ON DELETE CASCADE;

--
-- Constraints for table `ct_hoadon`
--
ALTER TABLE `ct_hoadon`
  ADD CONSTRAINT `ct_hoadon_id_hd_foreign` FOREIGN KEY (`id_hd`) REFERENCES `hoadon` (`id_hd`) ON DELETE CASCADE,
  ADD CONSTRAINT `ct_hoadon_id_sp_foreign` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`) ON DELETE CASCADE;

--
-- Constraints for table `ct_mausac_sp`
--
ALTER TABLE `ct_mausac_sp`
  ADD CONSTRAINT `ct_mausac_sp_id_mau_foreign` FOREIGN KEY (`id_mau`) REFERENCES `mausac_sp` (`id_mau`) ON DELETE CASCADE,
  ADD CONSTRAINT `ct_mausac_sp_id_sp_foreign` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`) ON DELETE CASCADE;

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hinh_sp`
--
ALTER TABLE `hinh_sp`
  ADD CONSTRAINT `hinh_sp_hinh_idsp_foreign` FOREIGN KEY (`hinh_idsp`) REFERENCES `sanpham` (`id_sp`) ON DELETE CASCADE;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_sp_idloai_foreign` FOREIGN KEY (`sp_idloai`) REFERENCES `loai_sp` (`id_loaisp`) ON DELETE CASCADE,
  ADD CONSTRAINT `sanpham_sp_idnsx_foreign` FOREIGN KEY (`sp_idnsx`) REFERENCES `nsx` (`id_nsx`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
