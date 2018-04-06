-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2018 at 12:42 PM
-- Server version: 5.5.59-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtuts`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads`
--

CREATE TABLE `tbl_uploads` (
  `id` int(10) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`id`, `file`, `type`, `size`) VALUES
(1, 'sneha.jpg', 'image/jpg', 50),
(2, '97166-tt.jpg', 'image/jpeg', 536),
(3, '7077-tt.jpg', 'image/jpeg', 536),
(4, '6102-test.pdf', 'applicatio', 210),
(5, '20161-sneha.jpg', 'image/jpeg', 6),
(6, '79970-test.pdf', 'applicatio', 210),
(7, '20171-tt.jpg', 'image/jpeg', 536),
(8, '11006-sneha.jpg', 'image/jpeg', 6),
(9, '18543-tt.jpg', 'image/jpeg', 536),
(10, '20376-welcome-page.html', 'text/html', 6),
(11, '97740-application.zip', 'applicatio', 1395),
(12, '16430-datasources.rar', 'applicatio', 2),
(13, '28858-datasources.rar', 'applicatio', 2),
(14, '73212-sneha.jpg', 'image/jpeg', 6),
(15, '85463-tt.jpg', 'image/jpeg', 536),
(16, '1838-tt.jpg', 'image/jpeg', 536),
(17, '13043-tt.jpg', 'image/jpeg', 536),
(18, '92338-tt.jpg', 'image/jpeg', 536),
(19, '9375-tt.jpg', 'image/jpeg', 536);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
