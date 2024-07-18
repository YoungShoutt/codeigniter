-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2019 at 09:00 AM
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
  `kdNegara` varchar(10) DEFAULT NULL,
  `nmNegara` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_negara`
--

INSERT INTO `t_negara` (`kdNegara`, `nmNegara`) VALUES
('IND', 'Indonesia'),
('USA', 'AMERIKA'),
('AFG', 'Afganistan'),
('AND', 'ANDORA'),
('EGY', 'EGYPT'),
('GHA', 'GHANA'),
('HND', 'HONDURAS'),
('ZWE', 'ZIMBABWE'),
('VNM', 'VIETNAM'),
('ECU', 'ECUADOR'),
('UZB', 'UZBEKISTAN'),
('UKR', 'UKRAINA'),
('AS', 'ASEAN');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
