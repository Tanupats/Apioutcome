-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2023 at 09:05 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `outcomapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `Date_outcome` date NOT NULL DEFAULT current_timestamp(),
  `Toppic` varchar(255) NOT NULL,
  `Amount` decimal(10,2) NOT NULL,
  `outcomeType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `Date_outcome`, `Toppic`, `Amount`, `outcomeType`) VALUES
(1, '2023-04-02', 'salary', '9000.00', 'รายจ่าย'),
(2, '2023-04-02', 'salary', '10000.00', 'รายรับ'),
(3, '2023-04-02', 'salary', '10000.00', 'รายรับ'),
(4, '2023-04-02', 'oppo', '9000.00', 'รายจ่าย'),
(5, '2023-04-02', '', '0.00', 'รายรับ'),
(6, '2023-04-02', 'food', '150.00', 'รายรับ'),
(7, '2023-04-02', 'food', '150.00', 'รายรับ'),
(8, '2023-04-02', 'food', '150.00', 'รายรับ'),
(9, '2023-04-02', 'oop', '230.00', 'รายรับ'),
(10, '2023-04-02', 'moo kra ta', '50.00', 'รายจ่าย'),
(11, '2023-04-02', 'mom', '100.00', 'รายรับ'),
(12, '2023-04-02', 'Pepsi', '30.00', 'รายจ่าย');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Email`, `Password`, `Name`) VALUES
(1, 'tanupat@gmail.com', '1234', 'tanupat sittwong'),
(2, 'audomlak@gmail.com', '1234', 'Audomlak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
