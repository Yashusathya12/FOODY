-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 03, 2023 at 08:54 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`id`, `name`, `price`, `image`, `description`) VALUES
(1, 'chicken nugget', 190, 'images/chicken-nugget.jpg', 'main ingredients are chicken ,with fulfilled flavo'),
(2, 'chicken noodle', 190, 'images/chicken-noodles.jpg', 'main ingredients are chicken ,with fulfilled flavo'),
(3, 'chicken biryani', 250, 'images/chicken-biryani.jpg', 'main ingredients are chicken ,with fulfilled flavo'),
(4, 'veg fried rice', 250, 'images/veg-friedrice.jpg', 'main flovers are the pure veggis ,beans,carrots,an'),
(5, 'indian thali', 300, 'images/thali.jpeg', 'main flovers are the pure veggis ,beans,carrots,an'),
(6, 'north indian thali', 300, 'images/thali.jpeg', 'north indian thali main flovers are the pure veggi'),
(7, 'veg burger', 180, 'images/veg-burger.jpeg', 'main flovers are the pure veggis ,beans,carrots,an'),
(9, 'pizza', 180, 'images/pizza.jpg', 'a regular pizza with full veggi toppings'),
(10, 'peach juice', 150, 'images/peach.jpeg', 'fresh peach juice with chilling ice'),
(11, 'colored lime juice', 190, 'images/color-lime.jpg', 'a great drink to calm your mind here goes the lime'),
(12, 'french fries', 150, 'images/fries.jpg', 'the regular company to enjoy your meal made using ');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(200) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_phone` bigint(10) NOT NULL,
  `dishes_name` varchar(30) NOT NULL,
  `additional` varchar(30) NOT NULL,
  `quantity` int(20) NOT NULL,
  `datetime` datetime NOT NULL,
  `user_address` varchar(200) NOT NULL,
  `User_message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_name`, `user_phone`, `dishes_name`, `additional`, `quantity`, `datetime`, `user_address`, `User_message`) VALUES
(1, 'Yash S', 9900887768, 'chicken nugget', '', 1, '2023-04-27 13:18:01', 'no18 2cross 3rd main bda complex nagarbhavi\r\nbg-560079', 'want to enjoy your food fast'),
(2, 'dasha S', 9999887768, 'chicken noodles', '', 2, '2023-04-26 13:18:01', 'no18 2cross 3rd main bda complex nagarbhavi\r\nbg-560079', 'want to enjoy your food fast'),
(4, 'yash', 9980224822, 'chicken biryani', 'spicy chicken nugget', 1, '2023-04-03 01:25:00', 'need fast delivery', 'cant waite to enjoy'),
(5, 'fghgh', 9980224822, 'sdgfdf', 'adgafdg', 3, '2023-04-13 02:38:00', 'need fast delivery', 'dfffh'),
(6, 'shyla', 9611139828, 'chicken biryani', 'spicy chicken nugget', 5, '2023-04-11 01:38:00', '#18 annaporna niyala bangalore-79', 'wanna try these dishes'),
(7, 'shyla', 9611139828, 'sdgfdf', 'spicy chicken nugget', 1, '2023-04-10 01:40:00', '#18 annaporna niyala bangalore-79', 'asdsd'),
(8, 'shyla', 9611139828, 'sdgfdf', 'spicy chicken nugget', 1, '2023-04-10 01:40:00', '#18 annaporna niyala bangalore-79', 'asdsd'),
(9, 'fghgh', 9980224822, 'chicken biryani', 'spicy chicken nugget', 3, '2023-04-05 21:01:00', 'need fast delivery', 'cxhd'),
(10, 'fghgh', 9980224822, 'chicken biryani', 'spicy chicken nugget', 3, '2023-04-05 21:01:00', 'need fast delivery', 'cxhd'),
(11, 'fghgh', 9980224822, 'chicken biryani', 'spicy chicken nugget', 3, '2023-04-05 21:01:00', 'need fast delivery', 'cxhd'),
(12, 'shyla', 9611139828, 'xhddc', 'spicy chicken nugget', 5, '2023-04-11 21:14:00', '#18 annaporna niyala bangalore-79', 'szg'),
(13, 'shyla', 9611139828, 'xhddc', 'spicy chicken nugget', 5, '2023-04-11 21:14:00', '#18 annaporna niyala bangalore-79', 'szg'),
(14, 'shyla', 9611139828, 'xhddc', 'spicy chicken nugget', 5, '2023-04-11 21:14:00', '#18 annaporna niyala bangalore-79', 'szg'),
(15, 'shyla', 9611139828, 'xhddc', 'spicy chicken nugget', 5, '2023-04-11 21:14:00', '#18 annaporna niyala bangalore-79', 'szg'),
(16, 'shyla', 9611139828, 'xhddc', 'spicy chicken nugget', 5, '2023-04-11 21:14:00', '#18 annaporna niyala bangalore-79', 'szg'),
(17, 'shyla', 9611139828, 'xhddc', 'spicy chicken nugget', 5, '2023-04-11 21:14:00', '#18 annaporna niyala bangalore-79', 'szg'),
(18, 'shyla', 9611139828, 'xhddc', 'spicy chicken nugget', 5, '2023-04-11 21:14:00', '#18 annaporna niyala bangalore-79', 'szg'),
(19, 'shyla', 9611139828, 'xhddc', 'spicy chicken nugget', 5, '2023-04-11 21:14:00', '#18 annaporna niyala bangalore-79', 'szg'),
(20, 'shyla', 9611139828, 'xhddc', 'spicy chicken nugget', 5, '2023-04-11 21:14:00', '#18 annaporna niyala bangalore-79', 'szg');

-- --------------------------------------------------------

--
-- Table structure for table `u_cart`
--

CREATE TABLE `u_cart` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `u_cart`
--

INSERT INTO `u_cart` (`id`, `name`, `price`, `image`, `description`) VALUES
(6, 'chicken noodle', 190, 'images/chicken-noodles.jpg', 'main ingredients are chicken ,with fulfilled flavo'),
(7, 'veg fried rice', 250, 'images/veg-friedrice.jpg', 'main flovers are the pure veggis ,beans,carrots,an'),
(8, 'pizza', 180, 'images/pizza.jpg', 'a regular pizza with full veggi toppings'),
(9, 'veg burger', 180, 'images/veg-burger.jpeg', 'main flovers are the pure veggis ,beans,carrots,an'),
(11, 'north indian thali', 300, 'images/thali.jpeg', 'north indian thali main flovers are the pure veggi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `u_cart`
--
ALTER TABLE `u_cart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `u_cart`
--
ALTER TABLE `u_cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
