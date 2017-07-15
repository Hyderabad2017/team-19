-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2017 at 12:43 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learningcurve`
--

-- --------------------------------------------------------

--
-- Table structure for table `demographics`
--

CREATE TABLE `demographics` (
  `Student_Id` varchar(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Age` int(10) NOT NULL,
  `Parental_Status` text NOT NULL,
  `Family_Type` text NOT NULL,
  `Siblings` int(10) NOT NULL,
  `Birth_Order` int(10) NOT NULL,
  `Parent_Education` text NOT NULL,
  `Family_Income` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demographics`
--

INSERT INTO `demographics` (`Student_Id`, `Name`, `Gender`, `Age`, `Parental_Status`, `Family_Type`, `Siblings`, `Birth_Order`, `Parent_Education`, `Family_Income`) VALUES
('st1scl1', 'Harsha', 'Male', 14, 'Married', 'Nuclear', 3, 3, 'Educated', '100000'),
('st2scl1', 'Himani', 'Female', 13, 'Married', 'Atomic', 2, 1, 'Educated', '300000'),
('st3cl4', 'Soumya', 'Femal', 13, 'Married', 'Atomic', 3, 2, 'unEducated ', '45000'),
('st3scl2', 'Neha', 'Female', 10, 'Married', 'Atomic', 1, 2, 'UnEducated\r\n', '50000'),
('st4scl2', 'Akilesh', 'Male', 15, 'Married', 'Joint', 2, 2, 'Educated', '40000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demographics`
--
ALTER TABLE `demographics`
  ADD PRIMARY KEY (`Student_Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
