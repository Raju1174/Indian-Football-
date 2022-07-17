-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 04:08 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `find`
--

-- --------------------------------------------------------

--
-- Table structure for table `academy`
--

CREATE TABLE `academy` (
  `id` int(11) NOT NULL,
  `association` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academy`
--

INSERT INTO `academy` (`id`, `association`, `address`, `city`, `contact`, `image`) VALUES
(1, 'Bengaluru Football Club\r\n', ' First Floor, FIFA Goal Project BuildingBangalore Football Stadium Ashoknagar, Bengaluru 560025 Karnataka, INDIA.\r\n', 'Bangalore', ' contact@bengalurufc.com', ''),
(2, 'Reliance Foundation Young Champs', 'Reliance Foundation, 9th Floor, Maker Chambers IV, 222, Nariman Point, Mumbai - 400021, Maharashtra', 'Mumbai', 'contact@rfyoungchamps.org', ''),
(3, 'Jamshedpur FC', 'Northern Town, Jamshedpur, Jharkhand 831001, India, Jamshedpur, Jharkhand', 'Jamshedpur', 'indranil.chakraborty@tatasteel.com', ''),
(4, 'Bhaichung Bhutia Football Schools', 'Anna Nagar\r\nOMR\r\nChennai', 'Chennai', 'ashank.bidri@bbfootballschools.com', ''),
(8, 'Dempo Sports Club', 'Dempo House\r\nCampal, Panaji, Goa- 403001\r\n', 'Goa', 'Email: dsc@dempos.com, dsc@dempos.com', ''),
(9, 'Youth Football Club (Punjab)', 'Rurka Kalan, Punjab 144031, India, Jalandhar, Punjab\r\n', 'Punjab', 'contact@yfcrurkakalan.org', ''),
(12, 'Sudeva Delhi FC', 'E-5 (2 ND Floor), Defence Colony, New Delhi -110024', 'Delhi', 'contact@sudeva.in', ''),
(13, 'SAIL FOOTBALL ACADEMY, BOKARO, JHARKHAND', 'SAIL FOOTBALL ACADEMY\r\nBlock No-1 Trainees’ Hostel, Sector IIIB,\r\nBokaro Steel City\r\nDIST : BOKARO (Jharkhand) - 827003\r\n', 'Jharkhand', 'sailbslsports@gmail.com', ''),
(14, 'SC East Bengal', 'ClubTent, Maidan\r\nKolkata - 700 021', 'Kolkata', 'clubkingfishereastbengal@gmail.com', ''),
(17, 'Raman Vijayan Soccer School', 'NH 4, Santhavelur, Sunguvar Chathiram, Sriperumbudur, Tamil Nadu 602106, India, Kancheepuram, Tamil Nadu', 'Kancheepuram', 'rvssrajan@gmail.com', ''),
(18, 'FC Pune City', 'Wadhwan Globle Hotel and resort pvt. ltd., Hotel\r\n', 'Pune', 'tejas.goradia@fcpunecity.com', ''),
(19, 'Kerala Blasters Football Club', '26/299 A,Konthuruthy,Kochi-682013\r\n', 'Kochi', 'soli@kbfcofficial.com', ''),
(20, 'Odisha FC', 'Plot No 724/1551/3007, Tankpani Road, Brahmeswar Patna, Khorda, Odisha, 751018', 'Odisha', 'abhik.chatterjee@odishafc.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academy`
--
ALTER TABLE `academy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academy`
--
ALTER TABLE `academy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
