-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2014 at 05:15 PM
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
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `no_trx` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pelanggan` text NOT NULL,
  `desc_barang` text NOT NULL,
  `waktu_masuk` datetime NOT NULL,
  `no_hp` int(12) NOT NULL,
  `waktu_ambil` datetime NOT NULL,
  `biaya` int(11) NOT NULL,
  `durasi` int(11) NOT NULL,
  `no_loker` varchar(12) NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`no_trx`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_trx`, `nama_pelanggan`, `desc_barang`, `waktu_masuk`, `no_hp`, `waktu_ambil`, `biaya`, `durasi`, `no_loker`, `ket`) VALUES
(1, 'syaddam', 'hati ', '2014-11-13 21:25:10', 986558976, '2014-11-13 21:25:55', 0, 0, '5', 'sudah diambil');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
