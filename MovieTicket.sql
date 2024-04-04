-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 02, 2023 at 12:38 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MovieTicket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintbl`
--

CREATE TABLE `admintbl` (
  `Email` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Password` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admintbl`
--

INSERT INTO `admintbl` (`Email`, `Password`) VALUES
('shaaky6t4@gmail.com', '222');

-- --------------------------------------------------------

--
-- Table structure for table `movietbl`
--

CREATE TABLE `movietbl` (
  `Name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Duration` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Rating` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Cast` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Story` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Image` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movietbl`
--

INSERT INTO `movietbl` (`Name`, `Duration`, `Rating`, `Cast`, `Story`, `Image`) VALUES
('Interstellar ', '2:30:9', '8.5', 'Matthew Mac', 'Science Fiction’s ', 'Intersteller.jpeg'),
('The Pale Blue Eye', '02:30:22', '7', 'SHaKiB', 'No Story', 'The Pale Blue Eye.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usertbl`
--

CREATE TABLE `usertbl` (
  `ID` int(10) NOT NULL,
  `Name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Phone` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Password` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Gender` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Dob` date NOT NULL,
  `Image` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertbl`
--

INSERT INTO `usertbl` (`ID`, `Name`, `Email`, `Phone`, `Password`, `Gender`, `Dob`, `Image`) VALUES
(1, 'SHaKiB', 'mdshakib6477@gmail.com', '01743530117', '$2y$12$esiLKFM4cTiJXJae2A8D4uhivWFZx696LExDLOm8W8Lz/cJwMTlva', 'Male', '2000-09-07', 'SHaKiB.jpg'),
(3, 'SOHAN', 'sohan@gmail.com', '12345678900', '$2y$12$Xa.qv8mQ4y/SZzw/DUWaGeAPpg/FsluJBlyA5FV99A63BSY6gt74W', 'Male', '1990-04-30', 'SOHAN.png'),
(4, 'Shahadat', 'shahadat@gmail.com', '12345678900', '$2y$12$2yFJcztBMvOHzxTppbnepeTW1OAtfj8jKV.2QZY4njtlhZIZcAuFi', 'Male', '1990-05-10', 'wallpaperflare.com_wallpaper (4).jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintbl`
--
ALTER TABLE `admintbl`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `movietbl`
--
ALTER TABLE `movietbl`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `usertbl`
--
ALTER TABLE `usertbl`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usertbl`
--
ALTER TABLE `usertbl`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
