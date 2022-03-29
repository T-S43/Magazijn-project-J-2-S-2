-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 29, 2022 at 01:31 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magazijn_mbo_utrecht`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_name` varchar(150) NOT NULL,
  `qty` int(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `qty`) VALUES
(50, 'Nietmaschine', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `productName` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_name` varchar(150) NOT NULL,
  `price` int(11) NOT NULL,
  `descr` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `descr`) VALUES
(16, 'Nietmaschine', 13, 'Nietmaschine voor kleine en middelgrote nietjes. Geschikt voor kinderen en volwassene'),
(17, 'nietjes klein 2000stk', 3, 'kleine nietjes(koper)'),
(18, 'print papier A4 500vl', 10, 'print papier, A4 formaat. Geschikt voor alle klueren'),
(19, 'doos potloden 20stk', 4, 'grijze potloden'),
(20, 'balpennen 10stk', 5, 'balpennen 10stk bluaw.');

-- --------------------------------------------------------

--
-- Table structure for table `roll`
--

DROP TABLE IF EXISTS `roll`;
CREATE TABLE IF NOT EXISTS `roll` (
  `rollName` varchar(100) NOT NULL,
  `Omschrijving` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`rollName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roll`
--

INSERT INTO `roll` (`rollName`, `Omschrijving`) VALUES
('Student', 'de leerlingen'),
('SuperUser', 'The main man');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE IF NOT EXISTS `userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `Location` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userID` (`userID`),
  KEY `location` (`Location`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `firstname` text NOT NULL,
  `infix` text,
  `lastname` varchar(255) NOT NULL,
  `UserRoll` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userRoll` (`UserRoll`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `pass`, `firstname`, `infix`, `lastname`, `UserRoll`) VALUES
(7, '1@gmail.com', '123', 'student', '', 'student', 'Student'),
(8, '2@gmail.com', '123', 'super', '', 'super', 'SuperUser'),
(9, '3@gmail.com', '123', '3', '', '3', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

DROP TABLE IF EXISTS `warehouse`;
CREATE TABLE IF NOT EXISTS `warehouse` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Amount` int(10) NOT NULL,
  `available` tinyint(1) NOT NULL,
  `LocationID` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `location` (`LocationID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD CONSTRAINT `userinfo_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`UserRoll`) REFERENCES `roll` (`rollName`);

--
-- Constraints for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD CONSTRAINT `warehouse_ibfk_1` FOREIGN KEY (`LocationID`) REFERENCES `userinfo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
