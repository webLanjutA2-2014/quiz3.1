-- phpMyAdmin SQL Dump
-- version 4.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2014 at 06:28 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

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
-- Table structure for table `penitipan`
--

CREATE TABLE IF NOT EXISTS `penitipan` (
`id_penitip` int(11) NOT NULL,
  `nama_penitip` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `deskripsi_barang` varchar(200) NOT NULL,
  `no_loker` int(11) NOT NULL,
  `waktu_masuk` datetime NOT NULL,
  `waktu_keluar` datetime NOT NULL,
  `sudah_diambil` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `penitipan`
--

INSERT INTO `penitipan` (`id_penitip`, `nama_penitip`, `no_hp`, `deskripsi_barang`, `no_loker`, `waktu_masuk`, `waktu_keluar`, `sudah_diambil`) VALUES
(1, 'saka', '132123', 'HP', 455, '2014-11-10 09:00:00', '2014-11-10 16:44:16', 0),
(2, 'Adit', '02545364', 'Tas jelek banget', 21, '2014-11-10 16:58:45', '2014-11-10 16:59:24', 1),
(3, 'Ujang', '123123123', 'Ayam Goreng pake tepung', 44, '2014-11-12 22:43:58', '0000-00-00 00:00:00', 0),
(4, 'jangan ambil diriku', '123123', 'jangan ambil diriku', 123, '2014-11-12 22:44:26', '2014-11-12 22:44:40', 1),
(5, 'Badu', '123123', 'Ayam goreng kalasan', 453, '2014-11-13 00:04:10', '2014-11-13 00:04:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
`id_petugas` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`) VALUES
(1, 'saka', 'saka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penitipan`
--
ALTER TABLE `penitipan`
 ADD PRIMARY KEY (`id_penitip`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
 ADD PRIMARY KEY (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penitipan`
--
ALTER TABLE `penitipan`
MODIFY `id_penitip` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
