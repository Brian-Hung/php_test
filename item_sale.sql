-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th12 12, 2025 lúc 12:15 PM
-- Phiên bản máy phục vụ: 5.7.24
-- Phiên bản PHP: 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php_test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `item_sale`
--

CREATE TABLE `item_sale` (
  `id` int(11) NOT NULL,
  `item_code` varchar(50) DEFAULT NULL,
  `item_name` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `expried_date` date DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `item_sale`
--

INSERT INTO `item_sale` (`id`, `item_code`, `item_name`, `quantity`, `expried_date`, `note`) VALUES
(1, 'Coca', 'Coca cola', 100, '2024-01-01', ''),
(2, 'Bim', 'Bim Bim', 100, '2024-01-01', 'Discount'),
(3, 'Lavie', 'Lavie', 100, '2024-01-01', 'Discount'),
(4, 'Pen', 'Pencil', 100, '2024-01-01', ''),
(5, 'SevenUp', 'Seven up', 100, '2024-01-01', ''),
(6, 'Note', 'NoteBook', 100, '2024-01-01', ''),
(7, 'Note1', 'NoteBook 1', 100, '2024-01-01', 'Discount'),
(8, 'Note2', 'NoteBook 2', 100, '2024-01-01', 'Discount'),
(9, 'Note3', 'NoteBook 3', 100, '2024-01-01', 'Discount'),
(10, 'Note4', 'NoteBook 4', 100, '2024-01-01', 'Discount'),
(11, 'Note5', 'NoteBook 5', 100, '2024-01-01', 'Discount'),
(12, 'Note6', 'NoteBook 6', 100, '2024-01-01', 'Discount'),
(13, 'Note7', 'NoteBook 7', 100, '2024-01-01', 'Discount');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `item_sale`
--
ALTER TABLE `item_sale`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `item_sale`
--
ALTER TABLE `item_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
