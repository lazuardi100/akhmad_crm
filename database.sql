-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2022 at 04:13 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dnet_admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `ACCOUNT`
--

CREATE TABLE `ACCOUNT` (
  `ID_USER` int(11) NOT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `PASS` varchar(200) DEFAULT NULL,
  `ID_ROLE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ACCOUNT`
--

INSERT INTO `ACCOUNT` (`ID_USER`, `EMAIL`, `PASS`, `ID_ROLE`) VALUES
(1, 'admin@demo.com', '$2a$10$q7YEZaW4eEeVJUfexh0Xr.3wkr4O3.KDXkg.QV6.ztmghKxEfuLKG', 1),
(2, 'manager@demo.com', '$2a$10$q7YEZaW4eEeVJUfexh0Xr.3wkr4O3.KDXkg.QV6.ztmghKxEfuLKG', 2);

-- --------------------------------------------------------

--
-- Table structure for table `CUSTOMER`
--

CREATE TABLE `CUSTOMER` (
  `ID_CUSTOMER` int(11) NOT NULL,
  `ID_STATUS` int(11) NOT NULL,
  `ID_PRODUCT` int(11) DEFAULT 0,
  `NAMA_CUSTOMER` varchar(100) NOT NULL,
  `TELP` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `CUSTOMER`
--

INSERT INTO `CUSTOMER` (`ID_CUSTOMER`, `ID_STATUS`, `ID_PRODUCT`, `NAMA_CUSTOMER`, `TELP`) VALUES
(1, 2, 1, 'Lazu', ''),
(2, 2, 1, 'Zula', '028349234'),
(3, 2, 2, 'Ulza', '0812389131');

-- --------------------------------------------------------

--
-- Table structure for table `PRODUCT`
--

CREATE TABLE `PRODUCT` (
  `ID_PRODUCT` int(11) NOT NULL,
  `PRODUCT` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PRODUCT`
--

INSERT INTO `PRODUCT` (`ID_PRODUCT`, `PRODUCT`) VALUES
(1, 'Paket 1'),
(2, 'Paket 2');

-- --------------------------------------------------------

--
-- Table structure for table `ROLE_USER`
--

CREATE TABLE `ROLE_USER` (
  `ID_ROLE` int(11) NOT NULL,
  `ROLE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ROLE_USER`
--

INSERT INTO `ROLE_USER` (`ID_ROLE`, `ROLE`) VALUES
(1, 'Admin'),
(2, 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `STATUS_CUSTOMER`
--

CREATE TABLE `STATUS_CUSTOMER` (
  `ID_STATUS` int(11) NOT NULL,
  `STATUS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `STATUS_CUSTOMER`
--

INSERT INTO `STATUS_CUSTOMER` (`ID_STATUS`, `STATUS`) VALUES
(1, 'Calon Customer'),
(2, 'Customer'),
(3, 'Rejected Customer'),
(4, 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ACCOUNT`
--
ALTER TABLE `ACCOUNT`
  ADD PRIMARY KEY (`ID_USER`);

--
-- Indexes for table `CUSTOMER`
--
ALTER TABLE `CUSTOMER`
  ADD PRIMARY KEY (`ID_CUSTOMER`);

--
-- Indexes for table `PRODUCT`
--
ALTER TABLE `PRODUCT`
  ADD PRIMARY KEY (`ID_PRODUCT`);

--
-- Indexes for table `ROLE_USER`
--
ALTER TABLE `ROLE_USER`
  ADD PRIMARY KEY (`ID_ROLE`);

--
-- Indexes for table `STATUS_CUSTOMER`
--
ALTER TABLE `STATUS_CUSTOMER`
  ADD PRIMARY KEY (`ID_STATUS`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ACCOUNT`
--
ALTER TABLE `ACCOUNT`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `CUSTOMER`
--
ALTER TABLE `CUSTOMER`
  MODIFY `ID_CUSTOMER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `PRODUCT`
--
ALTER TABLE `PRODUCT`
  MODIFY `ID_PRODUCT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ROLE_USER`
--
ALTER TABLE `ROLE_USER`
  MODIFY `ID_ROLE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `STATUS_CUSTOMER`
--
ALTER TABLE `STATUS_CUSTOMER`
  MODIFY `ID_STATUS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
