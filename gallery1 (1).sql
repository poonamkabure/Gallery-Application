-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2018 at 10:03 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE IF NOT EXISTS `admin_user` (
  `id` int(20) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `approve` int(20) NOT NULL DEFAULT '0',
  `approved_by` varchar(20) NOT NULL,
  `acctype` int(10) NOT NULL DEFAULT '1' COMMENT 'account type 1support2 account 3 admin 0 supadmin 4 marketing',
  `photo` varchar(100) NOT NULL COMMENT 'photo name'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `fullname`, `address`, `gender`, `qualification`, `dob`, `mobile`, `email`, `username`, `password`, `approve`, `approved_by`, `acctype`, `photo`) VALUES
(1, 'admin', 'kolhapur', 'male', 'BE IT', '1993-12-08', 8888888888, 'admin@gmail.com', 'admin', '123', 1, 'admin', 0, 'Desert.jpg'),
(2, 'account', 'kolhapur', 'male', '', '2016-12-28', 8978987898, 'account@mail.com', 'account', '123', 0, '', 2, 'logo.png'),
(3, 'support', 'kop', 'male', '', '2016-12-28', 9887656565, 'support@mail.com', 'support', '123', 0, '', 1, 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id` int(10) NOT NULL,
  `albumid` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `photo` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `albumid`, `name`, `photo`) VALUES
(8, 'e1', 'Etching Glass', '23102018_123252.jpg'),
(9, 'f1', 'Favrile Glass', '23102018_123528.jpg'),
(11, 'm1', 'Mural Glass', '23102018_123826.jpg'),
(12, 'p1', 'Partition Glass', '23102018_123941.jpg'),
(13, 'r1', 'Railing Glass', '23102018_124342.jpg'),
(14, 't1', 'Trophy Glass', '23102018_124453.jpg'),
(15, 'g1', 'Goofus glass', '24102018_085621.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) NOT NULL,
  `albumid` varchar(20) NOT NULL,
  `photonm` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `albumid`, `photonm`) VALUES
(9, 'e1', '23102018_190546.jpg'),
(10, 'e1', '23102018_190818.jpg'),
(11, 'f1', '23102018_191453.jpg'),
(12, 'g1', '24102018_085745.jpg'),
(13, 'g1', '24102018_085804.jpg'),
(14, 'g1', '24102018_085816.jpg'),
(15, 'g1', '24102018_085828.jpg'),
(16, 'g1', '24102018_085847.jpg'),
(17, 'g1', '24102018_085859.jpg'),
(18, 'g1', '24102018_085913.jpg'),
(19, 'g1', '24102018_085931.jpg'),
(20, 'e1', '24102018_094412.jpg'),
(21, 'e1', '24102018_094420.jpg'),
(22, 'e1', '24102018_094427.jpg'),
(23, 'e1', '24102018_094437.jpg'),
(24, 'f1', '24102018_094616.jpg'),
(25, 'f1', '24102018_094624.jpg'),
(26, 'f1', '24102018_094632.jpg'),
(27, 'm1', '24102018_095006.jpg'),
(28, 'm1', '24102018_095013.jpg'),
(29, 'm1', '24102018_095022.jpg'),
(30, 'm1', '24102018_095032.jpg'),
(31, 'p1', '24102018_095537.jpg'),
(32, 'p1', '24102018_095546.jpg'),
(33, 'p1', '24102018_095554.jpg'),
(34, 'p1', '24102018_095605.jpg'),
(35, 'r1', '24102018_095755.jpg'),
(36, 'r1', '24102018_095803.jpg'),
(37, 'r1', '24102018_095820.jpg'),
(38, 'r1', '24102018_095830.jpg'),
(39, 't1', '24102018_100021.jpg'),
(40, 't1', '24102018_100030.jpg'),
(41, 't1', '24102018_100039.jpg'),
(42, 't1', '24102018_100049.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
