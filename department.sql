-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 04, 2016 at 08:08 AM
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
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `description` varchar(400) NOT NULL,
  `comment` varchar(400) NOT NULL,
  `schoolid` varchar(400) NOT NULL,
  `phone` varchar(400) NOT NULL,
  `fax` varchar(400) NOT NULL,
  `email` varchar(400) NOT NULL,
  `facultyid` varchar(400) NOT NULL,
  `facultyno` varchar(400) NOT NULL,
  `section` varchar(400) NOT NULL,
  `web` varchar(400) NOT NULL,
  `nn` varchar(400) NOT NULL,
  `conn` varchar(400) NOT NULL,
  `fees` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `description`, `comment`, `schoolid`, `phone`, `fax`, `email`, `facultyid`, `facultyno`, `section`, `web`, `nn`, `conn`, `fees`) VALUES
(4, 'MANAGEMENT', 'MANAGEMENT', '16', '6793327755', '1245', 'info@tmk.com', '1', 'department of', 'department', '', '0', '', 0),
(2, '', 'BANKING AND FINANCE', '', '65577788888', '145555', 'KIL@GMIAL.COM', '2', 'department of', 'department', 'JJI', '0', '', 0),
(3, '', 'INSURANCE', '', '65577788888', '145555', 'KIL@GMIAL.COM', '3', 'department of', 'department', 'JJI', '0', '', 0),
(1, '', '', '', '', '', '', '', '', '', '', '0', '', 0),
(6, '', 'ACCOUNTANCY', '', '6758421', ' ', ' ', '5', 'department of', 'department', ' ', '0', '', 0),
(7, '', 'MARKETING', '', '6758421', ' ', ' ', '6', 'department of', 'department', ' ', '0', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
