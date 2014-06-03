-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2014 at 12:43 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nakatipid`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(160) NOT NULL,
  `description` text NOT NULL,
  `why_sell` varchar(255) NOT NULL,
  `selling_price` float NOT NULL,
  `before_price` float NOT NULL,
  `orig_price` float NOT NULL,
  `discount_price` float NOT NULL,
  `promo_price` float NOT NULL,
  `saved_price` float NOT NULL,
  `is_published` smallint(6) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `name`, `description`, `why_sell`, `selling_price`, `before_price`, `orig_price`, `discount_price`, `promo_price`, `saved_price`, `is_published`, `created`, `modified`, `modified_by`) VALUES
(2, 'test', 'test', 'test', 45, 32, 12, 45, 32, 0, 1, '2014-06-03 12:04:39', '2014-06-03 12:04:39', 0),
(3, 'asdas', 'asdasd', 'asdsad', 123, 123, 412, 124, 124, 0, 1, '2014-06-03 12:09:21', '2014-06-03 12:09:21', 0),
(4, 'fasf', 'asfasf', 'asd', 123, 412, 124, 14, 124, 0, 1, '2014-06-03 12:12:15', '2014-06-03 12:12:15', 0),
(15, 'asd', 'asd', 'asdsad', 123, 123, 41, 14, 123, 0, 1, '2014-06-03 12:17:50', '2014-06-03 12:17:50', 0),
(16, 'asd', 'asdas', 'asd', 123, 124, 1212, 123, 123, 0, 1, '2014-06-03 12:26:12', '2014-06-03 12:26:12', 7),
(17, 'asd', 'asd', 'asdsad', 1, 3, 4, 1, 4, 0, 0, '2014-06-03 12:32:51', '2014-06-03 12:32:51', 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
