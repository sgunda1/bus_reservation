-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 21, 2016 at 01:17 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bus_rev`
--
CREATE DATABASE IF NOT EXISTS `bus_rev` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bus_rev`;

-- --------------------------------------------------------

--
-- Table structure for table `15bus`
--

CREATE TABLE IF NOT EXISTS `15bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `15bus`
--

INSERT INTO `15bus` (`id`, `status`, `state`) VALUES
(1, 'Booked', 'W'),
(2, 'Booked', 'W'),
(3, 'Booked', 'W'),
(4, 'Booked', 'W'),
(5, 'Booked', 'N'),
(6, 'Booked', 'N'),
(7, 'Available', 'N'),
(8, 'Available', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `16bus`
--

CREATE TABLE IF NOT EXISTS `16bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `16bus`
--

INSERT INTO `16bus` (`id`, `status`, `state`) VALUES
(1, 'Booked', 'W'),
(2, 'Booked', 'W'),
(3, 'Booked', 'W'),
(4, 'Booked', 'W'),
(5, 'Booked', 'W'),
(6, 'Booked', 'W'),
(7, 'Booked', 'W'),
(8, 'Booked', 'W'),
(9, 'Booked', 'W'),
(10, 'Available', 'W'),
(11, 'Available', 'N'),
(12, 'Available', 'N'),
(13, 'Available', 'N'),
(14, 'Available', 'N'),
(15, 'Available', 'N'),
(16, 'Available', 'N'),
(17, 'Available', 'N'),
(18, 'Available', 'N'),
(19, 'Available', 'N'),
(20, 'Available', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `17bus`
--

CREATE TABLE IF NOT EXISTS `17bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `17bus`
--

INSERT INTO `17bus` (`id`, `status`, `state`) VALUES
(1, 'Booked', 'W'),
(2, 'Booked', 'W'),
(3, 'Booked', 'W'),
(4, 'Booked', 'W'),
(5, 'Available', 'W'),
(6, 'Available', 'W'),
(7, 'Available', 'W'),
(8, 'Available', 'W'),
(9, 'Available', 'W'),
(10, 'Available', 'W'),
(11, 'Available', 'N'),
(12, 'Available', 'N'),
(13, 'Available', 'N'),
(14, 'Available', 'N'),
(15, 'Available', 'N'),
(16, 'Available', 'N'),
(17, 'Available', 'N'),
(18, 'Available', 'N'),
(19, 'Available', 'N'),
(20, 'Available', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `18bus`
--

CREATE TABLE IF NOT EXISTS `18bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `18bus`
--

INSERT INTO `18bus` (`id`, `status`, `state`) VALUES
(1, 'Available', 'W'),
(2, 'Available', 'W'),
(3, 'Available', 'W'),
(4, 'Available', 'W'),
(5, 'Available', 'W'),
(6, 'Available', 'W'),
(7, 'Available', 'W'),
(8, 'Available', 'W'),
(9, 'Available', 'W'),
(10, 'Available', 'W'),
(11, 'Available', 'N'),
(12, 'Available', 'N'),
(13, 'Available', 'N'),
(14, 'Available', 'N'),
(15, 'Available', 'N'),
(16, 'Available', 'N'),
(17, 'Available', 'N'),
(18, 'Available', 'N'),
(19, 'Available', 'N'),
(20, 'Available', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `19bus`
--

CREATE TABLE IF NOT EXISTS `19bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `19bus`
--

INSERT INTO `19bus` (`id`, `status`, `state`) VALUES
(1, 'Available', 'W'),
(2, 'Available', 'W'),
(3, 'Available', 'W'),
(4, 'Available', 'W'),
(5, 'Available', 'W'),
(6, 'Available', 'W'),
(7, 'Available', 'W'),
(8, 'Available', 'W'),
(9, 'Available', 'W'),
(10, 'Available', 'W'),
(11, 'Available', 'N'),
(12, 'Available', 'N'),
(13, 'Available', 'N'),
(14, 'Available', 'N'),
(15, 'Available', 'N'),
(16, 'Available', 'N'),
(17, 'Available', 'N'),
(18, 'Available', 'N'),
(19, 'Available', 'N'),
(20, 'Available', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `20bus`
--

CREATE TABLE IF NOT EXISTS `20bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `20bus`
--

INSERT INTO `20bus` (`id`, `status`, `state`) VALUES
(1, 'Available', 'W'),
(2, 'Available', 'W'),
(3, 'Available', 'W'),
(4, 'Available', 'W'),
(5, 'Available', 'W'),
(6, 'Available', 'W'),
(7, 'Available', 'W'),
(8, 'Available', 'W'),
(9, 'Available', 'W'),
(10, 'Available', 'W'),
(11, 'Available', 'N'),
(12, 'Available', 'N'),
(13, 'Available', 'N'),
(14, 'Available', 'N'),
(15, 'Available', 'N'),
(16, 'Available', 'N'),
(17, 'Available', 'N'),
(18, 'Available', 'N'),
(19, 'Available', 'N'),
(20, 'Available', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `21bus`
--

CREATE TABLE IF NOT EXISTS `21bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `21bus`
--

INSERT INTO `21bus` (`id`, `status`, `state`) VALUES
(1, 'Available', 'N'),
(2, 'Available', 'W'),
(3, 'Available', 'N'),
(4, 'Available', 'W'),
(5, 'Available', 'N'),
(6, 'Available', 'W'),
(7, 'Available', 'N'),
(8, 'Available', 'W'),
(9, 'Available', 'N'),
(10, 'Available', 'W'),
(11, 'Available', 'N'),
(12, 'Available', 'W');

-- --------------------------------------------------------

--
-- Table structure for table `22bus`
--

CREATE TABLE IF NOT EXISTS `22bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `22bus`
--

INSERT INTO `22bus` (`id`, `status`, `state`) VALUES
(1, 'Available', 'W'),
(2, 'Available', 'N'),
(3, 'Available', 'W'),
(4, 'Available', 'N'),
(5, 'Available', 'W'),
(6, 'Available', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `23bus`
--

CREATE TABLE IF NOT EXISTS `23bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `23bus`
--

INSERT INTO `23bus` (`id`, `status`, `state`) VALUES
(1, 'Available', 'W'),
(2, 'Available', 'W'),
(3, 'Available', 'W'),
(4, 'Available', 'W'),
(5, 'Available', 'W'),
(6, 'Available', 'N'),
(7, 'Available', 'N'),
(8, 'Available', 'N'),
(9, 'Available', 'N'),
(10, 'Available', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bus_name` varchar(120) NOT NULL,
  `from_stop` varchar(120) NOT NULL,
  `to_stop` varchar(120) NOT NULL,
  `date` date NOT NULL,
  `dept_time` time NOT NULL,
  `arrival_time` time NOT NULL,
  `distance` int(11) NOT NULL,
  `fare` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `bus_name`, `from_stop`, `to_stop`, `date`, `dept_time`, `arrival_time`, `distance`, `fare`) VALUES
(16, 'Raleigh-Charlotte', 'Raleigh', 'Charlotte', '2016-06-25', '06:30:00', '18:00:00', 100, 200),
(22, 'CLT RAL', 'Charlotte', 'Raleigh', '2016-06-25', '13:00:00', '17:00:00', 300, 150),
(21, 'abc', 'Charlotte', 'Raleigh', '2016-06-25', '13:00:00', '17:00:00', 300, 150),
(20, 'Chapel Hill - Raleigh', 'Chapel Hill', 'Raleigh', '2016-06-25', '06:30:00', '18:00:00', 250, 500),
(19, 'Asheville-Carlotte', 'Asheville', 'Charlotte', '2016-06-25', '06:30:00', '18:00:00', 500, 1000),
(18, 'Charlotte-Chapel Hill', 'Charlotte', 'Chapel Hill', '2016-06-25', '06:30:00', '18:00:00', 300, 600),
(17, 'Charlotte-Durhum', 'Charlotte', 'Durhum', '2016-06-25', '06:30:00', '18:00:00', 200, 400),
(15, 'Charlotte-Raleigh', 'Charlotte', 'Raleigh', '2016-06-25', '06:30:00', '06:30:00', 500, 1000),
(23, 'test', 'abc', 'xyz', '2016-06-25', '01:00:00', '02:00:00', 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `bus_stops`
--

CREATE TABLE IF NOT EXISTS `bus_stops` (
  `bus_stops` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_stops`
--

INSERT INTO `bus_stops` (`bus_stops`) VALUES
('Charlotte'),
('Raleigh'),
('Asheville'),
('Durhum'),
('Wilmington'),
('Winston-Salem'),
('Fayetteville'),
('Cary'),
('Chapel Hill'),
('New Ben'),
('Boone'),
('Greensboro');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `comments` varchar(500) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `comments`, `email`) VALUES
(3, 'test', 'test', 'test@gmail.com'),
(5, 'abc', 'feedback1', 'user@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `gender` varchar(120) NOT NULL,
  `dob` date NOT NULL,
  `mobile` decimal(10,0) NOT NULL,
  `address1` varchar(120) NOT NULL,
  `address2` varchar(120) NOT NULL,
  `address3` varchar(120) NOT NULL,
  `pin_code` int(11) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `reg_date` date NOT NULL,
  `user_type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `gender`, `dob`, `mobile`, `address1`, `address2`, `address3`, `pin_code`, `email`, `password`, `reg_date`, `user_type`) VALUES
(5, 'user', 'Male', '1991-11-17', '1234567890', 'Charlotte', 'abc', 'abc', 28262, 'user@email.com', '12345678', '2016-06-14', 'user'),
(17, 'shiva', 'Male', '1992-01-01', '9848022338', 'charlotte', 'xfkjhdskj', 'sjdhsg', 28262, 'shiva.gunda@gmail.com', '12345678', '2016-06-14', ''),
(16, 'admin', '', '1991-10-01', '1234567890', 'Charlotte', 'None', 'None', 28262, 'admin@email.com', '12345678', '2016-06-14', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_history`
--

CREATE TABLE IF NOT EXISTS `user_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `bus_name` varchar(120) NOT NULL,
  `from_stop` varchar(120) NOT NULL,
  `to_stop` varchar(120) NOT NULL,
  `journey_date` date NOT NULL,
  `booking_date` date NOT NULL,
  `seat_no_booked` int(11) NOT NULL,
  `dept_time` time NOT NULL,
  `distance` int(11) NOT NULL,
  `fare` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `user_history`
--

INSERT INTO `user_history` (`id`, `user_id`, `bus_id`, `bus_name`, `from_stop`, `to_stop`, `journey_date`, `booking_date`, `seat_no_booked`, `dept_time`, `distance`, `fare`) VALUES
(48, 5, 16, 'Raleigh-Charlotte', 'Raleigh', 'Charlotte', '0000-00-00', '2015-12-06', 2, '06:30:00', 100, '200'),
(47, 5, 16, 'Raleigh-Charlotte', 'Raleigh', 'Charlotte', '0000-00-00', '2015-12-06', 1, '06:30:00', 100, '200'),
(46, 5, 15, 'Charlotte-Raleigh', 'Charlotte', 'Raleigh', '0000-00-00', '2015-12-06', 6, '06:30:00', 500, '1000'),
(45, 5, 15, 'Charlotte-Raleigh', 'Charlotte', 'Raleigh', '0000-00-00', '2015-12-06', 5, '06:30:00', 500, '1000'),
(44, 5, 15, 'Charlotte-Raleigh', 'Charlotte', 'Raleigh', '0000-00-00', '2015-12-06', 4, '06:30:00', 500, '1000'),
(43, 5, 15, 'Charlotte-Raleigh', 'Charlotte', 'Raleigh', '0000-00-00', '2015-12-06', 3, '06:30:00', 500, '1000'),
(41, 16, 15, 'Charlotte-Raleigh', 'Charlotte', 'Raleigh', '0000-00-00', '2015-12-06', 1, '06:30:00', 500, '1000'),
(42, 16, 15, 'Charlotte-Raleigh', 'Charlotte', 'Raleigh', '0000-00-00', '2015-12-06', 2, '06:30:00', 500, '1000'),
(49, 5, 17, 'Charlotte-Durhum', 'Charlotte', 'Durhum', '0000-00-00', '2015-12-06', 1, '06:30:00', 200, '400'),
(50, 5, 17, 'Charlotte-Durhum', 'Charlotte', 'Durhum', '0000-00-00', '2015-12-06', 2, '06:30:00', 200, '400'),
(51, 5, 17, 'Charlotte-Durhum', 'Charlotte', 'Durhum', '0000-00-00', '2015-12-06', 3, '06:30:00', 200, '400'),
(52, 5, 17, 'Charlotte-Durhum', 'Charlotte', 'Durhum', '0000-00-00', '2015-12-06', 4, '06:30:00', 200, '400'),
(55, 17, 16, 'Raleigh-Charlotte', 'Raleigh', 'Charlotte', '0000-00-00', '2016-06-19', 3, '06:30:00', 100, '200'),
(57, 17, 16, 'Raleigh-Charlotte', 'Raleigh', 'Charlotte', '0000-00-00', '2016-06-19', 4, '06:30:00', 100, '200'),
(58, 17, 16, 'Raleigh-Charlotte', 'Raleigh', 'Charlotte', '0000-00-00', '2016-06-19', 5, '06:30:00', 100, '200'),
(59, 17, 16, 'Raleigh-Charlotte', 'Raleigh', 'Charlotte', '0000-00-00', '2016-06-19', 6, '06:30:00', 100, '200'),
(60, 17, 16, 'Raleigh-Charlotte', 'Raleigh', 'Charlotte', '0000-00-00', '2016-06-19', 7, '06:30:00', 100, '200'),
(61, 17, 16, 'Raleigh-Charlotte', 'Raleigh', 'Charlotte', '0000-00-00', '2016-06-19', 8, '06:30:00', 100, '200'),
(62, 17, 16, 'Raleigh-Charlotte', 'Raleigh', 'Charlotte', '0000-00-00', '2016-06-19', 9, '06:30:00', 100, '200');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
