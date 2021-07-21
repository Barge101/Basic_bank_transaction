-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 08:12 PM
-- Server version: 8.0.23
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_detail`
--

CREATE TABLE `customer_detail` (
  `id` int NOT NULL,
  `cus_name` varchar(200) NOT NULL,
  `cus_email` varchar(50) NOT NULL,
  `curr_balance` float NOT NULL,
  `mobile` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer_detail`
--

INSERT INTO `customer_detail` (`id`, `cus_name`, `cus_email`, `curr_balance`, `mobile`) VALUES
(1, 'Shubham Ankush Barge', 'sabarge@gmail.com', 35294, 9878654032),
(2, 'Prajwal Bhimrao Devokar', 'prajwal@gmail.com', 50073, 7584903021),
(3, 'Om Sambhaji Bothe', 'om@gmail.com', 31627, 6709584329),
(4, 'Ram Samir Bhosale', 'ram@gmail.com', 60007, 6709264329),
(5, 'Om Sart Natake', 'om1@gmail.com', 25013, 6709584109),
(6, 'Ravi Sham Pawar', 'ravi1@gmail.com', 23980, 7856473920),
(7, 'Pawan Sumit Rawat', 'pawan@gmail.com', 28027, 7859043920),
(8, 'Gaurav Rajendra Bhosale', 'gaurav@gmail.com', 57940, 8947338292),
(9, 'Samarth Shelhar Jagatap', 'samarth@gmail.com', 47039, 3894805926),
(10, 'Shubham Vitthal Bhosale', 'shubham@gmail.com', 69000, 9986995045);

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `transid` int NOT NULL,
  `sender` varchar(1000) NOT NULL,
  `receiver` varchar(1000) NOT NULL,
  `amount` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_detail`
--
ALTER TABLE `customer_detail`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`transid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `transid` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
