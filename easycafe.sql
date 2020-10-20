-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2019 at 10:22 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easycafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `customer_id` int(11) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_man`
--

CREATE TABLE `delivery_man` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `work_assign` varchar(10) DEFAULT NULL,
  `Distance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_man`
--

INSERT INTO `delivery_man` (`id`, `Name`, `phone`, `email`, `work_assign`, `Distance`) VALUES
(1, 'Kumar Saha', '01625455019', 'ks@gmail.com', 'No', 5),
(2, 'Ahmed', '01965455012', 'a@gmail.com', 'No', 10),
(3, 'Rasel Hossain', '01825468019', 'rh@gmail.com', 'No', 2),
(4, 'Shojib', '01625885019', 's@gmail.com', 'No', 15),
(5, 'Rana Das', '01725459919', 'rd@gmail.com', 'No', 8),
(6, 'Shajib Ahmed', '01622225019', 'sa@gmail.com', 'Yes', 0),
(7, 'Rokib', '01555455019', 'r@gmail.com', 'Yes', 0),
(8, 'Deb Saha', '01526455019', 'ds@gmail.com', 'No', 2),
(9, 'Kumar Mondol', '01628975019', 'km@gmail.com', 'No', 10),
(10, 'Sohel', '01789455019', 'so@gmail.com', 'No', 5);

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `product_id` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `cost` int(11) NOT NULL,
  `r_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`product_id`, `Name`, `cost`, `r_id`) VALUES
(1, 'Double Whopper', 449, 1),
(2, 'Whopper Jr.', 269, 1),
(3, 'Big King Beef', 299, 1),
(4, 'Big King Chicken', 299, 1),
(5, 'Big King Fish', 399, 1),
(6, 'Tendergrill', 299, 1),
(7, 'Long Chicken', 289, 1),
(8, 'Mushroom Swiss', 449, 1),
(9, 'Curly Fries', 119, 1),
(10, 'BBQ Wings - 3 Pcs', 149, 1),
(11, 'Plain Cheese Cake', 300, 2),
(12, 'Oatmeal Cookie', 120, 2),
(13, 'Brownie', 100, 2),
(14, 'Hot Cafe Latte', 165, 2),
(15, 'Hot Cappuccino', 160, 2),
(16, 'Hot Chocolate', 250, 2),
(17, 'Crimson Cup Mocha', 320, 2),
(18, 'Green Teazy Freezy', 350, 2),
(19, 'BBQ Chicken Sub', 250, 2),
(20, 'Cream Cheese Chicken', 200, 2),
(21, 'Iced Chai Latte', 270, 2),
(22, 'Ice Shake It Up Tea', 180, 2),
(23, 'Flavoured Latte', 320, 2),
(24, 'Red Velvet', 160, 2),
(25, 'Hot Americano', 135, 2),
(26, 'Nutella Cupcake', 160, 2),
(27, 'Nutella Cheesy Brownie', 180, 2),
(28, 'Grilled Cheese', 320, 2),
(29, 'Roast Beef Sub', 280, 2),
(30, 'White Mocha Without Cream', 325, 2),
(31, 'Ultimate Pepperoni', 599, 3),
(32, 'Beef Kala Bhuna', 599, 3),
(33, 'Texas BBQ Chicken', 499, 3),
(34, 'Veggie Mexican', 369, 3),
(35, 'Margherita', 299, 3),
(36, 'Extravaganza Feast', 649, 3),
(37, 'Chicken Dominator', 649, 3),
(38, 'Garlic Breadsticks', 119, 3),
(40, 'Beef Taco', 249, 3),
(99, 'Chicken Meatballs', 249, 3);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`FirstName`, `LastName`, `date`, `email`, `phonenumber`) VALUES
('l', 's', '2019-08-30', 'abc@gmail.com', '1121434'),
('m', 's', '2019-08-30', 'mkuddus161243@bscse.uiu.ac.bd', '01555654566');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_info`
--

CREATE TABLE `restaurant_info` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `reserve` tinyint(1) DEFAULT NULL,
  `place` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant_info`
--

INSERT INTO `restaurant_info` (`id`, `Name`, `reserve`, `place`) VALUES
(1, 'Burger King', 0, 'Dhaka'),
(2, 'Crimson Cup', 0, 'Dhaka'),
(3, 'Dominos', 0, 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `comment` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`comment`, `name`, `email`) VALUES
('nice', 'Lubaba', 'abc@gmail.com'),
('kjjbdajhbdasj', 'hbdajhsdhas', 'lubaba@gmail.com'),
('awesome', 'marian', 'marian@gmail.com'),
('nice', 'marian', 'mkuddus161243@bscse.uiu.ac.bd');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`FirstName`, `LastName`, `pass`, `DOB`, `email`, `phonenumber`) VALUES
('abc', 'def', '1234', '0000-00-00', 'abc@gmail.com', '0192844758'),
('abc', 'def', '', '0000-00-00', 'abc@gmail.com', '0192844758'),
('abc', 'def', '1234', '0000-00-00', 'abc@gmail.com', '0192844758'),
('abc', 'deg', '1234', '0000-00-00', 'abc@gmail.com', '01928848585'),
('abc', 'deg', '1234', '0000-00-00', 'abc@gmail.com', '01928848585'),
('abc', 'deg', '1234', '0000-00-00', 'abc@gmail.com', '01928848585'),
('abc', 'degf', '1234', '0000-00-00', 'abc@gmail.com', '029394949'),
('abc', 'def', '1234', '0000-00-00', 'abc@gmail.com', '019398485'),
('mar', 'mooo', '1234', '0000-00-00', 'abc@gmail.com', '0123456789'),
('mar', 'mooo', '12355', '2019-08-29', 'abc@gmail.com', '0123456789'),
('Lubaba', 'Salsabil', '1234', '1996-08-29', 'lubaba@gmail.com', '01234'),
('Lubaba', 'Salsabil', '1234', '1996-08-29', 'lubaba@gmail.com', '01234'),
('a', 'b', '456', '2019-08-01', 'abc@gmail.com', '1213434');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `delivery_man`
--
ALTER TABLE `delivery_man`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `r_id` (`r_id`);

--
-- Indexes for table `restaurant_info`
--
ALTER TABLE `restaurant_info`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD CONSTRAINT `customer_info_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product_info` (`product_id`);

--
-- Constraints for table `product_info`
--
ALTER TABLE `product_info`
  ADD CONSTRAINT `product_info_ibfk_1` FOREIGN KEY (`r_id`) REFERENCES `restaurant_info` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
