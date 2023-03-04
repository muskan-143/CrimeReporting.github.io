-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2023 at 02:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crimereporting`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `Id` bigint(250) NOT NULL,
  `Name` varchar(39) NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `CrimeType` varchar(40) NOT NULL,
  `Date` date NOT NULL,
  `Evidence` longblob NOT NULL,
  `description` varchar(500) NOT NULL,
  `Image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`Id`, `Name`, `Contact`, `Email`, `CrimeType`, `Date`, `Evidence`, `description`, `Image`) VALUES
(1, 'Muskan', '1234567890', 'muskanaherwar@gmail.com', 'Homicide(murder)', '2022-10-21', 0x696d6167652e6a7067, 'asfjsfhsfdsflds', 0x696d6167652e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `criminal details`
--

CREATE TABLE `criminal details` (
  `Id` int(250) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `reportDate` date NOT NULL,
  `incidentDate` date NOT NULL,
  `position` varchar(10) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `middleName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `criminal details`
--

INSERT INTO `criminal details` (`Id`, `Name`, `Address`, `city`, `state`, `reportDate`, `incidentDate`, `position`, `firstName`, `middleName`, `lastName`) VALUES
(1, 'abc', 'xyz', 'mumbai', 'state1', '2022-11-01', '2022-10-29', 'IPS', 'muskan', 'Ranjeet', 'aherwar');

-- --------------------------------------------------------

--
-- Table structure for table `registerationform`
--

CREATE TABLE `registerationform` (
  `Register Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Contact` varchar(11) NOT NULL,
  `Age` int(3) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registerationform`
--

INSERT INTO `registerationform` (`Register Id`, `Name`, `Email`, `Contact`, `Age`, `Gender`, `Password`) VALUES
(1, 'abc', 'abc@gmail.com', '1234567891', 40, 'FEMALE', 'abc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `criminal details`
--
ALTER TABLE `criminal details`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `registerationform`
--
ALTER TABLE `registerationform`
  ADD PRIMARY KEY (`Register Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `Id` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `criminal details`
--
ALTER TABLE `criminal details`
  MODIFY `Id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registerationform`
--
ALTER TABLE `registerationform`
  MODIFY `Register Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
