-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2023 at 05:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `ad_name` varchar(255) NOT NULL,
  `ad_email` varchar(255) NOT NULL,
  `ad_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `ad_name`, `ad_email`, `ad_password`) VALUES
(1, 'Harsh Shaw', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ctg_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ctg_id`, `product_name`, `product_id`, `created_at`) VALUES
(1, 'Electronis', 0, '2023-09-28 06:56:51'),
(2, 'Cloths', 0, '2023-09-28 07:08:12'),
(3, 'Smart Phone', 1, '2023-09-28 07:08:23'),
(4, 'T-shirt', 2, '2023-09-28 09:03:25'),
(6, 'T.V.', 1, '2023-09-28 15:00:31'),
(7, 'Speaker', 1, '2023-09-28 15:00:43'),
(9, 'Washing Machine', 1, '2023-09-28 15:01:28'),
(10, 'Microwave Oven', 1, '2023-09-28 15:01:44'),
(11, 'Refrigerator', 1, '2023-09-28 15:02:13');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `t_product` varchar(255) NOT NULL,
  `t_price` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `uid`, `u_name`, `mobile`, `landmark`, `town`, `address`, `t_product`, `t_price`, `status`, `created_at`) VALUES
(5, 3, 'dsnvfsdanvc', '01234567890', 'Viveka Nand Appartment', 'savnlkdsanv', 'Office', 'Samsung Galaxy J7(1), BPL Washing Machine(2), Philips Speakers(2)', '1058', '', '2023-09-30 03:21:50'),
(6, 5, 'dsnvfsdanvc', '01234567890', 'Viveka Nand Appartment', 'savnlkdsanv', 'Office', 'Samsung Galaxy J7(2), OPPO A37f(1)', '630', '', '2023-10-14 08:18:26');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `pr_name` varchar(255) NOT NULL,
  `ch_name` varchar(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `pp` int(255) NOT NULL,
  `p_disc` int(255) NOT NULL,
  `ps` int(255) NOT NULL,
  `p_col` varchar(255) NOT NULL,
  `p_qty` int(255) NOT NULL,
  `p_desc` varchar(255) NOT NULL,
  `p_images` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `pr_name`, `ch_name`, `prod_name`, `pp`, `p_disc`, `ps`, `p_col`, `p_qty`, `p_desc`, `p_images`, `created_at`) VALUES
(20, 'Electronis', 'Smart Phone', 'Samsung Galaxy J7', 280, 10, 200, 'Golden', 5, 'Well', '1696001980m1.jpg', '2023-09-29 15:39:40'),
(21, 'Electronis', 'Smart Phone', 'OPPO A37f', 250, 20, 230, 'White', 6, 'Well', '1696002122m2.jpg', '2023-09-29 15:42:02'),
(22, 'Electronis', 'Smart Phone', 'Apple iPhone X', 300, 10, 280, 'Black', 5, 'Well', '1696002154m3.jpg', '2023-09-29 15:42:34'),
(23, 'Electronis', 'T.V.', 'Sony 80 cm (32 inches)', 340, 10, 320, 'Black', 5, 'Well', '1696002184m4.jpg', '2023-09-29 15:43:04'),
(24, 'Electronis', 'Speaker', 'Artis Speaker', 399, 10, 349, 'Black', 5, 'Well', '1696002218m5.jpg', '2023-09-29 15:43:38'),
(25, 'Electronis', 'Speaker', 'Philips Speakers', 300, 0, 249, 'Black', 5, 'Well', '1696002249m6.jpg', '2023-09-29 15:44:09'),
(26, 'Electronis', 'Refrigerator', 'Whirlpool 245', 280, 0, 230, 'Brown', 5, 'Well', '1696002283m7.jpg', '2023-09-29 15:44:43'),
(27, 'Electronis', 'Washing Machine', 'BPL Washing Machine', 200, 0, 180, 'White', 2, 'Well', '1696002308m8.jpg', '2023-09-29 15:45:08'),
(28, 'Electronis', 'Microwave Oven', 'Microwave Oven', 299, 0, 199, 'Black', 5, 'Well\r\n', '1696002342m9.jpg', '2023-09-29 15:45:42');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `c_id` int(11) NOT NULL,
  `uid` int(255) NOT NULL,
  `pid` int(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_qty` int(255) NOT NULL,
  `p_price` int(255) NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `creat_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_cart`
--

INSERT INTO `user_cart` (`c_id`, `uid`, `pid`, `p_name`, `p_qty`, `p_price`, `p_img`, `creat_at`) VALUES
(29, 3, 20, 'Samsung Galaxy J7', 2, 200, '1696001980m1.jpg', '2023-10-09 17:56:04');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`user_id`, `full_name`, `email`, `mobile`, `image`, `password`, `created_at`) VALUES
(3, 'Harsh Shaw', 'harsh@gmail.com', '01234567890', '1695983210ig_04.jpg', '$2y$10$LrE1eiNGxvS7IAFTgIwBDe.ssZjJ609tK46tZ9O5bzCEfAST/9tq.', '2023-09-29 10:26:50'),
(4, 'Akash Roy', 'A@gmail.com', '123456789', '1695993411product_02.jpg', '$2y$10$mWPJv8rryI3kgY5.KqNvkunre4EK532kbrFQQMxD8O1HpXR9MTQUu', '2023-09-29 13:16:51'),
(5, 'sibarjon', 'c@gmail.com', '8978', '1697271433carousel-2.jpg', '$2y$10$n2w8GfQICu2ZxKnRY/F3gemLmWRGBs17lRoGXTJhlOISIKELMPm/a', '2023-10-14 08:17:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ctg_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ctg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
