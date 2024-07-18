-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 11:32 PM
-- Server version: 10.1.16-MariaDB
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
-- Table structure for table `td_salesorder`
--

CREATE TABLE `td_salesorder` (
  `SalesOrderNo` varchar(10) NOT NULL,
  `ItemCode` varchar(20) NOT NULL,
  `Unit` varchar(10) NOT NULL,
  `Qty` int(11) NOT NULL,
  `Unitweight` double NOT NULL,
  `currency` double NOT NULL,
  `UnitPrice` double NOT NULL,
  `Amount` double NOT NULL,
  `Amount_Usd_AUD` double NOT NULL,
  `Deliverytime` date NOT NULL,
  `Type` char(1) NOT NULL,
  `Remark` varchar(255) NOT NULL,
  `FlagDeleted` char(1) NOT NULL,
  `LastUpdate` datetime NOT NULL,
  `userName` varchar(10) NOT NULL,
  `IPAddress` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
