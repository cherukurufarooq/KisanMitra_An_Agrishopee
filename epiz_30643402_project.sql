-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 08:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_30643402_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `addprods`
--

CREATE TABLE `addprods` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `postal` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `productname` varchar(40) NOT NULL,
  `proqua` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addprods`
--

INSERT INTO `addprods` (`id`, `fullname`, `phone`, `address`, `postal`, `email`, `productname`, `proqua`, `price`) VALUES
(1, 'GSP Samaikya', 2147483647, 'H.NO - 40/421-35, BHASKAR NAGAR, KURNOOL', 518222, 'samaikyagandla@gmail.com', 'tomato', '2kg', '400');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `thoughts` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `conPassword` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `firstName`, `lastName`, `email`, `password`, `conPassword`) VALUES
(1, 'Sai Padma Samaikya', 'gandla', 'samaikyagandla1633@gmail.com', 'Samaikya', 'Samaikya'),
(3, 'Mohammed Farooq', 'Cherukuru', 'cherukurufarooq@gmail.com', '6281417236', '6281417236'),
(4, 'Nitish kumar', 'Besta', 'nithishkumar9963@gmail.com', 'Nithish1.', 'Nithish1.'),
(6, 'Chadipirala', 'Lakshmi Charitha', 'lakshmi.charitha0709@gmail.com', 'charitha', 'charitha'),
(7, 'Manisha', 'Gangineni', 'manishagangineni@gmail.com', 'Manisha', 'Manisha'),
(8, 'priya', 'gangineni', 'lakshmipriyagangineni@gmail.com', '8341371140', '8341371140'),
(9, 'Sreenivasa Chakravarthi', 'Sangapu', 'a@b.com', 'whypassword', 'whypassword'),
(10, 'vidya', 'b', 'vidyabtrp@gmail.com', 'viddu', 'viddu'),
(11, 'vidya', 'b', 'vidyabtrp@gmail.com', 'vidduviddu', 'vidduviddu'),
(12, 'cherukuru', 'ismail', 'cherukuruismail@gmail.com', 'Ismail@123', 'Ismail@123'),
(13, 'Sai', 'Reddy', 'chvsnr01@outlook.com', '12345678', '12345678'),
(14, 'asrm', 'asrm', 'varshithakanta@gmail.com', 'asdfghjkl', 'asdfghjkl'),
(15, 'p', 'Lokesk', 'pedamalalokesh@gmail.com', '1234569', '1234569'),
(16, 'SHAMITHA', 'GUMMALLA', 'shamithagummalla@gmail.com', 'lattu123', 'lattu123'),
(17, 'vikas', 'G', 'gvchowdary24@gmail.com', 'vIKAS@2002', 'vIKAS@2000'),
(18, 'nithish', 'besta', 'nithish@gmail.com', 'nithish', 'nithish'),
(19, 'Besta', 'Nitish kumar', 'nithish@gmail.com', 'nithish', 'nithish'),
(20, 'Besta', 'Nitish kumar', 'nithish22@gmail.com', 'nithish22@', 'nithish22@'),
(21, 'vishnu', 'r', 'dvsrd109@gmail.com', 'dvsrd109', 'dvsrd109');

-- --------------------------------------------------------

--
-- Table structure for table `loc`
--

CREATE TABLE `loc` (
  `shopname` varchar(20) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loc`
--

INSERT INTO `loc` (`shopname`, `latitude`, `longitude`, `price`) VALUES
('fruitshop 1', 13.6209, 79.3011, 110),
('fruitshop2', 15.827, 78.0288, 45),
('fruitshop3', 28.8988, 76.5908, 55),
('fruitshop4', 39.8786, -101.851, 65);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addprods`
--
ALTER TABLE `addprods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addprods`
--
ALTER TABLE `addprods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
