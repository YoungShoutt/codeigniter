-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 11:28 PM
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
-- Table structure for table `th_inquiry`
--

CREATE TABLE `th_inquiry` (
  `Inquiy_No` varchar(10) NOT NULL,
  `Inquiry_RefNo` varchar(10) NOT NULL,
  `PoCustNumber` varchar(10) NOT NULL,
  `SoNumber` varchar(10) NOT NULL,
  `cdCust` varchar(10) NOT NULL,
  `DateReceived` date NOT NULL,
  `IdReceiver` varchar(10) NOT NULL,
  `InquiryDate` date NOT NULL,
  `PR_No` varchar(10) NOT NULL,
  `ValidityDate` date NOT NULL,
  `stsInquiry` varchar(2) NOT NULL,
  `Deskripsi` varchar(255) NOT NULL,
  `Remark` varchar(255) NOT NULL,
  `InquiryDeadLine` int(11) NOT NULL,
  `FlagDeleted` char(1) NOT NULL,
  `LastUpdate` datetime NOT NULL,
  `userName` varchar(10) NOT NULL,
  `IPAddress` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `th_inquiry`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `th_inquiry`
--
ALTER TABLE `th_inquiry`
  ADD PRIMARY KEY (`Inquiy_No`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
