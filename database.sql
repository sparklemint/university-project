-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2019 at 05:40 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `feedback` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `feedback`) VALUES
('kunal', 'kunal.g15@gmail.com', 'iofhodfi');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `name` text NOT NULL,
  `psw` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `pincode` int(11) NOT NULL,
  `address` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`name`, `psw`, `email`, `mobile`, `pincode`, `address`) VALUES
('kunal', 'cdac', 'kunal.g15@gmail.com', '9534149880', 834001, 'lalpur'),
('shubham gupta', '123456', 'shubhamg244@gmail.com', '9031182026', 834001, 'ranchi'),
('amit', '12345', 'amit12@gmail.com', '9031182026', 834001, 'Ranchi');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `productname` varchar(100) NOT NULL,
  `details` varchar(150) NOT NULL,
  `price` varchar(10) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`productname`, `details`, `price`, `image`) VALUES
('Mexican Eggrolls', 'Face together given moveth divided form Of Seasons that fruitful.', 'Rs.250', 'food1.jpg'),
('chicken burger', 'Face together given moveth divided form Of Seasons that fruitful.', 'Rs.185', 'food2.jpg'),
('Topu Lasange', 'Face together given moveth divided form Of Seasons that fruitful.	', 'Rs.220', 'food3.jpg'),
('Pepper Potatoas', 'Face together given moveth divided form Of Seasons that fruitful.	', 'Rs.275', 'food4.jpg'),
('Bean Salad', 'Face together given moveth divided form Of Seasons that fruitful.', 'Rs.165', 'food5.jpg'),
('Beatball Hoagie', 'Face together given moveth divided form Of Seasons that fruitful.', 'Rs.300', 'food6.jpg'),
('Garlic green beans', 'Face together given moveth divided form Of Seasons that fruitful.', 'Rs.350', 'deshes1.png'),
('Lemon rosemary chicken', 'Face together given moveth divided form Of Seasons that fruitful.	', 'Rs.450', 'deshes2.png');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `proname` varchar(30) NOT NULL,
  `detail` varchar(200) NOT NULL,
  `price` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--


-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE IF NOT EXISTS `order1` (
  `proname` text NOT NULL,
  `detail` text NOT NULL,
  `price` text NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `contact` text NOT NULL,
  `Date` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`proname`, `detail`, `price`, `name`, `address`, `contact`, `Date`) VALUES
('Mexican Eggrolls', 'Face together given moveth divided form Of Seasons that fruitful.', 'Rs.250', 'kunal', 'lalpur', '9534149880', '2019-04-06');
