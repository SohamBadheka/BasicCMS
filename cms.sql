-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2014 at 02:51 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--
CREATE DATABASE IF NOT EXISTS `cms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cms`;

-- --------------------------------------------------------

--
-- Table structure for table `cms_users`
--

CREATE TABLE IF NOT EXISTS `cms_users` (
  `Id` int(20) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE IF NOT EXISTS `documents` (
  `Id` int(20) NOT NULL AUTO_INCREMENT,
  `Iden` varchar(20) NOT NULL,
  `title` varchar(10) NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `webpages`
--

CREATE TABLE IF NOT EXISTS `webpages` (
  `Id` int(20) NOT NULL AUTO_INCREMENT,
  `Iden` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
