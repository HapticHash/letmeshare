-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2016 at 09:35 AM
-- Server version: 5.6.26-log
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `letmeshare`
--

-- --------------------------------------------------------

--
-- Table structure for table `lms`
--

CREATE TABLE IF NOT EXISTS `lms` (
  `ID` int(11) NOT NULL,
  `inp` text NOT NULL,
  `detail` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lms`
--

INSERT INTO `lms` (`ID`, `inp`, `detail`) VALUES
(42, 'hey there it is test#1\r\n', ''),
(43, 'hello', ''),
(44, 'wssup', ''),
(45, 'hey', ''),
(47, 'harshit', ''),
(48, 'NICE TO MEET YOU', ''),
(51, 'hey there it is test for long statements which are very wide #2 ', ''),
(54, 'www.yahoo.com', ''),
(55, 'bye', ''),
(56, 'http://google.com', ''),
(57, 'https://www.youtube.com', ''),
(58, 'www.youtube.com', ''),
(59, 'http://en.wikipedia.org/', ''),
(60, 'https://www.enterprise.ca/content/dam/global-vehicle-images/cars/CHRY_200_2015.png', ''),
(62, 'https://github.com/harshitks2203/letmeshare', ''),
(63, 'Aur bata', ''),
(64, 'chill man', ''),
(65, 'i am cool', ''),
(66, 'say it', ''),
(67, 'i am glad to see it', ''),
(68, 'wow', ''),
(69, 'it amazing', ''),
(70, 'kesa e', ''),
(71, 'bolna', ''),
(72, 'null', ''),
(73, 'hello', ''),
(74, 'how r u??', ''),
(75, 'ha', ''),
(76, 'hello', ''),
(77, 'www.google.com', 'best search engine'),
(78, 'bye', ''),
(79, 'shareit.com', 'cool website\r\n'),
(80, 'good', ''),
(81, 'very good', 'hahah'),
(82, 'good', 'i like it');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lms`
--
ALTER TABLE `lms`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lms`
--
ALTER TABLE `lms`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=83;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
