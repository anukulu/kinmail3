-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 21, 2018 at 06:05 PM
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
-- Database: `accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(500) NOT NULL,
  `message` varchar(500) NOT NULL,
  `hash` varchar(300) NOT NULL,
  `timea` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=205 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `username`, `message`, `hash`, `timea`) VALUES
(186, 'Anukul', 'hello', 'Shristy Fashion Royal Blue Fleece Bomber Jacket For Women', '03:22:41pm &nbsp&nbsp2018-02-19'),
(187, 'Kamal', 'hello', 'Razer Goliathus Printed Keyboard And Mouse Pad', '03:40:08pm &nbsp&nbsp2018-02-19'),
(188, 'Anukul', 'hey', 'Razer Goliathus Printed Keyboard And Mouse Pad', '03:41:04pm &nbsp&nbsp2018-02-19'),
(190, 'Anukul', 'i am good', 'Razer Goliathus Printed Keyboard And Mouse Pad', '03:41:18pm &nbsp&nbsp2018-02-19'),
(191, 'Kamal', 'hey there', 'Hawa N95 Mask Blue', '03:57:43pm &nbsp&nbsp2018-02-19'),
(192, 'Kamal', 'hello', 'Eryaa Black And White Striped Woolen Hi-Neck Sweater For Women', '04:02:02pm &nbsp&nbsp2018-02-19'),
(193, 'Atul', 'Hello. 100 ma dine vaye linxu', 'WhitePurple Contrast Sleeved Jacket For Women', '04:20:29pm &nbsp&nbsp2018-02-19'),
(198, 'Kamal', 'sasto ma dine vayo vane kinne ho??', 'Electronic Milk, Coffee, Egg Frother Mixer', '03:14:14am &nbsp&nbsp2018-02-20'),
(199, 'Anukul', 'nadine', 'Electronic Milk, Coffee, Egg Frother Mixer', '03:14:54am &nbsp&nbsp2018-02-20'),
(200, 'Anukul', 'hey its me anukul, i wanted to buy this ', 'Cleaner Kit for Computer and Laptop', '10:43:29pm &nbsp&nbsp2018-02-21'),
(201, 'Kamal', 'yeah, the price is fixed. Do you need a home delivery?', 'Cleaner Kit for Computer and Laptop', '10:45:11pm &nbsp&nbsp2018-02-21'),
(202, 'Anukul', 'no i dont need a home delivery..i will visit the store this saturday??will the shop be open?', 'Cleaner Kit for Computer and Laptop', '10:47:10pm &nbsp&nbsp2018-02-21'),
(203, 'Kamal', 'yes offcourse....visit the shop when u are convinen,,,or you can also contact me on the number 9843312567', 'Cleaner Kit for Computer and Laptop', '10:47:48pm &nbsp&nbsp2018-02-21'),
(204, 'Anukul', 'will do thank you!!', 'Cleaner Kit for Computer and Laptop', '10:48:03pm &nbsp&nbsp2018-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

DROP TABLE IF EXISTS `offers`;
CREATE TABLE IF NOT EXISTS `offers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `offers_hash` varchar(500) NOT NULL,
  `offered_to` varchar(500) NOT NULL,
  `offered_by` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `offers_hash`, `offered_to`, `offered_by`) VALUES
(3, 'The Go-Giver A Little Story About a Powerful Business Idea', 'anukulparajuli318@gmail.com', 'stxavier_11c127@yahoo.com'),
(4, 'Cleaner Kit for Computer and Laptop', 'stxavier_11c127@yahoo.com', 'anukulparajuli9@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `hash` varchar(500) NOT NULL,
  `keywords` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `category` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
CREATE TABLE IF NOT EXISTS `rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `comments` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `user`, `rating`, `comments`) VALUES
(12, '4e4b5fbbbb602b6d35bea8460aa8f8e5', 7, '654Enter comments here...');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

DROP TABLE IF EXISTS `requests`;
CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `requests_hash` varchar(500) NOT NULL,
  `requested_by` varchar(500) NOT NULL,
  `requested_to` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `requests_hash`, `requested_by`, `requested_to`) VALUES
(3, 'The Go-Giver A Little Story About a Powerful Business Idea', 'stxavier_11c127@yahoo.com', 'anukulparajuli318@gmail.com'),
(4, 'Cleaner Kit for Computer and Laptop', 'anukulparajuli9@gmail.com', 'stxavier_11c127@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `loggedin` int(11) NOT NULL,
  `avatar` varchar(600) NOT NULL,
  `username` varchar(500) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(200) NOT NULL,
  `contact` bigint(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `hash`, `active`, `loggedin`, `avatar`, `username`, `dob`, `gender`, `contact`) VALUES
(57, 'Anukul', 'parajuli', 'anukulparajuli9@gmail.com', '$2y$10$Jxnw/exPNpWlvTDoLQuPreKtcvyKp.oz1ukDvLnzZNiQ20NH6jDp.', '4e4b5fbbbb602b6d35bea8460aa8f8e5', 1, 0, '2.jpg', 'aaa', '2018-11-30', 'male', 2147483647),
(64, 'Anukul', 'parajuli', 'rbdiwash48@gmail.com', '$2y$10$wz7Y3ieEIeuHnfvNYwyJzeGDKnfMWqHcBvp6amML1TGooRYmmfxIe', '24896ee4c6526356cc127852413ea3b4', 1, 0, '', 'rbdiwash@gmail.com', '2018-12-31', '', 2147483647),
(68, 'Anukul', 'parajuli', 'anukulparajuli@gmail.com', '$2y$10$8UqyxL7I2ISltanUKMIBiOcEbc/S7Amd/..BZE2sMBluEqsLzMDnO', '2723d092b63885e0d7c260cc007e8b9d', 1, 0, '', 'aaa', '2018-02-15', 'male', 987986),
(71, 'Kamal', 'Shrestha', 'stxavier_11c127@yahoo.com', '$2y$10$n9UcNKaT//pOLsvQ9dYscucfilr/TU6bC4Wm49Y3UvBrqKsy1zA/S', '47d1e990583c9c67424d369f3414728e', 1, 0, 'kamal.png', 'kamalshrestha', '1996-01-22', 'male', 9843312567),
(72, 'Atul', 'Paudel', 'atulthegreat7@gmail.com', '$2y$10$KUkDgWy4hpIVxC4fmIZ8g.7v5ouSlWPKBZ0dju7JSAhsSSbjkZgle', '8f85517967795eeef66c225f7883bdcb', 1, 0, '', 'tirirism', '1998-01-01', 'male', 9860924895);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
