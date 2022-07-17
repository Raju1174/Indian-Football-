-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307:3307
-- Generation Time: Apr 14, 2021 at 06:14 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teams`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `coach` varchar(50) NOT NULL,
  `Players_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `Name`, `owner`, `coach`, `Players_number`) VALUES
(1, 'Kerala Blasters FC', 'Magnum Sports Pvt. Limited', 'vacant', 88),
(2, 'Bengaluru FC', 'JSW Group', 'Marco Pezzaiuoli', 55),
(3, 'FC Goa', 'Virat Kohli, Goan Football Club Pvt. Ltd.', 'Juan Fernando', 45),
(4, 'Chennaiyin FC', 'Abishek Bachan, MS Dhoni, Vita Dani', 'Csaba Laszlo', 99),
(5, 'Mumbai City FC', 'Ranbir Kapoor, City Football Group, Bimal Parekh', 'Sergio Lobera', 44),
(6, 'SC East Bengal', 'Shree Cement East Bengal Foundation', 'Robbie Fowler', 66),
(7, 'NorthEast United FC', 'John Abraham', 'Khaid Jamil', 77),
(8, 'Jamshedpur FC', 'Tata Group', 'Owen Coyle', 66),
(9, 'Hyderabad FC', 'Rana Daggubati', 'Manolo Marquez', 99),
(10, 'Odisha FC', 'GMS Inc.', 'Steven Dias', 33),
(11, 'ATK Mohun Bagan FC', 'Sanjiv Goenka', 'Antonio Lopez', 44);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
