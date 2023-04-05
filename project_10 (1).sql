-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 05, 2023 at 09:14 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_10`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int NOT NULL,
  `title` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `details` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `picture` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `is_deleted` tinyint DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `details`, `picture`, `is_active`, `created_at`, `modified_at`, `is_deleted`) VALUES
(1, 'This is new Banner', 'This is new Banner details', 'IMG_1677149082_iphone.jpg', 1, '2023-02-25 16:34:50', '2023-02-25 16:34:50', 0),
(2, 'New Banner', 'A new banner', 'IMG_1677148336_Duplex.jpg', 0, '2023-02-25 16:34:50', '2023-02-25 16:34:50', 0),
(3, 'New Banner 2', 'A new banner again', 'IMG_1677148528_bike.jpg', 0, '2023-02-25 16:34:50', '2023-02-25 16:34:50', 1),
(4, 'A new banner', 'A new banner details', 'IMG_1677321760_bike.jpg', 0, '2023-02-25 10:42:40', '2023-02-25 16:42:40', 0),
(5, 'Banner', 'Banner details', 'IMG_1677322120_micro.jpg', 0, '2023-02-25 16:48:05', '2023-02-25 16:48:40', 0),
(6, 'egdgd', 'fdhfdhf', 'IMG_1679134695_pexels-photo.jpg', 1, '2023-03-18 10:18:15', '2023-03-18 16:18:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `title` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `details` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `picture` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `is_active` tinyint NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `is_deleted` tinyint DEFAULT '0',
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `details`, `picture`, `is_active`, `created_at`, `modified_at`, `is_deleted`, `price`) VALUES
(11, 'Old product', 'An old product', 'IMG_1679214425_pexels-photo.jpg', 1, '2023-02-25 16:18:51', '2023-03-19 08:27:05', 0, NULL),
(13, 'Product', 'A product', 'IMG_1677142097_micro.jpg', 0, '2023-02-25 16:18:51', '2023-02-25 16:28:10', 1, NULL),
(14, 'New product', 'A new product', 'IMG_1677142109_R.jpg', 0, '2023-02-25 16:18:51', '2023-02-25 16:28:10', 0, NULL),
(15, 'One more product', 'An image of a product', 'IMG_1677142118_bike.jpg', 0, '2023-02-25 16:18:51', '2023-02-25 16:28:10', 1, NULL),
(16, 'latest', 'Picture of a bik', 'IMG_1679217406_bike1.jpeg', 1, '2023-02-25 16:18:51', '2023-03-19 09:16:46', 0, 500),
(17, 'House', 'A picture of house', 'IMG_1677142139_Duplex.jpg', 0, '2023-02-25 16:18:51', '2023-02-25 16:28:10', 0, NULL),
(18, 'New product again', 'An image of a product again', 'IMG_1677142152_iphone.jpg', 0, '2023-02-25 16:18:51', '2023-02-25 16:28:10', 1, NULL),
(19, 'Another product', 'Another details', 'IMG_1677142170_R.jpg', 0, '2023-02-25 16:18:51', '2023-02-25 16:28:10', 0, NULL),
(20, 'Audi', 'Audi Car', 'IMG_1677141326_Audi.jpg', 0, '2023-02-25 16:18:51', '2023-02-25 16:28:10', 0, NULL),
(21, 'New year product', 'New year product details', 'IMG_1677144581_Audi.jpg', 1, '2023-02-25 16:18:51', '2023-02-25 16:28:10', 0, NULL),
(22, 'New year product again', 'A new product', 'IMG_1677320713_Duplex.jpg', 0, '2023-02-25 16:25:13', '2023-02-25 16:28:10', 1, NULL),
(23, 'New Banner Product', 'New Banner Product details', 'IMG_1677321195_iphone.jpg', 1, '2023-02-25 16:33:15', '2023-02-25 10:33:45', 1, NULL),
(24, 'Car', 'An Audi car', 'IMG_1677404800_Audi.jpg', 0, '2023-02-26 15:46:01', '2023-02-26 15:47:36', 0, NULL),
(25, 'new product from oop', 'new product from oopnew product from oop', 'IMG_1678788551_profile-picture.jpeg', 1, '2023-03-14 10:09:11', '2023-03-14 16:09:11', 0, NULL),
(26, 'new check oop', 'new check oop new check oop', NULL, 1, '2023-03-14 10:19:46', '2023-03-14 16:19:46', 0, NULL),
(27, 'new', 'new', 'IMG_1678789243_images.jpg', 1, '2023-03-14 10:20:43', '2023-03-14 16:20:43', 0, NULL),
(28, 'new test', 'yeah new test', 'IMG_1678789310_photo-1566275529824-cca6d008f3da.jpg', 1, '2023-03-14 10:21:50', '2023-03-14 10:57:08', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sponsers`
--

CREATE TABLE `sponsers` (
  `id` int NOT NULL,
  `title` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `details` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `picture` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `is_active` tinyint NOT NULL DEFAULT '0',
  `is_deleted` tinyint DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `sponsers`
--

INSERT INTO `sponsers` (`id`, `title`, `details`, `picture`, `is_active`, `is_deleted`, `created_at`, `modified_at`) VALUES
(1, 'First Sponser', 'First Sponser Details', 'IMG_1677408316_Mr_Bin.jpg', 0, 1, '2023-02-26 16:45:16', '2023-02-26 16:47:18'),
(2, 'New Sponser', 'New sponser details', 'IMG_1677408719_Duplex.jpg', 1, 0, '2023-02-26 16:47:12', '2023-02-26 16:51:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `user_name` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `password` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `full_name` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `email` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `phone_number` varchar(256) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `full_name`, `email`, `phone_number`) VALUES
(1, '1231', '', '123Chowdhury', '123132123rav@gmail.com', '123123123213'),
(2, 'Jisan', '', 'JIsan', 'jisan@gmail.com', '54564564564'),
(3, 'Minhaj', '', 'Minhaj', 'Minhaj@GMAIL.COM', '564564564'),
(4, 'Tanvir', '123456', 'sAJIB', 'sAJIB@GMAIL.COM', '5454'),
(12, 'Shourav', '123456', 'Shourav Chowdhury', NULL, '664554'),
(13, 'Jisan', '123455', 'JIsan', 'jisan@gmail.com', '54454'),
(14, 'sAJIB', '132512', 'sAJIB', 'sAJIB@GMAIL.COM', '08564564564'),
(15, 'ema', '12345678', 'Emathry Chowdhury', 'ema@gmail.com', '54526'),
(16, 'pushpita', '123456', 'Pushpita Biswas', 'pushpita@gmail.com', '12345678910'),
(18, 'jishan', '123456', 'Nc Jishan', 'jisan@gmail.com', '12345678'),
(19, 'sourav', '123456', 'Sourav Chy', 'sourav@gmail.com', '211313644'),
(20, 'ema123', '123456', 'Ema 123456', 'jisan@gmail.com', '1235467'),
(21, 'ema', '123456', 'Emathry Chowdhury', 'emathry707@gmail.com', '0123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsers`
--
ALTER TABLE `sponsers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sponsers`
--
ALTER TABLE `sponsers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
