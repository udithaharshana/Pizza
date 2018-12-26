-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2018 at 04:21 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizza_home`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `bid` int(11) NOT NULL,
  `bname` varchar(50) NOT NULL,
  `bmnumber` int(10) NOT NULL,
  `baddress` varchar(50) DEFAULT NULL,
  `bemail` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`bid`, `bname`, `bmnumber`, `baddress`, `bemail`) VALUES
(1, 'Nittabuwa', 112321458, 'no 34,main street,nittabuwa', 'pizza.nittabuwa@gmail.com'),
(2, 'Gampaha', 112845794, 'no 45,j ala rood,Gampaha', 'pizza.gampaha@gmail.com'),
(3, 'Colombo', 112456954, 'no14,mahanama rood,colombo 14', 'pizza.colombo@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `pid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pp` int(11) DEFAULT NULL,
  `m` int(11) DEFAULT NULL,
  `l` int(11) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`pid`, `pname`, `pp`, `m`, `l`, `img`) VALUES
(1, 'Chicken Bacon', 510, 995, 1770, 'Chicken%2520Bacon.png'),
(2, 'Cheese Lovers', 510, 995, 1770, 'Cheese%2520Lovers.png'),
(4, 'Chicken Hawaiian', 590, 990, 1700, 'Chicken%2520Hawaiian.png'),
(5, 'Devilled Chicken', 590, 990, 1700, 'Devilled%2520Chicken.png'),
(6, 'Cheese & Tomato', 410, 780, 1450, 'Cheese%2520And%2520Tomato.png'),
(7, 'Cheesy Onion', 410, 780, 1450, 'Cheesy%2520Onion.png'),
(8, 'Veggie Supreme', 510, 995, 1770, 'Veggie Supreme.png'),
(9, 'Sausage Delight', 510, 995, 1770, 'Sausage Delight.png'),
(10, 'Tandoori Chicken', 510, 995, 1770, 'Tandoori Chicken.png'),
(11, 'Hot Garlic Prawns', 730, 1400, 2550, 'Hot Garlic Prawns.png'),
(12, 'Chicken Supreme', 730, 1400, 2550, 'Chicken Supreme.png'),
(13, 'Spicy Seafood', 590, 990, 1700, 'Spicy Seafood.png'),
(14, 'Super Supreme', 590, 990, 1700, 'Super Supreme.png'),
(15, 'Punjabi Mutton', 600, 1150, 2070, 'Punjabi Mutton.png'),
(16, 'Beef Pepperoni', 600, 1150, 2070, 'Beef Pepperoni.png'),
(17, 'Meat Lovers', 600, 1150, 2070, 'Meat Lovers.png'),
(18, 'BBQ Chicken', 600, 1150, 2070, 'BBQ Chicken.png');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderid` int(11) NOT NULL,
  `defaultaddress` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_new`
--

CREATE TABLE `order_new` (
  `orderid` int(11) NOT NULL,
  `defaulta` varchar(50) NOT NULL,
  `diliverya` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pizzaname` varchar(20) NOT NULL,
  `size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `mnumber` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `country`, `mnumber`, `email`, `password`, `address`, `uid`) VALUES
('uditha', 'harshana', 'Sri Lanka', 719651975, 'udithaharshana6@gmail.com', '123', 'A/A/10/16, Ranpokunagama,Nittabuwa', 1),
('kushani', 'charunika', 'Sri Lanka', 719561241, 'kushanicharunika@gmail.com', '456', '123,horape,ragama', 2),
('Rasika', 'weragoda', 'Sri Lanka', 712349564, 'rasikaweragoda@gmail.com', '789', 'no 123, ganemulla,kadawatha', 4),
('Neyo', 'Andro', 'Sri Lanka', 714562589, 'neyo@gmail.com', '854', 'no-45,asmn,medamulana', 5),
('nuwan', 'perera', 'Sri Lanka', 779517531, 'nuwanperera@gmail.com', 'qwe', '123/kandy road,nittabuwa', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `order_new`
--
ALTER TABLE `order_new`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_new`
--
ALTER TABLE `order_new`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
