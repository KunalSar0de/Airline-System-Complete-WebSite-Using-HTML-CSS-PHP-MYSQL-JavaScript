-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 07, 2019 at 04:32 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsearch`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

DROP TABLE IF EXISTS `data`;
CREATE TABLE IF NOT EXISTS `data` (
  `depart` varchar(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `childrean` int(11) NOT NULL,
  `class` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`depart`, `adult`, `childrean`, `class`) VALUES
('', 3, 2, 'Economy Class');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_search`
--

DROP TABLE IF EXISTS `tbl_search`;
CREATE TABLE IF NOT EXISTS `tbl_search` (
  `source` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `cost` varchar(30) NOT NULL,
  `Time` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_search`
--

INSERT INTO `tbl_search` (`source`, `destination`, `cost`, `Time`) VALUES
('Mumbai', 'Chaoyang,China', '15500', '5:30 Hrs'),
('Mumbai', 'Atlanta, US', '45136', '7:00 Hrs'),
('Mumbai', 'Chaoyang,China', '15500', NULL),
('Mumbai', 'Bang Phli,Thailand', '25050', NULL),
('Mumbai', 'Los Angeles,US', '67894', NULL),
('Mumbai', 'Changi,Singapore', '22487', NULL),
('Mumbai', 'Chicago, US', '55648', NULL),
('Mumbai', 'Pudong, China', '31276', NULL),
('Mumbai', 'Tanger,Indonesia', '56999', NULL),
('Mumbai', 'Las-Vegas,US', '51299', NULL),
('Mumbai', 'Barcelona,Spain', '24206', NULL),
('Mumbai', 'Queens,US', '82123', NULL),
('Mumbai', 'Denver, US', '91000', NULL),
('Delhi', 'Mumbai', '12450', NULL),
('Delhi', 'Bengluru', '18465', NULL),
('Delhi', 'Hyderabad', '28456', NULL),
('Delhi', 'Jaipur', '8721', NULL),
('Delhi', 'Goa', '12373', NULL),
('Delhi', 'Kochi', '4043', NULL),
('Delhi', 'Thiruvanantpuram', '6000', NULL),
('Mumbai', 'Delhi', '1200', NULL),
('Mumbai', 'Bengluru', '1234', NULL),
('Mumbai', 'Hyderabad', '5687', NULL),
('Mumbai', 'Jaipur', '2345', NULL),
('Mumbai', 'Goa', '2478', NULL),
('Mumbai', 'Kochi', '1745', NULL),
('Mumbai', 'Thiruvanantpuram', '4519', NULL),
('Mumbai', 'Mumbai', 'Select Another Airport', NULL),
('Delhi', 'Delhi', 'Enter Another Station', NULL),
('Delhi', 'Chaoyang,China', '45708', NULL),
('Delhi', 'Bang Phli,Thailand', '.33467', NULL),
('Delhi', 'Los Angeles,US', '69451', NULL),
('Delhi', 'Changi,Singapore', '47564', NULL),
('Delhi', 'Chicago, US', '46982', NULL),
('Delhi', 'Pudong, China', '78164', NULL),
('Delhi', 'Tanger,Indonesia', '63298', NULL),
('Delhi', 'Las-Vegas,US', '97562', NULL),
('Delhi', 'Barcelona,Spain', '59365', NULL),
('Delhi', 'Queens,US', '45729', NULL),
('Delhi', 'Denver, US', '82123', NULL),
('Delhi', 'Atlanta, US', '53578', NULL),
('Bengluru', 'Denver, US', '55478', NULL),
('Bengluru', 'Queens,US', '39236', NULL),
('Bengluru', 'Barcelona,Spain', '73468', NULL),
('Bengluru', 'Las-Vegas,US', '84678', NULL),
('Bengluru', 'Tanger,Indonesia', '15492', NULL),
('Bengluru', 'Pudong, China', '78451', NULL),
('Bengluru', 'Chicago, US', '31245', NULL),
('Bengluru', 'Changi,Singapore', '32574', NULL),
('Bengluru', 'Los Angeles,US', '65874', NULL),
('Bengluru', 'Bang Phli,Thailand', '59784', NULL),
('Bengluru', 'Chaoyang,China', '45080', NULL),
('Bengluru', 'Atlanta, US', '42167', NULL),
('Bengluru', 'Mumbai', '1200', NULL),
('Bengluru', 'Delhi', '2647', NULL),
('Bengluru', 'Bengluru', 'Select Other City', NULL),
('Bengluru', 'Hyderabad', '6000', NULL),
('Bengluru', 'Jaipur', '4000', NULL),
('Bengluru', 'Goa', '4712', NULL),
('Bengluru', 'Kochi', '3645', NULL),
('Bengluru', 'Thiruvanantpuram', '2587', NULL),
('Hyderabad', 'Atlanta, US', '58741', NULL),
('Hyderabad', 'Chaoyang,China', '36487', NULL),
('Hyderabad', 'Bang Phli,Thailand', '90145', NULL),
('Hyderabad', 'Los Angeles,US', '84571', NULL),
('Hyderabad', 'Changi,Singapore', '76589', NULL),
('Hyderabad', 'Chicago, US', '72458', NULL),
('Hyderabad', 'Pudong, China', '64785', NULL),
('Hyderabad', 'Tanger,Indonesia', '58417', NULL),
('Hyderabad', 'Las-Vegas,US', '54689', NULL),
('Hyderabad', 'Barcelona,Spain', '52658', NULL),
('Hyderabad', 'Queens,US', '87465', NULL),
('Hyderabad', 'Denver, US', '35647', NULL),
('Jaipur', 'Chicago, US', '49,912', NULL),
('Jaipur', 'Changi,Singapore', '22487', NULL),
('Jaipur', 'Los Angeles,US', '65874', NULL),
('Jaipur', 'Bang Phli,Thailand', '25000', NULL),
('Jaipur', 'Chaoyang,China', '28457', NULL),
('Jaipur', 'Atlanta, US', '42167', NULL),
('Hyderabad', 'Delhi', '5471', NULL),
('Hyderabad', 'Bengluru', '3245', NULL),
('Hyderabad', 'Hyderabad', 'Select Another Airport', NULL),
('Hyderabad', 'Jaipur', '1754', NULL),
('Hyderabad', 'Goa', '8456', NULL),
('Hyderabad', 'Kochi', '2300', NULL),
('Hyderabad', 'Thiruvanantpuram', '1900', NULL),
('Jaipur', 'Pudong, China', '34875', NULL),
('Jaipur', 'Tanger,Indonesia', '58417', NULL),
('Jaipur', 'Las-Vegas,US', '51299', NULL),
('Jaipur', 'Barcelona,Spain', '52658', NULL),
('Jaipur', 'Queens,US', '82123', NULL),
('Jaipur', 'Denver, US', '55478', NULL),
('Jaipur', 'Mumbai', '5147', NULL),
('Jaipur', 'Delhi', '4622', NULL),
('Jaipur', 'Bengluru', '4300', NULL),
('Jaipur', 'Hyderabad', '5418', NULL),
('Jaipur', 'Jaipur', 'Select Another Airport', NULL),
('Jaipur', 'Goa', '4712', NULL),
('Jaipur', 'Kochi', '3988', NULL),
('Jaipur', 'Thiruvanantpuram', '7845', NULL),
('Goa', 'Los Angeles,US', '45080', NULL),
('Goa', 'Changi,Singapore', '15000', NULL),
('Goa', 'Chicago, US', '34526', NULL),
('Goa', 'Pudong, China', '84571', NULL),
('Goa', 'Tanger,Indonesia', '53218', NULL),
('Goa', 'Las-Vegas,US', '46798', NULL),
('Goa', 'Barcelona,Spain', '65633', NULL),
('Goa', 'Queens,US', '58417', NULL),
('Goa', 'Atlanta, US', '59365', NULL),
('Goa', 'Chaoyang,China', '113346', NULL),
('Goa', 'Bang Phli,Thailand', '82123', NULL),
('Goa', 'Denver, US', '35647', NULL),
('Goa', 'Mumbai', '1900', NULL),
('Goa', 'Delhi', '6587', NULL),
('Goa', 'Bengluru', '4568', NULL),
('Goa', 'Hyderabad', '7854', NULL),
('Goa', 'Jaipur', '9654', NULL),
('Goa', 'Goa', 'Select Another City', NULL),
('Goa', 'Kochi', '2547', NULL),
('Goa', 'Thiruvanantpuram', '2569', NULL),
('Kochi', 'Bang Phli,Thailand', '45000', NULL),
('Kochi', 'Los Angeles,US', '18465', NULL),
('Kochi', 'Changi,Singapore', '34526', NULL),
('Kochi', 'Chicago, US', '87521', NULL),
('Kochi', 'Pudong, China', '21234', NULL),
('Kochi', 'Tanger,Indonesia', '72458', NULL),
('Kochi', 'Las-Vegas,US', '31276', NULL),
('Kochi', 'Barcelona,Spain', '15492', NULL),
('Kochi', 'Queens,US', '59365', NULL),
('Kochi', 'Denver, US', '73468', NULL),
('Kochi', 'Atlanta, US', '82123', NULL),
('Kochi', 'Chaoyang,China', '35647', NULL),
('Kochi', 'Mumbai', '1640', NULL),
('Kochi', 'Delhi', '4622', NULL),
('Kochi', 'Bengluru', '5687', NULL),
('Kochi', 'Hyderabad', '8721', NULL),
('Kochi', 'Jaipur', '3478', NULL),
('Kochi', 'Goa', '7000', NULL),
('Kochi', 'Kochi', 'Select Another Station', NULL),
('Kochi', 'Thiruvanantpuram', '1849', NULL),
('Thiruvanantpuram', 'Kochi', '4685', NULL),
('Thiruvanantpuram', 'Goa', '3245', NULL),
('Thiruvanantpuram', 'Jaipur', '3658', NULL),
('Thiruvanantpuram', 'Hyderabad', '9658', NULL),
('Thiruvanantpuram', 'Bengluru', '8674', NULL),
('Thiruvanantpuram', 'Delhi', '3465', NULL),
('Thiruvanantpuram', 'Mumbai', '2341', NULL),
('Thiruvanantpuram', 'Denver, US', '46568', NULL),
('Thiruvanantpuram', 'Queens,US', '34679', NULL),
('Thiruvanantpuram', 'Barcelona,Spain', '74917', NULL),
('Thiruvanantpuram', 'Las-Vegas,US', '50013', NULL),
('Thiruvanantpuram', 'Tanger,Indonesia', '50402', NULL),
('Thiruvanantpuram', 'Pudong, China', '92400', NULL),
('Thiruvanantpuram', 'Chicago, US', '89302', NULL),
('Thiruvanantpuram', 'Changi,Singapore', '63500', NULL),
('Thiruvanantpuram', 'Los Angeles,US', '63451', NULL),
('Thiruvanantpuram', 'Bang Phli,Thailand', '56060', NULL),
('Thiruvanantpuram', 'Chaoyang,China', '48800', NULL),
('Thiruvanantpuram', 'Atlanta, US', '60000', NULL),
('Thiruvanantpuram', 'Thiruvanantpuram', 'Select Another Airport', NULL),
('Mumbai', 'Bang Phli,Thailand', '25050', '5:45 Hrs'),
('Mumbai', 'Los Angeles,US', '67894', '8:20  Hrs'),
('Mumbai', 'Changi,Singapore', '22487', '7:15 Hrs'),
('Mumbai', 'Chicago, US', '55648', '12:00 Hrs'),
('Mumbai', 'Pudong, China', '31276', '9:30 Hrs'),
('Mumbai', '\r\nTanger,Indonesia', '56999', '7:45 Hrs'),
('Mumbai', 'Las-Vegas,US', '51299', '8:10 Hrs'),
('Mumbai', 'Barcelona,Spain', '24206', '8:00 Hrs'),
('Mumbai', 'Queens,US', '82123', '6:30 Hrs'),
('Mumbai', 'Denver, US', '91000', '6:30 Hrs'),
('Mumbai', 'Bang Phli,Thailand', '25050', '8:45 Hrs');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

DROP TABLE IF EXISTS `usertable`;
CREATE TABLE IF NOT EXISTS `usertable` (
  `name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`name`, `password`) VALUES
('Harshad', '1234'),
('kunu', '123'),
('sohan', '15978'),
('nishad`', '123'),
('vipul', '123'),
('abc', 'abc'),
('rituja', 'rituja'),
('kunal', 'kunal'),
('nablo', 'nablo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
