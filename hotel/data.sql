-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 10, 2019 at 04:12 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE IF NOT EXISTS `adminlogin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('admin1', 'pass1'),
('admin2', 'pass2'),
('admin209', 'admin209'),
('admin3', 'pass3'),
('director', 'pass4');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(46) NOT NULL,
  `phone` varchar(46) NOT NULL,
  `email` varchar(46) NOT NULL,
  `destination` varchar(46) NOT NULL,
  `cindate` varchar(46) NOT NULL,
  `coutdate` varchar(46) NOT NULL,
  `roomtype` varchar(46) NOT NULL,
  `room` varchar(46) NOT NULL,
  `adults` varchar(46) NOT NULL,
  `child` varchar(46) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `phone`, `email`, `destination`, `cindate`, `coutdate`, `roomtype`, `room`, `adults`, `child`) VALUES
(27, '.Ram.', '.5432167890.', '.ram@gmail.com.', '.kalamassery.', '.2018-11-14.', '.2018-11-15.', '.2.', '.2.', '.3.', '.1.'),
(32, '.q4rtq.', '.565780723.', '.yy54y@gmai.com.', '.Edapally.', '.2018-11-17.', '.2018-11-18.', '.1.', '.1.', '.2.', '.0.'),
(33, '.harry.', '.565780723.', '.harry54y@gmai.com.', '.Edapally.', '.2018-11-17.', '.2018-11-18.', '.4.', '.1.', '.3.', '.0.'),
(34, '.drake.', '.9856321470.', '.drake@gmail.com.', '.Edapally.', '.2018-11-17.', '.2018-11-18.', '.3.', '.1.', '.1.', '.0.'),
(35, '.drake.', '.9856321470.', '.drake@gmail.com.', '.patna.', '.2018-11-21.', '.2018-11-22.', '.1.', '.1.', '.2.', '.0.'),
(38, '.ramkumar.', '.565780723.', '.harry54y@gmai.com.', '.Kaloor.', '.2018-11-19.', '.2018-11-19.', '.0.', '.2.', '.2.', '.0.'),
(39, '.ramkumar.', '.565780723.', '.harry54y@gmai.com.', '.kalamassery.', '.2018-11-19.', '.2018-11-19.', '.2.', '.3.', '.3.', '.0.'),
(40, '.ramkumar.', '.565780723.', '.harry54y@gmai.com.', '.kalamassery.', '.2018-11-19.', '.2018-11-19.', '.0.', '.2.', '.1.', '.0.'),
(41, '.ramkumar.', '.565780723.', '.harry54y@gmai.com.', '.patna.', '.2018-11-19.', '.2018-11-20.', '.1.', '.2.', '.2.', '.0.');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE IF NOT EXISTS `room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roomno` varchar(20) DEFAULT NULL,
  `roomtype` varchar(20) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'Unbooked',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `roomno`, `roomtype`, `price`, `status`) VALUES
(3, '102', 'Deluxe', 15000, 'Booked'),
(4, '122', 'Deluxe', 15000, 'Booked'),
(6, '201', 'single', 5000, 'Unbooked'),
(7, '202', 'AC', 16000, 'Unbooked'),
(10, '301', 'single', 8000, 'Unbooked');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(46) NOT NULL,
  `phone` varchar(46) NOT NULL,
  `email` varchar(46) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `phone`, `email`) VALUES
(1, '.drake.', '.9856321470.', '.drake@gmail.com.'),
(2, '.drake.', '.9856321470.', '.drake@gmail.com.'),
(3, '.ramkumar.', '.565780723.', '.harry54y@gmai.com.'),
(5, '.ramkumar.', '.565780723.', '.harry54y@gmai.com.'),
(6, '.ramkumar.', '.565780723.', '.harry54y@gmai.com.'),
(7, '.ramkumar.', '.565780723.', '.harry54y@gmai.com.'),
(8, '.ramkumar.', '.565780723.', '.harry54y@gmai.com.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
