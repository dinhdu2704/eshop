-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 09, 2017 lúc 05:43 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `eshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `advertising`
--

CREATE TABLE `advertising` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `advertising`
--

INSERT INTO `advertising` (`id`, `ten`, `hinh`, `noidung`, `link`, `created_at`, `updated_at`) VALUES
(1, 'quảng cáo 1', '', 'quảng cáo 1', 'quảng cáo 1', NULL, NULL),
(2, 'quảng cáo 2', '', 'quảng cáo 2', 'quảng cáo 2', NULL, NULL),
(3, 'quảng cáo 3', '', 'quảng cáo 3', 'quảng cáo 3', NULL, NULL),
(4, 'quảng cáo 4', '', 'quảng cáo 4', 'quảng cáo 4', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `idUser` int(10) UNSIGNED NOT NULL,
  `tieude` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieudekodau` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tomtat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noibat` int(11) NOT NULL DEFAULT '0',
  `soluotxem` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id`, `idUser`, `tieude`, `tieudekodau`, `tomtat`, `noidung`, `hinh`, `noibat`, `soluotxem`, `created_at`, `updated_at`) VALUES
(11, 2, 'Tiêu đề 1', 'Tiêu đề 1', 'Tiêu đề 1', 'Tiêu đề 1 Tiêu đề 1 Tiêu đề 1 Tiêu đề 1 Tiêu đề 1 Tiêu đề 1', '', 1, 0, NULL, NULL),
(12, 2, 'Tiêu đề 1', 'Tiêu đề 1', 'Tiêu đề 1', 'Tiêu đề 1 Tiêu đề 1 Tiêu đề 1 Tiêu đề 1 Tiêu đề 1 Tiêu đề 1', '', 1, 0, NULL, NULL),
(13, 3, 'Tiêu đề 1', 'Tiêu đề 1', 'Tiêu đề 1', 'Tiêu đề 1 Tiêu đề 1 Tiêu đề 1 Tiêu đề 1 Tiêu đề 1 Tiêu đề 1', '', 1, 0, NULL, NULL),
(14, 2, 'Tiêu đề 2', 'Tiêu đề 1', 'Tiêu đề 1', 'Tiêu đề 1 Tiêu đề 1 Tiêu đề 1 Tiêu đề 1 Tiêu đề 1 Tiêu đề 1', '', 1, 0, NULL, NULL),
(15, 4, 'Tiêu đề 5', 'Tiêu đề 1', 'Tiêu đề 1', 'Tiêu đề 1 Tiêu đề 1 Tiêu đề 1 Tiêu đề 1 Tiêu đề 1 Tiêu đề 1', '', 1, 0, NULL, NULL),
(16, 3, 'Tiêu đề 7', 'Tiêu đề 1', 'Tiêu đề 1', 'Tiêu đề 1 Tiêu đề 1 Tiêu đề 1 Tiêu đề 1 Tiêu đề 1 Tiêu đề 1', '', 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkodau` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`id`, `ten`, `tenkodau`, `created_at`, `updated_at`) VALUES
(1, 'Brand11', 'brand11', NULL, '2017-03-09 02:42:28'),
(2, 'Brand2', 'Brand2', NULL, NULL),
(3, 'Brand3', 'Brand3', NULL, NULL),
(4, 'Brand4', 'Brand4', NULL, NULL),
(5, 'Brand5', 'Brand5', NULL, NULL),
(7, 'Adidas', 'adidas', '2017-03-09 02:38:26', '2017-03-09 02:38:26'),
(8, 'Footer 5', 'footer-5', '2017-03-09 03:03:24', '2017-03-09 03:03:24'),
(9, 'Nike', 'nike', '2017-03-09 07:16:43', '2017-03-09 07:16:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkodau` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `ten`, `tenkodau`, `created_at`, `updated_at`) VALUES
(1, 'Category 1', 'category-1', NULL, '2017-03-09 01:48:06'),
(2, 'Category2', 'Category2', NULL, NULL),
(3, 'Category3', 'Category3', NULL, NULL),
(4, 'Category4', 'Category4', NULL, NULL),
(5, 'Category5', 'Category5', NULL, NULL),
(6, 'Category6', 'Category6', NULL, NULL),
(7, 'Category7', 'Category7', NULL, NULL),
(8, 'Category8', 'Category8', NULL, NULL),
(12, 'Category 13', 'category-13', '2017-03-09 01:54:26', '2017-03-09 01:54:26'),
(13, 'Category 14', 'category-14', '2017-03-09 01:54:34', '2017-03-09 01:54:34'),
(14, 'Giày thể thao', 'giay-the-thao', '2017-03-09 07:16:22', '2017-03-09 07:16:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment_blog`
--

CREATE TABLE `comment_blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `idUser` int(10) UNSIGNED DEFAULT NULL,
  `idBlog` int(10) UNSIGNED DEFAULT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `comment_blog`
--

INSERT INTO `comment_blog` (`id`, `idUser`, `idBlog`, `ten`, `email`, `noidung`, `created_at`, `updated_at`) VALUES
(1, 2, 12, 'Comment blog id 12', 'Comment blog id 12', 'Comment blog id 12', NULL, NULL),
(2, 3, 13, 'Comment blog id 13', 'Comment blog id 13', 'Comment blog id 13', NULL, NULL),
(5, 3, 14, 'Comment blog id 14', 'Comment blog id 14', 'Comment blog id 14', NULL, NULL),
(8, 4, 12, '424', '424', '242', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment_product`
--

CREATE TABLE `comment_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `idUser` int(10) UNSIGNED DEFAULT NULL,
  `idPro` int(10) UNSIGNED DEFAULT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Đang đổ dữ liệu cho bảng `comment_product`
--

INSERT INTO `comment_product` (`id`, `idUser`, `idPro`, `ten`, `email`, `noidung`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'comment product id2', 'comment product id2', 'comment product id2', NULL, NULL),
(2, 10, 4, 'comment product id4', 'comment product id2', 'comment product id2', NULL, NULL),
(3, 2, 2, 'comment product id2', 'comment product id2', 'comment product id2', NULL, NULL),
(4, 2, 1, 'comment product id1', 'comment product id1', 'comment product id1', NULL, NULL),
(5, 5, 3, 'comment product id3', 'comment product id3', 'comment product id3', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `foot_category`
--

CREATE TABLE `foot_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkodau` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `foot_category`
--

INSERT INTO `foot_category` (`id`, `ten`, `tenkodau`, `created_at`, `updated_at`) VALUES
(1, 'Footer category1', 'Footer category1', NULL, NULL),
(2, 'Footer category 2', 'footer-category-2', NULL, '2017-03-09 03:06:19'),
(3, 'Footer category3', 'Footer category3', NULL, NULL),
(5, 'Footer category 5', 'footer-category-5', NULL, '2017-03-09 03:05:52'),
(6, 'Footer 5', 'footer-5', '2017-03-09 03:03:55', '2017-03-09 03:03:55'),
(7, 'footer 6', 'footer-6', '2017-03-09 03:06:03', '2017-03-09 03:06:03'),
(8, 'Footer 4', 'footer-4', '2017-03-09 03:51:47', '2017-03-09 03:51:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(34, '2014_10_12_000000_create_users_table', 1),
(35, '2014_10_12_100000_create_password_resets_table', 1),
(36, '2017_03_08_101342_category', 1),
(37, '2017_03_08_101453_slide', 1),
(38, '2017_03_08_101502_brand', 1),
(39, '2017_03_08_101515_sub_category', 1),
(40, '2017_03_08_101520_product', 1),
(41, '2017_03_08_101552_blog', 1),
(42, '2017_03_08_101625_foot_category', 1),
(43, '2017_03_08_101809_sub_foot_category', 1),
(44, '2017_03_08_111657_comment_blog', 1),
(45, '2017_03_08_112018_advertising', 1),
(46, '2017_03_08_112934_comment_product', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `idSubCate` int(10) UNSIGNED NOT NULL,
  `idBrand` int(10) UNSIGNED NOT NULL,
  `ten` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkodau` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tomtat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` int(10) UNSIGNED NOT NULL,
  `soluong` int(10) UNSIGNED NOT NULL,
  `noibat` int(11) NOT NULL DEFAULT '0',
  `soluotxem` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `idSubCate`, `idBrand`, `ten`, `tenkodau`, `tomtat`, `noidung`, `hinh`, `gia`, `soluong`, `noibat`, `soluotxem`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 'Product1 Product1', 'product1-product1', 'Product1 Product1', '<p>Product1 Product1</p>', 'lU6K_girl2.jpg', 13, 13, 1, 0, NULL, '2017-03-09 08:27:24'),
(2, 2, 3, 'Product2 Product2', 'product2-product2', 'Product2 Product2', '<p>Product2 Product2</p>', 'PeUM_girl3.jpg', 11, 13, 0, 0, NULL, '2017-03-09 08:27:04'),
(3, 3, 3, 'Product3 Product3 Product3', 'product3-product3-product3', 'Product3 Product3', '<p>Product3Product3 Product3</p>', 'PHsQ_rina-ishihara.png', 13, 1, 0, 0, NULL, '2017-03-09 08:16:49'),
(4, 1, 5, 'Product4 Product4', 'product4-product4', 'Product4 Product4', '<p>Product4 Product4 Product4</p>', 'wXEF_942840782_902412033_574_574.jpg', 17, 13, 0, 0, NULL, '2017-03-09 08:16:26'),
(5, 2, 4, 'Sản phẩm product 5', 'san-pham-product-5', 'Sản phẩm product 5', '<p>Sản phẩm product 5 Sản phẩm product 5 Sản phẩm product 5</p>', 'Gbdr_maxresdefault.jpg', 69, 11, 0, 0, NULL, '2017-03-09 08:13:55'),
(6, 14, 9, 'Giày Nike chính hãng cao cấp', 'giay-nike-chinh-hang-cao-cap', 'Giày Nike chính hãng cao cấp', '<p>Giày Nike chính hãng cao cấp Giày Nike chính hãng cao cấp Giày Nike chính hãng cao cấp Giày Nike chính hãng cao cấp</p>', '5TVJ_942840782_902412033_574_574.jpg', 13, 1, 1, 0, '2017-03-09 07:22:22', '2017-03-09 07:22:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `ten`, `hinh`, `noidung`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Slide 1', 'LMCg_gallery4.jpg', '<p>Slide1</p>', 'Slide1', NULL, '2017-03-09 09:13:35'),
(2, 'Slide 2', 'bzpT_girl1.jpg', '<p>Slide2</p>', 'Slide2', NULL, '2017-03-09 09:13:24'),
(3, 'Slide 3', 'HoAS_girl3.jpg', '<p>Slide3</p>', 'Slide3', NULL, '2017-03-09 09:13:52'),
(4, 'Slide4', '', 'Slide4', 'Slide4', NULL, NULL),
(5, 'Slide55', 'cjE3_girl3.jpg', '<p>Slide5</p>', 'Slide5', NULL, '2017-03-09 09:34:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `idCate` int(10) UNSIGNED NOT NULL,
  `ten` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkodau` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sub_category`
--

INSERT INTO `sub_category` (`id`, `idCate`, `ten`, `tenkodau`, `created_at`, `updated_at`) VALUES
(1, 2, 'Subcategory 11', 'subcategory-11', NULL, '2017-03-09 02:24:52'),
(2, 4, 'Subcategory2', 'Subcategory2', NULL, NULL),
(3, 5, 'Subcategory3', 'Subcategory3', NULL, NULL),
(4, 3, 'Subcategory4', 'Subcategory4', NULL, NULL),
(6, 1, 'Subcategory6', 'Subcategory6', NULL, NULL),
(7, 1, 'Subcategory7', 'Subcategory7', NULL, NULL),
(8, 2, 'Subcategory8', 'Subcategory8', NULL, NULL),
(9, 5, 'Subcategory9', 'Subcategory9', NULL, NULL),
(11, 4, 'Sub Category 13', 'sub-category-13', '2017-03-09 02:13:02', '2017-03-09 02:13:02'),
(12, 5, 'Sub category test', 'sub-category-test', '2017-03-09 02:27:43', '2017-03-09 02:27:43'),
(13, 1, '11111111', '11111111', '2017-03-09 02:27:58', '2017-03-09 02:27:58'),
(14, 14, 'Giày Nike', 'giay-nike', '2017-03-09 07:16:35', '2017-03-09 07:16:35');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sub_foot_category`
--

CREATE TABLE `sub_foot_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `idFoot` int(10) UNSIGNED NOT NULL,
  `ten` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenkodau` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sub_foot_category`
--

INSERT INTO `sub_foot_category` (`id`, `idFoot`, `ten`, `tenkodau`, `created_at`, `updated_at`) VALUES
(9, 3, 'Sub Footer category1', 'Sub Footer category1', NULL, NULL),
(10, 1, 'Sub Footer category2', 'Sub Footer category2', NULL, NULL),
(11, 3, 'Sub Footer category3', 'Sub Footer category3', NULL, NULL),
(12, 3, 'Sub Footer category4', 'Sub Footer category4', NULL, NULL),
(13, 5, 'Sub Footer category5', 'Sub Footer category5', NULL, NULL),
(14, 2, 'Sub Footer category56', 'Sub Footer category56', NULL, NULL),
(15, 2, 'Sub Footer category58', 'Sub Footer category56', NULL, NULL),
(16, 3, 'Sub Footer category7', 'Sub Footer category7', NULL, NULL),
(17, 1, 'Sub Footer thuộc 1', 'sub-footer-thuoc-1', '2017-03-09 03:45:55', '2017-03-09 03:45:55'),
(18, 6, 'Sub Footer thuộc 5', 'sub-footer-thuoc-5', '2017-03-09 03:46:09', '2017-03-09 03:46:09'),
(20, 6, 'Sub footer 5-5-5', 'sub-footer-5-5-5', '2017-03-09 03:52:01', '2017-03-09 03:52:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quyen` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `quyen`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User1', 'User1@gmail.com', 'User1', 0, NULL, NULL, NULL),
(2, 'User2', 'User2@gmail.com', 'User2@gmail.com', 0, NULL, NULL, NULL),
(3, 'User3@gmail.com', 'User3@gmail.com', 'User3@gmail.com', 0, NULL, NULL, NULL),
(4, 'User4@gmail.com', 'User4@gmail.com', 'User4@gmail.com', 0, NULL, NULL, NULL),
(5, 'Use5@gmail.com', 'Use5@gmail.com', 'Use5@gmail.com', 0, NULL, NULL, NULL),
(6, 'Use6@gmail.com', 'Use6@gmail.com', 'Use6@gmail.com', 0, NULL, NULL, NULL),
(7, 'Use7@gmail.com', 'Use7@gmail.com', 'Use7@gmail.com', 0, NULL, NULL, NULL),
(9, 'Use9@gmail.com', 'Use9@gmail.com', 'Use9@gmail.com', 0, NULL, NULL, NULL),
(10, 'Use911@gmail.com', 'Use911@gmail.com', 'Use911@gmail.com', 1, NULL, NULL, NULL),
(11, 'Đỗ Đình Dự', 'kaideptrai1102@gmail.com', '$2y$10$k.k6WFpaAdZH0wHq8jGfHO3UJi1rQ/Hn7tsXdeeDwGkjGrdtqrV2i', 2, NULL, NULL, '2017-03-08 08:21:34');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `advertising`
--
ALTER TABLE `advertising`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_iduser_foreign` (`idUser`);

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment_blog`
--
ALTER TABLE `comment_blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_blog_iduser_foreign` (`idUser`),
  ADD KEY `comment_blog_idblog_foreign` (`idBlog`);

--
-- Chỉ mục cho bảng `comment_product`
--
ALTER TABLE `comment_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_product_iduser_foreign` (`idUser`),
  ADD KEY `comment_product_idpro_foreign` (`idPro`);

--
-- Chỉ mục cho bảng `foot_category`
--
ALTER TABLE `foot_category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_idsubcate_foreign` (`idSubCate`),
  ADD KEY `product_idbrand_foreign` (`idBrand`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_category_idcate_foreign` (`idCate`);

--
-- Chỉ mục cho bảng `sub_foot_category`
--
ALTER TABLE `sub_foot_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_foot_category_idfoot_foreign` (`idFoot`);

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
-- AUTO_INCREMENT cho bảng `advertising`
--
ALTER TABLE `advertising`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT cho bảng `comment_blog`
--
ALTER TABLE `comment_blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `comment_product`
--
ALTER TABLE `comment_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `foot_category`
--
ALTER TABLE `foot_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT cho bảng `sub_foot_category`
--
ALTER TABLE `sub_foot_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `comment_blog`
--
ALTER TABLE `comment_blog`
  ADD CONSTRAINT `comment_blog_idblog_foreign` FOREIGN KEY (`idBlog`) REFERENCES `blog` (`id`),
  ADD CONSTRAINT `comment_blog_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `comment_product`
--
ALTER TABLE `comment_product`
  ADD CONSTRAINT `comment_product_idpro_foreign` FOREIGN KEY (`idPro`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `comment_product_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_idbrand_foreign` FOREIGN KEY (`idBrand`) REFERENCES `brand` (`id`),
  ADD CONSTRAINT `product_idsubcate_foreign` FOREIGN KEY (`idSubCate`) REFERENCES `sub_category` (`id`);

--
-- Các ràng buộc cho bảng `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_idcate_foreign` FOREIGN KEY (`idCate`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `sub_foot_category`
--
ALTER TABLE `sub_foot_category`
  ADD CONSTRAINT `sub_foot_category_idfoot_foreign` FOREIGN KEY (`idFoot`) REFERENCES `foot_category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
