-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 18, 2016 at 08:05 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bishka`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `com` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `news_id`, `com`) VALUES
(1, 1, 1, 'hi'),
(2, 1, 1, 'hi'),
(3, 1, 1, 'hi'),
(4, 1, 1, 'how'),
(5, 1, 1, 'how'),
(6, 1, 1, 'how'),
(7, 1, 1, 'how'),
(8, 1, 1, 'hi'),
(9, 1, 1, 'Ð¿Ñ€Ð¸Ð²ÐµÑ‚'),
(10, 2, 1, 'ÐºÑ€ÑƒÑ‚Ð¾'),
(11, 2, 2, 'ÐºÑ€ÑƒÑ‚Ð¾'),
(12, 1, 2, 'asdsa'),
(15, 1, 1, 'Ñ‹Ð²Ñ„Ñ„Ð²Ñ„Ñ‹Ð²'),
(16, 2, 2, 'da'),
(17, 1, 1, 'dhjgfjkfgsjfdjksdsgjjsdgjhsdgjhsdgjhsgsdgj');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `head` text NOT NULL,
  `descr` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `head`, `descr`) VALUES
(1, 'ÐœÐ¾Ð¹ Ð¿ÐµÑ€Ð²Ñ‹Ð¹ Ð¿Ð¾ÑÑ‚', 'ÐºÐ°Ðº Ð¶Ðµ ÑÐ´Ñƒ Ð¼Ð½Ðµ Ð½Ñ€Ð°Ð²Ð¸Ñ‚ÑÑ Ñ Ð¿Ñ€ÑÐ¼ Ð½Ðµ Ñ…Ð¾Ñ‡Ñƒ ÑƒÑ…Ð¾Ð´Ð¸Ñ‚ÑŒ'),
(2, 'Ð¼Ð¾Ð¹ Ð²Ñ‚Ð¾Ñ€Ð¾Ð¹ Ð¿Ð¾ÑÑ‚', 'Ñ„Ñ‹Ð°Ð²Ð¿Ð°Ð¿Ð°');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `city`) VALUES
(1, 'asd', 'asd', 'asd@asd.com', 'asd', 'asd'),
(2, 'Ð•Ñ€Ñ‚Ð°Ð¹', 'Ð‘Ð¸ÑˆÐºÐ°', 'bishkek@bishkek.kr', 'biskek', 'Ð‘Ð¸ÑˆÐºÐµÐº'),
(4, 'Anatoliy', 'zaraza', 'zaraza@zaraza.com', '12345678', 'zaraza');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
