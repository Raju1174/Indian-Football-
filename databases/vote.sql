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
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) CHARACTER SET utf8 NOT NULL,
  `comment_sender_name` varchar(40) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(1, 0, 'hello', 'abhay', '2021-04-15 12:15:08'),
(2, 1, 'hi', 'aby', '2021-04-15 12:15:20'),
(3, 0, 'bengaluru fc', 'rahul', '2021-04-15 12:20:44'),
(4, 3, 'nope', 'abhay', '2021-04-15 12:21:26'),
(5, 0, 'i dont know', 'abhay', '2021-04-28 12:32:46'),
(6, 5, 'asdnkaj s', 'abi ', '2021-04-28 12:32:56'),
(7, 0, 'f fc goa will win', 'kali', '2021-04-29 07:14:12'),
(8, 7, 'aasdjn kna ', 'abhay', '2021-04-29 07:14:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_poll`
--

CREATE TABLE `tbl_poll` (
  `poll_id` int(11) NOT NULL,
  `php_framework` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_poll`
--

INSERT INTO `tbl_poll` (`poll_id`, `php_framework`) VALUES
(4, 'fcgoa'),
(6, 'fcgoa'),
(7, 'fcgoa'),
(8, 'fcgoa'),
(12, 'hyderabad'),
(13, 'mohunbagan'),
(14, 'northeast'),
(15, 'mohunbagan'),
(16, 'bengaluru'),
(17, 'bengaluru'),
(18, 'bengaluru'),
(19, 'bengaluru'),
(20, 'chennainyin'),
(21, 'hyderabad'),
(22, 'chennainyin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_poll`
--
ALTER TABLE `tbl_poll`
  ADD PRIMARY KEY (`poll_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_poll`
--
ALTER TABLE `tbl_poll`
  MODIFY `poll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
