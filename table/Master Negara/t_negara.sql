-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2019 at 01:18 PM
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
-- Table structure for table `t_negara`
--

CREATE TABLE `t_negara` (
  `kdNegara` varchar(10) NOT NULL DEFAULT '',
  `nmNegara` varchar(50) DEFAULT NULL,
  `Currency` varchar(3) NOT NULL,
  `KodeTelp` varchar(10) NOT NULL,
  `LastUpdate` date NOT NULL,
  `username` varchar(25) NOT NULL,
  `FlagDeleted` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_negara`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_negara`
--
ALTER TABLE `t_negara`
  ADD PRIMARY KEY (`kdNegara`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
