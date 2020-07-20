-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 20, 2020 at 10:48 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awesome_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

DROP TABLE IF EXISTS `assets`;
CREATE TABLE IF NOT EXISTS `assets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `sort` tinyint(4) DEFAULT NULL,
  `is_feature` tinyint(1) NOT NULL DEFAULT 0,
  `resource_path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `product_id`, `sort`, `is_feature`, `resource_path`) VALUES
(1, 8, 1, 0, 'assets/img/products/Clothes/img-1.jpg'),
(2, 10, 1, 0, 'assets/img/products/Clothes/img-2.jpg'),
(3, 15, 1, 0, 'assets/img/products/Clothes/img-3.jpg'),
(4, 17, 1, 0, 'assets/img/products/Clothes/img-4.jpg'),
(5, 18, 1, 0, 'assets/img/products/Clothes/img-5.jpg'),
(6, 19, 1, 0, 'assets/img/products/Clothes/img-6.jpg'),
(7, 20, 1, 0, 'assets/img/products/Clothes/img-7.jpg'),
(8, 21, 1, 0, 'assets/img/products/Clothes/img-8.jpg'),
(9, 1, 1, 0, 'assets/img/products/Electronic/samsung-galaxy-j7-pro.jpg'),
(10, 2, 1, 0, 'assets/img/products/Electronic/iPhone-11-Pro-Max.jpg'),
(11, 3, 1, 0, 'assets/img/products/Electronic/macbook-pro.jpg'),
(12, 16, 1, 0, 'assets/img/products/Electronic/Magic-mouse.jpeg'),
(13, 4, 1, 0, 'assets/img/products/Handbags/louis-vuitton-handbags.jpg'),
(14, 12, 1, 0, 'assets/img/products/Handbags/Bag-Woman-Series-Gold.jpg'),
(15, 13, 1, 0, 'assets/img/products/Handbags/Man-Handbag.jpg'),
(16, 7, 1, 0, 'assets/img/products/Wallet/Louis-Vuitton-N60046_PM2.jpg'),
(17, 11, 1, 0, 'assets/img/products/Wallet/Gucci-Wallet.jpg'),
(18, 14, 1, 0, 'assets/img/products/Wallet/Girl-Wallet.png');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `icon`, `parent_id`) VALUES
(1, 'Electronic', 'assets/img/icons/electronic.png', 1),
(2, 'Hand_bags', 'assets/img/icons/handbag.png', 2),
(3, 'Wallete', 'assets/img/icons/wallet.png', 3),
(4, 'Cloth', 'assets/img/icons/shirt.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

DROP TABLE IF EXISTS `features`;
CREATE TABLE IF NOT EXISTS `features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `description`, `image`) VALUES
(1, 'Shop your designer dresses', 'Ready to wear dereses tailored for you from online. Hurry up while stock tasks.', 'assets/img/slider-1.jpg'),
(2, 'Shop your designer dresses', 'Ready to wear dereses tailored for you from online. Hurry up while stock tasks.', 'assets/img/slider-2.jpg'),
(3, 'Shop your designer dresses', 'Ready to wear dereses tailored for you from online. Hurry up while stock tasks.', 'assets/img/slider-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `imgID` int(11) NOT NULL AUTO_INCREMENT,
  `imgUrl` varchar(200) NOT NULL,
  `id` int(11) DEFAULT NULL,
  PRIMARY KEY (`imgID`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `images_content`
--

DROP TABLE IF EXISTS `images_content`;
CREATE TABLE IF NOT EXISTS `images_content` (
  `img_content_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `image_url` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`img_content_id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=192 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT 0,
  `discount` tinyint(4) NOT NULL DEFAULT 0,
  `description` text DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `amount`, `discount`, `description`, `category_id`) VALUES
(1, 'Samsung Galaxy J7 Pro', '15', 10, 20, 'New', 1),
(2, 'Iphone 11 Max Pro', '1000', 10, 20, 'New', 1),
(3, 'Mac Book Pro', '1500', 10, 20, 'New', 1),
(4, 'Louis Vuitton Handbag', '50', 20, 20, 'New', 2),
(7, 'Louis Vuitton N60046 PM2', '50', 10, 20, 'New', 3),
(8, 'Dress and Jacket', '15', 10, 20, 'New', 4),
(10, 'Dress', '15', 10, 20, 'New', 4),
(11, 'Gucci Wallet', '50', 10, 20, 'New', 3),
(12, 'Bag Woman Series Gold', '100', 5, 20, 'New', 2),
(13, 'Man Handbag', '100', 20, 20, 'New', 2),
(14, 'Wallet Girl Model 1048', '100', 20, 20, 'New', 3),
(15, 'Dress and Shirt', '15', 20, 20, 'New', 4),
(16, 'Magic mouse', '160', 50, 20, 'New', 1),
(17, 'Dress', '15', 20, 20, 'New', 4),
(18, 'Dress', '15', 20, 20, 'New', 4),
(19, 'Dress', '15', 20, 20, 'New', 4),
(20, 'Dress', '15', 20, 20, 'New', 4),
(21, 'Dress', '15', 20, 20, 'New', 4);

-- --------------------------------------------------------

--
-- Table structure for table `product_tag`
--

DROP TABLE IF EXISTS `product_tag`;
CREATE TABLE IF NOT EXISTS `product_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `written_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `content`, `written_at`, `product_id`) VALUES
(76, 'Kan ma\r\n', '2020-07-03 06:18:36', 1),
(77, 'Kan ma\r\n', '2020-07-03 06:18:36', 1),
(78, 'Kan ma\r\n', '2020-07-03 06:18:36', 1),
(79, 'Kan ma\r\n', '2020-07-03 06:18:36', 1),
(80, 'Mnek srey ng sart\r\n', '2020-07-03 07:12:51', 8),
(81, '', '2020-07-20 05:54:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `active`) VALUES
(5, 'Hi', 'Hi@hello.com', '202cb962ac59075b964b07152d234b70', 1),
(6, 'Hi', 'pkokthay@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(7, 'Kok Cham', 'sunnyboutique1701@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(8, 'Kok Cham', 'sunnyboutique1701@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1);

-- --------------------------------------------------------

--
-- Table structure for table `visitor_histories`
--

DROP TABLE IF EXISTS `visitor_histories`;
CREATE TABLE IF NOT EXISTS `visitor_histories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `visiting_page` varchar(50) DEFAULT NULL,
  `impress` varchar(50) DEFAULT NULL,
  `visitor_device` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`id`) REFERENCES `post` (`id`);

--
-- Constraints for table `images_content`
--
ALTER TABLE `images_content`
  ADD CONSTRAINT `images_content_ibfk_1` FOREIGN KEY (`id`) REFERENCES `post` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
