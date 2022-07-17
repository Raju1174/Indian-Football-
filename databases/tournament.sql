-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 29, 2021 at 09:37 AM
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
-- Database: `tournament`
--

-- --------------------------------------------------------

--
-- Table structure for table `tour1`
--

CREATE TABLE `tour1` (
  `id` int(255) NOT NULL,
  `Team_Name` varchar(255) NOT NULL,
  `Coach_Name` varchar(255) NOT NULL,
  `Contact_Number` varchar(10) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour1`
--

INSERT INTO `tour1` (`id`, `Team_Name`, `Coach_Name`, `Contact_Number`, `Address`, `City`, `logo`) VALUES
(11, 'ss11', 'sasd', '+916361311', '#17/52 banashankri\r\nhoysalanagar', 'banglore', 'pic/Chennai.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tour2_random`
--

CREATE TABLE `tour2_random` (
  `Id` int(255) NOT NULL,
  `Team_Name` varchar(255) NOT NULL,
  `Coach_Name` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour2_random`
--

INSERT INTO `tour2_random` (`Id`, `Team_Name`, `Coach_Name`, `pic`) VALUES
(1, 'Pune City', 'Abhisekh', 'Random pic/Pune City.jpg'),
(2, 'Mumbai City Fc', 'Daniel', 'Random pic/Mumbai.jpg'),
(3, 'Delhi Dynamo', 'Michael Bay', 'Random pic/delhi.jpg'),
(4, 'Kerela Blasters', 'David Mike', 'Random pic/Kerela.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tour1`
--
ALTER TABLE `tour1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour2_random`
--
ALTER TABLE `tour2_random`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tour1`
--
ALTER TABLE `tour1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tour2_random`
--
ALTER TABLE `tour2_random`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
