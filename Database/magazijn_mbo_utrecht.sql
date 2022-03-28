-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 28, 2022 at 08:42 PM
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
-- Table structure for table `lend`
--

DROP TABLE IF EXISTS `lend`;
CREATE TABLE IF NOT EXISTS `lend` (
  `lendID` int NOT NULL AUTO_INCREMENT,
  `warehouseID` int NOT NULL,
  `warehouseItem` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `warehouseAvailable` tinyint NOT NULL,
  `warehouseAmount` int NOT NULL,
  `userID` int NOT NULL,
  `userFirstname` text NOT NULL,
  `userInfix` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `userLastname` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lendApproved` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`lendID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lend`
--

INSERT INTO `lend` (`lendID`, `warehouseID`, `warehouseItem`, `warehouseAvailable`, `warehouseAmount`, `userID`, `userFirstname`, `userInfix`, `userLastname`, `userEmail`, `timestamp`, `lendApproved`) VALUES
(1, 13, 'Gun', 1, 233, 553, 'John', 'Fortnite', 'Kennedy', 'JFK', '2022-03-28 20:23:02', 0);

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
('SuperUser', 'The main man'),
('warehouse-admin', 'Manager warehouse');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `pass`, `firstname`, `infix`, `lastname`, `UserRoll`) VALUES
(3, 'skylorvd@gmail.com', '123', 'sky', 'van', 'duss', 'SuperUser'),
(4, 't@t.t', 'ttt', 't', 't', 't', 'warehouse-admin');

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
