-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2016 at 01:46 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trainsoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookId` int(11) NOT NULL,
  `bookHead` varchar(255) NOT NULL,
  `bookAuthor` varchar(255) NOT NULL,
  `bookPrice` float(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookId`, `bookHead`, `bookAuthor`, `bookPrice`) VALUES
(5, 'PHP - 1', 'Denis Kolisnichenko', 25);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `mark` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `waranty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `mark`, `model`, `year`, `country`, `price`, `waranty`) VALUES
(1, 'asd', '', 1002, '', '12', 2),
(2, 'Honda', 'Civic', 1995, 'Japan', '2500', 0),
(3, 'Honda2', 'Civic', 1995, 'Japan', '2500', 0),
(4, 'Honda3', 'Civic', 1995, 'Japan', '2500', 0),
(5, 'Honda4', 'Civic', 1995, 'Japan', '2500', 0),
(6, 'Honda4', 'Civic', 1995, 'Japan', '2500', 0),
(7, 'Honda4', 'Civic', 1995, 'Japan', '2500', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerId` int(11) NOT NULL,
  `customerName` varchar(255) NOT NULL,
  `customerPass` varchar(255) NOT NULL,
  `customerEmail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerId`, `customerName`, `customerPass`, `customerEmail`) VALUES
(1, 'Stanislav Cvetkashki', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'stanislav.svetoslavov@stanislav.org'),
(2, 'Ivan Andonov', 'e10adc3949ba59abbe56e057f20f883e', 'ivanandonov@andonov.com'),
(3, 'Ioan Dimitrrov', 'e10adc3949ba59abbe56e057f20f883e', 'ioandimitrov@dimitrov.com'),
(4, 'Admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(11) NOT NULL,
  `customerId` int(11) NOT NULL,
  `bookId` int(11) NOT NULL,
  `orderDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderId`, `customerId`, `bookId`, `orderDate`) VALUES
(1, 1, 5, '2016-06-19 00:00:00'),
(2, 1, 5, '2016-06-19 14:16:13'),
(3, 1, 5, '2016-06-19 14:18:22'),
(4, 1, 5, '2016-06-19 14:19:04');

-- --------------------------------------------------------

--
-- Table structure for table `triangle`
--

CREATE TABLE `triangle` (
  `id` int(11) NOT NULL,
  `a` decimal(10,0) NOT NULL,
  `ha` decimal(10,0) NOT NULL,
  `surface` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `triangle`
--

INSERT INTO `triangle` (`id`, `a`, `ha`, `surface`) VALUES
(1, '2', '5', '5');

-- --------------------------------------------------------

--
-- Table structure for table `triangle_`
--

CREATE TABLE `triangle_` (
  `id` int(11) NOT NULL,
  `side` float NOT NULL,
  `altitude` float NOT NULL,
  `surface` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `triangle_`
--

INSERT INTO `triangle_` (`id`, `side`, `altitude`, `surface`) VALUES
(1, 2, 1, 1),
(2, 5, 12, 30),
(3, 5, 12, 30),
(4, 10, 12, 60),
(5, 12, 12, 72);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_email`) VALUES
(1, 'asdasd', '202cb962ac59075b964b07152d234b70', 'asd@asdasd'),
(2, 'asdasd', '202cb962ac59075b964b07152d234b70', 'asd@asdasd'),
(3, 'aneliqasdas', '51bb2c7e5487ce5590c10cab9a418604', 'ASD@ASDasdasd'),
(4, 'zxz', '25ed1bcb423b0b7200f485fc5ff71c8e', 'zzads@asd'),
(5, 'zxz', '25ed1bcb423b0b7200f485fc5ff71c8e', 'zzads@asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookId`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `triangle`
--
ALTER TABLE `triangle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `triangle_`
--
ALTER TABLE `triangle_`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `triangle`
--
ALTER TABLE `triangle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `triangle_`
--
ALTER TABLE `triangle_`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
