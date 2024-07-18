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
-- Table structure for table `t_mainmaterial`
--

CREATE TABLE `t_mainmaterial`
(
  `kdMainMaterial` varchar
(10) NOT NULL,
  `nmMainMaterial` varchar
(20) NOT NULL,
  `Remark` varchar
(255) DEFAULT NULL,
  `LastUpdate` date DEFAULT NULL,
  `userName` varchar
(20) DEFAULT NULL,
  `FlagDeleted` varchar
(2) DEFAULT NULL,
  `ipAddress` varchar
(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_mainmaterial`
--
ALTER TABLE `t_mainmaterial`
ADD PRIMARY KEY
(`kdMainMaterial`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
