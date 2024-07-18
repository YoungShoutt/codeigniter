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
-- Table structure for table `t_typerawmaterial`
--

CREATE TABLE `t_typerawmaterial` (
  `kdTypeRawMaterial` varchar(10) DEFAULT NULL,
  `ket` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_typerawmaterial`
--

INSERT INTO `t_typerawmaterial` (`kdTypeRawMaterial`, `ket`) VALUES
('001', 'ait guys'),
('928', 'asdsa'),
('003', 'Molding'),
('192', 'asd'),
('535', 'asjdhk'),
('871', 'and'),
('787', 'hbds'),
('12', 'asd'),
('477', 'asd'),
('226', 'ajcash'),
('217', 'sad');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
