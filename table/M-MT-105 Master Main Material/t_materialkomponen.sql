-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 11:06 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET time_zone
= "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hansapratama`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_materialkomponen`
--

CREATE TABLE `t_materialkomponen`
(
  `kdMainMaterial` varchar
(10) NOT NULL,
  `cdRawMaterial` varchar
(10) DEFAULT NULL,
  `Qty` int
(11) DEFAULT NULL,
  `kdSat` varchar
(10) DEFAULT NULL,
  `StandartFromHansa` double DEFAULT NULL,
  `StandartUntilHansa` double DEFAULT NULL,
  `StandartFromInter` double DEFAULT NULL,
  `StandartUntilInter` double DEFAULT NULL,
  `CountryStandartUse` double DEFAULT NULL,
  `NomerSertifikat` varchar
(255) DEFAULT NULL,
  `last_price` double DEFAULT NULL,
  `LastPriceDate` date DEFAULT NULL,
  `Avg_price` double DEFAULT NULL,
  `LastUpdate` date DEFAULT NULL,
  `userName` varchar
(20) DEFAULT NULL,
  `FlagDeleted` varchar
(2) DEFAULT NULL,
  `ipAddress` varchar
(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_materialkomponen`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
