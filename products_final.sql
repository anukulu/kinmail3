-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2018 at 06:31 AM
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
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `appliances`
--

CREATE TABLE `appliances` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `Description` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `negotiable` varchar(300) DEFAULT NULL,
  `productcondition` varchar(300) DEFAULT NULL,
  `usedfor` varchar(300) NOT NULL,
  `warrantyperiod` int(11) DEFAULT NULL,
  `warrantyincludes` varchar(300) DEFAULT NULL,
  `homedelivery` varchar(300) DEFAULT NULL,
  `imagepath1` varchar(300) DEFAULT NULL,
  `imagepath2` varchar(500) DEFAULT NULL,
  `imagepath3` varchar(500) DEFAULT NULL,
  `keywords` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appliances`
--

INSERT INTO `appliances` (`id`, `title`, `price`, `Description`, `email`, `hash`, `negotiable`, `productcondition`, `usedfor`, `warrantyperiod`, `warrantyincludes`, `homedelivery`, `imagepath1`, `imagepath2`, `imagepath3`, `keywords`) VALUES
(2, 'Stainless Steel Electric Kettle  2 Ltr', 550, '', 'anukulparajuli272@gmail.com', '185c29dc24325934ee377cfda20e414c', 'Fixed Price', 'Excellent', '5', 1, 'nothing', 'NO', 'images/1 (12).jpg', 'images/2 (10).jpg', 'NULL', 'Stainless Steel Electric Kettle  2 Ltr'),
(3, 'Double Rod Heater', 930, '', 'anukulparajuli708@gmail.com', '735b90b4568125ed6c3f678819b6e058', 'Yes', 'Excellent', '0', 7, 'nothing', 'YES', 'images/1 (13).jpg', 'images/', 'NULL', 'Double Rod Heater'),
(4, 'Sherpa Ventures Non-corrosive Water Proof Immersion Water Heating Rod [Multicolor]', 235, '', 'anukulparajuli952@gmail.com', 'f770b62bc8f42a0b66751fe636fc6eb0', 'Fixed Price', 'Brand New(Not Used)', '0', 888, '', 'YES', 'images/1 (14).jpg', 'images/', 'NULL', 'Sherpa Ventures Non-corrosive Water Proof Immersion Water Heating Rod [Multicolor]'),
(5, 'Dikom SM-GPO3 3 Burner Gas Stove (Black)', 4300, '', 'anukulparajuli667@gmail.com', '9461cce28ebe3e76fb4b931c35a169b0', 'Yes', 'Brand New(Not Used)', '0', 7, 'nothing', 'YES', 'images/1 (15).jpg', 'images/', 'NULL', 'Dikom SM-GPO3 3 Burner Gas Stove (Black)'),
(6, 'Whirlpool 80H 10YMW 8Kg Capacity 360 Degree World Series Washing Machine (Grey)', 44500, '', 'anukulparajuli255@gmail.com', '9c838d2e45b2ad1094d42f4ef36764f6', 'Yes', 'Excellent', '0', 1, 'Everything for a year', 'NO', 'images/1 (16).jpg', 'images/', 'NULL', 'Whirlpool 80H 10YMW 8Kg Capacity 360 Degree World Series Washing Machine (Grey)'),
(7, 'LG F1408NC3W 8KG Front Load Washing Machine  White', 77900, '', 'anukulparajuli948@gmail.com', '084b6fbb10729ed4da8c3d3f5a3ae7c9', 'Fixed Price', 'Excellent', '0', 12, 'nothing', 'NO', 'images/1 (17).jpg', 'images/', 'NULL', 'LG F1408NC3W 8KG Front Load Washing Machine  White'),
(8, 'IFB 25DGSC1 25Ltr Convection Series Microwave Oven (Metallic)', 25415, '', 'anukulparajuli883@gmail.com', '43ec517d68b6edd3015b3edc9a11367b', 'Yes', 'Brand New(Not Used)', '0', 8, '', 'NO', 'images/1 (18).jpg', 'images/', 'NULL', 'IFB 25DGSC1 25Ltr Convection Series Microwave Oven (Metallic)'),
(9, 'Samsung RR19M2102SE IM Single Door Refrigerator 192ltr', 24790, '', 'anukulparajuli765@gmail.com', '0aa1883c6411f7873cb83dacb17b0afc', 'Yes', 'Excellent', '0', 12, '', 'NO', 'images/1 (19).jpg', 'images/', 'NULL', 'Samsung RR19M2102SE IM Single Door Refrigerator 192ltr'),
(10, 'Fujix Gas Heater', 13200, '', 'anukulparajuli252@gmail.com', '0d3180d672e08b4c5312dcdafdf6ef36', 'Yes', 'Like New(Used Few Times)', '8', 11, '', 'NO', 'images/1 (20).jpg', 'images/', 'NULL', 'Fujix Gas Heater'),
(11, 'Mai Meat Mincer (Keema Maker)', 2000, '', 'anukulparajuli678@gmail.com', '8fe0093bb30d6f8c31474bd0764e6ac0', 'Yes', 'Like New(Used Few Times)', '444', 888, '', 'NO', 'images/1 (21).jpg', 'images/2 (11).jpg', 'NULL', 'Mai Meat Mincer (Keema Maker)'),
(12, 'The Toy Store Racing Car With Remote Control', 1395, '', 'anukulparajuli250@gmail.com', 'f79921bbae40a577928b76d2fc3edc2a', 'Yes', 'Brand New(Not Used)', '0', 1, '', 'NO', 'images/1 (25).jpg', 'images/2 (13).jpg', 'NULL', 'The Toy Store Racing Car With Remote Control'),
(13, 'Baby Cards', 200, '', 'anukulparajuli338@gmail.com', '9b72e31dac81715466cd580a448cf823', 'Fixed Price', 'Brand New(Not Used)', '0', 1, '', 'NO', 'images/1 (26).jpg', 'images/', 'NULL', 'Baby Cards'),
(14, 'The Toy Store Trundle Phantom Remote Control Car', 1750, '', 'anukulparajuli982@gmail.com', '8c6744c9d42ec2cb9e8885b54ff744d0', 'Fixed Price', 'Excellent', '0', 1, 'nothing', 'YES', 'images/1 (27).jpg', 'images/2 (14).jpg', 'NULL', 'The Toy Store Trundle Phantom Remote Control Car'),
(20, 'test', 18, ' asakjdsahdkjhs', 'stxavier_11c127@yahoo.com', '64223ccf70bbb65a3a4aceac37e21016', 'Fixed Price', 'Brand New(Not Used)', '9', 8, 'Manufacturer', 'YES', 'images/9898.jpg', 'images/9.png', 'NULL', 'testappliances'),
(21, 'test2', 1231, ' adsd', 'anukulparajuli9@gmail.com', 'e4a6222cdb5b34375400904f03d8e6a5', 'Yes', 'Brand New(Not Used)', '23', 1, 'Dealer/Shop', 'YES', 'images/bisal.jpg', 'images/robotics club.jpg', 'NULL', 'test2appliances'),
(22, 'Mouse', 4334, 'new mouse ', 'anukulparajuli9@gmail.com', '854d6fae5ee42911677c739ee1734486', 'Fixed Price', 'Brand New(Not Used)', '12', 1, 'Dealer/Shop', 'YES', 'images/4.jpg', 'images/4.jpg', 'NULL', 'Mouseappliances');

-- --------------------------------------------------------

--
-- Table structure for table `baby, toys and kids`
--

CREATE TABLE `baby, toys and kids` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `Description` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `negotiable` varchar(255) DEFAULT NULL,
  `productcondition` varchar(255) DEFAULT NULL,
  `usedfor` varchar(255) DEFAULT NULL,
  `warrantyperiod` int(11) DEFAULT NULL,
  `warrantyincludes` varchar(255) DEFAULT NULL,
  `homedelivery` varchar(255) DEFAULT NULL,
  `imagepath1` varchar(255) DEFAULT NULL,
  `imagepath2` varchar(255) DEFAULT NULL,
  `imagepath3` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baby, toys and kids`
--

INSERT INTO `baby, toys and kids` (`id`, `title`, `price`, `Description`, `email`, `hash`, `negotiable`, `productcondition`, `usedfor`, `warrantyperiod`, `warrantyincludes`, `homedelivery`, `imagepath1`, `imagepath2`, `imagepath3`, `keywords`) VALUES
(4, 'The Toy Store JUMPBO Quadcopter Drone (5CHannel 6 axis Gyroscope)', 18900, '', 'anukulparajuli662@gmail.com', '99bcfcd754a98ce89cb86f73acc04645', 'Yes', 'Like New(Used Few Times)', '0', 1, '', 'NO', 'images/1 (24).jpg', 'images/2 (12).jpg', 'NULL', 'The Toy Store JUMPBO Quadcopter Drone (5CHannel 6 axis Gyroscope)'),
(3, 'Philips SCF55100 Avent Classic Spout Cup 7oz Single Mix', 770, '', 'anukulparajuli483@gmail.com', 'd56b9fc4b0f1be8871f5e1c40c0067e7', 'Yes', 'Excellent', '8', 7, '', 'YES', 'images/1 (27).jpg', 'images/', 'NULL', 'Philips SCF551/00 Avent Classic Spout Cup 7oz Single Mix'),
(5, 'The Toy Store Honda Dirt Bike 1:6 Die-Cast', 7750, '', 'anukulparajuli666@gmail.com', '0266e33d3f546cb5436a10798e657d97', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (28).jpg', 'images/2 (15).jpg', 'NULL', 'The Toy Store Honda Dirt Bike 1:6 Die-Cast'),
(6, 'Philips SCF70200 Toddler Divider Plate-Multicolor', 1040, '', 'anukulparajuli782@gmail.com', '4b04a686b0ad13dce35fa99fa4161c65', 'Yes', 'Brand New(Not Used)', '0', 1, '', 'YES', 'images/1 (29).jpg', 'images/', 'NULL', 'Philips SCF702/00 Toddler Divider Plate-Multicolor'),
(7, 'Philips SCF60805 Avent Decorated Toddler Cup Boy With Handle', 695, '', 'anukulparajuli12@gmail.com', '389bc7bb1e1c2a5e7e147703232a88f6', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (30).jpg', 'images/', 'NULL', 'Philips SCF60805 Avent Decorated Toddler Cup Boy With Handle'),
(8, 'The Toy Store Suzuki Dirt Bike 16 DieCast', 7750, '', 'anukulparajuli746@gmail.com', '96ea64f3a1aa2fd00c72faacf0cb8ac9', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/2 (16).jpg', 'images/1 (31).jpg', 'NULL', 'The Toy Store Suzuki Dirt Bike 16 DieCast'),
(13, 'Philips SCF172/70 Avent Classic Pacifier', 890, '', 'anukulparajuli151@gmail.com', 'f4be00279ee2e0a53eafdaa94a151e2c', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'NO', 'images/1 (36).jpg', 'images/', 'NULL', 'Philips SCF172/70 Avent Classic Pacifier'),
(14, 'Mega Bloks Small Box Of Blocks60 pieces', 640, '', 'anukulparajuli341@gmail.com', '08c5433a60135c32e34f46a71175850c', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (37).jpg', 'images/', 'NULL', 'Mega Bloks Small Box Of Blocks60 pieces'),
(11, 'Philips SCF71800 Cutlery Travel Set Orange', 1060, '', 'anukulparajuli251@gmail.com', '31839b036f63806cba3f47b93af8ccb5', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (34).jpg', 'images/', 'NULL', 'Philips SCF718/00 Cutlery Travel Set Orange'),
(12, 'Philips SCF75300 Premium Spout 9oz Single Mix', 1100, '', 'anukulparajuli875@gmail.com', '2ab56412b1163ee131e1246da0955bd1', 'Yes', 'Brand New(Not Used)', '0', 888, 'ppp', 'NO', 'images/1 (35).jpg', 'images/', 'NULL', 'Philips SCF75300 Premium Spout 9oz Single Mix'),
(15, '2 in 1 Baby Bag and Travel Bed', 2950, '', 'anukulparajuli949@gmail.com', '2b44928ae11fb9384c4cf38708677c48', 'Yes', 'Brand New(Not Used)', '0', 1, '', 'YES', 'images/1 (38).jpg', 'images/', 'NULL', '2 in 1 Baby Bag and Travel Bed');

-- --------------------------------------------------------

--
-- Table structure for table `beauty and health`
--

CREATE TABLE `beauty and health` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `Description` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `negotiable` varchar(300) DEFAULT NULL,
  `productcondition` varchar(300) DEFAULT NULL,
  `usedfor` varchar(300) DEFAULT NULL,
  `warrantyperiod` int(11) DEFAULT NULL,
  `warrantyincludes` varchar(300) DEFAULT NULL,
  `homedelivery` varchar(300) DEFAULT NULL,
  `imagepath1` varchar(300) DEFAULT NULL,
  `imagepath2` varchar(500) DEFAULT NULL,
  `imagepath3` varchar(500) DEFAULT NULL,
  `keywords` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beauty and health`
--

INSERT INTO `beauty and health` (`id`, `title`, `price`, `Description`, `email`, `hash`, `negotiable`, `productcondition`, `usedfor`, `warrantyperiod`, `warrantyincludes`, `homedelivery`, `imagepath1`, `imagepath2`, `imagepath3`, `keywords`) VALUES
(1, 'Spawake Whitening Ultra Fresh Gel Cream25 gm', 207, '', 'anukulparajuli750@gmail.com', 'c9e1074f5b3f9fc8ea15d152add07294', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (62).jpg', 'images/', 'NULL', 'Spawake Whitening Ultra Fresh Gel Cream25 gm'),
(2, 'Hawa N95 Mask Blue', 285, '', 'anukulparajuli98@gmail.com', '15de21c670ae7c3f6f3f1f37029303c9', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (63).jpg', 'images/', 'NULL', 'Hawa N95 Mask Blue'),
(3, 'Handy Head Massager', 100, '', 'anukulparajuli212@gmail.com', '54229abfcfa5649e7003b83dd4755294', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (64).jpg', 'images/', 'NULL', 'Handy Head Massager'),
(4, 'Pax Moly Korean Aloe Vera Soothing Gel Jeju Aloe  300g', 690, '', 'anukulparajuli525@gmail.com', '15de21c670ae7c3f6f3f1f37029303c9', 'Yes', 'Brand New(Not Used)', '0', 7, 'nothing', 'YES', 'images/1 (65).jpg', 'images/', 'NULL', 'Pax Moly Korean Aloe Vera Soothing Gel Jeju Aloe  300g'),
(5, 'Bio oil Purcellin Oil  60ml', 720, '', 'anukulparajuli101@gmail.com', '54229abfcfa5649e7003b83dd4755294', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (66).jpg', 'images/', 'NULL', 'Bio oil Purcellin Oil  60ml'),
(6, 'Nickak Perfect Nude Eye Palettes by Nicka K New York', 630, '', 'anukulparajuli771@gmail.com', '647bba344396e7c8170902bcf2e15551', 'Yes', 'Brand New(Not Used)', '0', 7, 'nothing', 'YES', 'images/1 (67).jpg', 'images/', 'NULL', 'Nickak Perfect Nude Eye Palettes by Nicka K New York'),
(7, 'Maybelline Color Sensational  The Lipstick 132 Sweet Pink', 790, '', 'anukulparajuli602@gmail.com', '0336dcbab05b9d5ad24f4333c7658a0e', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (68).jpg', 'images/', 'NULL', 'Maybelline Color Sensational  The Lipstick 132 Sweet Pink'),
(8, 'Dove Gentle Exfoliating Beauty Cream Bar Soap 100 gm', 95, '', 'anukulparajuli849@gmail.com', 'b337e84de8752b27eda3a12363109e80', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (69).jpg', 'images/', 'NULL', 'Dove Gentle Exfoliating Beauty Cream Bar Soap 100 gm'),
(9, 'The Body Shop Honeymania Shower Gel tbs 08120 60ml', 390, '', 'anukulparajuli991@gmail.com', '577bcc914f9e55d5e4e4f82f9f00e7d4', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (70).jpg', 'images/', 'NULL', 'The Body Shop Honeymania Shower Gel tbs 08120 60ml'),
(10, 'Maybelline Color Sensational  The Lipstick 547 Pleasure Me Red', 788, '', 'anukulparajuli989@gmail.com', '3ef815416f775098fe977004015c6193', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (72).jpg', 'images/', 'NULL', 'Maybelline Color Sensational  The Lipstick 547 Pleasure Me Red'),
(11, 'MeNow Mist  Fix Makeup Setting Spray 75 ml', 600, '', 'anukulparajuli388@gmail.com', '63538fe6ef330c13a05a3ed7e599d5f7', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (73).jpg', 'images/', 'NULL', 'MeNow Mist & Fix Makeup Setting Spray 75 ml');

-- --------------------------------------------------------

--
-- Table structure for table `books and stationery`
--

CREATE TABLE `books and stationery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `Description` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `negotiable` varchar(255) DEFAULT NULL,
  `productcondition` varchar(255) DEFAULT NULL,
  `usedfor` varchar(255) DEFAULT NULL,
  `warrantyperiod` int(11) DEFAULT NULL,
  `warrantyincludes` varchar(255) DEFAULT NULL,
  `homedelivery` varchar(255) DEFAULT NULL,
  `imagepath1` varchar(255) DEFAULT NULL,
  `imagepath2` varchar(255) DEFAULT NULL,
  `imagepath3` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books and stationery`
--

INSERT INTO `books and stationery` (`id`, `title`, `price`, `Description`, `email`, `hash`, `negotiable`, `productcondition`, `usedfor`, `warrantyperiod`, `warrantyincludes`, `homedelivery`, `imagepath1`, `imagepath2`, `imagepath3`, `keywords`) VALUES
(1, 'Panch Pokhari Book Store Maha ko Ma  Madan Krishna Shrestha', 576, '', 'anukulparajuli389@gmail.com', '3621f1454cacf995530ea53652ddf8fb', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (74).jpg', 'images/', 'NULL', 'Panch Pokhari Book Store Maha ko Ma  Madan Krishna Shrestha'),
(2, ' A Pocket Full Of Rye  Agatha Christie', 280, '', 'anukulparajuli510@gmail.com', '1e056d2b0ebd5c878c550da6ac5d3724', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (75).jpg', 'images/', 'NULL', ' A Pocket Full Of Rye  Agatha Christie'),
(3, 'Windmills Of The Gods Sidney Sheldon', 480, '', 'anukulparajuli970@gmail.com', '0cb929eae7a499e50248a3a78f7acfc7', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (76).jpg', 'images/', 'NULL', 'Windmills Of The Gods Sidney Sheldon'),
(4, 'Dream Makers  Nora Roberts', 527, '', 'anukulparajuli415@gmail.com', '53c3bce66e43be4f209556518c2fcb54', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (77).jpg', 'images/', 'NULL', 'Dream Makers  Nora Roberts'),
(13, 'Romeo And Juliet William Shakespeare', 184, '', 'anukulparajuli116@gmail.com', '3cec07e9ba5f5bb252d13f5f431e4bbb', 'Yes', 'Brand New(Not Used)', '0', 7, 'nothing', 'YES', 'images/1 (86).jpg', 'images/', 'NULL', 'Romeo And Juliet William Shakespeare'),
(14, ' The Alchemist A Graphic Novel  Paulo Coelho', 640, '', 'anukulparajuli255@gmail.com', 'c8fbbc86abe8bd6a5eb6a3b4d0411301', 'Yes', 'Brand New(Not Used)', '', 1, 'nothing', '', 'images/1 (87).jpg', 'images/', 'NULL', ' The Alchemist A Graphic Novel  Paulo Coelho'),
(12, ' The Incredible Banker  Ravi Subramanian', 400, '', 'anukulparajuli433@gmail.com', '8f468c873a32bb0619eaeb2050ba45d1', 'Yes', 'Like New(Used Few Times)', '8', 7, 'Book Cover', 'NO', 'images/1 (85).jpg', 'images/', 'NULL', ' The Incredible Banker  Ravi Subramanian'),
(15, 'Great Falls  Krishana Dharabasi', 450, '', 'anukulparajuli25@gmail.com', '539fd53b59e3bb12d203f45a912eeaf2', 'Yes', 'Brand New(Not Used)', '0', 7, 'ppp', '', 'images/1 (88).jpg', 'images/', 'NULL', 'Great Falls  Krishana Dharabasi'),
(9, 'Tuin  Suresh Pranjali', 275, '', 'anukulparajuli497@gmail.com', '74db120f0a8e5646ef5a30154e9f6deb', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (82).jpg', 'images/', 'NULL', 'Tuin  Suresh Pranjali'),
(11, 'The Go-Giver A Little Story About a Powerful Business Idea', 500, '', 'anukulparajuli318@gmail.com', '6bc24fc1ab650b25b4114e93a98f1eba', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (84).jpg', 'images/', 'NULL', 'The Go-Giver A Little Story About a Powerful Business Idea');

-- --------------------------------------------------------

--
-- Table structure for table `computer and gaming`
--

CREATE TABLE `computer and gaming` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `Description` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `negotiable` varchar(300) DEFAULT NULL,
  `productcondition` varchar(300) DEFAULT NULL,
  `usedfor` varchar(300) DEFAULT NULL,
  `warrantyperiod` int(11) DEFAULT NULL,
  `warrantyincludes` varchar(300) DEFAULT NULL,
  `homedelivery` varchar(300) DEFAULT NULL,
  `imagepath1` varchar(300) DEFAULT NULL,
  `imagepath2` varchar(500) DEFAULT NULL,
  `imagepath3` varchar(500) DEFAULT NULL,
  `keywords` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer and gaming`
--

INSERT INTO `computer and gaming` (`id`, `title`, `price`, `Description`, `email`, `hash`, `negotiable`, `productcondition`, `usedfor`, `warrantyperiod`, `warrantyincludes`, `homedelivery`, `imagepath1`, `imagepath2`, `imagepath3`, `keywords`) VALUES
(3, 'Samsung S24F350FHW 24-Inch LED Monitor With AH IPS', 16705, '', 'anukulparajuli599@gmail.com', '0b8aff0438617c055eb55f0ba5d226fa', 'Fixed Price', 'Brand New(Not Used)', '0', 1, 'Samsung MagicBright :Yes Samsung MagicUpscale :Yes Eco Saving Plus :Yes Eye Saver Mode :Yes Flicker Free :Yes Game Mode :Yes', 'YES', 'images/2 (4).jpg', 'images/3 (1)', 'NULL', ' Samsung Samsung S24F350FHW 24-Inch LED Monitor With AH IPS'),
(4, 'Wireless Mouse', 349, '', 'anukulparajuli64@gmail.com', 'a86c450b76fb8c371afead6410d55534', 'Fixed Price', 'Like New(Used Few Times)', '0', 1, 'This is a apple wireless mouse for your PC and laptop, NoteL it is not OEM, it is not from apple official, it is made in China. The quality is great though. 2.4 GHz Wireless Mouse.', 'YES', 'images/1 (4).jpg', 'images/1 (4).jpg', 'NULL', 'Wireless Mouse'),
(5, 'Apple MacBook Air 13-inch 1.8GHz Dual-core Intel Core i5, 128GB (2017 Model)', 128000, '', 'anukulparajuli501@gmail.com', 'a7aeed74714116f3b292a982238f83d2', 'Yes', 'Excellent', '0', 1, '1.8 GHz Intel Core i5 Dual-Core 8GB of 1600 MHz LPDDR3 RAM - 128GB SSD Integrated Intel HD Graphics 6000 13.3\" 1440 x 900 Glossy Display 802.11ac Wi-Fi - Bluetooth 4.0 Thunderbolt 2 - USB 3.0', 'YES', 'images/1 (5).jpg', 'images/2 (5).jpg', 'NULL', 'Apple MacBook Air 13-inch 1.8GHz Dual-core Intel Core i5, 128GB (2017 Model)'),
(6, 'Dell Inspiron 7567  15.6 FHD   i7 7700HQ/GTX 1050/16GB/1TB HDD128GB SSD Laptop', 130720, '', 'anukulparajuli292@gmail.com', '142949df56ea8ae0be8b5306971900a4', 'Yes', 'Like New(Used Few Times)', '0', 1, 'nothing', 'YES', 'images/1 (6).jpg', 'images/2 (6).jpg', 'NULL', 'Dell Inspiron 7567  15.6 FHD   i7 7700HQ/GTX 1050/16GB/1TB HDD128GB SSD Laptop'),
(7, 'USB Joystick For Laptop  Desktop', 15000, '', 'anukulparajuli183@gmail.com', '24b16fede9a67c9251d3e7c7161c83ac', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/11.jpg', 'images/', 'NULL', 'USB Joystick For Laptop  Desktop'),
(8, 'High Quality AntiTheft Backpack New Design Black', 2170, '', 'anukulparajuli875@gmail.com', 'd3d9446802a44259755d38e6d163e820', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/b.jpg', 'images/bb.jpg', 'NULL', 'High Quality AntiTheft Backpack New Design Black'),
(9, 'Cleaner Kit for Computer and Laptop', 100, '', 'anukulparajuli596@gmail.com', 'abd815286ba1007abfbb8415b83ae2cf', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/c.jpg', 'images/', 'NULL', 'Cleaner Kit for Computer and Laptop'),
(10, 'Normal Mouse Pad', 55, '', 'anukulparajuli273@gmail.com', 'd296c101daa88a51f6ca8cfc1ac79b50', 'Yes', 'Brand New(Not Used)', '0', 1, '', 'YES', 'images/mm.jpg', 'images/', 'NULL', 'Normal Mouse Pad'),
(11, 'Razer Goliathus Printed Keyboard And Mouse Pad', 475, '', 'anukulparajuli407@gmail.com', 'bd686fd640be98efaae0091fa301e613', 'Yes', 'Brand New(Not Used)', '8', 7, 'ppp', 'NO', 'images/mmm.jpg', 'images/', 'NULL', 'Razer Goliathus Printed Keyboard And Mouse Pad'),
(12, ' USB LED Flexible Lamp Light', 99, '', 'anukulparajuli299@gmail.com', 'f1c1592588411002af340cbaedd6fc33', 'Fixed Price', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/l.jpg', 'images/', 'NULL', ' USB LED Flexible Lamp Light');

-- --------------------------------------------------------

--
-- Table structure for table `home and living`
--

CREATE TABLE `home and living` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `Description` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `negotiable` varchar(255) DEFAULT NULL,
  `productcondition` varchar(255) DEFAULT NULL,
  `usedfor` varchar(255) DEFAULT NULL,
  `warrantyperiod` int(11) DEFAULT NULL,
  `warrantyincludes` varchar(255) DEFAULT NULL,
  `homedelivery` varchar(255) DEFAULT NULL,
  `imagepath1` varchar(255) DEFAULT NULL,
  `imagepath2` varchar(255) DEFAULT NULL,
  `imagepath3` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home and living`
--

INSERT INTO `home and living` (`id`, `title`, `price`, `Description`, `email`, `hash`, `negotiable`, `productcondition`, `usedfor`, `warrantyperiod`, `warrantyincludes`, `homedelivery`, `imagepath1`, `imagepath2`, `imagepath3`, `keywords`) VALUES
(2, 'Six Layers Double Compartment Shoe Rack SD 6', 3499, '', 'anukulparajuli752@gmail.com', '335f5352088d7d9bf74191e006d8e24c', 'Fixed Price', 'Like New(Used Few Times)', '0', 7, 'nothing', 'YES', 'images/rrr.jpg', 'images/', 'NULL', 'Six Layers Double Compartment Shoe Rack SD 6'),
(3, 'Orange PRUTA Top Quality Durable Plastic Food Container 17 Pcs Orange', 1299, '', 'anukulparajuli854@gmail.com', 'f1b6f2857fb6d44dd73c7041e0aa0f19', 'Yes', 'Brand New(Not Used)', '0', 7, 'ppp', 'YES', 'images/oooo.jpg', 'images/', 'NULL', 'Orange PRUTA Top Quality Durable Plastic Food Container 17 Pcs Orange'),
(4, 'Toothpaste Dispenser Cum Stand', 600, '', 'anukulparajuli988@gmail.com', '2838023a778dfaecdc212708f721b788', 'Yes', 'Brand New(Not Used)', '0', 888, '8787', '', 'images/ttt.jpg', 'images/', 'NULL', 'Toothpaste Dispenser Cum Stand'),
(5, 'Electronic Milk, Coffee, Egg Frother Mixer', 299, '', 'anukulparajuli684@gmail.com', 'daca41214b39c5dc66674d09081940f0', 'Yes', 'Brand New(Not Used)', '0', 888, 'nothing', 'YES', 'images/ss.jpg', 'images/', 'NULL', 'Electronic Milk, Coffee, Egg Frother Mixer'),
(6, 'Waterproof Dish Washing And Cleaning Gloves', 300, '', 'anukulparajuli438@gmail.com', '185e65bc40581880c4f2c82958de8cfe', 'Yes', 'Brand New(Not Used)', '0', 1, '', 'YES', 'images/hh.jpg', 'images/', 'NULL', 'Waterproof Dish Washing And Cleaning Gloves'),
(7, 'Electric Heated Blanket EB003 190 170cms', 2500, '', 'anukulparajuli127@gmail.com', '01386bd6d8e091c2ab4c7c7de644d37b', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/bb.jpg', 'images/', 'NULL', 'Electric Heated Blanket EB003 190 170cms'),
(8, 'Coffee Brown Printed Super Vella Bedsheet With 2 Pillow Covers Free SVCB001', 999, '', 'anukulparajuli145@gmail.com', 'd67d8ab4f4c10bf22aa353e27879133c', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/nnnn.jpg', 'images/', 'NULL', 'Coffee Brown Printed Super Vella Bedsheet With 2 Pillow Covers Free SVCB001'),
(9, 'Black Printed Cotton Bedsheet With FREE Pillow Covers BL001', 1200, '', 'anukulparajuli871@gmail.com', '8757150decbd89b0f5442ca3db4d0e0e', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/bbb.jpg', 'images/', 'NULL', 'Black Printed Cotton Bedsheet With FREE Pillow Covers BL001'),
(10, 'Table Umbrella', 500, '', 'anukulparajuli621@gmail.com', 'fc8001f834f6a5f0561080d134d53d29', 'Fixed Price', 'Like New(Used Few Times)', '8', 1, 'nothing', 'NO', 'images/tttt.jpg', 'images/', 'NULL', 'Table Umbrella');

-- --------------------------------------------------------

--
-- Table structure for table `mens fashion`
--

CREATE TABLE `mens fashion` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `Description` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `negotiable` varchar(300) DEFAULT NULL,
  `productcondition` varchar(300) DEFAULT NULL,
  `usedfor` varchar(300) DEFAULT NULL,
  `warrantyperiod` int(11) DEFAULT NULL,
  `warrantyincludes` varchar(300) DEFAULT NULL,
  `homedelivery` varchar(300) DEFAULT NULL,
  `imagepath1` varchar(300) DEFAULT NULL,
  `imagepath2` varchar(500) DEFAULT NULL,
  `imagepath3` varchar(500) DEFAULT NULL,
  `keywords` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mens fashion`
--

INSERT INTO `mens fashion` (`id`, `title`, `price`, `Description`, `email`, `hash`, `negotiable`, `productcondition`, `usedfor`, `warrantyperiod`, `warrantyincludes`, `homedelivery`, `imagepath1`, `imagepath2`, `imagepath3`, `keywords`) VALUES
(5, 'Titan 9441KM02 White Dial Analog Watch For Men', 1990, '', 'anukulparajuli256@gmail.com', '3e89ebdb49f712c7d90d1b39e348bbbf', 'Yes', 'Brand New(Not Used)', '0', 1, '', 'YES', 'images/1 (39).jpg', 'images/', 'NULL', 'Titan 9441KM02 White Dial Analog Watch For Men'),
(6, 'Ramesh Impex Unisex Skinny Gloves Fleece Gloves  Black', 105, '', 'anukulparajuli965@gmail.com', '6f2268bd1d3d3ebaabb04d6b5d099425', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (40).jpg', 'images/', 'NULL', 'Ramesh Impex Unisex Skinny Gloves Fleece Gloves  Black'),
(7, 'BlackGrey Fleece Windcheater Jacket For Men 112', 945, '', 'anukulparajuli877@gmail.com', 'aba3b6fd5d186d28e06ff97135cade7f', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (41).jpg', 'images/', 'NULL', 'BlackGrey Fleece Windcheater Jacket For Men 112'),
(8, 'Ramesh Impex Black Freeze Out Winter Hand Gloves', 449, '', 'anukulparajuli373@gmail.com', '320722549d1751cf3f247855f937b982', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (42).jpg', 'images/', 'NULL', 'Ramesh Impex Black Freeze Out Winter Hand Gloves'),
(9, 'Camo Flag Black Fleece Chest Guard Jacket For Men 222', 1060, '', 'anukulparajuli996@gmail.com', '9b698eb3105bd82528f23d0c92dedfc0', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (43).jpg', 'images/', 'NULL', 'Camo Flag Black Fleece Chest Guard Jacket For Men 222'),
(10, 'J.Fisher Camoflage Chest Guard Half Jacket For Men', 885, '', 'anukulparajuli160@gmail.com', '46ba9f2a6976570b0353203ec4474217', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (44).jpg', 'images/', 'NULL', 'J.Fisher Camoflage Chest Guard Half Jacket For Men'),
(11, 'Ramesh Impex M1 Ninja Mask  Black', 229, '', 'anukulparajuli960@gmail.com', 'd79aac075930c83c2f1e369a511148fe', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (45).jpg', 'images/', 'NULL', 'Ramesh Impex M1 Ninja Mask  Black'),
(12, 'Ramesh Impex Black City Hand Gloves', 899, '', 'anukulparajuli439@gmail.com', 'a8849b052492b5106526b2331e526138', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (46).jpg', 'images/', 'NULL', 'Ramesh Impex Black City Hand Gloves'),
(13, 'Culture Solid Regular Chinos Pants For Men Smokey Grey', 1325, '', 'anukulparajuli210@gmail.com', '559cb990c9dffd8675f6bc2186971dc2', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (47).jpg', 'images/', 'NULL', 'Culture Solid Regular Chinos Pants For Men Smokey Grey'),
(14, 'Ramesh Impex Pack of 3 Pairs Daihsu Woolen Socks', 499, '', 'anukulparajuli439@gmail.com', '74db120f0a8e5646ef5a30154e9f6deb', 'Yes', 'Brand New(Not Used)', '0', 1, '', 'YES', 'images/1 (48).jpg', 'images/', 'NULL', 'Ramesh Impex Pack of 3 Pairs Daihsu Woolen Socks'),
(15, 'Le Fabec Dark Green Long Winter Coat For Men', 48000, '', 'anukulparajuli960@gmail.com', '06409663226af2f3114485aa4e0a23b4', 'Yes', 'Brand New(Not Used)', '8', 1, '', 'YES', 'images/1 (49).jpg', 'images/', 'NULL', 'Le Fabec Dark Green Long Winter Coat For Men'),
(16, 'Fila PLAYER 2 Basketball Shoes For Men WhiteBlackRed', 4999, '', 'anukulparajuli439@gmail.com', 'f0935e4cd5920aa6c7c996a5ee53a70f', 'Fixed Price', 'Brand New(Not Used)', '444', 1, 'nothing', 'NO', 'images/1 (50).jpg', 'images/', 'NULL', 'Fila PLAYER 2 Basketball Shoes For Men WhiteBlackRed');

-- --------------------------------------------------------

--
-- Table structure for table `other categories`
--

CREATE TABLE `other categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `Description` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `negotiable` varchar(255) DEFAULT NULL,
  `productcondition` varchar(255) DEFAULT NULL,
  `usedfor` varchar(255) DEFAULT NULL,
  `warrantyperiod` int(11) DEFAULT NULL,
  `warrantyincludes` varchar(255) NOT NULL,
  `homedelivery` varchar(255) DEFAULT NULL,
  `imagepath1` varchar(255) DEFAULT NULL,
  `imagepath2` varchar(255) DEFAULT NULL,
  `imagepath3` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other categories`
--

INSERT INTO `other categories` (`id`, `title`, `price`, `Description`, `email`, `hash`, `negotiable`, `productcondition`, `usedfor`, `warrantyperiod`, `warrantyincludes`, `homedelivery`, `imagepath1`, `imagepath2`, `imagepath3`, `keywords`) VALUES
(3, 'Yema Nepal Black/Star Full Face Helmet with Single Visor 828', 3300, '', 'anukulparajuli210@gmail.com', '9fe8593a8a330607d76796b35c64c600', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/hr21.jpg', 'images/', 'NULL', 'Yema Nepal Black/Star Full Face Helmet with Single Visor 828'),
(4, 'HD Car Dual Camera DVR With GPS', 5399, '', 'anukulparajuli791@gmail.com', '5ef0b4eba35ab2d6180b0bca7e46b6f9', 'Yes', 'Brand New(Not Used)', '0', 888, 'ppp', 'YES', 'images/22j.jpg', 'images/', 'NULL', 'HD Car Dual Camera DVR With GPS'),
(5, 'Car Washer', 6990, '', 'anukulparajuli533@gmail.com', '912d2b1c7b2826caf99687388d2e8f7c', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/cw2.jpg', 'images/', 'NULL', 'Car Washer'),
(6, '4 in 1 3.7V 300mah LiPo Battery with Charger Set', 2250, '', 'anukulparajuli518@gmail.com', '1cc3633c579a90cfdd895e64021e2163', 'Yes', 'Brand New(Not Used)', '0', 7, '8787', '', 'images/b4.jpg', 'images/', 'NULL', '4 in 1 3.7V 300mah LiPo Battery with Charger Set'),
(7, 'Nylon Adjustable Dog Collar Orange DB7 ', 260, '', 'anukulparajuli305@gmail.com', '705f2172834666788607efbfca35afb3', 'Yes', 'Brand New(Not Used)', '444', 888, 'nothing', 'NO', 'images/dc.jpg', 'images/', 'NULL', 'Nylon Adjustable Dog Collar Orange DB7 '),
(8, 'Jeans Dog Belt with Leash', 780, '', 'anukulparajuli989@gmail.com', '884d247c6f65a96a7da4d1105d584ddd', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'NO', 'images/dc22.jpg', 'images/', 'NULL', 'Jeans Dog Belt with Leash'),
(9, 'Complan ChocolateJar1 kg', 775, '', 'anukulparajuli768@gmail.com', 'f7e9050c92a851b0016442ab604b0488', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/sdfsdf.jpg', 'images/', 'NULL', 'Complan ChocolateJar1 kg'),
(10, 'Horlicks Chocolate Health  Nutrition Drink  500 gm', 370, '', 'anukulparajuli392@gmail.com', '437d7d1d97917cd627a34a6a0fb41136', 'Yes', 'Brand New(Not Used)', '0', 888, 'nothing', 'YES', 'images/hol.jpg', 'images/', 'NULL', 'Horlicks Chocolate Health  Nutrition Drink  500 gm'),
(11, 'Tuborg Presents Arbitrary Experience 2018 Annapurna Pavilion', 1500, '', 'anukulparajuli188@gmail.com', '89fcd07f20b6785b92134bd6c1d0fa42', 'Yes', 'Brand New(Not Used)', '0', 88, 'nothing', 'YES', 'images/ab.jpg', 'images/', 'NULL', 'Tuborg Presents Arbitrary Experience 2018 Annapurna Pavilion'),
(12, 'Summit Air Mystic Rara Lake Holiday Package', 30000, '', 'anukulparajuli985@gmail.com', '892c91e0a653ba19df81a90f89d99bcd', 'Fixed Price', 'Like New(Used Few Times)', '55', 7, 'ppp', 'NO', 'images/holi.jpg', 'images/', 'NULL', 'Summit Air Mystic Rara Lake Holiday Package'),
(13, 'SKY Six Pack Care With Paddle  Twister', 9495, '', 'anukulparajuli274@gmail.com', 'cfa0860e83a4c3a763a7e62d825349f7', 'Yes', 'Brand New(Not Used)', '0', 7, 'ppp', 'NO', 'images/mo.jpg', 'images/', 'NULL', 'SKY Six Pack Care With Paddle  Twister'),
(14, 'SKY Six Pack Care With Paddle', 8955, '', 'anukulparajuli342@gmail.com', 'df6d2338b2b8fce1ec2f6dda0a630eb0', 'Fixed Price', 'Like New(Used Few Times)', '8', 7, 'ppp', 'NO', 'images/paddddle.jpg', 'images/', 'NULL', 'SKY Six Pack Care With Paddle'),
(15, 'Shimano Altus 9 Speed Rear Derailleur For Bicycle', 3500, '', 'anukulparajuli263@gmail.com', '3cf166c6b73f030b4f67eeaeba301103', 'Yes', 'Brand New(Not Used)', '0', 888, 'ppp', 'YES', 'images/cyc.jpg', 'images/', 'NULL', 'Shimano Altus 9 Speed Rear Derailleur For Bicycle'),
(16, 'Liveup LS5676 Knee Support  Grey', 575, '', 'anukulparajuli109@gmail.com', 'c4b31ce7d95c75ca70d50c19aef08bf1', 'Yes', 'Like New(Used Few Times)', '8', 888, 'ppp', 'NO', 'images/knee.jpg', 'images/', 'NULL', 'Liveup LS5676 Knee Support  Grey'),
(17, 'Shimano Bicycle 24 Speed Crank Set', 4500, '', 'anukulparajuli255@gmail.com', '9dfcd5e558dfa04aaf37f137a1d9d3e5', 'Fixed Price', 'Brand New(Not Used)', '0', 7, 'ppp', 'YES', 'images/rank.jpg', 'images/', 'NULL', 'Shimano Bicycle 24 Speed Crank Set'),
(18, 'Soldier Bicycle Sponge Handle Bar Grip', 580, '', 'anukulparajuli150@gmail.com', '6ea2ef7311b482724a9b7b0bc0dd85c6', 'Fixed Price', 'Like New(Used Few Times)', '8', 7, 'ppp', 'NO', 'images/grip.jpg', 'images/', 'NULL', 'Soldier Bicycle Sponge Handle Bar Grip'),
(19, 'Liveup LS3160B Exercise Wheel Black', 925, '', 'anukulparajuli439@gmail.com', 'e205ee2a5de471a70c1fd1b46033a75f', 'Fixed Price', 'Like New(Used Few Times)', '0', 1, 'nothing', 'YES', 'images/whell.jpg', 'images/', 'NULL', 'Liveup LS3160B Exercise Wheel Black'),
(20, 'SkateBoard', 1500, '', 'anukulparajuli796@gmail.com', 'e4da3b7fbbce2345d7772b0674a318d5', 'Fixed Price', 'Like New(Used Few Times)', '8', 7, 'nothing', 'YES', 'images/skate.jpg', 'images/', 'NULL', 'SkateBoard');

-- --------------------------------------------------------

--
-- Table structure for table `phones and tablets`
--

CREATE TABLE `phones and tablets` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `Description` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `negotiable` varchar(300) DEFAULT NULL,
  `productcondition` varchar(300) DEFAULT NULL,
  `usedfor` varchar(300) DEFAULT NULL,
  `warrantyperiod` int(11) DEFAULT NULL,
  `warrantyincludes` varchar(300) DEFAULT NULL,
  `homedelivery` varchar(300) DEFAULT NULL,
  `imagepath1` varchar(300) DEFAULT NULL,
  `imagepath2` varchar(500) DEFAULT NULL,
  `imagepath3` varchar(500) DEFAULT NULL,
  `keywords` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phones and tablets`
--

INSERT INTO `phones and tablets` (`id`, `title`, `price`, `Description`, `email`, `hash`, `negotiable`, `productcondition`, `usedfor`, `warrantyperiod`, `warrantyincludes`, `homedelivery`, `imagepath1`, `imagepath2`, `imagepath3`, `keywords`) VALUES
(10, 'Colors Windows W10 1/8 4.7 Smart Mobile Phone', 3995, '', 'anukulparajuli351@gmail.com', 'f7e9050c92a851b0016442ab604b0488', 'Yes', 'Brand New(Not Used)', '0', 1, 'Battery, Screen', 'YES', 'images/1.jpg', 'images/2.jpg', 'NULL', 'Colors Windows W10 1/8 4.7\" Smart Mobile Phone [1GB RAM, 8GB ROM] -Black'),
(11, 'Karbonn Polymer-10 10000mAH Power Bank - Black', 950, '', 'anukulparajuli96@gmail.com', '1068c6e4c8051cfd4e9ea8072e3189e2', 'Fixed Price', 'Brand New(Not Used)', '0', 1, '', 'YES', 'images/3.jpg', 'images/4.jpg', 'NULL', 'Karbonn Polymer-10 10000mAH Power Bank - Black'),
(12, 'Combo Of VR Box Earphone And Gaming Remote', 849, '', 'anukulparajuli@gmail.com', '7c590f01490190db0ed02a5070e20f01', 'Fixed Price', 'Excellent', '9', 0, 'strap Belt', 'NO', 'images/1 (1).jpg', 'images/2 (1).jpg', 'NULL', 'Combo Of VR Box + Earphone And Gaming Remote'),
(13, 'I6 Smartwatch With Sim And Micro Sd Slot', 1099, '', 'anukulparajuli72@gmail.com', '9e3cfc48eccf81a0d57663e129aef3cb', 'Yes', 'Brand New(Not Used)', '0', 2, 'Belt', 'NO', 'images/1 (2).jpg', 'images/2 (2).jpg', 'NULL', 'I6 Smartwatch With Sim And Micro Sd Slot'),
(14, 'Apple Iphone 8 Plus (256GB ROM, 3GB RAM) - Space Grey', 133000, '', 'anukulparajuli719@gmail.com', '6da9003b743b65f4c0ccd295cc484e57', 'Fixed Price', 'Brand New(Not Used)', '0', 2, 'Phone case, battery, display', 'YES', 'images/1 (3).jpg', 'images/2 (3).jpg', 'NULL', 'Apple Iphone 8 Plus (256GB ROM, 3GB RAM) - Space Grey'),
(15, 'Galaxy S7 Edge Screen Protector Full Coverage', 600, '', 'anukulparajuli963@gmail.com', '9188905e74c28e489b44e954ec0b9bca', 'Fixed Price', 'Excellent', '0', 1, 'nothing', 'YES', 'images/1 (7).jpg', 'images/2 (7).jpg', 'NULL', 'Galaxy S7 Edge Screen Protector Full Coverage'),
(16, 'OnePlus 3T Smart Phone 6GB RAM, 64GB ROM Soft Gold', 39990, '', 'anukulparajuli214@gmail.com', '621bf66ddb7c962aa0d22ac97d69b793', 'Fixed Price', 'Brand New(Not Used)', '0', 1, 'Metal work', 'YES', 'images/2 (8).jpg', 'images/1 (8).jpg', 'NULL', 'OnePlus 3T Smart Phone 6GB RAM, 64GB ROM Soft Gold'),
(17, 'Yunteng Mini Mobile Tripod With Phone Holder', 255, '', 'anukulparajuli473@gmail.com', '16c222aa19898e5058938167c8ab6c57', 'Fixed Price', 'Brand New(Not Used)', '0', 1, 'NOTHING', 'YES', 'images/1 (9).jpg', 'images/4 (1).jpg', 'NULL', 'Yunteng Mini Mobile Tripod With Phone Holder'),
(18, '3D Enlarged Screen', 145, '', 'anukulparajuli14@gmail.com', '46ba9f2a6976570b0353203ec4474217', 'Fixed Price', 'Like New(Used Few Times)', '0', 1, 'nothing', 'YES', 'images/1 (10).jpg', 'images/2 (9).jpg', 'NULL', '3D Enlarged Screen'),
(19, 'Microsoft Lumia 540 Black (1GB 8GB)', 7800, '', 'anukulparajuli30@gmail.com', '1c1d4df596d01da60385f0bb17a4a9e0', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'NO', 'images/1 (11).jpg', 'images/', 'NULL', 'Microsoft Lumia 540 Black (1GB 8GB)');

-- --------------------------------------------------------

--
-- Table structure for table `sports and travels`
--

CREATE TABLE `sports and travels` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `Description` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `negotiable` varchar(255) DEFAULT NULL,
  `productcondition` varchar(255) DEFAULT NULL,
  `usedfor` varchar(255) DEFAULT NULL,
  `warrantyperiod` int(255) DEFAULT NULL,
  `warrantyincludes` varchar(255) DEFAULT NULL,
  `homedelivery` varchar(255) DEFAULT NULL,
  `imagepath1` varchar(255) DEFAULT NULL,
  `imagepath2` varchar(255) DEFAULT NULL,
  `imagepath3` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports and travels`
--

INSERT INTO `sports and travels` (`id`, `title`, `price`, `Description`, `email`, `hash`, `negotiable`, `productcondition`, `usedfor`, `warrantyperiod`, `warrantyincludes`, `homedelivery`, `imagepath1`, `imagepath2`, `imagepath3`, `keywords`) VALUES
(2, 'Moon Bicycle Helmet In-mold Breathable Cycling Helmet', 5200, '', 'anukulparajuli762@gmail.com', '1fc214004c9481e4c8073e85323bfd4b', 'Yes', 'Brand New(Not Used)', '', 7, 'nothing', 'YES', 'images/hrlmrt.jpg', 'images/', 'NULL', 'Moon Bicycle Helmet In-mold Breathable Cycling Helmet'),
(3, 'Pancbike MTB Chain Cleaner Machine', 2250, '', 'anukulparajuli268@gmail.com', '6395ebd0f4b478145ecfbaf939454fa4', 'Fixed Price', 'Like New(Used Few Times)', '8', 7, 'ppp', 'NO', 'images/mouth.jpg', 'images/', 'NULL', 'Pancbike MTB Chain Cleaner Machine'),
(4, 'Pancbike MTB Waterproof Silican Light', 250, '', 'anukulparajuli514@gmail.com', 'c058f544c737782deacefa532d9add4c', 'Yes', 'Like New(Used Few Times)', '8', 1, 'nothing', 'YES', 'images/motuhwa.jpg', 'images/', 'NULL', 'Pancbike MTB Waterproof Silican Light'),
(5, 'Liveup LS3101 Handgrip Black', 350, '', 'anukulparajuli394@gmail.com', 'a9b7ba70783b617e9998dc4dd82eb3c5', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/frip.jpg', 'images/', 'NULL', 'Liveup LS3101 Handgrip Black'),
(6, 'SKY Gym Ball 85 Cm', 1995, '', 'anukulparajuli529@gmail.com', '6bc24fc1ab650b25b4114e93a98f1eba', 'Yes', 'Like New(Used Few Times)', '8', 1, 'ppp', 'NO', 'images/ballpit.jpg', 'images/', 'NULL', 'SKY Gym Ball 85 Cm'),
(7, 'Liveup LS5765 Shoulder Support Black', 2475, '', 'anukulparajuli225@gmail.com', 'fe131d7f5a6b38b23cc967316c13dae2', 'Fixed Price', 'Like New(Used Few Times)', '8', 7, 'ppp', 'NO', 'images/bodyyy.jpg', 'images/', 'NULL', 'Liveup LS5765 Shoulder Support Black'),
(8, 'Universal Cycle Trade Cycling Glasses', 2750, '', 'anukulparajuli530@gmail.com', '94f6d7e04a4d452035300f18b984988c', 'Fixed Price', 'Like New(Used Few Times)', '8', 9, 'nothing', 'NO', 'images/shades.jpg', 'images/', 'NULL', 'Universal Cycle Trade Cycling Glasses'),
(9, 'Dart Board', 550, '', 'anukulparajuli753@gmail.com', 'c058f544c737782deacefa532d9add4c', 'Fixed Price', 'Like New(Used Few Times)', '8', 7, 'ppp', 'NO', 'images/dart.jpg', 'images/', 'NULL', 'Dart Board');

-- --------------------------------------------------------

--
-- Table structure for table `tv, audio and cameras`
--

CREATE TABLE `tv, audio and cameras` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `Description` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `negotiable` varchar(300) DEFAULT NULL,
  `productcondition` varchar(300) DEFAULT NULL,
  `usedfor` varchar(300) DEFAULT NULL,
  `warrantyperiod` int(11) DEFAULT NULL,
  `warrantyincludes` varchar(300) DEFAULT NULL,
  `homedelivery` varchar(300) DEFAULT NULL,
  `imagepath1` varchar(300) DEFAULT NULL,
  `imagepath2` varchar(500) DEFAULT NULL,
  `imagepath3` varchar(500) DEFAULT NULL,
  `keywords` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tv, audio and cameras`
--

INSERT INTO `tv, audio and cameras` (`id`, `title`, `price`, `Description`, `email`, `hash`, `negotiable`, `productcondition`, `usedfor`, `warrantyperiod`, `warrantyincludes`, `homedelivery`, `imagepath1`, `imagepath2`, `imagepath3`, `keywords`) VALUES
(2, 'Sony KLV 32R326D 32 HD Ready LED TV Black', 39900, '', 'anukulparajuli333@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/tv1.jpg', 'images/', 'NULL', 'Sony KLV 32R326D 32 HD Ready LED TV Black'),
(3, 'Videocon 42 Android Smart Full HD TV', 47500, '', 'anukulparajuli431@gmail.com', 'fa7cdfad1a5aaf8370ebeda47a1ff1c3', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/tv2.jpg', 'images/', 'NULL', 'Videocon 42 Android Smart Full HD TV'),
(4, 'Samsung 32M4100 32 HD Ready LED TV Black', 36361, '', 'anukulparajuli99@gmail.com', 'f5f8590cd58a54e94377e6ae2eded4d9', 'Yes', 'Brand New(Not Used)', '8', 7, 'ppp', 'NO', 'images/tv3.jpg', 'images/', 'NULL', 'Samsung 32M4100 32 HD Ready LED TV Black'),
(5, 'Yasuda YS16JA1 16 LED TV  Black', 13900, '', 'anukulparajuli437@gmail.com', '7380ad8a673226ae47fce7bff88e9c33', 'Yes', 'Like New(Used Few Times)', '8', 1, 'ppp', 'NO', 'images/tv4.jpg', 'images/', 'NULL', 'Yasuda YS16JA1 16 LED TV  Black'),
(6, 'Canon EOS 1300D with 1855mm lens Combo offer Camera box pack Light weight Tripod Aroma Bag 16GB SDCard  Dslr Camera', 49513, '', 'anukulparajuli581@gmail.com', '4c56ff4ce4aaf9573aa5dff913df997a', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/dsl1.jpg', 'images/', 'NULL', 'Canon EOS 1300D with 1855mm lens Combo offer Camera box pack Light weight Tripod Aroma Bag 16GB SDCard  Dslr Camera'),
(7, 'Nikon D5300 With 18140mm Lens Get Free Camera Bag 16GB SD Card  Nikon Cleaning Kit  DSLR Camera', 90068, '', 'anukulparajuli916@gmail.com', 'acf4b89d3d503d8252c9c4ba75ddbf6d', 'Yes', 'Like New(Used Few Times)', '0', 7, 'nothing', 'NO', 'images/dslr3.jpg', 'images/', 'NULL', 'Nikon D5300 With 18140mm Lens Get Free Camera Bag 16GB SD Card  Nikon Cleaning Kit  DSLR Camera');

-- --------------------------------------------------------

--
-- Table structure for table `womens fashion`
--

CREATE TABLE `womens fashion` (
  `id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `Description` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `negotiable` varchar(300) DEFAULT NULL,
  `productcondition` varchar(300) DEFAULT NULL,
  `usedfor` varchar(300) DEFAULT NULL,
  `warrantyperiod` int(11) DEFAULT NULL,
  `warrantyincludes` varchar(300) DEFAULT NULL,
  `homedelivery` varchar(300) DEFAULT NULL,
  `imagepath1` varchar(300) DEFAULT NULL,
  `imagepath2` varchar(500) DEFAULT NULL,
  `imagepath3` varchar(500) DEFAULT NULL,
  `keywords` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `womens fashion`
--

INSERT INTO `womens fashion` (`id`, `title`, `price`, `Description`, `email`, `hash`, `negotiable`, `productcondition`, `usedfor`, `warrantyperiod`, `warrantyincludes`, `homedelivery`, `imagepath1`, `imagepath2`, `imagepath3`, `keywords`) VALUES
(4, ' J.Fisher J.Fisher Teal GreenGrey Fleece Jacket With Fur Lining For Women', 1060, '', 'anukulparajuli377@gmail.com', '0584ce565c824b7b7f50282d9a19945b', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (51).jpg', 'images/', 'NULL', ' J.Fisher J.Fisher Teal GreenGrey Fleece Jacket With Fur Lining For Women'),
(5, 'Shristy Fashion Royal Blue Fleece Bomber Jacket For Women', 750, '', 'anukulparajuli229@gmail.com', '5737c6ec2e0716f3d8a7a5c4e0de0d9a', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (52).jpg', 'images/', 'NULL', 'Shristy Fashion Royal Blue Fleece Bomber Jacket For Women'),
(6, 'Navy Black Combo Pack Of Two High Waist Fleece Pants   Size', 2200, '', 'anukulparajuli178@gmail.com', '045117b0e0a11a242b9765e79cbf113f', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (53).jpg', 'images/', 'NULL', 'Navy Black Combo Pack Of Two High Waist Fleece Pants   Size'),
(7, 'Solid Black Thermal Set For Women', 14500, '', 'anukulparajuli210@gmail.com', '0f49c89d1e7298bb9930789c8ed59d48', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (54).jpg', 'images/', 'NULL', 'Solid Black Thermal Set For Women'),
(8, 'Eryaa Black And White Striped Woolen Hi-Neck Sweater For Women', 1000, '', 'anukulparajuli20@gmail.com', 'e3796ae838835da0b6f6ea37bcf8bcb7', '', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (55).jpg', 'images/', 'NULL', 'Eryaa Black And White Striped Woolen Hi-Neck Sweater For Women'),
(9, 'Fashion Small PU Leather Cross-body Bag Long Strap Side Purse', 345, '', 'anukulparajuli410@gmail.com', '57aeee35c98205091e18d1140e9f38cf', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (56).jpg', 'images/', 'NULL', 'Fashion Small PU Leather Cross-body Bag Long Strap Side Purse'),
(10, 'WhitePurple Contrast Sleeved Jacket For Women', 1350, '', 'anukulparajuli532@gmail.com', '8cb22bdd0b7ba1ab13d742e22eed8da2', 'Yes', 'Brand New(Not Used)', '8', 1, 'nothing', 'YES', 'images/1 (57).jpg', 'images/', 'NULL', 'WhitePurple Contrast Sleeved Jacket For Women'),
(11, 'Black Floral Handled Sling Bag For Women', 3420, '', 'anukulparajuli347@gmail.com', '051e4e127b92f5d98d3c79b195f2b291', 'Yes', 'Like New(Used Few Times)', '0', 11, 'nothing', 'YES', 'images/1 (58).jpg', 'images/', 'NULL', 'Black Floral Handled Sling Bag For Women'),
(12, 'GTC Black Side Lock Design Ankle Boots For Women', 2480, '', 'anukulparajuli185@gmail.com', '5ef059938ba799aaa845e1c2e8a762bd', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (59).jpg', 'images/', 'NULL', 'GTC Black Side Lock Design Ankle Boots For Women'),
(13, 'Beige Front Ribbon 2 in 1 Sling Bag For Women', 1250, '', 'anukulparajuli761@gmail.com', 'b2eb7349035754953b57a32e2841bda5', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (60).jpg', 'images/', 'NULL', 'Beige Front Ribbon 2 in 1 Sling Bag For Women'),
(14, 'Bisesh Creation Red Kashmiri Embroidered Acrylic Pashmina Shawl For Women', 890, '', 'anukulparajuli547@gmail.com', 'd96409bf894217686ba124d7356686c9', 'Yes', 'Brand New(Not Used)', '0', 1, 'nothing', 'YES', 'images/1 (61).jpg', 'images/', 'NULL', 'Bisesh Creation Red Kashmiri Embroidered Acrylic Pashmina Shawl For Women');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appliances`
--
ALTER TABLE `appliances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baby, toys and kids`
--
ALTER TABLE `baby, toys and kids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beauty and health`
--
ALTER TABLE `beauty and health`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books and stationery`
--
ALTER TABLE `books and stationery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computer and gaming`
--
ALTER TABLE `computer and gaming`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home and living`
--
ALTER TABLE `home and living`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mens fashion`
--
ALTER TABLE `mens fashion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other categories`
--
ALTER TABLE `other categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phones and tablets`
--
ALTER TABLE `phones and tablets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports and travels`
--
ALTER TABLE `sports and travels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tv, audio and cameras`
--
ALTER TABLE `tv, audio and cameras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `womens fashion`
--
ALTER TABLE `womens fashion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appliances`
--
ALTER TABLE `appliances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `baby, toys and kids`
--
ALTER TABLE `baby, toys and kids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `beauty and health`
--
ALTER TABLE `beauty and health`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `books and stationery`
--
ALTER TABLE `books and stationery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `computer and gaming`
--
ALTER TABLE `computer and gaming`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `home and living`
--
ALTER TABLE `home and living`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mens fashion`
--
ALTER TABLE `mens fashion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `other categories`
--
ALTER TABLE `other categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `phones and tablets`
--
ALTER TABLE `phones and tablets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sports and travels`
--
ALTER TABLE `sports and travels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tv, audio and cameras`
--
ALTER TABLE `tv, audio and cameras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `womens fashion`
--
ALTER TABLE `womens fashion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
