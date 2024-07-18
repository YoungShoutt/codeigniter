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
-- Table structure for table `td_customer`
--

CREATE TABLE `td_customer` (
  `cdCust` varchar(10) NOT NULL,
  `ContactPerson` varchar(100) DEFAULT NULL,
  `AlamatHO` varchar(100) DEFAULT NULL,
  `AlamatKirim` varchar(100) DEFAULT NULL,
  `AlamatTagih` varchar(100) DEFAULT NULL,
  `Kota` varchar(50) DEFAULT NULL,
  `KodePos` varchar(50) DEFAULT NULL,
  `Propinsi` varchar(50) DEFAULT NULL,
  `Telp` varchar(50) DEFAULT NULL,
  `Fax` varchar(50) DEFAULT NULL,
  `NPWP` varchar(50) DEFAULT NULL,
  `AlamatPKP` varchar(100) DEFAULT NULL,
  `ValidFrom` date DEFAULT NULL,
  `ValidUntil` date DEFAULT NULL,
  `LastUpdate` date DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `FlagDeleted` varchar(1) DEFAULT NULL,
  `ipAddress` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
