-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 12:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `textilecompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `productsample`
--

CREATE TABLE `productsample` (
  `sample_id` int(11) NOT NULL,
  `sample_type` varchar(50) NOT NULL,
  `sample_catagory` varchar(45) NOT NULL,
  `sample_date` date NOT NULL,
  `sample_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productsample`
--

INSERT INTO `productsample` (`sample_id`, `sample_type`, `sample_catagory`, `sample_date`, `sample_img`) VALUES
(14, 'loan', 'SILK', '2020-05-22', 'upload/s2.jpg'),
(15, 'SWESS', 'SILK', '2020-05-22', 'upload/s2.jpg'),
(16, 'Lelen', 'SILK', '2020-05-15', 'upload/s3.jpg'),
(18, 'Lelen', 'SILK COTTON', '2020-05-20', 'upload/s4.jpg'),
(19, 'NewItem', 'silk', '2020-05-20', 'upload/s1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productsample`
--
ALTER TABLE `productsample`
  ADD PRIMARY KEY (`sample_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productsample`
--
ALTER TABLE `productsample`
  MODIFY `sample_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
