-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 10, 2014 at 10:56 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `penitipanbarang`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `noPengguna` int(5) NOT NULL AUTO_INCREMENT,
  `namaPengguna` varchar(50) NOT NULL,
  `noHp` varchar(20) NOT NULL,
  `deskripsiBarang` varchar(100) NOT NULL,
  `noLoker` varchar(10) NOT NULL,
  `waktu` time NOT NULL,
  PRIMARY KEY (`noPengguna`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`noPengguna`, `namaPengguna`, `noHp`, `deskripsiBarang`, `noLoker`, `waktu`) VALUES
(7, 'MHR', '08978971678', 'Mobil', '12', '00:00:00'),
(13, 'M', '08978971678', 'Mobil', '11', '00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
