-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th1 06, 2024 lúc 04:18 PM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `pc03460`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pc03460_users`
--

CREATE TABLE `pc03460_users` (
  `id` int NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `full_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `pc03460_users`
--

INSERT INTO `pc03460_users` (`id`, `first_name`, `last_name`, `full_name`, `user_name`, `status`, `created_at`, `password`, `email`) VALUES
(1, 'Chi Thien', 'Nguyen', '', '', 1, '2023-03-07 19:06:28', '202cb962ac59075b964b07152d234b70', 'thienncpc03460@fpt.edu.vn'),
(2, 'Nguyen', 'Chi Thien', 'Nguyen Chi Thien', '', NULL, '2024-01-06 16:06:44', '123456789', 'thienncpc03460@fpt.edu.vn'),
(1, 'Nguyen', 'Chi Thien', 'Nguyen Chi Thien', 'thien_pc03460', NULL, '2024-01-06 16:10:04', '123456789', 'thienncpc03460@fpt.edu.vn');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
