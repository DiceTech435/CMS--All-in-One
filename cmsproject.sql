-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2025 at 11:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmsproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(1000) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `email`, `password`, `role`) VALUES
(2, 'admin', 'admin@g.com', '111111', 'Manager'),
(4, 'James', 'admin@e.com', '111111', 'Admin'),
(5, 'Dice', 'viv@g.com', '12345678', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `product_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `qty`, `product_id`) VALUES
(25, 35, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(59, 'Gadgets and appliances'),
(61, 'Tech and IT'),
(62, 'Male accessories'),
(63, 'Female Accessories'),
(64, 'Education'),
(70, 'Travel');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `post_id` bigint(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `message`, `status`, `post_id`, `timestamp`) VALUES
(6, 27, 'comments oooh wow', 1, 6, '2025-03-25 02:20:55'),
(11, 28, 'Looking good bro', 1, 12, '2025-03-27 22:03:55'),
(13, 28, 'You look good bro', 1, 13, '2025-03-28 00:40:18');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT 0,
  `category_id` varchar(1000) NOT NULL,
  `thumbnail` varchar(1000) DEFAULT NULL,
  `timestamp2` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `timestamp`, `status`, `category_id`, `thumbnail`, `timestamp2`) VALUES
(11, 'We dem bois', 'Meet here actively', '2025-03-27 20:34:24', 1, '62', 'FB_IMG_16421913608721976-4521340.jpg', ''),
(12, 'Chilling', 'Its your favpurite coder, dice>', '2025-03-27 20:37:07', 1, '70', 'IMG-20240918-WA0019-1931823725.jpg', ''),
(13, 'My passport', 'Yes whats popping over here', '2025-03-27 23:57:00', 1, '64', 'IMG-20241127-WA0097 - Copy (4)-1956939489.jpg', ''),
(14, 'Web development ', 'Web development is everything guys!!!!', '2025-03-27 23:59:04', 1, '61', 'IMG-20250326-WA0030-289599351.jpg', ''),
(15, 'Trouble', 'Yanga dey sleep, triuble go wake am', '2025-03-28 00:03:44', 1, '63', 'IMG-20240206-WA0008-1700077537.jpg', ''),
(20, 'Sleep', 'Sleep while you can, it is very important', '2025-05-14 13:02:49', 1, '61', 'pexels-fauxels-3183135-593879741.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `title` varchar(1000) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `price` varchar(1000) DEFAULT NULL,
  `dateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `title`, `image`, `desc`, `price`, `dateTime`) VALUES
(1, 'Hand Bags', NULL, 'Affordable handbags', '11000', '2025-05-14 22:12:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(1000) DEFAULT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `password` varchar(1000) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `status`, `password`, `timestamp`, `role`) VALUES
(1, 'Amevye Matthew', 'Vivian Viv', 'viv@g.com', 1, '', '0000-00-00 00:00:00', 'admin'),
(10, 'Happiness', 'Grace', 'grace@g.com', 1, '111111', '2025-03-18 22:53:56', 'user'),
(11, 'Happiness', 'Grace', 'grace@g.com', 1, '111111', '2025-03-18 22:54:38', 'admin'),
(12, 'Philip Gabriel', 'Phil', 'phil@g.com', 1, '222222', '2025-03-18 22:57:44', 'user'),
(13, 'Ebube', 'Emeka', 'emaks@f.com', 1, '0', '2025-03-18 23:12:33', 'user'),
(14, 'Chukwudi', 'Timothy', 'tim1@h.com', 1, '12345678', '2025-03-18 23:13:18', 'user'),
(26, 'John okoro', 'jboystar', 'aokoro807@gmail.com', 0, '$2y$10$qhK/Tmb4uU0KAHtrcKaBgu4mSNN5P4cJfi75SGaXnMa9WSWn5C4aa', '2025-03-21 10:32:24', 'user'),
(27, 'Happiness', 'Dice', 'vivian@g.com', 0, '$2y$10$LXxgXix6MhX7HEYK7dsNPua2aBMogXz.0rClnMNh546Va1xWN24g2', '2025-03-24 20:15:02', 'user'),
(28, 'James', 'JamesDice', 'hey@g.com', 0, '$2y$10$b7EivbekX9bqr4.gxLdcWOLr2nFI6Mo5OZBWSBApZQncMfS1RNajK', '2025-03-25 13:23:02', 'admin'),
(30, 'Favour', 'Fabaulous Child', 'fabgirl@yahoo.com', 1, '123456', '2025-03-27 19:48:27', 'manager'),
(31, 'Abigail Samuel', 'Abiboi', 'abi@a.net', 1, '555555', '2025-03-27 19:51:11', 'user'),
(32, 'Winifred', 'Wini', 'win123@ret.now', 1, '667676', '2025-03-27 19:52:45', 'admin'),
(33, 'AbleMan', 'Gabriella', 'gab@ten.win', 1, '0', '2025-03-27 20:12:49', '0'),
(34, 'David', 'ChickenDoctor', 'chicksman@gmail.com', 1, '44433221', '2025-03-27 20:15:33', '0'),
(35, 'Amevye', 'Matthew', 'amevyematthew@gmail.com', 0, '$2y$10$hJtsmRWreph3zQDD0Di1F.UYUNxVey6P1xcaklN40vBmvA3h.0G2W', '2025-04-01 16:25:35', ''),
(36, 'ertgrdqe', 'Gabson', 'admin@admin.com', 0, '$2y$10$CU3dZEq792jj61J97XukFeExJ/A4MRU0QMaG12KwUr8HfRowgTTXG', '2025-05-12 15:21:32', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
