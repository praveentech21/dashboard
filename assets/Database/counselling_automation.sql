-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2023 at 09:49 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `counselling_automation`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `Regno` char(10) NOT NULL,
  `Tenth` varchar(10) NOT NULL,
  `Inter` varchar(10) NOT NULL,
  `JeeMain` float NOT NULL,
  `Rank` int(8) NOT NULL,
  `Admission` varchar(10) NOT NULL,
  `Category` varchar(10) NOT NULL,
  `Photo` blob NOT NULL,
  `Goal` varchar(80) NOT NULL,
  `CareInter` varchar(80) NOT NULL,
  `Hobbies` varchar(80) NOT NULL,
  `Strenghts` varchar(80) NOT NULL,
  `Improve` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`Regno`, `Tenth`, `Inter`, `JeeMain`, `Rank`, `Admission`, `Category`, `Photo`, `Goal`, `CareInter`, `Hobbies`, `Strenghts`, `Improve`) VALUES
('21B91A6206', '88', '91.3', 2, 13909, 'A cat', 'general', 0x416d6d614e616e612e6a7067, 'Make All Happy', 'IT', 'Learing Technology', 'Shiva', 'Concentretly working and interting with friends');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `Regno` varchar(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Aplace` varchar(25) NOT NULL,
  `Adistrict` varchar(25) NOT NULL,
  `Astate` varchar(25) NOT NULL,
  `Pincode` varchar(10) NOT NULL,
  `Acity` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`Regno`, `Address`, `Aplace`, `Adistrict`, `Astate`, `Pincode`, `Acity`) VALUES
('21B91A6206', '1-149,thota ', 'tholeru,veeravasaram', 'west godavari', 'andhra pradesh', '534247', 'Bhimavarm');

-- --------------------------------------------------------

--
-- Table structure for table `interest`
--

CREATE TABLE `interest` (
  `Regno` char(10) NOT NULL,
  `BTech` varchar(10) NOT NULL,
  `Difficulties` varchar(10) NOT NULL,
  `influnceFriends` varchar(10) NOT NULL,
  `WastingTime` varchar(10) NOT NULL,
  `Studies` varchar(10) NOT NULL,
  `AttentionClass` varchar(10) NOT NULL,
  `AbsentsClass` varchar(10) NOT NULL,
  `InterestStudies` varchar(10) NOT NULL,
  `CareerPlanning` varchar(10) NOT NULL,
  `Stress` varchar(10) NOT NULL,
  `RelationShip` varchar(10) NOT NULL,
  `Anxiety` varchar(10) NOT NULL,
  `Trauma` varchar(10) NOT NULL,
  `SelfConfidence` varchar(10) NOT NULL,
  `HealthProblems` varchar(10) NOT NULL,
  `Anger` varchar(10) NOT NULL,
  `FamilyIssues` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `std_detls`
--

CREATE TABLE `std_detls` (
  `Regno` char(10) NOT NULL,
  `DOB` date NOT NULL,
  `Department` varchar(8) NOT NULL,
  `Batch` int(5) NOT NULL,
  `Gender` int(2) NOT NULL,
  `Smobile` varchar(15) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Pmobile` varchar(15) NOT NULL,
  `Poccp` varchar(50) NOT NULL,
  `Caste` varchar(10) NOT NULL,
  `Community` varchar(30) NOT NULL,
  `Religion` varchar(10) NOT NULL,
  `Income` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std_detls`
--

INSERT INTO `std_detls` (`Regno`, `DOB`, `Department`, `Batch`, `Gender`, `Smobile`, `Fname`, `Pmobile`, `Poccp`, `Caste`, `Community`, `Religion`, `Income`) VALUES
('21B91A6206', '2003-11-21', 'CSD', 2025, 0, '9052727402', 'Trimurthulu', '7731038090', 'Father', 'All', 'All', 'Hindu', '400000');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `regno` char(10) NOT NULL,
  `password` varchar(25) NOT NULL,
  `random` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sname`, `email`, `regno`, `password`, `random`) VALUES
('Shiva Bhavani', 'ravikumar_csd@srkrec.edu.in', '21B91A6206', 'Amma', 'dataupdatedshiva');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`Regno`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`Regno`);

--
-- Indexes for table `interest`
--
ALTER TABLE `interest`
  ADD PRIMARY KEY (`Regno`);

--
-- Indexes for table `std_detls`
--
ALTER TABLE `std_detls`
  ADD PRIMARY KEY (`Regno`),
  ADD UNIQUE KEY `Smobile` (`Smobile`,`Pmobile`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`regno`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
