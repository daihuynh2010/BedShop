-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2017 lúc 04:17 PM
-- Phiên bản máy phục vụ: 10.1.24-MariaDB
-- Phiên bản PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bed_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bl_nx_yt`
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
-- Đang đổ dữ liệu cho bảng `bl_nx_yt`
--

INSERT INTO `bl_nx_yt` (`id_user`, `id_sp`, `danh_gia`, `noi_dung`, `is_thich`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Rất Tốt', 0, NULL, '2016-01-01 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_giohang`
--

CREATE TABLE `ct_giohang` (
  `id_gh` int(10) UNSIGNED NOT NULL,
  `id_sp` int(10) UNSIGNED NOT NULL,
  `so_luong` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ct_giohang`
--

INSERT INTO `ct_giohang` (`id_gh`, `id_sp`, `so_luong`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL, NULL),
(1, 2, 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_hoadon`
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

--
-- Đang đổ dữ liệu cho bảng `ct_hoadon`
--

INSERT INTO `ct_hoadon` (`id_hd`, `id_sp`, `so_luong`, `so_tien`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 1, 1, 200000, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ct_mausac_sp`
--

CREATE TABLE `ct_mausac_sp` (
  `id_mau` int(10) UNSIGNED NOT NULL,
  `id_sp` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ct_mausac_sp`
--

INSERT INTO `ct_mausac_sp` (`id_mau`, `id_sp`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
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
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`id_gh`, `tongtien`, `tong_sp`, `id_user`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 100000, 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinh_sp`
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
-- Đang đổ dữ liệu cho bảng `hinh_sp`
--

INSERT INTO `hinh_sp` (`id_hinh`, `vitri_hinh`, `hinh_idsp`, `is_hinhchinh`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'data/imahgeacsacdscasdvsavsdddddddddddddddddvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
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
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id_hd`, `cach_thanh_toan`, `tongtien`, `tinh_trang_hang`, `dd_giao_hang`, `tong_sp`, `id_user`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Tiền mặt khi giao hàng', 1000000, 'Đang Giao', 'Số 1-Võ Văn Ngân', 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_sp`
--

CREATE TABLE `loai_sp` (
  `id_loaisp` int(10) UNSIGNED NOT NULL,
  `loaisp_ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_sp`
--

INSERT INTO `loai_sp` (`id_loaisp`, `loaisp_ten`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Loai Sản Phẩm 1', NULL, NULL, NULL),
(2, 'quần nam\r\n', NULL, NULL, NULL),
(3, 'áo nam', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mausac_sp`
--

CREATE TABLE `mausac_sp` (
  `id_mau` int(10) UNSIGNED NOT NULL,
  `mau_ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mausac_sp`
--

INSERT INTO `mausac_sp` (`id_mau`, `mau_ten`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Đỏ', NULL, NULL, NULL),
(2, 'Xanh Dương', NULL, NULL, NULL),
(3, 'Đen', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_11_11_090314_create_MauSac_SP_table', 1),
(3, '2017_11_11_091156_create_NSX_table', 1),
(4, '2017_11_11_091512_create_Loai_SP_table', 1),
(5, '2017_11_11_091642_create_TaiKhoan_table', 1),
(6, '2017_11_11_084026_create_SanPham_table', 2),
(7, '2017_11_11_090456_create_CT_MauSac_SP_table', 2),
(9, '2017_11_11_091949_create_BL_NX_YT_table', 2),
(10, '2017_11_11_092613_create_HoaDon_table', 2),
(11, '2017_11_11_093106_create_CT_HoaDon_table', 2),
(12, '2017_11_20_025304_create_GioHang_table', 3),
(13, '2017_11_20_025519_create_CT_GioHang_table', 4),
(14, '2017_11_11_090850_create_Hinh_SP_table', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nsx`
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
-- Đang đổ dữ liệu cho bảng `nsx`
--

INSERT INTO `nsx` (`id_nsx`, `nsx_ten`, `nsx_diachi`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Nhà Đầu Tư 1', '1/cdá/dcsca', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
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
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `sp_ten`, `sp_gia`, `sp_km`, `sp_hsd`, `sp_mota`, `sp_gioithieu`, `sp_trongluong`, `sp_kichthuoc`, `sp_soluong`, `sp_somausac`, `sp_idnsx`, `sp_idloai`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Sản Phẩm 1', 200000, 0, 'không có', 'sản phẩm tốt', 'sản phẩm được nhập từ trung quốc', '500gr', '10x10', 100, 5, 1, 1, NULL, '2017-10-31 17:00:00', NULL),
(2, 'test', 100000, 20, 'ffcd', 'dcsacdv', 'ewvsadv', 'acdca', 'vasvds', 23, 3, 1, 3, NULL, '2017-11-01 17:00:00', NULL),
(3, 'casdc', 300000, 50, 'sdcsd', 'casdcds', 'vadsv', 'ddascs', 'sdvds', 0, 21, 1, 2, NULL, '2017-11-05 17:00:00', NULL),
(4, 'cscd', 400000, 10, 'csdcasdc', 'sadcasdc', 'dcsacs', 'ascdcdsa', 'dscsac', 24, 3, 1, 3, NULL, '2017-11-04 17:00:00', NULL),
(5, 'scsadc', 600000, 70, 'sacsac', 'svdsdvs', 'aedwd', 'sdcsa', 'ascas', 2, 3, 1, 2, NULL, '2017-11-02 17:00:00', NULL),
(6, 'san pham 2', 21021045, 10, 'hnhgn', 'hg ngb', 'fdbdbd', 'dscsc', ' sdvsvd', 23, 3, 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chuc_vu` int(10) UNSIGNED NOT NULL,
  `tich_diem` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `dd_giaohang_md` text COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_user`, `email`, `password`, `chuc_vu`, `tich_diem`, `dd_giaohang_md`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'daihuynh2010@gmail.com', 'admin', 3, 0, 'số 1 -võ văn ngân', NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bl_nx_yt`
--
ALTER TABLE `bl_nx_yt`
  ADD PRIMARY KEY (`id_user`,`id_sp`),
  ADD KEY `bl_nx_yt_id_sp_foreign` (`id_sp`);

--
-- Chỉ mục cho bảng `ct_giohang`
--
ALTER TABLE `ct_giohang`
  ADD PRIMARY KEY (`id_gh`,`id_sp`),
  ADD KEY `ct_giohang_id_sp_foreign` (`id_sp`);

--
-- Chỉ mục cho bảng `ct_hoadon`
--
ALTER TABLE `ct_hoadon`
  ADD PRIMARY KEY (`id_hd`,`id_sp`),
  ADD KEY `ct_hoadon_id_sp_foreign` (`id_sp`);

--
-- Chỉ mục cho bảng `ct_mausac_sp`
--
ALTER TABLE `ct_mausac_sp`
  ADD PRIMARY KEY (`id_mau`,`id_sp`),
  ADD KEY `ct_mausac_sp_id_sp_foreign` (`id_sp`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id_gh`),
  ADD KEY `giohang_id_user_foreign` (`id_user`);

--
-- Chỉ mục cho bảng `hinh_sp`
--
ALTER TABLE `hinh_sp`
  ADD PRIMARY KEY (`id_hinh`),
  ADD KEY `hinh_sp_hinh_idsp_foreign` (`hinh_idsp`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hd`),
  ADD KEY `hoadon_id_user_foreign` (`id_user`);

--
-- Chỉ mục cho bảng `loai_sp`
--
ALTER TABLE `loai_sp`
  ADD PRIMARY KEY (`id_loaisp`);

--
-- Chỉ mục cho bảng `mausac_sp`
--
ALTER TABLE `mausac_sp`
  ADD PRIMARY KEY (`id_mau`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nsx`
--
ALTER TABLE `nsx`
  ADD PRIMARY KEY (`id_nsx`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `sanpham_sp_idnsx_foreign` (`sp_idnsx`),
  ADD KEY `sanpham_sp_idloai_foreign` (`sp_idloai`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id_gh` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `hinh_sp`
--
ALTER TABLE `hinh_sp`
  MODIFY `id_hinh` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hd` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `loai_sp`
--
ALTER TABLE `loai_sp`
  MODIFY `id_loaisp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `mausac_sp`
--
ALTER TABLE `mausac_sp`
  MODIFY `id_mau` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT cho bảng `nsx`
--
ALTER TABLE `nsx`
  MODIFY `id_nsx` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bl_nx_yt`
--
ALTER TABLE `bl_nx_yt`
  ADD CONSTRAINT `bl_nx_yt_id_sp_foreign` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`) ON DELETE CASCADE,
  ADD CONSTRAINT `bl_nx_yt_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `taikhoan` (`id_user`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `ct_giohang`
--
ALTER TABLE `ct_giohang`
  ADD CONSTRAINT `ct_giohang_id_gh_foreign` FOREIGN KEY (`id_gh`) REFERENCES `giohang` (`id_gh`) ON DELETE CASCADE,
  ADD CONSTRAINT `ct_giohang_id_sp_foreign` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `ct_hoadon`
--
ALTER TABLE `ct_hoadon`
  ADD CONSTRAINT `ct_hoadon_id_hd_foreign` FOREIGN KEY (`id_hd`) REFERENCES `hoadon` (`id_hd`) ON DELETE CASCADE,
  ADD CONSTRAINT `ct_hoadon_id_sp_foreign` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `ct_mausac_sp`
--
ALTER TABLE `ct_mausac_sp`
  ADD CONSTRAINT `ct_mausac_sp_id_mau_foreign` FOREIGN KEY (`id_mau`) REFERENCES `mausac_sp` (`id_mau`) ON DELETE CASCADE,
  ADD CONSTRAINT `ct_mausac_sp_id_sp_foreign` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `taikhoan` (`id_user`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `hinh_sp`
--
ALTER TABLE `hinh_sp`
  ADD CONSTRAINT `hinh_sp_hinh_idsp_foreign` FOREIGN KEY (`hinh_idsp`) REFERENCES `sanpham` (`id_sp`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `taikhoan` (`id_user`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_sp_idloai_foreign` FOREIGN KEY (`sp_idloai`) REFERENCES `loai_sp` (`id_loaisp`) ON DELETE CASCADE,
  ADD CONSTRAINT `sanpham_sp_idnsx_foreign` FOREIGN KEY (`sp_idnsx`) REFERENCES `nsx` (`id_nsx`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
