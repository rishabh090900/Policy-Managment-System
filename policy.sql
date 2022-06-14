-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2020 at 02:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `policy`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `Agent_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Agent_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Agent_Address` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Agent_pincode` bigint(20) NOT NULL,
  `Agent_Mob` bigint(20) NOT NULL,
  `Agent_Email` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`Agent_id`, `Agent_name`, `Agent_Address`, `Agent_pincode`, `Agent_Mob`, `Agent_Email`) VALUES
('rdefsfffff', 'eafrsrfe', 'Manoj kumar and company', 301042, 9352206326, 'saurabhsinghal672@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `Pol_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cusid` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Pay_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Agent_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `issue_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`Pol_id`, `cusid`, `Pay_id`, `Agent_id`, `issue_date`) VALUES
('rrgfr', 'dfgdf', 'hgkjh', 'rdefsfffff', '0045-02-15'),
('rrgfr', 'dfgdf', 'hgkjhv', 'rdefsfffff', '0045-02-15'),
('rrgfrd', 'dfgdf', 'hgkjhv1', 'rdefsfffff', '0054-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Com_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Com_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Com_Address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Com_regno` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `com_type` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Com_id`, `Com_name`, `Com_Address`, `Com_regno`, `com_type`) VALUES
('Manoj ', 'Manoj Kumar and company', 'Manoj kumar and company, Harsora road , Bansur', 'Manoj Kuma', 'Government');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cusid` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cusname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `cusdob` date NOT NULL,
  `cusaddress` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cusmob` bigint(10) NOT NULL,
  `cusemail` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cusid`, `cusname`, `cusdob`, `cusaddress`, `cusmob`, `cusemail`) VALUES
('dfgdf12', 'Manoj Kumar Gupta', '0004-02-15', 'Manoj kumar and company, Harsora road , Bansur', 9352206326, 'saurabhsinghal672@gmail.com'),
('dfgdf2', 'Manoj Kumar Gupta', '0541-12-04', 'Manoj kumar and company, Harsora road , Bansur', 9352206323, 'saurabhsinghal672@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Pay_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Pol_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Pay_time` datetime NOT NULL DEFAULT current_timestamp(),
  `Pay_amount` bigint(20) NOT NULL,
  `Pay_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Pay_id`, `Pol_id`, `Pay_time`, `Pay_amount`, `Pay_type`) VALUES
('hgkjhv', 'jhhjklknb', '2020-04-19 19:52:00', 12545, 'Cash'),
('r45g', '4rt4', '2020-04-03 14:14:00', 145645, 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `Pol_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Pol_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `policy_type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `policy_comp` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Pol_amount` int(10) NOT NULL,
  `Pol_time` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`Pol_id`, `Pol_name`, `policy_type`, `policy_comp`, `Pol_amount`, `Pol_time`) VALUES
('aefesf', 'rfggd', 'Life', 'Tata', 65436, 512),
('aefesf1', 'sefsefsef', 'Life', 'Tata', 12, 666666614),
('aefesf12', 'sefsefsef', 'Life', 'Tata', 12, 666666614),
('fesef', 'srfrdg', 'Life', 'Tata', 3211, 12),
('fesef3', 'srfrdg', 'Life', 'Tata', 3211, 12),
('grfusrfr', 'fse', 'seff', 'sefes', 5454, 12),
('grhgr', 'srfrdg', 'Life', 'Tata', 15421, 12),
('grhgrp', 'srfrdg', 'Life', 'Tata', 15421, 12),
('grhgt', 'srfrdg', 'Life', 'Tata', 15421, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`Agent_id`);

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`Pay_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Com_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cusid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Pay_id`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`Pol_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
