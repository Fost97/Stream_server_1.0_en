-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Created the: Lug 07, 2017 , 01:25
-- Version of the server: 10.1.21-MariaDB
-- Version PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `streaming`
--

-- --------------------------------------------------------

--
-- Structure of the table `Movies`
--

CREATE TABLE `Movies` (
  `ID` int(11) NOT NULL,
  `Title` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Secondtitle` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Extension` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Directory` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump of the data for the table `Movies`
--



--
-- index for the downloaded tables
--

--
-- Index for the tables `film`
--
ALTER TABLE `Movies`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for the downloaded tables
--

--
-- AUTO_INCREMENT for the table `film`
--
ALTER TABLE `Movies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
