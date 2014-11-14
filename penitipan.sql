-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2014 at 07:00 AM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `nama` varchar(20) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nama`, `password`) VALUES
('yanto', 'komsi');

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
  `waktu_selesai` time DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `selisih` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nitip`
--

INSERT INTO `nitip` (`id`, `nama_pengguna`, `deskripsi`, `no_hp`, `no_loker`, `waktu`, `waktu_selesai`, `status`, `selisih`) VALUES
('PA123', 'Yogi', 'Handphone', '82772511', '124', '05:53:51', '18:18:47', '12000', 12),
('PA124', 'Renal', 'Laptop', '82872444', '127', '14:54:07', '18:18:16', '3000', 3),
('PA125', 'Afif', 'Sepeda', '987654433', '56', '10:42:14', '10:43:44', '0', 0),
('PA235', 'Ganjar', 'Sarung', '987654123', '45', '17:36:32', '05:50:44', '-11000', -11),
('sv123', 'yanto', 'sepatu', '2147483647', '124', '15:58:56', '12:49:41', '-3000', -3),
('sv124', 'rizal', 'tas', '21', '123', '16:21:46', '10:45:55', '-5000', -5),
('sv33 ', 'dad', 'upil', '898989898', '12', '07:57:38', NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
