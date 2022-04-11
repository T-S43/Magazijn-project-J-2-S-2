-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 11, 2022 at 09:23 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

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
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_name` varchar(150) NOT NULL,
  `qty` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `qty`) VALUES
(50, 'Nietmaschine', 4);

-- --------------------------------------------------------

--
-- Table structure for table `lend`
--

DROP TABLE IF EXISTS `lend`;
CREATE TABLE IF NOT EXISTS `lend` (
  `lendID` int NOT NULL AUTO_INCREMENT,
  `warehouseID` int NOT NULL,
  `userID` int NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lendApproved` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`lendID`),
  KEY `WarehouseID` (`warehouseID`),
  KEY `UserID` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `productName` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_name` varchar(150) NOT NULL,
  `price` int NOT NULL,
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
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userId` int NOT NULL,
  `warehouseId` int NOT NULL,
  `amount` int NOT NULL,
  `message` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `accepted` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  KEY `warehouseId` (`warehouseId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `userId`, `warehouseId`, `amount`, `message`, `location`, `accepted`) VALUES
(3, 4, 6, 3, 'Thuis gebruik', 'Daltonlaan', 0),
(5, 9, 2, 2, 'TEST DELETE ME', 'DAltondreef', 0),
(6, 4, 2, 2, 'Testing reasons', 'Kaneneiland', 0),
(7, 4, 2, 10, 'Power kable is alweer kapot dit is een lange zin met veel woorden hoe gaat het met jouw? alles is oke hier', 'Daltonlaan', 0);

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
  `id` int NOT NULL AUTO_INCREMENT,
  `userID` int NOT NULL,
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
  `id` int NOT NULL AUTO_INCREMENT,
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
  `id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Amount` int NOT NULL,
  `available` tinyint(1) NOT NULL,
  `LocationID` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `location` (`LocationID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lend`
--
ALTER TABLE `lend`
  ADD CONSTRAINT `UserID` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `WarehouseID` FOREIGN KEY (`warehouseID`) REFERENCES `warehouse` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

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
