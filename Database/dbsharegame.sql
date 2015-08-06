-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 06, 2015 at 05:55 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sharegame`
--
CREATE DATABASE IF NOT EXISTS `sharegame` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `sharegame`;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `MaGame` int(11) NOT NULL AUTO_INCREMENT,
  `TenGame` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `LoaiGame` int(11) NOT NULL,
  `HinhAnh` text COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaGame`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`MaGame`, `TenGame`, `LoaiGame`, `HinhAnh`, `MoTa`) VALUES
(1, 'Elephan', 1, 'Images\\Game\\HanhDong\\5647.jpg', 'tewasf'),
(2, 'Forge Quest', 1, 'Images\\Game\\HanhDong\\5505.jpg', 'qưerqwer'),
(3, 'Yasai Ninja', 1, 'Images\\Game\\HanhDong\\5648.jpg', 'tewqerq ewr qwer qewr wqer qwer qewrq'),
(4, 'Better Late Than DEAD', 1, 'Images\\Game\\HanhDong\\5653.jpg', ' qewr wqerq erqwer qwer213r qwefewr ewr213 wer123r wre123 weer 213 4wer 1234 ưer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
