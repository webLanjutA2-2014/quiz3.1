-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 10, 2014 at 11:16 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `penitipan`
--

CREATE TABLE IF NOT EXISTS `penitipan` (
  `id_penitip` int(11) NOT NULL AUTO_INCREMENT,
  `nama_penitip` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `deskripsi_barang` varchar(200) NOT NULL,
  `no_loker` int(11) NOT NULL,
  `waktu_masuk` datetime NOT NULL,
  `waktu_keluar` datetime NOT NULL,
  `sudah_diambil` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_penitip`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `penitipan`
--

INSERT INTO `penitipan` (`id_penitip`, `nama_penitip`, `no_hp`, `deskripsi_barang`, `no_loker`, `waktu_masuk`, `waktu_keluar`, `sudah_diambil`) VALUES
(1, 'saka', '132123', 'HP', 455, '2014-11-10 09:00:00', '2014-11-10 16:44:16', 0),
(2, 'Adit', '02545364', 'Tas jelek banget', 21, '2014-11-10 16:58:45', '2014-11-10 16:59:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `id_petugas` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_petugas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`) VALUES
(1, 'saka', 'saka');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
