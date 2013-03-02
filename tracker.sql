-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 02, 2013 at 01:38 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tracker`
--

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
  PRIMARY KEY (`id`),
  KEY `subjectid` (`subjectid`),
  KEY `sectionid` (`sectionid`),
  KEY `facultyid` (`facultyid`),
  KEY `room` (`room`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `schedules`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_ibfk_8` FOREIGN KEY (`room`) REFERENCES `rooms` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `schedules_ibfk_5` FOREIGN KEY (`subjectid`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schedules_ibfk_6` FOREIGN KEY (`sectionid`) REFERENCES `sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schedules_ibfk_7` FOREIGN KEY (`facultyid`) REFERENCES `faculties` (`id`) ON DELETE SET NULL;
