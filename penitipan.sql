-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2014 at 01:51 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `penitipan`
--

-- --------------------------------------------------------

--
-- Table structure for table `loker`
--

CREATE TABLE IF NOT EXISTS `loker` (
  `id` varchar(10) DEFAULT NULL,
  `nama_loker` varchar(20) DEFAULT NULL,
  `waktu` date DEFAULT NULL,
  `id_loker` int(11) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nitip`
--

CREATE TABLE IF NOT EXISTS `nitip` (
  `id` varchar(10) NOT NULL DEFAULT '',
  `nama_pengguna` varchar(20) DEFAULT NULL,
  `deskripsi` varchar(30) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `no_loker` varchar(20) DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nitip`
--

INSERT INTO `nitip` (`id`, `nama_pengguna`, `deskripsi`, `no_hp`, `no_loker`, `waktu`) VALUES
('123', 'Ronni', 'sepeda', '85642108008', '3', '12:12:12');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `loker`
--
ALTER TABLE `loker`
  ADD CONSTRAINT `loker_ibfk_1` FOREIGN KEY (`id`) REFERENCES `nitip` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
