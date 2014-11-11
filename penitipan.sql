-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2014 at 04:06 AM
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
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id` int(11) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `hp` varchar(12) NOT NULL,
  `deskripsi` text NOT NULL,
  `no_loker` int(11) NOT NULL,
  `waktu_mulai` datetime NOT NULL,
  `waktu_selesai` datetime NOT NULL,
  `diambil` tinyint(1) NOT NULL,
  `tarif` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama_pengguna`, `hp`, `deskripsi`, `no_loker`, `waktu_mulai`, `waktu_selesai`, `diambil`, `tarif`) VALUES
(1, 'asas', '098765321', 'barang curian', 1, '2014-11-11 08:13:58', '2014-11-11 08:15:25', 1, 17),
(5, 'as', '0986', 'dsds', 9, '2014-11-11 05:15:57', '2014-11-11 08:46:25', 1, 3500),
(10, 'aa', '08765433', 'barang siapa yang... ', 12, '2014-11-11 08:32:02', '0000-00-00 00:00:00', 0, 0),
(11, 'aa', '08765433', 'barang siapa yang... ', 12, '2014-11-11 08:34:16', '0000-00-00 00:00:00', 0, 0),
(19, 'supri', '0987654321', ' barang berharga', 12, '2014-11-11 08:47:21', '0000-00-00 00:00:00', 0, 0),
(78, 'supri', '0987654321', ' barang berharga', 12, '2014-11-11 08:48:47', '2014-11-11 10:01:03', 1, 1200),
(89, 'susi ', '093234', 'barang kali ', 32, '2014-11-11 09:29:42', '2014-11-11 09:29:52', 1, 0),
(90, 'kamto', '02323434', 'barang temuan ', 56, '2014-11-11 08:52:34', '2014-11-11 08:53:17', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`username`, `password`, `nama`) VALUES
('a', 'a', 'a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
