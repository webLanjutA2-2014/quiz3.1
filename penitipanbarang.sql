-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Nov 2014 pada 05.30
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id` varchar(50) NOT NULL,
  `namaPengguna` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `noHp` varchar(25) NOT NULL,
  `noLoker` varchar(25) NOT NULL,
  `waktu` time NOT NULL,
  `waktuAmbil` time NOT NULL,
  `biaya` varchar(50) NOT NULL,
  `lamaWaktu` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `namaPengguna`, `deskripsi`, `noHp`, `noLoker`, `waktu`, `waktuAmbil`, `biaya`, `lamaWaktu`) VALUES
('P1', 'Muhammad Hanifa Rasyid', 'Motor', '08978971678', 'L1', '11:27:03', '11:29:20', '0', 0),
('P2', 'Ari Saputra', 'Pacar', '-', 'L2', '11:29:48', '00:00:00', '', 0),
('P3', 'Aris Gunawan', 'Pacar', '-', 'L3', '11:30:25', '00:00:00', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `idPetugas` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`idPetugas`, `password`) VALUES
('Muhammad23', 'hanif');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
