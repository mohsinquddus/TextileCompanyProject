-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 12:15 PM
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
-- Table structure for table `manager_send_detail_to_finance`
--

CREATE TABLE `manager_send_detail_to_finance` (
  `order_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_address` text NOT NULL,
  `dilevery_date` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `advance_amount` double NOT NULL,
  `total_price` double NOT NULL,
  `remaining_amount_source` varchar(50) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `payment_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager_send_detail_to_finance`
--

INSERT INTO `manager_send_detail_to_finance` (`order_id`, `customer_name`, `customer_address`, `dilevery_date`, `quantity`, `advance_amount`, `total_price`, `remaining_amount_source`, `order_status`, `payment_status`) VALUES
(1, 'MALIK FAISAL', 'Sialkot', '2020-05-23', 2, 2400, 50000, 'Jazzcash', 'pending', 'completed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manager_send_detail_to_finance`
--
ALTER TABLE `manager_send_detail_to_finance`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manager_send_detail_to_finance`
--
ALTER TABLE `manager_send_detail_to_finance`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
