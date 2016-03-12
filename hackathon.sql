-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2016 at 07:11 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `busroutemaster`
--

CREATE TABLE `busroutemaster` (
  `busId` varchar(10) NOT NULL,
  `startPoint` varchar(50) NOT NULL,
  `wayPoints` varchar(500) NOT NULL,
  `endPoint` varchar(50) NOT NULL,
  `departureTime` time NOT NULL,
  `arrivalTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `busroutemaster`
--

INSERT INTO `busroutemaster` (`busId`, `startPoint`, `wayPoints`, `endPoint`, `departureTime`, `arrivalTime`) VALUES
('BUS1', 'Infosys', 'Manimajra,Sector 7,Sector 4', 'Sector 17', '08:21:08', '09:24:00'),
('BUS2', 'Infosys', 'Sector 7', 'Mohali', '08:17:00', '10:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `bustrackmaster`
--

CREATE TABLE `bustrackmaster` (
  `busId` varchar(10) NOT NULL,
  `startPoint` varchar(50) NOT NULL,
  `route` varchar(500) NOT NULL,
  `endPoint` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='It will contain login information';

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `role`) VALUES
('gaurav_gupta75@infosys.com', '8699988500', 'administrator'),
('ajay_bhardwaj01@infosys.com', '8699010789', 'user'),
('abc', 'abc', 'administrator'),
('abc@abc.com', 'abc', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `routemaster`
--

CREATE TABLE `routemaster` (
  `routeId` varchar(10) NOT NULL,
  `route` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routemaster`
--

INSERT INTO `routemaster` (`routeId`, `route`) VALUES
('Route 1', 'Infosys Chandigarh; Sector 28, Chandigarh;\r\nSector 22, Chandigarh;\r\nSector 35, Chandigarh;\r\nSector 36, Chandigarh;\r\nSector 37, Chandigarh;\r\nSector 38, Chandigarh'),
('Route 2', 'Infosys Chandigarh;Sector 7, Panchkula;\r\nSector 8, Panchkula;\r\nSector 16, Panchkula;\r\nSector 12, Panchkula;\r\nSector 21, Panchkula;\r\nSector 25, Panchkula');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `busroutemaster`
--
ALTER TABLE `busroutemaster`
  ADD PRIMARY KEY (`busId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
