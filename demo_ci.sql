-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2019 at 08:19 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `product_type` varchar(100) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `price`, `image`, `desc`, `product_type`, `created`) VALUES
(9, 'HDPE Plastic Bottle', 'HDPE-Plastic-Bottle', 9.5, '1575396559_2-containers.jpg', 'We take pleasure in introducing ourselves as leading firm by offering HDPE Plastic Bottle.', 'HDPE Bottle', '2019-12-03 19:09:19'),
(10, 'HDPE capsule Bottle', 'HDPE-capsule-Bottle', 7.29, '1575396616_medicine-bottle-recycling.jpg', 'In order to keep pace with never ending demands of the customers, our company is instrumental in offering LDPE Plastic Bottle.', 'Cosmetic Cream Bottle', '2019-12-03 19:10:16'),
(11, 'Shampoo bottle', 'Shampoo-bottle', 9.75, '1575396837_High-End-Thickness-Transparent-Clear-Plastic-Bottle-for-Medicines.jpg', 'Our product range includes a wide range of 125mlHDPE BOTTLE 25MM FTC cap, 500 HDPE Oval Shape Bottle 28mm Cap and 200ml Shampoo Bottle.', 'Powder containers', '2019-12-03 19:13:58'),
(12, 'Shampoo-bottle', 'Shampoo-bottle-1', 12.3, '1575507444_3.jpg', 'We take pleasure in introducing ourselves as leading firm by offering HDPE Plastic Bottle.', 'HDPE Bottle', '2019-12-05 01:57:25'),
(13, 'Shampoo bottles', 'Shampoo-bottles', 3.21, '1575507702_ayurvedic-medicine-containers-500x500.jpg', 'In order to keep pace with never ending demands of the customers, our company is instrumental in offering LDPE Plastic Bottle.', 'Cosmetic Cream Bottle', '2019-12-05 02:01:42'),
(16, '25ml,28mmcap ( Tablet Bottle)', '25ml-28mmcap-Tablet-Bottle-', 3.25, '1575569688_cream.jpeg', 'We are one of the well-distinguished companies in the market that is into offering Capsule Bottle.', 'Powder containers', '2019-12-05 19:14:48'),
(17, '120 Tablet Bottle Rs 6.00 / PieceGet Latest Pr', '120-Tablet-Bottle-Rs-6-00-PieceGet-Latest-Pr', 6, '1575569774_cream.jpeg', '120 Tablet Bottle\r\nRs 6.00 / PieceGet Latest Pr 123', 'Cosmetic Cream Bottle', '2019-12-05 19:16:14'),
(18, 'Hdpe Tablet Bottles', 'Hdpe-Tablet-Bottles', 5, '1575572139_hdpe-powder-container-500x500.jpg', 'Hdpe Tablet Bottles Hdpe Tablet Bottles', 'Plastic Container', '2019-12-05 19:55:39'),
(19, 'Creem Container', 'Creem-Container', 6.5, '1575572194_gel-container-500x500.jpg', 'qwewqe', 'Plastic Container', '2019-12-05 19:56:34');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `name`, `image`, `description`, `created`) VALUES
(1, 'Cosmetic Cream Bottle', '1575566489_cream.jpeg', 'Cosmetic Cream Bottle Cosmetic Cream Bottle', '2019-12-05 18:21:29'),
(2, 'Powder containers', '1575566618_powder.jpg', 'powder containers powder containers', '2019-12-05 18:23:38'),
(3, 'HDPE Bottle', '1575566736_hdpe.jpeg', 'HDPE Bottle HDPE Bottle', '2019-12-05 18:25:36'),
(4, 'Plastic Container', '1575572089_2-containers.jpg', 'Plastic Container Plastic Container', '2019-12-05 19:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `status` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `gender`, `phone`, `status`, `created`, `modified`, `user_type`) VALUES
(2, 'Pavan', 'Maganti', 'pavanmaganti9@gmail.com', 'cd84d683cc5612c69efe115c80d0b7dc', 'Male', '8099049823', 1, '2019-11-01 12:13:00', '2019-11-01 12:13:00', 'superadmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
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
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
