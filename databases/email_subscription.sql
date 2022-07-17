-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 29, 2021 at 09:35 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `email_subscription`
--

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `Id` int(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`Id`, `Email`) VALUES
(7, 'sad@sdaSD'),
(8, 'raju.pandit1174@gmail.com'),
(9, 'raju.pandit1174@gmail.com'),
(10, 'raju.pandit1174@gmail.com'),
(11, ''),
(12, ''),
(13, ''),
(14, ''),
(15, ''),
(16, ''),
(17, ''),
(18, ''),
(19, 'sad@sdaSD'),
(20, 'raju.pandit1174@gmail.com'),
(21, 'raju.pandit1174@gmail.com'),
(22, '7545916429@gmail.com'),
(23, 'raju.pandit1174@gmail.com'),
(24, 'hariganeshbng@gmail.com'),
(25, 'abhaynaik452001@gmail.com'),
(26, 'abhaynaik452001@gmail.com'),
(27, 'abhaynaik452001@gmail.com'),
(28, 'hariganeshbng@gmail.com'),
(29, 'hariganeshbng@gmail.com'),
(30, 'hariganeshbng@gmail.com'),
(31, 'hariganeshbng@gmail.com'),
(32, 'abhaynaik452001@gmail.com'),
(33, 'abhaynaik452001@gmail.com'),
(34, 'raju.pandit1174@gmail.com'),
(35, 'abhaynaik452001@gmail.com'),
(36, 'abhaynaik452001@gmail.com'),
(37, 'abhaynaik452001@gmail.com'),
(38, 'abhaynaik452001@gmail.com'),
(39, 'abhaynaik4may2001@gmail.com'),
(40, 'abhay.naik@science.christuniversity.in'),
(41, 'abhaynaik452001@gmail.com'),
(42, 'abhaynaik452001@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
