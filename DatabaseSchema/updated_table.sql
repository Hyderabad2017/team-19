-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2017 at 02:14 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pqrzzz`
--

-- --------------------------------------------------------

--
-- Table structure for table `classinventory`
--

DROP TABLE IF EXISTS `classinventory`;
CREATE TABLE IF NOT EXISTS `classinventory` (
  `SCID` int(11) NOT NULL,
  `STID` int(11) NOT NULL,
  `dataUploaded` date NOT NULL,
  `Q1` tinyint(1) NOT NULL,
  `Q2` tinyint(1) NOT NULL,
  `Q3` tinyint(1) NOT NULL,
  `Q4` tinyint(1) NOT NULL,
  `Q5` tinyint(1) NOT NULL,
  `Q6` tinyint(1) NOT NULL,
  `Q7` tinyint(1) NOT NULL,
  `Q8` tinyint(1) NOT NULL,
  `Q9` tinyint(1) NOT NULL,
  `Q10` tinyint(1) NOT NULL,
  `Q11` tinyint(1) NOT NULL,
  `Q12` tinyint(1) NOT NULL,
  `Q13` tinyint(1) NOT NULL,
  `Q14` tinyint(1) NOT NULL,
  `Q15` tinyint(1) NOT NULL,
  `Q16` tinyint(1) NOT NULL,
  `Q17` tinyint(1) NOT NULL,
  `Q18` tinyint(1) NOT NULL,
  `Q19` tinyint(1) NOT NULL,
  `Q20` tinyint(1) NOT NULL,
  `Q21` tinyint(1) NOT NULL,
  `Q22` tinyint(1) NOT NULL,
  `Q23` tinyint(1) NOT NULL,
  `Q24` tinyint(1) NOT NULL,
  `Q25` tinyint(1) NOT NULL,
  PRIMARY KEY (`SCID`,`STID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classinventory`
--

INSERT INTO `classinventory` (`SCID`, `STID`, `dataUploaded`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`, `Q10`, `Q11`, `Q12`, `Q13`, `Q14`, `Q15`, `Q16`, `Q17`, `Q18`, `Q19`, `Q20`, `Q21`, `Q22`, `Q23`, `Q24`, `Q25`) VALUES
(1900, 19, '2017-07-04', 1, 0, 1, 1, 0, 1, 1, 0, 1, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0),
(1912, 13, '2017-07-02', 1, 1, 1, 1, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 0, 0, 0, 1, 1, 1, 0, 0),
(1923, 110, '2017-06-21', 1, 1, 0, 0, 1, 1, 0, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `demographics`
--

DROP TABLE IF EXISTS `demographics`;
CREATE TABLE IF NOT EXISTS `demographics` (
  `SCID` int(11) NOT NULL,
  `STID` int(11) NOT NULL,
  `TID` int(11) NOT NULL,
  `SNAME` varchar(15) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `Age` int(11) NOT NULL,
  `ParentalStatus` varchar(15) NOT NULL,
  `FamilyType` varchar(15) NOT NULL,
  `Siblings` int(11) NOT NULL,
  `BirthOrder` int(11) NOT NULL,
  `ParentEducation` varchar(15) NOT NULL,
  `FamilyIncome` int(11) NOT NULL,
  PRIMARY KEY (`SCID`,`STID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demographics`
--

INSERT INTO `demographics` (`SCID`, `STID`, `TID`, `SNAME`, `Gender`, `Age`, `ParentalStatus`, `FamilyType`, `Siblings`, `BirthOrder`, `ParentEducation`, `FamilyIncome`) VALUES
(1900, 19, 18, 'Siri', 'Female', 18, 'Both', 'Nuclear', 1, 1, 'Primary', 1900),
(1912, 13, 12, 'Jay', 'Male', 15, 'Both', 'Nuclear', 1, 2, 'Secondary', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `dlsas`
--

DROP TABLE IF EXISTS `dlsas`;
CREATE TABLE IF NOT EXISTS `dlsas` (
  `SCID` int(11) NOT NULL,
  `STID` int(11) NOT NULL,
  `IO` int(11) NOT NULL,
  `DP` int(11) NOT NULL,
  `TI` int(11) NOT NULL,
  `MC` int(11) NOT NULL,
  `UI` int(11) NOT NULL,
  `OS` int(11) NOT NULL,
  PRIMARY KEY (`SCID`,`STID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dlsas`
--

INSERT INTO `dlsas` (`SCID`, `STID`, `IO`, `DP`, `TI`, `MC`, `UI`, `OS`) VALUES
(1900, 19, 1, 2, 3, 4, 5, 2),
(1912, 13, 2, 2, 3, 3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `invquestion`
--

DROP TABLE IF EXISTS `invquestion`;
CREATE TABLE IF NOT EXISTS `invquestion` (
  `Question_no` text NOT NULL,
  `Question_text` text NOT NULL,
  PRIMARY KEY (`Question_no`(10))
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invquestion`
--

INSERT INTO `invquestion` (`Question_no`, `Question_text`) VALUES
('Q1', 'Students enjoy their schoolwork in my class'),
('Q2', 'Students are always fighting with each other'),
('Q3', 'Students often race to see who can finish first'),
('Q4', 'In our class the work is hard to do'),
('Q5', 'In my class everyone is my friend'),
('Q6', 'Some students are not happy in class'),
('Q7', 'Some of the students in our class are mean'),
('Q8', 'Most students want their work '),
('Q9', 'Most students can do their schoolwork'),
('Q10', 'Some people in my class are not my friends'),
('Q11', 'Students seem to like the class'),
('Q12', 'Many students in our class like to fight'),
('Q13', 'Some students feel bad when they dont do well\r\n\r\n'),
('Q14', 'Schoolwork is hard to do'),
('Q15', 'This class is fun'),
('Q16', 'Students in our class fight a lot\r\n'),
('Q17', 'Only the smarter students can do work'),
('Q18', 'Some dont like the class\r\n'),
('Q19', 'Students like their friends'),
('Q20', 'Students mostly do homework');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

DROP TABLE IF EXISTS `schools`;
CREATE TABLE IF NOT EXISTS `schools` (
  `SCID` int(11) NOT NULL,
  `SName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`SCID`, `SName`) VALUES
(1900, '19'),
(1912, '13');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `SCID` int(11) NOT NULL,
  `TID` int(11) NOT NULL,
  `TName` varchar(20) NOT NULL,
  KEY `SCID` (`SCID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`SCID`, `TID`, `TName`) VALUES
(1900, 19, 'Mahesh'),
(1912, 17, 'Suresh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
