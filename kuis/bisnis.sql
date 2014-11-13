-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2014 at 03:23 PM
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
  `jam_masuk` datetime NOT NULL,
  `no_hp` int(12) NOT NULL,
  `jam_ambil` datetime NOT NULL,
  `biaya` int(11) NOT NULL,
  `durasi` int(11) NOT NULL,
  `no_loker` varchar(12) NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`no_trx`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_trx`, `nama_pelanggan`, `desc_barang`, `jam_masuk`, `no_hp`, `jam_ambil`, `biaya`, `durasi`, `no_loker`, `ket`) VALUES
(20, 'gaidgigda', 'baju', '2014-11-13 15:59:25', 5709, '0000-00-00 00:00:00', 0, 0, '78', ''),
(21, 'Wahyu', 'tas', '2014-11-13 21:05:23', 123, '0000-00-00 00:00:00', 0, 0, '27', '');

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
('admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
