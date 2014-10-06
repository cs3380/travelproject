-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 10, 2014 at 12:01 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Project`
--

-- --------------------------------------------------------

--
-- Table structure for table `GasStationCoords`
--

CREATE TABLE IF NOT EXISTS `GasStationCoords` (
  `GID` varchar(10) NOT NULL,
  `GasStationType` varchar(100) NOT NULL,
  `Lat` float NOT NULL,
  `Lon` float NOT NULL,
  PRIMARY KEY (`GID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `GasStationCoords`
--

INSERT INTO `GasStationCoords` (`GID`, `GasStationType`, `Lat`, `Lon`) VALUES
('AL-1', 'RaceTrac', 30.6849, -88.0563),
('AL-2', 'Texaco', 30.6887, -88.0456),
('AL-3', 'Valero', 30.6355, -87.8082),
('FL-1', 'Chevron', 30.3951, -86.5075),
('FL-10', 'Mobil', 30.3752, -87.0969),
('FL-11', 'Valero', 30.406, -86.803),
('FL-2', 'Texaco', 30.3957, -86.5107),
('FL-3', 'Shell', 30.3877, -86.4718),
('FL-4', 'Valero', 30.3883, -86.4256),
('FL-5', 'Mobil', 30.3866, -86.4004),
('FL-6', 'Circle K', 30.3913, -86.4899),
('FL-7', 'BP', 30.4452, -86.5793),
('FL-8', 'Citgo', 30.401, -86.6004),
('FL-9', 'Shell', 30.425, -87.204),
('LA-1', 'Chevron', 30.4184, -91.1766),
('LA-10', 'Texaco', 30.4319, -91.1875),
('LA-11', 'Cracker Old Barrel', 30.4244, -91.1578),
('LA-12', 'Shell', 30.4221, -91.1548),
('LA-13', 'Circle K', 30.3881, -91.1718),
('LA-14', 'RaceTrac', 30.4058, -91.1024),
('LA-15', 'Chevron', 30.4593, -91.1675),
('LA-16', 'BP', 30.4381, -91.1528),
('LA-17', 'Exxon', 30.4497, -91.1754),
('LA-18', 'Valero', 30.4259, -91.1378),
('LA-19', 'Conoco', 30.5027, -91.125),
('LA-2', 'Shell', 30.4217, -91.1781),
('LA-20', 'B-Quilk', 30.4338, -91.0821),
('LA-21', 'Exxon', 30.2752, -89.7812),
('LA-22', 'Shell', 30.284, -89.7669),
('LA-3', 'Shell', 30.3719, -91.0859),
('LA-4', 'Shell', 30.4026, -91.1711),
('LA-6', 'BP', 30.4323, -91.1875),
('LA-7', 'Texaco', 30.4221, -91.1548),
('LA-9', 'Cracker Old Barrel', 30.3983, -91.1792),
('MS-1', 'Texaco', 30.3943, -88.8795),
('MS-2', 'Chevron', 30.396, -88.8848);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
