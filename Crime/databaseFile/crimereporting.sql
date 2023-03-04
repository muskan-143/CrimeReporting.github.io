-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 04:24 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(30) NOT NULL,
  `Name` int(200) NOT NULL,
  `Password` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Name`, `Password`) VALUES
(1, 0, 0);

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
  `State` varchar(30) DEFAULT NULL,
  `District` varchar(25) DEFAULT NULL,
  `userId` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`Id`, `Name`, `Contact`, `Email`, `CrimeType`, `Date`, `Evidence`, `description`, `State`, `District`, `userId`) VALUES
(10, 'abc', '1234567891', 'abc@gmail.com', 'Kidnapping', '2023-02-10', '', 'Crime done by 12 year old boy', 'Maharashtra', 'Mumbai', 1),
(11, 'abc', '1234567891', 'abc@gmail.com', 'Homicide(murder)', '2023-01-31', '', 'Murder of 3 year girl\r\n', 'Maharashtra', 'Mumbai', 1),
(12, 'Kajal Sharma', '8108732333', 'kajal@gmail.com', 'Theft', '2023-02-10', '', 'Thef', 'Maharashtra', 'Mumbai', 6);

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
-- Table structure for table `fir`
--

CREATE TABLE `fir` (
  `Id` int(10) NOT NULL,
  `reportDate` varchar(10) NOT NULL,
  `reportTime` varchar(5) NOT NULL,
  `incidentDate` varchar(10) NOT NULL,
  `incidentTime` varchar(6) NOT NULL,
  `officerId` int(12) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `middleName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `incidentLocation` varchar(20) NOT NULL,
  `incidentDetails` varchar(20) NOT NULL,
  `suspectCharge` varchar(50) NOT NULL,
  `aressted` varchar(20) NOT NULL,
  `suspecfirstName` varchar(20) NOT NULL,
  `suspectlastName` varchar(20) NOT NULL,
  `comments` varchar(30) NOT NULL,
  `AGE` varchar(5) NOT NULL,
  `CrimeType` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fir`
--

INSERT INTO `fir` (`Id`, `reportDate`, `reportTime`, `incidentDate`, `incidentTime`, `officerId`, `firstName`, `middleName`, `lastName`, `incidentLocation`, `incidentDetails`, `suspectCharge`, `aressted`, `suspecfirstName`, `suspectlastName`, `comments`, `AGE`, `CrimeType`) VALUES
(1, '22/03/2023', '12:03', '20/03/2023', '15:07', 1, 'Muskan', 'Ranjeet', 'aherwar', 'chembur', 'On 20 march the crim', 'Yes, the suspect has', 'No', 'John', 'Bright', 'Mark', 'Inves', '23'),
(2, '10/02/2023', '01:12', '05/02/2023', '13:08', 0, '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `policestation`
--

CREATE TABLE `policestation` (
  `Id` int(10) NOT NULL,
  `Station` varchar(30) NOT NULL,
  `OfficerIncharge` varchar(30) NOT NULL,
  `Contact` varchar(30) NOT NULL,
  `District` varchar(30) NOT NULL,
  `State` varchar(30) NOT NULL,
  `officerInchargeId` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `policestation`
--

INSERT INTO `policestation` (`Id`, `Station`, `OfficerIncharge`, `Contact`, `District`, `State`, `officerInchargeId`) VALUES
(3, 'Thane Police station', 'Rohan', '8108477460', 'Mumbai', 'Maharashtra', '3'),
(4, 'Chembur Police station', 'Zoha', '7843333502', 'Thane', 'Maharashtra', '4'),
(6, 'Dadar Police station', 'Janvi', '7232338220', 'Dadar', 'Maharashtra', '5');

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
(1, 'abc', 'abc@gmail.com', '1234567891', 40, 'FEMALE', 'abc'),
(2, 'Muskan', 'muskan@gmail.com', '12343423', 23, 'Female', 'muskan'),
(3, 'sony', '1@gmail.com', '123224', 23, 'female', 'sony'),
(4, 'sony', '1@gmail.com', '123224', 23, 'female', 'sony'),
(5, '', '', '', 0, '', ''),
(6, 'Kajal Sharma', 'kajal@gmail.com', '8108732333', 23, 'FEMALE', 'kajal');

-- --------------------------------------------------------

--
-- Table structure for table `updateofficer`
--

CREATE TABLE `updateofficer` (
  `Id` int(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Age` int(5) NOT NULL,
  `District` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `ZipCode` int(20) NOT NULL,
  `Contact` varchar(11) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `middleName` varchar(15) DEFAULT NULL,
  `lastName` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `updateofficer`
--

INSERT INTO `updateofficer` (`Id`, `Name`, `Email`, `Password`, `Age`, `District`, `State`, `ZipCode`, `Contact`, `Gender`, `middleName`, `lastName`) VALUES
(3, 'Rohan', 'rohan@gmail.com', 'rohan', 23, 'Mumbai', 'Maharashtra', 40061, '8108477460', 'Male', 'Ashok', 'Aherwar'),
(4, 'Zoha', 'zoha@gmail.com', 'zoha', 34, 'Thane', 'Maharashtra', 40071, '7843333502', 'Female', 'Baker', 'Mark'),
(5, 'Janvi', 'janvi@gmail.com', 'janvi', 35, 'Dadar', 'Maharashtra', 400028, '7232338220', 'Female', 'Johner', 'Mark');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

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
-- Indexes for table `fir`
--
ALTER TABLE `fir`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `policestation`
--
ALTER TABLE `policestation`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `registerationform`
--
ALTER TABLE `registerationform`
  ADD PRIMARY KEY (`Register Id`);

--
-- Indexes for table `updateofficer`
--
ALTER TABLE `updateofficer`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `Id` bigint(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `criminal details`
--
ALTER TABLE `criminal details`
  MODIFY `Id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fir`
--
ALTER TABLE `fir`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `policestation`
--
ALTER TABLE `policestation`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registerationform`
--
ALTER TABLE `registerationform`
  MODIFY `Register Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `updateofficer`
--
ALTER TABLE `updateofficer`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
