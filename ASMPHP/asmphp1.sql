-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 12, 2022 lúc 03:11 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asmphp1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id` int(4) NOT NULL,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT 1,
  `uutien` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id`, `ten`, `visible`, `uutien`) VALUES
(20, 'Gear VR', 1, 0),
(21, 'Controller', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id` int(4) NOT NULL,
  `ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `giacu` double(10,0) NOT NULL DEFAULT 0,
  `gia` double(10,0) NOT NULL DEFAULT 0,
  `ma` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dvt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `iddm` int(4) NOT NULL,
  `view` int(3) NOT NULL DEFAULT 0,
  `special` tinyint(1) NOT NULL DEFAULT 0,
  `mota` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `motachitiet` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id`, `ten`, `img`, `giacu`, `gia`, `ma`, `dvt`, `iddm`, `view`, `special`, `mota`, `motachitiet`) VALUES
(18, 'Gamepad', '../upload/product-10.jpg', 0, 2, 'GH-01', 'VND', 20, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_taikhoan`
--

CREATE TABLE `tbl_taikhoan` (
  `id` int(4) NOT NULL,
  `ten` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_taikhoan`
--

INSERT INTO `tbl_taikhoan` (`id`, `ten`, `diachi`, `email`, `sdt`, `username`, `pass`, `role`) VALUES
(31, NULL, NULL, 'admin@gmail.com', '0906769986', 'admin', '1', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sp_dm` (`iddm`);

--
-- Chỉ mục cho bảng `tbl_taikhoan`
--
ALTER TABLE `tbl_taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tbl_taikhoan`
--
ALTER TABLE `tbl_taikhoan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD CONSTRAINT `fk_sp_dm` FOREIGN KEY (`iddm`) REFERENCES `tbl_danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
