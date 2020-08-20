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
-- Table structure for table `dispatch_send_detail_to_gate_incharge`
--

CREATE TABLE `dispatch_send_detail_to_gate_incharge` (
  `order_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_address` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `payment_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dispatch_send_detail_to_gate_incharge`
--

INSERT INTO `dispatch_send_detail_to_gate_incharge` (`order_id`, `customer_name`, `customer_address`, `quantity`, `order_status`, `payment_status`) VALUES
(1, 'MALIK FAISAL', 'Sialkot', 2, 'pending', 'completed'),
(2, 'Anas', 'Jhelum', 3, 'pending', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dispatch_send_detail_to_gate_incharge`
--
ALTER TABLE `dispatch_send_detail_to_gate_incharge`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dispatch_send_detail_to_gate_incharge`
--
ALTER TABLE `dispatch_send_detail_to_gate_incharge`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
