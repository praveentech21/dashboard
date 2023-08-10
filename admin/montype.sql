-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 08:19 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `montype`
--

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `sname` varchar(30) NOT NULL,
  `regno` varchar(15) NOT NULL,
  `deptm` varchar(11) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `accur` float DEFAULT NULL,
  `speed` float DEFAULT NULL,
  `status` int(3) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`sname`, `regno`, `deptm`, `mobile`, `accur`, `speed`, `status`) VALUES
('Suresh', '12345', 'CSD', '9866600002', 89, 89, 1),
('Shiva Bhavani', '21B91A6201', 'CSD', '9866892958', 75, 45, 1),
('Ganesh', '21B91A6202', 'CSD', '7731038090', 85, 35, 1),
('Anusha', '21B91A6203', 'CSD', '9866892951', 75, 35, 1),
('Shiva', '21B91A6206', 'CSD', '9052727402', 85, 45, 1),
('Bhavani', '21B91A6207', 'CSD', '9866892957', 90, 50, 1),
('Bhanu', '21B91A6208', 'CSD', '9866892956', 95, 45, 1),
('puneeth', '21B91A6232', 'CSD', '787987798', 90, 44, 1),
('Revathi', '21B91A6238', 'CSD', '9392695457', 95, 60, 1),
('Ganga', '21B91A6275', 'CSD', '7985', 65, 75, 1),
('Swecha', '21B91A6278', 'CSD', '9052323621', 85, 46, 1),
('rama', '23', 'sd', '132', 0, 0, 0),
('Pavan', '5234', 'csd', '6544654', 96, 12, 1),
('fklsdfgsfl', '69y', 'hui', '654564', 95, 60, 1),
('jg', 'b', 'kjgi', '5', 52, 57, 1),
('jeg', 'uyf', 'jhgyuf', '4564', 75, 48, 1);

-- --------------------------------------------------------

--
-- Table structure for table `prizes`
--

CREATE TABLE `prizes` (
  `sname` varchar(30) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `score` int(4) NOT NULL,
  `disc` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prizes`
--

INSERT INTO `prizes` (`sname`, `dept`, `score`, `disc`) VALUES
('Shiva Bhavani', 'CSD', 75, 25),
('Ganesh', 'CSD', 69, 23),
('Anusha', 'CSD', 65, 22),
('puneeth', 'CSD', 80, 27),
('Ganga', 'CSD', 101, 34),
('jeg', 'jhgyuf', 78, 26);

-- --------------------------------------------------------

--
-- Table structure for table `winners`
--

CREATE TABLE `winners` (
  `sname` varchar(30) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `score` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `winners`
--

INSERT INTO `winners` (`sname`, `dept`, `score`) VALUES
('Shiva', 'CSD', 79),
('Bhavani', 'CSD', 86),
('Bhanu', 'CSD', 83),
('Revathi', 'CSD', 98),
('Swecha', 'CSD', 80),
('Suresh', 'CSD', 125),
('fklsdfgsfl', 'hui', 98);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`regno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
