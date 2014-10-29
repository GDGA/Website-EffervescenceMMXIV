-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2014 at 09:59 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stegolica`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_user`
--

CREATE TABLE IF NOT EXISTS `auth_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(128) NOT NULL,
  `is_staff` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_superuser` tinyint(1) NOT NULL,
  `is_validate` tinyint(1) NOT NULL,
  `last_login` datetime NOT NULL,
  `date_joined` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Table structure for table `question_info_ste`
--

CREATE TABLE IF NOT EXISTS `question_info_ste` (
  `qid` int(11) NOT NULL,
  `question` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL,
  `hints` text NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_info_ste`
--

INSERT INTO `question_info_ste` (`qid`, `question`, `ans`, `hints`) VALUES
(1, '0B9Idir8yC6SddHkzdE5XYk5Rajg', 'f2134519cfe4f3b5b9a7a72839a0900f', '<!-- game begins -->'),
(2, '0B9Idir8yC6SdaV8tZ1JtdzB4MkU', '167b5237d8b617251bd3acc7c72d63a2', ''),
(3, '0B9Idir8yC6SdQjE1RWNGTjdTV28', '9d239b100645bd71d560eeceabfff4c4', ''),
(4, '0B9Idir8yC6Sdb2pEWU5sdFBaTXc', '5920e14dfc97b33fd9874ef81ce9babd', ''),
(5, '0B9Idir8yC6SdYWozSnAxSkxOUzQ', '70733a4e73ec653d645cfe8f66a5425a', ''),
(6, '0B9Idir8yC6SdYWdxVHB1MkkwVnM', 'ae534090925548edc8c591d49518644c', ''),
(7, '0B9Idir8yC6Sdc3dMMDZBNnUyckE', '78257509c432bd4ad79425f44233c72b', ''),
(8, '0B9Idir8yC6SdSnktaGN6eWZKYXc', '7997d068fc918efb9e6f36d7780fc8b6', ''),
(9, '0B9Idir8yC6SdZjY2ZmwzdUMtVFk', '3ce5c41e0f0ec3e20409ca8505e47bfe', ''),
(10, '0B9Idir8yC6SdNHRZS1VNTU1SMXM', '121c60df0c03083d2693c251f15fdfb2', ''),
(11, '0B9Idir8yC6SdelluaGpXXzY3eUE', '426f683afd9e59651b41498fde8df326', ''),
(12, '0B9Idir8yC6SdWVI4dEFGYUpLN00', 'ec9df4e5adcba58fc57f331faa009604', ''),
(13, '0B9Idir8yC6SdRG5aNGpXbEJtelE', '65c7bc1e3da2099f671ec79b28c40831', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_info_ste`
--

CREATE TABLE IF NOT EXISTS `user_info_ste` (
  `user_id` varchar(50) NOT NULL,
  `score` int(11) NOT NULL DEFAULT '0',
  `time` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
