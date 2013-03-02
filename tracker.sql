-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 02, 2013 at 02:27 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE IF NOT EXISTS `faculties` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `contactno` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `userid` int(5) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `name`, `contactno`, `email`, `userid`, `createdAt`) VALUES
('1000001', 'Amparo Vallestero', '09123456789', 'amparo.vallestero@yahoo.com', NULL, NULL),
('1000002', 'Daniel Dasig Jr', '09447890123', 'daniel.dazigjr@gmail.com', NULL, NULL),
('1000003', 'Brandon Sibbaluca', '09234563987', 'brandon.sibbaluca@gmail.com', NULL, NULL),
('1000004', 'Mengvi Gatpandan', '09346547890', 'menvgi.gatpandan@yahoo.com', NULL, NULL),
('1000005', 'Fely Ordona', '09154466778', 'fely.ordona@yahoo.com', NULL, NULL),
('1000006', 'Nelly De Leon', '09991122334', 'nelly.deleon@yahoo.com', NULL, NULL),
('1000007', 'Jry Marie Reyes', '09216587432', 'jrymarie.reyes@gmail.com', NULL, NULL),
('1000008', 'Mary Ann Taduyo', '09348899001', 'maryann.taduyo@yahoo.com', NULL, NULL),
('1000009', 'Arlene Valderama', '09449092323', 'arlene.valderama@yahoo.com', NULL, NULL),
('1000010', 'Mary Ellaine Cervantes', '09783434676', 'maryellaine.cervantes@yahoo.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `id` varchar(10) NOT NULL,
  `Type` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `Type`) VALUES
('H301', 'Lecture Room'),
('H302', 'Lecture Room'),
('H311', 'Laboratory Room'),
('H312', 'Laboratory Room'),
('H401', 'Lecture Room'),
('H402', 'Lecture Room'),
('H403', 'Lecture Room'),
('H404', 'Lecture Room'),
('H405', 'Lecture Room'),
('H406', 'Lecture Room'),
('H407', 'Lecture Room'),
('H408', 'Lecture Room'),
('H409', 'Lecture Room'),
('H410', 'Lecture Room'),
('H411', 'Laboratory Room'),
('H412', 'Laboratory Room');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE IF NOT EXISTS `schedules` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `subjectid` varchar(10) DEFAULT NULL,
  `sectionid` varchar(10) DEFAULT NULL,
  `facultyid` varchar(10) DEFAULT NULL,
  `room` varchar(10) DEFAULT NULL,
  `day` varchar(10) DEFAULT NULL,
  `start` time DEFAULT NULL,
  `end` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `subjectid`, `sectionid`, `facultyid`, `room`, `day`, `start`, `end`) VALUES
(1, 'CSC15', '301I', '1000001', 'H301', 'M/W', '07:00:00', '08:30:00'),
(2, 'H302', 'ITC12', '1000002', 'H302', 'T/TH', '07:00:00', '08:30:00'),
(3, 'ITC15', 'H303I', '1000003', 'H311', 'M/W', '09:00:00', '10:30:00'),
(4, 'ITC16', '304I', '1000004', 'H312', 'T/TH', '09:00:00', '10:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE IF NOT EXISTS `sections` (
  `id` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`) VALUES
('301I'),
('302I'),
('303I'),
('304I'),
('305I');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` varchar(10) NOT NULL,
  `subjectdesc` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subjectdesc`) VALUES
('CSC 15', 'INTRO INFO TECH'),
('ITC 12', 'IBM TRACK MOD2'),
('ITC 15', 'IBM TRACK MOD3'),
('ITC 16', 'DISCRETE STRUC'),
('ITC 18', 'ADV PROGRAMING'),
('ITC 21', 'ADV DB MGT'),
('ITC 22', 'DATABASE MGT'),
('ITC 23', 'IT ELEC 2'),
('ITC 25', 'INTRO TO PROG'),
('ITC 30', 'IBM TRACK MOD4'),
('ITC 33', 'OOP 1'),
('ITC 38', 'Network Mgt'),
('ITC 39', 'COMP SYS ORG'),
('ITC 51', 'SYS ANAL DESGN1'),
('ITC 56', 'IT PROF ETHICS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `type`, `createdAt`) VALUES
(1, 'admin', 'd033e22ae348aeb5660f', 'admin', '2013-03-02 19:29:56'),
(2, 'operator', 'fe96dd39756ac41b7428', 'operator', '2013-03-02 19:29:56'),
(3, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', '2013-03-02 19:31:59'),
(4, '11-234276', '79fa8cdf12a73e3c60778cc43aabec63817c5f90', 'student', '2013-03-02 20:00:01'),
(5, '1000001', 'f1720daf89ee3de12e77dd69c70852839e12714f', 'faculty', '2013-03-02 19:33:24'),
(6, '1000002', '6fb4f7fc86976a2579632bd9896e8c17e077c1ed', 'faculty', '2013-03-02 19:33:24'),
(7, '1000003', 'b4ab3657d24f045fb9c9fdb70d635024a1be32ef', 'faculty', '2013-03-02 19:34:23'),
(8, '1000004', 'bcafff211289a3430cfe1a02523c0dafab43102f', 'faculty', '2013-03-02 19:34:23'),
(9, '1000005', '3fef159cafe7d3fceea70eddabe30c8398950425', 'faculty', '2013-03-02 19:35:14'),
(10, '1000006', 'd6a4ade38549b45fb6f6a635e83ba11609812072', 'faculty', '2013-03-02 19:35:14'),
(11, '1000007', '620afa848142cd62b8db370ff896783b91ffb609', 'faculty', '2013-03-02 19:36:18'),
(12, '1000008', '313c565bf8eff2fc8be4906b5616ee6b3491701e', 'faculty', '2013-03-02 19:36:18'),
(13, '1000009', 'd8bf0b292eb01f794fde6b05ee7c28033a9989b0', 'faculty', '2013-03-02 19:37:25'),
(14, '1000010', '66e966d445ef4277e7b76fa380a786913ac4571f', 'faculty', '2013-03-02 19:37:25');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faculties`
--
ALTER TABLE `faculties`
  ADD CONSTRAINT `faculties_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
