-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2018 at 12:16 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(10) NOT NULL,
  `FirstName` varchar(10) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `EmailId` varchar(25) NOT NULL,
  `ContactN` varchar(12) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `FirstName`, `LastName`, `EmailId`, `ContactN`, `Status`) VALUES
(63, 'Rakesh', 'yadav', 'raki@gmail.com', '9865432190', 1),
(64, 'janam', 'singh', 'janam122@gmail.com', '9876894378', 1),
(65, 'Rajat', 'singha ', 'rajat121@gmail.com', '90765433387', 1),
(66, 'jagmohan', 'singh', 'jagkmohan@gmail.com', '9090900909', 1),
(67, 'Chandan', 'Mishra', 'chandan121@benepik.com', '8989854672', 1),
(68, 'jagdesh', 'yadav', 'jagdesh121@gmail.com', '9099876512', 1),
(69, 'Jaysingh', 'Yadav', 'jay121gk@gmail.com', '9090675456', 1),
(70, 'jayesh', 'kumar', 'jayesh121@teKmindZ.com', '9090902389', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
