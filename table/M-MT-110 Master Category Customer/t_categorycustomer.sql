-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2019 at 09:06 AM
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
-- Table structure for table `t_categorycustomer`
--

CREATE TABLE `t_categorycustomer` (
  `kdCategoryCust` varchar(10) NOT NULL DEFAULT '',
  `nmCategoryCust` varchar(20) DEFAULT NULL,
  `LastUpdate` date NOT NULL,
  `userName` varchar(20) NOT NULL,
  `FlagDeleted` varchar(1) NOT NULL,
  `ipAddress` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_categorycustomer`
--
ALTER TABLE `t_categorycustomer`
  ADD PRIMARY KEY (`kdCategoryCust`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
