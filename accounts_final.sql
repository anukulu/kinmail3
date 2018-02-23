-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2018 at 06:30 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

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

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `message` varchar(500) NOT NULL,
  `hash` varchar(300) NOT NULL,
  `timea` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `username`, `message`, `hash`, `timea`) VALUES
(186, 'Anukul', 'hello', 'Shristy Fashion Royal Blue Fleece Bomber Jacket For Women', '03:22:41pm &nbsp&nbsp2018-02-19'),
(187, 'Kamal', 'hello', 'Razer Goliathus Printed Keyboard And Mouse Pad', '03:40:08pm &nbsp&nbsp2018-02-19'),
(188, 'Anukul', 'hey', 'Razer Goliathus Printed Keyboard And Mouse Pad', '03:41:04pm &nbsp&nbsp2018-02-19'),
(189, 'Kamal', 'whats up?', 'Razer Goliathus Printed Keyboard And Mouse Pad', '03:41:11pm &nbsp&nbsp2018-02-19'),
(190, 'Anukul', 'i am good', 'Razer Goliathus Printed Keyboard And Mouse Pad', '03:41:18pm &nbsp&nbsp2018-02-19'),
(191, 'Kamal', 'hey there', 'Hawa N95 Mask Blue', '03:57:43pm &nbsp&nbsp2018-02-19'),
(192, 'Kamal', 'hello', 'Eryaa Black And White Striped Woolen Hi-Neck Sweater For Women', '04:02:02pm &nbsp&nbsp2018-02-19'),
(193, 'Atul', 'Hello. 100 ma dine vaye linxu', 'WhitePurple Contrast Sleeved Jacket For Women', '04:20:29pm &nbsp&nbsp2018-02-19'),
(194, 'Kamal', 'Hello', 'Hawa N95 Mask Blue', '04:32:00pm &nbsp&nbsp2018-02-19'),
(195, 'Kamal', 'yo', 'Jeans Dog Belt with Leash', '04:47:27pm &nbsp&nbsp2018-02-19'),
(196, 'Kamal', 'yo', 'I6 Smartwatch With Sim And Micro Sd Slot', '04:56:43pm &nbsp&nbsp2018-02-19'),
(197, 'Kamal', 'yo', 'Navy Black Combo Pack Of Two High Waist Fleece Pants   Size', '05:12:50pm &nbsp&nbsp2018-02-19'),
(198, 'Kamal', 'sasto ma dine vayo vane kinne ho??', 'Electronic Milk, Coffee, Egg Frother Mixer', '03:14:14am &nbsp&nbsp2018-02-20'),
(199, 'Anukul', 'nadine', 'Electronic Milk, Coffee, Egg Frother Mixer', '03:14:54am &nbsp&nbsp2018-02-20'),
(200, 'Anukul', 'hello', 'BlackGrey Fleece Windcheater Jacket For Men 112', '04:46:40am &nbsp&nbsp2018-02-20'),
(201, 'Anukul', 'hey man', 'Pancbike MTB Chain Cleaner Machine', '05:24:55am &nbsp&nbsp2018-02-20'),
(202, 'Anukul', 'hey', 'Ramesh Impex Unisex Skinny Gloves Fleece Gloves  Black', '05:35:07am &nbsp&nbsp2018-02-20'),
(203, 'Anukul', 'hey man', 'Ramesh Impex Unisex Skinny Gloves Fleece Gloves  Black', '05:36:10am &nbsp&nbsp2018-02-20'),
(204, 'Anukul', 'hey man', 'Ramesh Impex Unisex Skinny Gloves Fleece Gloves  Black', '10:26:51am &nbsp&nbsp2018-02-20'),
(205, 'Anukul', 'hey man', 'Mouse', '10:31:43am &nbsp&nbsp2018-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `offers_hash` varchar(500) NOT NULL,
  `offered_to` varchar(500) NOT NULL,
  `offered_by` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `price` int(11) NOT NULL,
  `hash` varchar(500) NOT NULL,
  `keywords` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `category` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `user`, `rating`, `comments`) VALUES
(12, '4e4b5fbbbb602b6d35bea8460aa8f8e5', 7, '654Enter comments here...');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `requests_hash` varchar(500) NOT NULL,
  `requested_by` varchar(500) NOT NULL,
  `requested_to` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
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
  `contact` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `hash`, `active`, `loggedin`, `avatar`, `username`, `dob`, `gender`, `contact`) VALUES
(57, 'Anukul', 'parajuli', 'anukulparajuli9@gmail.com', '$2y$10$aEiCN5uiG3CpvExFHByU0e81qt2AyD0GVI0ONwtdyvG8jjjj/PGbe', '4e4b5fbbbb602b6d35bea8460aa8f8e5', 1, 0, '2.jpg', 'aaa', '2018-11-30', 'male', 2147483647),
(64, 'Anukul', 'parajuli', 'rbdiwash48@gmail.com', '$2y$10$wz7Y3ieEIeuHnfvNYwyJzeGDKnfMWqHcBvp6amML1TGooRYmmfxIe', '24896ee4c6526356cc127852413ea3b4', 1, 0, '', 'rbdiwash@gmail.com', '2018-12-31', '', 2147483647),
(68, 'Anukul', 'parajuli', 'anukulparajuli@gmail.com', '$2y$10$8UqyxL7I2ISltanUKMIBiOcEbc/S7Amd/..BZE2sMBluEqsLzMDnO', '2723d092b63885e0d7c260cc007e8b9d', 1, 0, '', 'aaa', '2018-02-15', 'male', 987986),
(71, 'Kamal', 'Shrestha', 'stxavier_11c127@yahoo.com', '$2y$10$n9UcNKaT//pOLsvQ9dYscucfilr/TU6bC4Wm49Y3UvBrqKsy1zA/S', '47d1e990583c9c67424d369f3414728e', 1, 0, 'kamal.png', 'kamalshrestha', '1996-01-22', 'male', 9843312567),
(72, 'Atul', 'Paudel', 'atulthegreat7@gmail.com', '$2y$10$KUkDgWy4hpIVxC4fmIZ8g.7v5ouSlWPKBZ0dju7JSAhsSSbjkZgle', '8f85517967795eeef66c225f7883bdcb', 1, 0, '', 'tirirism', '1998-01-01', 'male', 9860924895),
(74, 'anukul', 'aaa', 'bhandarimadans9@gmail.com', '$2y$10$rjH6ifOjBM3JWTd3HGZo4OlPZIzVMv99VIO3ywpij4wN8v3Uj2RVi', 'faa9afea49ef2ff029a833cccc778fd0', 1, 1, '', 'anukul', '2018-02-14', 'male', 2324);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
