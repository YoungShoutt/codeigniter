-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2019 at 04:39 AM
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
-- Table structure for table `t_rawmaterial`
--

CREATE TABLE `t_rawmaterial`
(
  `cdRawMaterial` varchar
(10) NOT NULL,
  `nmRawMaterial` varchar
(30) NOT NULL,
  `size` double DEFAULT NULL,
  `stsUnitKonversi` varchar
(10) DEFAULT NULL,
  `kdTypeRawMaterial` varchar
(2) DEFAULT NULL,
  `Spec` varchar
(30) DEFAULT NULL,
  `kdDept` varchar
(10) DEFAULT NULL,
  `usedTo` varchar
(30) DEFAULT NULL,
  `kdSat` varchar
(10) DEFAULT NULL,
  `minStock` int
(255) DEFAULT NULL,
  `LastPrice` double
(10,2) DEFAULT NULL,
  `LastDatePurchase` date DEFAULT NULL,
  `kdChemical` varchar
(10) DEFAULT NULL,
  `akun_debet` varchar
(20) DEFAULT NULL,
  `akun_kredit` varchar
(20) DEFAULT NULL,
  `akun_ap` varchar
(20) DEFAULT NULL,
  `LastUpdate` date DEFAULT NULL,
  `userName` varchar
(20) DEFAULT NULL,
  `FlagDeleted` varchar
(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_rawmaterial`
--
ALTER TABLE `t_rawmaterial`
ADD PRIMARY KEY
(`cdRawMaterial`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
