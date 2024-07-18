-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2019 at 08:59 AM
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
-- Table structure for table `cost_import`
--

CREATE TABLE `cost_import` (
  `cost_import_kode` varchar(10) DEFAULT NULL,
  `cost_import_keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cost_import`
--

INSERT INTO `cost_import` (`cost_import_kode`, `cost_import_keterangan`) VALUES
('001', 'tes1'),
('002', 'tes2'),
('003', 'tes3'),
('004', 'tes4'),
('005', 'tes5'),
('006', 'tes6'),
('007', 'tes7'),
('008', 'tes8'),
('009', 'tes9'),
('010', 'tes10'),
('011', 'tes11');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
