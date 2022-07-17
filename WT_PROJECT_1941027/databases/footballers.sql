-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 09, 2021 at 01:28 PM
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
-- Database: `footballers`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `path` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `name`, `path`, `type`) VALUES
(1, 'Dheeraj Singh', 'file:///D:/xamp/htdocs/progs/footballers/ATK_mohun_bagan/dheeraj_singh.jpg', 'jpg'),
(2, 'Sumit Rathi', 'file:///D:/xamp/htdocs/progs/footballers/ATK_mohun_bagan/sumith_rathi.jpg', 'jpg'),
(3, 'Sandesh Jhingan', 'file:///D:/xamp/htdocs/progs/footballers/ATK_mohun_bagan/sandesh_jhingan.jpg', 'jpg]'),
(4, 'Manvir Singh', 'file:///D:/xamp/htdocs/progs/footballers/ATK_mohun_bagan/manvir_singh.jpg', 'jpg'),
(5, 'Komal Thatal', 'file:///D:/xamp/htdocs/progs/footballers/ATK_mohun_bagan/komal_thatal.jpg', 'jpg]'),
(6, 'Carl McHugh', 'file:///D:/xamp/htdocs/progs/footballers/ATK_mohun_bagan/carl_mchugh.jpg', 'jpg'),
(7, 'David Williams', 'file:///D:/xamp/htdocs/progs/footballers/ATK_mohun_bagan/david_williams.jpg', 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `player_details`
--

CREATE TABLE `player_details` (
  `name` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `transfer_value` double NOT NULL,
  `height` double NOT NULL,
  `team` varchar(100) DEFAULT NULL,
  `troffies_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player_details`
--

INSERT INTO `player_details` (`name`, `id`, `position`, `age`, `transfer_value`, `height`, `team`, `troffies_number`) VALUES
('Dheeraj Singh', 1, 'GK', 20, 17, 2, 'ATK Mohun Bagan FC', 0),
('Komal Thatal', 5, 'DF', 20, 17, 2, 'ATK Mohun Bagan FC', 0),
('Manvir Singh', 4, 'DF', 20, 17, 2, 'ATK Mohun Bagan FC', 0),
('Sandesh Jhingan', 3, 'DF', 20, 17, 2, 'ATK Mohun Bagan FC', 0),
('Sumit Rathi', 2, 'DF', 20, 17, 2, 'ATK Mohun Bagan FC', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `player_details`
--
ALTER TABLE `player_details`
  ADD PRIMARY KEY (`name`),
  ADD KEY `fk_id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `player_details`
--
ALTER TABLE `player_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `player_details`
--
ALTER TABLE `player_details`
  ADD CONSTRAINT `fk_id` FOREIGN KEY (`id`) REFERENCES `image` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
