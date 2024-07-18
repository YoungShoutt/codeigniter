-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 11:07 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hansapratama`
--

-- --------------------------------------------------------

--
-- Table structure for table `th_customer`
--

CREATE TABLE `th_customer` (
  `kdNegara` varchar(10) NOT NULL,
  `cdCust` varchar(10) NOT NULL,
  `nmCust` varchar(100) DEFAULT NULL,
  `nmShort` varchar(50) DEFAULT NULL,
  `kdCategoryCust` varchar(10) DEFAULT NULL,
  `Plan` varchar(50) DEFAULT NULL,
  `GrpCompanyName` varchar(50) DEFAULT NULL,
  `HutCompany` date DEFAULT NULL,
  `KategoryPPN` varchar(1) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `LastUpdate` date DEFAULT NULL,
  `userName` varchar(20) DEFAULT NULL,
  `FlagDeleted` varchar(1) DEFAULT NULL,
  `ipAddress` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `th_customer`
--
ALTER TABLE `th_customer`
  ADD PRIMARY KEY (`cdCust`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
