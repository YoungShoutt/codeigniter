-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2019 at 12:57 PM
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
-- Table structure for table `t_chemical`
--

CREATE TABLE `t_chemical` (
  `kdChemical` varchar(10) NOT NULL DEFAULT '',
  `nmChemical` varchar(50) DEFAULT NULL,
  `LastUpdate` date NOT NULL,
  `username` varchar(20) NOT NULL,
  `FlagDeleted` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_chemical`
--

INSERT INTO `t_chemical` (`kdChemical`, `nmChemical`, `LastUpdate`, `username`, `FlagDeleted`) VALUES
('D001', 'ol', '2019-10-09', 'admin', '1'),
('D002', 'op', '2019-10-08', 'admin', '1'),
('D003', 'SAD ok', '2019-10-09', 'admin', '1'),
('D004', 'CCC', '2019-10-09', 'admin', '1'),
('D005', 'oke bro', '2019-10-09', 'admin', '0'),
('D00S', 'doosss', '2019-10-08', 'admin', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_chemical`
--
ALTER TABLE `t_chemical`
  ADD PRIMARY KEY (`kdChemical`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
