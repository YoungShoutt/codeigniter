-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2019 at 11:35 AM
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
  `cost_import_kode` varchar(10) NOT NULL DEFAULT '',
  `cost_import_keterangan` varchar(50) DEFAULT NULL,
  `LastUpdate` date NOT NULL,
  `username` varchar(20) NOT NULL,
  `FlagDeleted` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cost_import`
--

INSERT INTO `cost_import` (`cost_import_kode`, `cost_import_keterangan`, `LastUpdate`, `username`, `FlagDeleted`) VALUES
('001', 'sadk', '2019-10-07', 'admin', '1'),
('002', 'asd', '2019-10-07', 'admin', '1'),
('003', 'asdsa omaewa mo', '2019-10-07', 'admin', '0'),
('004', 'kklsadccc', '2019-10-08', 'admin', '0'),
('005', 'rudal gila ss', '2019-10-08', 'admin', '1'),
('009', 'server oke', '2019-10-08', 'admin', '0'),
('010', 'roti kono', '2019-10-08', 'admin', '1'),
('2E321', 'SAD', '2019-10-08', 'admin', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cost_import`
--
ALTER TABLE `cost_import`
  ADD PRIMARY KEY (`cost_import_kode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
