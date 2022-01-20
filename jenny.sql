-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 06:07 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jenny`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `banner_img` varchar(255) DEFAULT NULL,
  `mobile_banner` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `banner_img`, `mobile_banner`, `status`, `created_at`, `updated_at`) VALUES
(19, 'zonayah', 'logo_1641881352.png', NULL, 'Active', '2022-01-11 01:09:12', '2022-01-11 04:07:46'),
(21, 'Basit', 'cJHtyF_1641892144.jpg', NULL, 'Active', '2022-01-11 04:08:45', '2022-01-11 04:24:42'),
(23, 'hannan', 'Clothing-Luna-Catum-T-Shirt-Black-01-626x626_1642489575.jpg', NULL, 'Active', '2022-01-18 02:06:15', '2022-01-18 02:06:15'),
(24, 'qadir', 'logo_1642490432.jpg', NULL, 'Active', '2022-01-18 02:20:13', '2022-01-18 02:20:32');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'cat 1', NULL, 'Active', '2022-01-06 04:12:28', '2022-01-06 04:12:28'),
(2, 'cat 2', NULL, 'Active', '2022-01-06 04:12:28', '2022-01-06 04:12:28'),
(3, 'cat 3', NULL, 'Active', '2022-01-06 04:12:31', '2022-01-06 04:12:31'),
(4, 'cat 001', 1, 'Active', '2022-01-06 04:12:31', '2022-01-06 04:12:31'),
(5, 'cat 002', 2, 'Active', '2022-01-06 04:12:31', '2022-01-06 04:12:31'),
(6, 'cat 003', 3, 'Active', '2022-01-06 04:12:31', '2022-01-06 04:12:31'),
(7, 'cat 004', 1, 'Active', '2022-01-06 04:12:31', '2022-01-06 04:12:31'),
(8, 'cat 005', 2, 'Active', '2022-01-06 04:12:31', '2022-01-06 04:12:31'),
(9, 'cat 006', 3, 'Active', '2022-01-06 04:12:31', '2022-01-06 04:12:31');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `hover_image` varchar(255) DEFAULT NULL,
  `size_chart` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `discounted_price` float DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `is_featured` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `title`, `description`, `featured_image`, `hover_image`, `size_chart`, `price`, `discounted_price`, `quantity`, `is_featured`, `status`, `created_at`, `updated_at`) VALUES
(1, '424', 'rtytry', '<p>trrrrrrytry</p>', NULL, NULL, NULL, 43, 354, NULL, NULL, 'Active', '2022-01-05 20:20:13', '2022-01-05 20:20:13'),
(2, '424', 'fgdd', '<p>hii</p>', '1b_1633786211_1641432502.jpg', '1b_1638443837_1641432502.jpg', '4_1637759884_1641432502.jpg', 45, 54, NULL, NULL, 'Active', '2022-01-05 20:28:22', '2022-01-05 20:28:22'),
(3, '424', '5646', '<p>yrtyr</p>', '1b_1633786211_1641436419.jpg', NULL, NULL, 456, 4564, NULL, NULL, 'Active', '2022-01-05 21:33:39', '2022-01-05 21:33:39'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 08:32:31', '2022-01-10 08:32:31'),
(5, NULL, 'adad', NULL, NULL, NULL, NULL, 2342, 423, NULL, NULL, 'Active', '2022-01-10 08:35:50', '2022-01-10 08:35:50'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 08:42:53', '2022-01-10 08:42:53'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 08:43:02', '2022-01-10 08:43:02'),
(8, 'Qadir-0001763', 'erwr', NULL, NULL, NULL, NULL, 2332230, 2342, NULL, NULL, 'Active', '2022-01-10 08:48:47', '2022-01-10 08:48:47'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 08:49:16', '2022-01-10 08:49:16'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 08:49:47', '2022-01-10 08:49:47'),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 09:14:58', '2022-01-10 09:14:58'),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 09:15:14', '2022-01-10 09:15:14'),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 09:15:43', '2022-01-10 09:15:43'),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 09:16:25', '2022-01-10 09:16:25'),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 09:42:52', '2022-01-10 09:42:52'),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 09:43:23', '2022-01-10 09:43:23'),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 09:45:01', '2022-01-10 09:45:01'),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 09:45:19', '2022-01-10 09:45:19'),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 09:46:55', '2022-01-10 09:46:55'),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 09:47:09', '2022-01-10 09:47:09'),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 09:48:50', '2022-01-10 09:48:50'),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 09:55:04', '2022-01-10 09:55:04'),
(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 09:55:39', '2022-01-10 09:55:39'),
(24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 09:57:45', '2022-01-10 09:57:45'),
(25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 09:57:51', '2022-01-10 09:57:51'),
(26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 09:58:47', '2022-01-10 09:58:47'),
(27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 09:59:35', '2022-01-10 09:59:35'),
(28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 09:59:50', '2022-01-10 09:59:50'),
(29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 10:00:45', '2022-01-10 10:00:45'),
(30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 10:03:55', '2022-01-10 10:03:55'),
(31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 10:03:55', '2022-01-10 10:03:55'),
(32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 10:04:41', '2022-01-10 10:04:41'),
(33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 10:04:43', '2022-01-10 10:04:43'),
(34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 10:04:46', '2022-01-10 10:04:46'),
(35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Active', '2022-01-10 10:05:08', '2022-01-10 10:05:08');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `category_id`, `parent_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 4, 25, '2022-01-10 09:57:51', '2022-01-10 09:57:51'),
(2, NULL, 7, 25, '2022-01-10 09:57:51', '2022-01-10 09:57:51'),
(3, NULL, 5, 25, '2022-01-10 09:57:51', '2022-01-10 09:57:51'),
(4, NULL, 8, 25, '2022-01-10 09:57:51', '2022-01-10 09:57:51'),
(5, 4, NULL, 26, '2022-01-10 09:58:47', '2022-01-10 09:58:47'),
(6, 7, NULL, 26, '2022-01-10 09:58:47', '2022-01-10 09:58:47'),
(7, 6, NULL, 26, '2022-01-10 09:58:47', '2022-01-10 09:58:47'),
(8, 7, NULL, 29, '2022-01-10 10:00:45', '2022-01-10 10:00:45'),
(9, 6, NULL, 29, '2022-01-10 10:00:45', '2022-01-10 10:00:45');

-- --------------------------------------------------------

--
-- Table structure for table `product_galleries`
--

CREATE TABLE `product_galleries` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_galleries`
--

INSERT INTO `product_galleries` (`id`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(1, '1b_1633786211_1641436419.jpg', 3, '2022-01-05 21:33:39', '2022-01-05 21:33:39'),
(2, '1b_1635167015_1641436419.jpg', 3, '2022-01-05 21:33:39', '2022-01-05 21:33:39'),
(3, '1b_1638443837_1641436419.jpg', 3, '2022-01-05 21:33:39', '2022-01-05 21:33:39');

-- --------------------------------------------------------

--
-- Table structure for table `product_variations`
--

CREATE TABLE `product_variations` (
  `id` int(11) NOT NULL,
  `variation` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `variation_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_variations`
--

INSERT INTO `product_variations` (`id`, `variation`, `quantity`, `sku`, `product_id`, `variation_id`, `created_at`, `updated_at`) VALUES
(1, 'sm', 243, '_sm_', 7, NULL, '2022-01-10 08:43:02', '2022-01-10 08:43:02'),
(2, 'md', 22, '_md_', 7, NULL, '2022-01-10 08:43:02', '2022-01-10 08:43:02'),
(3, 'sm', 5, '_sm_', 10, 1, '2022-01-10 08:49:47', '2022-01-10 08:49:47'),
(4, 'lg', 555, '_lg_', 10, 3, '2022-01-10 08:49:47', '2022-01-10 08:49:47'),
(5, 'sm', NULL, '_sm_', 25, 1, '2022-01-10 09:57:51', '2022-01-10 09:57:51');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `subscriber_email` varchar(256) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `subscriber_email`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', '2022-01-18 06:55:01', '2022-01-18 06:55:01'),
(2, 'hannan@gmail.com', '2022-01-18 06:55:42', '2022-01-18 06:55:42'),
(3, 'admin@gmail.com', '2022-01-18 07:28:36', '2022-01-18 07:28:36'),
(4, 'hannanazam@gmail.com', '2022-01-18 07:48:46', '2022-01-18 07:48:46'),
(5, 'admin@admin.com', '2022-01-18 08:36:09', '2022-01-18 08:36:09');

-- --------------------------------------------------------

--
-- Table structure for table `variations`
--

CREATE TABLE `variations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `variations`
--

INSERT INTO `variations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'sm', '2022-01-06 04:02:23', '2022-01-06 04:02:23'),
(2, 'md', '2022-01-06 04:02:23', '2022-01-06 04:02:23'),
(3, 'lg', '2022-01-06 04:02:26', '2022-01-06 04:02:26'),
(4, 'xl', '2022-01-06 04:02:26', '2022-01-06 04:02:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variations`
--
ALTER TABLE `product_variations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `variations`
--
ALTER TABLE `variations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_variations`
--
ALTER TABLE `product_variations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `variations`
--
ALTER TABLE `variations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
