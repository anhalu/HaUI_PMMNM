-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 09, 2022 lúc 05:04 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `date_order` date DEFAULT NULL,
  `total` float DEFAULT NULL COMMENT 'tổng tiền',
  `payment` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'hình thức thanh toán',
  `note` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'trạng thái',
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `id_customer`, `date_order`, `total`, `payment`, `note`, `status`, `created_at`, `updated_at`) VALUES
(17, 17, '2022-03-28', 553784000, 'ATM', 'ok tới đây đi em yêu', 'đã xử lý', '2022-05-07 03:55:33', '2022-05-07 03:55:33'),
(18, 18, '2022-03-28', 58900000, 'COD', 'ok nào', 'đã xử lý', '2022-05-07 01:52:00', '2022-03-28 15:39:10'),
(19, 19, '2022-03-28', 1010000, 'COD', 'Giao hàng trước ngày 01/04/2022', 'đã xử lý', '2022-05-07 01:52:05', '2022-03-28 15:51:29'),
(28, 28, '2022-04-28', 6588000, 'COD', 'ok nhanh nhé', 'đã xử lý', '2022-05-07 04:08:05', '2022-05-07 04:08:05'),
(24, 24, '2022-04-01', 177534000, 'COD', 'ok', 'đã xử lý', '2022-05-07 04:08:10', '2022-05-07 04:08:10'),
(26, 26, '2022-04-02', 7420000, 'ATM', 'ok nhớ giao hàng đúng ngày', 'đã hủy', '2022-05-07 01:52:37', '2022-04-02 10:46:50'),
(29, 32, '2022-05-07', 13538000, 'ATM', 'chuyển nhanh cho mình nhé', 'đã hủy', '2022-05-07 04:09:26', '2022-05-07 04:09:26'),
(30, 33, '2022-05-07', 115684000, 'ATM', 'mang nhanh qua cho minh nhé.', 'đã hủy', '2022-05-07 04:09:35', '2022-05-07 04:09:35'),
(31, 34, '2022-05-07', 56931000, 'COD', 'giao hàng cẩn thận cho mình', 'đã xử lý', '2022-12-07 01:58:50', '2022-12-07 01:58:50'),
(32, 35, '2022-05-07', 6205000, 'COD', 'chuyển hàng cẩn thận nhé', 'đã xử lý', '2022-05-07 04:12:38', '2022-05-07 04:12:38'),
(33, 36, '2022-05-15', 474096000, 'COD', 'Ghi Chú', 'đã xử lý', '2022-12-09 14:22:03', '2022-12-09 14:22:03'),
(34, 37, '2022-10-27', 6588000, 'ATM', 'Ghi Chú giao nhanh', 'Đang xử lý', '2022-10-27 11:24:31', '2022-10-27 11:24:31'),
(35, 39, '2022-12-07', 34750000, 'COD', 'Ghi Chú', 'Đang xử lý', '2022-12-07 00:47:30', '2022-12-07 00:47:30'),
(36, 40, '2022-12-07', 209866000, 'COD', 'Ghi Chú', 'đã hủy', '2022-12-09 14:22:39', '2022-12-09 14:22:39'),
(37, 41, '2022-12-09', 97905000, 'COD', 'Ghi Chú', 'Đang xử lý', '2022-12-09 15:31:22', '2022-12-09 15:31:22'),
(38, 43, '2022-12-09', 96258000, 'COD', 'Ghi Chú', 'Đang xử lý', '2022-12-09 15:32:55', '2022-12-09 15:32:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bill` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `quantity` int(11) NOT NULL COMMENT 'số lượng',
  `unit_price` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `id_product`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(20, 17, 6, 1, 198716000, '2022-03-28 15:32:44', '2022-03-28 15:32:44'),
(21, 17, 8, 2, 177534000, '2022-03-28 15:32:44', '2022-03-28 15:32:44'),
(22, 18, 2, 1, 9150000, '2022-03-28 15:39:10', '2022-03-28 15:39:10'),
(23, 18, 3, 1, 49750000, '2022-03-28 15:39:10', '2022-03-28 15:39:10'),
(24, 19, 61, 1, 1010000, '2022-03-28 15:51:29', '2022-03-28 15:51:29'),
(32, 25, 2, 1, 9150000, '2022-03-31 17:14:04', '2022-03-31 17:14:04'),
(33, 25, 8, 1, 177534000, '2022-03-31 17:14:04', '2022-03-31 17:14:04'),
(34, 26, 5, 1, 7420000, '2022-04-02 10:46:50', '2022-04-02 10:46:50'),
(19, 16, 1, 1, 7320000, '2022-03-28 15:15:51', '2022-03-28 15:15:51'),
(30, 24, 8, 1, 177534000, '2022-03-31 17:03:46', '2022-03-31 17:03:46'),
(31, 25, 1, 1, 7320000, '2022-03-31 17:14:04', '2022-03-31 17:14:04'),
(35, 27, 4, 1, 29890000, '2022-04-22 07:03:37', '2022-04-22 07:03:37'),
(36, 28, 1, 1, 6588000, '2022-04-28 14:11:03', '2022-04-28 14:11:03'),
(37, 29, 1, 1, 6588000, '2022-05-07 03:28:09', '2022-05-07 03:28:09'),
(38, 29, 7, 1, 6950000, '2022-05-07 03:28:09', '2022-05-07 03:28:09'),
(39, 30, 9, 1, 85794000, '2022-05-07 03:28:44', '2022-05-07 03:28:44'),
(40, 30, 4, 1, 29890000, '2022-05-07 03:28:44', '2022-05-07 03:28:44'),
(41, 31, 49, 1, 56931000, '2022-05-07 04:03:53', '2022-05-07 04:03:53'),
(42, 32, 19, 1, 1855000, '2022-05-07 04:12:14', '2022-05-07 04:12:14'),
(43, 32, 30, 1, 1650000, '2022-05-07 04:12:14', '2022-05-07 04:12:14'),
(44, 32, 33, 1, 2700000, '2022-05-07 04:12:14', '2022-05-07 04:12:14'),
(45, 33, 12, 1, 76664000, '2022-05-15 09:25:28', '2022-05-15 09:25:28'),
(46, 33, 6, 2, 198716000, '2022-05-15 09:25:28', '2022-05-15 09:25:28'),
(47, 34, 1, 1, 6588000, '2022-10-27 11:24:31', '2022-10-27 11:24:31'),
(48, 35, 7, 5, 6950000, '2022-12-07 00:47:30', '2022-12-07 00:47:30'),
(49, 36, 13, 5, 1950000, '2022-12-07 01:50:39', '2022-12-07 01:50:39'),
(50, 36, 15, 1, 1400000, '2022-12-07 01:50:39', '2022-12-07 01:50:39'),
(51, 36, 6, 1, 198716000, '2022-12-07 01:50:39', '2022-12-07 01:50:39'),
(52, 37, 4, 3, 29890000, '2022-12-09 15:31:22', '2022-12-09 15:31:22'),
(53, 37, 2, 1, 8235000, '2022-12-09 15:31:22', '2022-12-09 15:31:22'),
(54, 38, 1, 1, 6588000, '2022-12-09 15:32:55', '2022-12-09 15:32:55'),
(55, 38, 4, 3, 29890000, '2022-12-09 15:32:55', '2022-12-09 15:32:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_type` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `id_type`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'sofa bộ', 'cung cấp các bộ sofa chất lượng', NULL, NULL),
(2, 1, 'sofa góc', 'cung cấp các bộ sofa góc chất lượng', NULL, NULL),
(3, 1, 'sofa băng dài', 'cung cấp các loại sofa băng dài', NULL, NULL),
(4, 1, 'sofa giường', 'cung cấp các loại sofa giường', NULL, NULL),
(5, 1, 'ghế thư giãn', '', NULL, NULL),
(6, 1, 'Armchair', '', NULL, NULL),
(7, 1, 'Bàn trà', '', NULL, NULL),
(8, 1, 'Kệ tivi', '', NULL, NULL),
(9, 1, 'Vách ốp phòng khách', '', NULL, NULL),
(10, 1, 'kệ trang trí tủ sách', '', NULL, NULL),
(11, 2, 'Giường ngủ', 'cung cấp các loại giường ngủ cao cấp', '2022-04-12 11:33:07', '2022-04-12 15:47:39'),
(12, 2, 'Táp đầu giường', '<p>cung cấp c&aacute;c loại tap đầu giường đẹp chuẩn</p>', '2022-04-13 16:44:28', '2022-04-13 16:44:28'),
(13, 2, 'Tủ cá nhân', 'bán các loại tủ cá nhân', '2022-04-13 17:07:58', '2022-04-13 17:07:58'),
(14, 2, 'Tủ quần áo', 'bán các loại tủ quần áo', '2022-04-13 17:08:32', '2022-04-13 17:08:32'),
(15, 2, 'Bàn trang điểm', 'bán các loại bàn trang điểm', '2022-04-13 17:08:58', '2022-04-13 17:08:58'),
(16, 2, 'Kệ tivi phòng ngủ', 'bán các loại kệ tivi', '2022-04-13 17:10:48', '2022-04-13 17:10:48'),
(17, 2, 'Bàn làm việc', 'bán các loại bàn làm việc', '2022-04-13 17:11:11', '2022-04-13 17:11:11'),
(18, 2, 'Ghế', 'bán các loại ghế', '2022-04-13 17:11:34', '2022-04-13 17:11:34'),
(19, 2, 'Vách ốp phòng ngủ', 'bán các loại vách ốp dành cho không gian phòng ngủ của bạn', '2022-04-13 17:12:09', '2022-04-13 17:12:09'),
(20, 3, 'Bàn ăn', 'bán các loại bàn ăn với mẫu mã đẹp phù hợp tất cả không gian của ngôi nhà', '2022-04-13 17:13:07', '2022-04-13 17:13:07'),
(21, 3, 'Ghế ăn', 'bán các loại ghế ăn', '2022-04-13 17:13:28', '2022-04-13 17:13:28'),
(22, 3, 'Tủ buffet', 'cung cấp các loại Tủ buffet', '2022-04-13 17:13:54', '2022-04-13 17:13:54'),
(23, 3, 'Tủ rượu', 'cung cấp các mẫu tủ rượu đẹp', '2022-04-13 17:14:29', '2022-04-13 17:14:29'),
(24, 3, 'Ghế quầy bar', 'cung cấp các mẫu ghế quầy bar', '2022-04-13 17:14:57', '2022-04-13 17:14:57'),
(25, 4, 'Thảm trang trí', 'cung cấp các loại thảm trang trí cho căn phòng của bạn', '2022-04-13 17:15:40', '2022-04-13 17:15:40'),
(26, 4, 'Bình hoa', 'cung cấp các mẫu bình hoa trang trí', '2022-04-13 17:16:06', '2022-04-13 17:16:06'),
(27, 4, 'Bình trang trí', 'cung cấp các mẫu bình trang trí', '2022-04-13 17:16:28', '2022-04-13 17:16:28'),
(28, 4, 'Đèn trang trí', 'cung cấp các mẫu đèn trang trí', '2022-04-13 17:17:05', '2022-04-13 17:17:05'),
(29, 4, 'Tranh in hiện đại', 'cung cấp các mẫu tranh in hiện đại', '2022-04-13 17:17:47', '2022-04-13 17:17:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL,
  `content` varchar(2000) COLLATE utf8_vietnamese_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `id_user`, `id_product`, `content`, `created_at`, `updated_at`) VALUES
(1, 7, 40, 'thiết kế đẹp và sang trọng', '2022-04-14 17:00:00', NULL),
(4, 7, 40, 'oh good', '2022-04-14 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `gender`, `email`, `address`, `phone_number`, `note`, `created_at`, `updated_at`) VALUES
(17, 'hoàng minh an', 'nam', 'hoangminhan230@gmail.com', '196 cầu diễn', '0369712385', 'ok tới đây đi em yêu', '2022-03-28 15:32:44', '2022-03-28 15:32:44'),
(18, 'bùi âu bằng', 'nam', 'buiaubang1412@gmail.com', 'hà đông- hà nội', '0361231124', 'ok nào', '2022-03-28 15:39:10', '2022-03-28 15:39:10'),
(19, 'nguyễn văn hệ', 'nam', 'nguyenvanhe97@gmail.com', 'lideco- hoài đức', '0981123121', 'Giao hàng trước ngày 01/04/2022', '2022-03-28 15:51:29', '2022-03-28 15:51:29'),
(24, 'hoàng linh', 'nữ', 'hoanglinh@gmail.com', '196 cầu diễn', '03612311241', 'ok', '2022-04-28 16:00:12', '2022-04-28 16:00:12'),
(26, 'Đỗ Văn Trấn', 'nam', 'tran1121@gmail.com', '136 cầu diễn - hà nội', '+84369712385', 'ok nhớ giao hàng đúng ngày', '2022-04-02 10:46:50', '2022-04-02 10:46:50'),
(28, 'Nguyễn Trân', 'nam', 'cong141297@gmail.com', 'Đội 7- mai linh', '0369712385', 'ok nhanh nhé', '2022-04-28 14:11:03', '2022-04-28 14:11:03'),
(30, 'ngô tùng', 'nam', 'tungngo97@gmail.com', 'Năm Mẫu - Tứ Dân- Gia Lâm', '03214121412', NULL, '2022-04-28 16:09:24', '2022-04-28 16:09:24'),
(31, 'Huy Hoàng', 'nam', 'huyhoang141297@gmail.com', 'hateco phương canh', '0369712385', 'chuyển nhanh cho mình nhé', '2022-05-07 03:25:49', '2022-05-07 03:25:49'),
(32, 'Bình An', 'nam', 'binhan141297@gmail.com', 'hinode', '0369712385', 'chuyển nhanh cho mình nhé', '2022-05-07 03:28:09', '2022-05-07 03:28:09'),
(34, 'hoàng linh', 'nữ', 'linhhoang97@gmail.com', '13 ngô quyền', '0942259234', 'giao hàng cẩn thận cho mình', '2022-05-07 04:03:53', '2022-05-07 04:03:53'),
(35, 'ngô trung', 'nam', 'trungngo1121@gmail.com', 'số 69 đường nguyễn văn linh- tp Hưng Yên', '09133153124', 'chuyển hàng cẩn thận nhé', '2022-05-07 04:12:14', '2022-05-07 04:12:14'),
(36, 'nguyen lan', 'nam', 'lan016@gmail.com', 'ngoại giao đoàn', '01213219653', 'Ghi Chú', '2022-05-15 09:25:28', '2022-05-15 09:25:28'),
(37, 'nguyen he', 'nam', 'nguyenhe13579@gmail.com', '201 cầu giấy', '0335127365', 'Ghi Chú', '2022-10-27 11:24:31', '2022-10-27 11:24:31'),
(38, 'le van hoan', 'nam', 'lehoann0212@gmail.com', 'ha noi', '0123456789', 'Ghi Chú', '2022-12-01 01:27:49', '2022-12-01 01:27:49'),
(39, 'Nhóm 15', 'nam', 'nhom15@gmail.com', 'hưng yên - khoái châu', '01213219653', 'Ghi Chú', '2022-12-07 00:47:30', '2022-12-07 00:47:30'),
(40, 'Nhóm 15', 'nam', 'nhom15@gmail.com', 'hưng yên - khoái châu', '01213219653', 'Ghi Chú', '2022-12-07 01:50:39', '2022-12-07 01:50:39'),
(41, 'Nhóm 15', 'nam', 'nhom15@gmail.com', '299 cầu diễn, hà nội', '01213219653', 'Ghi Chú', '2022-12-09 15:31:22', '2022-12-09 15:31:22'),
(42, 'Nhóm 15', 'nam', 'nhom15@gmail.com', '299 cầu diễn, hà nội', '01213219653', 'Ghi Chú', '2022-12-09 15:32:09', '2022-12-09 15:32:09'),
(43, 'Nhóm 15', 'nam', 'nhom15@gmail.com', '299 cầu diễn, hà nội', '01213219653', 'Ghi Chú', '2022-12-09 15:32:55', '2022-12-09 15:32:55'),
(44, 'nguyen van han', 'nam', 'nguyenhan123@gmail.com', '200 cau dien', '0335122666', '<p>khach hang</p>', '2022-12-09 15:50:35', '2022-12-09 15:50:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_employees` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL COMMENT 'tên nhân viên',
  `email` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL COMMENT 'email',
  `address` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL COMMENT 'địa chỉ',
  `phone` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL COMMENT 'số điện thoại',
  `gender` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL COMMENT 'giới tính',
  `position` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL COMMENT 'chức vụ',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `employees`
--

INSERT INTO `employees` (`id`, `name_employees`, `email`, `address`, `phone`, `gender`, `position`, `created_at`, `updated_at`) VALUES
(1, 'hoàng minh an', 'hoangminhan230@gmail.com', '196 cầu diễn', '0369712385', 'nam', 'quản lý', NULL, '2022-05-06 03:16:59'),
(2, 'lê thùy', 'thuyle21@gmail.com', 'từ liêm - hà nội', '0368813131', 'nữ', 'nhân viên bán hàng', '2022-05-06 03:21:47', '2022-05-06 03:21:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `import_bill`
--

CREATE TABLE `import_bill` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_import_bill_detail` int(10) UNSIGNED NOT NULL,
  `total_price` float NOT NULL,
  `id_employees` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `import_bill`
--

INSERT INTO `import_bill` (`id`, `id_import_bill_detail`, `total_price`, `id_employees`, `created_at`, `updated_at`) VALUES
(1, 2, 91000000, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `import_bill_detail`
--

CREATE TABLE `import_bill_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) UNSIGNED NOT NULL COMMENT 'mã sản phẩm',
  `id_type_product` int(10) UNSIGNED NOT NULL COMMENT 'mã loại sp',
  `id_category` int(10) UNSIGNED NOT NULL COMMENT 'mã danh mục',
  `id_supplier` int(10) UNSIGNED NOT NULL COMMENT 'mã nhà cung cấp',
  `quantity` int(10) NOT NULL COMMENT 'số lượng',
  `unit_price` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `import_bill_detail`
--

INSERT INTO `import_bill_detail` (`id`, `id_product`, `id_type_product`, `id_category`, `id_supplier`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(1, 33, 4, 27, 1, 100, 1290000, NULL, NULL),
(2, 34, 1, 7, 6, 20, 4550000, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `title` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'tiêu đề',
  `summary` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tóm tắt',
  `content` varchar(5000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'nội dung',
  `image` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'hình',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `summary`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'NỘI THẤT HOÀN MỸ TUYỂN DỤNG HÀNG LOẠT VỊ TRÍ, ĐÃI NGỘ HẤP DẪN', 'Nằm trong định hướng kinh doanh, C&ocirc;ng ty CP Tập đo&agrave;n Nội thất Ho&agrave;n Mỹ cần tuyển th&ecirc;m 03 vị tr&iacute; l&agrave;m việc tại H&agrave; Nội gồm Nh&acirc;n vi&ecirc;n b&aacute;n h&agrave;ng Online, Nh&acirc;n vi&ecirc;n kế to&aacute;n ki&ecirc;m b&aacute;n h&agrave;ng v&agrave; Nh&acirc;n vi&ecirc;n kinh doanh.</em></strong></p>', 'Vị tr&iacute; B&aacute;n h&agrave;ng Online\r\n	<ul>\r\n		<li>Nhiệm vụ: Trả lời comment Facebook, tư vấn b&aacute;n h&agrave;ng online, Tư vấn trực tiếp cho kh&aacute;ch h&agrave;ng đến tham quan v&agrave; mua sản phẩm tại Showroom, đ&oacute;ng g&oacute;p &yacute; tưởng v&agrave; triển khai c&aacute;c chương tr&igrave;nh khuyến mại.</li>\r\n		<li>Địa điểm l&agrave;m việc tại Gian h&agrave;ng B2 &ndash; R1 &ndash; 21 &ndash; 22, TTTM Vincom Megamall Royal City, 72A Nguyễn Tr&atilde;i, Thanh Xu&acirc;n. Tổng thu nhập từ 7 &ndash; 15 triệu/th&aacute;ng gồm lương cứng v&agrave; hoa hồng.</li>\r\n	</ul>\r\n	</li>\r\n	<li>Nh&acirc;n vi&ecirc;n Kế to&aacute;n ki&ecirc;m b&aacute;n h&agrave;ng\r\n	<ul>\r\n		<li>Nhiệm vụ: Kiểm tra số lượng h&agrave;ng h&oacute;a,t&iacute;nh lương cho nh&acirc;n vi&ecirc;n tại Showroom, hỗ trợ nh&acirc;n vi&ecirc;n b&aacute;n h&agrave;ng của Showroom.</li>\r\n		<li>Địa điểm l&agrave;m việc tại Showroom Royal city (Gian h&agrave;ng B2 &ndash; R1 &ndash; 21 &ndash; 22, TTTM Vincom Megamall Royal City, 72A Nguyễn Tr&atilde;i, Thanh Xu&acirc;n) hoặc Showroom Ho&agrave;n Mỹ Phạm Văn Đồng.&nbsp; Tổng thu nhập của nh&acirc;n vi&ecirc;n kế to&aacute;n dao động từ 10 &ndash; 15 triệu đồng/th&aacute;ng bao gồm lương cứng 7,5 triệu/th&aacute;ng &nbsp;v&agrave; thưởng doanh số.</li>\r\n	</ul>\r\n	</li>\r\n	<li>Nh&acirc;n vi&ecirc;n kinh doanh\r\n	<ul>\r\n		<li>Nhiệm vụ: T&igrave;m kiếm, chăm s&oacute;c kh&aacute;ch h&agrave;ng, tư vấn sản phẩm &amp; dịch vụ của c&ocirc;ng ty, đảm bảo ho&agrave;n th&agrave;nh chỉ ti&ecirc;u doanh số theo th&aacute;ng, qu&yacute;,năm.</li>\r\n		<li>Địa điểm l&agrave;m việc tại Trụ sở ch&iacute;nh &ndash; số nh&agrave; 1A, ng&otilde; 199 Trường Chinh, Thanh Xu&acirc;n, H&agrave; Nội. Tổng thu nhập b&igrave;nh qu&acirc;n h&agrave;ng th&aacute;ng sẽ ở mức 10-30 triệu gồm lương cứng v&agrave; hoa hồng.</li>\r\n	</ul>\r\n	</li>\r\n	<li>Nh&acirc;n vi&ecirc;n thiết kế đồ họa\r\n	<ul>\r\n		<li>Nhiệm vụ:&nbsp;Thiết kế h&igrave;nh ảnh sản phẩm phục vụ Marketing online ,&nbsp;Thiết kế biển quảng c&aacute;o, trang tr&iacute; Showroom,&nbsp;Đề xuất &yacute; tưởng s&aacute;ng tạo, lựa chọn chất liệu, phương &aacute;n thi c&ocirc;ng ph&ugrave; hợp y&ecirc;u cầu, đạt hiệu quả</li>\r\n		<li>Địa điểm l&agrave;m việc tại Trụ sở ch&iacute;nh &ndash; số nh&agrave; 1A, ng&otilde; 199 Trường Chinh, Thanh Xu&acirc;n, H&agrave; Nội. Tổng thu nhập từ 8 -15 triệu/th&aacute;ng gồm lương cứng v&agrave; hoa hồng.<img alt=\"\" src=\"/ckfinder/ckfinder/images/tin-tuc-1.jpg\" style=\"width: 550px; height: 467px;\" /></li>\r\n	</ul>\r\n	</li>\r\n</ul>', 'tin-tuc-1.jpg', '2019-04-14 16:48:10', '2019-04-14 16:48:10'),
(5, 'Những thiết kế bếp dành riêng cho căn hộ', '<p>Thương hiệu Ixina German Kitchens tư vấn c&aacute;c &yacute; tưởng căn bếp ph&ugrave; hợp với thiết kế căn hộ chung cư, nhất l&agrave; những nơi c&oacute; diện t&iacute;ch nhỏ.</p>\r\n\r\n<p>Kh&ocirc;ng gian bếp ở c&aacute;c căn hộ thường kh&aacute; nhỏ, để lại &iacute;t chỗ cho những vật dụng cần thiết như đồ trang tr&iacute;, hay thậm ch&iacute; cả khu vực lưu trữ thực phẩm, dụng cụ... Ixina mang đến một số giải ph&aacute;p để một căn bếp nhỏ c&oacute; tất cả c&aacute;c chức năng của một gian bếp lớn.</p>', '<p><strong>Thiết kế bếp c&oacute; diện t&iacute;ch nhỏ</strong></p>\r\n\r\n<p>Sắp xếp khoa học l&agrave; lựa chọn tốt gi&uacute;p tiết kiệm kh&ocirc;ng gian. Th&agrave;nh phần gian bếp ph&ugrave; hợp (hệ thống tủ lưu trữ &acirc;m tường, đảo bếp) khiến kh&ocirc;ng gian trở n&ecirc;n rộng r&atilde;i hơn. Việc chọn nội thất đa chức năng (b&agrave;n ăn, b&agrave;n l&agrave;m việc t&iacute;ch hợp kệ trưng b&agrave;y) gi&uacute;p tiết kiệm diện t&iacute;ch nhưng căn bếp vẫn đủ c&ocirc;ng năng cần c&oacute;. Ngo&agrave;i ra, tiết chế d&ugrave;ng phụ kiện (vật dụng trang tr&iacute;, giỏ c&acirc;y, đ&egrave;n thả...) l&agrave;m tổng thể căn bếp trở n&ecirc;n hiện đại v&agrave; trẻ trung.</p>\r\n\r\n<p><strong>Thiết kế bếp với kh&ocirc;ng gian mở</strong></p>\r\n\r\n<p>Kh&ocirc;ng gian bếp mở gi&uacute;p kết nối ph&ograve;ng kh&aacute;ch v&agrave; c&aacute;c khu vực kh&aacute;c trong căn hộ, tận dụng tốt hơn kh&ocirc;ng gian, đồng thời mang đến vẻ đẹp h&agrave;i h&ograve;a. Một kh&ocirc;ng gian mở li&ecirc;n ho&agrave;n giữa ph&ograve;ng kh&aacute;ch v&agrave; nh&agrave; bếp gi&uacute;p giải ph&oacute;ng tầm nh&igrave;n, tạo ra một diện t&iacute;ch rộng hơn.</p>\r\n\r\n<p>Một lưu &yacute; đến từ c&aacute;c chuy&ecirc;n gia của Ixina l&agrave; kh&ocirc;ng n&ecirc;n lựa chọn c&aacute;c t&ocirc;ng m&agrave;u tối cho khu vực bếp mở. M&agrave;u tối sẽ l&agrave;m cho căn bếp c&oacute; cảm gi&aacute;c nhỏ. Như mẫu bếp Velvet Fjord Blue Ultra Matt của Ixina c&oacute; diện t&iacute;ch 15m2 nhưng m&agrave;u xanh v&agrave; trắng l&agrave;m s&aacute;ng căn ph&ograve;ng, khiến căn ph&ograve;ng trải rộng hơn.</p>', 'minhoa1.png', '2022-12-09 14:42:27', '2022-12-09 14:42:27'),
(4, 'NỘI THẤT HOÀN MỸ KHAI TRƯƠNG SHOWROOM THỨ 10 TẠI QUẢNG NINH', 'Nội thất Ho&agrave;n Mỹ đ&aacute;nh dấu một năm 2018 ph&aacute;t triển rực rỡ với showroom nội thất cao cấp, mang phong c&aacute;ch Ch&acirc;u &Acirc;u hiện đại tr&ecirc;n &ldquo;đất mỏ&rdquo; Quảng Ninh.</p>', 'Nội thất Ho&agrave;n Mỹ đ&aacute;nh dấu một năm 2018 ph&aacute;t triển rực rỡ với showroom nội thất cao cấp, mang phong c&aacute;ch Ch&acirc;u &Acirc;u hiện đại tr&ecirc;n &ldquo;đất mỏ&rdquo; Quảng Ninh.<br />\r\nV&agrave;o 09h30 ng&agrave;y 01/01/2019, showroom thứ 10 trong hệ thống ph&acirc;n phối nội thất cao cấp của Nội thất Ho&agrave;n Mỹ với diện t&iacute;ch 900m2 tại trung t&acirc;m th&agrave;nh phố biển Hạ Long, ch&iacute;nh thức ra mắt. C&aacute;c sản phẩm trưng b&agrave;y đồng nhất với to&agrave;n bộ hệ thống showroom tr&ecirc;n to&agrave;n quốc, đến từ c&aacute;c thương hiệu nổi tiếng của &Yacute;, Malaysia v&agrave; c&aacute;c thiết kế mới nhất của ch&iacute;nh Ho&agrave;n Mỹ. Phong c&aacute;ch Ch&acirc;u &Acirc;u hiện đại ph&ugrave; hợp với phần lớn kh&ocirc;ng gian sống của c&aacute;c căn hộ, nh&agrave; phố, biệt thự hạng sang. Sự kiện khai trương thu h&uacute;t nhiều kh&aacute;ch mời l&agrave; đại diện những thương hiệu nội thất cao cấp, kiến tr&uacute;c sư, nh&agrave; thiết kế, c&aacute;c kh&aacute;ch h&agrave;ng th&acirc;n thiết của Ho&agrave;n Mỹ trong v&agrave; ngo&agrave;i nước. Tham dự chương tr&igrave;nh, kh&aacute;ch mời c&oacute; thể trực tiếp ngắm nh&igrave;n đường n&eacute;t thiết kế tinh tế v&agrave; trải nghiệm chất lượng cao cấp của từng d&ograve;ng sản phẩm, kết hợp c&ugrave;ng sự tư vấn từ đội ngũ KTS, nh&acirc;n vi&ecirc;n tư vấn chuy&ecirc;n nghiệp, từ đ&oacute; đưa ra những quyết định ph&ugrave; hợp nhất cho kh&ocirc;ng gian sống của gia đ&igrave;nh. Ho&agrave;n Mỹ cam kết mang lại mức gi&aacute; cạnh tranh nhất, lu&ocirc;n v&igrave; lợi &iacute;ch của người ti&ecirc;u d&ugrave;ng Việt. V&agrave; để đ&aacute;nh dấu mốc ph&aacute;t triển vượt bậc c&ugrave;ng Showroom thứ 10 &ldquo;tr&ograve;n trĩnh&rdquo;, c&aacute;c kh&aacute;ch h&agrave;ng đều được hưởng mức chiết khấu 10% trực tiếp khi mua h&agrave;ng tại Showroom từ 01 đến 31/01/2019. K&egrave;m theo đ&oacute; l&agrave; loạt chương tr&igrave;nh qu&agrave; tặng hấp dẫn như: &ndash; Tặng Gift voucher 10% cho c&aacute;c lần mua h&agrave;ng tiếp theo; &ndash; Tặng thẻ VIP cho ho&aacute; đơn mua sắm tr&ecirc;n 100 triệu đồng; &ndash; Cơ hội tham gia bốc thăm tr&uacute;ng thưởng với c&aacute;c phần thưởng c&oacute; gi&aacute; trị: Iphone XS Max, sofa Toscana, b&agrave;n ăn Ho&agrave;n Mỹ.<br />\r\n&ldquo;Việc ra mắt showroom thứ 10 tại Quảng Ninh kh&ocirc;ng chỉ thể hiện sự lớn mạnh của thương hiệu m&agrave; c&ograve;n l&agrave; sự nỗ lực của đội ngũ Ho&agrave;n Mỹ mong muốn hiện thực h&oacute;a c&aacute;c l&yacute; tưởng sống sang trọng, tiện nghi, thẩm mỹ cao v&agrave; chất lượng quốc tế đến với rộng r&atilde;i người ti&ecirc;u d&ugrave;ng Việt, đến mọi tỉnh th&agrave;nh, v&ugrave;ng miền của Việt Nam&rdquo;, &ocirc;ng Ho&agrave;ng Quốc H&ugrave;ng &ndash; Tổng gi&aacute;m đốc Nội thất Ho&agrave;n Mỹ cho biết.<br />\r\nNội thất Ho&agrave;n Mỹ l&agrave; nơi quy tụ những sản phẩm nội thất nổi tiếng thế giới tại Việt Nam, đặc biệt l&agrave; c&aacute;c thương hiệu lớn, như nội thất Calia của &Yacute;, Nieri của &Yacute;, Livani, Omega của Malaysia, &hellip; c&ugrave;ng c&aacute;c thiết bị c&ocirc;ng năng, phụ kiện từ c&aacute;c h&atilde;ng Malloca (T&acirc;y Ban Nha), Hafele, Hettich, Imundex (Đức)&hellip;<br />\r\nVới 20 năm hoạt động, Nội thất Ho&agrave;n Mỹ cung cấp nội thất v&agrave; dịch vụ thi c&ocirc;ng &ndash; thiết kế trọn g&oacute;i cho to&agrave;n bộ kh&ocirc;ng gian sống. Kh&ocirc;ng chỉ đầu tư mạnh về cơ sở vật chất, doanh nghiệp c&ograve;n ch&uacute; trọng ph&aacute;t triển đội ngũ nh&acirc;n sự chuy&ecirc;n nghiệp, kỹ năng l&agrave;m việc nh&oacute;m cao, đảm bảo c&ocirc;ng tr&igrave;nh lu&ocirc;n đạt đ&uacute;ng tiến độ ở mức chất lượng tốt nhất.</p>\r\n\r\n<p><img alt=\"\" src=\"/ckfinder/ckfinder/images/Quang-Ninh_1_4.jpg\" style=\"height:467px; width:700px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/ckfinder/ckfinder/images/Quang-Ninh_2_4.jpg\" style=\"height:467px; width:700px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"/ckfinder/ckfinder/images/Quang-Ninh_3_4.jpg\" style=\"height:467px; width:700px\" /></p>', 'tin-tuc-4.jpg', '2019-04-21 17:46:30', '2019-04-21 17:46:30'),
(6, 'Lịch nghỉ Tết Âm 2023', '<p>Sau khi xem x&eacute;t c&aacute;c phương &aacute;n nghỉ Tết của Bộ Lao động - Thương binh v&agrave; X&atilde; hội, ng&agrave;y 01/12/2022, Ch&iacute;nh phủ đ&atilde; ch&iacute;nh thức chốt phương &aacute;n nghỉ Tết &Acirc;m lịch năm 2023 l&agrave; 07 ng&agrave;y.</p>', '<p>Cụ thể, tại Văn bản số&nbsp;<a href=\"https://luatvietnam.vn/lao-dong/cong-van-8056-vpcp-kgvx-236783-d6.html\">8056/VPCP-KGVX</a>, Ph&oacute; Thủ tướng Ch&iacute;nh phủ Vũ Đức Đam c&oacute; &yacute; kiến đồng &yacute; với đề nghị của Bộ Lao động - Thương binh v&agrave; X&atilde; hội về việc&nbsp;nghỉ Tết &Acirc;m lịch từ ng&agrave;y 20/01/2023 đến hết ng&agrave;y 26/01/2023.</p>\r\n\r\n<p>C&aacute;c cơ quan, đơn vị thực hiện lịch nghỉ Tết n&oacute;i tr&ecirc;n phải bố tr&iacute;, sắp xếp c&aacute;c bộ phận l&agrave;m việc hợp l&yacute; để giải quyết c&ocirc;ng việc li&ecirc;n tục, bảo đảm tốt c&ocirc;ng t&aacute;c phục vụ tổ chức, nh&acirc;n d&acirc;n.</p>\r\n\r\n<p>Như vậy,&nbsp;lịch nghỉ Tết &Acirc;m lịch năm 2023 sẽ gồm 07 ng&agrave;y, t&iacute;nh từ ng&agrave;y 20/01/2023 đến hết ng&agrave;y 26/01/2023&nbsp;(tức từ ng&agrave;y 29 th&aacute;ng Chạp năm Nh&acirc;m Dần đến hết ng&agrave;y m&ugrave;ng 5 th&aacute;ng Gi&ecirc;ng năm Qu&yacute; M&atilde;o).</p>\r\n\r\n<p>Theo lịch nghỉ n&agrave;y, c&aacute;n bộ, c&ocirc;ng chức, vi&ecirc;n chức, người lao động l&agrave;m việc theo chế độ nghỉ thứ Bảy, Chủ nhật sẽ được nghỉ Tết &Acirc;m lịch 07 ng&agrave;y li&ecirc;n tiếp.</p>', 'lich_nghi_tet_2023.png', '2022-12-09 14:55:06', '2022-12-09 14:55:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_type` int(10) UNSIGNED DEFAULT NULL,
  `id_category` int(10) UNSIGNED DEFAULT NULL,
  `id_supplier` int(11) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Parameter` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT 'thông số',
  `origin` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'xuất xứ',
  `material` varchar(250) COLLATE utf8_unicode_ci NOT NULL COMMENT 'chất liệu',
  `unit_price` float DEFAULT NULL COMMENT 'giá gốc',
  `promotion_price` float DEFAULT NULL COMMENT 'giá sale',
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'đơn vị',
  `new` tinyint(4) DEFAULT 0,
  `status` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `id_type`, `id_category`, `id_supplier`, `description`, `Parameter`, `origin`, `material`, `unit_price`, `promotion_price`, `image`, `unit`, `new`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Táp đầu giường - BRS-H062-ST', 2, 12, 3, 'mẫu mã đẹp, kiểu dáng sang trọng', 'KÍCH THƯỚC L 700   W 435   H 510 (mm', 'Gỗ công nghiệp, cạnh viền bọc da Chân kim loại', 'Xuất xứ Malaysia', 7320000, 6588000, 'brs-h062.5.jpg', 'bộ', 1, 'đã hủy', '2016-10-26 03:00:16', '2022-05-09 07:39:18'),
(2, 'Táp đầu giường - BRS-W028-ST', 2, 12, NULL, 'thiết kế sang trọng và đẹp mắt', 'L 800   W 450   H 650 (mm)', 'Xuất xứ Malaysia', 'Gỗ công nghiệp. Bề mặt phủ laminate. Hai mặt bên ốp da. Chân kim loại', 9150000, 8235000, 'brs-w028.5.jpg', 'bộ', 1, 'đã hủy', '2016-10-26 03:00:16', '2022-12-07 01:54:06'),
(3, 'Giường da - HA319', 2, 11, 1, '<p>m&agrave;u sắc đẹp , độ rộng ph&ugrave; hợp với căn ph&ograve;ng ngủ của bạn.</p>', 'KÍCH THƯỚC L 2120   W 2230   H 970 (mm).KÍCH THƯỚC ĐỆM 1800x2000 (mm)', 'Xuất xứ Trung Quốc. Thương hiệu Hoàn Mỹ', 'Khung giường bằng gỗ tự nhiên Dát giường: plywood kết hợp với khung đỡ bằng sắt sơn tĩnh điện Đầu gi', 49750000, 0, 'dan1.jpg', 'bộ', 0, 'đã hủy', '2016-10-26 03:00:16', '2022-12-09 15:48:30'),
(4, 'Giường-BRS-H062-KB', 2, 11, 1, '<p>ĐẶC ĐIỂM NỔI BẬT CỦA GIƯỜNG - BRS-H062-KB Gỗ chưa bao giờ l&agrave; &ldquo;hết thời&rdquo; trong thiết kế ph&ograve;ng ngủ, đặc biệt l&agrave; d&agrave;nh cho một chiếc giường vững chắc v&agrave; bền bỉ với thời gian. C&aacute;c thanh gỗ mộc mạc dưới b&agrave;n tay người thợ tạo n&ecirc;n một kết cấu ph&oacute;ng kho&aacute;ng, trẻ trung m&agrave; vẫn giữ được sự ấm &aacute;p cho kh&ocirc;ng gian. Yếu tố quan trọng trong c&aacute;c thiết kế giường hiện đại ch&iacute;nh l&agrave; vừa c&oacute; sự đơn giản, ph&oacute;ng kho&aacute;ng song vẫn phải thể hiện được sự sang trọng v&agrave; đẳng cấp kh&ocirc;ng hề thua k&eacute;m c&aacute;c thiết kế cổ điển hay t&acirc;n cổ điển. V&igrave; vậy c&aacute;c chi tiết da v&agrave; nỉ bọc với m&agrave;u sắc thuần nhất được th&ecirc;m v&agrave;o một c&aacute;ch kh&eacute;o l&eacute;o, đủ để tạo n&ecirc;n sự kh&aacute;c biệt trong phong c&aacute;ch v&agrave; vẫn tạo được hiệu ứng thẩm mỹ tinh tế, thanh lịch c&ugrave;ng sự sang trọng vốn hiện hữu của phong c&aacute;ch ch&acirc;u &Acirc;u hiện đại. Điểm nhấn th&uacute; vị trong bộ sưu tập c&aacute;c mẫu giường lần n&agrave;y nằm ở phần kệ đầu giường kiểu c&aacute;ch, được s&aacute;ng tạo với nhiều h&igrave;nh dạng v&agrave; kết cấu kh&aacute;c nhau, gi&uacute;p kh&ocirc;ng gian ph&ograve;ng ngủ c&oacute; diện mạo ho&agrave;n hảo hơn. Phần kệ đầu giường n&agrave;y khi kết hợp h&agrave;i h&agrave;o với tổng thể sẽ đem đến một l&agrave;n gi&oacute; mới, một ấn tượng mới d&agrave;nh ri&ecirc;ng cho kh&ocirc;ng gian. Sở hữu những đường n&eacute;t thiết kế sang trọng, hiện đại c&ugrave;ng m&agrave;u sắc tinh tế, thanh lịch, bộ sưu tập giường ngủ mới nhất tại Nội thất Ho&agrave;n Mỹ chắc chắn sẽ kh&ocirc;ng khiến bạn thất vọng.</p>', 'KÍCH THƯỚC\r\nL 1988   W 2170   H 1478 (mm)', 'Xuất xứ Malaysia', 'Khung gỗ công nghiệp bọc da và vải màu 6012-4\r\nChân kim loại', 3000000, 0, '123.jpg', 'bộ', 1, NULL, '2016-10-26 03:00:16', '2022-12-09 15:48:01'),
(5, ' Bàn trà - BCP-NK-SON-106SH-INOX', 1, 7, NULL, '', '', '', '', 7420000, 0, 'bcp-nk-son-106sh-inox.1.jpg', 'cái', 1, NULL, '2016-10-26 03:00:16', '2016-10-24 22:11:00'),
(6, 'Ghế sofa góc Nieri - 100300186', 1, 2, NULL, 'Là bộ sản phẩm độc quyền bán chạy nhất của thương hiệu Nieri từ năm 1992 đến nay, Sofa Corniche có thiết kế mang đậm phong cách cổ điển và truyền thống, phần khung với viền trang trí bằng gỗ óc chó sang trọng, mang đến nét chấm phá mới cho cuộc sống hiện đại. ', '', '', '', 283880000, 198716000, 'ghe-sofa-goc-nieri-10030018-noi-that-hoan-my_1_.jpg', 'bộ', 0, NULL, '2016-10-26 03:00:16', '2016-10-24 22:11:00'),
(7, 'Bàn trà mặt đá-BCP-MDV-DCT-CS', 1, 7, NULL, '', '', '', '', 6950000, 0, 'bcp-mdv-dct-cs.1a.jpg', 'cái', 1, NULL, '2016-10-26 03:00:16', '2016-10-24 22:11:00'),
(8, 'Ghế sofa da bộ Nieri - 100300113', 1, 1, NULL, '', '', '', '', 253620000, 177534000, 'ghe-sofa-da-bo-nieri-10030011-noi-that-hoan-my_1_.jpg', 'bộ', 0, NULL, '2016-10-26 03:00:16', '2016-10-24 22:11:00'),
(9, 'Tủ rượu AFLATUS - VS-13', 3, 23, NULL, '', '', '', '', 142990000, 85794000, 'tu_ruou_vs-13_rsz_compressed.jpg', 'bộ', 0, NULL, '2016-10-26 03:00:16', '2016-10-24 22:11:00'),
(11, 'Ghế ăn - HD6789[DH813]', 3, 21, NULL, '', '', '', '', 2170000, 0, 'dh6789.2.jpg', 'cái', 0, NULL, '2016-10-12 02:00:00', '2016-10-27 02:24:00'),
(12, 'Ghế sofa bộ Baopo - MG-A2032A-2', 1, 1, NULL, '', '', '', '', 109520000, 76664000, 'bo_sofa_ban_tra_mg_a2032a2_2_rsz_compressed.jpg', 'cái', 0, NULL, '2016-10-12 02:00:00', '2016-10-27 02:24:00'),
(13, 'Ghế ăn - 9-09M', 3, 21, NULL, '', '', '', '', 1950000, 0, '9-09m.2.jpg', 'cái', 1, NULL, '2016-10-12 02:00:00', '2016-10-27 02:24:00'),
(14, 'Bàn làm việc Baopo - MG-A2022', 2, 17, NULL, '', '', '', '', 40860000, 28602000, 'ban_mg-a2022_rsz_compressed.jpg', 'cái', 0, NULL, '2016-10-12 02:00:00', '2016-10-27 02:24:00'),
(15, 'Ghế ăn - 7-10MZ', 3, 21, NULL, '', '', '', '', 1400000, 0, '7-10mz.2.jpg', 'cái', 1, NULL, '2016-10-12 02:00:00', '2016-10-27 02:24:00'),
(16, 'Bàn ăn Baopo - MG-2050A-1', 3, 20, NULL, '', '', '', '', 40780000, 28546000, 'ban_an_mg-2050a-1_rsz_compressed.jpg', 'cái', 0, NULL, '2016-10-12 02:00:00', '2016-10-27 02:24:00'),
(17, 'Bàn soạn Status - HMPEDIVB305', 2, 17, NULL, '', '', '', '', 47360000, 28416000, 'b.soan_hmpedivb305_1_rsz_compressed.jpg', 'cái', 0, NULL, '2016-10-12 02:00:00', '2016-10-27 02:24:00'),
(18, 'Bàn trang điểm - BRS-H062-DS', 2, 15, NULL, '', '', '', '', 25620000, 0, 'brs-h062.12.jpg', 'cái', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(19, 'Bình trang trí - CG641', 4, 27, NULL, '', '', '', '', 1855000, 0, 'cg-641.1.jpg', 'cái', 1, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(20, 'Bàn trang điểm - BP-ARC-PARC09-M2', 2, 15, NULL, '', '', '', '', 21420000, 0, 'bp-arc-parc09-m2_rsz_compressed.jpg', 'cái', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(21, 'Bàn ăn Baopo - JL-A1050b', 3, 20, NULL, '', '', '', '', 37160000, 26012000, 'ban_an_jl-a1050b_rsz_compressed.jpg', 'cái', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(22, '\r\nBình trang trí - CG642', 4, 27, NULL, '', '', '', '', 1290000, 0, 'cg-642.3.jpg', 'cái', 1, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(23, 'Bàn làm việc - BLV-MFC-204SH', 2, 17, NULL, '', '', '', '', 12280000, 0, 'blv-1.jpg', 'cái', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(24, 'Bàn học Hoàn Mỹ - BH-MFC-030SH/941SL', 2, 17, NULL, '', '', '', '', 5250000, 0, 'bh-mfc-030-941sl_gs-mfc-941sl-1_2.jpg', 'cái', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(25, 'Bộ bàn trà phòng ngủ Baopo ', 2, 7, NULL, '', '', '', '', 36130000, 25291000, 'ghe_mg_a2010a_3_rsz_compressed.jpg', 'bộ', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(26, 'Vách ốp phòng ngủ - VOP04-ARC-PARC02', 2, 19, NULL, '', '', '', '', 2880000, 0, '4_40_1.jpg', 'bộ', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(27, 'Ghế bàn ăn Segis - 521001304050', 3, 21, NULL, '', '', '', '', 1290000, 903000, 'ghe-ban-an-segis-52100130-noi-that-hoan-my_1_.jpg', 'cái', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(28, 'Bàn trà - BCP-CN-VHT19-CS (1)', 1, 7, NULL, '', '', '', '', 5660000, 0, 'bcp-cn-vht19-cs.1_1.jpg', 'cái', 1, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(29, 'Vách ốp phòng ngủ - VOP01-MFC-221SH', 2, 19, NULL, '', '', '', '', 2530000, 0, '7_41_3.jpg', 'bộ', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(30, 'Ghế ăn - HD001-BL103', 3, 21, NULL, '', '', '', '', 1650000, 0, 'hd001.2.jpg', 'cái', 1, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(31, 'Tủ rượu Status - HMAVDBLCMP01', 3, 23, NULL, '', '', '', '', 56240000, 33744000, 'hmavdblcmp01-1.jpg', 'cái', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(32, 'Ghế sofa đơn Calia - CAL1018/4410', 1, 5, NULL, '', '', '', '', 41160000, 32928000, '1_10_2.jpg', 'cái', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(33, 'Bình trang trí - CF2204', 4, 27, NULL, '', '', '', '', 2700000, 0, 'cf-2204.1.jpg', 'cái', 1, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(34, 'Bàn trà - BCP-T-VHT19-CS (3)', 1, 7, NULL, '', '', '', '', 4550000, 0, 'bcp-t-vht19-cs.1_1.jpg', 'cái', 1, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(35, 'Sofa vải 2,5 chỗ - A10M/A08-20A', 1, 3, NULL, '', '', '', '', 16820000, 0, 'a08-20a_b_.1.jpg', 'bộ', 1, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(36, 'Ghế sofa góc Omega - KH153L/3005', 1, 2, NULL, '', '', '', '', 63580000, 31790000, 'ghe-sofa-goc-omega-kh153l-3005-noi-that-hoan-my_1_.jpg', 'cái', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(37, 'Bàn ăn Laminate-LK2118I', 3, 20, NULL, '', '', '', '', 21650000, 0, 'ba-3m-ctg-lk2118i.3.jpg', 'cái', 1, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(38, 'Tủ rượu Status - HMPEDIVV105', 3, 23, NULL, '', '', '', '', 52820000, 31692000, 't_hmpediw105_rsz_compressed.jpg', 'cái', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(39, 'Sofa 2 chỗ Calia - 756/115 (2)', 1, 3, NULL, '', '', '', '', 60960000, 30480000, '6_40_1.jpg', 'bộ', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(40, 'Bộ bàn trà phòng ngủ AFLATUS - VS-27', 2, 7, NULL, '', '', '', '', 50290000, 30174000, 'bo_ban_tra_vs-27_rsz_compressed.jpg', 'bộ', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(41, 'Ghế sofa đơn Calia - 52022020', 1, 5, NULL, '', '', '', '', 42520000, 29764000, 'ghe-sofa-don-calia-52022020-noi-that-hoan-my_1__1.jpg', 'cái', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(42, 'Ghế sofa da bộ Omega - 10090181225', 1, 1, NULL, '', '', '', '', 73890000, 59112000, 'ghe-sofa-da-bo-omega-10090181-noi-that-hoan-my_1_.jpg', 'bộ', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(43, 'Sofa da bộ Calia - CAL1013/115', 1, 1, NULL, '', '', '', '', 150180000, 0, 'cal1013_115.jpg', 'bộ', 1, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(44, 'kệ tivi - HKTV01-MFC-106SH', 1, 8, NULL, '', '', '', '', 14930000, 0, '1_22.jpg', 'cái', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(45, 'Kệ tivi Melamine - 21120220', 1, 8, NULL, '', '', '', '', 38050000, 0, 'ke-tivi-melamine-21120220-noi-that-hoan-my_1_.jpg', 'cái', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(46, 'Kệ tivi - KTVM01-MFC-333PL/204SH', 2, 16, NULL, '', '', '', '', 9750000, 0, 'ktvm01-mfc-333pl-204sh-_1950x420x480_.1a.jpg', 'cái', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(47, 'Tủ buffet Marte - 650000144', 3, 22, NULL, ' ', '', '', '', 29600000, 0, 'marte_sideboad_white_pigmented_solid_veneer_oak_4_drawers_2_doors_dr.jpg', 'cái', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(48, 'Tủ buffet Acrylic - 35120020', 3, 22, NULL, '', '', '', '', 20150000, 0, 'tbf-arc-earc11_kt_900x490x1036_1_rsz_compressed.jpg', 'cái', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(49, 'Giường ngủ IMAB - T40258YA', 2, 11, NULL, '', '', '', '', 81330000, 56931000, 'giuong_t40258ya_rsz_compressed.jpg', 'cái', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(50, 'Ghế sofa da bộ Livani - 1007015123', 1, 1, NULL, '', '', '', '', 114090000, 57045000, 'ghe-sofa-da-bo-livani-10070151-noi-that-hoan-my_1_.jpg', 'cái', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(51, 'Sofa 2 chỗ Hoàn Mỹ - Verola/TL-13 (1)', 1, 3, NULL, '', '', '', '', 30080000, 0, 'verola_tl_13_bo_.7c.jpg', 'bộ', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(52, 'Sofa góc Hoàn Mỹ - Veneto (M)-223', 1, 2, NULL, '', '', '', '', 56720000, 0, 'veneto-223_goc_don_.2z.jpg', 'bộ', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(53, 'Ghế armchair - FS17-1', 1, 6, NULL, '', '', '', '', 4200000, 0, 'fs17-1.1.jpg', 'cái', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(54, 'Tranh trang trí - Q-G14044-1', 4, 29, NULL, '', '', '', '', 2600000, 0, '3_23.jpg', 'bức', 1, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(55, 'Ghế armchair - FS16-1', 1, 6, NULL, '', '', '', '', 4550000, 0, 'fs16-1.7.jpg', 'cái', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(56, 'Ghế armchair - 1064A-1P-TX1235', 1, 6, NULL, '', '', '', '', 10360000, 0, '1064a-1p-tx1235-1.jpg', 'cái', 0, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(57, 'Bình trang trí - PE362', 4, 27, NULL, '', '', '', '', 710000, 0, 'pe362.1.jpg', 'bộ', 1, NULL, '2016-10-13 02:20:00', '2016-10-19 03:20:00'),
(58, 'Tủ rượu Baopo - JL-A1054', 3, 23, NULL, '', '', '', '', 36680000, 25676000, 'tu_ruou_jl_a1054_rsz_compressed.jpg', '', 0, NULL, '2016-10-26 17:00:00', '2016-10-11 17:00:00'),
(59, 'Tủ quần áo Melamine - TA03', 2, 14, NULL, '', '', '', '', 21650000, 0, 'ta03-mfc-873ev-106sh_rsz_compressed_1.jpg', '', 0, NULL, '2016-10-26 17:00:00', '2016-10-11 17:00:00'),
(60, 'Tủ quần áo Acrylic - 35120010', 2, 14, NULL, '', '', '', '', 45080000, 0, 'tu-quan-ao-acrylic-35120010-noi-that-hoan-my_1_.jpg', '', 0, 'đã hủy', '2016-10-26 17:00:00', '2022-05-09 07:07:32'),
(61, '\r\nBình trang trí - CK741', 4, 27, NULL, '', '', '', '', 1010000, 950000, 'ck741.2.jpg', 'cái', 1, NULL, NULL, NULL),
(62, 'Ghế sofa góc Zolano - 1013006766', 1, 2, NULL, 'Với khả năng nâng - hạ phần tựa đầu cùng thiết kế bọc mút tựa lưng tiện dụng, bộ Sofa góc Zolano này chắc chắn mang lại những phút giây thư giãn cho người sử dụng. Chất liệu da bò 100% nhập khẩu Ý mềm mại, màu sắc thời thượng, bộ sofa này sẽ là điểm nhấn độc đáo cho mọi không gian phòng khách!', 'Đôn: L/W 835   P/D 600 (mm) Góc: L/W 3130  P/D 2022  D 1030  H 800 (chưa nâng tựa đầu) /900 (đã nâng tựa đầu) (mm)', 'Zolano, Malaysia', 'Chất liệu: 100% da bò Ý. Khung sofa: Làm bằng gỗ dầu đã qua xử lý và plywood. Chân: Thép mạ crom.', 66220000, 46354000, 'ghe-sofa-goc-zolano-10130067-noi-that-hoan-my_1_.jpg', 'bộ', 1, 'đã hủy', NULL, '2022-05-09 06:57:45'),
(63, 'bàn', 3, 20, 1, '<p>b&agrave;n 4 ch&acirc;n</p>', 'L 800   W 450   H 650 (mm)', 'trung quoc', '\'Gỗ công nghiệp\'', 1000000, 0, '111.jpg', 'cái', 0, '', '2022-12-07 00:39:45', '2022-12-07 00:39:45'),
(64, 'guita', 1, 1, 1, '<p>xfdsagsag</p>', 'L 800   W 450   H 650 (mm)', 'trung quoc', '\'go\'', 1000000, 0, '123.jpg', 'cái', 0, '', '2022-12-07 01:55:36', '2022-12-07 01:55:36'),
(65, 'ghe nhua', 1, 1, 1, '<p>123</p>', '001', 'vn', 'go', 1000000, 0, '123.jpg', 'bộ', 1, '', '2022-12-08 04:42:44', '2022-12-08 04:42:44'),
(66, 'ghe nhom', 3, 20, 1, '<p>ghe nhom loai 1</p>', 'L 800   W 450   H 650 (mm)', 'trung quoc', 'nhom', 150000, 0, '123.jpg', 'chiec', 1, '', '2022-12-09 15:46:53', '2022-12-09 15:46:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(100) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `name`, `link`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Sang Trọng', 'https://www.noithathoanmy.com.vn/thiet-ke-noi-that', 'banner5.jpg', 'noi that dep', '2022-04-18 15:32:09', '0000-00-00 00:00:00'),
(2, 'Tinh Tế', 'https://www.noithathoanmy.com.vn/thiet-ke-noi-that', 'veneto_web-01.jpg', 'noi that hoan my', '2022-04-18 15:32:16', '0000-00-00 00:00:00'),
(3, 'Hoàn Mỹ', 'https://www.noithathoanmy.com.vn/thiet-ke-noi-that', 'dan11.jpg', 'noi that cho gia dinh', '2022-04-18 15:32:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) UNSIGNED NOT NULL,
  `name_supplier` varchar(250) COLLATE utf8_vietnamese_ci NOT NULL,
  `address` varchar(1000) COLLATE utf8_vietnamese_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `supplier`
--

INSERT INTO `supplier` (`id`, `name_supplier`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Công Ty TNHH Sản Xuất Và Thương Mại Mộc Việt', '109/1164/A10 Lê Đức Thọ, P. 13, Q. Gò Vấp, Tp. Hồ Chí Minh (TPHCM), Việt Nam', '0939396578', 'noithatmocviet@yahoo.com', '2022-04-28 14:50:54', '2022-04-28 14:50:54'),
(2, 'Công Ty TNHH Thương Mại Sản Xuất Vận Chuyển Hợp Phát', '132/12 Song Hành, Phường Tân Hưng Thuận, Quận 12, Tp. Hồ Chí Minh (TPHCM), Việt Nam', '(028) 62982999', 'noithathopphat@gmail.com', '2022-04-28 14:49:18', '0000-00-00 00:00:00'),
(3, 'Công Ty Cổ Phần Xây Dựng Và Nội Thất Minh Tiến', 'Văn Phòng: Tầng 8, Tòa Nhà Bitexco, 19-25 Nguyễn Huệ, P. Bến Nghé, Q. 1, Tp. Hồ Chí Minh (TPHCM), Việt Nam', '0908 359 888', 'minhtien@mtic.vn', '2022-04-28 14:49:18', '0000-00-00 00:00:00'),
(6, 'Aconcept - Công Ty TNHH Aconcept Việt Nam', '<p>206 Nam Kỳ Khởi Nghĩa, P. 6, Q. 3,&nbsp;<strong>Tp. Hồ Ch&iacute; Minh (TPHCM)</strong>&nbsp;<br />\r\nTầng 3 - 5, 279 Nguyễn Văn Trỗi, P. 10, Q. Ph&uacute; Nhuận,&nbsp;<em><strong>Tp. Hồ Ch&iacute; Minh (TPHCM)&nbsp;</strong></em>, Việt Nam</p>', '(028)39303312', 'contact@trangvangvietnam.com', '2022-04-28 15:20:28', '2022-04-28 15:20:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_products`
--

CREATE TABLE `type_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_products`
--

INSERT INTO `type_products` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Nội thất phòng khách', 'Những đồ nội thất đẹp dành cho phòng khách\r\n', 'anh1.jpg', NULL, NULL),
(2, 'Nội thất phòng ngủ', 'Những đồ nội thất cho phòng ngủ bao gồm. giường, tủ quần áo, bàn làm việc, bàn học, bàn trang điểm,...\r\n', 'anh2.jpg', '2016-10-12 02:16:15', '2016-10-13 01:38:35'),
(3, 'Nội thất phòng ăn', 'Những đồ nội thất cho phòng ăn bao gồm: bàn ăn , ghế ăn ăn, tủ bếp, tủ rượu, bàn buffer. vvv...\r\n', 'anh3.jpg', '2016-10-18 00:33:33', '2016-10-15 07:25:27'),
(4, 'Đồ trang trí', 'Những đồ trang trí cho nội thất như bình thủy tinh, tranh ảnh, v.v...\r\n', 'anh4.jpg', '2016-10-26 03:29:19', '2016-10-26 02:22:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` int(3) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `phone`, `address`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'hoàng minh anh', 'hoangminhan230@gmail.com', '$2y$10$SOhkSh8eFkE6O0Zh466kl.nOEmn/qv8aucKrm7uetg5Vgu4eV7r7e', '0369712385', 'M34 NGÔ', 0, NULL, '2022-03-28 17:05:41', '2022-12-07 01:57:20'),
(9, 'bùi âu bằng', 'buianbang1412@gmail.com', '$2y$10$qRmWOsZgnB.ePY4yr8o1F.AWMCqqs.YPXDyeC94t6x/.vdHGxiQCa', '1213121', 'hà nội', 0, NULL, '2022-03-28 17:09:58', '2022-03-28 17:09:58'),
(10, 'nguyễn văn hệ', 'nguyenvanhe1@gmail.com', '$2y$10$XU6reb8tCHPBWgMJI/ALMeSH7FpYvVPGR5niTNU5Ql0Ss8f/SPTEu', '121232123', '196 tây mỗ', 0, 'M9uSBX0feUwP2KpeWfoJpcRfdlLx1sFyMdDANELQJZfo6Q4LHq41bAir3c7W', '2022-03-29 09:31:58', '2022-12-08 04:24:20'),
(13, 'do van trang', 'trang97@gmail.com', '$2y$10$5vc5l1ZliR1l9jTZt3SskOFS7eUT/DWA1vMTfWz2cgJdBrgtTasi.', '+84369712385', 'hải phòng', 0, NULL, '2022-04-02 10:29:19', '2022-12-08 04:24:45'),
(14, 'le ba hoan', 'hoan141297@gmail.com', '$2y$10$jyMVpSXGx5FD95IdszfOZuJKNiIlxjoiIlYQv9LU4YdK8hmY.Alsa', '0369712385', 'Đội 7- Thôn Năm Mẫu - Xã Tứ Dân, Hà Nam', 1, 'QkvziPr6af1HeZIVyI9gdifllH5IBWPVvDfmLYwkwjFTveTy9nnUaj3hhRrm', '2022-04-08 07:42:21', '2022-12-08 04:25:17'),
(15, 'Nhóm 15', 'nhom15@gmail.com', '$2y$10$IQFzC9eToX8cA40j26j5BuJ9AcT3o34bK2CLtN5wDtCDKRaOcXPGC', '01213219653', '299 cầu diễn, hà nội', 1, 'viKcvin07JfeD4KIlcrA9k5vAoOczcqSFAklcd2B2lHfS6H2c8TFqObcqBma', '2022-04-28 13:09:48', '2022-12-08 04:25:50'),
(16, 'nguyen trung nhan', 'nhan2001@gmail.com', '$2y$10$6jLFWobP/QtFF.7UrfY4BOKpUak9lt.m87bO288w.duaEaMSdg6jC', '036971238511', 'Hưng yên', NULL, 'y5WURdyWTsPsxkv8TZ1UzTrUGZgoge39cugEvJ5gyqozpHB0DwqxFYUgYhUs', '2022-05-08 07:39:07', '2022-05-08 07:39:07'),
(17, 'le van hoan', 'lehoann0212@gmail.com', '$2y$10$ZqUdACcDhOQmYHes6/JuFeO16iPTGHtX5kHEkh3AdOVJhJItVPgaq', '0123456789', 'ha noi', NULL, NULL, '2022-12-01 01:26:02', '2022-12-01 01:26:02'),
(18, 'hoàng', 'lehoang123@gmail.com', '$2y$10$HEMQ52kKvCwTs1mB3wOVp.G40JcZsWMXqau4CoxOAMSPcFgPQMvY6', '0123987645', 'hà nội', NULL, NULL, '2022-12-07 00:19:20', '2022-12-07 00:19:20'),
(21, 'nhom155', 'nhom155@gmail.com', '$2y$10$YQtyd3cFDDsiBiBAAYACp.6kd2b7GN.FusIBgHBvAyhvBRRPOh7GS', '0123666999', '388 cầu diễn', 1, NULL, '2022-12-08 04:17:10', '2022-12-08 04:17:10'),
(23, 'nguyen he', 'nguyenhe234@gmail.com', '$2y$10$9Ru6TfCcIWX8opHjGDxBd.Kfu5yqfBveY8yQjojo14W4RXXT0cGJ2', '0123555666', '288 cau dien', NULL, NULL, '2022-12-09 15:30:33', '2022-12-09 15:30:33');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_ibfk_1` (`id_customer`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_detail_ibfk_2` (`id_product`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type` (`id_type`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `import_bill`
--
ALTER TABLE `import_bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_employees` (`id_employees`),
  ADD KEY `id_import_bill_detail` (`id_import_bill_detail`);

--
-- Chỉ mục cho bảng `import_bill_detail`
--
ALTER TABLE `import_bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_type_product` (`id_type_product`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_id_type_foreign` (`id_type`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `import_bill`
--
ALTER TABLE `import_bill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `import_bill_detail`
--
ALTER TABLE `import_bill_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type_products` (`id`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `import_bill`
--
ALTER TABLE `import_bill`
  ADD CONSTRAINT `import_bill_ibfk_1` FOREIGN KEY (`id_employees`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `import_bill_ibfk_2` FOREIGN KEY (`id_import_bill_detail`) REFERENCES `import_bill_detail` (`id`);

--
-- Các ràng buộc cho bảng `import_bill_detail`
--
ALTER TABLE `import_bill_detail`
  ADD CONSTRAINT `import_bill_detail_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `import_bill_detail_ibfk_2` FOREIGN KEY (`id_type_product`) REFERENCES `type_products` (`id`),
  ADD CONSTRAINT `import_bill_detail_ibfk_3` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `import_bill_detail_ibfk_4` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type_products` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
