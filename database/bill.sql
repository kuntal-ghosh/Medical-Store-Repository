-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2017 at 10:02 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
`id` int(11) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `medicine_name` varchar(30) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL,
  `unit_price` int(5) NOT NULL,
  `total_price` int(5) NOT NULL,
  `selling_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `customer_name`, `medicine_name`, `medicine_id`, `quantity`, `unit_price`, `total_price`, `selling_time`) VALUES
(2, 'arnob', 'Dual Cotexin ', 0, 2, 120, 240, '2017-03-19 07:00:00'),
(4, '', 'Actal', 0, 5, 1, 5, '0000-00-00 00:00:00'),
(5, '', 'Flagi', 8, 5, 15, 75, '2017-03-19 07:00:00'),
(6, '', 'Flagi', 8, 5, 15, 75, '2017-03-19 07:00:00'),
(7, '', 'Flagi', 8, 5, 15, 75, '2017-03-19 07:00:00'),
(8, '', 'Flagi', 8, 5, 15, 75, '2017-03-19 07:00:00'),
(9, '', 'Flagi', 8, 5, 15, 75, '2017-03-19 07:00:00'),
(23, 'arnob', 'Actal', 9, 3, 1, 3, '2017-03-19 16:18:30'),
(28, 'ghosh', 'Flagi', 8, 50, 15, 750, '2017-03-19 18:16:07'),
(29, 'babu', 'Dual Cotexin', 6, 3, 120, 360, '2017-03-19 18:31:58'),
(32, 'aaaaa', 'Actal', 9, 5555, 1, 5555, '2017-03-20 05:43:24'),
(35, 'f', 'Dual Cotexin', 6, 111, 120, 13320, '2017-03-20 06:26:25'),
(36, 'd', 'Actal', 9, 1111, 1, 1111, '2017-03-20 06:27:51'),
(40, 'kuntal', 'Actal', 9, 50, 1, 50, '2017-03-20 07:03:27'),
(41, 'kuntal', 'Actal', 9, 50, 1, 50, '2017-03-20 07:06:44'),
(42, 'wf', 'Flagi', 8, 4, 15, 60, '2017-03-20 07:17:02'),
(43, 'hdtgfhnj', 'Dual Cotexin', 6, 23, 120, 2760, '2017-03-20 07:44:31'),
(44, 'j', 'Flagi', 8, 2, 15, 30, '2017-03-20 07:45:44'),
(45, 'j', 'Flagi', 8, 5, 15, 75, '2017-03-20 07:46:06'),
(46, 'babu', 'Flagi', 8, 5, 15, 75, '2017-03-20 08:04:34'),
(47, 'aaaaa', 'Actal', 9, 10, 1, 10, '2017-03-20 08:07:26'),
(48, 'ffff', 'Flagi', 8, 3, 15, 45, '2017-03-20 08:11:02'),
(49, 'ffff', 'Flagi', 8, 3, 15, 45, '2017-03-20 08:11:32'),
(50, 'ffff', 'Flagi', 8, 3, 15, 45, '2017-03-20 08:12:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
