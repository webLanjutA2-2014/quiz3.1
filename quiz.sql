-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2014 at 11:49 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `no_trx` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pelanggan` text NOT NULL,
  `desc_barang` text NOT NULL,
  `jam_masuk` time NOT NULL,
  `no_hp` int(12) NOT NULL,
  `jam_ambil` time NOT NULL,
  `biaya` int(11) NOT NULL,
  `durasi` int(11) NOT NULL,
  `no_loker` varchar(12) NOT NULL,
  PRIMARY KEY (`no_trx`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_trx`, `nama_pelanggan`, `desc_barang`, `jam_masuk`, `no_hp`, `jam_ambil`, `biaya`, `durasi`, `no_loker`) VALUES
(3, 'syaddam', 'tas', '02:02:00', 2147483647, '23:38:03', 21000, 21, ''),
(4, 'yanto', 'baju', '22:11:07', 976869, '22:18:11', 0, 0, ''),
(5, 'fifi', 'sepeda', '09:00:00', 97648876, '22:03:31', -13, 130331, ''),
(6, 'sysya', 'jam', '02:00:00', 98090908, '22:03:22', -20, 200322, ''),
(7, 'yaya', 'haha', '00:00:00', 989897, '22:24:57', 22000, 22, ''),
(8, 'yayay', 'ifuohse', '00:00:00', 98676648, '22:21:29', -22000, -22, ''),
(9, 'oeiwjfio', 'ohofh', '00:00:00', 848, '00:00:00', 0, 0, ''),
(10, 'yyyy', 'osojhfohs', '00:00:00', 58768, '00:00:00', 0, 0, ''),
(11, 'sgsg', 'ohoi', '20:55:15', 769, '22:25:15', 1000, 1, ''),
(12, 'syamolalbanna', 'jas', '22:04:19', 9766869, '00:00:00', 0, 0, ''),
(13, 'aiaia', 'upil', '23:17:41', 848, '23:35:21', 0, 0, ''),
(14, 'yyaaa', 'baju bau', '23:31:55', 9798070, '23:34:52', 0, 0, '90');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('syamol', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
