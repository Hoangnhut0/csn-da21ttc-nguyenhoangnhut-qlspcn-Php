-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 04, 2024 lúc 03:31 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_qlsp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `ho` varchar(255) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `ten_dn` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `ho`, `ten`, `ten_dn`, `password`) VALUES
(1, 'Hoang', 'Nhut', 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `ten_danhmuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `ten_danhmuc`) VALUES
(1, 'Äiá»‡n Thoáº¡i'),
(2, 'Laptop');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `image` char(50) NOT NULL,
  `gia_sp` varchar(255) NOT NULL,
  `mau` varchar(255) NOT NULL,
  `manhinh` varchar(255) NOT NULL,
  `CPU` varchar(255) NOT NULL,
  `dungluong` varchar(255) NOT NULL,
  `dohoa` varchar(255) NOT NULL,
  `id_thuonghieu` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten_sp`, `image`, `gia_sp`, `mau`, `manhinh`, `CPU`, `dungluong`, `dohoa`, `id_thuonghieu`, `id_danhmuc`) VALUES
(1, 'Iphone 15 Pro Max', 'Iphone 15 Pro Max.png', '33990000', 'Titan xanh ', 'MÃ n hÃ¬nh: 6.7 inch, OLED, Super Retina XDR, 2796 x 1290 Pixels ', 'CPU: Apple A17 Pro ', 'Dung lÆ°á»£ng: 256 GB', '', 8, 1),
(2, 'Samsung Galaxy S22', 'Samsung Galaxy S22.png', '11490000', 'TÃ­m', 'MÃ n hÃ¬nh: 6.1 inch, Dynamic AMOLED 2X, FHD+, 1080 x 2340 Pixels ', 'CPU:Snapdragon 8 Gen 1 ', 'Dung lÆ°á»£ng: 128 GB', '', 9, 1),
(3, 'OPPO Reno8 T', 'OPPO Reno8 T.png', '7190000', 'Cam', 'MÃ n hÃ¬nh: 6.4 inch, AMOLED, FHD+, 1080 x 2400 Pixels ', 'CPU: MediaTek Helio G99 ', 'Dung lÆ°á»£ng: 256 GB', '', 13, 1),
(4, 'Samsung Galaxy A23', 'Samsung Galaxy A23.png', '5190000', 'Äen', 'MÃ n hÃ¬nh: 6.6 inch, PLS LCD, FHD+, 1080 x 2408 Pixels ', 'CPU: Snapdragon 695 5G ', 'Dung lÆ°á»£ng: 128 GB', '', 9, 1),
(5, 'iPhone 14 Pro Max', 'iPhone 14 Pro Max.png', '27390000', 'TÃ­m', 'MÃ n hÃ¬nh: 6.7 inch, OLED, Super Retina XDR, 2796 x 1290 Pixels ', 'CPU: Apple A16 ', 'Dung lÆ°á»£ng: 128 GB', '', 8, 1),
(6, 'iPhone 15', 'iPhone 15.png', '22990000', 'Há»“ng', 'MÃ n hÃ¬nh: 6.1 inch, OLED, Super Retina XDR, 2556 x 1179 Pixels ', 'CPU: Apple A16 Bionic ', 'Dung lÆ°á»£ng: 128 GB', '', 8, 1),
(7, 'iPhone 14 Plus', 'iPhone 14 Plus.png', '21690000', 'TÃ­m', 'MÃ n hÃ¬nh: 6.7 inch, AMOLED, Super Retina XDR, 2778 x 1284 Pixels ', 'CPU: Apple A15 ', 'Dung lÆ°á»£ng: 128 GB', '', 8, 1),
(8, 'Samsung Galaxy Z Flip4', 'Samsung Galaxy Z Flip4.png', '11990000', 'TÃ­m', 'MÃ n hÃ¬nh: 6.7 inch, 19 inch, Dynamic AMOLED 2X, FHD+, 1080 x 2636 Pixels ', 'CPU: Snapdragon 8+ Gen 1 ', 'Dung lÆ°á»£ng:128 GB', '', 9, 1),
(9, 'Samsung Galaxy S23 Ultra', 'Samsung Galaxy S23 Ultra.png', '23990000', 'Xanh', 'MÃ n hÃ¬nh: 6.8 inch, Dynamic AMOLED 2X, QHD+, 1440 x 3088 Pixels ', 'CPU: Snapdragon 8 Gen 2 ', 'Dung lÆ°á»£ng: 256 GB', '', 9, 1),
(10, 'OPPO Find N3 Series', 'OPPO Find N3 Series.png', '22990000', 'VÃ ng', 'MÃ n hÃ¬nh: 6.8 inch, 3.26 inch, FHD+, AMOLED, 1080 x 2520 pixels ', 'CPU: Mediatek Dimensity 9200 5G ', 'Dung lÆ°á»£ng: 256 GB', '', 13, 1),
(11, 'Xiaomi Redmi Note 11 Pro', 'Xiaomi Redmi Note 11 Pro.png', '4990000', 'Xanh dÆ°Æ¡ng', 'MÃ n hÃ¬nh: 6.67 inch, AMOLED, FHD+, 1080 x 2400 Pixels ', 'CPU: MediaTek Helio G96 ', 'RAM 8 GB', '', 10, 1),
(12, 'Xiaomi 13 Lite', 'Xiaomi 13 Lite.png', '7990000', 'Xanh dÆ°Æ¡ng', 'MÃ n hÃ¬nh: 6.55 inch, AMOLED, FHD+, 1080 x 2400 Pixels ', 'CPU:Snapdragon 7 Gen 1 ', 'Dung lÆ°á»£ng: 128 GB', '', 10, 1),
(13, 'Xiaomi 13T', 'Xiaomi 13T.png', '11490000', 'Xanh lÃ¡', 'MÃ n hÃ¬nh: 6.7 inch, OLED, FHD+, 2712 x 1220 Pixels ', 'CPU: Dimensity 8200 Ultra ', 'Dung lÆ°á»£ng: 256 GB', '', 10, 1),
(14, 'Vivo V25e', 'Vivo V25e.png', '6490000', 'VÃ ng', 'MÃ n hÃ¬nh: 6.44 inch, AMOLED, FHD+, 1080 x 2040 Pixel ', 'CPU: MediaTek Helio G99 ', 'Dung lÆ°á»£ng: 128 GB', '', 12, 1),
(15, 'Vivo V25 Pro 5G', 'Vivo V25 Pro 5G.png', '8190000', 'Äen', 'MÃ n hÃ¬nh: 6.56 inch, ChÃ­nh: AMOLED, FHD+, 1080 x 2376 Pixel ', 'CPU: MediaTek Dimensity 1300 5G ', 'Dung lÆ°á»£ng: 128 GB', '', 12, 1),
(16, 'realme 11 Pro 5G', 'realme 11 Pro 5G.png', '10690000', 'Xanh', 'MÃ n hÃ¬nh: 6.7 inch, OLED, FHD+, 1080 x 2412 Pixels ', 'CPU: MediaTek Dimensity 7050 5G ', 'Dung lÆ°á»£ng: 256 GB', '', 11, 1),
(17, 'realme 11 4G', 'realme 11 4G.png', '6490000', 'Äen', 'MÃ n hÃ¬nh: 6.4 inch, Super AMOLED, FHD+, 1080 x 2400 Pixels ', 'CPU: 108.0 MP + 2.0 MP 16.0 MP MediaTek Helio G99 ', 'Dung lÆ°á»£ng: 128 GB', '', 11, 1),
(18, 'Asus TUF Gaming FX507ZC4-HN095W', 'Asus TUF Gaming FX507ZC4-HN095W.png', '20490000', 'Äen', 'MÃ n hÃ¬nh: 15.6 inch, 1920 x 1080 Pixels, IPS, 144 Hz, 250 nits, Anti - Glare ', 'CPU: Intel, Core i5, 12500H ', 'RAM: 16 GB (2 thanh 8 GB) SSD:512 GB ', 'Card: NVIDIA GeForce RTX 3050 4GB; Intel Iris Xe Graphics', 21, 2),
(19, 'Asus Vivobook Flip', 'Asus Vivobook Flip.png', '16690000', 'XÃ¡m', 'MÃ n hÃ¬nh:14.0 inch, 1920 x 1200 Pixels, IPS, 60 Hz, LED Backlit ', 'CPU:AMD, Ryzen 5, 7530U ', 'RAM: 16 GB, DDR4 SSD: 512 GB ', 'Card: Intel UHD Graphics', 21, 2),
(20, 'HP 245 G10 R5 7520U', 'HP 245 G10 R5 7520U.png', '11490000', 'XÃ¡m', 'MÃ n hÃ¬nh: 14.0 inch, 1920 x 1080 Pixels, IPS, 60 Hz, LCD CPU: AMD, Ryzen 5, 7520U RAM: 8 GB SSD: 256 GB Card:AMD Radeon Graphics', 'CPU: AMD, Ryzen 5, 7520U ', 'RAM: 8 GB SSD: 256 GB ', 'Card:AMD Radeon Graphics', 22, 2),
(21, 'Lenovo IdeaPad 1 15ALC7 R5 5500U', 'Lenovo IdeaPad 1 15ALC7 R5 5500U.png', '11290000', 'XÃ¡m', 'MÃ n hÃ¬nh: 15.6 inch, 1920 x 1080 Pixels, TN, 60 Hz, 220 nits, FHD ', 'CPU: AMD, Ryzen 5, 5500U ', 'RAM: 16 GB (2 thanh 8 GB) SSD: 512 GB', '', 17, 2),
(22, 'LG Gram 14T90R-G.AH55A5 i5', 'LG Gram 14T90R-G.AH55A5 i5.png', '31990000', 'Äen', 'MÃ n hÃ¬nh: 14.0 inch, 1920 x 1200 Pixels, IPS, 60 Hz, Anti - Glare ', 'CPU: Intel, Core i5, 1340P ', 'RAM:16 GB, LPDDR5, 5200 MHz SSD: 512 GB ', 'Card: Intel Iris Plus Graphics', 14, 2),
(23, 'MSI Gaming Thin GF63', 'MSIGMTHin.png', '20490000', 'Äen', 'MÃ n hÃ¬nh: 15.6 inch, 1920 x 1080 Pixels, IPS, 144 Hz, IPS FHD ', 'CPU Intel, Core i5, 12450H ', 'RAM: 16 GB, DDR4, 3200 MHz SSD 512 GB ', 'Card: NVIDIA GeForce RTX 4050 6GB GDDR6; Intel Iris Xe Graphics', 15, 2),
(24, 'Asus Gaming ROG Strix', 'Asus Gaming ROG Strix.png', '37490000', 'Äen', 'MÃ n hÃ¬nh: 16.0 inch, 1920 x 1200 Pixels, IPS, 165 Hz, 250 nits, Anti-Glare ', 'CPU: Intel, Core i7, 13650HX ', 'RAM: 16 GB (2 thanh 8 GB) SSD: 512 GB ', 'Card :NVIDIA GeForce RTX 4050 6GB GDDR6; Intel UHD Graphics', 21, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `id_thuonghieu` int(11) NOT NULL,
  `ten_thuonghieu` varchar(255) NOT NULL,
  `logo` char(50) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thuonghieu`
--

INSERT INTO `thuonghieu` (`id_thuonghieu`, `ten_thuonghieu`, `logo`, `id_danhmuc`) VALUES
(8, 'Apple', 'logo-iphone-220x48.png', 1),
(9, 'Samsung', 'samsungnew-220x48-1.png', 1),
(10, 'Xiaomi', 'logo-xiaomi-220x48-5.png', 1),
(11, 'Realme', 'Realme42-b_37.png', 1),
(12, 'Vivo', 'vivo-logo-220-220x48-3.png', 1),
(13, 'Oppo', 'OPPO42-b_5.jpg', 1),
(14, 'LG', 'logo-lg-149x40.png', 2),
(15, 'MSI', 'logo-msi-149x40.png', 2),
(16, 'DELL', 'logo-dell-149x40.png', 2),
(17, 'Lenovo', 'logo-lenovo-149x40.png', 2),
(18, 'Acer', 'logo-acer-149x40.png', 2),
(21, 'Asus', 'logo-asus-149x40.png', 2),
(22, 'HP', 'logo-hp-149x40-1.png', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- Chỉ mục cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`id_thuonghieu`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `id_thuonghieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
