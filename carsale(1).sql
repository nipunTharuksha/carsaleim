-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 09, 2018 at 05:57 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carsale`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`) VALUES
(48, 'aagadrgd'),
(47, 'aagadrgd'),
(14, 'test3gfhsf'),
(15, 'test4'),
(16, 'test4'),
(17, 'test4'),
(18, 'test4'),
(19, 'test4'),
(20, 'test4'),
(21, 'test4'),
(22, 'test4'),
(23, 'test4'),
(24, 'test4'),
(26, 'test4'),
(27, 'test4'),
(28, 'test5'),
(29, 'test5'),
(30, 'test5'),
(31, 'test5'),
(32, 'aaa'),
(33, 'aaa'),
(34, 'aaa'),
(35, 'aaa'),
(36, 'aaa'),
(37, 'aaa'),
(38, 'aaa'),
(39, 'aaa'),
(40, 'rfg'),
(41, 'jeep'),
(42, 'jeep edited'),
(43, 'Datsun'),
(44, 'Datsundfgdf'),
(45, 'Datsun'),
(46, 'vdfgd');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

DROP TABLE IF EXISTS `car`;
CREATE TABLE IF NOT EXISTS `car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `body_type` varchar(50) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `fuel_type` varchar(55) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `mileage` int(11) DEFAULT NULL,
  `view_count` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `sold` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `model_id` (`model_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `model_id`, `title`, `description`, `body_type`, `year`, `brand`, `model`, `fuel_type`, `location`, `price`, `mileage`, `view_count`, `date`, `sold`, `status`) VALUES
(1, NULL, 'test', 'aaa', 'midiSizeCar', 2003, 'rfg', 'aaa', 'petrol', 'Matara', 88285, 85525, NULL, '2018-11-09 01:40:53', 0, 1),
(2, NULL, 'test', 'aaa', 'midiSizeCar', 2003, 'rfg', 'aaa', 'petrol', 'Matara', 88285, 85525, NULL, '2018-11-09 08:59:25', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `joined_date` datetime DEFAULT NULL,
  `role` varchar(1) DEFAULT NULL,
  `premimum` tinyint(1) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `email`, `mobile`, `password`, `joined_date`, `role`, `premimum`, `status`) VALUES
(25, 'test test', 'test@gmail.com', '077-455-1234', 'test@123A', '2018-11-03 15:45:48', 'm', NULL, 1),
(26, 'ashan liyanage', 'sdfsdf@gm.com', '077-455-1234', 'aaa@123AAA', '2018-11-03 16:11:36', 'm', NULL, 1),
(27, 'ashan liyanage', 'sdfsdf@gm.com', '077-455-1234', 'aaa@123AAA', '2018-11-03 16:14:01', 'm', NULL, 1),
(28, 'jsdf alsfdj', 'sdfsdf@gm.com', '077-455-1234', 'aaa@123AAA', '2018-11-08 19:56:57', 'm', NULL, 1),
(29, 'mekathama nama wenna one', 'fhgfhgf@gmail.com', '077-455-1234', 'aaa@123AAA', '2018-11-08 20:55:32', 'm', NULL, 1),
(30, 'mekathama nama wenna onmekathama nama wenna one ', 'fhgfhgf@gmail.com', '077-455-1234', 'AAA@123aaa', '2018-11-08 20:56:39', 'm', NULL, 1),
(34, 'ashan liyanage', 'sdfsdf@gm.com', '077-455-1234', 'aaa@123AAA', '2018-11-08 22:08:21', 'm', NULL, 1),
(35, 'ashan liyanage', 'sdfsdf@gm.com', '077-455-1234', 'aaa@123AAA', '2018-11-08 22:10:01', 'm', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

DROP TABLE IF EXISTS `model`;
CREATE TABLE IF NOT EXISTS `model` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `brand_id` (`brand_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`id`, `name`, `brand_id`) VALUES
(1, 'aaa', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
