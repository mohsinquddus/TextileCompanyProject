-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 06:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

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
-- Table structure for table `finance_send_detail_to_dispatch`
--

CREATE TABLE `finance_send_detail_to_dispatch` (
  `order_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_address` text NOT NULL,
  `dilevery_date` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `payment_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finance_send_detail_to_dispatch`
--

INSERT INTO `finance_send_detail_to_dispatch` (`order_id`, `customer_name`, `customer_address`, `dilevery_date`, `quantity`, `order_status`, `payment_status`) VALUES
(1, 'MALIK FAISAL', 'Sialkot', '0001-01-01', 2, 'pending', 'completed'),
(2, 'MALIK FAISAL', 'Sialkot', '2020-05-23', 2, 'pending', 'completed'),
(3, 'MALIK FAISAL', 'Sialkot', '2020-05-23', 2, 'pending', 'completed'),
(4, 'MALIK FAISAL', 'Sialkot', '2020-05-23', 2, 'pending', 'completed'),
(5, 'Anas', 'Jhelum', '2020-05-06', 3, 'pending', 'pending'),
(6, '2', 'Gijranwala', '2020-05-06', 2, 'completed', 'completed'),
(7, 'Anas', 'Jhelum', '0001-05-06', 3, 'pending', 'pending'),
(8, 'MALIK FAISAL', 'Sialkot', '2020-05-23', 2, 'pending', 'completed'),
(9, 'MALIK FAISAL', 'Sialkot', '2020-05-23', 2, 'pending', 'completed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `finance_send_detail_to_dispatch`
--
ALTER TABLE `finance_send_detail_to_dispatch`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `finance_send_detail_to_dispatch`
--
ALTER TABLE `finance_send_detail_to_dispatch`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
