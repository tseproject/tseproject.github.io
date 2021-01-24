-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 10:30 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tseproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemid` int(11) NOT NULL,
  `itemname` varchar(255) NOT NULL,
  `itemqty` int(255) NOT NULL,
  `itemdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemid`, `itemname`, `itemqty`, `itemdate`) VALUES
(4, 'chimken', 123, '2002-12-12'),
(5, 'shikoi', 100, '1999-12-12'),
(6, 'mee', 123, '2025-01-23'),
(7, 'milk', 2, '2021-01-23'),
(8, 'bread', 1, '2028-12-25'),
(9, 'roti', 20, '2021-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `Supplierid` int(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Contact` int(12) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`Supplierid`, `Name`, `Contact`, `Address`) VALUES
(1, 'Tesco', 66666666, 'tesco cheng'),
(2, 'Aeon', 380428304, 'aeon bandaraya, melaka'),
(3, 'Bangla', 182394, 'bangladesh'),
(4, 'Mini market', 12389189, 'taman');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `uposition` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`, `uname`, `uposition`) VALUES
('admin1@restaurant.com', 'admin1', 'admin1', 1),
('admin@restaurant.com', 'admin', 'admin', 1),
('daniel@rest.com', 'daniel', 'Daniel', 1),
('erica@rest.com', 'erica', 'Erica', 1),
('felix@rest.com', 'felix', 'Felix', 1),
('staff@restaurant.com', 'bangla', 'Bangla', 0),
('voo@restaurant.com', 'voo', 'Voo', 0),
('wj@rest.com', 'wjwjwj', 'Wei Jie', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemid`),
  ADD UNIQUE KEY `item_name` (`itemname`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`Supplierid`),
  ADD UNIQUE KEY `contact_number` (`Contact`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `Supplierid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
