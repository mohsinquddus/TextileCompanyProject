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
-- Table structure for table `recep_send_detail_to_manager`
--

CREATE TABLE `recep_send_detail_to_manager` (
  `sample_id` int(50) NOT NULL,
  `sample_type` varchar(50) NOT NULL,
  `sample_catagory` varchar(45) NOT NULL,
  `sample_date` date NOT NULL,
  `sample_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recep_send_detail_to_manager`
--

INSERT INTO `recep_send_detail_to_manager` (`sample_id`, `sample_type`, `sample_catagory`, `sample_date`, `sample_image`) VALUES
(4, 'Lelen', 'SILK', '2020-05-15', 's4.jpg'),
(5, 'Lelen', 'SILK', '2020-05-15', 's3.jpg'),
(6, 'Lelen', 'SILK', '2020-05-20', 's3.jpg'),
(7, 'Lelen', 'SILK', '2020-05-20', 's3.jpg'),
(8, 'Lelen', 'SILK', '2020-05-20', 's3.jpg'),
(9, 'loan', 'SILK', '2020-05-22', 's3.jpg'),
(10, 'Lelen', 'Resham', '2020-05-22', 's1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recep_send_detail_to_manager`
--
ALTER TABLE `recep_send_detail_to_manager`
  ADD PRIMARY KEY (`sample_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recep_send_detail_to_manager`
--
ALTER TABLE `recep_send_detail_to_manager`
  MODIFY `sample_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
