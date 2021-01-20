-- phpMyAdmin SQL Dump
-- version 3.3.2deb1ubuntu1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 20, 2021 at 11:31 AM
-- Server version: 5.1.70
-- PHP Version: 5.3.2-1ubuntu4.30

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nse`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `company_pk` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(100) NOT NULL,
  `short_name` varchar(100) NOT NULL,
  `created_dtm` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`company_pk`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_pk`, `company_name`, `short_name`, `created_dtm`) VALUES
(1, 'ADITYA BIRLA CAPITAL LIMITED', 'ABCAPITAL', '2021-01-20 06:02:36'),
(2, 'ADITYA BIRLA CHEMICALS (INDIA) LIMITED', 'ABCIL', '2021-01-20 06:02:36'),
(3, 'BIRLA CABLE LIMITED EQUITY', 'BIRLACABLE', '2021-01-20 06:03:18'),
(4, 'CANARA BANK', 'CANBK', '2021-01-20 06:03:18'),
(5, 'Britinia', 'BNT', '2021-01-20 10:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `company_data`
--

CREATE TABLE IF NOT EXISTS `company_data` (
  `company_data_pk` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(100) NOT NULL,
  `market_cap` decimal(10,2) NOT NULL,
  `current_price` decimal(10,2) NOT NULL,
  `stock_pe` decimal(10,2) NOT NULL,
  `divident_yield` decimal(10,2) NOT NULL,
  `roce` decimal(10,2) NOT NULL,
  `roe` decimal(10,2) NOT NULL,
  `debut_to_equity` decimal(10,2) NOT NULL,
  `eps` decimal(10,2) NOT NULL,
  `reserves` decimal(10,2) NOT NULL,
  `debt` decimal(10,2) NOT NULL,
  PRIMARY KEY (`company_data_pk`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `company_data`
--

INSERT INTO `company_data` (`company_data_pk`, `company_name`, `market_cap`, `current_price`, `stock_pe`, `divident_yield`, `roce`, `roe`, `debut_to_equity`, `eps`, `reserves`, `debt`) VALUES
(1, 'ADITYA BIRLA CAPITAL LIMITED', '2.00', '2.00', '2.00', '2.00', '2.00', '2.00', '2.00', '2.00', '2.00', '2.00'),
(2, 'ADITYA BIRLA CHEMICALS (INDIA) LIMITED	', '3.00', '3.00', '3.00', '3.00', '3.00', '3.00', '3.00', '3.00', '3.00', '3.00'),
(3, 'BIRLA CABLE LIMITED EQUITY', '4.00', '4.00', '4.00', '4.00', '4.00', '4.00', '4.00', '4.00', '4.00', '4.00'),
(4, 'CANARA BANK', '5.00', '5.00', '5.00', '5.00', '5.00', '5.00', '5.00', '5.00', '5.00', '5.00'),
(5, 'ADITYA BIRLA CAPITAL LIMITED', '9.00', '9.00', '9.00', '9.00', '9.00', '9.00', '9.00', '9.00', '9.00', '9.00'),
(6, 'Britinia', '2.00', '2.00', '2.00', '2.00', '2.00', '2.00', '2.00', '2.00', '2.00', '2.00'),
(7, 'ADITYA BIRLA CAPITAL LIMITED', '10.00', '10.00', '10.00', '10.00', '10.00', '10.00', '10.00', '10.00', '10.00', '10.00'),
(8, 'ADITYA BIRLA CAPITAL LIMITED', '85.00', '25.00', '15.00', '12.00', '12.00', '12.00', '54.00', '12.00', '12.00', '14.00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `password` (`password`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `password`, `branch_id`, `flag`) VALUES
(1, 'admin', '12', 1, 0),
(2, 'gan', '23', 1, 1);
