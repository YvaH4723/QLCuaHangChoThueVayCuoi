-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 07:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storemanage`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `userpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `userpassword`) VALUES
(1, 'admin', 'admin123'),
(2, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `cardNumber` varchar(16) NOT NULL,
  `expiryDate` varchar(10) NOT NULL,
  `cvv` varchar(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `totalPrice` varchar(200) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `productType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `productType`) VALUES
(1, 'Đầm ngắn DH00152', 950000, 'UploadImg/damNgan1.png', 'home'),
(2, 'DH00151', 890000, 'UploadImg/damNgan2.png', 'damNgan'),
(3, 'DH00153', 950000, 'UploadImg/damNgan3.png', 'damNgan'),
(4, 'DH00150', 890000, 'UploadImg/damNgan4.png', 'damNgan'),
(5, 'DH00133', 2390000, 'UploadImg/damDai1.png', 'damDai'),
(6, 'DH00138', 3490000, 'UploadImg/damDai2.png', 'damDai'),
(7, 'DH00137', 2490000, 'UploadImg/damDai3.png', 'damDai'),
(8, 'DH00143', 2490000, 'UploadImg/damDai4.png', 'damDai'),
(9, 'DH00144', 1590000, 'UploadImg/damRen1.png', 'damRen'),
(10, 'DH00139', 1490000, 'UploadImg/damRen2.png', 'damRen'),
(11, 'DH00141', 2490000, 'UploadImg/damRen3.png', 'damRen'),
(12, 'DH00136', 4590000, 'UploadImg/damRen4.png', 'damRen'),
(13, 'AD0009', 1790000, 'UploadImg/aoDai1.png', 'aoDai'),
(14, 'AD00015', 1390000, 'UploadImg/aoDai2.png', 'aoDai'),
(15, 'AD00012', 1490000, 'UploadImg/aoDai3.png', 'aoDai'),
(16, 'AD00011', 1990000, 'UploadImg/aoDai4.png', 'aoDai'),
(17, 'DH00152', 950000, 'UploadImg/damNgan1.png', 'home'),
(18, 'DH00133', 2390000, 'UploadImg/aoDai1.png', 'home'),
(19, 'DH00144', 1590000, 'UploadImg/damRen1.png', 'home');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `userpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `number`, `userpassword`) VALUES
(1, 'YvaH', 'yva@gmail.com', '123456789', 'abc123456'),
(3, 'Ngoc', 'ngoc@gmai.com', '1122334455', '00000000'),
(4, 'Thi', 'thi@gmai.com', '9988776655', '00000000'),
(6, 'eqeqwe', 'qưeqe', '3123', 'ưqeqe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
