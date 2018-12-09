-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2018 at 12:21 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `trn_basket`
--

CREATE TABLE `trn_basket` (
  `BASKET_ID` int(11) NOT NULL,
  `COLOR` varchar(45) DEFAULT NULL,
  `HEIGHT` decimal(30,2) DEFAULT NULL,
  `WIDTH` decimal(30,2) DEFAULT NULL,
  `MATERIAL` varchar(100) DEFAULT NULL,
  `MONTAGE` varchar(100) DEFAULT NULL,
  `PRICE` decimal(30,2) DEFAULT NULL,
  `DATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DELETED` varchar(18) NOT NULL DEFAULT 'UNDELETED',
  `DONE` varchar(9) NOT NULL DEFAULT 'UNDONE',
  `TRANSACTION_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trn_basket`
--

INSERT INTO `trn_basket` (`BASKET_ID`, `COLOR`, `HEIGHT`, `WIDTH`, `MATERIAL`, `MONTAGE`, `PRICE`, `DATE`, `DELETED`, `DONE`, `TRANSACTION_ID`) VALUES
(1, 'Yellow', '25.80', '15.80', 'Cotton', 'Vertical', '256.88', '2018-11-08 12:37:57', 'UNDELETED', 'UNDONE', 3),
(2, 'Blue11', '256.00', '28.00', 'Maya', 'Oriantal', '56.00', '2018-11-15 15:15:10', 'UNDELETED', 'UNDONE', 3),
(3, '11', '11.00', '11.00', '11', '11', '11.00', '2018-11-27 14:37:08', 'UNDELETED', 'UNDONE', 4),
(5, 'Maroon', '34.00', '300.00', 'Polyester', 'Vertical', '340.00', '2018-12-09 02:49:19', 'UNDELETED', 'UNDONE', 23),
(6, 'Red', '34.00', '200.00', 'Polyester', 'Oriantal', '500.00', '2018-12-09 02:49:19', 'FULLY_FLIED', 'DONE', 33),
(7, 'Orange', '34.00', '100.00', 'Polyester', 'Vertical', '600.00', '2018-12-09 02:49:19', 'UNDELETED', 'UNDONE', 21),
(8, 'Black', '66.00', '300.00', 'Polyester', 'Vertical', '550.00', '2018-12-09 02:49:19', 'UNDELETED', 'UNDONE', 2145),
(9, 'Purple', '25.00', '200.00', 'Polyester', 'Oriantal', '450.00', '2018-12-09 02:49:19', 'UNDELETED', 'UNDONE', 545),
(10, 'Grey', '47.00', '200.00', 'Polyester', 'Oriantal', '500.00', '2018-12-09 02:49:19', 'UNDELETED', 'UNDONE', 21),
(11, 'Pink', '68.00', '400.00', 'Polyester', 'Vertical', '900.00', '2018-12-09 02:49:19', 'UNDELETED', 'UNDONE', 152345),
(12, 'Maroon1', '45.00', '230.00', 'Cotton', 'Oriantal', '425.00', '2018-12-09 02:49:19', 'UNDELETED', 'UNDONE', 245),
(13, 'Red', '36.00', '120.00', 'Polyester', 'Vertical', '325.00', '2018-12-09 02:49:19', 'UNDELETED', 'UNDONE', 1345),
(14, 'Orange', '22.00', '200.00', 'Cotton', 'Oriantal', '440.00', '2018-12-09 02:49:19', 'UNDELETED', 'UNDONE', 134),
(15, 'Purple', '39.00', '214.00', 'Cotton1', 'Vertical', '407.00', '2018-12-09 02:49:19', 'UNDELETED', 'DONE', 22),
(16, 'Black', '45.00', '212.00', 'Polyester', 'Oriantal', '450.00', '2018-12-09 02:49:19', 'DELETED', 'UNDONE', 22),
(17, 'Grey', '44.00', '210.00', 'Cotton', 'Vertical', '500.00', '2018-12-09 02:49:19', 'UNDELETED', 'UNDONE', 134),
(20, 'Black', '20.00', '200.00', 'Polyester', 'Vertical', '444.00', '2018-12-09 02:53:05', 'UNDELETED', 'UNDONE', 22),
(23, 'Red', '45.00', '250.00', 'Cotton', 'Oriantal', '806.00', '2018-12-09 02:54:08', 'UNDELETED', 'UNDONE', 1345),
(25, 'Orange', '34.00', '240.00', 'Polyester', 'Vertical', '450.00', '2018-12-09 02:54:57', 'UNDELETED', 'UNDONE', 33),
(78, 'Purple', '33.00', '400.00', 'Cotton', 'Oriantal', '409.00', '2018-12-09 02:54:57', 'UNDELETED', 'UNDONE', 2145),
(89, 'Pink', '46.00', '209.00', 'Polyester', 'Oriantal12', '600.00', '2018-12-09 02:49:19', 'ETERNITY', 'UNDONE', 245);

-- --------------------------------------------------------

--
-- Table structure for table `trn_transaction`
--

CREATE TABLE `trn_transaction` (
  `TRANSACTION_ID` int(11) NOT NULL,
  `POSTED_USER` varchar(100) DEFAULT NULL,
  `AMOUNT` decimal(30,2) DEFAULT NULL,
  `DATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `DELETED` varchar(18) NOT NULL DEFAULT 'UNDELETED',
  `DONE` varchar(9) NOT NULL DEFAULT 'UNDONE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trn_transaction`
--

INSERT INTO `trn_transaction` (`TRANSACTION_ID`, `POSTED_USER`, `AMOUNT`, `DATE`, `DELETED`, `DONE`) VALUES
(3, 'TestUser1', '568.40', '2018-11-08 12:30:06', 'UNDELETED', 'DONE'),
(4, 'ABC', '123.00', '0000-00-00 00:00:00', 'ETERNITY', 'UNDONE'),
(5, 'ABCDEF', '123.00', '2018-11-20 16:22:33', 'UNDELETED', 'DONE'),
(21, 'Ahmet', '4215.00', '0000-00-00 00:00:00', 'DELETED', 'UNDONE'),
(22, 'Selda111', '16.00', '0000-00-00 00:00:00', 'UNDELETED', 'UNDONE'),
(23, 'Fatma', '345.00', '2018-12-19 07:18:18', 'UNDELETED', 'UNDONE'),
(33, 'Ay?e1', '14134.00', '0000-00-00 00:00:00', 'UNDELETED', 'DONE'),
(35, 'Ayşe', '14134.00', '0000-00-00 00:00:00', 'UNDELETED', 'UNDONE'),
(134, 'Ceren', '245.00', '0000-00-00 00:00:00', 'UNDELETED', 'UNDONE'),
(245, 'Melih', '42135.00', '0000-00-00 00:00:00', 'DELETED', 'UNDONE'),
(545, 'Veli', '42.00', '0000-00-00 00:00:00', 'UNDELETED', 'UNDONE'),
(1345, 'Batu', '234.00', '0000-00-00 00:00:00', 'UNDELETED', 'UNDONE'),
(2145, 'Sezer', '3434.00', '0000-00-00 00:00:00', 'FULLY_DONE', 'DONE'),
(152345, 'Kaan', '64367.00', '0000-00-00 00:00:00', 'ETERNITY', 'UNDONE'),
(152346, 'Volvo', '485.00', '2018-12-09 13:47:50', 'UNDELETED', 'UNDONE');

-- --------------------------------------------------------

--
-- Table structure for table `usr_user`
--

CREATE TABLE `usr_user` (
  `USER_ID` int(11) NOT NULL,
  `USERNAME` varchar(45) NOT NULL,
  `CREATE_DATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `PASSWORD` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usr_user`
--

INSERT INTO `usr_user` (`USER_ID`, `USERNAME`, `CREATE_DATE`, `PASSWORD`) VALUES
(1, 'tugrul', '2018-11-08 15:15:06', '123QWEasd'),
(2, 'okan', '2018-12-09 14:19:53', '123QWEasd'),
(3, 'hakan', '2018-12-09 14:19:53', '123QWEasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trn_basket`
--
ALTER TABLE `trn_basket`
  ADD PRIMARY KEY (`BASKET_ID`),
  ADD KEY `transactionID` (`TRANSACTION_ID`);

--
-- Indexes for table `trn_transaction`
--
ALTER TABLE `trn_transaction`
  ADD PRIMARY KEY (`TRANSACTION_ID`);

--
-- Indexes for table `usr_user`
--
ALTER TABLE `usr_user`
  ADD PRIMARY KEY (`USER_ID`),
  ADD UNIQUE KEY `userName` (`USERNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trn_basket`
--
ALTER TABLE `trn_basket`
  MODIFY `BASKET_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `trn_transaction`
--
ALTER TABLE `trn_transaction`
  MODIFY `TRANSACTION_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152347;

--
-- AUTO_INCREMENT for table `usr_user`
--
ALTER TABLE `usr_user`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trn_basket`
--
ALTER TABLE `trn_basket`
  ADD CONSTRAINT `trn_basket_ibfk_1` FOREIGN KEY (`TRANSACTION_ID`) REFERENCES `trn_transaction` (`TRANSACTION_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
