-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 04, 2016 at 03:45 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `exss`
--

CREATE TABLE IF NOT EXISTS `exss` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `fname` varchar(400) NOT NULL,
  `code` varchar(400) NOT NULL,
  `credit` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `exss`
--

INSERT INTO `exss` (`id`, `fname`, `code`, `credit`) VALUES
(1, 'HOTEL BILLS', '101', ''),
(2, 'GRADUATION', '102', ''),
(3, 'PLANTING DAY', '103', ''),
(4, 'DRAWINGS', '104', ''),
(5, 'STAMPS', '105', ''),
(6, 'SCHOLARSHIP', '106', ''),
(7, 'LOAN REFUND', '107', ''),
(8, 'SPORT', '108', ''),
(9, 'DISPENSORY', '109', ''),
(10, 'BOOKS', '110', ''),
(11, 'MISCELANOUS', '111', ''),
(12, 'LAND', '112', ''),
(13, 'EXAM', '113', ''),
(14, 'DOCUMENTATION', '114', ''),
(15, 'R&D', '115', ''),
(16, 'TAXATION', '116', ''),
(17, 'CNPS', '117', ''),
(18, 'OUTREACH', '118', ''),
(19, 'WATER', '119', ''),
(20, 'ELECTRICITY', '120', ''),
(21, 'SALARY', '121', ''),
(22, 'FIXTURES', '122', ''),
(23, 'FURNITURE', '123', ''),
(24, 'COMMUNICATION', '124', ''),
(25, 'TRANSPORT', '125', ''),
(26, 'FEE REFUND', '126', ''),
(27, 'BUILDING', '127', ''),
(28, 'FUEL', '128', ''),
(29, 'GENERAL REPAIRS', '129', ''),
(30, 'OFFICE EQUIPEMENT', '130', ''),
(31, 'STAFF TRAINING', '131', ''),
(32, 'STATIOARY', '132', ''),
(33, 'MISSION', '133', ''),
(34, 'REFRESHMENT & Reception', '134', ''),
(35, 'CLEANING MATERIALS', '135', ''),
(36, 'REPAIRS OF VEHICLE', '136', ''),
(37, 'RENT', '137', ''),
(38, 'DR TANJONG', '209', ''),
(39, 'KIBUCOM', '201', ''),
(40, 'ABONGWA', '202', ''),
(41, 'STAR PRINT', '203', ''),
(42, 'SAMS DIVINA', '204', ''),
(43, 'UBA', '205', ''),
(44, 'ICELP', '206', ''),
(46, 'NCF', '207', ''),
(47, 'ALEMAZON THOMAS', '208', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
