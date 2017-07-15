-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2017 at 01:11 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentques`
--

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
